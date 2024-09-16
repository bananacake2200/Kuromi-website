<?php

$db_servername = "localhost";
$db_username = "root";
$db_password = "";
$db_name = "wanderlust_db";

$conn = new mysqli($db_servername,$db_username,$db_password,$db_name,3307);

if($conn->connect_error){
    die("Connection Failed" .$conn->connect_error);
}

