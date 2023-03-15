<link rel="stylesheet" href="<?='app/libs/login.css'.V?>" type="text/css" media="all"/>
<?php if(!empty($SA)){ ?>
<div id="login" class="_seo">
	<form action="" class="seo" method="post" enctype="multipart/form-data">
		<ul class="tabs">
			<li index="1" class="tab active">PV</li>
			<li index="2" class="tab">+PAGINAS</li>
			<li index="2" class="tab">CLOAKER</li>
		</ul>
		<div class="ui stacked segment">
			<div class="tabx active" index="1">
				<input type="hidden" name="seoapp" value="true" value="true">
				<div class="field">
					<label>TÍTULO DA PV</label>
					<input type="text" name="titulo" value="<?=(isset(SEO['titulo']))?SEO['titulo']:'';?>" placeholder="Título do site">
				</div>
				<div class="field">
					<label>DESCRIÇÃO DA PV</label>
					<input type="text" name="descricao" value="<?=(isset(SEO['descricao']))?SEO['descricao']:'';?>" placeholder="Descrição do site!">
				</div>
				<div class="field">
					<label>SCRIPTS DO HEAD DA PV</label>
					<textarea name="head" placeholder="Scripts do Head"><?=(isset(SEO['head']))?stripslashes(SEO['head']):'';?></textarea>
				</div>
				<div class="field">
					<label>SCRIPTS DO BODY DA PV</label>
					<textarea name="body" placeholder="Scripts do Body"><?=(isset(SEO['body']))?stripslashes(SEO['body']):'';?></textarea>
				</div>
				
				<div class="field">
					<label>Link de BackRedirect da PV</label>
					<input type="text" name="backredirect" value="<?=(isset(SEO['backredirect']))?SEO['backredirect']:'';?>" placeholder="Link de BackRedirect da PV!">
				</div>
				<!--<div class="group">
					<div class="field">
						<label>TEMPO EM MINUTOS DE DELAY DO VSL</label>
						<input type="number" name="timer" value="<?='';//(isset(SEO['timer']))?SEO['timer']:'';?>" placeholder="Delay do VSL EX: 10">
					</div>
					<div class="field">
						<label>LINK DE REDIRECIONAMENTO DO QUIZZ</label>
						<input type="url" name="quizz" value="<?='';//(isset(SEO['quizz']))?SEO['quizz']:'';?>" placeholder="Link do Quizz">
					</div>
				</div>-->
				<div class="group">
					<div class="field">
						<label>Usuário</label>
						<input type="text" name="user" value="<?=(isset(SEO['user']))?SEO['user']:'';?>" placeholder="Usuário">
					</div>
					<div class="field">
						<label>Mudar Senha</label>
						<input id="password" type="password" name="pass" value="<?=(isset(SEO['pass']))?SEO['pass']:'';?>" placeholder="Senha">
						<img src="app/img/eye.svg" class="password" width="30" height="30" onclick="mudar()">
					</div>
				</div>
			</div>
			<div class="tabx pages" index="2">
				<?php 
					chdir("site/out/");
					$files = glob("{*.php}",GLOB_BRACE);
					foreach($files as $file):
						if($file!='404.php'&&$file!='login.php'&&$file!='error_log'):
						$f=str_replace('-',' ',explode('.',$file)[0]);
						$x=explode('.',$file)[1];	
				?>
				<div class="field">
					<label><?=$f?></label>
					<group>						
						<input type="text" name="titler[<?=$f?>]" value="<?=(isset(SEO['titler'][$f]))?stripslashes(SEO['titler'][$f]):'';?>" placeholder="Titulo da Página">
						<input type="text" name="description[<?=$f?>]" value="<?=(isset(SEO['description'][$f]))?stripslashes(SEO['description'][$f]):'';?>" placeholder="Descrição da Página">
						<input type="text" name="pages[<?=$f?>]" value="<?=(isset(SEO['pages'][$f]))?stripslashes(SEO['pages'][$f]):'';?>" placeholder="Backredirect aqui">
						<textarea name="pixels[<?=$f?>]" placeholder="Script do Pixel Aqui"><?=(isset(SEO['pixels'][$f]))?stripslashes(SEO['pixels'][$f]):'';?></textarea>
					</group>
				</div>
				<?php endif; endforeach;  ?>
			</div>
			<div class="tabx pixes" index="3">
				<!--<div class="field">
					<label>Nome da black page</label>
					<input type="text" name="blackpage" value="<?='';//(isset(SEO['blackpage']))?SEO['blackpage']:'';?>" placeholder="ex: adv">
				</div>-->
				<a href="https://mentoriafernando.com/como-usar-cloaker" target="_blank" class="tutor"><span uk-icon="icon: youtube"></span>Clique aqui e aprenda usar o cloaker.</a>
				<div class="field">
					<label>Url da white page</label>
					<input type="text" name="whitepage" value="<?=(isset(SEO['whitepage']))?SEO['whitepage']:'';?>" placeholder="ex: https://nomedosite.com">
				</div>
				<div class="field">
					<label>SCRIPT DO CLOAKER</label>
					<textarea name="cloaker" placeholder="Script do cloaker"><?=(isset(SEO['cloaker']))?stripslashes(SEO['cloaker']):'';?></textarea>
				</div>
			</div>
			<div class="field">
				<button type="submit" class="submit button"><b>Atualizar</b></button>
			</div>
			<a href="<?=URL?>" class="home"><img src="app/img/home.svg" alt="user" width="20" height="20">IR PARA HOME</a>
		</div>
		<a href="https://www.instagram.com/fernandovasconcelos" target="_blank" class="dev">Me siga no instagram @FernandoVasconcelos</a>
	</form>
</div>
<script>	
	const pages = <?=(!empty($PGS))?json_encode($PGS):''?>
	setTimeout(function() {
		for(k in pages){
			document.querySelector('input[name="pages['+k+']"]').value = pages[k];
		}
	}, 300);
	let tabs = document.querySelectorAll('.tab');
	for(let i=0;i<tabs.length;i++){
		let tab = tabs[i]
		tab.addEventListener('click',function(){
			document.querySelectorAll('.tabx')[0].classList.remove('active');
			document.querySelectorAll('.tabx')[1].classList.remove('active');
			document.querySelectorAll('.tabx')[2].classList.remove('active');
			document.querySelectorAll('.tabx')[i].classList.add('active');
			
			document.querySelectorAll('.tab')[0].classList.remove('active');
			document.querySelectorAll('.tab')[1].classList.remove('active');
			document.querySelectorAll('.tab')[2].classList.remove('active');
			document.querySelectorAll('.tab')[i].classList.add('active');
		})
	}
</script>
<?php }else{?>
<div id="login">
	<form action="" class="login" method="post">
		<img src="app/img/login.svg" alt="user" width="200" height="400" class="user">
		<div class="ui stacked segment">
			<input type="hidden" name="logg-app" value="true">
			<div class="field">
				<label>Usuário</label>
				<input type="text" name="user" placeholder="User">
			</div>
			<div class="field">
				<label>Pass</label>
				<input type="password" name="pass" placeholder="Senha">
			</div>
			<div class="field">
				<button type="submit" class="submit button"><b>Entrar</b></button>
			</div>
		</div>
		<a href="https://www.instagram.com/fernandovasconcelos" target="_blank" class="dev">Me siga no instagram @FernandoVasconcelos</a>
	</form>
</div>
<?php }?>