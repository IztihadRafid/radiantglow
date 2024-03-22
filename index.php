<!-- Connect File -->
<?php
include("includes/connect.php");
include("functions/common_function.php");
?>

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
        
        .card {
            width: 300px;
        }
        .card:hover{
            /* background-color: whitesmoke; */
            box-shadow: 5px 6px #7397eb;
            
        }

        .cards {
            width: 95%;
            margin: auto;
        }

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

        @media only screen and (max-width: 980px) {
            body {

                margin: auto;
            }
           
            .overlay-content h3 {
                font-size: 20px;
            }

            .bannerText {
                font-size: small;
            }

            .btn_offer {

               width: 100px;
                font-size: 8px;
            }

            .navbar {
                padding: 5px 5px 5px 5px;
            }

            .card {
                width: 300px;
                margin: auto;
            }

            .card-leftbar {
                display: grid;
                grid-template-columns: repeat(1, 1fr);
            }

            .cards {
                width: 80%;
            }
            .overlay .overlay-content {
            position: absolute;
            top: 25%;
            left: 5%;

            font-size:medium;
            color: black;
        }

        .overlay-content h3 {
            font-size: 20px;
        }

       
        }

        @media only screen and (max-width: 1200px) and (min-width:981px) {
            .card-leftbar {
                display: grid;
                grid-template-columns: repeat(2, 1fr);

            }
        }
    </style>
</head>

<body class="mainbody">
    <!-- Navbar -->
    <div class="container-fluid p-0">
        <nav class="navbar navbar-expand-lg navbar-light  ">
            <div class="container-fluid">
                <img src="./images/logopic.png" alt="logo" class="logo">
                <button class="navbar-toggler bg-light" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon "></span>
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
                            <a class="nav-link text-white" href="#"><i class="fa-solid fa-cart-shopping text-white"></i><sup>1</sup></a>
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
    <div class="container mb-4 mt-3">
        <div class="row carousel slide"  id="carouselExampleControls" data-bs-ride="carousel">
            <div class="col carousel-inner">
                <div class="overlay carousel-item active">
                    <img src="./images/banner.jpg" alt="banner">
                    <div class="overlay-content">
                        <h3 class="text-left">Hidden Store</h3>
                        <p class="text-left bannerText">Explore RadiantGlow's Range of Skincare Essentials <br>Elevate Your Skincare Routine with RadiantGlow's Premium Products</p>
                        <div class="row justify-content-center " style="width: 150px">
                            <button type="button" class="btn btn-dark btn_offer">GET OFFER 20%</button></div>
                    </div>
                </div>
                <div class="overlay carousel-item ">
                    <img src="./images/product2.jpg" alt="banner">
                    <div class="overlay-content">
                        <h3 class="text-left">Hidden Store</h3>
                        <p class="text-left bannerText">Explore RadiantGlow's Range of Skincare Essentials <br>Elevate Your Skincare Routine with RadiantGlow's Premium Products</p>
                        <div class="row justify-content-center  " style="width: 150px">
                            <button type="button" class="btn btn-dark btn_offer">GET OFFER 20%</button></div>
                    </div>
                </div>
                <div class="overlay carousel-item ">
                    <img src="./images/product3.jpg" alt="banner">
                    <div class="overlay-content">
                        <h3 class="text-left">Hidden Store</h3>
                        <p class="text-left bannerText">Explore RadiantGlow's Range of Skincare Essentials <br>Elevate Your Skincare Routine with RadiantGlow's Premium Products</p>
                        <div class="row justify-content-center " style="width: 150px">
                            <button type="button" class="btn btn-dark btn_offer">GET OFFER 20%</button></div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
        </div>
    </div>

    <!-- CARD and Sidebar -->
    <div class="cards row">
        <div class="col-md-10">
            <!-- products -->
            <div class="row card-leftbar">
                <!-- fetching products -->
                <?php
                //calling CARD view function from common_function.php
                getProducts()
                ?>
             
            </div>
        </div>
        <!-- sidenavbar -->
        <div class="col-md-2 bg-secondary p-0 sidenavbarLi">
            <!-- brands -->
            <ul class="navbar-nav me-auto text-center">
                <li class="nav-item bg-info">
                    <a href="" class="nav-link text-light">
                        <h4>Brands</h4>
                    </a>
                </li>

                <!-- PHP code -->
                <!-- ==================================================== -->
                <!-- Dynamic Brand list showing in SideBar -->
                <!-- ==================================================== -->
                <?php
                //calling  brandnavbar function from common_function.php
                getBrands();
                ?>
            </ul>
            <!-- Categories -->
            <ul class="navbar-nav me-auto text-center">
                <li class="nav-item bg-info">
                    <a href="" class="nav-link text-light">
                        <h4>Categories</h4>
                    </a>
                </li>
              <!-- ==================================================== -->
                <!-- Dynamic Category list showing in SideBar -->
                <!-- ==================================================== -->
                <?php
              //calling Categories function sidenavbar from common_function.php
              getCategories();
                ?>
               
            </ul>
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