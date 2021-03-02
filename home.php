<?php get_header();
$source = implode(' - ',$_GET);
?>
<div class="loading-scren-wrapper" id="loading">
	<div class="loading-scren">
		<span>Haven</span>
		park
	</div>
</div>
<div class="s-premium s-premium--first">
	<!-- navbar -->
	<nav class="navbar navbar-light fixed-top">
		<div class="navbar__sidebar">
			<button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<img class="navbar-toggler__img-1" src="<?php echo THEME_URL  ?>/assets/images/menu-white.svg" />
				<img class="navbar-toggler__img-2" src="<?php echo THEME_URL  ?>/assets/images/menu-goc.png" />
				<span>Menu</span>
			</button>
			<ul class="navbar__box" id="navbar-box-menu">
				<li>
					<a class="active" data-index="0">01</a>
				</li>
				<li>
					<a data-index="1">02</a>
				</li>
				<li>
					<a data-index="2">03</a>
				</li>
				<li>
					<a data-index="3">04</a>
				</li>
				<li>
					<a data-index="4">05</a>
				</li>
				<li>
					<a data-index="5">06</a>
				</li>
				<li>
					<a data-index="6">07</a>
				</li>
				<li>
					<a data-index="7">08</a>
				</li>
				<!-- <li>
					<a data-index="8">09</a>
				</li> -->
			</ul>

			<a class="navbar__logo" href="">
				<img src="<?php echo THEME_URL  ?>/assets/images/logo.svg" alt="S-Premium" />
			</a>

			<div class="navbar__icon">
				<a class="navbar__hotline" href="tel:(+84) 969 789 589">
					<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-telephone-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
						<path fill-rule="evenodd" d="M2.267.98a1.636 1.636 0 0 1 2.448.152l1.681 2.162c.309.396.418.913.296 1.4l-.513 2.053a.636.636 0 0 0 .167.604L8.65 9.654a.636.636 0 0 0 .604.167l2.052-.513a1.636 1.636 0 0 1 1.401.296l2.162 1.681c.777.604.849 1.753.153 2.448l-.97.97c-.693.693-1.73.998-2.697.658a17.47 17.47 0 0 1-6.571-4.144A17.47 17.47 0 0 1 .639 4.646c-.34-.967-.035-2.004.658-2.698l.97-.969z" />
					</svg>
				</a>
				<a class="navbar__icon-1" href="https://www.facebook.com/ecopark.com.vn/" target="_blank"><img src="<?php echo THEME_URL  ?>/assets/images/icon-fb.png" /></a>
				<a class="navbar__icon-1" style="margin-top:20px;" href="https://www.youtube.com/user/EcoparkOfficial" target="_blank"><img src="<?php echo THEME_URL  ?>/assets/images/icon-youtube.png" /></a>
				<a class="navbar__icon-2" href="https://www.facebook.com/ecopark.com.vn/" target="_blank"><img src="<?php echo THEME_URL  ?>/assets/images/icon-fb-goc.png" /></a>
				<a class="navbar__icon-2" style="margin-top:20px;" href="https://www.youtube.com/user/EcoparkOfficial" target="_blank"><img src="<?php echo THEME_URL  ?>/assets/images/icon-youtube-goc.png" /></a>
			</div>
		</div>

		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav" id="navbar-menu">
				<li class="nav-item">
					<a class="nav-link active" data-index="0">Trang chủ</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" data-index="1">Giới thiệu</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" data-index="2">Vị trí</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" data-index="3">Đặc quyền</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" data-index="4">Tiện ích</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" data-index="6">Mặt bằng tầng</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" data-index="7">Hình bóc mái</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" data-index="8">Liên hệ</a>
				</li>
			</ul>
			<button class="navbar__close" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-x" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
					<path fill-rule="evenodd" d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z" />
				</svg>
				<span>Đóng</span>
			</button>
		</div>
	</nav>

	<!-- header -->
	<div class="header">
		<div class="content-main">
			<a class="header__logo" href="">
				<img src="<?php echo THEME_URL  ?>/assets/images/logo.svg" alt="S-Premium" />
			</a>
			<a class="header__hotline" href="tel:(+84) 969 789 589">
				<div class="header__hotline-1">
					<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-telephone-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
						<path fill-rule="evenodd" d="M2.267.98a1.636 1.636 0 0 1 2.448.152l1.681 2.162c.309.396.418.913.296 1.4l-.513 2.053a.636.636 0 0 0 .167.604L8.65 9.654a.636.636 0 0 0 .604.167l2.052-.513a1.636 1.636 0 0 1 1.401.296l2.162 1.681c.777.604.849 1.753.153 2.448l-.97.97c-.693.693-1.73.998-2.697.658a17.47 17.47 0 0 1-6.571-4.144A17.47 17.47 0 0 1 .639 4.646c-.34-.967-.035-2.004.658-2.698l.97-.969z" />
					</svg>
				</div>
				<div class="header__hotline-2">
					<p>hotline</p>
					<span>(+84) 969 789 589</span>
				</div>
			</a>
		</div>
	</div>

	<div class="s-premium-1 section" id="section0">
		<div class="content-main">
			<div class="s-premium-1__list">
				<div class="row">
					<div class="col-5 text-center s-premium-1__content wow zoomInDown">
						<!-- <img src="<?php echo THEME_URL  ?>/assets/images/home.png" /> -->
						<!-- <h2>
						Khi<br>Trở Về nhà<br>là <br> một kỳ nghỉ
					</h2>
					<h4>Biểu &nbsp;tượng &nbsp;2020<br> của &nbsp;đô &nbsp;thị &nbsp;Ecopart</h4> -->
						<img src="<?php echo THEME_URL  ?>/assets/images/key1.png" />
						<!-- <img src="<?php echo THEME_URL  ?>/assets/images/bieutuong.png" style="margin-bottom: 30px;" /> -->
						<div class="link-arrow">
							<a data-index="1">
								Tìm hiểu dự án
								<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-arrow-right" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
									<path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
								</svg>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="s-premium-1__img">
			<img src="<?php echo THEME_URL  ?>/assets/images/bg-1-mobile.jpg" />
		</div>
	</div>

	<div class="s-premium-2 section" id="section1">
		<div class="section-wrapper">
			<div class="container-fluid">
				<div class="row">
					<div class="s-premium-2__content  zoomInDown" data-wow-delay="0.5s">
						<div class="section-title">
							02
							<span></span>
							Giới thiệu
						</div>
						<h4 class=" bounceInUp" data-wow-delay="0.4s">
							CÔNG VIÊN TRONG <br>ĐẠI CÔNG VIÊN
						</h4>
						<p class=" bounceInUp" data-wow-delay="0.8s">
							Nằm trong thành phố triệu cây xanh Ecopark, đại công viên xanh lớn nhất miền Bắc, lần đầu tiên Ecopark ra mắt dòng sản phẩm căn hộ cao cấp được đặt trong cả một công viên với không gian cây xanh và mặt nước trải dài mênh mông vô tận.
							<!-- Với thiết kế mang tính biểu tượng của hơn 1000 khu vườn thẳng đứng giữa tầng mây với độ cao trên 200m, Sol Forest là một trong những toà tháp xanh quy mô và đẹp nhất thế giới và là toà tháp đôi biểu tượng mới của Việt Nam. -->
						</p>
						<div class="link-arrow">
							<a data-index="2">
								Tìm hiểu thêm
								<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-arrow-right" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
									<path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
								</svg>
							</a>
						</div>
					</div>
					<div class="s-premium-2__img text-center  zoomIn">
						<img class="lazy" src="<?php echo THEME_URL  ?>/assets/images/s-premium-2.png" />
						<a data-fancybox="gallery" class="s-premium-2__zoom" href="<?php echo THEME_URL  ?>/assets/images/s-premium-2.png">
							<img class="lazy" data-src="<?php echo THEME_URL  ?>/assets/images/icon-zoom.png" />
						</a>
					</div>
				</div>
			</div>
			<div class="content-main s-premium-2__info">
				<div class="s-premium-2__info-list">
					<div class="s-premium-2__info-item  bounceInUp" data-wow-delay="0.5s">
						<h3>2 x 41 Tầng</h3>
						<p>2 toà tháp biểu tượng
							với 41 tầng</p>
					</div>
					<div class="s-premium-2__info-item">
						<h3>1,224 căn hộ</h3>
						<p>1,224 căn hộ đẳng cấp sở hữu
							tầm view không giới hạn </p>
					</div>
					<div class="s-premium-2__info-item">
						<h3>17</h3>
						<p>Căn hộ / tầng điển hình</p>
					</div>
					<div class="s-premium-2__info-item">
						<h3>2+2</h3>
						<p>2 tầng hầm để xe và 2 tầng
							khối đế thương mại sầm uất</p>
					</div>
				</div>
				<div class="s-premium-2__info-list">

					<!-- <div class="s-premium-2__info-item">
						<h3>540 căn hộ</h3>
						<p>các căn hộ được thiết kế 100% view về vịnh đảo hoặc sông hồng</p>
					</div>
					<div class="s-premium-2__info-item">
						<h3>5+3</h3>
						<p>Studio; 1PN; 2PN1WC; 2PN2WC; 3PN Garden Villa; Mezza; Duplex</p>
					</div> -->
				</div>
			</div>
		</div>
	</div>

	<div class="s-premium-3 section" id="section2">
		<div class="section-wrapper">
			<div class="container-fluid">
				<div class="row">
					<div class="s-premium-3__content  zoomInDown" data-wow-delay="0.5s">
						<div class="s-premium-3__content-header">
							<div class="section-title">
								03
								<span></span>
								Vị Trí
							</div>
							<h4 class=" bounceInUp" data-wow-delay="0.4s">
							VỀ HAVEN PARK <br>
							VỀ VỚI BÌNH YÊN
							</h4>
							<!-- <p class=" bounceInUp" data-wow-delay="0.8s">
								SỐNG GIỮA KHÔNG GIAN TRIỆU CÂY XANH TẠI KHU ĐÔ THỊ CÓ THIẾT KẾ CẢNH QUAN ĐẸP NHẤT THẾ GIỚI

							</p> -->
							<p class=" bounceInUp" data-wow-delay="0.8s">
							Chỉ cách trung tâm 14km, có một đại công viên xanh yên bình, đáng sống, nơi mà thiên nhiên và cuộc sống cùng giao hoà trong những bản tình ca của cây xanh và chim muông; thanh âm và hương sắc.
							</p>
							<div class="link-arrow">
								<a href="https://goo.gl/maps/ueSa6agNj96k8koj6" target="_blank">
									ecopark on maps
									<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-arrow-right" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
										<path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
									</svg>
								</a>
							</div>
						</div>
						<div class="s-premium-3__content-img">
							<img class="lazy" data-src="<?php echo THEME_URL  ?>/assets/images/map-2.png" />
						</div>
					</div>
					<div class="s-premium-3__img text-center  zoomIn">
						<img class="lazy" data-src="<?php echo THEME_URL  ?>/assets/images/map.png" />
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="s-premium-4 section" id="section3">
		<div class="section-wrapper">
			<div class="content-main">
				<div class="row justify-content-center">
					<div class="s-premium-4__content text-center col-lg-8  zoomInDown" data-wow-delay="0.5s">
						<div class="section-title justify-content-center">
							<!-- 04
							<span></span>
							Đặc Quyền Riêng Tư -->
						</div>
						<h4 class=" bounceInUp" data-wow-delay="0.4s">
							<!-- THÁP CĂN HỘ ĐƯỢC THIẾT KẾ MAY ĐO CHO NHU CẦU KINH DOANH NGHỈ DƯỠNG, LƯU TRÚ -->
						</h4>
						<p class=" bounceInUp" data-wow-delay="0.8s" style="color: #ffd8a3	;">
						Haven Park toạ lạc tại phân khu đẳng cấp nhất Ecopark - Phân khu vịnh Đảo với hơn 50ha diện tích cây xanh & mặt nước mang đến trải nghiệm tầm view đắt giá.
						</p>
					</div>
				</div>
				<div class="d-flex s-premium-4__info">
					<!-- <div class="s-premium-4__info-1">
						<div class="row">
							<div class="col-lg-6">
								<img class="lazy" data-src="<?php echo THEME_URL  ?>/assets/images/s-premium-4-2.png" />
							</div>
							<div class="col-lg-6">
								<img class="lazy" data-src="<?php echo THEME_URL  ?>/assets/images/s-premium-4-3.png" />
							</div>
						</div>
						<div class="row">
							<div class="col-lg-6">
								<img class="lazy" data-src="<?php echo THEME_URL  ?>/assets/images/s-premium-4-4.png" />
							</div>
							<div class="col-lg-6">
								<img class="lazy" data-src="<?php echo THEME_URL  ?>/assets/images/s-premium-4-5.png" />
							</div>
						</div>
					</div>
					<div class="s-premium-4__info-2">
						<img class="lazy" data-src="<?php echo THEME_URL  ?>/assets/images/s-premium-4-1.png" />
					</div> -->
					<img src="<?php echo THEME_URL . '/assets/images/4-main.png' ?>" class="key-img-4" style="width: 100%;
    height: 100%;
    margin: 0 auto;">
				</div>
			</div>
		</div>
	</div>


	<div class="s-premium-6 section" id="section5">
		<div class="section-wrapper">
			<div class="content-main">
				<div class="s-premium-6__header text-center">
					<div class="section-title justify-content-center">
						05
						<span></span>
						Tiện Ích
					</div>
					<h4 class=" bounceInUp" data-wow-delay="0.4s">
						CÔNG VIÊN TRONG ĐẠI CÔNG VIÊN
					</h4>
					<p class=" bounceInUp" data-wow-delay="0.8s" style="color: #fff	;">
					Mỗi căn hộ tại Haven Park được thiết kế như một ngôi nhà nhỏ nằm nép mình bên công viên xinh xắn.
					Sống tại Haven Park. Để mỗi sáng thức dậy, là thiên nhiên tràn ngập sắc xanh của cỏ cây, muôn hoa, tiếng chim lích chích ngoài hiên nhà. Để mỗi lần trở về, lại chạm đến bình yên.
					</p>
				</div>
				<div class="s-premium-6__slides">
					<div class="s-premium-6__opacity1">
					</div>
					<div class="s-premium-6__opacity2">
					</div>
					<div class="s-premium-6__list owl-carousel">
						<div class="s-premium-6__item">
							<div class="s-premium-6__item-img">
								<img class="lazy" data-src="<?php echo THEME_URL  ?>/assets/images/mb06-1.jpg?v2" />
							</div>
							<div class="s-premium-6__item-title">
								<span>
									<span>Hơn 400 khu vườn thẳng đứng</span>
								</span>
							</div>
						</div>
						<div class="s-premium-6__item">
							<div class="s-premium-6__item-img">
								<img class="lazy" data-src="<?php echo THEME_URL  ?>/assets/images/mb06-2.jpg?v2" />
							</div>
							<div class="s-premium-6__item-title">
								<span>
									<span>Thác tràn nhiệt đới</span>
								</span>
							</div>
						</div>
						<div class="s-premium-6__item">
							<div class="s-premium-6__item-img">
								<img class="lazy" data-src="<?php echo THEME_URL  ?>/assets/images/mb06-3.jpg?v2" />
							</div>
							<div class="s-premium-6__item-title">
								<span>
									<span>Hồ bơi nước mặn 4 mùa trên không</span>
								</span>
							</div>
						</div>
						<div class="s-premium-6__item">
							<div class="s-premium-6__item-img">
								<img class="lazy" data-src="<?php echo THEME_URL  ?>/assets/images/mb06-4.jpg?v2" />
							</div>
							<div class="s-premium-6__item-title">
								<span>
									<span>Quảng trường resort</span>
								</span>
							</div>
						</div>
						<div class="s-premium-6__item">
							<div class="s-premium-6__item-img">
								<img class="lazy" data-src="<?php echo THEME_URL  ?>/assets/images/mb06-5.jpg?v2" />
							</div>
							<div class="s-premium-6__item-title">
								<span>
									<span>Phố đi bộ shopping</span>
								</span>
							</div>
						</div>
						<div class="s-premium-6__item">
							<div class="s-premium-6__item-img">
								<img class="lazy" data-src="<?php echo THEME_URL  ?>/assets/images/mb06-6.jpg?v2" />
							</div>
							<div class="s-premium-6__item-title">
								<span>
									<span>Phòng gym 5 sao</span>
								</span>
							</div>
						</div>
						<!-- <div class="s-premium-6__item">
							<div class="s-premium-6__item-img">
								<img class="lazy" data-src="<?php echo THEME_URL  ?>/assets/images/mb06-7.jpg" />
							</div>
							<div class="s-premium-6__item-title">
								<span>
									<span>Vườn thượng uyển dạo bộ & BBQ hơn 4.000m2</span>
								</span>
							</div>
						</div>
						<div class="s-premium-6__item">
							<div class="s-premium-6__item-img">
								<img class="lazy" data-src="<?php echo THEME_URL  ?>/assets/images/mb06-8.jpg" />
							</div>
							<div class="s-premium-6__item-title">
								<span>
									<span>Vườn chân mây tầng 42</span>
								</span>
							</div>
						</div> -->
					</div>
				</div>
			</div>
		</div>
	</div>

	<?php
	$argSP7 = [
		0 => [
			'color' => '#F8A4C6',
			'title' => 'STUDIO',
			'desc_1' => '32,35 - 32,41 m2',
			'desc_2' => '32,35 - 32,41 m2'
		],
		1 => [
			'color' => '#9CFCFF',
			'title' => '2PN + 2WC',
			'desc_1' => '32,35 - 32,41 m2',
			'desc_2' => '32,35 - 32,41 m2'
		],
		2 => [
			'color' => '#F6CCFF',
			'title' => '2PN Deluxe',
			'desc_1' => '32,35 - 32,41 m2',
			'desc_2' => '32,35 - 32,41 m2'
		],
		3 => [
			'color' => '#FBEBAC',
			'title' => '3PN + 2WC',
			'desc_1' => '32,35 - 32,41 m2',
			'desc_2' => '32,35 - 32,41 m2'
		],
		4 => [
			'color' => '#FFCFAD',
			'title' => '3PN Deluxe',
			'desc_1' => '32,35 - 32,41 m2',
			'desc_2' => '32,35 - 32,41 m2'
		],
	];
	?>

	<div class="s-premium-7 section" id="section6">
		<div class="section-wrapper">
			<div class="content-main">
				<div class="row">
					<div class="s-premium-7__content col-lg-5 wow zoomInDown" data-wow-delay="0.5s">
						<div class="s-premium-7__content-header">
							<div class="section-title">
								07
								<span></span>
								Mặt Bằng Tầng Điển Hình
							</div>
							<h4 class="wow bounceInUp" data-wow-delay="0.4s">
								MẶT BẰNG TẦNG ĐIỂN HÌNH
							</h4>
							<p class="wow bounceInUp" data-wow-delay="0.8s">
							Tòa H1 & H2 - Haven Park
							</p>
							<!-- <div class="link-arrow">
								<a data-index="7">
									Xem hình bốc mái căn hộ
									<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-arrow-right" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
										<path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
									</svg>
								</a>
							</div> -->
						</div>
						<div class="s-premium-7__info">
							<div class="row">
								<?php foreach ($argSP7 as $kp => $vp) { ?>
									<div class="col-md-6">
										<div class="s-premium-7__info-item" style="border-color : <?php echo $vp['color'] ?>">
											<h5 style="background : <?php echo $vp['color'] ?>"><?php echo $vp['title']  ?></h5>
											<div>
												<p>DT Tim Tường: <strong><?php echo $vp['desc_1']  ?></strong></p>
												<p>DT Thông Thủy: <strong><?php echo $vp['desc_2']  ?></strong></p>
											</div>
										</div>
									</div>
								<?php } ?>
							</div>
						</div>
					</div>
					<div class="s-premium-7__img col-lg-7 text-center wow zoomIn">
						<img class="lazy" data-src="<?php echo THEME_URL  ?>/assets/images/s-premium-7-1.png" />
						<!-- <div class="s-premium-7__zoom">
							<img src="images/icon-zoom.png" />
						</div> -->
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php
	$argSP8 = [
		0 => [
			'color' => '#F8A4C6',
			'title' => 'STUDIO',
			'desc_1' => '32,35 - 32,41 m2',
			'desc_2' => '32,35 - 32,41 m2',
			'image_1' => 's-premium-8-2-1.png',
			'image_2' =>  's-premium-8-2-2.png'
		],
		1 => [
			'color' => '#9CFCFF',
			'title' => '2PN + 2WC',
			'desc_1' => '32,35 - 32,41 m2',
			'desc_2' => '32,35 - 32,41 m2',
			'image_1' => 's-premium-8-2-1.png',
			'image_2' => 's-premium-8-2-2.png'
		],
		2 => [
			'color' => '#F6CCFF',
			'title' => '2PN Deluxe',
			'desc_1' => '32,35 - 32,41 m2',
			'desc_2' => '32,35 - 32,41 m2',
			'image_1' => 's-premium-8-2-1.png',
			'image_2' => 's-premium-8-2-2.png'
		],
		3 => [
			'color' => '#FBEBAC',
			'title' => '3PN + 2WC',
			'desc_1' => '32,35 - 32,41 m2',
			'desc_2' => '32,35 - 32,41 m2',
			'image_1' => 's-premium-8-2-1.png',
			'image_2' => 's-premium-8-2-2.png'
		],
		4 => [
			'color' => '#FFCFAD',
			'title' => '3PN Deluxe',
			'desc_1' => '32,35 - 32,41 m2',
			'desc_2' => '32,35 - 32,41 m2',
			'image_1' => 's-premium-8-2-1.png',
			'image_2' => 's-premium-8-2-2.png'
		],
	];
	?>

	<div class="s-premium-8 section" id="section7">
		<div class="section-wrapper">
			<div class="content-main content-main-1">
				<?php foreach ($argSP8 as $kp => $vp) { 
					$style = '';
					$classActive = 'active';
					if ($kp != 0) {
						$classActive = '';
						$style = "display:none";
					}
				?>
					<div class="row s-premium-8__stt s-premium-8__stt-<?php echo $kp ?> <?php echo $classActive ?>" style="z-index: 1;<?php echo $style ?>">
						<div class="col-lg-5 s-premium-8__content">
							<div class="s-premium-8__content-header">
								<div class="section-title">
									07
									<span></span>
									Hình Bốc Mái
								</div>
								<h4 class=" bounceInUp" data-wow-delay="0.4s">
									Căn hộ: <?php echo $vp['title']  ?>
								</h4>
								<div style="margin-bottom: 15px;">
									<p>DT Tim Tường: <strong><?php echo $vp['desc_1']  ?></strong></p>
									<p>DT Thông Thủy: <strong><?php echo $vp['desc_2']  ?></strong></p>
								</div>
								<div class="s-premium-8__nav">
									<?php foreach ($argSP8 as $kpItem => $vpItem) {
										$colorActive = '';
										$color = $vpItem['color'];
										if ($kp == $kpItem) {
											$colorActive = $vpItem['color'];
											$color = '#050505';
										}
									?>
										<a class="nav-link" href="javascript:void(0)" data-stt-active="<?php echo $kpItem ?>" style="border : 1px solid <?php echo $vpItem['color'] ?>">
											<span style="background : <?php echo $colorActive ?>; color: <?php echo $color ?>;">
												<?php echo $vpItem['title']  ?>
											</span>
										</a>
									<?php } ?>
								</div>
							</div>
							<div class="s-premium-8__img">
								<img class="lazy" data-src="<?php echo THEME_URL  ?>/assets/images/<?php echo $vp['image_1']  ?>" />
							</div>
						</div>
						<div class="col-lg-7 s-premium-8__info">
							<img class="lazy" data-src="<?php echo THEME_URL  ?>/assets/images/<?php echo $vp['image_2']  ?>" />
						</div>
					</div>
				<?php } ?>
			</div>
		</div>
	</div>



	<!-- contact section -->
	<div class="s-premium-contact section" id="section8">
		<div class="content-main">
			<form class="s-premium-contact__content contact__content">
				<div class="s-premium-contact__logo">
					<img class="lazy" data-src="<?php echo THEME_URL  ?>/assets/images/logo-goc.svg" />
				</div>
				<div class="s-premium-contact__info">
					<h4>KHU ĐÔ THỊ ECOPARK</h4>
					<p>Điện thoại: (+84) 969 789 589</p>
					<p>Website: www.ecopark.com.vn</p>
				</div>
				<div class="s-premium-contact__form  fadeInUpBig">
					<div class="row">
						<div class="">
							<label>HỌ VÀ TÊN:</label>
							<input type="text" class="form-control" name="c_name">
						</div>
						<div class="">
							<label>EMAIL:</label>
							<input type="text" class="form-control" name="c_email">
						</div>
					</div>
					<div class="row">
						<div class="">
							<label>SĐT:</label>
							<input type="text" class="form-control" name="c_phone">
						</div>
						<div class="">
							<label>ĐỊA CHỈ:</label>
							<input type="text" class="form-control" name="c_address">
						</div>
					</div>
					<div class="text-center">
						<input type="hidden" name="action" value="ajaxRegister">
						<input type="hidden" name="c_source" value="<?php echo $source ?>">
						<button type="submit" class="btn btn-light">
							Gửi Liên Hệ
							<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-arrow-right" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
								<path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
							</svg>
						</button>
					</div>
				</div>
		</div>
		<div class="s-premium-contact__footer">
			2021 <strong>Haven park</strong> - Khu đô thị Ecopark. All rights reserved
		</div>
	</div>
