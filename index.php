<!-- Connect File -->
<?php
include("includes/connect.php");
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
                $select_query = "Select * from `products` order by rand() limit 0,6";
                $result_query = mysqli_query($con, $select_query);
                //  $row = mysqli_fetch_array($result_query);
                //  echo $row['product_title'];
                 while($row = mysqli_fetch_array($result_query)) {
                    $product_id = $row["product_id"];
                    $product_title = $row["product_title"];
                    $product_description = $row["product_description"];
                    $product_image1 = $row["product_image1"];
                    $product_price = $row["product_price"];
                    $category_id = $row["category_id"];
                    $brand_id = $row["brand_id"];
                    echo "<div class='col-md-4 mb-4'>
                    <div class='card'>
                        <img src='./admin_area/product_images/$product_image1' class='card-img-top' alt='$product_title'>
                        <div class='card-body'>
                            <h5 class='card-title'>$product_title</h5>
                            <p class='card-text'>$product_description</p>
                            <p class='card-text'>BDT: $product_price</p>
                            <a href='#' class='btn btn-dark'>Add To Cart</a>
                            <a href='#' class='btn btn-secondary'>View more</a>
                        </div>
                    </div>
                </div> " ;
                 }
                ?>
                <!-- <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="./images/Oziva.jpg" class="card-img-top" alt="product">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-dark">Add To Cart</a>
                            <a href="#" class="btn btn-secondary">View more</a>
                        </div>
                    </div>
                </div>     -->
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
                $select_brands = "Select * from `brands`";
                $result_brands = mysqli_query($con, $select_brands);

                // echo $row_data['brand_title'];
                while ($row_data = mysqli_fetch_assoc($result_brands)) {
                    $brand_title = $row_data['brand_title'];
                    $brand_id = $row_data['brand_id'];
                    echo "<li class='nav-item'>
                             <a href='index.php?brand=$brand_id' class='nav-link text-light'>$brand_title</a>
                          </li>";
                }
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
                $select_categories = "Select * from `categories`";
                $result_categories = mysqli_query($con, $select_categories);

                // echo $row_data['category_title'];
                while ($row_data = mysqli_fetch_assoc($result_categories)) {
                    $category_title = $row_data['category_title'];
                    $category_id = $row_data['category_id'];
                    echo "<li class='nav-item'>
                             <a href='index.php?category=$category_id' class='nav-link text-light'>$category_title</a>
                          </li>";
                }
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