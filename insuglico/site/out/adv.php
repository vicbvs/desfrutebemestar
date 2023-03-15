<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
<link href="<?=URL?>/src/bootstrap.min.css" rel="stylesheet"/>
<style>
	#footer{display: none;}
	#advtopo .barra-globocom .barra-itens{
		margin: 0;
	}
	#advtopo .barra-globocom .container{
		justify-content: space-between;
		display: flex;
		align-items: center;
	}
	#advfooter{
		margin: 0;
	}
	a.cta{position: relative; height: inherit;}
	a.cta img{height: inherit;}
</style>
<?php $S='advOut';?>
<section id="advtopo">
  <div class="barra-globocom">	
	<div class="container">
      <ul class="barra-itens">
        <li> <a class="barra-item-noticias" href="<?=URL?>">globo.com</a> </li>
        <li> <a class="barra-item-esportes small" href="<?=URL?>">g1</a> </li>
        <li> <a class="barra-item-gshow" href="<?=URL?>">ge</a> </li>
        <li> <a class="barra-item-famosos-etc small" href="<?=URL?>">gshow</a> </li>
        <li> <a class="barra-item-videos" href="<?=URL?>">Videos</a> </li>
      </ul>	  
	  <div id="barra-auth-area" class="auth-area">
        <ul class="nav">
          <li> <a class="nav-link barra-item-servico" aria-current="page" href="<?=URL?>">ASSINE JÁ</a> </li>
          <li> <a class="nav-link barra-item-servico" href="<?=URL?>">CENTRAL</a> </li>
          <li> <a class="nav-link barra-item-servico" href="<?=URL?>">E-MAIL </a> </li>
          <li> <a class="nav-link barra-item-servico entrar" aria-disabled="true" href="<?=URL?>">ENTRAR ›</a> </li>
        </ul>
      </div>
	</div>
  </div>
  <nav class="navbar-light">
    <div class="container">
      <div class="row">
        <div class="col-3"> <a href="<?=URL?>" target="_blank"> <img class="menu-mobile" src="<?=URL?>/src/img/menu-hamburguer.png" /></a> <a href="<?=URL?>"></a><a class="text-menu">MENU</a><a href="<?=URL?>" target="_blank"></a> </div>
        <div class="col-6">
          <h1>BEM ESTAR</h1>
        </div>
        <div class="col-3">
          <form class="d-flex">
            <input class="form-control me-2" type="search" placeholder="BUSCAR" aria-label="Search" />
            <a href="<?=URL?>" target="_blank"><img src="<?=URL?>/src/img/icon-pesquisa.png"  class="img-fluid icon-pesquisa"></a>
          </form>
        </div>
      </div>
    </div>
  </nav>
