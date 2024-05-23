<?php
ob_start();
?>
<html>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<style>
table {
    border-collapse: collapse;
    width: 980px;
    	
}
table#header{
border-collapse: collapse;
    width: 980px;
	height: 40px;

}
table#middle{
border-collapse: collapse;
    width: 980px;
	height: 120px;
}
table#footer {
border-collapse: collapse;
    width: 980px;
	height: 60px;

}
table#footer2 {
border-collapse: collapse;
    width: 980px;
	height: 60px;

}
table#middle td{width:130px;}
tr{height:5px;}
th, td {
    
    padding: 1px;
    width:130px;
}

table#middle tr:nth-child(odd){background-color: #f2f2f2}

th {
    background-color: #4CAF50;
    color: white;
}

input[type=text]{
    width: 100px;
    height:7px;
    padding: 11px 11px;
    margin: 1px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}
input[type=submit] {
    width: 100%;
    background-color: #4CAF50;
    color: white;
    padding: 7px 7px;
    margin: 0px 0;
    border: none;
    border-radius: 2px;
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
    padding: 11px 11px;
    margin: 4px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}
input[type=button]:hover {
    background-color: grey;
}
#btnHome {
    width: 125px;
    background-color: green;
    color: white;
    padding: 2px 0px;
    margin: 7px 390px 2px 2px;
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
    padding-right: 2px;
}

.error {color: #FF0000;}

.styled select {
  background: transparent;
  width: 150px;
  font-size: 18px;
   margin-bottom:20px;
 border-style: solid;
    
  height: 53px;
}

.styled {
  margin: 8px 5px 8px 5px;
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
  margin: 7px 5px 7px 5px;
  width: 120px;
  height: 53px;
  
  
a.button {
    -webkit-appearance: button;
    -moz-appearance: button;
    appearance: button;

    text-decoration: none;
    color: initial;
}
  


</style>
 
 <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>إضافة عامل</title>
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

<?php
$host='localhost'; // Host name
$username='root'; // Mysql username
$password=''; // Mysql password
$db_name='gicontra_sewingFactory'; // Database name
$tbl_name='workerTB'; // Table name
$port=3306;

// Connect to server and select database.
$connection= MySqli_connect($host, $username, $password)or die("cannot connect");
MySqli_select_db($connection, $db_name)or die("cannot select DB");

mysqli_query($connection, "SET NAMES 'utf8'"); 
mysqli_query($connection, 'SET CHARACTER SET utf8'); 	
if(isset($_POST['wName'])){
$wName=$_POST['wName'];
}
if(isset($_POST['wPNum']))
{
	$wPNum=$_POST['wPNum'];
}
if(isset($_POST['wAddress']))
{
	$wAddress =$_POST['wAddress'];
}
// To protect MySQL injection (more detail about MySQL injection)
	
			if(isset($_POST['addWorker']))
			{
				
				$sql="INSERT INTO ".$tbl_name."(wName, wPNum, wAddress) VALUES ('".$wName."', '".$wPNum."', '".$wAddress."')";
				$result=mysqli_query($connection, $sql);
				header("Location: " . $_SERVER['REQUEST_URI']);
					ob_enf_fluch();
   exit();
				
			}
			if(isset($_POST['deleted'])){
			
		
		$deleteQuery="DELETE FROM workerTB WHERE workerID='".$_POST['hidden']."'";
		
		$retval2=mysqli_query($connection, $deleteQuery);
			
		};
		if(isset($_POST['update'])){
		
		$updateQuery="UPDATE workerTB  SET wName= '" . $_POST['wName'] . "', wPNum='".$_POST['wPNum']."', wAddress='".$_POST['wAddress']."' WHERE workerID='" . $_POST['hidden']."'";
		
		$retval2=mysqli_query($connection, $updateQuery);
	
		
		};
				
				
	


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
MySqli_close($connection);
?>
<div id="divToPrint" class="kames" align="center">


   <form method="post" action=<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>>
   
   




<table id="header">
<tr>
<td>
<h3 style="margin-top:1px;margin-bottom:0px;text-align:center">الإسم</h3>
</td>
<td>
<input type="text" id="wName" style="width:190px" name="wName" required></input>
</td>
<td>
<input type="button" value="الصفحة الرئيسية" class="homebutton" id="btnHome" 
onClick="document.location.href='mainPageUser.php'" />

    </td>

</tr>


<tr style="background-color:#F0FFF0">

<td>
<h3 style="margin-top:1px;margin-bottom:0px;text-align:center">رقم الهاتف</h3>
</td>
<td>
<input type="text" id="wPNum" style="width:190px" name="wPNum" required></input>
</td>

<td>

</td>
<td>
</td>

<td>
</td>


</tr>
<tr>
<td style="width:100px;text-align:center">
<h3 style="margin-left:0px;margin-bottom:0px;text-align:center;">العنوان</h3>
</td>
<td>
<input type="text" id="wAddress" style="width:190px;margin-right:0px;" name="wAddress">

</td>
</tr>
<tr>
<td>
</td>
<td>
<input type="submit" value="أضف عامل" style="width:110px;height:26px;line-height:18px;margin-top:7px;" name="addWorker" id="addWorker">
</td>
</tr>
</table>
</form>
<table style="width:1340px">
<table>
<tr>

<td>
</td>
</tr>

</table>
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
$sql = "SELECT * FROM workerTB";
$result = mysqli_query($conn, $sql);
echo "<table style='width:980px'>";
echo "<tr>"; 
echo "<th style='width:40px'>الرقم</th><th style='width:100px'>الإسم</th><th style='width:124px'>رقم الهاتف</th><th style='width:134px'>العنوان</th><th style='background-color:#F0FFF0'></th><th style='background-color:#F0FFF0'></th></tr>";
$count=1;
while ($row = mysqli_fetch_array($result)) {
echo '<form method="POST" action="">';
echo "<table id='newT' style='width:980px'>";
echo "<tr>";
echo "<td style='width:40px'>";
    //echo "<input style='width:40px; margin-left:0px;margin-right:2px' name=workerID value='" . $row['workerID'] . "' disabled>";
    echo '<strong style="width:40px;font-size:15px;align:center;">' . $count. ' </strong>';
	echo "</td>";   
    echo "<td>";
      echo "<input name=wName style='width:170px' value='" . $row['wName'] . "'>";
      echo "</td>";
      echo "<td>";
        echo "<input name=wPNum style='width:160px' value='" . $row['wPNum'] . "'>";
        echo "</td>";
        
      echo "<td>";
        echo "<input name=wAddress style='width:160px' value='" . $row['wAddress'] . "'>";
        echo "</td>";
        
			echo "<td style='width:80px'>" . "<input style='height:26px;width:74px;text-align:center;line-height: 6px;' type=submit name=deleted value=إزالة" . " </td>";

			
			echo "<td  style='width:80px'>" . "<input style='height:26px;width:74px;text-align:center;line-height: 6px;' type=submit name=update value=تحديث" . " </td>";
			echo "<td>" . "<input type=hidden  name=hidden value='". $row['workerID'] ."' </td> ";
			
			echo "</tr>";
    

echo "</table>";
echo "</form>";
$count++;
}
echo "</table>";

?>
</body>
</html>