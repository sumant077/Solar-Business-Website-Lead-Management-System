<?php
include 'connss.php';  // connection file

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Collect form data
    $name = $_POST['fname'];
    $email = $_POST['email'];
    $contact = $_POST['phno'];
    $address = $_POST['address'];
    $enquiry = $_POST['enqfo'];
    $message = $_POST['Mess'];

    // Insert query
    $sql = "INSERT INTO enquiry_form (Name, Email, Contact_No, Address, Enquiry_For, Message)
            VALUES ('$name', '$email', '$contact', '$address', '$enquiry', '$message')";

    // Run query
    if (mysqli_query($conn, $sql)) {
        echo "<center><h2> Enquiry submitted successfully!</h2></center>";
        echo "<center><h3> We will Response you in 48 Hours!</h3></center>";
        echo "<center><h3> <b>Thank You</b> for Trust on Surya Eco Green Energy!</h3></center>";
        echo "<a href='solarproject.html'><center>Go Back</center></a>";
    } else {
        echo " Error: " . mysqli_error($conn);
    }

    // Close connection
    mysqli_close($conn);
}
?>
