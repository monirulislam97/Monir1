<?php
require('./Table/create_database.php');
require('./Table/create_user_table.php');
require('./Table/create_form_table.php');
require('./Table/insert_data_user.php');
require('./Table/insert_data_form.php');
?>

<html>

<head>
	<title>Index Page</title>
	<link rel="stylesheet" href="./css/style_login.css">
</head>

<body>

	<b class="head">Welcome! Leave Application Management System</b>
	<br />
	<br />

	<button onclick="window.location.href='login.php';">System Start</button>



</body>

</html>