<?
//parse_str("$QUERY_STRING");

//$db = mysql_connect("localhost", "root", "") or die("Could not connect.");
//if(!$db) die("no db");
//$dbname = "pbw";
//if(!mysql_select_db($dbname,$db))
// 	die("No database selected.");
//extract($_REQUEST, EXTR_OVERWRITE, ''); 

//$active = 1;
?>

<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pbw";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Your code logic here

?>

