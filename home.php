
<!DOCTYPE html>
<html>

<head>
<link rel="stylesheet" type="text/css" href="home.css">
<script type="text/javascript" src="home.js"></script>
<style>
   

input {
    border: none;
    font-family: inherit;
    font-size: inherit;
    font-weight: inherit;
    line-height: inherit;
    -webkit-appearance: none;
}

/* ---------- LOGIN ---------- */

#login {
    margin: 50px auto;
    width: 400px;
    position: absolute;
    left:500px;
    top:100px;
    z-index: 99999999;
    display: none;

}

#login h2 {
    background-color: #28ad63;
    -webkit-border-radius: 20px 20px 0 0;
    -moz-border-radius: 20px 20px 0 0;
    border-radius: 20px 20px 0 0;
    color: black;
    font-size: 28px;
    padding: 20px 26px;
}

#login h2 span[class*="fontawesome-"] {
    margin-right: 14px;
}

#login fieldset {
    background-color: black;
    -webkit-border-radius: 0 0 20px 20px;
    -moz-border-radius: 0 0 20px 20px;
    border-radius: 0 0 20px 20px;
    padding: 20px 26px;
}

#login fieldset p {
    color: #777;
    margin-bottom: 14px;
}

#login fieldset p:last-child {
    margin-bottom: 0;
}

#login fieldset input {
    -webkit-border-radius: 3px;
    -moz-border-radius: 3px;
    border-radius: 3px;
}

#login fieldset input[type="email"], #login fieldset input[type="password"] {
    background-color: #eee;
    color: #777;
    padding: 4px 10px;
    width: 328px;
}

#login fieldset input[type="submit"] {
    background-color: #33cc77;
    color: #fff;
    display: block;
    margin: 0 auto;
    padding: 4px 0;
    width: 150px;
}

#login fieldset input[type="submit"]:hover {
    background-color: #f95252;
}

        #login1 {
    margin: 50px auto;
    width: 400px;
    position: absolute;
    left:500px;
    top:100px;
    z-index: 99999999;
    display: none;
    

}

#login1 h2 {
    background-color: #28ad63;
    -webkit-border-radius: 20px 20px 0 0;
    -moz-border-radius: 20px 20px 0 0;
    border-radius: 20px 20px 0 0;
    color: black;
    font-size: 28px;
    padding: 20px 26px;
}

#login1 h2 span[class*="fontawesome-"] {
    margin-right: 14px;
}

#login1 fieldset {
    background-color: black;
    -webkit-border-radius: 0 0 20px 20px;
    -moz-border-radius: 0 0 20px 20px;
    border-radius: 0 0 20px 20px;
    padding: 20px 26px;
}

#login1 fieldset p {
    color: #777;
    margin-bottom: 14px;
}

#login1 fieldset p:last-child {
    margin-bottom: 0;
}

#login1 fieldset input {
    -webkit-border-radius: 3px;
    -moz-border-radius: 3px;
    border-radius: 3px;
}

#login1 fieldset input[type="email"], #login fieldset input[type="password"] {
    background-color: #eee;
    color: #777;
    padding: 4px 10px;
    width: 328px;
}

#login1 fieldset input[type="submit"] {
    background-color: #33cc77;
    color: #fff;
    display: block;
    margin: 0 auto;
    padding: 4px 0;
    width: 150px;
}

#login1 fieldset input[type="submit"]:hover {
    background-color: #f95252;
}
</style>
<script type="text/javascript">
    function login(){
      document.getElementById('login1').style.display='block';
  document.getElementById('nav').style.opacity='.2';
  document.getElementById('form_form').style.opacity='.2';
  document.getElementById('introduction_content').style.opacity='.2';
    }

</script>
</head>

<body onload="foo()" link="#FFFFFF">

<div id="navbar">

        <ul>
        <li><b><a href="">Contact Us</a></b></li>
        <li><b><a href="#" onclick="login();">Admin</a></b></li>
        <li><b><a href="">Regency Institute</a></b></li>
        <li><b><a href="">Corporate</a></b></li>
        <li><b><a href="news.php">News & Events</a></b></li>
        <li><b><a href="offers.php">Special Offers</a></b></li>
            <li><b><a href="">Home</a></b></li>
            
            
            
            
            
            
        </ul>


    </div>

