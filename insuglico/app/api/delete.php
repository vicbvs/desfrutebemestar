<?php 
	$id = explode('/',$_REQUEST["id"]);
	$img = explode('.',$id[1]);
	$ext = $img[1];
	$pst = '../../files/';

	if(file_exists($pst.'a/'.$id[1])):
		unlink($pst.'a/'.$id[1]);
	endif;
	if(file_exists($pst.'a/'.$img[0].'.webp')):
		unlink($pst.'a/'.$img[0].'.webp');
	endif;

	if(file_exists($pst.'b/'.$id[1])):
		unlink($pst.'b/'.$id[1]);
	endif;
	if(file_exists($pst.'b/'.$img[0].'.webp')):
		unlink($pst.'b/'.$img[0].'.webp');
	endif;

	if(file_exists($pst.'c/'.$id[1])):
		unlink($pst.'c/'.$id[1]);
	endif;
	if(file_exists($pst.'c/'.$img[0].'.webp')):
		unlink($pst.'c/'.$img[0].'.webp');
	endif;

	if(file_exists($pst.'d/'.$id[1])):
		unlink($pst.'d/'.$id[1]);
	endif;
	if(file_exists($pst.'d/'.$img[0].'.webp')):
		unlink($pst.'d/'.$img[0].'.webp');
	endif;

	if(file_exists($pst.'x/'.$id[1])):
		unlink($pst.'x/'.$id[1]);
	endif;
	if(file_exists($pst.'x/'.$img[0].'.webp')):
		unlink($pst.'x/'.$img[0].'.webp');
	endif;
	
?>