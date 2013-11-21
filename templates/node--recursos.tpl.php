<?php if ($variables['view_mode'] == 'full' && node_is_page($variables['node'])) : ?>
<article id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?> clearfix"<?php print $attributes; ?>>
<?php else : ?>
	<article id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?> clearfix thumbnail"<?php print $attributes; ?>>
 <div id="barrAnime">
<?php endif ; ?>

  <header>
    <?php print render($title_prefix); ?>
    <?php if (!$page && $title): ?>
      <h2<?php print $title_attributes; ?>><a href="<?php print $node_url; ?>"><?php print $title; ?></a></h2>
    <?php endif; ?>
    <?php print render($title_suffix); ?>

  </header>

  <?php
    // Hide comments, tags, and links now so that we can render them later.
    hide($content['comments']);
    hide($content['links']);
    hide($content['field_tags']);
    print render($content);
  ?>

  <?php if (!empty($content['field_tags']) || !empty($content['links'])) : ?>
    <footer>
      <?php print render($content['field_tags']); ?>
      <?php // print render($content['links']); ?>
    </footer>
  <?php endif ; ?>

  <?php print render($content['comments']); ?>
  <?php if ($variables['view_mode'] == 'teaser') : ?>
  </div>
  <?php endif ; ?>
</article> <!-- /.node -->
