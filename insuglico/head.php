<?php 
	$titler = '';
	$description = '';
	if(empty($rota)):
		$titler = SEO['titulo'];
		$description = SEO['descricao'];
	else:
		if(!empty(SEO['titler'][$rota])):
			$titler = SEO['titler'][$rota];
		endif;
		if(!empty(SEO['description'][$rota])):
			$description = SEO['description'][$rota];
		endif;
	endif;
?>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=5.">
<link rel="icon" href="<?=SRC?>img/fav.png">
<title><?=(isset($titler))?$titler:'';?></title>
<meta name="description" content="<?=(isset($description))?$description:'';?>">
<meta itemprop="url" content="<?=URL?>">
<link rel="canonical" href="<?=URL?>">
<meta itemprop="image" content="<?=SRC?>img/capa.png">
<meta property="og:type" content="website">
<meta property="og:url" content="<?=URL?>">
<meta property="og:title" content="<?=(isset($titler))?$titler:'';?>">
<meta property="og:description" content="<?=(isset($description))?$description:'';?>">
<meta property="og:image" content="<?=SRC?>img/capa.png">
<meta property="og:site_name" content="<?=(isset($titler))?$titler:'';?>">
<meta property="og:locale" content="pt_BR">	
<meta name="author" content="Randiclecio Moura">
<meta name="robots" content="index, follow">

<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">

<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.0/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="<?=URL.'/src/style.css'.V?>" type="text/css" media="all"/>
<?php if(!empty($rota)&&$rota!='adv'):?>
<link rel="stylesheet" href="<?=URL.'/src/out.css'.V?>" type="text/css" media="all"/>
<link rel="stylesheet" href="<?=URL.'/src/outs.css'.V?>" type="text/css" media="all"/>
<?php endif;?>


<?php 
	if(empty($rota)):
		echo (isset(SEO['head']))?stripslashes(SEO['head']):'';
	else:
		if(!empty(SEO['pixels'][$rota])):
			echo SEO['pixels'][$rota];
		endif;
	endif;
?>