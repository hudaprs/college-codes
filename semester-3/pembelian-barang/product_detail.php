<?php
include 'layouts/header.php';
include 'models/Product.php';

$product = new Product();
$productDetail = $product->show($_GET['id'])
    ?>

<h2>Detail Produk</h2>

<div class="row">
    <div class="card col mb-4" style="width: 18rem;">
        <div style="text-align: center; padding-top: 20px; padding-bottom: 20px;">
            <img src="./images/<?= $productDetail['image'] ?>" class="card-img-top"
                style="object-fit: cover; width: 200px; height: 200px; display: inline-block">
        </div>
        <div class="card-body">
            <h5 class="card-title">
                <?= $productDetail['name'] ?>
            </h5>
            <p class="card-text">
            <ul class="list-group">
                <li class="list-group-item">
                    Deskripsi:
                    <?= $productDetail['description'] ?>
                </li>
                <li class="list-group-item">
                    Harga:
                    <?= $productDetail['price'] ?>
                </li>
                <li class="list-group-item">
                    Stock:
                    <?= $productDetail['stock'] ?>
                </li>
            </ul>
            </p>

            <br />

            <?php if (isset($_SESSION['role']) && $_SESSION['role'] === 'User'): ?>
                <a class="btn btn-success" href="transaction.php?product_id=<?= $productDetail['id'] ?>">
                    Beli
                </a>
            <?php endif; ?>

            <a class="btn btn-primary" href="index.php">
                Kembali Ke Produk List
            </a>
        </div>
    </div>
</div>



<?php include 'layouts/footer.php' ?>