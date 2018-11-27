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
				<li class="nav-item">
					<a href="profile.php" class="nav-link mx-4 px-0 pb-0 nav-left">PROFILE</a>
				</li>
				<li class="nav-item">
					<a href="materi.php" class="nav-link mx-4 px-0">MATERI</a>
				</li>
				<li class="nav-item">
					<a href="latihan.php" class="nav-link mx-4 px-0" >LATIHAN</a>
                </li>
                <li class="nav-item">
					<a href="help.php" class="nav-link mx-4 px-0 active" >HELP</a>
				</li>
				<li class="nav-item">
					<a href="#" class="btnLogout nav-link mx-4 px-0">LOGOUT</a>
				</li>
            </ul>
        </div>
    </div>
    <!--end tampilan navigasi mobile-->

	<!--Tampilan Navigasi Desktop-->
	<div class="container container-header mb-4">
		<ul class="nav justify-content-end mynav py-3 px-4">
			<li class="nav-item">
				<a href="profile.php" class="nav-link mx-4 px-0 pb-0 nav-left">PROFILE</a>
			</li>
			<li class="nav-item">
				<a href="materi.php" class="nav-link mx-4 px-0">MATERI</a>
			</li>
			<li class="nav-item">
				<a href="latihan.php" class="nav-link mx-4 px-0">LATIHAN</a>
            </li>
            <li class="nav-item">
                <a href="help.php" class="nav-link mx-4 px-0 active" >HELP</a>
            </li>
			<li class="nav-item">
				<a href="#" class="btnLogout nav-link mx-4 px-0">LOGOUT</a>
			</li>
		</ul>
	</div>


    <div class="container container-body">
        <div class="row">

            <div class="col-md col-sm-12 mt-5 mt-md-0">
                <img src="img/help.png" alt="Study">
            </div>

            <div class="col-md pt-5 col-sm-12 text-md-left text-center">
                <h4 class=" mb-4 ">Apakah anda memiliki kendala saat membuka website kami ?</h4>
                <h5 class=" mb-lg-5 mb-md-4 mb-3">Anda dapat menghubungi admin di bawah ini</h5>
                <h3 class="text-main mb-3">Joel Andrew (joel@gmail.com)</h3>
                <h5 class="mb-lg-5 mb-md-4 mb-5">Mohon maaf atas gangguanya dan selamat beraktivitas</h5>
            </div>

        </div>
    </div>  
    
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>

    <!--modal logout-->
    <div class="modal fade" id="modalLogout" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content px-2 text-center">
                <div class="modal-body">
                    <p class="mt-5"><i class="fas fa-sign-out-alt fa-5x text-danger"></i><br/><br/>Anda yakin ingin keluar?</p>
                    <button type="button" class="btn btn-danger mr-2 px-3" onclick="location.href='functions/logout.php';">Ya</button><button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>
                </div>
            </div>
        </div>
    </div>

</body>
</html>