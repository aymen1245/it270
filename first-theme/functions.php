<?php

function my_excerpt_length() {
    return 30;
}

add_theme_support('post-thumbnails');

add_filter ('excerpt','my_excerpt_length');

set_post_thumbnail_size(200, 200);
add_theme_support('post-thumbnails');