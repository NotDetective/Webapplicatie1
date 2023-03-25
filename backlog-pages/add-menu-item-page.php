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
            <a href="backlog.php">
                <div>
                    <img src="../img/icon-or-logo.png" alt="logo">
                </div>
            </a>
            <h1 class="header-name-admin">Atomic Sushi Admin</h1>
        </div>
        <nav>
            <a href="../logout.php">
                <button>
                    <p>Log out</p>
                </button>
            </a>
            <a href="add-menu-item-page.php">
                <button>
                    <p>Add item</p>
                </button>
            </a>
            <a href="manage-account.php">
                <button>
                    <p>manage account</p>
                </button>
            </a>
        </nav>
    </header>
    <main class="main-backlog">

        <h1>Add new item</h1>

        <form naam="add-menu-item" action="add-menu-item.php" method="POST">

                <input class="style-input-add-item" type="text" name='name' placeholder="name" required>

                <textarea name='text' cols="30" rows="10" placeholder="description" required></textarea>

                <input class="style-input-add-item" type="number" name='price' placeholder="price" step="0.01" required>

                <input type="file" name='file' >

                <fieldset>
                    <div>
                        <input type="radio" id="boxen" name='item_type' value=1>
                        <label for="boxen">New Box item</label>
                    </div>
                    <div>
                        <input type="radio" id="sushi"  name='item_type' value=2>
                        <label for="sushi">New sushi item</label>
                    </div>
                    <div>
                        <input type="radio" id="luxury" name='item_type' value=3>
                        <label for="luxury">New luxury Sushi item</label>
                    </div>
                </fieldset>

                <input class="submit-button-add-new-item" type="submit" name='add-item' value="add-item">

            </form>
    </main>

</body>
</html>