<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atomic Sushi</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="img/icon-or-logo.png" type="image/x-icon">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Atomic+Age&display=swap');
    </style> 
</head>
<body>
    <header>
        <div>
            <a href="index.php">
                <div>
                    <img src="img/icon-or-logo.png" alt="logo">
                </div>
            </a>
            <h1>Atomic Sushi</h1>
        </div>
        <nav>
            <a href="contact-page.php">
               <button>
                    <p>Contact</p>
                </button>
            </a>
            <?php if (isset($_SESSION['user-roll']) && $_SESSION['user-roll'] <= 9 ):?>
            <a href="backlog-pages/backlog.php">
                <button>
                    <p>home admin</p>
                </button>
            </a>
            <?php endif; ?>
            <?php if (isset($_SESSION['username'])):?>
            <a href="manage-account-user.php">
                <button>
                    <p>edit account</p>
                </button>
            </a>
            <a href="logic/logout.php">
                <button>
                    <p>log out</p>
                </button>
            </a>
            <?php else: ?>
            <a href="login-or-registers-page.php">
                <button>
                    <p>Log in</p>
                </button>
            </a>
            <?php endif; ?>
        </nav>
    </header>

    <main>
        <h1>contact</h1>
    </main>
</body>
</html>