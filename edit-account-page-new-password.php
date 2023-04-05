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

        if (isset($_POST['submit-new-password'])) {
            
            $newPassword = $_POST['new-password'];

            $oldPassword = $_POST['old-password'];

            echo "data <br>";

            $stmt = $conn->prepare("SELECT * FROM user WHERE password=:password");

            $stmt->execute(['password' => $oldPassword]); 
            $row = $stmt->fetch();

            echo "select <br>";

            if ($row['password'] == $oldPassword) {

                if(isset($row['id'])){

                    $data = [
                        'password' => $newPassword,
                        'id' => $row['id'],
                    ];


    
                    $sql = "UPDATE user SET password=:password WHERE id=:id";
                    $stmt = $conn->prepare($sql);
                    $stmt->execute($data);
    
                    $_SESSION['new-password'] = "updated password";
                    header("Location: manage-account-user.php");
    
                }else{
                    header("Location: manage-account-user.php");
                }

            }else{
                $_SESSION['new-password'] = "password is not correct";
                header("Location: manage-account-user.php");
            }

        }else{
            header("Location: manage-account-user.php");
        }

    ?>
</body>
</html>