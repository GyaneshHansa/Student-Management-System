<?php include "./includes/header.php"; ?>
<?php
if (isset($_POST['Add'])) {
    $sname = $_POST['sname'];
    $rnum = $_POST['rnum'];
    $cls = $_POST['cls'];
    $dob = $_POST['dob'];
    $mob = $_POST['mob'];
    $email = $_POST['email'];


    $query = "INSERT INTO student (id, sname, rnum, cls, dob, mob, email) VALUES ('{$sname}','{$rnum}','{$cls}','{$dob}','{$mob}','{$email}')";
    print_r($query);
    $result = mysqli_query($connection, $query);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

</body>

</html>
<center>
    <br>
    <h1>Student Management System</h1> <br><br>
    <div class="container">

        <!-- <div class="col-sm-6">
            <form action="student.php" method="post">

                <div class="form-group">
                    <label for="sname">Name</label>
                    <input type="text" name="sname" class="form-control">
                </div>
                <div class="form-group">
                    <label for="rnum">Roll No.</label>
                    <input type="text" name="rnum" class="form-control">
                </div>
                <div class="form-group">
                    <label for="cls">Class</label>
                    <input type="text" name="cls" class="form-control">
                </div>
                <div class="form-group">
                    <label for="dob">DOB</label>
                    <input type="text" name="dob" class="form-control">
                </div>
                <div class="form-group">
                    <label for="mob">Mobile Number</label>
                    <input type="text" name="mob" class="form-control">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" name="email" class="form-control">
                </div>

                <br>
                <input class="btn btn-primary" type="submit" name="add" value="Add">
                <!-- <input class="btn btn-primary" type="submit" name="edit" value="Edit">
                    <input class="btn btn-primary" type="submit" name="delete" value="Delete"> -->

        <!-- </form> -->
        <div class="row">
            <div class="col-sm-4">
                <img src="./images/105.jpg" alt="">
            </div>
            <div class="col-sm-4">
                <img src="./images/105.jpg" alt="">
            </div>
            <div class="col-sm-4">
                <img src="./images/105.jpg" alt="">
            </div>
        </div>
    </div>
</center>



<?php include "./includes/footer.php"; ?>