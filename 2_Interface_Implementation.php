<?php

// create a logging interface
interface Logging  {
    public function log($message);
}

// Create classes that implement the Logging interface
class FileLogging implements Logging {
    private $logFileName;

    public function __construct($logFileName) {
        $this->logFileName = $logFileName;
    }

    public function log($message) {
        $formattedMessage = "[" . date('d-m-Y H:i:s') . "] " . $message . "\n";
    }

}

class ConsoleLogger implements Logging {
    public function log($message) {
        echo "[" . date('d-m-Y H:i:s') . "] " . $message . "\n";
    }
}


// cteate a FileLogging object 
$fileLogger = new FileLogging("log.txt");
$fileLogger->log("This is a log message for the file logger.");

// cteate a ConsoleLogger object
$consoleLogger = new ConsoleLogger();
$consoleLogger->log("<br>This is a log message for the console logger.");



?>