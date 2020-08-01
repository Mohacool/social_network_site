<!DOCTYPE html>
<?php
    session_start();
    include("includes/header.php");


    if (!isset($_SESSION['user_email'])){
        header("location: index.php");
    }
?>
<html lang="en">
<head>
    <?php 
        $user = $_SESSION['user_email'];
        $get_user = "select * from users where user_email='$user'";
        $run_user = mysqli_query($con,$get_user);
        $row = mysqli_fetch_array($run_user);

        $user_name = $row['user_name'];
    ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php 
            echo "$user_name";
        ?>
    </title>

     <!-- Import Bootstrap,Jquery... -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    
    <script
        src="https://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="style/home_style2.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/croppie/2.6.5/croppie.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/croppie/2.6.5/croppie.min.css">

    <style>
        body{
            overflow-x:hidden;
        }
        #cover-img{
            height:100%;
            width:100%;
        }
        #profile-img{
            position:absolute;
            top:140px;
            left:40px;
            
        }
        #update_profile{
            position:relative;
            top:150px;
            cursor:pointer;
            left:93px;
            border-radius:4px;
            background-color:rgba(0,0,0,0.1);
            transform: translate(-50%, -50%);
        }
        .rounded-circle{
            border:4px solid rgba(10, 117, 223, 0.301);
        }
        
        
        
    </style>
</head>
<body>
    
    <div class="row">
        <div class="col-sm-1"></div>
        <div class="col-sm-10">
            <!-- start  php -->
            <?php 
                
                echo " 
                    <div>
                        <div class='container-fluid'>
                            <img id='cover-img' src='cover/$user_cover'>
                        </div>
                    </div>
                    <form action='profile.php?u_id=$user_id' method='post'
                        enctype='multipart/form-data'>
                        <ul class='nav pull-left' style='position:absolute;top:10px;left:40px' >
                            <li class='dropdown'>
                                <button class='btn btn-default' data-toggle='dropdown'>Change Cover</button>
                                <div class='dropdown-menu' aria-labelledby='navbarDropdown'>
                                    <div class='col' style='width:100%;font-size:15px'>
                                        <p> Upload a new photo then click <strong>Update </p>
                                    </div>
                                    <div class='col' style='width:100%;font-size:15px'>
                                        <input type='file' name='u_cover' size='60' >
                                    </div>
                                    <br>
                                    <div class='col' style='width:100%;font-size:15px;left:25%;'>
                                        <button name='submit' class='ml-0 btn btn-info'>Update Cover</button>
                                    </div>     
                                </div>

                            </li>
                        </ul>
                    </form>
                ";
            ?>
            <!-- end -->

            <div id='profile-img'>
                <!-- <img src='users/$user_image' alt='Profile' class='img-circle'> -->
                
                <img src='users/user3.png' alt='Profile' class='rounded-circle' data-holder-rendered='true' height='185px' width='180px'>

                <form action='profile.php?u_id=$user_id' method='post' enctype='multipart/form-data'>
                    <label id='update_profile'>
                        Select Profile 
                        <input type='file' name='u_image' size='60'><br><br>
                    </label>
                    <button id='button_profile' name='update' class='btn btn-info'>
                        Update Profile
                    </button>
                    
                </form>
            </div>

        </div>

    </div>
    
</body>
</html>