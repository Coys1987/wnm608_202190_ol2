<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
    <link rel="stylesheet" href="../lib/css/styleguide.css">
	<link rel="stylesheet" href="../css/gridsystem.css">
	<link rel="stylesheet" href="../css/storetheme.css">

    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
</head>
<body>
    <header class="navbar">
		<div class="container display-flex">
			<div class="flex-none">
                <img class="navlogo" src="../img/logo.png" alt="Logo">
				<h1>Product List</h1>
            </div>
			<div class="flex-stretch"></div>
			<nav class="nav nav-flex flex-none">
				<ul>
					<li><a href="#index.html">Home</a></li>
					<li><a href="#product_list.php">Shop</a></li>
				</ul>
			</nav>
		</div>
	</header>
	<div class="container">
		<div class="card soft">
			<h2>Product List</h2>

			<ul>
				<li><a href="product_item.php?id=1">Product 1</a></li>
				<li><a href="product_item.php?id=2">Product 2</a></li>
				<li><a href="product_item.php?id=3">Product 3</a></li>
				<li><a href="product_item.php?id=4">Product 4</a></li>
			</ul>
		</div>
	</div>
<h2 class="figure.product"></h2>

	<div class="grid gap" id="popularGrid">
		<div class="col-xs-12 col-md-3">
			<figure class="figure.product">

				<a href="product_item.php?id=1">
				<div class="overlay">
					<img src="" alt="">
					<div class="overlayInfo">
						<p>Details</p>
					</div>
				</div>
				</a>

				<figcaption>
					<div>Name</div>
					<div class="productIntro">Name of Product</div>
					<div>Price</div>
				</figcaption>
			</figure>
		</div>
	<div class="col-xs-12 col-md-3">
		<figure class="figure.product">

			<a href="product_item.php?id=1">
			<div class="overlay">
				<img src="" alt="">
				<div class="overlayInfo">
					<p>Details</p>
				</div>
			</div>
			</a>

			<figcaption>
				<div>Name</div>
				<div class="productIntro">Name of Product</div>
				<div>Price</div>
			</figcaption>
		</figure>
	</div>
	<div class="col-xs-12 col-md-3">
		<figure class="figure.product">

			<a href="product_item.php?id=1">
			<div class="overlay">
				<img src="" alt="">
				<div class="overlayInfo">
					<p>Details</p>
				</div>
			</div>
			</a>

			<figcaption>
				<div>Name</div>
				<div class="productIntro">Name of Product</div>
				<div>Price</div>
			</figcaption>
		</figure>
	</div>
	<div class="col-xs-12 col-md-3">
		<figure class="figure.product">

			<a href="product_item.php?id=1">
			<div class="overlay">
				<img src="" alt="">
				<div class="overlayInfo">
					<p>Details</p>
				</div>
			</div>
			</a>

			<figcaption>
				<div>Name</div>
				<div class="productIntro">Name of Product</div>
				<div>Price</div>
			</figcaption>
		</figure>
	</div>

</div>
</body>
</ul>
</nav>
</div>
</header>