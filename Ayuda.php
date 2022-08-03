<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ogani Template">
    <meta name="keywords" content="Ogani, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ayuda | FAQ</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<style>
    .ob:before {
      content: '*';
      margin-left: 3px;
      color: red;
      font-weight: bold;
    }

        /* Style the button that is used to open and close the collapsible content */
    .collapsible {
    background-color: orange;
    color: #444;
    cursor: pointer;
    padding: 18px;
    width: 100%;
    border: none;
    text-align: left;
    color: black;
    outline: none;
    font-size: 15px;
    }

    /* Add a background color to the button if it is clicked on (add the .active class with JS), and when you move the mouse over it (hover) */
    .actives, .collapsible:hover {
    background-color: #ccc;
    }

    /* Style the collapsible content. Note: hidden by default */
    .content {
    padding: 0 18px;
    display: none;
    overflow: hidden;
    background-color: #f1f1f1;
    } 
</style>
<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Humberger Begin -->
    <div class="humberger__menu__overlay"></div>
    <div class="humberger__menu__wrapper">
        <div class="humberger__menu__logo">
            <a href="#"><img src="img/logitor.png" alt=""></a>
        </div>
        <div class="humberger__menu__cart">
            <ul>
                <li><a href="#"><i class="fa fa-heart"></i> <span>1</span></a></li>
                <li><a href="#"><i class="fa fa-shopping-bag"></i> <span>3</span></a></li>
            </ul>
            <div class="header__cart__price">Artículo: <span>$150.00</span></div>
        </div>
        <div class="humberger__menu__widget">

            <div class="header__top__right__auth">
                <a href="#"><i class="fa fa-user"></i>Ingresar</a>
            </div>
        </div>
        <nav class="humberger__menu__nav mobile-menu">
            <ul>
                <li class="active"><a href="./index.php">Catálogo</a></li>
                <li><a href="./blog.html">Receta</a></li>
                <li><a href="./login.php">Iniciar sesión</a></li>
                <li><a href="#">Acciones</a>
                    <ul class="header__menu__dropdown">
                        <li><a href="./PublicarBlog.html">Añadir receta</a></li>
                        <li><a href="./ProductoNuevo.html">Añadir producto</a></li>
                    </ul>
                </li>
            </ul>
            </ul>
        </nav>
        <div id="mobile-menu-wrap"></div>
        <div class="header__top__right__social">
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-linkedin"></i></a>
            <a href="#"><i class="fa fa-pinterest-p"></i></a>
        </div>

    </div>
    <!-- Humberger End -->

    <!-- Header Section Begin -->
    <header class="header">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="header__logo">
                        <a href="./index.php"><img src="img/logitor.png" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <nav class="header__menu">
                        <div class="header2">
                            <ul>
                                <li class="active"><a href="./index.php">Catálogo</a></li>
                                <li><a href="./blog.html">Receta</a></li>
                                <li><a href="#">Acciones</a>
                                    <ul class="header__menu__dropdown">
                                        <li><a href="./PublicarBlog.html">Añadir receta</a></li>
                                        <li><a href="./ProductoNuevo.html">Añadir producto</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
                <div class="col-lg-3">
                    <div class="header__cart">

                        <ul>
                            <li><a href="#"><i class="fa fa-heart"></i> <span>1</span></a></li>
                            <li><a href="shoping-cart.html"><i class="fa fa-shopping-bag"></i> <span>3</span></a></li>
                        </ul>
                        <div class="header__cart__price">Artículo: <span>$150.00</span></div>

                    </div>

                </div>
            </div>
            <div class="humberger__open">
                <i class="fa fa-bars"></i>
            </div>
        </div>
    </header>
    <!-- Header Section End -->


    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg" data-setbg="img/banner/banner-receta.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="Title-blog">
                        <h2>Preguntas Frecuentes</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Checkout Section Begin -->
    <section class="checkout spad">
        <div class="container">
            <div class="checkout__form">
                <h4>Preguntas</h4>
                <form action="#">
                    <div class="row">
                        <div class="col-lg-8 col-md-6">
                            <div class="container-blog">
                                <h3>Sobre nosotros</h3>
                                <div class="checkout__input">
                                    <button type="button" class="collapsible">¿Quiénes somos?</button>
                                    <!--Dentro de un div class="content" se pone la respuesta a la pregunta-->
                                    <div class="content">
                                        <p></p>
                                    </div>
                                </div>
                                <h3>Sobre cómo usar nuestra sitio</h3>
                                <!--Dentro del botón poner la pregunta-->
                                <div class="checkout__input">
                                    <button type="button" class="collapsible">¿Cómo crear una cuenta?</button>
                                    <!--Dentro de un div class="content" se pone la respuesta a la pregunta-->
                                    <div class="content">
                                        <p>Se debe dar click en el botón Iniciar Sesión ubicado al inicio de la página</p>
                                    </div>
                                </div>
                                <div class="checkout__input">
                                    <button type="button" class="collapsible">¿Cómo insertar artículos al carrito?</button>
                                    <div class="content">
                                        <p>Simplemente con darle click al botón de carrito que se encuentra en cada producto hará que el producto sea agregado al carrito</p>
                                    </div>
                                </div>
                                <div class="checkout__input">
                                    <button type="button" class="collapsible">¿Cómo publicar nuevas recetas?</button>
                                    <div class="content">
                                        <p>Una vez se haya accedido a la página principal de las recetas, simplemente se debe de dar click en "Nueva Receta" dentro del encabezado para poder ir al formulario de creación de neuvas recetas</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!-- Checkout Section End -->

    <!-- Footer Section Begin -->
    <footer class="footer spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="footer__about">
                        <div class="footer__about__logo">
                            <a href="./index.html"><img src="img/logitor.png" alt=""></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 offset-lg-1">
                    <div class="footer__widget">
                        <h6>Useful Links</h6>
                        <ul>
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">About Our Shop</a></li>
                            <li><a href="#">Secure Shopping</a></li>
                            <li><a href="#">Delivery infomation</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Our Sitemap</a></li>
                        </ul>
                        <ul>
                            <li><a href="#">Who We Are</a></li>
                            <li><a href="#">Our Services</a></li>
                            <li><a href="#">Projects</a></li>
                            <li><a href="#">Contact</a></li>
                            <li><a href="#">Innovation</a></li>
                            <li><a href="#">Testimonials</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="footer__widget">
                        <h6>Join Our Newsletter Now</h6>
                        <p>Get E-mail updates about our latest shop and special offers.</p>
                        <form action="#">
                            <input type="text" placeholder="Enter your mail">
                            <button type="submit" class="site-btn">Subscribe</button>
                        </form>
                        <div class="footer__widget__social">
                            <abbr title="Facebook"> <a href="#"><i class="fa fa-facebook"></i></a></abbr>
                            <abbr title="Instagram"> <a href="#"><i class="fa fa-instagram"></i></a></abbr>
                            <abbr title="Twitter"> <a href="#"><i class="fa fa-twitter"></i></a></abbr>
                            <abbr title="Pinterest"> <a href="#"><i class="fa fa-pinterest"></i></a></abbr>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->
    <!-- Footer Section End -->

    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/mixitup.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>
    <script>
        var coll = document.getElementsByClassName("collapsible");
        var i;

        for (i = 0; i < coll.length; i++) {
        coll[i].addEventListener("click", function() {
            this.classList.toggle("actives");
            var content = this.nextElementSibling;
            if (content.style.display === "block") {
            content.style.display = "none";
            } else {
            content.style.display = "block";
            }
        });
        }
    </script>

 

</body>

</html>