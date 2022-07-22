<?php
session_start();
if(!$_SESSION['usuario']) {
	header('Location: form.php');
	exit();
}