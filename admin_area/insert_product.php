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
                <label for="" class="form-label"><b>Product title</b></label>
                <input type="text" name="product-title" id="product-title" class="form-control" placeholder="Enter Product title" autocomplete="off" required="required">
            </div>
             <!-- Product description -->
             <div class="form-outline mb-4 w-75 m-auto">
                <label for="" class="form-label"><b>Description</b></label>
                <input type="text" name="description" id="description" class="form-control" placeholder="Enter Product description" autocomplete="off" required="required">
            </div>
             <!-- Product keyword -->
             <div class="form-outline mb-4 w-75 m-auto">
                <label for="" class="form-label"><b>Product Keyword</b></label>
                <input type="text" name="keywords" id="product_keywords" class="form-control" placeholder="Enter Product keywords" autocomplete="off" required="required">
            </div>
            <!-- categories -->
            <div class="form-outline mb-4 w-75 m-auto">
               <select name="product_category" class="form-select">
                <option value="">Select a Category</option>
                <option value="">Category 1</option>
                <option value="">Category 2</option>
                <option value="">Category 3</option>
                <option value="">Category 4</option>
               </select>
            </div>

             <!-- Brands -->
             <div class="form-outline mb-4 w-75 m-auto">
               <select name="product_brands" class="form-select">
                <option value="">Select a Brands</option>
                <option value="">brands 1</option>
                <option value="">brands 2</option>
                <option value="">brands 3</option>
                <option value="">brands 4</option>
               </select>
            </div>

            <!-- Image 1-->
            <div class="form-outline mb-4 w-75 m-auto">
                <label for="" class="form-label"><b>Product Image 1</b></label>
                <input type="file" name="Product_Image1" id="Product_Image1" class="form-control" required="required">
            </div>
            <!-- Image 2-->
            <div class="form-outline mb-4 w-75 m-auto">
                <label for="" class="form-label"><b>Product Image 2</b></label>
                <input type="file" name="Product_Image2" id="Product_Image2" class="form-control" required="required">
            </div>
            <!-- Image 3-->
            <div class="form-outline mb-4 w-75 m-auto">
                <label for="" class="form-label"><b>Product Image 3</b></label>
                <input type="file" name="Product_Image3" id="Product_Image3" class="form-control" required="required">
            </div>

               <!-- Product Price -->
            <div class="form-outline mb-4 w-75 m-auto">
                <label for="" class="form-label"><b>Product Price</b></label>
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