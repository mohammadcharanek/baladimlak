<!DOCTYPE html>
<html>
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

 
 <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>تقارير</title>
 <link rel="stylesheet" href="jquery-ui.css">
  <link rel="stylesheet" href="style.css">
  <script src="jquery-1.12.4.js"></script>
  <script src="jquery-ui.js"></script>

  <script>
  $( function() {
    $( "#datepicker" ).datepicker();
  } );
  </script>
  <script>
$('.datepicker').on('click', function(e) {
   e.preventDefault();
   $(this).attr("autocomplete", "off");  
});
</script>
<script>
( function( factory ) {
	if ( typeof define === "function" && define.amd ) {

		// AMD. Register as an anonymous module.
		define( [ "datepicker" ], factory );
	} else {

		// Browser globals
		factory( jQuery.datepicker );
	}
}( function( datepicker ) {

datepicker.regional.ar = {
	closeText: "إغلاق",
	prevText: "&#x3C;السابق",
	nextText: "التالي&#x3E;",
	currentText: "اليوم",
	monthNames: [ "يناير", "فبراير", "مارس", "أبريل", "مايو", "يونيو",
	"يوليو", "أغسطس", "سبتمبر", "أكتوبر", "نوفمبر", "ديسمبر" ],
	monthNamesShort: [ "1", "2", "3", "4", "5", "6", "7", "8", "9", "10", "11", "12" ],
	dayNames: [ "الأحد", "الاثنين", "الثلاثاء", "الأربعاء", "الخميس", "الجمعة", "السبت" ],
	dayNamesShort: [ "أحد", "اثنين", "ثلاثاء", "أربعاء", "خميس", "جمعة", "سبت" ],
	dayNamesMin: [ "أحد", "إثنين", "ثلاثاء", "إربعاء", "خميس", "جمعة", "سبت" ],
	weekHeader: "أسبوع",
	dateFormat: "yy-m-d",
	firstDay: 0,
		isRTL: true,
	showMonthAfterYear: false,
	yearSuffix: "" };
datepicker.setDefaults( datepicker.regional.ar );

return datepicker.regional.ar;

} ));
</script>

  <script>
  $( function() {
    $( "#datepicker2" ).datepicker();
  } );
  </script>
  <style>
  input[type=submit] {
    width: 50px;
    background-color: silver;
    color: white;
    padding: 5px 10px;
    margin: 4px 0;
    border: none;
    border-radius: 2px;
    cursor: pointer;
    font-weight:bold;
}
input[type=submit]:hover {
    background-color: #45a049;
}
input[type=button] {
    width: 145px;
    background-color: green;
    color: white;
    padding: 5px 10px;
    margin: 12px 90px 4px 4px;
    border: none;
    border-radius: 2px;
    cursor: pointer;
    font-weight:bold;
    font-size:21;
}

input[type=button]:hover {
    background-color: #45a049;
}
button {
    width: 90px;
    background-color: silver;
    color: white;
    padding: 5px 10px;
    margin: 8px 0px 0px 0px;
    border: none;
    border-radius: 2px;
    cursor: pointer;
    font-weight:bold;
    font-size:15px;
}
button:hover {
    background-color: blue;
}
  </style>
</head>
<body dir="rtl" style="background-color:rgb(245, 247, 243)">

<form action="reportsUser.php" method="post">
<table>
<tr>
<td>
<fieldset>
<legend>إختر حسب التاريخ</legend>
<input type="text" id="datepicker" style="width:150px" name="datepicker" value="من.."></input>



<input  type="text" id="datepicker2" style="width:150px" name="datepicker2" value="الى.."></input>



<input type="submit" value="إذهب" name="value1"></input>
</fieldset>
</td>
<td>
<h3>  &nbsp &nbsp &nbsp</h3>
</td>
<td>
<fieldset>
<legend>إختر حسب الجهوزية</legend>
<input type="checkbox" value="finished" name="finished"></input>
<strong>جاهز</strong>












<input type="checkbox" value="received" name="received"></input>
<strong>تم التسليم</strong>



<input type="submit" value="إذهب" name="value2"></input>

</fieldset>
</td>
<td>
<h1> &nbsp &nbsp</h1>
</td>
<td>
<button onclick="myFunction()" style="align:left">إطبع الصفحة</button>
</td>
<td>
<input type="button" value="الصفحة الرئيسية" class="homebutton" id="btnHome" 
onClick="document.location.href='mainPageUser.php'" ></input>

    </td>
