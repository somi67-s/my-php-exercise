<?php include_once "init.php";
if (isset($_GET['action']) && $_GET['action'] == 'logout') {
    logout();
}
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />

    <title>Login Form</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="alert alert-info text-center mt-3" role="alert">
                    فرم ورود
                </div>
            </div>
        </div>
        <div class="row">
            <form class="col-md-12" method="POST" action="procces/loginProcces.php">
                <div class="form-group text-right">
                    <label for="loginEmail">آدرس ایمیل</label>
                    <input type="email" class="form-control" id="loginEmail" aria-describedby="emailHelp"
                        placeholder="Enter email" name="email">
                </div>
                <div class="form-group text-right">
                    <label for="loginPass">کلمه عبور</label>
                    <input type="password" class="form-control" id="loginPass" placeholder="Password" name="password">
                </div>

                <div class="text-center"><button type="login" class="btn btn-info col-md-6">ورود</button></div>
            </form>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="assets/js/jquery-3.2.1.slim.min.js"></script>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script> -->
    <script src="assets/js/bootstrap.min.js"></script>
</body>

</html>