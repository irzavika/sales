<html>
<title>Koneksi php dan mysql</title>
</head>

<body>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "penjualan";

// Create connection
$conn = new mysqli($servername, $username, $password, $db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
// echo "Connected successfully";
?>

</body>
</html>