<div id="nav" >
<img id="imgid" src="images/1.jpg" width="100%" height="350px" alt="no img found" style="position: relative; top: 0; left: 0;">
<img src="images/black.png" height="263px" width="218" style="position: absolute; top: 180px; left: 120px;"/>
<img src="images/hhi.jpg"  style="position: absolute; top: 88px; left: 120px;"/>
<img src="images/bar.jpg"  width="100% "style="position: absolute; top: 438px; left: 8px;"/>

<!--<div id="tool_hide" >
<iframe src="index.html" width="1024" height="252" frameborder="0"></iframe>
</div>-->
<img id="img_rate" onClick="disply()" src="images/rate.png"  height="55px" width="218px" style="position: absolute; top: 438px; left: 120px;"/>













<ul style="position: absolute; top: 200px; left: 120px;">


         <li><a href="accommodation.html">ACCOMMODATION</a></li>

         <li><a href="news.php">BANQUETS</a></li>

         <li><a href="ht_ex.php">HOTEL EXPERIENCE</a></li>

         <li><a href="">FINE DINING</a></li>

         <li><a href="">PICTURE GALLERY</a></li>

         <li><a href="">PROMOTIONS</a></li>

      </ul>

       
</div>


<div id="login">

        <h2><span class="fontawesome-lock"></span>Cancel Reservation</h2>
        

        <form action="home.php" method="GET">

            <fieldset>

                <p><label for="email">Email of the user:</label></p>
                <p><input type="text" id="email" name='USN' value="" style="width:300px;" onBlur="if(this.value=='')this.value='mail@address.com'" onFocus="if(this.value=='mail@address.com')this.value=''"></p> <!-- JS because of IE support; better: placeholder="mail@address.com" -->

                <p><label for="password">Order Id:</label></p>
                <p><input type="text" id="password" name='password' value="" style="width:300px;"onBlur="if(this.value=='')this.value='order-id'" onFocus="if(this.value=='order-id')this.value=''"></p> <!-- JS because of IE support; better: placeholder="password" -->

                <p><input type="submit" name="sign" value="Cancel Reservation"></p>

            </fieldset>

        </form>

    </div>



<div id="login1">

        <h2><span class="fontawesome-lock"></span>Admin Login</h2>
        

        <form action="admin.php" method="GET">

            <fieldset>

                <p><label for="email">Admin Username:</label></p>
                <p><input type="text" id="email" name='USN' value="" style="width:300px;" onBlur="if(this.value=='')this.value='mail@address.com'" onFocus="if(this.value=='mail@address.com')this.value=''"></p> <!-- JS because of IE support; better: placeholder="mail@address.com" -->

                <p><label for="password">Password:</label></p>
                <p><input type="text" id="password" name='password' value="" style="width:300px;"onBlur="if(this.value=='')this.value='password'" onFocus="if(this.value=='password')this.value=''"></p> <!-- JS because of IE support; better: placeholder="password" -->

                <p><input type="submit" name="sign" value="Log In"></p>

            </fieldset>

        </form>

    </div>





