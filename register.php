<?php
include 'db.php';
if(isset($_POST['register'])){
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
    $stmt = $conn->prepare("INSERT INTO users(username, password) VALUES (?, ?)");
    $stmt->bind_param("ss", $username, $password);
    if($stmt->execute()){
        echo "<p style='color:green;'>Registered successfully! <a href='index.php'>Login</a></p>";
    } else {
        echo "<p style='color:red;'>Error: username exists!</p>";
    }
}
?>
<!DOCTYPE html>
<html>
<head><title>Register</title><link rel="stylesheet" href="styles.css"></head>
<body>
<?php include 'header.php'; ?>
<div class="form-container">
<h2>Register</h2>
<form method="POST">
<input type="text" name="username" placeholder="Username" required><br>
<input type="password" name="password" placeholder="Password" required><br>
<button type="submit" name="register">Register</button>
</form>
</div>
<?php include 'footer.php'; ?>
</body>
</html>