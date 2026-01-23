<?php include 'header.php'; session_start();
if(!isset($_SESSION['seller_id'])) header("Location: login.php");
if($_SERVER["REQUEST_METHOD"] == "POST") {
    $target = "uploads/" . time() . "_" . basename($_FILES["p_image"]["name"]);
    if(move_uploaded_file($_FILES["p_image"]["tmp_name"], $target)) {
        $stmt = $conn->prepare("INSERT INTO products (seller_id, product_name, price, contact_info, description, image_path) VALUES (?,?,?,?,?,?)");
        $stmt->bind_param("isdsss", $_SESSION['seller_id'], $_POST['name'], $_POST['price'], $_POST['contact'], $_POST['desc'], $target);
        $stmt->execute();
        echo "Product Listed!";
    }
} ?>
<h2>Add Product</h2>
<form method="post" enctype="multipart/form-data">
    <input type="text" name="name" placeholder="Name" required>
    <input type="number" step="0.01" name="price" placeholder="Price" required>
    <input type="text" name="contact" placeholder="Phone" required>
    <textarea name="desc" placeholder="Description"></textarea>
    <input type="file" name="p_image" required>
    <button type="submit">Publish</button>
</form></div></body></html>
