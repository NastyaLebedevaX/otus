<?php

function getDbConnection(): PDO
{
    $host = 'localhost';
    $port = 5432;
    $dbname = 'project';
    $dsn = "pgsql:host=$host;port=$port;dbname=$dbname";
    $username = 'postgres';
    $passwd = 'postgres';
    return new PDO($dsn, $username, $passwd);
}
