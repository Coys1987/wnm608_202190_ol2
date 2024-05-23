<?php 

include_once "lib/php/functions.php";
include_once "parts/templates.php";

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product List</title>

    <link rel="stylesheet" href="./lib/css/styleguide.css">
    <link rel="stylesheet" href="./lib/css/gridsystem.css">
    <link rel="stylesheet" href="./css/storetheme.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

    <?php include "parts/meta.php"; ?>

    <script src="lib/js/functions.js"></script>
    <script src="js/templates.js"></script>
    <script src="js/product_list.js"></script>
</head>
<body>

    <?php include "parts/navbar.php"; ?>

    <div class="container">
        <h2>Product List</h2>

        <div class="form-control">
            <form class="hotdog light" id="product_search">
                <input type="search" placeholder="Search Products">
            </form>
        </div>
        <div class="form-control">
            <div class="card soft">
            <div class="display-flex flex-wrap">
                <div class="flex-stretch display-flex">
                    <div class="flex-none">
                        <button type="category" data-value="all" type="button" class="form-button">All</button>
                    </div>
                    <div class="flex-none">
                        <button data-filter="category" data-value="laptops_&_computer" type="button" class="form-button">Laptops & Computers</button>
                    </div>
                    <div class="flex-none">
                        <button data-filter="category" data-value="office_furniture" type="button" class="form-button">Office Furniture</button>
                    </div>
                    <div class="flex-none">
                        <button data-filter="category" data-value="kitchen_appliances" type="button" class="form-button">Kitchen Appliances</button>
                    </div>
                    <div class="flex-none">
                        <button data-filter="category" data-value="audio_equipment" type="button" class="form-button">Audio Equipment</button>
                    </div>
                </div>
                <div class="flex-none">
                    <div class="form-select">
                        <select class="js-sort">
                            <option value="1">Newest</option>
                            <option value="2">Oldest</option>
                            <option value="3">Least Expensive</option>
                            <option value="4">Most Expensive</option>
                        </select>
                    </div>
                </div>
            </div>
            </div>
        </div>

        <div class='productlist grid gap'></div>
    </div>
    
</body>
</html>
