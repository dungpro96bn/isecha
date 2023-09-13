<?php
/* * ---------------------------------------------------------------
* Theme Directory Define
* -------------------------------------------------------------* */
$theme_info = wp_get_theme();

define('ORGANIA_THEME_DIR', get_template_directory());
define('ORGANIA_THEME_URL', get_template_directory_uri());
define('ORGANIA_STYLESHEET_URL', get_stylesheet_uri());

define('ORGANIA_INC_DIR', ORGANIA_THEME_DIR . '/inc');
define('ORGANIA_INC_URL', ORGANIA_THEME_URL . '/inc');
define('ORGANIA_CUSTOMIZER_DIR', ORGANIA_THEME_DIR . '/framework-customizations/customizer/');

define('ORGANIA_WD_DIR', ORGANIA_THEME_DIR . '/widgets');

define('ORGANIA_ASSETS_DIR', ORGANIA_THEME_DIR . '/assets');
define('ORGANIA_ASSETS_URL', ORGANIA_THEME_URL . '/assets');

define('ORGANIA_ASSETS_CSS_DIR', ORGANIA_THEME_DIR . '/assets/css');
define('ORGANIA_ASSETS_CSS_URL', ORGANIA_THEME_URL . '/assets/css');

define('ORGANIA_ASSETS_JS_DIR', ORGANIA_THEME_DIR . '/assets/js');
define('ORGANIA_ASSETS_JS_URL', ORGANIA_THEME_URL . '/assets/js');

define('ORGANIA_ASSETS_IMAGES_DIR', ORGANIA_THEME_DIR . '/assets/images');
define('ORGANIA_ASSETS_IMAGES_URL', ORGANIA_THEME_URL . '/assets/images');


/* * ---------------------------------------------------------------
* Theme Init
* -------------------------------------------------------------* */
require_once get_parent_theme_file_path('/inc/init.php');