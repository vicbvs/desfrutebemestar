<?php 
	$URL = $_REQUEST["url"];
	$dire = $URL."/files/d/";
	$path = dir("../../files/d/");
	$h=[];
	while($file = $path->read()):
		if($file!='.'&&$file!='..'):
			$f=explode('.',$file)[0];
			$x=explode('.',$file)[1];
			if($x!='webp'){
				if(file_exists('../../files/d/'.$f.'.webp')){
					$h[]=["$file",1];					
				}else{
					$h[]=["$file",0];						
				}
			}
		endif;
	endwhile;
	$path->close();
	print_r(json_encode($h));
?>