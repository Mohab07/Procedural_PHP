<?php include_once __DIR__ . '/header.php'; ?>

<section class="signup-form">
    <div class="container d-flex justify-content-center align-items-center min-vh-100">
        <div class="card p-5 shadow-lg w-50 border-0">
            <h2 class="text-center mb-4 text-primary">Sign Up</h2>
            <form action="includes/signup.inc.php" method="post">
                <div class="mb-3">
                    <label for="name" class="form-label">Full Name</label>
                    <input type="text" class="form-control" id="name" name="Name" placeholder="Enter your full name">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email address">
                </div>
                <div class="mb-3">
                    <label for="uid" class="form-label">Username</label>
                    <input type="text" class="form-control" id="uid" name="uid" placeholder="Choose a username">
                </div>
                <div class="mb-3">
                    <label for="pwd" class="form-label">Password</label>
                    <input type="password" class="form-control" id="pwd" name="pwd" placeholder="Choose a password">
                </div>
                <div class="mb-3">
                    <label for="pwdrepeat" class="form-label">Confirm Password</label>
                    <input type="password" class="form-control" id="pwdrepeat" name="pwdrepeat" placeholder="Repeat your password">
                </div>
                <button type="submit" name="submit_button" class="btn btn-success w-100">Sign Up</button>
            </form>

            <div class="text-center mt-3">
                <small>Already have an account? <a href="login.php" class="text-decoration-none">Log in</a></small>
            </div>

            <div class="message mt-3 text-center">
                <?php
                if (isset($_GET['error'])) {
                    if ($_GET['error'] == "emptyinput") {
                        echo '<p class="text-danger">Please fill in all fields!</p>';
                    } else if ($_GET['error'] == "invaliduid") {
                        echo "<p class='text-danger'>Choose a proper username!</p>";
                    } else if ($_GET['error'] == "invalidemail") {
                        echo "<p class='text-danger'>Choose a valid email!</p>";
                    } else if ($_GET['error'] == "passworddontmatch") {
                        echo "<p class='text-danger'>Passwords don't match!</p>";
                    } else if ($_GET['error'] == "stmtfailed") {
                        echo "<p class='text-danger'>Something went wrong, please try again later!</p>";
                    } else if ($_GET['error'] == "usernametaken") {
                        echo "<p class='text-danger'>Username is already taken!</p>";
                    } else if ($_GET['error'] == "none") {
                        echo "<p class='text-success'>You have signed up successfully!</p>";
                    }
                }
                ?>
            </div>
        </div>
    </div>
</section>

<?php include_once __DIR__ . '/footer.php'; ?>