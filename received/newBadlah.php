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
	height: 40px;

}
table#middle{
border-collapse: collapse;
    width: 1233px;
	height: 120px;
}
table#footer {
border-collapse: collapse;
    width: 1233px;
	height: 60px;

}
table#footer2 {
border-collapse: collapse;
    width: 1233px;
	height: 60px;

}
table#middle td{width:130px;}
tr{height:5px;}
th, td {
    
    padding: 6px;
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
    appearance: button;

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
  <title>jQuery UI Datepicker - Default functionality</title>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
 
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#datepicker" ).datepicker();
  } );
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


   <form action="badlahPhp.php" method="POST">
   <h3 style="align:center">البلد العملاق للخياطة العسكرية</h3>
   



<table style="width:1340px">
<table id="header">
<tr>
<td>
</td>
<td>
</td>

<td style="margin-left:0px;">
<h3 style="color:#DCDCDC; text-align:left;margin-top:5px;margin-bottom:0px;margin-left:0px;float:left">رقم الفاتورة:
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
onClick="document.location.href='mainPage.html'" />
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
<input type="text" id="clientname" style="width:190px" name="clientname" required>

</td>

<td>

</td>
<td>
</td>
<td>
</td>

<td>
<h2 style="margin-top:5px">تاريخ التسليم:</h2>
</td>
<td>
<input type="text" id="datepicker" name="datepicker" style="width:190px" required>
</td>

</tr>
<tr style="background-color:#F0FFF0">

<td>
<h2 style="margin-top:1px">رقم الهاتف</h2>
</td>
<td>
<input type="text" id="mobilenum" style="width:190px" name="mobilenum" required></input>
</td>

<td>

</td>
<td>
</td>

<td>
</td>
<td>
<h2 style="margin-top:5px; margin-right:25px">نوع العمل:</h2>
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

echo '<select style=width:190px name=naw3al3amal id=naw3al3amal onchange="GetOptionSelected()" required>';
echo "<option value=''>نوع البدلة</option>";
while ($row = mysqli_fetch_array($result)){
    echo "<option value='".$row['badlahT_ID']."'>" . $row['badlahType'] . "</option>";
}
echo "</select>";

?>
<input type="hidden" name="optionSelected" id="optionSelected" value="0">
</td>

</tr>

</table>
<table id="middle">
<tr style="width:100%; height:5px;background-color:#DCDCDC">
<td style="background-color:#00CED1; align:center">
	<h2 style="text-align:center; margin-top:5px;margin-bottom:1px">قميص</h2>
</td>
 	 <td align="center">
 	   <label><h2 style="text-align:center;  margin-top:5px;margin-bottom:1px">طول
</h2></label>
	</td>
	
<td align="center">
    <h2 style="text-align:center; margin-top:5px;margin-bottom:1px">كتف</h2>
	</td>
	
	

<td align="center">	
    <h2 style="text-align:center; margin-top:5px;margin-bottom:1px">كم</h2>
	
	</td>
	
	
<td align="center">
    <h2 style="text-align:center; margin-top:5px;margin-bottom:1px">صدر</h2>
	</td>
	
	
<td align="center">
 <h2 style="text-align:center; margin-top:5px;margin-bottom:1px">بطن</h2>
	</td>
	
	<td align="center">
	<h2 style="text-align:center; margin-top:5px;margin-bottom:1px">أسفل</h2>
	</td>
<td align="center">
	<h2 style="text-align:center;  margin-top:5px;margin-bottom:1px">رقبة</h2>
	</td>
	<td align="center">
	<h2 style="text-align:center;  margin-top:5px;margin-bottom:1px">القطاع</h2>
	</td>
	
