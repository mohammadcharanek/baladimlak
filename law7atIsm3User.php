<meta charset="UTF-8">
<?php
$host='localhost'; // Host name
$username='root'; // Mysql username
$password=''; // Mysql password
$db_name='gicontra_sewingFactory'; // Database name
$tbl_name='badlah'; // Table name
$port=3306;

// Connect to server and select database.
$connection= MySqli_connect($host, $username, $password)or die("cannot connect");
MySqli_select_db($connection, $db_name)or die("cannot select DB");
 // $type = explode(",", $type);
    

mysqli_query($connection, "SET NAMES 'utf8'"); 
mysqli_query($connection, 'SET CHARACTER SET utf8');  

$sql2 = "SELECT * FROM law7atIsm ORDER BY law7atIsm_id DESC LIMIT 1";
$result2 = mysqli_query($connection, $sql2);
while ($row = mysqli_fetch_array($result2)) {
	
//global $typeImported;
$typeImported=$row['type'];
    $law7atIsm_id= $row['law7atIsm_id'];
	$name=$row['name'];
	$jawal=$row['jawal'];
	$qita3=$row['qita3'];
	$overall=$row['overall'];
	$type1="";//$row['type1'];
	$type2="";//$row['type2'];
	$type3="";//$row['type3'];
	$type4="";//$row['type4'];
	$type5="";//$row['type5'];
	
	$paid=$row['paid'];
	$baki=$row['baki'];
	$notes=$row['notes'];
	
	$datepicker=$row['dateOfCompletion'];
}

?>

<html>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <head>
        <style>
		
input[type=button] {
    width: 100px;
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

        page {
			
  background: white;
  display: block;
  margin: 0 auto;
  margin-bottom: 0.5cm;
  box-shadow: 0 0 0.5cm rgba(0,0,0,0.5);
}
page[size="A4/2"] {  
  width:14.85cm;
  height:10.5cm; 
}
        </style>
        </head>
        <body dir="rtl">
		
		<table style="float:left;">
		<tr>
        
<td>
<input type="button" value="الصفحة الرئيسية" class="homebutton" id="btnHome" 
onClick="document.location.href='mainPageUser.php'" />
</td>


<td><input type="button" value="رجوع" class="homebutton"
				id="btnHome" onclick="history.back()" /></td>

        </tr>
		</table>
            <page size="A4/2">
            <table style="width:500px;" align="center">
                <tr>
                    
                    <td colspan ="2" align="center">
                     <?php
 

$sql = "SELECT * FROM altermahal ORDER BY alterMahal_id DESC LIMIT 0, 1";
$result = $connection->query($sql);

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
                        </td>
                    </tr>
                      
    
   
                    <tr>
                        <td>
                                    </td>
                        <td>

<?php

$sql = "SELECT * FROM law7atIsm ORDER BY law7atIsm_id DESC LIMIT 0, 1";
$result = $connection->query($sql);

if ($result->num_rows >=0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
$law7atIsm_id=$row['law7atIsm_id'];
echo '<font color="red" align="right">'.'#'.$law7atIsm_id.'</font>';


}
} 
else
{
    echo "0 results";
}

?>


                            </td>
                            <td>
                                <canvas id="myCanvas" width="100" height="30"
