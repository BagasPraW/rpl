<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>


</head>

<?php
session_start();

if (!isset($_SESSION['admin_logged_in'])) {
    header('location: login.php');
}
?>

<body>
    <?php include('layouts/header.php'); ?>
    <div class="container-fluid">
        <h1 class="h3 mb-2 text-gray-800">Create Product</h1>
        <nav class="mt-4 rounded" aria-label="breadcrumb">
            <ol class="breadcrumb px-3 py-2 rounded mb-4">
                <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="products.php">Products</a></li>
                <li class="breadcrumb-item active">Create Product</li>
            </ol>
        </nav>

        <div class="card shadow-mb4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Create Products</h6>
            </div>
        </div>

        <form class="user" id="create-form" method="POST" action="create_product.php">
            <div class="row">
                <div class="col">
                    <label for="" class="form-label">Product Name</label>
                    <input type="text" class="form-control" name="product_name">
                </div>
                <div class="col">
                    <label for="" class="form-label">Product Brand</label>
                    <input type="text" class="form-control " name="product_brand">
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <label for="" class="form-label">Category</label>
                    <input type="text" class="form-control " name="product_category">
                </div>
                <div class="col">
                    <label for="" class="form-label"> Description</label>
                    <textarea type="text" class="form-control " name="product_description" rows="3">
                </textarea>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label for="" class="form-label">Criteria</label>
                    <input type="text" class="form-control " name="product_criteria">
                </div>
                <div class="col">
                    <label for="" class="form-label">Criteria</label>
                    <input type="text" class="form-control " name="product_price">
                </div>
            </div>
            <div class="col">
                <label for="" class="form-label">Criteria</label>
                <input type="text" class="form-control " name="special_offer" placeholder="Special offer">
            </div>
            <div class="form-group">
                <input type="text" class="form-control " name="product_color" placeholder="Color">
            </div>
            <div class="form-group">
                <input type="text" class="form-control " name="product_image1" placeholder="Image 1">
            </div>
            <div class="form-group">
                <input type="text" class="form-control " name="product_image2" placeholder="Image 2">
            </div>
            <div class="form-group">
                <input type="text" class="form-control " name="product_image3" placeholder="Image 3">
            </div>
            <div class="form-group">
                <input type="text" class="form-control " name="product_image4" placeholder="Image 4">
            </div>
        </form>
    </div>

    <?php include('layouts/footer.php'); ?>
</body>

</html>