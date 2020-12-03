<?php
if (isset($_SESSION['userId'])) {
    echo '<p class="login-status">You are logged in!</p>';
}
else {
    header("Location: ../index.php");
}
?>


<?php
    include 'header.php';
?>

<?php
    include 'footer.php';
?>