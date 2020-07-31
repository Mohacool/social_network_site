<?php

    $db_user = "root";
    $db_pass = "";
    $db_name = "social_network";
    $db_host = "localhost";
    
    // $con = new PDO('mysql:host=localhost;dbname=' . $db_name . ';charset=utf8', $db_user, $db_pass);
    // $con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    
    $con = new mysqli($db_host,$db_user,$db_pass,$db_name);
  
    /* check connection */
    if ($con->connect_errno) {
        printf("Connect failed: %s\n", $con->connect_error);
        exit();
    }
        /* check if server is alive */
    if ($con->ping()) {
        printf ("Our connection is ok!\n");
    } else {
        printf ("Error: %s\n", $con->error);
    }

?>