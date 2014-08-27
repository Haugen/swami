<?php
/**
 * @file
 * Hatha site template layout.
 */
?>

<div id="page">
  <header role="branding">
    <?php print render($content['header']); ?>
  </header>

  <div role="content">
    <?php print render($content['content']); ?>
  </div>

  <footer role="closure">
    <?php print render($content['footer']); ?>
  </footer>
</div>
