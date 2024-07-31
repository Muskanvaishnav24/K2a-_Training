<!DOCTYPE html>
<html>
<title>Login Page</title>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        .centered-form {
            height: 100vh;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <a class="navbar-brand" href="home.php">Home</a>
    </nav>
    <div class="container d-flex justify-content-center align-items-center centered-form">
        <div class="col-md-6">
            <h2 class="text-center">Login</h2>
            <form>
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" class="form-control" id="username">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password">
                </div>
                <button type="submit" class="btn btn-primary btn-block">Login</button>
                
                    <a href="registration.php">Click here for new registration</a>
                
            </form>
        </div>
    </div>
</body>
</html>
