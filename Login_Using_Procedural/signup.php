<?php include_once __DIR__ . '/header.php'; ?>

<section class="signup-form">
    <div class="container d-flex justify-content-center align-items-center min-vh-100">
        <div class="card p-4 shadow-lg w-50">
            <h2 class="text-center mb-4">Sign Up</h2>
            <form action="includes/signup.inc.php" method="post">
                <div class="mb-3">
                    <input type='text' class="form-control" name="Name" placeholder="Full Name...">
                </div>
                <div class="mb-3">
                    <input type='email' class="form-control" name="email" placeholder="E-mail...">
                </div>
                <div class="mb-3">
                    <input type='text' class="form-control" name="uid" placeholder="Username...">
                </div>
                <div class="mb-3">
                    <input type='password' class="form-control" name="pwd" placeholder="Password...">
                </div>
                <div class="mb-3">
                    <input type='password' class="form-control" name="pwdrepeat" placeholder="Rewrite Your Password...">
                </div>
                <button type="submit" name="submit_button" class="btn btn-success w-100">Sign Up</button>
            </form>
            <div class="message mt-3 text-center">
                <?php
                if (isset($_GET['error'])) {
                    if ($_GET['error'] == "emptyinput") {
                        echo '<p> fill in all fields! </p>';
                    } else if ($_GET['error'] == "invaliduid") {
                        echo "<p>choose a proper username!</p>";
                    } else if ($_GET['error'] == "invalidemail") {
                        echo "<p>choose a proper email!</p>";
                    } else if ($_GET['error'] == "passworddontmatch") {
                        echo "<p>Password don't match</p>";
                    } else if ($_GET['error'] == "stmtfailed") {
                        echo "<p>something went wrong try again later!.</p>";
                    } else if ($_GET['error'] == "usernametaken") {
                        echo "<p>username already taken!</p>";
                    } else if ($_GET['error'] == "none") {
                        echo "<p>**You have signed up**</p>";
                    }
                }

                ?>

            </div>
        </div>
    </div>

</section>

<?php include_once __DIR__ . '/footer.php'; ?>