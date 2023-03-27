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
        require_once  '../pages/conn.php';

        $data = [
            'roll' => $roll,
        ];
        $sql = "UPDATE user SET roll=:roll WHERE id=:id";
        $stmt= $pdo->prepare($sql);
        $stmt->execute($data);



    ?>
</body>
</html>