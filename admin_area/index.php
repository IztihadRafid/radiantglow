<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <!-- bootstrap link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- css file -->
    <link rel="stylesheet" href="../style.css">
    <style>
        .admin_image {
            width: 100px;
            object-fit: contain;
            border: 2px solid black;
            border-radius: 300px;
        }
    </style>
</head>

<body>

    <!-- navbar -->
    <div class="container-fluid p-0">
        <nav class="navbar navbar-expand-lg navbar-light bg-black">
            <div class="container-fluid">
                <img src="../images/logopic.png" class="logo" alt="logo">
                <nav class="navbar navbar-expand-lg ">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="" class="nav-link fs-3 text-white">Welcome Guest</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </nav>

        <!-- second child -->
        <div class="bg-light">
            <h3 class="text-center p-2">Manage Details</h3>
        </div>

        <!-- third child/ view,add,edit, (Admin accessable area) -->
        <div class="row">
            <div class="col-md-12 bg-purple-light p-1 d-flex align-items-center">
                <div class="p-5">
                    <a href=""><img src="../images/p10.jpg" class="admin_image" alt=""></a>
                    <p class="text-light text-center">Admin Name</p>
                </div>
                <div class="button text-center mx-auto">
                    <button class="my-2"><a href="" class="nav-link text-light bg-black p-2">Insert Product</a></button>
                    <button class="my-2"><a href="" class="nav-link text-light bg-black p-2">View Products</a></button>
                    <button class="my-2"><a href="" class="nav-link text-light bg-black p-2">Insert Category</a></button>
                    <button class="my-2"><a href="" class="nav-link text-light bg-black p-2">View Categories</a></button>
                    <button class="my-2"><a href="" class="nav-link text-light bg-black p-2">Insert Brands</a></button>
                    <button class="my-2"><a href="" class="nav-link text-light bg-black p-2">View Brands</a></button>
                    <button class="my-2"><a href="" class="nav-link text-light bg-black p-2">All Orders</a></button>
                    <button class="my-2"><a href="" class="nav-link text-light bg-black p-2">All Payments</a></button>
                    <button class="my-2"><a href="" class="nav-link text-light bg-black p-2">List Users</a></button>
                    <button class="my-2"><a href="" class="nav-link text-light bg-black p-2">Log Out</a></button>
                </div>
            </div>
        </div>
    </div>


        <!-- Footer -->
    <div class="bg-black p-4 text-center">
        <p class="text-white ">All rigths reserved , Designed By IRMN-2024</p>
    </div>


    <!-- bootstrap js link -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>