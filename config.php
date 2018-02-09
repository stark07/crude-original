<?php

/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) 
$serverName = "tcp:crudedb.database.windows.net,1433";
$connectionOptions = array(
    "Database" => "CrudeDB",
    "Uid" => "rooter",
    "PWD" => "Hello123"
);
//Establishes the connection
$conn = sqlsrv_connect($serverName, $connectionOptions);
*/
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
define('DB_SERVER', 'crudedb.database.windows.net');
define('DB_USERNAME', 'rooter');
define('DB_PASSWORD', 'Hello123');
define('DB_NAME', 'CrudeDB');
 
/* Attempt to connect to MySQL database */
try{
    $pdo = new PDO("mysql:host=" . DB_SERVER . ";dbname=" . DB_NAME, DB_USERNAME, DB_PASSWORD);
    // Set the PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e){
    die("ERROR: Could not connect. " . $e->getMessage());
}

?>
