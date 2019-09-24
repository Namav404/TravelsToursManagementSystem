<?php include("server.php"); ?>
<!DOCTYPE html>
<html>

<head>
    <title>Login</title>
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
    <div class="l_panel">
        <center>
            <div class="l_box">
                <h3 class="text-primary">LOGIN</h3>
                <hr>
                <div class="error">
                    <strong><?php echo $Err; ?></strong>
                </div>
                <form method="POST">
                    <div class="form-group row pt-2">
                        <label for="username" class="col-sm-3 mt-1">Username:</label>
                        <input type="text" class="form-control form-control-sm col-sm-7" id="username" name="username"
                            placeholder="Enter your username" required>
                    </div>
                    <div class="form-group row">
                        <label for="password" class="col-sm-3 mt-1">Password:</label>
                        <input type="password" class="form-control form-control-sm col-sm-7" id="password"
                            name="password" placeholder="Enter your password" required>
                    </div>
                    <div class="row">
                        <div class="col-sm-3 pl-5">
                            <input type="submit" class="btn btn-sm btn-primary" name="login" value="Login">
                        </div>
                        <div class="col-sm-7 pr-4 pl-0">
                            <p>Don't have an account?&nbsp;<a href="register.php">Register</a></p>
                        </div>
                    </div>
                </form>
            </div>
        </center>
    </div>
</body>

</html>