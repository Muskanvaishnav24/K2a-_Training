<!DOCTYPE html>
<html>
<head>
    <title>Wings Flate Settings Form</title>
    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .form-container {
            max-width: 600px;
            margin: 50px auto;
            background: #ffffff;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .form-title {
            margin-bottom: 20px;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="form-container">
            <h1 class="form-title">Wings Flate Settings Form</h1>
            <form action="process_form.php" method="post">
                <div class="form-group">
                    <label for="id">ID:</label>
                    <input type="number" class="form-control" id="id" name="id" required>
                </div>
                <div class="form-group">
                    <label for="soc_id">Society ID:</label>
                    <input type="number" class="form-control" id="soc_id" name="soc_id" required>
                </div>
                <div class="form-group">
                    <label for="wing_name">Wing Name:</label>
                    <input type="text" class="form-control" id="wing_name" name="wing_name" required>
                </div>
                <div class="form-group">
                    <label for="floor_no">Floor Number:</label>
                    <input type="number" class="form-control" id="floor_no" name="floor_no">
                </div>
                <div class="form-group">
                    <label for="no_of_flate">Number of Flats:</label>
                    <input type="number" class="form-control" id="no_of_flate" name="no_of_flate" required>
                </div>
                <div class="form-group">
                    <label for="created_by">Created By:</label>
                    <input type="number" class="form-control" id="created_by" name="created_by">
                </div>
                <div class="form-group">
                    <label for="updatedBy">Updated By:</label>
                    <input type="number" class="form-control" id="updatedBy" name="updatedBy">
                </div>
                <div class="form-group">
                    <label for="created_at">Created At:</label>
                    <input type="datetime-local" class="form-control" id="created_at" name="created_at">
                </div>
                <div class="form-group">
                    <label for="updated_at">Updated At:</label>
                    <input type="datetime-local" class="form-control" id="updated_at" name="updated_at">
                </div>
                <button type="submit" class="btn btn-primary btn-block">Submit</button>
            </form>
        </div>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
