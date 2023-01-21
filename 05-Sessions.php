<?php
session_start();
?>

<div>
    <h1>
        <?php
            if (isset($_SESSION['username'])) {
                echo "Welcome, ${_SESSION['username']}";
            } else {
                echo "Welcome, Unknown Stranger Guest!";
            }
        ?>
    </h1>
    
    <form action="extras/logout.php">
            <button type="submit">Logout Now</button>
    </form>

</div>