style="border:1px solid #d3d3d3;">
Your browser does not support the canvas element.
</canvas>
                                    </td>
                        </tr>
                <tr style="margin-top:10px">
                    <td style="margin-top:10px;cell-padding:20px;" colspan="3">
                        <label style="font-size:17px;margin-top:20px;margin-right:40px;font-weight:bold;">الإسم  :   </label><label style="font-size:18px">  <?php echo $name;?></label>
                        
                        
                        </td>
                        </tr>
                <tr style="margin-top:10px">
                    <td style="margin-top:10px;cell-padding:20px;" colspan="3">
                        <label style="font-size:17px;margin-top:20px;margin-right:40px;font-weight:bold;">القطاع :      </label> <label style="font-size:18px"> <?php echo $qita3; ?> </label>
                        
                        
                        </td>
                        </tr>
                        <tr style="margin-top:10px">
                    <td style="margin-top:10px;cell-padding:20px;" colspan="3">
                        <label style="font-size:17px;margin-top:20px;margin-right:40px;font-weight:bold;">جوال :    </label><label style="font-size:18px">&nbsp <?php echo $jawal; ?></label>
                        
                        
                        </td>
                        </tr>
                        <tr style="margin-top:10px">
                                    <td style="margin-top:10px;cell-padding:20px;" colspan="3">
                                    <label style="font-size:17px; font-weight:bold;">تاريخ التسليم: </label><label style="font-size:18px"> <?php echo $datepicker;?></label>
                                    </td>
                                </tr>
                <tr style="margin-top:10px">
                    <td style="margin-top:10px;cell-padding:20px;" colspan="3">
                        <label style="font-size:17px;margin-top:20px;margin-right:40px;font-weight:bold;">المبلغ :    </label><label style="font-size:18px"> <?php echo $overall; ?></label>
                        
                        
                        </td>
                        </tr>
                
                                
                            <tr>
                                <td>
                                    
                                    </td>
                                </tr>
                                
                            <tr>
                                
                                    <td style="width:225px;text-align:right">
                                    <label style="font-size:19px;font-weight:bold;width:166px;margin-right:30px">المدفوع: </label><label style="font-size:18px"> <?php echo $paid;?></label>
                                    </td>
                                    <td style="width:199px">
                                    <label style="font-size:19px; font-weight:bold;">الباقي: </label><label style="font-size:18px"> <?php echo $baki;?></label>
                                    </td>
                                </tr>
                                
                                </table>
                                <form method="POST">
                                <table  style="margin-top:20px">
                                <tr  style="margin-top:20px">
                                    <td style="margin-top:20px;text-align:center;margin-right:150px;">
									<?php

		$typeAvailable = "حفر,قزاز,طباعة,تطريز,بلاستيك";
		$all_types=array('حفر','قزاز','طباعة','تطريز','بلاستيك');
$typeArr = explode(" ",$typeImported); // convert selecte fruits to array
foreach ($all_types as $typeImported){
   $checkedStatus = "";
   // check if $fruit in $selected fruit array - make it checked
   if(in_array($typeImported,$typeArr)) { $checkedStatus ="checked"; }
   echo "<label><input style='margin-right:50px;' type='checkbox' ".$checkedStatus." value='".$typeImported."'/>".$typeImported."</label>"; 
}
?>
                                  
                                    </td>
                                </tr>
                                </table>
                                <table
                                        <tr>
                                            <td>
                                                
                                           <label style="font-size:17px;margin-top:20px;margin-right:40px;font-weight:bold;">ملاحضات:</label>            
            </td>
            <td>
                <label style="font-size:18px;"><?php echo $notes; ?></label>
                </td>


                                            </tr>
                                    </table>
                                    <table  style="margin-top:20px">
                                <tr>
                    <td colspan="3" align="center">
                        <label style="font-size:21px">
                            
                            </label>
                            <label style="font-size:18px">
<?php

$sql = "SELECT * FROM alteraddress ORDER BY address_id DESC LIMIT 0, 1";
$result = $connection->query($sql);

if ($result->num_rows >=0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
$address=$row['address'];
echo $address;


}
} 
else{
echo "0 results";
}

?>
                            </label>
                        </td>
                        </tr>
                                <tr>
                                    <td>
                                    </td>
                                    <td align="center">
                                        
                                       
                                        
                                        <button id="printpagebutton2" align="center" formaction="law7atIsmUser.php">إلغاء</button>
                                        <button id="printpagebutton" onclick="printpage()" align="center">طباعة</button>
                                        </td>
                                        <td>
                                    </td>
                                    </tr>
                </table>
                </form>
                <script type="text/javascript">
    function printpage() {
        //Get the print button and put it into a variable
        var printButton = document.getElementById("printpagebutton");
        //Set the print button visibility to 'hidden' 
        printButton.style.visibility = 'hidden';
       
        var printButton2 = document.getElementById("printpagebutton2");
        //Set the print button visibility to 'hidden' 
        printButton2.style.visibility = 'hidden';
        //Print the page content
        window.print();
        //Set the print button to 'visible' again 
        //[Delete this line if you want it to stay hidden after printing]
       
        printButton2.style.visibility = 'visible';
        printButton.style.visibility = 'visible';
    }
</script>
       <script>
var canvas = document.getElementById("myCanvas");
var ctx = canvas.getContext("2d");
ctx.font = "18px Arial";
ctx.fillText("نسخة المحل",85,20);
</script>

         
<script src="calldb.js">
function functionAdd(){

   }
</script>
<script>
function myFunction() {
    window.print();
}
</script>
</page>
<page size="A4/2">


            <table style="width:500px;" align="center">
                <tr>
                    
                    <td colspan ="2" align="center">
                     <?php
 

$sql = "SELECT * FROM altermahal ORDER BY alterMahal_id DESC LIMIT 0, 1";
$result = $connection->query($sql);

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
                        </td>
                    </tr>
                        
                    <tr>
                        <td>
                                    </td>
                        <td>

<?php

