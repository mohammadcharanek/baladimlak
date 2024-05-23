<?php
$host = 'localhost'; // Host name
$username = 'root'; // Mysql username
$password = ''; // Mysql password
$db_name = 'gicontra_sewingFactory'; // Database name
$tbl_name = 'badlah'; // Table name
$port = 3306;

// Connect to server and select database.
$connection = MySqli_connect($host, $username, $password) or die("cannot connect");
MySqli_select_db($connection, $db_name) or die("cannot select DB");

mysqli_query($connection, "SET NAMES 'utf8'");
mysqli_query($connection, 'SET CHARACTER SET utf8');

$nameErr = $jawalErr = $typeErr = $dateErr=$qtyErr="";
$name = $jawal = $type = $datepicker= $qty="";
$is_valid_form= true;
$isSubmitted=false;
 if(isset($_POST['addBadlah'])) {
     
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
  if (empty($_POST["clientname"])) {
    $nameErr = "الإسم مطلوب      ";  
    $is_valid_form=false;
    
  } else if(strlen($_POST["clientname"])<=4){
      $nameErr="الإسم يجب أن يكون أكثر من 4 احرف";
      $is_valid_form=false;
  }
      else{
    $name = test_input($_POST["clientname"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[\p{L} ]+$/u",$name)) {
      $nameErr = "الإسم يجب أن يكون مؤلف من أحرف";
      $is_valid_form=false;
    }
  }
  
 if (empty($_POST["optionSelected"])) {
   $typeErr="أدخل نوع العمل";
    $is_valid_form=false;
  } else {
    $naw3al3amal = test_input($_POST["optionSelected"]);
  }
  
  if (empty($_POST['mobilenum'])) {
    $jawalErr = "رقم الهاتف مطلوب";
    $is_valid_form=false;
  } else {
    $jawal= test_input($_POST["mobilenum"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[0-9]{3}[0-9]{4}[0-9]{3}$/",$jawal)) {
      $jawalErr = "(00000-00000) فقط أدخل أرقاما";
      $is_valid_form=false;
    }
  }
  
    if (empty($_POST["datepicker"])) {
   $dateErr = "أدخل تاريخ التسليم";
    $is_valid_form=false;
  } else {
    $datepicker =date('y-m-d',  strtotime($_POST['datepicker']));
    
}

 if (empty($_POST["bQty"])) {
   $qtyErr="أدخل الكمية";
    $is_valid_form=false;
  } else {
    $bQty = test_input($_POST["bQty"]);
  }
  
  
$badlahT_ID = $_POST['naw3al3amal'];

$naw3al3amal = $_POST['optionSelected'];

$clientname = $_POST['clientname'];

$mobilenum = $_POST['mobilenum'];
$dateOfCompletion = date('y-m-d', strtotime($_POST['datepicker']));
if(!empty($_POST['tool'])){
    $tool=$_POST['tool'];
}
else{
    $tool=0;
}
//$tool = isset ($_POST['tool'])? $_POST['tool']:0;

$katef = (!empty ($_POST['katef'])? $_POST['katef']:0);
$kom1 = (!empty ($_POST['kom1'])? $_POST['kom1']:0);
$kom2 = (!empty ($_POST['kom2'])? $_POST['kom2']:0);
$kom3 = (!empty ($_POST['kom3'])? $_POST['kom3']:0);
$sadr = (!empty ($_POST['sadr'])? $_POST['sadr']:0);
$batn = (!empty ($_POST['batn'])? $_POST['batn']:0);
$asfal = (!empty ($_POST['asfal'])? $_POST['asfal']:0);
$raqba = (!empty ($_POST['raqba'])? $_POST['raqba']:0);
$qita3 = (!empty ($_POST['qita3'])? $_POST['qita3']:"");
$comments = (!empty ($_POST['comments'])? $_POST['comments']:"");

$toolp = (!empty ($_POST['toolp'])? $_POST['toolp']:0);
$shi3ar = (!empty ($_POST['shi3ar'])? $_POST['shi3ar']:0);
$shi3arN = (!empty ($_POST['shi3arN'])? $_POST['shi3arN']:0);
$hizam = (!empty ($_POST['hizam'])? $_POST['hizam']:0) ;

$rotbahN = (!empty ($_POST['rotbahN'])? $_POST['rotbahN']:0);
$rotbah = (!empty ($_POST['rotbah'])? $_POST['rotbah']:0);
$base = (!empty ($_POST['base'])? $_POST['base']:0);
$splaytN = (!empty ($_POST['splaytN'])? $_POST['splaytN']:0);
$splayt = (!empty ($_POST['splayt'])? $_POST['splayt']:0);
$fa5th = (!empty ($_POST['fa5th'])? $_POST['fa5th']:0);
$kabou3N = (!empty ($_POST['kabou3N'])? $_POST['kabou3N']:0);
$kabou3 = (!empty ($_POST['kabou3'])? $_POST['kabou3']:0);
$sak = (!empty ($_POST['sak'])? $_POST['sak']:0);
$law7aN = (!empty ($_POST['law7aN'])? $_POST['law7aN']:0);
$law7a = (!empty ($_POST['law7a'])? $_POST['law7a']:0);
$asfalbnt = (!empty ($_POST['asfalbnt'])? $_POST['asfalbnt']:0);
$yakaN = (!empty ($_POST['yakaN'])? $_POST['yakaN']:0);
$yaka = (!empty ($_POST['yaka'])? $_POST['yaka']:0);
$waynakN = (!empty ($_POST['waynakN'])? $_POST['waynakN']:0);
$waynak = (!empty ($_POST['waynak'])? $_POST['waynak']:0);
$notahN = (!empty ($_POST['notahN'])? $_POST['notahN']:0) ;
$notah = (!empty ($_POST['notah'])? $_POST['notah']:0);
$kravtaN = (!empty ($_POST['kravtaN'])? $_POST['kravtaN']:0);
$kravta = (!empty ($_POST['kravta'])? $_POST['kravta']:0);
$qty = (!empty ($_POST['bQty'])? $_POST['bQty']:0);

$bQty = (!empty ($_POST['bQty'])? $_POST['bQty']:0);
$price = (!empty ($_POST['price'])? $_POST['price']:0);
$vat = (!empty ($_POST['VAT'])? $_POST['VAT']:0);
$omla = $_POST['myselectbox'];
$overallP = (!empty ($_POST['overallP'])? $_POST['overallP']:0) ;
$finished = (!empty ($_POST['finished'])? $_POST['finished']:"");
$received = (!empty($_POST['received'])? $_POST['received']:"");

$wasl = (!empty ($_POST['wasl'])? $_POST['wasl']:0);
$baki = (!empty ($_POST['baki'])? $_POST['baki']:0);
$naw3exp=(!empty ($_POST['naw3exp'])? $_POST['naw3exp']:"");

$numexp=(!empty ($_POST['numexp'])? $_POST['numexp']:0);

$pexp=(!empty ($_POST['pexp'])? $_POST['pexp']:0);
$type=$_POST['type'];

// To protect MySQL injection (more detail about MySQL injection)

  if($is_valid_form==true){
 
$sql = " INSERT INTO " . $tbl_name . "(badlahT_ID, clientname, mobilenum, dateOfCompletion, naw3al3amal, tool, katef, kom1, kom2, kom3, sadr, batn, asfal, raqba, qita3, comments, toolp, shi3arN, shi3ar, hizam, rotbahN, rotbah, base, splaytN, splayt, fa5th, kabou3N, kabou3, sak, law7aN, law7a, asfalbnt, yakaN, yaka, waynakN, waynak, notahN, notah, kravtaN, kravta, qty, bQty, price, vat, omla, overallP, wasl, baki, finished, received, naw3exp, numexp, pexp, type) VALUES ('" . $badlahT_ID . "', '" . $clientname . "', '" . $mobilenum . "', '" . $dateOfCompletion . "', '" . $naw3al3amal . "', '" . $tool . "', '" . $katef . "', '" . $kom1 . "', '" . $kom2 . "', '" . $kom3 . "', '" . $sadr . "', '" . $batn . "', '" . $asfal . "', '" . $raqba . "', '" . $qita3 . "', '" . $comments . "', '" . $toolp . "', '" . $shi3arN . "', '" . $shi3ar . "', '" . $hizam . "', '" . $rotbahN . "', '" . $rotbah . "', '" . $base . "', '" . $splaytN . "', '" . $splayt . "', '" . $fa5th . "', '" . $kabou3N . "', '" . $kabou3 . "', '" . $sak . "', '" . $law7aN . "', '" . $law7a . "', '" . $asfalbnt . "', '" . $yakaN . "', '" . $yaka . "', '" . $waynakN . "', '" . $waynak . "', '" . $notahN . "', '" . $notah . "', '" . $kravtaN . "', '" . $kravta . "', '" . $qty . "', '" . $bQty . "', '" . $price . "', '" . $vat . "', '" . $omla . "', '" . $overallP . "', '" . $wasl . "', '" . $baki . "', '" . $finished . "', '" . $received . "', '". $naw3exp."', '". $numexp. "', '" .$pexp."', '".$type."')";
$result = mysqli_query($connection, $sql);

header("Location: newBadlahUser.php");

MySqli_close($connection);
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
table {
    border-collapse: collapse;
    width: 900px;
	height: 380px;
}
table#header{
border-collapse: collapse;
    width: 1233px;
	height: 30px;

}
table#middle{
border-collapse: collapse;
    width: 1233px;
	height: 99px;
}
table#footer {
border-collapse: collapse;
    width: 1233px;
	height: 100px;

}
table#footer2 {
border-collapse: collapse;
    width: 1233px;
	height: 50px;

}
table#middle td{width:130px;}
tr{height:3px;}
th, td {
    
    padding: 2px;
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
    padding: 11px 0px;
    margin: 1px 0px;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}
