<?php
use App\Constant;
$isMobile = isMobile();

?>
<!DOCTYPE html>
<html lang="vi">
<head>
    {{-- <link rel="dns-prefetch" href="https://www.google-analytics.com"> --}}
    <link rel="prefetch" href="{{ asset('/images/icon-transfer.png') }}">
    <link rel="prefetch" href="{{ asset('/images/icon-guarantee.png') }}">
    <link rel="prefetch" href="{{ asset('/images/back-money-icon.png') }}">
    <meta charset="UTF-8" />
    <title><?php echo isset($pageTitle) ? $pageTitle : Constant::PAGE_TITLE?></title>
    <meta name="keywords" content="<?php echo isset($pageKeyword) ? $pageKeyword : Constant::PAGE_KEYWORD?>" />
    <meta name="description" content="<?php echo isset($pageDesc) ? $pageDesc : Constant::PAGE_DESC?>" />
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=5" /> -->
    <meta name='viewport' content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' >
    <link rel="canonical" href="{{getCanonical()}}" />
    <link rel="icon" type="image/png" href="{{ asset('/images/favicon.png') }}"/>
    <link rel="preload" href="{{asset('/fonts/wokiee.ttf?g7nf10')}}" as="font" crossorigin=anonymous />
    {{-- <link rel="stylesheet preload" type="text/css" href="{{ asset('/css/mobile.css') }}" /> --}}
    <link rel="stylesheet preload" type="text/css" href="{{ asset('/css/theme.css') }}"/>
    <meta name="robots" content="index, follow">
    <meta property="og:url" content="{{url()->current()}}" />
    <meta property="og:title" content="<?php echo isset($pageTitle) ? $pageTitle : Constant::PAGE_TITLE?>" />
    <meta property="og:description" content="<?php echo isset($pageDesc) ? $pageDesc : Constant::PAGE_DESC?>" />
    <meta property="og:image" content="<?php echo isset($pageImage) ? $pageImage : Constant::PAGE_IMAGE?>" />
    <meta property="og:type" content="website" />
    <meta property="og:locale" content="vi_VN" />
    <style>
        article, aside, dialog, figcaption, figure, footer, header, hgroup, main, nav, section {display: block; }
        @-ms-viewport {width: device-width; }
        *, *::before, *::after {
            box-sizing: border-box; }

        html {
            /* font-family: sans-serif; */
            font-family: Arial, Helvetica, sans-serif;
            line-height: 1.15;
            -webkit-text-size-adjust: 100%;
            -ms-text-size-adjust: 100%;
            -ms-overflow-style: scrollbar;
            -webkit-tap-highlight-color: rgba(0, 0, 0, 0); }
        body {
            font-family: Arial, Helvetica, sans-serif;
            font-size: 15px;
            line-height: 22px;
            font-weight: 300;
            color: #666666;
            background: #ffffff;
            margin: 0;
            overflow-x: hidden !important;
            direction: ltr;
            background-position: center 0px;
            background-repeat: no-repeat;
        }
        .container {
            width: 100%;
            padding-right: 10px;
            padding-left: 10px;
            margin-right: auto;
            margin-left: auto; 
        }
        @media (min-width: 576px) {
            .container {
            max-width: 546px; } }
        @media (min-width: 791px) {
            .container {
            max-width: 770px; } }
        @media (min-width: 1025px) {
            .container {
            max-width: 990px; } }
        @media (min-width: 1230px) {
            .container {
            max-width: 1200px; } }

    </style>
    @yield('style')

    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "MedicalBusiness",
        "name": "Nh?? Thu???c Lotus",
        "image": "https://nhathuoclotus.com/images/logo_nhathuoclotus.png",
        "@id": "https://nhathuoclotus.com#MedicalBusiness",
        "url": "https://nhathuoclotus.com",
        "telephone": "+84376668305",
        "priceRange": "500",
        "address": {
          "@type": "PostalAddress",
          "streetAddress": "T??a V8 The Vesta, Ph?? L??m, H?? ????ng, H?? N???i",
          "addressLocality": "TP. H?? N???i",
          "postalCode": "100000",
          "addressCountry": "VN"
        },
        "geo": {
          "@type": "GeoCoordinates",
          "latitude": 20.945393,
          "longitude": 105.755947
        },
        "openingHoursSpecification": {
          "@type": "OpeningHoursSpecification",
          "dayOfWeek": [
            "Monday",
            "Tuesday",
            "Wednesday",
            "Thursday",
            "Friday",
            "Saturday",
            "Sunday"
          ],
          "opens": "08:00",
          "closes": "22:00"
        },
        "sameAs": [
            "https://www.facebook.com/nhathuoclotus.com",
            "https://www.instagram.com/nhathuoclotus",
            "https://twitter.com/thanhbinhpharma",
            "https://nhathuoclotus.tumblr.com",
            "https://nhathuoclotus.business.site",
            "https://www.pinterest.com/nhathuoclotus",
            "https://www.linkedin.com/in/nhathuoclotus"
        ]
    }
    </script>
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type":"Organization",
        "@id":"https://nhathuoclotus.com/#organization",
        "name":"Nh?? Thu???c Lotus",
        "url": "https://nhathuoclotus.com/",
        "sameAs":[

        ],
        "logo":{
           "@type":"ImageObject",
           "@id":"https://nhathuoclotus.com/#logo",
           "inLanguage":"vi-VN",
           "url":"https://nhathuoclotus.com/images/logo_nhathuoclotus.png",
           "width":230,
           "height":50,
           "caption":"Nh?? Thu???c Lotus"
        },
        "image":{
           "@id":"https://nhathuoclotus.com/#logo"
        }
     }
    </script>
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type":"WebSite",
        "@id":"https://nhathuoclotus.com/#website",
        "url": "https://nhathuoclotus.com/",
        "name":"Nh?? Thu???c Lotus",
        "description":"{{Constant::PAGE_DESC}}",
        "publisher":{
            "@id":"https://nhathuoclotus.com/#organization"
        },
        "potentialAction":[
            {
                "@type":"SearchAction",
                "target":"https://nhathuoclotus.com/tim-kiem?keyword={search_term_string}",
                "query-input":"required name=search_term_string"
            }
        ],
        "inLanguage":"vi-VN"
    }
    </script>
    @yield('schema')
    @extends('layouts.ga')
