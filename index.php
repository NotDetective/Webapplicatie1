<?php
    session_start();
    require_once 'pages/conn.php';

    $stmt = $conn->prepare("SELECT name, description, image, price, category FROM sushi");
    $stmt->execute(); 
    $products = $stmt->fetchAll();
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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Atomic+Age&display=swap');
    </style>
</head>


<body>
    <header>
        <div>
            <div>
                <img src="img/icon-or-logo.png" alt="logo">
            </div>
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

    <main class="main-index">
        <div class="top-navigation-menu-index" id="hyperlink-menu-top">
            <a href="#hyperlink-menu-boxen">
                <div class="menu-type-food">
                    <h1>Boxen</h1>
                </div>
            </a>

            <a href="#hyperlink-menu-sushi">
                <div class="menu-type-food">
                    <h1>Sushi</h1>
                </div>
            </a>

            <a href="#hyperlink-menu-luxury-sushi">
                <div class="menu-type-food">
                    <h1>luxury Sushi</h1>
                </div>
            </a>
        </div>

        <a href="#hyperlink-menu-top">
            <div class="menu-type-food" id="hyperlink-menu-boxen">
                <h1>Boxen</h1>
            </div>
        </a>

        <section>
            <div class="menu-items">
                <?php
                    foreach ($products AS $row){
                        if  ($row['category'] == 1){
                            echo"
                            <div>
                                <h1>".$row['name']."</h1>
                                <img src='upload-images/".$row['image']."' alt='img_product'>
                                <p>".$row['description']."</p>
                                <div>
                                    <span></span>
                                    <p>€".$row['price']."</p>
                                    <h1>+</h1>
                                </div>
                            </div>
                            ";
                        }
                    }
                ?>
            </div>
        </section>

        <a href="#hyperlink-menu-top">
            <div class="menu-type-food" id="hyperlink-menu-sushi">
                <h1>Sushi</h1>
            </div>
        </a>

        <section>

            <div class="menu-items">
                <?php
                    foreach ($products AS $row){
                        if  ($row['category'] == 2){
                            echo"
                            <div>
                                <h1>".$row['name']."</h1>
                                <img src='upload-images/".$row['image']."' alt='img_product'>
                                <p>".$row['description']."</p>
                                <div>
                                    <span></span>
                                    <p>€".$row['price']."</p>
                                    <h1>+</h1>
                                </div>
                            </div>
                            ";
                        }
                    }
                ?>
            </div>

        </section>

        <a href="#hyperlink-menu-top">
            <div class="menu-type-food" id="hyperlink-menu-luxury-sushi">
                <h1>luxury Sushi</h1>
            </div>
        </a>

        <section>

            <div class="menu-items">
                <?php
                    foreach ($products AS $row){
                        if  ($row['category'] == 3){
                            echo"
                            <div>
                                <h1>".$row['name']."</h1>
                                <img src='upload-images/".$row['image']."' alt='img_product'>
                                <p>".$row['description']."</p>
                                <div>
                                    <span></span>
                                    <p>€" .$row['price']."</p>
                                    <h1>+</h1>
                                </div>
                            </div>
                            ";
                        }
                    }
                ?>
            </div>
            
        </section>

    </main>

</body>

</html>