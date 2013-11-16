<section id="comments" class="<?php print $classes; ?>"<?php print $attributes; ?>>
  <?php if ($content['comments'] && $node->type != 'forum'): ?>
    <?php print render($title_prefix); ?>
    <h2 class="title"><?php print t('Comments'); ?></h2>
    <?php print render($title_suffix); ?>
  <?php endif; ?>

  <?php print render($content['comments']); ?>
<a id="file_attach" data-toggle="modal" href="https://www.google.es" data-target="#utility" class="btn">Modal 1</a>
	  <?php if ($content['comment_form']): ?>
<!-- Modal -->
	<div id="utility" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="utilityLabel" aria-hidden="true">
	    <div class="modal-header">
		    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
		    <h3 id="utilityLabel" class="title">titulo</h3>
	    </div>
	    <div class="modal-body">

	    </div>
	    <div class="modal-footer">
			<button class="btn" data-dismiss="modal" aria-hidden="true"><?php print t('Cerrar'); ?></button>
	    </div>
	</div>
    <section id="comment-form-wrapper" class="well">
<!-- Button to trigger modal -->
	<a href="#coment" role="button" class="btn" data-toggle="modal"><?php print t('Deja tu comentario'); ?></a>
<!-- Modal -->
	<div id="coment" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="comentLabel" aria-hidden="true">
	    <div class="modal-header">
		    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
		    <h3 id="comentLabel" class="title"><?php print t('Add new comment'); ?></h3>
	    </div>
	    <div class="modal-body">
	        <?php print render($content['comment_form']); ?>
	    </div>
	    <div class="modal-footer">
			<button class="btn" data-dismiss="modal" aria-hidden="true"><?php print t('Cerrar'); ?></button>
	    </div>
	</div>
    </section> <!-- /#comment-form-wrapper -->
  <?php endif; ?>
</section> <!-- /#comments -->
