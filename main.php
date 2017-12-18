<?php
include 'database.php';

echo "<p/>page last refreshed: ".date("l h:i:s")."<p/>";
echo "request is being processed by ". gethostname()."<p/>";

$clicks = "SELECT clicks FROM clickCounter where ID = 1";
$result = $conn->query($clicks);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
       $clickNumber = $row["clicks"];
        echo "Number of pageviews so far: " . $clickNumber."<br/>";
    }
} else {
    echo "0 results";
}

$update = "UPDATE clickCounter SET clicks=".++$clickNumber." where ID=1";

if ($conn->query($update) === TRUE) {
  echo "<p/>pageview updated";
} else {
  echo "<p/>Error: " . $sql . "<br/>" . $conn->error;
}

$conn->close();
?>
