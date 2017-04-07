$serverName = "tcp:oscar17.database.windows.net,1433";
$connectionInfo = array("UID" => "osarskoscar@oscar17", "pwd" => "Oscar2017", "Database" => "oscar17", "LoginTimeout" => 30, "Encrypt" => 1, "TrustServerCertificate" => 0);
$conn = sqlsrv_connect($serverName, $connectionInfo);
