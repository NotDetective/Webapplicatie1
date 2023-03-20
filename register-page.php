<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php

        require_once 'pages/conn.php';

        if (isset($_POST['submit'])) {
            $username = $_POST['username']; 
            $password = $_POST['password'];
            if (strpos($username, " ") !== false) {
                session_start();
                $_SESSION['register-message'] = "username cant contain a space";
                header("Location: login-or-registers-page.php");
            }
            else if (strpos($password, " ") !== false) {
                session_start();
                $_SESSION['register-message'] = "password cant contain a space";
                header("Location: login-or-registers-page.php");
            }
            else{
                $sql = "INSERT INTO user (username, password) 
                VALUES ('$username', '$password')";

                $conn->exec($sql); 
                echo "new record created";
                session_start();
                $_SESSION['register-message'] = "";
                $_SESSION['confirm-register-message'] = "Login successfully";
                header("Location: login-or-registers-page.php");
            }
        }

    ?>
    
</body>
</html>