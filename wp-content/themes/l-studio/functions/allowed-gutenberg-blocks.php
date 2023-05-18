<?php
/**
 ** Default allowed Gutenberg blocks. (allowed-gutenberg-blocks.php)
 ** @author webtitov.ru
 **/

add_filter( 'allowed_block_types', 'webt_allowed_block_types' );

function webt_allowed_block_types($allowed_blocks) {
  return array(
    //'core/image',
    //'core/paragraph',
    //'core/heading',
    'lazyblock/webt-intro-banner',
    'lazyblock/webt-plitka-izobrazheniya-i-tekst',
    'lazyblock/webt-nashi-uslugi',
    'lazyblock/webt-prizyv-k-dejstviyu',
    'lazyblock/webt-nashi-akcii',
    'lazyblock/webt-bolshoj-zagolovok',
    'lazyblock/webt-blok-s-tekstom',
    'lazyblock/webt-galereya-foto',
    'lazyblock/webt-numerovannye-bloki',
    'lazyblock/webt-nashi-sotrudniki',
    'lazyblock/webt-otzyvy',
    'lazyblock/webt-prajs-blok',
    'lazyblock/webt-blok-s-cenoj',
    'lazyblock/webt-portfolio',
  );
}