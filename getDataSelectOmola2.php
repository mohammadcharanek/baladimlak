<?php
$host = 'localhost'; // Host name
$username = 'root'; // Mysql username
$password = ''; // Mysql password
$db_name = 'gicontra_sewingFactory'; // Database name
$tbl_name = 'badlah'; // Table name
$port = 3306;
$g = $_GET["g"];
$con = mysqli_connect($host, $username, $password);
if (! $con) {
    die('Could not connect: ' . mysql_error());
}
mysqli_select_db($con, $db_name);

$sql = "SELECT `badlahType`.`omolaPercent` FROM `badlahType` INNER JOIN `badlah` ON `badlahType`.badlahT_ID=`badlah`.badlahT_ID  WHERE badlah.badlah_id = '" . $g . "'";

$result = mysqli_query($con, $sql);

while ($row = mysqli_fetch_array($result)) {
    
    echo $row['omolaPercent'];
}

mySqli_close($con);