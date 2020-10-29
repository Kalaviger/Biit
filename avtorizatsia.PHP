
<html>
<head>
	<meta charset="utf-8">

	<title></title>
</head>
<body>
	<center>

<?php

$login = $_POST['login'];
$parol = $_POST['password'];

echo $parol;
echo $login;

	$hostname = "localhost";
		$username  = "root";
		$password = "";
		$database = "avtorizatsia";


	$link =	mysqli_connect($hostname,$username, $password, $database) or exit ("Немогу соедениться сервером базы данных");

	$result = mysqli_query($link, " SELECT * FROM users WHERE log = '$login' AND pas = '$parol' ");
	
	$rows = mysqli_num_rows($result);
	if($rows > 0){
		echo "Вы уже зарегестрированны";
	}else{
	
		$vnesenie = mysqli_query($link, "INSERT INTO users (log, pas) VALUES('$login', '$parol')");
		if ($vnesenie) {
			echo "апись занесена";
		}
	}





?>
</body>
</html>




