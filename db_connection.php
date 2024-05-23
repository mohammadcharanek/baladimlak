<?php
function OpenCon()
 {
 $dbhost = "http://localhost/9000";
 $dbuser = "root";
 $dbpass = "";
 $db = "gicontra_sewingFactory";
 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
 
mysqli_query($conn, "SET NAMES 'utf8'"); 
mysqli_query($conn, 'SET CHARACTER SET utf8'); 
 return $conn;
 }
 
function CloseCon($conn)
 {
 $conn -> close();
 }