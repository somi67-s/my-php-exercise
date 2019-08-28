<?php //include_once "init.php";
require_once "C:\\xampp\\htdocs\\php3.exp\\Daily_Exm\\01_Register&Login\\init.php";

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $email = trim($_POST['email']);
    $password = $_POST['password'];
    if (login($email, $password)) {
        echo "شما با موفقیت وارد شدید!";
        jsRedirect(BASE_URL, 3);
    } else {
        echo "نام کاربری یا کلمه عبور اشتباه است!!!";
    }
}