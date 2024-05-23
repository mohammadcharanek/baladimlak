<?php
ob_start();
include 'datalogin.php';
include 'commonFunctions.php';
?>

<!DOCTYPE html>
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
<?php
$sql = "SELECT * FROM altermahal ORDER BY alterMahal_id DESC LIMIT 0, 1";
$result = $connection->query($sql);

if ($result->num_rows >=0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
$mahalName=$row['mahalName'];
echo '<h3 style="text-align:center;">'.$mahalName.'</h3>';


}
} 
else{
echo "0 results";
}

$sql2 = "SELECT * FROM daftarvariables ORDER BY daftarVar_id DESC LIMIT 1";
$result2 = mysqli_query($connection, $sql2);
while ($row = mysqli_fetch_array($result2)) {
	
	$derjValue=$row['derj'];
}


$sql3 = "SELECT mabe3Today FROM daftarm ORDER BY daftar_id DESC LIMIT 1";
$result3 = mysqli_query($connection, $sql3);
while ($row = mysqli_fetch_array($result3)) {
	
	$lastMabe3=$row['mabe3Today'];
}

 if(isset($_POST['updateDerj'])&&isset($_POST['derjVa'])){
	 session_start();
$_SESSION['from'] = $_POST['derjVa'];
$subtract=$_POST['derjVa'];
	 }
	 
		 session_start();
	 
	 
 
    if(isset($_POST['updateDerj'])&&isset($_POST['derjVa'])){
	$currentDate = date('Y-m-d');
$query = 'insert into  daftarvariables (derj, dateOfDerj) values("'.$_POST['derjVa'].'", "'.$currentDate.'")';
$result = mysqli_query($connection, $query);
//$lastMabe3Val=$lastMabe3-$_POST['derjVa'];
//echo $lastMabe3Val;
//$query2 = 'UPDATE daftarm set mabe3Today='.$lastMabe3Val.' ORDER BY daftar_id DESC LIMIT 1';
//$result2 = mysqli_query($connection, $query2);
header("Location: " . $_SERVER['REQUEST_URI']);
exit();
				
};
$sql2 = "SELECT * FROM daftarvariables ORDER BY daftarVar_id DESC LIMIT 1";
$result2 = mysqli_query($connection, $sql2);
while ($row = mysqli_fetch_array($result2)) {
	
	$derjValueNow=$row['derj'];
}




	function getDerjYesterday(){
		global $derjBeforeToday, $connection;
		$sql3 = "SELECT
   derj
FROM 
    daftarvariables 
    
WHERE 
   
   daftarvariables.dateOfDerj =
    (
    SELECT
        -- latest date with available data before today
        MAX(daftarvariables.dateOfDerj)
    FROM
        -- same joined tables as original query
       daftarvariables
        
    WHERE
         -- same condition as original query
       
          daftarvariables.dateOfDerj < CURRENT_DATE()      
    ) ;";
$result3 = mysqli_query($connection, $sql3);
while ($row = mysqli_fetch_array($result3)) {
	
$derjBeforeToday=$row['derj'];}
return $derjBeforeToday;
	}
function getPrevVal()
{
	global $connection, $PRVL;
     {
			$sql4 = "
		SELECT
   baki
FROM 
    daftarM 
    
WHERE 
   
   daftarM.currentDateAndTime =
    (
    SELECT
        -- latest date with available data before today
        MAX(daftarM.currentDateAndTime)
    FROM
        -- same joined tables as original query
       daftarM
        
    WHERE
         -- same condition as original query
       
          daftarM.currentDateAndTime < CURRENT_DATE()      
    ) ;";
$result4 = mysqli_query($connection, $sql4);
while ($row = mysqli_fetch_array($result4)) {

	
	$PRVL=$row['baki'];
	
}

}
return $PRVL;
}
getPrevVal();

	echo "<table>";
	echo "<tr>";
	echo '<form method="post" action="daftarUser.php">';
		echo "<td>";
		echo '<label style="font-size:18px;margin-right:10px;margin-bottom:10px;color:#191970;font-weight:bold;">الدرج:</label>';
    
	echo '<input type="text" name="derjVa" id="derjVa" style="width:150px;border-color:#0000CD;" value="'.(isset($derjValueNow)? $derjValueNow:0).'"></input>';
	
	
 
		echo "</td>";
		echo "<td>";

echo '<input type="submit" style="color:#E0FFFF" value="حدث الدرج" name="updateDerj" id="updateDerj">';
echo "</form>";
echo "</td>";

		echo "<td>";
		echo '<label style="font-size:18px;margin-right:10px;margin-bottom:10px;color:#191970;font-weight:bold;">رصيد سابق:</label>';
   
	echo '<input type="text" name="raseedPrev" id="raseedPrev" style="width:150px;border-color:#0000CD;" value="'. $PRVL .'"></input>';
	
	
 
		echo "</td>";
echo "</tr>";
echo "</table>";


	if(!empty($_POST['senf'])){
	$senf=$_POST['senf'];}
        else{$senf="";}
	$derjVal=0;
	if(!empty($_POST['se3r'])){
		
	$se3r=$_POST['se3r'];
	$derjVal+=$se3r;
	}
        else{$se3r=0;}
if(!empty($_POST['senfS'])){
$senfS=$_POST['senfS'];}
else{$senfS="";}
if(!empty($_POST['se3rS'])){
$se3rS=$_POST['se3rS'];}
else{$se3rS=0;}
if(!empty($_POST['naw3M'])){
$naw3M=$_POST['naw3M'];}
else{$naw3M="";}
if(!empty($_POST['si3rM'])){
$si3rM=$_POST['si3rM'];}
else{$si3rM=0;}

