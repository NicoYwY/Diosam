<?php
    session_start();
    

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.css">
    <link rel="stylesheet" href="../CSS/navbar.css">
    <link rel="stylesheet" href="../CSS/docs.css">
    <link href="https://fonts.googleapis.com/css2?family=Lobster+Two:ital,wght@0,700;1,700&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> 
    <script src="JS/scriptNavBar.js"></script> 
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Lobster+Two:ital,wght@0,700;1,700&display=swap');

        body {
            background-image: url('../IMG/fondo_orgiinal.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
        }

        .navbar {
            display: flex;
            justify-content: space-between;
        }

        .navbar-brand img {
            border-radius: 50%;
            width: 70.5px;
            height: 60.5px;
        }
    </style>
</head>

<body>

    <nav class="navbar navbar-expand-custom navbar-mainbg">
        <a class="navbar-brand" href="../../index.php">
            <img src="../IMG/2.png" alt="" width="97" height="77">
        </a>
        <button class="navbar-toggler" type="button" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fas fa-bars text-white"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="../../index.php"><i class="fas fa-tachometer-alt"></i>Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="conocenos.php"><i class="far fa-clone"></i>Conócenos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="visitanos.php"><i class="far fa-calendar-alt"></i>Visítanos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="login.php"><i class="far fa-chart-bar"></i>Iniciar Sesion</a>
                </li>
            </ul>
        </div>
        <script>
        function test(){
	var tabsNewAnim = $('#navbarSupportedContent');
	var selectorNewAnim = $('#navbarSupportedContent').find('li').length;
	var activeItemNewAnim = tabsNewAnim.find('.active');
	var activeWidthNewAnimHeight = activeItemNewAnim.innerHeight();
	var activeWidthNewAnimWidth = activeItemNewAnim.innerWidth();
	var itemPosNewAnimTop = activeItemNewAnim.position();
	var itemPosNewAnimLeft = activeItemNewAnim.position();
	$(".hori-selector").css({
		"top":itemPosNewAnimTop.top + "px", 
		"left":itemPosNewAnimLeft.left + "px",
		"height": activeWidthNewAnimHeight + "px",
		"width": activeWidthNewAnimWidth + "px"
	});
	$("#navbarSupportedContent").on("click","li",function(e){
		$('#navbarSupportedContent ul li').removeClass("active");
		$(this).addClass('active');
		var activeWidthNewAnimHeight = $(this).innerHeight();
		var activeWidthNewAnimWidth = $(this).innerWidth();
		var itemPosNewAnimTop = $(this).position();
		var itemPosNewAnimLeft = $(this).position();
		$(".hori-selector").css({
			"top":itemPosNewAnimTop.top + "px", 
			"left":itemPosNewAnimLeft.left + "px",
			"height": activeWidthNewAnimHeight + "px",
			"width": activeWidthNewAnimWidth + "px"
		});
	});
}
$(document).ready(function(){
	setTimeout(function(){ test(); });
});
$(window).on('resize', function(){
	setTimeout(function(){ test(); }, 500);
});
$(".navbar-toggler").click(function(){
	$(".navbar-collapse").slideToggle(300);
	setTimeout(function(){ test(); });
});

// --------------add active class-on another-page move----------
jQuery(document).ready(function($){
	// Get current path and find target link
	var path = window.location.pathname.split("/").pop();

	// Account for home page with empty path
	if ( path == '' ) {
		path = 'index.html';
	}

	var target = $('#navbarSupportedContent ul li a[href="'+path+'"]');
	// Add active class to target link
	target.parent().addClass('active');
});
</script>
    </nav>
    </header> 
    <form class="login-form">


<h2>Registro</h2>
<div class="form-floating mb-3">

    <input type="name" class="form-control" id="floatingInput" placeholder="Name">
    <label for="floatingInput">Nombre</label>
  </div> 
   <div class="form-floating mb-3">
    <select class="form-select" id="selectServicio" name="selectServicio">
        <option value="opcion1">Colorimetria cabello</option>
        <option value="opcion2">Maquillaje</option>
        <option value="opcion3">Manicura</option>
        <option value="opcion3">Pedicura</option>
        <option value="opcion3">Peinados</option>
        <option value="opcion3">Cortes damas</option>
        <option value="opcion3">Cortes caballero</option>
        <option value="opcion3">Cepillado y planchado</option>
        <option value="opcion3">Keratina</option>
        
    </select>
    <label for="selectServicio">Selecciona un Servicio</label>
</div>
  <div class="form-floating mb-3">
    <label for="fecha"></label>
    <input type="date" id="fecha" name="fecha">
  </div>
  <div class="form-floating mb-3">
    <label for="hora"></label>
    <input type="time" id="hora" name="hora">
  </div>
  <br>
  <div class="buttom-1">
    <div class="button-danger">
<button type="button" class="btn btn-danger ">Registrar cita</button>
</div>  
</div>
</form>
</body>
<br>
<br>
<br>
<?php include('../Templates_fm/footer.php'); ?>
    </html>