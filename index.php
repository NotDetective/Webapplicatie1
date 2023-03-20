<?php
    require_once 'pages/conn.php';

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
            <a href="login-or-registers-page.php">
                <button>
                    <p>Log in</p>
                </button>
            </a>
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

            <a href="#hyperlink-menu-luxen-sushi">
                <div class="menu-type-food">
                    <h1>Luxen Sushi</h1>
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
                    foreach ($products_sushi AS $product){
                        if  ($product['category'] == 1){
                            echo"
                            <div>
                                <h1>".$product['name']."</h1>
                                <img src='".$product['image']."' alt='img_product'>
                                <p>".$product['description']."</p>
                                <div>
                                    <span></span>
                                    <p>€".$product['price']."</p>
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
                    foreach ($products_sushi AS $product){
                        if  ($product['category'] == 2){
                            echo"
                            <div>
                                <h1>".$product['name']."</h1>
                                <img src='".$product['image']."' alt='img_product'>
                                <p>".$product['description']."</p>
                                <div>
                                    <span></span>
                                    <p>€".$product['price']."</p>
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
            <div class="menu-type-food" id="hyperlink-menu-luxen-sushi">
                <h1>Luxen Sushi</h1>
            </div>
        </a>

        <section>

            <div class="menu-items">
                <?php
                    foreach ($products_sushi AS $product){
                        if  ($product['category'] == 3){
                            echo"
                            <div>
                                <h1>".$product['name']."</h1>
                                <img src='".$product['image']."' alt='img_product'>
                                <p>".$product['description']."</p>
                                <div>
                                    <span></span>
                                    <p>€" .$product['price']."</p>
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