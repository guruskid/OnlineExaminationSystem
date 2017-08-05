

<html>
    <body>
        <p>Change font size</p>
        <div id="main_area1">
            <button id="button1" value="larger" type="button" onclick="changeFontSize(this)">Larger</button>
        </div>
        <div id="main_area2">
            <button id="button2" vale="smaller" type="button" onclick="changeFontSize(this)">Smaller</button>
        </div>
        <div>
            <p id="demo">HOW_BIG_OR_SMALL_AM_I</p>
        </div>
        <script>
            function changeFontSize(target) {
                if (target == document.getElementById("button1")) {
                    document.getElementById("demo").style.fontSize = document.getElementById("demo").style.fontSize + "15px";
                } else if (target == document.getElementById("button2")) {
                    document.getElementById("demo").style.fontSize = document.getElementById("demo").style.fontSize + "-15px";
                }
            }
        </script>
    </body>
</html>