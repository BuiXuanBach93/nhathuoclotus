<?php 
use App\Constant;
$numberRating = count($ratings);
$score = $numberRating ? coverageRatingScore($ratings): 5;
$maxRating = maxRatingScore($ratings) ? maxRatingScore($ratings): 5;
$numberRating = $numberRating ? $numberRating: 1;
$isMobile = isMobile();
?>
@extends('layouts.frontend')
@section('style')
<style>

.ins-pos-middle-center {
    top: 60%;
    margin-left: 160px;
    -webkit-transform: translate(-50%,-50%);
    -ms-transform: translate(-50%,-50%);
    transform: translate(-50%,-50%);
    position: fixed;
    z-index: 2147483647;
}

.ins-preview-wrapper-848 #ins-email-collection-adaptive {
    float: left;
    width: 288px;
}

.ins-content-wrapper *, .ins-preview-wrapper * {
    box-sizing: border-box;
}

.ins-preview-wrapper a, .ins-preview-wrapper div, .ins-preview-wrapper i, .ins-preview-wrapper img, .ins-preview-wrapper p, .ins-preview-wrapper span {
    border-radius: initial!important;
}

.ins-preview-wrapper-848 .ins-adaptive-title, .ins-preview-wrapper-848 .ins-adaptive-description, .ins-preview-wrapper-848 .ins-adaptive-question, .ins-preview-wrapper-848 .ins-adaptive-button {
    margin: auto;
    margin-top: 10px;
    color: #FFFFFF;
}

.ins-dynamic-input-reference .ins-selectable-element {
    position: relative;
}

.ins-preview-wrapper-848 #ins-question-group-form input {
    outline: none;
    color: #333;
}

.ins-preview-wrapper-848 .ins-adaptive-email input {
    background-color: #ffffff;
    width: 100%;
    height: 45px;
    margin: 0;
    border: 1px solid #d4d6d4;
    font-size: 16px;
    color: #c5c5c5;
    padding: 0 15px;
    box-sizing: border-box;
    border-radius: 3px;
    outline: none;
    display: block;
}

.ins-element-content input.ins-dynamic-input {
    text-align: left;
}

.ins-preview-wrapper div {
    display: block;
    font-style: inherit;
    text-align: inherit;
}

#ins-frameless-overlay {
    position: fixed;
    z-index: 2147483646;
    width: 100%;
    height: 100%;
    background-color: #000;
    opacity: .6;
    top: 0;
    left: 0;
    cursor: pointer;
}

.ins-preview-wrapper-848 .ins-notification-content {
    width: 288px !important;
    display: inline-block !important;
    height: auto !important;
    margin: 10px;
    max-width: 100%;
}

.ins-content-wrapper .ins-notification-content, .ins-preview-wrapper .ins-notification-content {
    background-size: 100% 100%;
    letter-spacing: normal!important;
}

.ins-preview-wrapper-848 #ins-email-collection-adaptive {
    float: left;
    width: 288px;
}

.ins-preview-wrapper-848 .ins-slider {
    width: 100%;
    overflow: hidden;
}

.ins-preview-wrapper-848 .ins-slider-padding {
    padding: 10px;
}

.ins-preview-wrapper-848 .ins-slider-page.ins-active-slide {
    float: left;
    visibility: visible;
}

.ins-preview-wrapper-848 .ins-slider-container {
    overflow: hidden;
    transform: translate3d(0,0,0);
    display: flex !important;
    align-items: center !important;
    justify-content: center !important;
    -webkit-transition: transform 0.5s ease;
    -moz-transition: transform 0.5s ease-in;
    -ms-transition: transform 0.5s ease-in;
    -o-transition: transform 0.5s ease-in;
    transition: transform 0.5s ease-in;
    width: 576px !important;
}

.ins-preview-wrapper-848 .ins-element-content {
    outline: none;
    width: 100%;
    text-align: center;
}

.ins-preview-wrapper-848 .ins-notification-content a {
    color: inherit !important;
}

.ins-preview-wrapper-848 .ins-element-link {
    width: 100%;
    height: 100%;
    color: inherit;
}

.ins-preview-wrapper-848 .ins-element-close-button {
    display: block !important;
    top: 10px;
    right: 16px;
    font-size: 28px;
    color: #333;
    position: absolute;
    z-index: 1;
}

.ins-preview-wrapper-848 .ins-close-button-icon:before {
    content: "\00d7";
    color: inherit;
    cursor: pointer;
    font-size: inherit;
    font-family: Arial,sans-serif;
    line-height: 1;
}


.ins-preview-wrapper-848 .ins-adaptive-button .ins-element-content {
    width: 130px;
    padding: 8px;
    margin: 0 auto;
    opacity: 1;
    background-color: #17b978 !important;
    border-radius: 25px !important;
    font-size: 16px;
}

img {
    vertical-align: middle;
    border-style: none;
}
.single-post-meta {
    border-radius: 3px;
    margin-top: 30px;
    margin-bottom: 30px;
    margin-right: 0;
    margin-left: 0;
}
.single-post-meta .col-md-6 {
    display: flex;
    align-items: center;
    padding-top: 10px;
    padding-bottom: 10px;
}
@media (min-width: 575px){
  .single-post-meta .ml-auto {
      margin-top: 0;
      justify-content: flex-end;
      border: none;
  }
}

.single-post-meta .ml-auto {
    margin-top: 5px;
    border-top: 1px solid #ddd;
    padding-top: 10px;
}
o
.single-post-meta .avartar {
    display: block;
    width: 35px;
    height: 35px;
    border-radius: 35px;
    overflow: hidden;
}
.single-post-meta .author {
    margin-left: 10px;
    font-size: 12px;
    color: #888;
    font-style: italic;
}
.single-post-meta .author-link {
    color: #3e3e47;
    font-weight: 700;
    display: block;
    margin-left: 10px;
    margin-top: -5px;
}
.single-post-meta .ml-auto {
    margin-top: 5px;
    border-top: 1px solid #ddd;
    padding-top: 10px;
}
.single-post-meta .col-md-6 {
    display: flex;
    align-items: center;
    padding-top: 10px;
}
.socical-share {
    list-style: none;
    margin-bottom: 0;
    display: flex;
    padding-left: 0;
}
.single-post-meta .share-title {
    margin-bottom: 10px;
    font-size: 14px;
    line-height: 1;
    color: #888;
    font-style: italic;
    margin-right: 20px;
}
.socical-share li:last-child {
    margin-right: 0;
}
.socical-share li {
    border-radius: 30px;
    margin: 0 3px;
}
.socical-share .facebook {
    background-color: #3b5998;
}
.socical-share .twitter {
    background-color: #55acee;
}
.socical-share .pinterest {
    background-color: red;
}
.socical-share a {
    display: flex;
    justify-content: center;
    align-items: center;
    text-align: center;
    width: 30px;
    height: 30px;
    line-height: 30px;
    color: #fff;
    border-radius: 30px;
}

