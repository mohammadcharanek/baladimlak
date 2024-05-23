<?php
ob_start();
?>
<?php
   $host='localhost'; // Host name
$username='root'; // Mysql username
$password=''; // Mysql password
$db_name='gicontra_sewingFactory'; // Database name
$tbl_name='badlah'; // Table name
$port=3306;
 $conn= MySqli_connect($host, $username, $password)or die("cannot connect");
  MySqli_select_db($conn, $db_name)or die("cannot select DB");

    

mysqli_query($conn, "SET NAMES 'utf8'"); 
mysqli_query($conn, 'SET CHARACTER SET utf8');  

// define variables and set to empty values
$nameErr ="";
$passErr ="";
$name = "";
$addErr="";
$addErrEn="";
$address="";
$is_valid_form= true;
global $isSubmitted;
$isSubmitted=false;
 if(isset($_POST['addLaw7atIsm'])) {
     
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
  if (empty($_POST["name"])) {
    $nameErr = "الإسم مطلوب      ";  
    $is_valid_form=false;
    
  } else if(strlen($_POST["name"])<=4){
      $nameErr="الإسم يجب أن يكون أكثر من 4 احرف";
      $is_valid_form=false;
  }
      else{
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[\p{L} ]+$/u",$name)) {
      $nameErr = "الإسم يجب أن يكون مؤلف من أحرف";
      $is_valid_form=false;
    }
  }
  
 
  if($is_valid_form==true){
 

  
//$checkBox = $_POST['type1']." ".$_POST['type2']." ".$_POST['type3']." ".$_POST['type4']." ".$_POST['type5'];

        
        $sql=" INSERT INTO altermahal (mahalName) VALUES ('".$name."')";
        $result=mysqli_query($conn, $sql);
  $isSubmitted=true;
  header("Location: " . $_SERVER['REQUEST_URI']);
ob_enf_fluch();
}
}}
if(isset($_POST['alterPassword'])){
     
if ($_SERVER["REQUEST_METHOD"] == "POST"){
  
  if (empty($_POST["newPass"])) {
    $passErr = "كلمة المرور مطلوبة";  
    $is_valid_form=false;
    
  } else if(strlen($_POST["newPass"])<=4){
      $passErr="كلمة المرور يجب أن تكون أكثر من 4 خانات";
      $is_valid_form=false;
  }
      else{
    $newPass = test_input($_POST["newPass"]);
      
  }
  
 
  if($is_valid_form==true){
 

  
//$checkBox = $_POST['type1']." ".$_POST['type2']." ".$_POST['type3']." ".$_POST['type4']." ".$_POST['type5'];

        
        $sql=" UPDATE login SET password=md5('".$newPass."') WHERE 1";
        $result=mysqli_query($conn, $sql);
  $isSubmitted=true;
  header("Location: " . $_SERVER['REQUEST_URI']);
ob_enf_fluch();
}
}}

if(isset($_POST['alterAr'])) {
     
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
  if (empty($_POST["addAr"])) {
    $addErr = "أدخل العنوان";  
    $is_valid_form=false;
    
  } else if(strlen($_POST["addAr"])<=20){
      $addErr="العنوان يجب أن يكون أكثر من 20 حرفا";
	   
	     
      $is_valid_form=false;
	  
  }else{
		 
    $address = test_input($_POST["addAr"]);
 
   
  }
  

  if($is_valid_form==true){


  
//$checkBox = $_POST['type1']." ".$_POST['type2']." ".$_POST['type3']." ".$_POST['type4']." ".$_POST['type5'];

        
        $sql="UPDATE alteraddress SET address='".$address."' WHERE address_id=1";
        $result=mysqli_query($conn, $sql);
  $isSubmitted=true;
  header("Location: alterName.php");

}
        
      
    
       
     }}

	 
	 if(isset($_POST['alterEn'])) {
     
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
  if (empty($_POST["addEn"])) {
    $addErrEn = "أدخل العنوان";  
    $is_valid_form=false;
    
  } else if(strlen($_POST["addEn"])<=20){
      $addErrEn="العنوان يجب أن يكون أكثر من 20 حرفا";
	   
	     
      $is_valid_form=false;
	  
  }else{
		 
    $address = test_input($_POST["addEn"]);
 
   
  }
  

  if($is_valid_form==true){


  
//$checkBox = $_POST['type1']." ".$_POST['type2']." ".$_POST['type3']." ".$_POST['type4']." ".$_POST['type5'];

        
        $sql="UPDATE alteraddress SET addressEn='".$address."' WHERE address_id=1";
        $result=mysqli_query($conn, $sql);
  $isSubmitted=true;
  header("Location: alterName.php");

}
        
      
    
       
     }}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}     



 
?>  

