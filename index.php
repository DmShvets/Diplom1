<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, intial-scale=1.0">
	<link rel="shortcut icon" href="img/ukraine-logo.png" type="image/png">
	<link rel="stylesheet" type="text/css" href="style/style.css">
	<link  rel = "stylesheet"  href = "https://unpkg.com/aos@next/dist/aos.css">
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	<script src="script/script.js"></script>
		<script src="script/jquery.maskedinput.js"></script>
	<title>Музей туризму</title>
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="50">
<header>

					<nav class="navbar navbar-expand-lg navbar-light fixed-top">
						<div class="container">
					  <a class="navbar-brand" href="#">
					  	<img class="logo" src="img/ukraine-logo.png">
					  </a>
					  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					    <span class="navbar-toggler-icon"></span>
					  </button>

					  <div class="collapse navbar-collapse" id="navbarSupportedContent">
					    <ul class="navbar-nav ml-lg-auto">

					      <li class="nav-item active">
					        <a class="nav-link" href="#">Головна <span class="sr-only">(current)</span></a>
					      </li>
								<li class="nav-item dropdown">
					        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					          Області
					        </a>
					        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
								<?
									include_once "php/links.php";
									foreach($regions as $region){
										menu($region);
									}
								?>
							</div>
					      </li>
					      <li class="nav-item">
					        <a class="nav-link" href="https://www.booking.com/searchresults.uk.html?aid=397594&label=gog235jc-1DCAEoggI46AdIKVgDaOkBiAEBmAEpuAEXyAEM2AED6AEB-AECiAIBqAIDuALakPT2BcACAdICJDU4OTVhYjViLTYxNWUtNGIzNi1hMjM5LTgxZDg3MjcwOTMzZNgCBOACAQ&sid=26f036ee79557394b419e201e4bbe750&sb=1&sb_lp=1&src=index&src_elem=sb&error_url=https%3A%2F%2Fwww.booking.com%2Findex.uk.html%3Faid%3D397594%3Blabel%3Dgog235jc-1DCAEoggI46AdIKVgDaOkBiAEBmAEpuAEXyAEM2AED6AEB-AECiAIBqAIDuALakPT2BcACAdICJDU4OTVhYjViLTYxNWUtNGIzNi1hMjM5LTgxZDg3MjcwOTMzZNgCBOACAQ%3Bsid%3D26f036ee79557394b419e201e4bbe750%3Bsb_price_type%3Dtotal%26%3B&ss=%D0%A3%D0%BA%D1%80%D0%B0%D1%97%D0%BD%D0%B0&is_ski_area=&checkin_year=&checkin_month=&checkout_year=&checkout_month=&group_adults=2&group_children=0&no_rooms=1&b_h4u_keep_filters=&from_sf=1&ss_raw=Er&ac_position=0&ac_langcode=uk&ac_click_type=b&dest_id=220&dest_type=country&place_id_lat=49.2776&place_id_lon=31.6119&search_pageview_id=0d9f6d2ddfe70072&search_selected=true">Готелі</a>
					      </li>
					      <li class="nav-item dropdown">
					        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					          Варто відвідати
					        </a>
					        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
					          <a class="dropdown-item" href="php/should_visit.php?castle_main=true">Фортеці</a>
					          <div class="dropdown-divider"></div>
					          <a class="dropdown-item" href="php/should_visit.php?resort_main=true">Курорти</a>
					          <div class="dropdown-divider"></div>
							  <a class="dropdown-item" href="php/should_visit.php?park_main=true">Парки</a>
							  <div class="dropdown-divider"></div>
							  <a class="dropdown-item" href="php/should_visit.php?church_main=true">Храми</a>
							  <div class="dropdown-divider"></div>
							  <a class="dropdown-item" href="php/should_visit.php?museum_main=true">Музеї</a>
					        </div>
					      </li>
					       <li class="nav-item">
					        <a class="nav-link" href="https://www.ktgg.kiev.ua/uk/">КТГГ</a>
					      </li>
					       <li class="nav-item">
					        <a class="nav-link" href="https://www.ktgg.kiev.ua/uk/contacts.html">Наші контакти</a>
					      </li>

							 <li class="nav-item">

					      </li>
								<li>
								<a id="search" class="search-btn">
									<i class="fa fa-search"></i>
								</a></li>
					    </ul>
					    <!--form class="form-inline my-2 my-lg-0">
					      <input class="form-control mr-sm-2" type="search" placeholder="" aria-label="Search">
					      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Знайти</button>
					    </form-->
							<div class="search-form">
								<form class="" action="php/Search.php?go" method="post" id="searchform">
									<input type="text" name="name" value="" placeholder="Пошук">
									<a class="close"><i class="fa fa-times"></i></a>
									<button type="submit" class="search-go" name="submit" value="Search">Знайти</input>
								</form>
							</div>
					  </div>
						</div>
					</nav>
</header>

<div class="jumbotron jumbotron-fluid height100p banner">
  <div class="container h100">
    <div class="contentBox h100">
    	<div>

    		<h1>МУЗЕЙ ТУРИЗМУ УКРАЇНИ</h1>
    		<p data-aos="fade-up"
    data-aos-duration="1000"
    data-aos-delay="0">Відкрий для себе Україну</p>
    	</div>
    </div>
  </div>
