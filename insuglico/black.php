<!doctype html>
<html lang="pt-br">
<head>
<?php 
	require('app/api/editor.php');
	require('app/api/logar.php');
	require('head.php');
?>
</head>

<body>
	<!-- Conteúdo geral !-->
	<main class="main" id="main">	
	<?php 
	if(isset($SA)):
		include("app/api/modal.php");
	endif;
	if(!empty($rota)):
		if($rota=='login'):
			include("app/api/login.php");
		else:
			if(file_exists("$OUT/$rota.php")):
				include("$OUT/$rota.php");
			else:
				include("$OUT/404.php");
			endif;
		endif;
	else:
		include	"$IN/header.php";
		include	"$IN/beneficios.php";
		include	"$IN/produtos.php";
		//include	"$IN/oferta.php";
		include	"$IN/beneficios3.php";
		include	"$IN/uso.php";
		include	"$IN/formula.php";
		include	"$IN/beneficios2.php";
		include	"$IN/resultado.php";
		include	"$IN/comments.php";
		include	"$IN/produtos.php";
		//include	"$IN/oferta.php";
		include	"$IN/garantia.php";
		include	"$IN/faq.php";
		include	"$IN/whatsapp.php";
	endif;
	?>
	</main>
	<!-- Conteúdo geral !-->
	<?php if(!empty($rota)&&$rota!='login'||empty($rota)):
		include	"$IN/footer.php";
	endif; ?>
	<?=(isset(SEO['body']))?stripslashes(SEO['body']):'';?>
	<div id="fb-root"></div>
	<script async defer src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.6"></script>  
	<script src="<?=LIB.'main.js'.V?>"></script>
	<!-- JS Bootstrap !-->
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.0/js/bootstrap.min.js"></script>
	<!-- JS Bootstrap !-->
</body>
</html>