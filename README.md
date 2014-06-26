php-mysqlidb
============

Wrapper for the MySQLi functions in PHP, also supports persistent connections.

```php
<?php

//Simple usage
require_once('src/mysqlidb.class.php');

$db = new mysqlidb("localhost", "user", "password", "db");
$rows = $db->where('id', 7)->where('title', 'MyTitle', '!=')->get('tablename');

//Little more advanced - big get
$rows =  $db->where('id', 7, '>')->where('id', 24, '<')->where('id', 19, '!=')
            ->where('title', 'MyTitle', '!=')->target('id, price')
            ->sorted('price','DESC')->get('tablename');
            
//Insert into table
$res =   $db->insert('tablename', 
                     array('title'=>'MyTitle','price'=>2400));

//Delete into table
$res =   $db->where('id', 9)->delete('tablename');

//Update table
$res =   $db->where('id', 9)->update('tablename', 
                                     array('title'=>'My New Title','price'=>1850));
    
?>
```

Persistent Connections
------------

Made easy using a simple wrapper class (available in test/persistent.php

```php
<?php

//Simple usage
require_once('test/persistent.php');

$db = new DB::getConn();
$rows = $db->where('id', 7)->where('title', 'MyTitle', '!=')->get('tablename');


?>
```
