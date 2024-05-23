<?php
$host='localhost'; // Host name
$username='root'; // Mysql username
$password=''; // Mysql password
$db_name='gicontra_sewingFactory'; // Database name
$tbl_name='addTasleh'; // Table name
$port=3306;

// Connect to server and select database.
$connection= MySqli_connect($host, $username, $password)or die("cannot connect");
MySqli_select_db($connection, $db_name)or die("cannot select DB");


mysqli_query($connection, "SET NAMES 'utf8'"); 
mysqli_query($connection, 'SET CHARACTER SET utf8');  

	
	$clientName=isset($_POST['clientName']) ? $_POST['clientName'] : '';
	$phoneNum=isset($_POST['phoneNum']) ? $_POST['phoneNum'] : '';
	$taslehType=isset($_POST['taslehType']) ? $_POST['taslehType'] : '';
	$qty=isset($_POST['qty']) ? $_POST['qty'] : 0;
	$tPrice=isset($_POST['tPrice']) ? $_POST['tPrice'] : 0;
	$wasl=isset($_POST['wasl']) ? $_POST['wasl'] : 0;
	$mult=$tPrice*$qty;
	$baki=$mult-$wasl;
	$workerName=isset($_POST['workerName']) ? $_POST['workerName'] : '';
	//$dateOfCompletion =date('Y-m-d',  strtotime($_POST['datepicker']));
	if(isset($_POST['datepicker'])){
	$dateOfCompletion=date('Y-m-d',  strtotime($_POST['datepicker']));
	
	}
	else {
    $dateOfCompletion = date('Y-m-d');
}
// To protect MySQL injection (more detail about MySQL injection)
	
			if(isset($_POST['addtasleh']))
			{
				
				$sql="INSERT INTO ".$tbl_name."(clientName, phoneNum, taslehType, qty, tPrice, wasl, baki, workerName, dateOfCompletion) VALUES ('".$clientName."', '".$phoneNum."', '".$taslehType."', '".$qty."', '".$tPrice."', '".$wasl."', '".$baki."', '".$workerName."', '".$dateOfCompletion."')";
				$result=mysqli_query($connection, $sql);
				header("Location: " . $_SERVER['REQUEST_URI']);
   exit();
				
			}
			if(isset($_POST['delete'])){
		$deleteQuery="DELETE FROM ".$tbl_name." WHERE taslehID=" . $_POST[hidden];
		
		$retval2=mysqli_query($connection, $deleteQuery);
	
		header("Location: " . $_SERVER['REQUEST_URI']);
   exit();
		
		};
		if(isset($_POST['update'])){
		$updateQuery="UPDATE addTasleh  SET clientName= '" . $_POST['clientName'] . "', phoneNum='".$_POST['phoneNum']."', taslehType='".$_POST['taslehType']."', qty='".$_POST['qty']."', tPrice='".$_POST['tPrice']."', wasl='".$_POST['wasl']."', baki='".$_POST['baki']."', workerName='".$_POST['workerName']."', dateOfCompletion='" . date('Y-m-d',  strtotime($_POST['dateOfCompletion'])) . "' WHERE taslehID='" . $_POST['hidden']."'";
		
		$retval2=mysqli_query($connection, $updateQuery);
	
		
		};
				
				
	

MySqli_close($connection);
?>
<html>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<style>
table {
    border-collapse: collapse;
    width: 620px;
	
}
table#header{
border-collapse: collapse;
    width: 1233px;
	

}
table#middle{
border-collapse: collapse;
    width: 1033px;
	height: 120px;
}
table#footer {
border-collapse: collapse;
    width: 1133px;
	height: 60px;

}
table#footer2 {
border-collapse: collapse;
    width: 1033px;
	height: 60px;

}
table#middle td{width:130px;}
tr{height:5px;}
th, td {
    
    padding: 6px;
    width:110px;
}

table#middle tr:nth-child(odd){background-color: #f2f2f2}

th {
    background-color: #4CAF50;
    color: white;
}

input[type=text]{
    width: 80px;
    height:7px;
    padding: 12px 15px;
    margin: 2px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}
