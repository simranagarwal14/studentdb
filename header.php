<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Get the current page filename
$current_page = basename($_SERVER['PHP_SELF']);
?>

<header>
    <h1>BCA Student Portal</h1>
    <nav>
        <a href="about.php">About</a> |
        <a href="dashboard.php">Dashboard</a> |

        <?php
        // Show Register on login page, Login on register page
        if($current_page == 'index.php') {
            echo '<a href="register.php">Register</a>';
        } elseif($current_page == 'register.php') {
            echo '<a href="index.php">Login</a>';
        }
        ?>
    </nav>
</header>
<hr>
 
