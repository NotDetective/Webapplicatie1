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

        $username = $_POST['username'];
  
        $password = $_POST['password'];
        
            $stmt = $conn->prepare("SELECT username, password, roll FROM user WHERE username=:username AND password=:password");

            $stmt->execute(['username' => $username, 'password' => $password]); 
            $row = $stmt->fetch();

            if ($row['username'] == $username AND $row['password'] == $password) {
                if ($row['roll'] < 10) {
                    header("Location: backlog.php");
                }else{
                    header("Location: login-or-registers-page.php");
                    session_start();
                    $_SESSION['confirm-register-message'] = "login successfully";
                }
            }
            else{
                session_start();
                $_SESSION['login-message'] = "username or password is not correct";
                header("Location: login-or-registers-page.php");
            }


    ?>
    
</body>
</html>