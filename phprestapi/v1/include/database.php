<?php
// database Connection variables
define('HOST', 'localhost'); // Database host name ex. localhost
define('USER', 'uname'); // Database user. ex. root ( if your on local server)
define('PASSWORD', 'upass'); // Database user password  (if password is not set for user then keep it empty )
define('DATABASE', 'dbname'); // Database Database name

function DB(){
    try {
        $db = new PDO('mysql:host='.HOST.';dbname='.DATABASE.'', USER, PASSWORD);
        $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        return $db;
    } catch (PDOException $e) {
        return "Error!: " . $e->getMessage();
        die();
    }
}

function DB2(){
    try {
        $db2 = new PDO('odbc:hpux');
        $db2->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        return $db2;
    } catch (PDOException $e) {
        return "Error!: " . $e->getMessage();
        die();
    }
}
?>
