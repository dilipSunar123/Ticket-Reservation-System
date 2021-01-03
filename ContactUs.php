<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <title>Contact Us</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link href="TicketRes.css" type="text/css" rel="stylesheet"/>
		<style>
			input{
				font-size:20px;
			}
		</style>
    </head>
    <body bgcolor="#ddd">
            <div class="fieldtop">
                &nbsp &nbsp &nbsp <a href="index.php" target="_blank"class="menus">Home</a> &nbsp &nbsp &nbsp | &nbsp &nbsp &nbsp &nbsp 
                <a href="AboutUs.php" class="menus">About Us</a> &nbsp &nbsp &nbsp | &nbsp &nbsp &nbsp &nbsp 
                <a href="Booking.php" target="_blank" class="menus">Booking</a> &nbsp &nbsp &nbsp | &nbsp &nbsp &nbsp &nbsp 
                <a href="Gallery.php" target="_blank" class="menus">Gallery</a> &nbsp &nbsp &nbsp | &nbsp &nbsp &nbsp &nbsp 
                <a href="ContactUs.php" class="menus"><span class="presentPage">Contact Us</span></a> &nbsp &nbsp &nbsp | &nbsp &nbsp &nbsp &nbsp 
                <a href="Help.php" target="_blank" class="menus">Help</a>
            </div>
        <center>
        <div id='ContactUsBackground'><br><br><br><br><br>
            <marquee id="marq">Come, travel with <span id="address"><i>letstravelsomewhere.com</i></span></marquee>
            
        
            <br><br><br><br><br><br><br>
            
            <fieldset id="box5"><br><br>
                In case you find any difficulty/problem while booking tickets through our website, our team is always ready to help you
                with any kind of problem you face.<br><br><br>
                For any enquiry, feedback or complaint related to our site, please mail us in the below given address,<br><br><br><br>
                <center>dilipkumarsunar37010@gmail.com<br>dilipsunar001@gmail.com<br>sunardilip567@gmail.com<br><br><br></center>
            </fieldset><br><br><br>
			<fieldset id="messagebox">
				<form action="" method="POST">
					<table style="width:60%;">
						<thead>
							<th colspan="2"><h2>Send us a message</h2></th>
						</thead>
						<tbody>
							<tr>
								<td style="font-size:20px;">Name</td>
							</tr>
							<tr>
								<td><input type="text" name="name" style="height:25px;width:80%;" required autocomplete="off"/></td>
							</tr>
							<tr>
								<td style="font-size:20px;"><br>Message</td>
							</tr>
							<tr>
								<td><textarea name="message" required style="height:100px;width:98%;" autocomplete="off"></textarea></td>
							</tr>
							<tr>
								<td style="font-size:20px;"><br>Phone no</td>
							</tr>
							<tr>
								<td><input type="text" name="phone" required style="height:25px;width:80%;" autocomplete="off" maxlength="10"/></td>
							</tr>
							<tr>
								<td style="font-size:20px;"><br>email</td>
							</tr>
							<tr>
								<td><input type="text" name="email" required style="height:25px;width:80%;"/></td>
							</tr>
							<tr colspan="2">
								<td align="center"><br><br><input type="submit" name="submit" value="Send"/><br><br></td>
							</tr>
						</tbody>
					</table>
				</form>
				
			</fieldset>
            <br><br><br><br><br><br><br><br><br><br><br>
			<span style="font-size:15px;color:white;">If you want to connect with us you can follow us on our social media platforms.</span>
			<br><br>
				<div>
					<a href="https://www.instagram.com/">
						<img src="icons//ig2icon.png" class="icons"/>
						&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
					</a>
					<a href="https://twitter.com/">
						<img src="icons//twittericon2.png" class="icons"/>
						&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
					</a>
					<a href="https://www.youtube.com/">
						<img src="icons//yt2icon.png" class="icons"/>
						&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
					</a>
					<a href="https://www.facebook.com/">
						<img src="icons//fbicon2.jpg" class="icons"/>
					</a>
				</div>
			</center>
            <div id="footer">Designed and developed by Dilip Kumar Sunar | 2020 | <i>@dilipkumarsunar.com</i></div>
        </div>
    </body>
</html>

<?php
	include 'messageConn.php';
	
	if(isset($_POST['submit'])){
		$name = $_POST['name'];
		$message = $_POST['message'];
		$phone = $_POST['phone'];
		$email = $_POST['email'];
		
		$insertquery = "INSERT INTO message(name,message,phone,email) VALUES('$name','$message','$phone','$email')";
		
		$sql = mysqli_query($conn,$insertquery);
		
		if($sql){
			?>
				<script>
					alert('Message Sent.');
				</script>
			<?php
		}else{
			?>
				<script>
					alert('Oops, an error occured!');
				</script>
			<?php
		}
	}
?>