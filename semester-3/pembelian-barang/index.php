<?php
include 'layouts/header.php';
include 'models/Product.php';

$product = new Product();
$products = $product->index()
	?>

<h2>Daftar Produk</h2>

<div class="row">
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