<?php

$dbhost="localhost";
$dbuser="root";
$dbpass="";
$dbname="piggy_db";

if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{
	die("Failed to connect to Server!");
}