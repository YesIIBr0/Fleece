<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" href="assets/img/favicon.png" type="image/x-icon">
        <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">
        <link rel="stylesheet" href="assets/css/styles.css">
        <script type="text/javascript" src="assets/js/shopping_cart.js"></script>
        <title>Fleece</title>
    </head>
    <body>
        <header class="header" id="header">
            <nav class="nav container">
                <a href="#" class="nav__logo">
                    Urban Fleece <i class="ri-store-line"></i>
                </a>
                <div class="nav__menu" id="nav-menu ">
                    <ul class="nav__list">
    
                        <li class="nav__item">
                            <a href="index.php" class="nav__link" >
                                <i class="ri-home-4-line"></i>
                                <span>Home</span>
                            </a>
                        </li>
                        <li class="nav__item" id="sesion">
                            <a href="Login.php" class="nav__link " >
                                <i class="ri-home-4-line"></i>
                                <span>Perfil</span>
                            </a>
                            <ul class="submenu">
                            <li><a href="">Close sesion</a>
                            </ul>
                        </li>
                        </li>

                        <li class="nav__item">
                            <a href="#new" class="nav__link">
                                <i class="ri-price-tag-3-line"></i>
                                <span>New</span>
                            </a>
                        </li>
                        <li class="nav__item">
                            <a href="#collection" class="nav__link">
                                <i class="ri-compass-3-line"></i>
                                <span>Collection</span>
                            </a>
                        </li>

                        <li class="nav__item" id="productos">
                            <a href="#products" class="nav__link">
                                <i class="ri-shopping-bag-3-line"></i>
                                <span>Products</span>
                            </a>
                            <ul class="submenu">
                            <li><a href="Hoodies.php">Hoodies</a></li>
                            <li><a href="Pants.php">Pants</a></li>
                            <li><a href="TShirts.php">T-shirts & more</a></li>
                            <li><a href="Buy now.php">All products</a></li>
                            </ul>
                        </li>    
                       
                        <li class="nav__item">
                            <a  href="shopping_cart.html">
                            <i id="cart_tag"  class="ri-shopping-bag-3-line"></i>
                        </a>
                        </li>
                        
                    </ul>
                </div>
                <i class="ri-moon-line" id="theme-button"></i>
            </nav>
       
        </header>
        <section class ="MainHeader" id="home"><br>
          <center>
            <div class="contenedor1">
            <img src="assets/img/logo.png">
        </div>
            <div class="contenedor2">
          <strong align="middle"><font size ="10" color ="white">Urban <br> Fleece Styles!</strong></font>
            </div>
             <button class="button-54" role="button" onclick="location.href='Buy now.php'">Buy now!</button>
            </center>
           
        </section>
        <main class="main">
            <section class="collection section" id="collection">
                <div class="collection__container container">
                    <div class="collection__explore">
                        <div class="collection__data-men">
                            <h2 class="collection__title">
                                Men <br>
                                Collection
                            </h2>
                            <a href="MenCo.html" class="button__link">Explore Clothes <i class="ri-arrow-right-line"></i></a>
                        </div>
                        <img src="assets/img/collection1.png" alt="collections">
                    </div>

                    <div class="collection__explore">
                        <img src="assets/img/collection2.png" alt="collections">
                        <div class="collection__data-women">
                            <h2 class="collection__title">
                                Women <br>
                                Collection
                            </h2>
                            <a href="WomenCo.html" class="button__link">Explore Clothes <i class="ri-arrow-right-line"></i></a>
                        </div>
                    </div>
                </div>
            </section>
            <section class="home section" id="new">
                <div class="home__container container grid">
                    <div class="home__data">
                        <h1 class="home__title">
                            New Clothing <br>
                            Collection
                        </h1>
                        <p class="home__description">
                            The new collection of clothing from <br>
                            the best brands this year.
                        </p>
                        <a href="#newClothing" class="button__link">
                            EXPLORE <i class="ri-arrow-right-line"></i>
                        </a>
                    </div>
                    <div class="home__images">
                        <img src="assets/img/home1.png" alt="home image">
                        <img src="assets/img/womenp2.png" alt="home image">
                    </div>
            </section>

            
          

            <section class="products section" id="products">
                <h2 class="section__title">
                    Best Products
                </h2>
                <div class="products__container container swiper">
                    <div class="swiper-wrapper">
                        <article class="products__card swiper-slide">
                            <img src="assets/img/product1.png" alt="product image" class="products__img">
                            <div class="products__data">
                                <h2 class="products__title">
                                    Gotland black Jacket
                                </h2>
                                <span class="products__price">$124.99</span>
                            </div>
                            <a href="#" class="button__link" onclick="AddItem('assets/img/product1.png', 'Gotland black Jacket', 124.99)">Add to cart <i class="ri-arrow-right-line"></i></a>
                        </article>


                        <article class="products__card swiper-slide">
                            <img src="assets/img/product2.png" alt="product image" class="products__img">
                            <div class="products__data">
                                <h2 class="products__title">
                                    Black Sports Shorts
                                </h2>
                                <span class="products__price">$34.99</span>
                            </div>
                            <a href="#" class="button__link" onclick="AddItem('assets/img/product2.png', 'Black Sports Shorts', 34.99)">Add to cart <i class="ri-arrow-right-line"></i></a>
                        </article>


                        <article class="products__card swiper-slide">
                            <img src="assets/img/product3.png" alt="product image" class="products__img">
                            <div class="products__data">
                                <h2 class="products__title">
                                    Knox Quilted Jacket
                                </h2>
                                <span class="products__price">$97.99</span>
                            </div>
                            <a href="#" class="button__link" onclick="AddItem('assets/img/product3.png', 'Knox Quilted Jacket', 97.99">Add to cart <i class="ri-arrow-right-line"></i></a>
                        </article>


                        <article class="products__card swiper-slide">
                            <img src="assets/img/product5.png" alt="product image" class="products__img">
                            <div class="products__data">
                                <h2 class="products__title">
                                    Plain Long Sleeve T Shirt
                                </h2>
                                <span class="products__price">$94.99</span>
                            </div>
                            <a href="#" class="button__link" onclick="AddItem('assets/img/product5.png', 'Plain Long Sleeve T Shirt', 94.99)">Add to cart <i class="ri-arrow-right-line"></i></a>
                        </article>


                        <article class="products__card swiper-slide">
                            <img src="assets/img/product6.png" alt="product image" class="products__img">
                            <div class="products__data">
                                <h2 class="products__title">
                                    Japanese Original Lucky Cat T-Shirt
                                </h2>
                                <span class="products__price">$99.99</span>
                            </div>
                            <a href="#" class="button__link" onclick="AddItem('assets/img/product6.png', 'Japanese Original Lucky Cat T-Shirt', 99.99)">Add to cart <i class="ri-arrow-right-line"></i></a>
                        </article>


                        <article class="products__card swiper-slide">
                            <img src="assets/img/product4.png" alt="product image" class="products__img">
                            <div class="products__data">
                                <h2 class="products__title">
                                    Blue Sport Pants
                                </h2>
                                <span class="products__price">$69.99</span>
                            </div>
                            <a href="#" class="button__link" onclick="AddItem('assets/img/product4.png', 'Blue Sport Pants', 69.99)">Add to cart <i class="ri-arrow-right-line"></i></a>
                        </article>
                    </div>

                    <div class="swiper-button-next">
                        <i class="ri-arrow-right-line"></i>
                    </div>

                    <div class="swiper-button-prev">
                        <i class="ri-arrow-left-line"></i>
                    </div>

                </div>
            </section>

            <section class="brand section">
                <h2 class="section__title">
                    Brands We Sell
                </h2>
                <div class="brand__container container grid">
                    <img src="assets/img/logo1.png" alt="brand image" class="brand__img">
                    <img src="assets/img/logo2.png" alt="brand image" class="brand__img">
                    <img src="assets/img/logo3.png" alt="brand image" class="brand__img">
                    <img src="assets/img/logo4.png" alt="brand image" class="brand__img">
                </div>

            </section>
        </main>

        <footer class="footer section">
        <div class="footer__container container grid">
            <div>
                <a href="#" class="footer__logo">
                    Fleece
                </a>
                <p class="footer__description">
                    Committed to bringing you the <br> 
                    best clothing from popular <br>
                    brands.
                </p>
            </div>
            <div class="footer__content">
                <div>
                    <h3 class="footer__title">
                        Company
                    </h3>
                    <ul>
                        <li>
                            <a href="#" class="footer__link">
                                Shop
                            </a>
                        </li>
                        <li>
                            <a href="#" class="footer__link">
                                Category
                            </a>
                        </li>
                        <li>
                            <a href="#" class="footer__link">
                                Contact info
                            </a>
                        </li>
                        
                 </div>

                <div>
                    <h3 class="footer__title">
                        Blog
                    </h3>

                    <ul>
                        <li>
                            <a href="#" class="footer__link">
                                Events
                            </a>
                        </li>
                        <li>
                            <a href="#" class="footer__link">
                                Popular news
                            </a>
                        </li>
                        <li>
                            <a href="#" class="footer__link">
                                Recent news
                            </a>
                        </li>
                        
                 </div>


                <div>
                    <h3 class="footer__title">
                        Contact us
                    </h3>
                    <ul class="footer__social">
                      <a href="https://www.facebook.com/" target="_blank" class="footer__social-link">
                        <i class="ri-facebook-fill"></i>
                      </a>
                      <a href="https://www.instagram.com/" target="_blank" class="footer__social-link">
                        <i class="ri-instagram-fill"></i>
                      </a>
                        <a href="https://www.youtube.com/"target="_blank" class="footer__social-link">
                            <i class="ri-youtube-fill"></i>
                        </a>
                        <a href="https://wa.link/"target="_blank" class="footer__social-link">
                            <i class="ri-whatsapp-fill"></i>
                        </a>
                        <a href="https://github.com/"target="_blank" class="footer__social-link">
                            <i class="ri-github-fill"></i>
                        </a>
                        <a href="https://www.linkedin.com/"target="_blank" class="footer__social-link">
                            <i class="ri-linkedin-fill"></i>
                        </a>
                      </ul>
                 </div>
            </div>
        </div>
            <div class="footer__info container">
                <span class="footer__copy">
                    &#169; All rigths reserved
                </span>

                <a href="" class="footer__privacy">
                    Terms & Conditions
                </a>
                
            </div>
            
        </footer>

        <a href="#" class="scrollup" id="scroll-up">
            <i class="ri-arrow-up-line"></i>
        </a>
        
        <script src="assets/js/scrollreveal.min.js"></script>

        <script src="assets/js/swiper-bundle.min.js"></script>

        <script src="assets/js/main.js"></script>
    </body>
</html>
