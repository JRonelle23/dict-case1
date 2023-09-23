<?php
require_once('./controller/connection/ConnectionController.php');

$conn = new \controller\connection\ConnectionController();
var_dump('test' . $conn->connect());