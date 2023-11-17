<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title> Pivotal Echoes | Sign Up </title>
        <link rel="stylesheet" href="pivotalEchoes.css">
    </head>

    <body class="registerFile">
        <!-- Logo -->
        <div class="logo">
            <a href="https://codd.cs.gsu.edu/~stran33/WP/PW/2/login.html" class="linkUnderline" id="pivotal">
                <h1>Pivotal <span id="echoes">Echoes</span></h1>
            </a>
            <hr class="line">
        </div>

        <!-- Register -->
        <div id="beginYourStory">
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
            <a href="login.html" class="linkUnderline">Go to Login</a>
        </div>
    </body>
</html>
