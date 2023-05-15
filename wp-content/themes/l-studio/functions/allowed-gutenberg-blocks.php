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

  );
}