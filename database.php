<?php



// opbouwen van de connectie


$dbhost = getenv('MYSQL_SERVICE_HOST') . ":" . getenv('MYSQL_SERVICE_PORT');
$dbname = getenv('MYSQL_DATABASE');
$username = getenv('MYSQL_USER');
$password = getenv('MYSQL_PASSWD');




		$conn = new mysqli($username,$password,$dbname);

		if ($conn->connect_error) {

			die("Connection failed, cannot connect to database: ". $conn->connection_error);
			echo "<br/>";
			echo "<br/>dbhost set to ".$dbhost."<br/>";
			echo "dbname set to ".$dbname."<br/>";
			echo "username set to ".$username."<br/>";

		}

?>
