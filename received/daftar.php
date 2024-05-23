<!DOCTYPE html>
<?php
$cookie_name = "countID";
$cookie_value = 1;
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
?>
<html>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<style>

th {
    background-color: 	#5F9EA0;
    color: white;
}

input[type=submit] {
    width: 70px;
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
    width: 100px;
    background-color: white;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}
input[type=button]:hover {
    background-color: grey;
}
#btnHome {
    width: 145px;
    background-color: green;
    color: white;
    padding: 5px 10px;
    margin: 12px 30px 4px 4px;
    border: none;
    border-radius: 2px;
    cursor: pointer;
    font-weight:bold;
    font-size:21;
    
}

#btnHome:hover {
    background-color: #45a049;
}
#print-button {
	display: none;
}
th:nth-child(2) {
    padding-right: 20px;
}

.error {color: #FF0000;}

.styled select {
  background: transparent;
  width: 150px;
  font-size: 18px;
   margin-bottom:30px;
 border-style: solid;
    
  height: 53px;
}

.styled {
  margin: 10px 5px 10px 5px;
  width: 120px;
  height: 53px;
  
  
}

  
a.button {
    -webkit-appearance: button;
    -moz-appearance: button;
    appearance: button;

    text-decoration: none;
    color: initial;
}
  


</style>

 
 <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>دفتر مبيعات</title>
 <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#datepicker" ).datepicker();
  } );
  </script>
</head>
<body dir="rtl" style="background-color:rgb(245, 247, 243)">
<div id="divToPrint" class="kames" align="center">


   
   <h3 style="align:center">البلد العملاق للخياطة العسكرية</h3>
   


<?php
$host='localhost'; // Host name
$username='root'; // Mysql username
$password=''; // Mysql password
$db_name='gicontra_sewingFactory'; // Database name

$port=3306;

// Connect to server and select database.
$connection= MySqli_connect($host, $username, $password)or die("cannot connect");
MySqli_select_db($connection, $db_name)or die("cannot select DB");
    if(isset($_POST['updateDerj'])&&isset($_POST['derjVa'])){
	$currentDate = date('Y-m-d');
$query = 'insert into  daftarvariables (derj, dateOfDerj) values("'.$_POST['derjVa'].'", "'.$currentDate.'")';
$result = mysqli_query($connection, $query);
header("Location: " . $_SERVER['REQUEST_URI']);
   exit();
				
};

$sql2 = "SELECT * FROM daftarvariables ORDER BY daftarVar_id DESC LIMIT 1";
$result2 = mysqli_query($connection, $sql2);
while ($row = mysqli_fetch_array($result2)) {
	global $derjValue;
	$derjValue=$row['derj'];
} 

$sql2 = "SELECT * FROM daftarvariables WHERE DATE(dateOfDerj) = DATE(NOW() - INTERVAL 1 DAY) ORDER BY daftarVar_id DESC LIMIT 1";
$result2 = mysqli_query($connection, $sql2);
while ($row = mysqli_fetch_array($result2)) {
	global $derjValueYesterday;
$derjValueYesterday=$row['derj'];}
if(isset($derjValueYesterday))
{
	global $derjValueEq;
	$derjValueEq=$derjValueYesterday;
}
else{
$sql2 = "SELECT * FROM daftarvariables ORDER BY daftarVar_id DESC LIMIT 1";
$result2 = mysqli_query($connection, $sql2);
while ($row = mysqli_fetch_array($result2)) {
$derjValueYesterday=$row['derj'];


}
}

$sql2 = "SELECT * FROM daftarM WHERE DATE(dateOfToday) = DATE(NOW() - INTERVAL 1 DAY) ORDER BY daftar_id DESC LIMIT 1";
$result2 = mysqli_query($connection, $sql2);
while ($row = mysqli_fetch_array($result2)) {
	global $rasseedPrevValue;
	
	$rasseedPrevValue=$row['baki'];
}
if(isset($rasseedPrevValue))
{
	global $PrevVal;
	$PrevVal=$rasseedPrevValue;
}
else{
	$sql2 = "SELECT * FROM daftarM ORDER BY daftar_id DESC LIMIT 1";
$result2 = mysqli_query($connection, $sql2);
while ($row = mysqli_fetch_array($result2)) {
	$PrevVal=$row['baki'];


}
}

	echo "<table>";
	echo "<tr>";
	echo '<form method="post" action="daftar.php">';
		echo "<td>";
		echo '<label style="font-size:18px;margin-right:10px;margin-bottom:10px;color:#191970;font-weight:bold;">الدرج:</label>';
    if(isset($derjValue)){
		global $derjValueEq;
		
	$derjValueEq=$derjValue;
	}
	else{
	$derjValueEq=0;
	}
	echo '<input type="text" name="derjVa" id="derjVa" style="width:150px;border-color:#0000CD;" value="'.$derjValueEq.'"></input>';
	
	
 
		echo "</td>";
		echo "<td>";

