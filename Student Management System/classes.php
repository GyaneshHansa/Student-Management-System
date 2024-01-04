<?php include "./includes/header.php" ?>

<!-- for Creating New Class -->
<?php

if (isset($_POST['add_class_btn'])) {
    // Getting Input Data
    $input_class_name = $_POST['class_name'];

    // Creating Query
    $query = "INSERT INto classes (className)  VALUES ('{$input_class_name}')";

    // Execute Query
    $resultan_data = mysqli_query($connection, $query);

    // Error Handling :: optinal
    if (!$resultan_data) echo "Something Went Wrong!!! " . mysqli_error($connection);
}


if (isset($_POST['edit_class_btn'])) {

    // Getting Input Data
    $class_id = $_GET['edit_class'];
    $input_class_name = $_POST['class_name'];

    // Creating Query
    $query = "UPDATE classes SET className='{$input_class_name}' WHERE id={$class_id}";


    // Execute Query
    $resultan_data = mysqli_query($connection, $query);

    // Error Handling :: optinal
    if (!$resultan_data) echo "Something Went Wrong!!! " . mysqli_error($connection);
}

if (isset($_GET['delete_class'])) {

    // Getting Input Data
    $class_id = $_GET['delete_class'];


    // Creating Query
    $query = "DELETE FROM classes WHERE id={$class_id}";


    // Execute Query
    $resultan_data = mysqli_query($connection, $query);

    // Error Handling :: optinal
    if (!$resultan_data) echo "Something Went Wrong!!! " . mysqli_error($connection);
}

?>



<div class="row p-2 mt-3">

    <div class="col-md-6">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Class Name</th>
                    <th scope="col">CreatedAt</th>
                    <th scope="col" colspan="2">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $query = "SELECT * FROM classes";
                $resultan_arr = mysqli_query($connection, $query);

                while ($row = mysqli_fetch_assoc($resultan_arr)) {

                    echo "<tr>";
                    echo "<td scope='row'>{$row['id']}</td>";
                    echo "<td>{$row['className']}</td>";
                    echo "<td>{$row['createdAt']}</td>";
                    echo "<td><a href='classes.php?edit_class={$row['id']}'>Edit</a></td>";
                    echo "<td><a href='classes.php?delete_class={$row['id']}'>Delete</a></td>";
                    echo "</tr>";
                }

                ?>
            </tbody>
        </table>
    </div>


    <div class="col-md-6">
        <form action="" method="POST">
            <fieldset>
                <legend>Add Class</legend>
                <div class="mb-3">
                    <label for="classId" class="form-label">Class name</label>
                    <input type="text" id="classId" name="class_name" class="form-control" placeholder="Enter Classname" required>
                </div>
                <button type="submit" name="add_class_btn" class="btn btn-primary">Submit</button>
            </fieldset>
        </form>

        <?php if (isset($_GET['edit_class'])) {
            $class_id = $_GET['edit_class'];
            $query = "SELECT * FROM classes WHERE id= {$class_id}";

            // input - DB_conection Object and query string  ||    return -  mysqli_result_object
            $result = mysqli_query($connection, $query);

            // input - mysqli_result_object  ||  return data object (array)
            $resultan_data = mysqli_fetch_assoc($result);



            $class_name = $resultan_data['className'];

        ?>
            <form action="" method="POST">
                <fieldset>
                    <legend>Edit Class</legend>
                    <div class="mb-3">
                        <label for="classId" class="form-label">Class name</label>
                        <!-- shorthand of printing statement 1) < ?php echo "hello" ?>  2) < ?= "hello" ?>-->
                        <input type="text" id="classId" name="class_name" class="form-control" value="<?= $class_name ?>" placeholder="Enter Classname" required>
                    </div>
                    <button type="submit" name="edit_class_btn" class="btn btn-primary">Edit Class</button>
                </fieldset>
            </form>
        <?php
        } ?>
    </div>
</div>

<?php include "./includes/footer.php" ?>