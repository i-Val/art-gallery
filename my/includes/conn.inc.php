<?php
session_start();
$host = "localhost";
$user = "root";
$pass = "";
$database = "valpoint";

$conn = new mysqli($host, $user, $pass, $database);
$conn;



?>