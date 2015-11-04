<!--========================================-->
<!--Example of Connection configuration file-->
<!--========================================-->

<?php

	define("MYSQLUSER", "php24sql");
	define("MYSQLPASS", "hJQV8RTe5t");
	define("HOSTNAME", "localhost");

	$connection = @new mysqli(HOSTNAME, MYSQLUSER, MYSQLPASS);

	if ($connection->connect_error) {
		die('Connect Error: ' . $connection->connect_error);
	} else {
		echo 'Successful connection to MySQL';
}

?>


<!--=========================================-->
<!--TRY IT Connection configuration file-->
<!--Connecting to database "smithside_backup"-->
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
		echo 'Congratulations! Successful connection to MySQL.' .'<br/>';
}

?>