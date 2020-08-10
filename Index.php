<html>
<head>
<body>
<H1>welcome</H1>

<?php

$host = "localhost";
$username = "root";
$password = "usbw";
$database_in_use = "nxt connect";

$mysqli = new mysqli( $host, $username, $password, $database_in_use);

if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

echo $mysqli->host_info . "\n";

$sqli = "SELECT id, First Name, Last Name FROM nxt connect";
$result = $mysqli->query($sqli);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["First Name"]. "- First Name: " . $row["Last Name"]. "Last Name" . $row["Company"]. "<br>";
    }
} else {
    echo "0 results";
}
$mysqli->close();

?>

</body>
</html>
