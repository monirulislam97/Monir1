<?php
session_start();

if (isset($_SESSION['USER'])) {
	unset($_SESSION['USER']);
}
session_destroy();

header('Location: login.php');
exit;
?>
