<?php
include 'layouts/header.php';
include 'models/Product.php';

$product = new Product();
$products = $product->index()
	?>

<h2>Daftar Produk Rekomendasi</h2>

<div id="carouselExample" class="carousel carousel-dark slide mb-4">
	<div class="carousel-inner">
		<div class="carousel-item active">
			<img src="./images/clear.avif"
				style="object-fit: contain; width: 200px; height: 400px; display: inline-block; background-color: #f4f4f4;"
				class="d-block w-100">
		</div>
		<div class="carousel-item">
			<img src="./images/dettol.png"
				style="object-fit: contain; width: 200px; height: 400px; display: inline-block; background-color: #f4f4f4;"
				class="d-block w-100">
		</div>
		<div class="carousel-item">
			<img src="./images/sabun.png"
				style="object-fit: contain; width: 200px; height: 400px; display: inline-block; background-color: #f4f4f4;"
				class="d-block w-100">
		</div>
	</div>
	<button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
		<span class="carousel-control-prev-icon" aria-hidden="true"></span>
		<span class="visually-hidden">Previous</span>
	</button>
	<button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
		<span class="carousel-control-next-icon" aria-hidden="true"></span>
		<span class="visually-hidden">Next</span>
	</button>
</div>

<h2>Daftar Produk</h2>

<div class="row mb-4">
	<?php foreach ($products as $product): ?>
		<div class="card col me-4" style="width: 18rem;">
			<div style="text-align: center; padding-top: 20px; padding-bottom: 20px;">
				<img src="./images/<?= $product['image'] ?>" class="card-img-top"
					style="object-fit: cover; width: 200px; height: 200px; display: inline-block">
			</div>
			<div class="card-body">
				<h5 class="card-title">
					<?= $product['name'] ?>
				</h5>
				<p class="card-text">
				<ul class="list-group">
					<li class="list-group-item">
						Deskripsi:
						<?= $product['description'] ?>
					</li>
					<li class="list-group-item">
						Harga:
						<?= $product['price'] ?>
					</li>
					<li class="list-group-item">
						Stok:
						<?= $product['stock'] ?>
					</li>
				</ul>
				</p>
				<a href="product_detail.php?id=<?= $product['id'] ?>" class="btn btn-primary">Order</a>
			</div>
		</div>
	<?php endforeach; ?>
</div>



<?php include 'layouts/footer.php' ?>