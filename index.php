<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dentist</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <link rel="stylesheet" href="./style/syle.css">
</head>

<body>
    <!-- header  -->
    <header>
        <div class="container">
            <div class="row all">
                <div class="col-md-12">

                    <nav class="navbar navbar-expand-lg ">
                        <a class="navbar-brand" href="#">
                            <img src="./assets/download-removebg-preview.png" alt="logo" style="width: 50px;"> <span style="color: blue; font-weight: bold; font-size: 16px; font-family: 'Arial', sans-serif;">Dentist</span>
                        </a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse d-flexx" id="navbarNavDropdown">
                            <!-- mx-auto to center links -->
                            <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                                <li class="nav-item">
                                    <a class="nav-link text-light" href="#section1">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-light" href="#section2">About</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-light" href="#section3">Reserver </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-light" href="#section4">Categories</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-light" href="#section6">FAQ</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-light" href="#section5">Contact Us</a>
                                </li>
                            </ul>
                            <div class="btn-group">
                                <a href="login.php" class="btn  me-2">Login</a>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>

    <!-- Section 1 -->
    <section id="section1" class="mt-2" style="height:100vh; ">
        <div class="container ">
            <video autoplay muted loop class="hero-section" style="width: 100%; height: 100%; object-fit: cover; position: absolute; top: 0; left: 0; z-index: -1; border-radius: 20px;">
                <source src="./assets/4489831-uhd_3840_2160_25fps.mp4" type="video/mp4">
            </video>

            <div class="row justify-content-center ">
                <div class="col-md-12 col-sm-12 centrehero mt-2 mx-auto">

                    <h1 class="hero-title" style="font-size: 3rem; margin-top: 15%;">Your Best Dental <br> <span style="color: #0021ff;">Experience Awaits</span></h1>
                    <p class="hero-subtitle">Ajouter des lignes dans le corps du texte</p>
                    <div class="row p-5">
                        <div class="col"></div>
                    </div>
                    <!-- Search Form -->
                    <div class="row justify-content-center">
                        <div class="col-md-10">
                            <form action="reservation.php" method="POST" class="w-100">
                                <div class="row d-flex justify-content-center p-1 g-2">
                                    <div class="col-sm-6 col-md-2">
                                        <select name="Categories" class="form-select" required>
                                            <option disabled selected>Categories</option>

                                        </select>
                                    </div>
                                    <div class="col-sm-6 col-md-2">
                                        <input type="text" name="full_name" class="form-control" placeholder="Nom Complet" required>
                                    </div>
                                    <div class="col-sm-6 col-md-2">
                                        <input type="date" name="date_arrivee" class="form-control" placeholder="Personnes" required>
                                    </div>
                                    <div class="col-sm-6 col-md-2">
                                        <input type="number" name="number" class="form-control" placeholder="number" pattern="[0-9]* " required>
                                    </div>
                                    <div class="col-sm-6 col-md-2">
                                        <input type="number" name="personnes" class="form-control" placeholder="Personnes" min="1" max="100" required>
                                    </div>
                                    <div class="col-sm-12 col-md-2 d-grid">
                                        <button type="submit" class="btn w-100">
                                            Allons-y <i class="fas fa-arrow-right ms-1"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>


                </div>

            </div>
        </div>

    </section>

    <!-- section 2 -->
    <section id="section2">
        <div class="container">

            <!-- Title -->
            <div class="row">
                <div class="col-md-12 pt-3">
                    <div class="title1 text-center">
                        <h2 class="About">
                            About <span class="color" style="color: #0a6ebd;">Us</span>
                        </h2>
                        <span class="line"></span>
                    </div>
                </div>
            </div>

            <!-- Content -->
            <div class="row align-items-center sec2">

                <!-- Image Left -->
                <div class="col-md-6 text-center">
                    <img src="./assets/Dentist__2_-removebg-preview.png" alt="teeths" class="img-fluid">
                </div>

                <!-- Text Right -->
                <div class="col-md-6">
                    <p class="paragraphe1">
                        At <strong><span class="color" style="color: #0a6ebd;">Dentist</span></strong>,
                        we believe that a healthy smile is the foundation of well-being.
                        Our clinic is dedicated to providing high-quality dental care in a warm,
                        comfortable, and welcoming environment. Led by Dr. [Dentist Name],
                        a passionate and experienced dental professional, we offer a full range
                        of services — from general dentistry and preventive care
                        to cosmetic treatments and advanced procedures.
                    </p>
                    <a href="more.php" class="btn btn-primary rounded-pill px-4">Learn More</a>
                </div>

            </div>

        </div>
    </section>

    <!-- section3 -->

    <section id="section3">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 p-0">
                    <div class="scroll-wrapper">
                        <div class="scroll-track" id="serviceScroll">
                            <!-- first scroll -->
                            <div class="scroll-item"><img src="./assets/Dentist__2_-removebg-preview.png"> Braces</div>
                            <div class="scroll-item"><img src="./assets/Dentist__2_-removebg-preview.png"> Teeth cleaning</div>
                            <div class="scroll-item"><img src="./assets/Dentist__2_-removebg-preview.png"> Teeth whitening</div>
                            <div class="scroll-item"><img src="./assets/Dentist__2_-removebg-preview.png"> Smile design</div>
                            <div class="scroll-item"><img src="./assets/Dentist__2_-removebg-preview.png"> Retainer</div>
                            <div class="scroll-item"><img src="./assets/Dentist__2_-removebg-preview.png"> Implants</div>
                            <div class="scroll-item"><img src="./assets/Dentist__2_-removebg-preview.png"> Veneers</div>

                            <div class="scroll-item"><img src="./assets/Dentist__2_-removebg-preview.png"> Braces</div>
                            <div class="scroll-item"><img src="./assets/Dentist__2_-removebg-preview.png"> Teeth cleaning</div>
                            <div class="scroll-item"><img src="./assets/Dentist__2_-removebg-preview.png"> Teeth whitening</div>
                            <div class="scroll-item"><img src="./assets/Dentist__2_-removebg-preview.png"> Smile design</div>
                            <div class="scroll-item"><img src="./assets/Dentist__2_-removebg-preview.png"> Retainer</div>
                            <div class="scroll-item"><img src="./assets/Dentist__2_-removebg-preview.png"> Implants</div>
                            <div class="scroll-item"><img src="./assets/Dentist__2_-removebg-preview.png"> Veneers</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- section4 -->
    <section id="section4">
        <div class="container">
            <div class="row p-5">
                <div class="col-md-12">
                    <div class="title2">
                        <h2 class=" text-center">
                            Welcome to <br> The Best
                            <span class="color" style="color: #0a6ebd;">Dental clinic </span>
                        </h2>
                    </div>
                </div>
            </div>
            <div class="row ">
                <div class="col-md-12">
                    <div class="stats">
                        <div class="stat-box">
                            <h2 class="counter" data-target="900">0</h2>
                            <p>Ajouter un sous-titre</p>
                        </div>
                        <div class="stat-box">
                            <h2 class="counter" data-target="4500">0</h2>
                            <p>Ajouter un sous-titre</p>
                        </div>
                        <div class="stat-box">
                            <h2 class="counter" data-target="99.79" data-suffix="%">0</h2>
                            <p>Ajouter un sous-titre</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>

    </section>
    <!-- section 5 -->

    <section id="section3">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 p-0">
                    <h2 class="Reserver text-center">
                        <img src="./assets/Dentist__2_-removebg-preview.png" alt="teeth" width="50">
                        Reserver Maintenant
                    </h2>
                    <span class="line"></span>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 p-0">
                    <div class="card" style="width: 18rem;">
                        <img src="./assets/races.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Teeth Braces</h5>
                            <p class="card-text">
                                Looking to achieve a perfectly
                                aligned smile? Our braces specialist offers
                                advanced orthodontic solutions to help
                                straighten your teeth comfortably and
                                effectively.
                            </p>
                            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal1">
                                Read More
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 p-0">
                    <div class="card" style="width: 18rem;">
                        <img src="./assets/tarki.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Tarkib asnan</h5>
                            <p class="card-text">Looking to achieve a perfectly
                                aligned smile? Our braces specialist offers
                                advanced orthodontic solutions to help
                                straighten your teeth comfortably and
                                effectively.
                            </p>
                            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal1">
                                Read More
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 p-0">
                    <div class="card" style="width: 18rem;">
                        <img src="./assets/white.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">WhitingTeeth</h5>
                            <p class="card-text">
                                Looking to achieve a perfectly
                                aligned smile? Our braces specialist offers
                                advanced orthodontic solutions to help
                                straighten your teeth comfortably and
                                effectively.
                            </p>
                            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal1">
                                Read More
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ===== MODALS ===== -->

    <!-- Modal 1 -->
    <div class="modal fade" id="modal1" tabindex="-1" aria-labelledby="modal1Label" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modal1Label">Teeth Braces</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <img src="./assets/races.png" class="img-fluid rounded mb-3" alt="">
                    <p>Our braces specialist offers advanced orthodontic solutions to help straighten your teeth comfortably and effectively. Perfect for achieving that aligned smile you’ve always wanted!</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Book Now</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal 2 -->
    <div class="modal fade" id="modal2" tabindex="-1" aria-labelledby="modal2Label" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modal2Label">Tarkib Asnan</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <img src="./assets/tarki.png" class="img-fluid rounded mb-3" alt="">
                    <p>Our implants specialist provides durable and natural-looking dental implants that restore both function and aesthetics. Get your confident smile back!</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Book Now</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal 3 -->
    <div class="modal fade" id="modal3" tabindex="-1" aria-labelledby="modal3Label" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modal3Label">Whiting Teeth</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <img src="./assets/white.png" class="img-fluid rounded mb-3" alt="">
                    <p>Brighten your smile with our professional whitening treatments. Safe, effective, and guaranteed to give you a radiant smile!</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Book Now</button>
                </div>
            </div>
        </div>
    </div>




    <script src="./js/javascript.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
</body>

</html>