</tr>
</table>
</form>


<script>
function myFunction() {
    window.print();
}
</script>
<?php

$host='localhost'; // Host name
$username='root'; // Mysql username
$password=''; // Mysql password
$db_name='gicontra_sewingFactory'; // Database name
$tbl_name='badlah'; // Table name
$port=3306;
	$ID=36951;
// Connect to server and select database.
error_reporting(E_ALL & ~E_NOTICE &~E_WARNING); 
$conn = mysqli_connect($host, $username, $password);
	if(! $conn )
		{
  			die('Could not connect: ' . mysql_error());
		}
		mysqli_select_db($conn, $db_name);

    
mysqli_query($conn, "SET NAMES 'utf8'"); 
mysqli_query($conn, 'SET CHARACTER SET utf8'); 	

if(isset($_POST['value1'])){
		
		$sql = 'SELECT * from badlah  WHERE dateOfCompletion BETWEEN "'.date('Y-m-d',  strtotime($_POST["datepicker"])).'" AND "'.date('Y-m-d',  strtotime($_POST["datepicker2"])).'"';

	
	printVal1($conn, $sql);}
	



else if(isset($_POST['value2'])){
if(isset($_POST['finished']) && isset($_POST['received'])){
		
		$sql = 'SELECT * from badlah  WHERE finished="finished" AND received="received"';

	
	printVal2($conn, $sql);}
	


else

if(!isset($_POST['finished']) && isset($_POST['received'])){
$sql='SELECT * from badlah WHERE  received="received"';

printVal2($conn, $sql);}






else if(isset($_POST['finished']) && !isset($_POST['received'])){
		
		$sql = 'SELECT * from badlah  WHERE finished="finished"';

	
	printVal2($conn, $sql);}
	


else

if($_POST['finished']!="finished" && $_POST['received']!="received"){
$sql='SELECT * from badlah WHERE finished!="finished" AND received!="received"';
printVal2($conn, $sql);}}