<div id="form_form">
<div class="form_panel">
    <div class="title_of_form"><p>BEST RATES GUARANTEED</p></div><hr/>
    <div>
     <!--<form name="form1" method="post" action="#" enctype="multipart/form-data" lang="en">-->
        
     <form name="form1" method="GET" action="date.php" >

        <span class="form_heading" style="margin-top:0px; float:left; margin-left:20px;">ARRIVAL</span> 
        <input type="date" id="date_from" name="arrival_day" style="float:left; margin-top:20px; margin-left:-55px; width:140px; height:22px;">
        
         <span class="form_heading" style="float:left; margin-top:00px; margin-left:20px;">DEPARTURE</span> 
        <input type="date" id="date_to" name="departure_day" style="float:left; margin-top:20px; width:140px; height:22px; margin-left:-75px;" onblur="Update_night()">
    
        
        <label class="form_heading" style="float:left; margin-top:0px; margin-left:20px;">NIGHTS</label>
        <input type="text" name="night" style="float:left; margin-top:20px; width:100px; height:22px; margin-left:-50px;" readonly="readonly">
        
       <label class="form_heading" style="float:left; margin-top:0px; margin-left:20px;">ADULTS</label>
        <select name="adults" style="float:left; margin-top:20px; width:100px; height:29px; margin-left:-50px;">
            <option selected="selected" value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
                   </select>
      
   
       
       <label class="form_heading" style="float:left; margin-top:00px; margin-left:20px;">CODE</label>
       <input type="text" name="code" style="float:left; margin-top:20px; width:80px; height:22px; margin-left:-35px;">

        
       <label class="form_heading" style="float:left; margin-top:0px; margin-left:20px;">ROOMS</label>
       <select name="rooms" style="float:left; margin-top:20px; width:100px; height:29px; margin-left:-45px;">
            <option selected="selected" value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
        </select>
        
        <label class="form_heading" style="float:left; margin-top:0px; margin-left:20px;">CHILDREN</label>
         <select name="children" style="float:left; margin-top:20px; width:100px; height:29px; margin-left:-65px;">
            <option selected="selected" value="0">0</option>
            <option value="1">1</option>
            <option value="2">2</option>
        </select>       
        
<label class="form_heading" style="float:left; margin-top:5px; margin-left:20px;">GROUP RESULTS BY OFFER</label><br>
<input type="checkbox" name="group_offer" value="OFFER" style="float:left; margin-top:20px; width:130px; height:22px; margin-left:-235px;" />

        
<label class="cancel_reservation" onclick="cancel();" style="float:left; margin-top:50px; margin-left:-180px;">Amend/Cancel Existing Reservation</a></label>
        

            
            <input type="submit" name="book_now" value="BOOK NOW >" class="bk_nw" onClick="Validation()"/>
    </form>
    </div>
</div>

</div>


















<div id="introduction_content">


   <!-- <div id="content_one" style="z-index:-99999999999999999999; margin-top:0px;"><br><br><br><br>
    <img id="im" src="images/map.jpg"  alt="MAP" title="MAP" width="200px" height="350px"></div>-->

    <div id="content_one" style="z-index:-99999999999999999999; margin-top:0px;"><br><br><br>

<div class="hangout" style="margin-left:20px; margin-top:25px; text-align:center;">"Lets See Your Nearby Hangouts"</div> 

<!--<div class="city"><button onClick="go('../maps/nearby_begaluru/begaluru_map.html')" value="SELECT" style="height:20px;">HHI BEGALURU</button></div>-->

 

<!--<div class="places">

  <button onClick="go('../maps/nearby_begaluru/index.html')" value="NEARBY PLACES" style="height:20px;">NEARBY PLACES</button></div>-->

<iframe src="http://www.hhihotels.com/maps/nearby_begaluru/index.html" id="iframe_places" height="310" width="250" frameborder="0"></iframe>

</div>

<script language="JavaScript">

function go(loc){

    document.getElementById('iframe_places').src = loc;

}

</script>












<div id="content_two">
<br><br><br><br>


<table>

<tr>

<td><img src="images/HR.png"/></td>

<td  class="headings_font"><h1> Hotel in Bangalore  </h1></td>

<td><img src="images/HR.png"/></td>

</tr>

</table>

<img id="imgid1" src="images/2_1.jpg"  alt="Hotels in Bangalore" title="Hotels In Bangalore">






<div id="kolkata_heading1" class="headings_font" style="float:left; margin-top:20px;"><b>Feel the ecstasy of luxury, sophistication at The HHI Select, Bengaluru </b> </div>

<div id="kolkata_content" class="all_content_font"><br>

The HHI Select Bengaluru is one of the best located business hotels in the city. Our newly inaugurated property promises to unveil its new avatar in a classic style that helps you gain more out of your business trip. Our hotel in Bengaluru exudes a perfect blend of sophistication and luxury that makes it an ideal choice for patrons and business travellers.
Feel the ecstasy of luxury and sophistication at The HHI Select, Bengaluru.



</div>





</div>

<div id="content_three"><br><br><br><br>

