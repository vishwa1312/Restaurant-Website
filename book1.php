
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
height:100px;
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
    margin-top: 300px;
    margin-left: 30px;
    position: absolute;
    font-family: Helvetica, sans-serif;
}

#feature{
    background-color:#cd592c;
    color:white;
    text-align:center;
    padding:5px;
    height: 20px;
    width: 300px;
    margin-top: 430px;
    margin-left: 30px;
    position: absolute;
    z-index: 1;

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

<!--<script type="text/javascript">
    function details()
    {
        
        document.getElementById("c1").innerHTML = "Room Photos";

    }
    function deluxe(){
        document.getElementById('bar22').innerHTML='&nbsp&nbsp&nbsp&nbspEXECUTIVE DELUXE with King Bed<br>&nbsp&nbsp&nbsp&nbspFrom<input type="button" name="book_now1" value="BOOK NOW " class="bk_nw1" onClick="Validation()"/>';
      document.getElementById("imgid1").src = "images/ex_deluxe.jpg";

      
    }
    function suite(){
        document.getElementById('bar22').innerHTML='&nbsp&nbsp&nbsp&nbspEXECUTIVE SUITE with Twin Bed<br>&nbsp&nbsp&nbsp&nbspFrom: <?php echo $row2["price"]; ?> <input type="button" name="book_now1" value="BOOK NOW " class="bk_nw1" onClick="Validation()"/>';
      document.getElementById("imgid1").src = "images/ex_suite.jpg";
     // document.getElementById("bar22").innerHTML+='


    }
    function normal(){
        document.getElementById('bar22').innerHTML='&nbsp&nbsp&nbsp&nbspEXECUTIVE ROOMS with King Bed<br>&nbsp&nbsp&nbsp&nbspFrom<input type="button" name="book_now1" value="BOOK NOW " class="bk_nw1" onClick="Validation()"/>';
      document.getElementById("imgid1").src = "images/ex_rooms.jpg";
    }
    
</script>-->

</head>

<body>


<?php



$arrival=$_GET['arrival_day'];
$departure=$_GET['departure_day'];
$nights=$_GET['night'];
$adults=$_GET['adults'];
$code=$_GET['code'];
$rooms=$_GET['rooms'];
$children=$_GET['children'];




?>


<div id="header">

<img src="images/hhi.jpg"  style="position: absolute; top: 17px; left: 120px; width:150px;height:100px "/>

</div>

<div class="form_panel"><br>
    
    
     <form name="form1" method="post" action="" >
        

        <span class="form_heading" style="margin-top:0px; float:left; margin-left:20px;">ARRIVAL</span> 
        <input type="date" id="date_from" name="arrival_day" value="<?php echo htmlentities($arrival) ?>" style="float:left; margin-top:20px; margin-left:-55px; width:140px; height:22px;">
        
         <span class="form_heading" style="float:left; margin-top:00px; margin-left:20px;">DEPARTURE</span> 
        <input type="date" id="date_to" name="departure_day" value="<?php echo htmlentities($departure) ?>" style="float:left; margin-top:20px; width:140px; height:22px; margin-left:-75px;">
    
        
       
        
       <label class="form_heading" style="float:left; margin-top:0px; margin-left:20px;">ADULTS</label>
        <select name="adults"  style="float:left; margin-top:20px; width:100px; height:29px; margin-left:-50px;">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            
        </select>
      
   
       
       
        
       <label class="form_heading" style="float:left; margin-top:0px; margin-left:20px;">ROOMS</label>
       <select name="rooms" style="float:left; margin-top:20px; width:100px; height:29px; margin-left:-45px;">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
        </select>
        
        <label class="form_heading" style="float:left; margin-top:0px; margin-left:20px;">CHILDREN</label>
         <select name="children"  style="float:left; margin-top:20px; width:100px; height:29px; margin-left:-65px;">
            <option value="0">0</option>
            <option value="1">1</option>
            <option value="2">2</option>
        </select>       


            
            <input type="submit" name="chk_avl1" value="Check Availability " class="bk_nw" onClick="Validation()"/>
    </form>
    </div>
</div>
<div class="show_room">
<div id="nav11">

</div>

