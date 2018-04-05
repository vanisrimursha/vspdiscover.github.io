<!DOCTYPE html>
<head>
<title>Convex Hull Quiz</title>
 <style> body { background-image: url("b3.jpg"); background-repeat: no-repeat; } </style> 

<?php
session_start();
$_SESSION['course'] = "Convex Hull";
?>

</head> 
<style>
div#test{ border:blue 1px solid; padding:10px 60px 40px 40px; }
</style>
<script>
var pos = 0, test, test_status, question, choice, choices, chA, chB, chC, correct = 0;
var questions = [
                
    ["The graph traversal algorithms construct CHs by identifying some initial vertices of CH and later finding the remaining points and edges by ---------------  it in some order","Rotating","Traversing","Both A&B","B"],
    ["The first, and the conceptually simplest convex hull algorithm is due to R. A. Jarvis , who published it in ----------- ?","1973","1983","1993","A"],
    ["The problem is all about constructing, developing, articulating, circumscribing or encompassing a given set of points in plane by a polygonal capsule called------- ?","Concave Polygon","Convex Polygoon","BothA&B","B"],
    [" a cube, rectangle, regular polygon and the like are ---------- in Nature","Concave","Convex","Semi-Convex","B"],
    ["Any polygon which has hollowness, dent or extended vertices cannot be --------- ","Concave","Convex","BothA&B","B"],
    ["Convexity of a polygon is measurable trait that is amenable to the analysis of its --------------","Volume","Shape","Size","B"],
    ["-------  is crucial in many areas of scientific analysis such as, object classification and identification , biology , geomorphology, and powder particle characterization","Size","Shape","BothA&B","B"],
    ["The exact evolution equations for the mean perimeter and the mean ----------","Length","Height","Area","C"],
    ["Convex hull algorithms are broadly divided into --------  categories","5","4","2","C"],
    ["when a point is abandoned for being reflex the chances are for its neighbor getting changed from non-reflex to --------- ","Rotation","Reflex","Ratio","B"],
    ["Quick Hull Algorithm  is based on divide-and-conquer strategy and very similar to  --------- ","Quick sort","Merge sort","Shell sort","A"],
    [" A recent method reported will precondition --------  data with integer coordinates bounded by a box of size p × q before building a 2D convex hull","3D","2D","Single Dimension","B"],
    ["The metric CHAR is the ratio of the area of the intersection of the -------  convex hulls to the area of their union","Three","Two","Twelve","B"],
    ["A new algorithm to search the border points, called ---------  hull has been presented","Concave","Convex","BothA&B","C"],
    ["Rule extraction has been experimented on ----------  public datasets of Iris and Breast-cancer images, results have showed that the proposed method can improve the accuracy of rule covering and fidelity","Two","Four","six",""],
      [ "True or False ?</br>Convexity of a polygon is measurable trait that is amenable to not  the analysis of its shape","True","False","Partialy True","B"],
      [ "True or False ?</br> A convex curve forms the boundary of a convex set","True","False","Partialy True","A"],
      [ "True or False ?</br> A convex polygon is a simple polygon without any self-intersection in which any line segment between two points on the edges ","True","False","Partialy True","A"],
      [ "True or False ?</br>convexity refers to the property of the polygon that surrounds the given points making a capsule","True","False","Partialy True","A"],
      [ "True or False ?</br>Convex hull algorithms are broadly divided into two categories","True","False","Partialy True","A"]
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