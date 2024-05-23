<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>فاتورة تصليح</title>
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

    $taslehID=isset($_POST['taslehID']) ? $_POST['taslehID'] : '';
	$clientName=isset($_POST['clientName']) ? $_POST['clientName'] : '';
	$phoneNum=isset($_POST['phoneNum']) ? $_POST['phoneNum'] : '';
	$taslehType=isset($_POST['taslehType']) ? $_POST['taslehType'] : '';
	$qty=isset($_POST['qty']) ? $_POST['qty'] : '';
	$tPrice=isset($_POST['tPrice']) ? $_POST['tPrice'] : '';
	$workerName=isset($_POST['workerName']) ? $_POST['workerName'] : '';
	$wasl=isset($_POST['wasl']) ? $_POST['wasl'] : '';
	$baki=isset($_POST['baki']) ? $_POST['baki'] : '';
	$dateOfCompletion =isset($_POST['dateOfCompletion']) ? $_POST['dateOfCompletion'] : '';
// To protect MySQL injection (more detail about MySQL injection)
	
			
				
		
	

//MySqli_close($connection);
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

<h2 style="text-align:left; margin-left:30px"> فاتورة تصليح REPAIR BILL</h2>
<?php

       echo '<div id="divToPrint" class="kames" align="left">';
echo '<table style="align:left;margin-left:75px;dir:rtl;">';
echo	'<tr>';
echo		'<td width="20px"></td><td width="130px"><font color="red" style="font-weight:bold;">';

echo '#'.$taslehID;
   			
echo		'</font></td>';
		
echo		'<td>';


echo		'</td>';
echo '<td><input type="button" value="رجوع" class="homebutton"
				id="btnHome" onclick="history.back()" /></td>';
echo	'</tr>';
echo '</table>';
echo '</div>';

?>



<table style="border: 1px solid black; align:right; margin-right:75px; margin-top:15px;width:1118px">
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
echo $clientName; ?>
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
echo $phoneNum; ?>
</td>

<td style="text-align:left;  background-color: rgb(239, 237, 230)">
<h3 style="margin-top:10px; margin-bottom:5px">
واصل:
</h3>
</td>
<td style="background-color: rgb(239, 237, 230)">
<?php echo $wasl;?>
</td>
</tr>

<tr>
<td>
</td>

<td style="text-align:left;  background-color: rgb(239, 237, 230)">
</td>
<td style="background-color: rgb(239, 237, 230);margin-right:3px">
<?php echo " "?>
</td>
</tr>

<tr>
<td>
</td>

<td style="text-align:left;  background-color: rgb(239, 237, 230)">
    <h3 style="margin-top:10px; margin-bottom:5px">
        الباقي:
        </h3>
</td>
<td style="background-color: rgb(239, 237, 230)">
<strong style="font-size: 16px;margin-right:1px"><?php echo $baki;

?></strong>
</td>
</tr>


</table>


<table id="table2" style="border: 2px solid black;border-collapse: collapse; align:right; margin-right:75px; margin-top:10px; width:1118px">
<tr style="background-color:rgb(239, 237, 230)">
<td style="text-align:center; width:200px; border: 1px solid black"><h3 style="margin-top:10px; margin-bottom:5px">
نوع التصليح</h3>
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
<td style="width:200px; text-align:center; border: 1px solid black"><h3 style="margin-top:10px; margin-bottom:5px">
الواصل</h3>
</td>
<td style="width:200px; text-align:center; border: 1px solid black"><h3 style="margin-top:10px; margin-bottom:5px">
الباقي</h3>
</td>
</tr>
<tr>
<td style="height:40px">
<h3 style="margin-right:10px; margin-top:10px; margin-bottom:7px">
 <?php echo $taslehType; ?>
</h3>
</td>

<td>
<h3>
 
</h3>
</td>

<td>
<h3 style="margin-right:10px">
 <?php echo $qty; ?>
</h3>
</td>

<td>
<h3 style="margin-right:10px">
 <?php echo $tPrice; ?>
</h3>
</td>
<td>
<h3 style="margin-right:10px">
 <?php echo $qty*$tPrice; ?>
</h3>
</td>

<td>
<h3 style="margin-right:10px">
 <?php echo $wasl; ?>
</h3>
</td>
<td>
<h3 style="margin-right:10px">
 <?php echo $baki; ?>
</h3>
</td>
</tr>


<tr>
<td style="height:40px">
<h3 style="margin-right:10px; margin-top:10px; margin-bottom:7px">

</h3>
</td>

<td>
<h3>

</h3>
</td>

<td>
<h3 style="margin-right:10px; margin-top:10px; margin-bottom:7px">
  <?php 

 
  ?>
</h3>
</td>

<td>
<h3 style="margin-right:10px; margin-top:10px; margin-bottom:7px">
  
</h3>
</td>

<td>
<h3 style="margin-right:10px; margin-top:10px; margin-bottom:7px">
  
</h3>
</td>
<td>
    </td>
    <td>
        </td>
</tr>
</table>
<table style="border: 2px solid black;border-collapse: collapse; align:right; margin-right:75px; margin-top:10px; width:1118px;">
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