function printVal1($conn, $sql){
	$retval = mysqli_query($conn, $sql);
	echo '<div align="center">';
	
	echo '<table style="width:1010px;table-layout:auto;">';
	
	echo '<tr style="margin-bottom:20px;">';
	if(date('Y-m-d',  strtotime($_POST["datepicker"]))=="")
	$date1="";
	else
	$date1=date('Y-m-d',  strtotime($_POST["datepicker"]));
echo '<td>';
echo '</td>';
echo '<td>';
	echo '<strong style="font-size:16;color:red;">من تاريخ: </strong>';
	echo '</td>';
	echo '<td>';
	echo '<input type="text" style="width:100px;" value="'.$date1.'"></input>';
	echo '</td>';
	echo '<td>';
	echo '<strong style="font-size:16;width:90px;text-align:center;color:red;">الى تاريخ: </strong>';
	echo '</td>';
	echo '<td>';
	echo '<input type="text" style="width:90px;" value="'.date('Y-m-d',  strtotime($_POST["datepicker2"])).'"></input>';
	echo '</td>';
	echo '</tr>';
	echo '<tr>';
	echo '<td>';
	echo '<input type="hidden" value="hidden"></input>';
	echo '</td>';
	echo '</tr>';
	echo '<tr>';


echo '<td style="width:40px; text-align:center;">';
echo '<strong style="width:40px;font-size:15px;align:center;">الرقم</strong>';

echo '</td>';


echo '<td style="width:60px; align:right;text-align:center;">';
echo '<strong style="width:65px;font-size:15px;align:center;">رقم الفاتورة</strong>';

echo '</td>';
echo '<td style="width:110px; align:right">';
echo '<strong style="width:110px;font-size:14px">إسم الزبون</strong>';
echo '</td>';
echo '<td style="width:90px;">';
echo '<strong style="width:90px;font-size:14px">رقم الهاتف</strong>';
echo '</td>';
echo '<td style="width:90px;">';
echo '<strong style="width:90px;font-size:14px">نوع العمل</strong>';
echo '</td>';
echo '<td style="width:110px;">';
echo '<strong style="width:110px;font-size:14px">القطاع</strong>';
echo '</td>';


echo '<td style="width:50px; align:right">';
echo '<strong style="width:50px;font-size:14px">الكمية</strong>';
echo '</td>';


echo '<td style="width:80px; align:right">';
echo '<strong style="width:80px;font-size:14px">السعر</strong>';
echo '</td>';


echo '<td style="width:80px; align:right">';
echo '<strong style="width:80px;font-size:14px">واصل منه</strong>';
echo '</td>';


echo '<td style="width:80px; align:right">';
echo '<strong style="width:80px;font-size:16px;font-weight:bold;">الباقي</strong>';
echo '</td>';

echo '<td style="width:80px;">';
echo '<strong style="width:80px;font-size:13px">تاريخ التسليم</strong>';
echo '</td>';
echo '<td style="width:35px">';
echo '<strong style="width:35px;font-size:13px">جاهز</strong>';
echo '</td>';

echo '<td style="width:50px;">';
echo '<strong style="width:50px;font-size:13px">تم التسليم</strong>';
echo '</td>';
echo '</tr>';
echo '</table>';
echo '</div>';
$count=1;
	while($row = mysqli_fetch_array($retval))
	{
		
	echo '<div align="center">';
	echo '<table style="width:1010px;table-layout:auto;">';


echo '<tr>';

echo '<td style="width:40px;">';

echo '<strong style="width:40px;font-size:15px;align:center;">' . $count. ' </strong>';

echo '</td>';

echo '<td style="width:50px;">';


echo '<strong style="width:50px;font-size:18px;color:red;">' . $row['badlah_id'] . ' </strong>';


echo '</td>';

echo '<td>';
echo '<input type=text name=clientname style=width:110px value="' . $row['clientname'] . '" </td>';

echo '</td>';

echo '<td>';
echo "<input type=text name = mobilenum style=width:90px value=" . $row['mobilenum'] . " /required </td>";
echo '</td>';

echo '<td>';
echo '<input type="text" id="naw3al3amal" style="width:90px" name="naw3al3amal" value="'.$row['naw3al3amal'].'"></input>';
echo '</td>';


echo '<td>';
echo '<input type="text" id="naw3al3amal" style="width:110px" name="naw3al3amal" value="'.$row['qita3'].'"></input>';
echo '</td>';

echo '<td>';
echo '<input type=text name=clientname style=width:50px value="' . $row['bQty'] . '" </td>';

echo '</td>';

echo '<td>';
echo '<input type=text name=clientname style=width:80px value="' . $row['price'] . '" </td>';

echo '</td>';

echo '<td>';
echo '<input type=text name=clientname style=width:80px value="' . $row['wasl'] . '" </td>';

echo '</td>';

echo '<td>';
echo '<input type=text name=clientname style="width:80px;" value="' . $row['baki'] . '"></input>';

echo '</td>';

echo '<td>';
echo '<input type="text" id="datepicker" name=datepicker style="width:80px" value="'.$row['dateOfCompletion'].'">';
echo '</td>';
echo '<td style="width:35px">';
if($row['finished'] == 'finished')
    
    {
      $checkFinished = "جاهز";
      echo '&#x2713';
      
    }
    else
     $checkFinished ="";
     
     
     echo '</td>';
     
     
echo '<td style="width:50px">';
if($row['received'] == 'received')
    
    {
      $checkReceived = "تم التسليم";
echo '&#x2713';      
    }
    else
     $checkReceived ="";
     
     echo '</td>';

echo '</tr>';

echo '</table>';
	    echo '<hr>';
	    $count++;
	}}
	
