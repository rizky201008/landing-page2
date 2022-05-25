<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home Page</title>

    <link rel="icon" type="image/x-icon" href="./assets/img/Logo.ico">
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Akshar:wght@300&family=Anton&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Akshar:wght@300&family=Libre+Baskerville:wght@700&display=swap"
        rel="stylesheet">
    <!-- End -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    
        <link rel="stylesheet" href="style.css">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">
    <!-- End -->

</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container-fluid">
            <a class="navbar-brand" href="">Vixiloc</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#feature">Feature</a>
                    </li>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#follow">Follow</a>
                    </li>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#chat">Chat With Us</a>
                    </li>
                </ul>
                <ul class="navbar-nav ms-auto">
                    <li><a href="/auth/register"><button type="button" class="btn btn-warning">Ayo Daftar!</button></a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- End -->

    <!-- Img Jumbo -->
    <img src="./assets/img/jumbo-image.svg" alt="main-image" class="img-fluid">
    <!-- End -->

    <!-- About -->
    <section id="about">
        <div class="row justify-content-center text-center">
            <div class="col-md-3">
                <div class="card bg-light" style="border-radius: 30px;">
                    <h1 class="text-dark">About Vixiloc</h1>
                </div>
            </div>
        </div>
        <div class="row justify-content-center text-center">
            <div class="col-md-9">
                <p class="text-dark fs-3" style="font-family: 'Libre Baskerville', serif;;">
                    Halo semuanya perkenalkan ini adalah website andalan para gamers karena website ini sangat banyak
                    sekali produk game online seperti diamond, voucher dll dengan harga yang super murah. <b>Vixiloc</b>
                    telah berizin resmi dari pemerintah dengan nomor NIB <i>2405220026832</i>. Selain produk game,
                    <b>Vixiloc</b> juga menyediakan beberapa produk digital lainnya seperti voucher wifi.id, pulsa
                    seluler, token PLN dan lain-lain. Ayo mulai mendaftar di website kami dan dapatkan harga terbaik.
                </p>
            </div>
        </div>
        <div class="row text-center text-light justify-content-center">
            <div class="col-md-3 mb-3">
                <div class="carda">
                    <h2>Total Pengguna</h2>
                    <h1 class="num text-white" data-val="10000"></h1>
                </div>
            </div>
            <div class="col-md-3 mb-3">
                <div class="carda">
                    <h2>Total Transaksi</h2>
                    <h1 class="num text-white" data-val="10000"></h1>
                </div>
            </div>
            <div class="col-md-3 mb-3">
                <div class="carda">
                    <h2>Total Deposit</h2>
                    <h1 class="num text-white" data-val="10000"></h1>
                </div>
            </div>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#80ECFF" fill-opacity="1"
                d="M0,128L110.8,64L221.5,160L332.3,256L443.1,64L553.8,32L664.6,96L775.4,256L886.2,0L996.9,0L1107.7,128L1218.5,160L1329.2,192L1440,192L1440,320L1329.2,320L1218.5,320L1107.7,320L996.9,320L886.2,320L775.4,320L664.6,320L553.8,320L443.1,320L332.3,320L221.5,320L110.8,320L0,320Z">
            </path>
        </svg>
    </section>
    <!-- End -->

    <!-- Feature -->
    <section id="feature">
        <div class="row text-center justify-content-center">
            <div class="col-md-8">
                <h1 class="mb-3">Keunggulan Website Kami</h1>
            </div>
        </div>
        <div class="row justify-content-center text-light" style="font-family: 'Libre Baskerville', serif;;">
            <div class="col-md-3 mb-3">
                <div class="cardf">
                    <div class="card-body text-center">
                        <h5 class="card-title">Aman</h5>
                        <p class="card-text">Vixiloc dijamin aman dan telah berizin dengan NIB <b>2405220026832</b>.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-3">
                <div class="cardf">
                    <div class="card-body text-center">
                        <h5 class="card-title">Instan</h5>
                        <p class="card-text">Vixiloc memproses pesanan topup hanya dengan waktu <b>maksimal 1 menit</b>
                            dengan kecepatan tinggi agar kamu bisa menerima pesanan kamu secepatnya.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-3">
                <div class="cardf">
                    <div class="card-body text-center">
                        <h5 class="card-title">Non-Stop</h5>
                        <p class="card-text">Vixiloc memproses pesanan tanpa henti hingga <b>24 Jam</b>.</p>
                    </div>
                </div>
            </div>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#45dffa" fill-opacity="1"
                d="M0,160L120,186.7C240,213,480,267,720,256C960,245,1200,171,1320,133.3L1440,96L1440,320L1320,320C1200,320,960,320,720,320C480,320,240,320,120,320L0,320Z">
            </path>
        </svg>
    </section>
    <!-- End -->

    <!-- Follow Us -->
    <section id="follow">
        <div class="row pb-3 text-center justify-content-center">
            <div class="col-md-3">
                <h1>Ikuti Media Sosial Kami</h1>
            </div>
        </div>
        <div class="row text-center justify-content-center">
            <div class="col-md-1">
                <a href="https://tiktok.com/vixiloc"><i class="bi bi-tiktok"></i></a>
            </div>
            <div class="col-md-1">
                <a href="https://instagram.com/vixiloc"><i class="bi bi-instagram"></i></a>
            </div>
        </div>
    </section>
    <!-- End -->

    <!-- Chat -->
    <section id="chat">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h1 class="text-dark text-center">Chat With Us</h1>
            </div>
        </div>
        <div class="row justify-content-center text-center">
            <div class="col-md-1">
                <a href="https://wa.me/6281232435871"><i class="bi bi-whatsapp"></i></a>
            </div>
            <div class="col-md-1">
                <a href="https://t.me/vixilocmyid"><i class="bi bi-telegram"></i></a>
            </div>
        </div>
    </section>
    <!-- End -->

    <!-- Footer -->
    <footer class="text-center justify-content-center pb-1 pt-1 bg-dark">
        <p class="text-white">Created By <a href="" class="text-white"><b>Vixiloc Team</b></a> ©️2022~Vixiloc</p>
    </footer>
    <!-- End -->

    <!-- Count Up Script -->
    <script>
        let valueDisplays = document.querySelectorAll(".num");
        let interval = 3000;

        valueDisplays.forEach((valueDisplay) => {
        let startValue = 0;
        let endValue = parseInt(valueDisplay.getAttribute("data-val"));
        let duration = Math.floor(interval / endValue);
        let counter = setInterval(function () {
            startValue += 1;
            valueDisplay.textContent = startValue;
            if (startValue == endValue) {
            clearInterval(counter);
            }
        }, duration);
        });
    </script>
    <!-- End -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
        crossorigin="anonymous"></script>
</body>

</html>