<?php
$connection = mysqli_connect('localhost', 'root', '', 'task');
if (!$connection) {
    die("Database connection failed");
}