<div id="section11"><br>

    <?php


        $count_suite=0;
        $count_deluxe=0;
        $count_normal=0;
        $con = mysqli_connect("localhost","root","root","hhi");
        if (!$con)
        {
            die('Could not connect: ' . mysql_error());
        }

        $result = mysqli_query($con,"select room_no,type from room_details where adults='$adults' and child='$children' and Avail='available'");
        $result1 = mysqli_query($con,"select price from room_details where adults='$adults' and child='$children' and type='deluxe' and Avail='available'");
        $result2 = mysqli_query($con,"select price from room_details where adults='$adults' and child='$children' and type='suite' and Avail='available'");
        $result3 = mysqli_query($con,"select price from room_details where adults='$adults' and child='$children' and type='normal' and Avail='available'");
        $row1=mysqli_fetch_array($result1);
        $row2=mysqli_fetch_array($result2);
        $row3=mysqli_fetch_array($result3);

        while($row=mysqli_fetch_array($result))
        {
            if($row['type']=='suite')
                $count_suite++;
            if($row['type']=='deluxe')
                $count_deluxe++;
            if($row['type']=='normal')
                $count_normal++;  

        
        }

        if($count_deluxe>0)
        {
            echo'<div id="nav22" onClick="deluxe()">
        <img id="imgid11" src="images/ex_deluxe_small.jpg" alt="no img found" style="position: relative; top: 0; left: 0;">
    <b><c style="color:#cd592c;">INR '.$row1['price'].'</c> <b>/ night <br><c1>Executive Deluxe</c1></div><div id="feature1">
    <b>'.$count_deluxe.'&nbsp&nbspRooms Available<b>
    </div>';
        }
        else{
            echo'<div id="nav22">
        <img id="imgid11" src="images/ex_deluxe_small.jpg" alt="no img found" style="position: relative; top: 0; left: 0;opacity: .3;">
    <c style="opacity:.7;">Executive Deluxe</c></div><div id="feature1" style="color:white;background-color:grey;">
    <b>Not Available<b>
    </div>';
        }
        if($count_suite>0)
        {
            echo'
    <div id="section22" onClick="suite()">
        <img id="imgid22" src="images/ex_suite_small.jpg"  alt="no img found" style="position: relative; top: 0; left: 0;">
    <c style="color:#cd592c;">INR '.$row2['price'].'</c> / night<br><br><c1>Executive Suite</c1> </div><div id="feature2">
    <b>'.$count_suite.'&nbsp&nbspRooms Available<b>
    </div>';
        }
        else{
            echo'
    <div id="section22">
        <img id="imgid22" src="images/ex_suite_small.jpg"  alt="no img found" style="position: relative; top: 0; left: 0;opacity:.3;">
    <c1 style="opacity:.7;">Executive Suite</c1></div><div id="feature2" style="color:white;background-color:grey;">
    <b>Not Available<b>
    </div>';
        }
        if($count_normal>0)
        {
           echo' <div id="nav22" onClick="normal()">
        <img id="imgid33" src="images/ex_rooms_small.jpg"  alt="no img found" style="position: relative; top: 0; left: 0;">
    <c style="color:#cd592c;">INR '.$row3['price'].'</c> / night <br><c1>Executive Rooms</c1></div><div id="feature3">
    <b>'.$count_normal.'&nbsp&nbspRooms Available<b>
    </div>';
        }
        else{
            echo' <div id="nav22">
        <img id="imgid33" src="images/ex_rooms_small.jpg"  alt="no img found" style="position: relative; top: 0; left: 0;opacity:.3;">
    <c style="opacity:.5;">Executive Rooms</c></div><div id="feature3" style="color:white;background-color:grey;">
    <b>Not Available<b>
    </div>';
        }
        
        /*if(count_deluxe==0 && count_normal==0 && count_suite==0)
        {
            echo'<div id="bar22"></div>
            <div id="imgid1" width="900px" height="400px" style="position: relative; top: 0; left: 0;background-color:#C4B28F"></div>';
        }*/
    
    if($count_deluxe>0)
    {
        $blue="blue";
        $brown="brown";
        echo '<div id="bar22" >&nbsp&nbsp&nbsp&nbspEXECUTIVE DELUXE  with King Bed<br>&nbsp&nbsp&nbsp&nbspFrom <c style="color:#cd592c;">INR&nbsp&nbsp'.$row1['price'].' </c> / night | <c1 onMouseOver="this.style.color='.$blue.'" onMouseOut="this.style.color='.$brown.'"style="color:brown; font-size:15px;" onClick="details()">Room Details</c1>
      <input type="button" name="book_now1" value="BOOK NOW " class="bk_nw1" onClick="Validation()"/>
    </div>
    <div id="feature" >
    <b>Includes buffet breakfast and internet!<b>
    </div>
    <img id="imgid1" src="images/ex_deluxe.jpg" alt="no img found" width="900px" height="400px" style="position: relative; top: 0; left: 0;">
    </div>';
    }
     elseif($count_suite>0)
    {
        $blue="blue";
        $brown="brown";
        echo '<div id="bar22" >
        &nbsp&nbsp&nbsp&nbspEXECUTIVE SUITE  with Twin Bed<br>&nbsp&nbsp&nbsp&nbspFrom <c id="suite_id" style="color:#cd592c;">INR&nbsp&nbsp'.$row2['price'].' </c> / night | <c1 onMouseOver="this.style.color='.$blue.'" onMouseOut="this.style.color='.$brown.'"style="color:brown; font-size:15px;" onClick="details()">Room Details</c1>
      <input type="submit" name="book_now1" value="BOOK NOW " class="bk_nw1" onClick="Validation()"/>
    </div>
    <div id="feature" >
    <b>Includes buffet breakfast and internet!<b>
    </div>
    <img id="imgid1" src="images/ex_suite.jpg" alt="no img found" width="900px" height="400px" style="position: relative; top: 0; left: 0;">
    </div>';
    }
     elseif($count_normal>0)
    {
        $blue="blue";
        $brown="brown";
        echo '<div id="bar22" >&nbsp&nbsp&nbsp&nbspEXECUTIVE Rooms  with King Bed<br>&nbsp&nbsp&nbsp&nbspFrom <c id="normal_id" style="color:#cd592c;">INR&nbsp&nbsp'.$row3['price'].'</c> / night | <c1 onMouseOver="this.style.color='.$blue.'" onMouseOut="this.style.color='.$brown.'"style="color:brown; font-size:15px;" onClick="details()">Room Details</c1>
      <input type="submit" name="book_now1" value="BOOK NOW " class="bk_nw1" onClick="Validation()"/>
    </div>
    <div id="feature" >
    <b>Includes buffet breakfast and internet!<b>
    </div>
    <img id="imgid1" src="images/ex_rooms.jpg" alt="no img found" width="900px" height="400px" style="position: relative; top: 0; left: 0;">
    </div>';
    }



    ?>




    


    

  <!--<div id="bar22" >
    &nbsp&nbsp&nbsp&nbspEXECUTIVE SUITE  with Twin Bed<br>
     &nbsp&nbsp&nbsp&nbspFrom <c style="color:#cd592c;">INR 3,201.00</c> / night | <c1 onMouseOver="this.style.color='blue'" onMouseOut="this.style.color='brown'"style="color:brown; font-size:15px;" onClick="details()">Room Details</c1>
      <input type="submit" name="book_now1" value="BOOK NOW " class="bk_nw1" onClick="Validation()"/>
    </div>
    <div id="feature" >
    <b>Includes buffet breakfast and internet!<b>
    </div>
    <img id="imgid1" src="images/ex_deluxe.jpg" alt="no img found" width="900px" height="400px" style="position: relative; top: 0; left: 0;">
    </div>-->
    

   




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
        document.getElementById('bar22').innerHTML='&nbsp&nbsp&nbsp&nbspEXECUTIVE DELUXE with King Bed<br>&nbsp&nbsp&nbsp&nbspFrom <c style="color:#cd592c;">INR&nbsp&nbsp<?php echo $row1["price"]; ?></c> / night<input type="button" name="book_now1" value="BOOK NOW " class="bk_nw1" onClick="Validation()"/>';
      document.getElementById("imgid1").src = "images/ex_deluxe.jpg";
    
    }
    function suite(){
        document.getElementById('bar22').innerHTML='&nbsp&nbsp&nbsp&nbspEXECUTIVE SUITE with Twin Bed<br>&nbsp&nbsp&nbsp&nbspFrom <c style="color:#cd592c;">INR&nbsp&nbsp<?php echo $row2["price"]; ?></c> / night <input type="button" name="book_now1" value="BOOK NOW " class="bk_nw1" onClick="Validation()"/>';
      document.getElementById("imgid1").src = "images/ex_suite.jpg";
     // document.getElementById("bar22").innerHTML+='


    }
    function normal(){
        document.getElementById('bar22').innerHTML='&nbsp&nbsp&nbsp&nbspEXECUTIVE ROOMS with King Bed<br>&nbsp&nbsp&nbsp&nbspFrom <c style="color:#cd592c;">INR&nbsp&nbsp<?php echo $row3["price"]; ?></c> / night<input type="button" name="book_now1" value="BOOK NOW " class="bk_nw1" onClick="Validation()"/>';
      document.getElementById("imgid1").src = "images/ex_rooms.jpg";
    }
    
</script>


</body>




</html>

