<!DOCTYPE html>
<head>
<title>Crowd Simulation Quiz</title>
 <style> body { background-image: url("b3.jpg"); background-repeat: no-repeat; } </style> 

<?php
session_start();
$_SESSION['course'] = "Crowd Simulation";
?>

</head> 
<style>
div#test{ border:blue 1px solid; padding:10px 60px 40px 40px; }
</style>
<script>
var pos = 0, test, test_status, question, choice, choices, chA, chB, chC, correct = 0;
var questions = [
                
    ["------------ New Years Eve celebrations used Crowd Dynamics' services","London's","USA's","India's","A"],
    ["----------------is the world leading experts on crowd movements","Computer Graphics","Crowd Dynamica","BothA&B","B"],
    ["--------- is an algorithm residing under machine learning's sub field known as reinforcement learning","H-learning","F-learning","Q-learning","C"],
    ["Crowd simulation is the process of simulating the movement (or dynamics) of a ------------- number of entities or characters","Small","Big","Avarage","A"],
    ["In games and applications intended to replicate real-life human crowd movement, like in ----------- simulations","Evacuation","Evaluation","Both A&B","A"],
    ["simulated agents may need to ----------- towards a goal","Positive","Negative","Neutral","B"],
    ["---------- agents interacting with smart objects, and more complex physical and social dynamics","Morphing","Crowd","Graphics","B"],
    ["Crowd Dynamics is supporting on some of the --------------- and most prestigious projects","Smallest","Not Known","Largest","C"],
    ["--------- is a good approach to take if agents with different roles are required, such as a main character and several background characters","Crowd Dynamics","Crowd Simullation","Crowd AI","C"],
    ["--------- -Learning is an algorithm residing under machine learning's sub field known as reinforcement learning","Q","W","G","A"],
    ["--------------  can also refer to simulations based on crowd psychology","crowd Simullation","Crowd AI","Crowd Dynamics","A"],
    ["Crowds have been studied as a scientific interest since the end of the ---------  Century","19th","20th","21st","A"],
    ["LOD stands for ?","Level of detail","Level of details","Levels of details","A"],
    ["In crowd AI initially the first -----------  levels of his needs are met, and the student is acting according to his need for self-actualization","Four","Five","Fifteen","A"],
    ["There are a -------  variety of machine learning algorithms that can be applied to crowd simulations","Thousand","Tenthounds","Wide","C"],
      [ "True or False ?</br>Crowd simulation is the process of simulating the movement (or dynamics) of a small number of entities or characters","True","False","Partialy True","B"],
      [ "True or False ?</br>In games and applications intended to replicate real-life human crowd movement, like in evacuation simulations where used","True","False","Partialy True","A"],
      [ "True or False ?</br>simulated agents may need to navigate towards a goal, avoid collisions, and exhibit other human-like behavior","True","False","Partialy True","A"],
      [ "True or False ?</br>Crowd agents interacting with smart objects, and more complex physical and social dynamics","True","False","Partialy True","A"],
      [ "True or False ?</br>Crowd Dynamics is supporting on some of the largest and most prestigious projects","True","False","Partialy True","A"]
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