input[type=submit] {
    width: 100%;
    background-color: #4CAF50;
    color: white;
    padding: 11px 10px;
    margin: 5px 0;
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
    padding: 11px 10px;
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
    margin: 12px 30px 4px 0px;
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
  }  
a.button {
    -webkit-appearance: button;
    -moz-appearance: button;
    text-decoration: none;
    color: initial;
}
  


</style>
<script type="text/javascript">     
    function PrintDiv() {    
       var divToPrint = document.getElementById('divToPrint');
       var popupWin = window.open('', '_blank', 'width=300,height=300');
       popupWin.document.open();
       popupWin.document.write('<html><body onload="window.print()">' + divToPrint.innerHTML + '</html>');
        popupWin.document.close();
            }
 </script>
 
 <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>إضافة بدلة</title>
  
 
  
  <link rel="stylesheet" href="jquery-ui.css">
  <link rel="stylesheet" href="style.css">
  <script src="jquery-1.12.4.js"></script>
  <script src="jquery-ui.js"></script>
    <script>
  
  $(function() {
    $("#datepicker").datepicker();
  });
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

  <script>
  console.log($('#naw3al3amal').val());

// all option's value
$('#naw3al3amal').find('option').each(function(){
    console.log($(this).text());
    console.log($(this).val());
});