.tagged_as {
    display: block;
    border-top: 1px dotted #ddd;
    padding: 5px 0;
}

.tt-mobile-header .tt-logo-container .tt-logo img {
    max-height: 70px;
}
.tt-logo img {
    height: auto;
    max-height: 70px;
}
.product-description strong {
    font-weight: normal;
}
.product-images-carousel {
    margin-top: 20px;
    padding-bottom: 57px;
}
.tt-header-holder .tt-desctop-menu:not(.tt-hover-02) nav>ul li.dropdown:first-child>a {
    padding-left: 0;
}
.tt-desctop-menu nav>ul>li.dropdown>a {
    padding: 17px 21px 16px;
    padding-top: 13px;
    padding-bottom: 11px;
    line-height: 20px;
}
.tt-product-single-info .tt-price .tt-label-sale {
    position: relative;
    top: -5px;
    padding-left: 10px;
    padding-right: 10px;
    font-size: 14px;
  }
.tt-desctop-menu .icon-h-27:before {
    padding-left: 10px;
    padding-right: 5px;
    font-size: 20px;
}
  .tt-product-single-info .tt-price .old-price {
    position: relative;
    top: -3px;
    color: #676464;
    font-size: 18px;
  }
  
  .tt-product-single-info .tt-price .new-price {
    margin-left: 10px;
    margin-right: 10px;
    color: #FF0000;
    font-size: 30px!important;
    font-weight: 600;
    text-shadow: 1px 1px 0 #fff, -1px -1px 0 #fff, 1px -1px 0 #fff, -1px 1px 0 #fff, 3px 3px 5px #333;
  }

  .tt-product-single-info .tt-price .lq-new-price {
    margin-left: 10px;
    margin-right: 10px;
    color: #FF0000;
    font-size: 20px!important;
    font-weight: 600;
    text-shadow: 1px 1px 0 #fff, -1px -1px 0 #fff, 1px -1px 0 #fff, -1px 1px 0 #fff, 3px 3px 5px #333;
  }

  .tt-product-single-info .tt-price .main-price{
    color: #FF0000;
    margin: 0px 20px;
  }
  
  .tt-product-single-info .tt-row-custom-01 .btn {
    width:auto;
  }
  
  .tt-product-single-info .tt-row-custom-01 .buy-now {
    background-color:#FF0000;
  }

  .tt-product-single-info .tt-add-info {
    background: #f5f5f5;
    padding: 10px 20px;   
  }
  
  .tt-product-single-info .tt-add-info p {
    margin:0px;
    padding: 0px;
  }
  
  .tt-product-single-info .tt-price {
    margin: 30px 0px;    
  }
  .tt-product-single-info .tt-collapse-block {
    border-top: 1px solid #e9e7e7;
    margin-top:30px;
    color: #343a40;
  }
  /* Product signal page */
.tt-product-single-info {
  overflow-x: hidden;
}

.tt-product-single-info .detail-title {
  font-size: 1.5em;
  font-weight: bold;
  margin-bottom: 30px;
  margin-top: 0.83em;
  color: #5dac46;
}

.tt-product-single-info h2 {
    font-size: 1.3em;
    margin-top:25px;
    color: #5dac46;
    text-transform: uppercase;
    line-height: 30px;
}
.tt-product-single-info h3 {
  margin-top:15px;
  font-size: 15px;
  font-style: italic;
}
.tt-product-single-info .tt-collapse-block .tt-item:not(:last-child) {
  padding-bottom: 25px;
}
.tt-product-single-info .detail-content ul li p{
  margin-top: 8px;
}
.tt-product-single-info .detail-content img, .tt-post-single .tt-post-content img{
  display: block;
  margin: 15px auto;
}
.tt-product-single-info .detail-content img + caption, .tt-post-single .tt-post-content img + caption{
  display: block;
  color: #6c757d;
  font-size: 14px;
  padding-top: 0px;
  text-align: center;
  font-weight: normal;
}
.tt-product-single-info .detail-content ol{
  padding-left: 20px;
  margin-top: 15px;
}
.tt-product-single-info .detail-content img, .tt-post-single .tt-post-content img, .tt-product-single-info .detail-content table {
  max-width: 100% !important;
  border-radius: 12px;
}
@media (max-width: 640px) {
  .tt-product-single-info .detail-content table {
    width: 100% !important;
    /* table-layout: fixed;
    display: flex; */
    border: none;
  }
  .tt-product-single-info .detail-content table td {
    padding: 3px 4px !important;
  }
}
.tt-product-single-info .detail-content ul {
    padding-left: 30px;
}
.tt-product-single-info .detail-content table, .tt-product-single-info .detail-content ul {
  margin-top:15px;
}

