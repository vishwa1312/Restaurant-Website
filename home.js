count=5;
    function loadimg()
    {
      if(count > 0)
      {     
        img=document.getElementById("imgid");
        //img1=document.getElementById("imgid1");
        img.src="images/"+count+".jpg";
        //img1.src="images/2_"+count+".jpg";
        count--;
      }
      else
      {
        count=5;
      } 
      
    }
    function loadimg1()
    {
      if(count > 0)
      {     
        img1=document.getElementById("imgid1");
        img1.src="images/2_"+count+".jpg";
        count--;
      }
      else
      {
        count=5;
      } 
      
    }
    function loadimg_acc()
    {
      if(count > 0)
      {     
        img1=document.getElementById("imgid1");
        img1.src="images/acc_"+count+".jpg";
        count--;
      }
      else
      {
        count=5;
      } 
      
    }

    function foo()
    {
       if( localStorage.hits ){
       localStorage.hits = Number(localStorage.hits) +1;
    }else{
       localStorage.hits = 1;
    }
    alert("View Count :" + localStorage.hits );
    	 		
    	
      setInterval(loadimg1,4000);
      setInterval(loadimg,3000);
      
    }
    function acc_foo()
    {	
    	
      setInterval(loadimg,3000);
      setInterval(loadimg_acc,3000);
    }
    

    function disply()
    {
    	
      var div = document.getElementById('form_form');
    	if (div.style.display !== 'none') {
        	div.style.display = 'none';
    	}
    	else {
        div.style.display = 'block';
    	}
 		
 		//document.getElementById('tool_hide').style.display='block';
    }
    function Update_night()
	{
	//alert('Hello');
	      var d1 = document.form1.arrival_day.value;

            var d2 = document.form1.departure_day.value;

            var one_day=1000*60*60*24;

            var x = d1.split("-");
            var y = d2.split("-");

            var date1=new Date(x);

            var date2=new Date(y);

            var dDays = (date2.getTime()-date1.getTime())/one_day;
            

            document.form1.night.value = Math.ceil(dDays);
		
		setInterval(function(){Update_night()},1000);
}
function cancel(){
  document.getElementById('login').style.display='block';
  document.getElementById('nav').style.opacity='.2';
  document.getElementById('form_form').style.opacity='.2';
  document.getElementById('introduction_content').style.opacity='.2';
  
}
function canvas(){
  var canvas = document.getElementById('myCanvas');
      var context = canvas.getContext('2d');

      context.beginPath();
      context.rect(188, 50, 200, 100);
      context.fillStyle = '#C4B28F';
      context.fill();
      context.lineWidth = 7;
      context.strokeStyle = 'black';
      context.stroke();
}

/*<html>
<head>
<script type="text/javascript">
<!--
function WriteCookie()
{
   if( document.myform.customer.value == "" ){
      alert("Enter some value!");
      return;
   }

   cookievalue= escape(document.myform.customer.value) + ";";
   document.cookie="name=" + cookievalue;
   alert("Setting Cookies : " + "name=" + cookievalue );
}

function ReadCookie()
{
   var allcookies = document.cookie;
   alert("All Cookies : " + allcookies );

   // Get all the cookies pairs in an array
   cookiearray  = allcookies.split(';');

   // Now take key value pair out of this array
   for(var i=0; i<cookiearray.length; i++){
      name = cookiearray[i].split('=')[0];
      value = cookiearray[i].split('=')[1];
      alert("Key is : " + name + " and Value is : " + value);
   }
}*/

