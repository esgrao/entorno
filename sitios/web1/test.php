
Skip to content
Pull requests
Issues
Marketplace
Explore
@esgrao
rafacabeza /
entornods
Public

1
0

    5

Code
Issues
Pull requests
Actions
Projects
Wiki
Security

    Insights

entornods/data/web1/index.php /
@rafacabeza
rafacabeza añadir data de pruebas
Latest commit ca564df on Sep 25, 2019
History
1 contributor
26 lines (23 sloc) 645 Bytes
<?php
$servername = "db";
$username = "root";
$password = "password";
$dbname = "demo";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT name, continent, region FROM country";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "País: " . $row["name"]. " - Continente: " . $row["continent"]. " -Región: " . $row["region"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();


