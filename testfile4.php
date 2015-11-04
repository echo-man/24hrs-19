<!--=========================================-->
<!--TRY IT Connection configuration file-->
<!--Connecting to database "smithside_backup"-->
<!--and show its table using SHOW TABLES-->
<!--Procedural Style of mysqli-->
<!--=========================================-->

<?php

	define("MYSQLUSER", "php24sql");
	define("MYSQLPASS", "hJQV8RTe5t");
	define("HOSTNAME", "localhost");
	define("MYSQLDB", "smithside_backup");

	$connection = @mysqli_connect(HOSTNAME, MYSQLUSER, MYSQLPASS, MYSQLDB);

	if (mysqli_connect_error()) {
		die('Connect Error: ' .mysqli_connect_error());
	} else {
		echo 'Kudos! Successful connection to MySQL <br/>';
		if ($result = mysqli_query($connection, "SHOW TABLES")) {
			$count = mysqli_num_rows($result);
			echo 'Tables: ' .($count) .'<br />';
			while ($row = mysqli_fetch_array($result)) {
				echo $row[0] .'<br />';
			}
		}
	}

?>