<?php
error_reporting(E_ALL ^ E_NOTICE);

# TODO Set timezone
date_default_timezone_set('Asia/Shanghai');

define('ONLINE_HOSTNAME', 'www.openwears.org');

define('IN_PROD_MODE', ($_SERVER['HTTP_HOST'] == ONLINE_HOSTNAME ? true : false)); 

define('WWW_ROOT_DIR', (IN_PROD_MODE ? 'web' : 'web'));

define('ENABLE_PAGE_CACHE', IN_PROD_MODE);

define('DISQUS_SHORT_NAME', 'openwears');
define('SITE_NAME', 'Openwears: Your open wearables');
define('SITE_DESC', 'Build your own wearables');

define('JIATHIS_UID', 905000);

define('ROOT_PATH', dirname(__FILE__));
define('TEMPLATE_PATH', ROOT_PATH . "/templates");
define('NEWS_ROOT_PATH', ROOT_PATH . "/../news");
define('TIPI_ROOT_PATH', dirname(ROOT_PATH));

define('TIPI_CACHE_DIR', dirname(__FILE__) . '/tmp');

define('PAGE_CACHE_TIMEOUT', 60 * 60 * 24 * 1); // expire everyday
