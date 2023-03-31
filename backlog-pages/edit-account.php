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
        if(!isset($_SESSION['username']) && $_SESSION['user-roll'] <= 4){
            header("Location: ../index.php");
        }

        require_once  '../pages/conn.php';
        
        $username = $_POST['username'];

        $password = $_POST['password'];

        $id = (int)$_POST['id'];

        $stmt = $conn->prepare("SELECT * FROM user WHERE id=:id");

        $stmt->execute(['id' => $id]); 
        $row = $stmt->fetch();

        if (strpos($username, " ") !== false) {
            $_SESSION['error-edit-account'] = "username can't contain a space";
            header("Location: manage-account.php");
        }
        else if (strpos($password, " ") !== false) {
            $_SESSION['error-edit-account'] = "password can't contain a space";
            header("Location: manage-account.php");
        }else{
            if ($_POST['id'] == $row['id']) {
                if (isset($_POST['username'])) {
                    $username = $_POST['username'];
                }else{
                    $username = $row['username'];
                }
                if (isset($_POST['password'])) {
                    $password = $_POST['password'];
                }else{
                    $password = $row['password'];  
                }
                
                $data = [
                    'username' => $username,
                    'password' => $password,
                    'id' => $id,
                ];

                $sql = "UPDATE user SET username=:username, password=:password WHERE id=:id";
                $stmt = $conn->prepare($sql);
                $stmt->execute($data);
                header("Location: manage-account.php");
            }else{
                $_SESSION['error-edit-account'] = "there is no account with this id";
                header("Location: manage-account.php");
            }
        }


    ?>
</body>
</html>