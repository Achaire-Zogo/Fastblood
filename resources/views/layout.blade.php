<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title  -->
    <title>FastBlood | Accueil</title>

    <!-- Favicon  -->
    <link rel="icon" href="{{asset('img/logo.png')}}">

    <!-- Style CSS -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/style_banque.css')}}">

</head>

<body>
    <!-- ***** Header Area Start ***** -->
    <header class="header-area">
        <!-- Main Header Area -->
        <div class="main-header-area" id="stickyHeader">
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <div class="col-12 h-100">
                        <div class="main-menu h-100">
                            <nav class="navbar h-100 navbar-expand-lg">
                                <!-- Logo Area  -->
                                <a class="navbar-brand mt-10" href="index-2.html"><img src="{{asset('img/logo.png')}}" style="height: 80px; width: 180px;" alt="" title="retour à l'acceuil | Fast blood"></a>
                                <h3>Centre de transfusion Sanguine</h3>
                                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#medilifeMenu" aria-controls="medilifeMenu" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>

                                <div class="collapse navbar-collapse" id="medilifeMenu">
                                    <!-- Menu Area -->
                                    <ul class="navbar-nav ml-auto">
                                        <li class="nav-item">
                                            <a class="nav-link" href="index-2.html">Accueil</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="sign_in.html">Se Connecter</a>
                                        </li>
                                    <!-- Appointment Button -->
                                    <a href="#" class="btn medilife-appoint-btn ml-30 pt-0">Faire un <span>don</span> de sang</a>
                                    </ul>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
	
@yield('body')

        <footer class="footer">
            <div class="section-two">
                <div class="container">
                    <!--Footer Info -->
                    <div class="row footer-info">
                        <div class="col-lg-3 col-md-12 col-sm-12">
                            <div class="">
                                <a href="index-2.html" class="logo">
                                    <img src="{{asset('img/logo.png')}}" alt="missing_logo" height="20">
                                </a>
                            </div>
                            <p class="text-footer-clr mt-3">These cases are perfectly simple and easy to free hour, when nothing prevents distinguish.</p>
                            <div>
                                <ul class="list-unstyled social-icon">
                                    <li class="list-inline-item"><a href="#"><i class="fab fa-apple"></i></a></li>
                                    <li class="list-inline-item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li class="list-inline-item"><a href="#"><i class="fab fa-dribbble"></i></a></li>
                                    <li class="list-inline-item"><a href="#"><i class="fab fa-instagram"></i></a></li>
                                    <li class="list-inline-item"><a href="#"><i class="fab fa-twitter"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-4 col-sm-4">
                            <div class="footer-head">
                                <h5 class="text-light">Company</h5>
                            </div>
                            <div class="footer-item mt-3">
                                <ul class="list-unstyled">
                                    <li><a href="#"><i class="fas fa-chevron-right mr-2"></i> About us</a></li>
                                    <li><a href="#"><i class="fas fa-chevron-right mr-2"></i> Services</a></li>
                                    <li><a href="#"><i class="fas fa-chevron-right mr-2"></i> Portfolio</a></li>
                                    <li><a href="#"><i class="fas fa-chevron-right mr-2"></i> News</a></li>
                                    <li><a href="#"><i class="fas fa-chevron-right mr-2"></i> FAQ</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-4 col-sm-4">
                            <div class="footer-head">
                                <h5 class="text-light">Useful</h5>
                            </div>
                            <div class="footer-item mt-3">
                                <ul class="list-unstyled">
                                    <li><a href="#"><i class="fas fa-chevron-right mr-2"></i> Accounts</a></li>
                                    <li><a href="#"><i class="fas fa-chevron-right mr-2"></i> Sales & Support</a></li>
                                    <li><a href="#"><i class="fas fa-chevron-right mr-2"></i> Orders Track</a></li>
                                    <li><a href="#"><i class="fas fa-chevron-right mr-2"></i> Download Center</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-4 col-sm-4">
                            <div class="footer-head">
                                <h5 class="text-light">Additional</h5>
                            </div>
                            <div class="footer-item mt-3">
                                <ul class="list-unstyled">
                                    <li><a href="#"><i class="fas fa-chevron-right mr-2"></i> Portfolio</a></li>
                                    <li><a href="#"><i class="fas fa-chevron-right mr-2"></i> Contact Us</a></li>
                                    <li><a href="#"><i class="fas fa-chevron-right mr-2"></i> Blog</a></li>
                                    <li><a href="#"><i class="fas fa-chevron-right mr-2"></i> Help Center</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="footer-head">
                                <h5 class="text-light">Newsletter</h5>
                            </div>
                            <div class="footer-news mt-3">
                                <p class="text-footer-clr">Subscribe to our email newsletter to receive useful articles and special offers.</p>
                                <div class="subscribed-form">
                                    <div class="subcribed-form">
                                        <form action="#">
                                            <input name="email" type="email" placeholder="Your Email" id="email" required="">
                                            <button type="submit" class=""><span class="fab fa-telegram-plane"></span></button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Footer Info -->
                </div>
            </div>
            <hr>

            <!-- Copyright Bar -->
            <section class="section-30">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-12">
                            <div class="text-center">
                                <p class="copy-rights text-white mb-0"><a href="#" target="_blank">Fast Blood</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End Copyright Bar -->
        </footer>
        <!-- FOOTER END -->

    <!-- jQuery (Necessary for All JavaScript Plugins) -->
    <!-- Portfolio -->
    <script src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('js/isotope.js')}}"></script>

    <script src="{{asset('js/jquery/jquery-2.2.4.min.js')}}"></script>
    <!-- Popper js -->
    <script src="{{asset('js/popper.min.js')}}"></script>
    <!-- Bootstrap js -->
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <!-- Plugins js -->
    <script src="{{asset('js/plugins.js')}}"></script>
    <!-- Active js -->
    <script src="{{asset('js/active.js')}}"></script>
</body>
</html>

