<?php

// Add lines for local wordpress dev, leave out of production
define('WP_DEBUG', true);
define('FS_METHOD', 'direct');

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