<!DOCTYPE HTML>  
<html>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<head>
<title>تعديل الإسم</title>
<style>
.error {color: #FF0000;}
form{
  text-align:center;
}
#form_table{
display:inline-table;
}
.style0{
    float:right;
width:60%;
overflow:hidden;
}
 .style1{
float:right;
width:150px;
overflow:hidden;
}
.style2{
    float:right;
width:50%;
overflow:hidden;
}
 .style3{
float:left;
width:50%;
overflow:hidden;
}

.clr{
clear:both;
}
#btnHome {
   width: 145px;
    background-color: green;
    color: white;
    padding: 5px 10px;
    margin: 12px 30px 4px 0px;
    border: none;
    border-radius: 2px;
    cursor: pointer;
    font-weight:bold;
    font-size:21;
    
}
#btnHome:hover {
    background-color: grey;
}
#datepicker{
    

    width: 80px;
    height:7px;
    padding: 12px 15px;
    margin: 2px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;

}
</style>
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
 <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#datepicker" ).datepicker();
  } );
  </script>
 
</head>
<body dir="rtl" align="center">
<form action="alterName.php">
    
</form>

<?php

$sql = "SELECT * FROM altermahal ORDER BY alterMahal_id DESC LIMIT 0, 1";
$result = $conn->query($sql);

if ($result->num_rows >=0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
$mahalName=$row['mahalName'];
echo '<h2>'.$mahalName.'</h2>';


}
} 


?>


<table align="left">
    <tr>
        
<td>
<input type="button" value="الصفحة الرئيسية" class="homebutton" id="btnHome" 
onClick="document.location.href='mainPage.php'" />
</td>

        </tr>
    </table>
<p><span class="error">* نطاق مطلوب</span></p>
<div style='width: 100%; padding 10px; margin: auto; text-align: center;'>
  
<form method="post" id="jsform" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"  style="display: inline-block"> 

<table>
<tr>
<td>
  إسم المحل الجديد: <input type="text" style="width:180px;" name="name" value="<?php if(isset($_POST['name'])){ echo htmlentities($_POST['name']);}?>" class="fullname required_field">
  </td>
  <td>
  <input type="submit" name="addLaw7atIsm" value="تعديل">
  </td>

<td>  

  <span class="error">* <?php echo (isset($nameErr)? $nameErr:"");?></span>
</td>

  </tr></table>
    <br>


 <br>
    
  
 
</form>
</div>

  <div style='width: 100%; padding 10px; margin:auto;margin-right:0px; text-align:center;'>
<form method="post" id="jsform" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"  style="display: inline-block"> 

<table style="margin-right:0px;margin-left:190px;">
<tr>
<td>
  كلمة المرور الجديدة: <input type="password" style="width:180px;" name="newPass" value="<?php if(isset($_POST['newPass'])){ echo htmlentities($_POST['newPass']);}?>" class="fullname required_field">
  </td>
  <td>
  <input type="submit" name="alterPassword" value="تحديث">
  </td>

<td>  

  <span class="error">* <?php echo (isset($passErr)? $passErr:"");?></span>
</td>

  </tr></table>
    <br>


 <br>
    
  
 
</form>
</div>

<hr>
<h3 style="align:center">تعديل عنوان المحل</h3>
<div style='width: 100%; padding 10px; margin: auto; text-align: center;'>
  
<form method="post" id="jsform2" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"  style="display: inline-block"> 

<table>
<tr>
<td>
 العنوان بالعربية: 
  </td>
  <td>
  <textarea cols="131" id="addAr" name="addAr"><?php

$sql = "SELECT * FROM alteraddress ORDER BY address_id DESC LIMIT 0, 1";
$result = $conn->query($sql);

if ($result->num_rows >=0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
$address=$row['address'];
echo $address;

}
} 


?>
</textarea>
  </td>
  <td>
  <input type="submit" name="alterAr" value="تعديل">
  </td>

<td>  

  <span class="error">* <?php echo (isset($addErr)? $addErr:"");?></span>
</td>

  </tr>
  <tr>
<td>
العنوان بالإنكليزية: 
  </td>
  <td>
  <textarea cols="131" id="addEn" name="addEn">
  <?php

$sql = "SELECT * FROM alteraddress ORDER BY address_id DESC LIMIT 0, 1";
$result = $conn->query($sql);

if ($result->num_rows >=0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
$addressEn=$row['addressEn'];
echo $addressEn;

}
} 


?>
  </textarea>
  </td>
  <td>
  <input type="submit" name="alterEn" value="تعديل">
  </td>

<td>  

  <span class="error">* <?php echo (isset($addErrEn)? $addErrEn:"");?></span>
</td>

  </tr>
  
  </table>
    <br>


 <br>
    
  
 
</form>
</div>

<?php
if($isSubmitted==true)
{
    echo '<br>';
    echo '<label style="color:red">تمت الإضافة</label>';
}

?>
<?php
MySqli_close($conn);
  ?>


</body>
</html>