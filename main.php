<?php
include 'database.php';

echo "<p/>page last refreshed: ".date("l h:i:s")."<p/>";

$clicks = "SELECT clicks FROM clickCounter";
$result = $conn->query($clicks);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "Number of clicks so far: " . $row["clicks"]."<br/>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>
