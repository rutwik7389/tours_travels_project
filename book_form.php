<?php

$conn = mysqli_connect('localhost', 'root', '', 'b_db');




if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST['send'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $location = $_POST['location'];
    $guests = $_POST['guests'];
    $arrivals = $_POST['arrivals'];
    $leaving = $_POST['leaving'];

    $request = "INSERT INTO book_form (name, email, phone, address, location, guests, arrivals, leaving) 
                VALUES ('$name', '$email', '$phone', '$address', '$location', '$guests', '$arrivals', '$leaving')";

    if (mysqli_query($conn, $request)) {
        header('Location: book.php');
    } else {
        echo "Error: " . mysqli_error($conn);
    }
} else {
    echo 'Something went wrong, try again.';
}

mysqli_close($conn);

