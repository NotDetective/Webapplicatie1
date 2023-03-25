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
        require_once '../pages/conn.php';

        $username = $_POST['username'];

        $id = (int)$_POST['id'];

        echo $username . "<br>" ;
        echo $id . "<br>" ;

        $stmt = $conn->prepare("DELETE FROM user WHERE username=:username AND id=:id");

        $stmt ->execute(['username' => $username , 'id' => $id]);
        
        echo"user del";
    ?>
</body>
</html>