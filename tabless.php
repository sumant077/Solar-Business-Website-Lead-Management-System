<?php
include 'connss.php';

$sql = "CREATE TABLE Enquiry_Form(

    Name VARCHAR(40),
    Email VARCHAR(40),
    Contact_No VARCHAR(15),
    Address VARCHAR(50),
    Enquiry_For VARCHAR(50),
    Message TEXT
)";

$result = mysqli_query($conn, $sql);

if ($result) {
    echo " Table 'enquiry_form' created successfully!";
} else {
    echo " Error creating table: " . mysqli_error($conn);
}
?>
