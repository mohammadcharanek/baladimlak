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

    $law7atIsm_id= (isset($_POST['law7atIsm_id'])? $_POST['law7atIsm_id']:0);
	$name=(isset($_POST['name'])? $_POST['name']:"");
	$jawal=(isset($_POST['jawal'])? $_POST['jawal']:0000000000);
	$qita3=(isset($_POST['qita3'])? $_POST['qita3']:"");
	$overall=(isset($_POST['overall'])? $_POST['overall']:0);
	$type1=(isset($_POST['type1'])? $_POST['type1']:"");
	$type2=(isset($_POST['type2'])? $_POST['type2']:"");
	$type3=(isset($_POST['type3'])? $_POST['type3']:"");
	$type4=(isset($_POST['type4'])? $_POST['type4']:"");
	$type5=(isset($_POST['type5'])? $_POST['type5']:"");
	$paid=(isset($_POST['paid'])? $_POST['paid']:0);
	$baki=(isset($_POST['baki'])? $_POST['baki']:0);
	$notes=(isset($_POST['notes'])? $_POST['notes']:"");
	$datepicker=$_POST['datepicker'];
	

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
onClick="document.location.href='mainPage.html'" />
</td>

        </tr>
		</table>
            <page size="A4/2">
            <table style="width:500px;" align="center">
                <tr>
                    
                    <td colspan ="2" align="center">
                        <label style="font-size:23px;font-weight: bold;text-align:center">
                            البلد العملاق للخياطة العسكرية
                            </label>
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
                                    <td style="margin-top:20px">
                                        <input type="checkbox" style="margin-right:50px" <?php if($type1 =="حفر"){echo ' checked="checked"'; } ?> value="حفر">
                                        <label style="font-size:18px">حفر</label>
                                        <input type="checkbox" style="margin-right:40px" <?php if($type2 =="قزاز"){echo ' checked="checked"'; } ?> value="قزاز">
                                        <label style="font-size:18px">قزاز</label>
                                        <input type="checkbox" style="margin-right:40px" <?php if($type3 =="طباعة"){echo ' checked="checked"'; } ?> value="طباعة">
                                        <label style="font-size:18px">طباعة</label>
                                        <input type="checkbox" style="margin-right:40px" <?php if($type4 =="تطريز"){echo ' checked="checked"'; } ?> value="تطريز">
                                        <label style="font-size:18px">تطريز</label>
                                        <input type="checkbox" style="margin-right:40px" <?php if($type5 =="بلاستيك"){echo ' checked="checked"'; } ?> value="بلاستيك">
                                        <label style="font-size:18px">بلاستيك</label>
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
الرياض - حي الخليج - شارع الأمير بندر بن عبد العزيز - خلف فندق قصر الخليج - تلفون: 011/2395359 - ترخيص (40849)
                            </label>
                        </td>
                        </tr>
                                <tr>
                                    <td>
                                    </td>
                                    <td align="center">
                                        
                                       
                                        
                                        <button id="printpagebutton2" align="center" formaction="http://baladimlak.gicontracting.com/law7atIsm.php">إلغاء</button>
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
                        <label style="font-size:23px;font-weight: bold;text-align:center">
                            البلد العملاق للخياطة العسكرية
                            </label>
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
                                        <input type="checkbox" style="margin-right:50px" <?php if($type1 =="حفر"){echo ' checked="checked"'; } ?> value="حفر">
                                        <label style="font-size:18px">حفر</label>
                                        <input type="checkbox" style="margin-right:40px" <?php if($type2 =="قزاز"){echo ' checked="checked"'; } ?> value="قزاز">
                                        <label style="font-size:18px">قزاز</label>
                                        <input type="checkbox" style="margin-right:40px" <?php if($type3 =="طباعة"){echo ' checked="checked"'; } ?> value="طباعة">
                                        <label style="font-size:18px">طباعة</label>
                                        <input type="checkbox" style="margin-right:40px" <?php if($type4 =="تطريز"){echo ' checked="checked"'; } ?> value="تطريز">
                                        <label style="font-size:18px">تطريز</label>
                                        <input type="checkbox" style="margin-right:40px" <?php if($type5 =="بلاستيك"){echo ' checked="checked"'; } ?> value="بلاستيك">
                                        <label style="font-size:18px">بلاستيك</label>
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
الرياض - حي الخليج - شارع الأمير بندر بن عبد العزيز - خلف فندق قصر الخليج - تلفون: 011/2395359 - ترخيص (40849)
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
            </html