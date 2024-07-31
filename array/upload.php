<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Directory where the uploaded file will be saved
    $target_dir = "uploads/";
    // Path to the uploaded file
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    // Flag to indicate whether the upload is valid
    $uploadOk = 1;
    // File type of the uploaded file
    $fileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    // Check if file was uploaded without errors
    if (isset($_FILES["fileToUpload"]) && $_FILES["fileToUpload"]["error"] == 0) {
        // Check if file already exists
        if (file_exists($target_file)) {
            echo "Sorry, file already exists.";
            $uploadOk = 0;
        }
        // Check file size (limit to 5MB)
        if ($_FILES["fileToUpload"]["size"] > 5000000) {
            echo "Sorry, your file is too large.";
            $uploadOk = 0;
        }
        // Allow certain file formats (e.g., jpg, png, pdf)
        $allowedTypes = array("jpg", "jpeg", "png", "pdf");
        if (!in_array($fileType, $allowedTypes)) {
            echo "Sorry, only JPG, JPEG, PNG, and PDF files are allowed.";
            $uploadOk = 0;
        }
        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
            echo "Sorry, your file was not uploaded.";
        } else {
            // Attempt to move the uploaded file to the specified directory
            if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                echo "The file " . htmlspecialchars(basename($_FILES["fileToUpload"]["name"])) . " has been uploaded.";
            } else {
                echo "Sorry, there was an error uploading your file.";
            }
        }
    } else {
        echo "Error: " . $_FILES["fileToUpload"]["error"];
    }
} else {
    echo "No file uploaded.";
}
?>
