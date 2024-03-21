<?php
include("../includes/connect.php");

//insert button pressed
if(isset($_POST["insert_product"])){
    $product_title=$_POST['product_title'];
    $description=$_POST['description'];
    $product_keywords=$_POST['product_keywords'];
    $product_category=$_POST['product_category'];
    $product_brands=$_POST['product_brands'];
    $product_price=$_POST['product_price'];
    $product_status='true';


    // accessing images
    $product_image1=$_FILES['product_image1']['name'];
    $product_image2=$_FILES['product_image2']['name'];
    $product_image3=$_FILES['product_image3']['name'];
  
    // accessing image temp name
    $temp_image1=$_FILES['product_image1']['tmp_name'];
    $temp_image2=$_FILES['product_image2']['tmp_name'];
    $temp_image3=$_FILES['product_image3']['tmp_name'];

    // checking empty condition
    if($product_title=='' or $description=='' or $product_keywords=='' or $product_category='' or $product_brands=='' or $product_price=='' or $product_image1=='' or $product_image2== '' or $product_image3== ''){

        echo "<script>alert('Please fill all available fields')</script>";
        exit();
    }else{ 
        move_uploaded_file($temp_image1,"./product_images/$product_image1");
        move_uploaded_file($temp_image2,"./product_images/$product_image2");
        move_uploaded_file($temp_image3,"./product_images/$product_image3");

        //insert query
        $insert_products = "insert into `products` (product_title,product_description,prooduct_keywords,category_id,brand_id,product_image1,	product_image2,product_image3,product_price,date,status) values('$product_title','$description','$product_keywords','$product_category','$product_brands','$product_image1','$product_image2','$product_image3','$product_price',NOW(),'$product_status')";
        $result_query = mysqli_query($con, $insert_products);
        if($result_query){
            echo "<script>alert('Product Inserted Successfully')</script>";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Product-Admin Dashboard</title>
     <!-- bootstrap link -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- css file -->
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
        body{
            background-color: #f7fee7;
        }
        .formBlock{
            background-color: #bbd6fc;
            width: 50%;

        }
        .btn_insert{
            background-color: #9c4186;
            color: white;
        }
        .btn_insert:hover{
            background-color: #f56ed4;
            color:black
        }
        @media only screen and (max-width: 990px) {
            .container{
                width: 100%;
                padding: 0px;
            }
            .formBlock{
                padding: 0px;
                margin: 0px;
               width: 80%;
               
            }
           
        }
    </style>
</head>

<body>
    <div class="container mt-3">
        <h1 class="text-center mb-3">Insert Product</h1>
        <!-- INSERT PRODUCT FORM -->
        <div class="formBlock border border-secondary mx-auto p-4 rounded-3 ">

        <form action="" method="post" enctype="multipart/form-data">
            <!-- Product title -->
            <div class="form-outline mb-4 w-75 m-auto ">
                <label for="product_title" class="form-label"><b>Product title</b></label>
                <input type="text" name="product_title" id="product-title" class="form-control" placeholder="Enter Product title" autocomplete="off" required="required">
            </div>
             <!-- Product description -->
             <div class="form-outline mb-4 w-75 m-auto">
                <label for="description" class="form-label"><b>Description</b></label>
                <input type="text" name="description" id="description" class="form-control" placeholder="Enter Product description" autocomplete="off" required="required">
            </div>
             <!-- Product keyword -->
             <div class="form-outline mb-4 w-75 m-auto">
                <label for="product_keywords" class="form-label"><b>Product Keyword</b></label>
                <input type="text" name="product_keywords" id="product_keywords" class="form-control" placeholder="Enter Product keywords" autocomplete="off" required="required">
            </div>
            <!-- categories -->
            <div class="form-outline mb-4 w-75 m-auto">
               <select name="product_category" class="form-select">
                <option value="">Select a Category</option>

                <!-- dynamically showing category in Select category -->
                <?php
                $select_query="Select * from `categories`";
                $result_query=mysqli_query($con,$select_query);
                while($row=mysqli_fetch_assoc($result_query)){
                    $category_title = $row["category_title"];
                    $category_id = $row["category_id"];
                    echo "<option value='$category_id'>$category_title</option>";
                }
                ?>
               </select>
            </div>

             <!-- Brands -->
             <div class="form-outline mb-4 w-75 m-auto">
               <select name="product_brands" class="form-select">
                <option value="">Select a Brands</option>
                 <!-- dynamically showing Brands in Select Brands -->
                 <?php
                $select_query="Select * from `brands`";
                $result_query=mysqli_query($con,$select_query);
                while($row=mysqli_fetch_assoc($result_query)){
                    $brand_title = $row["brand_title"];
                    $brand_id = $row["brand_id"];
                    echo "<option value='$brand_id'>$brand_title</option>";
                }
                ?>
               </select>
            </div>

            <!-- Image 1-->
            <div class="form-outline mb-4 w-75 m-auto">
                <label for="product_image1" class="form-label"><b>Product Image 1</b></label>
                <input type="file" name="product_image1" id="product_image1" class="form-control" required="required">
            </div>
            <!-- Image 2-->
            <div class="form-outline mb-4 w-75 m-auto">
                <label for="product_image2" class="form-label"><b>Product Image 2</b></label>
                <input type="file" name="product_image2" id="product_image2" class="form-control" required="required">
            </div>
            <!-- Image 3-->
            <div class="form-outline mb-4 w-75 m-auto">
                <label for="product_image3" class="form-label"><b>Product Image 3</b></label>
                <input type="file" name="product_image3" id="product_image3" class="form-control" required="required">
            </div>

               <!-- Product Price -->
            <div class="form-outline mb-4 w-75 m-auto">
                <label for="product_price" class="form-label"><b>Product Price</b></label>
                <input type="text" name="product_price" id="product_price" class="form-control" placeholder="Enter Product Price" autocomplete="off" required="required">
            </div>
            <!-- Product Submit -->
            <div class="form-outline mb-2 w-75 m-auto">
                <input type="submit" name="insert_product" class="btn btn_insert " value="Insert Product">
            </div>
        </form>
        </div>
        
    </div>
</body>
</html>