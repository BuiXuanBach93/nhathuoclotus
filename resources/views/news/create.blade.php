@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Bài viết
        </h1>
    </section>
    <div class="content admin-product">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">

            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'admin.news.store', 'enctype'=> 'multipart/form-data']) !!}

                        @include('news.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript">
    function uploadImage(e) {
        window.KCFinder = {
           callBack: function(url) {window.KCFinder = null;
                var img = new Image();
                img.src = url;
                $(e).next().attr("src",url);
                $(e).next().next().val(url);
            }
        };
        window.open('/kcfinder/browse.php?type=images&dir=images/public',
            'kcfinder_image', 'status=0, toolbar=0, location=0, menubar=0, ' +
            'directories=0, resizable=1, scrollbars=0, width=800, height=600'
        );
    };
    function openKCFinder(e) {
        window.KCFinder = {
            callBackMultiple: function(files) {
                window.KCFinder = null;
                var urlFiles = "";
                $(e).next().empty();
                for (var i = 0; i < files.length; i++){
                    $(e).next().append('<img src="'+ files[i] +'" width="80" height="70" style="margin-left: 5px; margin-bottom: 5px;"/>');
                    urlFiles += files[i] ;
                    if (i < (files.length - 1)) {
                        urlFiles += ',';
                    }
                }

                $(e).next().next().val(urlFiles);
            }
        };
        window.open('/kcfinder/browse.php?type=images&dir=images/public',
            'kcfinder_multiple', 'status=0, toolbar=0, location=0, menubar=0, ' +
            'directories=0, resizable=1, scrollbars=0, width=800, height=600'
        );
    }
</script>
@endsection