function printVal2($conn, $sql){
	$retval = mysqli_query($conn, $sql);
	echo '<div align="center">';
	
	echo '<table style="width:1010px;table-layout:auto;">';
	
	echo '<tr style="margin-bottom:20px;">';
	echo '<td>';
echo '</td>';
echo '<td colspan="3">';
	echo '<strong style="font-size:17;color:red;">إختيار حسب الجهوزية: </strong>';
	echo '</td>';
	
	echo '</tr>';
	echo '<tr>';
	echo '<td>';
	echo '<input type="hidden" value="hidden"></input>';
	echo '</td>';
	echo '</tr>';
	echo '<tr>';


echo '<td style="width:40px; text-align:center;">';
echo '<strong style="width:40px;font-size:15px;align:center;">الرقم</strong>';

echo '</td>';


echo '<td style="width:60px; align:right;text-align:center;">';
echo '<strong style="width:65px;font-size:15px;align:center;">رقم الفاتورة</strong>';

echo '</td>';
echo '<td style="width:110px; align:right">';
echo '<strong style="width:110px;font-size:14px">إسم الزبون</strong>';
echo '</td>';
echo '<td style="width:90px;">';
echo '<strong style="width:90px;font-size:14px">رقم الهاتف</strong>';
echo '</td>';
echo '<td style="width:90px;">';
echo '<strong style="width:90px;font-size:14px">نوع العمل</strong>';
echo '</td>';
echo '<td style="width:110px;">';
echo '<strong style="width:110px;font-size:14px">القطاع</strong>';
echo '</td>';


echo '<td style="width:50px; align:right">';
echo '<strong style="width:50px;font-size:14px">الكمية</strong>';
echo '</td>';


echo '<td style="width:80px; align:right">';
echo '<strong style="width:80px;font-size:14px">السعر</strong>';
echo '</td>';


echo '<td style="width:80px; align:right">';
echo '<strong style="width:80px;font-size:14px">واصل منه</strong>';
echo '</td>';


echo '<td style="width:80px; align:right">';
echo '<strong style="width:80px;font-size:16px;font-weight:bold;">الباقي</strong>';
echo '</td>';

echo '<td style="width:80px;">';
echo '<strong style="width:80px;font-size:13px">تاريخ التسليم</strong>';
echo '</td>';
echo '<td style="width:35px">';
echo '<strong style="width:35px;font-size:13px">جاهز</strong>';
echo '</td>';

echo '<td style="width:50px;">';
echo '<strong style="width:50px;font-size:13px">تم التسليم</strong>';
echo '</td>';
echo '</tr>';
echo '</table>';
echo '</div>';
$count=1;
	while($row = mysqli_fetch_array($retval))
	{
		
	echo '<div align="center">';
	echo '<table style="width:1010px;table-layout:auto;">';


echo '<tr>';

echo '<td style="width:40px;">';

echo '<strong style="width:40px;font-size:15px;align:center;">' . $count. ' </strong>';

echo '</td>';

echo '<td style="width:50px;">';


echo '<strong style="width:50px;font-size:18px;color:red;">' . $row['badlah_id'] . ' </strong>';


echo '</td>';

echo '<td>';
echo '<input type=text name=clientname style=width:110px value="' . $row['clientname'] . '" </td>';

echo '</td>';

echo '<td>';
echo "<input type=text name = mobilenum style=width:90px value=" . $row['mobilenum'] . " /required </td>";
echo '</td>';

echo '<td>';
echo '<input type="text" id="naw3al3amal" style="width:90px" name="naw3al3amal" value="'.$row['naw3al3amal'].'"></input>';
echo '</td>';


echo '<td>';
echo '<input type="text" id="naw3al3amal" style="width:110px" name="naw3al3amal" value="'.$row['qita3'].'"></input>';
echo '</td>';

echo '<td>';
echo '<input type=text name=clientname style=width:50px value="' . $row['bQty'] . '" </td>';

echo '</td>';

echo '<td>';
echo '<input type=text name=clientname style=width:80px value="' . $row['price'] . '" </td>';

echo '</td>';

echo '<td>';
echo '<input type=text name=clientname style=width:80px value="' . $row['wasl'] . '" </td>';

echo '</td>';

echo '<td>';
echo '<input type=text name=clientname style="width:80px;" value="' . $row['baki'] . '"></input>';

echo '</td>';

echo '<td>';
echo '<input type="text" id="datepicker" name=datepicker style="width:80px" value="'.$row['dateOfCompletion'].'">';
echo '</td>';
echo '<td style="width:35px">';
if($row['finished'] == 'finished')
    
    {
      $checkFinished = "جاهز";
      echo '&#x2713';
      
    }
    else
     $checkFinished ="";
     
     
     echo '</td>';
     
     
echo '<td style="width:50px">';
if($row['received'] == 'received')
    
    {
      $checkReceived = "تم التسليم";
echo '&#x2713';      
    }
    else
     $checkReceived ="";
     
     echo '</td>';

echo '</tr>';

echo '</table>';
	    echo '<hr>';
	    $count++;
	}}
?>

</body>
</html>