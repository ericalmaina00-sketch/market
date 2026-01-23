<?php include 'header.php'; ?>
<h1>Live Marketplace</h1>
<div style="display: grid; grid-template-columns: repeat(auto-fill, minmax(280px, 1fr)); gap: 20px;">
<?php
$res = $conn->query("SELECT * FROM products WHERE status='active' ORDER BY id DESC");
while($row = $res->fetch_assoc()) {
    $img = !empty($row['image_path']) ? $row['image_path'] : 'https://via.placeholder.com/200';
    $cleanNum = preg_replace('/[^0-9]/', '', $row['contact_info']);
    echo "<div class='product-card'>";
    echo "<img src='$img' style='width:100%; height:200px; object-fit:cover;'>";
    echo "<div style='padding:15px;'><h3>".htmlspecialchars($row['product_name'])."</h3>";
    echo "<p style='color:green; font-weight:bold;'>KES ".number_format($row['price'],2)."</p>";
    echo "<p>".htmlspecialchars($row['description'])."</p></div>";
    if(strlen($cleanNum) >= 9) {
        echo "<a href='https://wa.me/$cleanNum' target='_blank' style='background:#25D366; color:white; text-align:center; padding:10px; text-decoration:none;'>Chat on WhatsApp</a>";
    }
    echo "</div>";
}
?>
</div></div></body></html>
