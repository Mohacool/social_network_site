<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in Page</title>

     <!-- Import Bootstrap,Jquery... -->
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <script
        src="https://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

    <link rel="stylesheet" href="style/signin_style.css?v=<?php echo time(); ?>">

    <!-- Sweet Alert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
</head>
<body>

    <div class="navbar bg-dark" height="100px">
        <h1 class="mx-auto" style="color:white;">Mohamed's Cafe</h1>
    </div>
    <div class="navbar bg-light" height="100px">
        <h3 class="mx-auto" >Log in</h3>
    </div>

    <div class="row">
        <div class="col-sm-12">
            <div class="main_content">
                <div class="l-part">
                    <form action="" method="post">
                        <input type="email" name="email" placeholder="Email" required="required" class="form-control input-md"><br>
                        <div class="overlap-text">
                            <input type="password" name="pass" placeholder="Password" required="required" class="form-control input-md"><br>
                            <a style="text-decoration:none;float: right" data-toggle="tooltip" title="Reset Password" href="forgot_password.php">Forgot?</a>
                            <a style="position:relative;top:-15px;float:right" href="signup.php" data-toggle="tooltip" title="Create an Account!">Don't have an account?</a><br><br>
                            
                        </div>

                        <button type="submit" id="login" class="mx-auto d-block btn btn-info btn-lg" style="width:60%" name="login">Log in</button>

                        <?php
                            include("login.php");
                        ?>

                    </form>
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>