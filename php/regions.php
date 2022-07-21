<?php
if ( isset ( $_GET[ 'region_kyiv' ] ) ) 			{ $query = "SELECT * FROM region_names WHERE region_name='region_kyiv'"; }
if ( isset ( $_GET[ 'region_vinitska' ] ) ) 		{ $query = "SELECT * FROM region_names WHERE region_name='region_vinitska'"; }
if ( isset ( $_GET[ 'region_volynska' ] ) ) 		{ $query = "SELECT * FROM region_names WHERE region_name='region_volynska'"; }
if ( isset ( $_GET[ 'region_dnipropetrovsk' ] ) ) 	{ $query = "SELECT * FROM region_names WHERE region_name='region_dnipropetrovsk'"; }
if ( isset ( $_GET[ 'region_donetsk' ] ) ) 			{ $query = "SELECT * FROM region_names WHERE region_name='region_donetsk'"; }
if ( isset ( $_GET[ 'region_zhytomyr' ] ) ) 	 	{ $query = "SELECT * FROM region_names WHERE region_name='region_zhytomyr'"; }
if ( isset ( $_GET[ 'region_zakarpatska' ] ) ) 		{ $query = "SELECT * FROM region_names WHERE region_name='region_zakarpatska'"; }
if ( isset ( $_GET[ 'region_zaporozhye' ] ) )		{ $query = "SELECT * FROM region_names WHERE region_name='region_zaporozhye'"; }
if ( isset ( $_GET[ 'region_ivano-frankivska' ] ) )	{ $query = "SELECT * FROM region_names WHERE region_name='region_ivano-frankivska'"; }
if ( isset ( $_GET[ 'region_kyivska' ] ) ) 			{ $query = "SELECT * FROM region_names WHERE region_name='region_kyivska'"; }
if ( isset ( $_GET[ 'region_kirovogradska' ] ) ) 	{ $query = "SELECT * FROM region_names WHERE region_name='region_kirovogradska'"; }
if ( isset ( $_GET[ 'region_luganska' ] ) ) 		{ $query = "SELECT * FROM region_names WHERE region_name='region_luganska'"; }
if ( isset ( $_GET[ 'region_lvivska' ] ) ) 			{ $query = "SELECT * FROM region_names WHERE region_name='region_lvivska'"; }
if ( isset ( $_GET[ 'region_mykolaiv' ] ) ) 		{ $query = "SELECT * FROM region_names WHERE region_name='region_mykolaiv'"; }
if ( isset ( $_GET[ 'region_odessa' ] ) ) 	 		{ $query = "SELECT * FROM region_names WHERE region_name='region_odessa'"; }
if ( isset ( $_GET[ 'region_poltavska' ] ) )		{ $query = "SELECT * FROM region_names WHERE region_name='region_poltavska'"; }
if ( isset ( $_GET[ 'region_rivnenska' ] ) )		{ $query = "SELECT * FROM region_names WHERE region_name='region_rivnenska'"; }
if ( isset ( $_GET[ 'region_sumska' ] ) )			{ $query = "SELECT * FROM region_names WHERE region_name='region_sumska'"; }
if ( isset ( $_GET[ 'region_ternopilska' ] ) ) 		{ $query = "SELECT * FROM region_names WHERE region_name='region_ternopilska'"; }
if ( isset ( $_GET[ 'region_kharkiv' ] ) ) 			{ $query = "SELECT * FROM region_names WHERE region_name='region_kharkiv'"; }
if ( isset ( $_GET[ 'region_kherson' ] ) ) 			{ $query = "SELECT * FROM region_names WHERE region_name='region_kherson'"; }
if ( isset ( $_GET[ 'region_khmelnytska' ] ) ) 		{ $query = "SELECT * FROM region_names WHERE region_name='region_khmelnytska'"; }
if ( isset ( $_GET[ 'region_сherkaska' ] ) ) 		{ $query = "SELECT * FROM region_names WHERE region_name='region_сherkaska'"; }
if ( isset ( $_GET[ 'region_chernivetska' ] ) ) 	{ $query = "SELECT * FROM region_names WHERE region_name='region_chernivetska'"; }
if ( isset ( $_GET[ 'region_chernigivska' ] ) ) 	{ $query = "SELECT * FROM region_names WHERE region_name='region_chernigivska'"; }
include_once 'read_from_DB.php';
$row = $result->fetch_assoc();
runMyFunction( $row );