echo '<input type="submit" style="color:#E0FFFF" value="حدث الدرج" name="updateDerj" id="updateDerj">';
echo "</form>";
echo "</td>";

		echo "<td>";
		echo '<label style="font-size:18px;margin-right:10px;margin-bottom:10px;color:#191970;font-weight:bold;">رصيد سابق:</label>';
    if(isset($PrevVal))
	{
	global $PreviousVal;
	$PreviousVal=$PrevVal;
	}
	else{
	$PreviousVal=0;
	}
	echo '<input type="text" name="raseedPrev" id="raseedPrev" style="width:150px;border-color:#0000CD;" value="'.$PreviousVal.'"></input>';
	
	
 
		echo "</td>";
echo "</tr>";
echo "</table>";


	if(isset($_POST['senf'])){
	$senf=$_POST['senf'];}
	$derjVal=0;
	if(isset($_POST['se3r'])){
		
	$se3r=$_POST['se3r'];
	$derjVal+=$se3r;
	}
if(isset($_POST['senfS'])){
$senfS=$_POST['senfS'];}
if(isset($_POST['se3rS'])){
$se3rS=$_POST['se3rS'];}
if(isset($_POST['naw3M'])){
$naw3M=$_POST['naw3M'];}
if(isset($_POST['si3rM'])){
$si3rM=$_POST['si3rM'];}

$currentDate = date('Y-m-d');
$currentDateTime=date('Y-m-d H:i:s');
// To protect MySQL injection (more detail about MySQL injection)
	
			if(isset($_POST['addCash']))
			{
				
				$sql="INSERT INTO daftarM(senf, se3r, currentDateAndTime, dateOfToday) VALUES ('".$senf."', '".$se3r."', '".$currentDateTime."', '".$currentDate."')";
				$result=mysqli_query($connection, $sql);
				header("Location: " . $_SERVER['REQUEST_URI']);
   exit();
				
			}
				if(isset($_POST['addSarafa']))
			{
				
				$sql="INSERT INTO daftarM(senfS, se3rS, currentDateAndTime, dateOfToday) VALUES ('".$senfS."', '".$se3rS."', '".$currentDateTime."', '".$currentDate."')";
				$result=mysqli_query($connection, $sql);
				header("Location: " . $_SERVER['REQUEST_URI']);
   exit();
				
			}
				if(isset($_POST['addMasrofat']))
			{
				
				$sql="INSERT INTO daftarM(naw3M, si3rM, currentDateAndTime, dateOfToday) VALUES ('".$naw3M."', '".$si3rM."', '".$currentDateTime."', '".$currentDate."')";
				$result=mysqli_query($connection, $sql);
				header("Location: " . $_SERVER['REQUEST_URI']);
   exit();
				
			}
		
			if(isset($_POST['delete'])){
		$deleteQuery="DELETE FROM daftarM WHERE daftar_id=" . $_POST[hidden];
		
		$retval2=mysqli_query($connection, $deleteQuery);
	
		header("Location: " . $_SERVER['REQUEST_URI']);
   exit();
		
		};
		if(isset($_POST['update'])){
		$updateQuery="UPDATE daftarM  SET se3r= '" . $_POST['se3r'] . "', senf='".$_POST['senf']."', se3rS='".$_POST['se3rS']."', senfS='".$_POST['senfS']."', si3rM='".$_POST['si3rM']."', naw3M='".$_POST['naw3M']."' WHERE daftar_id='" . $_POST['hidden']."'";
		
		$retval2=mysqli_query($connection, $updateQuery);
	
		
		};
		
				
	


?>

<table style="width:1040px">
<form method="post" action="daftar.php">
<table id="header">
   
   <tr>

       <td>
           </td>
           
           
       <td>
           </td>
           
<td>
<input type="button" value="الصفحة الرئيسية" class="homebutton" id="btnHome" style="float:left;"
onClick="document.location.href='mainPage.html'" />

    </td>

       </tr>
<tr>



<td style="width:440px;margin-top:10px;">
    <fieldset style="margin-top:10px;">
<legend>المبيعات نقدا</legend>
<label style="font-size:18px">
الصنف:
</label>
<input type="text" id="senf" style="width:110px;margin-right:0px;align:right" name="senf">

<label style="font-size:18px">
السعر:
</label>

<input type="text" id="se3r" name="se3r" style="width:110px">

<input type="submit" value="أضف" name="addCash" id="addCash">

</fieldset>
</td>
<td style="width:440px">
<fieldset  style="margin-top:10px;">
<legend>الصرافة</legend>
<label style="font-size:18px">
الصنف:
</label>

