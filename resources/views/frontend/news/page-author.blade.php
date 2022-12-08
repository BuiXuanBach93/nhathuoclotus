<?php
use App\Constant;
?>
@extends('layouts.frontend')
@section('schema')
<script type="application/ld+json">
    {
        "@context": "http://schema.org/",
        "@type": "Person",
        "@id":"person",
        "name":"Nguyễn Hồng Mai",
        "image": "https://nhathuoclotus.com/images/duoc-si-nguyen-hong-mai.jpg",
        "jobTitle": "Consulting Doctor",
        "description":"Dược sĩ Nguyễn Hồng Mai với chuyên môn cao cùng kinh nghiệm dày dặn luôn sát cánh cùng quý khách hàng của Nhà Thuốc Lotus.",
        "sameAs": ["http://www.linkedin.com/in/dsnguyenhongmai", 
                  "https://www.pinterest.com/dsnguyenhongmai/", 
                  "https://vi.gravatar.com/dsnguyenhongmai", 
                  "https://www.instagram.com/dsnguyenhongmai/", 
                  "https://dsnguyenhongmai.tumblr.com/",
                  "https://twitter.com/dsnguyenhongmai"],
        "worksFor": {
          "@type": "Organization",
          "name": "Nhà Thuốc Lotus"
      }
    }
</script>
@endsection
@section('content')
<style type="text/css">
    h1, h2, h3, h4, h5, h6 {
    display: block;
    position: relative;
    font-family: Arial,Helvetica,sans-serif;
    color: #343a40;
    margin-bottom: 10px;
    margin-top: 10px;
}
</style>



<div class="tt-breadcrumb">
    <div class="container">
        <ul>
            <li><a href="/">Trang chủ</a></li>
            <li>
                <span>
                    {{$page['title']}}
                </span>
            </li>
        </ul>
    </div>
</div>
<div id="tt-pageContent">
	<div class="container-indent">
		<div class="container container-fluid-custom-mobile-padding">
			<h1 class="tt-title-subpages">{{$page['title']}}</h1>
			<div class="content">
				<?php echo $page['content']?>
			</div>
		</div>
	</div>
</div>
@endsection