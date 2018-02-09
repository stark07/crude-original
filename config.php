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
 
/* Attempt to connect to MySQL database */
// PHP Data Objects(PDO) Sample Code:
try {
    $conn = new PDO("sqlsrv:server = tcp:crudedb.database.windows.net,1433; Database = CrudeDB", "rooter", "{Test1234}");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $e) {
    print("Error connecting to SQL Server.");
    die(print_r($e));
}
?>
