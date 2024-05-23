<?php
session_start();
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
 $ehidden=0;
if(isset($_POST['delete'])){
		$deleteQuery="DELETE FROM daftarM WHERE daftar_id=" . $_POST[hiddendaftar_id];
		global $ehidden;
		$ehidden=$_POST[hiddendaftar_id];
		$retval2=mysqli_query($conn, $deleteQuery);
	$sql = 'SELECT * from daftarM  WHERE month(dateOfToday)='.$_SESSION['monthval'];
//$_session["month"]=$_POST['value2'];
	
	printVal2($conn, $sql);
		header("Location: " . $_SERVER['REQUEST_URI']);
   exit();
		
		};
		if(isset($_POST['update'])){
		$updateQuery="UPDATE daftarM  SET senf= '" . $_POST['senf'] . "', se3r='".$_POST['se3r']."', senfS='".$_POST['senfS']."', se3rS='".$_POST['se3rS']."', naw3M='".$_POST['naw3M']."', si3rM='".$_POST['si3rM']."', mabe3Today='".$_POST['mabe3Today']."', baki='".$_POST['baki']."', dateOfToday='".date('Y-m-d',  strtotime($_POST['dateOfToday']))."'  WHERE daftar_id='" . $_POST[hiddendaftar_id]."'";
		
		$retval2=mysqli_query($conn, $updateQuery);
	header("Location: " . $_SERVER['REQUEST_URI']);
   exit();
		
		};

?>
<!DOCTYPE html>
<html>
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

 
 <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>تقارير المبيعات</title>
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
  option:nth-child(2),  option:nth-child(3), option:nth-child(4), option:nth-child(5), option:nth-child(6), option:nth-child(7), option:nth-child(8), option:nth-child(9), option:nth-child(10), option:nth-child(11), option:nth-child(12) , option:nth-child(13){
    font-weight:bold;
}
.verticalLine {
  border-left: thick solid #ff0000;
}
tr.border_bottom th {
  border-bottom:1pt solid DodgerBlue;
}
  </style>

</head>

<body dir="rtl" style="background-color:rgb(245, 247, 243)">
<?php


?>
<form action="daftarReportsUser.php" method="post">
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
<legend>إختر حسب الأشهر</legend>
<select  name="month" onChange="split(selected value)">
<option style="font-weight:bold;">إختر تقارير شهر</option>
<option value="1">يناير</option>
<option value="2">فبراير</option>
<option value="3">مارس</option>
<option value="4">أبريل</option>
<option value="5">مايو</option>
<option value="6">يونيو</option>
<option value="7">يوليو</option>
<option value="8">أغسطس</option>
<option value="9">سبتمبر</option>
<option value="10">أكتوبر</option>
<option value="11">نوفمبر</option>
<option value="12">ديسمبر</option>
</select>
<select id="year" name="year">
<?php
for($i=2000;$i<date("Y")+1;$i++)
{
	echo '<option value="'.$i.'">'.$i.'</option>';
}

?>
</select>
<input type="hidden" name="optionSelected" id="optionSelected" value="0"></input>

<input type="submit" value="إذهب" name="value2" style="margin-right:5px;"></input>

</fieldset>
</td>
<td>
<h1> &nbsp; &nbsp;</h1>
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
if(isset($_POST['value1'])){
		
		$sql = 'SELECT * from daftarM  WHERE dateOfToday BETWEEN "'.date('Y-m-d',  strtotime($_POST["datepicker"])).'" AND "'.date('Y-m-d',  strtotime($_POST["datepicker2"])).'"';

	
	printVal1($conn, $sql);}
	



else if(isset($_POST['value2'])){
if(isset($_POST['month'])){
		
		$sql = 'SELECT * from daftarM  WHERE month(dateOfToday)='.$_POST["month"].'&& year(dateOfToday)='.$_POST["year"];
$_SESSION['monthval']=$_POST['month'];
	
	printVal2($conn, $sql);}
	
}

