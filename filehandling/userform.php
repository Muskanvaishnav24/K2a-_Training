<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Details Form</title>
    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .form-container {
            max-width: 800px; /* Set a max-width for better readability */
            background-color: lightgreen; /* Add light green background color */
            padding: 20px; /* Optional: Add padding for better spacing */
            border-radius: 8px; /* Optional: Add border-radius for rounded corners */
        }
    </style>
</head>
<body>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8 form-container">
            <h1 class="text-center mb-4">User Details Form</h1>
            <form action="submit.php" method="POST" enctype="multipart/form-data">
                <h2>Your Details</h2>
                <table class="table">
                    <tbody>
                        <tr>
                            <td><label for="name">Name</label></td>
                            <td><input type="text" class="form-control" id="name" name="fname and lname" placeholder="Firstname and Lastname"></td>
                        </tr>
                        <tr>
                            <td><label for="email">Email</label></td>
                            <td><input type="email" class="form-control" id="email" name="email" placeholder="example@domain.com"></td>
                        </tr>
                        <tr>
                            <td><label for="phone">Phone</label></td>
                            <td><input type="tel" class="form-control" id="phone" name="number"></td>
                        </tr>
                    </tbody>
                </table>

                <h2>Delivery Address</h2>
                <table class="table">
                    <tbody>
                        <tr>
                            <td><label for="address">Address</label></td>
                            <td><input type="text" class="form-control" id="address" name="address"></td>
                        </tr>
                        <tr>
                            <td><label for="postalcode">Postal Code</label></td>
                            <td><input type="text" class="form-control" id="postalcode" name="postalcode"></td>
                        </tr>
                        <tr>
                            <td><label for="country">Country</label></td>
                            <td><input type="text" class="form-control" id="country" name="country"></td>
                        </tr>
                    </tbody>
                </table>

                <h2>Card Details</h2>
                <table class="table">
                    <tbody>
                        <tr>
                            <td><label>Card Type</label></td>
                            <td>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="cardType" id="visa" value="VISA">
                                    <label class="form-check-label" for="visa">VISA</label>
                                 </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="cardType" id="amex" value="AmEx">
                                    <label class="form-check-label" for="amex">AmEx</label>
                                   </div>
                                  <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="cardType" id="mastercard" value="Mastercard">
                                    <label class="form-check-label" for="mastercard">Mastercard</label>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td><label for="cardNumber">Card Number</label></td>
                            <td><input type="text" class="form-control" id="cardNumber" name="card number"></td>
                        </tr>
                        <tr>
                            <td><label for="securityCode">Security Code</label></td>
                            <td><input type="text" class="form-control" id="securityCode" name="securitycode"></td>
                        </tr>
                        <tr>
                            <td><label for="cardName">Name on Card</label></td>
                            <td><input type="text" class="form-control" id="cardName" name="card name" placeholder="Exact name as on the card"></td>
                        </tr>
                    </tbody>
                </table>
                
                <h2>Upload Files</h2>
                <div class="form-group">
                    <label for="fileUpload">Select File</label>
                    <input type="file" class="form-control-file" id="fileToUpload" name="fileUpload">
                </div>
                <h2>Upload Image</h2>
                <div class="form-group">
                    <label for="imageUpload">Select Image</label>
                    <input type="file" class="form-control-file" id="imageToUpload" name="imageUpload">
                </div>
                
                
                
                <div class="text-center mt-4">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Bootstrap JS and dependencies -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
