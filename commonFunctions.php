<?php

function close_connection($conn){
	
	MySqli_close($conn);
}
Class callPrev{
static public function update_baki_mabe3today($b, $mt, $conn){
	 $function_called=false;
	if(!$function_called){
		$function_called=true;
	$query = 'UPDATE daftarM set baki="'.$b.'", mabe3Today="'.$mt.'" ORDER BY daftar_id DESC LIMIT 1';
$result = mysqli_query($conn, $query);


}}
}