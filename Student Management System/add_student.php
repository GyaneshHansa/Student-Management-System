<?php include "db.php"; ?>
<?php
if (isset($_POST['Add'])) {
    $sname = $_POST['sname'];
    $rnum = $_POST['rnum'];
    $cls = $_POST['cls'];
    $dob = $_POST['dob'];
    $mob = $_POST['mob'];
    $email = $_POST['email'];


    $query = "INSERT INTO student (sname, rnum, cls, dob, mob, email) VALUES ('{$sname}','{$rnum}','{$cls}',now(),'{$mob}','{$email}') ";
    print_r($query);
    $result = mysqli_query($connection, $query);
    if (!$result) {
        die("Query Failed" . mysqli_error($connection));
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
    <center>
        <h1>Student Management System</h1> <br><br>
        <h3>Add Student Page</h3>
        <div class="container">

            <div class="col-sm-4">
                <form action="add_student.php" method="post">

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



                </form>
            </div>
    </center>








</body>

</html>