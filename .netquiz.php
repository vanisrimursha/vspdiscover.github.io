<!DOCTYPE html>
<head>
<title>ASP.Net Quiz</title>
 <style> body { background-image: url("b3.jpg"); background-repeat: no-repeat; } </style> </head> 
<style>
div#test{ border:blue 1px solid; padding:10px 60px 40px 40px; }
</style>

<?php
session_start();
$_SESSION['course'] = "ASP.Net";
?>

<script>
var pos = 0, test, test_status, question, choice, choices, chA, chB, chC, correct = 0;
var questions = [
                  [ "The ASP.NET application codes can not  be written in ?", "C#", "jscript", "Java", "C" ],
	[ ".Net Framework Class Library contains a huge library of reusable types. classes, interfaces, structures, and enumerated values, which are collectively called ?", "Types", "State", "Keys", "A" ],
	[ "The default event for the Page object is ", "Unload", "Load", "Control", "B" ],
                  [ "Server object provided by ?", "ASP.net", "Java", "C#", "A" ],
	[ "----------- Returns a String that represents the current Object?", "ToString", "ByString", "FromString", "A" ],
                   [ "----------- Changes an ordinary string into a string with legal HTML characters.?", "HTML Encode", "HTML Decode", "HTML Convert", "A" ],
	[ "----------  is an instance of the System?", "Send Object", "Request Object", "To request", "B" ],
                  [ "-----------  Gets or sets information about the requesting client's browser capabilities.?", "Cookies", "Form", "Browser", "C" ],
	[ "--------- controls implement special features?", "Rich Control", "Navigation Control", "Master pages", "A" ],
                  [ "---------controls  loses focus ?", "Onfocus", "Onblur", "Onclick", "B" ],
	[ "The collection of ListItem objects that represents the items in the control?", "Items", "Column", "Row", "A" ],
                     [ "Removes all the items of the collection.?", "Remove", "Delete", "Clear", "C" ],
	[ " The program execution at page level or application level is?", "Tracing", "Debugging", "Error Handling", "A" ],
                 [ "----------- enables or disables custom error pages?", "On/Off", "Redirect", "Move", "C" ],
	[ " ------------- specifies the runtime to run a specific line of code and then stop execution?", "Move", "Render", "Onclick", "B" ],
                    [ "----------- Displays all variables in the current context.?", "Immidiate", "Locals", "Debugging", "B" ],
	[ "The .asmx file has simply a WebService directive on it?", "True", "False", "Cannot Determind", "A" ],
	[ "-------------- is the situation when the thread is ready to execute and waiting CPU cycle.?", "UnStarted state", "Ready State", "NotRunnable", "B" ],
[ "----------------  is the situation when the thread has completed execution or has been aborted.?", "UnStarted", "Dead State", "Ready State", "B" ],
[ "------------ Gets or sets a value indicating the scheduling priority of a thread.?", "Abort", "Priority", "Name", "B" ]
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