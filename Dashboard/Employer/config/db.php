<?php
 session_start();
 $server='localhost';
 $user='root';
 $pass='';
 $db='user';
 $port = '3306';
// Create connection
 $conn = new mysqli($server, $user, $pass, $db, $port);
 // Check connection
 if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
 }
?>