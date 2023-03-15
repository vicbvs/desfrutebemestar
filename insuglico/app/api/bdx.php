<?php 
	$data = json_decode(file_get_contents('../../files/edx.json'),true);

	$D0 = $_REQUEST[0];
	$D1 = strip_tags($_REQUEST[1]);

	$data[$D0] = $D1;
	//print_r(json_encode($data));
	file_put_contents('../../files/edx.json',json_encode($data));
?>