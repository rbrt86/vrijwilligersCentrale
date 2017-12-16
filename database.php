<?php



// opbouwen van de connectie

		$servername = "myfirstdb"; 

		$username = "mysqlapplication";

		$password = "tryoutpassword";

		

		$conn = new mysqli($servername,$username,$password);

		if ($conn->connect_error) {

			die("Connection failed, cannot connect to database: ". $conn->connection_error);

		}

		

?>