// change event
$('#naw3al3amal').change(function(){
    console.log($(this).find(':selected').text());
    console.log($(this).find(':selected').val());
});
  </script>

</head>
<body bgcolor="#F0FFF0" dir="rtl">

<div id="divToPrint" class="kames" align="center">


   <form action="newBadlahUser.php" method="POST">
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

$sql = "SELECT * FROM altermahal ORDER BY alterMahal_id DESC LIMIT 0, 1";
$result = $conn->query($sql);

if ($result->num_rows >=0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
$mahalName=$row['mahalName'];
echo '<h3>'.$mahalName.'</h3>';


}
} 
else{
echo "0 results";
}

?>
   



<table style="width:1340px;margin-top:5px;height:auto;">
<table id="header">
<tr>
<td>
</td>
<td>
</td>

<td style="margin-left:0px;">
<h3 style="color:#DCDCDC; text-align:left;margin-top:5px;margin-bottom:0px;margin-left:0px;float:left">رقم الفاتورة
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

$sql = "SELECT * FROM badlah ORDER BY badlah_id DESC LIMIT 0, 1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
$badlahID=$row['badlah_id']+1;
echo '<font color="red">'.'#'.$badlahID.'</font>';
echo '<input type ="hidden" name="badlahID" value="'.'#'.$badlahID.'"></input>';

}
} 
else
{
    echo "0 results";
}
$conn->close();
?>
</td>
<td>
</td>
<td>
</td>

<td>
<input type="button" value="الصفحة الرئيسية" class="homebutton" id="btnHome" 
onClick="document.location.href='mainPageUser.php'" />
</td>

</tr>
<tr  style="background-color:#F0FFF0">
<td>
</td>
</tr>
<tr>



<td style="width:170px; align:right">
<h2 style="width:120px">إسم الزبون</h2>
</td>
<td>
<input type="text" id="clientname" style="width:190px" name="clientname" value="<?php if(isset($_POST['clientname'])){ echo htmlentities($_POST['clientname']);}?>">
 <span class="error">* <?php echo (isset($nameErr)? $nameErr:"");?></span>
</td>

<td>

</td>
<td>
</td>
<td>
</td>

<td>
<h2 style="margin-top:5px">تاريخ التسليم</h2>
</td>
<td>
<input type="text" id="datepicker" name="datepicker" style="width:190px" value="<?php echo isset($_POST['datepicker'])? $_POST['datepicker']:'';?>" autocomplete="off">
<span class="error">*<?php echo $dateErr;?></span>
</td>

