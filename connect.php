<?php

session_start();

function getDbConnection(): PDO
{
    $configData = parse_ini_file('config/config.ini');

    $host = $configData['host'];
    $port = $configData['port'];
    $dbname = $configData['dbname'];
    $dsn = "pgsql:host=$host;port=$port;dbname=$dbname";
    $username = $configData['username'];
    $passwd = $configData['passwd'];
    $pdo = new PDO($dsn, $username, $passwd);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $pdo;
}
