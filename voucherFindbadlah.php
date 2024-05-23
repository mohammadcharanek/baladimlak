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
$host='localhost'; // Host name
$username='root'; // Mysql username
$password=''; // Mysql password
$db_name='gicontra_sewingFactory'; // Database name
$tbl_name='badlah'; // Table name
$port=3306;

$connection= MySqli_connect($host, $username, $password)or die("cannot connect");
MySqli_select_db($connection, $db_name)or die("cannot select DB");

mysqli_query($connection, "SET NAMES 'utf8'"); 
mysqli_query($connection, 'SET CHARACTER SET utf8');  
if(isset($_POST['badlahID'])){
$badlah_id=$_POST['badlahID'];}
if(isset($_POST['clientname'])){
$clientname=$_POST['clientname'];}
else{
$clientname= "";
}
if(isset($_POST['mobilenum'])){
$mobilenum=$_POST['mobilenum'];}
else{
$mobilenum= 0;
}
if(isset($_POST['datepicker'])){
$dateOfCompletion =date('Y-m-d',  strtotime($_POST['datepicker']));}
else{
return "0000-00-00";
}
if(isset($_POST['qita3'])){
$qita3=$_POST['qita3'];}
else{
$qita3= "";
}
if(is_numeric($_POST['shi3arN'])){
$shi3arN=$_POST['shi3arN'];}
else{
$shi3arN= 0;
}
if(is_numeric($_POST['shi3ar'])){
$shi3ar=$_POST['shi3ar'];}
else{
$shi3ar =0;
}
if(is_numeric($_POST['rotbahN'])){
$rotbahN=$_POST['rotbahN'];}
else{
$rotbahN= 0;
}
if(is_numeric($_POST['rotbah'])){
$rotbah=$_POST['rotbah'];}
else{
$rotbah= 0;
}
if(is_numeric($_POST['splaytN'])){
$splaytN=$_POST['splaytN'];}
else{
$splaytN= 0;
}
if(is_numeric($_POST['splayt'])){
$splayt=$_POST['splayt'];}
else{
$splayt= 0;
}
if(is_numeric($_POST['kabou3N'])){
$kabou3N=$_POST['kabou3N'];}
else{
$kabou3N= 0;
}
if(is_numeric($_POST['kabou3'])){
$kabou3=$_POST['kabou3'];}
else{
$kabou3= 0;
}
if(is_numeric($_POST['law7aN'])){
$law7aN=$_POST['law7aN'];}
else{
$law7aN= 0;
}
if(is_numeric($_POST['law7a'])){
$law7a=$_POST['law7a'];}
else{
$law7a= 0;
}
if(is_numeric($_POST['yakaN'])){
$yakaN=$_POST['yakaN'];}
else{
$yakaN = 0;
}
if(is_numeric($_POST['yaka'])){
$yaka=$_POST['yaka'];}
else{
$yaka= 0;
}
if(is_numeric($_POST['waynakN'])){
$waynakN=$_POST['waynakN'];}
else{
$waynakN= 0;
}
if(is_numeric($_POST['waynak'])){
$waynak=$_POST['waynak'];}
else{
$waynak= 0;
}
if(is_numeric($_POST['notahN'])){
$notahN=$_POST['notahN'];}
else{
$notahN= 0;
}
if(is_numeric($_POST['notah'])){
$notah=$_POST['notah'];}
else{
$notah= 0;
}
if(is_numeric($_POST['kravtaN'])){
$kravtaN=$_POST['kravtaN'];}
else{
$kravtaN= 0;
}
if(is_numeric($_POST['kravta'])){
$kravta=$_POST['kravta'];}
else{
$kravta= 0;
}
if (is_numeric($_POST['bQty'])) {
$bQty=$_POST['bQty'];


}
else{
$bQty=0;

}
if(is_numeric($_POST['price'])){
$price=$_POST['price'];
}else{
$price=0;
}

