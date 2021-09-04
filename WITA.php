<?php
// WITA
$url = "http://worldtimeapi.org/api/timezone/Asia/Makassar";
$kontenwita = file_get_contents($url);
$hasilwita = json_decode($kontenwita, true);
$datewita = new DateTime(@$hasilwita["datetime"]);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>WITA | Indonesia Time Zone</title>
    <link rel="stylesheet" href="fontawesome-free-5.15.1-web/css/all.min.css">
    <link rel="stylesheet" href="home.css">

<body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <img src="image/logonama.png" alt="" srcset="">
        <!-- <span class="navbar-brand"> </span> -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse mr-auto" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="ITZ.php"> <i class="fas fa-home"></i> Home |<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-globe"></i> Zona
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="WIB.php">WIB</a>
                        <a class="dropdown-item" href="WITA.php">WITA</a>
                        <a class="dropdown-item" href="WIT.php">WIT</a>
                    </div>
                </li>
                <li class="nav-item mr-3">
                    <a class="nav-link" href="about.php">| About <i class="fas fa-question"></i></a>
                </li>
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit"><i class="fas fa-search"></i> </button>
                </form>
            </ul>
        </div>
    </nav>
    <!-- akhir navbar -->
    <!-- Jumbotron -->
    <div class="jumbotron" id="jumbotronzona" style="text-align: center;">
        <h1 class="display-4" id="jamzona"><?= $datewita->format('H:i:s') ?></h1>
        <p class="lead" id="datezona"><?= $datewita->format('D d-m-Y') ?></p>
    </div>
    <!-- Akhir Jumbotron -->
    <!-- body -->
    <div class="container" id="penjelasan">
        <div class="row">
            <div class="col md-6">
                <div class="card-body">
                    <div class="crdpnj">
                        <div> Waktu Indonesia bagian Tengah yang disingkat menjadi WITA berada pada <i>garis 120 derajat Bujur Timur</i>. Pembagian waktu di Indonesia yang ada di wilayah ini sangat berbeda dengan pulau yang lainnya. Apabila pada daerah provinsi disini menunjukkan pukul 10 pagi maka, pada provinsi di zona bagian Barat akan menunjukkan pukul 9 pagi.
                            Namun, pada zona waktu di bagian Timur akan menunjukkan pukul 11 pagi. Dari penjelasan ini, kesimpulan yang ada yaitu waktu bagian Barat berbeda kurang satu jam dari waktu bagian Tengah dan waktu bagian Timur berbeda lebih satu jam dari waktu bagian Tengah.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <h4 id="dftr">DAFTAR KOTA:</h4>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="card shadow p-3 mb-2 rounded ">
                    <div class="card-body">
                        <ul>
                            <div class="badgea">
                                <span class="badge-pill"> Kalimantan Utara </span>
                            </div>
                            <li>Tarakan</li>
                        </ul>
                        <p></p>
                    </div>
                </div>
                <p></p>
                <div class="card shadow p-3 mb-2 rounded ">
                    <div class="card-body">
                        <ul>
                            <div class="badgea">
                                <span class="badge-pill"> Kalimantan Selatan </span>
                            </div>
                            <li>Banjarbaru</li>
                            <li>Banjarmasin</li>
                        </ul>
                        <p></p>
                    </div>
                </div>
                <p></p>
                <div class="card shadow p-3 mb-2 rounded ">
                    <div class="card-body">
                        <ul>
                            <div class="badgea">
                                <span class="badge-pill"> Sulawesi Selatan </span>
                            </div>
                            <li>Makassar</li>
                            <li>Palopo</li>
                            <li>Parepare</li>
                        </ul>
                        <p></p>
                    </div>
                </div>
                <p></p>
                <div class="card shadow p-3 mb-2 rounded ">
                    <div class="card-body">
                        <ul>
                            <div class="badgea">
                                <span class="badge-pill"> Nusa Tenggara Barat </span>
                            </div>
                            <li>Bima</li>
                            <li>Mataram</li>
                        </ul>
                        <p></p>
                    </div>
                </div>
                <p></p>
            </div>
            <div class="col-md-4">
                <div class="card shadow p-3 mb-2 rounded ">
                    <div class="card-body">
                        <ul>
                            <div class="badgea">
                                <span class="badge-pill"> Denpasar </span>
                            </div>
                            <li>Bali</li>
                        </ul>
                        <p></p>
                    </div>
                </div>
                <p></p>
                <div class="card shadow p-3 mb-2 rounded ">
                    <div class="card-body">
                        <ul>
                            <div class="badgea">
                                <span class="badge-pill"> Sulawesi Tenggara </span>
                            </div>
                            <li>Baubau</li>
                            <li>Kendari</li>
                        </ul>
                        <p></p>
                    </div>
                </div>
                <p></p>
                <div class="card shadow p-3 mb-2 rounded ">
                    <div class="card-body">
                        <ul>
                            <div class="badgea">
                                <span class="badge-pill"> Sulawesi Utara </span>
                            </div>
                            <li>Bitung</li>
                            <li>Kotamobagu</li>
                            <li>Tomohon</li>
                            <li>Manado</li>
                        </ul>
                        <p></p>
                    </div>
                </div>
                <p></p>
                <div class="card shadow p-3 mb-2 rounded ">
                    <div class="card-body">
                        <ul>
                            <div class="badgea">
                                <span class="badge-pill"> Kalimantan Timur </span>
                            </div>
                            <li>Balikpapan</li>
                            <li>Bontang</li>
                            <li>Samarinda</li>
                        </ul>
                        <p></p>
                    </div>
                </div>
                <p></p>
                <div class="card shadow p-3 mb-2 rounded ">
                    <div class="card-body">
                        <ul>
                            <div class="badgea">
                                <span class="badge-pill"> Sulawesi Tengah </span>
                            </div>
                            <li>Palu</li>
                        </ul>
                        <p></p>
                    </div>
                </div>
                <p></p>
            </div>
            <div class="col-md-4">
                <div class="card shadow p-3 mb-2 rounded ">
                    <div class="card-body">
                        <ul>
                            <div class="badgea">
                                <span class="badge-pill"> NTT </span>
                            </div>
                            <li>Kupang</li>
                        </ul>
                        <p></p>
                    </div>
                </div>
                <p></p>
                <div class="card shadow p-3 mb-2 rounded ">
                    <div class="card-body">
                        <ul>
                            <div class="badgea">
                                <span class="badge-pill"> NTB </span>
                            </div>
                            <li>Bima</li>
                            <li>Mataram</li>
                        </ul>
                        <p></p>
                    </div>
                </div>
                <p></p>
                <div class="card shadow p-3 mb-2 rounded ">
                    <div class="card-body">
                        <ul>
                            <div class="badgea">
                                <span class="badge-pill"> Sulawesi Barat </span>
                            </div>
                            <li>Majene</li>
                            <li>Mamasa</li>
                            <li>Mamuju</li>
                            <li>Mamuju Tengah</li>
                            <li>Pasangkayu</li>
                            <li>Polewali Mandar</li>
                        </ul>
                        <p></p>
                    </div>
                </div>
                <p></p>
                <div class="card shadow p-3 mb-2 rounded ">
                    <div class="card-body">
                        <ul>
                            <div class="badgea">
                                <span class="badge-pill"> Gorontalo </span>
                            </div>
                            <li>Gorontalo</li>
                        </ul>
                        <p></p>
                    </div>
                </div>
                <p></p>
            </div>
        </div>
    </div>
    <!-- akhir body -->
    <footer>
        <h6 style="text-align: center;"><i class="fas fa-info"></i> About Us</h6>
        <div class="container" id="cofooter">
            <div class="row">
                <div class="col-md-4" id="sampingkiri">
                    <img src="image/logo.png" alt="logo" id="logo">
                    <p></p>
                    <p> Indonesia Time Zone merupakan website untuk memberikan informasi daftar kota-kota yang terbagi dalam beberapa zona waktu di Indonesia </p>
                </div>
                <div class="col-md-8" id="tengah">
                    <p></p><span><u>our team:</u></span>
                    <p></p>
                    <div class="row">
                        <div class="col-md-4">
                            <p> <img src="image/fitra.jpg" alt="anggota1" id="anggota1"> Fitra Fatimah Putri </p>
                        </div>
                        <div class="col-md-4">
                            <p> <img src="image/afi.jpg" alt="anggota2" id="anggota2"> Muhammad Rafif </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <h6 style="text-align: center;">INTERAKSI MANUSIA KOMPUTER|2020</h6>
    </footer>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
    </head>
</body>

</html>