</tr>
<tr style="background-color:#F0FFF0">

<td>
<h2 style="margin-top:1px">رقم الهاتف</h2>
</td>
<td>
<input type="text" id="mobilenum" style="width:190px" name="mobilenum" value="<?php if(isset($_POST['mobilenum'])){ echo htmlentities($_POST['mobilenum']);}?>"></input>
<span class="error">* <?php echo $jawalErr;?></span>
</td>

<td>

</td>
<td>
</td>

<td>
</td>
<td>
<h2 style="margin-top:5px; margin-right:25px">نوع العمل</h2>
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

$sql = "SELECT * FROM badlahType";
$result = mysqli_query($conn, $sql);

echo '<select style=width:190px name=naw3al3amal id=naw3al3amal onchange="GetOptionSelected()">';
echo "<option value=''>";
echo isset($_POST['optionSelected'])? $_POST['optionSelected']:'';
echo "</option>";
while ($row = mysqli_fetch_array($result)){
    echo "<option value='".$row['badlahT_ID']."'>" . $row['badlahType'] . "</option>";
}
echo "</select>";

?>
<span class="error">* <?php echo $typeErr;?></span>
<input type="hidden" name="optionSelected" id="optionSelected" value="0">
</td>

</tr>

</table>
<table id="middle">
<tr style="width:100%; height:3px;background-color:#DCDCDC">
<td style="background-color:#00CED1; align:center">
	<h3 style="text-align:center; margin-top:5px;margin-bottom:1px">قميص</h3>
</td>
 	 <td align="center">
 	   <label><h3 style="text-align:center;  margin-top:5px;margin-bottom:1px">طول
</h3></label>
	</td>
	
<td align="center">
    <h3 style="text-align:center; margin-top:3px;margin-bottom:1px">كتف</h3>
	</td>
	
	

<td align="center">	
    <h3 style="text-align:center; margin-top:3px;margin-bottom:1px">كم</h3>
	
	</td>
	
	
<td align="center">
    <h3 style="text-align:center; margin-top:3px;margin-bottom:1px">صدر</h3>
	</td>
	
	
<td align="center">
 <h3 style="text-align:center; margin-top:3px;margin-bottom:1px">بطن</h3>
	</td>
	
	<td align="center">
	<h3 style="text-align:center; margin-top:3px;margin-bottom:1px">أسفل</h3>
	</td>
<td align="center">
	<h3 style="text-align:center;  margin-top:3px;margin-bottom:1px">رقبة</h3>
	</td>
	<td align="center">
	<h3 style="text-align:center;  margin-top:5px;margin-bottom:1px">القطاع</h3>
	</td>
	
</tr>
<tr>
<td>
</td>
<td align="center">
	<input type="text" id="tool" name="tool" value="<?php if(isset($_POST['tool'])){ echo htmlentities($_POST['tool']);}?>"></input>
	</td>
	<td align="center">
    <input type="text" id="katef" name="katef" value="<?php if(isset($_POST['katef'])){ echo htmlentities($_POST['katef']);}?>">
	</td>
	<td align="center">
    <input type="text" id="kom1" name="kom1" value="<?php if(isset($_POST['kom1'])){ echo htmlentities($_POST['kom1']);}?>">
	</td>
	<td align="center">
            <input type="text" id="sadr" name="sadr" value="<?php if(isset($_POST['sadr'])){ echo htmlentities($_POST['sadr']);}?>">
	</td>
	
	<td align="center"> 
    <input type="text" id="batn" name="batn" value="<?php if(isset($_POST['batn'])){ echo htmlentities($_POST['batn']);}?>">
	</td>
	<td align="center">
    <input type="text" id="asfal" name="asfal" value="<?php if(isset($_POST['asfal'])){ echo htmlentities($_POST['asfal']);}?>">
	</td>
	<td align="center">
            <input type="text" id="raqba" name="raqba" value="<?php if(isset($_POST['raqba'])){ echo htmlentities($_POST['raqba']);}?>">
	</td>
	<td align="center">
            <input type="text" id="qita3" name="qita3" value="<?php if(isset($_POST['qita3'])){ echo htmlentities($_POST['qita3']);}?>">
	</td>
	
</tr>
<tr>
<td>
</td>

<td>
</td>
<td>
    
	</td>



<td align="center">
    <input type="text" id="kom2" name="kom2" value="<?php if(isset($_POST['kom2'])){ echo htmlentities($_POST['kom2']);}?>">
</td>

<td>
</td>

<td>
</td>
<td>
</td>