if(isset($_POST['myselectbox'])){
$omla=$_POST['myselectbox'];}
else{
$omla= 0;
}
if(isset($_POST['naw3al3amal'])){
$naw3al3amal=$_POST['naw3al3amal'];}
else{
	$naw3al3amal="";
}
if(is_numeric($_POST['overallP'])){
$overallP=$_POST['overallP'];}
else{
$overallP= 0;
}
if(is_numeric($_POST['wasl'])){
$wasl=$_POST['wasl'];}
else{
$wasl= 0;
}
if(is_numeric($_POST['baki'])){
$baki=$_POST['baki'];}
else{
$baki= 0;
}
// To protect MySQL injection (more detail about MySQL injection)
  
      
        
    
  


 ?>

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

<h2 style="text-align:left; margin-left:30px"> فاتورة INVOICE</h2>

<?php

       echo '<div id="divToPrint" class="kames" align="left">';
echo '<table style="align:left; margin-left:75px; dir:rtl">';
echo	'<tr>';
echo		'<td width="20px"></td><td width="130px"><font color="red">';

echo $badlah_id;
   			
echo		'</font></td>';
		


echo '<td>';
echo"<input type='button' value='رجوع' class='homebutton'
				id='btnHome' onClick=document.location.href='findBadlah.php' />
				</td>";
				

echo	'</tr>';
echo '</table>';
echo '</div>';

?>


<table style="border: 1px solid black; align:right; margin-right:75px; margin-top:15px;width:1118px;">
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


<table id="table2" style="border: 2px solid black;border-collapse: collapse; align:right; margin-right:75px; margin-top:10px; width:1118px">
<tr style="background-color:rgb(239, 237, 230)">
<td style="text-align:center; width:200px; border: 1px solid black"><h3 style="margin-top:10px; margin-bottom:5px">
المنتج</h3>
</td>
<td style="width:400px; text-align:center; border: 1px solid black">
<h3 style="margin-top:10px; margin-bottom:5px">
الوصف
</h3>
</td>
<td style="width:100px; text-align:center; border: 1px solid black"><h3 style="margin-top:10px; margin-bottom:5px">
الكمية</h3>
</td>
<td style="width:200px; text-align:center; border: 1px solid black"><h3 style="margin-top:10px; margin-bottom:5px">
السعر</h3>
</td>
<td style="width:200px; text-align:center; border: 1px solid black"><h3 style="margin-top:10px; margin-bottom:5px">
المبلغ</h3>
</td>
</tr>
<tr>
<td style="height:40px">
<h3 style="margin-right:10px; margin-top:10px; margin-bottom:7px">
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
<h3 style="margin-right:10px; margin-top:10px; margin-bottom:7px">
 لوازم عسكرية
</h3>
</td>

<td>
<h3>

</h3>
</td>

<td>
<h3 style="margin-right:10px; margin-top:10px; margin-bottom:7px">
  <?php 
 $numLw=$shi3arN+	$rotbahN+ $splaytN+$kabou3N+$law7aN+ $yakaN+$waynakN+  $notahN+ $kravtaN; 
 echo $numLw; ?>
</h3>
</td>

<td>
<h3 style="margin-right:10px; margin-top:10px; margin-bottom:7px">
  
</h3>
</td>

<td>
<h3 style="margin-right:10px; margin-top:10px; margin-bottom:7px">
  <?php 
 
 echo $shi3arN*$shi3ar+ $rotbahN*$rotbah+$splaytN*$splayt+$kabou3N*$kabou3+$law7aN*$law7a+$yakaN*$yaka+$waynakN*$waynak+$notahN*$notah+$kravtaN*$kravta; ?>
</h3>
</td>
</tr>
</table>
<table style="border: 2px solid black;border-collapse: collapse; align:right; margin-right:75px; margin-top:10px; width:1118px;">
<tr  style="background-color:rgb(239, 237, 230)">
<td>
    
<h3 style="margin-right:10px; margin-top:10px; margin-bottom:7px">
نوع العمل
</h3>
</td> 

<td>
<font style="font-size:17px;margin-right:10px; margin-top:10px; margin-bottom:7px;"><?php
echo (isset($naw3al3amal)? $naw3al3amal:""); ?>
</font>
</td>
<td>
    <h3 style="margin-right:10px; margin-top:10px; margin-bottom:7px">
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
MySqli_close($connection);
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

</body>
</html>