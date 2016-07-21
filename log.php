<?php

class Log

{
	public $filename;

	public function logMessage($logLevel, $message)
	{	
		$myLog = date("Y-M-D") . " $logLevel $message";
		$handle = fopen($this->filename, 'a'); //or write 'w'?)
		fwrite($handle, $myLog . PHP_EOL);
		fclose($handle);
	}

	public function info($message)
	{
		$this->logMessage('INFO', $message);
	}

	public function error($message)
	{
		$this->logMessage('ERRRRRR' , $message);
	}
}