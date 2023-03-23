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
            <a href="add-menu-item-pages.php">
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
        <h1>ADD IMTEM</h1>

        <form naam="add-menu-item" action="login-page.php" method="POST">

                <input class="style-input-add-item" type="text" name='naam' placeholder="naam" required>

                <input class="style-input-add-item" type="text" name='text' placeholder="description" required>

                <input type="file" name='file' placeholder="" required>

                <div>
                    <p>box item</p>
                    <input  type="radio" name='test' placeholder="yes" required>
                </div>
                
                <div>
                    <p>normal sushi item</p>
                    <input type="radio" name='test' placeholder="yes" required>
                </div>
                
                <div>
                    <p>luxe sushi item</p>
                    <input type="radio" name='test' placeholder="yes" required>
                </div>

                <input type="submit" name='add-item' value="add-item">

            </form>
    </main>

</body>
</html>