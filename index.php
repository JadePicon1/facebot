<?php require 'common/config.php'; ?>

<!DOCTYPE html>
<html lang="es">
<head>
				<meta charset="UTF-8">
				<title>Red Social</title>
				<link rel="stylesheet" href="css/style.css">
				<script type="text/javascript" src="js/views.js"></script>
</head>
<body>
				<?php
             include 'header.php';
             if ($page == 'profile') {
             				include 'banner_profile.php';
             }
        ?>
        <div class="container">
        				<?php
             include 'status.php';
        ?>
        
        <aside>
        				<?php
             include 'aside_content.php';
        ?>
        
        </aside>
        <div style="clear:both;"></div>
        </div>
        <div class="status">
        				<p>loreminpuebcbd excelente día aya en la cuenta de free firé que este bueno tienes que hacer un favor a alguien que me pidas comprar el y el otro teléfono de la cuenta gamer por la Merced y te paso la cuenta de free firé que este un poco de eso </p>
        </div>
        <div class="like_tools">
        			 <a href="#" class="like_button">Me gusta</a>
        			 <a href="#" class="dislike_button">No me gusta</a>
        			 <a href="#openmodal" class="coments_button">25 comentarios</a>
        </div>
        <div class="coments_container">
        				<?php for ($i=O; $i < 15; $i++) { ?>
        				<div class="coment">
        								<div class="image">
        												<img src="img/avatar64.jpg" width="35" alt="imagen">
        								</div>
        								<div class="text">
        												<a href="#" class="name">Eduardo Mendoza</a> loremimpsum dolor sit amer contexture adipcicing
        								</div>
        								<div style="clear:both"></div>
        				</div>
        <?php } ?>
        <!-- caja comentario -->
        <div class="coment">
        				<div class="image">
        								<img src="img/avatar64.jpg" width="35" alt="imagen">
        </div>
        <div class="text">
        				<form method="post" action="#">
        								<input type="text" name="coment" placeholder="Haz un comentario">
        				</form>
        </div>
        <div style="clear:both;"></div>
        </div>
        </div>
        </section>
        </div>
        </div>
        </div>
</body>
</html>
