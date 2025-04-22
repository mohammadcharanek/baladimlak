<?php
session_start();
include 'db_connection.php';
$conn = OpenCon();

if(isset($_POST['addbadlah'])){
$badlahT_ID = $_POST['naw3al3amal'];
//echo"naw3al3amal".$_POST['naw3al3amal'];
//$naw3al3amal = $_POST['optionSelected'];
$badlahT_ID= $_POST['naw3al3amalValues'];
$clientname = $_POST['clientname'];

$mobilenum = $_POST['mobilenum'];
$dateOfCompletion = date('Y-m-d', strtotime($_POST['datepicker']));

$tool = $_POST['tool'];
$katef = $_POST['katef'];
$kom1 = $_POST['kom1'];
$kom2 = $_POST['kom2'];
$kom3 = $_POST['kom3'];
$sadr = $_POST['sadr'];
$batn = $_POST['batn'];
$asfal = $_POST['asfal'];
$raqba = $_POST['raqba'];
$qita3 = $_POST['qita3'];
$comments = $_POST['comments'];

$toolp = $_POST['toolp'];
$shi3ar = $_POST['shi3ar'];
$shi3arN = $_POST['shi3arN'];
$hizam = $_POST['hizam'];

$rotbahN = $_POST['rotbahN'];
$rotbah = $_POST['rotbah'];
$base = $_POST['base'];
$splaytN = $_POST['splaytN'];
$splayt = $_POST['splayt'];
$fa5th = $_POST['fa5th'];
$kabou3N = $_POST['kabou3N'];
$kabou3 = $_POST['kabou3'];
$sak = $_POST['sak'];
$law7aN = $_POST['law7aN'];
$law7a = $_POST['law7a'];
$asfalbnt = $_POST['asfalbnt'];
$yakaN = $_POST['yakaN'];
$yaka = $_POST['yaka'];
$waynakN = $_POST['waynakN'];
$waynak = $_POST['waynak'];
$notahN = $_POST['notahN'];
$notah = $_POST['notah'];
$kravtaN = $_POST['kravtaN'];
$kravta = $_POST['kravta'];
$qty = $_POST['bQty'];

$bQty = $_POST['bQty'];
$price = $_POST['price'];
$vat = $_POST['VAT'];
$omla = $_POST['myselectbox'];
$overallP = $_POST['overallP'];
$finished = (isset($_POST['finished'])?$_POST['finished']:'');
$received = (isset($_POST['received'])?$_POST['received']:'');

$wasl = $_POST['wasl'];
$baki = $_POST['baki'];

// To protect MySQL injection (more detail about MySQL injection)
//$sql = " INSERT INTO " . $tbl_name . "(badlahT_ID, clientname, mobilenum, dateOfCompletion, naw3al3amal, tool, katef, kom1, kom2, kom3, sadr, batn, asfal, raqba, qita3, comments, toolp, shi3arN, shi3ar, hizam, rotbahN, rotbah, base, splaytN, splayt, fa5th, kabou3N, kabou3, sak, law7aN, law7a, asfalbnt, yakaN, yaka, waynakN, waynak, notahN, notah, kravtaN, kravta, qty, bQty, price, vat, omla, overallP, wasl, baki, finished, received) VALUES ('" . $badlahT_ID . "', '" . $clientname . "', '" . $mobilenum . "', '" . $dateOfCompletion . "', '" . $naw3al3amal . "', '" . $tool . "', '" . $katef . "', '" . $kom1 . "', '" . $kom2 . "',  '" . $kom3 . "', '" . $sadr . "', '" . $batn . "', '" . $asfal . "', '" . $raqba . "', '" . $qita3 . "', '" . $comments . "', '" . $toolp . "', '" . $shi3arN . "', '" . $shi3ar . "', '" . $hizam . "', '" . $rotbahN . "', '" . $rotbah . "', '" . $base . "', '" . $splaytN . "','" . $splayt . "', '" . $fa5th . "', '" . $kabou3N . "','" . $kabou3 . "', '" . $sak . "', '" . $law7aN . "','" . $law7a . "', '" . $asfalbnt . "', '" . $yakaN . "','" . $yaka . "', '" . $waynakN . "','" . $waynak . "', '" . $notahN . "','" . $notah . "', '" . $kravtaN . "','" . $kravta . "', '" . $qty . "', '" . $bQty . "', '" . $price . "', '" . $vat . "', '" . $omla . "', '" . $overallP . "', '" . $wasl . "', '" . $baki . "', '" . $finished . "', '" . $received . "')";
//$sql = " INSERT INTO badlah (badlahT_ID, clientname, mobilenum, dateOfCompletion, tool, katef, kom1, kom2, kom3, sadr, batn, asfal, raqba, qita3, comments, toolp, shi3arN, shi3ar, hizam, rotbahN, rotbah, base, splaytN, splayt, fa5th, kabou3N, kabou3, sak, law7aN, law7a, asfalbnt, yakaN, yaka, waynakN, waynak, notahN, notah, kravtaN, kravta, qty, bQty, price, vat, omla, overallP, wasl, baki, finished, received) VALUES ('" . $badlahT_ID . "', '" . $clientname . "', '" . $mobilenum . "', '" . $dateOfCompletion . "', '" . $tool . "', '" . $katef . "', '" . $kom1 . "', '" . $kom2 . "',  '" . $kom3 . "', '" . $sadr . "', '" . $batn . "', '" . $asfal . "', '" . $raqba . "', '" . $qita3 . "', '" . $comments . "', '" . $toolp . "', '" . $shi3arN . "', '" . $shi3ar . "', '" . $hizam . "', '" . $rotbahN . "', '" . $rotbah . "', '" . $base . "', '" . $splaytN . "','" . $splayt . "', '" . $fa5th . "', '" . $kabou3N . "','" . $kabou3 . "', '" . $sak . "', '" . $law7aN . "','" . $law7a . "', '" . $asfalbnt . "', '" . $yakaN . "','" . $yaka . "', '" . $waynakN . "','" . $waynak . "', '" . $notahN . "','" . $notah . "', '" . $kravtaN . "','" . $kravta . "', '" . $qty . "', '" . $bQty . "', '" . $price . "', '" . $vat . "', '" . $omla . "', '" . $overallP . "', '" . $wasl . "', '" . $baki . "', '" . $finished . "', '" . $received . "')";
//$result = mysqli_query($conn, $sql);
$var =  $_POST['naw3al3amal'];
       // echo'var'.$var;

          //  if (!empty($var)){

                $query = " INSERT INTO badlah (badlahT_ID, clientname, mobilenum, dateOfCompletion, naw3al3amal, tool, katef, kom1, kom2, kom3, sadr, batn, asfal, raqba, qita3, comments, toolp, shi3arN, shi3ar, hizam, rotbahN, rotbah, base, splaytN, splayt, fa5th, kabou3N, kabou3, sak, law7aN, law7a, asfalbnt, yakaN, yaka, waynakN, waynak, notahN, notah, kravtaN, kravta, qty, bQty, price, vat, omla, overallP, wasl, baki, finished, received) VALUES ('" . $badlahT_ID . "', '" . $clientname . "', '" . $mobilenum . "', '" . $dateOfCompletion . "', '" . $var . "', '" . $tool . "', '" . $katef . "', '" . $kom1 . "', '" . $kom2 . "',  '" . $kom3 . "', '" . $sadr . "', '" . $batn . "', '" . $asfal . "', '" . $raqba . "', '" . $qita3 . "', '" . $comments . "', '" . $toolp . "', '" . $shi3arN . "', '" . $shi3ar . "', '" . $hizam . "', '" . $rotbahN . "', '" . $rotbah . "', '" . $base . "', '" . $splaytN . "','" . $splayt . "', '" . $fa5th . "', '" . $kabou3N . "','" . $kabou3 . "', '" . $sak . "', '" . $law7aN . "','" . $law7a . "', '" . $asfalbnt . "', '" . $yakaN . "','" . $yaka . "', '" . $waynakN . "','" . $waynak . "', '" . $notahN . "','" . $notah . "', '" . $kravtaN . "','" . $kravta . "', '" . $qty . "', '" . $bQty . "', '" . $price . "', '" . $vat . "', '" . $omla . "', '" . $overallP . "', '" . $wasl . "', '" . $baki . "', '" . $finished . "', '" . $received . "')";
                mysqli_query($conn, $query);
          //  }
//header("Location: addingBadlahSuccess.html");

}

