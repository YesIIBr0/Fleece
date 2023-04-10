<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" href="assets/img/favicon.png" type="image/x-icon">
        <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">
        <link rel="stylesheet" href="assets/css/styles.css">

        <title>Hoodies & Sweatshirts</title>
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
                            <a href="Hoodies.php" class="nav__link " >
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
                                <span>Products</span> </a>
                            
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
            <h1 class="section__title"> Hoodies & Sweatshirts</h1>
        </div>

        </section>
        <div class="new__container container grid">
                    
                     <article class="products__card swiper-slide">
                        <img src="assets/img/WC_Adidasj1.webp" alt="product image" class="products__img">
                        <div class="products__data">
                            <h2 class="products__title">
                                ESSENTIALS INSULATED HOODED JACKET
                            </h2>
                            <span class="products__price">$89.99</span>
                        </div>
                        <a href="#" class="button__link" onclick="AddItem('assets/img/WC_Adidasj1.webp', 'ESSENTIALS INSULATED HOODED JACKET', 89.99)">Add to cart <i class="ri-arrow-right-line"></i></a>
                    </article>

                    <article class="products__card swiper-slide">
                        <img src="assets/img/WC_Nikej.webp" alt="product image" class="products__img">
                        <div class="products__data">
                            <h2 class="products__title">
                                NIKE THERMA-FIT REPEL
                            </h2>
                            <span class="products__price">$89.97</span>
                        </div>
                        <a href="#" class="button__link" onclick="AddItem('assets/img/WC_Nikej.webp', 'NIKE THERMA-FIT REPEL', 89.97)">Add to cart <i class="ri-arrow-right-line"></i></a>
                    </article>

                    <article class="products__card swiper-slide">
                        <img src="assets/img/WC_Reebokj.webp" alt="product image" class="products__img">
                        <div class="products__data">
                            <h2 class="products__title">
                                OUTERWEAR URBAN DOWN PARKA
                            </h2>
                            <span class="products__price">$80.99</span>
                        </div>
                        <a href="#" class="button__link" onclick="AddItem('assets/img/WC_Reebokj.webp', 'OUTERWEAR URBAN DOWN PARKA', 80.9)">Add to cart <i class="ri-arrow-right-line"></i></a>
                    </article>

                      <article class="products__card swiper-slide">
                        <img src="assets/img/WC_Pumaj.webp" alt="product image" class="products__img">
                        <div class="products__data">
                            <h2 class="products__title">
                                SEASONS DOWN MEN'S RUNNING JACKET
                            </h2>
                            <span class="products__price">$160.00</span>
                        </div>
                        <a href="#" class="button__link" onclick="AddItem('Nikec2.webp', 'SEASONS DOWN MENS RUNNING JACKET', 160.00)">Add to cart <i class="ri-arrow-right-line"></i></a>
                    </article>
                
                    <article class="products__card swiper-slide">
                        <img src="assets/img/WC_Pumaj2.webp" alt="product image" class="products__img">
                        <div class="products__data">
                            <h2 class="products__title">
                                PUMA WOMEN'S DOWN PUFFER JACKET
                            </h2>
                            <span class="products__price">$99.99</span>
                        </div>
                        <a href="#" class="button__link" onclick="AddItem('assets/img/WC_Pumaj2.webp', 'PUMA WOMENS DOWN PUFFER JACKET', 99.99)">Add to cart <i class="ri-arrow-right-line"></i></a>
                    </article>

                    <article class="products__card swiper-slide">
                        <img src="assets/img/WC_AdidasS1.webp" alt="product image" class="products__img">
                        <div class="products__data">
                            <h2 class="products__title">
                                ADICOLOR HALF-ZIP SWEATSHIRT
                            </h2>
                            <span class="products__price">$45.00</span>
                        </div>
                        <a href="#" class="button__link" onclick="AddItem('assets/img/WC_AdidasS1.webp', 'ADICOLOR HALF-ZIP SWEATSHIRT', 45.00)">Add to cart <i class="ri-arrow-right-line"></i></a>
                    </article>

                    <article class="products__card swiper-slide">
                        <img src="assets/img/WC_Adidasj2.webp" alt="product image" class="products__img">
                        <div class="products__data">
                            <h2 class="products__title">
                                ADIDAS TERREX MULTI HYBRID INSULATED JACKET
                            </h2>
                            <span class="products__price">$130.00</span>
                        </div>
                        <a href="#" class="button__link" onclick="AddItem('assets/img/WC_Adidasj2.webp', 'ADIDAS TERREX MULTI HYBRID INSULATED JACKET', 130.00)">Add to cart <i class="ri-arrow-right-line"></i></a>
                    </article>

                    <article class="products__card swiper-slide">
                        <img src="assets/img/WC_AdidasH1.webp" alt="product image" class="products__img">
                        <div class="products__data">
                            <h2 class="products__title">
                                TRAINING FULL-ZIP HOODIE
                            </h2>
                            <span class="products__price">$56.00</span>
                        </div>
                        <a href="#" class="button__link" onclick="AddItem('assets/img/WC_AdidasH1.webp', 'TRAINING FULL-ZIP HOODIE', 56.00)">Add to cart <i class="ri-arrow-right-line"></i></a>
                    </article>

                    <article class="products__card swiper-slide">
                        <img src="assets/img/WC_AdidasH2.webp" alt="product image" class="products__img">
                        <div class="products__data">
                            <h2 class="products__title">
                                CREW SWEATSHIRT SET
                            </h2>
                            <span class="products__price">$45.00</span>
                        </div>
                        <a href="#" class="button__link" onclick="AddItem('assets/img/WC_AdidasH2.webp', 'CREW SWEATSHIRT SET', 45.00)">Add to cart <i class="ri-arrow-right-line"></i></a>
                    </article>

                     <article class="products__card swiper-slide">
                        <img src="assets/img/WC_NikeH2.webp" alt="product image" class="products__img">
                        <div class="products__data">
                            <h2 class="products__title">
                                NIKE SPORTSWEAR PHOENIX FLEECE
                            </h2>
                            <span class="products__price">$52.97</span>
                        </div>
                        <a href="#" class="button__link" onclick="AddItem('assets/img/WC_NikeH2.webp', 'NIKE SPORTSWEAR PHOENIX FLEECE', 52.97)">Add to cart <i class="ri-arrow-right-line"></i></a>
                    </article>


                    <article class="products__card swiper-slide">
                        <img src="assets/img/WC_NikeS1.webp" alt="product image" class="products__img">
                        <div class="products__data">
                            <h2 class="products__title">
                                SYRACUSE CLUB FLEECE
                            </h2>
                            <span class="products__price">$67.99</span>
                        </div>
                        <a href="#" class="button__link" onclick="AddItem('ssets/img/WC_NikeS1.webp', 'SYRACUSE CLUB FLEECE', 67.99)">Add to cart <i class="ri-arrow-right-line"></i></a>
                    </article>

                    <article class="products__card swiper-slide">
                        <img src="assets/img/WC_ReebokH1.webp" alt="product image" class="products__img">
                        <div class="products__data">
                            <h2 class="products__title">
                                REEBOK YARD LOVE HOODIE
                            </h2>
                            <span class="products__price">$30.99</span>
                        </div>
                        <a href="#" class="button__link" onclick="AddItem('assets/img/WC_ReebokH1.webp', 'REEBOK YARD LOVE HOODIE', 30.99)">Add to cart <i class="ri-arrow-right-line"></i></a>
                    </article>

                     <article class="products__card swiper-slide">
                        <img src="assets/img/WC_NikeH1.webp" alt="product image" class="products__img">
                        <div class="products__data">
                            <h2 class="products__title">
                                NIKE SPORTSWEAR CLUB FLEECE
                            </h2>
                            <span class="products__price">$59.99</span>
                        </div>
                        <a href="#" class="button__link" onclick="AddItem('assets/img/WC_NikeH1.webp', 'NIKE SPORTSWEAR CLUB FLEECE', 59.99)">Add to cart <i class="ri-arrow-right-line"></i></a>
                    </article>

                    <article class="products__card swiper-slide">
                        <img src="assets/img/WC_ReebokS1.webp" alt="product image" class="products__img">
                        <div class="products__data">
                            <h2 class="products__title">
                                REEBOK LNY CREW SWEATSHIRT
                            </h2>
                            <span class="products__price">$30.99</span>
                        </div>
                        <a href="#" class="button__link" onclick="AddItem('assets/img/WC_ReebokS1.webp', 'REEBOK LNY CREW SWEATSHIRTNIKE SPORTSWEAR THERMA-FIT', 30.99)">Add to cart <i class="ri-arrow-right-line"></i></a>
                    </article>

                    <article class="products__card swiper-slide">
                        <img src="assets/img/WC_ReebokH2.webp" alt="product image" class="products__img">
                        <div class="products__data">
                            <h2 class="products__title">
                                REEBOK HOODIE BLACK NIGHT
                            </h2>
                            <span class="products__price">$49.99</span>
                        </div>
                        <a href="#" class="button__link" onclick="AddItem('assets/img/WC_ReebokH2.webp', 'REEBOK HOODIE BLACK NIGHT', 49.99)">Add to cart <i class="ri-arrow-right-line"></i></a>
                    </article>

                    <article class="products__card swiper-slide">
                        <img src="assets/img/WC_PumaH1.webp" alt="product image" class="products__img">
                        <div class="products__data">
                            <h2 class="products__title">
                                PUMA NYC HOODIE
                            </h2>
                            <span class="products__price">$60.00</span>
                        </div>
                        <a href="#" class="button__link" onclick="AddItem('assets/img/WC_PumaH1.webp', 'PUMA NYC HOODIE', 60.00)">Add to cart <i class="ri-arrow-right-line"></i></a>
                    </article>
                    
                

                    <article class="products__card swiper-slide">
                        <img src="assets/img/WC_PumaS2.webp" alt="product image" class="products__img">
                        <div class="products__data">
                            <h2 class="products__title">
                                LUXE SPORT OVERSIZED V-NECK SWEATSHIRT
                            </h2>
                            <span class="products__price">$60.99</span>
                        </div>
                        <a href="#" class="button__link" onclick="AddItem('assets/img/WC_PumaS2.webp', 'LUXE SPORT OVERSIZED V-NECK SWEATSHIRT', 60.99)">Add to cart <i class="ri-arrow-right-line"></i></a>
                    </article>

                    <article class="products__card swiper-slide">
                        <img src="assets/img/WC_AdidasH3.webp" alt="product image" class="products__img">
                        <div class="products__data">
                            <h2 class="products__title">
                               ADIDAS ORIGINALS HOODIE
                            </h2>
                            <span class="products__price">$56.00</span>
                        </div>
                        <a href="#" class="button__link" onclick="AddItem('assets/img/WC_AdidasH3.webp', 'ADIDAS ORIGINALS HOODIE', 56.00)">Add to cart <i class="ri-arrow-right-line"></i></a>
                    </article>

                     <article class="products__card swiper-slide">
                        <img src="assets/img/WC_PumaS1.webp" alt="product image" class="products__img">
                        <div class="products__data">
                            <h2 class="products__title">
                                CLASSICS GEN PUMA CREW NECK MEN'S SWEATSHIRT
                            </h2>
                            <span class="products__price">$60.00</span>
                        </div>
                        <a href="#" class="button__link" onclick="AddItem('assets/img/WC_PumaS1.webp', 'CLASSICS GEN PUMA CREW NECK MENS SWEATSHIRT', 60.00)">Add to cart <i class="ri-arrow-right-line"></i></a>
                    </article>

                    <article class="products__card swiper-slide">
                        <img src="assets/img/WC_PumaS3.webp" alt="product image" class="products__img">
                        <div class="products__data">
                            <h2 class="products__title">
                                PUMA CLASSICS TOWELLING CREW SWEATSHIRT
                            </h2>
                            <span class="products__price">$30.00</span>
                        </div>
                        <a href="#" class="button__link" onclick="AddItem('assets/img/WC_PumaS3.webp', 'PUMA CLASSICS TOWELLING CREW SWEATSHIRT', 30.00)">Add to cart <i class="ri-arrow-right-line"></i></a>
                    </article>
                    <article class="products__card swiper-slide">
                        <img src="assets/img/WC_NikeH3.webp" alt="product image" class="products__img">
                        <div class="products__data">
                            <h2 class="products__title">
                                NIKE SPORTSWEAR CLUB FLEECE 
                            </h2>
                            <span class="products__price">$55.00</span>
                        </div>
                        <a href="#" class="button__link" onclick="AddItem('assets/img/WC_NikeH3.webp', 'NIKE SPORTSWEAR CLUB FLEECE', 55.00)">Add to cart <i class="ri-arrow-right-line"></i></a>
                    </article>
                     <article class="products__card swiper-slide">
                        <img src="assets/img/womenp15.webp" alt="product image" class="products__img">
                        <div class="products__data">
                            <h2 class="products__title">
                                REEBOK VAGE HOODIE
                            </h2>
                            <span class="products__price">$80.99</span>
                        </div>
                        <a href="#" class="button__link" onclick="AddItem('assets/img/womenp15.webp', 'REEBOK VAGE HOODIE', 80.99)">Add to cart <i class="ri-arrow-right-line"></i></a>
                    </article>
                
                    <article class="products__card swiper-slide">
                        <img src="assets/img/WC_AdidasS2.webp" alt="product image" class="products__img">
                        <div class="products__data">
                            <h2 class="products__title">
                                ADIDAS BOA SWEATSHIRT 
                            </h2>
                            <span class="products__price">$90.00</span>
                        </div>
                        <a href="#" class="button__link" onclick="AddItem('assets/img/WC_AdidasS2.webp', 'ADIDAS BOA SWEATSHIRT ', 90.00)">Add to cart <i class="ri-arrow-right-line"></i></a>
                    </article>

                    <article class="products__card swiper-slide">
                        <img src="assets/img/WC_AdidasC2.webp" alt="product image" class="products__img">
                        <div class="products__data">
                            <h2 class="products__title">
                              ESSENTIALS INSULATED HOODED JACKET

                            </h2>
                            <span class="products__price">$90.00</span>
                        </div>
                        <a href="#" class="button__link" onclick="AddItem('assets/img/WC_AdidasC2.webp', 'ESSENTIALS INSULATED HOODED JACKET', 90.00)">Add to cart <i class="ri-arrow-right-line"></i></a>
                    </article>

                    <article class="products__card swiper-slide">
                        <img src="assets/img/WC_NikeH4.webp" alt="product image" class="products__img">
                        <div class="products__data">
                            <h2 class="products__title">
                                NIKE DRI-FIT  
                            </h2>
                            <span class="products__price">$63.97</span>
                        </div>
                        <a href="#" class="button__link" onclick="AddItem('assets/img/WC_NikeH4.webp', 'NIKE DRI-FIT  ', 63.97)">Add to cart <i class="ri-arrow-right-line"></i></a>
                    </article>

                     <article class="products__card swiper-slide">
                        <img src="assets/img/WC_AdidasC.webp" alt="product image" class="products__img">
                        <div class="products__data">
                            <h2 class="products__title">
                                Essentials Down Parka
                            </h2>
                            <span class="products__price">$96.00</span>
                        </div>
                        <a href="#" class="button__link" onclick="AddItem('assets/img/WC_AdidasC.webp', 'Essentials Down Parka', 96.00)">Add to cart <i class="ri-arrow-right-line"></i></a>
                    </article>

                    <article class="products__card swiper-slide">
                        <img src="assets/img/WC_AdidasC3.jpg" alt="product image" class="products__img">
                        <div class="products__data">
                            <h2 class="products__title">
                                Melbourne Ternnis Woven Jacket
                            </h2>
                            <span class="products__price">$120.00</span>
                        </div>
                        <a href="#" class="button__link" onclick="AddItem('assets/img/WC_AdidasC3.jpg', 'Melbourne Ternnis Woven Jacket', 120.00)">Add to cart <i class="ri-arrow-right-line"></i></a>
                    </article>

                    <article class="products__card swiper-slide">
                        <img src="assets/img/WC_Nikec2.webp" alt="product image" class="products__img">
                        <div class="products__data">
                            <h2 class="products__title">
                                NIKE SPORTSWEAR THERMA-FIT
                            </h2>
                            <span class="products__price">$155.00</span>
                        </div>
                        <a href="#" class="button__link" onclick="AddItem('assets/img/WC_Nikec2.webp', 'NIKE SPORTSWEAR THERMA-FITT', 155.00)">Add to cart <i class="ri-arrow-right-line"></i></a>
                    </article>

                     <article class="products__card swiper-slide">
                        <img src="assets/img/womenp13.webp" alt="product image" class="products__img">
                        <div class="products__data">
                            <h2 class="products__title">
                                Reeebok Hoodie black night  
                            </h2>
                            <span class="products__price">$60.99</span>
                        </div>
                        <a href="#" class="button__link" onclick="AddItem('assets/img/womenp13.webp', 'Reeebok Hoodie black night  ', 60.99)">Add to cart <i class="ri-arrow-right-line"></i></a>
                    </article>

                    <article class="products__card swiper-slide">
                        <img src="assets/img/womenp15.webp" alt="product image" class="products__img">
                        <div class="products__data">
                            <h2 class="products__title">
                                Reebok Vage Hoodie
                            </h2>
                            <span class="products__price">$80.99</span>
                        </div>
                        <a href="#" class="button__link" onclick="AddItem('assets/img/womenp15.webp', 'Reebok Vage Hoodie',80.99)">Add to cart <i class="ri-arrow-right-line"></i></a>
                    </article>

                    <article class="products__card swiper-slide">
                        <img src="assets/img/WC_Nikec.webp" alt="product image" class="products__img">
                        <div class="products__data">
                            <h2 class="products__title">
                                Nike Lebron Jack Suit
                            </h2>
                            <span class="products__price">$152.97</span>
                        </div>
                        <a href="#" class="button__link" onclick="AddItem('assets/img/WC_Nikec.webp', 'Nike Lebron Jack Suit', 152.97)">Add to cart <i class="ri-arrow-right-line"></i></a>
                    </article>

                    <article class="products__card swiper-slide">
                        <img src="assets/img/men21.webp" alt="product image" class="products__img">
                        <div class="products__data">
                            <h2 class="products__title">
                                Puma Tank Top Hoodie
                            </h2>
                            <span class="products__price">$54.99</span>
                        </div>
                        <a href="#" class="button__link" onclick="AddItem('assets/img/men21.webp', 'Puma Tank Top Hoodie', 54.99)">Add to cart <i class="ri-arrow-right-line"></i></a>
                    </article>


                    <article class="products__card swiper-slide">
                        <img src="assets/img/menp1.webp" alt="product image" class="products__img">
                        <div class="products__data">
                            <h2 class="products__title">
                                Nike Black Hoodie
                            </h2>
                            <span class="products__price">$70.99</span>
                        </div>
                        <a href="#" class="button__link" onclick="AddItem('assets/img/menp1.webp', 'Nike Black Hoodie', 70.99)">Add to cart <i class="ri-arrow-right-line"></i></a>
                    </article>


                    <article class="products__card swiper-slide">
                        <img src="assets/img/menp3.webp" alt="product image" class="products__img">
                        <div class="products__data">
                            <h2 class="products__title">
                                Blue Nike Hoodie 
                            </h2>
                            <span class="products__price">$40.99</span>
                        </div>
                        <a href="#" class="button__link" onclick="AddItem('assets/img/menp3.webp', 'Blue Nike Hoodie ', 40.99)">Add to cart <i class="ri-arrow-right-line"></i></a>
                    </article>

                     <article class="products__card swiper-slide">
                        <img src="assets/img/menp4.webp" alt="product image" class="products__img">
                        <div class="products__data">
                            <h2 class="products__title">
                                Black Adidas three line long Tee
                            </h2>
                            <span class="products__price">$99.99</span>
                        </div>
                        <a href="#" class="button__link" onclick="AddItem('assets/img/menp4.webp', 'Black Adidas three line long Tee', 99.99)">Add to cart <i class="ri-arrow-right-line"></i></a>
                    </article>

                    <article class="products__card swiper-slide">
                        <img src="assets/img/menp15.webp" alt="product image" class="products__img">
                        <div class="products__data">
                            <h2 class="products__title">
                                Reebok Unisex Sport Fleeces   
                            </h2>
                            <span class="products__price">$80.99</span>
                        </div>
                        <a href="#" class="button__link" onclick="AddItem('assets/img/menp15.webp', 'Reebok Unisex Sport Fleeces', 80.99)">Add to cart <i class="ri-arrow-right-line"></i></a>
                    </article>

                        <article class="products__card swiper-slide">
                        <img src="assets/img/menp5.webp" alt="product image" class="products__img">
                        <div class="products__data">
                            <h2 class="products__title">
                                Adidas Black/White Line Hoodie
                            </h2>
                            <span class="products__price">$56.99</span>
                        </div>
                        <a href="#" class="button__link" onclick="AddItem('assets/img/menp5.webp', 'Adidas Black/White Line Hoodie', 56.99)">Add to cart <i class="ri-arrow-right-line"></i></a>
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
                            <img src="assets/img/product1.png" alt="product image" class="products__img">
                            <div class="products__data">
                                <h2 class="products__title">
                                    Gotland black Jacket
                                </h2>
                                <span class="products__price">$124.99</span>
                            </div>
                            <a href="#" class="button__link" onclick="AddItem('assets/img/product1.png', 'Gotland black Jacket', 124.99)">Add to cart <i class="ri-arrow-right-line"></i></a>
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