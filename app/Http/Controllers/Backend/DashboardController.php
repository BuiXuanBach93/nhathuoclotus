<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Notification;
use App\Models\Product;
use App\Models\News;
use Laracasts\Flash\Flash;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Order;
use App\Models\Contact;
use App\Models\CartItem;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;

class DashboardController extends Controller
{

    public function __construct($countNotifi = 12){
        try {
            $countNotification = new Notification();
            $countReport = $countNotification->countReport();
            $notifications = Notification::orderBy('id', 'desc')
                ->offset(0)->limit($countNotifi)->get();

        } catch (\Exception $e) {
            $countReport = 0;
            $notifications = array();
            $typeSubPostsAdmin = array();
        } finally {
            view()->share([
                'countRp'=>$countReport,
                'notifications'=>$notifications
            ]);
        }
    }

    public function index()
    {
        $today = date('Y-m-d',strtotime("today"));
        $countPost = News::count();
        $countProduct = Product::count();
        $user = Auth::user();
        if(User::isEditor($user->role)){
            $countPost = News::where('assignee_id',$user->id)->count();
            $countProduct = Product::where('assignee_id',$user->id)->count();
        }
        $countOrder = Order::count();
        $countOrderNotDone = Order::where('status','=',1)->count();
        $countOrderNotDelivery = Order::where('status','=',2)->where('is_delivery','=',0)->count();

        $countContact = Contact::where('type',0)->count();
        $countContactNotDone = Contact::whereNull('reply')->where('type',0)->count() + Contact::where('reply',0)->where('type',0)->count();

        $countRemarketing = Contact::where('type',1)->count();
        $countRemarketingNotDone = Contact::whereNull('reply')->where('type',1)->count() + Contact::where('reply',0)->where('type',1)->count();
        $countAdvisorContact = Contact::where('type',0)->count();
        $countAdvisorContactNotDone = Contact::whereNull('reply')->where('type',0)->count();

        $countCartItem = CartItem::where('created_at','>=',$today)->count();
        $countOrderToday = Order::where('created_at','>=',$today)->count();


        $orders = Order::
            select(
                DB::raw('SUM(total_price) as total_sum'),
                DB::raw('YEAR (created_at) as year'),
                DB::raw('QUARTER(created_at) as quarter'))
            ->where('status', '<>', 0)
            ->where('status', '<>', 5)
            ->groupBy (
                DB::raw('YEAR (created_at)'),
                DB::raw('QUARTER(created_at)')
                )
            ->get();

        $fromDate = date('Y-m-d',strtotime('-30 days'));

                $revenueDaily = DB::select('SELECT sum(total_price) as total_price,  DATE(created_at) as day_line 
                    FROM orders where status <> 0 and status <> 5 and deleted_at is null and created_at > :created_from 
        group by day_line 
        order by day_line asc',['created_from'=>$fromDate]);  

        $originDaily = DB::select('SELECT SUM(quantity*origin_price) as origin_price, DATE(od.created_at) as origin_day_line FROM order_items it 
        LEFT JOIN orders od ON it.order_id = od.id 
        WHERE od.status <> 0 AND od.status <> 5 AND od.deleted_at is null AND it.deleted_at is null  AND od.created_at > :created_from
        GROUP BY origin_day_line',['created_from'=>$fromDate]);  

        $shipDaily = DB::select('SELECT  SUM(od.cost_ship) as cost_ship, DATE(od.created_at) as ship_day_line
        FROM orders od WHERE od.deleted_at is null and od.status <> 0 and od.created_at > :created_from
        GROUP BY ship_day_line',['created_from'=>$fromDate]);    


        foreach ($revenueDaily as $item) {
                    $item->real_price = $item->total_price;
                    $item->origin_price = 0;
                    $item->cost_ship = 0;
                     foreach ($originDaily as $origin) {
                        if($origin->origin_day_line == $item->day_line){
                            $item->real_price = $item->real_price - $origin->origin_price;
                            $item->origin_price = $origin->origin_price;
                            break;
                        }

                     }  
                     foreach ($shipDaily as $ship) {
                        if($ship->ship_day_line == $item->day_line){
                            $item->real_price = $item->real_price - $ship->cost_ship;
                            $item->cost_ship = $ship->cost_ship;
                            break;
                        }

                    }
                }

        // monthly

        $fromMonth = date("Y-m-01", strtotime("-8 months"));

        $revenueMonthly = DB::select('SELECT sum(total_price) as total_price,  MONTH(created_at) as day_line, YEAR(created_at) as day_line_year 
                    FROM orders where status <> 0 and status <> 5 and deleted_at is null and created_at >= :created_from 
        group by day_line, day_line_year 
        order by day_line_year, day_line asc',['created_from'=>$fromMonth]);  

        $originMonthly = DB::select('SELECT SUM(quantity*origin_price) as origin_price, MONTH(od.created_at) as origin_day_line FROM order_items it 
        LEFT JOIN orders od ON it.order_id = od.id 
        WHERE od.status <> 0 AND od.status <> 5 AND od.deleted_at is null AND it.deleted_at is null  AND od.created_at >= :created_from
        GROUP BY origin_day_line',['created_from'=>$fromMonth]);  

        $shipMonthly = DB::select('SELECT  SUM(od.cost_ship) as cost_ship, MONTH(od.created_at) as ship_day_line
        FROM orders od WHERE od.deleted_at is null and od.status <> 0 and od.created_at >= :created_from
        GROUP BY ship_day_line',['created_from'=>$fromMonth]);    


        foreach ($revenueMonthly as $item) {
            $item->real_price = $item->total_price;
            $item->origin_price = 0;
            $item->cost_ship = 0;
             foreach ($originMonthly as $origin) {
                if($origin->origin_day_line == $item->day_line){
                    $item->real_price = $item->real_price - $origin->origin_price;
                    $item->origin_price = $origin->origin_price;
                    break;
                }

             }  
             foreach ($shipMonthly as $ship) {
                if($ship->ship_day_line == $item->day_line){
                    $item->real_price = $item->real_price - $ship->cost_ship;
                    $item->cost_ship = $ship->cost_ship;
                    break;
                }

            }
        }        


        return View('pages.dashboard.index', compact(
            'countPost',
            'countProduct',
            'countOrder',
            'countOrderNotDone',
            'countOrderNotDelivery',
            'countContact',
            'countCartItem',
            'countOrderToday',
            'countContactNotDone',
            'countAdvisorContact',
            'countAdvisorContactNotDone',
            'countRemarketing',
            'countRemarketingNotDone',
            'orders',
            'revenueDaily',
            'revenueMonthly'
        ));
    }

    public function seenNotification() {
        try {
            $notification = new Notification();
            $notification->where('status',0)->update([
                'status' => 1
            ]);
        } catch (\Exception $e) {

        } finally {
            return response([
                'status' => 200,
            ])->header('Content-Type', 'text/plain');
        }

    }

    public function readNotification(Request $request){
        try {
            // lấy ra id truyền lên
            $id = $request->input('id');
            // đổi trạng thái id tương ứng là đã đọc
            $notifications = new Notification();
            $notifications->where('notify_id', $id)
                ->update(['status' => 2]);
        } catch (\Exception $e) {
        } finally {
            // tra ve ket qua
            return response([
                'status' => 200,
            ])->header('Content-Type', 'text/plain');
        }
    }

    public function siteMap($updateProduct = False, $updateNews = False)
    {
        # Update product site map
        if ($updateProduct) {
            $productModel = new Product();
            $products = $productModel->getNewest([], 10000)->get();

            $html = view('products.sitemap', [
                'products'      => $products
            ])->render();

            $fp = fopen(public_path() . '/sitemaps/products.xml', 'w');
            fwrite($fp, $html);
            fclose($fp);

            # Product categories
            $productCates = Category::where('status', 1)->orderBy('id', 'DESC')->get();

            $html = view('categories.sitemap', [
                'cates'      => $productCates
            ])->render();

            $fp = fopen(public_path() . '/sitemaps/product_categories.xml', 'w');
            fwrite($fp, $html);
            fclose($fp);
        }

        # Update news sitemap
        if ($updateNews) {
            # Update site map
            $newses = News::where('status', 1)->whereNull('canonical')->orderBy('id', 'DESC')->get();

            $html = view('news.sitemap', [
                'newses'      => $newses
            ])->render();

            $fp = fopen(public_path() . '/sitemaps/news.xml', 'w');
            fwrite($fp, $html);
            fclose($fp);
        }

        # Update sitemap
        $html = view('pages.dashboard.sitemap', [
            'updateProduct' => $updateProduct,
            'updateNews'    => $updateNews
        ])->render();

        $fp = fopen(public_path() . '/sitemap.xml', 'w');
        fwrite($fp, $html);
        fclose($fp);
    }

    public function uploadImage(Request $request)
    {
        if ($request->isMethod('post')) {
            if ($request->hasFile('image')) {
                $fileName = request()->file('image')->getClientOriginalName();
                #check exist file name
                $exist = Product::where('thumbnail', $fileName)->orWhere('thumbnail_home', $fileName)->exists();
                if ($exist) {
                    $request->session()->flash('danger', 'This file name has been existed in Database');
                    return redirect('/admin/upload-image');
                }

                $fileUploaded = uploadImage(request()->file('image'));

                if (!$fileUploaded) {
                    $request->session()->flash('danger', 'This file name has been existed in GCP');
                    return redirect('/admin/upload-image');
                }
                $strImgs = "<p>https://nhathuoclotus.com/images/images/original/$fileUploaded</p>";
                $strImgs .= "<p>https://nhathuoclotus.com/images/images/600/$fileUploaded</p>";
                $strImgs .= "<p>https://nhathuoclotus.com/images/images/400/$fileUploaded</p>";
                $strImgs .= "<p>https://nhathuoclotus.com/images/images/200/$fileUploaded</p>";
                $strImgs .= "<p>https://nhathuoclotus.com/images/images/100/$fileUploaded</p>";
                $request->session()->flash('success', "Upload success:</br> $strImgs");
                return redirect('/admin/upload-image');
            }
        }
        return view('admin.upload');
    }
}
