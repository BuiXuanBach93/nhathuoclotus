<?php
use App\Constant;
?>
@extends('layouts.frontend')
@section('content')
<style>
	/* .tt-about-box */
@media (min-width: 791px) {
  .tt-about-box {
    display: -ms-flexbox;
    display: -webkit-flex;
    display: flex;
    -webkit-flex-direction: row;
    -ms-flex-direction: row;
    flex-direction: row;
    -webkit-flex-wrap: nowrap;
    -ms-flex-wrap: nowrap;
    flex-wrap: nowrap;
    -webkit-justify-content: flex-start;
    -ms-flex-pack: start;
    justify-content: flex-start;
    -webkit-align-content: stretch;
    -ms-flex-line-pack: stretch;
    align-content: stretch;
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center;
    color: #000;
    padding: 50px 0 50px 0;
    background-position: center center;
    background-repeat: no-repeat;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover; }
    .tt-about-box .img-mobile {
      display: none; }
    .tt-about-box .tt-title {
      color: #000;
      font-size: 34px;
      line-height: 44px;
      letter-spacing: 0.02em;
      font-weight: 500;
      padding-bottom: 0; }
    .tt-about-box p {
      margin-top: 23px;
      max-width: 75%; }
    .tt-about-box .tt-blockquote-02 {
      color: #000000; }
      .tt-about-box .tt-blockquote-02 .tt-icon {
        color: #000000; }
      .tt-about-box .tt-blockquote-02 .tt-title {
        font-size: 20px;
    	line-height: 32px;
        font-weight: 500;
        letter-spacing: 0.02em;
        color: #000000; } }
  @media (min-width: 791px) and (max-width: 1229px) {
    .tt-about-box {
      padding: 110px 0 118px 0; }
      .tt-about-box .tt-title {
        font-size: 30px;
        line-height: 40px;
        letter-spacing: 0.02em; }
      .tt-about-box p {
        max-width: 100%; }
      .tt-about-box .tt-blockquote-02 .tt-title {
        font-size: 22px;
        line-height: 27px; } }

@media (max-width: 790px) {
  .tt-about-box {
    background: none !important; }
    .tt-about-box > .container {
      padding-left: 20px;
      padding-right: 20px; }
    .tt-about-box .img-mobile {
      display: block;
      width: 100%;
      height: auto;
      margin-bottom: 32px; }
    .tt-about-box .tt-title {
      font-size: 24px;
      line-height: 34px;
      margin-top: 32px;
      letter-spacing: 0.02em;
      padding-bottom: 4px; }
    .tt-about-box .tt-blockquote-02 {
      margin-top: 25px;
      color: #191919; }
      .tt-about-box .tt-blockquote-02 .tt-icon {
        color: #5dac46; }
      .tt-about-box .tt-blockquote-02 .tt-title {
        margin-top: 0px;
        padding-bottom: 0;
        font-size: 23px; } }

.tt-about-box div[class^="col-"] > *:nth-child(1) {
  margin-top: 0; }

@media (min-width: 576px) {
  html.tt-boxed .tt-about-box .container {
    padding-right: 40px;
    padding-left: 40px; } }

/* 
	.tt-about-box {
		background-color: #f7f8fa;
		color: #000;
	} */

</style>
<div class="tt-breadcrumb">
    <div class="container">
        <ul>
            <li><a href="/">Trang chủ</a></li>
            <li>
                <span>
                    Về chúng tôi
                </span>
            </li>
        </ul>
    </div>
</div>
<div id="tt-pageContent">
	<div class="nomargin container-indent">
		<div class="tt-about-box" style="background-image: url({{ asset('/images/about-us.jpg') }});">
			<div class="container">
				<div class="row">
					<div class="col-md-7">
						<h1 class="tt-title">ĐÔI NÉT VỀ NHÀ THUỐC LOTUS</h1>

						<p><strong>Nh&agrave; thuốc Lotus</strong> l&agrave; nh&agrave; thuốc chuy&ecirc;n b&aacute;n lẻ c&aacute;c loại thuốc th&agrave;nh phẩm, thuốc k&ecirc; đơn, thực phẩm chức năng, mỹ phẩm, thực phẩm thi&ecirc;n nhi&ecirc;n, c&aacute;c loại thiết bị y tế...c&aacute;c sản phẩm tại Nh&agrave; Thuốc Lotus được nhập khẩu v&agrave; ph&acirc;n phối ch&iacute;nh h&atilde;ng, uy t&iacute;n từ nhiều đơn vị trong v&agrave; ngo&agrave;i nước. B&ecirc;n cạnh đ&oacute; l&agrave; những dịch vụ chăm s&oacute;c sức khỏe, l&agrave; nơi cung cấp những kiến thức y khoa bổ &iacute;ch cho kh&aacute;ch h&agrave;ng. Hiện tại nh&agrave; thuốc đang hoạt động ở cả 2 phương thức đ&oacute; l&agrave; b&aacute;n h&agrave;ng trực tiếp tại Nh&agrave; Thuốc Lotus c&oacute; địa chỉ tại: Số 59 ng&otilde; 42, phường S&agrave;i Đồng, quận Long Bi&ecirc;n, th&agrave;nh phố H&agrave; Nội&nbsp;v&agrave; b&aacute;n h&agrave;ng trực tuyến th&ocirc;ng qua k&ecirc;nh website nhathuoclotus.com với những sản phẩm chất lượng v&agrave; gi&aacute; th&agrave;nh cạnh tranh.</p></br></br>

<h2>TẦM NHÌN & SỨ MỆNH</h2>

<p>Nh&agrave; Thuốc Lotus với phương ch&acirc;m &quot;<em><strong>Thuốc tốt nhất, gi&aacute; tốt nhất</strong></em>&quot;&nbsp;lu&ocirc;n nằm trong danh s&aacute;ch <strong>top nh&agrave; thuốc online</strong>&nbsp;hướng đến mục ti&ecirc;u ph&aacute;t triển v&agrave; trở th&agrave;nh nh&agrave; thuốc kiểu mẫu phục vụ nhu cầu y tế v&agrave; chăm s&oacute;c sức khỏe người d&acirc;n tr&ecirc;n mọi miền tổ quốc, nh&agrave; thuốc cung cấp đa dạng tất cả c&aacute;c mặt h&agrave;ng thiết yếu, được ph&acirc;n phối ch&iacute;nh h&atilde;ng với mức gi&aacute; th&agrave;nh tốt nhất đến tay người sử dụng bao gồm:</p>

<ul>
  <li>C&aacute;c loại thuốc k&ecirc; đơn, thuốc kh&ocirc;ng k&ecirc; đơn theo danh mục hiện h&agrave;nh.</li>
  <li>Thực phẩm chức năng đa dạng.</li>
  <li>C&aacute;c loại thiết bị y tế.</li>
  <li>C&aacute;c loại sản phẩm thi&ecirc;n nhi&ecirc;n, mỹ phẩm, h&oacute;a mỹ phẩm.</li>
</ul>



			<p>&nbsp;</p>
						

						<blockquote class="tt-blockquote-02">
							<i class="tt-icon icon-g-56"></i>
							<div class="tt-title">Thuốc tốt nhất - Giá tốt nhất</div>
							<div class="tt-title-description">nhathuoclotus.com</div>
						</blockquote>

            <p>Nh&agrave; thuốc tự h&agrave;o l&agrave; một trong những đơn vị c&oacute; cơ hội hợp t&aacute;c v&agrave; ph&acirc;n phối những sản phẩm c&oacute; tiếng tại những đơn vị lớn trong v&agrave; ngo&agrave;i nước như: Mỹ, Ph&aacute;p, &Uacute;c, Ba Lan...Những đơn vị lớn trong nước như: Học Viện Qu&acirc;n Y, c&ocirc;ng ty Dược Hậu Giang, Traphaco, dược phẩm Trung Ương 3...Tất cả c&aacute;c sản phẩm đều được nh&agrave; thuốc ph&acirc;n phối trực tiếp từ c&ocirc;ng ty k&egrave;m theo những h&oacute;a đơn chứng từ đ&uacute;ng quy định.</p>

<p>Kh&aacute;ch h&agrave;ng khi trải nghiệm v&agrave; mua sắm c&ugrave;ng ch&uacute;ng t&ocirc;i c&oacute; thể ho&agrave;n to&agrave;n y&ecirc;n t&acirc;m về chất lượng cũng như gi&aacute; cả của sản phẩm, với đội ngũ dược sĩ chuy&ecirc;n m&ocirc;n cao lu&ocirc;n trực chiến 24/7 sẽ đồng h&agrave;nh&nbsp;c&ugrave;ng sức khỏe của qu&yacute; kh&aacute;ch h&agrave;ng v&agrave; giải đ&aacute;p tận t&igrave;nh tất cả những thắc mắc về bệnh cũng như c&aacute;ch sử dụng thuốc đ&uacute;ng c&aacute;ch từ qu&yacute; kh&aacute;ch.</p>
</br>
					</div>
				</div>
			</div>
		</div>  
	</div>
<div class="container-indent">
<div class="container">    
<div class="tt-about-col-list"><div class="row col-md-12">
  <img alt="Nhà Thuốc Lotus" style="width: 100%" src="{{ asset('/images/ntlt_1.jpg') }}">
</div></div>
</div>
</div>

	<div class="container-indent">
		<div class="container">
			<div class="tt-about-col-list">
				<div class="row">
					<div class="col-md-6">
						<h5 class="tt-title" style="color: #5dac46">GIÁ TRỊ MANG TÍNH CỐT LÕI CHÚNG TÔI MANG ĐẾN</h5>
						<div class="width-90">
                            <h3>Chất lượng l&agrave; ưu ti&ecirc;n h&agrave;ng đầu - Tạo dựng uy t&iacute;n từ niềm tin của kh&aacute;ch h&agrave;ng</h3>

<p>Nh&agrave; Thuốc Lotus l&agrave; nh&agrave; thuốc&nbsp;đạt chuẩn Thực h&agrave;nh thuốc tốt &ndash; GPP theo quy định của Bộ Y Tế ban h&agrave;nh, nh&agrave; thuốc đ&aacute;p ứng đầy đủ cơ sở vật chất, những tiện &iacute;ch tốt nhất gi&uacute;p kh&aacute;ch h&agrave;ng c&oacute; những trải nghiệm mua h&agrave;ng tốt nhất tại đ&acirc;y. Đội ngũ nh&acirc;n vi&ecirc;n chuy&ecirc;n nghiệp, tận t&igrave;nh c&ugrave;ng đội ngũ dược sĩ với chuy&ecirc;n m&ocirc;n cao, c&oacute; nhiều năm kinh nghiệm, c&ocirc;ng t&aacute;c trong nghề, ch&uacute;ng t&ocirc;i lu&ocirc;n đặt những nhu cầu về sức khỏe của kh&aacute;ch h&agrave;ng l&ecirc;n h&agrave;ng đầu v&agrave; thấu hiểu những mong muốn, nguyện vọng của qu&yacute; kh&aacute;ch h&agrave;ng, tại Nh&agrave; Thuốc Lotus ch&uacute;ng t&ocirc;i lu&ocirc;n cam kết l&agrave; <strong>địa chỉ mua thuốc online ch&iacute;nh h&atilde;ng</strong> với những&nbsp;tư vấn v&agrave; hướng dẫn theo đ&uacute;ng khuyến c&aacute;o sử dụng thuốc đ&oacute; l&agrave;:</p>

<ul>
  <li>Đ&uacute;ng thuốc.</li>
  <li>Đ&uacute;ng liều lượng.</li>
  <li>Sử dụng thuốc đ&uacute;ng c&aacute;ch, đ&uacute;ng thời gian.</li>
  <li>B&aacute;n thuốc đ&uacute;ng gi&aacute;.</li>
</ul>

<p>Nh&agrave; Thuốc Lotus cam kết 100% c&aacute;c loại thuốc v&agrave; thực phẩm tại nh&agrave; thuốc ch&uacute;ng t&ocirc;i đều được nhập khẩu cũng như ph&acirc;n phối ch&iacute;nh ngạch, đầu v&agrave;o được kiểm so&aacute;t hết sức chặt chẽ v&agrave; khoa học, chất lượng sản phẩm lu&ocirc;n được đảm bảo tuyệt đối v&agrave; đưa đến tay người sử dụng với mức gi&aacute; th&agrave;nh phải chăng nhất, cạnh tranh nhất tr&ecirc;n thị trường.</p></br>


<h3>Kh&aacute;ch h&agrave;ng l&agrave; trung t&acirc;m để đẩy mạnh ph&aacute;t triển nh&agrave; thuốc</h3>

<p>Song song với việc ch&uacute; trọng chất lượng sản phẩm ch&uacute;ng t&ocirc;i lu&ocirc;n&nbsp;kh&ocirc;ng ngừng n&acirc;ng cao chất lượng dịch vụ nhằm mang đến cho kh&aacute;ch h&agrave;ng kh&ocirc;ng gian mua sắm tiện &iacute;ch, an t&acirc;m v&agrave; h&agrave;i l&ograve;ng nhất kể cả khi qu&yacute; kh&aacute;ch h&agrave;ng trải nghiệm dịch vụ mua sắm trực tiếp hay mua h&agrave;ng trực tuyến qua website nhathuoclotus.com.</p>

<ul>
  <li>Đội ngũ nh&acirc;n vi&ecirc;n, dược sĩ lu&ocirc;n c&oacute; mặt v&agrave; tư vấn tận t&igrave;nh 24/7.</li>
  <li>Ch&iacute;nh s&aacute;ch đổi trả h&agrave;ng linh động theo quy định&nbsp;trong v&ograve;ng 7 ng&agrave;y kể từ khi mua h&agrave;ng tại Nh&agrave; Thuốc Lotus hoặc kể từ thời điểm nhận h&agrave;ng khi kh&aacute;ch h&agrave;ng đặt h&agrave;ng online.</li>
  <li>Ch&iacute;nh s&aacute;ch giao h&agrave;ng tận nh&agrave;, giao đ&uacute;ng thời gian m&agrave; kh&aacute;ch h&agrave;ng y&ecirc;u cầu.</li>
  <li>Ch&iacute;nh s&aacute;ch thanh to&aacute;n linh động bằng h&igrave;nh thức thanh to&aacute;n trực tiếp hoặc chuyển khoản.</li>
</ul>
						</div>
					</div>
					<div class="col-md-6">
						<div class="tt-box-info">
							<img alt="Nhà thuốc lotus mặt tiền" style="width: 100%" src="{{ asset('/images/ntlt_2.jpg') }}">
						</div>
            <div></br></div>
              <div class="tt-box-info">
              <img alt="Nhà thuốc lotus bên trong" style="width: 100%" src="{{ asset('/images/ntlt_4.jpg') }}">
            </div>
          </div>
          <div class="col-md-6">
            <h5 class="tt-title" style="color: #5dac46">ĐỘI NGŨ DƯỢC SĨ, NHÂN VIÊN TẠI NHÀ THUỐC LOTUS</h5>

                    <p>Tại Nh&agrave; Thuốc Lotus kh&aacute;ch h&agrave;ng kh&ocirc;ng chỉ được trải nghiệm mua sắm với những sản phẩm <strong>thuốc&nbsp;ch&iacute;nh h&atilde;ng</strong>, gi&aacute; th&agrave;nh phải chăng m&agrave; tại đ&acirc;y qu&yacute; kh&aacute;ch c&ograve;n nhận được sự hỗ trợ, tư vấn ho&agrave;n to&agrave;n miễn ph&iacute; từ đội ngũ nh&acirc;n vi&ecirc;n, dược sĩ của nh&agrave; thuốc mọi l&uacute;c, mọi nơi bằng h&igrave;nh thức mua h&agrave;ng trực tiếp sẽ được tư&nbsp;vấn 1-1 c&ugrave;ng dược sĩ hoặc tư vấn trực tuyến c&ugrave;ng dược sĩ th&ocirc;ng qua hotline: <strong>0357273443</strong>. <strong>Hiệu thuốc online</strong>&nbsp;lu&ocirc;n đảm bảo mang đến những trải nghiệm l&agrave;m h&agrave;i l&ograve;ng mọi vị kh&aacute;ch khi đến với ch&uacute;ng t&ocirc;i.</p>

<p>Đội ngũ nh&acirc;n vi&ecirc;n v&agrave; dược sĩ tại <strong>Nh&agrave; thuốc trực tuyến</strong> của&nbsp;Nh&agrave; Thuốc Lotus ch&iacute;nh l&agrave; mắt x&iacute;ch quan trọng bậc nhất gi&uacute;p kết nối kh&aacute;ch h&agrave;ng v&agrave; nh&agrave; thuốc, gi&uacute;p nh&agrave; thuốc ng&agrave;y c&agrave;ng c&oacute; hướng ph&aacute;t triển bền vừng hơn, đ&aacute;p ứng nhu cầu ng&agrave;y c&agrave;ng cao của x&atilde; hội. Họ l&agrave; những người c&oacute; tinh thần tr&aacute;ch nhiệm cao, nhiệt t&igrave;nh trong c&ocirc;ng việc, những b&aacute;c sĩ, dược sĩ chuy&ecirc;n m&ocirc;n cao, đ&atilde; c&oacute; nhiều năm kinh nghiệm trong lĩnh vực y học, họ l&agrave; những người lu&ocirc;n lắng nghe,&nbsp;thấu hiểu v&agrave; chia sẻ những mong muốn, t&acirc;m tư của qu&yacute; kh&aacute;ch h&agrave;ng khi đến với nh&agrave; thuốc ch&uacute;ng t&ocirc;i.</p>

<p>Mỗi nh&acirc;n vi&ecirc;n khi l&agrave;m việc tại nh&agrave; thuốc lu&ocirc;n tận t&acirc;m mong muốn mang đến sự h&agrave;i l&ograve;ng tuyệt đối cho qu&yacute; kh&aacute;ch!</p>
          </div>
    <div class="col-md-6">
              <img alt="Dược sĩ nhà thuốc lotus" style="width: 100%" src="{{ asset('/images/ntlt_3.jpg') }}">
            </div>
          <div class="col-md-12">
						<h5 class="tt-title" style="color: #5dac46">CÁC TIỆN ÍCH VÀ DỊCH VỤ TẠI NHÀ THUỐC</h5>
						<p>Để đảm bảo sự h&agrave;i l&ograve;ng tuyệt đối từ ph&iacute;a kh&aacute;ch h&agrave;ng, ch&iacute;nh s&aacute;ch chăm s&oacute;c kh&aacute;ch h&agrave;ng của ch&uacute;ng t&ocirc;i cũng kh&ocirc;ng ngừng đổi&nbsp;mới v&agrave; n&acirc;ng cao.&nbsp;Đối với kh&aacute;ch h&agrave;ng c&oacute; nhu cầu mua h&agrave;ng trực tiếp tại cửa h&agrave;ng th&igrave; sẽ đến Nh&agrave; Thuốc Lotus tại&nbsp;Số 59 ng&otilde; 42, phường S&agrave;i Đồng, quận Long Bi&ecirc;n, th&agrave;nh phố H&agrave; Nội để được tư vấn về c&aacute;c dịch vụ v&agrave; tiện &iacute;ch cũng như hướng dẫn giải quyết c&aacute;c thắc mắc của qu&yacute; kh&aacute;ch. Đối với những kh&aacute;ch h&agrave;ng mua h&agrave;ng theo h&igrave;nh thức mua h&agrave;ng trực tuyến qua website nhathuoclotus.com c&oacute; thể nhắn tin qua trang web hoặc li&ecirc;n hệ trực tiếp đến số hotline của nh&agrave; thuốc&nbsp;0357273443 để được tư vấn v&agrave; hỗ trợ về c&aacute;c dịch vụ.</p>

<p>Với ch&uacute;ng t&ocirc;i, kh&aacute;ch h&agrave;ng lu&ocirc;n l&agrave; một trong những ưu ti&ecirc;n h&agrave;ng đầu v&igrave; thế c&aacute;c tiện &iacute;ch m&agrave; nh&agrave; thuốc mang lại sẽ lu&ocirc;n đ&aacute;p ứng được nhu cầu ng&agrave;y c&agrave;ng cao của thời đại, nh&agrave; thuốc lu&ocirc;n cam kết mang đến người sử dụng những sản phẩm ch&iacute;nh h&atilde;ng tốt nhất, gi&aacute; tốt nhất với ch&iacute;nh s&aacute;ch mua h&agrave;ng tiện lợi nhất, giao h&agrave;ng nhanh ch&oacute;ng chất, giải quyết vấn đề đổi trả h&agrave;ng hay thanh to&aacute;n nhanh nhất, thuận tiện nhất cho kh&aacute;ch h&agrave;ng, đội ngũ nh&acirc;n vi&ecirc;n của nh&agrave; thuốc lu&ocirc;n trực chiến 24/7 để phục vụ qu&yacute; kh&aacute;ch.</p>

					</div>
          <div class="col-md-6">
            <h5 class="tt-title" style="color: #5dac46">LIÊN HỆ</h5>
            <div class="tt-box-info">
              <p>
                <span class="tt-base-dark-color">Địa chỉ: </span> {{Constant::OFFICE_ADDRESS}}<br>
              </p>
              <p>
                <span class="tt-base-dark-color">Phone: </span> <a href="tel:{{Constant::PHONE_NUMBER}}">{{Constant::PHONE_NUMBER_DISPLAY}}</a>
              </p>
              <p>
                <span class="tt-base-dark-color">Giờ làm việc: </span> 24/24h (T2 - CN)
              </p>
              <p>
                <span class="tt-base-dark-color">E-mail: </span> <a class="link" href="mailto:{{Constant::EMAIL}}">{{Constant::EMAIL}}</a>
              </p>
            </div>
          </div>
					<div class="col-md-6">
						<h5 class="tt-title" style="color: #5dac46">LIÊN KẾT MẠNG XÃ HỘI</h5>
						<div class="tt-box-info">
							<p>
								<span class="tt-base-dark-color"><strong>Facebook: </strong> </span> <a href="{{Constant::LINK_FACEBOOK}}" rel="nofollow noopener">{{Constant::LINK_FACEBOOK}}</a><br>
							</p>
							<p>
								<span class="tt-base-dark-color"><strong>Twitter: </strong></span> <a href="{{Constant::LINK_TWITTER}}" rel="nofollow noopener">{{Constant::LINK_TWITTER}}</a><br>
							</p>
							<p>
								<span class="tt-base-dark-color"><strong>Instagram: </strong></span> <a href="{{Constant::LINK_INSTAGRAM}}" rel="nofollow noopener">{{Constant::LINK_INSTAGRAM}}</a><br>
							</p>
							<p>
								<span class="tt-base-dark-color"><strong>Linkedin: </strong></span> <a href="{{Constant::LINK_LINKEDIN}}" rel="nofollow noopener">{{Constant::LINK_LINKEDIN}}</a><br>
              </p>
              <p>
								<span class="tt-base-dark-color"><strong>Tumbr: </strong></span> <a href="{{Constant::LINK_TUMB}}" rel="nofollow noopener">{{Constant::LINK_TUMB}}</a><br>
              </p>
              <p>
								<span class="tt-base-dark-color"><strong>Pinterest:</strong> </span> <a href="{{Constant::LINK_PINTEREST}}" rel="nofollow noopener">{{Constant::LINK_PINTEREST}}</a><br>
							</p>
              <p>
                <span class="tt-base-dark-color"><strong>Google Business:</strong> </span> <a href="{{Constant::LINK_GB}}" rel="nofollow noopener">{{Constant::LINK_GB}}</a><br>
              </p>
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>
</div>
@endsection