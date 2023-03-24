<?php
echo "Hi!!!<br>";

abstract class connection {
    abstract public function executeConnection();
}

class PostgreSql extends connection{

    public function executeConnection()
    {
        echo "Success Connection PostgreSql<br>";
    }        
}

class Mysql extends connection{
    public function executeConnection()
    {
        echo "Success Connection Mysql<br>";
    }
}

class MongoDB extends connection{
    public function executeConnection()
    {
        echo "Success Connection MongoDB!<br>";
    }
}
 
function connected (connection $connection){
    $connection->executeConnection(); 
}

$instancePostgresql = new PostgreSql();
$instanceMysql = new Mysql();
$instanceMongDB = new MongoDB();


connected ($instanceMysql);
connected ($instancePostgresql);
connected($instanceMongDB);

    