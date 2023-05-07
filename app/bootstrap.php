<?php

$routeDir = APP_DIR . '/Routes/';

foreach(scandir($routeDir) as $routeFile) {
    $routeFilePath = $routeDir . $routeFile;
    
    if(!is_file($routeFilePath)) continue;
    
    require($routeFilePath);
}