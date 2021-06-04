<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('/')}}LOGIN/fonts/icomoon/style.css">

    <link rel="stylesheet" href="{{asset('/')}}LOGIN/css/owl.carousel.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('/')}}LOGIN/css/bootstrap.min.css">

    <!-- Style -->
    <link rel="stylesheet" href="{{asset('/')}}LOGIN/css/style.css">

    <title>Login #6</title>
</head>

<body id="body">


    <div class="d-lg-flex half">
        <div class="bg order-1 order-md-2" id="tre"></div>
        <div class="contents order-2 order-md-1">
            <div class="container ">
                <div class="row text-center align-items-center justify-content-center">
                    <div class="col-md-7">
                        <div class="mb-4">
                            <h1>terimakasih {{Session::get('Active')}} Silahkan Menggunakan PC</h1>
                        </div>
                        <script>
                            var x = location.hostname;
                            console.log(x);
                        </script>
                    </div>
                </div>
            </div>
        </div>


    </div>



    <script src="{{asset('/')}}LOGIN/js/jquery-3.3.1.min.js"></script>
    <script src="{{asset('/')}}LOGIN/js/popper.min.js"></script>
    <script src="{{asset('/')}}LOGIN/js/bootstrap.min.js"></script>
    <script src="{{asset('/')}}LOGIN/js/main.js"></script>

</body>

</html>
