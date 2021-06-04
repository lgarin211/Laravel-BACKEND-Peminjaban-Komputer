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
<div id="body">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('/')}}LOGIN/fonts/icomoon/style.css">

    <link rel="stylesheet" href="{{asset('/')}}LOGIN/css/owl.carousel.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('/')}}LOGIN/css/bootstrap.min.css">

    <!-- Style -->
    <link rel="stylesheet" href="{{asset('/')}}LOGIN/css/style.css">
    <div id="cre"></div>
    <div class="d-lg-flex half">
        <div class="bg order-1 order-md-2" id="tre"></div>
        <div class="contents order-2 order-md-1">
            <div class="container ">
                <div class="row text-center align-items-center justify-content-center">
                    <div class="col-md-7">
                        <div class="mb-4">
                            <h3 id='wel'>Hallo Selamat Datang di Lab RPL </h3>
                            <p class="mb-4" id='paas'>sebelum Menggunakan PC Harap Piket dan Mengisi formulir berikut
                                ini</p>
                        </div>
                        <div class="text-center" id='f'>
                            @csrf
                            <div class="form-group first">
                                <label style="color: red;" for="nama">nama</label>
                                <input required autofocus type="text" name="nama" class="form-control" id="nama"
                                    >
                            </div>
                            <div class="form-group">
                                <label style="color: red;" for="kelas">kelas</label>
                                <input required type="text" name="kelas" class="form-control" id="kelas"
                                    >
                            </div>
                            <div class="form-group">
                                <label style="color: red;" for="no_Absen">no Absen</label>
                                <input required type="text" name="no_Absen" class="form-control" id="no_Absen"
                                    >
                            </div>
                            <div class="form-group">
                                <label style="color: red;" for="nomor_Komputer">nomor Komputer</label>
                                <input required type="text" name="nomor_Komputer" class="form-control"
                                    id="nomor_Komputer" >
                            </div>
                            <div class="form-group last mb-3">
                                <label style="color: red;" for="Keterangan">Komputer Digunakan Untuk</label>
                                <input required type="text" name="Keterangan" class="form-control" id="Keterangan"
                                    onclick="massa()">
                            </div>
                            <div class="form-group" id='massa' style="display: none">
                                <button type="submit" class="btn btn-block btn-primary" id="kirim"
                                    onclick="pasi()">Kirim</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{asset('/')}}LOGIN/js/jquery-3.3.1.min.js"></script>
    <script src="{{asset('/')}}LOGIN/js/popper.min.js"></script>
    <script src="{{asset('/')}}LOGIN/js/bootstrap.min.js"></script>
    <script src="{{asset('/')}}LOGIN/js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

    <script>
        var van=0
        function massa() {
                document.getElementById('massa').style="display: block";
        }
        function pasi() {

            var nama=document.getElementById('nama').value
            var no_Absen=document.getElementById('no_Absen').value
            var kelas=document.getElementById('kelas').value
            var nomor_Komputer=document.getElementById('nomor_Komputer').value
            var Keterangan=document.getElementById('Keterangan').value
            var mals=`?Siswa=${nama}&&Absen=${no_Absen}
            &&Kelas=${kelas}&&PC=${nomor_Komputer}
            &&Alasan=${Keterangan}`
            axios.get('{{ url("/u/login") }}'+mals+'&&api=true')
              .then(function (response) {
                sessionStorage.setItem("Status", `${nama} anda sudah di izinkan menggunakan Komputer Nomor ${nomor_Komputer}`)
                document.getElementById('paas').innerHTML=`Jaga Kebersihan Ruangan Serta Komputer`
                document.getElementById('wel').innerHTML=`Hallo ${nama} Bijak Dalam Penggunaan Lab, Gunakan Komputer ${nomor_Komputer}`
                document.getElementById('f').innerHTML=''
                setInterval(() => {
                    console.log('mas')
                   window.close(); 
                }, 5000)

                })
              .catch(function (error) {
                console.log(error)
      })

    }


    </script>
</div>

</body>

</html>

