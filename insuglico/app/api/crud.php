<?php 
	$data = json_decode(file_get_contents('../../files/data.json'),true);

	$D0 = $_REQUEST[0];
	$D1 = $_REQUEST[1];
	$D2 = (isset($_REQUEST[2]))?$_REQUEST[2]:"";
	$D3 = $_REQUEST[3];
	$D4 = (isset($_REQUEST[4]))?$_REQUEST[4]:"";

	$data[0] = date("ZHis")+1;
	$data[1][$D0][0]=$D1;		
	$data[1][$D0][1]=$D2;		
	$data[1][$D0][2]=$D3;		
	$data[1][$D0][3]=$D4;

	//print_r($_REQUEST);
	//print_r($data);
	file_put_contents('../../files/data.json', json_encode($data));
?>