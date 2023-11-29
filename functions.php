<?php

// ======================================
// Functions Partial -- start
// ======================================

	
add_theme_support( 'post-thumbnails' );

include_once 'inc/functions-custom.php';
include_once 'inc/functions-plugin.php';
include_once 'inc/functions-style-script.php';
include_once 'inc/functions-acf.php';
include_once 'inc/functions-polylang.php';
include_once 'inc/functions-theme-setup.php';

// ======================================
// Functions Partial -- end
// ======================================

function tmdrImage($blockName="tmdr",$imgUrl='',$smallImageUrl='',$imgTitle='') {
    $imageTemplate ='';
    $imageTemplate .='<div class="'.$blockName.'__image-container"><img data-src="'.$imgUrl.'" alt="'.$imgTitle.'" src="'.$smallImageUrl.'" class="'.$blockName.'__image lazy-img  ratio-item"></div>';
    return  $imageTemplate;
}