<td>
</td>
<td>
</td>
</tr>

<tr>
<td>
</td>

<td>
</td>
<td>
    
	</td>


<td align="center">
    <input type="text" id="kom3" name="kom3" value="<?php if(isset($_POST['kom3'])){ echo htmlentities($_POST['kom3']);}?>">
</td>

<td>
</td>

<td>
</td>

<td>
</td>
<td>
</td>
</tr>
<tr style="height:3px;background-color:#DCDCDC">
<td style="width:100px;background-color:#00CED1; align:center">
	<h3 style="width:110px;text-align:center; margin-bottom:0px">إضافة بنطلون</h3>
</td>


<td align="center">
  	  <h3 style="text-align:center; margin-top:3px;margin-bottom:0px">طول
    
	</h3>
	</td>
	
	
<td align="center">
    <h3 style="text-align:center; margin-top:3px;margin-bottom:0px">حزام</h3>
	</td>
	
	<td align="center">
    <h3 style="text-align:center; margin-top:3px;margin-bottom:0px">قاعدة</h3>
    	</td>
	<td align="center">
    <h3 style="text-align:center; margin-top:3px;margin-bottom:0px">فخذ</h3>
	</td>
	<td align="center">
    <h3 style="text-align:center; margin-top:3px;margin-bottom:0px">ساق</h3>
	</td>
	<td align="center">
    <h3 style="width:115px;text-align:center; margin-top:3px;margin-bottom:0px">أسفل البنطلون</h3>
	</td>
	
<td>
</td>
<td>
</td>
</tr>
<tr>
  	<td>
  	</td>
	<td align="center">
            <input type="text" id="toolp" name="toolp" value="<?php if(isset($_POST['toolp'])){ echo htmlentities($_POST['toolp']);}?>">
</td>

<td align="center">
    <input type="text" id="hizam" name="hizam" value="<?php if(isset($_POST['hizam'])){ echo htmlentities($_POST['hizam']);}?>">
	</td>
	<td align="center">
            <input type="text" id="base" name="base" value="<?php if(isset($_POST['base'])){ echo htmlentities($_POST['base']);}?>">
	</td>
	<td>
            <input type="text" id="fa5th" name="fa5th" value="<?php if(isset($_POST['fa5th'])){ echo htmlentities($_POST['fa5th']);}?>">
	</td>
	<td align="center">
            <input type="text" id="sak" name="sak" value="<?php if(isset($_POST['sak'])){ echo htmlentities($_POST['sak']);}?>">
	</td>
	
	<td align="center">
            <input type="text" id="asfalbnt" name="asfalbnt" value="<?php if(isset($_POST['asfalbnt'])){ echo htmlentities($_POST['asfalbnt']);}?>">
	</td>
	
<td>
</td>
<td>
</td>

</tr>
<tr style="background-color:#DCDCDC">

<td style="background-color:#00CED1; align:center">
	<h3 style="text-align:center;  margin-top:3px;margin-bottom:0px">لوازم عسكرية</h3>
</td>
  <td align="center">
    <h3 style="text-align:center;  margin-top:3px;margin-bottom:0px">شعار   
</h3>
</td>
<td align="center">
    <h3 style="text-align:center;  margin-top:3px;margin-bottom:0px">رتبة</h3>
</td>
<td align="center">
    <h3 style="text-align:center;  margin-top:3px;margin-bottom:0px">سبلايت</h3>
	</td>
	
<td align="center">
    <h3 style="text-align:center;  margin-top:3px;margin-bottom:0px">قبوع</h3>
	</td>
		
	
<td align="center">
    <h3 style="text-align:center;  margin-top:3px;margin-bottom:0px">لوحة إسم</h3>
	</td>
	
<td align="center">
<h3 style="text-align:center;  margin-top:3px;margin-bottom:0px">ياقة</h3>
	</td>

    
	
<td>
</td>
<td>
</td>
</tr>
<tr>
<td>
</td>
<td>
    <input type="number" id="shi3arN" name="shi3arN" style="width:35px" onkeyup="doMath()" value="<?php if(isset($_POST['shi3arN'])){ echo htmlentities($_POST['shi3arN']);}?>">
    <input type="text" id="shi3ar" name="shi3ar" style="width:75px" onkeyup="doMath()" value="<?php if(isset($_POST['shi3ar'])){ echo htmlentities($_POST['shi3ar']);}?>">
</td>
	