<input type="text" id="senfS" style="width:110px;" name="senfS"></input>
<label style="font-size:18px">
السعر:
</label>
<input type="text" id="se3rS" name="se3rS" style="width:110px"></input>

<input type="submit" value="أضف" name="addSarafa" id="addSarafa">
</fieldset>
</td>
<td style="width:430px">
<fieldset  style="margin-top:10px;">
<legend>مصروفات</legend>
<label style="font-size:18px">
النوع:
</label>

<input type="text" id="naw3M" style="width:110px;" name="naw3M"></input>
<label style="font-size:18px">
السعر:
</label>
<input type="text" id="si3rM" name="si3rM" style="width:110px" ></input>

<input type="submit" value="أضف" name="addMasrofat" id="addtMasrofat">
</fieldset>
</td>

</tr>
<tr>
    <td>
</td>
</tr>

</table>
</form>
<?php
 
$sql = "SELECT * FROM daftarM where dateOfToday=CURDATE()";
$result = mysqli_query($connection, $sql);
$counter=0;
global $sumOfSe3r;
$sumOfSe3r=0;
$sumOfSarafa=0;
$sumOfMasrofat=0;
$countSe3r=2;
$derjYesterday=0;
if(isset($derjValueYesterday)){
$derjYesterday=$derjValueYesterday;
}
echo "<table align='right' style='margin-top:20px;margin-bottom:0px;align:right;margin-right:20px;width:1260px'>";
echo "<tr>";
echo "<th style='background-color:rgb(245, 247, 243);width:38px'></th><th style='width:266px;background-color:#F0E68C;color:black;'>المبيع نقدا</th><th style='width:324px;background-color:#F0E68C;color:black;'>الصرافة</th><th style='width:283px;background-color:#F0E68C;color:black;'>مصروفات</th><th style='background-color:rgb(245, 247, 243);width:250px;'></th></tr>"; 
echo "</table>";
echo "<table align='right' style='margin-top:0px;align:right;margin-right:20px;width:1260px'>";


echo "<tr>";
echo "<th style='width:38px'>الرقم</th><th style='width:100px;'>الصنف</th><th style='width:150px'>السعر</th><th style='width:150px;'>الصنف</th><th style='width:170px'>السعر</th><th style='width:150px;'>النوع</th><th style='width:130px'>السعر</th><th style='background-color:rgb(245, 247, 243);width:250px;'></th></tr>";
echo "<tr>";
echo "<td>";
echo "<label style='margin-top:6px;width:30px;font-color:purple;margin-left:0px;font-weight:bold;margin-right:30px;'>1</label>";
echo "</td>";

echo "<td>";
 echo "<label style='margin-top:6px;width:30px;font-color:purple;margin-left:10px;font-weight:bold;margin-right:40px;'>الدرج</label>";
 echo "</td><td>";
 
 echo '<input style="margin-top:6px;width:115px;margin-right:45px;border-color:#F0E68C" name=derjVal  id=derjVal  class="derjVal" value="' . $derjYesterday .'" ></input>';
 $sumOfSe3r+=$derjYesterday;
echo "</td>";
echo "</tr>";

