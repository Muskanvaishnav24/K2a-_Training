<!DOCTYPE html>
<html>
<title>Registration Page</title>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        .centered-form {
            height: 100vh;
        }
    </style>
</head>
<body>
    <div class="container d-flex justify-content-center align-items-center centered-form">
        <div class="col-md-6">
            <h2 class="text-center">Registration</h2>
            <form>
                <div class="form-group">
                    <label for="fullname">Full Name</label>
                    <input type="text" class="form-control" id="fullname">
                </div>
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" class="form-control" id="username">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email">
                </div>
                <div class="form-group">
                    <label for="phone">Phone</label>
                    <input type="number" class="form-control" id="phone">
                </div>
                <div class="form-group">
                    <label for="gender">Gender</label><br>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="gender" id="male" value="Male">
                        <label class="form-check-label" for="male">Male</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="gender" id="female" value="Female">
                        <label class="form-check-label" for="female">Female</label><br>
                    </div>
                </div>
                <div class="form-group">
                    <label for="hobby">Hobby</label>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" name="hobby" id="cricket" value="Cricket">
                        <label class="form-check-label" for="cricket">Cricket</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" name="hobby" id="reading" value="Reading">
                        <label class="form-check-label" for="reading">Reading</label>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Register</button>
                <button type="reset" class="btn btn-danger">Cancel</button>
            </form>
        </div>
    </div>
</body>
</html>
