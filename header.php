<?php include 'db.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style.css">
    <title>Eric Marketplace</title>
</head>
<body>
<nav>
    <a href="index.php" style="color:white; font-weight:bold;">Marketplace</a>
    <div style="flex-grow:1; display:flex; gap:20px;">
        <a href="upload.php">+ Add Product</a>
        <a href="manage.php">Manage Inventory</a>
    </div>
    <div style="display:flex; gap:20px;">
        <a href="register.php" style="color:#60a5fa;">Register</a>
        <a href="login.php">Login</a>
        <a href="logout.php" style="color:#f87171;">Logout</a>
    </div>
</nav>
<div class="container">
