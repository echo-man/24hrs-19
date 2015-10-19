<!--=============================-->
<!--Connection configuration file-->
<!--=============================-->

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