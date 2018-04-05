<!DOCTYPE html>
<head>
<title>MAD Quiz </title>
 <style> body { background-image: url("b3.jpg"); background-repeat: no-repeat; } </style> 

<?php
session_start();
$_SESSION['course'] = "MAD";
?>

</head> 
<style>
div#test{ border:blue 1px solid; padding:10px 60px 40px 40px; }
</style>
<script>
var pos = 0, test, test_status, question, choice, choices, chA, chB, chC, correct = 0;
var questions = [
                  [ "-----------  Provides access to the application model and is the cornerstone of all Android applications.", "android.app", "android.os", "Both  A&B", "A" ],
	[ " -------------  Used to render and manipulate text on a device display.?", "android.view", "android.text", "android.widget", "B" ],
	[ " -------- dictate the UI and handle the user interaction to the smart phone screen. ?.", "Services", "Activities", "Content Provider", "B" ],
                  [ "-------  handle background processing associated with an application. ?", "Content Providers", "Broadcast Receiver", "Activities ", "C" ],
	[ "---------	Represents a portion of user interface in an Activity  ?", "Fragment", "Intent", "Layouts", "A" ],
                   [ "--------- UI elements that are drawn on-screen including buttons, lists forms etc. ", "Views", "Layputs", "ManiFest", "A" ],
	[ "When user Android application is compiled  --------  class gets generated", "R-class", "F-class", "Java Class", "A" ],
                  [ " Android system initiates its program with in an Activity starting with a call on ---------  callback method.  ?", "Oncreate()", "Onstart()","Both A&B", "A" ],
	[ "--------- is called when the user starts interacting with the application ?", "onPause()", "onRestart()", "OnResume()", "C" ],
                  [ " A service is bound when an application component binds to it by calling -------------- ", "BindService()", "bindService()", "Bindservice()", "B" ],
	["--------- The system calls this method when all clients have disconnected from a particular interface published by the service.", "onBind()", "onUnbind()", "onRebind()", "B" ],
                     [ "------- is always set to content", "Id", "prefix", "Authority", "B" ],
	[ "----------- are optional part of Intent object and instruct the Android system how to launch an activity, and how to treat it after it's launched  ", "flags", "extras", "Both", "A" ],
                 [ " The basic building block for user interface is a ----------------- ", "viewgroup", "view", "Intent", "B" ],
	["Activity Manager - Controls all aspects of the application lifecycle and activity stack.", "True", "False", "Not Known", "A" ],
                    [ "Resource Manager - Provides access to non-code embedded resources such as strings, color settings and user interface layouts. ", "True", "False", "Not Known", "A" ],
	[ "-----------  is a view group that displays child views in relative positions ", "Relative Layout", "Linear Layout", "Table Layout", "A" ],
	[ "View System - An extensible set of views used to create application user interfaces. ", "False", "True", "Partialy True", "B" ],
["--------------- is a ViewGroup that displays items in a two-dimensional", "List View", "Grid View", " Both A&B", "B" ],
[ "Content Providers - Allows applications to publish and share data with other applications.", "True", "False", "Not Known", "A" ]
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