<?php

namespace controller\connection;

class ConnectionController
{
    const SERVERNAME = "localhost";
    const USERNAME = "root";
    const PASSWORD = "";

    public function __construct()
    {
    }

    public function connect()
    {
        $conn = new \mysqli(self::SERVERNAME, self::USERNAME, self::PASSWORD);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        return true;
    }
}