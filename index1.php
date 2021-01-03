<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <title>Air Ticket Booking page</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link href="TicketRes.css" type="text/css" rel="stylesheet"/>
        <script>
            var z=[];
            
            function airways()
            {
                var y=[];
                var a = document.getElementById("airfname").value;
                if(a===""){
                    alert("Enter first name.");
                    return;
                }
                var b = document.getElementById("airmname").value;
                
                var c = document.getElementById("airlname").value;
                if(c===""){
                    alert("Enter last name.");
                    return;
                }
                var d = document.getElementById("airgender").value;
                if(d==="-"){
                    alert("Select gender.");
                    return;
                }
                var e = document.getElementById("airphone").value;
                if(e===""){
                    alert("Enter phone no.");
                    return;
                }
                var f = document.getElementById("airto").value;
                if(f===""){
                    alert("Enter your destination.");
                    return;
                }
                var g = document.getElementById("airfrom").value;
                if(g===""){
                    alert("Enter your source.");
                    return;
                }
                var h = document.getElementById("airdate").value;
                if(h===""){
                    alert("Enter date of travel.");
                    return;
                }
                var i = document.getElementById("airpassenger").value;
                if(i===""){
                    alert("Select the no. of passengers.");
                    return;
                }
                var j = document.getElementById("airchild").value;
                
                var k = document.getElementById("airinfant").value;
                
                var l = document.getElementById("airclass").value;
                if(l==="-"){
                    alert("Specify the class.");
                    return;
                }
				/*
                y.push(a);
                y.push(b);
                y.push(c);
                y.push(d);
                y.push(e);
                y.push(f);
                y.push(g);
                y.push(h);
                y.push(i);
                y.push(j);
                y.push(k);
                y.push(l);
                z.push(y);
                
                var data="";
               
                data+="<table border='1' align='center'>";
                data+="  <thead>"; 
                data+="      <th>First name</th><th>Middle name</th><th>Last name</th><th>Gender</th><th>Phone</th><th>To</th><th>From</th><th>Date</th><th>No. of Passengers</tg><th>No. of children</th><th>No. of infant</th><th>Class</th><th>Amount</th>";
                data+="  </thead>";
                data+="  <tbody>";
                var sum=1089;
                if(i==='1'){
                    sum=sum*1;
                }else if(i==='2'){
                    sum=sum*2;
                }
                else if(i==='3'){
                    sum=sum*3;
                }
                else if(i==='4'){
                    sum=sum*4;
                }
                else if(i==='5'){
                    sum=sum*5;
                }
                else if(i==='6'){
                    sum=sum*6;
                }
                else if(i==='7'){
                    sum=sum*7;
                }
                else if(i==='8'){
                    sum=sum*8;
                }
                else if(i==='9'){
                    sum=sum*9;
                }
                else if(i==='10'){
                    sum=sum*10;
                }
                else if(i==='11'){
                    sum=sum*11;
                }
                else if(i==='12'){
                    sum=sum*12;
                }
                else if(i==='13'){
                    sum=sum*13;
                }
                else if(i==='14'){
                    sum=sum*14;
                }
                else{
                    sum=sum*1;
                }
                for(var i=0;i<z.length;i++)
                    {        
                        data+="<tr><td>"+z[i][0]+"</td><td>"+z[i][1]+"</td><td>"+z[i][2]+"</td><td>"+z[i][3]+"</td><td>"+z[i][4]+"</td><td>"+z[i][5]+"</td><td>"+z[i][6]+"</td><td>"+z[i][7]+"</td><td>"+z[i][8]+"</td><td>"+z[i][9]+"</td><td>"+z[i][10]+"</td><td align='center'>"+z[i][11]+"</td><td>"+sum+"</td></tr>";
                    }
               // data+=" <tr><td colspan='11'><h2 align='center'>Ticket Confirmed.<br><br>Safe Journey.</h2></td></tr>";
                data+="<tr><td colspan='13'><h1 align='center'><br>Ticket Confirmed. Safe Journey.</h1></td></tr>";
                data+="  </tbody>";
                data+="</table>";
                confirm("Submit ? ");
                //clear();
                document.write('<br><br>'+data);
                
        }
            /*function clear()
            {
                document.getElementById(airfname).value="";
                document.getElementById(airmname).value="";
                document.getElementById(airlname).value="";
                document.getElementById(airgender).value="";
                document.getElementById(airphone).value="";
                document.getElementById(airto).value="";
                document.getElementById(airfrom).value="";
                document.getElementById(airdate).value="";
                document.getElementById(airchild).value="";
                document.getElementById(airinfant).value="";
                document.getElementById(airclass).value="";
            }*/
        </script>
    </head>
    <body bgcolor='#ddd'>
            <div class="fieldtop">
                &nbsp &nbsp &nbsp <a href="index.php" class="menus">Home</a> &nbsp &nbsp &nbsp | &nbsp &nbsp &nbsp &nbsp 
                <a href="AboutUs.php" class="menus">About Us</a> &nbsp &nbsp &nbsp | &nbsp &nbsp &nbsp &nbsp 
                <a href="Booking.php" class="menus"><span class="presentPage">Booking</span></a> &nbsp &nbsp &nbsp | &nbsp &nbsp &nbsp &nbsp 
                <a href="Gallery.php" class="menus">Gallery</a> &nbsp &nbsp &nbsp | &nbsp &nbsp &nbsp &nbsp 
                <a href="ContactUs.php" class="menus">Contact Us</a> &nbsp &nbsp &nbsp | &nbsp &nbsp &nbsp &nbsp 
                <a href="Help.php" class="menus">Help</a>
            </div>
        <div id="airwaybackground">
            <center><br><br><br><br>
            <marquee id="marq" style="color:black;">Come, travel with <span id="address"><i>letstravelsomewhere.com</i></span></marquee><br><br><br><br>

            <h1 align="center"><u>Air Ticket Booking Page</u></h1><br><br><br>
            <fieldset id="box7">
                <h2>Please enter your details.</h2><br><br>
                <marquee style="width:80%;">The details marked in ( <span class="star">*</span> ) are mandatory to be filled.</marquee>

                <br><br>
                <form method="POST" action="">
                    <table style="border:2px solid black" border="1">
                        <tr>
                            <td>First Name <span class="star">*</span></td>
                            <td><input type="text" id="airfname" name="first_name" required/></td>
                        </tr>
                        <tr>
                            <td>Middle Name</td>
                            <td><input type="text" id="airmname" name="middle_name"/></td>
                        </tr>
                        <tr>
                            <td>Last Name <span class="star">*</span></td>
                            <td><input type="text" id="airlname" name="last_name" required/></td>
                        </tr>
                        <tr>
                            <td>Gender <span class="star">*</span></td>
                            <td>
                                <select style="width:90%;" id="airgender" name="gender" required>
                                    <option value="">-</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>Phone no.<span class="star">*</span></td>
                            <td><input type="text" id="airphone" maxlength="10" name="phone_no" required/></td>
                        </tr>
                        <tr>
                            <td>To <span class="star"> *</span></td>
                            <td><input type="text" id="airto" name="travel_to" required/></td>
                        </tr>
                        <tr>
                            <td>From <span class="star">*</span></td>
                            <td><input type="text" id="airfrom" name="travel_from" required/></td>
                        </tr>
                        <tr>
                            <td>Date <span class="star">*</span></td>
                            <td><input type="date" id="airdate" name="date" required/></td>
                        </tr>
                        <tr>
                            <td>No. of Passengers <span class="star">*</span></td>
                            <td><input type="text" id="airpassenger" name="no_of_passengers" required/></td>
                        </tr>
                        <tr>
                            <td>No. of Children</td>
                            <td><input type="text" id="airchild" name="no_of_children"/></td>
                        </tr>
                        <tr>
                            <td>No. of Infant</td>
                            <td><input type="text" id="airinfant" name="no_of_infant"/></td>
                        </tr>
                        <tr>
                            <td>Class <span class="star">*</span></td>
                            <td>
                                <select id="airclass" name="class" required>
                                    <option value="">-</option>
                                    <option value="Economy">Economy</option>
                                    <option value="Business">Business</option>
                                    <option value="Premium_Economy">Premium Economy</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2" align="center"><input type="submit" value="Book" onclick="airways()" name="submit" style="width:30%;"></td>
                        </tr>
                    </table>
                </form>
                <br><br>
            </fieldset>
        </center>
        <br><br><br><br><br><br><br><br><br>
   </div>
        <div id="footer">Designed and developed by Dilip Kumar Sunar | 2020 | <i>@dilipkumarsunar.com</i></div>
    </body>
</html>

<?php
	include 'connection.php';
	
	if(isset($_POST['submit'])){
		$first_name = $_POST['first_name'];
		$middle_name = $_POST['middle_name'];
		$last_name = $_POST['last_name'];
		$gender = $_POST['gender'];
		$phone_no = $_POST['phone_no'];
		$travel_to = $_POST['travel_to'];
		$travel_from = $_POST['travel_from'];
		$date = $_POST['date'];
		$no_of_passengers = $_POST['no_of_passengers'];
		$no_of_children = $_POST['no_of_children'];
		$no_of_infant = $_POST['no_of_infant'];
		$class = $_POST['class'];
		
		$insertquery = "INSERT INTO airticket(first_name,middle_name,last_name,gender,phone_no,travel_to,travel_from,date,no_of_passengers,no_of_children,no_of_infant,class)VALUES('$first_name','$middle_name','$last_name','$gender','$phone_no','$travel_to','$travel_from','$date','$no_of_passengers','$no_of_children','$no_of_infant','$class')";
		
		$res = mysqli_query($conn,$insertquery);
		
		if($res){
			?>
			<script>
				alert("Ticket booked successfully");
			</script>	
			<?php
		}else{
			?>
			<script>
				alert("Oops! Something went wrong.");
			</script>
			<?php
		}
	}
?>