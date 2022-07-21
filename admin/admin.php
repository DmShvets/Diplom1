<?php
    require_once '../php/connection.php';
    require_once 'functions.php';
    $link = mysqli_connect( $host, $user, $password, $database ) or die( "Помилка " . mysqli_error( $link ) );
    $link->set_charset("utf8");
    if ( isset( $_GET[ 'action' ] ) ){
        $action = $_GET[ 'action' ];
    }
    else 
        $action = "";
    
    if ( $action == "add" ) {
        if (!empty($_POST)) {
            add_info( $link, $_POST['table'], $_POST['id_region'], $_POST['_name'], $_POST['imgName'], $_POST['address'], $_POST['paragraph1'], $_POST['paragraph2'], $_POST['paragraph3']);
            echo "Дані успішно додано<br>";
            show_links();
        }
        include("add.php");
    } else
    if ( $action == "edit" ) {
        if ( !isset( $_GET["id"] ) )
            show_links();   
        $id = (int)$_GET["id"];
        if ( !empty( $_POST ) && $id > 0 ) {
            edit_info( $link, $id, $_POST['table'], $_POST['id_region'], $_POST['_name'], $_POST['imgName'], $_POST['address'], $_POST['paragraph1'], $_POST['paragraph2'], $_POST['paragraph3'] );
            echo "Дані успішно змінено<br>";
            show_links();      
        }
        $row = get_row( $link, $_GET["table"], $id );
        include("add.php");
    } else
    if ( $action == "delete" ) {
        $id = $_GET["id"];
        delete_info( $link, $_GET['table'], $id );
        echo "Дані успішно видалено<br>";
        show_links();
    } else
    if ( $action == "add_sw" ) {
        if (!empty($_POST)) {
            add_info_sw( $link, $_POST['table'], $_POST['place_name'], $_POST['img'], $_POST['location'], $_POST['information']);
            echo "Дані успішно додано<br>";
            show_links();
        }
        include("add_sw.php");
    } else
    if ( $action == "edit_sw" ) {
        if ( !isset( $_GET["id"] ) )
            show_links();  
        $id = (int)$_GET["id"];
        if ( !empty( $_POST ) && $id > 0 ) {
            edit_info_sw( $link, $id, $_POST['table'], $_POST['place_name'], $_POST['img'], $_POST['location'], $_POST['information']);
            echo "Дані успішно змінено<br>";
            show_links();      
        }
        $row = get_row_sw( $link, $_GET["table"], $id );
        include("add_sw.php");
    } else 
    if ( $action == "delete_sw" ) {
        $id = $_GET["id"];
        delete_info_sw( $link, $_GET['table'], $id );
        echo "Дані успішно видалено<br>";
        show_links();
    } else 
    if ( $action == "add_reg" ) {
        if (!empty($_POST)) {
            add_info_reg( $link, $_POST['table'], $_POST['Id'], $_POST['region_name'], $_POST['Key_name'], $_POST['Nominative'], $_POST['Ablative'], $_POST['Genitive'], $_POST['Paragraph1'], $_POST['Paragraph2'], $_POST['Paragraph3'], $_POST['Paragraph4'], $_POST['Map'], $_POST['linkHotel'], $_POST['Hotels']);
            echo "Дані успішно додано<br>";
            show_links();
        }
        include("add_reg.php");
    } else
    if ( $action == "edit_reg" ) {
        if ( !isset( $_GET["Id"] ) )
            show_links();  
        $id = (int)$_GET["Id"];
        if ( !empty( $_POST ) && $id > 0 ) {
            edit_info_reg( $link, $id, $_POST['table'], $_POST['region_name'], $_POST['Key_name'], $_POST['Nominative'], $_POST['Ablative'], $_POST['Genitive'], $_POST['Paragraph1'], $_POST['Paragraph2'], $_POST['Paragraph3'], $_POST['Paragraph4'], $_POST['Map'], $_POST['linkHotel'], $_POST['Hotels']);
            echo "Дані успішно змінено<br>";
            show_links();      
        }
        $row = get_row_reg( $link, $_GET["table"], $id );
        include("add_reg.php");
    } else 
    if ( $action == "delete_reg" ) {
        $id = $_GET["Id"];
        delete_info_reg( $link, $_GET['table'], $id );
        echo "Дані успішно видалено<br>";
        show_links();
    } else
    if ( $action == "add_should_visit" ) {
        if (!empty($_POST)) {
            add_info_should_visit( $link, $_POST['table'], $_POST['id'], $_POST['id_region'], $_POST['place'], $_POST['city'], $_POST['img'], $_POST['main_paragraph1'], $_POST['main_paragraph2'], $_POST['Paragraph2'], $_POST['Paragraph3'], $_POST['Paragraph4'], $_POST['Map'], $_POST['linkHotel'], $_POST['Hotels']);
            echo "Дані успішно додано<br>";
            show_links();
        }
        include("add_should_visit.php");
    } else
    if ( $action == "edit_should_visit" ) {
        if ( !isset( $_GET["id"] ) )
            show_links();  
        $id = (int)$_GET["id"];
        if ( !empty( $_POST ) && $id > 0 ) {
            edit_info_should_visit( $link, $id, $_POST['table'], $_POST['id_region'], $_POST['place'], $_POST['city'], $_POST['img'], $_POST['main_paragraph1'], $_POST['main_paragraph2']);
            echo "Дані успішно змінено<br>";
            show_links();      
        }
        $row = get_row_should_visit( $link, $_GET["table"], $id );
        include("add_should_visit.php");
    } else 
    if ( $action == "delete_should_visit" ) {
        $id = $_GET["id"];
        delete_info_should_visit( $link, $_GET['table'], $id );
        echo "Дані успішно видалено<br>";
        show_links();
    } else
    show_links();
?>