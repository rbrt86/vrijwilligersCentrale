<?php
include 'database.php';

echo "<p/>page last refreshed: ".date("l h:i:s")."<p/>";
echo "request is being processed by". gethostname();

$clicks = "SELECT clicks FROM clickCounter";
$result = $conn->query($clicks);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
       $clickNumber = $row["clicks"];
        echo "Number of clicks so far: " . $clickNumber."<br/>";
    }
} else {
    echo "0 results";
}

$insert = "INSERT INTO clickCounter (clicks)
VALUES ('$clickNumber++');

if ($conn->query($insert) === TRUE) {
  echo "<p/>Click succesvol";
} else {
  echo "<p/>Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
