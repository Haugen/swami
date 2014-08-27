<?php
/**
 * @file
 * Hatha site template layout.
 */
?>

<div id="page" class="container">
  <header role="branding" class="row">
    <div class="col-xs-12">
      <?php print render($content['header']); ?>
    </div>
  </header>

  <div role="content" class="row">
    <div class="col-xs-12">
      <?php print render($content['content']); ?>
    </div>
  </div>

  <footer role="closure" class="row">
    <div class="col-xs-12">
      <?php print render($content['footer']); ?>
    </div>
  </footer>
</div>
