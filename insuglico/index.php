<?php
	session_start(); 
	$DIR = basename(__DIR__);
	require('app/api/rota.php');

	if($LHT=="localhost"){
		require 'black.php';
	}else{
		if(file_exists("cloaker.php")):
			require 'cloaker.php';
		else:
			require 'black.php';			
		endif;
	}
?>