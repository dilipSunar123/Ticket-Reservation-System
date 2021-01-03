<?php
	session_start();
	$conn = mysqli_connect('localhost','root');
?>

<html>
	<head>
		<title>Login page</title>
		<style>
			#top{
				padding:20px;
				font-size:30px;
				width:35%;
				margin-top:100px;
				background:rgba(0,0,0,.4);
				border-radius:10px;
				border:none;
			}
			#butt{
				font-size:15px;
				padding:10px;
				border-radius:2px;
				background:green;
				color:white;
				font-weight:bold;
			}
			.texts{
				font-size:20px;
			}
			legend{
				border:2px solid black;
				padding:10px;
				font-family:Courier new;
				font-weight:bold;
				width:95%;
				background:rgba(0,0,0,.4);
				border-radius:5px;
			}
			input{
				padding:10px;
				font-size:15px;
			}
		</style>
	</head>
	<body align="center" style="background:skyblue;color:white;">
		<center>
			<fieldset id="top">
				<legend>Log in</legend>
					<form method="POST" action="logincheck.php">
						<br><br><br>
						<table>
							<tr>
								<td style="font-size:33px;"><b>Username</b><br></td>
							</tr>
							<tr>
								<td width="10%"><input type="text" name="username" required style="width:80%;height:45px;"/><br><br><br></td>
							</tr>
							<tr>
								<td style="font-size:33px;"><b>Password</b></td>
							</tr>
							<tr>
								<td><input type="password" name="password" required style="width:80%;height:45px;" autocomplete="off"/><br><br><br></td>
							</tr>
							<tr>
								<td align="center"><input type="submit" name="submit" value="log-in" id="butt"/></td>
							</tr>
						</table>
					</form>
				<br><br>
			</fieldset>
	</body>
</html>