<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>

    <link href="./assets/bootstrap.min.css" rel="stylesheet" />
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary bg-dark mb-4" data-bs-theme="dark">
        <div class="container">
            <a class="navbar-brand" href="#">Pengorderan Barang</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Produk</a>
                    </li>
                    <?php if (isset($_SESSION['role']) && $_SESSION['role'] === 'User'): ?>
                        <li class="nav-item">
                            <a class="nav-link" href="transaction.php">Transaksi Anda</a>
                        </li>
                    <?php endif; ?>

                    <?php if (isset($_SESSION['role']) && $_SESSION['role'] === 'Admin'): ?>
                        <li class="nav-item">
                            <a class="nav-link" href="users.php">Daftar Pengguna</a>
                        </li>
                    <?php endif; ?>
                </ul>
            </div>
            <?php if (!isset($_SESSION['logged_in'])): ?>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="_login.php?role=User">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="_login.php?role=Admin">Login Sebagai Admin</a>
                    </li>
                </ul>
            <?php endif; ?>

            <?php if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === 1): ?>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="_logout.php">Logout</a>
                    </li>
                </ul>
            <?php endif; ?>
        </div>
    </nav>

    <div class="container">