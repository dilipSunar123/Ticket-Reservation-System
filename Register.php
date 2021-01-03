<html>
	<head>
		<title>Registration page</title>
		<style>
			#top{
				padding:20px;
				font-size:30px;
				width:50%;
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
				width:96%;
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
				<legend>REGISTER</legend>
					<form method="POST" action="">
					<br>
					<table>
						<tbody>
							<tr>
								<td class="texts" align="left">first_name</td>
								<td class="texts" align="left">middle_name</td>
								<td class="texts" align="left">last_name</td>
							</tr>
							<tr>
								<td><input type="text" name="first_name" autocomplete="off" style="width:90%;" required/><br><br></td>
								<td><input type="text" name="middle_name" autocomplete="off" style="width:90%;"/><br><br></td>
								<td><input type="text" name="last_name" autocomplete="off" style="width:90%;" required/><br><br></td>
							</tr>
							<tr>
								<td class="texts" align="left" colspan="3">gender</td>
							</tr>
							<tr>
								<td colspan="3">
									<select class="texts" align="left" style="width:20%;" required name="gender">
										<option value="-">-</option>
										<option value="M">Male</option>
										<option value="F">Female</option>
									</select>
								<br><br></td>
							</tr>
							<tr>
								<td class="texts" align="left" colspan="3">address</td>
							</tr>
							<tr>
								<td colspan="3"><textarea value="address" name="address" style="width:60%;height:150px;" required></textarea></td>
							</tr>
							<tr>
								<td class="texts" align="left" colspan="3">date_of_birth</td>
							</tr>
							<tr>
								<td colspan="3"><input type="date" value="address" name="date_of_birth" required style="width:28%;"></td>
							</tr>
							<tr>
								<td class="texts" align="left" colspan="3">phone no</td>
							</tr>
							<tr>	
								<td class="texts" align="left" colspan="3"><input type="text" name="phone_no" autocomplete="off" required maxlength="10"></td>
							</tr>
							<tr class="texts">
								
								<td colspan="3"><br><hr style="color:white;width:90%;"><br>choose a username</td>
							</tr>
							<tr>
								<td colspan="3"><input type="text" name="username" style="width:37%;" required></td>
							</tr>
							<tr>
								<td class="texts" colspan="3">choose a password</td>
							</tr>
							<tr>	
								<td colspan="3"><input type="password" name="password" style="width:37%;" required/><br><br><br><br></td>
							</tr>
							<tr>
								<td align="center" colspan="3"><input type="submit" name="submit" value="Register" id="butt"/></td>
							</tr>
						</tbody>
					</table>
					</form>
					<br><br>
					<span style="font-size:20px;">Already a member ? </span>
					<span style="font-size:20px;">
						<a href="login.php" style="text-decoration:none;color:white;"><u>Log in</u></a>
					</span><br>
					<span>
						<a href="admin.php" style="text-decoration:none;color:white;font-size:20px;"><u>admin.</u></a>
					</span>
			</fieldset>
	</body>
</html>

<?php
	include 'RegistrationConn.php';
	
	if(isset($_POST['submit'])){
		$first_name = $_POST['first_name'];
		$middle_name = $_POST['middle_name'];
		$last_name = $_POST['last_name'];
		$gender = $_POST['gender'];
		$address = $_POST['address'];
		$date_of_birth = $_POST['date_of_birth'];
		$phone_no = $_POST['phone_no'];
		$username = $_POST['username'];
		$password = $_POST['password'];
		
		$insertquery = "INSERT INTO user_details(first_name,middle_name,last_name,gender,address,date_of_birth,phone_no,username,password) VALUES('$first_name','$middle_name','$last_name','$gender','$address','$date_of_birth','$phone_no','$username','$password')";
	
		$res = mysqli_query($conn,$insertquery);
		
		if($res){
			?>
			<script>
				alert("Registered Successuflly");
			</script>
			<?php
		}else{
			?>
			<script>
				alert("Registration failed!");
			</script>
			<?php
		}
	}
?>