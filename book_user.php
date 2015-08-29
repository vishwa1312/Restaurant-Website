    
<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>

<head>


<style>
#header {
    
    color:white;
    text-align:center;
    padding:5px;
    height: 100px
}
#nav {
    line-height:30px;
    background-color:#eeeeee;
    height:50px;
    width:1275px;
    float:left;
    padding:5px;        
}

#footer {
    background-color:#cd592c;
    color:white;
    clear:both;
    text-align:center;
   padding:5px;    
}
#navbar {
width:100%;
height:120px;
background-color:#eeeeee;
}

#navbar ul {
width:100%;
margin:0 auto 0 auto;
}

#navbar ul li {
float:left;
color:black;
padding:0 40px 0 40px;
height:80px;
list-style:none;
display:block;
line-height:80px;
text-align:center;
cursor:pointer;
}
.form_panel
{width:100%;
height:50px;
background-color: #C4B28F;
border-color: #cd592c;


}

.title_of_form
{width:100%;
height:40px;
float:left;
/*background-color:#999;*/}

.title_of_form p
{color:#666666;
text-align:left;
font-family:Arial, Helvetica, sans-serif;
font-weight:500;
font-size:20px;
margin-top:10px;
margin-left:15px;}

.form_heading
{color:brown;
font-family:Arial, Helvetica, sans-serif;
font-size:13px;
font-weight:bold;
}



.bk_nw
{width:120px;
height:30px;
background-color:#cd592c;
color:#FFF;
margin-right:200px;
margin-top:10px;
font-family:Arial, Helvetica, sans-serif;
font-size:13px;
float:right;}

.bk_nw1
{width:120px;
height:30px;
background-color:#cd592c;
color:#FFF;
margin-right:200px;
margin-top:10px;
font-family:Arial, Helvetica, sans-serif;
font-size:13px;
float:right;}
.show_room
{
    width:100%;
    height: auto;
    
}
#nav11 {
    line-height:30px;
    
    height:900px;
    width:10%;
    float:left;
    padding:5px;    
    background-image:url(images/form_bg.jpg);

         
}
#section11 {
    width:76.8%;
    float:left;
    padding:10px; 
    height: auto;       
}
#nav12 {
    line-height:30px;
    
    height:900px;
    width:10%;
    float:left;
    padding:5px;
   
background-image:url(images/form_bg.jpg);}

    #nav22 {
    line-height:30px;
    background-color:#C4B28F;
    height:300px;
    width:200px;
    float:left;
    padding:5px;  
    margin-left: 10px;        
}
#section22 {
    width:200px;
    float:left;
    padding:5px;
    height:250px; 
    background-color:#C4B28F;
    margin-left: 30px;       
}
#nav22 {
    line-height:30px;
    background-color:#C4B28F;
    height:250px;
    width:200px;
    float:left;
    padding:5px;
margin-left: 30px;}

#header33{
    background-color:#C4B28F;
    color:white;
    text-align:center;
    padding:5px;
    height: 100px;
    width: 679px;
    margin-top: 10px;
}

#section33 {
    width:350px;
    float:left;
    
     
    height: auto;
    width: auto;      
}
#imgid1{
    margin-left: 30px;
    margin-top: 130px;
}

#bar22{
    background-color:#C4B28F;
    color:back;
    font-size: 20px;
    text-align:left;
    padding:5px;
    height: 100px;
    width: 890px;
    margin-top: 20px;
    margin-left: 30px;
    position: absolute;
    font-family: Helvetica, sans-serif;
    z-index: 1;
}

#feature{
    background-color:#cd592c;
    color:white;
    text-align:center;
    padding:5px;
    height: 20px;
    width: 300px;
    margin-top: 200px;
    margin-left: 30px;
    position: absolute;
    z-index: 1;

}
#pop{
    background-color:#C4B28F;
    color:#cd592c;
    text-align:center;
    padding:5px;
    height: 150px;
    width: 350px;
    margin-top:650px;
    margin-left: 730px;
    position: absolute;
    z-index: 1;
    border-radius: 25px;
   


}

#feature1{
    background-color:#cd592c;
    color:white;
    text-align:left;
    font-size: 13px;
    padding:5px;
    height: 12px;
    width: 120px;
    margin-top: 30px;
    margin-left: 30px;
    position: absolute;
    z-index: 1;
    line-height: 10px;
    

}
#book_fin{
    background-color:#cd592c;
    color:white;
    text-align:left;
    font-size: 18px;
    padding:5px;
    height: auto;
    width: 520px;
    margin-top: 630px;
    margin-left: 180px;
    position: absolute;
    z-index: 1;
    line-height: 10px;
    

}

