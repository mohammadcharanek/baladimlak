
<?php
$host = 'localhost'; // Host name
$username = 'root'; // Mysql username
$password = ''; // Mysql password
$db_name = 'gicontra_sewingFactory'; // Database name
$tbl_name = 'badlah'; // Table name
$port = 3306;

// Connect to server and select database.
$connection = MySqli_connect($host, $username, $password) or die("cannot connect");
MySqli_select_db($connection, $db_name) or die("cannot select DB");

mysqli_query($connection, "SET NAMES 'utf8'");
mysqli_query($connection, 'SET CHARACTER SET utf8');

$sql = "select * from badlah ORDER BY badlah_id DESC LIMIT 1";
$result = mysqli_query($connection, $sql);
while ($row = mysqli_fetch_array($result)) {
$badlah_id=$row['badlah_id'];
$badlahT_ID = $row['badlahT_ID'];

$naw3al3amal = $row['naw3al3amal'];

$clientname = $row['clientname'];

$mobilenum = $row['mobilenum'];
$dateOfCompletion = $row['dateOfCompletion'];

$tool = $row['tool'];
$katef = $row['katef'];
$kom1 = $row['kom1'];
$kom2 = $row['kom2'];
$kom3 = $row['kom3'];
$sadr = $row['sadr'];
$batn = $row['batn'];
$asfal = $row['asfal'];
$raqba = $row['raqba'];
$qita3 = $row['qita3'];
$comments = $row['comments'];

$toolp = $row['toolp'];
$shi3ar = $row['shi3ar'];
$shi3arN = $row['shi3arN'];
$hizam = $row['hizam'];

$rotbahN = $row['rotbahN'];
$rotbah = $row['rotbah'];
$base = $row['base'];
$splaytN = $row['splaytN'];
$splayt = $row['splayt'];
$fa5th = $row['fa5th'];
$kabou3N = $row['kabou3N'];
$kabou3 = $row['kabou3'];
$sak = $row['sak'];
$law7aN = $row['law7aN'];
$law7a = $row['law7a'];
$asfalbnt = $row['asfalbnt'];
$yakaN = $row['yakaN'];
$yaka = $row['yaka'];
$waynakN = $row['waynakN'];
$waynak = $row['waynak'];
$notahN = $row['notahN'];
$notah = $row['notah'];
$kravtaN = $row['kravtaN'];
$kravta = $row['kravta'];
$qty = $row['bQty'];

$bQty = $row['bQty'];
$price = $row['price'];
$vat = $row['vat'];
$omla = $row['omla'];
$overallP = $row['overallP'];
$finished = $row['finished'];
$received = $row['received'];

$wasl = $row['wasl'];
$baki = $row['baki'];
}
// To protect MySQL injection (more detail about MySQL injection)
?> 

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>مقاسات</title>
<style>
table#table0 {
    border-collapse: collapse;
    width: 700px;
	height: 280px;
}
table#table0 td{
border: 1px solid black;
 width:100px
}
table#table2 td{
border: 1px solid black;
 width:100px
}
table#table3 td{
border: 1px solid black;
}

input[type=button] {
    width: 100px;
    background-color:	#FFDEAD;
    color: green;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}
input[type=button]:hover {
    background-color: grey;
}

</style>
<script type="text/javascript">     
    function PrintDiv() {    
       var divToPrint = document.getElementById('divToPrint');
       var popupWin = window.open('', '_blank', 'width=300,height=300');
       popupWin.document.open();
       popupWin.document.write('<html><body onload="window.print()">' + divToPrint.innerHTML + '</html>');
        popupWin.document.close();
            }
 </script>
</head>
<body dir="rtl">

<?php
 

$sql = "SELECT * FROM altermahal ORDER BY alterMahal_id DESC LIMIT 0, 1";
$result = $connection->query($sql);

if ($result->num_rows >=0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
$mahalName=$row['mahalName'];
echo '<h2 style="text-align:center;">'.$mahalName.'</h2>';


}
} 
else{
echo "0 results";
}

?>

<h2 style="text-align:left; margin-left:75px">فاتورة مقاسات  Bill Sizes</h2>

<?php
       echo '<div id="divToPrint" class="kames" align="left">';
