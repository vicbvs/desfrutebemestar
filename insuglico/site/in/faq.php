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