.tt-product-single-info .detail-content ol li {
  margin-bottom: 10px;
}
.tt-product-single-info .detail-content table caption{
  display: none;
}
.tt-product-single-info .detail-content table td {
  padding: 4px 6px;
}
.tt-product-single-info blockquote {
font-style: italic;
color: #1e1e1e;
position: relative;
}
.tt-product-single-info blockquote::before{
content: open-quote;
font-size: 4em;
line-height: 0.1em;
margin-right: 0.25em;
vertical-align: -0.4em;
position: absolute;
top: 20px;
left: -35px;
}
.tt-product-single-info .more-info {
color: #191919;
}
.tt-product-single-info .more-info label {
font-weight: bold;
margin-right: 8px;
}
.tt-product-single-info .more-info span:not(:last-child){
padding-right: 30px;
}
.tt-product-single-info {
    padding-left: 39px;
    margin: -5px 0 0 0; 
}
.tt-product-single-info img {
max-width: 100%;
height: auto; }
.tt-product-single-info .tt-add-info ul li {
color: #191919; }
.tt-product-single-info .tt-add-info ul li span:first-child {
letter-spacing: 0.02em;
color: #191919; }
.tt-product-single-info .tt-add-info ul li span {
letter-spacing: 0.02em; }
.tt-product-single-info .tt-add-info ul li a {
color: #191919;
transition: all 0.2s linear;
-ms-transition: all 0.2s linear;
-webkit-transition: all 0.2s linear;
-o-transition: all 0.2s linear; }
.tt-product-single-info .tt-add-info ul li a:hover {
color: #5dac46; }
.tt-product-single-info .tt-add-info ul li:not(:first-child) {
margin-top: 6px; }
.tt-product-single-info .tt-add-info span:fist-child {
color: #191919;
display: inline-block;
padding-right: 4px; }
.tt-product-single-info .tt-title {
font-size: 26px;
line-height: 40px;
font-weight: 500;
margin-top: 19px;
color: #343a40; }
.tt-product-single-info .tt-price {
font-size: 30px;
line-height: 40px;
font-family: Arial, Helvetica, sans-serif;
font-weight: 500;
color: #5dac46; }
.tt-product-single-info .tt-price span {
display: inline-block; }
.tt-product-single-info .tt-price .sale-price {
color: #FF0000;
margin-right: 7px; }
.tt-product-single-info .tt-price .old-price,
.tt-product-single-info .tt-price .old-price .money {
color: #3553A0;
text-decoration: line-through; }
.tt-product-single-info .tt-review {
margin: 6px 0px; }
.tt-product-single-info .tt-review .tt-rating {
margin-right: 8px;
margin-top: 3px; }
.tt-product-single-info .tt-review .tt-rating .icon-star:before {
color: #ffb503; }
.tt-product-single-info .tt-review .tt-rating .icon-star-half:before {
color: #ffb503; }
.tt-product-single-info .tt-review .tt-rating .icon-star-empty:before {
color: #d4d4d4; }
.tt-product-single-info .tt-review a {
display: inline-block;
transition: all 0.2s linear;
-ms-transition: all 0.2s linear;
-webkit-transition: all 0.2s linear;
-o-transition: all 0.2s linear; }
.tt-product-single-info .tt-review a:hover {
color: #191919; }
.tt-product-single-info .tt-review a:not(:last-child) {
margin-right: 10px; }
.tt-product-single-info .tt-row-custom-01 {
display: -ms-flexbox;
display: -webkit-flex;
display: flex;
-webkit-flex-direction: row;
-ms-flex-direction: row;
flex-direction: row;
-webkit-flex-wrap: wrap;
-ms-flex-wrap: wrap;
flex-wrap: nowrap;
-webkit-justify-content: flex-start;
-ms-flex-pack: start;
justify-content: flex-start;
-webkit-align-content: flex-start;
-ms-flex-line-pack: start;
align-content: flex-start;
-webkit-align-items: flex-start;
-ms-flex-align: start;
align-items: flex-start; }
.tt-product-single-info .tt-row-custom-01 .col-item:not(:last-child) {
margin-right: 20px; }
.tt-product-single-info .tt-row-custom-01 .col-item:nth-child(2) {
-webkit-flex: 1 1 auto;
-ms-flex: 1 1 auto;
flex: 1 1 auto; }
.tt-product-single-info .tt-row-custom-01 .btn.btn-lg {
font-size: 14px; }
.tt-product-single-info .tt-row-custom-01 .btn.btn-lg i {
font-size: 20px;
position: relative;
top: -3px; }
.tt-product-single-info .tt-wrapper {
margin-top: 33px; }
.tt-product-single-info .tt-wrapper + .tt-title,
.tt-product-single-info .tt-wrapper + .tt-price,
.tt-product-single-info .tt-wrapper + .tt-review,
.tt-product-single-info .tt-wrapper + .tt-add-info,
.tt-product-single-info .tt-swatches-container + .tt-title,
.tt-product-single-info .tt-swatches-container + .tt-price,
.tt-product-single-info .tt-swatches-container + .tt-review,
.tt-product-single-info .tt-swatches-container + .tt-add-info {
margin-top: 33px; }
.tt-product-single-info .tt-swatches-container .tt-wrapper:not(:first-child) {
margin-top: 12px; }
.tt-product-single-info .tt-swatches-container form {
margin-top: 7px; }
.tt-product-single-info .tt-options-swatch {
margin-top: -3px; }
.tt-product-single-info .tt-review + .tt-wrapper {
margin-top: 11px; }

.tt-product-single-info > *:nth-child(1) {
margin-top: 0; }
.tt-product-single-info .tt-list-btn {
display: -ms-flexbox;
display: -webkit-flex;
display: flex;
-webkit-flex-direction: row;
-ms-flex-direction: row;
flex-direction: row;
-webkit-flex-wrap: wrap;
-ms-flex-wrap: wrap;
flex-wrap: wrap;
-webkit-justify-content: flex-start;
-ms-flex-pack: start;
justify-content: flex-start;
-webkit-align-content: stretch;
-ms-flex-line-pack: stretch;
align-content: stretch;
list-style: none;
padding: 0;
margin: -10px 0 0 -20px; }
.tt-product-single-info .tt-list-btn li {
margin-left: 20px;
margin-top: 10px; }
@media (max-width: 1024px) {
.tt-product-single-info {
margin: 0;
padding-left: 0; }
.tt-product-single-info .tt-title {
font-size: 24px; }
.tt-product-single-info .tt-price {
font-size: 24px; } }
@media (max-width: 767px) {
.tt-product-single-info {
padding-top: 25px; } }
@media (max-width: 575px) {
.tt-product-single-info {
padding-top: 34px;
padding-left: 10px;
padding-right: 10px; }
.tt-product-single-info .tt-title {
margin-top: 14px;
font-size: 20px;
line-height: 30px; }
.tt-product-single-info .tt-row-custom-01 {
-webkit-flex-direction: column;
-ms-flex-direction: column;
flex-direction: column; }
.tt-product-single-info .tt-row-custom-01 .col-item {
width: 30%; }
.tt-product-single-info .tt-row-custom-01 .col-item .tt-input-counter.style-01 {
    max-width: 100%; }
.tt-product-single-info .tt-row-custom-01 .col-item:not(:first-child) {
margin-top: 31px; } }
.tt-product-single-info .tt-label {
margin-left: -10px;
margin-top: -10px; }
.tt-product-single-info .tt-label [class^="tt-label"] {
font-family: Arial, Helvetica, sans-serif;
font-weight: 500;
font-size: 12px;
line-height: 17px;
padding: 4px 10px 2px;
display: inline-block;
margin-left: 10px;
margin-top: 10px;
border-radius: 6px; }
.related-products h2 {
    padding-top: 0px;
    font-size: 1.3em;
    color:#FF0000;
}
.related-products h3 {
    font-weight: normal;
    font-style: normal;
    text-align: left;
}
.related-products .price{
    color: #FF0000;
    margin-top:10px;
    font-size: 18px;
}
.buy-now {
    margin-right: 10px;
}
@media (max-width: 640px) {
    .product-single-info .detail-content ul {
        padding-left: 30px;
    }
    .tt-product-single-info .more-info span {
        display: block;
        padding: 5px 0px;
    }
    .tt-product-single-info .more-info span label {
        width: 120px;
    }
    .product-description {
        margin-top: 25px !important;
    }
    .tt-product-single-info .tt-price {
        font-size: 20px;
    }
}

@media (max-width: 767px) {
    .related-products .col-4{
        flex: 0 0 50% !important;
        max-width: 50% !important;
    }
}
.news-detail-page .tt-post-single {
    text-align: justify;
}

.list-reply {
    display: block;
    position: relative;
    margin: 5px 0 0 0;
    padding: 10px 15px 10px 12px;
    clear: both;
    font-size: 14px;
    color: #333;
    line-height: 24px;
    background: #f8f8f8;
    border: 1px solid #dfdfdf;
}
.list-reply:before {
    border-color: rgba(238,238,238,0);
    border-bottom-color: #f8f8f8;
    border-width: 11px;
    margin-left: -11px;
    z-index: 1;
    top: -20px;
    left: 18px;
    border: solid transparent;
    content: " ";
    height: 0;
    width: 0;
    position: absolute;
    pointer-events: none;
}
.tt-comments-info .username {
    font-weight: bold;
    padding-right: 10px;
}
.reply .tt-comments-info .username{
    padding-left: 10px;
}

.tt-comments-info img{
    width: 24px; 
    height: 24px !important;
}
.tt-review-form .tt-rating {
    margin-top: 14px;
}
.tt-review-comments .tt-content{
    width: 100%;
}
.author {
    text-align:center;
}
.author a.phone {
    display:block;
    margin-top:20px;
}
#hoi-dap .title {
    font-size: 1.3em;
    color:#FF0000;
    width: 100%;
    margin-top:20px;
}
.permission{
    border: 1px solid #ccc;
    padding: 10px 20px;
    margin-top: 20px;
    border-radius: 5px;
}
.tt-avatar i::before{
    font-size: 4em;
}
.product-detail-prd_promotion {
    padding: 5px 10px 5px 5px;
    left: 0px;
    position: absolute;
    bottom: 0;
    z-index: 9;
    background: red;
    opacity: 70%;
    color: #ffffff;
    text-transform: uppercase;
    border-bottom-right-radius: 20px;
    font-size: 18px;
}
.product-detail-prd_promotion_desktop {
    padding: 5px 10px 5px 5px;
    left: -10px;
    position: absolute;
    bottom: 0px;
    z-index: 9;
    background: red;
    opacity: 70%;
    color: #ffffff;
    text-transform: uppercase;
    border-bottom-right-radius: 20px;
    font-size: 18px;
}
.product-detail-prd_bc {
  padding: 0 15px 0 10px;
  left: -10px;
  position: absolute;
  top: 0;
  background: red;
  color: #fff;
  text-transform: uppercase;
  border-bottom-right-radius: 20px;
  font-size: 20px
}

.input_dathang {
    height: 41px;
    border: 1px solid #eee;
    border-radius: 3px;
    border-bottom-right-radius: 0;
    border-top-right-radius: 0;
    margin: 15px 0;
}
.input_dathang button {
    border: none;
    padding: 10px 0px;
    padding-right: 10px;
    background: #FF0000;
    color: #fff;
    border-radius: 8px;
    border-bottom-left-radius: 0;
    border-top-left-radius: 0;
}
</style>
@endsection
@section('schema')
<?php 
$productUrl = Constant::DOMAIN.genProductLink($category['slug'], $product['slug']);
$authorUrl = "https://nhathuoclotus.com/nguyen-hong-mai";
?>

<script type=application/ld+json>
      {
        "@context": "http://schema.org",
        "@type": "WebPage",
        "@id": "https://nhathuoclotus.com#WebPage",
        "url": "https://nhathuoclotus.com",
        "name": "Nh?? thu???c Lotus | Hi???u thu???c - Nh?? thu???c online uy t??n t???i H?? N???i",
        "description": "Nh?? thu???c Lotus cung c???p ??a d???ng c??c s???n ph???m d?????c ph???m, th???c ph???m ch???c n??ng, trang thi???t b??? y t???, d?????c m??? ph???m c??ng nhi???u s???n ph???m ch??m s??c s???c kho??? t???t nh???t t???i t???i c??c th????ng hi???u d?????c ph???m h??ng ?????u",
        "inLanguage": "vi",
        "isPartOf": {
          "@type": "WebSite",
          "@id": "https://nhathuoclotus.com/#website",
          "url": "https://nhathuoclotus.com",
          "name": "Nh?? thu???c Lotus",
          "description": "Nh?? thu???c Lotus cung c???p ??a d???ng c??c s???n ph???m d?????c ph???m, th???c ph???m ch???c n??ng, trang thi???t b??? y t???, d?????c m??? ph???m c??ng nhi???u s???n ph???m ch??m s??c s???c kho??? t???t nh???t t???i t???i c??c th????ng hi???u d?????c ph???m h??ng ?????u",
          "alternateName": "Nh?? thu???c Lotus",
          "inLanguage": "vi",
          "publisher": {
            "@id": "https://nhathuoclotus.com/#Organization"
          },
          "potentialAction": {
            "@type": "SearchAction",
            "target": "https://nhathuoclotus.com/tim-kiem?word={search_term_string}",
            "query-input": "required name=search_term_string"
          }
        }
      }
    </script>

<script type=application/ld+json>
      {
        "@context": "http://schema.org",
        "@id": "https://nhathuoclotus.com/#Organization",
        "@type": "Organization",
        "name": "Nh?? thu???c Lotus",
        "url": "https://nhathuoclotus.com",
        "logo": {
            "@type" : "ImageObject",
            "url"   : "https://nhathuoclotus.com/images/logo_nhathuoclotus.png",
            "width" : "399",
            "height" : "127"
        },
        "location" : {
            "@type" : "Place",
            "name"  : "Nh?? thu???c Lotus",
            "hasMap" : "https://www.google.com/maps/place/Nh%C3%A0+Thu%E1%BB%91c+Lotus+H%C3%A0+N%E1%BB%99i/@21.0327466,105.9127631,15z/data=!4m5!3m4!1s0x0:0x6d5b93c8f372d20d!8m2!3d21.0327466!4d105.9127631",
            "geo": {
              "@type": "GeoCoordinates",
              "latitude": 21.0327466,
              "longitude": 105.9127631
            },
            "address": {
              "@type": "PostalAddress",
              "addressLocality": "Long Bi??n",
              "addressRegion": "H?? N???i",
              "postalCode": "100000",
              "streetAddress": "59 Ng. 42 P. S??i ?????ng, TT. S??i ?????ng, Long Bi??n, H?? N???i",
              "addressCountry": {
                "@type" : "Country",
                "name"  : "VN"
              }
            }
        },
        "email": "nhathuoclotus@gmail.com",
        "additionalType": ["https://vi.wikipedia.org/wiki/Nh%C3%A0_thu%E1%BB%91c_%C4%91%E1%BA%A1t_chu%E1%BA%A9n_GPP", "https://en.wikipedia.org/wiki/Drug", "https://vi.wikipedia.org/wiki/Th%E1%BB%B1c_ph%E1%BA%A9m_ch%E1%BB%A9c_n%C4%83ng", "https://vi.wikipedia.org/wiki/D%C6%B0%E1%BB%A3c_ph%E1%BA%A9m"],
        "contactPoint": [{
          "@type": "ContactPoint",
          "telephone": "0357273443",
          "contactType": "customer service",
          "areaServed": "VN",
          "availableLanguage": ["EN", "VN"]
        }],
        "sameAs": ["https://www.facebook.com/nhathuoclotus", "https://twitter.com/nhathuoclotus", "https://www.linkedin.com/company/nhathuoclotus", "https://nhathuoclotus.business.site", "https://www.pinterest.com/nhathuoclotus/", "https://www.instagram.com/nhathuoclotus", "https://nhathuoclotus.tumblr.com"]
      }
    </script>

<script type=application/ld+json>
      {       
          "@context": "http://schema.org",
          "@type": "BreadcrumbList",
          "@id": "https://nhathuoclotus.com/{{$product->slug}}#breadcrumb",
          "itemListElement":[
             {
                "@type":"ListItem",
                "position":1,
                "item":{
                   "@type":"WebPage",
                   "@id":"https://nhathuoclotus.com/",
                   "url":"https://nhathuoclotus.com/",
                   "name":"<?php echo Constant::WEB_NAME;?>"
                }
             }
             <?php
                $position = 3;
                if ($categoryParent) {
                    $parentBreadScrumb = ',{"@type":"ListItem","position":2,"item":{"@id":"'.Constant::DOMAIN.'/'.$categoryParent['slug'].'","name":"'.$categoryParent['title'].'"}}';
                    $child = ', {"@type":"ListItem","position":3,"item":{"@type":"WebPage", "@id":"'.Constant::DOMAIN.'/'.$category['slug'].'","url":"'.Constant::DOMAIN.'/'.$category['slug'].'","name":"'.$category['title'].'"}}';
                    echo $parentBreadScrumb.$child;
                    $position = 4;
                } else {
                    echo ', {"@type":"ListItem","position":2,"item":{"@type":"WebPage","@id":"'.Constant::DOMAIN.'/'.$category['slug'].'","url":"'.Constant::DOMAIN.'/'.$category['slug'].'","name":"'.$category['title'].'"}}';
                }
             ?>
             ,{
                "@type":"ListItem",
                "position": {{$position}},
                "item":{
                   "@type":"WebPage",
                    "@id":"{{$productUrl}}",
                    "url":"{{$productUrl}}",
                    "name":"{{$product['seo_title']}}"
                }
             }
          ]
        }
</script>


<script type="application/ld+json">
    {
        "@context": "http://schema.org/",
        "@type": "Product",
        "productID": "{{$product->id}}",
        "category": "{{$category->title}}",
        "additionalType": ["https://en.wikipedia.org/wiki/Drug","https://vi.wikipedia.org/wiki/D%C6%B0%E1%BB%A3c_ph%E1%BA%A9m","https://vi.wikipedia.org/wiki/Th%E1%BB%B1c_ph%E1%BA%A9m_ch%E1%BB%A9c_n%C4%83ng"],
        "name": "{{ $product['title']}}",
        "description": "{{$product['description']}}",
        "image": "{{isset($pageImage) ? $pageImage : Constant::PAGE_IMAGE}}",
        "url": "{{$productUrl}}",
        "sku": "{{$product->sku}}",
        "mpn": "{{$product->id}}NTLT",
        "brand": {
            "@type": "Brand",
            "name": "{{$product->provider['title']}}"
        },
        "offers": {
                "@type": "Offer",
                "url": "{{$productUrl}}",
                "priceCurrency": "VND",
                "price": "{{$product->price}}",
                "priceValidUntil": "2050-01-01",
                "itemCondition": "https://schema.org/UsedCondition",
                "availability": "https://schema.org/InStock",
                "seller": {
                    "@type": "Organization",
                    "name": "{{Constant::WEB_NAME}}"
                }
        },
        "aggregateRating": {
          "@type": "AggregateRating",
          "ratingValue": "4.5",
          "bestRating": "5",
          "reviewCount": "5",
          "itemReviewed" : {
            "@type" : "Thing",
            "name"  : "{{$product->title}}" 
          }
        }
    }
</script>
@endsection
@section('content')
<div class="tt-breadcrumb">
    <div class="container">
        <ul>
            <li><a href="/">Trang ch???</a></li>
            @if ($categoryParent['id'] !=$category['id'])
            <li>
            <a href="{{genCateLink($category['slug'])}}">
                {{$category['title']}}
            </a>
            </li>
            @endif
            <li>
                <span>
                    {{$product['title']}}
                </span>
            </li>
        </ul>
    </div>
</div>

<div id="tt-pageContent">
    <div class="container-indent">
        <?php $productThumbnail = genImage($product['thumbnail']);?>
        <!-- mobile product slider  -->
        @if ($isMobile)
        <div class="">
            <div class="tt-product-single-img">
               @if(!empty($product->image_list))
                    @foreach(explode(',', $product->image_list) as $idImage => $imageProduct)
                        @if($idImage == 0)
                        <div style="text-align: center;">
                        <img id="imageProductMobile" src="{{ isset($imageProduct) ? $imageProduct : ''}}"
                                 alt="{{ isset($product['title']) ? $product['title'] : ''}}" width="360" height="395">
                        </div>
                        @endif
                    @endforeach
                @endif
                @if ($product['popular_tag'] == 1) 
                  <span class="product-detail-prd_bc">B??n ch???y</span>
                @endif
                @if ($product['promotion_type'] > 0) 
                  <span class="product-detail-prd_promotion">{{$product['promotion_content']}}</span>
                @endif    
            </div>
            <div id="gal1-mb" class="imgmedum ds-none mbds-block">
                            @if(!empty($product->image_list))
                                @foreach(explode(',', $product->image_list) as $imageProduct)
                                    <a>
                                        <img src="{{$imageProduct}}" onClick="return changeImage(this);" alt="{{ isset($product['title']) ? $product['title'] : ''}}"/>
                                        </a>
                                @endforeach
                            @endif
              </div>
        </div>
        @endif
        <!-- /mobile product slider  -->
        <div class="container container-fluid-mobile">
            <div class="row">
                @if (!$isMobile)
                <div class="col-4 hidden-xs">  
                    <div class="tt-product-single-img" style="min-width: 380px !important; min-height:380px !important;">
                        <div>
                            @if(!empty($product->image_list))
                                @foreach(explode(',', $product->image_list) as $idImage => $imageProduct)
                                    @if($idImage == 0)
                                    
                                    <img id="imageProductDesktop" src="{{ isset($imageProduct) ? $imageProduct : ''}}"
                                             alt="{{ isset($product['title']) ? $product['title'] : ''}}">
                                    
                                    @endif
                                @endforeach
                            @endif
                            @if ($product['popular_tag'] == 1) 
                            <span class="product-detail-prd_bc">B??n ch???y</span>
                            @endif
                            @if ($product['promotion_type'] > 0) 
                            <span class="product-detail-prd_promotion_desktop">{{$product['promotion_content']}}</span>
                            @endif 
                        </div>
                    </div>
                    <div id="gal1" class="imgmedum mbds-none">
                            @if(!empty($product->image_list))
                                @foreach(explode(',', $product->image_list) as $imageProduct)
                                    <a>
                                        <img src="{{$imageProduct}}" alt="{{ isset($product['title']) ? $product['title'] : ''}}" onClick="return changeImageDesktop(this);"/>
                                    </a>
                                @endforeach
                            @endif
                    </div>
                </div>
                @endif
                <div class="col-8">
                    <div class="tt-product-single-info">
                        <h1 class="tt-title">{{$product['title']}}</h1>
                        <div class="tt-review">
                            <div class="tt-rating">
                                @if($numberRating)
                                <?php echo genRating($score);?>
                                <a href="#hoi-dap">({{$numberRating}} ????nh gi??)</a>
                                @endif
                            </div>
                        </div>
                        <div class="more-info">
                            <span>
                                <label>Th????ng hi???u:</label>
                                <a href="/thuong-hieu/{{$product->provider['slug']}}">{{$product->provider['title']}}</a>
                            </span>
                            <span><label>M?? s???n ph???m:</label>{{$product->sku}}</span>
                            <span><label>Xu???t x???:</label>{{$product->provider['from']}}</span>
                        </div>
                        <div class="tt-wrapper product-description">
                            <strong>{{$product['description']}}</strong>
                        </div>
                        @if($product['just_view'] == 1)
                          <div class="tt-price">
                              <span class="price"> S???n ph???m kh??ng kinh doanh</span>
                          </div>
                        @else
                          @if($product['price'] > 0)
                            <div class="tt-price">
                              @if($product['discount_type'] == 1)
                              <span class="old-price">{{formatPrice($product['price']+$product['discount'])}}???</span>
                              <span class="new-price">{{formatPrice($product['price'])}}???</span>
                              <span class="tt-label-sale">
                                  Gi???m {{getLastPrice($product['price'], $product['discount_type'], $product['discount'])}}
                              </span>
                              @else
                              <span class="new-price">{{formatPrice($product['price'])}}???</span>
                              @endif
                          </div>
                          @else
                          <div class="tt-price">
                              <span class="new-price">Li??n h??? - 0355.258.365</span>
                          </div>
                          @endif
                        @endif

                        @if($product['just_view'] == 0)
                       <form onsubmit="return addToOrder(this);" enctype="multipart/form-data"
                                        id="add-to-cart-form" method="post" accept-charset="utf-8">
                        <div class="tt-wrapper">
                          <input type="hidden" name="product_id[]" value="{{$product['id']}}">
                            <div class="tt-row-custom-01" style="margin-bottom:35px">
                                <div class="col-item" style="width: 500px !important;">
                                    <div class="tt-input-counter style-01" style="float: left !important;">
                                        <span class="minus-btn"></span>
                                        <input type="text" name="quantity[]" aria-label="size" value="1" size="10"/>
                                        <span class="plus-btn"></span>
                                    </div>
                                    <p style="float: right !important;"><i class="icon-transfer"></i> {{$shipText}}</p>
                                </div>
                                <div class="col-item">
                                    <button class="btn btn-lg buy-now"><i class="icon-f-39" style="margin-right: 10px !important;"></i><span>Mua ngay (Giao h??ng to??n qu???c)</span></button>
                                </div>
                            </div>
                        </div>
                      </form>
                        @endif
                        <div class="tt-add-info col-12" style="margin-bottom:10px;">
                            <p class="title_1" style="margin-bottom: -10px !important;">G???i t?? v???n cho t??i:</p>
                            <form  action="{{ route('product_contact') }}" method="post" onsubmit="return contactProductDetail(this);" class="mdds-none">
                                <div class="input_dathang w100 contactInput" style="display: flex;">
                                    <input type="text"  id="call-me_phone"  name="phone_number" class="form-control emailSubmit w80 ds-inline" placeholder="S??? ??T c???a b???n" >
                                    <input type="hidden" class="form-control"  name="from" value="top-box" />
                                    <input type="hidden"  name="name" value="Kh??ch G???i Ngay">
                                    <input type="hidden"  name="product_id" value="{{$product->post_id}}">
                                    <input type="hidden"  name="email" value="noname@gmail.com">
                                    <div class="form-group textarea col-8" style="display: none;">
                                    <textarea name="message" class="form-control">{{$product->title }}</textarea>
                                    </div>
                                    <button class="submit_phone2 col-4" type="submit" >G???i cho t??i</button>
                                </div>
                            </form>
                        </div>
                        <div class="tt-add-info col-12" style="margin-bottom:20px">
                            <p><i class="icon-guarantee"></i>Cam k???t ch??nh h??ng 100%</p>
                            <p><i class="icon-return"></i>Mi???n ph?? ?????i tr???</p>
                        </div>
                        <span class="tagged_as col-12">
                            Danh m???c: <a href="{{genCateLink($category['slug'])}}">
                {{$category['title']}}
            </a>
                        </span>
                        @if(!empty($product['tag_list']))
                            <span class="tagged_as col-12">
                                Tags: 
                                    @foreach(explode(',', $product['tag_list']) as $tag)
                                      @if(!str_ends_with( $product['tag_list'] , $tag))
                                        <a href="{{ route('tags_product', ['tags' => $tag]) }}"><span class="tag">{{ $tag }}</span></a>,
                                        @else
                                         <a href="{{ route('tags_product', ['tags' => $tag]) }}"><span class="tag">{{ $tag }}</span></a>
                                         @endif
                                    @endforeach
                            </span>
                            @endif

                    </div>
                </div>
            </div>

            <div class="row tt-product-single-info">
                <div class="tt-collapse-block">
                    <div class="tt-item active">
                        <div class="detail-title">TH??NG TIN CHI TI???T</div>
                        <div class="detail-content">
                            <?php echo $product['content']?>
                        </div>
                        <div style="display: none;" class="author">
                            <a href="tel:0376668305" class="phone">
                                <img src="{{ asset('/images/loader.svg') }}" width="800" height="400" alt="T?? v???n b???i Nguy???n H???ng Mai" data-src="{{ asset('/images/tu-van.jpg')}}">
                            </a>
                            <p> B??c S??? <a href="https://nhathuoclotus.com/nguyen-hong-mai">Nguy???n H???ng Mai</a> - c??? v???n chuy??n m??n Nh?? Thu???c Lotus</p>
                        </div>
                        <div class="single-post-meta row align-items-center">
                  <div class="col-md-6 mr-auto align-items-center">
                      <div class="avartar">
                      <img alt="Nguy???n H???ng Mai" src="/images/author_nguyen-hong-mai.jpg" height="35" width="35">
                      </div>
                      <div>
                        <span class="author">T??c gi???</span>
                      <a href="/nguyen-hong-mai" class="author-link" rel="author"> D?????c s?? Nguy???n H???ng Mai</a>
                      </div>
                    </div>
                    <div class="ml-auto col-md-6">
                      <p class="share-title">Chia s??? b??i vi???t</p>
                      <ul class="socical-share">
                        <li class="">
                          <a target="_blank" rel="nofollow noopener" href="https://www.facebook.com/sharer/sharer.php?u={{$productUrl}}" class="facebook">
                            <i class="icon-g-64" aria-hidden="true"></i>
                          </a>
                        </li>
                        <li class="">
                          <a target="_blank" rel="nofollow noopener" href="http://twitter.com/share?text={{$productUrl}}" class="twitter">
                            <i class="icon-h-58" aria-hidden="true"></i>
                          </a>
                        </li>
                        <li class="">
                          <a target="_blank" rel="nofollow noopener" href="https://pinterest.com/pin/create/button?url={{$productUrl}}&amp;description={{$product->title}}" class="pinterest">
                            <i class="icon-g-70" aria-hidden="true"></i>
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>
                        <div class="permission">
                            <strong>Tuy??n b??? mi???n tr??? tr??ch nhi???m y t???: </strong>
                            B??i vi???t ch??? nh???m m???c ????ch cung c???p th??ng tin cho b???n ?????c v??? s???n ph???m, kh??ng nh???m m???c ????ch thay th??? cho t?? v???n, ch???n ??o??n ho???c ??i???u tr??? y t???. B???nh nh??n kh??ng t??? ?? s??? d???ng s???n ph???m n???u ch??a c?? ch??? ?????nh c???a y b??c s??. Nh?? Thu???c Lotus xin ch??n th??nh c???m ??n!
                        </div>
                    </div>

                    <div class="tt-item active related-products">
                        <h2>S???N PH???M LI??N QUAN</h2>
                        <div class="container container-fluid-custom-mobile-padding">
                            <div class="tt-product-listing">
                            @foreach ($relatedProducts as $item)
                            <div class="col-4 col-md-4 col-sm-4 tt-col-item">
                                <?php $productLink=genProductLink($item['category_slug'], $item['slug'])?>
                                <a href="{{$productLink}}">
                                    <img src="{{ asset('/images/loader.svg') }}" width="300" height="300"
                                        data-src="{{genImage($item['thumbnail'])}}" alt="{{$item['title']}}">
                                    <h3>{{$item['title']}}</h3>
                                </a>
                                <div class="tt-description">
                                     @if($item['just_view'] == 0)
                                        <div class="tt-price">
                                            @if($item['price'] > 0)
                                                <span class="lq-new-price" style="font-size: 20px !important;">{{formatPrice($item['price'])}}???</span>
                                                @if($item['discount_type'] == 1)
                                                <span style="font-size: 20px !important;" class="old-price">{{formatPrice($item['price']+$item['discount'])}}???</span>
                                                @endif
                                            @else
                                                <span class="lq-new-price" style="font-size: 20px !important;">Li??n h???</span>
                                            @endif
                                        </div>
                                        @else
                                        <div class="tt-price">
                                            <span class="lq-new-price" style="font-size: 20px !important;">Xem chi ti???t</span>
                                        </div>
                                        @endif
                                </div>
                            </div>
                            @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>    
</div>
<style type="text/css">
                       #gal1 {
                            text-align: center;
                        }
                        #gal1-mb {
                            text-align: center;
                        }

                        #gal1 a img {
                            width: 80px;
                            max-width: 80px;
                            border: 1px solid #ccc;
                            height: 80px;
                            max-height: 80px;
                            margin: 10px 5px;
                        }
                        
                        #gal1-mb a img {
                            width: 80px;
                            max-width: 80px;
                            border: 1px solid #ccc;
                            height: 80px;
                            max-height: 80px;
                            margin: 10px 5px;
                        }
</style>


<div id="popupContactProductDetail" classname="ins-preview-wrapper ins-preview-wrapper-848" class="ins-preview-wrapper ins-preview-wrapper-848 ins-pos-middle-center" style="display: none; visibility: visible;">
    <div classname="ins-content-wrapper ins-content-wrapper-848" class="ins-content-wrapper ins-content-wrapper-848">
        <div
            classname="ins-notification-content ins-notification-content-848"
            class="ins-notification-content ins-notification-content-848"
            style="background-color: #5dac46 !important; background-image: none !important; border-width: 0px !important; border-style: none !important; border-color: rgb(51, 51, 51) !important; border-radius: 0px !important;"
        >
            <div id="ins-email-collection-adaptive">
                <form id="ins-question-group-form" action="{{ route('product_contact') }}" method="post" onSubmit="return contactProductDetail(this);">
                    <div class="ins-slider ins-slider-initialized">
                        <!-- Additional required wrapper -->
                        <div class="ins-slider-container" style="width: 0px; transform: translate3d(0px, 0px, 0px);">
                            <!-- Slides -->
                            <div
                                class="ins-slider-page ins-element-wrap ins-element-sub-frame ins-active-slide"
                                data-element-name="Page 1"
                                data-override-name="true"
                                id="ins-slide-page-0"
                                data-insider-slide="0"
                                data-insider-index="0"
                                style="width: 288px;"
                            >
                                <div class="ins-slider-padding">
                                    <div class="form-container">
                                        <div id="wrap-image-1478094039604" class="ins-general-image ins-selectable-element ins-element-wrap ins-element-image">
                                            <div id="image-1478094039604" class="ins-element-content" data-variable-name="Image">
                                                <a id="link-image-1478094039604" class="ins-element-link">
                                                    <img style="width: 230px;" src="/images/contact-logo-ntlt.png" />
                                                </a>
                                            </div>
                                        </div>
                                        <div id="ins-wrap-text-1454703513212" class="ins-adaptive-description ins-selectable-element ins-element-wrap ins-element-text">
                                            <div
                                                id="text-1454703513212"
                                                class="ins-element-content ins-editable-text"
                                                data-background-color-changed="true"
                                                style="color: rgb(83, 180, 223) !important;"
                                                ondrop="return false;"
                                                ondragstart="return false;"
                                            >
                                                <a href="javascript:void(0)" class="ins-element-link">
                                                    <div class="ins-element-link ins-editable ins-element-editable" id="ins-editable-text-1454703513212" data-bind-menu="notification|text_editing">
                                                        <font color="#ffffff">T?? v???n mi???n ph??:&nbsp;</font>
                                                        <div>
                                                            <font color="#ffffff"><b>{{$product->title}}</b></font>
                                                        </div>
                                                        <input type="hidden" name="message" value="{{$product->title}}">
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                        <div id="ins-wrap-question-1552321452906" class="ins-adaptive-question ins-adaptive-email ins-element-question ins-dynamic-input-reference">
                                            <div id="ins-question-1552321452906" class="ins-element-content" data-question-type="text" data-required-question="true">
                                                <div id="ins-option-input-1552321452906" class="ins-selectable-element ins-element-wrap" data-override-name="true">
                                                    <input
                                                        id="ins-dynamic-input-1552321452906"
                                                        class="ins-dynamic-input ins-element-content"
                                                        type="text"
                                                        name="name"
                                                        placeholder="T??n c???a b???n"
                                                    />
                                                </div>
                                            </div>
                                        </div>
                                        <div id="ins-wrap-question-1596624565918" class="ins-adaptive-question ins-adaptive-email ins-element-question ins-dynamic-input-reference">
                                            <div id="ins-question-1596624565918" class="ins-element-content" data-question-type="text" data-required-question="true">
                                                <div id="ins-option-input-1596624565918" class="ins-selectable-element ins-element-wrap" data-override-name="true">
                                                    <input
                                                        id="ins-dynamic-input-1596624565918"
                                                        class="ins-dynamic-input ins-element-content"
                                                        type="tel"
                                                        name="phone_number"
                                                        placeholder="S??? ??i???n tho???i c???a b???n"
                                                        data-option-validation-type="6"
                                                        data-element-name="Input Box"
                                                        data-required-question="false"
                                                        validation-error-color="rgb(255,255,255)"
                                                        country-code="af"
                                                        input-error-text="S??? ??i???n tho???i ch??a ????ng"
                                                    />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="ins-wrap-button-1454703860695" class="ins-adaptive-button ins-selectable-element ins-element-wrap ins-element-button" style="display: flex !important;">
                                      <div
                                            onclick="closePopupContact()"
                                            class="ins-element-content ins-editable-text sp-goal-299-848-12-1614827255234"
                                            data-submit-close-timeout="0"
                                            style="text-align: center !important; background-color: darkgray !important;"
                                            data-click-tracker="false"
                                            data-is-changing="true"
                                            goal-name="m - submit lead "
                                        >
                                            <a id="ins-link-button-1454703860695" class="ins-element-link" href="javascript:void(0)" slide-type="next">
                                                <div class="ins-editable ins-element-editable" id="ins-editable-button-1454703860695"
                                                data-bind-menu="notification|text_editing">????ng</div>
                                            </a>
                                        </div>
                                        <div
                                            class="ins-element-content ins-editable-text sp-goal-299-848-12-1614827255234"
                                            data-submit-close-timeout="0"
                                            data-background-color-changed="true"
                                            style="text-align: center !important; background-color: rgb(83, 180, 223) !important;"
                                            data-click-tracker="false"
                                            data-is-changing="true"
                                            goal-name="m - submit lead "
                                        >
                                            <a id="ins-link-button-1454703860695" class="ins-element-link" href="javascript:void(0)" slide-type="next">
                                                <input 
                                                style="    border: none;
    background-color: #17b978 !important;
    width: 100% !important;
    color: white !important;" 
                                                type="submit" value="G???i" class="ins-editable ins-element-editable" id="ins-editable-button-1454703860695"
                                                data-bind-menu="notification|text_editing">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="ins-slider-page ins-element-wrap ins-element-sub-frame"
                                data-element-name="Page 2"
                                data-override-name="true"
                                id="ins-slide-page-1"
                                data-auto-close="5"
                                data-insider-slide="1"
                                data-insider-index="1"
                                style="width: 288px;"
                            >
                            </div>
                        </div>
                    </div>
                </form>
                <div id="wrap-close-button-1454703945349" class="ins-selectable-element ins-element-wrap ins-element-close-button" onclick="closePopupContact()">
                    <div id="close-button-1454703945349" class="ins-element-content" data-background-color-changed="true" style="color: rgb(255, 255, 255) !important;">
                        <div class="ins-close-button-icon" id="icon-close-button-1454703945349"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
