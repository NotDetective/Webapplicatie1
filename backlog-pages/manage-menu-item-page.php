<?php
    session_start();
    if(!isset($_SESSION['username'])){
        header("Location: ../index.php");
    }

    require_once '../pages/conn.php';

    $stmt = $conn->prepare("SELECT * FROM sushi");
    $stmt->execute(); 
    $products_sushi = $stmt->fetchAll();
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
        <h1>manage menu</h1>
        <section class="edit-menu-page">
        <?php
            foreach ($products_sushi AS $row){

                $category = null; 
                if($row['category'] == 1 ){
                    $category = "box item";
                }elseif($row['category'] == 2 ){
                    $category = "normal sushi item";
                }elseif ($row['category'] == 3 ) {
                    $category = "luxury sushi item";
                }
            
                echo"
                    <div class='menu-item-display'>
                        <div class='small-info-menu-item'>
                            <h1>".$row['name']."</h1>
                        </div>
                        <div class='more-info-menu-item'>
                            <p> description : ".$row['description']."</p>
                            <p> Price : €".$row['price']."</p>
                            <p> category : ". $category ."<p>
                        </div>
                        <div class='menu-items-edit-options'>
                                <a href=''>
                                    <p>edit item</p>
                                </a>
                                <a href=''>
                                    <p>delete item</p>
                                </a>
                        </div>
                    </div>
                ";   
            }
        ?>
        </section>

                
        
    </main>

</body>
</html>