</section>
<section class="container corpo">
	<div class="row">
		<div class="col-sm-8">

			<p class="materia-cabecalho" <?=G($S,1,T)?>><?=Q($S,1,T)?></p>

			<h2 class="titulo" <?=G($S,2,T)?>><?=Q($S,2,T)?></h2>

			<div <?=G($S,3,E)?>><?=Q($S,3,E)?></div>

			<a href="<?=URL?>" target="_blank"> <img <?=G($S,4,M)?> class="img-fluid conteudo"/></a>
			<p class="descricao"<?=G($S,5,T)?>><i class="fas fa-camera"></i><?=Q($S,5,T)?></p>

			<div <?=G($S,6,E)?>><?=Q($S,6,E)?></div>

			<a href="<?=URL?>" target="_blank"><img class="img-fluid conteudo" <?=G($S,7,M)?> /></a>
			<p class="descricao" <?=G($S,8,T)?>><i class="fas fa-camera"></i><?=Q($S,8,T)?></p>

			<div <?=G($S,9,E)?>><?=Q($S,9,E)?></div>

			<a href="<?=URL?>" target="_blank"><img class="img-fluid conteudo" <?=G($S,10,M)?> /></a>
			<p class="descricao" <?=G($S,11,T)?>><i class="fas fa-camera"></i><?=Q($S,11,T)?></p>

			<div <?=G($S,12,E)?>><?=Q($S,12,E)?></div>
			
			<a href="<?=URL?>" target="_blank"><img class="img-fluid conteudo" <?=G($S,13,M)?> /></a>
			<p class="descricao" <?=G($S,14,T)?>><i class="fas fa-camera"></i><?=Q($S,14,T)?></p>

			<div <?=G($S,15,E)?>><?=Q($S,15,E)?></div>

			<a href="<?=URL?>" target="_blank"><img class="img-fluid conteudo" <?=G($S,16,M)?> /></a>
			<p class="descricao" <?=G($S,17,T)?>><i class="fas fa-camera"></i><?=Q($S,17,T)?></p>

			<div <?=G($S,18,E)?>><?=Q($S,18,E)?></div>

			<a href="<?=URL?>" target="_blank"><img class="img-fluid conteudo" <?=G($S,19,M)?> /></a>
			<p class="descricao" <?=G($S,20,T)?>><i class="fas fa-camera"></i><?=Q($S,20,T)?></p>

			<div <?=G($S,21,E)?>><?=Q($S,21,E)?></div>

			<a href="<?=URL?>" target="_blank"><img class="img-fluid conteudo" <?=G($S,22,M)?> /></a>
			<p class="descricao" <?=G($S,23,T)?>><i class="fas fa-camera"></i><?=Q($S,23,T)?></p>

			<div <?=G($S,24,E)?>><?=Q($S,24,E)?></div>

			<a href="<?=URL?>" target="_blank"><img class="img-fluid conteudo" <?=G($S,25,M)?> /></a>
			<p class="descricao" <?=G($S,26,T)?>><i class="fas fa-camera"></i><?=Q($S,26,T)?></p>

			<div <?=G($S,27,E)?>><?=Q($S,27,E)?></div>

			<div <?=G($S,30,E)?>><?=Q($S,30,E)?></div>

			<a href="<?=URL?>" target="_blank"><img class="img-fluid conteudo" <?=G($S,31,M)?> /></a>
			<p class="descricao" <?=G($S,32,T)?>><i class="fas fa-camera"></i><?=Q($S,32,T)?></p>

			<div <?=G($S,33,E)?>><?=Q($S,33,E)?></div>
			
			<a class="bt" <?=G($S,"33A",L)?>><?=Q($S,"33A",L)?></a>
			<h3 <?=G($S,"33B",T)?>><?=Q($S,"33B",T)?></h3>
			<a target="_blank" href="<?=URL?>"><img <?=G($S,34,M)?> class="banner-dep" /></a>
			<a target="_blank" href="<?=URL?>"><img <?=G($S,35,M)?> class="banner-dep" /></a>


			<div <?=G($S,37,E)?>><?=Q($S,37,E)?></div>




			<div class="box-promo">

				<div class="desconto" <?=G($S,38,E)?>><?=Q($S,38,E)?></div>
				<p style="text-align: center;"><strong><span style="color: #e50000">Oferta disponível até:</strong></span>
					<script language="JavaScript">
						document.write("<font color='#000'>")
						var mydate = new Date()
						var year = mydate.getYear()
						if (year < 2000)
							year += (year < 1900) ? 1900 : 0
						var day = mydate.getDay()
						var month = mydate.getMonth()
						var daym = mydate.getDate()
						if (daym < 10)
							daym = "0" + daym
						var dayarray = new Array("Domingo", "Segunda-feira", "Terça-feira", "Quarta-feira", "Quinta-feira", "Sexta-feira", "Sábado")
						var montharray = new Array(" de Janeiro de ", " de Fevereiro de ", " de Março de ", "de Abril de ", "de Maio de ", "de Junho de", "de Julho de ", "de Agosto de ", "de Setembro de ", " de Outubro de ", " de Novembro de ", " de Dezembro de ")
						document.write("   " + dayarray[day] + ", " + daym + " " + montharray[month] + year + " ")
						document.write("</b></i></font>")
					</script>
				</p>

				<div <?=G($S,39,E)?>><?=Q($S,39,E)?></div>

				<div <?=G($S,40,E)?>><?=Q($S,40,E)?></div>

				<img class="mockup" <?=G($S,41,D)?>>

				<div class="link">
					<a class="bt pulsar" <?=G($S,42,L)?>><?=Q($S,42,L)?></a>
				</div>

			</div>



			</center>
			</p>

			<h5>28 COMENTÁRIOS</h5>
			<hr />
			<p class="glbComentarios-disclaimer"> Os comentários são de responsabilidade exclusiva de seus autores e não representam a opinião deste site. Se achar algo que viole os termos de uso, denuncie. Leia as perguntas mais frequentes para saber o que é impróprio ou ilegal.</p>
			<p class="glbComentariosFechados">Este conteúdo não recebe mais comentários.</p>

			<div class="btn-group mr-2" role="group" aria-label="First group">
				<button type="button" class="btn ">RECENTES</button>
				<button type="button" class="btn ">POPULARES</button>
			</div>

			<div class="comentarios">
				<?php for($i=1;$i<=5;$i++): ?>
				<div class="row" style="margin-bottom: 30px">
					<div class="col-2"><img <?=G($S,"a$i",M)?> class="foto img-fluid banner-lateral"></div>
					<div class="col-10">
						<p class="nome" <?=G($S,"b$i",T)?>><?=Q($S,"b$i",T)?></p>
						<p class="text-comentario" <?=G($S,"c$i",A)?>><?=Q($S,"c$i",A)?></p>
						<a href="<?=URL?>" class="like"><i class="fas fa-thumbs-up"></i> Curtir</a>
						<a href="<?=URL?>" class="like"><i class="fas fa-reply"></i> Responder</a>
						<a href="<?=URL?>" class="like"><i class="fas fa-flag"></i></i> Denunciar</a>
					</div>
				</div>
				<?php endfor; ?>
			</div>
			<div class="btn-group mr-2" role="group" aria-label="First group"> <a href="<?=URL?>" target="_blank">
					<button type="button" class="btn ">CARREGAR MAIS COMENTÁRIOS</button>
				</a></div>
		</div>



		<div class="col-sm-4">
			<div class="destaques">
				<div class="titulo-destaques"> <strong class="titulo">Primeira página</strong> </div>
				<hr />
				<div class="row">
					<div class="col-5"> <a href="<?=URL?>" target="_blank"><img <?=G($S,43,M)?> class="img-fluid" /></a></div>
					<div class="col-7"> <a href="<?=URL?>" target="_blank"<?=G($S,44,T)?>><?=Q($S,44,T)?></a></div>
				</div>
				<hr />
				<div class="row">
					<div class="col-5"> <a href="<?=URL?>" target="_blank"><img <?=G($S,45,M)?> class="img-fluid" /></a></div>
					<div class="col-7"> <a href="<?=URL?>" target="_blank"<?=G($S,46,T)?>><?=Q($S,46,T)?></a></div>
				</div>
				<hr />
				<div class="row"> <a class="todos-destaques" href="<?=URL?>" target="_blank"> Veja todos os destaques ›</a> </div>
			</div>
			<div class="destaques" id="header">
				<div class="titulo-destaques"> <strong class="titulo" <?=G($S,47,T)?>><?=Q($S,47,T)?></strong> </div>
				<a href="<?=URL?>" target="_blank"><img <?=G($S,48,D)?> class="img-fluid banner-lateral" /></a>
			</div>
		</div>
	</div>
