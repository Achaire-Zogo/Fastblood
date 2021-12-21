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
    <!-- ***** Header Area End ***** -->

    <!-- ***** Hero Area Start ***** -->
    <section class="hero-area">
        <div class="hero-slides owl-carousel">
            <!-- Single Hero Slide -->
            <div class="single-hero-slide bg-img" style="background-image: url('{{asset('img/bg-img/hero1.jpg')}}');">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-12">
                            <div class="hero-slides-content">
                                <h2 data-animation="fadeInUp" data-delay="100ms">Le sang c'est la <span class="text-danger">Vie.</span></h2>
                                <h6 data-animation="fadeInUp" data-delay="400ms">  C'est l'essence vital qui nous maintient debout et assurer le fonctionnement de notre corps.</h6>
                                <a href="#" class="btn medilife-btn mt-50 pt-0" data-animation="fadeInUp" data-delay="700ms">Découvrir FastBlood</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
<!-- Single Hero Slide -->
            <div class="single-hero-slide bg-img" style="background-image: url('{{asset('img/bg-img/breadcumb3.jpg')}}');">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-12">
                            <div class="hero-slides-content">
                                <h2 data-animation="fadeInUp" data-delay="100ms">Aidez tout en <br> restant en <span class="text-danger">sécurité.</span></h2>
                                <h6 data-animation="fadeInUp" data-delay="400ms">Venez, Inscrivez-vous et aidez ceux qui sont dans le besoin.</h6>
                                <a href="#" class="btn medilife-btn mt-50 pt-0" data-animation="fadeInUp" data-delay="700ms">Découvrir FastBlood</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Single Hero Slide -->
            <div class="single-hero-slide bg-img" style="background-image: url('{{asset('img/bg-img/breadcumb1.jpg')}}');">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-12">
                            <div class="hero-slides-content">
                                <h2 data-animation="fadeInUp" data-delay="100ms">Une poche de sang de donnée <br>vaut une vie de <span class="text-danger">sauvée.</span></h2>
                                <h6 data-animation="fadeInUp" data-delay="400ms">Ils sont des centaines à mourir chaque jours par manque de sang, venez...</h6>
                                <a href="#" class="btn medilife-btn mt-50 pt-0" data-animation="fadeInUp" data-delay="700ms">Découvrir FastBlood</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Hero Area End ***** -->

    <!-- ***** Book An Appoinment Area Start ***** -->
    <div class="medilife-book-an-appoinment-area">
        <div class="container">
            <div class="row">
                <div class="pt-3 col-lg-12" style="border-radius: 1rem; background-color: rgb(150, 183, 242);">
                    <div class="col-lg-8 col-md-12 mx-auto">
                        <div class="text-center">
                            <h3>Faire une demande de sang</h3>
                            <div class="spacer-15"></div>
                            <p class="text-muted mb-0">Besoin de sang ? Faites votre demande.</p>
                            <div class="spacer-30"></div>
                        </div>
                    </div>
                <div style="position: relative;">
                    <form action="#" method="post">
                    <div class="row align-items-end">
                        <div class="col-12 col-md-4">
                            <div class="form-group">
                                <select class="form-control" id="speciality">
                                <option>Speciality 1</option>
                            </select>
                            </div>
                        </div>
                        <div class="col-12 col-md-4">
                            <div class="form-group">
                                <select class="form-control" id="doctors">
                                <option>Doctors 1</option>
                            </select>
                            </div>
                        </div>
                        <div class="col-6 col-md-2">
                            <div class="form-group">
                                <input type="text" class="form-control" name="date" id="date" placeholder="Date">
                            </div>
                        </div>
                        <div class="col-6 col-md-2">
                            <div class="form-group">
                                <input type="text" class="form-control" name="time" id="time" placeholder="Time">
                            </div>
                        </div>
                        <div class="col-6 col-md-4">
                            <div class="form-group">
                                <input type="text" class="form-control border-top-0 border-right-0 border-left-0" name="name" id="name" placeholder="Name">
                            </div>
                        </div>
                        <div class="col-12 col-md-4">
                            <div class="form-group">
                                <input type="text" class="form-control border-top-0 border-right-0 border-left-0" name="number" id="number" placeholder="Phone">
                            </div>
                        </div>
                        <div class="col-12 col-md-4">
                            <div class="form-group">
                                <input type="email" class="form-control border-top-0 border-right-0 border-left-0" name="email" id="email" placeholder="E-mail">
                            </div>
                        </div>
                        <div class="col-12 col-md-7">
                            <div class="form-group mb-0">
                                <textarea name="message" class="form-control mb-0 border-top-0 border-right-0 border-left-0" id="message" cols="30" rows="10" placeholder="Message"></textarea>
                            </div>
                        </div>
                        <div class="col-12 col-md-5 mb-0">
                            <div class="form-group mb-0">
                                <button type="submit" class="btn medilife-btn pt-0">Valider & Envoyer </button>
                            </div>
                        </div>
                    </div>
                </form>
                </div>
                   <div class="medilife-contact-info d-flex">
                        <!-- Single Contact Info -->
                        <div class="single-contact-info mb-30 mx-auto">
                            <img src="img/icons/alarm-clock.png" alt="">
                            <p>Mon - Sat 08:00 - 21:00 <br>Sunday CLOSED</p>
                        </div>
                        <!-- Single Contact Info -->
                        <div class="single-contact-info mb-30 mx-auto">
                            <img src="img/icons/envelope.png" alt="">
                            <p>0080 673 729 766 <br>contact@business.com</p>
                        </div>
                        <!-- Single Contact Info -->
                        <div class="single-contact-info mx-auto">
                            <img src="img/icons/map-pin.png" alt="">
                            <p>Lamas Str, no 14-18 <br>41770 Miami</p>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Book An Appoinment Area End ***** -->

    <!-- ***** Features Area Start ***** -->
    <div class="medilife-features-area section-padding-100">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-lg-6">
                    <div class="features-content">
                        <h2>les principaux faits sur la transfusion sanguine au cameroun<span class="text-danger">.</span></h2>
                        <p>on se demander pourquoi créer un site internet pour le Programme National de Transfusion Sanguine.le PNTS(Programme National de Transfusion Sanguine, organe national de coordination 
                            des activités de transfusion sanguine fait face à un défi majeur qu’est le déficit en informations crédibles auprès de la population.
                            Actuellement au Cameroun, on estime à 400.000, le nombre de poches de sang nécessaires pour traiter annuellement les malades dans les formations sanitaires.Cependant, moins de 25% des 
                            besoins en sang sont pourvus chaque année, avec près de 95% de dons de remplacement effectués par les proches ou membres des familles (dons proscrits par l’OMS) 
                            et moins de 5% de dons bénévoles, volontaires et non rémunérés (dons recommandés).</p>
                        <a href="#" class="btn medilife-btn mt-50">View the services <span>+</span></a>
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="features-thumbnail">
                        <img src="img/bg-img/medical1.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Features Area End ***** -->


        <!-- BLOG START -->
        <section class="section">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-md-12">
                        <div class="text-center">
                            <h3>Annonces</h3>
                            <div class="spacer-15"></div>
                            <p class="text-muted mb-0">Rececez des annonces pour rester informés des détails.</p>
                            <div class="spacer-30"></div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4">
                        <article class="post mt-30">
                            <div class="post-preview">
                                <a href="#"><img src="img/blog-img/3.jpg" alt="" class="img-fluid mx-auto d-block"></a>
                            </div>

                            <div class="post-header">
                                <h4 class="post-title"><a href="#"> The business woman hard work</a></h4>
                                <ul class="post-meta">
                                    <li><i class="mdi mdi-calendar"></i> <small>Fab 01, 2019</small></li>
                                    <li><i class="mdi mdi-tag-text-outline"></i>
                                        <a href="#"> <small style="font-style: italic;">Le direceteur</small></a></li>
                                </ul>

                                <div class="post-content">
                                    <p class="text-muted">These cases are perfectly simple and easy to distinguish. In a free hour, when nothing prevents our being able to do what we like best.</p>
                                </div>

                                <span class="bar"></span>

                                <div class="post-footer">
                                    <div class="likes">
                                        <ul class="post-meta">
                                            <li><a href="#"><i class="far fa-heart mr-1"></i> <small>29</small></a></li>
                                            <li><a href="#"> <i class="far fa-comment mr-1"></i>
                                                 <small>40</small></a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="post-more"><a href="#">Read More <i class="mdi mdi-arrow-right"></i></a></div>
                                </div>
                            </div>
                        </article>
                    </div>

                    <div class="col-md-4">
                        <article class="post mt-30">
                            <div class="post-preview">
                                <a href="#"><img src="img/blog-img/2.jpg" alt="" class="img-fluid mx-auto d-block"></a>
                            </div>

                            <div class="post-header">
                                <h4 class="post-title"><a href="#">Business adviser analyzing financial</a></h4>
                                <ul class="post-meta">
                                    <li><i class="mdi mdi-calendar"></i> <small>Fab 01, 2019</small></li>
                                    <li><i class="mdi mdi-tag-text-outline"></i>
                                        <a href="#"> <small style="font-style: italic;">Essos Bank</small></a></li>
                                </ul>
                                <div class="post-content">
                                    <p class="text-muted">These cases are perfectly simple and easy to distinguish. In a free hour, when nothing prevents our being able to do what we like best.</p>
                                </div>

                                <span class="bar"></span>

                                <div class="post-footer">
                                    <div class="likes">
                                        <ul class="post-meta">
                                            <li><a href="#"><i class="far fa-heart mr-1"></i> <small>29</small></a></li>
                                            <li><a href="#"> <i class="far fa-comment mr-1"></i>
                                                 <small>40</small></a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="post-more"><a href="#">Read More <i class="mdi mdi-arrow-right"></i></a></div>
                                </div>
                            </div>
                        </article>
                    </div>

                    <div class="col-md-4">
                        <article class="post mt-30">
                            <div class="post-preview">
                                <a href="#"><img src="img/blog-img/1.jpg" alt="" class="img-fluid mx-auto d-block"></a>
                            </div>

                            <div class="post-header">
                                <h4 class="post-title"><a href="#">The progress work of the company</a></h4>
                                <ul class="post-meta">
                                    <li><i class="mdi mdi-calendar"></i> <small>Fab 01, 2019</small></li>
                                    <li><i class="mdi mdi-tag-text-outline"></i>
                                        <a href="#"> <small style="font-style: italic;">Center Bank</small></a></li>
                                </ul>

                                <div class="post-content">
                                    <p class="text-muted">These cases are perfectly simple and easy to distinguish. In a free hour, when nothing prevents our being able to do what we like best.</p>
                                </div>

                                <span class="bar"></span>

                                <div class="post-footer">
                                    <div class="likes">
                                        <ul class="post-meta">
                                            <li><a href="#"><i class="far fa-heart mr-1"></i> <small>29</small></a></li>
                                            <li><a href="#"> <i class="far fa-comment mr-1"></i>
                                                 <small>40</small></a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="post-more"><a href="#">Read More <i class="mdi mdi-arrow-right"></i></a></div>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </section>
        <!-- BLOG END -->

    <!-- ***** About Us Area Start ***** -->
    <section class="medica-about-us-area section-padding-100-20">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-4">
                    <div class="medica-about-content">
                        <h2>Pourquoi nous choisir et nous faire <span class="text-danger">confiance.</span></h2>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Lorem ipsum dolor sit amet, consectetuer adipiscing eli.</p>
                        <a href="#" class="btn medilife-btn mt-50">View the services <span>+</span></a>
                    </div>
                </div>
                <div class="col-12 col-lg-8">
                    <div class="row">
                        <!-- Single Service Area -->
                        <div class="col-12 col-sm-6">
                            <div class="single-service-area d-flex">
                                <div class="service-icon">
                                    <i class="icon-doctor"></i>
                                </div>
                                <div class="service-content">
                                    <h5>The Best Doctors</h5>
                                    <p>Lorem ipsum dolor sit amet, consecte tuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut.</p>
                                </div>
                            </div>
                        </div>
                        <!-- Single Service Area -->
                        <div class="col-12 col-sm-6">
                            <div class="single-service-area d-flex">
                                <div class="service-icon">
                                    <i class="icon-blood-donation-1"></i>
                                </div>
                                <div class="service-content">
                                    <h5>Baby Nursery</h5>
                                    <p>Dolor sit amet, consecte tuer elit, sed diam nonummy nibh euismod tincidunt ut ldolore magna.</p>
                                </div>
                            </div>
                        </div>
                        <!-- Single Service Area -->
                        <div class="col-12 col-sm-6">
                            <div class="single-service-area d-flex">
                                <div class="service-icon">
                                    <i class="icon-flask-2"></i>
                                </div>
                                <div class="service-content">
                                    <h5>Laboratory</h5>
                                    <p>Lorem ipsum dolor sit amet, consecte tuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut.</p>
                                </div>
                            </div>
                        </div>
                        <!-- Single Service Area -->
                        <div class="col-12 col-sm-6">
                            <div class="single-service-area d-flex">
                                <div class="service-icon">
                                    <i class="icon-emergency-call-1"></i>
                                </div>
                                <div class="service-content">
                                    <h5>Emergency Room</h5>
                                    <p>Dolor sit amet, consecte tuer elit, sed diam nonummy nibh euismod tincidunt ut ldolore magna.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** About Us Area End ***** -->


        <!-- WORK START -->
        <section class="section bg-light">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-md-12">
                        <div class="text-center">
                            <h3>Nos Banques</h3>
                            <div class="spacer-15"></div>
                            <p class="text-muted mb-0">Pour nous vous rendre aisé vos dons de sang, voici  nos banques, choisissez celle qui vous convient.</p>
                            <div class="spacer-30"></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container-fluid">
                <div class="port portfolio-masonry mt-3">
                    <div class="portfolioContainer row">
                        <div class="col-lg-3 col-md-6 part">
                            <div class="portfolio-box">
                                <a class="mfp-image" href="img/blog-img/1.jpg" title="Business Post">
                                    <img src="img/blog-img/1.jpg" class="img-fluid" alt="member-image">
                                </a>
                                <div class="gallary-title text-center">
                                    <h6><a href="work-single.html">Banque de Biyem-Assi</a></h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 part">
                            <div class="portfolio-box">
                                <a class="mfp-image" href="img/blog-img/3.jpg" title="Business Post">
                                    <img src="img/blog-img/3.jpg" class="img-fluid" alt="member-image">
                                </a>
                                <div class="gallary-title text-center">
                                    <h6><a href="work-single.html">Banque de Biyem-Assi</a></h6>

                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 part">
                            <div class="portfolio-box">
                                <a class="mfp-image" href="img/blog-img/2.jpg" title="Business Post">
                                    <img src="img/blog-img/2.jpg" class="img-fluid" alt="member-image">
                                </a>
                                <div class="gallary-title text-center">
                                    <h6><a href="work-single.html">Banque de Biyem-Assi</a></h6>

                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 part">
                            <div class="portfolio-box">
                                <a class="mfp-image" href="img/blog-img/4.jpg" title="Business Post">
                                    <img src="img/blog-img/4.jpg" class="img-fluid" alt="member-image">
                                </a>
                                <div class="gallary-title text-center">
                                    <h6><a href="work-single.html">Banque de Biyem-Assi</a></h6>

                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 part">
                            <div class="portfolio-box">
                                <a class="mfp-image" href="img/blog-img/3.jpg" title="Business Post">
                                    <img src="img/blog-img/3.jpg" class="img-fluid" alt="member-image">
                                </a>
                                <div class="gallary-title text-center">
                                    <h6><a href="work-single.html">Banque de Biyem-Assi</a></h6>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="text-center mt-30">
                            <a href="more-bank.html" class="btn btn-custom">See More ...</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- WORK END -->

    <!-- ***** Blog Area Start ***** -->
    <div class="medilife-blog-area section-padding-100-0">
        <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-md-12">
                        <div class="text-center">
                            <h3>Demandes d'aide</h3>
                            <div class="spacer-15"></div>
                            <p class="text-muted mb-0">Rececez des annonces pour rester informés des détails.</p>
                            <div class="spacer-30"></div>
                        </div>
                    </div>
                </div>
            <div class="row mt-3">
                <!-- Single Blog Area -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-blog-area mb-100">
                        <!-- Post Thumbnail -->
                        <div class="blog-post-thumbnail">
                            <img src="img/blog-img/1.jpg" alt="">
                            <!-- Post Date -->
                            <div class="post-date">
                                <a href="#">Jan 23, 2018</a>
                            </div>
                        </div>
                        <!-- Post Content -->
                        <div class="post-content">
                            <div class="post-author">
                                <a href="#"><img src="img/blog-img/p1.jpg" alt=""></a>
                            </div>
                            <a href="#" class="headline">New drog release soon</a>
                            <p>Dolor sit amet, consecte tuer adipiscing elit, sed diam nonummy nibh euismod tincidunt.</p>
                            <a href="#" class="comments">3 Comments</a>
                        </div>
                    </div>
                </div>
                <!-- Single Blog Area -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-blog-area mb-100">
                        <!-- Post Thumbnail -->
                        <div class="blog-post-thumbnail">
                            <img src="img/blog-img/2.jpg" alt="">
                            <!-- Post Date -->
                            <div class="post-date">
                                <a href="#">Jan 23, 2018</a>
                            </div>
                        </div>
                        <!-- Post Content -->
                        <div class="post-content">
                            <div class="post-author">
                                <a href="#"><img src="img/blog-img/p2.jpg" alt=""></a>
                            </div>
                            <a href="#" class="headline">Free dental care</a>
                            <p>Dolor sit amet, consecte tuer adipiscing elit, sed diam nonummy nibh euismod tincidunt.</p>
                            <a href="#" class="comments">3 Comments</a>
                        </div>
                    </div>
                </div>
                <!-- Single Blog Area -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-blog-area mb-100">
                        <!-- Post Thumbnail -->
                        <div class="blog-post-thumbnail">
                            <img src="img/blog-img/3.jpg" alt="">
                            <!-- Post Date -->
                            <div class="post-date">
                                <a href="#">Jan 23, 2018</a>
                            </div>
                        </div>
                        <!-- Post Content -->
                        <div class="post-content">
                            <div class="post-author">
                                <a href="#"><img src="img/blog-img/p3.jpg" alt=""></a>
                            </div>
                            <a href="#" class="headline">Good news for the pacients</a>
                            <p>Dolor sit amet, consecte tuer adipiscing elit, sed diam nonummy nibh euismod tincidunt.</p>
                            <a href="#" class="comments">3 Comments</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Blog Area End ***** -->

    <!-- ***** Cool Facts Area Start ***** -->
    <section class="medilife-cool-facts-area section-padding-10-0">
        <div class="container">
            <div class="row">
                <!-- Single Cool Fact-->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-cool-fact-area text-center mb-100">
                        <i class="icon-blood-transfusion-2"></i>
                        <h2><span class="counter">5632</span></h2>
                        <h6>Blood donations</h6>
                        <p>Dolor sit amet, consecte tuer adipiscing elit, sed diam nonummy nibh euismod tincidunt.</p>
                    </div>
                </div>
                <!-- Single Cool Fact-->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-cool-fact-area text-center mb-100">
                        <i class="icon-atoms"></i>
                        <h2><span class="counter">23</span>k</h2>
                        <h6>Pacients</h6>
                        <p>Dolor sit amet, consecte tuer adipiscing elit, sed diam nonummy nibh euismod tincidunt.</p>
                    </div>
                </div>
                <!-- Single Cool Fact-->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-cool-fact-area text-center mb-100">
                        <i class="icon-microscope"></i>
                        <h2><span class="counter">25</span></h2>
                        <h6>Specialities</h6>
                        <p>Dolor sit amet, consecte tuer adipiscing elit, sed diam nonummy nibh euismod tincidunt.</p>
                    </div>
                </div>
                <!-- Single Cool Fact-->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-cool-fact-area text-center mb-100">
                        <i class="icon-doctor"></i>
                        <h2><span class="counter">723</span></h2>
                        <h6>Doctors</h6>
                        <p>Dolor sit amet, consecte tuer adipiscing elit, sed diam nonummy nibh euismod tincidunt.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Cool Facts Area End ***** -->
        <!-- FOOTER START -->
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
