<?php include("server.php"); ?>
<!DOCTYPE html>
<html>

<head>
    <title>Register</title>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!--Cascading Stylesheet File-->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <!--Bootstrap 4 Link-->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.min.js"></script>
    <script src="jquery/popper.min.js"></script>
    <script src="jquery/jquery.min.js"></script>
</head>

<body>
    <div class="r_panel">
        <center>
            <div class="r_box">
                <h3 class="text-primary">REGISTER</h3>
                <hr>
                <div class="error">
                    <strong><?php echo $Err; ?></strong>
                </div>
                <form method="POST">
                    <div class="form-group row pt-2">
                        <label for="name" class="col-sm-3 mt-1">Name:</label>
                        <input type="text" class="form-control form-control-sm col-sm-7" id="name" name="name"
                            placeholder="Enter your name" required>
                    </div>
                    <div class="form-group row">
                        <label for="email" class="col-sm-3 mt-1">Email:</label>
                        <input type="email" class="form-control form-control-sm col-sm-7" id="email" name="email"
                            placeholder="Enter your email" required>
                    </div>
                    <div class="form-group row">
                        <label for="phno" class="col-sm-3 mt-1">Phone No.:</label>
                        <input type="text" class="form-control form-control-sm col-sm-7" id="phno" name="phno"
                            placeholder="Enter your phone number" maxlength="10" pattern="[7-9][0-9]{9}" required>
                    </div>
                    <div class="form-group row">
                        <label for="address" class="col-sm-3 mt-1">Address:</label>
                        <textarea class="form-control form-control-sm col-sm-7" name="address" id="address"
                            rows="2"></textarea>
                    </div>
                    <div class="form-group row">
                        <label for="username" class="col-sm-3 mt-1">Username:</label>
                        <input type="text" class="form-control form-control-sm col-sm-7" id="username" name="username"
                            placeholder="Enter your username" maxlength="10" required>
                    </div>
                    <div class="form-group row">
                        <label for="password" class="col-sm-3 mt-1">Password:</label>
                        <input type="password" class="form-control form-control-sm col-sm-7" id="password"
                            name="password" placeholder="Enter your password" maxlength="10" required>
                    </div>
                    <div class="row">
                        <div class="col-sm-3 pl-5">
                            <input type="submit" class="btn btn-sm btn-primary" name="register" value="Register">
                        </div>
                        <div class="col-sm-7 pr-4 pl-0">
                            <p>Already have an account!&nbsp;<a href="login.php">Login</a></p>
                        </div>
                    </div>
                </form>
            </div>
        </center>
    </div>
</body>

</html>