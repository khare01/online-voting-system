<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "voting_database";

$connection = mysqli_connect($servername, $username, $password, $dbname);
if (!$connection) {
    echo "connection not stablish";
}
else{
    echo "Connection establish";
}
?>