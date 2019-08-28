<?php include_once "init.php";
/*if (isset($_GET['action']) && $_GET['action'] == 'logout') {
    logout();
}*/


?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />

    <title>Exersice 01</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="alert alert-dark text-center mt-3" role="alert">
                    صفحه اصلی
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="btn-box text-center">
                    <?php if (islogedIn()) : ?>
                    <a href="<?= 'login.php?action=logout' ?>"><button type="button"
                            class="btn btn-danger">خروج</button></a>
                    <?php else : ?>
                    <a href="login.php"><button type="button" class="btn btn-info">ورود</button></a>
                    <a href="register.php"><button type="button" class="btn btn-success">ثبت نام</button></a>
                    <?php endif; ?>
                    <a href="ticket.php"><button type="button" class="btn btn-warning">ارسال تیکت به
                            پشتیبانی</button></a>

                </div>
            </div>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="assets/js/jquery-3.2.1.slim.min.js"></script>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script> -->
    <script src="assets/js/bootstrap.min.js"></script>
</body>

</html>