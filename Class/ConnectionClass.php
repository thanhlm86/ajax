<?php
class Class_ConnectionClass
{
    public $host;
    public $dbUser;
    public $dbPass;
    public $dbName;

    public function __construct()
    {
        $this->host = 'localhost';
        $this->dbUser = 'root';
        $this->dbPass = '';
        $this->dbName = 'weboffice';
    }

    public function connectDatabase()
    {
        $link = mysql_connect($this->host, $this->dbUser, $this->dbPass) or die('Error');
        mysql_selectdb($this->dbName);
    }
}