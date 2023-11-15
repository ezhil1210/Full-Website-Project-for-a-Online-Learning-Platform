<?php

$db = new mysqli('sql12.freesqldatabase.com', 'sql12653514', 'Dng6EptZbA', 'sql12653514');


if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $username = $_POST["username"];
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT);

    $query = "INSERT INTO users (name, email, username, password) VALUES (?, ?, ?, ?)";
    $stmt = $db->prepare($query);
    $stmt->bind_param("ssss", $name, $email, $username, $password);
    
    if ($stmt->execute()) {
        
        echo "<script>window.location = 'login.html';</script>";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $db->close();
}


