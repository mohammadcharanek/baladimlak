<html>
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

 
 <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>تقارير العمولة</title>
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
$('.datepicker').on('click', function(e) {
   e.preventDefault();
   $(this).attr("autocomplete", "off");  
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
  $( function() {
    $( "#datepicker2" ).datepicker();
  } );
  </script>
  <style>
  input[type=submit] {
    width: 70px;
    background-color: silver;
    color: white;
    padding: 5px 10px;
    margin: 4px 0;
    border: none;
    border-radius: 2px;
    cursor: pointer;
    font-weight:bold;
}
input[type=submit]:hover {
    background-color: #45a049;
}
input[type=button] {
    width: 145px;
    background-color: green;
    color: white;
    padding: 5px 10px;
    margin: 12px 90px 4px 4px;
    border: none;
    border-radius: 2px;
    cursor: pointer;
    font-weight:bold;
    font-size:21;
    
}

input[type=button]:hover {
    background-color: #45a049;
}
button {
    width: 90px;
    background-color: silver;
    color: white;
    padding: 5px 10px;
    margin: 8px 0px 0px 0px;
    border: none;
    border-radius: 2px;
    cursor: pointer;
    font-weight:bold;
    font-size:15px;
}
button:hover {
    background-color: blue;
}
  </style>
</head>
<body dir="rtl" style="background-color:rgb(245, 247, 243)">

<form action="omolaReports.php" method="post">
<table>
<tr>
<td>
<fieldset>
<legend>إختر حسب التاريخ</legend>
<input type="text" id="datepicker" style="width:150px" name="datepicker" value="من.."></input>



<input  type="text" id="datepicker2" style="width:150px" name="datepicker2" value="الى.."></input>

<strong style="width:90px;font-size:20px">النسبة:</strong>
<input type="text" id="nesbah" style="width:110px" name="nesbah" value="30"></input>
<label>
    %
    </label>
    
<br>
<hr>
<h3 style="width:150px;color:black;margin-top:8px;text-align:center;float:right">إسم العامل</h3>
<?php
$host='localhost'; // Host name
$username='root'; // Mysql username
$password=''; // Mysql password
$db_name='gicontra_sewingFactory'; // Database name
$tbl_name='badlah'; // Table name
$port=3306;


/* check connection */
error_reporting(E_ALL & ~E_NOTICE &~E_WARNING); 
  $connection= MySqli_connect($host, $username, $password)or die("cannot connect");
  MySqli_select_db($connection, $db_name)or die("cannot select DB");

    
mysqli_query($connection, "SET NAMES 'utf8'"); 
mysqli_query($connection, 'SET CHARACTER SET utf8'); 	



$sql = "SELECT wName FROM workerTB";
$result = mysqli_query($connection, $sql);

echo '<select style="width:150px;margin-right:4px" name="workerName" id="workerName">';
echo "<option value=''>إسم العامل</option>";
while ($row = mysqli_fetch_array($result)) {
    echo "<option value='" . $row['wName'] . "'>" . $row['wName'] . "</option>";
}
echo "</select>";

?>
<strong style="margin-right:10px">الكل</strong>
<input type="checkbox" value="everyThing" name="everyThing"></input>


<input type="submit" value="إذهب"style="margin-right:10px" name="value1"></input>
</fieldset>
</td>

<td>
<h3>  &nbsp &nbsp &nbsp</h3>
</td>
<td>


</td>


</td>
<td>
<h1> &nbsp &nbsp</h1>
</td>
<td>
<button onclick="myFunction()" style="align:left">إطبع الصفحة</button>
</td>
<td>
<input type="button" value="الصفحة الرئيسية" class="homebutton" id="btnHome" 
onClick="document.location.href='mainPage.php'" />

    </td>
</tr>
</table>
</form>


<script>
function myFunction() {
    window.print();
}
</script>
<?php
    if(isset($_POST['value1'])){
		if(isset($_POST['everyThing'])){
		

		$sql = 'SELECT taslehID, workerName, clientName, phoneNum, taslehType, tPrice, dateOfCompletion from addTasleh  WHERE dateOfCompletion BETWEEN "'.date('Y-m-d',  strtotime($_POST["datepicker"])).'" AND "'.date('Y-m-d',  strtotime($_POST["datepicker2"])).';"';
		$sql2 ='SELECT omola.omola_ID, omola.omola, omola.qty, omola.workerName, omola.badlahType, badlah.clientname, badlah.mobilenum, badlah.price, badlah.wasl, badlah.dateOfCompletion from omola INNER JOIN badlah ON badlah.badlah_id=omola.badlah_id AND badlah.dateOfCompletion BETWEEN "'.date('Y-m-d',  strtotime($_POST["datepicker"])).'" AND "'.date('Y-m-d',  strtotime($_POST["datepicker2"])).'"';

    $retval = mysqli_query($connection, $sql);
    echo '<br>';
    	
 echo '<br>';
 echo '<div align="right" style="margin-right:80px;">';
            echo '<table style="width:480px">';
            echo '<tr>';
            echo '<td>';
            echo '<strong style="font-size:19">تقرير التصليح</strong>';
            echo '<br><br>';
            echo '</td>';
            echo '</tr>';
            
            echo '<tr>';
            echo '<td style="width:100px;">';
	echo '<strong style="font-size:16;color:red;">من تاريخ: </strong>';
	echo '<br><br>';
	echo '</td>';
	echo '<td style="width:100px;">';
	echo '<input type="text" style="width:100px;" value="'.date('Y-m-d',  strtotime($_POST["datepicker"])).'"></input>';
	echo '</td>';
	echo '<td style="width:100px;">';
	echo '<strong style="font-size:16;width:90px;text-align:center;color:red;">الى تاريخ: </strong>';
	echo '</td>';
	echo '<td style="width:100px;">';
	echo '<input type="text" style="width:90px;" value="'.date('Y-m-d',  strtotime($_POST["datepicker2"])).'"></input>';
	echo '</td>';
	echo '</tr>';
	echo '</table>';
	echo '</div>';
	
 echo '<div align="center">';
            echo '<table style="width:1160px">';
        
            echo '<tr>';
            
echo '<td style="width:90px; align:right">';
echo '<strong style="width:90px;font-size:20px;align:right">رقم الفاتورة</strong>';

echo '</td>';
echo '<td style="width:70px;">';

echo '<strong style="width:70px;font-size:20px"> الرقم   </strong>';

echo '</td>';

            echo '<td style="width:100px; align:right">';
            echo '<strong style="width:100px;font-size:20px">إسم العامل</strong>';
            echo '</td>';
            echo '<td style="width:100px; align:right">';
            echo '<strong style="width:100px;font-size:20px">إسم الزبون</strong>';
            echo '</td>';
            echo '<td style="width:100px;">';
            echo '<strong style="width:100px;font-size:18px">رقم الهاتف</strong>';
            echo '</td>';
            
            echo '<td style="width:110px;">';
            
            echo '<strong style="width:110px;font-size:18px">نوع التصليح</strong>';
            echo '</td>';
            echo '<td style="width:100px;">';
            echo '<strong style="width:100px;font-size:20px">السعر</strong>';
            echo '</td>';
            echo '<td style="width:90px;">';
            echo '<strong style="width:90px;font-size:20px">حصة العامل</strong>';
            echo '</td>';
            echo '<td style="width:90px;">';
            echo '<strong style="width:90px;font-size:19px;align:right;margin-left:20px;">تاريخ التسليم</strong>';
            echo '</td>';
            
            echo '</tr>';
           echo '</table>';
           echo '</div>';
$count=1;
$totalOmolaFinal=0;
	while($row = mysqli_fetch_array($retval))
	{
		echo '<div align="center">';
            echo '<table style="width:1160px">';
    
            echo '<tr>';
echo '<td style="width:90px;">';


echo '<strong style="width:90px;font-size:20px;color:red;">' . $row['taslehID'] . ' </strong>';
echo '</td>';
echo '<td style="width:70px;">';
echo '<strong style="width:70px;font-size:20px;">' . $count. ' </strong>';
echo '</td>';

            echo '<td style="width:100px;">';
            echo '<input type=text name=clientname style=width:100px value="'.$row['workerName'].'"></input></td>';
            echo '<td style="width:100px;">';
            echo '<input type=text name=clientname style=width:100px value="'.$row['clientName'].'"></input></td>';
            echo '<td style="width:100px;">';
            echo "<input type=text name = mobilenum style=width:100px value=".$row['phoneNum']."></input>";
            echo '</td>';
            echo '<td style="width:110px;">';
            echo '<input type="text" id="naw3al3amal" style="width:110px" name="naw3al3amal" value="'.$row['taslehType'].'"></input>';
            echo '</td>';
            echo '<td style="width:100px;">';
            echo '<input type="text" id="naw3al3amal" style="width:100px" name="naw3al3amal" value="'.$row['tPrice'].'"></input>';
            echo '</td>';
            echo '<td style="width:100px;">';
            $amlHossa;
            $p=$row['tPrice'];
            $ne=$_POST['nesbah'];
            $amlHossa=  $p*$ne /100;
            $totalOmolaFinal+=$amlHossa;
            echo '<input type="text" id="naw3al3amal" style="width:100px" name="naw3al3amal" value="'.$amlHossa.'"></input>';
            echo '</td>';
            echo '<td style="width:90px;">';
            echo '<input type="text" id="datepicker" name=datepicker style="width:90px" value="'.$row['dateOfCompletion'].'"></input>';
            echo '</td>';
            echo '</tr>';
            echo '</table>';
	    echo '<hr>';
	    $count++;
	}
        
       #Get Omola For All Workers
	   $retval2 = mysqli_query($connection, $sql2);
       echo '<br>';
       
       echo '<br>';
      echo '<div align="right" style="margin-right:80px;">';
            echo '<table style="width:480px">';
       echo '<tr>';
            echo '<td style="width:100px;">';
            echo '<strong style="font-size:19px;">تقرير العمولة</strong>';
            echo '<br><br>';
            echo '</td>';
            
            echo '</tr>';
            
            echo '<tr>';
            echo '<td style="width:100px;">';
	echo '<strong style="font-size:16;color:red;">من تاريخ: </strong>';
	echo '<br><br>';
	echo '</td>';
	echo '<td style="width:100px;">';
	echo '<input type="text" style="width:100px;" value="'.date('Y-m-d',  strtotime($_POST["datepicker"])).'"></input>';
	echo '</td>';
	echo '<td style="width:100px;">';
	echo '<strong style="font-size:16;width:90px;text-align:center;color:red;">الى تاريخ: </strong>';
	echo '</td>';
	echo '<td style="width:100px;">';
	echo '<input type="text" style="width:90px;" value="'.date('Y-m-d',  strtotime($_POST["datepicker2"])).'"></input>';
	echo '</td>';
	echo '</tr>';
	echo '</table';
	echo '</div>';
	echo '<div align="center">';
            echo '<table style="width:1170px">';
       
            echo '<tr>';
            

echo '<td style="width:90px; align:right">';
echo '<strong style="width:90px;font-size:20px">رقم الفاتورة</strong>';

echo '</td>';

echo '<td style="width:70px;">';
echo '<strong style="width:70px;font-size:20px"> الرقم   </strong>';
echo '</td>';

            echo '<td style="width:100px; align:right">';
            echo '<strong style="width:100px;font-size:20px">إسم العامل</strong>';
            echo '</td>';
echo '<td style="width:100px; align:right">';
            echo '<strong style="width:100px;font-size:20px">إسم الزبون</strong>';
            echo '</td>';
            echo '<td style="width:100px;">';
            echo '<strong style="width:100px;font-size:18px">رقم الهاتف</strong>';
            echo '</td>';
            echo '<td style="width:110px;">';
            echo '<strong style="width:110px;font-size:18px">نوع العمل</strong>';
            echo '</td>';
            echo '<td style="width:100px;">';
            echo '<strong style="width:100px;font-size:18px">السعر</strong>';
            echo '</td>';
            echo '<td style="width:100px;">';
            echo '<strong style="width:100px;font-size:20px">الكمية</strong>';
            echo '</td>';
            echo '<td style="width:100px;">';
            echo '<strong style="width:100px;font-size:20px">العمولة</strong>';
            echo '</td>';
            echo '<td style="width:90px;">';
            echo '<strong style="width:90px;font-size:19px">تاريخ التسليم</strong>';
            echo '</td>';
            
            echo '<td style="width:110px;">';
            echo '<strong style="width:110px;font-size:19px">مجموع العمولة</strong>';
            echo '</td>';
            echo '</tr>';
            echo '</table>';
            echo '</div>';
    $count2=1;
    
    	while($row = mysqli_fetch_array($retval2))
    	{
            echo '<div align="center">';
            echo '<table style="width:1170px">';
            echo '<tr>';
            
           
echo '<td style="width:90px;">';


echo '<strong style="width:90px;font-size:20px;color:red;">' . $row['omola_ID'] . ' </strong>';
echo '</td>';
echo '<td style="width:70px;">';
echo '<strong style="width:70px;font-size:20px;">' . $count2. ' </strong>';
echo '</td>';
            echo '<td style="width:100px;">';
            echo '<input type=text name=clientname style=width:100px value="' . $row['workerName'] . '" </td>';
            echo '<td style="width:100px;">';
            echo '<input type=text name=clientname style=width:100px value="' . $row['clientname'] . '" </td>';
            echo '<td style="width:100px;">';
            echo "<input type=text name = mobilenum style=width:100px value=" . $row['mobilenum'] . " ></td>";
            echo '</td>';
            echo '<td style="width:110px;">';
            echo '<input type=text name = mobilenum style=width:110px value="'.$row['badlahType'].'"></td>';
            echo '</td>';
            echo '<td style="width:100px;">';
            echo '<input type="text" id="naw3al3amal" style="width:100px" name="naw3al3amal" value="'.$row['price'].'"></input>';
            echo '</td>';
            echo '<td style="width:100px;">';
            echo '<input type="text" id="naw3al3amal" style="width:100px" name="naw3al3amal" value="'.$row['qty'].'"></input>';
            echo '</td>';
            echo '<td style="width:100px;">';
			$omolaNaw3=$row['omola']/$row['qty'];
            echo '<input type="text" id="naw3al3amal" style="width:100px" name="naw3al3amal" value="'.$omolaNaw3.'"></input>';
            echo '</td>';
            echo '<td style="width:90px;">';
            echo '<input type="text" id="datepicker" name=datepicker style="width:90px" value="'.$row['dateOfCompletion'].'">';
            echo '</td>';
            echo '<td style="width:100px;">';
            $totalOmola=$row['omola'];
            $totalOmolaFinal+=$totalOmola;
			
		
            echo '<input type="text" id="naw3al3amal" style="width:100px" name="naw3al3amal" value="'.$totalOmola.'"></input>';
            echo '</td>';
            
            echo '</tr>';
            echo '</table>';
            echo '</div>';
            $count2++;
	}
	echo '<div align="center">';
            echo '<table style="width:1170px">';
            echo '<tr>';
            
           
echo '<td style="width:90px;">';
echo '</td>';

echo '<td style="width:70px;">';

echo '</td>';
            echo '<td style="width:100px;">';
            echo '</td>';
            echo '<td style="width:100px;">';
            echo '</td>';
            echo '<td style="width:100px;">';
            echo '</td>';
            echo '<td style="width:110px;">';
            echo '</td>';
            echo '<td style="width:100px;">';
            echo '</td>';
            echo '<td style="width:100px;">';
            echo '</td>';
            echo '<td style="width:100px;">';
            echo '</td>';
            echo '<td style="width:90px;">';
            echo '</td>';
            echo '<td style="width:100px;">';
            echo '<input type="text" id="naw3al3amal" style="width:100px;border: 2px solid red; border-radius: 4px;" name="naw3al3amal" value="'.$totalOmolaFinal.'"></input>';
            echo '</td>';
            
            echo '</tr>';
            echo '</table';
echo '</div>';
        
		}//.everyThing
	else
	if(isset($_POST['workerName']))
	{
	    $sql = 'SELECT taslehID, workerName, clientName, phoneNum, taslehType, tPrice, dateOfCompletion from addTasleh  WHERE workerName="'.$_POST['workerName'].'" AND dateOfCompletion BETWEEN "'.date('Y-m-d',  strtotime($_POST["datepicker"])).'" AND "'.date('Y-m-d',  strtotime($_POST["datepicker2"])).';"';
	    $sql2 ='SELECT omola.omola_ID, omola.omola, omola.qty, omola.workerName, omola.badlahType, badlah.clientname, badlah.mobilenum, badlah.price, badlah.wasl, badlah.dateOfCompletion from omola INNER JOIN badlah ON badlah.badlah_id=omola.badlah_id AND workerName="'.$_POST['workerName'].'" AND badlah.dateOfCompletion BETWEEN "'.date('Y-m-d',  strtotime($_POST["datepicker"])).'" AND "'.date('Y-m-d',  strtotime($_POST["datepicker2"])).'"';
    $retval = mysqli_query($connection, $sql);
    	 echo '<br>';
    	
 echo '<br>';
 echo '<div align="right" style="margin-right:80px;">';
            echo '<table style="width:480px">';
            echo '<tr>';
            echo '<td>';
            echo '<strong style="font-size:19">تقرير التصليح</strong>';
            echo '<br><br>';
            echo '</td>';
            echo '</tr>';
            
            echo '<tr>';
            echo '<td style="width:100px;">';
	echo '<strong style="font-size:16;color:red;">من تاريخ: </strong>';
	echo '</td>';
	echo '<td style="width:100px;">';
	echo '<input type="text" style="width:100px;" value="'.date('Y-m-d',  strtotime($_POST["datepicker"])).'"></input>';
	echo '</td>';
	echo '<td style="width:100px;">';
	echo '<strong style="font-size:16;width:90px;text-align:center;color:red;">الى تاريخ: </strong>';
	echo '</td>';
	echo '<td style="width:100px;">';
	echo '<input type="text" style="width:90px;" value="'.date('Y-m-d',  strtotime($_POST["datepicker2"])).'"></input>';
	echo '</td>';
	echo '</tr>';
		echo '<tr>';
	echo '<td>';
	echo '<br>';
	echo '</td>';
	echo '</tr>';
	echo '</table>';
	echo '</div>';
	
 echo '<div align="center">';
            echo '<table style="width:1160px">';
   
        echo '<tr>';
        
echo '<td style="width:80px; align:right">';
echo '<strong style="width:80px;font-size:20px">رقم الفاتورة</strong>';

echo '</td>';
echo '<td style="width:60px;">';
echo '<strong style="width:60px;font-size:20px">الرقم</strong>';
echo '</td>';
echo '<td style="width:100px; align:right">';
        echo '<strong style="width:100px;font-size:20px">إسم العامل</strong>';
        echo '</td>';
        echo '<td style="width:100px; align:right">';
        echo '<strong style="width:100px;font-size:20px">إسم الزبون</strong>';
        echo '</td>';
        echo '<td style="width:100px;">';
        echo '<strong style="width:100px;font-size:18px">رقم الهاتف</strong>';
        echo '</td>';
        
        echo '<td style="width:100px;">';
        echo '<strong style="width:100px;font-size:18px">نوع التصليح</strong>';
        echo '</td>';
       
        echo '<td style="width:80px;">';
        echo '<strong style="width:80px;font-size:20px">السعر</strong>';
        echo '</td>';
        
        echo '<td style="width:90px;">';
        echo '<strong style="width:90px;font-size:20px">حصة العامل</strong>';
        echo '</td>';
        
        echo '<td style="width:90px;">';
        echo '<strong style="width:90px;font-size:19px;align:right;margin-left:20px">تاريخ التسليم</strong>';
        echo '</td>';
       echo '</tr>';
       echo '</table>';
       echo '</div>';
	$count3=1;
	$totalOmolaFinal2=0;
	while($row = mysqli_fetch_array($retval))
	{
		
        echo '<div align="center">';
        
        echo '<table style="width:1160px">';
        echo '<tr>';
        
            

echo '<td style="width:90px;">';


echo '<strong style="width:90px;font-size:20px;color:red;">' . $row['taslehID'] . ' </strong>';
echo '</td>';
echo '<td style="width:70px;">';
echo '<strong style="width:70px;font-size:20px;">' . $count3. ' </strong>';
echo '</td>';

        echo '<td style="width:100px;">';
        echo '<input type=text name=clientname style=width:100px value="'.$row['workerName'].'"></input></td>';
        echo '<td style="width:100px;">';
        echo '<input type=text name=clientname style=width:100px value="'.$row['clientName'].'"></input></td>';
        echo '<td style="width:100px;">';
        echo "<input type=text name = mobilenum style=width:100px value=".$row['phoneNum']."></input>";
        echo '</td>';
        
        echo '<td style="width:110px;">';
        echo '<input type="text" id="naw3al3amal" style="width:110px" name="naw3al3amal" value="'.$row['taslehType'].'"></input>';
        echo '</td>';
        echo '<td style="width:100px;">';
        echo '<input type="text" id="naw3al3amal" style="width:100px" name="naw3al3amal" value="'.$row['tPrice'].'"></input>';
        echo '</td>';
        echo '<td style="width:100px;">';
        $amlHossa;
        $p=$row['tPrice'];
        $ne=$_POST['nesbah'];
        $amlHossa=  $p*$ne /100;
        $totalOmolaFinal2+=$amlHossa;
        echo '<input type="text" id="naw3al3amal" style="width:100px" name="naw3al3amal" value="'.$amlHossa.'"></input>';
        echo '</td>';
        echo '<td style="width:110px;">';
        echo '<input type="text" id="datepicker" name=datepicker style="width:110px" value="'.$row['dateOfCompletion'].'"></input>';
        echo '</td>';
        echo '</tr>';
        
        echo '</table>';
        
        echo '</div>';
	    $count3++;
	}
       echo '<hr>';
       #Get Omola For Specific Worker
	   $retval2 = mysqli_query($connection, $sql2);
        echo '<br>';
       
       
      echo '<div align="right" style="margin-right:80px;">';
            echo '<table style="width:480px">';
       echo '<tr>';
            echo '<td style="width:100px;">';
            echo '<strong style="font-size:19px;">تقرير العمولة</strong>';
            echo '<br><br>';
            echo '</td>';
            
            echo '</tr>';
            
            echo '<tr>';
            echo '<td style="width:100px;">';
	echo '<strong style="font-size:16;color:red;">من تاريخ: </strong>';
	
	echo '</td>';
	echo '<td style="width:100px;">';
	echo '<input type="text" style="width:100px;" value="'.date('Y-m-d',  strtotime($_POST["datepicker"])).'"></input>';
	echo '</td>';
	echo '<td style="width:100px;">';
	echo '<strong style="font-size:16;width:90px;text-align:center;color:red;">الى تاريخ: </strong>';
	echo '</td>';
	echo '<td style="width:100px;">';
	echo '<input type="text" style="width:90px;" value="'.date('Y-m-d',  strtotime($_POST["datepicker2"])).'"></input>';
	echo '</td>';
	echo '</tr>';
	echo '<tr>';
	echo '<td>';
	echo '<br>';
	echo '</td>';
	echo '</tr>';
	echo '<tr>';
	echo '<td>';
	echo '<strong style="font-size:18;width:40px;text-align:center;">العامل: </strong>';
	echo '&nbsp;&nbsp;';
	echo '<strong style="font-size:16;width:40px;text-align:center;">'. $_POST['workerName'] .'</strong>';
	echo '<br><br>';
	echo '</td>';
	echo '<td>';
	
	
	echo '</td>';
	echo '<td>';
	echo '</td>';
		echo '<td>';
	echo '</td>';
	echo '</tr>';
	echo '</table>';
	echo '</div>';
	echo '<div align="center">';
            echo '<table style="width:1100px;">';
      echo '<tr>';
      

echo '<td style="width:90px;">';
echo '<strong style="width:90px;font-size:20px">رقم الفاتورة</strong>';

echo '</td>';
echo '<td style="width:70px;">';
echo '<strong style="width:70px;font-size:20px"> الرقم   </strong>';
echo '</td>';

        
 echo '<td style="width:100px;">';
        echo '<strong style="width:100px;font-size:20px">إسم الزبون</strong>';
        echo '</td>';
       echo '<td style="width:100px">';
        echo '<strong style="width:100px;font-size:18px">رقم الهاتف</strong>';
        echo '</td>';
        
        echo '<td style="width:110px">';
        echo '<strong style="width:110px;font-size:18px">نوع العمل</strong>';
        echo '</td>';
    echo '<td style="width:100px">';
        echo '<strong style="width:100px;font-size:18px">السعر</strong>';
        echo '</td>';
        echo '<td style="width:70px;">';
        echo '<strong style="width:70px;font-size:18px;font-weight:bold;">الكمية</strong>';
        echo '</td>';
        echo '<td style="width:100px;">';
        echo '<strong style="width:100px;font-size:20px">العمولة</strong>';
        echo '</td>';
        echo '<td style="width:100px;">';
        echo '<strong style="width:100px;font-size:20px">تاريخ التسليم</strong>';
        echo '</td>';
        echo '<td style="width:100px;">';
        echo '<strong style="width:100px;font-size:20px">مجموع العمولة</strong>';
        echo '</td>';
        
      echo '</tr>';
      echo '</table>';
      echo '</div>';
       $count4=1;
	while($row = mysqli_fetch_array($retval2))
	{
	    
        echo '<div align="center">';
        echo '<table style="width:1100px">';
        echo '<tr>';
        
           
echo '<td style="width:90px;">';


echo '<strong style="width:90px;font-size:20px;color:red;">' . $row['omola_ID'] . ' </strong>';
echo '</td>';

echo '<td style="width:70px;">';
echo '<strong style="width:70px;font-size:20px;">' . $count4. ' </strong>';
echo '</td>';
echo '<td style="width:100px">';
        echo '<input type=text name=clientname style=width:100px value="' . $row['clientname'] . '" </td>';
        echo '<td style="width:100px">';
        echo "<input type=text name = mobilenum style=width:100px value=" . $row['mobilenum'] . " ></td>";
        
        echo '<td style="width:110px">';
        echo '<input type=text name = mobilenum style=width:110px value="'.$row['badlahType'].'"></td>';
        echo '</td>';
        echo '<td style="width:100px">';
        echo '<input type="text" id="naw3al3amal" style="width:100px" name="naw3al3amal" value="'.$row['price'].'"></input>';
        echo '</td>';
        echo '<td style="width:70px">';
        echo '<input type="text" id="naw3al3amal" style="width:70px" name="naw3al3amal" value="'.$row['qty'].'"></input>';
        echo '</td>';
        echo '<td style="width:100px">';
        $omolaNaw3=$row['omola']/$row['qty'];
        echo '<input type="text" id="naw3al3amal" style="width:100px" name="naw3al3amal" value="'. $omolaNaw3.'"></input>';
        echo '</td>';
        echo '<td style="width:100px;">';
        echo '<input type="text" id="datepicker" name=datepicker style="width:100px;" value="'.$row['dateOfCompletion'].'">';
        echo '</td>';
        echo '<td style="width:100px;">';
            $totalOmola=$row['omola'];
            $totalOmolaFinal2+=$totalOmola;
            echo '<input type="text" id="naw3al3amal" style="width:100px" name="naw3al3amal" value="'.$totalOmola.'"></input>';
            echo '</td>';
            
        echo '</tr>';
        echo '</table>';
        echo '</div>';
        $count4++;
	}
	echo '<div align="center">';
            echo '<table style="width:1100px">';
            echo '<tr>';
            
           
echo '<td style="width:90px;">';
echo '</td>';

echo '<td style="width:70px;">';

echo '</td>';
            echo '<td style="width:100px;">';
            echo '</td>';
            echo '<td style="width:100px;">';
            echo '</td>';
            echo '<td style="width:110px;">';
            echo '</td>';
            echo '<td style="width:100px;">';
            echo '</td>';
            echo '<td style="width:100px;">';
            echo '</td>';
            echo '<td style="width:100px;">';
            echo '</td>';
            echo '<td style="width:90px;">';
            echo '</td>';
            echo '<td style="width:100px;">';
            echo '<input type="text" id="naw3al3amal" style="width:100px;border: 2px solid red; border-radius: 4px;" name="naw3al3amal" value="'.$totalOmolaFinal2.'"></input>';
            echo '</td>';
            
            echo '</tr>';
            echo '</table';
echo '</div>';
    

		}//.workname
}//.value


?>
<?php
   MySqli_close($connection);
  ?>
</body>
</html>