<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account Opening Form</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .form-container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .submit-button {
            background-color:#28a745;
            color:#fff;
        }
        .submit-button:hover {
            background-color: #218838;
        }
        .required-label::after {
            content: " *";
            color: red;
        }
        .text-center {
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container form-container">
    <h2 class="text-center">Account Opening Form</h2>
    </div>
        <h2 style="text-align:center:">Account Opening Form</h2>
        <h3>Personal Information</h3>
        <form id="exampleform" action="submit.php" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label for="prefix" class="required-label">Full Name</label>
                <div class="form-row">
                    <div class="col">
                        <select id="prefix" name="prefix" class="form-control" required>
                            <option value="">Prefix</option>
                            <option value="mr">Mr.</option>
                            <option value="mrs">Mrs.</option>
                            <option value="ms">Ms.</option>
                        </select>
                    </div>
                    <div class="col">
                        <input type="text" id="firstName" name="firstName" class="form-control" placeholder="First Name" required>
                    </div>
                    <div class="col">
                        <input type="text" id="lastName" name="lastName" class="form-control" placeholder="Last Name" required>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="dob" class="required-label">Date of Birth</label>
                <input type="date" id="dob" name="dob" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="mothersName" class="required-label">Mother's Maiden Name</label>
                <input type="text" id="mothersName" name="mothersName" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="telephoneNumber" class="required-label">Telephone Number</label>
                <input type="tel" id="telephoneNumber" name="telephoneNumber" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="email">E-mail</label>
                <input type="email" id="email" name="email" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="address" class="required-label">Address</label>
                <input type="text" id="address" name="address" class="form-control" placeholder="Street Address" required>
                <input type="text" id="address2" name="address2" class="form-control" placeholder="Street Address Line 2">
                <div class="form-row">
                    <div class="col">
                        <input type="text" id="city" name="city" class="form-control" placeholder="City" required>
                    </div>
                    <div class="col">
                        <input type="text" id="state" name="state" class="form-control" placeholder="State" required>
                    </div>
                    <div class="col">
                        <input type="text" id="zip" name="zip" class="form-control" placeholder="Postal/Zip Code" required>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label>Educational Level</label>
                <div class="form-check">
                    <input type="radio" id="highSchool" name="educationLevel" value="High School or below" class="form-check-input" required>
                    <label for="highSchool" class="form-check-label">High School or below</label>
                </div>
                <div class="form-check">
                    <input type="radio" id="UG" name="educationLevel" value="Undergraduate" class="form-check-input" required>
                    <label for="UG" class="form-check-label">Undergraduate</label>
                </div>
                <div class="form-check">
                    <input type="radio" id="master" name="educationLevel" value="Master's Degree" class="form-check-input" required>
                    <label for="master" class="form-check-label">Master's Degree</label>
                </div>
                <div class="form-check">
                    <input type="radio" id="PHD" name="educationLevel" value="Doctorate" class="form-check-input" required>
                    <label for="PHD" class="form-check-label">PhD</label>
                </div>
            </div>
            <div class="form-group">
                <label>Form of Identification</label>
                <div class="form-check">
                    <input type="radio" id="passport" name="idType" value="Passport" class="form-check-input" required>
                    <label for="passport" class="form-check-label">International Passport</label>
                </div>
                <div class="form-check">
                    <input type="radio" id="driversLicense" name="idType" value="Driver's License" class="form-check-input" required>
                    <label for="driversLicense" class="form-check-label">Driver's License</label>
                </div>
                <div class="form-check">
                    <input type="radio" id="nationalId" name="idType" value="National ID" class="form-check-input" required>
                    <label for="nationalId" class="form-check-label">National ID</label>
                </div>
                <div class="form-check">
                    <input type="radio" id="stuId" name="idType" value="Student ID" class="form-check-input" required>
                    <label for="stuId" class="form-check-label">Student ID</label>
                </div>
            </div>
            <h3>Account Information</h3>
            <div class="form-group">
                <label for="accounttype" class="required-label">Account Type</label>
                <select id="accounttype" name="accountType" class="form-control" required>
                    <option value="" disabled selected>Please Select</option>
                    <option value="prioritybanking">Priority Banking</option>
                    <option value="preferredbanking">Preferred Banking</option>
                    <option value="privatebanking">Private Banking</option>
                    <option value="timedeposit">Time Deposit</option>
                    <option value="other">Other</option>
                </select>
            </div>
            <div class="form-group">
                <label for="accountCategory">Account Category</label>
                <select id="accountCategory" name="accountCategory" class="form-control" required>
                    <option value="" disabled selected>Please Select</option>
                    <option value="individual">Individual</option>
                    <option value="joint">Joint</option>
                </select>
            </div>
            <div class="form-group">
                <label for="monthlySalary" class="required-label">Monthly Salary</label>
                <input type="number" id="monthlySalary" name="monthlySalary" class="form-control" placeholder="USD" required>
            </div>
            <button type="submit" class="btn btn-primary btn-block submit-button">Submit</button>
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
