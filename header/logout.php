<?php 
	session_start();
	session_destroy();
	header('Location: http://localhost/Hackathon-2016-Serres-CodeBots-Team/login/index.php');

?>