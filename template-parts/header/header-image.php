<?php

if( get_header_image() ) : ?>
  <div class="image-hero image-hero--half" style="background-image: url('<?php header_image(); ?>');"></div>
<?php else : ?>
  <div class="image-hero image-hero--half" style="background-image: url('<?= get_template_directory_uri(); ?>/assets/img/header-fallback.jpg');"></div>
<?php endif; ?>