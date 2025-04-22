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
$passErr ="";
$Pass="";
$is_valid_form= true;
$isSubmitted=false;
$sql = "SELECT password FROM login ORDER BY user_ID DESC LIMIT 0, 1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {

	$password=$row['password'];

}}

 if(isset($_POST['loginAsAdmin'])) {
     
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
  if (empty($_POST["psw"])) {
    $passErr = "لم تدخل كلمة السر";  
    $is_valid_form=false;
    
  
  }
      else{
		 
		   $pass = MD5($_POST["psw"]);
		  if($pass!=$password)
		  {
			  $passErr="كلمة الدخول غير صحيحة";
			   $is_valid_form=false;
			  
		  }
		  else
		  if ($pass==$password)
		  {
			
			  $isSubmitted=true;
			   header("Location: mainPage.php");
		  }
		  
   
    // check if name only contains letters and whitespace
    
  }
   
 }}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

?>
<!DOCTYPE html>
<html>
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
	
input[type=button] {
    width: 150px;
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
<title>تسجيل الدخول</title></head>
<body dir="rtl">
 <p><span class="error">* نطاق مطلوب</span></p>
<table align="left">
    <tr>
        


        </tr>
    </table>

<div style='width: 100%; padding:10px; margin: auto; text-align: center;margin-top:90px;margin-right:90px;'>
 
<form method="post" id="jsform" action="login.php"  style="display: inline-block"> 
<br>
 
<br>
<br>
<div class="clr">
<div class="style0">
 <label style="font-size:18px;font-weight:bold;">دخول كمتحكم في البرنامج</label>
 <br><br><input type="password" name="psw" placeholder="أدخل كلمة السر" style="float:none">
  </div>
  <div class="style1">
  <span class="error">* <?php echo $passErr;?></span>
  </div>

<br><br>
<div>
  <input type="submit" name="loginAsAdmin" value="دخول" style="margin-top:3px;margin-left:70px;"></div></div>
  <br><br>
<div class="clr">
<div class="style0">
   <input type="button" id="mowadaf" name="mowadaf" value="دخول كموظف" onClick="document.location.href='mainPageUser.php'"  style="float:none">
  </div>
  <div class="style1">
  <span class="error"></span>
  </div>
  </div>
  <br><br>

</form>
</div>

<?php
if($isSubmitted==true)
{
    echo '<br>';
    echo '<label style="color:red">تمت الإضافة</label>';
}

?>

</body>
</html>