function printVal1($conn, $sql){
	$retval = mysqli_query($conn, $sql);
	echo '<div align="center">';
	
	echo '<table style="width:750px;table-layout:auto;border-radius:1px;border-color:black;margin-right:100px;">';
	
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
	echo '<input type="text" style="width:74px;" value="'.$date1.'"></input>';
	echo '</td>';
	echo '<td>';
	echo '<strong style="font-size:16;width:90px;text-align:center;color:red;">الى تاريخ: </strong>';
	echo '</td>';
	echo '<td>';
	echo '<input type="text" style="width:74px;" value="'.date('Y-m-d',  strtotime($_POST["datepicker2"])).'"></input>';
	echo '</td>';
	echo '</tr>';
	echo '<tr>';
	echo '<td>';
	echo '<input type="hidden" value="hidden"></input>';
	echo '</td>';
	echo '</tr>';
	echo '</table>';
	echo '<table style="width:730px;align:center;margin-left:380px;margin-right:100px;">';
	echo '<tr>';
	echo '<td>';
	echo '<input type="hidden" value="hidden"></input>';
	echo '</td>';
	echo '</tr>';
	echo '<tr class="border_bottom">';
	echo '<th>المبيع نقدا</th><th>الصرافة</th><th>مصروفات</th>';
	echo '</tr>';
	echo '</table>';
echo '<table style="width:1390px;align:center;margin-right:65px;">';
	echo '<tr class="border_bottom">';
	echo '<th style="width:40px;max-width:200px;">الرقم</th><th style="width:70px;max-width:180px;">رقم الفاتورة</th><th style="width:103px;">الصنف</th><th style="width:115px;">السعر</th><th style="width:125px;">الصنف</th><th style="width:129px;">السعر</th><th style="width:119px;">النوع</th><th style="width:95px;">السعر</th><th >مبيعات اليوم</th><th style="width:80px;"> الباقي</th><th>تاريخ البيع</th><th style="width:100px;visibility:hidden;" ></th><th style="width:43px;visibility:hidden;"></th>';
	echo '</tr>';
	echo '</table>';
echo '</div>';
$count=1;
$mabe3CashTotal=0;
$sarafaTotal=0;
$masrofatTotal=0;
$mabe3TodayTotal=0;
	while($row = mysqli_fetch_array($retval))
	{
		
	echo '<div align="center">';
	echo "<form action='daftarReportsUser.php' method='POST'>";
	echo '<table style="width:1200px;table-layout:auto;">';


echo '<tr>';

echo '<td style="width:40px;">';
echo '<strong style="max-width:200px;display:inline-block;font-size:15px;align:center;margin-left:10px;">' . $count. ' </strong>';
echo '</td>';




echo '<td style="width:50px;">';
echo '<strong style="max-width:200px;display:inline-block;font-size:14px;color:red;margin-left:10px;margin-right:10px;">' . $row['daftar_id'] . ' </strong>';
echo '</td>';



echo '<td>';
echo '<input type=text name=senf style=width:100px value="' . $row['senf'] . '" </td>';
echo '</td>';


echo '<td class="verticalLine">';
echo "<input type=text name = se3r style=width:100px value=" . $row['se3r'] . "></input> </td>";
$mabe3CashTotal+=$row['se3r'];
echo '</td>';




echo '<td>';
echo '<input type="text" id="senfS" style="width:100px" name="senfS" value="'.$row['senfS'].'"></input>';
echo '</td>';

	

echo '<td class="verticalLine">';
echo '<input type="text" id="se3rS" style="width:100px" name="se3rS" value="'.$row['se3rS'].'"></input>';
$sarafaTotal+=$row['se3rS'];
echo '</td>';




echo '<td>';
echo '<input type=text name=naw3M style=width:100px value="' . $row['naw3M'] . '" </td>';

echo '</td>';



echo '<td class="verticalLine">';
echo '<input type=text name=si3rM style="width:100px;" value="' . $row['si3rM'] . '" ></td>';
$masrofatTotal+=$row['si3rM'];
echo '</td>';






echo '<td>';
echo '<input type=text name=mabe3Today style=width:100px value="' . $row['mabe3Today'] . '" </td>';
$mabe3TodayTotal+=$row['mabe3Today'];
echo '</td>';

echo '<td>';
echo '<input type=text name=baki class=baki style=width:100px value="' . $row['baki'] . '" </td>';

echo '</td>';





echo '<td>';
echo '<input type=text name=dateOfToday style="width:74px;" value="' . $row['dateOfToday'] . '"></input>';

echo '</td>';

//echo "<td>" . "<input type=hidden name=hiddendaftar_id value='" . $row['daftar_id'] . "' ></input></td>";			
// echo "<td style='width:75px'>" . "<input style='height:28px;width:69px;text-align: center;line-height: 6px;' type=submit name=delete value=إزالة" . " </td>";
			
			
	//		echo "<td style='width:80px'>" . "<input style='height:28px;width:74px;text-align:center;line-height: 6px;' type=submit name=update value=تحديث ></input>"   . " </td>";

			
echo '</tr>';

echo '</table>';
echo '</form>';
	    echo '<hr>';
	    $count++;
	}
	echo '<table style="width:1010px;table-layout:auto;margin-left:283px;margin-right:100px;">';


echo '<tr>';

echo '<td style="width:40px;">';

echo '<strong style="max-width:200px;display:inline-block;margin-left:10px;font-size:15px;align:center;">المجموع</strong>';
	


echo "<td>";
echo '<strong style="width:96px;display:inline-block;"></strong>';
echo "</td>";


echo '<td style="margin-right:50px">';

echo '<input type=text name=clientname style="width:100px;  border: 2px solid red; border-radius: 1px; margin-right:40px;" value="'.$mabe3CashTotal.'"></input>';
echo '</td>';


echo "<td>";
echo '<strong style="width:101px;display:inline-block;"></strong>';
echo "</td>";

echo '<td>';

echo '<input type=text name=clientname style="width:100px;  border: 2px solid red; border-radius: 1px;margin-right:40px;" value="'.$sarafaTotal.'"></input>';

echo '</td>';



echo "<td>";
echo '<strong style="width:103px;display:inline-block;"></strong>';
echo "</td>";

echo '<td>';
echo '<input type=text name=clientname style="width:100px; border: 2px solid red; border-radius: 1px;margin-right:36px;" value="'.$masrofatTotal.'"></input>';

echo '</td>';




echo '<td>';
echo '<strong style="width:0px;display:inline-block;"></strong>';
echo '<input type=text name=clientname style="width:100px; margin-right:24px; border: 2px solid red; border-radius: 1px;" value="'.$mabe3TodayTotal.'"></input>';

echo '</td>';

echo "<td>";
echo '<strong style="width:73px;display:inline-block;"></strong>';
echo "</td>";

echo '</tr>';

	echo '</table>';
	
	}
	
