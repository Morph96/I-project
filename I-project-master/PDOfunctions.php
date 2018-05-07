<?php
/**
 * Created by PhpStorm.
 * User: Morten
 * Date: 07/05/2018
 * Time: 12:16
 */

function afbeelding(){
    global $dbh;
    $afbeelding = "";

    $data = $dbh->query("SELECT afbeelding FROM veiling");

    while ($row = $data->fetch(PDO::FETCH_BOTH)) {
        $afbeelding .= "<a href='/overzicht.php?item_id={$row['voorwerp_id']}'><img src= '{$row['']}' name='{$row['']}'></a>";
    }
    return $afbeelding;
}

function countdown_date(){
    global $dbh;
    
}

?>