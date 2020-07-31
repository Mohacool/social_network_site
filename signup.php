<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>

    


    <!-- Import Bootstrap,Jquery... -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <script
        src="https://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

    <link rel="stylesheet" href="style/signup_style.css?v=<?php echo time(); ?>">

    <!-- Sweet Alert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

</head>
<body>
    <div class="navbar bg-dark" height="100px">
        <h1 class="mx-auto" style="color:white;">Mohamed's Cafe</h1>
    </div>
    <div class="navbar bg-light" height="100px">
        <h3 class="mx-auto" >Join Mohamed's Cafe</h3>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <div class="main_content">
                <div class="l-part">
                    <form action="signup.php" method="post">
                        <div class="input-group">
                            <span class="icon">
                                <i class="mt-2 mx-3 pt-1 fa fa-pencil" aria-hidden="true"></i>
                            </span>
                            <input type="text" class="form-control" placeholder="First Name" name="first_name" required="required">
                        </div>

                        <div class="input-group">
                            <span class="icon">
                                <i class="mt-2 pt-1 mx-3 fa fa-pencil" aria-hidden="true"></i>
                            </span>
                            <input type="text" class="form-control" placeholder="Last Name" name="last_name" required="required">
                        </div>

                        <div class="input-group">
                            <span class="icon">
                                <i class="mt-2 mx-3 fa fa-lock lock" aria-hidden="true"></i>
                            </span>
                            <input id="password" type="password" class="form-control" placeholder="Password" name="password" required="required">
                        </div>

                        <div class="input-group">
                            <span class="icon">
                                <i class="mt-2 mx-3 fa fa-user lock" aria-hidden="true"></i>
                            </span>
                            <input id="email" type="email" class="form-control" placeholder="Email" name="email" required="required">
                        </div>

                        <div class="input-group">
                            <span class="icon">
                                <i class="mt-2 mx-3 fa fa-angle-down lock" aria-hidden="true"></i>
                            </span>
                            <select name="gender" class="form-control input-md" required="required">
                                <option disabled selected>Select your Gender</option>
                                <option>Male</option>
                                <option>Female</option>
                            </select>
                        </div><br>
                        <a style="float:right" href="signin.php">Already have an account?</a><br><br>
                        
                        <button type="submit" id="signup" class="mx-auto d-block btn btn-info btn-lg" style="width:60%" name="sign_up">Sign up</button>
                        <?php
                            
                            include("insert_user.php");
                        ?>



                    </form>
                </div>
            
            </div>
        </div>
    </div>
    
    
</body>
</html>