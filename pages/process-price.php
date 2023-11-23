<?php
include 'db-config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve the price from the form
    $price = $_POST["price"];
    $date = $_POST["date"];
    $newData = ['price' => $price, 'date' => $date];
    $response = $firebaseDB->postData('/', $newData);
    // Redirect back to the TMT bars price page
    header("Location: tmt-bars-price.php");
    exit();
}
