<?php
include 'layouts/header.php';
include 'models/User.php';

$user = new User();
$users = $user->index();
?>

<h2>Daftar Pengguna</h2>

<table class="table table-striped table-bordered">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Role</th>
            <th scope="col">Created At</th>
            <th scope="col">Updated At</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($users as $key => $user): ?>
            <tr>
                <td>
                    <?= $key + 1 ?>
                </td>
                <td>
                    <?= $user['name'] ?>
                </td>
                <td>
                    <?= $user['email'] ?>
                </td>
                <td>
                    <?= $user['role'] ?>
                </td>
                <td>
                    <?= $user['created_at'] ?>
                </td>
                <td>
                    <?= $user['updated_at'] ?>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>


<?php include 'layouts/footer.php' ?>