while ($row = mysqli_fetch_array($result)) {
echo '<form method="post" action="daftar.php">';
echo "<table style='align:right;margin-top:2px;margin-right:0px;width:1250px'>";
echo "<tr>";
echo "<td>";
echo "<label style='width:30px;font-color:purple;margin-left:10px;font-weight:bold;'>$countSe3r</label>";

    echo "<input type='hidden' style='width:35px' name=daftar_id value='" . $row['daftar_id'] . "' readonly></input>";
	$cookie_value++;
	$countSe3r++;
    echo "</td>";

        
      echo "<td>";
        echo '<input style="width:115px" name=senf  id=senf onkeyup="doPriceSub('.$counter.')" class="senf" value="' . $row['senf'] .'" ></input>';
        echo "</td>";
        
      echo "<td>";
        echo '<input style="width:115px" name="se3r" id="se3r"  onkeyup="doPriceSub('.$counter.')" class="se3r" value="' . $row['se3r'] . '"></input>';
		
		$sumOfSe3r+=$row['se3r'];
        echo "</td>";
        
        
      echo "<td>";
        echo '<input style="width:115px" name=senfS  id=senfS onkeyup="doPriceSub('.$counter.')" class="senfS" value="' . $row['senfS'] .'" ></input>';
        echo "</td>";
        
      echo "<td>";
        echo '<input style="width:115px" name="se3rS" id="se3rS"  onkeyup="doPriceSub('.$counter.')" class="se3rS" value="' . $row['se3rS'] . '"></input>';
        $sumOfSarafa+=$row['se3rS'];
		echo "</td>";
        

      echo "<td>";
        echo '<input style="width:115px" name=naw3M  id=naw3M onkeyup="doPriceSub('.$counter.')" class="naw3M" value="' . $row['naw3M'] .'" ></input>';
        echo "</td>";
        
      echo "<td>";
        echo '<input style="width:115px" name="si3rM" id="si3rM" class="si3rM" value="' . $row['si3rM'] . '"></input>';
        $sumOfMasrofat+=$row['si3rM'];
		echo "</td>";
        

        echo "<td style='width:80px'>" . "<input style='height:28px;width:69px;text-align: center;line-height: 6px;' type=submit name=delete value=إزالة" . " </td>";
			
			
			echo "<td style='width:80px'>" . "<input style='height:28px;width:74px;text-align:center;line-height: 6px;' type=submit name=update value=تحديث ></input>"   . " </td>";
			echo "<td style='width:80px'>" . "<input style='height:28px;width:74px;text-align:center;line-height: 6px;background-color:darkgrey' type=submit name=giveVoucher value=فاتورة formaction='mabee3Voucher.php' ></input>" . " </td>";
			echo "<td>" . "<input type=hidden name=sumOfSe3rForSubmit id=sumOfSe3rForSubmit value='" . $sumOfSe3r. "' ></input></td>";
			echo "<td>" . "<input type=hidden name=hidden value='" . $row['daftar_id'] . "' ></input></td>";
	echo "</tr>";
	
	
echo "</table>";
echo "</form>";		
    $counter++;
}
echo "</table>";
echo "<table align='right' style='margin-top:10px;margin-bottom:0px;align:right;margin-right:20px;width:1260px'>";
echo "<tr>";
	
echo "<td>";
 echo "<label style='margin-top:6px;width:30px;font-color:purple;margin-left:10px;font-weight:bold;margin-right:30px;'>مجموع المبيعات</label>";

	echo "<td>" . "<input type=text name=sumOfSe3r id=sumOfSe3r style='width:115px;border-color:#B0C4DE;' value='" . $sumOfSe3r. "' ></input></td>";
	echo "</td>";
	echo "</tr>";
	

echo '<tr style="background-color:#F0E68C;">';
echo "<td>";
echo "<label style='width:30px;font-color:purple;margin-left:10px;font-weight:bold;margin-right:38px;'>مبيعات اليوم</label>";
echo "</td>";
 echo "<td align='right'>";
 $mabee3Today=$sumOfSe3r-$derjYesterday;
        echo '<input style="width:115px;border-color:#B0C4DE;" name=senf  id=senf onkeyup="doPriceSub('.$counter.')" class="senf" value="' . $mabee3Today .'" ></input>';
		echo '&nbsp;&nbsp;';
        echo "</td>";

		echo "<td>";
echo "<label style='width:30px;font-color:purple;margin-left:10px;font-weight:bold;'>مجموع الصرافة</label>";
echo "</td>";
 echo "<td align='right'>";
        echo '<input style="width:115px" name=senf  id=senf onkeyup="doPriceSub('.$counter.')" class="senf" value="' . $sumOfSarafa .'" ></input>';
        echo '&nbsp;&nbsp;';
		echo "</td>";

		echo "<td>";
echo "<label style='width:30px;font-color:purple;margin-left:10px;font-weight:bold;'>إجمالي المصروفات</label>";
echo "</td>";
 echo "<td align='right'>";
        echo '<input style="width:115px" name=senf  id=senf onkeyup="doPriceSub('.$counter.')" class="senf" value="' . $sumOfMasrofat .'" ></input>';
        echo '&nbsp;&nbsp;';
		echo "</td>";

				echo "<td>";
echo "<label style='width:30px;font-color:purple;margin-left:10px;font-weight:bold;'>الباقي</label>";
echo "</td>";
 echo "<td align='right'>";
 if(isset($PrevVal)){
 global $PrevValCur;
 $PrevValCur=$PrevVal;
 }
 else{
 $PrevValCur=0;
 }
 $baki=$mabee3Today+$PrevValCur-$sumOfMasrofat;
        echo '<input style="width:115px" name=senf  id=senf onkeyup="doPriceSub('.$counter.')" class="senf" value="' . $baki .'" ></input>';
        echo "</td>";

        echo "</tr>";
		
echo "</table>";
$query = 'UPDATE daftarM set baki="'.$baki.'", mabe3Today="'.$mabee3Today.'" ORDER BY daftar_id DESC LIMIT 1';
$result = mysqli_query($connection, $query);
MySqli_close($connection);
?>
<script type='text/javascript' src='http://www.gicontracting.com/baladimlak/doPriceSub.js'></script>
</div>
</body>
</html>