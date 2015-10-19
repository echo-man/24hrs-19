<!--=========================================-->
<!--TRY IT Connection configuration file-->
<!--Connecting to database "smithside_backup"-->
<!--and show its table using SHOW TABLES-->
<!--=========================================-->

<?php

	define("MYSQLUSER", "php24sql");
	define("MYSQLPASS", "hJQV8RTe5t");
	define("HOSTNAME", "localhost");
	define("MYSQLDB", "smithside_backup");

	$connection = @new mysqli(HOSTNAME, MYSQLUSER, MYSQLPASS, MYSQLDB);

	if ($connection->connect_error) {
		die('Connect Error: ' . $connection->connect_error);
	} else {
		echo 'Congratulations! Successful connection to MySQL <br/>';
		if ($result = $connection->query("SHOW TABLES")) {
			$count = $result->num_rows;
			echo 'Tables: ' .($count) .'<br />';
			while ($row = $result->fetch_array()) {
				echo $row[0] .'<br />';
			}
		}
	}

?>