input[type=submit] {
    width: 100%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    font-size:22px;
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

.naw3l3amal select{
background: transparent;
  width: 150px;
  font-size: 18px;
   

    
  height: 53px;
}

.naw3l3amal {
  margin: 10px 5px 10px 5px;
  width: 120px;
  height: 53px;
  
  
a.button {
    -webkit-appearance: button;
    -moz-appearance: button;
    appearance: button;

    text-decoration: none;
    color: initial;
}
  
}

</style>

 
 <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>تصليح</title>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#datepicker" ).datepicker();
  } );
  </script>
</head>
<body bgcolor="#F0FFF0" dir="rtl">
<div id="divToPrint" class="kames" align="center">


   
   <h3 style="align:center">البلد العملاق للخياطة العسكرية</h3>
   



<table style="width:1340px">
<form method="post" action="tasleh.php">
<table id="header">
<tr>



<td>
<h3 style="width:120px;margin-left:0px;text-align:center;margin-bottom:0px;">إسم الزبون</h3>
</td>
<td>
<input type="text" id="clientName" style="width:190px;margin-right:0px;align:right" name="clientName" required>

</td>
<td>
</td>
<td>
    </td>
<td>
<h3 style="margin-top:5px;margin-bottom:0px;">تاريخ التسليم</h3>
</td>
<td>
<input type="text" id="datepicker" name="datepicker" style="width:190px" required>
</td>
<td>
<input type="button" value="الصفحة الرئيسية" class="homebutton" id="btnHome" 
onClick="document.location.href='mainPage.html'" />

    </td>

</tr>
<tr style="background-color:#F0FFF0">

<td>
<h3 style="margin-top:1px;margin-bottom:0px;text-align:center">رقم الهاتف</h3>
</td>
<td>
<input type="text" id="phoneNum" style="width:190px" name="phoneNum" required></input>
</td>

<td>
<h3 style="margin-top:5px;margin-bottom:0px;margin-right:28px">نوع التصليح</h3>
</td>
<td>
<input type="text" id="taslehType" style="width:190px" name="taslehType" required></input>
</td>
<td>
<h3 style="margin-top:5px;margin-bottom:0px;margin-right:45px">الكمية</h3>
</td>
<td>
<input type="number" id="qty" style="width:190px" name="qty" required></input>
</td>

</tr>
<tr>
<td>
<h3 style="margin-top:5px; margin-bottom:0px;margin-right:42px;text-align:center">السعر<h3>
</td>
<td>
<input type="text" id="tPrice" style="width:190px" name="tPrice" required></input>
</td>
<td>
<h3 style="margin-top:5px; margin-bottom:0px;margin-right:42px;text-align:center">واصل منه</h3>
</td>
<td>
<input type="text" id="wasl" style="width:190px" name="wasl"></input>
</td>
<td>
<h3 style="margin-top:5px; margin-bottom:0px;margin-right:25px">إسم العامل
</h3>
</td>
<td>
<?php
$host='localhost'; // Host name
$username='root'; // Mysql username
$password=''; // Mysql password
$db_name='gicontra_sewingFactory'; // Database name
$tbl_name='badlah'; // Table name
$port=3306;


/* check connection */
$conn = new mysqli($host, $username, $password, $db_name);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

mysqli_query($conn, "SET NAMES 'utf8'"); 
mysqli_query($conn, 'SET CHARACTER SET utf8');  

$sql = "SELECT wName FROM workerTB";
$result = mysqli_query($conn, $sql);

echo "<select style='width:190px' name='workerName' required>";
    echo "<option value=''>إسم العامل</option>";
while ($row = mysqli_fetch_array($result)) {
    echo "<option value='" . $row['wName'] . "'>" . $row['wName'] . "</option>";
}
echo "</select>";

?>
</td>
</tr>

<tr>
<td></td>
<td>
<input type="submit" value="أضف التصليح" style="width:140px;height:40px;line-height:18px" name="addtasleh" id="addtasleh">
</td>
</tr>

