<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Skin Care</title>
    <link rel="stylesheet" href="style.css">
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        .overlay {
            position: relative;
            width: 100%;
        }

        .overlay img {
            width: 100%;
            height: auto;
        }

        .overlay .overlay-content {
            position: absolute;
            top: 45%;
            left: 5%;

            font-size: x-large;
            color: black;
        }

        .overlay-content h3 {
            font-size: 40px;
        }
    </style>
</head>

<body>
    <!-- Navbar -->
    <div class="container-fluid p-0">
        <nav class="navbar navbar-expand-lg navbar-light  ">
            <div class="container-fluid">
                <img src="./images/logopic.png" alt="logo" class="logo">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active text-white" aria-current="page" href="/">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white " href="#">Products</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link text-white" href="#">Register</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="#">Contact</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="#"><i class="fa-solid fa-cart-shopping"></i class="text-white"><sup>1</sup></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="#">Total Price</a>
                        </li>

                    </ul>
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-light" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </nav>
    </div>

    <!-- user visibility -->
    <nav class="navbar navbar-expand-lg navbar-light bg-secondary  ">
        <ul class="navbar-nav me-auto  ">
            <li class="nav-item">
                <a class="nav-link text-white" href="">Welcome Guest</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="">Login</a>
            </li>
        </ul>
    </nav>



    <!-- heading /Banner section -->
    <div class="container mb-4">
        <div class="row">
            <div class="col">
                <div class="overlay">
                    <img src="./images/banner.jpg" alt="banner">
                    <div class="overlay-content">
                        <h3 class="text-left">Hidden Store</h3>
                        <p class="text-left">Explore RadiantGlow's Range of Skincare Essentials <br>Elevate Your Skincare Routine with RadiantGlow's Premium Products</p>
                        <div class="row justify-content-center " style="width: 150px"><button type="button" class="btn btn-dark">GET OFFER 20%</button></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- CARD and Sidebar -->
    <div class="row">
        <div class="col-md-10">
            <!-- products -->
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="./images/Oziva.jpg" class="card-img-top" alt="product">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-dark">Add To Cart</a>
                            <a href="#" class="btn btn-secondary">View more</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                <div class="card">
                        <img src="./images/dot&key.jpg" class="card-img-top" alt="product">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-dark">Add To Cart</a>
                            <a href="#" class="btn btn-secondary">View more</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                <div class="card">
                        <img src="./images/cerave.jpg" class="card-img-top" alt="product">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-dark">Add To Cart</a>
                            <a href="#" class="btn btn-secondary">View more</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="./images/Oziva.jpg" class="card-img-top" alt="product">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-dark">Add To Cart</a>
                            <a href="#" class="btn btn-secondary">View more</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="./images/Oziva.jpg" class="card-img-top" alt="product">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-dark">Add To Cart</a>
                            <a href="#" class="btn btn-secondary">View more</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="./images/Oziva.jpg" class="card-img-top" alt="product">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-dark">Add To Cart</a>
                            <a href="#" class="btn btn-secondary">View more</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-2">
            <!-- sidenavbar -->
        </div>
    </div>


    <!-- Footer -->
    <div class="bg-black p-4 text-center">
        <p class="text-white ">All rigths reserved , Designed By IRMN-2024</p>
    </div>


    <!-- bootstrap js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>