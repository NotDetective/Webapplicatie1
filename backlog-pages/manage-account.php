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
            <a href="../index.php">
                <button>
                    <p>Home</p>
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
    <div class="selection-options-accounts">
        <h1 class="confirm-deleted-user"><?php echo  $_SESSION['confirm-deleted-user'];  $_SESSION['confirm-deleted-user'] = "" ?></h1>
        <div class="option-manage-account">
            <input type="button" name="button" value="edit account" onclick="switch_to_edit_account();">
            <?php if ($_SESSION['user-roll'] == 1):?>
            <input type="button" name="button" value="delete account" onclick="switch_to_delete_account();">
            <?php endif; ?>
        </div>
    </div>
    <main class="main-backlog-manage-account">

        <section>
            <div class="show-all-users">
                <h1> Managers</h1>
                <?php
                    foreach ($row AS $userdata){
                    if ($userdata['roll'] == 4) {
                        echo "<p>" . 'id of user '. $userdata['username'] . ' is ' . $userdata['id']. "</p>";
                    }
                    }
                ?>
                <h1>Employee</h1>
                <?php
                    foreach ($row AS $userdata){
                    if ($userdata['roll'] == 7) {
                        echo "<p>" . 'id of user '. $userdata['username'] . ' is ' . $userdata['id']. "</p>";
                    }
                    }
                ?>
                <h1>Customers</h1>
                <?php
                    foreach ($row AS $userdata){
                    if ($userdata['roll'] == 10) {
                        echo "<p>" . 'id of user '. $userdata['username'] . ' is ' . $userdata['id']. "</p>";
                    }
                    }
                ?>
            </div>
        </section>
        <section>
            <div class="menage-account-section" id="edit-account">
                <div>
                    <h1>edit account</h1>
                    <div class="options-edit-account">
                        <input type="button" value="edit account" onclick="display_edit_account();">
                        <input type="button" value="edit permissions" onclick="display_edit_premissions();">
                    </div>

                    <div class="edit-account" id="edit-account-input">
                        <p> <font color=red><?php echo $_SESSION['error-edit-account']; $_SESSION['error-edit-account'] =""; ?>  </font></p>
                        <form name="edit-account" action="../backlog-pages/logic/edit-account.php" method="POST">
                            <input type="number" name='id' placeholder='user id'>

                            <input type="username" name="username" placeholder="New username">
                            <input type="text" name="password" placeholder="New password">

                            <input class="submit-input-edit-premissions" type="submit" name='edit-premissions' value="submit" >
                        </form>
                    </div>

                    <div class="edit-premissions" id="edit-premissions">
                        <form class="edit-premission-form" naam="edit-premissions" action="../backlog-pages/logic/edit-premissions.php" method="POST">
                            <input type="number" name='id' placeholder="user id" required>
                            <fieldset>
                                <div>
                                    <input type="radio" id="boxen" name='edit-roll' value=10 required>
                                    <label for="boxen">Remove employee</label>
                                </div>
                                <div>
                                    <input type="radio" id="boxen" name='edit-roll' value=7 required>
                                    <label for="boxen">Add employee</label>
                                </div>
                                <?php if ($_SESSION['user-roll'] == 1): ?>
                                <div>
                                    <input type="radio" id="boxen" name='edit-roll' value=4 required>
                                    <label for="boxen">Add Manager</label>
                                </div>
                                <?php endif; ?>
                            </fieldset>
                            <input class="submit-input-edit-premissions" type="submit" name='edit-premissions' value="submit" >
                        </form>
                    </div>

                </div>
            </div>

            <div class="menage-account-section" id="delete-account">
                <div>
                    <div class="text-area">
                        <h1>delete account</h1>
                        <p>you need to put in the username and id of the user is you want to delete it.</p>
                        <p>warning there is not recover option for deleted users.</p>
                    </div>

                    <form name="delete-account" action="../backlog-pages/logic/delete-account.php" method="POST">

                        <input type='number' name='id' placeholder="user id">

                        <input class="submit-button-delete-account" type="button" name="button" value="delete account" onclick="display_warning_delete_user();">

                        <div class="warning-delete-user" id="warning-delete-user">
                            <h1>!!warning!!</h1>
                            <a href="">
                                <h1>X</h1>
                            </a>
                            <p>are you sure you want to delete this account</p>
                            <p>you can't recover any accounts</p>
                            <input class="submit-button-delete-account" type="submit" name='delete-account' value="yeah i am sure" >
                        </div>

                    </form>
                </div>
            </div>
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
        // alert('weet je dit zeker?') new 
        document.getElementById("warning-delete-user").style.display = "block";
    }

    function display_edit_premissions() {
        document.getElementById("edit-premissions").style.display = "block"; 
        document.getElementById("edit-account-input").style.display = "none";
    }

    function display_edit_account() {
        document.getElementById("edit-premissions").style.display = "none"; 
        document.getElementById("edit-account-input").style.display = "block";
    }

</script>
</html>