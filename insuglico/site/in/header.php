<!-- Header !-->
<?php 
	$S='headerIn';
	$check = '<svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-check-all" viewBox="0 0 16 16"><path d="M8.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L2.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093L8.95 4.992a.252.252 0 0 1 .02-.022zm-.92 5.14.92.92a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 1 0-1.091-1.028L9.477 9.417l-.485-.486-.943 1.179z" /></svg>';
?>
<header class="header" id="header">
	<!-- Tarja !-->
	<section class="tarja-header" id="tarja-header">
		<div class="container">
			<div class="row">
				<img <?=G($S,0,M)?>>
			</div>
		</div>
	</section>
	<!-- Tarja !-->

	<!-- Principal !-->
	<section class="principal" id="principal">
		<div class="container">
			<div class="row">
				<div class="col">
					<h1 <?=G($S,1,E)?>><?=Q($S,1,E)?></h1>
					<h2 <?=G($S,3,T)?>><?=Q($S,3,T)?></h2>
				</div>				
			</div>
			<br>
			<div class="row">
				<div class="col-md-6 col-lg-6 col-sm-6 list">
					<h3 <?=G($S,4,T)?>><?=$check?><?=Q($S,4,T)?></h3>
					<h3 <?=G($S,5,T)?>><?=$check?><?=Q($S,5,T)?></h3>
					<h3 <?=G($S,6,T)?>><?=$check?><?=Q($S,6,T)?></h3>
					<h3 <?=G($S,7,T)?>><?=$check?><?=Q($S,7,T)?></h3>
					<h3 <?=G($S,8,T)?>><?=$check?><?=Q($S,8,T)?></h3>
					<h3 <?=G($S,11,T)?>><?=$check?><?=Q($S,11,T)?></h3>
					<h3 <?=G($S,12,T)?>><?=$check?><?=Q($S,12,T)?></h3>
					<h3 <?=G($S,13,T)?>><?=$check?><?=Q($S,13,T)?></h3>
				</div>
				<!-- <div class="col-md-6 col-lg-6 col-sm-6 image">
					<img <?='';//G($S,2,M)?> class="frascos-sementes-principal img-fluid">
				</div> -->
				<div class="col-md-6 col-lg-6 col-sm-6 video" <?=G($S,14,A)?>><?php if(empty($SA)){echo Q($S,14,A);}?></div>
			</div>
		</div>
	</section>
	<!-- Principal !-->
</header>
<!-- Header !-->
