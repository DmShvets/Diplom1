<?php 
    function show_links(){
        echo ' <div><br><br> <a href="admin_show_table.php?admin_names=true">Regions</a><br>
        <a href="admin_show_table.php?admin_castle=true">Castles</a><br>
        <a href="admin_show_table.php?admin_church=true">Churches</a><br>
        <a href="admin_show_table.php?admin_museum=true">Museums</a><br>
        <a href="admin_show_table.php?admin_park=true">Parks</a><br>
        <a href="admin_show_table.php?admin_resort=true">Resorts</a><br>
        <a href="admin_show_table.php?admin_seven_wonders=true">Seven Wonders</a><br>
        <a href="admin_show_table.php?admin_not_famous_places=true">Not famouse places</a><br>
        <a href="admin_show_table.php?admin_main_should_visit=true">Should visit</a></div>';
    } 
    function add_info( $link, $table, $id_region, $_name, $imgName, $address, $paragraph1, $paragraph2, $paragraph3 ){
        $table = trim($table);
        $_name = trim($_name);
        $imgName = trim($imgName);
        $address = trim($address);
        $paragraph1 = trim($paragraph1);
        $paragraph2 = trim($paragraph2);
        $paragraph3 = trim($paragraph3);
        $id_region=(int)$id_region;
        if ( $table == '' or $id_region == '' or $imgName == '' or $address == ''){
            return false;
        }
        $t = "INSERT INTO region_$table (id_region, _name, imgName, Address, Paragraph1, Paragraph2, Paragraph3)
            VALUES ('%d', '%s', '%s', '%s', '%s', '%s', '%s')";
        $query = sprintf($t, 
        mysqli_real_escape_string($link, $id_region),
        mysqli_real_escape_string($link, $_name),
        mysqli_real_escape_string($link, $imgName),
        mysqli_real_escape_string($link, $address),
        mysqli_real_escape_string($link, $paragraph1),
        mysqli_real_escape_string($link, $paragraph2),
        mysqli_real_escape_string($link, $paragraph3));

        $result = mysqli_query($link, $query);
        if(!$result)
            die(mysqli_error($link));
        return true;
    }
    function edit_info( $link, $id, $table, $id_region, $_name, $imgName, $address, $paragraph1, $paragraph2, $paragraph3 ){
        $table = trim($table);
        $_name = trim($_name);
        $imgName = trim($imgName);
        $address = trim($address);
        $paragraph1 = trim($paragraph1);
        $paragraph2 = trim($paragraph2);
        $paragraph3 = trim($paragraph3);
        $id=(int)$id;
        $id_region=(int)$id_region;
        if ( $table == '' or $id_region == '' or $imgName == '' or $address == ''){
            return false;
        }
        $sql = "UPDATE region_$table SET id_region = '%d', _name='%s', imgName='%s', Address='%s', Paragraph1='%s', Paragraph2='%s', Paragraph3='%s' WHERE id_$table='%d'";
        $query = sprintf($sql, 
        mysqli_real_escape_string($link, $id_region),
        mysqli_real_escape_string($link, $_name),
        mysqli_real_escape_string($link, $imgName),
        mysqli_real_escape_string($link, $address),
        mysqli_real_escape_string($link, $paragraph1),
        mysqli_real_escape_string($link, $paragraph2),
        mysqli_real_escape_string($link, $paragraph3), $id);

        $result = mysqli_query($link, $query);

        if(!$result)
            die(mysqli_error($link));

        return mysqli_affected_rows($link);
    }
    function delete_info( $link, $table, $id ) {
        $id = (int)$id;

        if( $id == 0 )
            return false;
        $query = sprintf("DELETE FROM region_$table WHERE id_$table='%d'", $id);
        $result = mysqli_query( $link, $query );

        if(!$result)
            die(mysqli_error($link));
        
        return mysqli_affected_rows( $link );
    }
    function get_row( $link, $table, $id ) {
        $sql = "SELECT * FROM region_$table where id_$table='$id'";
        $result = mysqli_query( $link, $sql ) or die( "Помилка " . mysqli_error( $link ) ); 
        $row = mysqli_fetch_assoc($result);
        return $row;
    }
    function add_info_sw( $link, $table, $place_name, $img, $location, $information ){
        $table = trim($table);
        $place_name = trim($place_name);
        $img = trim($img);
        $location = trim($location);
        $information = trim($information);
        if ( $table == '' or $place_name == '' or $img == '' or $location == '' or $information == ''){
            return false;
        }
        $t = "INSERT INTO $table (place_name, img, location, information)
            VALUES ('%s', '%s', '%s', '%s')";
        $query = sprintf($t, 
        mysqli_real_escape_string($link, $place_name),
        mysqli_real_escape_string($link, $img),
        mysqli_real_escape_string($link, $location),
        mysqli_real_escape_string($link, $information));

        $result = mysqli_query($link, $query);
        if(!$result)
            die(mysqli_error($link));
        return true;
    }
    function edit_info_sw( $link, $id, $table, $place_name, $img, $location, $information) {
        $table = trim($table);
        $place_name = trim($place_name);
        $img = trim($img);
        $location = trim($location);
        $information = trim($information);
        $id=(int)$id;
        if ( $table == '' or $img == '' or $location == '' or $information == ''){
            return false;
        }
        $sql = "UPDATE $table SET place_name='%s', img='%s', location='%s', information='%s' WHERE id='%d'";
        $query = sprintf($sql, 
        mysqli_real_escape_string($link, $place_name),
        mysqli_real_escape_string($link, $img),
        mysqli_real_escape_string($link, $location),
        mysqli_real_escape_string($link, $information), $id);

        $result = mysqli_query($link, $query);

        if(!$result)
            die(mysqli_error($link));

        return mysqli_affected_rows($link);
    } 
    function delete_info_sw( $link, $table, $id ) {
        $id = (int)$id;

        if( $id == 0 )
            return false;
        $query = sprintf("DELETE FROM $table WHERE id='%d'", $id);
        $result = mysqli_query( $link, $query );

        if(!$result)
            die(mysqli_error($link));
        
        return mysqli_affected_rows( $link );
    }
    function get_row_sw( $link, $table, $id ) {
        $sql = "SELECT * FROM $table where id='$id'";
        $result = mysqli_query( $link, $sql ) or die( "Помилка " . mysqli_error( $link ) ); 
        $row = mysqli_fetch_assoc($result);
        return $row;
    }
    function add_info_reg( $link, $table, $id, $region_name, $Key_name, $Nominative, $Ablative, $Genitive, $Paragraph1, $Paragraph2, $Paragraph3, $Paragraph4, $Map, $linkHotel, $Hotels ){
        $id=(int)$id;
        $table       = trim($table);
        $region_name = trim($region_name);
        $Key_name    = trim($Key_name);
        $Nominative  = trim($Nominative);
        $Ablative    = trim($Ablative);
        $Genitive    = trim($Genitive);
        $Paragraph1  = trim($Paragraph1);
        $Paragraph2  = trim($Paragraph2);
        $Paragraph3  = trim($Paragraph3);
        $Paragraph4  = trim($Paragraph4);
        $Map         = trim($Map);
        $linkHotel   = trim($linkHotel);
        $Hotels      = trim($Hotels);
        if ( $table == '' or $region_name == '' or $Key_name == '' or $Nominative == ''or $Ablative == ''or $Genitive == ''or $Paragraph1 == ''or $Paragraph2 == ''or $Paragraph3 == ''or $Map == ''or $linkHotel == '' or $Hotels == ''){
            return false;
        }
        $t = "INSERT INTO $table (Id, region_name, Key_name, Nominative, Ablative, Genitive, Paragraph1, Paragraph2, Paragraph3, Paragraph4, Map, linkHotel, Hotels)
            VALUES ('%d', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s')";
        $query = sprintf($t, 
        mysqli_real_escape_string($link, $id),
        mysqli_real_escape_string($link, $region_name),
        mysqli_real_escape_string($link, $Key_name),
        mysqli_real_escape_string($link, $Nominative),
        mysqli_real_escape_string($link, $Ablative),
        mysqli_real_escape_string($link, $Genitive),
        mysqli_real_escape_string($link, $Paragraph1),
        mysqli_real_escape_string($link, $Paragraph2),
        mysqli_real_escape_string($link, $Paragraph3),
        mysqli_real_escape_string($link, $Paragraph4),
        mysqli_real_escape_string($link, $Map),
        mysqli_real_escape_string($link, $linkHotel),
        mysqli_real_escape_string($link, $Hotels));

        $result = mysqli_query($link, $query);
        if(!$result)
            die(mysqli_error($link));
        return true;
    }
    function edit_info_reg( $link, $id, $table, $region_name, $Key_name, $Nominative, $Ablative, $Genitive, $Paragraph1, $Paragraph2, $Paragraph3, $Paragraph4, $Map, $linkHotel, $Hotels ){
        $id=(int)$id;
        $table       = trim($table);
        $region_name = trim($region_name);
        $Key_name    = trim($Key_name);
        $Nominative  = trim($Nominative);
        $Ablative    = trim($Ablative);
        $Genitive    = trim($Genitive);
        $Paragraph1  = trim($Paragraph1);
        $Paragraph2  = trim($Paragraph2);
        $Paragraph3  = trim($Paragraph3);
        $Paragraph4  = trim($Paragraph4);
        $Map         = trim($Map);
        $linkHotel   = trim($linkHotel);
        $Hotels      = trim($Hotels);
        if ( $table == '' or $region_name == '' or $Key_name == '' or $Nominative == ''or $Ablative == ''or $Genitive == ''or $Paragraph1 == ''or $Paragraph2 == ''or $Paragraph3 == ''or $Map == ''or $linkHotel == '' or $Hotels == ''){
            return false;
        }
        $sql = "UPDATE $table SET Id = '%d', region_name='%s', Key_name='%s', Nominative='%s', Ablative='%s', Genitive='%s', Paragraph1='%s', Paragraph2='%s', Paragraph3='%s', Paragraph4='%s', Map='%s', linkHotel='%s', Hotels='%s' WHERE Id='%d'";
        $query = sprintf($sql, 
        mysqli_real_escape_string($link, $id),
        mysqli_real_escape_string($link, $region_name),
        mysqli_real_escape_string($link, $Key_name),
        mysqli_real_escape_string($link, $Nominative),
        mysqli_real_escape_string($link, $Ablative),
        mysqli_real_escape_string($link, $Genitive),
        mysqli_real_escape_string($link, $Paragraph1),
        mysqli_real_escape_string($link, $Paragraph2),
        mysqli_real_escape_string($link, $Paragraph3),
        mysqli_real_escape_string($link, $Paragraph4),
        mysqli_real_escape_string($link, $Map),
        mysqli_real_escape_string($link, $linkHotel),
        mysqli_real_escape_string($link, $Hotels), $id);

        $result = mysqli_query($link, $query);

        if(!$result)
            die(mysqli_error($link));

        return mysqli_affected_rows($link);
    }
    function delete_info_reg( $link, $table, $id ) {
        $id = (int)$id;

        if( $id == 0 )
            return false;
        $query = sprintf("DELETE FROM $table WHERE Id='%d'", $id);
        $result = mysqli_query( $link, $query );

        if(!$result)
            die(mysqli_error($link));
        
        return mysqli_affected_rows( $link );
    }
    function get_row_reg( $link, $table, $id ) {
        $sql = "SELECT * FROM $table where Id='$id'";
        $result = mysqli_query( $link, $sql ) or die( "Помилка " . mysqli_error( $link ) ); 
        $row = mysqli_fetch_assoc($result);
        return $row;
    }


    function add_info_should_visit( $link, $table, $id, $id_region, $place, $city, $img, $main_paragraph1, $main_paragraph2 ){
        $id=(int)$id;
        $table = trim($table);
        $id_region = (int)$id_region;
        $place = trim($place);
        $city = trim($city);
        $img = trim($img);
        $main_paragraph1 = trim($main_paragraph1);
        $main_paragraph2 = trim($main_paragraph2);
        if ( $table == '' or $id_region=='' or $place == '' or $city =='' or $img == '' or $main_paragraph1 == '' or $main_paragraph2 == ''){
            return false;
        }
        $t = "INSERT INTO $table ( id, id_region, place, city, img, main_paragraph1, main_paragraph2)
            VALUES ('%d', '%d', '%s', '%s', '%s', '%s', '%s')";
        $query = sprintf($t, 
        mysqli_real_escape_string($link, $id),
        mysqli_real_escape_string($link, $id_region),
        mysqli_real_escape_string($link, $place),
        mysqli_real_escape_string($link, $city),
        mysqli_real_escape_string($link, $img),
        mysqli_real_escape_string($link, $main_paragraph1),
        mysqli_real_escape_string($link, $main_paragraph2));

        $result = mysqli_query($link, $query);
        if(!$result)
            die(mysqli_error($link));
        return true;
    }
    function edit_info_should_visit( $link, $id, $table, $id_region, $place, $city, $img, $main_paragraph1, $main_paragraph2 ) {
        $id=(int)$id;
        $table = trim($table);
        $id_region = (int)$id_region;
        $place = trim($place);
        $city = trim($city);
        $img = trim($img);
        $main_paragraph1 = trim($main_paragraph1);
        $main_paragraph2 = trim($main_paragraph2);
        if ( $table == '' or $id_region=='' or $place == '' or $city =='' or $img == '' or $main_paragraph1 == '' or $main_paragraph2 == ''){
            return false;
        }
        $sql = "UPDATE $table SET id='%d', id_region='%d', place='%s', city='%s', img='%s', main_paragraph1='%s', main_paragraph2='%s' WHERE id='%d'";
        $query = sprintf($sql, 
        mysqli_real_escape_string($link, $id),
        mysqli_real_escape_string($link, $id_region),
        mysqli_real_escape_string($link, $place),
        mysqli_real_escape_string($link, $city),
        mysqli_real_escape_string($link, $img),
        mysqli_real_escape_string($link, $main_paragraph1),
        mysqli_real_escape_string($link, $main_paragraph2), $id);

        $result = mysqli_query($link, $query);

        if(!$result)
            die(mysqli_error($link));

        return mysqli_affected_rows($link);
    } 
    function delete_info_should_visit( $link, $table, $id ) {
        $id = (int)$id;

        if( $id == 0 )
            return false;
        $query = sprintf("DELETE FROM $table WHERE id='%d'", $id);
        $result = mysqli_query( $link, $query );

        if(!$result)
            die(mysqli_error($link));
        
        return mysqli_affected_rows( $link );
    }
    function get_row_should_visit( $link, $table, $id ) {
        $sql = "SELECT * FROM $table where id='$id'";
        $result = mysqli_query( $link, $sql ) or die( "Помилка " . mysqli_error( $link ) ); 
        $row = mysqli_fetch_assoc($result);
        return $row;
    }
?>