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
$nameErr = $jawalErr = $typeErr = $dateErr="";
$name = $jawal = $type = $datepicker= $qita3=$overall=$paid= "";
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
  
 if (empty($_POST["qita3"])) {
   $qita3 = "";
  } else {
    $qita3 = test_input($_POST["qita3"]);
  }
  
  if (empty($_POST['jawal'])) {
    $jawalErr = "رقم الهاتف مطلوب";
    $is_valid_form=false;
  } else {
    $jawal= test_input($_POST["jawal"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[0-9]{3}[0-9]{4}[0-9]{3}$/",$jawal)) {
      $jawalErr = "(00000-00000) فقط أدخل أرقاما";
      $is_valid_form=false;
    }
  }
    
    if (empty($_POST['overall'])) {
    $overall = "";
  } else {
    $overall = test_input($_POST['overall']);
  }
 
 if (empty($_POST['paid'])) {
    $paid = "";
  } else {
    $paid = test_input($_POST["paid"]);
  }
  
  if (empty($_POST["type1"]) && empty($_POST["type2"]) && empty($_POST["type3"]) && empty($_POST["type4"]) && empty($_POST["type5"]) ) {
    $typeErr = "أدخل نوع العمل";
    $is_valid_form=false;
  }
  
  if(isset($_POST["type1"])){
  $type1 = $_POST["type1"];}
  else{
	  $type1="";
  }
  if(isset($_POST["type2"])){
  $type2 = $_POST["type2"];}
  else{
	  $type2="";
  }
  if(isset($_POST["type3"])){
  $type3 = $_POST["type3"];}
  else{
	  $type3="";
  }
  if(isset($_POST["type4"])){
  $type4 = $_POST["type4"];}
  else{
	  $type4="";
  }
  if(isset($_POST["type5"])){
  $type5 = $_POST["type5"];}
  else{
	  $type5="";
  }
  $baki  = (isset($_POST["baki"])? $_POST["baki"]:0) ;
  $notes=(isset($_POST["notes"])? $_POST["notes"]:"");

    if (empty($_POST["datepicker"])) {
   $dateErr = "أدخل تاريخ التسليم";
    $is_valid_form=false;
  } else {
    $datepicker =date('Y-m-d',  strtotime($_POST['datepicker']));
    
}
 
  if($is_valid_form==true){
 

  
//$checkBox = $_POST['type1']." ".$_POST['type2']." ".$_POST['type3']." ".$_POST['type4']." ".$_POST['type5'];
$checkBox = $type1." ".$type2." ".$type3." ".$type4." ".$type5;
        
        $sql=" INSERT INTO law7atIsm (name, qita3, jawal, overall, type, paid, baki, notes, dateOfCompletion) VALUES ('".$name."', '".$qita3."', '".$jawal."', '".$overall."', '".$checkBox."', '".$paid."', '".$baki."', '" .$notes."', '".$datepicker."')";
        $result=mysqli_query($conn, $sql);
  $isSubmitted=true;
  header("Location: " . $_SERVER['REQUEST_URI']);
ob_enf_fluch();
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
  <link rel="stylesheet" href="jquery-ui.css">
  <link rel="stylesheet" href="style.css">
  <script src="jquery-1.12.4.js"></script>
  <script src="jquery-ui.js"></script>

  <script>
  $( function() {
    $( "#datepicker" ).datepicker();
  } );
  </script>
  
<script>
( function( factory ) {
	if ( typeof define === "function" && define.amd ) {

		// AMD. Register as an anonymous module.
		define( [ "datepicker" ], factory );
	} else {

		// Browser globals
		factory( jQuery.datepicker );
	}
}( function( datepicker ) {

datepicker.regional.ar = {
	closeText: "إغلاق",
	prevText: "&#x3C;السابق",
	nextText: "التالي&#x3E;",
	currentText: "اليوم",
	monthNames: [ "يناير", "فبراير", "مارس", "أبريل", "مايو", "يونيو",
	"يوليو", "أغسطس", "سبتمبر", "أكتوبر", "نوفمبر", "ديسمبر" ],
	monthNamesShort: [ "1", "2", "3", "4", "5", "6", "7", "8", "9", "10", "11", "12" ],
	dayNames: [ "الأحد", "الاثنين", "الثلاثاء", "الأربعاء", "الخميس", "الجمعة", "السبت" ],
	dayNamesShort: [ "أحد", "اثنين", "ثلاثاء", "أربعاء", "خميس", "جمعة", "سبت" ],
	dayNamesMin: [ "أحد", "إثنين", "ثلاثاء", "إربعاء", "خميس", "جمعة", "سبت" ],
	weekHeader: "أسبوع",
	dateFormat: "yy-m-d",
	firstDay: 0,
		isRTL: true,
	showMonthAfterYear: false,
	yearSuffix: "" };
datepicker.setDefaults( datepicker.regional.ar );

return datepicker.regional.ar;

} ));
</script>
 
</head>
<body dir="rtl" align="center" onload="doMathSub()">
<form action="law7atIsm3.php">
    
</form>
<?php
 

$sql = "SELECT * FROM altermahal ORDER BY alterMahal_id DESC LIMIT 0, 1";
$result = $conn->query($sql);

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

?>


<h3 style="color:#DCDCDC; text-align:left;margin-top:5px;margin-bottom:0px;margin-left:0px;float:left">رقم الفاتورة:
</h3>



<?php

$sql = "SELECT * FROM law7atIsm ORDER BY law7atIsm_id DESC LIMIT 0, 1";
$result = $conn->query($sql);
if($result->num_rows==0)
{
    echo '<font color="red" align="right">'.'#1'.'</font>';    
}
else
    if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
$law7atIsm_id=$row['law7atIsm_id']+1;
echo '<font color="red" align="right">'.'#'.$law7atIsm_id.'</font>';

echo '<input type="hidden" value="'.$law7atIsm_id.'" name="law7atIsm_id"></input>';
}
} 
else
{
    echo "0 results";
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
<div class="clr">
<div class="style0">
  الإسم: <input type="text" name="name" value="<?php if(isset($_POST['name'])){ echo htmlentities($_POST['name']);}?>" class="fullname required_field">
</div>
  <div class="style1">  
  <span class="error">* <?php echo (isset($nameErr)? $nameErr:"");?></span>
  </div>
  </div>
    <br>
<br>
<div class="clr">
<div class="style0">
  القطاع: <input type="text" name="qita3" value="<?php echo (isset($qita3)? $qita3:""); ?>" style="align:center;float:none">
<br><br>
</div>
</div>
<div class="clr">
<div class="style0">
  جوال: <input type="text" name="jawal" value="<?php echo (isset($jawal)? $jawal:""); ?>" style="float:none">
  </div>
  <div class="style1">
  <span class="error">* <?php echo $jawalErr;?></span>
  </div>
  </div>
  <br><br>
  <div class="clr">
<div class="style0">
  المبلغ: <input type="text"  id="overall" name="overall" value="<?php echo $overall;?>">

</div>
</div>
<br>
<br>
<table style="align:right;margin-right:0px">
        <tr>
            <td>

  المدفوع: <input type="text" name="paid"  id="paid" value="<?php echo $paid;?>" onkeyup="doMathSub()" style="width:140px">
  <span class="error"></span>

  </td>
<td>
 
  الباقي: <input type="text" name="baki" id="baki" style="width:140px" value="<?php (isset($baki)?  $baki:""); ?>">


 </td>
 </tr>
 </table>
 <br>
<table style="align:right;margin-right:0px">
    <tr>
        <td>
<label style="margin-top:5px;font-size:14;">ملاحضات:</label>            
            </td>
            <td>
                <textarea name="notes" rows="4" cols="30"><?php echo (isset($notes) ? $notes:""); ?></textarea>
                </td>
        </tr>
    <tr>
        
<td>
<label style="margin-top:5px;font-size:14;">تاريخ التسليم:</label>
</td>
<td>
<input type="text" id="datepicker" name="datepicker" style="width:190px" value="<?php echo $datepicker;?>" autocomplete="off"></input>
<span class="error"><?php echo $dateErr;?></span>
</td>

        </tr>
    </table>
    
 <br>
  <input type="checkbox" name="type1" <?php if(isset($_POST['type1']) =="حفر"){echo ' checked="checked"'; } ?>  value="حفر">حفر
  <input type="checkbox" name="type2" <?php if(isset($_POST['type2']) =="قزاز"){echo ' checked="checked"'; } ?>  value="قزاز">قزاز
  <input type="checkbox" name="type3" <?php if(isset($_POST['type3']) =="طباعة"){echo ' checked="checked"'; } ?> value="طباعة">طباعة
  <input type="checkbox" name="type4" <?php if(isset($_POST['type4']) =="تطريز"){echo ' checked="checked"'; } ?> value="تطريز">تطريز
  <input type="checkbox" name="type5" <?php if(isset($_POST['type5']) =="بلاستيك"){echo ' checked="checked"'; } ?> value="بلاستيك">بلاستيك
  
  <span class="error">* <?php echo $typeErr;?></span>
<br><br>
  <input type="submit" name="addLaw7atIsm" value="إضافة">
  <input type="submit" name="print" value="طباعة" formaction="law7atIsm3.php">
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
<script>
function doMathSub()
{
    var inAmount; 
    var amount;
       var price;
	   price=document.getElementById("overall").value;
       inAmount = document.getElementById("paid").value;
       amount=(price-inAmount);
       document.getElementById("baki").value=amount ;
}
</script>

</body>
</html>