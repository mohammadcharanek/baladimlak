
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
$naw3exp=$row['naw3exp'];

$numexp=$row['numexp'];

$pexp=$row['pexp'];
$type=$row['type'];
}
// To protect MySQL injection (more detail about MySQL injection)
?> 
 

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>فاتورة</title>
<style>
table#table2 td{
border: 1px solid black;
}		
input[type=button] {
    width: 100px;
    background-color:	#FFDEAD;
    color: green;
    padding: 14px 20px;
    margin: 2px 0;
    border: none;
    border-radius: 3px;
    cursor: pointer;
}
input[type=button]:hover {
    background-color: grey;
}

        page {
			
  background: white;
  display: block;
  margin: 0 auto;
  margin-bottom: 0.5cm;
  box-shadow: 0 0 0.5cm rgba(0,0,0,0.5);
}
page[size="A4/2"] {  
  width:14.85cm;
  height:10.5cm; 
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
echo '<h2 style="text-align:center">'.$mahalName.'</h2>';


}
} 
else{
echo "0 results";
}

?>

<h2 style="text-align:left; margin-left:30px"> فاتورة INVOICE</h2>

<?php

       echo '<div id="divToPrint" class="kames" align="left">';
echo '<table style="align:left; margin-left:75px; dir:rtl">';
echo	'<tr>';
echo		'<td width="20px"></td><td width="130px"><font color="red">';

echo '#'.$badlah_id;
   			
echo		'</font></td>';
		

echo '<td><input type="button" value="رجوع" class="homebutton"
				id="btnHome" onclick="history.back()" /></td>';

echo	'</tr>';
echo '</table>';
echo '</div>';

?>


<table style="border: 1px solid black; align:right; margin-right:75px; margin-top:2px;height: 170px;width:1118px;">
<tr>
<td style="width:600px"><h3 style="margin-right:10px">
حررت الفاتورة ل:</h3>
</td>

<td style="text-align:left;  background-color: rgb(239, 237, 230)">
<h3 style="margin-top:10px; margin-bottom:5px">
تاريخ الفاتورة :
</h3>
</td>
<td style="width:200px;  background-color: rgb(239, 237, 230)">
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
 <strong style="font-size: 16px; margin-right:10px">
رقم الهاتف:  
</strong>
<?php
echo $mobilenum; ?>
</td>

<td style="text-align:left;  background-color: rgb(239, 237, 230)">
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
<td style="background-color: rgb(239, 237, 230);margin-right:3px">
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


<table id="table2" style="border: 2px solid black;border-collapse: collapse; align:right; margin-right:75px; margin-top:5px; width:1118px">
<tr style="background-color:rgb(239, 237, 230)">
<td style="text-align:center; width:200px; border: 1px solid black"><h3 style="margin-top:5px; margin-bottom:5px">
المنتج</h3>
</td>
<td style="width:400px; text-align:center; border: 1px solid black">
<h3 style="margin-top:10px; margin-bottom:5px">
الوصف
</h3>
</td>
<td style="width:100px; text-align:center; border: 1px solid black"><h3 style="margin-top:5px; margin-bottom:5px">
الكمية</h3>
</td>
<td style="width:200px; text-align:center; border: 1px solid black"><h3 style="margin-top:5px; margin-bottom:5px">
السعر</h3>
</td>
<td style="width:200px; text-align:center; border: 1px solid black"><h3 style="margin-top:5px; margin-bottom:5px">
المبلغ</h3>
</td>
</tr>
<tr>
<td style="height:40px">
<h3 style="margin-right:10px; margin-top:5px; margin-bottom:7px">
 بدلة
</h3>
</td>

<td>
<h3>
 
</h3>
</td>

<td>
<h3 style="margin-right:10px">
 <?php echo $bQty; ?>
</h3>
</td>

<td>
<h3 style="margin-right:10px">
 <?php echo $price; ?>
</h3>
</td>

<td>
<h3 style="margin-right:10px">
 <?php echo $bQty*$price; ?>
</h3>
</td>
</tr>


<tr>
<td style="height:40px">
<h3 style="margin-right:10px; margin-top:5px; margin-bottom:7px">
 لوازم عسكرية
</h3>
</td>

<td>
<h3>

</h3>
</td>

<td>
<h3 style="margin-right:10px; margin-top:5px; margin-bottom:7px">
  <?php 
 $numLw=$shi3arN+	$rotbahN+ $splaytN+$kabou3N+$law7aN+ $yakaN+$waynakN+  $notahN+ $kravtaN; 
 echo $numLw; ?>
</h3>
</td>

<td>
<h3 style="margin-right:10px; margin-top:5px; margin-bottom:7px">
  
</h3>
</td>

<td>
<h3 style="margin-right:10px; margin-top:5px; margin-bottom:7px">
  <?php 
 
 echo $shi3arN*$shi3ar+ $rotbahN*$rotbah+$splaytN*$splayt+$kabou3N*$kabou3+$law7aN*$law7a+$yakaN*$yaka+$waynakN*$waynak+$notahN*$notah+$kravtaN*$kravta; ?>
</h3>
</td>
</tr>
</table>
<table style="border: 2px solid black;border-collapse: collapse; align:right; margin-right:75px; margin-top:5px; width:1118px;">
<tr  style="background-color:rgb(239, 237, 230)">
<td>
    
<h3 style="margin-right:10px; margin-top:5px; margin-bottom:7px">
نوع العمل
</h3>
</td> 

<td>
<font style="font-size:17px;margin-right:10px; margin-top:5px; margin-bottom:7px;"><?php
echo (isset($naw3al3amal)? $naw3al3amal:""); ?>
</font>
</td>
<td>
    <h3 style="margin-right:10px; margin-top:5px; margin-bottom:7px">
    القطاع
    </h3>
    </td>
    <td>
<font style="font-size:17px;"><?php
echo $qita3; ?>
</font>

        </td>
</tr>
</table>

<table style="border: 2px solid black;border-collapse: collapse; align:right; margin-right:75px; margin-top:5px; width:1118px;">
<tr  style="background-color:rgb(239, 237, 230)">
<td>
    
<h3 style="margin-right:10px; margin-top:10px; margin-bottom:7px">
<?php echo $type;?>
</h3>
</td> 

<td>
<font style="font-size:17px;margin-right:10px; margin-top:10px; margin-bottom:7px;"><?php
echo (isset($naw3exp)? $naw3exp:""); ?>
</font>
</td>
<td>
    <h3 style="margin-right:10px; margin-top:10px; margin-bottom:7px">
    العدد
    </h3>
    </td>
    <td>
<font style="font-size:17px;"><?php
echo (isset($numexp)? $numexp:""); ?>
</font>

        </td>
<td>
    <h3 style="margin-right:10px; margin-top:10px; margin-bottom:7px">
    السعر
    </h3>
    </td>
    <td>
<font style="font-size:17px;"><?php
echo (isset($pexp)? $pexp:""); echo " &nbsp;&nbsp;";
echo '<font style="font-size:18px;">'.$omla.'</font>';?>
</font>

        </td>
</tr>
</table>

<table style="margin-right:75px">
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
<td>
    &nbsp;&nbsp;&nbsp;
    <button onclick="myFunction()">Print this page</button>
</td>
</tr>
</table>


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