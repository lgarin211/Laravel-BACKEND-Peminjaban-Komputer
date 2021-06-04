<!doctype html>
<html lang="en">

<head id="head">
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
                            <h3>Hallo Selamat Datang di Lab RPL 1</h3>
                            <p class="mb-4">sebelum Login Harap ini formulir berikut ini</p>
                        </div>
                        <!-- <form action="#" method="post">
                            <div class="form-group first">
                                <label for="username">Username</label>
                                <input type="text" class="form-control" id="username">
                            </div>
                            <div class="form-group last mb-3">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" id="password">
                            </div>
                            <div class="d-flex mb-5 align-items-center">
                                <label class="control control--checkbox mb-0"><span class="caption">Remember me</span>
                                    <input type="checkbox" checked="checked" />
                                    <div class="control__indicator"></div>
                                </label>
                                <span class="ml-auto"><a href="#" class="forgot-pass">Forgot Password</a></span>
                            </div>
                            <input type="submit" value="Log In" class="btn btn-block btn-primary">
                            <span class="d-block text-center my-4 text-muted">&mdash; or &mdash;</span>
                            <div class="social-login">
                                <a href="#" class="facebook btn d-flex justify-content-center align-items-center">
                                    <span class="icon-facebook mr-3"></span> Login with Facebook
                                </a>
                                <a href="#" class="twitter btn d-flex justify-content-center align-items-center">
                                    <span class="icon-twitter mr-3"></span> Login with Twitter
                                </a>
                                <a href="#" class="google btn d-flex justify-content-center align-items-center">
                                    <span class="icon-google mr-3"></span> Login with Google
                                </a>
                            </div>
                        </form> -->
                        <form action="" method="POST" class="text-center">
                            @csrf
                            <div class="form-group first">
                                <label for="nama">nama</label>
                                <input type="text" name="nama" class="form-control" id="nama">
                            </div>
                            <div class="form-group">
                                <label for="kelas">kelas</label>
                                <input type="text" name="kelas" class="form-control" id="kelas">
                            </div>
                            <div class="form-group">
                                <label for="no_Absen">no Absen</label>
                                <input type="text" name="no_Absen" class="form-control" id="no_Absen">
                            </div>
                            <div class="form-group">
                                <label for="nomor_Komputer">nomor Komputer</label>
                                <input type="text" name="nomor_Komputer" class="form-control" id="nomor_Komputer">
                            </div>
                            <div class="form-group last mb-3">
                                <label for="Keterangan">Komputer Digunakan Untuk</label>
                                <textarea type="text" name="Keterangan" class="form-control" id="Keterangan"></textarea>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-block btn-primary">Kirim</button>
                            </div>

                        </form>
                        <script>
                            var x = location.hostname;
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
    <script>
        /* Get the documentElement (<html>) to display the page in fullscreen */
        var elem = document.documentElement;
        console.log(elem);
        document.fullscreenEnabled=true;
        /* View in fullscreen */
        function openFullscreen() {
            console.log('run');
            if (elem.requestFullscreen) {
                elem.requestFullscreen();
            } else if (elem.webkitRequestFullscreen) {
                /* Safari */
                elem.webkitRequestFullscreen();
            } else if (elem.msRequestFullscreen) {
                /* IE11 */
                elem.msRequestFullscreen();
            }
        }
        openFullscreen()
        console.log('ca');
    </script>
</body>

</html>
