<?php $S='commentsIn';?>
<div id="comments">
	<div class="container">
		<h2 class="titulo" <?=G($S,1,T)?>><?=Q($S,1,T)?></h2>
		<ul class="fotos">
			<?php for($i=1;$i<=4;$i++): ?>
			<li><img <?=G($S,"a$i",M)?>></li>
			<?php endfor; ?>
		</ul>
		<ul class="comments">
			<?php for($i=1;$i<=4;$i++): ?>
			<li>
				<figure class="foto"><img <?=G($S,"a$i",M)?>></figure>
				<div>
					<h4 <?=G($S,"b$i",T)?>><?=Q($S,"b$i",T)?></h4>
					<figure class="stars">
						<img src="<?=URL."/src/img/star.svg"?>" alt="stars">
						<span>Compra Verificada</span>
					</figure>
					<div <?=G($S,"c$i",E)?>><?=Q($S,"c$i",E)?></div>
				</div>
			</li>
			<?php endfor; ?>
		</ul>
	</div>
</div>