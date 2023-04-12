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
            <a href="manage-menu-item-page.php">
                <button>
                    <p>manage item</p>
                </button>
            </a>
            <?php if ($_SESSION['user-roll'] <= 4): ?>
            <a href="manage-account.php">
                <button>
                    <p>manage account</p>
                </button>
            </a>
            <?php endif; ?>
        </nav>
    </header>
    <main class="main-backlog-manage-account">

        <section>
            <div class="show-all-users">
                <h1>All users and id</h1>
                <h1 class="category-users">Managers</h1>
                <?php
                    foreach ($row AS $userdata){
                    if ($userdata['roll'] == 4) {
                        echo "<p>" . 'id of user <font color=red> '. $userdata['username'] . '</font> is <font color=red> ' . $userdata['id']. " </font></p>";
                    }
                    }
                ?>
                <h1 class="category-users">Employee</h1>
                <?php
                    foreach ($row AS $userdata){
                    if ($userdata['roll'] == 7) {
                        echo "<p>" . 'id of user <font color=red> '. $userdata['username'] . '</font> is <font color=red> ' . $userdata['id']. " </font></p>";
                    }
                    }
                ?>
                <h1 class="category-users">Customers</h1>
                <?php
                    foreach ($row AS $userdata){
                    if ($userdata['roll'] == 10) {
                        echo "<p>" . 'id of user <font color=red> '. $userdata['username'] . '</font> is <font color=red> ' . $userdata['id']. " </font></p>";
                    }
                    }
                ?>


            </div>
        </section>

        <section>
            <div class="edit-account-backlog">
                <h1>edit item page</h1>
                <p>
                    <font color=red><?php echo $_SESSION['error-edit-account']; $_SESSION['error-edit-account'] =""; ?>
                    </font>
                </p>
                <form name="edit-account" action="../backlog-pages/logic/edit-account.php" method="POST">
                    <div>
                        <input class="input-place" type="number" name='id' placeholder='user id'>
                        <input class="input-place" type="username" name="username" placeholder="New username">
                        <input class="input-place" type="text" name="password" placeholder="New password">
                    </div>

                    <input class="submit-button" type="submit" name='edit-premissions' value="submit">
                </form>
            </div>
        </section>

        <?php if ($_SESSION['user-roll'] ==1): ?>
        <section>
            <div class="delete-account-backlog">
                <h1>delete account</h1>
                <p> <font color=red>warning </font> there is not recover option for deleted users.</p>

                <form name="delete-account" action="../backlog-pages/logic/delete-account.php" method="POST">

                    <input class="input-place" type='number' name='id' placeholder="user id">

                    <div>
                        <input class="submit-button" type="submit" name="button" value="delete account"
                            onclick="display_warning_delete_user();">
                    </div>

                </form>
            </div>
        </section>
        <?php endif; ?>

        <section>
            <div class="edit-premissions-backlog">
                <form class="edit-premission-form" naam="edit-premissions"
                    action="../backlog-pages/logic/edit-premissions.php" method="POST">
                    <h1>add or remove employee</h1>
                    <div>
                        <input class="input-place" type="number" name='id' placeholder="user id" required>
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
                    </div>
                    <input class="submit-button" type="submit" name='edit-premissions' value="submit">
                </form>
            </div>
        </section>



    </main>

</body>
<script>
function display_warning_delete_user() {

    if (confirm('are you user? you cant recover deleted accounts') == false) {
        event.preventDefault()
    }
}
</script>

</html>