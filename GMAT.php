<!DOCTYPE html>
<html>
<head>
<title>GMAT</title>

<?php
session_start();
$_SESSION['course'] = "GMAT Preparation";
?>

<style>
* {box-sizing: border-box}
body {font-family: "Lato", sans-serif;}

/* Style the tab */
.tab {
    float: left;
    border: 1px solid #ccc;
    background-color: #f1f1f1;
    width: 15%;
    height: none;
}

/* Style the buttons inside the tab */
.tab button {
    display: block;
    background-color: inherit;
    color: black;
    padding: 22px 16px;
    width: 100%;
    border: none;
    outline: none;
    text-align: left;
    cursor: pointer;
    transition: 0.3s;
    font-size: 17px;
}

/* Change background color of buttons on hover */
.tab button:hover {
    background-color: #ddd;
}

/* Create an active/current "tab button" class */
.tab button.active {
    background-color: #ccc;
}

/* Style the tab content */
.tabcontent {
    float: left;
    padding: 0px 12px;
    border: 1px solid #ccc;
    width: 80%;
    border-left: none;
    height: none;
}
</style>
</head>
<body>
<div style="width: 100%; max-width: 1920px;  min-width: 480px; height: auto; overflow: hidden;">

<div class="tab">
  <button class="tablinks" onclick="openCity(event, 'c1')" id="defaultOpen">GMAT</button>
  

</div>

<div id="c1" class="tabcontent">
<a href="MANHATTAN GMAT Fractions Decimals and Percents GMAT Strategy Guide.pdf">Book1</a></br></br>
<a href="MANHATTAN GMAT Geometry GMAT Strategy Guide2.pdf">Book2</a></br></br>
<a href="MANHATTAN GMAT Geometry GMAT Strategy Guide3.pdf">Book3</a></br></br>
<a href="MANHATTAN GMAT Geometry GMAT Strategy Guide4.pdf">Book4</a></br></br>
<input type="button" onclick="document.location.href='certificate.php'" class="button" value="View Certificate"/>
</div>
<div style="width: 100%; max-width: 1920px;  min-width: 480px; height: auto; overflow: hidden;">

<script>
function openCity(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>
     
</body>
</html> 
