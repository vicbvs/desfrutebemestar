<?php 
	require 'thumbs.php';

	if(isset($_FILES)):
		$msg = array(
			1=>"O arquivo enviado excede o limite definido",
			2=>"O arquivo excede o limite definido",
			3=>"O upload do arquivo foi feito parcialmente.",
			4=>"Nenhum arquivo foi enviado",
		);

		$images = array("jpeg","jpg","png","gif","svg","bmp");
		$docs = array("pdf","txt","xml");
		$videos = array("webm","mp4","ogg");
		$audios = array("webm","mp3","ogg","wave","m4a");

		$p = "../../files/";
		if(!empty($_FILES["midia"])):
			$f = $_FILES["midia"];
		elseif(!empty($_FILES["midia[]"])):
			$f = $_FILES["midia[]"];
		endif;
		$c = count($f["name"]);
		$d = date("ymdHis");
		$q = 0;
		$m = [];
		if($c>0): $y=0;
			for($i=0;$i<$c;$i++):
				$e = $f["error"][$i];
				$n = $f["name"][$i];
				$w = $f["type"][$i];
				$s = $f["size"][$i];
				$t = $f["tmp_name"][$i];

				$x = @end(explode(".", $n));
				$a = explode(".", $n)[0];
				$r = $d.$i.'.'.$x;
				if($e!=0):
					$m[] = $msg[$e];
				elseif(in_array($x, $images)):
					$q++;
					if($x != "svg" && $x != "gif"):
						move_uploaded_file($t,$p."x/".$r);
						$pa=$p;
						thumbs($pa,$r,1000,'a');
						thumbs($pa,$r,750,'b');
						thumbs($pa,$r,500,'c');
						thumbs($pa,$r,250,'d');
					elseif($x == "gif"):
						move_uploaded_file($t,$p."d/".$r);
					else:
						move_uploaded_file($t,$p."d/".$r);
					endif;
				endif;
			endfor;
			if($q==$c){
				echo 1;
			}else{
				echo 2;
			}
		endif;
	endif;
?>