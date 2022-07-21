<!DOCTYPE html>
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
                <li class="nav-item dropdown">
                 <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                   Області
                 </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <?
                  include_once "links.php";
                  foreach($regions as $region){
                       menu($region, '');
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
<div class="data_content">
  	<div class="container h100">
<?php
/* attempt to make code better
  $array[] = array("place" => "castle",  "query" => "SELECT * FROM region_names LEFT JOIN region_castle ON region_names.Id = region_castle.id_region WHERE _name LIKE '%$query%' OR region_castle.Paragraph1 LIKE '%$query%' OR region_castle.Paragraph2 LIKE '%$query%' OR region_castle.Paragraph3 LIKE '%$query%' ");
  $array[] = array("place" => "museum",  "query" => "SELECT * FROM region_names LEFT JOIN region_museum ON region_names.Id = region_museum.id_region WHERE _name LIKE '%$query%' OR region_museum.Paragraph1 LIKE '%$query%' OR region_museum.Paragraph2 LIKE '%$query%' OR region_museum.Paragraph3 LIKE '%$query%' ");
  $array[] = array("place" => "church",  "query" => "SELECT * FROM region_names LEFT JOIN region_church ON region_names.Id = region_church.id_region WHERE _name LIKE '%$query%' OR region_church.Paragraph1 LIKE '%$query%' OR region_church.Paragraph2 LIKE '%$query%' OR region_church.Paragraph3 LIKE '%$query%' ");
  $array[] = array("place" => "park",    "query" => "SELECT * FROM region_names LEFT JOIN region_park   ON region_names.Id = region_park.id_region   WHERE _name LIKE '%$query%' OR region_park.Paragraph1   LIKE '%$query%' OR region_park.Paragraph2   LIKE '%$query%' OR region_park.Paragraph3 LIKE '%$query%' ");
  $array[] = array("place" => "resorts", "query" => "SELECT * FROM region_names LEFT JOIN region_resorts ON region_names.Id = region_resorts.id_region WHERE _name LIKE '%$query%' OR region_resorts.Paragraph1 LIKE '%$query%' OR region_resorts.Paragraph2 LIKE '%$query%' OR region_resorts.Paragraph3 LIKE '%$query%' ");
  foreach($array as $arr){
    $sql = $arr["query"];
    $result = mysqli_query( $link, $sql );
    if ( mysqli_affected_rows( $link ) > 0 ) {
      while ( $row = mysqli_fetch_array( $result ) ) {
        $_name     = $row[ '_name' ];
        $key_name  = $row[ 'Key_name' ];
        $paragraph = $row[ 'Paragraph1' ];
        echo "<div class='result_search'><h2><a href=\"page_gen.php?$arr[\"place\"]_$key_name\">$_name</a></h2><p>$paragraph</p></div>";
      }
    }
    else {
      $no_result++;
    }
  }*/
if (isset( $_POST[ 'submit' ] ) ) {
  if ( isset( $_GET[ 'go' ] ) ) {
    $query = $_POST[ 'name' ]; 
    $query = isset( $query ) ? trim( $query ) : false;
    if ( strlen( $query ) < 4 ) {
      echo "<div class='result_search'><h4>Будь ласка, введіть пошуковий запит довжиною більше 4 символів<br><a href=\"../index.php\"></h4><h2>На головну</a></h2></div>";
      exit;
    } 
  else if ( $query ) {
    require_once 'connection.php';
    $link = mysqli_connect( $host, $user, $password, $database ) or die( "Помилка " . mysqli_error ( $link ) );
    	$link->set_charset("utf8");
    $query = htmlspecialchars($query); 
    $query = mysqli_real_escape_string($link, $query);

    /* old useless sql query
      $sql = "SELECT N.Id, N.region_name, N.Key_name, N.Nominative, N.Ablative, N.Genitive, 
                        C.name AS church_name, 
                        R.name AS resort_name,
                        P.name AS park_name, 
                        M.name AS museum_name, 
                        K.name AS castle_name 
                      FROM region_names N 
                        LEFT JOIN region_church C ON N.Id = C.id_region 
                        LEFT JOIN region_resort R ON C.id_church = R.id_resort 
                        LEFT JOIN region_park P ON R.id_resort = P.id_park 
                        LEFT JOIN region_museum M ON P.id_park = M.id_museum 
                        LEFT JOIN region_castle K on M.id_museum = K.id_castle 
                      WHERE N.Key_name LIKE '%$query%' 
                        OR N.Nominative LIKE '%$query%' 
                        OR N.Ablative LIKE '%$query%' 
                        OR N.Genitive LIKE '%$query%'
                        OR C.name LIKE '%$query%'
                        OR R.name LIKE '%$query%'
                        OR P.name LIKE '%$query%'
                        OR M.name LIKE '%$query%'
                        OR K.name LIKE '%$query%'
                      ";*/
    

    echo "<h3>Результати пошуку за запитом \"$query\":</h3>";
    $no_result = 0; 
    /* search 2.0
      $no_result = 0; 
      $results;
      $words = explode(" ", $query);
      foreach ($words as $word) {

        $sql = "SELECT * FROM region_names WHERE Key_name LIKE '%$word%' OR Nominative LIKE '%$word%' OR Genitive LIKE '%$word%'";

        $result = mysqli_query( $link, $sql );

        if ( mysqli_affected_rows( $link ) > 0 ) {
          while ( $row = mysqli_fetch_array( $result ) ) {
            $region_name  = $row[ 'region_name' ];
            $key_name     = $row[ 'Key_name' ];
            $name         = $row[ 'Nominative' ];
            $g_name       = $row[ 'Genitive' ];
            $paragraph    = $row[ 'Paragraph1' ];
            $results[] = "<div class='result_search'><h2><a href=\"regions.php?$region_name=true\">$name</a></h2><p>$paragraph</p></div>";
          }
        }

        $sql = "SELECT * FROM main_should_visit where CONCAT(place, ' ', city, ' ' , main_paragraph1, ' ', main_paragraph2) LIKE '%$word%';";

        $result = mysqli_query( $link, $sql );  
        
        if ( mysqli_affected_rows( $link ) > 0 ) {
          while ( $row = mysqli_fetch_array( $result ) ) {
            $place  = $row[ 'place' ];
            $city     = $row[ 'city' ];
            $href         = $row[ 'img' ];
            $paragraph    = $row[ 'main_paragraph1' ];
            $results[] = "<div class='result_search'><h2><a href=\"page_gen.php?$href=true\">$place $city</a></h2><p>$paragraph</p></div>";
          }
        }
      }
      foreach(array_unique($results) as $line){
        echo $line;
      }*/
    $sql = "SELECT * FROM region_names WHERE Key_name LIKE '%$query%' OR Nominative LIKE '%$query%' OR Genitive LIKE '%$query%'";
    $result = mysqli_query( $link, $sql );
    if ( mysqli_affected_rows( $link ) > 0 ) {
      while ( $row = mysqli_fetch_array( $result ) ) {
        $region_name  = $row[ 'region_name' ];
        $key_name     = $row[ 'Key_name' ];
        $name         = $row[ 'Nominative' ];
        $g_name       = $row[ 'Genitive' ];
        $paragraph    = $row[ 'Paragraph1' ];
        echo "<div class='result_search'><h2><a href=\"regions.php?$region_name=true\">$name</a></h2><p>$paragraph</p></div>";
      }
    }
    else {
      $no_result++;
    }

    $sql = "SELECT * FROM main_should_visit where CONCAT(place, ' ', city, ' ' , main_paragraph1, ' ', main_paragraph2) LIKE '%$query%';";
     //"SELECT * FROM main_should_visit WHERE place LIKE '%$query%' OR city LIKE '%$query%'";// OR main_paragraph1 LIKE '%$query%'
    $result = mysqli_query( $link, $sql );  
    if ( mysqli_affected_rows( $link ) > 0 ) {
      while ( $row = mysqli_fetch_array( $result ) ) {
        $place  = $row[ 'place' ];
        $city     = $row[ 'city' ];
        $href         = $row[ 'img' ];
        $paragraph    = $row[ 'main_paragraph1' ];
        echo "<div class='result_search'><h2><a href=\"page_gen.php?$href=true\">$place $city</a></h2><p>$paragraph</p></div>";
      }
    }
    else {
      $no_result++;
    }

    $sql = "SELECT * FROM region_names 
            LEFT JOIN region_church 
            ON region_names.Id = region_church.id_region
            WHERE _name LIKE '%$query%'
            OR region_church.Paragraph1 LIKE '%$query%'
            OR region_church.Paragraph2 LIKE '%$query%'
            OR region_church.Paragraph3 LIKE '%$query%'           
            ";
    $result = mysqli_query( $link, $sql );
    if ( mysqli_affected_rows( $link ) > 0 ) {
      while ( $row = mysqli_fetch_array( $result ) ) {
        $_name     = $row[ '_name' ];
        $key_name  = $row[ 'Key_name' ];
        $paragraph = $row[ 'Paragraph1' ];
        echo "<div class='result_search'><h2><a href=\"page_gen.php?church_$key_name\">$_name</a></h2><p>$paragraph</p></div>";
      }
    }
    else {
      $no_result++;
    }

    $sql = "SELECT * FROM region_names 
            LEFT JOIN region_castle 
            ON region_names.Id = region_castle.id_region
            WHERE _name LIKE '%$query%'
            OR region_castle.Paragraph1 LIKE '%$query%'
            OR region_castle.Paragraph2 LIKE '%$query%'
            OR region_castle.Paragraph3 LIKE '%$query%' 
            ";
    $result = mysqli_query( $link, $sql );
    if ( mysqli_affected_rows( $link ) > 0 ) {
      while ( $row = mysqli_fetch_array( $result ) ) {
        $_name     = $row[ '_name' ];
        $key_name  = $row[ 'Key_name' ];
        $paragraph = $row[ 'Paragraph1' ];
        echo "<div class='result_search'><h2><a href=\"page_gen.php?castle_$key_name\">$_name</a></h2><p>$paragraph</p></div>";
      }
      }
      else {
        $no_result++;
      }
      $sql = "SELECT * FROM region_names 
              LEFT JOIN region_museum 
              ON region_names.Id = region_museum.id_region
              WHERE _name LIKE '%$query%'
              OR region_museum.Paragraph1 LIKE '%$query%'
              OR region_museum.Paragraph2 LIKE '%$query%'
              OR region_museum.Paragraph3 LIKE '%$query%' 
              ";
      $result = mysqli_query( $link, $sql );
      if (mysqli_affected_rows( $link ) > 0 ) {
        while ( $row = mysqli_fetch_array( $result ) ) {
          $_name     = $row[ '_name' ];
          $key_name  = $row[ 'Key_name' ];
          $paragraph = $row[ 'Paragraph1' ];
          echo "<div class='result_search'><h2><a href=\"page_gen.php?museum_$key_name\">$_name</a></h2><p>$paragraph</p></div>";
        }
      }
      else {
        $no_result++;
      }
      $sql = "SELECT * FROM region_names 
              LEFT JOIN region_park 
              ON region_names.Id = region_park.id_region
              WHERE _name LIKE '%$query%'
              OR region_park.Paragraph1 LIKE '%$query%'
              OR region_park.Paragraph2 LIKE '%$query%'
              OR region_park.Paragraph3 LIKE '%$query%' 
              ";
      $result = mysqli_query( $link, $sql );
      if ( mysqli_affected_rows( $link ) > 0 ) {
        while ( $row = mysqli_fetch_array( $result ) ) {
          $_name     = $row[ '_name' ];
          $key_name  = $row[ 'Key_name' ];
          $paragraph = $row[ 'Paragraph1' ];
          echo "<div class='result_search'><h2><a href=\"page_gen.php?park_$key_name\">$_name</a></h2><p>$paragraph</p></div>";
        }
      }
      else {
        $no_result++;
      }
      $sql = "SELECT * FROM region_names 
              LEFT JOIN region_resort 
              ON region_names.Id = region_resort.id_region
              WHERE _name LIKE '%$query%'
              OR region_resort.Paragraph1 LIKE '%$query%'
              OR region_resort.Paragraph2 LIKE '%$query%'
              OR region_resort.Paragraph3 LIKE '%$query%' 
              ";
      $result = mysqli_query( $link, $sql );
      if ( mysqli_affected_rows( $link ) > 0 ) {
        while ( $row = mysqli_fetch_array( $result ) ) {
          $_name     = $row[ '_name' ];
          $key_name  = $row[ 'Key_name' ];
          $paragraph = $row[ 'Paragraph1' ];
          echo "<div class='result_search'><h2><a href=\"page_gen.php?resorts_$key_name\">$_name</a></h2><p>$paragraph</p></div>";
        }
      }
      else {
        $no_result++;
      }
      if ( $no_result == 7 ) {
        echo "<div class='result_search'><h4>нічого не знайдено<br><a href=\"../index.php\"></h4><h2>На головну</a></h2></div>";
      }
    }
    else {
      echo "<div class='result_search'><h4>Будь ласка, введіть пошуковий запит<br><a href=\"../index.php\"></h4><h2>На головну</a></h2></div>";
      exit;
    }
  }
}
?>
</div></div>
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
