<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Category</title>
    <!-- bootstrap link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- css file -->
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <?php
        include("../includes/connect.php")
    
    ?>
    <h1 class="text-center p-3">Insert Category</h1>
    <div class="border border-danger border-1 rounded-3 w-50 mx-auto mt-4 p-5">
        <form action="" method="post" class="mb-2">
            <div class="input-group mb-3 w-90">
                <span class="input-group-text bg-info" id="basic-addon1"><i class="fa-solid fa-receipt"></i></span>
                <input type="text" class="form-control" placeholder="Insert categories" name="cat_title" placeholder="Insert Category" aria-label="Username" aria-describedby="basic-addon1">
            </div>
            <div class="input-group  w-10">

                <!-- <input type="submit" class="form-control bg-info" value="Insert categories" name="insert_cat"> -->
                <button class="bg-info py-3 px-5 my-3 border-0 rounded-2" >Insert Categories</button>
            </div>
        </form>
    </div>
</body>

</html>