echo '<table style="align:left; margin-left:75px; dir:rtl">';
echo	'<tr>';
echo		'<td width="20px"></td><td width="130px"><font color="red">';

echo '#'.$badlah_id;
   			
echo		'</font></td>';
		
echo		'<td>';


echo		'</td>';
echo '<td><input type="button" value="رجوع" class="homebutton"
				id="btnHome" onclick="history.back()" /></td>';
echo	'</tr>';
echo '</table>';
echo '</div>';

?>
<table style="border: 1px solid white; margin-right:0px; margin-bottom:0px; margin-left:0px;height:252px;">
<tr>
<td>
<table style="border: 1px solid black; margin-right:0px; margin-bottom:0px; margin-left:0px; height:277px;width:510px;">
<tr>
<td style="width:180px"><h3 style="margin-right:5px">
حررت الفاتورة ل:</h3>
</td>
<td style="width:130px;text-align:left;  background-color: rgb(239, 237, 230);">
<h3 style="margin-top:10px; margin-bottom:5px">
تاريخ الفاتورة :
</h3>
</td>
<td style="width:155px;  background-color: rgb(239, 237, 230)">
<?php
date_default_timezone_set("Asia/Riyadh");
 echo date("Y-m-d"); ?><br>
<?php
date_default_timezone_set("Asia/Riyadh");
echo  date("h:i:sa");
 ?>
</td>
</tr>
<tr>
<td>
<h3 style="margin-right:10px">
<?php
echo $clientname; ?>
</h3>
</td>
<td style="text-align:left; background-color: rgb(239, 237, 230)">
<h3 style="margin-top:10px; margin-bottom:5px">
تاريخ الإستلام :
</h3>
</td>
<td style="background-color: rgb(239, 237, 230)">
<?php echo $dateOfCompletion; ?>
</td>
</tr>

<tr>
<td>
 <strong style="font-size: 16px;margin-right:10px">
رقم الهاتف:  
</strong>
<?php
echo $mobilenum; ?>
</td>

<td style="width:133px; text-align:left;  background-color: rgb(239, 237, 230)">
<h3 style="margin-top:10px; margin-bottom:5px">
المبلغ الإجمالي :
</h3>
</td>
<td style="background-color: rgb(239, 237, 230)">
<?php echo $overallP.'  '.$omla; ?>
</td>
</tr>

<tr>
<td>
</td>

<td style="text-align:left;  background-color: rgb(239, 237, 230)">
<h3 style="margin-top:10px; margin-bottom:5px">
واصل منه      :
</h3>
</td>
<td style="background-color: rgb(239, 237, 230)">
<?php echo $wasl;
echo " ";
echo $omla;
?>
</td>
</tr>

<tr>
<td>
</td>

<td style="text-align:left;  background-color: rgb(239, 237, 230)">
<h3 style="margin-top:10px; margin-bottom:5px">
الباقي          :
</h3>
</td>
<td style="background-color: rgb(239, 237, 230)">
<strong style="font-size: 16px;margin-right:1px"><?php echo $baki;
echo " ";
echo $omla;
?></strong>
</td>
</tr>


</table>
</td>
<td>


<table id="table2" style="border: 2px solid black;border-collapse: collapse; margin-right:0px; margin-bottom:0px; height:252px;width:708px">
<tr style="background-color:rgb(239, 237, 230);height:42px">
<td style="text-align:center; width:75px; border: 1px solid black;background-color:rgb(185, 198, 198)"><h3 style="margin-top:10px; margin-bottom:5px">
قميص</h3>
</td>
<td style="width:75px; text-align:center; border: 1px solid black">
<h3 style="margin-top:10px; margin-bottom:5px">
طول
</h3>
</td>

<td style="width:75px; text-align:center; border: 1px solid black">
<h3 style="margin-top:10px; margin-bottom:5px">
 كتف
</h3>
</td>

<td style="text-align:center">
<h3 style="margin-top:10px; margin-bottom:5px">
كم</h3>
</td>

<td style="text-align:center">
<h3 style="margin-top:10px; margin-bottom:5px">
صدر
</h3>
</td>

