  <?php
  $host='localhost'; // Host name
  $username='root'; // Mysql username
  $password=''; // Mysql password
  $db_name='gicontra_sewingFactory'; // Database name

  // Connect to server and select database.
  $connection= MySqli_connect($host, $username, $password)or die("cannot connect");
  MySqli_select_db($connection, $db_name)or die("cannot select DB");

    
mysqli_query($connection, "SET NAMES 'utf8'"); 
mysqli_query($connection, 'SET CHARACTER SET utf8'); 	


    if(isset($_POST['select2'])){
    $badlah_id=$_POST['select2'];
	}else{
		$badlah_id=0;
	}
if(isset($_POST['qty'])){
$qty=$_POST['qty'];}
else{
	$qty=0;
}
if(isset($_POST['bQty'])){
$qtyOverall=$_POST['bQty'];}
else{
	$qtyOverall=0;
}
if(isset($_POST['badlahTypeSelect'])){
$badlahType=$_POST['badlahTypeSelect'];}
else{
	$badlahType=0;
}
if(isset($_POST['badlahTyID'])){
$badlahTyID=$_POST['badlahTyID'];}
else{
	$badlahTyID=0;
}
if(isset($_POST['workerName'])){
$workerName=$_POST['workerName'];}
else{
	$workerName="";
}
if(isset($_POST['txtInput2'])){
$omola=$_POST['txtInput2'];}
else{
	$omola=0;
}
    // To protect MySQL injection (more detail about MySQL injection)

  $sql2 = "SELECT badlahType FROM badlahType where badlahT_ID='".(isset($_POST['badlahTypeSelect']) ? $_POST['badlahTypeSelect'] : 0)."'";
  $result2 = mysqli_query($connection, $sql2);
  //
  while ($row = mysqli_fetch_array($result2)) {

       $badlahT= $row['badlahType'];
    
  }

        if(isset($_POST['addomola']))
        {
        
          
          $sql="INSERT INTO omola (badlah_id, badlahT_ID, qty, qtyOverall, badlahType, workerName, omola) VALUES ('".$badlah_id."', '".$badlahTyID."', '".$qty."', '".$qtyOverall."', '".$_POST['badlahTypeSelect']."',  '".$workerName."', '".$omola."')";
          $result=mysqli_query($connection, $sql);
          
          
          
  $sql3 = "SELECT qty FROM badlah where badlah_id='".$badlah_id."'";
  $result3 = mysqli_query($connection, $sql3);

  while ($row = mysqli_fetch_array($result3)) {

       $qtyVal= $row['qty'];
    
  }
  $qtyVal=$qtyVal-$qty;

      $updateQuery2="UPDATE badlah  SET qty= '" . $qtyVal . "' WHERE badlah_id='" . $badlah_id."'";
      
      $retval4=mysqli_query($connection, $updateQuery2);
    

          //header("Location: " . $_SERVER['REQUEST_URI']);
     //exit();
          
        }
        
    if(isset($_POST['deleted'])){
        

        $badlah_id = "SELECT badlah_id FROM omola where omola_ID='".$_POST['hidden']."'";

        $result7 = mysqli_query($connection, $badlah_id);

        while ($row = mysqli_fetch_array($result7)) {

          $badlah_idFound= $row['badlah_id'];
    
          }
		  if(isset($badlah_idFound)){
			  
		  }
		  else{$badlah_idFound=0;}
      
      $deleteQuery="DELETE FROM omola WHERE omola_ID='".$_POST['hidden']."'";
      
      $retval2=mysqli_query($connection, $deleteQuery);
      
        
          $sql6 = "SELECT qty FROM badlah where badlah_id='".$badlah_idFound."'";
          $result6 = mysqli_query($connection, $sql6);

          while ($row = mysqli_fetch_array($result6)) {
if(isset($row['qty'])){
              $qtyVal2= $row['qty'];
}
          }

if(isset($qtyVal2)){
          $qtyVal2++;
}
      $updateQuery3="UPDATE badlah  SET qty= '" . (isset($qtyVal2)?$qtyVal2:1) . "' WHERE badlah_id='" . $badlah_idFound."'";
      
      $retval8=mysqli_query($connection, $updateQuery3);
          
  };
      if(isset($_POST['update'])){
      
      $updateQuery="UPDATE omola  SET badlah_id= '" . $_POST['badlah_id'] . "', qty='".$_POST['qty']."', badlahType='".$_POST['badlahType']."' , workerName='".$_POST['workerName']."', omola='".$_POST['omola']."' WHERE omola_ID='" . $_POST['hidden']."'";
      
      $retval2=mysqli_query($connection, $updateQuery);
    
      
      };
          
          
    

 
  ?>
  <html>
  <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <style>
  table {
    border-collapse: collapse;
    width: 980px;
    	
}
table#header{
border-collapse: collapse;
    width: 980px;
	height: 40px;

}
table#middle{
border-collapse: collapse;
    width: 980px;
	height: 120px;
}
table#footer {
border-collapse: collapse;
    width: 980px;
	height: 60px;

}
table#footer2 {
border-collapse: collapse;
    width: 980px;
	height: 60px;

}
table#middle td{width:130px;}
tr{height:5px;}
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
    width: 80px;
    height:7px;
    padding: 11px 14px;
    margin: 1px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}
