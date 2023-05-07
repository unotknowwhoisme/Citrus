<?php

use \Citrus\Application;

define('ROOT_DIR', __DIR__ . '/../');

require('../vendor/autoload.php');

Application::install();



Application::run();