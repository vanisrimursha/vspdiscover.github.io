<!DOCTYPE html>
<head>
<title> Computer Graphics</title>
 <style> body { background-image: url("b3.jpg"); background-repeat: no-repeat; } </style> 

<?php
session_start();
$_SESSION['course'] = "Computer Graphics";
?>

</head> 
<style>
div#test{ border:blue 1px solid; padding:10px 60px 40px 40px; }
</style>
<script>
var pos = 0, test, test_status, question, choice, choices, chA, chB, chC, correct = 0;
var questions = [
                  [ "----------------- emits a beam of electrons ?", "Electron guns", "Deflection plates", "Screen", "A" ],
	[ "-------------- is also called vector display, stroke-writing display, or calligraphic display. ?", "Raster scan ", "Random scan", "Color CRT", "B" ],
	[ "We cannot display a continuous arc on the --------------- ", "Raster Scan", "Random Scan", "CRT", "A" ],
                  [ "the beam hits the screen, the phosphor emits a small spot of---------------- ?", "Beam", "None", "Light", "C" ],
	[ "Picture definition is stored in memory area called -------------  ?", "Refresh Buffer", "Frame Buffer", "Pixel", "A" ],
                   [ "Digital Differential Analyzer (DDA) algorithm is the simple ---------------  generation algorithm ?", "Line", "Circle", "Triangle", "A" ],
	[ "Bresenham’s Algorithm cannot display a continuous arc on -------------- ?", "Raster Display", "Random Display", "Both A & B", "A" ],
                  [ "-----------  clipping  will cut the portion of line which is outside of window and keep only the portion that is inside the window.", "Point ", "Line", "Circle", "B" ],
	[ "If both endpoints have a region code 0000 then ----------- ?", "Accept The Line", "Reject The Line", "Partialy Accepted", "A" ],
                  [ "A -----------  is a collection of pixels that describes an image ?", "Scanning", "Bit Map", "Both A& B", "B" ],
	[ "We cannot resize the bitmap image?", "True", "False", "Not Known", "A" ],
                     [ "You can translate a point in 2D by ----------- translation coordinate (tx, ty) to the original coordinate (X, Y) to get the new coordinate (X’, Y’) ?", "Multiplaying", "Adding ", "Dividing", "B" ],
	[ " You can translate a point in 3D by -------------  translation coordinate (tx, ty) to the original coordinate (X, Y) to get the new coordinate (X’, Y’).?", "Multiplaying", "Adding", "Dividing", "A" ],
                 [ "To change the size of an object, ---------------  transformation is used.?", "Traslation", "Rotation", "Scaling", "C" ],
	[ " ----------------  is the mirror image of original object ?", "Shearing", "Reflection", "Scaling", "B" ],
                    [ "A transformation that slants the shape of an object is called the shear transformation?", "False", "True", "Not known", "B" ],
	[ "In 3D scaling operation, -------- coordinates are used?", "3", "4", "6", "A" ],
	[ "Basically there are -------- animation technique?", "Ten", "Six", "Four", "B" ],
["In ----------------  animation, an autonomous character determines its own actions?", "KeyFramming", "Behavioral", "Procedural", "B" ],
[ "----------------- are important frames during which an object changes its size?", "Procedural", "Keyframming", "Behavioral", "B" ]
];
function _(x){
	return document.getElementById(x);
}
function renderQuestion(){
	test = _("test");
	if(pos >= questions.length){
		test.innerHTML = "<h2>You got "+correct+" of "+questions.length+" questions correct</h2>";
		_("test_status").innerHTML = "Test Completed";
		test.innerHTML += "<button onclick='certificate()'>View Certificate</button>";
		pos = 0;Scaling
		correct = 0;
		return false;
	}
	_("test_status").innerHTML = "Question "+(pos+1)+" of "+questions.length;
	question = questions[pos][0];
	chA = questions[pos][1];
	chB = questions[pos][2];
	chC = questions[pos][3];
	test.innerHTML = "<h3>"+question+"</h3>";
	test.innerHTML += "<input type='radio' name='choices' value='A'> "+chA+"<br>";
	test.innerHTML += "<input type='radio' name='choices' value='B'> "+chB+"<br>";
	test.innerHTML += "<input type='radio' name='choices' value='C'> "+chC+"<br><br>";
	test.innerHTML += "<button onclick='checkAnswer()'>NEXT</button>";


}

function checkAnswer(){
	choices = document.getElementsByName("choices");
	for(var i=0; i<choices.length; i++){
		if(choices[i].checked){
			choice = choices[i].value;
		}
	}
	if(choice == questions[pos][4]){
		correct++;
	}
	pos++;
	renderQuestion();
}

function certificate()
{
window.open("certificate.php");}

window.addEventListener("load", renderQuestion, false);
</script>


</head>

<h2 id="test_status"></h2>
<div id="test"></div>
</body>
</html>