<td style="text-align:center">
<h3 style="margin-top:10px; margin-bottom:5px">
بطن
</h3>
</td>

<td style="text-align:center">
<h3 style="margin-top:10px; margin-bottom:5px">
أسفل
</h3>
</td>

<td style="text-align:center">
<h3 style="margin-top:10px; margin-bottom:5px">
رقبة
</h3>
</td>

<td style="text-align:center">
<h3 style="margin-top:10px; margin-bottom:5px">
القطاع
</h3>
</td>

</tr>
<tr style="height:42px">
<td>
</td>
<td style="width:100px; border: 1px solid black"><h3 style="margin-top:10px; margin-bottom:5px; margin-right:10px">
<?php echo $tool; ?>
</h3>
</td>


<td>
<h3 style="margin-top:10px; margin-bottom:5px; margin-right:10px">
 <?php echo $katef; ?>
</h3>
</td>

<td>
<h3 style="margin-right:10px; margin-top:10px; margin-bottom:7px">
  <?php 
 
 echo $kom1; ?>
</h3>
</td>






<td>
<h3 style="margin-right:10px; margin-top:10px; margin-bottom:7px">
  <?php 
 
 echo $sadr; ?>
</h3>
</td>


<td>
<h3 style="margin-right:10px; margin-top:10px; margin-bottom:7px">
  <?php 
 
 echo $batn; ?>
</h3>
</td>

<td>
<h3 style="margin-right:10px; margin-top:10px; margin-bottom:7px">
  <?php 
 
 echo $asfal; ?>
</h3>
</td>

<td>
<h3 style="margin-right:10px; margin-top:10px; margin-bottom:7px">
  <?php 
 
 echo $raqba; ?>
</h3>
</td>

<td>
<h3 style="margin-right:10px; margin-top:10px; margin-bottom:7px">
  <?php 
 
 echo $qita3; ?>
</h3>
</td>
</tr>
<tr style="height:42px">
<td>
</td>

<td>
</td>


<td>
</td>


<td>
<h3 style="margin-right:10px; margin-top:10px; margin-bottom:7px">
  <?php 
 
 echo $kom2; ?>
</h3>
</td>



<td>
</td>


<td>
</td>

<td>
</td>
<td>
</td>

<td>
</td>

</tr>

<tr style="border-bottom:3pt solid black;height:42px">
<td>
</td>

<td>
</td>


<td>
</td>


<td>
<h3 style="margin-right:10px; margin-top:10px; margin-bottom:7px">
  <?php 
 
 echo $kom3; ?>
</h3>
</td>



<td>
</td>


<td>
</td>

<td>
</td>

<td>
</td>

<td>
</td>

</tr>
<tr style="background-color:rgb(239, 237, 230);height:42px">
<td style="text-align:center; width:75px; border: 1px solid black;background-color:rgb(185, 198, 198)"><h3 style="margin-top:10px; margin-bottom:5px">
بنطلون</h3>
</td>
<td style="width:75px; text-align:center; border: 1px solid black">
<h3 style="margin-top:10px; margin-bottom:5px">
طول
</h3>
</td>
<td style="width:75px; text-align:center; border: 1px solid black">
<h3 style="margin-top:10px; margin-bottom:5px">
حزام
</h3>
</td>


<td style="text-align:center">
<h3 style="margin-top:10px; margin-bottom:5px">
قاعدة
</h3>
</td>

<td style="text-align:center">
<h3 style="margin-top:10px; margin-bottom:5px">
فخذ
</h3>
</td>

<td style="text-align:center">
<h3 style="margin-top:10px; margin-bottom:5px">
ساق
</h3>
</td>

<td style="text-align:center">
<h3 style="margin-top:10px; margin-bottom:5px">
أسفل البنطلون
</h3>
</td>
<td>
</td>

<td>
</td>

</tr>
<tr style="height:42px">
<td>
</td>
<td style="width:100px; border: 1px solid black"><h3 style="margin-top:10px; margin-bottom:5px; margin-right:10px">
<?php echo $toolp; ?>
</h3>
</td>




<td>
<h3 style="margin-top:10px; margin-bottom:5px; margin-right:10px">
 <?php echo $hizam; ?>
</h3>
</td>


