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