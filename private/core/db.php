<?php
class db extends PDO{
    function __construct() {
        $host = "localhost";
        $user = "root";
        $pass = "";
        $dbname = "students";
        parent::__construct("mysql:host=".$host.";dbname=".$dbname."",''.$user.'',''.$pass.'',
        array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
        $this->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $this->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    }
}
