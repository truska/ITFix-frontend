<?php
/**
 * Full-width centered text block.
 */
?>

<section class="services-section cms-content-block <?php echo cms_h($contentPaddingClass); ?>">
  <div class="container">
    <div class="section-heading text-center">
      <?php if ($contentHeading !== '' && $contentShowHeading === 'Yes'): ?>
        <<?php echo cms_h($contentHeadingTag); ?>><?php echo cms_h($contentHeading); ?></<?php echo cms_h($contentHeadingTag); ?>>
      <?php endif; ?>
      <?php if ($contentSubheading !== ''): ?>
        <p class="lead"><?php echo cms_h($contentSubheading); ?></p>
      <?php endif; ?>
      <?php if ($contentText !== ''): ?>
        <div class="content-body"><?php echo $contentText; ?></div>
      <?php endif; ?>
    </div>
  </div>
</section>
