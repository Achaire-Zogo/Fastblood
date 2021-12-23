
@extends('layout')
@section('body')

    <!-- ***** Hero Area Start ***** -->
    <section class="hero-area">
        <div class="hero-slides owl-carousel">
            <!-- Single Hero Slide -->
            <div class="single-hero-slide bg-img bg-overlay-white" style="background-image: url(img/bg-img/pex1.jpg);">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-12">
                            <div class="hero-slides-content">
                                <h2 data-animation="fadeInUp" data-delay="100ms">Le sang c'est la <span class="text-danger">Vie.</span></h2>
                                <h5 data-animation="fadeInUp" data-delay="400ms">C'est l'essence vital qui nous maintient debout et assurer le fonctionnement de notre corps.</h5>
                                <a href="#" class="btn medilife-btn mt-50 pt-0" data-animation="fadeInUp" data-delay="700ms">Découvrir FastBlood</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                   <!-- Single Hero Slide -->
            <div class="single-hero-slide bg-img bg-overlay-white" style="background-image: url(img/bg-img/pex2.jpg);">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-12">
                            <div class="hero-slides-content">
                                <h2 data-animation="fadeInUp" data-delay="100ms">Aidez tout en <br> restant en <span class="text-danger">sécurité.</span></h2>
                                <h5 data-animation="fadeInUp" data-delay="400ms">Venez, Inscrivez-vous et aidez ceux qui sont dans le besoin.</h5>
                                <a href="#" class="btn medilife-btn mt-50 pt-0" data-animation="fadeInUp" data-delay="700ms">Découvrir FastBlood</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Single Hero Slide -->
            <div class="single-hero-slide bg-img bg-overlay-white" style="background-image: url(img/bg-img/pex3.jpg);">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-12">
                            <div class="hero-slides-content">
                                <h2 data-animation="fadeInUp" data-delay="100ms">Une poche de sang de donnée <br>vaut une vie de <span class="text-danger">sauvée.</span></h2>
                                <h5 data-animation="fadeInUp" data-delay="400ms">Ils sont des centaines à mourir chaque jours par manque de sang, venez...</h5>
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
    <div class="medilife-book-an-appoinment-area" id="gift">
            <div class="container">
                <div class="row">
                        <div class="pt-3 col-lg-12" style="border-radius: 1rem; background-color: rgb(150, 183, 242);">
                            <div class="col-lg-8 col-md-12 mx-auto">
                                <div class="text-center">
                                    <h3>Faire un don de sang</h3>
                                    <div class="spacer-15"></div>
                                    <p class="text-muted mb-0">Donnez votre sang, Aidez ceux qui en ont besoin </p>
                                    <div class="spacer-30"></div>
                                </div>
                            </div>
                        <div class="appointment-form-content" style="background-color: rgb(150, 183, 242);">
                            <div class="row no-gutters align-items-center">
                                <div class="col-12 col-lg-9">
                                    <div class="medilife-appointment-form" style="background-color: rgb(150, 183, 242);">
                                        <form action="#" method="post">
                                            <div class="row align-items-end">
                                                <div class="col-12 col-md-4">
                                                    <div class="form-group">
                                                        <select class="form-control" id="speciality">
                                                        <option>Speciality 1</option>
                                                        <option>Speciality 2</option>
                                                        <option>Speciality 3</option>
                                                        <option>Speciality 4</option>
                                                        <option>Speciality 5</option>
                                                    </select>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-md-4">
                                                    <div class="form-group">
                                                        <select class="form-control" id="doctors">
                                                        <option>Doctors 1</option>
                                                        <option>Doctors 2</option>
                                                        <option>Doctors 3</option>
                                                        <option>Doctors 4</option>
                                                        <option>Doctors 5</option>
                                                    </select>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-md-2">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" name="date" id="date" placeholder="Date">
                                                    </div>
                                                </div>
                                                <div class="col-12 col-md-2">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" name="time" id="time" placeholder="Time">
                                                    </div>
                                                </div>
                                                <div class="col-12 col-md-4">
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
                                                        <button type="submit" class="btn medilife-btn">Faire une demande</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-3">
                                    <div class="medilife-contact-info">
                                        <!-- Single Contact Info -->
                                        <div class="single-contact-info mb-30">
                                            <img src="img/icons/alarm-clock.png" alt="">
                                            <p>Mon - Sat 08:00 - 21:00 <br>Sunday CLOSED</p>
                                        </div>
                                        <!-- Single Contact Info -->
                                        <div class="single-contact-info mb-30">
                                            <img src="img/icons/envelope.png" alt="">
                                            <p>0080 673 729 766 <br>contact@business.com</p>
                                        </div>
                                        <!-- Single Contact Info -->
                                        <div class="single-contact-info">
                                            <img src="img/icons/map-pin.png" alt="">
                                            <p>Lamas Str, no 14-18 <br>41770 Miami</p>
                                        </div>
                                    </div>
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
                            <a href="#" class="btn medilife-btn mt-50">View the services </a>
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="features-thumbnail">
                        <img src="img/bg-img/g1.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Features Area End ***** -->

    <!-- ***** About Us Area Start ***** -->
    <section class="medica-about-us-area section-padding-100-20">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-4">
                    <div class="medica-about-content">
                            <h2>quels sont les étapes du don de sang <span class="text-danger">?</span></h2>
                            <p>Les étapes de la collecte du don restent identiques quel que soit le lieu : site
                                fixe, école, salle des fêtes… et le type de don.
                                </p><a href="#" class="btn medilife-btn mt-50">View the services </a>
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
                                        <h5>1 L'inscription administrative</h5>
                                        <p>Le candidat au don est accueilli par une secrétaire de la banque qui
                                            enregistre son dossier administratif et lui remet le questionnaire pré-don
                                            afin de préparer l’entretien médical.</p>
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
                                        <h5>2 L'entretien médical
                                            </h5>
                                            <p>Le candidat au don est reçu par un médecin de la banque de sang pour un entretien
                                                confidentiel et un examen médical. Cet entretien est destiné à vérifier
                                                l’aptitude du candidat et à s’assurer que le don ne présente pas de risque,
                                                pour le donneur comme pour le receveur. L’entretien médical est ainsi une
                                                étape clé de la sécurité de la chaîne transfusionnelle.</p>
                                       
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
                                        <h5>3 Le prélèvement
                                            </h5>
                                            <p>Le prélèvement est effectué par une infirmière diplômée d’État. Des tubes
                                                échantillons, à partir desquels seront réalisés les analyses de qualification,
                                                sont d’abord prélevés.
                                                Le prélèvement dure environ 10 minutes (pour un don de sang total) et le
                                                volume prélevé est environ 500 ml. Le don de plasma et le don de
                                                plaquettes durent plus longtemps.</p>
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
                                    <p class="text-justify">Dolor sit amet, consecte tuer elit, sed diam nonummy nibh euismod tincidunt ut ldolore magna.
                                            Dolor sit amet, consecte tuer elit, sed diam nonummy nibh euismod tincidunt ut ldolore magna.
                                            Dolor sit amet, consecte tuer elit, sed diam nonummy nibh euismod tincidunt ut ldolore magna.
                                            Dolor sit amet, consecte tuer elit, sed diam nonummy nibh euismod tincidunt ut ldolore magna.
                                            Dolor sit amet, consecte tuer elit, sed diam nonummy nibh euismod tincidunt ut ldolore magna.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** About Us Area End ***** -->

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
                    <div class="row">
                        <div class="col-md-12">
                            <div class="text-center mt-30">
                                <a href="more-bank.html" class="btn btn-custom"> Voir plus ...</a>
                            </div>
                        </div>
                    </div>
        </div>
    </section>
            <!-- BLOG END -->

        <!-- WORK START -->

        <!-- BLOG START -->
        <section class="section">
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
                    <div class="row">
                        <div class="col-md-12">
                            <div class="text-center mt-30">
                                <a href="more-bank.html" class="btn btn-custom"> Voir plus ...</a>
                            </div>
                    </div>
            </div>
        </div>
    </section>
            <!-- BLOG END -->

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
            <div class="row mt-3 mb-3">
                <!-- Single Blog Area -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-blog-area mb-10">
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
                    <div class="single-blog-area mb-10">
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
                    <div class="single-blog-area mb-10">
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
            <div class="row mb-30">
                <div class="col-md-12">
                    <div class="text-center mt-10">
                        <a href="more-bank.html" class="btn btn-custom"> Voir plus ...</a>
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
 @endsection
