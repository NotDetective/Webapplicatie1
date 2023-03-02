<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atomic Sushi</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="img/icon-or-logo.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>
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
        <div class="menu-type-food" id ="hyperlink-menu-boxen" >
            <h1>Boxen</h1>
        </div>
        </a>

        <section>
            <div class="swiper">
                <div class="swiper-wrapper">
                    <?php 
                    
                    for ($i=0; $i < 3; $i++) { 
                        echo 
                        "
                        <div class='swiper-slide'>
                        <div class='swiper-slide-menu'>
                        <div>
                            <h1>Naam</h1>
                            <img src='' alt=''>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed mollis.</p>
                            <div>
                                <span></span>
                                <p>Price</p>
                                <h1>+</h1>
                            </div>
                        </div>
            
                        <div>
                            <h1>Naam</h1>
                            <img src='' alt=''>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed mollis.</p>
                            <div>
                                <span></span>
                                <p>Price</p>
                                <h1>+</h1>
                            </div>
                        </div>
            
                        <div>
                            <h1>Naam</h1>
                            <img src='' alt=''>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed mollis.</p>
                            <div>
                                <span></span>
                                <p>Price</p>
                                <h1>+</h1>
                            </div>
                        </div>
                    </div>
                        </div> 
                        ";
                    }
                    
                    ?>
                    ...
                </div>
  
                <div class="swiper-pagination"></div>

                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>

                

            </div>
        </section>

        <a href="#hyperlink-menu-top">
        <div class="menu-type-food" id ="hyperlink-menu-sushi">
            <h1>Sushi</h1>
        </div>
        </a>

        <section>
            <div class="swiper">
                <div class="swiper-wrapper">
                    <?php 
                    
                    for ($i=0; $i < 3; $i++) { 
                        echo 
                        "
                        <div class='swiper-slide'>
                        <div class='swiper-slide-menu'>
                        <div>
                            <h1>Naam</h1>
                            <img src='' alt=''>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed mollis.</p>
                            <div>
                                <span></span>
                                <p>Price</p>
                                <h1>+</h1>
                            </div>
                        </div>
            
                        <div>
                            <h1>Naam</h1>
                            <img src='' alt=''>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed mollis.</p>
                            <div>
                                <span></span>
                                <p>Price</p>
                                <h1>+</h1>
                            </div>
                        </div>
            
                        <div>
                            <h1>Naam</h1>
                            <img src='' alt=''>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed mollis.</p>
                            <div>
                                <span></span>
                                <p>Price</p>
                                <h1>+</h1>
                            </div>
                        </div>
                    </div>
                        </div> 
                        ";
                    }
                    
                    ?>
                    ...
                </div>
  
                <div class="swiper-pagination"></div>

                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>

                

            </div>
        </section>

        <a href="#hyperlink-menu-top">
        <div class="menu-type-food" id="hyperlink-menu-luxen-sushi">
            <h1>Luxen Sushi</h1>
        </div>
        </a>

        <section>
            <div class="swiper">
                <div class="swiper-wrapper">
                    <?php 
                    
                    for ($i=0; $i < 3; $i++) { 
                        echo 
                        "
                        <div class='swiper-slide'>
                        <div class='swiper-slide-menu'>
                        <div>
                            <h1>Naam</h1>
                            <img src='' alt=''>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed mollis.</p>
                            <div>
                                <span></span>
                                <p>Price</p>
                                <h1>+</h1>
                            </div>
                        </div>
            
                        <div>
                            <h1>Naam</h1>
                            <img src='' alt=''>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed mollis.</p>
                            <div>
                                <span></span>
                                <p>Price</p>
                                <h1>+</h1>
                            </div>
                        </div>
            
                        <div>
                            <h1>Naam</h1>
                            <img src='' alt=''>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed mollis.</p>
                            <div>
                                <span></span>
                                <p>Price</p>
                                <h1>+</h1>
                            </div>
                        </div>
                    </div>
                        </div> 
                        ";
                    }
                    
                    ?>
                    ...
                </div>
  
                <div class="swiper-pagination"></div>

                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>

                

            </div>
        </section>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <script>
        const swiper = new Swiper('.swiper', {
            loop: true,

            pagination: {
               el: '.swiper-pagination',
            },
  
            navigation: {
               nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
        });
    </script>
</body>
</html>