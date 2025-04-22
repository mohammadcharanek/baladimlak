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

$badlahT_ID = $_POST['naw3al3amal'];

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
$sql = " INSERT INTO " . $tbl_name . "(badlahT_ID, clientname, mobilenum, dateOfCompletion, tool, katef, kom1, kom2, kom3, sadr, batn, asfal, raqba, qita3, comments, toolp, shi3arN, shi3ar, hizam, rotbahN, rotbah, base, splaytN, splayt, fa5th, kabou3N, kabou3, sak, law7aN, law7a, asfalbnt, yakaN, yaka, waynakN, waynak, notahN, notah, kravtaN, kravta, qty, bQty, price, vat, omla, overallP, wasl, baki, finished, received) VALUES ('" . $badlahT_ID . "', '" . $clientname . "', '" . $mobilenum . "', '" . $dateOfCompletion . "', '" . $tool . "', '" . $katef . "', '" . $kom1 . "', '" . $kom2 . "',  '" . $kom3 . "', '" . $sadr . "', '" . $batn . "', '" . $asfal . "', '" . $raqba . "', '" . $qita3 . "', '" . $comments . "', '" . $toolp . "', '" . $shi3arN . "', '" . $shi3ar . "', '" . $hizam . "', '" . $rotbahN . "', '" . $rotbah . "', '" . $base . "', '" . $splaytN . "','" . $splayt . "', '" . $fa5th . "', '" . $kabou3N . "','" . $kabou3 . "', '" . $sak . "', '" . $law7aN . "','" . $law7a . "', '" . $asfalbnt . "', '" . $yakaN . "','" . $yaka . "', '" . $waynakN . "','" . $waynak . "', '" . $notahN . "','" . $notah . "', '" . $kravtaN . "','" . $kravta . "', '" . $qty . "', '" . $bQty . "', '" . $price . "', '" . $vat . "', '" . $omla . "', '" . $overallP . "', '" . $wasl . "', '" . $baki . "', '" . $finished . "', '" . $received . "')";
$result = mysqli_query($connection, $sql);

header("Location: addingBadlahSuccess.html");

MySqli_close($connection);
 
 
