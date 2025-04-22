<html>
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

 
 <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>تقارير لوحة الإسم</title>
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

<form action="law7atIsmReports.php" method="post">
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
<h1> &nbsp &nbsp</h1>
</td>
<td>
<button onclick="myFunction()" style="align:left">إطبع الصفحة</button>
</td>
<td>
<input type="button" value="الصفحة الرئيسية" class="homebutton" id="btnHome" 
onClick="document.location.href='mainPage.php'" />

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
		
		$sql = 'SELECT * from law7atIsm  WHERE dateOfCompletion BETWEEN "'.date('Y-m-d',  strtotime($_POST["datepicker"])).'" AND "'.date('Y-m-d',  strtotime($_POST["datepicker2"])).'"';

	
	printVal($conn, $sql);
    
}
	



function printVal($conn, $sql){
	$retval = mysqli_query($conn, $sql);
	
echo '<div align="center">';

echo '<table style="width:1040px">';
echo '<tr>';

echo '<td style="width:90px; align:right">';
echo '<strong style="width:90px;font-size:20px">رقم الفاتورة</strong>';

echo '</td>';
echo '<td style="70px;">';
echo '<strong style="width:70px;font-size:20px"> الرقم   </strong>';
echo '</td>';

echo '<td style="width:100px; align:right">';
echo '<strong style="width:100px;font-size:20px">إسم الزبون</strong>';
echo '</td>';


echo '<td style="width:110px;">';
echo '<strong style="width:110px;font-size:20px">رقم الهاتف</strong>';
echo '</td>';


echo '<td style="width:100px;">';
echo '<strong style="width:100px;font-size:20px">القطاع</strong>';
echo '</td>';

echo '<td style="width:100px;">';
echo '<strong style="width:100px;font-size:20px">المبلغ</strong>';
echo '</td>';


echo '<td style="width:100px;">';
echo '<strong style="width:100px;font-size:20px">المدفوع</strong>';
echo '</td>';


echo '<td style="width:100px;">';
echo '<strong style="width:100px;font-size:20px">الباقي</strong>';
echo '</td>';


echo '<td style="width:140px;">';
echo '<strong style="width:140px;font-size:20px">نوع العمل</strong>';
echo '</td>';


echo '<td style="width:100px;">';
echo '<strong style="width:100px;font-size:20px">تاريخ التسليم</strong>';
echo '</td>';

echo '</tr>';
echo '<table>';
echo '</div>';
$count=1;
	while($row = mysqli_fetch_array($retval))
	{
		
echo '<div align="center">';

echo '<table style="width:1040px">';
echo '<tr>';


echo '<td style="width:100px;">';


echo '<strong style="width:100px;font-size:20px;color:red;">' . $row['law7atIsm_id'] . ' </strong>';
echo '</td>';
echo '<td style="width:70px;">';
echo '<strong style="width:70px;font-size:20px;">' . $count. ' </strong>';
echo '</td>';

echo '<td style="width:100px;">';
echo '<input type=text name=clientname style=width:100px value="' . $row['name']. '" </td>';

echo '<td style="width:110px;">';
echo "<input type=text name = mobilenum style=width:110px value=" . $row['jawal'] . " /required </td>";
echo '</td>';

echo '<td style="width:100px;">';
echo "<input type=text name = mobilenum style=width:100px value=" . $row['qita3'] . " ></input> </td>";

echo '<td style="width:100px;">';
echo '<input type="text" id="naw3al3amal" style="width:100px" name="naw3al3amal" value="'.$row['overall'].'"></input>';
echo '</td>';


echo '<td style="width:100px;">';
echo '<input type="text" id="naw3al3amal" style="width:100px" name="naw3al3amal" value="'.$row['paid'].'"></input>';
echo '</td>';


echo '<td style="width:100px;">';
echo '<input type="text" id="naw3al3amal" style="width:100px" name="naw3al3amal" value="'.$row['baki'].'"></input>';
echo '</td>';

echo '<td style="width:140px;">';
echo '<input type="text" id="naw3al3amal" style="width:140px" name="naw3al3amal" value="'.$row['type'].'"></input>';
echo '</td>';
echo '<td style="width:100px;">';
echo '<input type="text" id="datepicker" name=datepicker style="width:100px" value="'.$row['dateOfCompletion'].'">';
echo '</td>';
echo '</tr>';
echo '</table>';
echo '</div>';
	    $count++;
	}}
?>

</body>
</html>