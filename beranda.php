<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport" />
    <title>PSB ONLINE | <?= $setting['nama_sekolah'] ?></title>
    <!-- META DISKRIPSI-->
    <meta name="description" content="Mari bergabung Bersama Kami di <?= $setting['nama_sekolah'] ?>, Pendaftaran Peserta didik Baru Tahun <?= date('Y') ?> Kembali dibuka ">
    <meta name="keywords" content="simasapp v.1.1,simas madrasah, simas sekolah, web simas," />

    <!-- Vendor -->
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet" />

    <link href="https://unbk.kemdikbud.go.id/vendor/chart/Chart.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="assets/modules/izitoast/css/iziToast.min.css">

    <link href="https://unbk.kemdikbud.go.id/assets/css/front.min.css" rel="stylesheet" />
    <link rel="shortcut icon" href="<?= $setting['logo'] ?>" />

    <link rel="stylesheet" href="assets/css/1.css">
    <link rel="stylesheet" href="assets/css/2.css">
    <link rel="stylesheet" href="assets/css/3.css">

    <link rel="stylesheet" href="assets/css/components2.css">

    <link rel="stylesheet" href="assets/modules/bootstrap-daterangepicker/daterangepicker.css">
    <link rel="stylesheet" href="assets/modules/fontawesome/css/all.min.css">
    <!--WAKTU JALAN-->
    <link rel="stylesheet" type="text/css" href="assets/front/vendor/animate/animate.css">
    <link rel="stylesheet" type="text/css" href="assets/front/vendor/countdowntime/flipclock.css">
    <link rel="stylesheet" type="text/css" href="assets/front/css/main.css">
    <!--===============================================================================================-->

    <!-- Start GA -->
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'UA-94034622-3');
    </script>
    <?php
    $akhir  = new DateTime($setting['tgl_pengumuman']); //Waktu awal
    $awal = new DateTime(); // Waktu sekarang atau akhir
    $diff  = $awal->diff($akhir);
    ?>
</head>

