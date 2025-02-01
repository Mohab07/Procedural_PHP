<?php include_once __DIR__ . '/header.php'; ?>
<?php require __DIR__ . '/config/dbcon.php'; ?>

<?php if (isset($_SESSION["useruid"])) { ?>


    <h1 class="text-center my-4">Made with love by ~Muhab~</h1>


    <h1 class="text-center my-4">
        Welcome,
        <?php if (isset($_SESSION["useruid"])) {
            echo htmlspecialchars($_SESSION["useruid"]);
        } ?>
    </h1>
    <div class="container">

        <div class="row mb-3">
            <div class="col">
                <h1>All Students</h1>
            </div>
            <div class="col text-end">
                <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Add Student</a>
            </div>
        </div>

        <table class="table table-striped table-bordered">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Age</th>
                    <th>Photo</th>
                    <th>Update</th>
                    <th>Delete</th>
                    <th>Show</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $query = "SELECT * FROM students";
                $result = mysqli_query($connect, $query);

                if (!$result) {
                    die("Query failed: " . mysqli_error($connect));
                } else {
                    while ($row = mysqli_fetch_assoc($result)) {
                ?>
                        <tr>
                            <td><?php echo $row['id']; ?></td>
                            <td><?php echo $row['first_name']; ?></td>
                            <td><?php echo $row['last_name']; ?></td>
                            <td><?php echo $row['age']; ?></td>
                            <td><img src="uploads/<?php echo htmlspecialchars($row['photo']); ?>" alt="student photo" width="50" height="50"></td>
                            <td><a href="update.php?id=<?php echo $row['id']; ?>" class="btn btn-success">Update</a></td>
                            <td><a href="delete.php?id=<?php echo $row['id']; ?>" class="btn btn-danger">Delete</a></td>
                            <td><a href="show.php?id=<?php echo $row['id']; ?>" class="btn btn-warning">Show</a></td>
                        </tr>
                <?php
                    }
                }
                ?>
            </tbody>
        </table>

        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Add Student</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="insert.php" method="post" enctype="multipart/form-data">
                            <div class="mb-3">
                                <label for="firstName" class="form-label">First Name</label>
                                <input type="text" class="form-control" id="firstName" name="first_name" required>
                            </div>
                            <div class="mb-3">
                                <label for="lastName" class="form-label">Last Name</label>
                                <input type="text" class="form-control" id="lastName" name="last_name" required>
                            </div>
                            <div class="mb-3">
                                <label for="age" class="form-label">Age</label>
                                <input type="number" class="form-control" id="age" name="age" required>
                            </div>
                            <div class="mb-3">
                                <label for="photo" class="form-label">Photo</label>
                                <input type="file" class="form-control" id="photo" name="photo" required>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-success" name="add_student">ADD</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php } else { ?>
    <h4 class="text-center my-4">Made with love by ~Muhab~ </h4>
    <h1 class="text-center my-4">Press <b>login</b> for more details </h1>
<?php } ?>

<?php include_once __DIR__ . '/footer.php'; ?>