<td align="center">
    <input type="number" id="rotbahN" name="rotbahN" style="width:35px" onkeyup="doMath()" value="<?php if(isset($_POST['rotbahN'])){ echo htmlentities($_POST['rotbahN']);}?>">
    <input type="text" id="rotbah" name="rotbah" style="width:80px" onkeyup="doMath()" value="<?php if(isset($_POST['rotbah'])){ echo htmlentities($_POST['rotbah']);}?>">
</td>
	
	
	<td align="center">
            <input type="number" id="splaytN" name="splaytN" style="width:35px" onkeyup="doMath()" value="<?php if(isset($_POST['splaytN'])){ echo htmlentities($_POST['splaytN']);}?>">
            <input type="text" id="splayt" name="splayt" style="width:80px" onkeyup="doMath()" value="<?php if(isset($_POST['splayt'])){ echo htmlentities($_POST['splayt']);}?>">
	</td>


	<td align="center">
            <input type="number" id="kabou3N" name="kabou3N" style="width:35px" onkeyup="doMath()" value="<?php if(isset($_POST['kabou3N'])){ echo htmlentities($_POST['kabou3N']);}?>">
            <input type="text" id="kabou3" name="kabou3" style="width:75px" onkeyup="doMath()" value="<?php if(isset($_POST['kabou3'])){ echo htmlentities($_POST['kabou3']);}?>">
	</td>


	<td align="center">
            <input type="number" id="law7aN" name="law7aN" style="width:35px" value="<?php if(isset($_POST['law7aN'])){ echo htmlentities($_POST['law7aN']);}?>" onkeyup="doMath()">
            <input type="text" id="law7a" name="law7a" style="width:80px" value="<?php if(isset($_POST['law7a'])){ echo htmlentities($_POST['law7a']);}?>" onkeyup="doMath()">
	</td>
	

	
	<td align="center">
            <input type="number" id="yakaN" name="yakaN" style="width:35px" value="<?php if(isset($_POST['yakaN'])){ echo htmlentities($_POST['yakaN']);}?>" onkeyup="doMath()">
            <input type="text" id="yaka" name="yaka" style="width:80px" value="<?php if(isset($_POST['yaka'])){ echo htmlentities($_POST['yaka']);}?>" onkeyup="doMath()">
	</td>

<td>
</td>
<td>
</td>
</tr>
<tr style="background-color:#DCDCDC; width:1000px">	
<td style="background-color:#F0FFF0">
</td>
	<td align="center">
    <h3 style="text-align:center; margin-top:3px;margin-bottom:0px">وينق</h3>
	</td>
	<td align="center">
    <h3 style="text-align:center; margin-top:3px;margin-bottom:0px">نوط</h3>
	</td>
	<td align="center">
    <h3 style="text-align:center; margin-top:3px;margin-bottom:0px">كرافتة</h3>
	</td>
	<td>
	</td>
	<td>
	</td>
	<td>
	</td>
	
	<td>
	</td>
	<td>
	</td>
</tr>
<tr>

<td>	
    
	</td>
	
	
	
	
	
	
	


	<td align="center">
            <input type="number" id="waynakN" name="waynakN" style="width:35px" value="<?php if(isset($_POST['waynakN'])){ echo htmlentities($_POST['waynakN']);}?>" onkeyup="doMath()">
    <input type="text" id="waynak" name="waynak" style="width:80px" value="<?php if(isset($_POST['waynak'])){ echo htmlentities($_POST['waynak']);}?>" onkeyup="doMath()">
	</td>
	
	
	
	<td align="center">
<input type="number" id="notahN" name="notahN" style="width:35px" value="<?php if(isset($_POST['notahN'])){ echo htmlentities($_POST['notahN']);}?>" onkeyup="doMath()">
<input type="text" id="notah" name="notah" style="width:80px" value="<?php if(isset($_POST['notah'])){ echo htmlentities($_POST['notah']);}?>" onkeyup="doMath()">
	</td>
	
<td align="center">
<input type="number" id="kravtaN" name="kravtaN" style="width:33px" value="<?php if(isset($_POST['kravtaN'])){ echo htmlentities($_POST['kravtaN']);}?>" onkeyup="doMath()">
<input type="text" id="kravta" name="kravta" style="width:80px" value="<?php if(isset($_POST['kravta'])){ echo htmlentities($_POST['kravta']);}?>" onkeyup="doMath()">
</td>
	<td>
	 
	</td>

	<td>
	</td>
	
	<td>
	</td>

	<td>
	</td>
	<td>
	</td>
