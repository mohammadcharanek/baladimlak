 <?php
$host='localhost'; // Host name
    $username='root'; // Mysql username
    $password=''; // Mysql password
    $db_name='gicontra_sewingFactory'; // Database name

    // Connect to server and select database.
	global $connection;
    $connection= MySqli_connect($host, $username, $password,$db_name)or die("cannot connect");
	
mysqli_query($connection, "SET NAMES 'utf8'"); 
mysqli_query($connection, 'SET CHARACTER SET utf8');