</head>
<style type="text/css">
.tt-logo img {
    height: auto;
    max-height: 70px;
}
.SearchBox_search-box__3GjN6 {
    display: -moz-box;
    display: flex;
    -moz-box-align: center;
    align-items: center;
    height: 45px;
    background-color: #fff;
    padding: 0 10px;
    border-radius: .75rem;
    box-shadow: 0 0 12px rgb(15 61 145 / 12%);
}
.SearchBox_search-box__3GjN6 input {
    border: unset;
    width: 100%;
    outline: none;
    padding: 5px 10px;
    font-size: .938rem;
}
.SearchBox_search-box__3GjN6 .SearchBox_content__2K_mw, .SearchBox_search-box__3GjN6 .SearchBox_content__2K_mw .SearchBox_search-icon__2TMqQ {
    height: 20px;
}
.SearchBox_search-box__3GjN6 .SearchBox_content__2K_mw .SearchBox_search-icon__2TMqQ {
    height: 20px;
}
.tt-header-holder .tt-obj-logo+.tt-obj-search-type2 {
    width: 55%;
}
</style>
<body>

    <header>
        @if (!$isMobile)
            <div id="fb-third-party"></div>
        <!-- tt-desktop-header -->
        <div class="tt-desktop-header headerunderline">
            <div class="container">
                <div class="tt-header-holder">
                    <div class="tt-col-obj tt-obj-logo tt-obj-menu-categories tt-desctop-parent-menu-categories">
                        <a class="tt-logo tt-logo-alignment tt-menu-categories" title="Trang ch??? nhathuoclotus.com" href="/">
                            <img src="/images/logo_nhathuoclotus.png" alt="Logo nhathuoclotus.com">
                        </a>
                    </div>
                    <div class="tt-col-obj tt-obj-search-type2">
                        <div class="tt-search-type2">
                             <!-- tt-search -->
                           <!--  <form action="/tim-kiem" method="get" role="search">
                                <i class="icon-f-85"></i>
                                <label for="desktop-search-btn" class="hide">search</label>
                                <input id='desktop-search-btn' class="tt-search-input" name="keyword" type="search" placeholder="S???n ph???m b???n c???n t??m ..." aria-label="S???n ph???m b???n c???n t??m ..." autocomplete="off">
                                <button type="submit" class="tt-btn-search">T??M KI???M</button>
                            </form> -->
                            <form action="/tim-kiem" method="get" role="search">
                                <div class="SearchBox_search-box__3GjN6"><input id='desktop-search-btn' name="keyword" type="search" placeholder="B???n ??ang t??m g?? h??m nay..." value=""><div class="SearchBox_content__2K_mw"><img class="SearchBox_search-icon__2TMqQ" src="/images/search.svg" alt="search-icon"></div></div>
                            </form>
                            <!-- /tt-search -->
                        </div>
                    </div>
                    <div class="tt-col-obj obj-move-right">
                        <div class="header-tel-info">
                            <i class="icon-f-93"></i> <a href="tel:{{Constant::PHONE_NUMBER}}">{{Constant::PHONE_NUMBER_DISPLAY}}</a>
                            <p class="open-hour"> <i class="icon-h-31"></i> Gi??? l??m: 24/24h (T2 - CN)</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="container small-header">
                    <div class="tt-header-holder">
                        <div class="tt-col-obj tt-obj-menu">
                            <!-- tt-menu -->
                            <div class="tt-desctop-parent-menu tt-parent-box">
                                <div class="tt-desctop-menu">
                                    <nav>
                                        <ul>
                                            @foreach ($menuCategories as $category)
                                            <li class="dropdown megamenu">
                                                <a href="{{genCateLink($category['slug'])}}" class="products text-uppercase"><i class="icon-h-27"></i>{{$category['title']}} </a>
                                                <div class="dropdown-menu">
                                                    <div class="row tt-col-list">
                                                        <div class="col">
                                                            <ul class="tt-megamenu-submenu">
                                                                @foreach ($category['children'] as $child)
                                                                <li>
                                                                    <a href="{{genCateLink($child['slug'])}}">
                                                                        <strong>{{$child['title']}}</strong>
                                                                    </a>
                                                                </li>
                                                                @endforeach
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            @endforeach
                                            <li class="dropdown tt-megamenu-col-01">
                                                <a href="/tin-tuc">S???C KH???E</a>
                                            </li>
                                            <li class="dropdown tt-megamenu-col-01">
                                                <a href="/lien-he">LI??N H??? </a>
                                            </li>
                                            <li class="dropdown tt-megamenu-col-01">
                                                <a href="faq">GI???I ????P</a>
                                            </li>
                                            <li class="dropdown tt-megamenu-col-01">
                                                <a href="gioi-thieu">V??? CH??NG T??I</a>
                                            </li>
                                             <li class="dropdown tt-megamenu-col-01">
                                                <a href="nguyen-hong-mai">D?????C S??</a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            <!-- /tt-menu -->
                        </div>
                        <div class="tt-col-obj tt-obj-options obj-move-right">
                            <!-- tt-cart -->
                            <div class="tt-desctop-parent-cart tt-parent-box">
                                <div class="tt-cart tt-dropdown-obj">
                                    <?php $countOrder = \App\Models\Order::countOrder();?>
                                    <button class="tt-dropdown-toggle">
                                        <i class="icon-f-47"></i>
                                        <span class="tt-badge-cart">{{$countOrder}}</span>
                                    </button>
                                    <div class="tt-dropdown-menu active">
                                        <div class="tt-mobile-add">
                                            <h6 class="tt-title">GI??? H??NG</h6>
                                            <button class="tt-close">????ng</button>
                                        </div>
                                        <div class="tt-dropdown-inner">
                                            <div class="tt-cart-layout">
                                                @if ($countOrder <= 0)
                                                <a href="" class="tt-cart-empty">
                                                    <i class="icon-f-39"></i>
                                                    <p>Kh??ng c?? s???n ph???m n??o trong gi??? h??ng c???a b???n.</p>
                                                </a>     
                                                @else
                                                <div class="tt-cart-content">
                                                    <div class="tt-cart-btn">
                                                        <div class="tt-item">
                                                            <a href="/gio-hang" class="btn">XEM GI??? H??NG</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /tt-cart -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @else
        <!-- tt-search -->
        <div class="tt-desctop-parent-search tt-parent-box tt-obj-desktop-hidden">
            <div class="tt-search tt-dropdown-obj">
                <button class="tt-dropdown-toggle" data-tooltip="t??m ki???m" aria-label="t??m ki???m" value="t??m ki???m" data-tposition="bottom">
                    <i class="icon-f-85"></i>
                </button>
                <div class="tt-dropdown-menu">
                    <div class="container">
                        <form action="/tim-kiem" method="get">
                            <div class="tt-col">
                                <label for="mobile-search-btn" class="hide">T??m ki???m</label>
                                <input id='mobile-search-btn' aria-label="t??m ki???m" name="keyword" type="text" class="tt-search-input" placeholder="S???n ph???m b???n c???n t??m...">
                                <button class="tt-btn-search" aria-label="t??m ki???m" value="t??m ki???m" type="submit"></button>
                            </div>
                            <div class="tt-col">
                                <button class="tt-btn-close icon-g-80" aria-label="????ng"></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- /tt-search -->
        <!-- tt-cart -->
        <div class="tt-desctop-parent-cart tt-parent-box">
            <div class="tt-cart tt-dropdown-obj">
                <?php $countOrder = \App\Models\Order::countOrder();?>
                <button class="tt-dropdown-toggle">
                    <i class="icon-f-47"></i>
                    <span class="tt-badge-cart">{{$countOrder}}</span>
                </button>
                <div class="tt-dropdown-menu active">
                    <div class="tt-mobile-add">
                        <h6 class="tt-title">GI??? H??NG</h6>
                        <button class="tt-close">????ng</button>
                    </div>
                    <div class="tt-dropdown-inner">
                        <div class="tt-cart-layout">
                            @if ($countOrder <= 0)
                            <a href="" class="tt-cart-empty">
                                <i class="icon-f-39"></i>
                                <p>Kh??ng c?? s???n ph???m n??o trong gi??? h??ng c???a b???n.</p>
                            </a>     
                            @else
                            <div class="tt-cart-content">
                                <div class="tt-cart-btn">
                                    <div class="tt-item">
                                        <a href="/gio-hang" class="btn">XEM GI??? H??NG</a>
                                    </div>
                                </div>
                            </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /tt-cart -->
        <!-- tt-mobile menu -->
        <nav class="panel-menu mobile-main-menu">
            <ul>
                <li>
                    <a href="/">TRANG CH???</a>
                </li>
                <li>
                    <a href="#">S???N PH???M</a>
                    <ul>
                        @foreach ($menuCategories as $category)
                        <li>
                            <a href="{{genCateLink($category['slug'])}}">
                                {{$category['title']}}
                            </a>
                            <ul>
                                @foreach ($category['children'] as $child)
                                <li>
                                    <a href="{{genCateLink($child['slug'])}}">
                                    {{$child['title']}}
                                    </a>
                                </li>
                                @endforeach
                            </ul>
                        </li>
                        @endforeach
                    </ul>
                </li>
                <li>
                    <a href="/tin-tuc">TIN T???C</a>
                </li>
                <li>
                    <a href="/lien-he">LI??N H???</a>
                </li>
                <li>
                    <a href="/faq">GI???I ????P</a>
                </li>
                <li>
                    <a href="/gioi-thieu">V??? CH??NG T??I</a>
                </li>
                <li>
                    <a href="/nguyen-hong-mai">D?????C S??</a>
                </li>
            </ul>
            <div class="mm-navbtn-names">
                <div class="mm-closebtn">????ng</div>
                <div class="mm-backbtn">Quay l???i</div>
            </div>
        </nav>
        <!-- tt-mobile-header -->
        <div class="tt-mobile-header">
            <div class="container-fluid">
                <div class="header-tel-info">
                    <i class="icon-f-93"></i> <a href="tel:{{Constant::PHONE_NUMBER}}">{{Constant::PHONE_NUMBER_DISPLAY}}</a>
                </div>
            </div>
            <div class="container-fluid tt-top-line">
                <div class="tt-header-row">
                    <div class="tt-mobile-parent-menu">
                        <div class="tt-menu-toggle stylization-02">
                            <i class="icon-03"></i>
                        </div>
                    </div>
                    <!-- search -->
