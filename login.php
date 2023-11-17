<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
    $username = $_POST["loginUsername"];
    $password = $_POST["loginPassword"];

    $users = explode("\n", file_get_contents("users.txt"));
    foreach ($users as $user) 
    {
        list($storedUsername, $storedPassword) = explode(",", trim($user));
        if ($storedUsername === $username && $storedPassword === $password) 
        {
            $_SESSION['username'] = $username; // Store username in session
            header("Location: main.php"); // Redirect to main.php
            exit;
        }
    }

    echo "Invalid username or password!";
}
?>
