<?php 
	$URI = str_replace("/index.php","",$_SERVER['REQUEST_URI']);
	$URI = explode("/",$URI);
	$URI = array_values(array_filter($URI));
	$DIR = str_replace('https://','',$DIR);
	$DIR = str_replace('http://','',$DIR);
	$SSL = $_SERVER['REQUEST_SCHEME']."://";
	$SUC = @end(explode('/',$_SERVER['DOCUMENT_ROOT']));
	$LHT = $_SERVER['HTTP_HOST'];
	if($DIR=='public_html'||$DIR==$_SERVER['HTTP_HOST']||$DIR==$SUC){
		$DIR='';
		$NAN = $SSL.$_SERVER['HTTP_HOST'];
	}else{
		$NAN = $SSL.$_SERVER['HTTP_HOST']."/$DIR";	
		unset($URI[0]);
		$URI = array_values(array_filter($URI));
	}
	define("URL", "$NAN");
	define("LIB", URL."/app/libs/");
	define("IMG", URL."/app/img/");
	define("SRC", URL."/src/");
	$rota = trim((empty($URI[0]))?'':$URI[0]);
	$page = trim((empty($URI[1]))?'':$URI[1]);
	$IN = "./site/in";
	$OUT = "./site/out";
	
	$index = 'index.php';
	if($LHT=="localhost"):
		define("V", "?v".date("ZHis"));
	else:
		define("V", "?v".date("ymdHis", filectime($index)));
	endif;
	

	$MOB = FALSE;
	$UAS = array("iPhone","iPad","Android","webOS","BlackBerry","iPod","Symbian","IsGeneric");
	foreach($UAS as $UA){ 
		if (isset($_SERVER['HTTP_USER_AGENT'])) { 
			if (strpos($_SERVER['HTTP_USER_AGENT'], $UA) !== FALSE) { 
				$MOB = TRUE; $MOD = $UA; break; 
			}			
		}
	}
	if($MOB){ $DIS = "".strtolower($MOD); }else{ $DIS = "desktop"; }
	define("MOB", $DIS);
	if(MOB=='desktop'){
		
	}else{
		
	}
	if(!empty($rota)):
		if($rota!='login'):
			if(!file_exists("$OUT/$rota.php")):
				if(strpos($rota,'?')!==false){
					$rota = explode('?',$rota)[0];
					if(!file_exists("$OUT/$rota.php")||$rota==''){
						if($rota!='login'){
							unset($rota);
						}
					}
				}
			endif;
		endif;
	endif;
	

	$DATA = file_get_contents('./files/data.json');
	$EDX = file_get_contents('./files/edx.json');
	$SEO = file_get_contents('./files/seo.json');
	define("SEO", json_decode($SEO,true));
	define("DATA", json_decode($DATA,true)[1]);

?>
