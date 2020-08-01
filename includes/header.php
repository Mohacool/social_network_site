<?php
    
    include("connection.php");
    
?>


<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="home.php" >Mohamed's Cafe</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse"
    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <?php
                $user = $_SESSION['user_email'];
                $get_user = "select * from users where user_email='$user'";
                $run_user = mysqli_query($con,$get_user);

                // Fetch the row in the table
                $row = mysqli_fetch_array($run_user);

                $user_id = $row['user_id'];
                $user_name = $row['user_name'];
                $first_name = $row['f_name'];
                $last_name = $row['l_name'];
                $describe_user = $row['describe_user'];
                $user_pass = $row['user_pass'];
                $user_email = $row['user_email'];
                $user_gender = $row['user_gender'];
                $user_image = $row['user_image'];
                $user_cover = $row['user_cover'];
                $register_date = $row['user_reg_date'];

                $user_posts = "select * from posts where user_id='$user_id'";
                $run_posts = mysqli_query($con,$user_posts);
                $num_posts = mysqli_num_rows($run_posts);
            ?>
            <li class="nav-item active pl-4">
                <a href='profile.php' class="nav-link">
                    <?php
                        echo "My Profile";
                    ?>
                </a>
            </li>
            <li class="nav-item">
                <a href="home.php" class="nav-link">Home</a>
            </li>
            <li class="nav-item">
                <a href="find_people.php" class="nav-link">Find People</a>
            </li>
            <li class="nav-item">
                <a href="messages.php/?u_id=new" class="nav-link">Messages</a>
            </li>
            <li class="nav-item dropdown" style="margin-left:-12px">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <?php 
                        echo "
                            <a class='dropdown-item' href='#'>
                                My Posts <span class='badge badge-primary'>$num_posts</span>
                            </a>

                            <a class='dropdown-item' href='edit_profile.php?u_id=$user_id'> Edit account </a>
                        ";
                    ?>
                    
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="logout.php">Logout</a>
                </div>
            </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
    
    
    </div>

</nav>

        
        