</tr>
<tr>
<td>
</td>
<td align="center">
	<input type="text" id="tool" name="tool">
	</td>
	<td align="center">
    <input type="text" id="katef" name="katef">
	</td>
	<td align="center">
    <input type="text" id="kom1" name="kom1">
	</td>
	<td align="center">
    <input type="text" id="sadr" name="sadr">
	</td>
	
	<td align="center"> 
    <input type="text" id="batn" name="batn">
	</td>
	<td align="center">
    <input type="text" id="asfal" name="asfal">
	</td>
	<td align="center">
    <input type="text" id="raqba" name="raqba">
	</td>
	<td align="center">
    <input type="text" id="qita3" name="qita3">
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
<input type="text" id="kom2" name="kom2">
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
<input type="text" id="kom3" name="kom3">
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
<tr style="height:5px;background-color:#DCDCDC">
<td style="width:100px;background-color:#00CED1; align:center">
	<h2 style="width:110px;text-align:center; margin-bottom:0px">إضافة بنطلون</h2>
</td>


<td align="center">
  	  <h2 style="text-align:center; margin-top:5px;margin-bottom:1px">طول
    
	</h2>
	</td>
	
	
<td align="center">
    <h2 style="text-align:center; margin-top:5px;margin-bottom:1px">حزام</h2>
	</td>
	
	<td align="center">
    <h2 style="text-align:center; margin-top:5px;margin-bottom:1px">قاعدة</h2>
    	</td>
	<td align="center">
    <h2 style="text-align:center; margin-top:5px;margin-bottom:1px">فخذ</h2>
	</td>
	<td align="center">
    <h2 style="text-align:center; margin-top:5px;margin-bottom:1px">ساق</h2>
	</td>
	<td align="center">
    <h2 style="width:115px;text-align:center; margin-top:5px;margin-bottom:1px">أسفل البنطلون</h2>
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
<input type="text" id="toolp" name="toolp">
</td>

<td align="center">
    <input type="text" id="hizam" name="hizam">
	</td>
	<td align="center">
    <input type="text" id="base" name="base">
	</td>
	<td>
    <input type="text" id="fa5th" name="fa5th">
	</td>
	<td align="center">
    <input type="text" id="sak" name="sak">
	</td>
	
	<td align="center">
    <input type="text" id="asfalbnt" name="asfalbnt">
	</td>
	
<td>
</td>
<td>
</td>

</tr>
<tr style="background-color:#DCDCDC">

<td style="background-color:#00CED1; align:center">
	<h2 style="text-align:center;  margin-top:5px;margin-bottom:1px">لوازم عسكرية</h2>
</td>
  <td align="center">
    <h2 style="text-align:center;  margin-top:5px;margin-bottom:1px">شعار   
</h2>
</td>
<td align="center">
    <h2 style="text-align:center;  margin-top:5px;margin-bottom:1px">رتبة</h2>
</td>
<td align="center">
    <h2 style="text-align:center;  margin-top:5px;margin-bottom:1px">سبلايت</h2>
	</td>
	
<td align="center">
    <h2 style="text-align:center;  margin-top:5px;margin-bottom:1px">قبوع</h2>
	</td>
		
	
<td align="center">
    <h2 style="text-align:center;  margin-top:5px;margin-bottom:1px">لوحة إسم</h2>
	</td>
	
<td align="center">
<h2 style="text-align:center;  margin-top:5px;margin-bottom:1px">ياقة</h2>
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
<input type="number" id="shi3arN" name="shi3arN" style="width:35px" onkeyup="doMath()">
<input type="text" id="shi3ar" name="shi3ar" style="width:75px" onkeyup="doMath()">
</td>
	

<td align="center">
<input type="number" id="rotbahN" name="rotbahN" style="width:35px" onkeyup="doMath()">
<input type="text" id="rotbah" name="rotbah" style="width:80px" onkeyup="doMath()">
</td>
	
	
	<td align="center">
    <input type="number" id="splaytN" name="splaytN" style="width:35px" onkeyup="doMath()">
    <input type="text" id="splayt" name="splayt" style="width:80px" onkeyup="doMath()">
	</td>


	<td align="center">
    <input type="number" id="kabou3N" name="kabou3N" style="width:35px" onkeyup="doMath()">
    <input type="text" id="kabou3" name="kabou3" style="width:75px" onkeyup="doMath()">
	</td>


	<td align="center">
    <input type="number" id="law7aN" name="law7aN" style="width:35px" onkeyup="doMath()">
    <input type="text" id="law7a" name="law7a" style="width:80px" onkeyup="doMath()">
	</td>
	

	
	<td align="center">
    <input type="number" id="yakaN" name="yakaN" style="width:35px" onkeyup="doMath()">
     <input type="text" id="yaka" name="yaka" style="width:80px" onkeyup="doMath()">
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
    <h2 style="text-align:center; margin-top:5px;margin-bottom:1px">وينق</h2>
	</td>
	<td align="center">
    <h2 style="text-align:center; margin-top:5px;margin-bottom:1px">نوط</h2>
	</td>
	<td align="center">
    <h2 style="text-align:center; margin-top:5px;margin-bottom:1px">كرافتة</h2>
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
    <input type="number" id="waynakN" name="waynakN" style="width:35px" onkeyup="doMath()">
    <input type="text" id="waynak" name="waynak" style="width:80px" onkeyup="doMath()">
	</td>
	
	
	
	<td align="center">
