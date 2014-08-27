<?php
/**
 * @file
 * Template for Hatha sidebar left.
 */
?>
<?php if (!empty($content['top'])): ?>
  <div class="top">
    <?php print $content['top']; ?>
  </div>
<?php endif; ?>

<div class="sidebar">
  <?php print $content['sidebar']; ?>
</div>

<div class="main-content">
  <?php print $content['content']; ?>
</div>

<?php if (!empty($content['bottom'])): ?>
  <div class="bottom">
    <?php print $content['bottom']; ?>
  </div>
<?php endif; ?>
