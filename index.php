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
    margin-top: 40px; /* instead of 20% */
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
                        <a class="navbar-brand" href="#" >
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






    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
</body>

</html>