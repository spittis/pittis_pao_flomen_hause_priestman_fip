<?php
// TESTING ON: macOS
// change DB_PASS to '' to swap to WINDOWS

$db_dsn = array(
    'host' => 'localhost',
    'dbname' => 'db_occ', //change to name of database
    'charset' => 'utf8',
);
$dsn = 'mysql:'.http_build_query($db_dsn, '', ';');

// Set up connection credentials
$db_user = 'root';
$db_pass = 'root';

$pdo = new PDO($dsn, $db_user, $db_pass);

/* check connection */
try {
    $pdo = new PDO($dsn, $db_user, $db_pass);
} catch (PDOException $exception) {
    echo "Connection error: " . $exception->getMessage();
    exit();
}