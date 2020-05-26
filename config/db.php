<?php
$server='162.215.253.205';
 $user='innoszdh_global';
 $pass='kuber123';
 $db='innoszdh_globaltalents';
 $port = '3306';
$connection= new mysqli($server,$user,$pass,$db,$port);

if($connection->connect_error){
    die("Database Error:". $connection->connect_error);
}
?>