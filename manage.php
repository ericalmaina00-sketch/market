<?php include 'header.php'; session_start();
if(!isset($_SESSION['seller_id'])) header("Location: login.php");
if(isset($_GET['sold_id'])) {
    $conn->query("UPDATE products SET status='sold' WHERE id=".$_GET['sold_id']." AND seller_id=".$_SESSION['seller_id']);
}
echo "<h2>My Products</h2>";
$res = $conn->query("SELECT * FROM products WHERE seller_id=".$_SESSION['seller_id']);
while($row = $res->fetch_assoc()) {
    echo "<p>".$row['product_name']." - ".$row['status']." ";
    if($row['status'] == 'active') echo "<a href='manage.php?sold_id=".$row['id']."'>[Mark Sold]</a>";
    echo "</p>";
} ?>
</div></body></html>
