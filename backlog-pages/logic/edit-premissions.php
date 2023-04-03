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
        if(!isset($_SESSION['username']) && $_SESSION['user-roll'] == 1){
            header("Location: ../../index.php");
        }

        require_once  '../../pages/conn.php';

        $roll = (int)$_POST['edit-roll'];

        $id = (int)$_POST['id'];

        $data = [
            'roll' => $roll,
            'id' => $id,
        ];

        $sql = "UPDATE user SET roll=:roll WHERE id=:id";
        $stmt = $conn->prepare($sql);
        $stmt->execute($data);
        echo "user edit";
        header("Location: ../manage-account.php");



    ?>
</body>
</html>