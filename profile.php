<!DOCTYPE html>
<html lang="es">
<head>
				<meta charset="UTF-8">
				<meta name="viewport" content="width=device-width, initial-scale=1.0">
				<title>Perfil | Red social</title>
				<link rel="stylesheet" href="css/style.css">
				<script type="txt/javascript" src="js/views.js"></script>
</head>
<body>
				<header>
								<nav>
											 <ul>
											 				<li>
											 								<a href="profile.php"><span class="menu-avatar"></span></a>
											 				</li>
											 				<li>
											 								<form action="#">
											 												<input type="text" placeholder="Buscar">
											 												<button>
											 																<img src="img/glasses.png" height="10" alt="Buscar">
											 												</button>
											 								</form>
											 				</li>
											 				<li class="menu_option option"><a href="index.php">Datos</a></li>
											 				<li class="option"><a href="index.php">Perfil</a></li> 
											 				<li class="option"><a href="index.php">Configuración</a></li>
											 </ul>
								</nav>
				</header>
				
				<div class="container profile">
								<article>
												<?php 
												for ($i=O; $i < 10; $i++) {
																?>
																<section>
																				<div class="avatar">
																								<div class="background-image">
																												<img src="img/avatar64.jpg" alt=""> 																											
																								</div>
																								<div class="action">
																												<h2><a href="#">perdoerd587</a></h2>
																												<h3><a href="#">Hace dos horas</a></h3>
																								</div>
																								<div style="clear:both;"></div>
																				</div>
																				<div class="status">
																								<p>que te la pases muy bien gracias a Dios en la vida de mi vida y te paso la cuenta de free firé que este bueno tienes</p>
																				</div>
																</section>
																<?php 
																}
																?>
								</article>
								<aside>
												<div class="user_information">
																<h1>Informacion</h1>
																<p>hola soy juana loremnfnenxndnnenendkxkzkdnenenedmzlañwnf</p>
												</div>
								</aside>
								<div style="clear:both;"></div>
								</div>
								<div class="background_modal" id="openmodal">
												<div class="modal_container">
																<a href="#close" class="close_button"><img src="img/close.png" alt=""></a>
																<div class="modal_content">
																				<h1>Aviso</h1>
																				<p>que te di es que no te arrepentirás porfa no me deja abrirlo y te la vendo en el grupo está bien perrona no te preocupes</p>
																</div>
												</div>
								</div>
</body>
</html>