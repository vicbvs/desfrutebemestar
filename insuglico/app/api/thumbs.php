<?php
	function thumbs($p,$n,$w,$t){
		$x 		= @end(explode(".", $n));
		$a 		= explode(".", $n)[0];
		$s 		= getimagesize($p.'x/'.$n);
		$h  	= ((100*$w/$s[0])/100)*$s[1];
		$h		= ((int) $h);

		$c=$p.'x/'.$n;
		$ct=$p."$t/".$n;
		list($wi, $he, $type) = getimagesize($c);
		$thumb = @imagecreatetruecolor($w, $h);
		if ($x == 'jpeg'||$x == 'jpg'){
			header('Content-Type: image/'.$x);
			$image = imagecreatefromjpeg($c);
			imagecopyresampled($thumb, $image, 0, 0, 0, 0, $w, $h, $wi, $he);
			imagejpeg($thumb, $ct, 70);
		}
		if ($x == 'png'){
			header('Content-Type: image/png');
			$image = @imagecreatefrompng($c);
			imagealphablending($thumb, false);
			imagesavealpha($thumb, true);
			$transparent = imagecolorallocatealpha($thumb, 0, 0, 0, 0);
			imagefilledrectangle($thumb, 0, 0, $w, $h, $transparent);
			imagecopyresampled($thumb, $image, 0, 0, 0, 0, $w, $h, $wi, $he);
		
			imagepng($thumb, $ct, 9);
			imagewebp($thumb, $p."$t/$a.webp", 100);
		}
		if ($x == 'gif'){
			header('Content-Type: image/gif');
			$image = imagecreatefromgif($c);
			imagecopyresampled($thumb, $image, 0, 0, 0, 0, $w, $h, $wi, $he);
			imagegif($thumb, $ct); 
		}
		if ($x != 'png'){			
			imagewebp($thumb, $p."$t/$a.webp", 80);
		}
		imagedestroy($thumb);
	}	
?>