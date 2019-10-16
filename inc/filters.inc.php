<?php 

function bfde_add_class_for_p_tag($content) {
  $content = str_replace('<p>', '<p class="-typo-copy -text-color-blue-02 -font-primary -spacing-outer-15">', $content);
  return $content;
}

add_filter('the_content', 'bfde_add_class_for_p_tag', 9999);
add_filter('the_excerpt', 'bfde_add_class_for_p_tag', 9999);


function bfde_add_class_for_h1_tag($content) {
  $content = str_replace('<h1>', '<h1 class="-typo-headline-01 -text-color-blue-01 -font-secondary -spacing-outer-30">', $content);
  return $content;
}

add_filter('the_content', 'bfde_add_class_for_h1_tag', 9999);
add_filter('the_excerpt', 'bfde_add_class_for_h1_tag', 9999);

function bfde_add_class_for_h2_tag($content) {
  $content = str_replace('<h2>', '<h2 class="-typo-headline-02 -text-color-blue-01 -font-secondary -spacing-outer-30">', $content);
  return $content;
}

add_filter('the_content', 'bfde_add_class_for_h2_tag', 9999);
add_filter('the_excerpt', 'bfde_add_class_for_h2_tag', 9999);

function bfde_add_class_for_h3_tag($content) {
  $content = str_replace('<h3>', '<h3 class="-typo-headline-03 -text-color-blue-01 -font-secondary -spacing-outer-30">', $content);
  return $content;
}

add_filter('the_content', 'bfde_add_class_for_h3_tag', 9999);
add_filter('the_excerpt', 'bfde_add_class_for_h3_tag', 9999);


function bfde_add_class_for_h4_tag($content) {
  $content = str_replace('<h4>', '<h4 class="-typo-headline-04 -text-color-blue-01 -font-secondary -spacing-outer-30">', $content);
  return $content;
}

add_filter('the_content', 'bfde_add_class_for_h4_tag', 9999);
add_filter('the_excerpt', 'bfde_add_class_for_h4_tag', 9999);


function bfde_add_class_for_h5_tag($content) {
  $content = str_replace('<h5>', '<h5 class="-typo-headline-05 -text-color-green-01 -font-secondary -spacing-outer-30">', $content);
  return $content;
}

add_filter('the_content', 'bfde_add_class_for_h5_tag', 9999);
add_filter('the_excerpt', 'bfde_add_class_for_h5_tag', 9999);