#feature2{
    background-color:#cd592c;
    color:white;
    text-align:left;
    font-size: 13px;
    padding:5px;
    height: 12px;
    width: 120px;
    margin-top: 30px;
    margin-left: 270px;
    position: absolute;
    z-index: 1;
    line-height: 10px;
    

}
#feature3{
    background-color:#cd592c;
    color:white;
    text-align:left;
    font-size: 13px;
    padding:5px;
    height: 12px;
    width: 120px;
    margin-top: 30px;
    margin-left: 510px;
    position: absolute;
    z-index: 1;
    line-height: 10px;
    

}
#details{
    background-color:#C4B28F;
    color:black;
    font-size: 20px;
    text-align:left;
    padding:5px;
    height: 500px;
    width: 890px;
    margin-top: -504px;
    margin-left: 30px;
    position: absolute;
    font-family: Helvetica, sans-serif;
    z-index: 2;
    display: none;
}
#footer{
    width: 1260px;
    height: 40px;
    background-color: #C4B28F;
    text-align: center;
    font-size: 15px;
    color: black;
    line-height: 50px;
}


</style>

</script>


</head>

<body>





<div id="header">

<img src="images/hhi.jpg"   onclick="window.location.href='home.php'" style="position: absolute; top: 17px; left: 120px; width:150px;height:100px "/>

</div>

<div class="form_panel"><br>
    
    
     
    </div>
</div>
<div class="show_room">
<div id="nav11">

</div>

