<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>الصفحة الرئيسية</title>
<style>
@import url(http://fonts.googleapis.com/earlyaccess/droidarabicnaskh.css);
.droid-arabic-naskh{font-family: 'Droid Arabic Naskh', serif;}

input[type=submit] {
    width: 75%;
    background-color: silver;
    color: white;
    padding: 10px 2px;
    margin: 0px 0px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}
input[type=submit]:hover {
    background-color: #45a049;
}

.styled select {
  background: transparent;
  width:5px;
  font-size: 16px;
   
  height: 10px;
}
.styled {
  margin: 0px 0px 5px 5px;
  width: 120px;
  height: 10px;
  
  
}
.input[type=text] {
    width: 120px;
    -webkit-transition: width 0.4s ease-in-out;
    transition: width 0.4s ease-in-out;
}

/* When the input field gets focus, change its width to 100% */
input[type=text]:focus {
    width: 100%;
}
</style>

</head>
<body bgcolor="#F0FFF0" dir="rtl">

<div class="mainPage" align="center" position="right">
	<h3 align ="right" >الصفحة الرئيسية</h3>
</div>


<table align="center" style="font-size:50px;">
<tr>
<td></td>
<td>
 <?php
 $host='localhost'; // Host name
$username='root'; // Mysql username
$password=''; // Mysql password
$db_name='gicontra_sewingFactory'; // Database name
$tbl_name='badlah'; // Table name
$port=3306;
 $conn= MySqli_connect($host, $username, $password)or die("cannot connect");
  MySqli_select_db($conn, $db_name)or die("cannot select DB");

    

mysqli_query($conn, "SET NAMES 'utf8'"); 
mysqli_query($conn, 'SET CHARACTER SET utf8');  

$sql = "SELECT * FROM altermahal ORDER BY alterMahal_id DESC LIMIT 0, 1";
$result = $conn->query($sql);

if ($result->num_rows >=0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
$mahalName=$row['mahalName'];
echo '<label  style="font-family:Aldhabi">'.$mahalName.'</label>';


}
} 
else{
echo "0 results";
}

?>
</td>
   
   <td>
   </td>
</tr>
</table>
<table align="center" style="font-size:50px;width:540px;">
<tr>
	
	<td align="right">
	<label style="font-family:Sakkal Majalla; color:darkgrey; font-size:27px; text-align:right">إختر إحدى هذه الخيارات</label>
	</td>
	<td>
	</td>
	<td>
	</td>
	
 </tr>
 </table>
<table align="center" style="width:560px;height:50px;margin-bottom:0px;margin-top:0px;">
 <tr>
 	
	
 	<td align="right" style="width:180px;">
	<form  action="newBadlahUser.php" method="get">
    		<input style="font-size:24px;width:120px;margin-bottom:0px;margin-top:60px;margin-right:50px;" type="submit" value="أضف بدلة"></input>
	</form>
	</td>
<td align="center" style="width:180px;">
	<form  action="addWorkerUser.php" method="get">
    		<input style="font-size:24px;width:120px;margin-bottom:0px;margin-top:58px;" type="submit" value="أضف عامل"></input>
	</form>
	</td>
<td style="width:180px;">	
	<form action="findBadlahUser.php" method="post" style="margin-top:30px;">
<input type="text" name="term" placeholder="أدخل رقم الهاتف.." style="width:118px;" required></input> <br>
<input type="submit" name="find" value="إبحث" style="font-size:24px;width:120px;margin-top:5px;"></input>
</form>
</td>
 </tr>
 </table>
 <table id="newStyle" class="newStyle" align="center" style="font-size:50px;width:480px;margin-top:0px;">
 <tr style="margin-bottom:0px;">
	<td align="right">
	    <form action="law7atIsmUser.php">
	    <input style="font-size:24px;width:120px;margin-right:10px;" type="submit" value="لوحة الإسم"></input>
	</form>
	</td>
 	
	<td align="center">
	<form  action="law7atIsmReportsUser.php" method="get">
    		<input style="font-size:24px;width:160px;align:center;text-align:center;display:block;margin:auto;horizontal-align: middle;margin-right:13px;margin-top:14px;" type="submit" value="تقارير لوحة الإسم"></input>
	</form>
	</td>
 	<td>
	<form  action="taslehUser.php" method="get">
    		<input style="font-size:24px;width:120px;margin-left:10px;margin-bottom:0px;margin-top:0px;" type="submit" value="تصليح"></input>
	</form>
	</td>
 </tr>
 <tr>
 <td align="right">

	<form action="omolaUser.php" method="get">
    	<input style="font-size:24px;width:120px;margin-right:10px;" type="submit" value="العمولة"></input>
	</form>
	</td>
	<td align="center">
	<form action="omolaReportsUser.php">
    	<input style="font-size:24px;width:140px" type="submit" value="تقارير العمولة"></input>
	</form>
   
	</td>
   	<td>
   	<form action="reportsUser.php">
    	<input style="font-size:24px;width:120px" type="submit" value="تقارير"></input>
	</form>
   
   	</td>
	
	
 </tr>
</table>
 <table id="newStyle" class="newStyle" align="center" style="font-size:50px;width:180px;height:50px;margin-top:0px;">
 <tr>
 
	<td>
	<form action="daftarUser.php">
    	<input style="font-size:24px;width:140px" type="submit" value="دفتر مبيعات"></input>
	</form>
   
	</td>
   	<td>
   <form action="daftarReportsUser.php">
    	<input style="font-size:24px;width:140px" type="submit" value="تقارير المبيعات"></input>
	</form>
   	
   
   	</td>
	
	
 </tr>
 
 </table>

    <table style="margin-right:150px;">
  <tr>
  
  <td>
  &nbsp;&nbsp;
  <a href="login.php">تسجيل الدخول</a>
  </td>
  </tr>
  </table>
</body>
</html>