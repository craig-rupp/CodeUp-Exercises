<?php

require_once 'log.php';

//new log
$disLog = new Log();

//do we take the filename?
$disLog->filename = "log -" . date("Y-M-D");


$disLog->info("This is an info message");
$disLog->error("This is an errrrr message");