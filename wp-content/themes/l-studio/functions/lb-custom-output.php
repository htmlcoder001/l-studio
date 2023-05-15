<?php
/**
 ** LazyBlocks disable custom wrapper for blocks. (lb-custom-output.php)
 ** @author webtitov.ru
 ** @date 31.01.2022
 **/

$webt_blocks = [
	'webt-intro-banner',
	'webt-plitka-izobrazheniya-i-tekst',


];

foreach ($webt_blocks as $block) {
	add_filter( 'lazyblock/' . $block . '/frontend_allow_wrapper', '__return_false' );
}