<?php include "./includes/index_header.php"  ?>
<?php if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "SELECT * from users WHERE username='{$username}' and password='{$password}'";
    // echo $query;
    // exit;

    // $query = "Insert into users (username,password) values ('{$username}' , '{$password}')";

    $result = mysqli_query($connection, $query);

    // alternative way
    // $is_user_found = count(mysqli_fetch_assoc($result));

    $is_user_found = mysqli_num_rows($result);

    if ($is_user_found) {
        header("Location: student.php");
    } else {
        echo "Username or password invalid ";
    }
}


?>
<div class="container">
    <div class=" col-sm-6 mx-auto">
        <h1>Student Management System</h1> <br><br>
        <h3>User Login Page</h3>
        <div>
            <form action="" method="post">
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" name="username" class="form-control">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" class="form-control">
                </div><br>
                <input class="btn btn-primary" type="submit" name="submit" value="Submit">



            </form>
        </div>
    </div>
    <div>

        <?php include "./includes/footer.php"  ?>