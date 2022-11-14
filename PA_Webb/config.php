<?php 

$server = "localhost";
$username = "root";
$password = "";
$db_name = "nukuliner";

//System PDO (PHP Database Object)
$db = new mysqli($server,$username,$password,$db_name);

if(!$db){
    die("Gagal Terhubung");
}