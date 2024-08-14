<?php
// Define directories to save uploaded files and images
$file_target_dir = "uploads/files/";
$image_target_dir = "uploads/images/";

// Create directories if they don't exist
if (!is_dir($file_target_dir)) {
    mkdir($file_target_dir, 0777, true);
}
if (!is_dir($image_target_dir)) {
    mkdir($image_target_dir, 0777, true);
}

// Initialize error messages
$error_messages = [];

// Initialize upload messages
$file_upload_message = "";
$image_upload_message = "";

// Handle file upload
if (isset($_FILES["fileUpload"])) {
    $file_target_file = $file_target_dir . basename($_FILES["fileUpload"]["name"]);
    $file_uploadOk = 1;
    $file_fileType = strtolower(pathinfo($file_target_file, PATHINFO_EXTENSION));

    if (!empty($_FILES["fileUpload"]["name"])) {
        if (move_uploaded_file($_FILES["fileUpload"]["tmp_name"], $file_target_file)) {
            $file_upload_message = "The file " . htmlspecialchars(basename($_FILES["fileUpload"]["name"])) . " has been uploaded.<br>";
        } else {
            $error_messages[] = "Sorry, there was an error uploading your file.<br>";
        }
    }
}

// Handle image upload
if (isset($_FILES["imageUpload"])) {
    $image_target_file = $image_target_dir . basename($_FILES["imageUpload"]["name"]);
    $image_uploadOk = 1;
    $image_fileType = strtolower(pathinfo($image_target_file, PATHINFO_EXTENSION));

    if (!empty($_FILES["imageUpload"]["name"])) {
        // Check if image is an actual image or fake image
        $check = getimagesize($_FILES["imageUpload"]["tmp_name"]);
        if ($check !== false) {
            // Check file size (e.g., 5MB limit)
            if ($_FILES["imageUpload"]["size"] > 5000000) {
                $error_messages[] = "Sorry, your image is too large.<br>";
                $image_uploadOk = 0;
            }

            // Allow certain file formats (e.g., JPG, JPEG, PNG, GIF)
            $allowed_image_types = array("jpg", "jpeg", "png", "gif");
            if (!in_array($image_fileType, $allowed_image_types)) {
                $error_messages[] = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.<br>";
                $image_uploadOk = 0;
            }

            if ($image_uploadOk == 1) {
                if (move_uploaded_file($_FILES["imageUpload"]["tmp_name"], $image_target_file)) {
                    $image_upload_message = "The image " . htmlspecialchars(basename($_FILES["imageUpload"]["name"])) . " has been uploaded.<br>";
                } else {
                    $error_messages[] = "Sorry, there was an error uploading your image.<br>";
                }
            }
        } else {
            $error_messages[] = "File is not an image.<br>";
            $image_uploadOk = 0;
        }
    }
}

// Process other form data
$fname_and_lname = htmlspecialchars($_POST['fname_and_lname'] ?? '');
$email = htmlspecialchars($_POST['email'] ?? '');
$number = htmlspecialchars($_POST['number'] ?? '');
$address = htmlspecialchars($_POST['address'] ?? '');
$postalcode = htmlspecialchars($_POST['postalcode'] ?? '');
$country = htmlspecialchars($_POST['country'] ?? '');
$cardType = htmlspecialchars($_POST['cardType'] ?? '');
$card_number = htmlspecialchars($_POST['card_number'] ?? '');
$securitycode = htmlspecialchars($_POST['securitycode'] ?? '');
$card_name = htmlspecialchars($_POST['card_name'] ?? '');

// Output form data and upload messages
echo "<h1>Form Submission Result</h1>";
echo "<p><strong>Name:</strong> $fname_and_lname</p>";
echo "<p><strong>Email:</strong> $email</p>";
echo "<p><strong>Phone:</strong> $number</p>";
echo "<p><strong>Address:</strong> $address</p>";
echo "<p><strong>Postal Code:</strong> $postalcode</p>";
echo "<p><strong>Country:</strong> $country</p>";
echo "<p><strong>Card Type:</strong> $cardType</p>";
echo "<p><strong>Card Number:</strong> $card_number</p>";
echo "<p><strong>Security Code:</strong> $securitycode</p>";
echo "<p><strong>Name on Card:</strong> $card_name</p>";

if (!empty($file_upload_message)) {
    echo $file_upload_message;
}

if (!empty($image_upload_message)) {
    echo $image_upload_message;
}

if (!empty($error_messages)) {
    foreach ($error_messages as $message) {
        echo $message;
    }
}
?>
