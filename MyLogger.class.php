<?php
//`warning`, `error`, `info`, `debug`
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
        echo "WARNING: ".$message.PHP_EOL;
    }
    public function error($message){
        echo "ERROR: ".$message.PHP_EOL;
    }
    public function info($message){
        echo "INFO: ".$message.PHP_EOL;
    }
    public function debug($message){
        echo "DEBUG: ".$message.PHP_EOL;
    }
}

$logger = new MyLogger();
$logger->log("log message", "INFO");
$logger->warning("warning message");