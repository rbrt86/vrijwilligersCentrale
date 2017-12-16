<?php



// opbouwen van de connectie


$dbhost = getenv('OPENSHIFT_MYSQL_DB_HOST') . ":" . getenv('OPENSHIFT_MYSQL_DB_PORT');
$dbname = getenv('MYSQL_DATABASE');
$username = getenv('MYSQL_USER');
$password = getenv('OPENSHIFT_MYSQL_DB_PASSWORD');

echo "<br/>dbhost set to ".$dbhost."<br/>";
echo "dbname set to ".$dbname."<br/>";
echo "username set to ".$username."<br/>";


		$conn = new mysqli($dbhost,$username,$password,$dbname);

		if ($conn->connect_error) {

			die("Connection failed, cannot connect to database: ". $conn->connection_error);

		}

?>
