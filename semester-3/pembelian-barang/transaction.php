<?php
include 'layouts/header.php';
include 'models/Transaction.php';
include 'models/Product.php';

$newProduct;
$transaction = new Transaction();
$transactions = $transaction->index();

$productId = array_key_exists("product_id", $_GET) ? $_GET['product_id'] : false;

if ($productId) {
    $product = new Product;
    $productDetail = $product->show($productId);
    $transactions = $transaction->store([
        'id' => 2,
        'product_name' => $productDetail['name'],
        'product_description' => $productDetail['description'],
        'product_price' => $productDetail['price'],
        'product_image' => $productDetail['image'],
        'status' => 'Draft',
        'quantity' => 1,
        'user_id' => 1,
        'created_at' => '2023-07-04',
        'updated_at' => '2023-07-04'
    ]);
}
?>

<h2>Transaksi Anda</h2>

<a class="btn btn-primary mb-4" href="index.php">
    Kembali Ke Produk List
</a>

<?php foreach ($transactions as $transaction): ?>
    <div class="row">
        <div class="card col mb-2" style="width: 18rem;">
            <div style="text-align: center; padding-top: 20px; padding-bottom: 20px;">
                <img src="./images/<?= $transaction['product_image'] ?>" class="card-img-top"
                    style="object-fit: cover; width: 200px; height: 200px; display: inline-block">
            </div>
            <div class="card-body">
                <h5 class="card-title">
                    <?= $transaction['product_name'] ?>
                </h5>
                <p class="card-text">
                <ul class="list-group">
                    <li class="list-group-item">
                        Deskripsi:
                        <?= $transaction['product_description'] ?>
                    </li>
                    <li class="list-group-item">
                        Harga:
                        <?= $transaction['product_price'] ?>
                    </li>
                    <li class="list-group-item">
                        Quantity:
                        <?= $transaction['quantity'] ?>
                    </li>
                    <li class="list-group-item">
                        Dipesan Pada:
                        <?= $transaction['created_at'] ?>
                    </li>
                </ul>
                </p>
                <div class="badge text-bg-success mb-4">
                    <?= $transaction['status'] === 'Submit' ? 'Sudah dipesan' : $transaction['status'] ?>
                </div>
            </div>
        </div>
    </div>
<?php endforeach; ?>



<?php include 'layouts/footer.php' ?>