<body data-spy="scroll" data-target="#menu" data-offset="100">
    <div class="home-wrapper" id="home">
        <div class="home-header">
            <div class="container p-0">
                <nav class="navbar navbar-expand-lg navbar-light" id="navbar-header">
                    <a class="navbar-brand" href="javascript:;">
                        <img src="<?= $setting['logo'] ?>" height="75" />
                        <div class="home-header-text d-none d-sm-block">
                            <h5>PENERIMAAN SANTRI BARU</h5>
                            <h6><?= $setting['nama_sekolah'] ?></h6>
                            <h6>Tahun <?= date('Y') ?></h6>
                        </div>
                        <span class="logo-mini-unbk d-block d-sm-none">PSB </span>
                        <span class="logo-mini-tahun d-block d-sm-none"> ONLINE</span>
                    </a>
                    <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#menu" aria-controls="menu" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="menu">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="#home" id="link-home">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#tentang" id="link-tentang">Daftar</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#statistik" id="link-statistik">Statistik</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="./login" id="link-jadwal">Admin</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <?php if ($akhir <= $awal) { ?>
            <div class="home-banner">
                <div class="home-banner-bg home-banner-bg-color"></div>
                <div class="home-banner-bg home-banner-bg-img"></div>
                <div class="container mt-5">
                    <div class="row">
                        <div class="col-sm-8">
                            <div id="carousel" class="carousel slide" data-ride="carousel">
                                <ol class="carousel-indicators">
                                    <li data-target="#carousel" data-slide-to="0" class="active"></li>
                                    <li data-target="#carousel" data-slide-to="1"></li>
                                    <li data-target="#carousel" data-slide-to="2"></li>
                                </ol>
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <div>
                                            <h5 data-animation="animated fadeInDownBig">
                                                Selamat Datang di Website PSB Online
                                            </h5>
                                            <br />
                                            <p data-animation="animated slideInRight" data-delay="1s">
                                                Aplikasi Penerimaan Santri dan Santriwati Baru Tahun Pelajaran 2025/2026 <?= $setting['nama_sekolah'] ?>.
                                            </p>
                                            <p data-animation="animated slideInRight" data-delay="2s">
                                                Pendaftaran Santri dan Santriwati Baru Tahun <?= date('Y') ?> ini telah dibuka. Segera Daftar dan lengkapi Formulir Pendaftaran
                                            </p>
                                            <p data-animation="animated flipInX" data-delay="3s">
                                                <a href="/#tentang" class="btn btn-warning nav-link">
                                                    Lihat Alur Pendaftaran
                                                    <span class="fa fa-chevron-down"></span>
                                                </a>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <div>
                                            <h5 data-animation="animated fadeInDownBig">
                                                Syarat Pendaftaran Santri Baru
                                            </h5>
                                            <h5 data-animation="animated fadeInDownBig">
                                                Tahun Pelajaran 2025/2026
                                            </h5>
                                            <ul>
                                                <li data-animation="animated fadeInDownBig" data-delay="1s">
                                                    Surat Keterangan Lulus
                                                </li>
                                                <li data-animation="animated flipInX" data-delay="2s">
                                                    Ijazah Jenjang Sebelumnya
                                                </li>
                                                <li data-animation="animated flipInX" data-delay="3s">
                                                    Kartu Keluarga
                                                </li>
                                                <li data-animation="animated flipInX" data-delay="4s">
                                                    Akta Kelahiran
                                                </li>
                                                <li data-animation="animated flipInX" data-delay="5s">
                                                    Scan Raport
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <div>
                                            <h5 data-animation="animated fadeInDownBig">
                                                Alur Pendaftaran Santri Baru
                                            </h5>
                                            <h5 data-animation="animated fadeInDownBig">
                                                Tahun Pelajaran 2025/2026
                                            </h5>
                                            <ul>
                                                <li data-animation="animated fadeInDownBig" data-delay="1s">
                                                    Daftar Akun
                                                </li>
                                                <li data-animation="animated flipInX" data-delay="2s">
                                                    Lengkapi Formulir
                                                </li>
                                                <li data-animation="animated flipInX" data-delay="3s">
                                                    Upload Berkas
                                                </li>
                                                <li data-animation="animated flipInX" data-delay="4s">
                                                    Pembayaran
                                                </li>
                                                <li data-animation="animated flipInX" data-delay="5s">
                                                    Download Berkas
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="card card-login bg-primary">
                                <div class="card-body">
                                    <img src="<?= $setting['logo_ppdb'] ?>" alt="" width="100%" style="margin-bottom: 5px;">
                                    <br>
                                    <form id="form-login">
                                        <div class="form-group">
                                            <span class="fa fa-user"></span>
                                            <input type="text" class="form-control" name="username" placeholder="Masukkan Nomor Whatsapp" required autocomplete="off">
                                        </div>
                                        <div class="form-group">
                                            <span class="fa fa-key"></span>
                                            <input type="password" class="form-control" name="password" id="inputPassword4" placeholder="Password">
                                        </div>

                                        <button type="submit" class="btn btn-success btn-block btn-login" id="btnsimpan">
                                            Masuk
                                        </button>
                                    </form>
                                    <br>
                                    <a href="#tentang" class="btn btn-primary btn-block btn-login">
                                        Daftar Disini
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>
        <?php if ($awal <= $akhir) { ?>
            <div class="home-banner">
                <div class="home-banner-bg home-banner-bg-color"></div>
                <div class="home-banner-bg home-banner-bg-img"></div>
                <div class="container mt-5">
                    <div class="row">
                        <div class="col-sm-8">
                            <div class="carousel-item active">
                                <div>
                                    <h5 data-animation="animated fadeInDownBig">
                                        Selamat Datang Di Website PSB Online
                                    </h5>
                                    <br />
                                    <p data-animation="animated slideInRight" data-delay="1s">
                                        Website Resmi Penerimaan Santri Baru Tahun Pelajaran 2025/2026 <?= $setting['nama_sekolah'] ?>.
                                    </p>
                                    <p data-animation="animated slideInRight" data-delay="2s">
                                        Pendaftaran Santri dan Santriwati Baru Tahun 2025 ini Belum Dibuka.
                                    </p>
                                    <p data-animation="animated flipInX" data-delay="3s">
                                        <a href="" class="btn btn-success nav-link">
                                            Pendaftaran Dibuka Dalam
                                            <span class="fa fa-chevron-down"></span>
                                        </a>
                                    </p>
                                </div>
                            </div>
                            <center>
                                <div class="cd100"></div>
                            </center>
                        </div>
                        <div class="col-sm-4">
                            <div class="card card-login bg-primary">
                                <div class="card-body">
                                    <img src="<?= $setting['logo_ppdb'] ?>" alt="" width="100%" style="margin-bottom: 5px;">
                                    <br>
                                    <form id="form-login">
                                        <div class="form-group">
                                            <span class="fa fa-user"></span>
                                            <input type="text" class="form-control" name="username" placeholder="Masukkan Nomor Whatsapp" required autocomplete="off">
                                        </div>
                                        <div class="form-group">
                                            <span class="fa fa-key"></span>
                                            <input type="password" class="form-control" name="password" id="inputPassword4" placeholder="Password">
                                        </div>

                                        <button type="submit" class="btn btn-success btn-block btn-login" id="btnsimpan">
                                            Masuk
                                        </button>
                                    </form>
                                    <br>
                                    <a href="#tentang" class="btn btn-primary btn-block btn-login">
                                        Daftar Disini
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>
        <div class="home-content">
            <section id="tentang">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6 d-flex align-items-center mb-3">
                            <div class="col-md-12 animated bounceInLeft">
                                <div class="card">
                                    <div class="card-header bg-primary">
                                        <h4>Pendaftaran Akun</h4>
                                    </div>
                                    <form id="form-daftar">
                                        <div class="card-body">
                                            <input type="date" name="tgl_daftar" class="form-control datepicker" value="<?= date('Y-m-d') ?>" hidden>
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label for="nama">NAMA LENGKAP*</label>
                                                    <input type="text" class="form-control" name="nama" placeholder="Nama Lengkap" autocomplete="off" required>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="nohp">NO HANDPHONE*</label>
                                                    <input type="number" class="form-control" name="no_hp" placeholder="No HP Whatsapp" required>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="inputPassword4">PASSWORD (Mohon Diingat!)</label>
                                                <input type="password" class="form-control" name="password" id="inputPassword4" placeholder="Password" required>
                                            </div>
                                        </div>
                                        <div class="card-header bg-white">
                                            <button id='btnsimpan' type="submit" class="btn btn-lg btn-success"><b>DAFTAR AKUN</b></button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <p align="center">
                                <img src="assets/alur.png" align="center" width="600" style="max-width: 100%" />
                            </p>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <section class="bg-light statistik" id="statistik" style="padding-top: 30px;">
            <div class="container">
                <h1 class="text-center"><b>Statistik</b></h1>
                <h6 class="text-center">Peserta Didik Baru <?= $setting['nama_sekolah'] ?> Tahun <?= date('Y') ?></h6>
                <div class="row mt-12">
                    <div class="col-sm-6">
                        <div class="card mt-2">
                            <div class="card-header bg-primary text-white">Jumlah Pendaftar</div>
                            <div class="card-body">
                                <h2 class="text-center"><?= rowcount($koneksi, 'daftar') ?></h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="card mt-2">
                            <div class="card-header bg-primary text-white">Quota Pendaftar</div>
                            <div class="card-body">
                                <h2 class="text-center">
                                    <?php $kuota = mysqli_fetch_array(mysqli_query($koneksi, "select *, sum(kuota) as kuota from jurusan"));
                                    echo $kuota['kuota']; ?>
                                </h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <hr size="2" width="70%">
        <section class="bg-light statistik mb-5" id="statistik">
            <div class="container">
                <div class="row mt-12">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-header text-white" style="background-color: #005f6b">
                                <h4>Data Statistik Asal Sekolah Pendaftar</h4>
                                <div class="card-header-action">
                                </div>
                            </div>
                            <div class="card-body text-black" style="background-color: #fff">
                                <div class="table-responsive">
                                    <table class="table table-striped table-sm" id="sortable-table">
                                        <thead>
                                            <tr>
                                                <th class="text-center"></th>
                                                <th>NAMA SEKOLAH</th>
                                                <th class="text-center">PENDAFTAR</th>
                                            </tr>
                                        </thead>
                                        <tbody class="ui-sortable">
                                            <?php $query = mysqli_query($koneksi, "select * from daftar group by asal_sekolah");
                                            while ($sekolah = mysqli_fetch_array($query)) {
                                                $hitung = rowcount($koneksi, 'daftar', ['asal_sekolah' => $sekolah['asal_sekolah']]);
                                            ?>
                                                <tr>
                                                    <td>
                                                        <div class="sort-handler ui-sortable-handle">
                                                            <i class="fas fa-th"></i>
                                                        </div>
                                                    </td>
                                                    <td><?= $sekolah['asal_sekolah'] ?></td>

                                                    <td class="text-center">
                                                        <div class="badge badge-success"><?= $hitung ?></div>
                                                    </td>
                                                </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</body>

</html>
<script>
    var baseURL = '/';
    var uniqueID = 'd8ac8098665d68759eeda768373bb6c2';
    var chartData = JSON.parse('[{"title":"SMK","data":[91.61,7.81,0.58]},{"title":"MA","data":[88.33,11.07,0.6]},{"title":"SMA","data":[89.69,8.33,1.98]},{"title":"SMP","data":[59.15,24.1,16.75]},{"title":"MTs","data":[79.46,19.25,1.29]},{"title":"Nasional","data":[74.84,17.31,7.85]}]');
    var chartLabel = JSON.parse('["Mandiri","Sekolah Lain","UNKP"]');
</script>

<!-- Vendor -->
<script src="https://unbk.kemdikbud.go.id/vendor/jquery/jquery-3.2.1.min.js"></script>
<script src="https://unbk.kemdikbud.go.id/vendor/jquery/jquery.form.min.js"></script>
<script src="https://unbk.kemdikbud.go.id/vendor/bootstrap-4/js/bootstrap.min.js"></script>
<script src="https://unbk.kemdikbud.go.id/vendor/bootstrap-4/js/popper.min.js"></script>
<script src="https://unbk.kemdikbud.go.id/vendor/wow/js/wow.min.js"></script>
<script src="https://unbk.kemdikbud.go.id/vendor/chart/Chart.min.js"></script>

<!-- Assets -->
<script src="https://unbk.kemdikbud.go.id/assets/js/front.min.js"></script>
<!-- Assets -->

<script src="assets/modules/izitoast/js/iziToast.min.js"></script>
<script src="assets/modules/bootstrap-daterangepicker/daterangepicker.js"></script>

<script src="assets/modules/popper.js"></script>
<!-- <script src="assets/modules/tooltip.js"></script> -->
<script src="assets/modules/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/modules/nicescroll/jquery.nicescroll.min.js"></script>
<script src="assets/modules/moment.min.js"></script>
<script src="assets/js/stisla.js"></script>
<!-- JS Libraies -->
<script src="assets/modules/select2/dist/js/select2.full.min.js"></script>
<script src="assets/modules/bootstrap-daterangepicker/daterangepicker.js"></script>
<script src="assets/modules/izitoast/js/iziToast.min.js"></script>
<!-- Page Specific JS File -->
<!-- JS DATATABLE -->
<script src="assets/modules/datatables/datatables.min.js"></script>
<script src="assets/modules/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js"></script>
<script src="assets/modules/datatables/Select-1.2.4/js/dataTables.select.min.js"></script>
<!-- Template JS File -->
<script src="assets/js/scripts.js"></script>
<script src="assets/js/custom.js"></script>
<script type="text/javascript">
    $('.loader').fadeOut('slow');
    $(document).ready(function() {
        $('.klikmenu').click(function() {
            var menu = $(this).data('id');
            if (menu == "beranda") {
                $('#btndaftar').show();
                $('#isi_load').load('home.php');
            } else if (menu == "pendaftaran") {
                $('#btndaftar').hide();
                $('#isi_load').load('pendaftaran.php');
            } else if (menu == "daftar") {
                $('#isi_load').load('datadaftar.php');
            } else if (menu == "siswa") {
                $('#isi_load').load('siswa.php');
            } else if (menu == "pengumuman") {
                $('#isi_load').load('pengumuman.php');
            } else if (menu == "login") {
                $('#isi_load').load('login.php');
            }
        });
        // halaman yang di load default pertama kali
        $('#isi_load').load('home.php');
    });
</script>
<script>
    $('#form-login').submit(function(e) {
        e.preventDefault();
        $.ajax({
            type: 'POST',
            url: 'crud_web.php?pg=login',
            data: $(this).serialize(),
            beforeSend: function() {
                $('#btnsimpan').prop('disabled', true);
            },
            success: function(data) {
                var json = $.parseJSON(data);
                $('#btnsimpan').prop('disabled', false);
                if (json.pesan == 'ok') {
                    iziToast.success({
                        title: 'Sukses!',
                        message: 'Login Berhasil',
                        position: 'topRight'
                    });
                    setTimeout(function() {
                        window.location.href = "user";
                    }, 2000);

                } else {
                    iziToast.error({
                        title: 'Maaf!',
                        message: json.pesan,
                        position: 'topCenter'
                    });
                }
                //$('#bodyreset').load(location.href + ' #bodyreset');
            }
        });
        return false;
    });
    if (jQuery().daterangepicker) {
        if ($(".datepicker").length) {
            $('.datepicker').daterangepicker({
                locale: {
                    format: 'YYYY-MM-DD'
                },
                singleDatePicker: true,
            });
        }
        if ($(".datetimepicker").length) {
            $('.datetimepicker').daterangepicker({
                locale: {
                    format: 'YYYY-MM-DD hh:mm'
                },
                singleDatePicker: true,
                timePicker: true,
                timePicker24Hour: true,
            });
        }
        if ($(".daterange").length) {
            $('.daterange').daterangepicker({
                locale: {
                    format: 'YYYY-MM-DD'
                },
                drops: 'down',
                opens: 'right'
            });
        }
    }
    if (jQuery().select2) {
        $(".select2").select2();
    }
</script>
<script>
    $('#form-daftar').submit(function(e) {
        e.preventDefault();
        $.ajax({
            type: 'POST',
            url: 'crud_web.php?pg=simpan',
            data: $(this).serialize(),
            beforeSend: function() {
                $('#btnsimpan').prop('disabled', true);
            },
            success: function(data) {
                var json = $.parseJSON(data);
                $('#btnsimpan').prop('disabled', false);
                if (json.pesan == 'ok') {
                    iziToast.success({
                        title: 'Selamat!',
                        message: 'Data berhasil disimpan',
                        position: 'topRight'
                    });
                    setTimeout(function() {
                        $('#home').load('konfirmasi.php?id=' + json.id + '&no_hp=' + json.no_hp + '&pass=' + json.pass + '&nama=' + json.nama);
                    }, 2000);

                } else {
                    iziToast.error({
                        title: 'Maaf!',
                        message: json.pesan,
                        position: 'topCenter'
                    });
                }
                //$('#bodyreset').load(location.href + ' #bodyreset');
            }
        });
        return false;
    });
    if (jQuery().daterangepicker) {
        if ($(".datepicker").length) {
            $('.datepicker').daterangepicker({
                locale: {
                    format: 'YYYY-MM-DD'
                },
                singleDatePicker: true,
            });
        }
        if ($(".datetimepicker").length) {
            $('.datetimepicker').daterangepicker({
                locale: {
                    format: 'YYYY-MM-DD hh:mm'
                },
                singleDatePicker: true,
                timePicker: true,
                timePicker24Hour: true,
            });
        }
        if ($(".daterange").length) {
            $('.daterange').daterangepicker({
                locale: {
                    format: 'YYYY-MM-DD'
                },
                drops: 'down',
                opens: 'right'
            });
        }
    }
    if (jQuery().select2) {
        $(".select2").select2();
    }
</script>
<script>
    $('#form-daftar2').submit(function(e) {
        e.preventDefault();
        $.ajax({
            type: 'POST',
            url: 'crud_web.php?pg=simpan2',
            data: $(this).serialize(),
            beforeSend: function() {
                $('#btnsimpan').prop('disabled', true);
            },
            success: function(data) {
                var json = $.parseJSON(data);
                $('#btnsimpan').prop('disabled', false);
                if (json.pesan == 'ok') {
                    iziToast.success({
                        title: 'Mantap!',
                        message: 'Data berhasil disimpan',
                        position: 'topRight'
                    });
                    setTimeout(function() {
                        $('#home').load('konfirmasi.php?id=' + json.id + '&nisn=' + json.nisn + '&pass=' + json.pass + '&nama=' + json.nama);
                    }, 2000);

                } else {
                    iziToast.error({
                        title: 'Maaf!',
                        message: json.pesan,
                        position: 'topCenter'
                    });
                    document.getElementById('captcha').src = 'securimage/securimage_show.php?' + Math.random();

                }
                //$('#bodyreset').load(location.href + ' #bodyreset');
            }
        });
        return false;
    });
    if (jQuery().daterangepicker) {
        if ($(".datepicker").length) {
            $('.datepicker').daterangepicker({
                locale: {
                    format: 'YYYY-MM-DD'
                },
                singleDatePicker: true,
            });
        }
        if ($(".datetimepicker").length) {
            $('.datetimepicker').daterangepicker({
                locale: {
                    format: 'YYYY-MM-DD hh:mm'
                },
                singleDatePicker: true,
                timePicker: true,
                timePicker24Hour: true,
            });
        }
        if ($(".daterange").length) {
            $('.daterange').daterangepicker({
                locale: {
                    format: 'YYYY-MM-DD'
                },
                drops: 'down',
                opens: 'right'
            });
        }
    }
    if (jQuery().select2) {
        $(".select2").select2();
    }
</script>
<!--WAKTU JALAN-->
<script src="assets/front/vendor/jquery/jquery-3.2.1.min.js"></script>
<script src="assets/front/vendor/bootstrap/js/popper.js"></script>
<script src="assets/front/vendor/countdowntime/flipclock.min.js"></script>
<script src="assets/front/vendor/countdowntime/moment.min.js"></script>
<script src="assets/front/vendor/countdowntime/moment-timezone.min.js"></script>
<script src="assets/front/vendor/countdowntime/moment-timezone-with-data.min.js"></script>
<script src="assets/front/vendor/countdowntime/countdowntime.js"></script>

<script>
    $('.cd100').countdown100({
        /*Set Endtime here*/
        /*Endtime must be > current time*/
        endtimeMonth: <?= $diff->m ?>,
        endtimeDate: <?= $diff->d ?>,
        endtimeHours: <?= $diff->h ?>,
        endtimeMinutes: <?= $diff->i ?>,
        endtimeSeconds: <?= $diff->s ?>,
        timeZone: ""
        // ex:  timeZone: "America/New_York"
        //go to " http://momentjs.com/timezone/ " to get timezone
    });
</script>