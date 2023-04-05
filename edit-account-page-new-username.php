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
        session_start();

        require_once 'pages/conn.php';

        if (isset($_POST['submit-new-username'])) {
            
           $username = $_POST['new-username'];

            $password = $_POST['password'];

            echo "data <br>";

            $stmt = $conn->prepare("SELECT * FROM user WHERE password=:password");

            $stmt->execute(['password' => $password]); 
            $row = $stmt->fetch();

            echo "select <br>";

            if ($row['password'] == $password) {

                if(isset($row['id'])){

                    $data = [
                        'username' => $username,
                        'id' => $row['id'],
                    ];

                    $sql = "UPDATE user SET username=:username WHERE id=:id";
                    $stmt = $conn->prepare($sql);
                    $stmt->execute($data);
    
                    $_SESSION['username'] = $username;
                    $_SESSION['new-username'] = "updated username";
                    header("Location: manage-account-user.php");
    
                }else{
                    header("Location: manage-account-user.php");
                }

            }else{
                $_SESSION['new-username'] = "password is not correct";
                header("Location: manage-account-user.php");
            }

        }else{
            header("Location: manage-account-user.php");
        }

    ?>
</body>
</html>