?>
<!DOCTYPE html>
<html>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<link rel="stylesheet" href="styleBadlah.css"/> 
<script type="text/javascript">     
    function PrintDiv(){
       var divToPrint = document.getElementById('divToPrint');
       var popupWin = window.open('', '_blank', 'width=300,height=300');
       popupWin.document.open();
       popupWin.document.write('<html><body onload="window.print()">' + divToPrint.innerHTML + '</html>');
        popupWin.document.close();
    }
 </script>

 <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>بحث</title>
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

		if(isset($_POST['update'])){

        
		$updateQuery="UPDATE badlah SET  badlahT_ID= '" . $_POST['naw3al3amalValues'] . "', clientname= '" . $_POST['clientname'] . "', mobilenum= '" . $_POST['mobilenum']."', dateOfCompletion='" . date('Y-m-d',  strtotime($_POST['datepicker'])) . "', tool= '" . $_POST['tool'] . "', katef= '" . $_POST['katef'] . "', kom1= '" . $_POST['kom1'] . "' , kom2= '" . $_POST['kom2'] . "',  kom3= '" . $_POST['kom3'] . "',  sadr= '" . $_POST['sadr'] . "',  batn= '" . $_POST['batn'] . "' , asfal='".$_POST['asfal']."', raqba= '" . $_POST['raqba'] . "', qita3='".$_POST['qita3']."', toolp= '" . $_POST['toolp'] . "' ,  shi3arN= '" . $_POST['shi3arN'] . "' ,  shi3ar= '" . $_POST['shi3ar'] . "' , hizam= '" . $_POST['hizam'] . "' ,  rotbahN= '" . $_POST['rotbahN'] . "' ,  rotbah= '" . $_POST['rotbah'] . "' ,  base= '" . $_POST['base'] . "' , splaytN= '" . $_POST['splaytN'] . "' , splayt= '" . $_POST['splayt'] . "' , fa5th= '" . $_POST['fa5th'] . "' , kabou3N= '" . $_POST['kabou3N'] . "' ,  kabou3= '" . $_POST['kabou3'] . "' , sak= '" . $_POST['sak'] . "' , law7aN= '" . $_POST['law7aN'] . "' ,  law7a= '" . $_POST['law7a'] . "' , asfalbnt= '" . $_POST['asfalbnt'] . "' , yakaN= '" . $_POST['yakaN'] . "' ,  yaka= '" . $_POST['yaka'] . "' , waynakN= '" . $_POST['waynakN'] . "' ,  waynak= '" . $_POST['waynak'] . "' , notahN= '" . $_POST['notahN'] . "' ,  notah= '" . $_POST['notah'] . "' , kravtaN= '" . $_POST['kravtaN'] . "' ,  kravta= '" . $_POST['kravta'] . "' , bQty= '" . $_POST['bQty'] . "' , qty= '" . $_POST['bQty'] . "' , price= '" . $_POST['price'] . "' , vat='".$_POST['VAT']."', omla= '" . $_POST['myselectbox'] . "' , comments= '" . $_POST['comments'] . "', finished='".(isset($_POST['finished'])?$_POST['finished']:'')."', received='".(isset($_POST['received'])?$_POST['received']:'')."' , wasl='".$_POST['wasl']."', overallP='".$_POST['overallP']."', baki='".$_POST['baki']."' WHERE badlah_id='" .$_POST['hidden']."'";
		
		$retval2=mysqli_query($conn, $updateQuery);

        $var =  $_POST['naw3al3amal'];
        

            if (!empty($var)){

                $query = "UPDATE badlah SET naw3al3amal = '$var' WHERE badlah_id = '" .$_POST['hidden']."'" ;
                mysqli_query($conn, $query);
            }
		};
