<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/main.css">
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <title>BisaPintar | Latihan</title>
</head>
<body class="mt-lg-5 mt-md-4 mb-5">

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
					<a href="materi.html" class="nav-link mx-4 px-0">MATERI</a>
				</li>
				<li class="nav-item">
					<a href="latihan.php" class="nav-link mx-4 px-0 active" >LATIHAN</a>
				</li>
				<li class="nav-item">
					<a href="#" class="nav-link mx-4 px-0">LOGOUT</a>
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
				<a href="materi.html" class="nav-link mx-4 px-0">MATERI</a>
			</li>
			<li class="nav-item">
				<a href="latihan.php" class="nav-link mx-4 px-0 active">LATIHAN</a>
			</li>
			<li class="nav-item">
				<a href="#" class="nav-link mx-4 px-0">LOGOUT</a>
			</li>
		</ul>
	</div>

	<!--Judul Page-->
	<div class="container text-center mb-4">
		<h3>LATIHAN</h3>
	</div>

	<!--Container Soal1-->
    <div id="soal1" class="container px-6">

        <div class="soal p-3 mb-4">
            <div class="nomor-soal text-main mb-3">SOAL 1:</div>
            <div class="isi-soal text-center">Apa Kepanjangan dari ERD?</div>
        </div>

        <div class="pilihan">
            <div id="a1" class="jawaban mb-2 p-3">a. Entity Relational Diagram<input type="radio" name="pilihan1" value="a" id="ja1"></div>
            <div id="b1" class="jawaban mb-2 p-3">b. Entity Relational Diagram<input type="radio" name="pilihan1" value="b" id="jb1"></div>
            <div id="c1" class="jawaban mb-2 p-3">c. Entity Relational Diagram<input type="radio" name="pilihan1" value="c" id="jc1"></div>
            <div id="d1" class="jawaban mb-2 p-3">d. Entity Relational Diagram<input type="radio" name="pilihan1" value="d" id="jd1"></div>
        </div>

        <div class="row nav-soal">

            <div class="col text-left">
                <div class="prev d-inline disable">
                    <i class="fas fa-chevron-circle-left mr-2 align-middle"></i><span class="align-middle">Soal sebelumnya</span>
                </div>
            </div>
            <div class="col text-right">
                <div class="next d-inline active" id="next1">
                    <span class="align-middle">Soal selanjutnya</span><i class="fas fa-chevron-circle-right ml-2 align-middle"></i>
                </div>
            </div>

        </div>

    </div>

    <!--Container Soal2-->
    <div id="soal2" class="container px-6">

        <div class="soal p-3 mb-4">
            <div class="nomor-soal text-main mb-3">SOAL 2:</div>
            <div class="isi-soal text-center">Apa Kepanjangan dari ERD?</div>
        </div>

        <div class="pilihan">
            <div id="a2" class="jawaban mb-2 p-3">a. Entity Relational Diagram<input type="radio" name="pilihan2" value="a" id="ja2"></div>
            <div id="b2" class="jawaban mb-2 p-3">b. Entity Relational Diagram<input type="radio" name="pilihan2" value="b" id="jb2"></div>
            <div id="c2" class="jawaban mb-2 p-3">c. Entity Relational Diagram<input type="radio" name="pilihan2" value="c" id="jc2"></div>
            <div id="d2" class="jawaban mb-2 p-3">d. Entity Relational Diagram<input type="radio" name="pilihan2" value="d" id="jd2"></div>
        </div>

        <div class="row nav-soal">

            <div class="col text-left">
                <div class="prev d-inline active" id="prev2">
                    <i class="fas fa-chevron-circle-left mr-2 align-middle"></i><span class="align-middle">Soal sebelumnya</span>
                </div>
            </div>
            <div class="col text-right">
                <div class="next d-inline active" id="next2">
                    <span class="align-middle">Soal selanjutnya</span><i class="fas fa-chevron-circle-right ml-2 align-middle"></i>
                </div>
            </div>

        </div>

    </div>

    <!--Container Soal3-->
    <div id="soal3" class="container px-6">

        <div class="soal p-3 mb-4">
            <div class="nomor-soal text-main mb-3">SOAL 3:</div>
            <div class="isi-soal text-center">Apa Kepanjangan dari ERD?</div>
        </div>

        <div class="pilihan">
            <div id="a3" class="jawaban mb-2 p-3">a. Entity Relational Diagram<input type="radio" name="pilihan3" value="a" id="ja3"></div>
            <div id="b3" class="jawaban mb-2 p-3">b. Entity Relational Diagram<input type="radio" name="pilihan3" value="b" id="jb3"></div>
            <div id="c3" class="jawaban mb-2 p-3">c. Entity Relational Diagram<input type="radio" name="pilihan3" value="c" id="jc3"></div>
            <div id="d3" class="jawaban mb-2 p-3">d. Entity Relational Diagram<input type="radio" name="pilihan3" value="d" id="jd3"></div>
        </div>

        <div class="row nav-soal">

            <div class="col text-left">
                <div class="prev d-inline active" id="prev3">
                    <i class="fas fa-chevron-circle-left mr-2 align-middle"></i><span class="align-middle">Soal sebelumnya</span>
                </div>
            </div>
            <div class="col text-center"><button type="button" class="btn btn-main" id="selesaiBtn">SELESAI</button></div>
            <div class="col text-right">
                <div class="next d-inline disable" id="next3">
                    <span class="align-middle">Soal selanjutnya</span><i class="fas fa-chevron-circle-right ml-2 align-middle"></i>
                </div>
            </div>

        </div>

    </div>

    <!--alert apakah ingin menyelesaikan latihan -->
    <div class="modal fade" id="modalSelesai" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content px-2 text-center">
                <div class="modal-body pb-4">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <p class="mt-5">
                        <i class="fas fa-exclamation-circle fa-5x text-danger"></i><br/><br/>
                        <span id="pesanSelesai"></span></br>
                        <span>Anda yakin ingin menyelesaikan latihan?</span>
                    </p>
                    <button type="button" class="btn btn-danger px-4" id="yaSelesai">Ya</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>
                </div>
            </div>
        </div>
    </div>

	<script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    
    <script>

        //Kunci jawaban
        var kj1 = 'a';
        var kj2 = 'b';
        var kj3 = 'c';

        //jawaban yang dipilih
        var jawaban1, jawaban2, jawaban3;

        //hide semua soal
        $('#soal2').hide();
        $('#soal3').hide();

        //tampilkan soal
        function showSoal(nomor){
            $('#soal1, #soal2, #soal3').hide();
            $(nomor).fadeIn('slow');
        }
        $('#next1').click(function(){ showSoal('#soal2') });
        $('#prev2').click(function(){ showSoal('#soal1') });
        $('#next2').click(function(){ showSoal('#soal3') });
        $('#prev3').click(function(){ showSoal('#soal2') });
        $('#next4').click(function(){ showSoal('#soal4') });

        //field jawaban soal 1
        function jawab1(pilihan,container){
            $('#a1, #jb1, #jc1, #jd1').attr('checked',false);
            $('#a1, #b1, #c1, #d1').removeClass('clicked');
            $(pilihan).attr('checked',true); 
            $(container).addClass('clicked');
        }
        $('#a1').click(function(){ jawab1('#ja1','#a1'); });
        $('#b1').click(function(){ jawab1('#jb1','#b1'); });
        $('#c1').click(function(){ jawab1('#jc1','#c1'); });
        $('#d1').click(function(){ jawab1('#jd1','#d1'); });
        
        //field jawaban soal 2
        function jawab2(pilihan,container){
            $('#a2, #jb2, #jc2, #jd2').attr('checked',false);
            $('#a2, #b2, #c2, #d2').removeClass('clicked');
            $(pilihan).attr('checked',true); 
            $(container).addClass('clicked');
        }
        $('#a2').click(function(){ jawab2('#ja2','#a2'); });
        $('#b2').click(function(){ jawab2('#jb2','#b2'); });
        $('#c2').click(function(){ jawab2('#jc2','#c2'); });
        $('#d2').click(function(){ jawab2('#jd2','#d2'); });

        //field jawaban soal 3
        function jawab3(pilihan,container){
            $('#a3, #jb3, #jc3, #jd3').attr('checked',false);
            $('#a3, #b3, #c3, #d3').removeClass('clicked');
            $(pilihan).attr('checked',true); 
            $(container).addClass('clicked');
        }
        $('#a3').click(function(){ jawab3('#ja3','#a3'); });
        $('#b3').click(function(){ jawab3('#jb3','#b3'); });
        $('#c3').click(function(){ jawab3('#jc3','#c3'); });
        $('#d3').click(function(){ jawab3('#jd3','#d3'); });
        
        //cek jawaban
        //cek apakah ada jawaban yang belum dipilih
        $('#selesaiBtn').click(function(){
            jawaban1 = $('input[name="pilihan1"]:checked').val();
            jawaban2 = $('input[name="pilihan2"]:checked').val();
            jawaban3 = $('input[name="pilihan3"]:checked').val();
            if ((jawaban1 == undefined) || (jawaban2 == undefined) || (jawaban3 == undefined)) {
                var belumSelse = 'Anda belum menyelesaikan soal ';
                if (jawaban1 == undefined) { belumSelse = belumSelse + '1 '; }
                if (jawaban2 == undefined) { belumSelse = belumSelse + '2 '; }
                if (jawaban3 == undefined) { belumSelse = belumSelse + '3 '; }
                $('#pesanSelesai').text(belumSelse);
            } else {
                $('#pesanSelesai').text('');
            }
            //tampilkan alert 
            $('#modalSelesai').modal('show');
            
        });

        //hitung nilai jika tombol ya di klik
        $('#yaSelesai').click(function(){
            var jawabanBenar = 0;
            if (jawaban1 == kj1) { jawabanBenar++; }
            if (jawaban2 == kj2) { jawabanBenar++; }
            if (jawaban3 == kj3) { jawabanBenar++; }
            alert(jawabanBenar)
        })



    </script>

</body>
</html>