<?php 

class phpLogger {
	private $logPath = 'temp/'; //Must Be Writable
	private $logIdentifier = 'AwesomeLogs';
	
	function createLogFile() {
		$fileName = $this->logPath.date('Ymd')."-".$this->logIdentifier.".txt";
		if (file_exists($fileName)) {
			return "a";
		} else {
			return "w";
		}
	}

	public function writeToLog($logMessage) {
		$fileMode = $this->createLogFile();
		$fileName = $this->logPath.date('Ymd')."-".$this->logIdentifier.".txt";
		$filePointer = fopen($fileName, $fileMode);
		$formatLogMessage = date('[Y-m-d H:i:s]')." ---> ".$logMessage."\n";
		if (fwrite($filePointer,$formatLogMessage)) {
			return true;
		} 
		return false; 
	}
}

?>
