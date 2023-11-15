<?php
$db = new mysqli('sql12.freesqldatabase.com', 'sql12653514', 'Dng6EptZbA', 'sql12653514');
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $query = "SELECT id, username, password FROM users WHERE username=?";
    $stmt = $db->prepare($query);
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $stmt->bind_result($id, $db_username, $db_password);

    if ($stmt->fetch() && password_verify($password, $db_password)) {
        header("Location: http://localhost/Neural%20transformers/index.php");
        exit();
    } else {
        header("Location:login-failed.html");
    }

    $stmt->close();
    $db->close();
}
?>
