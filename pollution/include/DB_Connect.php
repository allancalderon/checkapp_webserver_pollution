<?php
ini_set("include_path", '/home/calderonallan/php:' . ini_get("include_path") );
class DB_Connect {
    private $conn;
    // Connecting to database
    public function connect() {
        require_once 'include/Config.php';
        // Connecting to mysql database
        $this->conn = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD) or die(mysql_error());
        // selecting database
        mysql_select_db(DB_DATABASE, $this->conn) or die(mysql_error());
        // return database handler		
        return $this->conn;
    }
}
?>
