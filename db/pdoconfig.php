<?php
session_start();
$host = 'eu-cdbr-west-02.cleardb.net';
$dbname = 'heroku_db043b0b6d07824';
$username = 'b0af8976d02828';
$password = 'e1cee0e9';

$options = [
    \PDO::ATTR_ERRMODE  => \PDO::ERRMODE_EXCEPTION,
    \PDO::ATTR_DEFAULT_FETCH_MODE  => \PDO::FETCH_ASSOC,
    \PDO::ATTR_EMULATE_PREPARES  => false
];