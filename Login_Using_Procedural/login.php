<?php include_once __DIR__ . '/header.php'; ?>

<section class="signup-form">
    <div class="container d-flex justify-content-center align-items-center min-vh-100">
        <div class="card p-4 shadow-lg w-50">
            <h2 class="text-center mb-4">Login</h2>
            <form action="includes/login.inc.php" method="post">
                <div class="mb-3">
                    <input type='text' class="form-control" name="log" placeholder="username/email..">
                </div>
                <div class="mb-3">
                    <input type='password' class="form-control" name="pwd" placeholder="Password...">
                </div>

                <button type="submit" name="login_button" class="btn btn-success w-100">Log in</button>
            </form>
            <div class="message mt-3 text-center">
                <?php
                if (isset($_GET['error'])) {
                    if ($_GET['error'] == "emptyinput") {
                        echo '<p> fill in all fields! </p>';
                    } else if ($_GET['error'] == "wronglogin") {
                        echo "<p>Incorrect Login information!</p>";
                    }
                }

                ?>

            </div>
        </div>
    </div>
</section>

<?php include_once __DIR__ . '/footer.php'; ?>