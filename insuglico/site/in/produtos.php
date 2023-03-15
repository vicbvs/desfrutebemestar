<?php $S='produtosIn';?>
<div id="oferta"></div>
<section id="produtos">
  <div class="container py-5">
   	<div class="row titulo">
			<div class="col">
				<h2 <?=G($S,1,T)?>><?=Q($S,1,T)?></h2>
				<h3 <?=G($S,2,T)?>><?=Q($S,2,T)?></h3>
			</div>
		</div>
    <div class="row produtos">
     	<?php for($i=1;$i<=4;$i++): ?>
      <div class="col-md-12 col-lg-3 mb-3 mb-lg-0">
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