</div>

<!-- <div class="call-now-button">
			<div>
				<p class="call-text"> <b>Gọi Ngay!</b> </p>
				<a href="tel:0123456789" title="Call Now">
				<div class="quick-alo-ph-circle active"></div>
				<div class="quick-alo-ph-circle-fill active"></div>
				<div class="quick-alo-phone-img-circle shake"></div>
				</a>
			</div>
		</div> -->

<!-- scroll top top -->
<!-- <div class="scroll-to-top">
			<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-arrow-up-short" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
				<path fill-rule="evenodd" d="M8 12a.5.5 0 0 0 .5-.5V5.707l2.146 2.147a.5.5 0 0 0 .708-.708l-3-3a.5.5 0 0 0-.708 0l-3 3a.5.5 0 1 0 .708.708L7.5 5.707V11.5a.5.5 0 0 0 .5.5z"/>
			  </svg>
		</div> -->
</div>
<!-- Modal -->
<div class="modal fade" id="modalViewCanHo" tabindex="-1" role="dialog" aria-hidden="true" style="color: white; ">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content text-center" style="background: url(<?php echo THEME_URL ?>/assets/images/bg-2.png);">
			<div class="modal-header">
				<h5 class="modal-title" style="text-align: center;width:100%;text-transform: uppercase;"></h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true" style="color: white;">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<img class="modal-image" src="" alt="" style="margin-bottom: 20px;">

				<p class="modal-content1"></p>
				<p class="modal-content2"></p>
				<p class="modal-content3"></p>
			</div>
			<!-- <div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				<button type="button" class="btn btn-primary">Save changes</button>
			</div> -->
		</div>
	</div>
</div>

<?php get_footer() ?>