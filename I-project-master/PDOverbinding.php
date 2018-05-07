<?php
/**
 * Created by PhpStorm.
 * User: Morten
 * Date: 07/05/2018
 * Time: 12:01
 */

$hostname = "localhost";
$dbname = "eenmaalandermaal";
$username = "sa";
$pw = "M0rt3n1996!";

try{
    $dbh = new PDO("sqlsrv:Server=$hostname; Database=$dbname; ConnectionPooling=0","$username", "$pw");
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e){
    echo "KUTZOOI er ging iets mis";
    echo "De melding is{$e->getMessage()} <br>";
}

?>