<!DOCTYPE html>
<head>
<title>3D Projection Quiz</title>
 <style> body { background-image: url("b3.jpg"); background-repeat: no-repeat; } </style> </head> 
<style>
div#test{ border:blue 1px solid; padding:10px 60px 40px 40px; }
</style>

<?php
session_start();
$_SESSION['course'] = "3D Projection";
?>

<script>
var pos = 0, test, test_status, question, choice, choices, chA, chB, chC, correct = 0;
var questions = [
                 
    ["In the 2D system, we use --------  coordinates ","One","Four","Two","C"],
    ["---------- discards z-coordinate and parallel lines from each vertex on the object are extended until they intersect the view plane","Orthographic Projection","Parallel Projection","Both A&B","B"],
    [" There are ------------  types of orthographic projections","One","Four","Three","C"],
    [" In --------  projection, we can view the object better than orthographic projection","Oblique","Parallel","Convex","A"],
    ["The Cabinet projection makes -------- ° angle with the projection plane","64.3","63.4","66.6","B"],
    ["The most common axonometric projection is an -----------  projection ","Isometric","Cabinet","Orthographic","A"],
    ["-------- point perspective projection is most difficult to draw","One","Two","Three","C"],
    ["Parallel projection discards ---------- -coordinate and parallel lines from each vertex on the object are extended until they intersect the view plane","Z","X","Y","A"],
    ["The Cavalier projection makes ------° angle with the projection plane","45","55","65","A"],
    ["There are ------- types of perspective projections ","Three","Five","Seven","A"],
    ["Parallel projections are -------  realistic","More","Less","Notknown","B"],
    ["---------- point perspective projection gives better impression of depth","One","Two","Three","B"],
    ["Isometric projection where the projection plane intersects each coordinate axis in the model coordinate system at an ---------  distance","Unequal","Equal","Center","B"],
    ["---------- moves an object into a different position on the screen","Translation","Morphing","Rotation","A"],
    ["A point can be translated in 3D by ------------  translation coordinate $(t_{x,} t_{y,} t_{z})$ to the original coordinate (X, Y, Z) to get the new coordinate ","Multiplaying","Subtracting","Adding","C"],
      [ "True or False ?</br>Orthographic projections that show more than one side of an object are called axonometric orthographic projections","True","False","Partialy True","A"],
      [ "True or False ?</br> the direction of projection is normal to the projection of the plane","True","False","Partialy True","A"],
      [ "True or False ?</br> the distance from the center of projection to project plane is infinite","True","False","Partialy True","A"],
      [ "True or False ?</br>Parallel projections are less realistic","True","False","Partialy True","A"],
      [ "True or False ?</br>In Cabinet projection, lines perpendicular to the viewing surface are projected at ½ their actual length","True","False","Partialy True","A"]
];
function _(x){
	return document.getElementById(x);
}
function renderQuestion(){
	test = _("test");
	if(pos >= questions.length){
		test.innerHTML = "<h2>You got "+correct+" of "+questions.length+" questions correct</h2>";
		_("test_status").innerHTML = "Test Completed";
		test.innerHTML += "<button onclick='certificate()'>Done</button>";
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