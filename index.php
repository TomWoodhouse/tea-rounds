<?php

$conn = new mysqli("localhost", "root", "", "TomDev");

if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

$sql = "SELECT * FROM DevTest";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "ID: " . $row["ID"]. " - Name: " . $row["FirstName"]. " " . $row["LastName"]. "<br>";
    }
} else {
    echo "0 results";
}
?>

<html>

<head>
</head>

<body>

<h1>Hello World</h1>

</body>

</html>
