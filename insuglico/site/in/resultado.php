<?php $S='resultadoIn';?>
<section class="resultado" id="resultado">
	<div class="container">
		<div class="row">
			<h2 <?=G($S,1,T)?>><?=Q($S,1,T)?></h2>
			<h3 <?=G($S,2,T)?>><?=Q($S,2,T)?></h3>			
		</div>
		<div class="row">
			<div class="col-md-6 col-lg-6 col-sm-6 image">
				<img <?=G($S,11,M)?> class="frascos-sementes-resultado img-fluid">
			</div>
			<div class="col-md-6 col-lg-6 col-sm-6 list">
				<h4 <?=G($S,3,T)?>><?=$check?><?=Q($S,3,T)?></h4>
				<h4 <?=G($S,4,T)?>><?=$check?><?=Q($S,4,T)?></h4>
				<h4 <?=G($S,5,T)?>><?=$check?><?=Q($S,5,T)?></h4>
				<h4 <?=G($S,6,T)?>><?=$check?><?=Q($S,6,T)?></h4>
				<h4 <?=G($S,7,T)?>><?=$check?><?=Q($S,7,T)?></h4>
				<h4 <?=G($S,8,T)?>><?=$check?><?=Q($S,8,T)?></h4>
				<h4 <?=G($S,9,T)?>><?=$check?><?=Q($S,9,T)?></h4>
				<h4 <?=G($S,10,T)?>><?=$check?><?=Q($S,10,T)?></h4>
			</div>
		</div>
	</div>
</section>