</div>
<section class="sec1">
	<div class="container">
		<div class="row">
			<div class="offset-sm-2 col-sm-8">
				<div class="headerText text-center">
					<h2 data-aos="fade-up"
    data-aos-duration="1000"
    data-aos-delay="0">Зацікавить кожного</h2>
					<p data-aos="fade-up"
    data-aos-duration="1000"
    data-aos-delay="500">В Україні існує безліч цікавих місць, про деякі з них мало хто знає</p>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-4" data-aos="fade-up"
    data-aos-duration="1000"
    data-aos-delay="1000">
		<a href="php/not_fam_places.php?NFP=true">
				<div class="placeBox">
					<div class="imgBx">
						<img src="img/optymistychna.jpg" class="img-fluid">
					</div>
					<div class="content">
						<h3>Маловідомі місця<br><span>Це варто побачити</span></h3>
					</div>
				</div>
				</a>
			</div>
			<div class="col-sm-4" data-aos="fade-up"
    data-aos-duration="1000"
    data-aos-delay="1000">
		<a href="Chornobyl.php">
				<div class="placeBox">
					<div class="imgBx">
						<img src="img/coleso.jpg" class="img-fluid">
					</div>
					<div class="content">
						<h3>Зона відчуження<br><span>Прип'ять | Трагедія | Радіація</span></h3>
					</div>
				</div>
				</a>
			</div>
			<div class="col-sm-4" data-aos="fade-up"
    data-aos-duration="1000"
    data-aos-delay="1000">
		<a href="php/not_fam_places.php?seven_wonders=true">
				<div class="placeBox">
					<div class="imgBx">
						<img src="img/church_kyiv.jpg" class="img-fluid">
					</div>
					<div class="content">
						<h3>7 чудес України<br><span>Красиво та унікально</span></h3>
					</div>
				</div>
				</a>
			</div>
		</div>
	</div>
</section>
<section class="sec2">
		<div class="container h100">
			<div class="contentBox h100">
				<div>
					<h2 data-aos="fade-up"
    data-aos-duration="1000"
    data-aos-delay="0">ЮНЕСКО</h2>
					<p data-aos="fade-up"
    data-aos-duration="1000"
    data-aos-delay="500">Об'єкти Світової спадщини ЮНЕСКО в Україні</p>
					<a href="UNESCO.html" class="btn btnD1">Переглянути</a>
				</div>
			</div>
		</div>
</section>
<section class="blog">
	<div class="container">
		<div class="row">
			<div class="offset-sm-2 col-sm-8">
				<div class="headerText">
					<h2>Рекомендуємо переглянути</h2>
					<p></p>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-6">
				<div class="blogpost">
					<div class="imgBx">
						<img src="img/ktgg.jpg" class="img-fluid">

					</div>
					<div class="content">
						<h1>КОЛЕДЖ ТУРИЗМУ І ГОТЕЛЬНОГО ГОСПОДАРСТВА</p>
						<a href="KTGG.html" class="btn btnD2">Про коледж</a>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>

			<div class="col-sm-6">
				<div class="blogpost">
					<div class="imgBx">
						<img src="img/ukraine-logo.png" class="img-fluid">
					</div>
					<div class="content">
						<h1>МУЗЕЙ ТУРИЗМУ</h1>
						<p>Завітайте до нас</p>
						<a href="#" class="btn btnD2">Про музей</a>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>


			<div class="col-sm-6">
				<div class="blogpost">
					<div class="imgBx">
						<img src="img/Ukraine_tur.jpg" class="img-fluid">
					</div>
					<div class="content">
						<h1>Україна</h1>
						<p>Розвиток туризму</p>
						<a href="#" class="btn btnD2">Про розвиток</a>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
			<div class="col-sm-6">
				<div class="blogpost">
					<div class="imgBx">
						<img src="img/vilage_turysm.jpg" class="img-fluid">

					</div>
					<div class="content">
						<h1>Туризм в Україні</h1>
						<p>Види туризму</p>
						<a href="#" class="btn btnD2">Про туризм</a>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>

		</div>
	</div>
</section>
<section class="contact">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div class="headerText text-center">
					<h2>Зв'язок</h2>
					<p>Ми можемо допомогти обрати час для відвідування нашого музею туризму України<br>
					Залиште дані і ми зв'яжемось з Вами</p>
				</div>
			</div>
		</div>
		<div class="row clearfix">
			<div class="offset-sm-2 col-sm-8">
				<form class="" action="php/phone.php" method="post">
					<div class="form-group">
						<label>Ім'я</label>
						<input type="text" name="name_contact" class="form-control" required="">
					</div>
					<div class="form-group">
						<label>Електронна пошта</label>
						<input type="text" name="el_contact" class="form-control" >
					</div>
					<div class="form-group">
						<label>Телефон</label>
						<input type="tel" name="tel_contact" class="form-control" required="">
					</div>
					<div class="form-group">
						<label>Повідомлення</label>
						<textarea class=" form-control textarea" name="mess_contact"></textarea>
					</div>
					<div class="form-group text-center">
						<button type="submit" class="btn btnD1">Відправити</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</section>


<!--////////////////////CONTENt\\\\\\\\\\\\\\\\\\\\\\\\-->



<footer>
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<ul class="sci">
					<li><a href=""><i class="fa fa-facebook"></i></a></li>
					<li><a href=""><i class="fa fa-twitter"></i></a></li>
					<li><a href=""><i class="fa fa-google"></i></a></li>
				</ul>
				<p class="cpryt">
					© 2020 All Rights Reserved | Created by <a href="#">&laquo;ShO‽&raquo;</a></p>
			</div>
		</div>
	</div>
</footer>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
</body>
</html>
