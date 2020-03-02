<?php
class MyLogger {
    public function log($message, $level){
        switch($level){
            case "WARNING":
                $this->warning($message);
                break;
            case "ERROR":
                $this->error($message);
                break;
            case "INFO":
                $this->info($message);
                break;
            case "DEBUG":
                $this->warning($message);
                break;
        }
    }

    public function warning($message){
        $this->logWithTime("WARNING: ", $message);
    }
    public function error($message){
        $this->logWithTime("ERROR: ", $message);
    }
    public function info($message){
        $this->logWithTime("INFO: ", $message);
    }
    public function debug($message){
        $this->logWithTime("DEBUG: ", $message);
    }
    private function logWithTime($type, $message){
        echo "[".date("d,M,Y h:i:s")."] $type $message".PHP_EOL;
    }
}

$logger = new MyLogger();
$logger->log("log message", "INFO");
$logger->warning("warning message");