<?php include 'header.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user = $_POST['username']; $email = $_POST['email'];
    $pass = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $stmt = $conn->prepare("INSERT INTO sellers (username, email, password) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $user, $email, $pass);
    if($stmt->execute()) echo "Success! <a href='login.php'>Login</a>";
} ?>
<h2>Seller Registration</h2>
<form method="post">
    <input type="text" name="username" placeholder="Full Name" required>
    <input type="email" name="email" placeholder="Email" required>
    <input type="password" name="password" placeholder="Password" required>
    <button type="submit">Register</button>
</form></div></body></html>
