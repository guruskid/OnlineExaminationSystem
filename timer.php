<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
 "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <title>Timer</title>
              <link rel="stylesheet" href="css/bootstrap.min.css">
              <script src="js/respond.js"></script>
              <script type="text/javascript">


          var timeLeft = 0;
          var begin
          
          function startTimer()
          {  
               //get input hours, minutes, seconds
               var hours   =  01;//parseInt(document.getElementById("txtHours").value);
               var minutes = 00;//parseInt(document.getElementById("txtMinutes").value);
               var seconds = 00;//parseInt(document.getElementById("txtSeconds").value);
               
               //calculate time left in seconds
               timeLeft = (hours * 3600) + (minutes * 60) + seconds;
               
                  //start count down timer
                  begin=setInterval("countDown()",1000);
          }
          
          function countDown() 
          {
               var hoursLeft   = 0;
               var minutesLeft = 0;
               var secondsLeft = 0;
               var remainder   = 0;
               
               timeLeft = timeLeft-1;
                  
                if(timeLeft >= 0)
                {
                    //break down time left into hours, minutes, seconds
                    hoursLeft = Math.floor(timeLeft/3600);
                    remainder = timeLeft%3600;
                    
                    minutesLeft = Math.floor(remainder/60);
                    remainder   = remainder%60;
                    
                    secondsLeft = remainder;
                    document.getElementById('cellHours').innerHTML = hoursLeft;
                    document.getElementById('cellMinutes').innerHTML = minutesLeft;
                    document.getElementById('cellSeconds').innerHTML = secondsLeft;    


                } 
                else 
                {
                    clearInterval(begin);
                }      

                var milisec = 0
var seconds = localStorage.seconds || 30;
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
}

display(); 
          }


      </script>

</head>

<body>

       <!-- Table to output time left -->
        <table name="tblTimer" id="tblTimer" class="table table-bordered" >
         <caption style="font-weight: bold" align="center">&nbsp &nbsp &nbsp &nbspTime Left</caption>
                <th align="center"> HH</th>
                <th align="center"> MM</th>
                <th align="center"> SS</th>
         <tr>
                <td class="col-md-1" id="cellHours" align="center">0</td>        
                <td class="col-md-1" id="cellMinutes" align="center">0</td>
                <td class="col-md-1" id="cellSeconds" align="center">0</td>   
            </tr>
        </table>
        <!-- Display control buttons -->
        <table class="table table-bordered">
            <tr>
             <td>
                 <button type="button" class="btn btn-success"value="Start Timer" onclick="giveNotification1();" /> Start</button>
              </td>
              <td align="center">
                 <button type="button" class="btn btn-danger" value="Stop Timer"  onclick="giveNotification2();"  />End </button>
              </td>
            </tr>
          <!--  <td>

           <button type="button" class="btn btn-primary" value="nest" onclick="giveNotification3();"/>Nest</button>
            </td>-->
        </table>
        
        <script>
               function giveNotification2()
              {
                  var x;
                  if (confirm("Are you sure you want to end the exam ?") == true) 
                  {
                      x = clearInterval(begin);
                      window.location.href="FHP4.php";
                                   
                  } else 
                  {
                      x = "";
                  }
                   
              }

               function giveNotification1()
              {
                  var y;
                  if (confirm("Are you sure you want to start the exam ?") == true) 
                  {
                      y = startTimer();
                      
                  } else 
                  {
                      y = "";
                    //window.location.href="FHP4.php";
                  }
                   
              }
             // function giveNotification3()
              //{
              //  $("#myfm").show();
             // }
        </script>
        <!--javascript-->

        <script src="http://code.jquery.com/jquery-latest.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
</body>
</html>