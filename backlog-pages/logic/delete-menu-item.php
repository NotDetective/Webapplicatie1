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
            header("Location: ../../index.php");
        }
       require_once '../../pages/conn.php';

       $id =  (int)$_GET['id'];

       echo $id . "<br>" ;

       $stmt = $conn->prepare("DELETE FROM sushi WHERE id=:id");

       $stmt ->execute(['id' => $id]);
       
       echo"sushi del";

       header("Location : ../manage-menu-item-page.php")

    ?>
</body>
</html>