</tr>
</table>
<table id="footer" style="margin-top:8px">

	
<tr>
	<td style="background-color:#F0FFF0;width:200px">
	</td>
	
	<td align="left" style="background-color:yellow; padding-left: 10px; padding-top: 0px;">
    <label for="lname"><h3 style="color:rgb(139, 0, 70);margin-top:7px;">الكمية</h3></label>
	</td>
	<td style="background-color:yellow">
    <input type="number" id="bQty" name="bQty" style="width:170px;" onkeyup="doMath()" value="<?php echo isset($_POST['bQty'])? $_POST['bQty']:''; ?>">
	<span class="error">* <?php echo $qtyErr;?></span>
	</td>
	
	<td align="left" style="background-color:rgb(0, 255, 202); padding-left: 20px; padding-top: 20px;">
    <label for="lname"><h3 style="color:rgb(139, 0, 70)">السعر</h3></label>
	</td>
	<td style="background-color:rgb(0, 255, 202)">
    <input type="text" id="price" name="price" value="<?php if(isset($_POST['price'])){ echo htmlentities($_POST['price']);}?>" onkeyup="doMath()">
	</td>
	
	<td style="background-color:rgb(0, 255, 202)">
	<div class="styled">
	<select name="myselectbox" style="text-align: center; text-align-last: center;">
	<option value="ريال سعودي"> ريال سعودي</option>
	<option value="ريال قطري"> ريال قطري </option>	
	<option value="درهم إماراتي"> درهم إماراتي </option>
	<option value="دينار بحريني "> دينار بحريني </option>	
	<option value="ريال عُماني"> ريال عُماني </option>
	<option value="دولار اميريكي"> دولار اميريكي </option>
	<option value="يورو">يورو</option>
	</select>
	</div>
	</td>
	<td align="left" style="background-color:rgb(0, 255, 202); padding-left: 20px; padding-top: 20px; margin-right:20px;">
	    <label><h3 style="color:rgb(139, 0, 70);margin-right:20px; text-alignment:center;width:140px;">ضريبة القيمة المضافة</h3></label>
	    </td>
	<td style="background-color:rgb(0, 255, 202)">
	<input type="text" id="VAT" name="VAT" value="<?php if(isset($_POST['VAT'])){ echo htmlentities($_POST['VAT']);}?>" onkeyup="doMath()"></input> 
	
	</td>
	<td align="left" style="background-color:rgb(0, 255, 202); padding-left: 20px; padding-top: 10px;">
	<label><h3 style="color:rgb(139, 0, 70);margin-right:2px; text-alignment:center;width:5px;">%</h3></label>
	    </td>
</tr>
<tr>
	<td>
	</td>
	<td align="left" style="background-color:yellow; padding-left: 10px; padding-top: 10px;width:200px;">
    <h3 style="color:rgb(139, 0, 70)">المبلغ الإجمالي</h3>
	</td>
<td style="background-color:yellow">
    <input type="number" id="overallP" name="overallP" style="width:170px;" readonly>
	</td>
	
	<td align="left" style="background-color:rgb(0, 255, 202); padding-left: 20px; padding-top: 10px;">
    <h3 style="color:rgb(139, 0, 70)">الواصل</h3>
	</td>
	<td style="background-color:rgb(0, 255, 202)">
    <input type="text" id="wasl" name="wasl" value="<?php if(isset($_POST['wasl'])){ echo htmlentities($_POST['wasl']);}?>" onkeyup="doMathsub()">
	</td>
	<td align="left" style="background-color:rgb(0, 255, 202); padding-left: 20px; padding-top: 10px;">
	    </td>
	<td align="left" style="background-color:rgb(0, 255, 202); padding-left: 20px; padding-top: 10px;">
    <h3 style="color:rgb(139, 0, 70)">الباقي</h3>
    
	</td>
	<td style="background-color:rgb(0, 255, 202)">
    <input type="text" id="baki" name="baki" readonly>
	</td>
	<td style="background-color:rgb(0, 255, 202)">
	</td>
	<td align="left">

	</td>
	<td>

	</td>
	
	


</tr>
</table>
<table id="footer2" style="margin-top:6px">

<tr style="background-color:#F0FFF0">
<td>
 
<script>
$(function() {
    $('input[name="type"]').on('click', function() {
        if ($(this).val() == 'من خارج المحل' || $(this).val() == 'من المحل بإستثناء') {
            $('#textboxes').show();
        }
        else {
            $('#textboxes').hide();
        }
    });
});
</script>
<table id="istethnaa" style="width:480px;height:20px;">
<tr>
<td><strong>القطع</strong></td>
<td>
من المحل<input type="radio" name="type" value="من المحل" checked="true"> 
</td>
<td>
من خارج المحل<input type="radio" name="type" value="من خارج المحل">
</td>

