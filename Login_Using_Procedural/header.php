<?php session_start(); ?>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>PHP LOGIN Training</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm sticky-top">
        <div class="container d-flex justify-content-between align-items-center">

            <a class="navbar-brand d-flex align-items-center" href="index.php">
                <img src="Trtan Logo/copilot 2.jpeg" alt="Blog Logo" height="50" class="me-2 rounded-circle">

            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>


            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="discover.php">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="blog.php">Find Blogs</a>
                    </li>


                    <?php if (isset($_SESSION['userid'])): ?>
                        <li class="nav-item">
                            <a class="nav-link" href="profile.php">Profile Page</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="includes/logout.inc.php">Log out</a>
                        </li>
                    <?php else: ?>
                        <li class="nav-item">
                            <a class="nav-link" href="signup.php">Sign Up</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="login.php">Log In</a>
                        </li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </nav>