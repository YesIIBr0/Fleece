<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" href="assets/img/favicon.png" type="image/x-icon">
        <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">
        <link rel="stylesheet" href="assets/css/styles.css">

        <title>Pants</title>
    </head>
    <body>
        <header class="header" id="header">
            <nav class="nav container">
                <a href="index.php" class="nav__logo">
                    Urban Fleece <i class="ri-store-line"></i>
                </a>
                <div class="nav__menu" id="nav-menu ">
                    <ul class="nav__list">
                        <li class="nav__item">
                            <a href="Pants.php" class="nav__link " >
                                <i class="ri-home-4-line"></i>
                                <span>Home</span>
                            </a>
                        </li>
                         <li class="nav__item">
                            <a href="Login.php" class="nav__link " >
                                <i class="ri-home-4-line"></i>
                                <span>Perfil</span>
                            </a></font>
                        </li>

                       <li class="nav__item" id="productos">
                            <a href="" class="nav__link">
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
                       
                    </ul>
                </div>
                <i class="ri-moon-line" id="theme-button"></i>
            </nav>
        </header>
        
        <main class="main">
        <section class="contenido"><br>
            <div class="contenedor1">
            <h1 class="section__title">Shorts & joggers</h1>
        </div>

        </section>
        <div class="new__container container grid">
                    
                        <article class="products__card swiper-slide">
                        <img src="assets/img/WC_Adidasp1.webp" alt="product image" class="products__img">
                        <div class="products__data">
                            <h2 class="products__title">
                                ADICOLOR SST SPORTS TRACK PANTS
                            </h2>
                            <span class="products__price">$45.00</span>
                        </div>
                        <a href="#" class="button__link" onclick="AddItem('assets/img/WC_Adidasp1.webp', 'ADICOLOR SST SPORTS TRACK PANTS', 45.00)">Add to cart <i class="ri-arrow-right-line"></i></a>
                    </article>


                    <article class="products__card swiper-slide">
                        <img src="assets/img/WC_Adidasp2.webp" alt="product image" class="products__img">
                        <div class="products__data">
                            <h2 class="products__title">
                              ALPHASTRENGTH WOVEN ZIP PANTS
                            </h2>
                            <span class="products__price">$45.00</span>
                        </div>
                        <a href="#" class="button__link" onclick="AddItem('assets/img/WC_Adidasp2.webp', 'ALPHASTRENGTH WOVEN ZIP PANTS', 45.00)">Add to cart <i class="ri-arrow-right-line"></i></a>
                    </article>

                    <article class="products__card swiper-slide">
                        <img src="assets/img/WC_Reebokp.webp" alt="product image" class="products__img">
                        <div class="products__data">
                            <h2 class="products__title">
                                TRAINING ESSENTIALS WOVEN UNLINED PANTS
                            </h2>
                            <span class="products__price">$34.99</span>
                        </div>
                        <a href="#" class="button__link" onclick="AddItem('assets/img/WC_Reebokp.webp', 'TRAINING ESSENTIALS WOVEN UNLINED PANTS', 34.99)">Add to cart <i class="ri-arrow-right-line"></i></a>
                    </article>

                    <article class="products__card swiper-slide">
                        <img src="assets/img/WC_Reebokp2.webp" alt="product image" class="products__img">
                        <div class="products__data">
                            <h2 class="products__title">
                                REEBOK CLASSICS WINTER PANTS
                            </h2>
                            <span class="products__price">$53.76</span>
                        </div>
                        <a href="#" class="button__link" onclick="AddItem('assets/img/WC_Reebokp2.webp', 'REEBOK CLASSICS WINTER PANTS', 53.76)">Add to cart <i class="ri-arrow-right-line"></i></a>
                    </article>

                     <article class="products__card swiper-slide">
                        <img src="assets/img/womenp9.png" alt="product image" class="products__img">
                        <div class="products__data">
                            <h2 class="products__title">
                                Adidas Marine Pants
                            </h2>
                            <span class="products__price">$30.99</span>
                        </div>
                        <a href="#" class="button__link" onclick="AddItem('assets/img/womenp9.png', 'Adidas Marine Pants', 30.99)">Add to cart <i class="ri-arrow-right-line"></i></a>
                    </article>

                     <article class="products__card swiper-slide">
                        <img src="assets/img/WC_Pumap2.webp" alt="product image" class="products__img">
                        <div class="products__data">
                            <h2 class="products__title">
                            INDIVIDUALLIGA WOMEN'S SOCCER PANTS
                            </h2>
                            <span class="products__price">$34.99</span>
                        </div>
                        <a href="#" class="button__link" onclick="AddItem('assets/img/WC_Pumap2.webp', 'INDIVIDUALLIGA WOMENS SOCCER PANTS', 34.99)">Add to cart <i class="ri-arrow-right-line"></i></a>
                    </article>

                    <article class="products__card swiper-slide">
                        <img src="assets/img/WC_Pumap.webp" alt="product image" class="products__img">
                        <div class="products__data">
                            <h2 class="products__title">
                                STUDIO PLASTIC FREE MEN'S TRAINING JOGGER
                            </h2>
                            <span class="products__price">$44.99</span>
                        </div>
                        <a href="#" class="button__link" onclick="AddItem('assets/img/WC_Pumap.webp', 'STUDIO PLASTIC FREE MENS TRAINING JOGGER', 44.99)">Add to cart <i class="ri-arrow-right-line"></i></a>
                    </article>

                    <article class="products__card swiper-slide">
                        <img src="assets/img/WC_Adidasp3.webp" alt="product image" class="products__img">
                        <div class="products__data">
                            <h2 class="products__title">
                               ADIDAS CARGO PANTS
                            </h2>
                            <span class="products__price">$66.00</span>
                        </div>
                        <a href="#" class="button__link" onclick="AddItem('assets/img/WC_Adidasp3.webp', 'ADIDAS CARGO PANTS', 66.00)">Add to cart <i class="ri-arrow-right-line"></i></a>
                    </article>

                    <article class="products__card swiper-slide">
                        <img src="assets/img/WC_Nikep3.webp" alt="product image" class="products__img">
                        <div class="products__data">
                            <h2 class="products__title">
                                NIKE THERMA PANTS
                            </h2>
                            <span class="products__price">$52.97</span>
                        </div>
                        <a href="#" class="button__link" onclick="AddItem('assets/img/WC_Nikep3.webp', 'NIKE THERMA PANTS', 52.97)">Add to cart <i class="ri-arrow-right-line"></i></a>
                    </article>

                     <article class="products__card swiper-slide">
                        <img src="assets/img/womenp8.png" alt="product image" class="products__img">
                        <div class="products__data">
                            <h2 class="products__title">
                                Adidas Black Sport Short
                            </h2>
                            <span class="products__price">$30.99</span>
                        </div>
                        <a href="#" class="button__link" onclick="AddItem('assets/img/womenp8.png', 'Adidas Black Sport Short', 30.99)">Add to cart <i class="ri-arrow-right-line"></i></a>
                    </article>

                    <article class="products__card swiper-slide">
                        <img src="assets/img/WC_Nikep4.webp" alt="product image" class="products__img">
                        <div class="products__data">
                            <h2 class="products__title">
                                NIKE DRY PANTS
                            </h2>
                            <span class="products__price">$57.97</span>
                        </div>
                        <a href="#" class="button__link" onclick="AddItem('assets/img/WC_Nikep4.webp', 'NIKE DRY PANTS', 57.97)">Add to cart <i class="ri-arrow-right-line"></i></a>
                    </article>
                    <article class="products__card swiper-slide">
                        <img src="assets/img/WC_Nikep5.webp" alt="product image" class="products__img">
                        <div class="products__data">
                            <h2 class="products__title">
                                JORDAN FLIGHT MVP
                            </h2>
                            <span class="products__price">$59.97</span>
                        </div>
                        <a href="#" class="button__link" onclick="AddItem('assets/img/WC_Nikep5.webp', 'JORDAN FLIGHT MVP', 59.97)">Add to cart <i class="ri-arrow-right-line"></i></a>
                    </article>

                     <article class="products__card swiper-slide">
                        <img src="assets/img/menp7.webp" alt="product image" class="products__img">
                        <div class="products__data">
                            <h2 class="products__title">
                                Nike Joggers Black
                            </h2>
                            <span class="products__price">$32.99</span>
                        </div>
                        <a href="#" class="button__link" onclick="AddItem('assets/img/menp7.webp', 'Nike Joggers Black', 32.99)">Add to cart <i class="ri-arrow-right-line"></i></a>
                    </article>

                    <article class="products__card swiper-slide">
                        <img src="assets/img/menp8.webp" alt="product image" class="products__img">
                        <div class="products__data">
                            <h2 class="products__title">
                                Black Navy Joggers Adidas
                            </h2>
                            <span class="products__price">$30.99</span>
                        </div>
                        <a href="#" class="button__link" onclick="AddItem('assets/img/menp8.webp', 'Black Navy Joggers Adidas', 30.99)">Add to cart <i class="ri-arrow-right-line"></i></a>
                    </article>

                    <article class="products__card swiper-slide">
                        <img src="assets/img/menp9.webp" alt="product image" class="products__img">
                        <div class="products__data">
                            <h2 class="products__title">
                                Nike Sport Pant <Menu></Menu>
                            </h2>
                            <span class="products__price">$20.99</span>
                        </div>
                        <a href="#" class="button__link" onclick="AddItem('assets/img/menp9.webp', 'Nike Sport Pant', 20.99)">Add to cart <i class="ri-arrow-right-line"></i></a>
                    </article>
                    <article class="products__card swiper-slide">
                        <img src="assets/img/menp10.webp" alt="product image" class="products__img">
                        <div class="products__data">
                            <h2 class="products__title">
                                Adidas Green Tee Joggers 
                            </h2>
                            <span class="products__price">$29.99</span>
                        </div>
                        <a href="#" class="button__link" onclick="AddItem('assets/img/menp10.webp', 'Adidas Green Tee Joggers ', 29.99)">Add to cart <i class="ri-arrow-right-line"></i></a>
                    </article>

                    <article class="products__card swiper-slide">
                        <img src="assets/img/menp11.webp" alt="product image" class="products__img">
                        <div class="products__data">
                            <h2 class="products__title">
                                Chromatic Reebok Joggers
                            </h2>
                            <span class="products__price">$20.99</span>
                        </div>
                        <a href="#" class="button__link" onclick="AddItem('assets/img/menp11.webp', 'Chromatic Reebok Joggers', 20.99)">Add to cart <i class="ri-arrow-right-line"></i></a>
                    </article>

                    <article class="products__card swiper-slide">
                        <img src="assets/img/menp12.webp" alt="product image" class="products__img">
                        <div class="products__data">
                            <h2 class="products__title">
                                Adidas Blue Marine pants
                            </h2>
                            <span class="products__price">$60.99</span>
                        </div>
                        <a href="#" class="button__link" onclick="AddItem('assets/img/menp12.webp', 'Adidas Blue Marine pants', 60.99)">Add to cart <i class="ri-arrow-right-line"></i></a>
                    </article>

                     <article class="products__card swiper-slide">
                        <img src="assets/img/menp13.webp" alt="product image" class="products__img">
                        <div class="products__data">
                            <h2 class="products__title">
                                Reebok Men Shorts
                            </h2>
                            <span class="products__price">$20.99</span>
                        </div>
                        <a href="#" class="button__link" onclick="AddItem('assets/img/menp13.webp', 'Reebok Men Shorts', 20.99)">Add to cart <i class="ri-arrow-right-line"></i></a>
                    </article>

                    <article class="products__card swiper-slide">
                        <img src="assets/img/menp14.webp" alt="product image" class="products__img">
                        <div class="products__data">
                            <h2 class="products__title">
                                Reebok Blue Short Shorts for Men
                            </h2>
                            <span class="products__price">$60.99</span>
                        </div>
                        <a href="#" class="button__link" onclick="AddItem('assets/img/menp14.webp', 'Reebok Blue Short Shorts for Men', 60.99)">Add to cart <i class="ri-arrow-right-line"></i></a>
                    </article>

                    <article class="products__card swiper-slide">
                        <img src="assets/img/WC_Nikep2.webp" alt="product image" class="products__img">
                        <div class="products__data">
                            <h2 class="products__title">
                                NIKE PANTS SPORTSWEAR CLUB FLEECE
                            </h2>
                            <span class="products__price">$55.00</span>
                        </div>
                        <a href="#" class="button__link" onclick="AddItem('assets/img/WC_Nikep2.webp', 'NIKE PANTS SPORTSWEAR CLUB FLEECE', 55.00)">Add to cart <i class="ri-arrow-right-line"></i></a>
                    </article>
                
                   <article class="products__card swiper-slide">
                            <img src="assets/img/womenp6.png" alt="product image" class="products__img">
                            <div class="products__data">
                                <h2 class="products__title">
                                    Blue Sport Pants
                                </h2>
                                <span class="products__price">$69.99</span>
                            </div>
                            <a href="#" class="button__link" onclick="AddItem('assets/img/womenp6.png', 'Blue Sport Pants', 69.99)">Add to cart <i class="ri-arrow-right-line"></i></a>
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
                            <img src="assets/img/product4.png" alt="product image" class="products__img">
                            <div class="products__data">
                                <h2 class="products__title">
                                    Blue Sport Pants
                                </h2>
                                <span class="products__price">$69.99</span>
                            </div>
                            <a href="#" class="button__link" onclick="AddItem('assets/img/product4.png', 'Blue Sport Pants', 69.99)">Add to cart <i class="ri-arrow-right-line"></i></a>
                        </article>

                         <article class="products__card swiper-slide">
                        <img src="assets/img/WC_Nikep.webp" alt="product image" class="products__img">
                        <div class="products__data">
                            <h2 class="products__title">
                                NIKE THERMA FIT
                            </h2>
                            <span class="products__price">$43.97</span>
                        </div>
                        <a href="#" class="button__link" onclick="AddItem('assets/img/WC_Nikep.webp', 'NIKE THERMA FIT', 43.97)">Add to cart <i class="ri-arrow-right-line"></i></a>
                    </article>

                    

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