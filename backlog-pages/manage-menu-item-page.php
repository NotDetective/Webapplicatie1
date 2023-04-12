<?php
    session_start();
    if(!isset($_SESSION['username'])){
        header("Location: ../index.php");
    }

    require_once '../pages/conn.php';

    $stmt = $conn->prepare("SELECT * FROM sushi ORDER BY id DESC");
    $stmt->execute(); 
    $products = $stmt->fetchAll();
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
            <a href="../logic/logout.php">
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
    <main class="main-backlog-menage-item">
        <section>
            

            <form class="add-menu-item-form" naam="add-menu-item" action="../backlog-pages/logic/add-menu-item.php" method="POST" enctype="multipart/form-data">

            <h1> <font color=red><?php echo $_SESSION['menu-item-added'];  $_SESSION['menu-item-added'] ="";?> </font> </h1>

                    <h1>add menu item</h1>

                    <input class="style-input-add-item" type="text" name='name' placeholder="name" required>

                    <textarea name='text' cols="30" rows="10" placeholder="description" required></textarea>

                    <input class="style-input-add-item" type="number" name='price' placeholder="price" step="0.01" required>

                    <input type="file" name="image">

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
        </section>
        <section class="edit-menu-page">
        <?php
            foreach ($products AS $row){

                $category = null; 
                if($row['category'] == 1 ){
                    $category = "box item";
                }elseif($row['category'] == 2 ){
                    $category = "normal sushi item";
                }elseif ($row['category'] == 3 ) {
                    $category = "luxury sushi item";
                }
            
                    echo "<div class='menu-item-display'>";
                        echo "<div class='small-info-menu-item'>";
                            echo "<h1>".$row['name']."</h1>";
                        echo "</div>";
                        echo "<div class='more-info-menu-item'>";
                            echo "<p> description : ".$row['description']."</p>";
                            echo "<p> Price : €".$row['price']."</p>";
                            echo "<p> category : ". $category ."<p>";
                        echo "</div>";
                        echo "<div class='menu-items-edit-options'>";
                                echo "<a href='edit-menu-item-page.php?id=".$row['id']."'>";
                                    echo "<p>edit item</p>";
                                echo "</a>";

                                if ($_SESSION['user-roll'] <= 4): 
                                echo "<a href='../backlog-pages/logic/delete-menu-item.php?id=".$row['id']."'>";
                                    echo"<p>delete item</p>";
                                echo "</a>";
                                endif;
                                
                        echo "</div>";
                    echo "</div>";
            }
        ?>
        </section>
    </main>

</body>
</html>