<!--                     <div  class="tt-mobile-parent-search tt-parent-box"></div> -->
                    <!-- /search -->
                    <!-- cart -->
                    <div class="tt-mobile-parent-cart tt-parent-box"></div>
                    <!-- /cart -->
                </div>
            </div>
            <div class="container-fluid tt-top-line">
                <div class="row">
                    <div class="tt-logo-container">
                        <!-- mobile logo -->
                        <a style="margin-bottom: 25px;" class="tt-logo tt-logo-alignment" href="/">
                            <img src="/images/logo_nhathuoclotus.png" data-src="/images/logo_nhathuoclotus.png" alt="Logo nhathuoclotus.com">
                        </a>
                        <!-- /mobile logo -->
                    </div>
                </div>
            </div>
             <div class="container-fluid">
                <div class="tt-header-row">
                    
                   <div class="tt-col-obj tt-obj-search-type2"  style="width: 100%; margin-bottom: 10px;">
                        <div class="tt-search-type2">
                             <!-- tt-search -->
                            <form action="/tim-kiem" method="get" role="search">
                                <div class="SearchBox_search-box__3GjN6"><input id='desktop-search-btn' name="keyword" type="search" placeholder="B???n ??ang t??m g?? h??m nay..." value=""><div class="SearchBox_content__2K_mw"><img class="SearchBox_search-icon__2TMqQ" src="/images/search.svg" alt="search-icon"></div></div>
                            </form>
                            <!-- /tt-search -->
                        </div>
                    </div>
                   
                </div>
            </div>
        </div>
        @endif
        <div class="tt-stuck-nav" style="padding: 5px;">
            <div class="container">
                <div class="tt-header-row ">
                    <div class="tt-stuck-desctop-menu-categories"></div>
                    <div class="tt-stuck-parent-menu"></div>
                    <div class="tt-stuck-mobile-menu-categories"></div>
                    <div class="tt-stuck-parent-search tt-parent-box"></div>
                    <div class="tt-stuck-parent-cart tt-parent-box"></div>
                </div>
            </div>
        </div>
    </header>
    @yield('content')
    <footer>
        <div class="tt-footer-default tt-color-scheme-02">
            <div class="container text-center">
                <div class="row">
                    <div class="col-12 col-md-9">
                        <div class="tt-newsletter-layout-01">
                            <div class="tt-newsletter">
                                <div class="tt-mobile-collapse">
                                    <h4 class="tt-collapse-title">
                                        ????NG K?? NH???N KHUY???N M??I:
                                    </h4>
                                    <div class="tt-collapse-content">
                                        <form id="newsletterform" class="form-inline form-default" method="post" novalidate="novalidate" action="/">
                                            <div class="form-group">
                                                <input type="text" name="email" class="form-control" placeholder="E-mail c???a b???n">
                                                <button type="button" class="btn">????NG K??</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tt-footer-col tt-color-scheme-01">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-lg-4 col-xl-3">
                        <div class="tt-mobile-collapse">
                            <h4 class="tt-collapse-title">
                                V??? NH?? THU???C LOTUS
                            </h4>
                            <div class="tt-collapse-content">
                                <p>
                                    ?????i ng?? d?????c s?? v???i chuy??n m??n cao lu??n d???c l??ng v?? s???c kh???e c???ng ?????ng. T?? v???n t???n t??m, s???n ph???m th???t, gi?? t???t nh???t.
                                </p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-6 col-lg-2 col-xl-3">
                        <div class="tt-mobile-collapse">
                            <h4 class="tt-collapse-title">
                                CH??NH S??CH & H??? TR???
                            </h4>
                            <div class="tt-collapse-content">
                                <ul class="tt-list">
                                    <li><a href="/chinh-sach-doi-tra">Ch??nh s??ch ?????i tr???</a></li>
                                    <li><a href="/chinh-sach-van-chuyen">Ch??nh s??ch v???n chuy???n</a></li>
                                    <li><a href="/hinh-thuc-thanh-toan">H??nh th???c thanh to??n</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-2 col-xl-3">
                        <div class="tt-mobile-collapse">
                            <h4 class="tt-collapse-title">
                                V??? CH??NG T??I
                            </h4>
                            <div class="tt-collapse-content">
                                <ul class="tt-list">
                                    <li><a href="/gioi-thieu">Gi???i thi???u </a></li>
                                    <li><a href="/lien-he">Li??n h???</a></li>
                                    <li><a href="/faq">C??u h???i th?????ng g???p</a></li>
                                    <li><a href="/chinh-sach-bao-mat">Ch??nh s??ch b???o m???t</a></li>
                                    <li><a href="/quy-dinh-su-dung">Quy ?????nh s??? d???ng</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3">
                        <div class="tt-newsletter">
                            <div class="tt-mobile-collapse">
                                <h4 class="tt-collapse-title">
                                    LI??N H???
                                </h4>
                                <div class="tt-collapse-content">
                                    <address>
                                        <p><span>?????a ch???: </span>{{Constant::OFFICE_ADDRESS}}</p>
                                        <p><span>Phone: </span> 
                                            <a href="tel:{{Constant::PHONE_NUMBER}}">{{Constant::PHONE_NUMBER_DISPLAY}}</a>
                                        </p>
                                        <p><span>Gi??? l??m vi???c: </span> 24/24h (T2 - CN)</p>
                                        <p><span>E-mail: </span> <a href="mailto:{{Constant::EMAIL}}">{{Constant::EMAIL}}</a></p>
                                    </address>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tt-footer-custom">
            <div class="container">
                <div class="tt-row">
                    <div class="tt-col-left">
                        <div class="tt-col-item">
                            <div class="tt-box-copyright">Copyright ??2021 - B???n quy???n thu???c v??? Nh?? Thu???c Lotus</div>
                        </div>
                        <div class="dmca">
                            <!-- <a rel="nofollow" href="//www.dmca.com/Protection/Status.aspx?ID=56645cc5-d322-4949-8b21-5b995fe20803" title="DMCA.com Protection Status" class="dmca-badge"> <img src="{{ asset('/images/loader.svg') }}"  data-src ="https://images.dmca.com/Badges/dmca-badge-w150-5x1-01.png?ID=56645cc5-d322-4949-8b21-5b995fe20803"  alt="DMCA.com Protection Status" /></a>  <script defer src="https://images.dmca.com/Badges/DMCABadgeHelper.min.js"> </script> -->
                        </div>
                    </div>
                    <div class="tt-col-right">
                        <div class="tt-col-item">
                            <!-- payment-list -->
                            <ul class="tt-payment-list">
                                <li><div><span class="icon-paypal-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span><span class="path6"></span></span></div></li>
                                <li><div><span class="icon-visa"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span></span></div></li>
                                <li><div><span class="icon-mastercard"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span><span class="path6"></span><span class="path7"></span><span class="path8"></span><span class="path9"></span><span class="path10"></span><span class="path11"></span><span class="path12"></span><span class="path13"></span></span></div></li>
                                <li><div><span class="icon-discover"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span><span class="path6"></span><span class="path7"></span><span class="path8"></span><span class="path9"></span><span class="path10"></span><span class="path11"></span><span class="path12"></span><span class="path13"></span><span class="path14"></span><span class="path15"></span><span class="path16"></span></span></div></li>
                                <li><div><span class="icon-american-express"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span><span class="path6"></span><span class="path7"></span><span class="path8"></span><span class="path9"></span><span class="path10"></span><span class="path11"></span></span></div></li>
                            </ul>
                            <!-- /payment-list -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    @if($isMobile == 1) <!--is mobile-->
        @include('layouts.contact')
    @else
        <div id="fb-root"></div>    
    @endif
    <script defer src="{{ asset('js/jquery/jquery.min.js') }}"></script>
    <script defer src="{{ asset('js/slick/slick.min.js') }}"></script>
    <script defer src="{{ asset('js/panelmenu/panelmenu.js') }}"></script>
    <script defer src="{{ asset('js/lazyLoad/lazyload.min.js') }}"></script>
    <script defer src="{{ asset('js/main.js') }}"></script>
    <script defer src="{{ asset('js/app.js') }}"></script>
</body>
</html>
