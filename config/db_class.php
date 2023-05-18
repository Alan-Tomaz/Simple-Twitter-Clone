<?php

class Database
{
    //host
    private $host = 'localhost';
    //user
    private $user = 'root';
    //password
    private $password = '';
    //database name
    private $dbName = 'twitter_clone_db';

    public function connectMysql()
    {
        //create connection
        $connection = mysqli_connect($this->host, $this->user, $this->password, $this->dbName);
        //adjust the communication charset between the application and the database
        mysqli_set_charset($connection, "utf8");

        //verify if has a connection error
        if (mysqli_connect_errno()) {
            echo "Error trying to connect to database: " . mysqli_connect_error();
        }

        return $connection;
    }
}
