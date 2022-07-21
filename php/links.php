<?
    $regions[] = array( "link" => "regions.php?region_kyiv=true",             "name" => "Київ" );               // 3
    $regions[] = array( "link" => "regions.php?region_vinitska=true",         "name" => "Вінницька" );          // 9
    $regions[] = array( "link" => "regions.php?region_volynska=true",         "name" => "Волинська" );          // 10
    $regions[] = array( "link" => "regions.php?region_dnipropetrovsk=true",   "name" => "Дніпропертовська" );   // 7
    $regions[] = array( "link" => "regions.php?region_donetsk=true",          "name" => "Донецька" );           // 11
    $regions[] = array( "link" => "regions.php?region_zhytomyr=true",         "name" => "Житомирська" );        // 12
    $regions[] = array( "link" => "regions.php?region_zakarpatska=true",      "name" => "Закарпатська" );       // 13
    $regions[] = array( "link" => "regions.php?region_zaporozhye=true",       "name" => "Запорізька" );         // 6
    $regions[] = array( "link" => "regions.php?region_ivano-frankivska=true", "name" => "Івано-Франківська" );  // 14
    $regions[] = array( "link" => "regions.php?region_kyivska=true",          "name" => "Київська" );           // 2
    $regions[] = array( "link" => "regions.php?region_kirovogradska=true",    "name" => "Кіровоградська" );     // 15
    $regions[] = array( "link" => "regions.php?region_luganska=true",         "name" => "Луганська" );          // 16
    $regions[] = array( "link" => "regions.php?region_lvivska=true",          "name" => "Львівська" );          // 17
    $regions[] = array( "link" => "regions.php?region_mykolaiv=true",         "name" => "Миколаївська" );       // 5
    $regions[] = array( "link" => "regions.php?region_odessa=true",           "name" => "Одеська" );            // 1
    $regions[] = array( "link" => "regions.php?region_poltavska=true",        "name" => "Полтавська" );         // 18
    $regions[] = array( "link" => "regions.php?region_rivnenska=true",        "name" => "Рівненська" );         // 19
    $regions[] = array( "link" => "regions.php?region_sumska=true",           "name" => "Сумська" );            // 20
    $regions[] = array( "link" => "regions.php?region_ternopilska=true",      "name" => "Тернопільська" );      // 21
    $regions[] = array( "link" => "regions.php?region_kharkiv=true",          "name" => "Харківська" );         // 8
    $regions[] = array( "link" => "regions.php?region_kherson=true",          "name" => "Херсонська" );         // 4
    $regions[] = array( "link" => "regions.php?region_khmelnytska=true",      "name" => "Хмельницька" );        // 22
    $regions[] = array( "link" => "regions.php?region_сherkaska=true",        "name" => "Черкаська" );          // 23
    $regions[] = array( "link" => "regions.php?region_chernivetska=true",     "name" => "Чернівецька" );        // 24
    $regions[] = array( "link" => "regions.php?region_chernigivska=true",     "name" => "Чернігівська" );       // 25

   function menu($regions, $out = 'php/') {
        echo '
            <a class="dropdown-item" href="'. $out . $regions["link"] .'">'. $regions["name"] .'</a>
            <div class="dropdown-divider"></div>
        ';
    }
?>