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
$name = "";
$is_valid_form= true;
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
<body dir="rtl" align="center" onload="doMathSub()">
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
    
        
<td>
<input type="button" value="الصفحة الرئيسية" class="homebutton" id="btnHome" 
onClick="document.location.href='mainPage.php'" />
</td>

        
    </table>
<p><span class="error">* نطاق مطلوب</span></p>
<div style='width: 100%; padding:10px; margin: auto; text-align: center;'>
  
<form method="post" id="jsform" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"  style="display: inline-block"> 

<table>
<tr>
<td>
  عنوان المحل الجديد: <input type="text" name="name" value="<?php if(isset($_POST['name'])){ echo htmlentities($_POST['name']);}?>" class="fullname required_field">
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