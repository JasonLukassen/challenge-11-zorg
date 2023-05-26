<?php include "db.php";

    // $name = "jOhn doE";
    // $patient_number = 1;
    // $room_number = 101;


    if (isset($_POST['name']) && isset($_POST['patient_number']) && isset($_POST['room_number'])){
        
        $name = mysqli_escape_string($connection, $_POST['name']);
        $patient_number = mysqli_escape_string($connection, $_POST['patient_number']);
        $room_number = mysqli_escape_string($connection, $_POST['room_number']);
    
        $name = strtolower($name);
        $name = ucwords($name);
    
        $query = "SELECT * FROM patient WHERE name = '$name' AND patient_number = '$patient_number' AND room_number = '$room_number'";
        $result = mysqli_query($connection, $query);
    
        if ($result) {
            if (mysqli_num_rows($result) > 0){
                echo "that person is in the database";
            } else {
                echo "that person isn't in the database.";
            }
        } else {
            echo "Error: " . $query . "<br>" . mysqli_error($connection);
        }

    }







?>