
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
margin-right:100px;

font-family:Arial, Helvetica, sans-serif;
font-size:13px;
float:right;
font-style: bold;
margin-top: -22px;}

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
   
}

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
<script type="text/javascript">
    function ajax(){
       var xmlhttp= new XMLHttpRequest();
        xmlhttp.onreadystatechange=function(){
        if(xmlhttp.readyState==4 && xmlhttp.status==200)
        {

            var output=xmlhttp.responseText;
            document.getElementById("nav11").innerHTML=output;
        }
        }
        xmlhttp.open("GET","abc.txt",true);
//xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
//xmlhttp.send("id="+id+"&text="+text+"");
        xmlhttp.send();
    }
</script>

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
echo $arrival;



?>


<div id="header">

<img src="images/hhi.jpg" onclick="window.location.href='home.php'" style="position: absolute; top: 17px; left: 120px; width:150px;height:100px "/>

</div>

<div class="form_panel"><br>
    
    <img src="images/news.gif"  />

    
    </div>
</div>
<div class="show_room">
<div id="nav11">

</div>

<div id="section11"><br>
<?php
$con = mysqli_connect("localhost","root","root","hhi");
if (!$con)
{
    die('Could not connect: ' . mysql_error());
}
$result = mysqli_query($con,"select news from news");
while($row=mysqli_fetch_array($result))
{
echo '<div style="background-color:#C4B28F;width:650px;height:100px;margin-left:50px;border-radius: 20px;border:solid 5px black;font-size:20px;color:brown;" ><br>
'.$row['news'].'
</div><br>';
}

?>
    

</div>

<div id="nav12">

</div>
<div id="footer">
HHI Bangalore &nbsp&nbsp|&nbsp&nbsp 686,15th Cross , Outer Ring Road 2nd Phase J.P Nagar &nbsp&nbsp|&nbsp&nbsp Bangalore &nbsp&nbsp|&nbsp&nbsp Karnataka &nbsp&nbsp|&nbsp&nbsp 560078 &nbsp&nbsp|&nbsp&nbsp India &nbsp&nbsp|&nbsp&nbsp +91 80 40761500
</div>



</div>




</body>




</html>

