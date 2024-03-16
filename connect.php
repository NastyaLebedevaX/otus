<?php
session_start();

function getDbConnection(): PDO
{
    $host = 'localhost';
    $port = 5432;
    $dbname = 'project';
    $dsn = "pgsql:host=$host;port=$port;dbname=$dbname";
    $username = 'postgres';
    $passwd = 'postgres';
    $pdo = new PDO($dsn, $username, $passwd);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $pdo;
}