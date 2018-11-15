<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/main.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <title>BisaPintar</title>
</head>

<body class="mt-lg-5 mt-md-4 mb-5">
    
    <div class="container container-header-sm bg-dark py-3 px-4">
        <button type="button" class="btnNav text-light d-flex align-items-center">
            <i class="fas fa-bars "></i><span class="ml-3 menu">Menu</span>
        </button>
    </div>

    <div class="modal" id="modalSide" tabindex="-1" role="dialog">
        <div id="mySidenav" class="sidenav">
            <button type="button" id="closeNav" class="close mr-3 mt-3" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <ul class="nav flex-column mynav px-4 mt-5">
                <li class="nav-item ">
                    <a href="#" class="nav-link active mx-2 px-0">BERANDA</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="btnDaftar nav-link mx-2 px-0">DAFTAR</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="btnMasuk nav-link mx-2 px-0">MASUK</a>
                </li>
            </ul>
        </div>
    </div>

    <div class="container container-header mb-5">
        <ul class="nav justify-content-end mynav py-3 px-4">
            <li class="nav-item text-center">
                <a href="#" class="nav-link active mx-4 px-0 pb-0">BERANDA</a>
            </li>
            <li class="nav-item">
                <a href="#" class="btnDaftar nav-link mx-4 px-0">DAFTAR</a>
            </li>
            <li class="nav-item">
                <a href="#" class="btnMasuk nav-link mx-4 px-0">MASUK</a>
            </li>
        </ul>
    </div>

    <div class="container container-body">
        <div class="row">

            <div class="col-md col-sm-12 mt-5 mt-md-0">
                <img src="img/people_study.png" alt="Study">
            </div>

            <div class="col-md pt-5 col-sm-12 text-md-left text-center">
                <h3 class="moto mb-2 mb-md-0">Belajar APPL Jadi Lebih Mudah dengan</h3>
                <h1 class="title mb-lg-5 mb-md-4 mb-5">BISAPINTAR</h1>
                <p class="jargon">Nilai APPL A++, paham dengan materi APPL 100%.</p>
                <button type="button" id="btnMulai" class="btn mybtn py-lg-3 py-md-2 px-4">MULAI SEKARANG!</button>
            </div>

        </div>
    </div>   

    <div class="modal fade" id="modalLogin" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content px-2">
                <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <form id="formLogin" class="mt-5 mb-4" action="functions/login.php" method="GET">
                        <div class="form-group">
                            <input type="text" name="username" class="form-control" id="username" aria-describedby="usernameHelp" placeholder="Username">
                            <small id="usernameHelp" class="form-text text-danger">Mohon input username anda.</small>
                        </div>
                        <div class="form-group mb-4">
                            <input type="password" name="password" class="form-control" id="password" aria-describedby="passwordHelp" placeholder="Password">
                            <small id="passwordHelp" class="form-text text-danger">Mohon input password anda.</small>
                        </div>
                        <button name="masuk" type="submit" class="btn btn-main w-100 py-2">MASUK</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modalDaftar" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content px-2">
                <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <form id="formDaftar" action="functions/signup.php" method="GET" class="mt-5 mb-4">
                        <div class="form-group">
                            <input type="text" name="nama" class="form-control" id="nama" placeholder="nama lengkap">
                            <small id="namaHelp" class="form-text text-danger">Mohon input nama anda.</small>
                        </div>
                        <div class="form-group">
                            <input type="text" name="uname" class="form-control" id="uname" placeholder="username">
                            <small id="unameHelp" class="form-text text-danger">Mohon input username anda.</small>
                        </div>
                        <div class="form-group">
                            <input type="email" name="email" class="form-control" id="email" placeholder="email">
                            <small id="emailHelp" class="form-text text-danger">Mohon input email anda.</small>
                        </div>
                        <div class="form-group mb-5">
                            <input type="password" name="pass" class="form-control" id="pass" placeholder="password">
                            <small id="passHelp" class="form-text text-danger">Mohon input password anda.</small>
                        </div>
                        <button type="submit" name="daftar" class="btn btn-main w-100 py-2">DAFTAR</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modalInvalidMasuk" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content px-2 text-center">
                <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <p class="mt-5"><i class="fas fa-exclamation-circle fa-5x text-danger"></i><br/><br/>Mohon maaf, username atau password tidak valid.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modalInvalidDaftar" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content px-2 text-center">
                <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <p class="mt-5"><i class="fas fa-exclamation-circle fa-5x text-danger"></i><br/><br/>Mohon maaf username sudah terdaftar.</p>
                </div>
            </div>
        </div>
    </div>

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <script>

        $('.btnMasuk').click(function(){
            $('#modalLogin').modal('show');

            $('#modalSide').modal('hide');
            $('.sidenav').css('width','0');
        });

        $('.btnDaftar').click(function(){
            $('#modalDaftar').modal('show');

            $('#modalSide').modal('hide');
            $('.sidenav').css('width','0');
        });

        $('#btnMulai').click(function(){
            $('#modalDaftar').modal('show');
        });

        $('.btnNav').click(function(){
            $('#modalSide').modal('show');
            $('.sidenav').css('width','250px');
        });

        $('#closeNav').click(function(){
            $('#modalSide').modal('hide');
            $('.sidenav').css('width','0');
        });

        //hide semua form helper pada form login
        $('#usernameHelp').hide();
        $('#passwordHelp').hide();

        //Cek apakah form login ada yang kosong
        $('#formLogin').submit(function(){
            var username = $.trim($('#username').val());
            var password = $.trim($('#password').val());
            $('#usernameHelp').hide();
            $('#passwordHelp').hide();

            if ((username == '') && (password == '')) {
                $('#usernameHelp').show();
                $('#passwordHelp').show();
                return false;
            } else if (username == '') {
                $('#usernameHelp').show();
                return false;
            } else if (password =='') {
                $('#passwordHelp').show();
                return false;
            }
        });

        //hide semua helper pada form daftar
        $('#namaHelp').hide();
        $('#unameHelp').hide();
        $('#emailHelp').hide();
        $('#passHelp').hide();

        //cek apakah form daftar ada yang kosong
        $('#formDaftar').submit(function(){
            var nama = $.trim($('#nama').val());
            var uname = $.trim($('#uname').val());
            var email = $.trim($('#email').val());
            var pass = $.trim($('#pass').val());

            $('#namaHelp').hide();
            $('#unameHelp').hide();
            $('#emailHelp').hide();
            $('#passHelp').hide();

            if ((nama == '') || (uname == '') || (email == '') || (pass == '')) {
                if (nama == '') {$('#namaHelp').show();}
                if (uname == '') {$('#unameHelp').show();}
                if (email == '') {$('#emailHelp').show();}
                if (pass == '') {$('#passHelp').show();}  
                return false;
            }
        });
    </script>

    <?php
        if (isset($_SESSION['login'])) {
            if ($_SESSION['login'] == 'invalid') {
                echo "<script>$('#modalInvalidMasuk').modal('show');</script>";
            }
            unset($_SESSION['login']); 
        }

        if (isset($_SESSION['daftar'])) {
            if ($_SESSION['daftar'] == 'invalid') {
                echo "<script>$('#modalInvalidDaftar').modal('show');</script>";
            }
            unset($_SESSION['daftar']);
        }
    ?>

</body>
</html>