<td>
 من المحل بإستثناء <input type="radio" name="type" value="من المحل بإستثناء">
</td>
    </tr>
	</table>
<div id="textboxes" style="display: none">
نوع القطعة: <input type="text" hidden="true" name="naw3exp" style="width:130px;"/> <br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;عدد: <input type="text" hidden="true" name="numexp" style="width:130px;"/> <br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;السعر: <input type="text" hidden="true" name="pexp" style="margin-right:2px;width:130px;"/> 

</div>

	</td>
	<td align="left" style="margin-left:20px;">
    <h3 style="margin-top:20px;margin-left:20px;">ملاحظات</h3>
	</td>
	<td>
    <textarea id="comments" name="comments" cols="35" rows="4" style="margin-top:18px;">
    </textarea>
	</td>
	
	
	<td align="left">

	</td>
	<td>
<input type="checkbox" name="finished" value="finished"> <label style="font-size:20">جاهز</label><br>
  <input type="checkbox" name="received" value="received"><label style="font-size:20"> تم التسليم</label><br>

	</td>
	
	<td>

	</td>
	
<td>

	</td>

</tr>
<tr>
<td>

</td>
</tr>
<tr>
<td>
</td>



	<td>
	    <input type="submit" name="addBadlah" id="addBadlah" value="حفظ البيانات" onclick="sendVal()">
	    <input type="hidden" name="value" value="<?php if(isset($value)) echo $value; ?>">

	</td> 

 
	<td>
    <input style="background-color:darkgrey; height:48px; width:100px;font-size: 22px;" type="submit" formaction="voucher.php" value="الفاتورة"></input>
    
    <input style="background-color:darkgrey; height:48px; width:100px;font-size:22px" type="submit" formaction="makasat.php" value="المقاسات"></input>
    </td>
    <td>
    
    </td>
    <td>
    
    </td>
    <td>
	
	</td>
 
 </tr>  
    
  </table>

</table>
</form>
</div>

<script>
  function GetOptionSelected(){

  var selectBox = document.getElementById("naw3al3amal"),
      option = selectBox.options[selectBox.selectedIndex];

  document.getElementById("optionSelected").value = option.text;
  
}
window.onload=GetOptionSelected;
</script>

<script>
 function  doMath() { 
       var nValue1, nValue2, nValue3, nValue4, nValue5, nValue6, nValue7, nValue8, nValue9; var amount;
       var price1, price2, price3, price4, price5, price6, price7, price8, price9;
       var badlahP, badlahQ;
       
       nValue1 = document.getElementById("shi3arN").value;
       price1=document.getElementById("shi3ar").value;
       
        nValue2 = document.getElementById("rotbahN").value;
       price2=document.getElementById("rotbah").value;


 nValue3 = document.getElementById("splaytN").value;
       price3=document.getElementById("splayt").value;
       
       
 nValue4 = document.getElementById("kabou3N").value;
       price4=document.getElementById("kabou3").value;


 nValue5 = document.getElementById("law7aN").value;
       price5=document.getElementById("law7a").value;
       
       
 nValue6 = document.getElementById("yakaN").value;
       price6=document.getElementById("yaka").value;


 nValue7 = document.getElementById("waynakN").value;
       price7=document.getElementById("waynak").value;
       
       
 nValue8 = document.getElementById("notahN").value;
       price8=document.getElementById("notah").value;


 nValue9 = document.getElementById("kravtaN").value;
       price9=document.getElementById("kravta").value;
price=document.getElementById("price").value;
badlahQ=document.getElementById("bQty").value;
badlahP=price*badlahQ;
       amount=(nValue1*price1 + nValue2*price2 + nValue3*price3 + nValue4*price4 + nValue5*price5 + nValue6*price6 + nValue7*price7 + nValue8*price8 + nValue9*price9 + badlahP);
       
       vat_rate=document.getElementById("VAT").value;

 

var vat = amount/100*vat_rate;

var total = amount; 

var grandtotal = total + vat;

 

       document.getElementById("overallP").value=grandtotal;
    }
</script>
 <script>
 function  doMathsub() { 
       var inAmount; var amount;
       var price;
	   price=document.getElementById("overallP").value;
       inAmount = document.getElementById("wasl").value;
       amount=(price-inAmount);
       document.getElementById("baki").value=amount ;
    }
	</script>
	<script>
	$('#datepicker').on('change', function() {
		console.log('hi');
 console.log($('#datepicker').val());
});
	
	</script>
	<script>
	
		console.log('hi3');


	
	</script>
</body>
</html>