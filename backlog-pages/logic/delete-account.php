<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>delete account</h1>
    <?php
        session_start();
        if(!isset($_SESSION['username']) && $_SESSION['user-roll'] <= 4){
            header("Location: ../../index.php");
        }

        require_once '../../pages/conn.php';

        $id = (int)$_POST['id'];

        echo $id . "<br>" ;

        $stmt = $conn->prepare("DELETE FROM user WHERE id=:id");

        $stmt ->execute(['id' => $id]);
        
        echo"user del";

        $_SESSION['confirm-deleted-user'] = "user deleted";

        header("Location : ../manage-account.php")
    ?>
</body>
</html>