<?php
    session_start();
    if(!isset($_SESSION['username'])){
        header("Location: ../index.php");
    }
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
        <nav>
            <a href="../logout.php">
                <button>
                    <p>Log out</p>
                </button>
            </a>
            <a href="../index.php">
                <button>
                    <p>Home</p>
                </button>
            </a>
            <a href="add-menu-item-page.php">
                <button>
                    <p>Add item</p>
                </button>
            </a>
            <?php if ($_SESSION['user-roll'] <= 4): ?>
            <a href="manage-menu-item-page.php">
                <button>
                    <p>manage item</p>
                </button>
            </a>
            <a href="manage-account.php">
                <button>
                    <p>manage account</p>
                </button>
            </a>
            <?php endif; ?> 
        </nav>
    </header>
    <main class="main-backlog">
        <h1>backlog</h1>
    </main>

</body>
</html>