<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/help.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <title>Help</title>
</head>
<body class="mt-lg-5 mt-md-4 mb-md-1 mb-5" >
	<!--Tampilan navigasi mobile-->
	<div class="container container-header-sm bg-dark py-3 px-4 mb-5">
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
                    <a href="profile.html" class="nav-link mx-2 px-0">PROFILE</a>
                </li>
                <li class="nav-item">
                    <a href="materi.html" class="btnDaftar nav-link mx-2 px-0">MATERI</a>
                </li>
                <li class="nav-item">
                    <a href="latihan.html" class="btnMasuk nav-link mx-2 px-0">LATIHAN</a>
                </li>
                <li class="nav-item ">
                    <a href="help.html" class="nav-link active mx-2 px-0">HELP</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="btnMasuk nav-link mx-2 px-0">LOG OUT</a>
                </li>
            </ul>
        </div>
    </div>
    <!--end tampilan navigasi mobile-->

	<!--Tampilan Navigasi Desktop-->
	<div class="container container-header mb-5">
		<ul class="nav justify-content-end mynav py-3 px-4">
			<li class="nav-item text-center">
				<a href="profile.html" class="nav-link mx-4 px-0">PROFILE</a>
			</li>
			<li class="nav-item dropdown">
				<a class="nav-link mx-4 px-0" href="materi.html">MATERI</a>
			</li>
			<li class="nav-item">
				<a href="latihan.html" class="nav-link mx-4 px-0">LATIHAN</a>
            </li>
            <li class="nav-item">
                <a href="help.html" class="nav-link mx-4 px-0 active">HELP</a>
            </li>
            <li class="nav-item">
				<a href="#" class="nav-link mx-4 px-0">LOGOUT</a>
			</li>
		</ul>
    </div>
    <div class="container container-body">
        <div class="row">

            <div class="col-md col-sm-12 mt-5 mt-md-0">
                <img src="img/help.jpg" alt="Study">
            </div>

            <div class="col-md pt-5 col-sm-12 text-md-left text-center">
                <p class="moto mb-2 mb-md-0">Apakah anda memiliki kendala saat membuka website kami ?</p>
                <h1 class="title mb-lg-5 mb-md-4 mb-5">Anda dapat menghubungi admin di bawah ini</h1>
                <p class="jargon">Joel Andrew (joel.andrew22088@gmail.com)</p>
                <p class="title mb-lg-5 mb-md-4 mb-5">Mohon maaf atas gangguanya dan selamat beraktivitas</p>
            </div>

        </div>
    </div>   
</body>
</html>