</section>


<footer id="advfooter">
 	<div class="container">
  <div class="row">
    <ul class="barra-itens" data-analytics-context="Link Produto">
      <li class="">
        <div class="v-separator"></div>
        <a href="<?=URL?>" accesskey="n" class="barra-item-noticias">globo.com</a> </li>
      <li class="">
        <div class="v-separator"></div>
        <a href="<?=URL?>" accesskey="e" class="barra-item-esportes no-show ">gshow</a> </li>
      <li class="">
        <div class="v-separator"></div>
        <a href="<?=URL?>" accesskey="i" class="barra-item-gshow">vídeos</a> </li>
      <li class="ultimo">
        <div class="v-separator"></div>
        <a href="<?=URL?>" accesskey="t" class="barra-item-famosos-etc">todos os sites</a> </li>
    </ul>
  </div>
  <hr>
  <div class="row">
    <div class="col-sm-4"> <span class="pull-left">© Copyright <?=date("Y")?> - Bem Estar</span></div>
    <div class="col-sm-8 rith">
      <ul class="barra-itens left" data-analytics-context="Link Produto">
        <li class="">
          <div class="v-separator"></div>
          <a href="<?=URL?>" accesskey="n" class="barra-item-noticias">Política de Privacidade</a> </li>
        <li class="">
          <div class="v-separator"></div>
          <a href="<?=URL?>" accesskey="e" class="barra-item-esportes no-show ">Termos de Uso</a> </li>
        <li class="">
          <div class="v-separator"></div>
          <a href="<?=URL?>" accesskey="i" class="barra-item-gshow">Aviso Legal </a> </li>
        <li class="ultimo">
          <div class="v-separator"></div>
          <a href="<?=URL?>" accesskey="t" class="barra-item-famosos-etc no-show ">Esclarecimentos</a> </li>
      </ul>
    </div>
  </div>
  </div>
