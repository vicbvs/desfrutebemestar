<?php $S='duvidaIn';?>
<div class="duvida">
	<div class="container">
		<div class="row">
			<h2 <?=G($S,1,T)?>><?=Q($S,1,T)?></h2>
			<h3 <?=G($S,2,T)?>><?=Q($S,2,T)?></h3>
			<ul class="duv">
				<?php for($i=1;$i<=4;$i++): ?>
				<li>
					<img <?=G($S,"a$i",M)?>>
					<p <?=G($S,"b$i",T)?>><?=Q($S,"b$i",T)?></p>
				</li>
				<?php endfor; ?>				
			</ul>
		</div>
	</div>
</div>