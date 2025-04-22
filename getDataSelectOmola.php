<?php
$host = 'localhost'; // Host name
$username = 'root'; // Mysql username
$password = ''; // Mysql password
$db_name = 'gicontra_sewingFactory'; // Database name
$tbl_name = 'badlah'; // Table name
$port = 3306;
$q = $_GET["q"];
$con = mysqli_connect($host, $username, $password);
if (! $con) {
    die('Could not connect: ' . mysql_error());
}
mysqli_select_db($con, $db_name);

mysqli_query($con, "SET NAMES 'utf8'");
mysqli_query($con, 'SET CHARACTER SET utf8');

$sql = "SELECT  naw3al3amal FROM badlah WHERE badlah_id = '" . $q . "'";
$result = mysqli_query($con, $sql);

while ($row = mysqli_fetch_array($result)) {
    
    echo $row['naw3al3amal'];
}
mySqli_close($con);