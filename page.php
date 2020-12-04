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
            <div class="card col">
                <img src="img/logo-1.png" alt="Avatar" style="width:50%">
                <div>
                    <h4><b>test</b></h4>
                    <p>Course-1</p>
                    <form action="includes/getcourse.inc.php">
                        <button type="submit-takecourse" name="take-course">Take this course</button>
                    </form>
                </div>
            </div>
            <div class="card col">
                <img src="img/logo-1.png" alt="Avatar" style="width:50%">
                <div>
                    <h4><b>test</b></h4>
                    <p>Course-1</p>
                </div>
            </div>
            <div class="card col">
                <img src="img/logo-1.png" alt="Avatar" style="width:50%">
                <div>
                    <h4><b>test</b></h4>
                    <p>Course-1</p>
                </div>
            </div>
            <div class="card col">
                <img src="img/logo-1.png" alt="Avatar" style="width:50%">
                <div>
                    <h4><b>test</b></h4>
                    <p>Course-1</p>
                </div>
            </div>
   </section>

</main>

<?php
    include 'footer.php';
?>