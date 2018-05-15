<?php if ( ! defined( 'ABSPATH' ) ) { exit; } ?>
<article class="slider-item">
  <div class="slider-item-info">
     <?php the_title('<h2>', '</h2>');?>
     <?php the_excerpt()?>
  </div>
 <?php the_post_thumbnail('full');?>
</article>