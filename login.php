<?php

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */
function OpenCon()
 {
 $dbhost = "localhost";
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