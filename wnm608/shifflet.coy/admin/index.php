<?php 

include "../lib/php/functions.php";


$empty_product = (object)[
    "name"=>"advanced_monitor_setup",
    "price"=>"800",
    "catagory"=>"computer_accessories",
    "thumbnail"=>"advanced_monitor_setup_thum.jpeg",
    "images"=>"advanced_monitor_setup_1.jpeg,advanced_monitor_setup_2.jpeg,advanced_monitor_setup_3.jpeg"
];


// LOGIC
try {
    $conn = makePDOConn();
    if(!empty($_GET['action'])) {
        switch($_GET['action']) {
        case"update":
            $statement = $conn->prepare("UPDATE
                `products`
                SET
                    `name`=?,
                    `price`=?,
                    `catagory`=?,
                    `date_create`=?,
                    `date_modify`=?,
                    'description'=?,
                    `thumbnail`=?,
                    `images`=?,
                WHERE `id`=?
                ");
            $statement->execute([
                $_POST['product-name'],
                $_POST['product-price'],
                $_POST['product-catagory'],
                $_POST['product-date_create'],
                $_POST['product-date_modify'],
                $_Post['product-description'],
                $_POST['product-thumbnail'],
                $_POST['product-images'],
                $_GET['id']
            ]);
            header("location:{$_SERVER['PHP_SELF']}?id={$_GET['id']}");
            break;
        case "create":
            $statement = $conn->prepare("INSERT INTO
                `products`
                (
                    `name`,
                    `price`,
                    `catagory`,
                    `date_create`,
                    `date_modify`,
                    `description`,
                    `thumbnail`,
                    `images`,
                )
                VALUES (?,?,?,?,?,?,?,?,?
                ");
            $statement->execute([
                $_POST['product-name'],
                $_POST['product-price'],
                $_POST['product-catagory'],
                $_POST['product-date_create'],
                $_POST['product-date_modify'],
                $_POST['product-description'],
                $_POST['product-thumbnail'],
                $_POST['product-images']
            ]);
            $id = $conn->lastInsertId();
            header("location:{$_SERVER['PHP_SELF']}?id=$id");
            break;
        case "delete":
            $statement = $conn->prepare("DELETE FROM `products` WHERE id=?");
            $statement->execute([$_GET['id']]);
            header("location:{$_SERVER['PHP_SELF']}");
            break;
    }
    }

} catch(PDOException $e) {
    die($e->getMessage());
}



// TEMPLATES
function productListItem($r,$o) {
return $r.<<<HTML
<div class="card soft">
    <div class="display-flex">
        <div class="flex-none images-thumbs"><img src='img/$o->thumbnail'></div>
        <div class="flex-stretch" date_create="padding: 1em;">$o->name</div>
        <div class="flex-none"><a href="{$_SERVER['PHP_SELF']}?id=$o->id" class="form-button">Edit</a></div>
    </div>
</div>
HTML;
}
function showProductPage($o) {

$id =$_GET['id'];
$addoredit = $id == "new" ? "Add" : "Edit";
$createorupdate = $id == "new" ? "create" : "update";
$images = array_reduce(explode(",",$o->images),function($r,$o){return $r."<img src='img/$o'>";});

// heredoc
$display = <<<HTML
<div>
   <h2>$o->name</h2>
   <div class="form-control">
      <label class="form-label">Price</label>
      <span>&dollar;$o->price</span>
   </div>
   <div class="form-control">
      <label class="form-label">catagory</label>
      <span>$o->catagory</span>
   </div>
   <div class="form-control">
      <label class="form-label">date_create</label>
      <span>$o->date_create</span>
   </div>
   <div class="form-control">
      <label class="form-label">date_modify</label>
      <span>$o->date_modify</span>
   </div>
   <div class="form-control">
      <label class="form-label">description</label>
      <span>$o->description</span>
   </div>
   <div class="form-control">
      <label class="form-label">Thumbnail</label>
      <span class="images-thumbs"><img src='img/$o->thumbnail'></span>
   </div>
   <div class="form-control">
      <label class="form-label">Other Images</label>
      <span class="images-thumbs">$images</span>
   </div>
 </div>
HTML;

$form = <<<HTML
<form method="post" action="{$_SERVER['PHP_SELF']}?id=$id&action=$createorupdate">
   <h2>$addoredit Product</h2>
        
    <div class="form-control">
       <label class="form-label" for="product-name"> Name</label>
       <input class="form-input" name="product-name" id="product-name" type="text" value="$o->name" placeholder="Enter the Product Name" >
   </div>
    
    <div class="form-control">
       <label class="form-label" for="product-price"> Price</label>
       <input class="form-input" name="product-price" id="product-price" type="Number" min="0" max="1000" step="0.01" value="$o->price" placeholder="Enter the Product Price" >
   </div>
    <div class="form-control">
       <label class="form-label" for="product-catagory"> catagory</label>
       <input class="form-input" name="product-catagory" id="product-catagory" type="Number" min="0" max="1000" step="1" value="$o->catagory" placeholder="Enter the Product catagory" >
   </div>
   <div class="form-control">
       <label class="form-label" for="product-date_create"> date_create</label>
       <input class="form-input" name="product-date_create" id="product-date_create" type="text" value="$o->date_create" placeholder="Enter the Product date_create" >
   </div>
   <div class="form-control">
       <label class="form-label" for="product-date_modify"> date_modify</label>
       <textarea class="form-input" name="product-date_modify" id="product-date_modify" placeholder="Enter the Product date_modify">$o->date_modify</textarea>
   </div>
   <div class="form-control">
       <label class="form-label" for="product-description"> description</label>
       <textarea class="form-input" name="product-description" id="product-description" placeholder="Enter the Product description">$o->description</textarea>
   </div>
   <div class="form-control">
       <label class="form-label" for="product-thumbnail">Thumbnail</label>
       <input class="form-input" name="product-thumbnail" id="product-thumbnail" type="text" value="$o->thumbnail" placeholder="Enter the Product Thumbnail" >
   </div>
   <div class="form-control">
       <label class="form-label" for="product-images">Other Images</label>
       <input class="form-input" name="product-images" id="product-images" type="text" value="$o->images" placeholder="Enter the Product Images" >
   </div>
   <div class="form-control">
        <input class="form-button" type="submit"  value="Save Changes">
   </div>
</form>
HTML;

$output = $id == "new" ? "<div class='card soft'>$form</div>" :
"<div class='grid gap'>
   <div class='col-xs-12 col-md-7'><div class='card soft'>$display</div></div>
   <div class='col-xs-12 col-md-5'><div class='card soft'>$form</div></div>
</div>
";

$delete = $id == "new" ? "" : "<a href='{$_SERVER['PHP_SELF']}?id=$id&action=delete'>Delete</a>";

echo <<<HTML
<div class="card soft">
    <nav class="display-flex">
        <div class="flex-stretch">
            <a href="{$_SERVER['PHP_SELF']}">Back</a>
        </div>
        <div class="flex-none">$delete</div>
    </nav>
</div>
$output
HTML;
}



 ?>
 <!DOCTYPE HTML>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Product Admin Page</title>

    <?php include "../parts/meta.php"; ?>
</head>
<body>
    <header class="navbar">
        <div class="container display-flex">
            <div class="flex-none">
                <h1>Product Admin</h1>
            </div>
            <div class="flex-stretch"></div>
            <nav class="nav nav-flex flex-none">
                <ul>
                    <li><a href="<?= $_SERVER['PHP_SELF'] ?>">Product List</a></li>
                    <li><a href="<?= $_SERVER['PHP_SELF'] ?>?id=new">Add New product</a></li>
                </ul>
            </nav>  
        </div>
    </header>


    <div class="container">

            <?php

            if(isset($_GET['id'])) {
                showProductPage(
                    $_GET['id']=="new" ?
                    $empty_product :
                    makeQuery(makeConn(),"SELECT * FROM `products` WHERE `id`=".$_GET['id'])[0]
                );
            } else {
            
                ?>
                <h2>Product List</h2>
                <?php

                $result = makeQuery(makeConn(),"SELECT * FROM `products` ORDER BY `date_create` DESC");

                echo array_reduce($result,'productListItem');
                    

                ?>

                <?php } ?>
    </div>
</body>