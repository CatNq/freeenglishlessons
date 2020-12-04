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
        <div>
            <div class="card col">
                <img src="img/logo-1.png" alt="Avatar" style="width:100%">
                <div>
                    <h4><b>test</b></h4>
                    <p>Course-1</p>
                </div>
            </div>
            <div class="card col">
                <img src="img/logo-1.png" alt="Avatar" style="width:100%">
                <div>
                    <h4><b>test</b></h4>
                    <p>Course-1</p>
                </div>
            </div>
        </div>
   </section>

</main>

<?php
    include 'footer.php';
?>