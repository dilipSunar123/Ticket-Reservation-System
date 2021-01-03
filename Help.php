<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <title>Help</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link href="TicketRes.css" type="text/css" rel="stylesheet"/>
    </head>
    <body bgcolor='#ddd'>
            <div class="fieldtop">
                &nbsp &nbsp &nbsp <a href="index.php" target="_blank" class="menus">Home</a> &nbsp &nbsp &nbsp | &nbsp &nbsp &nbsp &nbsp 
                <a href="AboutUs.php" class="menus" target="_blank">About Us</a> &nbsp &nbsp &nbsp | &nbsp &nbsp &nbsp &nbsp 
                <a href="Booking.php" target="_blank" class="menus">Booking</a> &nbsp &nbsp &nbsp | &nbsp &nbsp &nbsp &nbsp 
                <a href="Gallery.php" target="_blank" class="menus">Gallery</a> &nbsp &nbsp &nbsp | &nbsp &nbsp &nbsp &nbsp 
                <a href="ContactUs.php" class="menus" target="_blank">Contact Us</a> &nbsp &nbsp &nbsp | &nbsp &nbsp &nbsp &nbsp 
                <a href="Help.php" class="menus"><span class="presentPage">Help<span></a>
            </div>
        <center>
         
        <div id="helpbackground"><br><br><br><br><br>
                <marquee id="marq">Come, travel with <span id="address"><i>letstravelsomewhere.com</i></span></marquee>
                <br><br><br><br><br><br>
                <fieldset id="box5"><br><br>
                    <h3><span style="color:red;background:white;">EXTREMELY SORRY FOR INCONVENIENCE.</span></h3><br>
                    We tried our best not to let you face any kind of problem/difficulty, but we're really sad to know that you faced 
                    some sort of difficulty due to which you're here in this help section of our site.<br><br><br>
                    Please mail us what problem are you exactly facing in the below given email <br>address and we will try helping you 
                    in all the possible ways, as soon as possible.<br><br><br><br>
                    <center>dilipkumarsunar37010@gmail.com<br>dilipsunar001@gmail.com<br>sunardilip567@gmail.com<br><br><br></center>
                </fieldset>

                <br><br><br>

                <h1>More</h1>

                <fieldset id="box8">
                    <br><br>
                    If you want to know more about us or book a ticket, etc. then we are fortunate enough to inform 
                    you that you have clicked on the correct page's link.<br><br>
                    Our website consists of some number of pages which we shall like to brief you about.<br><br>
                        <h3><u>Home</u></h3>
                        Our home page welcomes you to our website and tells you something about our site which helps you to get an idea of what
                        basically our website is all about.<br><br>Our home page also gives you an <b>assurance</b> that we will try our best to serve you
                        and try not to let you face any kind of difficulty while booking a ticket.<br>But still in case if you face any kind of 
                        problem which we make sure you will not, we have provided a link which will take you directly to our <b>Contact Us</b> page
                        from where you will get our email address through which you can contact us regarding the problem you are facing.<br><br>
                        <h3><u>About Us</u></h3>
                        We have mentioned in brief about our site in this page.<br><br>
                        We have also mentioned about the persion behind this website (person who designed it).<br><br>
                        Our email address has also been mentioned in case you need any help.<br><br>
                        <h3><u>Booking</u></h3>
                        This is the page where you get the option to book tickets for different modes (airways, railways, roadways and waterways).<br><br>
                        Once you enter into this page you will have to select which mode would you like to book the tickets for and after you select the
                        mode you will reach to the form where you will have to fill up all the details <br><br>
                        <b>Note: </b>The details which are marked in red star are mandatory to be filled and the other details are optional, which means it 
                        depends on you whether or not to fill the details up.<br><br>
                        <h3><u>Gallery</u></h3>
                        Now, this is a page where you will find some of the pictures taken from our department while traveling.<br>This is not a very important
                        page if you are here just to book a ticket but it is to show how we treat our dear travelers and also to show you how 
                        safe and joyful it is to travel with us.<br><br>
                        <h3><u>Contact Us</u></h3>
                        This is a page where details of our emails have been provided in case you face any difficulty during the booking process.
						<br><br><br><br><br>
						<form action="" method="POST">
							<table align="left">
								<tr>
									<td>Leave a comment...</td>
								</tr>
								<tr>
									<td><textarea name="comments" required style="background:#eee;border:none;height:200px;width:200%;"></textarea></td>
								</tr>
								<tr>
									<td><br>Phone no.</td>
								</tr>
								<tr>
									<td colspan="2"><input type="text" name="phone_no" required maxlength="10" style="background:#eee;border:none;width:150%;height:30px;"/><br><br></td>
								</tr>
								<tr>
									<td align="left"><input type="submit" value="Send" name="submit" style="padding:5px;font-size:15px;font-weight:bold;"/></td>
								</tr>
							</table>
						</form><br><br><br><br>
                </fieldset>
				<br><br><br><br><br><br><br><br>
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
					</a>
				</div>
				<div id="footer">Designed and developed by Dilip Kumar Sunar | 2020 | <i>@dilipkumarsunar.com</i></div>    
			</center>
        </div>
            
    </body>
</html>

<?php
	include 'HelpConnection.php';
	
	if(isset($_POST['submit'])){
		$comments = $_POST['comments'];
		$phone_no = $_POST['phone_no'];
		
		$insertquery = "INSERT INTO commentbox(comments,phone_no) VALUES('$comments','$phone_no')";
	
		$res = mysqli_query($conn,$insertquery);
	
		if($res){
			?>
			<script>
				alert("Sent.");
			</script>
			<?php
		}else{
			?>
			<script>
				alert("Error!");
			</script>
			<?php
		}
	}
?>