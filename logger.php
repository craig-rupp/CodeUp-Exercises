<?php
// date_default_timezone_set ('America/Chicago');
// function logMessage($logLevel, $message)
// {
//     // todo - complete this function

//    $getDate = date('Y-M-D')
//    $filename = 'log-YYYY-MM-DD.log';
//    $handle = fopen($filename, 'a');
   

//    fwrite($handle, 'Did this work?')
//    fclose($handle);
// }

// logMessage("INFO", "This is an info message.");
// logMessage("ERROR", "This is an info message.");


date_default_timezone_set("America/Chicago");
$date = date("Y-m-d");
$time = date("H-i-s");
function logMessage($logLevel, $message, $date, $time) {
	$handle = fopen("log-" . $date . ".log", "a");
	fwrite($handle, "{$date} {$time} {$logLevel} {$message}" . PHP_EOL);
	fclose($handle);
}
function logInfo($date, $time) {
	logMessage("INFO", "This is an info message.", $date, $time);
}
function logError($date, $time) {
	logMessage("ERROR", "This is an info message.", $date, $time);
}
logInfo($date, $time);
logError($date, $time);


// function logMessage($logLevel, $message){
// 	$filename = 'log -' . date('Y-m-d') . '.log';
// 	$handle = fopen($filename, 'a');
// 	$formatMessage = date('Y-m-d H:i:s') . " [$logLevel] $message";
// 	fwrite($handle, $formatMessage);
// }

// function logInfo($message){
// 	logMessage('INFO', $message);
// }
// function logError($message){
// 	logMessage('Error', $message);
// }

// logInfo("This is an info Message");
// logError("This is an error Message");