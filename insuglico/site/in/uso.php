<?php $S='usoIN';?>
<section id="uso">
	<div class="container">
		<div class="row">
			<h2 <?=G($S,1,A)?>><?=Q($S,1,A)?></h2>
		</div>
		<div class="row uso">
			<ul>
				<?php for($i=1;$i<=3;$i++): ?>
				<li>
					<figure><i><?=$i?></i><img <?=G($S,"a$i",M)?>></figure>
					<p <?=G($S,"b$i",T)?>><?=Q($S,"b$i",T)?></p>
				</li>
				<?php endfor; ?>
			</ul>
		</div>
		<div class="row">
			<div class="link">
				<a class="cta cta-principal pulsar" <?=G($S,2,L)?>><?=Q($S,2,L)?></a>
				<img <?=G($S,3,M)?> class="icta">				
			</div>
		</div>
	</div>
</section>