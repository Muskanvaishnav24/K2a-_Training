<?php
// Define the directories to save uploaded files and images
$file_target_dir = "uploads/files/";
$image_target_dir = "uploads/images/";

// Create directories if they don't exist
if (!is_dir($file_target_dir)) {
    mkdir($file_target_dir, 0777, true);
}
if (!is_dir($image_target_dir)) {
    mkdir($image_target_dir, 0777, true);
}

// Handle file upload
$file_target_file = $file_target_dir . basename($_FILES["fileToUpload"]["name"]);
$file_uploadOk = 1;
$file_fileType = strtolower(pathinfo($file_target_file, PATHINFO_EXTENSION));

// Check if file is an actual file or fake file
if (isset($_POST["submit"])) {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $file_target_file)) {
        echo "The file " . htmlspecialchars(basename($_FILES["fileToUpload"]["name"])) . " has been uploaded.<br>";
    } else {
        echo "Sorry, there was an error uploading your file.<br>";
    }
}

// Handle image upload
$image_target_file = $image_target_dir . basename($_FILES["imageToUpload"]["name"]);
$image_uploadOk = 1;
$image_fileType = strtolower(pathinfo($image_target_file, PATHINFO_EXTENSION));

// Check if image is an actual image or fake image
if (isset($_POST["submit"])) {
    $check = getimagesize($_FILES["imageToUpload"]["tmp_name"]);
    if ($check !== false) {
        echo "File is an image - " . $check["mime"] . ".<br>";
    } else {
        echo "File is not an image.<br>";
        $image_uploadOk = 0;
    }

    // Check file size (e.g., 5MB limit)
    if ($_FILES["imageToUpload"]["size"] > 5000000) {
        echo "Sorry, your image is too large.<br>";
        $image_uploadOk = 0;
    }

    // Allow certain file formats (e.g., JPG, JPEG, PNG, GIF)
    $allowed_image_types = array("jpg", "jpeg", "png", "gif");
    if (!in_array($image_fileType, $allowed_image_types)) {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.<br>";
        $image_uploadOk = 0;
    }

    // Check if $image_uploadOk is set to 0 by an error
    if ($image_uploadOk == 0) {
        echo "Sorry, your image was not uploaded.<br>";
    } else {
        if (move_uploaded_file($_FILES["imageToUpload"]["tmp_name"], $image_target_file)) {
            echo "The image " . htmlspecialchars(basename($_FILES["imageToUpload"]["name"])) . " has been uploaded.<br>";
        } else {
            echo "Sorry, there was an error uploading your image.<br>";
        }
    }
}
?>