/**
 * Створює головні сторінки розділу "Області" ( значення витягуються з БД )
 *
 * @param  {string}  name      	  Назва області англійськими літерами в нижньому регістрі
 * @param  {string}  header1   	  Назва області в Називному відмінку
 * @param  {string}  header2   	  Назва області в Орудному відмінку
 * @param  {string}  header3   	  Назва області в Родовому відмінку
 * @param  {string}  p1        	  Містить в собі значення першого абзацу
 * @param  {string}  p2        	  Містить в собі значення другого абзацу
 * @param  {string}  p3        	  Містить в собі значення третього абзацу
 * @param  {string}  p4        	  Містить в собі значення четвертого абзацу
 * @param  {string}  iframe    	  iframe, який містить зображення області на карті
 * @param  {string}  hotel     	  посилання на готелі конкретної області
 * @param  {string}  hotel_iframe iframe, який показує розміщення готелів області на карті
 *
 * !!! ВАЖЛИВО !!!
 * Для повного формування і коректного відображення сторінки, в папці img має знаходитись:
 * 3 зображення високої якості ( бажано 1920 х 1080, мінімум 1280 x 720) з іменами формату name_slider1.jpg, name_slider2.jpg, name_slider3.jpg,
 * 5 зображеннь ( мінімум 540 х 400 ) з іменами формату church_name.jpg, museum_name.jpg, resorts_name.jpg, castle_name.jpg, park_name.jpg,
 * де name - це ключове слово області, яке знаходиться в таблиці region_names в колонці Key_name.
 */
