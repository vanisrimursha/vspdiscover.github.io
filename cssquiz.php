<!DOCTYPE html>
<head>
<title>CSS Quiz</title>
 <style> body { background-image: url("b3.jpg"); background-repeat: no-repeat; } </style> 

<?php
session_start();
$_SESSION['course'] = "CSS";
?>

</head> 
<style>
div#test{ border:blue 1px solid; padding:10px 60px 40px 40px; }
</style>
<script>
var pos = 0, test, test_status, question, choice, choices, chA, chB, chC, correct = 0;
var questions = [
                  [ "-----------  handles the look and feel part of a web page", "CSS ", "HTML", "Both", "A" ],
	[ "A ----------  is an HTML tag at which a style will be applied. This could be any tag like h1 or table ?", "Value ", "Selector", "Property", "B" ],
	[ "In CSS hexadecimal code will be preceded by ------------ sign?.", "@", "#", "&", "B" ],
                  [ " The value of Hexadecimal code #000000 is ?", "Green Color", "White Color", "Black Color", "C" ],
	[ " The  RGB value can be an integer between ------------- and ---------?", "0 to 255", "1 to 255", "0 to 256", "A" ],
                   [ "The ---------  property is used to change the face of a font?", "font-family", "font-size", "font-style", "A" ],
	[ "The ------------  signifies an element on which the user is currently clicking. ", "Hover ", "Active", "Visited", "B" ],
                  [ "The caption-side captions are presented in the ---------  element  ?", "caption", "cap", "captions", "A" ],
	[ "The marker-offset property allows you to specify the distance between the marker and the text relating to that marker.?", "False ", "Partialy True", "True", "C" ],
                  [ "--------------  Outline looks as though it is carved into the page.", "ridge", "groove", "curve", "B" ],
	[ "A property called  ---------------  allows you to hide an element from view. You can use this property along with JavaScript to create very complex menu and very complex webpage layouts", "visibility", "hover", "selector", "A" ],
                     [ "----------  is pivotal to the future of Web documents and will be supported by most browsers.", "Javascript", "CSS ", "HTML", "B" ],
	[ "---------------  is the process of checking something against a rule?", "Verification", "Validation", "Checking", "A" ],
                 [ "Tool to check the validity of (X)HTML document is -------------?", "Verify", "Check", "Validate", "C" ],
	[ "The WDG CSS check validator, lets you validate your css by direct input, file upload, and using   ", "URL", "URI", "Protocol", "B" ],
                    [ "----------   are assigned to properties. ", "Selector", "Value", "Both", "B" ],
	[ "------------ selector  can define style rules based on the id attribute of the elements?", "Id selector", "Child selector", "Class selector", "A" ],
	[ " the universal selector quite simply matches the name of any element type ", "False", "True", "Partialy True", "B" ],
["----------  property is used as shorthand to specify a number of other font properties.", "Style", "Link", " Font", "C" ],
[ "  Using --------- , you do not need to write HTML tag attributes every time ", "Javascript", "CSS", "XML", "B" ]
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