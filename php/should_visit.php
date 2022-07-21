<?php

if ( isset( $_GET[ 'castle_main' ] ) ) {
    create_main_page( "Фортеці", "castle", "castle_kyiv" );
}
if ( isset( $_GET[ 'resort_main' ] ) ) {
    create_main_page( "Курорти", "resorts", "resorts_zaporozhye" );
}
if ( isset( $_GET[ 'park_main' ] ) ) {
    create_main_page( "Парки", "park", "park_kyiv" );
}
if ( isset( $_GET[ 'church_main' ] ) ) {
    create_main_page( "Храми", "church", "church_kyiv" );
}
if ( isset( $_GET[ 'museum_main' ] ) ) {
    create_main_page( "Музеї", "museum", "museum_odessa" );
}

/**
 * Створює головні сторінки розділу "Варто відвідати" 
 *
 * @param  {string}  name      Назва області
 * @param  {string}  placeName Ключове слово для створення гіперпосилань ( може приймати наступні значення: church, castle, museum, resorts, park )
 * @param  {string}  imgName   Назва зображення для background ( зображення з розщиренням .jpg, в назві розширення вказувати не потрібно,  зображення 
 *                             має знаходитись в папці img)
 * 
 */
function create_main_page( $name, $placeName, $imgName ) {
    echo '
        <!DOCTYPE html>
        <html>
        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, intial-scale=1.0">
            <link rel="stylesheet" type="text/css" href="../style/style.css">
            <link  rel = "stylesheet"  href = "https://unpkg.com/aos@next/dist/aos.css">
            <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
            <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
            <script src="../script/script.js"></script>
            <script src="../script/script_page.js"></script>
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
                                        <li class="nav-item dropdown">
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
            <img src="../img/' . $imgName . '.jpg" class="img-fluid next" alt="Responsive image">
              <div class="container h100">
                <div class="contentBox h100">
                    <h1>' . $name . '</h1>
                    <div class="scrolldown">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                    </div>
              </div>
        </div>
        
        <section class="region_list">
            <div class="container h100">
                <h2>Оберіть область зі списку</h2>
                <ul>
                    <li><a href="page_gen.php?' . $placeName . '_vinitska=true"><span><img src="../img/Vinytska.png" class="gerb" alt="Vinytska"></span><h4>Вінницька</h4></a></li>
                    <li><a href="page_gen.php?' . $placeName . '_volynska=true"><span><img src="../img/Volynska.png" class="gerb" alt="Volynska"></span><h4>Волинська</h4></a></li>
                    <li><a href="page_gen.php?' . $placeName . '_dnipropetrovsk=true"><span><img src="../img/Dnipropetrovska.png" class="gerb" alt="Dnipropetrovska"></span><h4>Дніпропетровська</h4></a></li>
                    <li><a href="page_gen.php?' . $placeName . '_donetsk=true"><span><img src="../img/Donetska.png" class="gerb" alt="Donetska"></span><h4>Донецька</h4></a></li>
                    <li><a href="page_gen.php?' . $placeName . '_zhytomyr=true"><span><img src="../img/Zhytomyrska.png" class="gerb" alt="Zhytomyrska"></span><h4>Житомирська</h4></a></li>
                    <li><a href="page_gen.php?' . $placeName . '_zakarpatska=true"><span><img src="../img/Zakarpatska.png" class="gerb" alt="Zakarpatska"></span><h4>Закарпатська</h4></a></li>
                    <li><a href="page_gen.php?' . $placeName . '_zaporozhye=true"><span><img src="../img/Zaporizhska.png" class="gerb" alt="Zaporizhska"></span><h4>Запоріжська</h4></a></li>
                    <li><a href="page_gen.php?' . $placeName . '_ivano-frankivska=true"><span><img src="../img/Ivano-Frankivska.png" class="gerb" alt="Ivano-Frankivska"></span><h4>Івано-Франківська</h4></a></li>
                    <li><a href="page_gen.php?' . $placeName . '_kyiv=true"><span><img src="../img/Kyiv.png" class="gerb" alt="Kyive"></span><h4>Київ</h4></a></li>
                    <li><a href="page_gen.php?' . $placeName . '_kyivska=true"><span><img src="../img/Kyivska.png" class="gerb" alt="Kyivska"></span><h4>Київська</h4></a></li>
                    <li><a href="page_gen.php?' . $placeName . '_kirovogradska=true"><span><img src="../img/Kirovogradska.png" class="gerb" alt="Kirovogradska"></span><h4>Кіровоградська</h4></a></li>
                    <li><a href="page_gen.php?' . $placeName . '_luganska=true"><span><img src="../img/Luganska.png" class="gerb" alt="Luganska"></span><h4>Луганська</h4></a></li>
                    <li><a href="page_gen.php?' . $placeName . '_lvivska=true"><span><img src="../img/Lvivska.png" class="gerb" alt="Lvivska"></span><h4>Львівська</h4></a></li>
                    <li><a href="page_gen.php?' . $placeName . '_mykolaiv=true"><span><img src="../img/Mykolaivska.png" class="gerb" alt="Mykolaivska"></span><h4>Миколаївська</h4></a></li>
                    <li><a href="page_gen.php?' . $placeName . '_odessa=true"><span><img src="../img/Odeska.png" class="gerb" alt="Odeska"></span><h4>Одеська</h4></a></li>
                    <li><a href="page_gen.php?' . $placeName . '_poltavska=true"><span><img src="../img/Poltavska.png" class="gerb" alt="Poltavska"></span><h4>Полтавська</h4></a></li>
                    <li><a href="page_gen.php?' . $placeName . '_rivnenska=true"><span><img src="../img/Rivnenska.png" class="gerb" alt="Rivnenska"></span><h4>Рівненська</h4></a></li>
                    <li><a href="page_gen.php?' . $placeName . '_sumska=true"><span><img src="../img/Sumska.png" class="gerb" alt="Sumska"></span><h4>Сумська</h4></a></li>
                    <li><a href="page_gen.php?' . $placeName . '_ternopilska=true"><span><img src="../img/Ternopilska.png" class="gerb" alt="Ternopilska"></span><h4>Тернопільська</h4></a></li>
                    <li><a href="page_gen.php?' . $placeName . '_kharkiv=true"><span><img src="../img/Kharkivska.png" class="gerb" alt="Kharkivska"></span><h4>Харківська</h4></a></li>
                    <li><a href="page_gen.php?' . $placeName . '_kherson=true"><span><img src="../img/Khersonska.png" class="gerb" alt="Khersonska"></span><h4>Херсонська</h4></a></li>
                    <li><a href="page_gen.php?' . $placeName . '_khmelnytska=true"><span><img src="../img/Khmelnytska.png" class="gerb" alt="Khmelnytska"></span><h4>Хмельницька</h4></a></li>
                    <li><a href="page_gen.php?' . $placeName . '_сherkaska=true"><span><img src="../img/Cherkaska.png" class="gerb" alt="Cherkaska"></span><h4>Черкаська</h4></a></li>
                    <li><a href="page_gen.php?' . $placeName . '_chernivetska=true"><span><img src="../img/Chernivetska.png" class="gerb" alt="Chernivetska"></span><h4>Чернівецька</h4></a></li>
                    <li><a href="page_gen.php?' . $placeName . '_chernigivska=true"><span><img src="../img/Chernigivska.png" class="gerb" alt="Chernigivska"></span><h4>Чернігівська</h4></a></li>
                </ul>
            </div>
        </section>
        
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