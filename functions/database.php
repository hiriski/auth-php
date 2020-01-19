<?php

/** pada latihan ini saya bikin pake mysqli oop */
$host     = 'localhost';
$username = 'root';
$password = 'kopi';
$database = 'phpauth';

$connect  = new mysqli($host, $username, $password, $database);

/* uji */
if ($connect->connect_errno) {
    echo $connect->connect_error;
}


?>