<td>
<h3 style="margin-right:10px; margin-top:10px; margin-bottom:7px">
  <?php 
 
 echo $base; ?>
</h3>
</td>

<td>
<h3 style="margin-right:10px; margin-top:10px; margin-bottom:7px">
  <?php 
 
 echo $fa5th; ?>
</h3>
</td>


<td>
<h3 style="margin-right:10px; margin-top:10px; margin-bottom:7px">
  <?php 
 
 echo $sak; ?>
</h3>
</td>


<td>
<h3 style="margin-right:10px; margin-top:10px; margin-bottom:7px">
  <?php 
 
 echo $asfalbnt; ?>
</h3>
</td>
<td>
</td>

<td>
</td>

</tr>


</table>
</td>
</tr>
</table>

<table style="margin-top:5px">
<tr>
<td>

<table id="table3" style="height:178px;border: 2px solid black; border-collapse: collapse; align:right; margin-right:0px; margin-top:0px; width:420px;">
<tr  style="background-color:rgb(239, 237, 230);height:45px">
<td style="width:85px;background-color:rgb(185, 198, 198)">
<h3 style="margin-right:10px; margin-top:10px; margin-bottom:7px">
نوع العمل
</h3>
</td>

<td>
<h3 style="text-align:center; margin-right:10px; margin-top:10px; margin-bottom:7px"><?php
echo $naw3al3amal; ?> 
</h3>
</td>
</tr>

<tr style="height:134px">
<td>
<h3 style="margin-right:10px; margin-top:10px; margin-bottom:7px">
 ملاحضات
</h3>
</td>
<td><h3 style="text-align:center; margin-right:10px; margin-top:10px; margin-bottom:7px"><?php
echo $comments; ?></h3>
</td>
</tr>
</table>
</td>
<td>

<table id="table2" style="height:180px;border: 2px solid black;border-collapse: collapse; margin-right:0px; margin-top:0px; width:800px">
<tr style="background-color:rgb(239, 237, 230);height:45px">
<td style="text-align:center; width:110px; border: 1px solid black;background-color:rgb(185, 198, 198)"><h3 style="margin-top:10px; margin-bottom:5px">
لوازم عسكرية</h3>
</td>

<td style="width:75px; text-align:center; border: 1px solid black;" colspan="2">
<h3 style="margin-top:10px; margin-bottom:5px">
شعار
</h3>
</td>


<td style="width:75px; text-align:center; border: 1px solid black;" colspan="2">
<h3 style="margin-top:10px; margin-bottom:5px">
رتبة
</h3>
</td>




<td style="text-align:center;" colspan="2">
<h3 style="margin-top:10px; margin-bottom:5px">
سبلايت
</h3>
</td>


<td style="text-align:center;" colspan="2">
<h3 style="margin-top:10px; margin-bottom:5px">
قبوع
</h3>
</td>

<td style="width:135;text-align:center;" colspan="2">
<h3 style="margin-top:10px; margin-bottom:5px">
لوحة
</h3>
</td>

</tr>
<tr style="height:45px">

<td>
</td>

<td style="width:35px; border: 1px solid black"><h3 style="margin-top:10px; margin-bottom:5px; margin-right:10px; colspan:1">
<?php echo $shi3arN; ?>
</h3>
</td>
<td style="width:100px; border: 1px solid black"><h3 style="margin-top:10px; margin-bottom:5px; margin-right:10px;colspan:1">
<?php echo $shi3ar; ?>
</h3>

<td style="width:35px; border: 1px solid black">
<h3 style="margin-top:10px; margin-bottom:5px; margin-right:10px;">
 <?php echo $rotbahN; ?>
</h3>
</td>
<td>
<h3 style="margin-top:10px; margin-bottom:5px; margin-right:10px;">
 <?php echo $rotbah; ?>
</h3>
</td>

<td style="width:35px; border: 1px solid black">
<h3 style="margin-right:10px; margin-top:10px; margin-bottom:7px">
  <?php 
 
 echo $splaytN; ?>
</h3>
</td>
<td>
<h3 style="margin-right:10px; margin-top:10px; margin-bottom:7px">
  <?php 
 
 echo $splayt; ?>
