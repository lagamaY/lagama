<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <title>Portfolio - Lagama Coulibaly</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="assets/img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="assets/lib/animate/animate.min.css" rel="stylesheet">
    <link href="assets/lib/lightbox/css/lightbox.min.css" rel="stylesheet">
    <link href="assets/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Customized Bootstrap Stylesheet -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="assets/css/style.css" rel="stylesheet">
</head>

<body data-bs-spy="scroll" data-bs-target=".navbar" data-bs-offset="51">
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Un peu de patience svp ...</span>
        </div>
    </div>
    <!-- Spinner End -->


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light fixed-top shadow py-lg-0 px-4 px-lg-5 wow fadeIn" data-wow-delay="0.1s">

        <a href="index.html" class="navbar-brand d-block d-lg-none">
            <h1 class="text-primary fw-bold m-0">Lagama</h1>
        </a>
        <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-between py-4 py-lg-0" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0">
                <a href="{{route('accueil')}}" class="nav-item nav-link active">Accueil</a>
                <a href="#about" class="nav-item nav-link">A propos</a>
                <a href="#skill" class="nav-item nav-link">Expériences</a>
                <!-- <a href="#service" class="nav-item nav-link">Services</a> -->
            </div>
            <a href="index.html" class="navbar-brand bg-secondary py-3 px-4 mx-3 d-none d-lg-block">
                <h1 class="text-primary fw-bold m-0">LAGAMA</h1>
            </a>
            <div class="navbar-nav me-auto py-0">
                <a href="#service" class="nav-item nav-link">Services</a>
                <a href="{{route('projets')}}" class="nav-item nav-link">Projets</a>
                <a href="#contact" class="nav-item nav-link">Contact</a>
            </div>
        </div>
    </nav>

    <!-- Navbar End -->


    <!-- Header Start -->
    <div class="container-fluid bg-light my-6 mt-0" id="home">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 py-6 pb-0 pt-lg-0">
                    <h3 class="text-primary mb-3">Salut, je suis</h3>
                    <h1 class="display-3 mb-3">Lagama</h1>
                    <h2 class="typed-text-output d-inline"></h2>
                    <div class="typed-text d-none">Développeuse Web, Apprenti Ingénieure Cloud Aws</div>
                    <div class="d-flex align-items-center pt-5">
                        <a href="" class="btn btn-primary py-3 px-4 me-5">Télécharger mon CV</a>
                        <a href="#"><i class="fa fa-github" style="font-size:70px; color: black;"></i></a>

                        <!-- <button type="button" class="btn-play" 
                             >
                            <span><i class="fab fa-facebook-f"></i></span>
                        </button> -->
                        
                    </div>
                </div>
                <div class="col-lg-6">
                    <img class="img-fluid" src="assets/img/profile.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->

    <!-- About Start -->
    <div class="container-xxl py-6" id="about">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="d-flex align-items-center mb-5">
                        <div class="years flex-shrink-0 text-center me-4">
                            <h1 class="display-1 mb-0">15</h1>
                            <h5 class="mb-0">Années</h5>
                        </div>
                        <h3 class="lh-base mb-0">d'expérience dans le développement web</h3>
                    </div>
                    <p class="mb-4">Stet no et lorem dolor et diam, amet duo ut dolore vero eos. No stet est diam rebum amet diam ipsum. Clita clita labore, dolor duo nonumy clita sit at, sed sit sanctus dolor eos.</p>
                    <p class="mb-3"><i class="far fa-check-circle text-primary me-3"></i>Afordable Prices</p>
                    <p class="mb-3"><i class="far fa-check-circle text-primary me-3"></i>High Quality Product</p>
                    <p class="mb-3"><i class="far fa-check-circle text-primary me-3"></i>On Time Project Delivery</p>
                    <a class="btn btn-primary py-3 px-5 mt-3" href="">Télécharger mon cv</a>
                </div>

                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="row g-3 mb-4">
                        <div class="col-sm-12">
                            <img class="img-fluid rounded" src="assets/img/about-1.jpg" alt="">
                        </div>
                        <!-- <div class="col-sm-6">
                            <img class="img-fluid rounded" src="img/about-2.jpg" alt="">
                        </div> -->
                    </div>

                    <!-- <div class="d-flex align-items-center mb-3">
                        <h5 class="border-end pe-3 me-3 mb-0">Happy Clients</h5>
                        <h2 class="text-primary fw-bold mb-0" data-toggle="counter-up">1234</h2>
                    </div>
                    <p class="mb-4">Stet no et lorem dolor et diam, amet duo ut dolore vero eos. No stet est diam amet diam ipsum clita labore dolor duo clita.</p>
                    <div class="d-flex align-items-center mb-3">
                        <h5 class="border-end pe-3 me-3 mb-0">Projects Completed</h5>
                        <h2 class="text-primary fw-bold mb-0" data-toggle="counter-up">1234</h2>
                    </div>
                    <p class="mb-0">Stet no et lorem dolor et diam, amet duo ut dolore vero eos. No stet est diam amet diam ipsum clita labore dolor duo clita.</p> -->
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Expertise Start -->
    <div class="container-xxl py-6 pb-5" id="skill">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <h1 class="display-5 mb-5">Technologies</h1>
                    <p class="mb-4">Stet no et lorem dolor et diam, amet duo ut dolore vero eos. No stet est diam rebum amet diam ipsum clita dolor duo clita sit.</p>
                    <h3 class="mb-4">Technologies</h3>
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <div class="skill mb-4">
                                <div class="d-flex justify-content-between">
                                    <h6 class="font-weight-bold">HTML</h6>
                                    <h6 class="font-weight-bold">95%</h6>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="skill mb-4">
                                <div class="d-flex justify-content-between">
                                    <h6 class="font-weight-bold">CSS</h6>
                                    <h6 class="font-weight-bold">85%</h6>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="skill mb-4">
                                <div class="d-flex justify-content-between">
                                    <h6 class="font-weight-bold">PHP</h6>
                                    <h6 class="font-weight-bold">90%</h6>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="skill mb-4">
                                <div class="d-flex justify-content-between">
                                    <h6 class="font-weight-bold">Javascript</h6>
                                    <h6 class="font-weight-bold">90%</h6>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="skill mb-4">
                                <div class="d-flex justify-content-between">
                                    <h6 class="font-weight-bold">Angular JS</h6>
                                    <h6 class="font-weight-bold">95%</h6>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar bg-dark" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="skill mb-4">
                                <div class="d-flex justify-content-between">
                                    <h6 class="font-weight-bold">Wordpress</h6>
                                    <h6 class="font-weight-bold">85%</h6>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar bg-info" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <ul class="nav nav-pills rounded border border-2 border-primary mb-5">
                        <li class="nav-item w-50">
                            <button class="nav-link w-100 py-3 fs-5 active" data-bs-toggle="pill" href="#tab-1">Experience</button>
                        </li>
                        <li class="nav-item w-50">
                            <button class="nav-link w-100 py-3 fs-5" data-bs-toggle="pill" href="#tab-2">Education</button>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div id="tab-1" class="tab-pane fade show p-0 active">
                            <div class="row gy-5 gx-4">
                                <div class="col-sm-6">
                                    <h5>UI Designer</h5>
                                    <hr class="text-primary my-2">
                                    <p class="text-primary mb-1">2000 - 2045</p>
                                    <h6 class="mb-0">Apex Software Inc</h6>
                                </div>
                                <div class="col-sm-6">
                                    <h5>Product Designer</h5>
                                    <hr class="text-primary my-2">
                                    <p class="text-primary mb-1">2000 - 2045</p>
                                    <h6 class="mb-0">Apex Software Inc</h6>
                                </div>
                                <div class="col-sm-6">
                                    <h5>Web Designer</h5>
                                    <hr class="text-primary my-2">
                                    <p class="text-primary mb-1">2000 - 2045</p>
                                    <h6 class="mb-0">Apex Software Inc</h6>
                                </div>
                                <div class="col-sm-6">
                                    <h5>Apps Designer</h5>
                                    <hr class="text-primary my-2">
                                    <p class="text-primary mb-1">2000 - 2045</p>
                                    <h6 class="mb-0">Apex Software Inc</h6>
                                </div>
                            </div>
                        </div>
                        <div id="tab-2" class="tab-pane fade show p-0">
                            <div class="row gy-5 gx-4">
                                <div class="col-sm-6">
                                    <h5>UI Design Course</h5>
                                    <hr class="text-primary my-2">
                                    <p class="text-primary mb-1">2000 - 2045</p>
                                    <h6 class="mb-0">Cambridge University</h6>
                                </div>
                                <div class="col-sm-6">
                                    <h5>IOS Development</h5>
                                    <hr class="text-primary my-2">
                                    <p class="text-primary mb-1">2000 - 2045</p>
                                    <h6 class="mb-0">Cambridge University</h6>
                                </div>
                                <div class="col-sm-6">
                                    <h5>Web Design</h5>
                                    <hr class="text-primary my-2">
                                    <p class="text-primary mb-1">2000 - 2045</p>
                                    <h6 class="mb-0">Cambridge University</h6>
                                </div>
                                <div class="col-sm-6">
                                    <h5>Apps Design</h5>
                                    <hr class="text-primary my-2">
                                    <p class="text-primary mb-1">2000 - 2045</p>
                                    <h6 class="mb-0">Cambridge University</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Expertise End -->


    <!-- Service Start -->
    <div class="container-fluid bg-light my-5 py-6" id="service">
        <div class="container">
            <div class="row g-5 mb-5 wow fadeInUp" data-wow-delay="0.1s">
                <div class="col-lg-6">
                    <h1 class="display-5 mb-0"> Services Proposés</h1>
                </div>
                <div class="col-lg-6 text-lg-end">
                    <a class="btn btn-primary py-3 px-5" href="">Contactez-moi</a>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item d-flex flex-column flex-sm-row bg-white rounded h-100 p-4 p-lg-5">
                        <div class="bg-icon flex-shrink-0 mb-3">
                            <i class="fa fa-crop-alt fa-2x text-dark"></i>
                        </div>
                        <div class="ms-sm-4">
                            <h4 class="mb-3">Creative Design</h4>
                            <h6 class="mb-3">Start from <span class="text-primary">$199</span></h6>
                            <span>Stet lorem dolor diam amet vero eos. No stet est diam amet diam ipsum. Clita dolor duo clita sit sed sit dolor eos.</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item d-flex flex-column flex-sm-row bg-white rounded h-100 p-4 p-lg-5">
                        <div class="bg-icon flex-shrink-0 mb-3">
                            <i class="fa fa-code-branch fa-2x text-dark"></i>
                        </div>
                        <div class="ms-sm-4">
                            <h4 class="mb-3">Graphic Design</h4>
                            <h6 class="mb-3">Start from <span class="text-primary">$199</span></h6>
                            <span>Stet lorem dolor diam amet vero eos. No stet est diam amet diam ipsum. Clita dolor duo clita sit sed sit dolor eos.</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item d-flex flex-column flex-sm-row bg-white rounded h-100 p-4 p-lg-5">
                        <div class="bg-icon flex-shrink-0 mb-3">
                            <i class="fa fa-code fa-2x text-dark"></i>
                        </div>
                        <div class="ms-sm-4">
                            <h4 class="mb-3">Web Design</h4>
                            <h6 class="mb-3">Start from <span class="text-primary">$199</span></h6>
                            <span>Stet lorem dolor diam amet vero eos. No stet est diam amet diam ipsum. Clita dolor duo clita sit sed sit dolor eos.</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item d-flex flex-column flex-sm-row bg-white rounded h-100 p-4 p-lg-5">
                        <div class="bg-icon flex-shrink-0 mb-3">
                            <i class="fa fa-laptop-code fa-2x text-dark"></i>
                        </div>
                        <div class="ms-sm-4">
                            <h4 class="mb-3">UI/UX Design</h4>
                            <h6 class="mb-3">Start from <span class="text-primary">$199</span></h6>
                            <span>Stet lorem dolor diam amet vero eos. No stet est diam amet diam ipsum. Clita dolor duo clita sit sed sit dolor eos.</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->


    <!-- Projects Start -->
    <div class="container-xxl py-6 pt-5" id="project">
        <div class="container">
            <div class="row g-5 mb-5 align-items-center wow fadeInUp" data-wow-delay="0.1s">
                <div class="col-lg-6">
                    <h1 class="display-5 mb-0"> Projets Réalisés</h1>
                </div>
                <div class="col-lg-6 text-lg-end">
                    <ul class="list-inline mx-n3 mb-0" id="portfolio-flters">
                        <li class="mx-3 active" data-filter="*">All Projects</li>
                        <li class="mx-3" data-filter=".first">UI/UX Design</li>
                        <li class="mx-3" data-filter=".second">Graphic Design</li>
                    </ul>
                </div>
            </div>
            <div class="row g-4 portfolio-container wow fadeInUp" data-wow-delay="0.1s">
                <div class="col-lg-4 col-md-6 portfolio-item first">
                    <div class="portfolio-img rounded overflow-hidden">
                        <img class="img-fluid" src="assets/img/project-1.jpg" alt="">
                        <div class="portfolio-btn">
                            <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href="{{route('description')}}"><i class="fa fa-eye"></i></a>
                            <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href=""><i class="fa fa-link"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 portfolio-item second">
                    <div class="portfolio-img rounded overflow-hidden">
                        <img class="img-fluid" src="assets/img/project-2.jpg" alt="">
                        <div class="portfolio-btn">
                            <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href="img/project-2.jpg" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                            <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href=""><i class="fa fa-link"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 portfolio-item first">
                    <div class="portfolio-img rounded overflow-hidden">
                        <img class="img-fluid" src="assets/img/project-3.jpg" alt="">
                        <div class="portfolio-btn">
                            <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href="img/project-3.jpg" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                            <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href=""><i class="fa fa-link"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 portfolio-item second">
                    <div class="portfolio-img rounded overflow-hidden">
                        <img class="img-fluid" src="assets/img/project-4.jpg" alt="">
                        <div class="portfolio-btn">
                            <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href="img/project-4.jpg" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                            <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href=""><i class="fa fa-link"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 portfolio-item first">
                    <div class="portfolio-img rounded overflow-hidden">
                        <img class="img-fluid" src="assets/img/project-5.jpg" alt="">
                        <div class="portfolio-btn">
                            <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href="img/project-5.jpg" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                            <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href=""><i class="fa fa-link"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 portfolio-item second">
                    <div class="portfolio-img rounded overflow-hidden">
                        <img class="img-fluid" src="assets/img/project-6.jpg" alt="">
                        <div class="portfolio-btn">
                            <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href="img/project-6.jpg" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                            <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href=""><i class="fa fa-link"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Projects End -->


    <!-- Contact Start -->
    <div class="container-xxl pb-5" id="contact">
        <div class="container py-5">
            <div class="row g-5 mb-5 wow fadeInUp" data-wow-delay="0.1s">
                <div class="col-lg-6">
                    <h1 class="display-5 mb-0">Travaillons ensemble</h1>
                </div>
                <!-- <div class="col-lg-6 text-lg-end">
                    <a class="btn btn-primary py-3 px-5" href="">Say Hello</a>
                </div> -->
            </div>
            <div class="row g-5">
                <div class="col-lg-5 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <p class="mb-2">Adresse:</p>
                    <h3 class="fw-bold">Riviera, Abidjan, Côte d'Ivoire</h3>
                    <hr class="w-100">
                    <p class="mb-2">Téléphone:</p>
                    <h3 class="fw-bold">+225 078 958 8653</h3>
                    <hr class="w-100">
                    <p class="mb-2">Email:</p>
                    <h3 class="fw-bold">lagoma.business@gmail.com</h3>
                    <hr class="w-100">
                    <p class="mb-2">Me suivre:</p>
                    <div class="d-flex pt-2">
                        <a class="btn btn-square btn-primary me-2" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-square btn-primary me-2" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-square btn-primary me-2" href=""><i class="fab fa-youtube"></i></a>
                        <a class="btn btn-square btn-primary me-2" href=""><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-7 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <p class="mb-4">The contact form is currently inactive. Get a functional and working contact form with Ajax & PHP in a few minutes. Just copy and paste the files, add a little code and you're done. <a href="https://htmlcodex.com/contact-form">Download Now</a>.</p>
                    <form>
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="name" placeholder="Your Name">
                                    <label for="name">Your Name</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="email" class="form-control" id="email" placeholder="Your Email">
                                    <label for="email">Your Email</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="subject" placeholder="Subject">
                                    <label for="subject">Subject</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control" placeholder="Leave a message here" id="message" style="height: 100px"></textarea>
                                    <label for="message">Message</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary py-3 px-5" type="submit">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->


    


    <!-- Copyright Start -->
    @include('sections.footer')
    <!-- Copyright End -->


    