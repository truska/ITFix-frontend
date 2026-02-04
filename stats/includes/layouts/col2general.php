<?php
/**
 * Two-column content layout with optional image.
 * Flips image/text order on even rows for visual rhythm.
 */

$imageLeft = !$contentIsEven;
$imageUrl = '';
if (!empty($contentImage)) {
  $imageUrl = $baseURL . '/filestore/images/content/' . ltrim($contentImage, '/');
}
$sectionClasses = 'service-row row align-items-center g-4';
if (!$imageLeft) {
  $sectionClasses .= ' flex-lg-row-reverse';
}
?>

<section class="services-section cms-content-block <?php echo cms_h($contentPaddingClass); ?>">
  <div class="container">
    <div class="<?php echo cms_h($sectionClasses); ?>">
      <div class="col-lg-6">
        <div class="service-image">
          <?php if ($imageUrl !== ''): ?>
            <img src="<?php echo cms_h($imageUrl); ?>" alt="<?php echo cms_h($contentHeading); ?>" class="img-fluid">
          <?php else: ?>
            <div class="service-image-placeholder">
              <span>Image Placeholder</span>
            </div>
          <?php endif; ?>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="service-copy">
          <?php if ($contentHeading !== '' && $contentShowHeading === 'Yes'): ?>
            <<?php echo cms_h($contentHeadingTag); ?>><?php echo cms_h($contentHeading); ?></<?php echo cms_h($contentHeadingTag); ?>>
          <?php endif; ?>
          <?php if ($contentSubheading !== ''): ?>
            <p class="lead"><?php echo cms_h($contentSubheading); ?></p>
          <?php endif; ?>
          <?php if ($contentText !== ''): ?>
            <div class="content-body"><?php echo $contentText; ?></div>
          <?php endif; ?>
          <?php if ($contentText2 !== ''): ?>
            <div class="content-body"><?php echo $contentText2; ?></div>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
</section>
