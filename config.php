<?php

/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$serverName = "tcp:crudedb.database.windows.net,1433";
$connectionOptions = array(
    "Database" => "CrudeDB",
    "Uid" => "rooter",
    "PWD" => "Hello123"
);
//Establishes the connection
$conn = sqlsrv_connect($serverName, $connectionOptions);
?>
