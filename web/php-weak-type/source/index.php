<?php
$flag = 'cysoc{H1_c4n_1_g3t_a_burg3r}';
	if(isset($_POST['password'])){
		$current_password = "QNKCDZO";
		$password = $_POST['password'];
		if (($current_password != $password)){
			$current_password_md5 = md5($current_password);
			$password_md5 = md5($password);
			if($current_password_md5 == $password_md5){
				echo '<script>alert("You know php well!")</script>';
				echo $flag;
			}else{
				echo('<script>alert("Your password is wrong!")</script>');
			}
		}else{
			echo('<script>alert("Your password is wrong!")</script>');
		}
	}else{
		echo('<script>alert("Input your password!")</script>');
	}
?>

<!DOCTYPE html>
<!-- @dave we heard reports there is something wrong with this webpage can u check it out at index.php.bak -->
<html>
<head>
	<title>PHP-The best language for programming</title>
</head>
<body>
	<form method="POST">
		Password : <input type="password" name="password">
		<input type="submit">
	</form>
</body>
</html>
