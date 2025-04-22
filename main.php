<!DOCTYPE html>
<html>
<head><meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}

/* Full-width input fields */
input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

/* Set a style for all buttons */
button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}

button:hover {
    opacity: 0.8;
}

/* Extra styles for the cancel button */
.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
}

/* Center the image and position the close button */
.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
    position: relative;
}

img.avatar {
    width: 40%;
    border-radius: 50%;
}

.container {
    padding: 16px;
}

span.psw {
    float: right;
    padding-top: 16px;
}

/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
    padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
    background-color: #fefefe;
    margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
    border: 1px solid #888;
    width: 80%; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {
    position: absolute;
    right: 25px;
    top: 0;
    color: #000;
    font-size: 35px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: red;
    cursor: pointer;
}

/* Add Zoom Animation */
.animate {
    -webkit-animation: animatezoom 0.6s;
    animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
    from {-webkit-transform: scale(0)} 
    to {-webkit-transform: scale(1)}
}
    
@keyframes animatezoom {
    from {transform: scale(0)} 
    to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 100%;
    }
}
</style>
</head>
<body dir="rtl">

<h2>الدخول الى البرنامج</h2>

<button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">دخول كمدير المعمل</button>

<div id="id01" class="modal">
  
  <form class="modal-content animate" action="main.php">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="logoBaladImlak.png" alt="Avatar" class="avatar">
    </div>

    <div class="container">
      

      <label for="psw" style="float:right"><b>كلمة السر</b></label>
      <input type="password" placeholder="أدخل كلمة السر" name="psw">
        <span class="error">* <?php echo (isset($passErr)? $passErr:"");?></span>
      <button type="submit" name="loginAsAdmin">دخول</button>
      <label>
        
      </label>
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
      
    </div>
  </form>
</div>

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
echo "<input type='text' name='realPass' value='".$password."'></input>";
}}

 if(isset($_POST['loginAsAdmin'])) {
     
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
  if (empty($_POST["psw"])) {
    $passErr = "لم تدخل كلمة السر";  
    $is_valid_form=false;
    
  
  }
      else{
		   $pass = test_input($_POST["psw"]);
		  if($pass!=$password)
		  {
			  $passErr="كلمة الدخول غير صحيحة";
			   $is_valid_form=false;
			   header("Location: mainPageAdmin.php");
		  }
		  else
		  if ($pass==$password)
		  {
			  echo "<script>alert('hi');</script>";
			  $isSubmitted=true;
			   header("Location: mainPageAdmin.php");
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
<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
//end 

<table align="center" style="align:center;">
<form action="main.php">
<tr><td>
<select id="choose" style="width:80px;" onchange="onSelectClick()">
<option value="1">المدير</option>
<option value="2">موظف</option>
</select>
</td></tr>
<tr>
<?php 
$parameter = "this is a php variable";
echo "var myval = foo(" . parameter . ");";
?>
<script>
function onSelectClick(){
	var myval = foo("this is a php variable");
	var e = document.getElementById("choose");
var strUser = e.options[e.selectedIndex].value;
	  
if(strUser==1)
alert ("moder");

$.ajax({
  type: 'POST',
  url: 'main.php',
  data: {'variable': myval},
});
}

</script>
<?php
if(isset($_POST['variable'])==1)
	echo "hello";
$myval = $_POST['variable'];
echo $myval;
 ?>
<td>
<input type="button" value="دخول" onClick="document.location.href='mainPage.html'" >
</td>
</tr>
</form>
</table>
<script type="text/javascript">
function CheckColors(val){
 var element=document.getElementById('userPass');
 if(val=='pick a color'||val=='others')
   element.style.display='block';
 else  
   element.style.display='none';
}

</script> 

  <select name="color" onchange='CheckColors(this.value);'> 
    <option>إختر مستخدم</option>  
    <option value="red">موظف</option>
    <option value="others">مدير</option>
  </select>
<input type="password" name="color" id="userPass" style='display:none;' onchange="checkUser()"/>
<input type="password" name="color" id="new" style='display:none;' onchange="checkUser(this.value)"/>
<input type="text" value="دخول كمدير المعمل" onClick="document.location.href='mainPage.html'" style='display:none;'></input>
<input type="button" value="دخول" onClick="document.location.href='mainPage.html'" ></input>
<script>
function checkUser(){
		
	//var realPassword=document.getElementById("realPass").value;
	var userPassword=document.getElementById("userPass").value;
	alert(userPassword);
	alert("hi");
	if(userPassword=='new'){
	//userPassword.style.display='block';
	alert("unlocked");}
 var element=document.getElementById('userPass');
 if(userPassword=='new')
   element.style.display='block';
 else  
   element.style.display='none';
	
	}
</script>
<input type="text" value="دخول كمدير المعمل" onClick="document.location.href='mainPage.html'" style='display:none;'></input>
</body>
</html>