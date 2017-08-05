<?php
session_start();
?>
<html>

<head>
    <title>Timer</title>

    <link rel="stylesheet" href="css/bootstrap.min.css">
      <script src="js/respond.js"></script>  
</head>
<body onload="giveNotify()">
   <form name="counter">Time left :<br><input type="text" size="20" name="d2"></form> 
    <!-- <table class="table">
            <tr>
             
              <td align="center">-->
                 <!--<button type="button" class="btn btn-danger" value="Stop Timer"  onclick="giveNotification2();"  />End </button>-->
             <!-- </td>
            </tr>-->
          <!--  <td>

           <button type="button" class="btn btn-primary" value="nest" onclick="giveNotification3();"/>Nest</button>
            </td>
        </table>-->

<script> 
function giveNotify()
{

var milisec = 0
var seconds = localStorage.seconds || 600;
document.counter.d2.value = seconds;

function display() {

    if (milisec <= 0) {
        milisec = 9
        seconds -= 1
    }

    if (seconds <= -1) {
        milisec = 0
        seconds += 1
    } else milisec -= 1

    localStorage.seconds = seconds;
    document.counter.d2.value = seconds + "." + milisec;

    if (seconds > 0 || (seconds == 0 && milisec > 0)) {
        setTimeout(display, 100);
        
    }
	  if(seconds==300)
	  {
	   alert("Only 5 minutes left");
	  }
    if(seconds==0)
    {
         
      window.location.href="result2.php";

    }
   
}

display();
}

 function giveNotification2()
              {
                  window.location.href="result2.php";
                  /*var x;
                  if (confirm("Are you sure you want to end the exam ?") == true) 
                  {
                      x = clearInterval(begin);
                      //window.location.href="result2.php";

                                   
                  } else 
                  {
                      x = "";
                  }*/
                   
              }
</script>

<script src="http://code.jquery.com/jquery-latest.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
</body>
</html> 