</footer>
<div class="bannerdesconto">
	<div class="boxfinal">
		<div class="bl-contador">
			<div id="clockdiv">
				<p class="title-contador">OFERTA VÁLIDA POR<br>TEMPO LIMITADO:</p>
				<div>
					<div>
						<span class="days"></span>
					</div>
					<span class="hours"></span>
					<div class="smalltext">Horas</div>
				</div><span class="doispontos">:</span>
				<div>
					<span class="minutes"></span>
					<div class="smalltext">Minutos</div>
				</div><span class="doispontos">:</span>
				<div>
					<span class="seconds"></span>
					<div class="smalltext">Segundos</div>
				</div>
			</div>
		</div>
		<div class="bl-contador">
			<a class="bt" <?=G($S,49,L)?>><?=Q($S,49,L)?></a>
		</div>
	</div>
</div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script>
	$(window).scroll(function() {
		let nScrollPosition = $(window).scrollTop();
		let docHeight = $(document).height();
		if (nScrollPosition >= (docHeight/2)) {
			$(".bannerdesconto").css("display", "block");
		} else {
			$(".bannerdesconto").css("display", "none");
		}
	});
</script>
<script>
	$(document).ready(function() {
		//by default, the static menu is hidden
		var showStaticMenuBar = false;

		//when scrolling...
		$(window).scroll(function() {
			//if the static menu is not yet visible...
			if (showStaticMenuBar == false) {
				//if I scroll more than 200px, I show it
				if ($(window).scrollTop() >= 580) {
					//showing the static menu
					$("#header").addClass("fixed");

					showStaticMenuBar = true;
				}
			}
			//if the static menu is already visible...
			else {
				if ($(window).scrollTop() < 580) {
					$("#header").removeClass("fixed");

					//I define it as hidden
					showStaticMenuBar = false;
				}
			}
		});
	});
</script>
<!------------CONTADOR------>
<script>
	function getTimeRemaining(endtime) {
		var t = Date.parse(endtime) - Date.parse(new Date());
		var seconds = Math.floor((t / 1000) % 60);
		var minutes = Math.floor((t / 1000 / 60) % 60);
		var hours = Math.floor((t / (1000 * 60 * 60)) % 24);
		var days = Math.floor(t / (1000 * 60 * 60 * 24));
		return {
			'total': t,
			'days': days,
			'hours': hours,
			'minutes': minutes,
			'seconds': seconds
		};
	}

	function initializeClock(id, endtime) {
		var clock = document.getElementById(id);
		var daysSpan = clock.querySelector('.days');
		var hoursSpan = clock.querySelector('.hours');
		var minutesSpan = clock.querySelector('.minutes');
		var secondsSpan = clock.querySelector('.seconds');

		function updateClock() {
			var t = getTimeRemaining(endtime);

			daysSpan.innerHTML = t.days;
			hoursSpan.innerHTML = ('0' + t.hours).slice(-2);
			minutesSpan.innerHTML = ('0' + t.minutes).slice(-2);
			secondsSpan.innerHTML = ('0' + t.seconds).slice(-2);

			if (t.total <= 0) {
				clearInterval(timeinterval);
			}
		}

		updateClock();
		var timeinterval = setInterval(updateClock, 1000);
	}

	var deadline = new Date(Date.parse(new Date()) + 01 * 01 * 10 * 60 * 1000);

	initializeClock('clockdiv', deadline);
</script>

