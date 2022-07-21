<?php

if( isset( $_GET[ 'admin_castle' ] ) ) { admin_show_table( 'castle', 'Фортеці' ) ; }
if( isset( $_GET[ 'admin_church' ] ) ) { admin_show_table( 'church', 'Храми' ) ; }
if( isset( $_GET[ 'admin_museum' ] ) ) { admin_show_table( 'museum', 'Музеї' ) ; }
if( isset( $_GET[ 'admin_park' ] ) )   { admin_show_table( 'park',   'Парки' ) ; }
if( isset( $_GET[ 'admin_resort' ] ) ) { admin_show_table( 'resort', 'Курорти' ) ; }
if( isset( $_GET[ 'admin_seven_wonders' ] ) ) { admin_show_table_sw( 'seven_wonders', 'Сім чудес' ) ; }
if( isset( $_GET[ 'admin_not_famous_places' ] ) ) { admin_show_table_sw( 'not_famous_places', 'Маловідомі місця' ) ; }
if( isset( $_GET[ 'admin_names' ] ) ) { admin_show_table_reg( 'region_names', 'Області' ) ; }
if( isset( $_GET[ 'admin_main_should_visit' ] ) ) { admin_show_table_should_visit( 'main_should_visit', 'Варто відвідати' ) ; }

function admin_show_table( $table, $name ) {
    $query = "SELECT * FROM region_$table ";
    require_once "../php/read_from_DB.php";
    echo '
    <a href = "admin.php?action=add&table='.$table.'">Додати статтю</a>
    <table border="1">
        <caption>'.$name.'</caption>
        <thead>
            <tr>
                <th>Назва</th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
        ';
        while ( $row = mysqli_fetch_assoc( $result ) ) {
    echo '  <tr>
                <td>' . $row['_name'] . '</td>
                <td><a href = "admin.php?action=edit&table='.$table.'&id=' .$row["id_$table"]. '">Редагувати</a></td>
                <td><a href = "admin.php?action=delete&table='.$table.'&id=' .$row["id_$table"]. '">Видалити</a></td>
            </tr>';
        }
    echo '</tbody>
    </table>';
}
function admin_show_table_sw( $table, $name ) {
    $query = "SELECT * FROM $table ";
    require_once "../php/read_from_DB.php";
    echo '
    <a href = "admin.php?action=add_sw&table='.$table.'">Додати статтю</a>
    <table border="1">
        <caption>'.$name.'</caption>
        <thead>
            <tr>
                <th>Назва</th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
        ';
        while ( $row = mysqli_fetch_assoc( $result ) ) {
    echo '  <tr>
                <td>' . $row['place_name'] . '</td>
                <td><a href = "admin.php?action=edit_sw&table='.$table.'&id=' .$row["id"]. '">Редагувати</a></td>
                <td><a href = "admin.php?action=delete_sw&table='.$table.'&id=' .$row["id"]. '">Видалити</a></td>
            </tr>';
        }
    echo '</tbody>
    </table>';
}
function admin_show_table_reg( $table, $name ) {
    $query = "SELECT * FROM $table ";
    require_once "../php/read_from_DB.php";
    echo '
    <a href = "admin.php?action=add_reg&table='.$table.'">Додати статтю</a>
    <table border="1">
        <caption>'.$name.'</caption>
        <thead>
            <tr>
                <th>Назва</th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
        ';
        while ( $row = mysqli_fetch_assoc( $result ) ) {
    echo '  <tr>
                <td>' . $row['Nominative'] . '</td>
                <td><a href = "admin.php?action=edit_reg&table='.$table.'&Id=' .$row["Id"]. '">Редагувати</a></td>
                <td><a href = "admin.php?action=delete_reg&table='.$table.'&Id=' .$row["Id"]. '">Видалити</a></td>
            </tr>';
        }
    echo '</tbody>
    </table>';
}
function admin_show_table_should_visit( $table, $name ) {
    $query = "SELECT * FROM main_should_visit ORDER BY place";
    require_once "../php/read_from_DB.php";
    echo '
    <a href = "admin.php?action=add_should_visit&table='.$table.'">Додати статтю</a>
    <table border="1">
        <caption>'.$name.'</caption>
        <thead>
            <tr>
                <th>Об\'єкт</th>
                <th>Місто</th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
        ';
        while ( $row = mysqli_fetch_assoc( $result ) ) {
    echo '  <tr>
                <td>' . $row['place'] . '</td>
                <td>' . $row['city'] . '</td>
                <td><a href = "admin.php?action=edit_should_visit&table='.$table.'&id=' .$row["id"]. '">Редагувати</a></td>
                <td><a href = "admin.php?action=delete_should_visit&table='.$table.'&id=' .$row["id"]. '">Видалити</a></td>
            </tr>';
        }
    echo '</tbody>
    </table>';
}
?>