<?php $S='produtosOut';?>
<div id="oferta"></div>
<section id="produtos" class="out">
  <div class="container py-5">
  	<div class="row">
			<div class="col">
				<figure class="logo"><img <?=G($S,0,D)?>></figure>
			</div>
		</div>
   	<div class="row titulo">
			<div class="col">
				<h2 <?=G($S,1,T)?>><?=Q($S,1,T)?></h2>
				<h3 <?=G($S,2,T)?>><?=Q($S,2,T)?></h3>
			</div>
		</div>
    <div class="row produtos">
     	<?php for($i=1;$i<=3;$i++): ?> 
      <div class="col-md-12 col-lg-4 mb-4 mb-lg-0">
        <div class="card text-black">
        	<?php if($i==1){?>
						<span class="btn btn-warning flex-fill btn-sm"<?=G($S,3,T)?>>
						<img src="<?=URL."/src/img/selo2.svg"?>" alt="selo">
						<?=Q($S,3,T)?>
						</span>
         	<?php }?>
          <div class="card-header">
            <div class="text-center mt-1">
             	<span class="btn btn-info flex-fill btn-sm" <?=G($S,"a$i",T)?>><?=Q($S,"a$i",T)?></span>
              <h4 class="card-title" <?=G($S,"b$i",T)?>><?=Q($S,"b$i",T)?></h4>
            </div>            
          </div>
          <a <?=G($S,"e$i",C)?>><img <?=G($S,"f$i",M)?> class="card-img"></a>
          <div class="card-body">
            <div class="text-center">
              <div class="d-flex flex-column mb-4">
                <h3 class="h1 mb-0" <?=G($S,"c$i",T)?>>12x<strong><?=Q($S,"c$i",T)?></strong></h3>
                <span class="desconto" <?=G($S,"d$i",T)?>><?=Q($S,"d$i",T)?></span>
              </div>
              <div class="p-3 mx-n3 mb-4 frete">
                <h5 class="mb-0"><img src="<?=URL."/src/img/banner-frete.png"?>" alt="frete"></h5>
              </div>
            </div>

            <div class="d-flex flex-row">
              <a class="btn btn-success flex-fill me-1" <?=G($S,"e$i",C)?>><?=Q($S,"e$i",C)?>COMPRAR AGORA
              </a>
            </div>
          </div>
        </div>
      </div>
      <?php endfor; ?>  
    </div>
  </div>
</section>
<!-- Oferta !-->
<?php /* $S='ofertaOut2';?>
<section class="oferta out" id="oferta">
	<div class="container">
		<div class="row">
			<div class="col">
				<figure class="logo"><img <?=G($S,1,D)?>></figure>
			</div>
		</div>
		<div class="row ofertas">
			<!-- Oferta 12 frasco !-->
			<div class="col-md-4 col-lg-4 col-sm-4">
				<a class="cta-oferta-item" target="_blank" <?=G($S,11,C)?>><?=Q($S,11,C)?>
					<img <?=G($S,10,D)?> class="of-item img-fluid">
				</a>
			</div>
			<!-- Oferta 12 frasco !-->
			
			<!-- Oferta 3 frascos !-->
			<div class="col-md-4 col-lg-4 col-sm-4">
				<a class="cta-oferta-item" target="_blank" <?=G($S,5,C)?>><?=Q($S,5,C)?>
					<img <?=G($S,4,D)?> class="of-item img-fluid">
				</a>
			</div>
			<!-- Oferta 3 frascos !-->

			<!-- Oferta 5 frascos !-->
			<div class="col-md-4 col-lg-4 col-sm-4">
				<a class="cta-oferta-item" target="_blank" <?=G($S,7,C)?>><?=Q($S,7,C)?>
					<img <?=G($S,6,D)?> class="of-item img-fluid">
				</a>
			</div>
			<!-- Oferta 5 frascos !-->
		</div>
	</div>
</section> <?php */ ?>
<!-- Oferta !-->


<!-- Garantia !-->
<?php $S='garantiaIn';?>
<section class="garantia" id="garantia">
	<div class="container">
		<div class="row">
			<div class="col">
				<h2 <?=G($S,2,T)?>><?=Q($S,2,T)?></h2>
				<img <?=G($S,1,M)?> class="selo-frascos img-fluid">
				<p <?=G($S,3,A)?>><?=Q($S,3,A)?></p>
				<div class="link">
					<a class="cta cta-garantia pulsar" <?=G($S,4,L)?>><?=Q($S,4,L)?></a>
					<img <?=G($S,5,M)?> class="icta">			
				</div>
			</div>
		</div>
	</div>
</section>
<!-- Garantia !-->

<?php $S='entregaOut';?>
<div id="entrega">
	<div class="container">
		<img <?=G($S,1,M)?>>
	</div>
</div>


<!-- Faq !-->
<?php $S='faqIn';?>
<section class="faq" id="faq">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-lg-12 col-sm-12">
				<h2 <?=G($S,1,T)?>><?=Q($S,1,T)?></h2>
			</div>
			<div class="col-md-12 col-lg-12 col-sm-12">
				<?php for($i=2;$i<=6;$i++): ?>
				<div class="faq-item">
					<button class="accordion" <?=G($S,"a$i",T)?>>
						<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-right-fill" viewBox="0 0 16 16"><path d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z"></path></svg><?=Q($S,"a$i",T)?></button>
					<div class="panel">
						<p <?=G($S,"b$i",T)?>><?=Q($S,"b$i",T)?></p>
					</div>
				</div>
				<?php endfor; ?>
			</div>

			<script>
				var acc = document.getElementsByClassName("accordion");
				var i;

				for (i = 0; i < acc.length; i++) {
					acc[i].addEventListener("click", function() {
						this.classList.toggle("active");
						var panel = this.nextElementSibling;
						if (panel.style.maxHeight) {
							panel.style.maxHeight = null;
						} else {
							panel.style.maxHeight = panel.scrollHeight + "px";
						}
					});
				}
			</script>
		</div>
	</div>
</section>
<!-- Faq !-->


<!-- Whatsapp !-->
<?php $S='whatsappIn';?>
<section class="whatsapp" id="whatsapp">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-lg-12 col-sm-12">
				<img <?=G($S,4,M)?> class="icon-wpp img-fluid">
				<h2 <?=G($S,1,T)?>><?=Q($S,1,T)?></h2>
				<h3 <?=G($S,2,T)?>><?=Q($S,2,T)?></h3>

				<div class="link">
					<a class="whats pulsar" <?=G($S,3,C)?> target="_blank">
						<?=Q($S,3,C)?>
						<img <?=G($S,5,M)?>>
						<p <?=G($S,6,T)?>><?=Q($S,6,T)?></p>
					</a>			
				</div>
			</div>
		</div>
	</div>
</section>
<!-- Whatsapp !-->


