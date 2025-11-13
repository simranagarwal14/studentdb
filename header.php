<header>
    <h1>BCA Student Portal</h1>
    <nav>
        <a href="about.php">About</a> |
        <?php if(isset($_SESSION['user'])): ?>
            <a href="dashboard.php">Dashboard</a> |
            <a href="logout.php">Logout</a>
        <?php else: ?>
            <a href="index.php">Login</a> |
            <a href="register.php">Register</a>
        <?php endif; ?>
    </nav>
</header>
<hr>