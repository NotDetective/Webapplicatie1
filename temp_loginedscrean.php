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

        require 'pages/com.php';

        if (isset($_POST['submit'])) {
            
            $email = $_POST['username'];
            echo $email;

            $password = $_POST['password'];
            echo $password;
        }
    ?>
    
</body>
</html>