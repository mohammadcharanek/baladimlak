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
    width: 1310px;
	
align:right;
margin-right:50px;
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
    width: 700px;
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
  <title>نوع البدلة</title>
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
$tbl_name='addTasleh'; // Table name
$port=3306;

// Connect to server and select database.
$connection= MySqli_connect($host, $username, $password)or die("cannot connect");
MySqli_select_db($connection, $db_name)or die("cannot select DB");

mysqli_query($connection, "SET NAMES 'utf8'"); 
mysqli_query($connection, 'SET CHARACTER SET utf8');  


  if(isset($_POST['omolaPercent']))
  {
  $omolaPercent=$_POST['omolaPercent'];
}
if(isset($_POST['badlahType'])){
  $badlahType=$_POST['badlahType'];}
      if(isset($_POST['addBadlah']))
      {
      
  
  
  
  // To protect MySQL injection (more detail about MySQL injection)
      
      
        $sql2= "INSERT INTO badlahType(badlahType, omolaPercent) VALUES ('".$badlahType."', '".$omolaPercent."')";
        mysqli_query($connection, $sql2);
        
        header("Location: " . $_SERVER['REQUEST_URI']);
   exit();
        }
        
      if(isset($_POST['delete'])){
    $deleteQuery="DELETE FROM badlahType WHERE badlahT_ID=" . $_POST[hidden];
    
    $retval2=mysqli_query($connection, $deleteQuery);
  
    header("Location: " . $_SERVER['REQUEST_URI']);
   exit();
    
    };
    if(isset($_POST['update'])){
    $updateQuery="UPDATE badlahType  SET badlahType= '" . $_POST['badlahType'] . "', omolaPercent='".$_POST['omolaPercent']."' WHERE badlahT_ID='" . $_POST['hidden']."'";
    
    $retval2=mysqli_query($connection, $updateQuery);
  
    
    };
        
        
  

MySqli_close($connection);
?>

<div id="divToPrint" class="kames" align="center">


   
   <h3 style="align:center">البلد العملاق للخياطة العسكرية</h3>
   



<table style="width:600px" id="header">
<form method="post" action="badlahType.php">
<table id="header">
<tr>



<td>
<h2 style="width:120px;margin-left:0px;text-align:center">نوع البدلة</h2>
</td>
<td>
<input type="text" style="width:200px" name="badlahType" id="badlahType"></input>

</td>

<td>

</td>

<td>
<input type="button" value="الصفحة الرئيسية" class="homebutton" id="btnHome" 
onClick="document.location.href='mainPage.php'" />

    </td>
    <td>
</td>
</tr>
<tr style="background-color:#F0FFF0">

<td>
<h2 style="margin-top:1px;text-align:center;margin-left:0px;width:120px">نسبة العمولة</h2>
</td>
<td>
<input type="text" style="width:200px" name="omolaPercent" required></input>
</td>

<td>

</td>
<td>
</td>

<td>
</td>

</tr>

<tr>
<td></td>
<td>
<input type="submit" value="أضف البدلة" style="width:140px;height:40px;line-height:18px" name="addBadlah" id="addBadlah">
</td>
</tr>

</table>
</form>
<?php
$host='localhost'; // Host name
$username='root'; // Mysql username
$password=''; // Mysql password
$db_name='gicontra_sewingFactory';// Database name
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

$sql = "SELECT * FROM badlahType";
$result = mysqli_query($conn, $sql);
echo "<table style='margin-top:20px;width:800px'>";
echo "<tr>"; 
echo "<th style='width:35px'>الرقم</th><th style='width:90px'>نوع البدلة</th><th style='width:100px'>نسبة العمولة</th><th style='background-color:#F0FFF0;width:80px'><th style='background-color:#F0FFF0;width:100px'><th style='background-color:#F0FFF0;width:100px'></th><th style='background-color:#F0FFF0;width:80px'></th></tr>";
while ($row = mysqli_fetch_array($result)) {
echo '<form method="post" action="badlahType.php">';
echo "<table style='margin-top:2px;margin-right:13px;width:800px'>";
echo "<tr>";
echo "<td style='width:35px'>";
    echo "<input style='width:35px' name=badlahT_ID value='" . $row['badlahT_ID'] . "' disabled>";
    echo "</td>";
    echo "<td>";
      echo "<input style='width:125px' name=badlahType value='" . $row['badlahType'] . "'>";
      echo "</td>";
      echo "<td>";
        echo "<input style='width:125px' name=omolaPercent value='" . $row['omolaPercent'] . "'>";
        echo "</td>";
        
        echo "<td style='width:80px'>" . "<input style='height:28px;width:69px;text-align: center;line-height: 6px;' type=submit name=delete value=إزالة" . " </td>";
			
			
			echo "<td style='width:80px'>" . "<input style='height:28px;width:74px;text-align:center;line-height: 6px;' type=submit name=update value=تحديث" . " </td>";
			
			echo "<td>" . "<input type=hidden name=hidden value='" . $row['badlahT_ID'] . "' </td>";
	echo "<td width='100px'></td>";
		echo "<td width='100px'></td>";
	echo "</tr>";
echo "</table>";
echo "</form>";		
    
}
echo "</table>";
?>
</body>
</html>