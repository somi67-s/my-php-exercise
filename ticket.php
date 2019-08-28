<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />

    <title>Tiket Form</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="alert alert-warning text-center mt-3" role="alert">
                    فرم ارسال پیام به پشتیبانی
                </div>
            </div>
        </div>
        <div class="row">
            <form class="col-md-12" method="POST" action="procces/ticketProcces.php">
                <div class="form-group text-right">
                    <label for="email">آدرس ایمیل</label>
                    <input type="email" class="form-control" id="email" aria-describedby="emailHelp"
                        placeholder="Enter email" name="email">
                </div>
                <div class="form-group text-right">
                    <label for="fullname">نام کامل به فارسی</label>
                    <input type="text" class="form-control" id="fullname" aria-describedby="emailHelp"
                        placeholder="Enter fullname" name="fullname">
                </div>
                <div class="form-group text-right">
                    <label for="message">متن پیام</label>
                    <textarea class="form-control" id="message" placeholder="Enter message ..."
                        name="message"></textarea>
                </div>
                <div class="text-center"><button type="submit" class="btn btn-success col-md-6">ارسال تیکت</button>
                </div>
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