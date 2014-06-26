<?php

require_once('path/to/src/mysqlidb.class.php');

class DB {
    //p: infront of host sets persistent connections. Must be enabled in the DB config also
    public static function getConn() {
        return new MysqliDb("p:localhost", "user", "password", "db");
    }
}

?>