function runMyFunction( $row ) {
	$name         = $row[ "Key_name" ];
	$header1      = $row[ "Nominative" ];
	$header2      = $row[ "Ablative" ];
	$header3      = $row[ "Genitive" ];
	$p1           = $row[ "Paragraph1" ];
	$p2           = $row[ "Paragraph2" ];
	$p3           = $row[ "Paragraph3" ];
	$p4           = $row[ "Paragraph4" ];
	$iframe       = $row[ "Map" ];
	$hotel        = $row[ "linkHotel" ];
	$hotel_iframe = $row[ "Hotels" ];
    echo '<!DOCTYPE html>
    <html>
    <head>
    	<meta charset="utf-8">
    	<meta name="viewport" content="width=device-width, intial-scale=1.0">
    	<link rel="stylesheet" type="text/css" href="../style/style.css">
    		<link rel="stylesheet" type="text/css" href="../style/region.css">
    	<link  rel = "stylesheet"  href = "https://unpkg.com/aos@next/dist/aos.css">
    	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    	<script src="../script/script.js"></script>
    	<title>Музей туризму</title>
    </head>
    <body data-spy="scroll" data-target=".navbar" data-offset="50">
    <header>



    					<nav class="navbar navbar-expand-lg navbar-light fixed-top">
    						<div class="container">
    					  <a class="navbar-brand" href="../index.php">
    					  	<img class="logo" src="../img/ukraine-logo.png">
    					  </a>
    					  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    					    <span class="navbar-toggler-icon"></span>
    					  </button>

    					  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    					    <ul class="navbar-nav ml-lg-auto">
    					      <li class="nav-item">
    					        <a class="nav-link" href="../index.php">Головна <span class="sr-only">(current)</span></a>
    					      </li>
    								<li class="nav-item active dropdown">
     								 <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
     									 Області
     								 </a>
									<div class="dropdown-menu" aria-labelledby="navbarDropdown">
									';
									include_once "links.php";
									foreach($regions as $region){
									 menu($region, '');
									}
									echo'
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
									<a class="dropdown-item" href="should_visit.php?castle_main=true">Фортеці</a>
									<div class="dropdown-divider"></div>
									<a class="dropdown-item" href="should_visit.php?resort_main=true">Курорти</a>
									<div class="dropdown-divider"></div>
									<a class="dropdown-item" href="should_visit.php?park_main=true">Парки</a>
									<div class="dropdown-divider"></div>
									<a class="dropdown-item" href="should_visit.php?church_main=true">Храми</a>
									<div class="dropdown-divider"></div>
									<a class="dropdown-item" href="should_visit.php?museum_main=true">Музеї</a>
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
						<form class="" action="Search.php?go" method="post" id="searchform">
							<input type="text" name="name" value="" placeholder="Пошук">
							<a class="close"><i class="fa fa-times"></i></a>
							<button type="submit" class="search-go" name="submit" value="Search">Знайти</input>
						</form>
					</div>
                  </div>
                </div>
                </div>
              </nav>
      </header>

    <div class="jumbotron jumbotron-fluid height100p">
    	<div class="region">
    <h1>' . $header1 . '</h1>
    </div>
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="../img/' . $name . '_slider1.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="../img/' . $name . '_slider2.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="../img/' . $name . '_slider3.jpg" class="d-block w-100" alt="...">
        </div>
      </div>
    </div>
    </div>
    <section class="sec1">
    	<div class="container">
    		<div class="row">
    			<div class="col-sm-4" data-aos="fade-up"
        data-aos-duration="1000"
        data-aos-delay="1000">
    		<div class="placeBox Box1">
          '. $iframe .'
    			</div>
    			</div>

    			<div class="col-sm-4" data-aos="fade-up"
        data-aos-duration="1000"
        data-aos-delay="1000">
    				<div class="placeBox Box2">
    					<div class="info">
    						<h2>' . $header1 . '</h2>
    						<p>' . $p1 . '</p>
    						<p>' . $p2 . '</p>
    						<p>' . $p3 . '</p>
	              <p>' . $p4 . '</p>
    					</div>
    				</div>
    			</div>
    		</div>
    		</div>
    </section>

    <section class="blog">
    	<div class="container">
    		<div class="row">
    			<div class="offset-sm-2 col-sm-8">
    				<div class="headerText">
    					<h2 data-aos="fade-up"
    		data-aos-duration="1000"
    		data-aos-delay="0">До подорожі ' . $header2 . '</h2>
    					<p></p>
    				</div>
    			</div>
    		</div>
    		<div class="row" >
    			<div class="col-sm-6" data-aos="fade-up"
    		data-aos-duration="250"
    		data-aos-delay="500">
    				<div class="blogpost">
    					<div class="imgBx">
    						<img src="../img/church_' . $name . '.jpg" class="img-fluid">
    					</div>
    					<div class="content">
    						<h1>Храми ' . $header3 . '</h1>
    						<p>Духовні споруди</p>
    						<a href="page_gen.php?church_' . $name . '=true" class="btn btnD2">Храми</a>
    						<div class="clearfix"></div>
    					</div>
    				</div>
    			</div>
    			<div class="col-sm-6" data-aos="fade-down"
    		data-aos-duration="250"
    		data-aos-delay="500">
    				<div class="blogpost">
    					<div class="imgBx">
    						<img src="../img/park_' . $name . '.jpg" class="img-fluid">
    					</div>
    					<div class="content">
    						<h1>Парки ' . $header3 . '</h1>
    						<p>Свіжість повітря</p>
    						<a href="page_gen.php?park_' . $name . '=true" class="btn btnD2">Парки</a>
    						<div class="clearfix"></div>
    					</div>
    				</div>
    			</div>
    			<div class="col-sm-6" data-aos="fade-down"
    		data-aos-duration="250"
    		data-aos-delay="500">
    				<div class="blogpost">
    					<div class="imgBx">
    						<!--img src="../img/hotel_' . $name . '.jpg" class="img-fluid"-->
    				       '. $hotel_iframe .'
    					</div>
    					<div class="content">
    						<h1>Готелі ' . $header3 . '</h1>
    						<p>Де переночувати</p>
    						<a href='. $hotel .' class="btn btnD2">Готелі</a>
    						<div class="clearfix"></div>
    					</div>
    				</div>
    			</div>
    			<div class="col-sm-6" data-aos="fade-up"
    		data-aos-duration="250"
    		data-aos-delay="500">
    				<div class="blogpost">
    					<div class="imgBx">
    						<img src="../img/resorts_' . $name . '.jpg" class="img-fluid">

    					</div>
    					<div class="content">
    						<h1>Курорти ' . $header3 . '</h1>
    						<p>Можна відпочити</p>
    						<a href="page_gen.php?resorts_' . $name . '=true" class="btn btnD2">Курорти</a>
    						<div class="clearfix"></div>
    					</div>
    				</div>
    			</div>
    			<div class="col-sm-6" data-aos="fade-up"
    		data-aos-duration="250"
    		data-aos-delay="500">
    				<div class="blogpost">
    					<div class="imgBx">
    						<img src="../img/castle_' . $name . '.jpg" class="img-fluid">

    					</div>
    					<div class="content">
    						<h1>Фортеці ' . $header3 . '</h1>
    						<p>Завжди на захисті</p>
    						<a href="page_gen.php?castle_' . $name . '=true" class="btn btnD2">Фортеці</a>
    						<div class="clearfix"></div>
    					</div>
    				</div>
    			</div>
    			<div class="col-sm-6" data-aos="fade-down"
    		data-aos-duration="250"
    		data-aos-delay="500">
    				<div class="blogpost">
    					<div class="imgBx">
    						<img src="../img/museum_' . $name . '.jpg" class="img-fluid">

    					</div>
    					<div class="content">
    						<h1>Музеї ' . $header3 . '</h1>
    						<p>Дивні та непримітні</p>
    						<a href="page_gen.php?museum_' . $name . '=true" class="btn btnD2">Музеї</a>
    						<div class="clearfix"></div>
    					</div>
    				</div>
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
    ';
}
?>
