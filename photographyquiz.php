<!DOCTYPE html>
<head>
<title>Photography Quiz</title>
 <style> body { background-image: url("b3.jpg"); background-repeat: no-repeat; } </style> 

<?php
session_start();
$_SESSION['course'] = "Photography";
?>

</head> 
<style>
div#test{ border:blue 1px solid; padding:10px 60px 40px 40px; }
</style>
<script>
var pos = 0, test, test_status, question, choice, choices, chA, chB, chC, correct = 0;
var questions = [
["Photographic film is a ------------------- of transparent plastic film base coated on one side with a gelatin emulsioncontaining microscopically small light-sensitive silver halide crystals","Strip","Sheet","A or B", "C" ],
["The sizes and other characteristics of the crystals determine the sensitivity, -------------------------------- of the film.","Contrast","Resolution","Both A and B", "C"],
["Unmodified --------------- halide crystals are sensitive only to the blue part of the visible spectrum, producing unnatural-looking renditions of some colored subjects","Silver","Gold ","Platinum","A"],
[" First orthochromatic sensitive to -------------------- and finally panchromatic sensitive to all visible colors films were developed.","Black and Blue","Blue and Green","Black and Green","B"],
[" The calotype process produced paper---------------.","Positives","Negatives","Both A and B","B"],
["Consumer print films are usually in the ISO ----------- to ISO 800 range","100","200","300","A"],
["The first flexible photographic roll film was sold by George Eastman in ----------.","1885","1995","1875","A"],
["Hurter and Driffield began pioneering work on the light sensitivity of photographic emulsions in -------------.","1874","1875","1876","C"],
["The first practical and commercially successful color film was the Lumière Autochrome, a ------------ plate product introduced in 1907.","Metal","Gold","Glass","C"],
["A film with a particular ------------ rating can be push-processed","WHO","ISRO","ISO","C"],
["Color film in the modern sense of a subtractive color product with a ----------------------- emulsion was born with the introduction of Kodachrome for home movies.","Semi layered","Multi layered","Layered","B"],
["The ------------------ used were different for the different film types.","Shutter","Filter","Pixels","B"],
["Panchromatic film renders all colors in shades of ------------------- approximately matching their subjective brightness.","Gray","Blue","Green","A"],
["Color processing is ------------- complex and temperature-sensitive than black-and-white processing","Less","More","Semi","B"],
["Color ----------------- film produces positive transparencies, also known as diapositives","Forward","Reversal","None","B"],
["The plot of the density of the film image against the log of the exposure is known as an ------------- curve.","H&D","D&H","None","A"],
["If parts of the image are exposed heavily enough to approach the ----------------- density possible for a print film","Low","Minimum","Maximum","C"],
["Consumer print films are usually in the ISO 100 to ISO --------- range","200","800","400","B"],
["A film with a particular ------------ rating can be push-processed","WHO","ISRO","ISO","C"],
[" The ---------- sensitive layer is on top, followed by a yellow filter layer to stop any remaining blue light from affecting the layers below.","Blue","Black","Brown","A"], 	
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