<div id="section11"><br>

   <?php
   $type=$_GET['name'];

   
    $row1=$_SESSION['price1'];
    $row2=$_SESSION['price2'];
    $row3=$_SESSION['price3'];
   $arrival=$_SESSION['arrival1'];
   $departure=$_SESSION['departure1'];
   $adults=$_SESSION['adults1'];
   $children=$_SESSION['children1'];
   $name=$_GET['name1'];
   $email=$_GET['email'];
   $ph=$_GET['phone'];

   if($type=='del')
    {echo '<div id="bar22" >&nbsp&nbsp&nbsp&nbspEXECUTIVE DELUXE  with King Bed<br>&nbsp&nbsp&nbsp&nbspFrom <c style="color:#cd592c;">INR&nbsp&nbsp'.$row1.' </c> / night 
      
    </div>
    <div id="feature" >
    <b>Includes buffet breakfast and internet!<b>
    </div>
    <img id="imgid1" src="images/ex_deluxe_1.jpg" alt="no img found" width="900px" height="400px" style="position: relative; top: 0; left: 0;">
    </div>
    <div id="book_fin" >
    <b>GUEST DETAILS<b><br><br><br><form action="book_user.php" method="GET">
    Name*:<input type="text" name="name1" placeholder="Name" value='.$name.' ><br><br><br>
    Email*:<input type="email" name="email" placeholder="Email" value='.$email.' ><br><br><br>
    Ph.No.:<input type="tel" name="phone" placeholder="Phone Number" value='.$ph.'><br><br><br>
    <input type="hidden" name="name" value="del">
    <input type="submit" value="Book Room" name="submit" onclick="blur()"/></form>
    </div>';
    if(isset($_GET["submit"]))
    {
        $length = 10;
        $randomString = substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, $length);
       echo '<div id="pop">
    <c><br><br><br>'.$_GET['name1'].'&nbsp,Thanks for Booking Room at HHI<br><br>Your ORDER ID is <c1 style="color:black;">'.$randomString.'</c1></c>
    </div>'; 
    $con = mysqli_connect("localhost","root","root","hhi");
    if(($name==Null)||($email==Null)||($ph==Null))
    {  
        echo "<script type='text/javascript'>alert('Fill in all the fields');</script>";
    }
    else
    {
        if (mysqli_connect_errno()) 
        {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
        }
        if (!$con)
        {
        die('Could not connect: ' . mysql_error());
        }
        $result = mysqli_query($con,"select room_no from room_details where adults='$adults' and child='$children' and Avail='available' and type='deluxe'");
        
        $room1=mysqli_fetch_array($result);
        $room=$room1['room_no'];
        
        $result1=mysqli_query($con,"Update room_details set Avail='Not Available',arrival='$arrival',departure='$departure' where room_no='$room'");
        $result2=mysqli_query($con,"INSERT INTO book (room_no, type, arrival, departure, avail, order_id)
        VALUES ('$room', 'deluxe', '$arrival', '$departure', 'Not Available', '$randomString')");
        $result3=mysqli_query($con,"INSERT INTO reservation (room_no, name, email, ph_no, arrival, departure, order_id)
        VALUES ('$room', '$name', '$email', '$ph', '$arrival', '$departure', '$randomString')");
        mysqli_close($con);
    }
    
    }
    }
    /*<div id="pop">
    <c><br><br><br>YOUR ROOM IS BOOKED<br>and ORDER ID is </c>
    </div>'
    ;}*/
   
    if($type=='suite'){
        echo '<div id="bar22" >
        &nbsp&nbsp&nbsp&nbspEXECUTIVE SUITE  with Twin Bed<br>&nbsp&nbsp&nbsp&nbspFrom <c id="suite_id" style="color:#cd592c;">INR&nbsp&nbsp'.$row2.' </c> / night 
    </div>
    <div id="feature" >
    <b>Includes buffet breakfast and internet!<b>
    </div>
    <img id="imgid1" src="images/ex_suite_1.jpg" alt="no img found" width="900px" height="400px" style="position: relative; top: 0; left: 0;">
    </div>
    <div id="book_fin" >
    <b>GUEST DETAILS<b><br><br><br><form action="book_user.php" method="GET">
    Name*:<input type="text" name="name1" placeholder="Name" value='.$name.' ><br><br><br>
    Email*:<input type="email" name="email" placeholder="Email" value='.$email.' ><br><br><br>
    Ph.No.:<input type="tel" name="phone" placeholder="Phone Number" value='.$ph.'><br><br><br>
    <input type="hidden" name="name" value="del">
    <input type="submit" value="Book Room" name="submit" onclick="blur()"/></form>
    </div>';
    if(isset($_GET["submit"]))
    {
        $length = 10;
        $randomString = substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, $length);
       echo '<div id="pop">
    <c><br><br><br>'.$_GET['name1'].'&nbsp,Thanks for Booking Room at HHI<br><br>Your ORDER ID is <c1 style="color:black;">'.$randomString.'</c1></c>
    </div>'; 
    $con = mysqli_connect("localhost","root","root","hhi");
    if(($name==Null)||($email==Null)||($ph==Null))
    {  
        echo "<script type='text/javascript'>alert('Fill in all the fields');</script>";
    }
    else
    {
        if (mysqli_connect_errno()) 
        {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
        }
        if (!$con)
        {
        die('Could not connect: ' . mysql_error());
        }
        $result = mysqli_query($con,"select room_no from room_details where adults='$adults' and child='$children' and Avail='available' and type='suite'");
        
        $room1=mysqli_fetch_array($result);
        $room=$room1['room_no'];
        
        $result1=mysqli_query($con,"Update room_details set Avail='Not Available' where room_no='$room'");
        $result2=mysqli_query($con,"INSERT INTO book (room_no, type, arrival, departure, avail, order_id)
        VALUES ('$room', 'suite', '$arrival', '$departure', 'Not Available', '$randomString')");
        $result3=mysqli_query($con,"INSERT INTO reservation (room_no, name, email, ph_no, arrival, departure, order_id)
        VALUES ('$room', '$name', '$email', '$ph', '$arrival', '$departure', '$randomString')");
        mysqli_close($con);
    }
  
    
    }
    }
    if($type=='nor'){
         echo '<div id="bar22" >&nbsp&nbsp&nbsp&nbspEXECUTIVE Rooms  with King Bed<br>&nbsp&nbsp&nbsp&nbspFrom <c id="normal_id" style="color:#cd592c;">INR&nbsp&nbsp'.$row3.'</c> / night 
    </div>
    <div id="feature" >
    <b>Includes buffet breakfast and internet!<b>
    </div>
    <img id="imgid1" src="images/ex_rooms_1.jpg" alt="no img found" width="900px" height="400px" style="position: relative; top: 0; left: 0;">
    </div>
    <div id="book_fin" >
    <b>GUEST DETAILS<b><br><br><br><form action="book_user.php" method="GET">
    Name*:<input type="text" name="name1" placeholder="Name" value='.$name.' ><br><br><br>
    Email*:<input type="email" name="email" placeholder="Email" value='.$email.' ><br><br><br>
    Ph.No.:<input type="tel" name="phone" placeholder="Phone Number" value='.$ph.'><br><br><br>
    <input type="hidden" name="name" value="del">
    <input type="submit" value="Book Room" name="submit" onclick="blur()"/></form>
    </div>';
    if(isset($_GET["submit"]))
    {
        $length = 10;
        $randomString = substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, $length);
       echo '<div id="pop">
    <c><br><br><br>'.$_GET['name1'].'&nbsp,Thanks for Booking Room at HHI<br><br>Your ORDER ID is <c1 style="color:black;">'.$randomString.'</c1></c>
    </div>'; 
    $con = mysqli_connect("localhost","root","root","hhi");
    if(($name==Null)||($email==Null)||($ph==Null))
    {  
        echo "<script type='text/javascript'>alert('Fill in all the fields');</script>";
    }
    else
    {
        if (mysqli_connect_errno()) 
        {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
        }
        if (!$con)
        {
        die('Could not connect: ' . mysql_error());
        }
        $result = mysqli_query($con,"select room_no from room_details where adults='$adults' and child='$children' and Avail='available' and type='normal'");
        
        $room1=mysqli_fetch_array($result);
        $room=$room1['room_no'];
        
        
        $result1=mysqli_query($con,"Update room_details set Avail='Not Available',arrival='$arrival',departure='$departure' where room_no='$room'");
        $result2=mysqli_query($con,"INSERT INTO book (room_no, type, arrival, departure, avail, order_id)
        VALUES ('$room', 'normal', '$arrival', '$departure', 'Not Available', '$randomString')");
        $result3=mysqli_query($con,"INSERT INTO reservation (room_no, name, email, ph_no, arrival, departure, order_id)
        VALUES ('$room', '$name', '$email', '$ph', '$arrival', '$departure', '$randomString')");
        mysqli_close($con);
    }
    
    }
    }
   ?> 





</div>


<div id="nav12">

</div>
<div id="footer">
HHI Bangalore &nbsp&nbsp|&nbsp&nbsp 686,15th Cross , Outer Ring Road 2nd Phase J.P Nagar &nbsp&nbsp|&nbsp&nbsp Bangalore &nbsp&nbsp|&nbsp&nbsp Karnataka &nbsp&nbsp|&nbsp&nbsp 560078 &nbsp&nbsp|&nbsp&nbsp India &nbsp&nbsp|&nbsp&nbsp +91 80 40761500
</div>



</div>

<script type="text/javascript">
    function details()
    {
        
        document.getElementById("c1").innerHTML = "Room Photos";

    }
    function deluxe(){
        document.getElementById('bar22').innerHTML='&nbsp&nbsp&nbsp&nbspEXECUTIVE DELUXE with King Bed<br>&nbsp&nbsp&nbsp&nbspFrom <c style="color:#cd592c;">INR&nbsp&nbsp<?php echo $row1["price"]; ?></c> / night<input type="button" id="myButton" name="book_now1" value="BOOK NOW " class="bk_nw1" onClick="book_del()"/>';
      document.getElementById("imgid1").src = "images/ex_deluxe_1.jpg";
      setInterval(loadimg,3000);

    
    }
    function suite(){
        document.getElementById('bar22').innerHTML='&nbsp&nbsp&nbsp&nbspEXECUTIVE SUITE with Twin Bed<br>&nbsp&nbsp&nbsp&nbspFrom <c style="color:#cd592c;">INR&nbsp&nbsp<?php echo $row2["price"]; ?></c> / night <input type="button" name="book_now1" value="BOOK NOW " class="bk_nw1" onClick="book_suite()"/>';
      document.getElementById("imgid1").src = "images/ex_suite_1.jpg";
     setInterval(loadimg1,3000);


    }
    function normal(){
        document.getElementById('bar22').innerHTML='&nbsp&nbsp&nbsp&nbspEXECUTIVE ROOMS with King Bed<br>&nbsp&nbsp&nbsp&nbspFrom <c style="color:#cd592c;">INR&nbsp&nbsp<?php echo $row3["price"]; ?></c> / night<input type="button" name="book_now1" value="BOOK NOW " class="bk_nw1" onClick="book_nor()"/>';
      document.getElementById("imgid1").src = "images/ex_rooms_1.jpg";
      setInterval(loadimg2,3000);
    }
    count=3;
    function loadimg(){
      if(count > 0)
      {     
        img1=document.getElementById("imgid1");
        img1.src="images/ex_deluxe_"+count+".jpg";
        count--;
      }
      else
      {
        count=3;
      } 
    }
    function loadimg1(){
      if(count > 0)
      {     
        img1=document.getElementById("imgid1");
        img1.src="images/ex_suite_"+count+".jpg";
        count--;
      }
      else
      {
        count=3;
      } 
    }
    function loadimg1(){
      if(count > 0)
      {     
        img1=document.getElementById("imgid1");
        img1.src="images/ex_rooms_"+count+".jpg";
        count--;
      }
      else
      {
        count=3;
      } 
    }
    
    function book_del(){
        
       location.href='home.html';//or window.location.href='';
    }
    function book_suite(){
        
       location.href='home.html';//or window.location.href='';
    }
    function book_nor(){
        
       location.href='home.html';//or window.location.href='';
    }
    
</script>


</body>




</html>