$sql = "SELECT * FROM law7atIsm ORDER BY law7atIsm_id DESC LIMIT 0, 1";
$result = $connection->query($sql);

if ($result->num_rows >=0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
$law7atIsm_id=$row['law7atIsm_id'];
echo '<font color="red" align="right">'.'#'.$law7atIsm_id.'</font>';


}
} 
else
{
    echo "0 results";
}

?>


                            </td>
                            <td>
                                <canvas id="myCanvas2" width="100" height="30"
style="border:1px solid #d3d3d3;">
Your browser does not support the canvas element.
</canvas>
                                    </td>
                        </tr>
                <tr style="margin-top:10px">
                    <td style="margin-top:10px;cell-padding:20px;" colspan="3">
                        <label style="font-size:17px;margin-top:20px;margin-right:40px;font-weight:bold;">الإسم  :   </label><label style="font-size:18px"><?php echo $name;?></label>
                        
                        
                        </td>
                        </tr>
                <tr style="margin-top:10px">
                    <td style="margin-top:10px;cell-padding:20px;" colspan="3">
                        <label style="font-size:17px;margin-top:20px;margin-right:40px;font-weight:bold;">القطاع :      </label> <label style="font-size:18px"><?php echo $qita3;  ?></label>
                        
                        
                        </td>
                        </tr>
                        <tr style="margin-top:10px">
                    <td style="margin-top:10px;cell-padding:20px;" colspan="3">
                        <label style="font-size:17px;margin-top:20px;margin-right:40px;font-weight:bold;">جوال :    </label><label style="font-size:18px"><?php echo $jawal; ?></label>
                        
                        
                        </td>
                        </tr>
                        <tr style="margin-top:10px">
                                    <td style="margin-top:10px;cell-padding:20px;" colspan="3">
                                    <label style="font-size:17px; font-weight:bold;">تاريخ التسليم: </label><label style="font-size:18px"> <?php echo $datepicker;?></label>
                                    </td>
                                </tr>
                <tr style="margin-top:10px">
                    <td style="margin-top:10px;cell-padding:20px;" colspan="3">
                        <label style="font-size:17px;margin-top:20px;margin-right:40px;font-weight:bold;">المبلغ :    </label><label style="font-size:18px"><?php echo $overall;?></label>
                        
                        
                        </td>
                        </tr>
                
                                
                            <tr>
                                <td>
                                    
                                    </td>
                                </tr>
                                
                            <tr>
                                
                                    <td style="width:225px;text-align:right">
                                    <label style="font-size:19px;font-weight:bold;width:166px;margin-right:30px">المدفوع: </label><label style="font-size:18px"><?php echo $paid;?></label>
                                    </td>
                                    <td style="width:199px">
                                    <label style="font-size:19px; font-weight:bold;">الباقي: </label><label style="font-size:18px"><?php echo $baki;?></label>
                                    </td>
                                </tr>
                                </table>
                                <form>
                                <table  style="margin-top:20px" >
                                    
                                <tr  style="margin-top:20px">
                                    <td style="margin-top:20px">
         <?php
foreach ($all_types as $typeImported){
   $checkedStatus = "";
   // check if $fruit in $selected fruit array - make it checked
   if(in_array($typeImported,$typeArr)) { $checkedStatus ="checked"; }
   echo "<label><input style='margin-right:50px;' type='checkbox' ".$checkedStatus." value='".$typeImported."'/>".$typeImported."</label>"; 
}
?>
                                    </td>
                                </tr>
                                    </table>
                                    <table style="margin-top:10px;">
                                        <tr>
                                            <td>
                                                
                                           <label style="font-size:17px;margin-top:20px;margin-right:40px;font-weight:bold;">ملاحضات:</label>            
            </td>
            <td>
                <label style="font-size:18px;"><?php echo $notes; ?></label>
                </td>


                                            </tr>
                                    </table>
                                
                                    <table  style="margin-top:20px">
                                <tr>
                    <td colspan="3" align="center">
                        <label style="font-size:21px">
                            
                            </label>
                            <label style="font-size:18px">
<?php

$sql = "SELECT * FROM alteraddress ORDER BY address_id DESC LIMIT 0, 1";
$result = $connection->query($sql);

if ($result->num_rows >=0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
$address=$row['address'];
echo $address;


}
} 
else{
echo "0 results";
}

?>
                            </label>
                        </td>
                        </tr>
                                
                </table>
                </form>
            <script>
var canvas = document.getElementById("myCanvas2");
var ctx = canvas.getContext("2d");
ctx.font = "18px Arial";
ctx.fillText("نسخة الزبون",85,20);
</script>

                </page>
            </body>
            </html>