?>

   <?php
 
	

$sql = "SELECT * FROM altermahal ORDER BY alterMahal_id DESC LIMIT 0, 1";
$result = $conn->query($sql);

if ($result->num_rows >=0) {
    // output data of each row
    while($row = $result->fetch_assoc()){
$mahalName=$row['mahalName'];
echo '<h2 style="text-align:center;">'.$mahalName.'</h2>';


}
} 
else{
echo "0 results";
}

?>
<?php



$sql = "SELECT badlahT_ID, badlahType FROM badlahType";
$result = mysqli_query($conn, $sql);

while ($row = mysqli_fetch_row($result)) {
    
     
    $resulting_array[] =array( $row[0],$row[1] );
  
}

?>
<input type='button' value='الصفحة الرئيسية' class='homebutton' id='btnHome' style="float:left"/>
<script>
    var btn = document.getElementById('btnHome');
    btn.addEventListener('click', function() {
      document.location.href = 'mainPageUser.php';
    });
  </script>
<script type='text/javascript' src='script.js' async></script>
<?php
if(isset($_POST['term'])){


$_SESSION["idVal"]=$_POST['term'];

}else{
	$_POST['term']=0;
}

	

	
// Connect to server and select database.
//error_reporting(E_ALL & ~E_NOTICE &~E_WARNING);

		$sql = 'SELECT * from badlah where mobilenum='.$_SESSION["idVal"];

	//clientname, mobilenum, dateOfCompletion, naw3al3amal, tool, katef, kom1, kom2, kom3, sadr, batn, asfal, raqba, qita3, toolp, shi3arN, shi3ar, hizam, rotbahN, rotbah, base, splaytN, splayt, fa5th, kabou3N, kabou3, sak, law7aN, law7a, asfalbnt, yakaN, yaka, waynakN, waynak, notahN, notah, kravtaN, kravta, qty, price, omla, comments, finished, received, overallP, wasl, baki
	$retval = mysqli_query($conn, $sql);
		$count=1;
		$counter=0;
		if(mysqli_num_rows($retval)>0){
while($row=  mysqli_fetch_assoc($retval)){
echo '<div id="divToPrint" class="kames'.$count.'" align="center">';

echo '<form method="post" action="">';

echo '<table style="width:1240px">';
    echo '<tr><td></td></tr>';
    echo '<tr style="background-color:#F0FFF0; height:5px">';
        echo '<td></td>';
        echo '<td></td>';
        echo '<td></td>';
        echo '<td></td>';
        echo '<td></td>';
        echo '<td></td>';
        echo '<td>';
        echo '<input type="text" name=badlahID style="color:red;background-color:#F0FFF0; border-style:none;font-weight: bold;" value=#'. $row['badlah_id'].'></input>';
        echo '</td>';
	
    echo '</tr>';

    echo '<tr>';
        echo '<td style="width:170px; align:right">';
            echo '<h3 style="width:120px;margin-top:14px;">إسم الزبون</h3>';
        echo '</td>';
        echo '<td>';
            echo '<input type=text name=clientname style=width:150px value="'.$row['clientname'].'"</td>';
        echo '</td>';
        echo '<td></td>';
        echo '<td></td>';
        echo '<td></td>';
		echo '<td></td>';
		echo '<td></td>';
        echo '<td>';
            echo '<h3 style="margin-top:16px">تاريخ التسليم</h3>';
        echo '</td>';
        echo '<td>';
            echo '<input type="text" id="datepicker" name=datepicker style="width:150px" value="'.$row['dateOfCompletion'].'">';
        echo '</td>';
    echo '</tr>';

echo '<tr style="background-color:#F0FFF0">';

echo '<td>';
echo '<h3 style="margin-top:14px;">رقم الهاتف</h3>';
echo '</td>';
echo '<td>';
echo "<input type=text name=mobilenum style=width:150px value=" . $row['mobilenum'] . " /required </td>";
echo '</td>';

echo '<td>';
echo '</td>';
echo '<td>';
echo '</td>';
echo '<td>';
echo '</td>';
echo '<td>';
echo '</td>';
echo '<td>';

echo '</td>';
echo '<td>';
echo '<h3 style="margin-top:14px; margin-right:25px">نوع العمل</h3>';
echo '</td>';
echo '<td>';
echo '<select name="naw3al3amalValues" class="naw3al3amalValue" style="width:150px;" onchange="getVal('.$count.');getOptionOfSelect('.$count.')" onload="getOptionOfSelect('.$count.')">';
echo "getVal(".$count.");";
foreach($resulting_array as $val){
?>
    <option value="<?=$val[0]?>" <?php if($val[0] == $row['badlahT_ID']){echo"selected";}  ?> ><?=$val[1]?></option>
<?php
$countinput=1;

$countinput++;
}
echo '</select>';
?>

<input type="hidden" class="naw3al3amalSelectedOp" name="naw3al3amalSelectedOp" id="naw3al3amalSelectedOp"></input>
<input type="hidden" class="naw3al3amal" name="naw3al3amal" id="naw3al3amal"></input>
<input type="hidden" name="optionSelected" id="optionSelected" value="0" class="optionSelected"></input>
<?php
echo '</td>';

echo '</tr>';


echo '<tr>';
echo '<td>';
echo '<label> </label>';
echo '</td>';
echo '<td>';
echo '</td>';
echo '<td>';
echo '</td>';
echo '<td>';
echo '</td>';

echo '</tr>';
echo '<tr width=100% style="background-color:#DCDCDC">';
echo '<td style="background-color:#00CED1; align:center">';
echo '	<h2 style="text-align:center; margin-top:5px;margin-bottom:1px">قميص</h2>';
echo '</td>';
 	echo ' <td align="center">';
 	   echo '<label><h2 style="text-align:center; margin-top:5px;margin-bottom:1px">طول';
echo '</h2></label>';
echo '	</td>';
	
echo '<td align="center">';
    echo '<label for="lname"><h2 style="text-align:center; margin-top:5px;margin-bottom:1px">كتف</h2></label>';
	echo '</td>';
	
	

echo '<td align="center">';
    echo '<label for="lname"><h2 style="text-align:center; margin-top:5px;margin-bottom:1px">كم</h2>';
	echo '</label>';
	echo '</td>';
	
	
echo '<td align="center">';
    echo '<label for="lname"><h2 style="text-align:center; margin-top:5px;margin-bottom:1px">صدر</h2></label>';
	echo '</td>';
	
	
echo '<td align="center">';
echo ' <label for="lname"><h2 style="text-align:center; margin-top:5px;margin-bottom:1px">بطن</h2></label>';
	echo '</td>';
	
	
echo '<td align="center">';
	echo '<label for="lname"><h2 style="text-align:center; margin-top:5px;margin-bottom:1px">أسفل</h2></label>';
	echo '</td>';
	
echo '<td align="center">';
	echo '<label for="lname"><h2 style="text-align:center; margin-top:5px;margin-bottom:1px">رقبة</h2></label>';
	echo '</td>';
	echo '<td align="center">';
	echo '<label for="lname"><h2 style="text-align:center;margin-top:5px;margin-bottom:1px">القطاع</h2></label>';
	echo '</td>';
	
	
echo '</tr>';
echo '<tr>';
echo '<td>';
echo '</td>';
echo '<td align="center">';
	echo "<input type=text name=tool value='".$row['tool']."'>"."</input>";
echo '</td>';
	echo '<td align="center">';
echo "<input type='text' name=katef value='".$row['katef']."'></input> ";
	echo '</td>';
echo '	<td align="center">';
    echo "<input type='text' name=kom1 value='".$row['kom1']."'></input>  ";
echo '	</td>';
	echo '<td align="center">';
echo "<input type='text' name=sadr value='".$row['sadr']."'></input>  ";
	echo '</td>';
	
echo '	<td align="center">';
echo "<input type='text' name=batn value='".$row['batn']."'></input>  ";
	echo '</td>';
	echo '<td align="center">';
echo "<input type='text' name=asfal value='".$row['asfal']."'></input>  ";
	echo '</td>';
echo '<td align="center">';
echo "<input type='text' name=raqba value='".$row['raqba']."'></input>  ";
	echo '</td>';
	echo '<td align="center">';
echo "<input type='text' name=qita3 value='".$row['qita3']."'></input>  ";
	echo '</td>';
	
echo '</tr>';
echo '<tr>';
echo '<td>';
echo '</td>';

echo '<td>';
echo '</td>';
echo '<td>';
    
	echo '</td>';



echo '<td align="center">';
echo "<input type='text' name=kom2 value='".$row['kom2']."'></input>  ";
echo '</td>';

echo '<td>';
echo '</td>';

echo '<td>';
echo '</td>';
echo '<td>';
echo '</td>';

echo '<td>';
echo '</td>';
echo '<td>';
    
	echo '</td>';

echo '</tr>';

echo '<tr>';
echo '<td>';
echo '</td>';

echo '<td>';
echo '</td>';
echo '<td>';
    
	echo '</td>';


echo '<td align="center">';
echo "<input type='text' name=kom3 value='".$row['kom3']."'></input>  ";
echo '</td>';

echo '<td>';
echo '</td>';

echo '<td>';
echo '</td>';

echo '<td>';
echo '</td>';
echo '<td>';
    
	echo '</td>';

echo '</tr>';
echo '<tr style="background-color:#DCDCDC">';
echo '<td style="background-color:#00CED1; align:center">';
	echo '<h2 style="text-align:center; margin-top:5px;margin-bottom:1px">إضافة بنطلون</h2>';
echo '</td>';


echo '<td align="center">';
  	echo '  <label><h2 style="text-align:center; margin-top:5px;margin-bottom:1px">طول';
    
	echo '</h2></label>';
	echo '</td>';
	
	
echo '<td align="center">';
    echo '<label for="lname"><h2 style="text-align:center; margin-top:5px;margin-bottom:1px;width:120px">حزام</h2></label>';
	echo '</td>';
	
	echo '<td align="center">';
    echo '<label for="lname"><h2 style="text-align:center; margin-top:5px;margin-bottom:1px">قاعدة</h2></label>';
	echo '</td>';
	echo '<td align="center">';
    echo '<label for="lname"><h2 style="text-align:center; margin-top:5px;margin-bottom:1px">فخذ</h2></label>';
	echo '</td>';
	echo '<td align="center">';
    echo '<label for="lname"><h2 style="text-align:center; margin-top:5px;margin-bottom:1px">ساق</h2></label>';
	echo '</td>';
	echo '<td align="center">';
    echo '<label for="lname"><h2 style="text-align:center; margin-top:5px;margin-bottom:1px">أسفل البنطلون</h2></label>';
	echo '</td>';
	
echo '<td>';
echo '</td>';
echo '<td>';
    
	echo '</td>';

echo '</tr>';
echo '<tr>';
  	echo '<td>';
  	echo '</td>';
	echo '<td align="center">';
echo "<input type='text' name=toolp value='".$row['toolp']."'></input>  ";
echo '</td>';

echo '<td align="center">';
    echo "<input type='text' name=hizam value='".$row['hizam']."'></input>  ";
	echo '</td>';
	echo '<td align="center">';
echo "<input type='text' name=base value='".$row['base']."'></input>  ";
	echo '</td>';
echo '	<td>';
    echo "<input type='text' name=fa5th value='".$row['fa5th']."'></input>  ";
echo '	</td>';
	echo '<td align="center">';
echo "<input type='text' name=sak value='".$row['sak']."'></input>  ";
	echo '</td>';
	
	echo '<td align="center">';
echo "<input type='text' name=asfalbnt value='".$row['asfalbnt']."'></input>  ";
	echo '</td>';

echo '<td>';
echo '</td>';
echo '<td>';
    
	echo '</td>';

echo '</tr>';
echo '<tr style="background-color:#DCDCDC">';

echo '<td style="background-color:#00CED1; align:center">';
	echo '<h2 style="text-align:center; margin-top:5px;margin-bottom:1px">لوازم عسكرية</h2>';
echo '</td>';
echo '  <td align="center">';
echo '    <label><h2 style="text-align:center; margin-top:5px;margin-bottom:1px">شعار </h2>';
echo '</label>';
echo '</td>';
echo '<td align="center">';
echo '    <label for="lname"><h2 style="text-align:center;margin-top:5px;margin-bottom:1px">رتبة</h2></label>';
echo '</td>';
echo '<td align="center">';
echo '    <label for="lname"><h2 style="text-align:center; margin-top:5px;margin-bottom:1px">سبلايت</h2></label>';
echo '	</td>';
	
echo '<td align="center">';
echo '    <label for="lname"><h2 style="text-align:center; margin-top:5px;margin-bottom:1px">قبوع</h2></label>';
echo '	</td>';
		
	
echo '<td align="center">';
echo '    <label for="lname"><h2 style="text-align:center; margin-top:5px;margin-bottom:1px">لوحة إسم</h2></label>';
echo '	</td>';
	
echo '<td align="center">';
echo '<label for="lname"><h2 style="text-align:center; margin-top:5px;margin-bottom:1px">ياقة</h2></label>';
echo '	</td>';

    
echo '<td>';
echo '</td>';
echo '<td>';
    
	echo '</td>';

	
echo '</tr>';
echo '<tr>';
echo '<td>';
echo '</td>';
echo '<td align="center">';
echo '<input type="number" id="shi3arN" class="shi3arN" name=shi3arN style="width:35px" onkeyup="doMath('.$counter.')" value="'.$row['shi3arN'].'"></input> ';
echo '<input type="text" id="shi3ar" class="shi3ar" name=shi3ar style="width:80px" onkeyup="doMath('.$counter.')" value="'.$row['shi3ar'].'"></input>';
echo '</td>';
	

echo '<td align="center">';
echo '<input type="number" id="rotbahN" class="rotbahN" name=rotbahN style="width:35px" onkeyup="doMath('.$counter.')" value="'.$row['rotbahN'].'"></input> ';
echo '<input type="text" id="rotbah" class="rotbah" name=rotbah style="width:77px" onkeyup="doMath('.$counter.')" value="'.$row['rotbah'].'"></input> ';

echo '</td>';
	
	
echo '	<td align="center" style="width:60%">';
echo '    <input type="number" id="splaytN" class="splaytN" name=splaytN style="width:35px" onkeyup="doMath('.$counter.')" value="'.$row['splaytN'].'"></input> ';
echo '    <input type="text" id="splayt" class="splayt" name=splayt style="width:80px" onkeyup="doMath('.$counter.')"  value="'.$row['splayt'].'"></input>';

echo '	</td>';


echo '<td align="center" style="width:120%;">';
echo '<input type="number" id="kabou3N" class="kabou3N" name=kabou3N style="width:35px;" onkeyup="doMath('.$counter.')"  value="'.$row['kabou3N'].'"></input> ';
echo '<input type="text" id="kabou3" class="kabou3" name=kabou3 style="width:63px;" onkeyup="doMath('.$counter.')"  value="'.$row['kabou3'].'"></input>';

echo '	</td>';


echo '	<td align="center" style="width:300px">';
echo '    <input type="number" id="law7aN" class="law7aN" name=law7aN style="width:35px" onkeyup="doMath('.$counter.')"  value="'.$row['law7aN'].'"></input> ';
echo '    <input type="text" id="law7a" class="law7a" name=law7a style="width:80px" onkeyup="doMath('.$counter.')"  value="'.$row['law7a'].'"></input>';
echo '	</td>';
	

	
echo '	<td align="center" style="width:300px">';
echo '    <input type="number" id="yakaN" class="yakaN" name=yakaN style="width:35px" onkeyup="doMath('.$counter.')"  value="'.$row['yakaN'].'"></input> ';
echo '     <input type="text" id="yaka" class="yaka" name=yaka style="width:80px" onkeyup="doMath('.$counter.')"  value="'.$row['yaka'].'"></input>';
echo '	</td>';

echo '<td>';
echo '</td>';
echo '<td>';
    
	echo '</td>';

echo '</tr>';
echo '<tr style="background-color:#DCDCDC; width:1000px">';
echo '<td style="background-color:#F0FFF0">';
echo '</td>';
echo '	<td align="center">';
echo '    <label for="lname"><h2 style="text-align:center;margin-top:5px;margin-bottom:1px">وينق</h2></label>';
echo '	</td>';
echo '	<td align="center">';
echo '    <label for="lname"><h2 style="text-align:center; margin-top:5px;margin-bottom:1px">نوط</h2></label>';
echo '	</td>';
echo '	<td align="center">';
echo '    <label for="lname"><h2 style="text-align:center; margin-top:5px;margin-bottom:1px">كرافتة</h2></label>';
echo '	</td>';
echo '	<td>';
echo '	</td>';
echo '	<td>';
echo '	</td>';
echo '	<td>';
echo '	</td>';

echo '	<td>';
echo '	</td>';
echo '	<td>';
echo '	</td>';
echo '</tr>';
echo '<tr>';

echo '<td>';
    
echo '	</td>';
	
	
	
	
	
	
	


echo '<td align="center">';
echo '<input type="number" id="waynakN" class="waynakN" name=waynakN style="width:35px" onkeyup="doMath('.$counter.')"  value="'.$row['waynakN'].'"></input> ';
echo '<input type="text" id="waynak" class="waynak" name=waynak style="width:80px" onkeyup="doMath('.$counter.')"  value="'.$row['waynak'].'"></input>';
echo '</td>';
	
	
	
echo '<td align="center" style"width:150px">';
echo '<input type="number" id="notahN" class="notahN" name=notahN style="width:35px" onkeyup="doMath('.$counter.')"  value="'.$row['notahN'].'"></input> ';
echo '<input type="text" id="notah" class="notah" name=notah style="width:70px" onkeyup="doMath('.$counter.')"  value="'.$row['notah'].'"></input>';
echo '	</td>';
	
echo '<td align="center" style="width:600px">';
echo '<input type="number" id="kravtaN" class="kravtaN" name=kravtaN style="width:35px" onkeyup="doMath('.$counter.')"  value="'.$row['kravtaN'].'"></input> ';
echo '<input type="text" id="kravta" class="kravta" name=kravta style="width:80px" onkeyup="doMath('.$counter.')"  value="'.$row['kravta'].'"></input> ';
echo '</td>';
echo '	<td>';
	 
echo '	</td>';

echo '	<td>';
echo '	</td>';
	
echo '	<td>';
echo '	</td>';

echo '	<td>';
echo '	</td>';
echo '	<td>';
echo '	</td>';
echo '</tr>';


	
echo '<tr>';
	

    
	
	
	
	
	
	
echo '	<td style="background-color:#F0FFF0">';
echo '	</td>';
	
echo '	<td align="left" style="background-color:yellow; padding-left: 20px; padding-top: 7px;">';
echo '    <label for="lname"><h3 style="color:rgb(139, 0, 70)">الكمية</h3></label>';
echo '	</td>';
echo '	<td style="background-color:yellow">';
echo '    <input type="number" id="bQty" class="bQty" name=bQty style="width:100px;" value="'.$row['bQty'].'"  onkeyup="doMath('.$counter.')"></input>  ';
echo '	</td>';
	
echo '	<td align="left" style="background-color:rgb(0, 255, 202); padding-left: 20px; padding-top: 5px;">';
echo '    <label for="lname"><h3 style="color:rgb(139, 0, 70)">السعر</h3></label>';
echo '	</td>';
echo '	<td style="background-color:rgb(0, 255, 202)">';

echo '    <input type="text" id="price" name=price class="price" onkeyup="doMath('.$counter.')"  value="'.$row['price'].'"></input> ';
echo '	</td>';
	
echo '	<td style="background-color:rgb(0, 255, 202)">';
echo '	<div class="styled">';
echo '	<select name="myselectbox"   style="text-align: center; text-align-last: center;" selected value="'.$row['omla'].'">';



echo '	<option value='.$row['omla'].'>'.$row['omla'].'</option>';
echo '	<option value="ريال سعودي"> ريال سعودي</option>';
echo '	<option value="ريال قطري"> ريال قطري </option>';
echo '	<option value="درهم إماراتي"> درهم إماراتي </option>';
echo '	<option value="دينار بحريني "> دينار بحريني </option>';
echo '	<option value="ريال عُماني"> ريال عُماني </option>';
echo '	<option value="دولار اميريكي"> دولار اميريكي </option>';
echo '	<option value="يورو>"يورو</option>';
echo '	</select>';
echo '	</div>';
echo '	</td>';
echo '<td align="left" style="background-color:rgb(0, 255, 202); padding-left: 20px; padding-top: 7px; margin-right:10px;">';
	    echo '<label><h3 style="color:rgb(139, 0, 70);margin-right:20px; text-alignment:center;width:150px;">ضريبة القيمة المضافة</h3></label>';
	    echo '</td>';
echo '	<td style="background-color:rgb(0, 255, 202)">';
echo '	<input type="text" id="VAT" name="VAT" class="VAT" onkeyup="doMath('.$counter.')" value="'.$row['vat'].'"></input> ';
	
	echo '</td>';
	echo '<td align="left" style="background-color:rgb(0, 255, 202); padding-left: 7px; padding-top: 10px;">';
	echo '<label><h3 style="color:rgb(139, 0, 70);margin-right:2px; text-alignment:center;width:5px;margin-left:90px;">%</h3></label>';
	    echo '</td>';
echo '	<td>';
echo '	</td>';

echo '</tr>';
echo '<tr>';
echo '	<td>';
echo '	</td>';
echo '	<td align="left" style="background-color:yellow; padding-left: 20px; padding-top: 4px;">';
echo '    <label for="lname"><h3 style="color:rgb(139, 0, 70)">المبلغ الإجمالي</h3></label>';
echo '	</td>';
echo '<td style="background-color:yellow;width:150px">';
echo '    <input type="text" id="overallP" name=overallP  class="overallP" style="width:100px" value="'.$row['overallP'].'"  readonly></input>  ';
echo '	</td>';

echo '	<td align="left" style="background-color:rgb(0, 255, 202); padding-left: 7px; padding-top: 4px;">';
echo '    <label for="wasl"><h3 style="color:rgb(139, 0, 70)">الواصل</h3></label>';
echo '	</td>';
echo '	<td style="background-color:rgb(0, 255, 202)">';
echo '    <input type="text" id="wasl" name=wasl onkeyup="doMathsub('.$counter.')" value="'.$row['wasl'].'" class="wasl"></input> ';
echo '	</td>';
echo '<td style="background-color:rgb(0, 255, 202)"></td>';
echo '	<td align="left" style="background-color:rgb(0, 255, 202); padding-left: 20px; padding-top: 4px;">';
echo '<label for="wasl"><h3 style="color:rgb(139, 0, 70)">الباقي </h3></label>';
    
echo '	</td>';
echo '	<td style="background-color:rgb(0, 255, 202)">';
echo '    <input type="text" id="baki" name=baki value="'.$row['baki'].'" class="baki" readonly></input>  ';
echo '	</td>';
	
echo '<td style="background-color:rgb(0, 255, 202)">';

echo '</td>';
echo '<td>';

echo '</td>';

	
	


echo '</tr>';


echo '<tr style="background-color:#F0FFF0">';
echo '<td>';
echo '</td>';
echo '	<td align="left">';
echo '    <label for="lname"><h2>ملاحظات</h2></label>';
echo '	</td>';
echo '	<td colspan="2">';
echo '    <textarea id="comments" name=comments cols="35" rows="5">'.$row['comments'];
echo '    </textarea>';
echo '	</td>';
	
	
echo '	<td align="left">';

echo '	</td>';
echo '	<td>';
if($row['finished'] == 'finished')
    
    {
      $checkedstatus = "checked='checked'";
      
    }
	else{
		$checkedstatus='';
	}
 


echo '<input type="checkbox" id="finished" name="finished" value="finished" '.$checkedstatus.' ></input><label style="font-size:20">جاهز</label><br>';
if($row['received'] == 'received')
    
    {
      $checkedstatus2 = "checked='checked'";
      
    }
	else{
		$checkedstatus2='';
	}
echo '  <input type="checkbox" id="received" name="received" value="received" '.$checkedstatus2.'></input><label style="font-size:20"> تم التسليم</label><br>';

echo '	</td>';
	
echo '	<td>';

echo '	</td>';
	
echo '<td>';

echo '	</td>';

echo '</tr>';

echo '<tr>';
echo '<td>';
echo '</td>';



echo '	<td align="left">';
echo '	<input type="submit" name="addbadlah" value="إضافة بدلة"></input>'.'<input type=hidden name = hidden value="'.$row['badlah_id'].'"></input>';
echo '	</td> ';

 
echo '	<td align="left">';
echo '	<input type=submit style=margin-right:10px name=update value=تحديث البدلة . </td> ';
echo "<td>" . "<input type=hidden name = hidden value=".$row['badlah_id']."</td> ";

echo '	<td>';
echo '    <input id="fatoura" name="fatoura" style="background-color:darkgrey; height:34px; width:100px;font-size: 22px;margin-right:0px;margin-left:0px" type="submit" formaction="voucherFindbadlah.php" value="الفاتورة" onclick="getVal('.$count.')"></td>'. '<td><input style="background-color:darkgrey; height:34px; width:100px;font-size: 22px;margin-right:0px;margin-left:0px" type="submit" formaction="makasatFindBadlah.php" value="المقاسات">'.'</td>';


echo ' </tr>';
    
  


echo '</table>';

 echo '<hr style="border-width:1px; color:black">';
echo '</form>';
echo '</div>';

$count++;
$counter++;
 }
		}
		else{
			echo "<div>";
			echo "<label id='notFound' style='font-weight:bold;font-size:20px;color:red;'>رقم الهاتف غير مرتبط بزبون</label>";
			echo "</div>";
		}

 ?>
 <script type='text/javascript' src='doMath.js'></script>
<script type='text/javascript' src='doMathsub.js'></script>
<script>
    function getVal(c){
                     var val = $(".kames"+c+" .naw3al3amalValue option:selected").text();
                      $(".kames"+c+" .naw3al3amal").val(val);
					
        
	 }


  </script>
<script type='text/javascript' src='GetOptionSelectedFileTwo.js'>

$(window).load(function(){
  $.getScript('GetOptionSelectedFileTwo.js', function GetOptionSelected(counter) {
    alert('Load is completed'); /*In this callback function you can fire the methods/functions defined in the loaded script file.*/
  });
});
</script>
<script>
function getOptionOfSelect(counter){
	 var selectBox = document.getElementsByClassName("naw3al3amalValue"),
      option = selectBox.options[selectBox.text];

  document.getElementsByClassName("optionSelected").value = option.text;

}
</script>
<script type='text/javascript' src='GetOptionSelected.js'>
  
$(window).load(function(){
  $.getScript('GetOptionSelected.js', function GetOptionSelected(counter) {
    alert('Load is completed'); /*In this callback function you can fire the methods/functions defined in the loaded script file.*/
  });
});

</script>


</body>
</html>
<?php
CloseCon($conn);
?>