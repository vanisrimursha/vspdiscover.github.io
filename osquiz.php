<!DOCTYPE html>
<head>
<title>OS Quiz</title>
 <style> body { background-image: url("b3.jpg"); background-repeat: no-repeat; } </style> 

<?php
session_start();
$_SESSION['course'] = "Operating System";
?>

</head> 
<style>
div#test{ border:blue 1px solid; padding:10px 60px 40px 40px; }
</style>
<script>
var pos = 0, test, test_status, question, choice, choices, chA, chB, chC, correct = 0;
var questions = [
                  [ "--------------  is a software which performs all the basic tasks ?", "Opertainhg System", "Hardware", "Software", "C" ],
	[ "---------------  operating system do not interact with the computer directly. ?", "Batch", "Distributed ", "Time Sharing", "A" ],
	[ "-----------  is a technique which enables many people, located at various terminals, to use a particular computer system at the same time. ", "Distributed System", "Time Sharing", "Batch", "B" ],
                  [ "------------ systems use multiple central processors to serve multiple real-time applications and multiple users. ?", "Distributed", "Network System", "Batch", "A" ],
	[ "----------- system is defined as a data processing system in which the time interval required to process and respond ?", "Real ", "Timesharing", "Distributed", "A" ],
                   [ "----------- represents a collection of related information..?", "File", "CPU", "Program", "A" ],
	[ "An ------------  provides services to both the users and to the programs.?", "CPU", "OS", "Hardware", "B" ],
                  [ "True or False ?</br> Multitasking is when multiple jobs are executed by the CPU simultaneously by switching between them.  ", "Partialy True", "False", "True", "C" ],
	[ "True or False ?</br>A time-shared operating system uses the concept of CPU scheduling and multiprogramming to provide each user with a small portion of a time-shared CPU. ", "True", "False", "Partialy True", "A" ],
                  [ "True or False ?</br>The operating system not keeps several jobs in memory at a time", "True", "False", "Partialy True", "B" ],
	[ "True or False ?</br>The Operating system must guarantee response to events within fixed periods of time to ensure correct performance. ", "True", "False", "Partialy True", "A" ],
                     [ "True or False ?</br>Spooling is an acronym for simultaneous peripheral operations on line.", "True", "False", "Partialy True", "A" ],
	["---------  is a non-preemptive, pre-emptive scheduling algorithm.?","FCFS","SJN","Priority","A"],
                      ["------------- is the preemptive version of the SJN algorithm. ","FCFS","Priority","SRT","C"],
                  ["The variable names, constants, and instruction labels are the basic elements of the ------------- ?","Physical address","Relative address","Symbolic address","C"],
                    ["Main memory usually has -------  partitions","4","2","6","B"],
                  ["----------- reduces external fragmentation, but still suffer from internal fragmentation. ","Addressing","Scheduling","Paging","C"],
                 ["---------------  is a memory management technique in which each job is divided into several segments of different sizes","Paging","Segmentation","Addressing","B"],
                  ["--------------  access file organization provides, accessing the records directly. ","Random","Direct","Both A&B","C"],
                      ["--------------- is a process which can choked down a system performance by using system resources to extreme levels","Virus","Worm","Non of these","B"]
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
		pos = 0;
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