input[type=submit] {
    width: 100%;
    background-color: #4CAF50;
    color: white;
    padding: 7px 7px;
    margin: 0px 0;
    border: none;
    border-radius: 3px;
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
    margin: 4px 0;
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
    padding: 1px 8px;
    margin: 8px 200px 2px 2px;
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
    padding-right: 2px;
}

.error {color: #FF0000;}

.styled select {
  background: transparent;
  width: 150px;
  font-size: 18px;
   margin-bottom:20px;
 border-style: solid;
    
  height: 53px;
}

.styled {
  margin: 8px 5px 8px 5px;
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
  margin: 7px 5px 7px 5px;
  width: 120px;
  height: 53px;
  
  
a.button {
    -webkit-appearance: button;
    -moz-appearance: button;
    appearance: button;

    text-decoration: none;
    color: initial;
}
  
}

  </style>


    <!-- scripts -->
    <script src="jquery-3.3.1.min.js"></script>
	
    <script src="select2.js"></script>
	
  
  <link href="select2.min.css" rel="stylesheet" />
<script src="select2.min.js"></script>

  <script>
  $('.noEnterSubmit').keypress(function(e){
      if ( e.which == 13 ) return false;
      //or...
      if ( e.which == 13 ) e.preventDefault();
   }); 
  </script>                            
  
                              
    <style type="text/css">
    body {
      padding: 40px;
    }
    </style>
  
  <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
   <link rel="stylesheet" href="select2.css">

    <script>
      $(function(){
        // turn the element to select2 select style
        $('#select2').select2();
      });
    </script>
    <script>
    console.log($('#myselect').val());

  // all option's value
  $('#myselect').find('option').each(function(){
      console.log($(this).text());
      console.log($(this).val());
  });

  // change event
  $('#myselect').change(function(){
      console.log($(this).find(':selected').text());
      console.log($(this).find(':selected').val());
  });
    </script>               
  </head>
  <body style="background-color:#F0FFF0;" dir="rtl">
  <h3 style="text-align:right; float:right;margin-top:0px">عمولة العامل</h3>
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


  <table style="width:1040px;margin-top:50px">
  <form method="post" action="omolaUser.php">
  <table id="header">
  <tr>



  <td>
  <h3 style="width:200px;color:black;margin-top:1px;text-align:center">رقم الفاتورة</h3>
  </td>
  <td>
  <?php
   

  $omolaArray = array();

  $sql = "SELECT omola.badlah_id FROM omola,badlah WHERE omola.badlah_id = badlah.badlah_id and badlah.qty < 1";
  $omolaRes = mysqli_query($connection, $sql);
  $result = $omolaRes->fetch_all(MYSQLI_NUM);

  foreach($result as $row){
      
      $omolaArray[] = $row[0];
      
  }

  $sql = "SELECT badlah_id FROM badlah";
  $result = mysqli_query($connection, $sql);
  echo '<select  style="width:190px" name="select2" id="select2"  onchange="showBadlahType(this.value);totalOmola();">';
  echo "<option value=''>رقم الفاتورة</option>";
  while ($row = mysqli_fetch_array($result)){
      
      if(! in_array($row['badlah_id'] , $omolaArray)){
          
          echo "<option value='".$row['badlah_id']."'>" . $row['badlah_id'] . "</option>";
      }
      
  }
  echo '</select>';

  ?>

  </td>

  <td>

  </td>
  <td>
  </td>
  <td>
  </td>

  <td>
  <h3 style="width:200px;color:black;margin-top:1px;text-align:center">إجمالي الكمية</h3>
  </td>
  <td>
  <input type="text" name="bQty" id="bQty" style="width:190px">
  </td>
  <td style="text-align:right;">
  <input type="button" value="الصفحة الرئيسية" class="homebutton" id="btnHome" 
  onClick="document.location.href='mainPageUser.php'" />

      </td>

  </tr>
  <tr style="background-color:#F0FFF0">

  <td>
  <h3 style="width:200px;color:black;margin-top:1px;text-align:center">نوع البدلة</h3>
  </td>
  <td>
  <?php
  
  $sql = "SELECT * FROM badlahType";
  $result = mysqli_query($connection, $sql);

  echo '<select style="width:190px" name="badlahTypeSelect" id="badlahTypeSelect" required>';
  echo "<option value='' selected>نوع البدلة</option>";
  while ($row = mysqli_fetch_array($result)) {

      echo "<option value='".$row['badlahType']."'>".$row['badlahType']."</option>";
      $badlahType_ID=$row['badlahT_ID'];
	
  }
  echo "</select>";
  echo "<input type='hidden' value='".$badlahType_ID."' name='badlahTyID' id='badlahTyID'></input>";
  echo '<br>';

  ?>

  </td>
  <td style="width:80px;">
   

  </td>

  <td>
  </td>

  <td>
  </td>

  <td>
  <h3 style="width:200px;color:black;margin-top:1px;text-align:center">إسم العامل
  </h3>
  </td>
  <td>
  <?php
   
  $sql = "SELECT wName FROM workerTB";
  $result = mysqli_query($connection, $sql);

  echo '<select style="width:190px" name="workerName" id="workerName" required>';
  echo "<option value=''>إسم العامل</option>";
  while ($row = mysqli_fetch_array($result)) {
      echo "<option value='" . $row['wName'] . "'>" . $row['wName'] . "</option>";
  }
  echo "</select>";

  ?>
  </td>
  </tr>
  <tr>
  <td>
  <h3 style="width:200px;color:black;margin-top:1px;text-align:center">الكمية</h3>
  </td>
  <td>
  <input type="text" id="qty" style="width:190px" name="qty" onkeyup="doMathMultiplyOmola()"></input>
  </td>
  <td>
  </td>
  <td>
  </td>
  <td>
  </td>
  <td>
  <h3 style="width:200px;color:black;margin-top:1px;text-align:center">العمولة</h3>
  </td>
  <td>


  <input name="txtInput" id="txtInput" type ="text" style="width:100px;" onkeyup="totalOmola();"></input>
  &nbsp;

  </td>
  </tr>
  <tr>
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
          
      <td>
          <h3 style="width:200px;color:black;margin-top:1px;text-align:center">إجمالي العمولة</h3>
          </td>
          
      <td>
          <input name="txtInput2" id="txtInput2" type ="text" style="width:100px;"></input>
          </td>
      </tr>

  <tr>
  <td></td>
  <td>
  <input type="submit" value="أضف العمولة" style="width:140px;height:40px;line-height:18px" name="addomola" id="addomola"></input>
  </td>
  </tr>

  </table>
  </form>
  </table>

  <table style="width:1340px">
  <table>
  <tr>

  <td>
  </td>
  </tr>

  </table>
  <script>
                              $(document).ready(function() {
      $("#select2").select2({});
  });
                              </script>
  <?php
   
  $sql = "SELECT * FROM omola";
  //badlah_id, qty, badlahType, workerName, omola
  $result = mysqli_query($connection, $sql);
  echo "<table style='width:990px;margin-right:20px;margin-top:10px;'>";
  echo "<tr style='height:10px'>"; 
  echo "<th style='width:40px;'>الرقم</th><th style='width:70px;'>رقم الفاتورة</th><th style='width:30px'>الكمية</th><th style='width:90px;'>نوع البدلة</th><th style='width:90px'>إسم العامل</th><th style='width:150px;text-align:center;'>العمولة</th><th style='background-color:#F0FFF0;width:120px'><th style='background-color:#F0FFF0;width:120px'></th></tr>";
  $count=1;
  while ($row = mysqli_fetch_array($result)){
  echo '<form method="POST" action="omolaUser.php">';
  echo "<table style='width:780px;margin-right:37px'>";
  echo "<tr>";
  echo "<td style='width:35px'>";
      //echo "<input style='width:35px; margin-left:0px;margin-right:2px' name=omola_ID value='" . $row['omola_ID'] . "' disabled>";
echo '<strong style="width:40px;font-size:15px;align:center;display: inline;display: block;">' . $count. ' </strong>';     
	 echo "</td>";   

  echo "<td style='width:80px;'>";
      echo "<input style='width:80px; margin-left:0px;margin-right:2px;color:red;text-align:center;' name='badlah_id' id='badlah_id' value='" .  $row['badlah_id'] . "'".' readonly></input>';
      echo "</td>";   
      echo "<td>";
        echo "<input name=qty style='width:40px;text-align:center;' value='" . $row['qty'] . "'>";
        echo "</td>";
        echo "<td>";
          echo "<input name=badlahType style='width:150px' value='" . $row['badlahType'] . "'>";
          echo "</td>";
          
        echo "<td>";
          echo "<input name=workerName style='width:150px' value='" . $row['workerName'] . "'>";
          echo "</td>";
          
           echo "<td>";
          echo "<input name=omola style='width:160px' value='" . $row['omola'] . "'>";
          echo "</td>";
          
        echo "<td style='width:80px'>" . "<input style='height:28px;width:74px;text-align:center;line-height: 6px;' type=submit name=deleted value=إزالة" . " </td>";

        
        echo "<td  style='width:80px'>" . "<input style='height:28px;width:74px;text-align:center;line-height: 6px;' type=submit name=update value=تحديث" . " </td>";
        echo "<td>" . "<input type=hidden  name=hidden value='". $row['omola_ID'] ."' </td> ";
        
        echo "</tr>";
      
$count++;
  echo "</table>";
  echo "</form>";
  }
  echo "</table>";

  ?>
  <script>
  function showBadlahType(str) {
    if (str=="") {
      document.getElementById("badlahTypeSelect").innerHTML="";
      return;
    } 
    if (window.XMLHttpRequest) {
      // code for IE7+, Firefox, Chrome, Opera, Safari
      xmlhttp=new XMLHttpRequest();
      xmlhttp2=new XMLHttpRequest();
      xmlhttp3=new XMLHttpRequest();
      xmlhttp4=new XMLHttpRequest();
          
    } else { // code for IE6, IE5
      xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
          xmlhttp2=new ActiveXObject("Microsoft.XMLHTTP");
          xmlhttp3=new ActiveXObject("Microsoft.XMLHTTP");
          xmlhttp4=new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.onreadystatechange=function() {
      if (this.readyState==4 && this.status==200) {
        document.getElementById("badlahTypeSelect").value=this.responseText;
      }
    }
    
    xmlhttp.open("GET","getDataSelectOmola.php?q="+str,true);
    xmlhttp.send();
    xmlhttp2.onreadystatechange=function() {
      if (this.readyState==4 && this.status==200) {
        document.getElementById("txtInput").value=this.responseText;
      }
    }
    xmlhttp2.open("GET","getDataSelectOmola2.php?g="+str,true);
    xmlhttp2.send();
    
    xmlhttp3.onreadystatechange=function() {
      if (this.readyState==4 && this.status==200) {
        document.getElementById("qty").value=this.responseText;
      }
    }
    xmlhttp3.open("GET","getDataSelectOmola3.php?g="+str,true);
    xmlhttp3.send();
    
     xmlhttp4.onreadystatechange=function() {
      if (this.readyState==4 && this.status==200) {
        document.getElementById("bQty").value=this.responseText;
      }
    }
    xmlhttp4.open("GET","getDataSelectOmola4.php?g="+str,true);
    xmlhttp4.send();
   
    resetQty();
  }
  </script>
  <script>
  function resetQty(){
      document.getElementById("txtInput2").value=0;    
      document.getElementById("bQty").value=0;    
  }

  function totalOmola(){


setTimeout(function(){

      var omola = document.getElementById("txtInput").value;
      var qty = document.getElementById("qty").value;
      var bQty = document.getElementById("bQty").value;
      var total = omola*qty;
     document.getElementById("txtInput2").value = total;


},800);


  }

  </script>
  <script src="doMathMultiplyOmola.js"></script>
<script>
if (window.history.replaceState) {
  window.history.replaceState( null, null, window.location.href );
}
</script>
  
  <?php
   MySqli_close($connection);
  ?>
  </body>
  </html>