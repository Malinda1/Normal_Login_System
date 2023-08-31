<?php
$serverName = "localhost";
$dbUsername = "pasindu";
$dbPassword = "yfd!zA!LgdfGnAJK";
$dbName = "clothing_login";

$conn = mysqli_connect($serverName, $dbUsername, $dbPassword, $dbName);

if(!$conn){
   die("Connection faild: ".mysqli_connect_error());
}