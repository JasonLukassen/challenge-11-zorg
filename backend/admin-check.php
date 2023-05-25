<?php include "db.php";

    $username = mysqli_real_escape_string($connection, $_POST['username']);
    $password = mysqli_real_escape_string($connection, $_POST['password']);

    $query = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
    $query_result = mysqli_query($connection, $query);

    if ($query_result) {
        if (mysqli_num_rows($query_result) > 0) {
            echo "You are logged in";
            // header("Location: home.php");
        } else {
            echo "Invalid login credentials";
        }
    } else {
        echo "Error executing the login query: " . mysqli_error($connection);
    }





?>