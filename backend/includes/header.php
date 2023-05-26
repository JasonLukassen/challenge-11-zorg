<?php 

$css_page = "";

$current_page = basename($_SERVER['PHP_SELF']);

switch ($current_page) {
    case "index.php";
        $css_page = "styles.css";
        break;
    case "staff_login.php";
        $css_page = "staff_login.css";
        break;
    case "patient_login.php";
        $css_page = "patient_login.css";
        break;
    case "menu.php";
        $css_page = "menu.css";
        break;
    case "alert.php";
        $css_page = "alert.css";
        break;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to ORDERLOOZA!</title>
    <link rel="stylesheet" href="<?php echo $css_page ?>">
    <link href="https://fonts.googleapis.com/css2?family=family=Pacifico&family=Quicksand:wght@300&display=swap" rel="stylesheet">
</head>