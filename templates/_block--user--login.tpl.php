<section id="<?php print $block_html_id; ?>" class="<?php print $classes; ?> clearfix"<?php print $attributes; ?>>
	<a href="#myModal" role="button" class="btn pull-right" data-toggle="modal"><i class="icon fontello icon-login">Acceder / Crear cuenta</i></a>
<!-- Modal -->
	<div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
			  <?php print render($title_prefix); ?>
			  <?php if ($title): ?>
		    <h3<?php print $title_attributes; ?>><?php print $title; ?></h3>
			  <?php endif;?>
			  <?php print render($title_suffix); ?>
		</div>
		<div class="modal-body">
		  <?php
		   	print $content 
		   ?>
		</div>
		<div class="modal-footer">
			<button class="btn" data-dismiss="modal" aria-hidden="true">Cerrar</button>
		</div>
	</div>  
</section> <!-- /.block -->
