<?php include 'header.php'; session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $stmt = $conn->prepare("SELECT id, password FROM sellers WHERE email = ?");
    $stmt->bind_param("s", $_POST['email']);
    $stmt->execute();
    $row = $stmt->get_result()->fetch_assoc();
    if ($row && password_verify($_POST['password'], $row['password'])) {
        $_SESSION['seller_id'] = $row['id'];
        header("Location: manage.php");
    } else { echo "Invalid credentials."; }
} ?>
<h2>Login</h2>
<form method="post">
    <input type="email" name="email" placeholder="Email" required>
    <input type="password" name="password" placeholder="Password" required>
    <button type="submit">Login</button>
</form></div></body></html>
