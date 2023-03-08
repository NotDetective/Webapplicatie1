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
            <a href="login-or-registers-page.php">
                <button>
                    <p>Log in</p>
                </button>
            </a>
        </nav>
    </header>

    <main class="login-or-registers-page">

        <section>
            <h1>Login</h1>
            <form naam="login" action="temp_loginedscrean.php" method="POST">

                <input type="username" name='username' placeholder="username">

                <input type="password" name='password' placeholder="password">

                <input class="login-register" type="submit" name='submit' value="login">

            </form>

        </section>

        <section>
            <h1>Register</h1>
            <form naam="register" action="" method="POST">

                <input type="name" name='name' placeholder="name">

                <input type="username" name='username' placeholder="username">

                <input type="password" name='password' placeholder="password">

                <input class="login-register" type="submit" name='submit' value="register">

            </form>
        </section>


    </main>
</body>

</html>