<?php
if($_SERVER["REQUEST_METHOD"] == "POST") 
{

    $fname = $_POST['fname'];
    $lname = $_POST['lname-company'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $zip = $_POST['zip'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];


    $hn = 'www.it354.com';
    $db = 'it354_students';
    $un = 'it354_students';
    $pw = 'steinway';

    $conn = new mysqli($hn, $un, $pw, $db);
    if ($conn->connect_error) die($conn->connect_error);

    $query = "INSERT INTO customers (firstName, lastName, address, city, state, zip, email, phone) VALUES ('$fname', '$lname', '$address', '$city', '$state', '$zip', '$email', '$phone')";

    $result = $conn->query($query);
    if (!$result) die($conn->error);
}
?>