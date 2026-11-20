<?php
// ==========================================================
// 1. Database Connection (Direct in this file)
// ==========================================================
$conn = mysqli_connect("localhost", "root", "", "college");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// ==========================================================
// 2. Receive Form Data using $_POST
// ==========================================================
$name    = $_POST['name'];
$email   = $_POST['email'];
$phone   = $_POST['phone'];
$age     = $_POST['age'];
$gender  = isset($_POST['gender']) ? $_POST['gender'] : '';
$branch  = $_POST['branch'];
$address = $_POST['address'];

// ==========================================================
// 3. Insert Data into MySQL Table
// ==========================================================
$sql = "INSERT INTO students (name, email, phone, age, gender, branch, address) 
        VALUES ('$name', '$email', '$phone', '$age', '$gender', '$branch', '$address')";

// ==========================================================
// 4. Run the Query and Display Message
// ==========================================================
if (mysqli_query($conn, $sql)) {
    echo "<h2>Student Registered Successfully!</h2>";
    echo "<a href='index.html'>Back to Registration Form</a>";
} else {
    echo "Error: " . mysqli_error($conn);
}

// 5. Close Connection
mysqli_close($conn);
?>
