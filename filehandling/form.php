<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form with Bootstrap and Custom CSS</title>
  
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
  
  <!-- Custom CSS -->
  <style>
    body {
      padding: 20px;
      background-color: #f8f9fa;
    }
    .form-container {
      background-color: lightblue;
      padding: 30px;
      border-radius: 8px;
      box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
      max-width: 600px;
      margin: auto;
    }
    .form-control, .form-check-input {
      margin-bottom: 15px;
    }
    .form-check-label {
      margin-right: 20px;
    }
    .form-group {
      margin-bottom: 20px;
    }
    .required:after {
      content: " *";
      color: red;
    }
    h2 {
      color: #00008b; /* Dark blue color */
    }
  </style>
</head>

<body>
  <div class="container">
    <div class="form-container">
      <h2 class="text-center">Personal Information Section</h2>
      <form>
        
        <!-- Name (Required) -->
        <div class="form-group">
          <label for="name" class="form-label required">Name:</label>
          <input type="text" id="name" name="name" class="form-control" required>
        </div>
        
        <!-- Email -->
        <div class="form-group">
          <label for="email" class="form-label required">Email:</label>
          <input type="email" id="email" name="email" class="form-control" required>
        </div>
        
        <!-- Password -->
        <div class="form-group">
          <label for="password" class="form-label required">Password:</label>
          <input type="password" id="password" name="password" class="form-control" minlength="8" pattern="^(?=.*\d).{8,}$" title="Password must be at least 8 characters long and contain at least one digit." required>
        </div>
        
        <!-- Confirm Password -->
        <div class="form-group">
          <label for="confirm_password" class="form-label required">Confirm Password:</label>
          <input type="password" id="confirm_password" name="confirm_password" class="form-control" required>
        </div>
        
        <!-- Date of Birth -->
        <div class="form-group">
          <label for="date" class="form-label required">Date of Birth:</label>
          <input type="date" id="date" name="date" class="form-control" required>
        </div>
        
        <!-- Gender -->
        <div class="form-group">
          <label for="gender" class="form-label required">Gender:</label><br>
          <input type="radio" id="male" name="gender" value="male" class="form-check-input" required>
          <label for="male" class="form-check-label">Male</label>
          
          <input type="radio" id="female" name="gender" value="female" class="form-check-input" required>
          <label for="female" class="form-check-label">Female</label>
          
          <input type="radio" id="other" name="gender" value="other" class="form-check-input" required>
          <label for="other" class="form-check-label">Other</label>
        </div>
        
        <h2 class="text-center">Contact Information Section</h2>
        
        <!-- Phone Number -->
        <div class="form-group">
          <label for="phone" class="form-label required">Phone Number:</label>
          <input type="tel" id="phone" name="phone" class="form-control" minlength="10" maxlength="15" placeholder="Enter Phone Number" required>
        </div>
        
        <!-- Address -->
        <div class="form-group">
          <label for="address" class="form-label required">Address:</label>
          <input type="text" id="address" name="address" class="form-control" required>
        </div>
        
        <!-- City -->
        <div class="form-group">
          <label for="city" class="form-label">City:</label>
          <input type="text" id="city" name="city" class="form-control">
        </div>
        
        <!-- Country -->
        <div class="form-group">
          <label for="country" class="form-label">Country:</label>
          <select id="country" name="country" class="form-select">
            <option value="India">India</option>
            <option value="Germany">Germany</option>
            <option value="France">France</option>
          </select>
        </div>
        
        <!-- Postal Code -->
        <div class="form-group">
          <label for="postalcode" class="form-label">Postal Code:</label>
          <input type="text" id="postalcode" name="postalcode" class="form-control" placeholder="Enter Postal Code">
        </div>
        
        <h2 class="text-center">Preference Section</h2>
        
        <!-- Preferred Contact Method -->
        <div class="form-group">
          <label for="contact_method" class="form-label">Preferred Contact Method:</label><br>
          <input type="radio" id="contact_email" name="contact_method" value="email" class="form-check-input">
          <label for="contact_email" class="form-check-label">Email</label>
          
          <input type="radio" id="contact_phone" name="contact_method" value="phone" class="form-check-input">
          <label for="contact_phone" class="form-check-label">Phone</label>
          
          <input type="radio" id="contact_text" name="contact_method" value="text" class="form-check-input">
          <label for="contact_text" class="form-check-label">Text Message</label>
        </div>
        
        <!-- Hobbies -->
        <div class="form-group">
          <label for="hobbies" class="form-label">Hobbies:</label><br>
          <input type="checkbox" id="hobby_sports" name="hobbies" value="sports" class="form-check-input">
          <label for="hobby_sports" class="form-check-label">Sports</label><br>
          
          <input type="checkbox" id="hobby_music" name="hobbies" value="music" class="form-check-input">
          <label for="hobby_music" class="form-check-label">Music</label><br>
          
          <input type="checkbox" id="hobby_reading" name="hobbies" value="reading" class="form-check-input">
          <label for="hobby_reading" class="form-check-label">Reading</label>
        </div>
        
        <!-- Profile Picture -->
        <div class="form-group">
          <label for="profile_pic" class="form-label">Profile Picture (PNG, JPEG, JPG):</label>
          <input type="file" id="profile_pic" name="profile_pic" accept="image/png, image/jpeg, image/jpg" class="form-control">
        </div>
        
        <!-- Submit Button -->
        <div class="form-group">
          <input type="submit" value="Submit" class="btn btn-primary">
          <input type="reset" value="Reset" class="btn btn-danger ">
        </div>
      </form>
    </div>
  </div>

  <!-- Bootstrap JS (Optional) -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
