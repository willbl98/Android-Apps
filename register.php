<?php
require "conn.php";

$username = $_POST["client_username"];
$password = $_POST["client_password"];
$first_name = $_POST["client_firstname"];
$last_name = $_POST["client_lastname"];
$gender = $_POST["client_gender"];
$age = $_POST["client_age"];
$height = $_POST["client_height"];
$weight = $_POST["client_weight"];

$mysql_qry = "insert into client_table (client_username, client_password, client_firstname, client_lastname, client_gender, client_age, client_height, client_weight) 
values ('$username', '$password', '$first_name', '$last_name', '$gender', '$age', '$height', '$weight')";

if($conn->query($mysql_qry) === TRUE) {
    echo "Data Inserted!";
}
else {
    echo "Error inserting data" . $mysql_qry . "<br>" . $conn->error;
}

$conn->close();

?>