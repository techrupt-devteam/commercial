<?php 
$servername = "localhost";

$username = "root";
//$username = "marutise_new_sev";

//$password = "9sBAOYro4e5y";
$password = "";

$dbname = "marutise_new_seva";
 $conn    = new mysqli($servername, $username, $password, $dbname);

        // Check connection

        if ($conn->connect_error) {

          die("Connection failed: " . $conn->connect_error);

        }
?>