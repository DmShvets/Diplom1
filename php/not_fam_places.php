<?php
// Створення сторінки "Маловідомі місця" або "7 чудес України"
head_NFP();
if ( isset( $_GET[ 'NFP' ] ) )           { $query = "SELECT * FROM not_famous_places"; }
if ( isset( $_GET[ 'seven_wonders' ] ) ) { $query = "SELECT * FROM seven_wonders"; }
include_once 'read_from_DB.php';
define('DB_CHARSET', 'utf8');
while ( $row = mysqli_fetch_assoc( $result ) ) {
    content_NFP( $row );
}
footer_NFP();

// Створює основу сторінки "Маловідомі місця"
function head_NFP() {
    echo '
    <!DOCTYPE html>
    <html lang="en" dir="ltr">
      <head>
        <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, intial-scale=1.0">
            <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title></title>
        <link rel="stylesheet" href="../style/style.css">
        <link rel="stylesheet" href="../style/other.css">
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
      <script src="../script/script.js"></script>
      </head>
      <body>
        <header>
        <div class="container">
        <div class="logo">
      <a href="../index.php"> <img src="../img/ukraine-logo.png" alt=""></a>
        </div>
      </div>
    </header>
    ';
}
/**
 * Функція content_NFP() створює контент на сторінці "Маловідомі місця"
 * @param {array}  row         Асоціативний масив значень, зчитаних з бази даних
 * @param {string} place_name  Назва маловідомого місця
 * @param {string} location    Розташування маловідомого місця
 * @param {string} information Інформація про маловідоме місце
 * @param {string} img         Зображення на background, ввитягується з БД ( в назві потрібно вказувати розширення,  зображення має знаходитись в папці img)
 */
function content_NFP( $row ) {
    $place_name  = $row[ "place_name"];
    $location    = $row[ "location" ];
    $information = $row[ "information" ];
    $img         = $row[ "img"];
    echo '
    <section style="background:url(../img/'. $img .');" class="sec_page">
        <div class="data_header">
            <h1>'.$place_name.'</h1>
        </div>
    </section>
    <section class="secText">
        <h1>'. $location .'</h1>
        <p>' . $information . '</p>
    </section>
    ';
}

// Завершує створення сторінки маловідомих місць
function footer_NFP() {
    echo '
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