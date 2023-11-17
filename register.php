<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["regUsername"];
    $password = $_POST["regPassword"];
    $confirmPassword = $_POST["regPasswordConfirm"];

    if ($password !== $confirmPassword) {
        echo "Passwords do not match!";
        exit;
    }

    $userData = $username . "," . $password . "\n";
    file_put_contents("users.txt", $userData, FILE_APPEND);
    echo "Registration successful!";
    
}
?>
<a href="login.html" class="button">Go to Login</a>
