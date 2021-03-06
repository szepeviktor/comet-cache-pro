<?php
/**
 * API Classes.
 *
 * @since 150422 Rewrite.
 */
namespace WebSharks\CometCache\Pro;

use WebSharks\CometCache\Pro\Classes;

if (!defined('WPINC')) {
    exit('Do NOT access this file directly: '.basename(__FILE__));
}
class_alias(__NAMESPACE__.'\\Classes\\ApiBase', GLOBAL_NS);

if (!class_exists('zencache')) {
    class_alias(__NAMESPACE__.'\\Classes\\ApiBase', 'zencache');
}
