<?php include_once __DIR__ . '/header.php'; ?>

<section class="signup-form">
    <div class="container d-flex justify-content-center align-items-center min-vh-100">
        <div class="card p-5 shadow-lg w-50 border-0">
            <h2 class="text-center mb-4 text-primary">Login</h2>
            <form action="includes/login.inc.php" method="post">
                <div class="mb-3">
                    <label for="log" class="form-label">Username/Email</label>
                    <input type="text" class="form-control" id="log" name="log" placeholder="Enter your username or email">
                </div>
                <div class="mb-3">
                    <label for="pwd" class="form-label">Password</label>
                    <input type="password" class="form-control" id="pwd" name="pwd" placeholder="Enter your password">
                </div>
                <button type="submit" name="login_button" class="btn btn-success w-100">Log In</button>
            </form>

            <div class="text-center mt-3">
                <small>Don't have an account? <a href="signup.php" class="text-decoration-none">Sign up</a></small>
            </div>

            <div class="message mt-3 text-center">
                <?php
                if (isset($_GET['error'])) {
                    if ($_GET['error'] == "emptyinput") {
                        echo '<p class="text-danger">Please fill in all fields!</p>';
                    } else if ($_GET['error'] == "wronglogin") {
                        echo "<p class='text-danger'>Incorrect login information!</p>";
                    }
                }
                ?>
            </div>
        </div>
    </div>
</section>

<?php include_once __DIR__ . '/footer.php'; ?>