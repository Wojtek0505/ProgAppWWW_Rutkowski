<?php
$host = 'localhost';
$port = 3306;
$dbname = 'moja_strona';
$username = 'twoj_uzytkownik';
$password = 'twoje_haslo';

$dsn = "mysql:host=$host;port=$port;dbname=$dbname;charset=utf8mb4";

$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_EMULATE_PREPARES => false,
];

$pdo = new PDO($dsn, $username, $password, $options);