</h3>
</td>
<td style="width:35px; border: 1px solid black">
<h3 style="margin-right:10px; margin-top:10px; margin-bottom:7px">
  <?php 
 
 echo $kabou3N; ?>
</h3>
</td>

<td>
<h3 style="margin-right:10px; margin-top:10px; margin-bottom:7px">
  <?php 
 
 echo $kabou3; ?>
</h3>
</td>
<td style="width:25px; border: 1px solid black">
<h3 style="margin-right:10px; margin-top:10px; margin-bottom:7px">
  <?php 
 
 echo $law7aN; ?>
</h3>
</td>

<td style="width:100px; border: 1px solid black">
<h3 style="margin-right:10px; margin-top:10px; margin-bottom:7px">
  <?php 
 
 echo $law7a; ?>
</h3>
</td>

</tr>
<tr style="background-color:rgb(243, 243, 247);height:45px">
<td style="background-color:rgb(255,255,255)">
</td>
<td style="text-align:center;" colspan="2">
<h3 style="margin-top:10px; margin-bottom:5px">
ياقة
</h3>
</td>

<td style="text-align:center;" colspan="2">
<h3 style="margin-top:10px; margin-bottom:5px">
وينق
</h3>
</td>

<td style="text-align:center;" colspan="2">
<h3 style="margin-top:10px; margin-bottom:5px">
نوط
</h3>
</td>

<td style="text-align:center;" colspan="2">
<h3 style="margin-top:10px; margin-bottom:5px">
كرافتة
</h3>
</td>
<td colspan="2">
</td>
</tr>

<tr style="height:45px">
<td>
</td>

<td style="width:35px; border: 1px solid black">
<h3 style="margin-right:10px; margin-top:10px; margin-bottom:7px">
  <?php 
 
 echo $yakaN; ?>
</h3>
</td>

<td>
<h3 style="margin-right:10px; margin-top:10px; margin-bottom:7px">
  <?php 
 
 echo $yaka; ?>
</h3>
</td>

<td style="width:35px; border: 1px solid black">
<h3 style="margin-right:10px; margin-top:10px; margin-bottom:7px">
  <?php 
 
 echo $waynakN; ?>
</h3>
</td>

<td>
<h3 style="margin-right:10px; margin-top:10px; margin-bottom:7px">
  <?php 
 
 echo $waynak; ?>
</h3>
</td>

<td style="width:35px; border: 1px solid black">
<h3 style="margin-right:10px; margin-top:10px; margin-bottom:7px">
  <?php 
 
 echo $notahN; ?>
</h3>
</td>

<td>
<h3 style="margin-right:10px; margin-top:10px; margin-bottom:7px">
  <?php 
 
 echo $notah; ?>
</h3>
</td>

<td style="width:35px; border: 1px solid black">
<h3 style="margin-right:10px; margin-top:10px; margin-bottom:7px">
  <?php 
 
 echo $kravtaN; ?>
</h3>
</td>

<td>
<h3 style="margin-right:10px; margin-top:10px; margin-bottom:7px">
  <?php 
 
 echo $kravta; ?>
</h3>
</td>
<td style="width:25px; border: 1px solid black">
</td>
<td style="width:100px; border: 1px solid black">
</td>

</tr>

</table>
</td>
</tr>
</table>


<table style="margin-right:75px;">
<tr>
<td>
<?php

$sql = "SELECT * FROM alteraddress ORDER BY address_id DESC LIMIT 0, 1";
$result = $connection->query($sql);

if ($result->num_rows >=0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
$address=$row['address'];
echo $address;


}
} 
else{
echo "0 results";
}

?>
</td>
</tr>
<tr>
<td>
<?php

$sql = "SELECT * FROM alteraddress ORDER BY address_id DESC LIMIT 0, 1";
$result = $connection->query($sql);

if ($result->num_rows >=0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
$addressEn=$row['addressEn'];
echo $addressEn;


}
} 
else{
echo "0 results";
}

?>
</td>
</tr>
</table>

<button onclick="myFunction()">Print this page</button>
<script>
function myFunction() {
    window.print();
}
</script>
<?php
MySqli_close($connection);
?>
</body>
</html>