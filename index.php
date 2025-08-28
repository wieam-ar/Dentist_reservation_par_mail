<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dentist</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* ===== HEADER ===== */
        header .all {
            margin-top: 20px;
            background: rgba(255, 255, 255, 0.027);
            width: 100%;
            padding: 6px;
            border-radius: 50px;
            backdrop-filter: blur(10px);
        }

        header .navbar-nav .nav-link {
            position: relative;
            font-size: 16px;
            font-weight: 500;
            color: #fdfdfd;
            padding: 10px 15px;
            transition: color 0.3s ease;
            overflow: hidden;
        }

        header .navbar-nav .nav-link::before,
        header .navbar-nav .nav-link::after {
            content: '';
            position: absolute;
            height: 2px;
            width: 0;
            background-color: #ffffff;
            transition: width 0.4s ease;
        }

        header .navbar-nav .nav-link::before {
            top: 0;
            left: 0;
        }

        header .navbar-nav .nav-link::after {
            bottom: 0;
            right: 0;
        }

        header .navbar-nav .nav-link:hover::before,
        header .navbar-nav .nav-link:hover::after {
            width: 100%;
        }

        header .navbar-nav .nav-link:hover {
            color: #0021ff;
        }

        .header .navbar-brand {
            color: #ffffff;
        }

        .titre .navbar-brand {
            font-size: 38px;
            color: rgb(235, 235, 235);
            font-weight: bolder;
            text-decoration: none;
        }

        .btn-group {
            display: flex;
            align-items: center;
            gap: 10px;
            white-space: nowrap;
        }

        .btn-group .btn {
            color: white;
            background: #0021ff;
            padding: 8px 16px;
            border-radius: 10px;
            text-decoration: none;
            font-weight: bold;
            transition: 0.3s ease;
        }

        .btn-group .btn:hover {
            background: #0017cc;
            color: #ffffff;
        }

        /* ===== HERO SECTION ===== */
        .hero-section {
            position: relative;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 80vh;
            width: 50%;
            border-radius: 40px;
            z-index: 2;
            box-shadow: rgba(252, 252, 252, 0.35) 0px 5px 15px;
        }

        .centrehero {
            text-align: center;
        }

        .centrehero .hero-title {
            color: white;
        }

        .centrehero .hero-subtitle {
            font-size: 20px;
            color: white;
        }

        .search-form {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 50px;
        }

        form {
            display: flex;
            justify-content: space-between;
            background: rgba(255, 255, 255, 0.027);
            backdrop-filter: blur(10px);
            width: fit-content;
            border-radius: 10px;
            padding: 10px;
            gap: 10px;
            margin-top: 40px;
            /* instead of 20% */
        }

        form .btn {
            background-color: #0021ff;
            color: white;
            border-radius: 10px;
            font-size: 16px;
            font-weight: 500;
            border: none;
            cursor: pointer;
            padding: 10px 20px;
            transition: 0.3s ease;
        }

        form .btn:hover {
            background-color: #0017cc;
        }

        /* sectio 2 */
        .title1 h2 {
            text-align: center;
            font-family: 'Arial', sans-serif;
            font-weight: bolder;
            font-size: 2.5rem;
            padding: 10px;
        }

        .sec2 .paragraphe1 {
            line-height: 39px;
        }

        .scroll-wrapper {
            background: #0a6ebd;
            overflow: hidden;
            white-space: nowrap;
            position: relative;
        }

        .scroll-track {
            display: inline-block;
            animation: scroll-left 20s linear infinite;
        }

        .scroll-item {
            display: inline-block;
            color: white;
            font-weight: bold;
            padding: 10px 20px;
            font-size: 14px;
        }

        .scroll-item img {
            width: 20px;
            vertical-align: middle;
            margin-right: 8px;
        }

        @keyframes scroll-left {
            0% {
                transform: translateX(0);
            }

            100% {
                transform: translateX(-50%);
            }
        }
        .title2 h2{
            text-align: center;
            font-family: 'Arial', sans-serif;
            font-weight: bolder;
            font-size: 2.5rem;
            padding: 10px;
        }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
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
                            About <span class="color" style="color: #0017cc;">Us</span>
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
                        At <strong><span class="color" style="color: #0017cc;">Dentist</span></strong>,
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
                            <span class="color" style="color: #0017cc;">Dental clinic </span>
                            </h2>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
</body>

</html>