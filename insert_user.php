<?php
    include("includes/connection.php");
    
    if(isset($_POST['sign_up'])){

        
        //$first_name = htmlentities(mysqli_real_escape_string($con,$_POST['first_name']));
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $pass = $_POST['password'];
        $email = $_POST['email'];
        $gender = $_POST['gender'];
        $status = "verified";
        $posts = "no";
        $newgid = sprintf('%05d',rand(0,99999));

        $username = strtolower($first_name . "_" . $last_name . "_" . $newgid);
        $check_username_query = "select username from users where user_email='$email'";
        $run_username = mysqli_query($con,$check_username_query);
        if(strlen($pass)<9){
            printf(strlen($pass));
            echo "

                <script>
                    Swal.fire(
                        'Error',
                        'Password must be atleast 9 letters long',
                        'error'
                    );
                    exit();
                </script>
            ";
        }

        // Query to check if email already exists in the table
        $check_email = "select * from users where user_email='$email'";
        $run_email = mysqli_query($con,$check_email);

        // Check number of rows returned from the query
        $check = mysqli_num_rows($run_email);

        // If it already exists 
        if ($check == 1){
            echo "
                <script>
                    Swal.fire(
                        'Error',
                        'This email is already registered. Try another email',
                        'error'
                    );
                </script>
            ";
            
        }
        else{
            printf("weclome!");
            echo "
                <script>
                    Swal.fire(
                        'Your account has been succesfully created',
                        `Welcome ${first_name}!`,
                        'success'
                    );
                </script>
            ";
        }
        $rand = rand(1,3); // Rand between 1 and 3

        if ($rand==1)
            $profile_pic = "user1.jpg";
        
        else if ($rand==2)
            $profile_pic = "user2.jpg";
        
        else if($rand==2)
            $profile_pic = "user3.jpg";
        

        $insert = "insert into users (f_name,l_name,user_name,describe_user,user_pass,
        user_email,user_gender,user_image,user_cover,user_reg_date,status,posts)
        
        values('$first_name','$last_name','$username','Default status!','$pass','$email',
        '$gender','$profile_pic','cover2.jpg',NOW(),'$status','$posts')";

        
        


        $stmt = $con->prepare($insert);
        if($stmt->execute())

        {
            echo "New user was created successfully, please wait for activation...";
            printf("New user was created successfully, please wait for activation...");
        } 
        else { 
            echo "There was a problem";
            printf("There was a problem");
        }

        $stmt->close();
        $con->close();
        
        /*
        // Check the error from the query
        if (!$con -> query($insert)) {
            printf("Error description: " . $con -> error);

            printf("values('$first_name','$last_name','$username','Default status!','$pass','$email'
            '$gender','$profile_pic','main_pic.jpg',now(),'$status','$posts')");
        }

        if ($query){
            echo "
                <script>
                    echo 'Welcome '$first_name'! you are good to go';
                </script>

            ";
        }
        else{
            printf("issues with query");
            echo "
                <script>
                    echo 'Issue';
                    window.open('signup.php');
                </script>
            ";
        }
        */

    }
?>