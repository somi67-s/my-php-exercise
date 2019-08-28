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
                <div class="alert alert-success text-center mt-3" role="alert">
                    فرم ثبت نام
                </div>
            </div>
        </div>
        <div class="row">
            <form class="col-md-12" method="POST" action="procces/registerProcces.php">
                <div class="form-group text-right">
                    <label for="email">آدرس ایمیل</label>
                    <input type="email" class="form-control" id="email" aria-describedby="emailHelp"
                        placeholder="Enter email" name="email">
                </div>
                <div class="form-group text-right">
                    <label for="password">کلمه عبور</label>
                    <input type="password" class="form-control" id="password" placeholder="Password" name="password">
                </div>
                <div class="form-group text-right">
                    <label for="username">نام کاربری</label>
                    <input type="text" class="form-control" id="username" aria-describedby="emailHelp"
                        placeholder="Enter username" name="username">
                </div>
                <div class="form-group text-right">
                    <label for="fullname">نام کامل به فارسی</label>
                    <input type="text" class="form-control" id="fullname" aria-describedby="emailHelp"
                        placeholder="Enter fullname" name="fullname">
                </div>

                <div class="text-center"><button type="register" class="btn btn-success col-md-6">ثبت نام</button></div>
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