</table>
</form>
<?php
$host='localhost'; // Host name
$username='root'; // Mysql username
$password=''; // Mysql password
$db_name='gicontra_sewingFactory'; // Database name
$tbl_name='badlah'; // Table name
$port=3306;


/* check connection */
$conn = new mysqli($host, $username, $password, $db_name);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

mysqli_query($conn, "SET NAMES 'utf8'"); 
mysqli_query($conn, 'SET CHARACTER SET utf8');  

$sql = "SELECT * FROM addTasleh";
$result = mysqli_query($conn, $sql);
$counter=0;
echo "<table style='margin-top:20px;width:1284px'>";
echo "<tr>"; 
echo "<th style='width:38px'>الرقم</th><th style='width:175px'>إسم الزبون</th><th style='width:195px'>رقم الهاتف</th><th style='width:205px'>نوع التصليح</th><th style='width:70px'>الكمية</th><th style='width:185px'>السعر</th><th style='width:185px'>واصل منه</th> <th style='width:185px'> الباقي</th>    <th style='width:185px'>إسم العامل</th><th style='width:165px'>تاريخ التسليم</th><th style='background-color:#F0FFF0'></th><th style='background-color:#F0FFF0'></th><th style='width:77px;background-color:#F0FFF0'></th></tr>";
while ($row = mysqli_fetch_array($result)) {
echo '<form method="post" action="tasleh.php">';
echo "<table style='margin-top:2px;margin-right:30px;width:1004px'>";
echo "<tr>";
echo "<td>";
    echo "<input style='width:35px' name=taslehID value='" . $row['taslehID'] . "' readonly></input>";
    echo "</td>";
    echo "<td>";
      echo "<input style='width:125px' name=clientName value='" . $row['clientName'] . "'></input>";
      echo "</td>";
      echo "<td>";
        echo "<input style='width:115px' name=phoneNum value='" . $row['phoneNum'] . "'></input>";
        echo "</td>";
        
      echo "<td>";
        echo "<input style='width:125px' name=taslehType value='" . $row['taslehType'] . "'></input>";
        echo "</td>";
        
        
      echo "<td>";
        echo '<input style="width:30px" name=qty  id=qty onkeyup="doPriceSub('.$counter.')" class="qty" value="' . $row['qty'] .'" ></input>';
        echo "</td>";
        
      echo "<td>";
        echo '<input style="width:115px" name="tPrice" id="tPrice"  onkeyup="doPriceSub('.$counter.')" class="tPrice" value="' . $row['tPrice'] . '"></input>';
        echo "</td>";
        
        echo "<td>";
        echo '<input style="width:115px" name=wasl id=wasl  onkeyup="doPriceSub('.$counter.')" class="wasl" value="' . $row['wasl'] . '"></input>';
        echo "</td>";
        
        
        echo "<td>";
        echo '<input style="width:115px" id="baki" name=baki value="'.$row['baki'].'" class="baki" readonly></input>';
        echo "</td>";
        
      echo "<td>";
        echo "<input style='width:90px' name=workerName value='" . $row['workerName'] . "'></input>";
        echo "</td>";
        
      echo "<td>";
        echo "<input style='width:80px' name=dateOfCompletion value='" . $row['dateOfCompletion'] . "'></input>";
        echo "</td>";

        echo "<td style='width:80px'>" . "<input style='height:28px;width:69px;text-align: center;line-height: 6px;' type=submit name=delete value=إزالة" . " </td>";
			
			
			echo "<td style='width:80px'>" . "<input style='height:28px;width:74px;text-align:center;line-height: 6px;' type=submit name=update value=تحديث ></input>"   . " </td>";
			echo "<td style='width:80px'>" . "<input style='height:28px;width:74px;text-align:center;line-height: 6px;background-color:darkgrey' type=submit name=giveVoucher value=فاتورة formaction='voucherTasleh.php' ></input>" . " </td>";
			
			echo "<td>" . "<input type=hidden name=hidden value='" . $row['taslehID'] . "' ></input></td>";
	echo "</tr>";
echo "</table>";
echo "</form>";		
    $counter++;
}
echo "</table>";
?>
<script type='text/javascript' src='doPriceSub.js'></script>
</body>
</html>