<?php



// opbouwen van de connectie


$dbhost = getenv('OPENSHIFT_MYSQL_DB_HOST') . ":" . getenv('OPENSHIFT_MYSQL_DB_PORT');
$dbname = 'myfirstdb';
$username = getenv('OPENSHIFT_MYSQL_DB_USERNAME');
$password = getenv('OPENSHIFT_MYSQL_DB_PASSWORD');




		$conn = new mysqli($dbhost,$username,$password,$dbname);

		if ($conn->connect_error) {

			die("Connection failed, cannot connect to database: ". $conn->connection_error);

		}

?>
