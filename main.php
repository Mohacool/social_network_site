<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coding Cafe Login and Signup</title>

    <!-- Import Bootstrap,Jquery... -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <script
        src="https://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>

    <!-- Sweet Alert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

    <link rel="stylesheet" href="style/main_style.css">
</head>
<body>
    
    <div class="navbar bg-dark" height="100px">
        <h1 class="mx-auto" style="color:white;">Mohamed's Cafe </h1>
    </div>
    

    <div class="container">
        <br class="mt-4 blue">
        <div class="row blue">
            <div class="col-sm-6 blue">
                <img src="images/mainpic.jpg" alt="" width="100%" class="rounded mx-auto d-block">
            </div>
            <div class="col-sm-6 blue">
                <div class="row blue">
                    <h2 class="mx-auto ">See what your friends are up to</h2>
                </div>
                <div class="row button_container blue">
                    <div class="col blue">
                        <form action="main.php" method="post">
                            
                            <button  id="signup" class="mx-auto d-block btn btn-info btn-lg" name="signup">Sign up</button>
                            <br><br>
                            
                            <?php
                                
                                if (isset($_POST['signup'])){

                                    echo "
                                    <script>
                                        window.open('signup.php','_self');
                                    </script>
                                    ";
                                }
                                
                            ?>
                        
                        
                        
                            <button id="login" class="mx-auto d-block btn btn-info btn-lg" name="login">Log in</button>
                            <br><br>
                            <?php
                                if (isset($_POST['login'])){
                                    echo "
                                    <script>
                                        window.open('signin.php','_self')
                                    </script>
                                    ";
                                }
                            ?> 

                        </form>
                    </div>
                </div>
                
            </div>
        
        </div>

    </div>
    
</body>
</html>