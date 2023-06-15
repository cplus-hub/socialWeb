<?php
require("db-config.php");
require("PHPLog.php");
class db
{
    private $host;
    private $account;
    private $password;
    private $port;
    private $database;

    function __construct()
    {
        $this->host = $GLOBALS['host'];
        $this->account = $GLOBALS['account'];
        $this->password = $GLOBALS['password'];
        $this->port = $GLOBALS['port'];
        $this->database = $GLOBALS['database'];
    }

    function connection()
    {
        $db = new PDO("mysql:host=" . $this->host . ";", $this->account, $this->password);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $db;
    }
}
