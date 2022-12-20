<?php
use App\Constant;
?>
@extends('layouts.frontend')
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
@media (max-width: 767px){
    img {
        max-width: 350px;
    }
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