<?php

if (!isset($_GET['page']) or $_GET['GET'] == "home") {
				$page_name = "inicio | red social";
				$page = $_GET['page'];
}elseif ($_GET['page']) == "profile") {
$page_name = "perfil| red social";
$page = $_GET['page'];
}else{ 
$page_name = "inicio | red social";
$page = $_GET['page'];
}
?>
