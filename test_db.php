<?php
$conn = mysqli_connect('localhost', 'root', 'root', 'book_db');

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
} else {
    echo "Connected successfully to the database!";
}






