<?php
    session_start();
    if(!isset($_SESSION['username'])){
        header("Location: ../index.php");
    }
    require_once '../pages/conn.php';
    $stmt = $conn->prepare("SELECT username, id, roll FROM user");

            $stmt->execute(); 
            $row = $stmt->fetchAll();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atomic Sushi backlog</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="shortcut icon" href="../img/icon-or-logo.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Atomic+Age&display=swap');
    </style>
</head>
<body>
<header class="header-backlog">
        <div>
            <div>
                <img src="../img/icon-or-logo.png" alt="logo">
            </div>
            <h1 class="header-name-admin">Atomic Sushi Admin</h1>
        </div>
        <nav class="header-all-account">
            
            <a href="manage-account.php">
                <button>
                    <p> go back</p>
                </button>
            </a>
        </nav>
    </header>
    <main class="main-backlog">
        <h1> Managers</h1>
        <?php
            foreach ($row AS $userdata){
               if ($userdata['roll'] == 4) {
                echo "<h1>" . 'id is: ' . $userdata['id']  . ' username is: ' . $userdata['username'] . "</h1>";
               }
            }
        ?>
        <h1>Employee</h1>
        <?php
            foreach ($row AS $userdata){
               if ($userdata['roll'] == 7) {
                echo "<h1>" . 'id is: ' . $userdata['id']  . ' username is: ' . $userdata['username'] . "</h1>";
               }
            }
        ?>
        <h1>Customers</h1>
        <?php
            foreach ($row AS $userdata){
               if ($userdata['roll'] == 10) {
                echo "<h1>" . 'id is: ' . $userdata['id']  . ' username is: ' . $userdata['username'] . "</h1>";
               }
            }
        ?>
        
    </main>
</body>
</html>