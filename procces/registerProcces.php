<?php
require_once "C:\\xampp\\htdocs\\php3.exp\\Daily_Exm\\01_Register&Login\\init.php";

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $userFields = array(
        'email' => $_POST['email'],
        'password' => $_POST['password'],
        'username' => $_POST['username'],
        'fullname' => $_POST['fullname']
    );
    registerUser((object) $userFields);
    echo "اطلاعات شما با موفیت دخیره شد!";
    echo "<script>
setTimeout(function() {
    window.location.href = '" . BASE_URL . "';
}, 3000);
</script>";
} else echo "اطلاعات وارد شده نادرست است!!!!";