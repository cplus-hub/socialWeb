<?php
class PHPLog
{
    private $logPath;
    private $dir;
    function __construct($path)
    {
        $this->logPath = $path;
        $this->dir = "./../../logs/" . date("Y-m-d");
        if (!is_dir($this->dir)) {
            mkdir($this->dir);
        }
    }

    function add($str)
    {
        $dir = $this->dir . "/" . $this->logPath . ".log";
        file_put_contents($dir, date("Y-m-d H:i:s") . " " . print_r($str, true) . PHP_EOL, FILE_APPEND);
    }
}
