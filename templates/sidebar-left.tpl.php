<?php
/**
 * @file
 * Override template for Benjamin sidebar left.
 */
?>
<?php if (!empty($content['top'])): ?>
  <div class="top">
    <?php print $content['top']; ?>
  </div>
<?php endif; ?>

<div class="sidebar col-md-3 col-xs-12">
  <?php print $content['sidebar']; ?>
</div>

<div class="main-content col-md-9 col-xs-12">
  <?php print $content['content']; ?>
</div>

<?php if (!empty($content['bottom'])): ?>
  <div class="bottom">
    <?php print $content['bottom']; ?>
  </div>
<?php endif; ?>
