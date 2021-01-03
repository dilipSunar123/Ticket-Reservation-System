<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <title>Rail Ticket Booking page</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link href="TicketRes.css" type="text/css" rel="stylesheet"/>
        <script>
            var z=[];
            
            function railways()
            {
                var y=[];
                var a = document.getElementById("railfname").value;
                if(a===""){
                    alert("Enter first name.");
                    return;
                }
                var b = document.getElementById("railmname").value;
                
                var c = document.getElementById("raillname").value;
                if(c===""){
                    alert("Enter last name.");
                    return;
                }
                var d = document.getElementById("railgender").value;
                if(d==="-"){
                    alert("Select gender.");
                    return;
                }
                var e = document.getElementById("railphone").value;
                if(e===""){
                    alert("Enter phone no.");
                    return;
                }
                var f = document.getElementById("railto").value;
                if(f===""){
                    alert("Enter your destination.");
                    return;
                }
                var g = document.getElementById("railfrom").value;
                if(g===""){
                    alert("Enter your source.");
                    return;
                }
                var h = document.getElementById("raildate").value;
                if(h===""){
                    alert("Enter date of travel.");
                    return;
                }
                var i = document.getElementById("railpassenger").value;
                if(i===""){
                    alert("Specify the no. of passengers.");
                    return;
                }
                var j = document.getElementById("railberth").value;
                if(j==="-"){
                    alert("Select the berth.");
                    return;
                }
                var k = document.getElementById("railchild").value;
                
                var l = document.getElementById("railinfant").value;
             
                var m = document.getElementById("railclass").value;
                if(m==="-"){
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
                y.push(m);
                z.push(y);
                
                var data="";
                var sum=299;
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
                data+="<table border='1' align='center'>";
                data+="  <thead>"; 
                data+="      <th>First name</th><th>Middle name</th><th>Last name</th><th>Gender</th><th>Phone</th><th>To</th><th>From</th><th>Date</th><th>No. of passengers</th><th>Berth</th><th>No. of children</th><th>No. of infant</th><th>Class</th><th>Amount</th>";
                data+="  </thead>";
                data+="  <tbody>";
                for(var i=0;i<z.length;i++)
                    {
                        data+="<tr><td class='jstd'>"+z[i][0]+"</td><td>"+z[i][1]+"</td><td>"+z[i][2]+"</td><td>"+z[i][3]+"</td><td>"+z[i][4]+"</td><td>"+z[i][5]+"</td><td>"+z[i][6]+"</td><td>"+z[i][7]+"</td><td>"+z[i][8]+"</td><td>"+z[i][9]+"</td><td>"+z[i][10]+"</td><td>"+z[i][11]+"</td><td>"+z[i][12]+"</td><td>"+sum+"</td></tr>";
                    } 
               // data+=" <tr><td colspan='13'><h2 align='center'>Ticket Confirmed.<br><br>Safe Journey.</h2></td></tr>";
               data+="<tr><td colspan='14'><h1 align='center'><br>Ticket Confirmed. Safe Journey.</h1></td></tr>";
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
        <div id="railwaybackground">
            <center><br><br><br><br>
            <marquee id="marq">Come, travel with <span id="address"><i>letstravelsomewhere.com</i></span></marquee><br><br><br><br>
           
            <h1 align="center"><u>Rail Ticket Booking Page</u></h1><br><br><br>
                <fieldset id="box9">
                    <h2>Please enter your details.</h2><br><br>
                    <marquee style="width:80%;">The details marked in ( <span class="star">*</span> ) are mandatory to be filled.</marquee>

                    <br><br>
                    <form action="" method="POST">
                        <table style="border:2px solid black" border="1">
                            <tr>
                                <td>First Name <span class="star">*</span></td>
                                <td><input type="text" id="railfname" style="width:98%;" name="rfirstname" required/></td>
                            </tr>
                            <tr>
                                <td>Middle Name</td>
                                <td><input type="text" id="railmname" style="width:98%;" name="rmiddlename"/></td>
                            </tr>
                            <tr>
                                <td>Last Name <span class="star">*</span></td>
                                <td><input type="text" id="raillname" style="width:98%;" name="rlastname" required/></td>
                            </tr>
                            <tr>
                                <td>Gender <span class="star">*</span></td>
                                <td>
                                    <select style="width:90%;" id="railgender" name="rgender" required>
                                        <option value="-">-</option>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Phone no.<span class="star">*</span></td>
                                <td><input type="text" id="railphone" maxlength="10" style="width:98%;" name="rphone" required/></td>
                            </tr>
                            <tr>
                                <td>To <span class="star">*</span></td>
                                <td><input type="text" id="railto" style="width:98%;" name="rto" required/></td>
                            </tr>
                            <tr>
                                <td>From <span class="star">*</span></td>
                                <td><input type="text" id="railfrom" style="width:98%;" name="rfrom" required/></td>
                            </tr>
                            <tr>
                                <td>Date <span class="star">*</span></td>
                                <td><input type="date" id="raildate" style="width:98%;" name="rdate" required/></td>
                            </tr>
                            <tr>
                                <td>No. of Passengers <span class="star">*</span></td>
                                <td><input type="text" id="railpassenger" style="width:98%;" name="rpassengers" required/></td>
                            </tr>
                            <tr>
                                <td>Berth <span class="star">*</span></td>
                                <td>
                                    <select id="railberth" style="width:90%;" name="rberth" required>
                                        <option value="">-</option>
                                        <option value="Upper Berth">Upper Berth</option>
                                        <option value="Middle Berth">Middle Berth</option>
                                        <option value="Lower Berth">Lower Berth</option>
                                        <option value="Side Upper Berth">Side Upper Berth</option>
                                        <option value="Side Lower Birth" name="rberth">Side Lower Birth</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>No. of Children</td>
                                <td><input type="text" id="railchild" style="width:98%;" name="rchildren"/></td>
                            </tr>
                            <tr>
                                <td>No. of Infant</td>
                                <td><input type="text" id="railinfant" style="width:98%;" name="rinfant"/></td>
                            </tr>
                            <tr>
                                <td>Class <span class="star">*</span></td>
                                <td>
                                    <select id="railclass" style="width:90%;" name="rclass" required>
                                        <option value="">-</option>
                                        <option value="Unreserved General Class">Unreserved General Class (UR)</option>
                                        <option value="Business">Second Class (2S)</option>
                                        <option value="Premium_Economy">Sleeper Class (SL)</option>
                                        <option value="Premium_Economy">Three Tier Air Conditioned Class (3AC)</option>
                                        <option value="Premium_Economy">Two Tier Air Conditioned Class (2AC)</option>
                                        <option value="Premium_Economy">First Class Air Conditioned (1AC)</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2" align="center"><input type="submit" value="Book" name="submit" onclick="railways()" style="width:30%;"></td>
                            </tr>
                        </table>
                        <br><br>
                    </form>
                </fieldset>
            </center>
            <br><br><br><br><br><br><br><br><br><br>
            <span>Designed and developed by Dilip Kumar Sunar | 2020 | <i>@dilipkumarsunar.com</i></span>
        </div>
        
    </body>
</html>


<?php
	include 'connection2.php';
	
	if(isset($_POST['submit'])){
		$first_name = $_POST['rfirstname'];
		$middle_name = $_POST['rmiddlename'];
		$last_name = $_POST['rlastname'];
		$gender = $_POST['rgender'];
		$phone_no = $_POST['rphone'];
		$travel_to = $_POST['rto'];
		$travel_from = $_POST['rfrom'];
		$date = $_POST['rdate'];
		$no_of_passengers = $_POST['rpassengers'];
		$berth = $_POST['rberth'];
		$no_of_children = $_POST['rchildren'];
		$no_of_infant = $_POST['rinfant'];
		$class = $_POST['rclass'];
		
		$insertquery = "INSERT INTO railticket(first_name,middle_name,last_name,gender,phone_no,travel_to,travel_from,date,no_of_passengers,berth,no_of_children,no_of_infant,class) VALUES('$first_name','$middle_name','$last_name','$gender','$phone_no','$travel_to','$travel_from','$date','$no_of_passengers','$berth','$no_of_children','$no_of_infant','$class')";
		
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
				alert("Oops! Something went wrond.");
			</script>
			<?php
		}
	}
?>