<input type="number" id="notahN" name="notahN" style="width:35px" onkeyup="doMath()">
<input type="text" id="notah" name="notah" style="width:80px" onkeyup="doMath()">
	</td>
	
<td align="center">
<input type="number" id="kravtaN" name="kravtaN" style="width:33px" onkeyup="doMath()">
<input type="text" id="kravta" name="kravta" style="width:80px" onkeyup="doMath()">
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
	
	<td align="left" style="background-color:yellow; padding-left: 20px; padding-top: 20px;">
    <label for="lname"><h2 style="color:rgb(139, 0, 70)">الكمية</h2></label>
	</td>
	<td style="background-color:yellow">
    <input type="number" id="bQty" name="bQty" style="width:170px;" onkeyup="doMath()">
	</td>
	
	<td align="left" style="background-color:rgb(0, 255, 202); padding-left: 20px; padding-top: 20px;">
    <label for="lname"><h2 style="color:rgb(139, 0, 70)">السعر</h2></label>
	</td>
	<td style="background-color:rgb(0, 255, 202)">
    <input type="text" id="price" name="price" onkeyup="doMath()">
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
	<option value="يورو>"يورو</option>
	</select>
	</div>
	</td>
	<td align="left" style="background-color:rgb(0, 255, 202); padding-left: 20px; padding-top: 20px; margin-right:20px;">
	    <label><h3 style="color:rgb(139, 0, 70);margin-right:20px; text-alignment:center;width:140px;">ضريبة القيمة المضافة</h3></label>
	    </td>
	<td style="background-color:rgb(0, 255, 202)">
	<input type="text" id="VAT" name="VAT"  onkeyup="doMath()"></input> 
	
	</td>
	<td align="left" style="background-color:rgb(0, 255, 202); padding-left: 20px; padding-top: 10px;">
	<label><h3 style="color:rgb(139, 0, 70);margin-right:2px; text-alignment:center;width:5px;">%</h3></label>
	    </td>
</tr>
<tr>
	<td>
	</td>
	<td align="left" style="background-color:yellow; padding-left: 20px; padding-top: 10px;">
    <h2 style="color:rgb(139, 0, 70)">المبلغ الإجمالي</h2>
	</td>
<td style="background-color:yellow">
    <input type="number" id="overallP" name="overallP" style="width:170px;" readonly>
	</td>
	
	<td align="left" style="background-color:rgb(0, 255, 202); padding-left: 20px; padding-top: 10px;">
    <h2 style="color:rgb(139, 0, 70)">الواصل</h2>
	</td>
	<td style="background-color:rgb(0, 255, 202)">
    <input type="text" id="wasl" name="wasl" onkeyup="doMathsub()">
	</td>
	<td align="left" style="background-color:rgb(0, 255, 202); padding-left: 20px; padding-top: 10px;">
	    </td>
	<td align="left" style="background-color:rgb(0, 255, 202); padding-left: 20px; padding-top: 10px;">
    <h2 style="color:rgb(139, 0, 70)">الباقي</h2>
    
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
</td>
	<td align="left">
    <h2>ملاحظات</h2>
	</td>
	<td>
    <textarea id="comments" name="comments" cols="40" rows="5">
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



	<td>
	    <input type="submit" value="حفظ البيانات" onclick="sendVal()">
	    <input type="hidden" name="value" value="<?php echo $value; ?>">

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

</body>
</html>