$currentDate = date('Y-m-d');
$currentDateTime=date('Y-m-d H:i:s');
// To protect MySQL injection (more detail about MySQL injection)
	
			if(isset($_POST['addCash']))
			{
				
				$sql="INSERT INTO daftarM(senf, se3r, currentDateAndTime, dateOfToday) VALUES ('".$senf."', '".$se3r."', '".$currentDateTime."', '".$currentDate."')";
				$result=mysqli_query($connection, $sql);
				
				header("Location: " . $_SERVER['REQUEST_URI']);
				ob_enf_fluch();
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

<table id="header">
<form id="mainForm" name="mainForm" method="post" action="daftarUser.php">   
   <tr>

       <td>
           </td>
           
           
       <td>
           </td>
           
<td>
<input type="button" value="الصفحة الرئيسية" class="homebutton" id="btnHome" style="float:left;"
onClick="document.location.href='mainPageUser.php'" />

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

</form>
</td>
<td style="width:440px">
<form id="mainForm" name="mainForm" method="post" action="daftarUser.php">
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
</form>
</td>
<td style="width:430px">
<form id="mainForm" name="mainForm" method="post" action="daftarUser.php">
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
</form>
</table>
<?php
$sql = "SELECT * FROM daftarM where dateOfToday=CURDATE() ORDER BY daftar_id ASC";
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
echo "<table align='right' style='margin-top:20px;margin-bottom:0px;align:right;margin-right:33px;width:1260px'>";
echo "<tr>";
echo "<th style='background-color:rgb(245, 247, 243);width:38px'></th><th style='width:291px;background-color:#F0E68C;color:black;'>المبيع نقدا</th><th style='width:324px;background-color:#F0E68C;color:black;'>الصرافة</th><th style='width:283px;background-color:#F0E68C;color:black;'>مصروفات</th><th style='background-color:rgb(245, 247, 243);width:250px;'></th></tr>"; 
echo "</table>";
echo "<table align='right' style='margin-top:0px;align:right;margin-right:33px;width:1260px'>";


echo "<tr>";
echo "<th style='width:38px'>الرقم</th><th style='width:100px;'>الصنف</th><th style='width:170px'>السعر</th><th style='width:150px;'>الصنف</th><th style='width:170px'>السعر</th><th style='width:150px;'>النوع</th><th style='width:130px'>السعر</th><th style='background-color:rgb(245, 247, 243);width:250px;'></th></tr>";
echo "<tr>";
echo "<td>";
echo "<label style='margin-top:6px;width:30px;font-color:purple;margin-left:0px;font-weight:bold;margin-right:30px;'>1</label>";
echo "</td>";

echo "<td>";
 echo "<label style='margin-top:6px;width:30px;font-color:purple;margin-left:10px;font-weight:bold;margin-right:60px;'>الدرج</label>";
 echo "</td><td>";
 getDerjYesterday();
 echo '<input style="margin-top:6px;width:115px;margin-right:68px;border-color:#F0E68C" name=derjVal  id=derjVal  class="derjVal" value="' . $derjBeforeToday .'" ></input>';
 $sumOfSe3r+=$derjBeforeToday;
echo "</td>";
echo "</tr>";

while ($row = mysqli_fetch_array($result)) {
echo '<form method="post" action="daftarUser.php">';
echo "<table style='align:right;margin-top:2px;margin-right:0px;width:1250px'>";
echo "<tr>";
echo "<td style='margin-left:20px;text-align:center;'>";
echo "<label style='width:40px;max-width:200px;display:inline-block;font-color:purple;margin-left:20px;text-align:center;font-weight:bold;'>".$countSe3r."</label>";

    echo "<input type='hidden' style='width:35px' name=daftar_id value='" . $row['daftar_id'] . "' readonly></input>";
	
	$countSe3r++;
	
    echo "</td>";

        
      echo "<td>";
        echo '<input style="width:115px;margin-right:0px;" name=senf  id=senf onkeyup="doPriceSub('.$counter.')" class="senf" value="' . $row['senf'] .'" ></input>';
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
 $mabee3Today=$sumOfSe3r-$derjBeforeToday;
 if(isset($_SESSION['from'])){
	$postedV=$_SESSION['from'];
}
else
	$postedV=0;
 $mabee3Today-=$postedV;
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
        echo '<input style="width:115px" name=senf  id=senf  class="senf" value="' . $sumOfMasrofat .'" ></input>';
        echo '&nbsp;&nbsp;';
		echo "</td>";

				echo "<td>";
echo "<label style='width:30px;font-color:purple;margin-left:10px;font-weight:bold;'>الباقي</label>";
echo "</td>";
 echo "<td align='right'>";



 getPrevVal();
 //echo (isset($derjvs)? $derjvs:1);
 //if(isset($_session["derjvs"]))
	// $derjvlu=$_session['derjvs'];
 //else
	// $derjvlu=0;





 $baki=$sumOfSe3r+$PRVL-$sumOfMasrofat-$postedV ;
        echo '<input style="width:115px" name="bakiVal"  id="bakiVal" class="senf" value="' . $baki .'" ></input>';
        echo "</td>";

        echo "</tr>";
		
echo "</table>";

if($mabee3Today>-40){
callPrev::update_baki_mabe3today($baki, $mabee3Today, $connection);
}
close_connection($connection);
?>

</div>
</body>
</html>