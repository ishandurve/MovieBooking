<html>
<head><title>Hello</title>
<style> 
    img{ height: 100%; width: 100%;}
    
    .choose{ border: 2px black solid; background-color: chartreuse;}
    </style>    
    
    
    
</head>
<body>
<div id = "myDiv" style="display:none"><img id = "myImage" src = "loading.gif"></div><br>

<script type = "text/javascript">

function show() {
    document.getElementById("myDiv").style.display="block";
    setTimeout("hide()", 3000);  // 5 seconds
}

function hide() {
    document.getElementById("myDiv").style.display="none";
}
show();
</script>
    
<div class="choose">
<?php

$name = $_GET['color'];

if (isset($_GET['color'])) {
    echo "You chose the following seats(s): <br>";

    foreach ($name as $color){
        echo $color ."<br />";
    }
} else {
    echo "You did not choose a seat.";
}

?>   
    </div>
    
    <a href="https://www.google.com"> Proceed to Payment</a>
    </body>
</html>