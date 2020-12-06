<?php
    while (isset($_SESSION['userId'])) {
        continue;
    }
?>

<?php
    include 'header.php';
?>

<main>
    <section class="container row bg-light">
        <ul>
            <li>
                <div class="card col">
                    <img src="img/logo-1.png" alt="Avatar" style="width:100%">
                    <div>
                        <a href="courses/ReadingAZTheAlphabet.php">Reading AZ - The Alphabet</a>
                    </div>
                </div>
            </li>
        </ul>
   </section>
</main>

<?php
    include 'footer.php';
?>