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
        <div class="option-manage-account">
            <input type="button" name="button" value="edit account" onclick="switch_to_edit_account();">

            <?php if ($_SESSION['user-roll'] == 1):?>
            <input type="button" name="button" value="delete account" onclick="switch_to_delete_account();">
            <?php endif; ?>
        </div>
        
        <section class="menage-account-section" id="edit-account">
            <h1>edit account</h1>
        </section>

        <section class="menage-account-section" id="delete-account">
            <h1>delete account</h1>

            <p>you need to put in the username and id of the user is you want to delete it.</p>
            <p>warning there is not recover option for deleted users.</p>
            <p>dont know the username or id? <a href="show-all-account.php">click here</a> this can take a lot of time.</p>

            <form name="delete-account" action="delete-account.php" method="POST">

                <input type='username' name='username' placeholder="username">

                <input type='id' name='id' placeholder="user id">

                <input class="submit-button-delete-account" type="button" name="button" value="delete account" onclick="display_warning_delete_user();">

                <div class="warning-delete-user" id="warning-delete-user">
                    <h1>!!warning!!</h1>
                    <p>are you sure you want to delete this account</p>
                    <p>you can't recover any accounts</p>
                    <input class="submit-button-delete-account" type="submit" name='delete-account' value="yeah i am sure" >
                </div>

            </form>
        </section>

    </main>

</body>
<script>
    function switch_to_edit_account() {
        document.getElementById("delete-account").style.display = "none";
        document.getElementById("edit-account").style.display = "block";
    }

    function switch_to_delete_account() {
        document.getElementById("delete-account").style.display = "block";
        document.getElementById("edit-account").style.display = "none";
    }

    function display_warning_delete_user() {
        document.getElementById("warning-delete-user").style.display = "block";
    }

</script>
</html>