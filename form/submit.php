<?php
// Define function to sanitize input
function sanitize_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Initialize variables with empty values
    $prefix = $firstName = $lastName = $dob = $mothersName = $telephoneNumber = $email = $address = $address2 = $city = $state = $zip = $educationLevel = $idType = $accountType = $accountCategory = $monthlySalary = "";

    // Sanitize and collect form data, checking if each key exists
    $prefix = isset($_POST["prefix"]) ? sanitize_input($_POST["prefix"]) : '';
    $firstName = isset($_POST["firstName"]) ? sanitize_input($_POST["firstName"]) : '';
    $lastName = isset($_POST["lastName"]) ? sanitize_input($_POST["lastName"]) : '';
    $dob = isset($_POST["dob"]) ? sanitize_input($_POST["dob"]) : '';
    $mothersName = isset($_POST["mothersName"]) ? sanitize_input($_POST["mothersName"]) : '';
    $telephoneNumber = isset($_POST["telephoneNumber"]) ? sanitize_input($_POST["telephoneNumber"]) : '';
    $email = isset($_POST["email"]) ? sanitize_input($_POST["email"]) : '';
    $address = isset($_POST["address"]) ? sanitize_input($_POST["address"]) : '';
    $address2 = isset($_POST["address2"]) ? sanitize_input($_POST["address2"]) : '';
    $city = isset($_POST["city"]) ? sanitize_input($_POST["city"]) : '';
    $state = isset($_POST["state"]) ? sanitize_input($_POST["state"]) : '';
    $zip = isset($_POST["zip"]) ? sanitize_input($_POST["zip"]) : '';
    $educationLevel = isset($_POST["educationLevel"]) ? sanitize_input($_POST["educationLevel"]) : '';
    $idType = isset($_POST["idType"]) ? sanitize_input($_POST["idType"]) : '';
    $accountType = isset($_POST["accountType"]) ? sanitize_input($_POST["accountType"]) : '';
    $accountCategory = isset($_POST["accountCategory"]) ? sanitize_input($_POST["accountCategory"]) : '';
    $monthlySalary = isset($_POST["monthlySalary"]) ? sanitize_input($_POST["monthlySalary"]) : '';

    // Display sanitized data
    echo "<h2>Form Submission Details</h2>";
    echo "<p><strong>Full Name:</strong> $prefix $firstName $lastName</p>";
    echo "<p><strong>Date of Birth:</strong> $dob</p>";
    echo "<p><strong>Mother's Maiden Name:</strong> $mothersName</p>";
    echo "<p><strong>Telephone Number:</strong> $telephoneNumber</p>";
    echo "<p><strong>Email:</strong> $email</p>";
    echo "<p><strong>Address:</strong> $address, $address2, $city, $state, $zip</p>";
    echo "<p><strong>Educational Level:</strong> $educationLevel</p>";
    echo "<p><strong>Form of Identification:</strong> $idType</p>";
    echo "<p><strong>Account Type:</strong> $accountType</p>";
    echo "<p><strong>Account Category:</strong> $accountCategory</p>";
    echo "<p><strong>Monthly Salary:</strong> $monthlySalary USD</p>";
} else {
    echo "<p>No data submitted.</p>";
}
?>