function printVal2($conn, $sql){
	$retval = mysqli_query($conn, $sql);
	echo '<div align="center">';
	
	echo '<table style="width:1030px;table-layout:auto;border-radius:1px;border-color:black;">';
	
	echo '<tr style="margin-bottom:20px;">';
	if(date('Y-m-d',  strtotime($_POST["datepicker"]))=="")
	$date1="";
	else
	$date1=date('Y-m-d',  strtotime($_POST["datepicker"]));
echo '<td>';
echo '</td>';
echo '<td>';
	echo '<strong style="font-size:16;color:red;">تقارير شهر: &nbsp;'.$_POST["optionSelected"].' ( '.$_POST["year"].')</strong>';
	echo '</td>';
	echo '<td>';
	
	echo '</td>';
	echo '<td>';
	
	echo '</td>';
	echo '<td>';
	
	echo '</td>';
	echo '</tr>';
	echo '</table>';
	echo '<table style="width:740px;align:center;margin-left:330px;margin-right:40px;">';
	echo '<tr>';
	echo '<td>';
	echo '<input type="hidden" value="hidden"></input>';
	echo '</td>';
	echo '</tr>';
	echo '<tr class="border_bottom">';
	echo '<th>المبيع نقدا</th><th>الصرافة</th><th>مصروفات</th>';
	echo '</tr>';
		echo '</table>';
	echo '<table style="width:1200px;align:center;margin-left:35px;">';
	echo '<tr class="border_bottom">';
	echo '<th style="width:40px;max-width:200px;">الرقم</th><th style="width:70px;max-width:180px;">رقم الفاتورة</th><th style="width:115px;">الصنف</th><th style="width:115px;">السعر</th><th style="width:120px;">الصنف</th><th style="width:130px;">السعر</th><th style="width:120px;">النوع</th><th style="width:120px;">السعر</th><th >مبيعات اليوم</th><th style="width:100px;"> الباقي</th><th>تاريخ البيع</th>';
	echo '</tr>';
	echo '</table>';
echo '</div>';
$count=1;
$mabe3CashTotal=0;
$sarafaTotal=0;
$masrofatTotal=0;
$mabe3TodayTotal=0;
$counter=0;
	while($row = mysqli_fetch_array($retval))
	{
		
	echo '<div align="center">';
	echo '<form method="post" action="daftarReportsUser.php">';
	echo '<table style="width:1200px;table-layout:auto;">';


echo '<tr>';

echo '<td style="width:40px;">';

echo '<strong name=countDM style="max-width:200px;display:inline-block;margin-left:10px;font-size:15px;align:center;">' . $count. ' </strong>';

echo '</td>';


echo '<td style="width:50px;">';

echo "<input type=hidden  name=daftar_id value='" . $row['daftar_id'] . "'></input>";
echo '<strong style="max-width:200px;display:inline-block;font-size:15px;color:red;margin-left:15px;margin-right:5px;">' . $row['daftar_id'] . ' </strong>';


echo '</td>';




echo '<td>';
echo '<input type=text name=senf style=width:100px value="' . $row['senf'] . '" </td>';

echo '</td>';




echo '<td class="verticalLine">';
echo '<input type=text name = se3r class=se3r onkeyup="doMabe3Sub('.$counter.')" style=width:100px value=' . $row['se3r'] . '></input> </td>';
$mabe3CashTotal+=$row['se3r'];
echo '</td>';




echo '<td>';
echo '<input type="text" id="senfS" style="width:100px" name="senfS" value="'.$row['senfS'].'"></input>';
echo '</td>';



echo '<td class="verticalLine">';
echo '<input type="text" id="se3rS" class="se3rS" onkeyup="doMabe3Sub('.$counter.')" style="width:100px" name="se3rS" value="'.$row['se3rS'].'"></input>';
$sarafaTotal+=$row['se3rS'];
echo '</td>';



echo '<td>';
echo '<input type=text name=naw3M style=width:100px value="' . $row['naw3M'] . '" </td>';

echo '</td>';



echo '<td class="verticalLine">';
echo '<input type=text name=si3rM class=si3rM onkeyup="doMabe3Sub('.$counter.')" style=width:100px value="' . $row['si3rM'] . '" </td>';
$masrofatTotal+=$row['si3rM'];
echo '</td>';




echo '<td>';
echo '<input type=text name=mabe3Today class=mabe3Today style=width:100px value="' . $row['mabe3Today'] . '" </td>';
$mabe3TodayTotal+=$row['mabe3Today'];
echo '</td>';


echo '<td>';
echo '<input type=text name=baki class=baki style=width:100px value="' . $row['baki'] . '" </td>';

echo '</td>';





echo '<td>';
echo '<input type=text name=dateOfToday style="width:74px;" value="' . $row['dateOfToday'] . '"></input>';

echo '</td>';
			
			
echo '</tr>';

	echo '</table>';
	echo '</form>';
	    echo '<hr>';
	    $count++;
		}
echo '<table style="width:1010px;table-layout:auto;margin-left:283px;margin-right:100px;">';


echo '<tr>';

echo '<td style="width:40px;">';

echo '<strong style="max-width:200px;display:inline-block;margin-left:10px;font-size:15px;align:center;">المجموع</strong>';
	


echo "<td>";
echo '<strong style="width:96px;display:inline-block;"></strong>';
echo "</td>";


echo '<td style="margin-right:50px">';

echo '<input type=text name=clientname style="width:100px;  border: 2px solid red; border-radius: 1px; margin-right:40px;" value="'.$mabe3CashTotal.'"></input>';
echo '</td>';


echo "<td>";
echo '<strong style="width:101px;display:inline-block;"></strong>';
echo "</td>";

echo '<td>';

echo '<input type=text name=clientname style="width:100px;  border: 2px solid red; border-radius: 1px;margin-right:40px;" value="'.$sarafaTotal.'"></input>';

echo '</td>';



echo "<td>";
echo '<strong style="width:103px;display:inline-block;"></strong>';
echo "</td>";

echo '<td>';
echo '<input type=text name=clientname style="width:100px; border: 2px solid red; border-radius: 1px;margin-right:36px;" value="'.$masrofatTotal.'"></input>';

echo '</td>';




echo '<td>';
echo '<strong style="width:0px;display:inline-block;"></strong>';
echo '<input type=text name=clientname style="width:100px; margin-right:24px; border: 2px solid red; border-radius: 1px;" value="'.$mabe3TodayTotal.'"></input>';

echo '</td>';

echo "<td>";
echo '<strong style="width:73px;display:inline-block;"></strong>';
echo "</td>";

echo '</tr>';

	echo '</table>';
		}
?>

<script>
  var select = document.forms[0].month;
select.onchange = function(){
   var value =  select.options[select.selectedIndex].value; // to get Value
   var text =  select.options[select.selectedIndex].text; // to get Text
 document.getElementById("optionSelected").value = text;
 
}
</script>

</body>
</html>