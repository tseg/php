
<?php
require 'db_connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $stmt = $conn->prepare("INSERT INTO users (name, email) VALUES (?, ?)");
    $stmt->bind_param("ss", $name, $email);
    $name = $_POST['name'];
    $email = $_POST['email'];
    $stmt->execute();
    echo "Data inserted using prepared statements.";
    $stmt->close();
}
?>