<div class="headings_font" style="margin-left:20px; margin-top:25px;">" City of Culture "</div>

<div id="kolkata_dining"><img src="images/food.jpg" alt="Hotels In Bangalore" title="Hotels In Bangalore"/></div>

<div class="headings_font" style="margin-left:25px; margin-top:20px;">" Udupi Cuisine "</div>

<div id="quotes" style="margin-top:20px;">" The cuisine of Karnataka includes many vegetarian and non-vegetarian cuisines. The varieties reflect influences from and to the food habits of many regions and communities from the three neighbouring South Indian states. "</div>
</div>  
</div>








<br><br><br><br>

<div id="kolkata_heading" style="margin-left:450px; margin-top:30px; float:left;"><table>

<tr>

<td><img src="images/HR.png" alt="horizontal line"/></td>

<td  class="headings_font">HIGHLIGHTS</td>

<td><img src="images/HR.png" alt="horizontal line"/></td>

</tr>

</table>

</div>

<div id="kolkata_images" style="margin-left:170px; margin-top:30px; float:left;">

  <div id="topaz"><img src="images/gym.jpg" alt="Hotels In Bangalore" title="Hotels In Bangalore"/></div>

  <div id="kalash"><img src="images/res.jpg" alt="Hotels In Bangalore" title="Hotels In Bangalore"/></div>

    <div id="colony_premium"><img src="images/rooms.jpg" alt="Hotels In Bangalore" title="Hotels In Bangalore"/></div>

</div>



<div id="kolkata_images_headings" style="margin-left:170px; margin-top:30px; float:left;">

  <div id="topaz_heading" class="headings_font">GYM</div>

    <div id="kalash_heading" class="headings_font">RESTAURANT</div>

    <div id="colony_heading" class="headings_font" style="width:280px;">SPACIOUS ROOMS</div>

</div>



<div id="img" style="margin-left:450px; margin-top:30px; float:left;">

  <div id="img_one"><img src="images/bg.png" alt="Hotels In Bangalore" title="Hotels In Bangalore" /></div>

    <div id="img_two"><img src="images/land.jpg" alt="Hotels In Bangalore" title="Hotels In Bangalore" /></div>

    <div id="img_three"><img src="images/bg.png" alt="Hotels In Bangalore" title="Hotels In Bangalore" /></div>

</div>



<div id="bottom">

<div id="Respose_heading" class="headings_font" style="text-align:center; margin-left:430px; margin-top:30px; float:left;"><b>Repose, Reflect, Refresh</b></div>

<div id="highlight_text" class="all_content_font" style="margin-left:450px; margin-top:30px; float:left;">
The HHI Select Bengaluru creates a special environment of comfort and luxury. Refreshing and contemporary, each room is designed in themes that accentuate hospitality. Infusing life into the existing structure, the accessories around reflect style and elegance. In totality, the rooms illustrate the trends of modern living that's truly luxurious. Equipped with cordless phones and wi-fi connectivity, these rooms leave no gap to fulfil the needs of the high-profile traveller. 

</div>
</div>


<div id="footer_strip" style="float:left;margin-left:180px; margin-top:30px; float:left;"><img src="images/strip.jpg" alt="Hotels In Bangalore" title="Hotels In Bangalore" /></div>    

</div>
<?php
if(isset($_GET['sign']))
{

$con = mysqli_connect("localhost","root","root","hhi");
$email=$_GET['USN'];
$order=$_GET['password'];



if (!$con)
  {
    die('Could not connect: ' . mysql_error());
  }
$result = mysqli_query($con,"select room_no from reservation where email='$email' and order_id='$order'");
$row=mysqli_fetch_array($result);
$room=$row['room_no'];
$result1=mysqli_query($con,"DELETE FROM book WHERE order_id='$order'");
$result2=mysqli_query($con,"DELETE FROM reservation WHERE order_id='$order'");
$result3=mysqli_query($con,"Update room_details set Avail='Available' where room_no='$room'");
if($result1 && $result2 && $result3){
$message="Successfully Cancelled";
echo "<script type='text/javascript'>alert('$message');</script>";}

}
?>
</body>






</html>
