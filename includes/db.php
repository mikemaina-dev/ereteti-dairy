<?php
// Connect to the MySQL database that XAMPP provides
$conn = mysqli_connect('localhost', 'root', '', 'ereteti_dairy');

if (!$conn) {
    die('Could not connect to the database: ' . mysqli_connect_error());
}