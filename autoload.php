<?php

spl_autoload_register(function ($classname) {
    $classname = str_replace("DataStructures\\", "", $classname);
    $classname = str_replace("\\", "//", $classname);
    $filename = "lib" . DIRECTORY_SEPARATOR . $classname . ".php";
    if(file_exists($filename)) require_once $filename;
});
