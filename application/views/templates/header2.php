<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="public/asset/css/style.css">
    <link href='https://fonts.googleapis.com/css?family=Sofia' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Cinzel Decorative' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Bungee Shade' rel='stylesheet'>

    <title>Geopark Ciletuh</title>
</head>

<body>
    <!-- Navbar 8===D -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><img src="<?= base_url('public/asset/img/esri.jpg'); ?>" alt="logo-esri" width="80" height="30" class="d-inline-block align-text-top"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="<?= base_url(); ?>">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Content
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Geopark Virtual Tour</a></li>
                            <li><a class="dropdown-item" href="#">Geopark Map</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="<?= base_url(); ?>home/other">More info about Geopark Ciletuh</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                    </li>
                </ul>
                <!-- <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form> -->
            </div>
        </div>
    </nav>

    <!-- slideshow UwU -->
    <!-- <div id="carouselExampleDark" class="carousel carousel-light slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="10000">
                <img src="<?= base_url('public/asset/img/geoparkciletuh.jpg'); ?>" class="d-block w-100 awal" alt="geopark1">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Hidden Paradise of Java Island</h5>
                    <p>One of the world's Geopark that has been recognized by the Unesco</p>
                </div>
            </div>
            <div class="carousel-item" data-bs-interval="2000">
                <img src="<?= base_url('public/asset/img/airTerjun-geopark.jpg'); ?>" class="d-block w-100 awal" alt="geopark2">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Geographics Magic</h5>
                    <p>The park itself has an area of ​​1,280 km²</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="<?= base_url('public/asset/img/curugCimarinjung.jpg'); ?>" class="d-block w-100 awal" alt="geopark3">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Visit once, you'll be amazed</h5>
                    <p>If you like nature, adventure, and Geography. Seek no more pal, you found your paradise</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div> -->