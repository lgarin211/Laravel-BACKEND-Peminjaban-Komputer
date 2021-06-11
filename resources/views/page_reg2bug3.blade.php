<!doctype html>
<html lang="en">

<head id="head">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css" integrity="sha512-UTNP5BXLIptsaj5WdKFrkFov94lDx+eBvbKyoe1YAfjeRPC+gT5kyZ10kOHCfNZqEui1sxmqvodNUx3KbuYI/A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.green.min.css" integrity="sha512-C8Movfk6DU/H5PzarG0+Dv9MA9IZzvmQpO/3cIlGIflmtY3vIud07myMu4M/NTPJl8jmZtt/4mC9bAioMZBBdA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="{{asset('/')}}LOGIN/fonts/icomoon/style.css">

    <link rel="stylesheet" href="{{asset('/')}}LOGIN/css/owl.carousel.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('/')}}LOGIN/css/bootstrap.min.css">

    <!-- Style -->
    <link rel="stylesheet" href="{{asset('/')}}LOGIN/css/style.css">

    <title>Login #6</title>
</head>

<body id="body" style="width: 100% ; overflow: hidden;">
    <div id="body">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
        <link rel="stylesheet" href="{{asset('/')}}LOGIN/fonts/icomoon/style.css">

        <link rel="stylesheet" href="{{asset('/')}}LOGIN/css/owl.carousel.min.css">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="{{asset('/')}}LOGIN/css/bootstrap.min.css">

        <!-- Style -->
        <link rel="stylesheet" href="{{asset('/')}}LOGIN/css/style.css">
        <div id="cre"></div>
        <div class="row">
            <div class="col-md-6" style="margin-top: 15%">
                <div class="contents mt-4">
                    <div class="container mt-4">
                        <div class="row text-center align-items-center justify-content-center">
                            <div class="col-md-12">
                                <div class="mb-4">
                                    <h3 id='wel'>Hallo Selamat Datang di Lab RPL </h3>
                                    <p class="alert alert-danger mb-4" id='paas'>sebelum Menggunakan PC Harap Piket dan Mengisi formulir berikut
                                        ini</p>
                                </div>
                                <div class="text-center" id='f'>
                                    <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1">Nama</span>
                                    <input  required autofocus type="text" name="nama" class="form-control" id="nama">
                                    </div>
                                    <div class="input-group mb-3">
                                        <label class="input-group-text" id="basic-addon" for="kelas">kelas</label>
                                        <input required type="text" name="kelas" class="form-control" id="kelas">
                                    </div>
                                    <div class="input-group mb-3">
                                        <label class="input-group-text" id="basic-addon" for="no_Absen">no Absen</label>
                                        <input required type="text" name="no_Absen" class="form-control" id="no_Absen">
                                    </div>
                                    <div class="input-group mb-3">
                                        <label class="input-group-text" id="basic-addon" for="nomor_Komputer">nomor Komputer</label>
                                        <input required type="text" name="nomor_Komputer" class="form-control" id="nomor_Komputer">
                                    </div>
                                    <div class="input-group mb-3">
                                        <label class="input-group-text" id="basic-addon" for="Keterangan">Komputer <br>Digunakan Untuk</label>
                                        <textarea required type="text" name="Keterangan" class="form-control" id="Keterangan" onclick="massa()"></textarea>
                                    </div>
                                    <div class=" input-group" id='massa' style="display: none">
                                        <button type="submit" class="btn btn-block btn-primary" id="kirim" onclick="pasi()">Kirim</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 owl-o owl-carousel owl-theme">
                @foreach ($baner as $item)
                    {{-- expr --}}
                <div class="item tre" style="background-image: url('{{ $item->baner }}');    width: 100%;
    height: 100vh;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    -webkit-transition: background-image 0.2s ease-in-out;
    transition: background-image 0.2s ease-in-out;"></div>
                @endforeach

            </div>
        </div>

        <script src="{{asset('/')}}LOGIN/js/jquery-3.3.1.min.js"></script>
        <script src="{{asset('/')}}LOGIN/js/popper.min.js"></script>
        <script src="{{asset('/')}}LOGIN/js/bootstrap.min.js"></script>
        <script src="{{asset('/')}}LOGIN/js/main.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


        <script>
            $('.owl-o').owlCarousel({
                loop: true,
                margin: 0,
                nav: true,
                autoplay:true,
                autoplayTimeout:2000,
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 1
                    },
                    1000: {
                        items: 1
                    }
                }
            })
            var van = 0

            function massa() {
                document.getElementById('massa').style = "display: block";
            }

            function pasi() {

                var nama = document.getElementById('nama').value
                var no_Absen = document.getElementById('no_Absen').value
                var kelas = document.getElementById('kelas').value
                var nomor_Komputer = document.getElementById('nomor_Komputer').value
                var Keterangan = document.getElementById('Keterangan').value
                var mals = `?Siswa=${nama}&&Absen=${no_Absen}
            &&Kelas=${kelas}&&PC=${nomor_Komputer}
            &&Alasan=${Keterangan}`
                axios.get('{{ url("/u/login") }}' + mals + '&&api=true')
                    .then(function(response) {
                        sessionStorage.setItem("Status", `${nama} anda sudah di izinkan menggunakan Komputer Nomor ${nomor_Komputer}`)
                        document.getElementById('paas').innerHTML = `Jaga Kebersihan Ruangan Serta Komputer`
                        document.getElementById('wel').innerHTML = `Hallo ${nama} Bijak Dalam Penggunaan Lab, Gunakan Komputer ${nomor_Komputer}`
                        document.getElementById('f').innerHTML = ''
                        setInterval(() => {
                            console.log('mas')
                            window.close();
                        }, 5000)

                    })
                    .catch(function(error) {
                        console.log(error)
                    })

            }
        </script>
    </div>

</body>

</html>
