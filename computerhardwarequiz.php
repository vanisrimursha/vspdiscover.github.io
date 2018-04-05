<!DOCTYPE html>
<head>
<title>Computer Hardware Quiz</title>
 <style> body { background-image: url("b3.jpg"); background-repeat: no-repeat; } </style> 
<?php
session_start();
$_SESSION['course'] = "ASP.Net";
?>
</head> 
<style>
div#test{ border:blue 1px solid; padding:10px 60px 40px 40px; }
</style>
<script>
var pos = 0, test, test_status, question, choice, choices, chA, chB, chC, correct = 0;
var questions = [
                  [ "----------------  is very large in size and is an expensive computer capable of supporting hundreds or even thousands of users simultaneously. ?", "Mainframe", "Supercomputer", "Workstation", "A" ],
	[ "---------------- are one of the fastest computers currently available?", "Mainframe ", "Supercomputer", "Workstation", "B" ],
	[ "------------- unit contains devices with the help of which we enter data into the computer", "Input", "CPU", "Output", "A" ],
                  [ "------------  unit controls the operations of all parts of the computer but does not carry out any actual data processing operations. ?", "Input", "Memory", "Storage", "C" ],
	[ "------------- performs all types of data processing operations.?", "CPU", "MotherBoard", "Boots System", "A" ],
                   [ " ------------ are the main output device of a computer. ?", "Monitors", "CRT", "Printers", "A" ],
	[ "----------------  memory is a very high speed semiconductor memory which can speed up the CPU?", "Primary ", "Cache", "Secondary", "B" ],
                  [ "-----------------  memory holds only those data and instructions on which the computer is currently working.", "Primary ", "Cache", "Secondary", "A" ],
	[ "This type of memory is also known as external memory or non-volatile.?", "Primary ", "Cache", "Secondary", "C" ],
                  [ "------------- is the internal memory of the CPU for storing data ?", "ROM", "RAM", "None of These", "B" ],
	[ "The memory from which we can only read but cannot write on it  ----------- ?", "ROM", "RAM", "Both A&B", "A" ],
                     [ "--------------  is read-only memory that can be modified only once by a user ?", "EPROM", "PROM ", "MROM", "B" ],
	[ " EPROM can be erased by exposing it to ultra-violet light for a duration of up to ----------  minutes. ?", "40", "50", "60", "A" ],
                 [ "EEPROM is programmed and erased electrically.?", "Not known", "False", "Trure", "C" ],
	[ " Non-volatile in nature is ------------- ?", "RAM", "ROM", "External Chip", "B" ],
                    [ "------------ is mounted inside the case and is securely attached via small screws through pre-drilled holes. ?", "Ports", "MotherBoard", "CPU", "B" ],
	[ "There is a peripheral card slot in front of the motherboard using which video cards, sound cards, and other expansion cards can be connected to the motherboard.?", "True", "False", "Partialy true", "A" ],
	[ "On the ------- side, motherboards carry a number of ports to connect the monitor, printer, mouse, keyboard, speaker, and network cables. ?", "Right", "Left", "Center", "B" ],
["External devices are connected to a computer using -------------- ?", "Cables", "Ports", "Both A&B", "C" ],
[ "-------------   connect the microphone and speakers to the sound card of the computer.?", "MODEM", "Sockets", "USB", "B" ]
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