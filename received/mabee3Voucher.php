<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<style>
table#table2 td{
border: 1px solid black;
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

$port=3306;

$connection= MySqli_connect($host, $username, $password)or die("cannot connect");
MySqli_select_db($connection, $db_name)or die("cannot select DB");

mysqli_query($connection, "SET NAMES 'utf8'"); 
mysqli_query($connection, 'SET CHARACTER SET utf8');  

    $daftar_id=isset($_POST['daftar_id']) ? $_POST['daftar_id'] : '';
	$senf=isset($_POST['senf']) ? $_POST['senf'] : '';
	$se3r=isset($_POST['se3r']) ? $_POST['se3r'] : '';
	$senfS=isset($_POST['senfS']) ? $_POST['senfS'] : '';
	$se3rS=isset($_POST['se3rS']) ? $_POST['se3rS'] : '';
	$naw3M=isset($_POST['naw3M']) ? $_POST['naw3M'] : '';
	$si3rM=isset($_POST['si3rM']) ? $_POST['si3rM'] : '';
	$dateOfToday =date('Y-m-d H:i:s');
// To protect MySQL injection (more detail about MySQL injection)
	
			
				
		
	

//MySqli_close($connection);
 ?>
<h2 style="text-align:center; margin-top:10px">البلد العملاق للخياطة العسكرية</h2>

<h2 style="text-align:left; margin-left:30px">Sales bill فاتورة مبيع </h2>
<?php

       echo '<div id="divToPrint" class="kames" align="left">';
echo '<table style="align:left;margin-left:75px;dir:rtl;">';
echo	'<tr>';
echo		'<td width="20px"></td><td width="130px"><font color="red" style="font-weight:bold;">';

echo '#'.$daftar_id;
   			
echo		'</font></td>';
		
echo		'<td>';


echo		'</td>';

echo	'</tr>';
echo '</table>';
echo '</div>';

?>



<table style="align:right; margin-right:75px; margin-top:15px;width:1118px">
<tr>
<td>

</td>
<td style="text-align:left; width:100px; background-color: rgb(239, 237, 230)">
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


</table>


<table id="table2" style="border: 2px solid black;border-collapse: collapse; align:center; margin-right:275px; margin-top:10px; width:818px">
<tr style="background-color:rgb(239, 237, 230)">
<td style="text-align:center; width:300px; border: 1px solid black"><h3 style="margin-top:10px; margin-bottom:5px">
الصنف</h3>
</td>
<td style="width:400px; text-align:center; border: 1px solid black">
<h3 style="margin-top:10px; margin-bottom:5px">
السعر
</h3>
</td>
</tr>
<tr>
<td style="height:40px">
<h3 style="margin-right:10px; margin-top:10px; margin-bottom:7px">
 <?php echo $senf; ?>
</h3>
</td>



<td>
<h3 style="margin-right:10px">
 <?php echo $se3r; ?>
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
  <?php 


 MySqli_close($connection); ?>
</tr>
</table>
<table style="border: 2px solid black;border-collapse: collapse; align:right; margin-right:275px; margin-top:10px; width:1118px;">
</table>
<table style="margin-right:275px">
<tr>
<td>
الرياض - حي الخليج - شارع الأمير بندر بن عبد العزيز - خلف فندق قصر الخليج - تلفون: 011/2395359 - ترخيص 40849
</td>
</tr>
<tr>
<td>
Riyadh - Al Khaleej Area - Prince Bandar Bin Abdulaziz St. - Behind Palace Gulf Hotel - Tel.: 011/2395359 - License 40849
<button onclick="myFunction()">Print this page</button>
</td>
</tr>
</table>


<script>
function myFunction() {
    window.print();
}
</script>

</body>
</html>