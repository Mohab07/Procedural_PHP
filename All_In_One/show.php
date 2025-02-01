<?php
require __DIR__ . '/config/dbcon.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "SELECT * FROM students WHERE id='$id'";
    $result = mysqli_query($connect, $query);

    if ($row = mysqli_fetch_assoc($result)) {
?>
        <!DOCTYPE html>
        <html lang="en">

        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Student Details</title>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
        </head>

        <body>
            <div class="container my-5">
                <div class="card shadow-sm">
                    <div class="card-header text-center">
                        <h2>Student Details</h2>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4 text-center">
                                <img src="uploads/<?php echo htmlspecialchars($row['photo']); ?>" alt="student photo" class="img-fluid rounded" width="200" height="200">
                            </div>
                            <div class="col-md-8 ">
                                <h4><strong>ID:</strong> <?php echo htmlspecialchars($row['id']); ?></h4>
                                <h4><strong>First Name:</strong> <?php echo htmlspecialchars($row['first_name']); ?></h4>
                                <h4><strong>Last Name:</strong> <?php echo htmlspecialchars($row['last_name']); ?></h4>
                                <h4><strong>Age:</strong> <?php echo htmlspecialchars($row['age']); ?></h4>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer text-center">
                        <a href="index.php" class="btn btn-primary">Back to Students List</a>
                    </div>
                </div>
            </div>

            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
        </body>

        </html>
<?php
    } else {
        echo "<div class='container my-5'><div class='alert alert-danger'>Student not found!</div></div>";
    }
} else {
    echo "<div class='container my-5'><div class='alert alert-danger'>Invalid request!</div></div>";
}
?>