<!DOCTYPE html>
<head>
<title>PHP Quiz</title>
 <style> body { background-image: url("b3.jpg"); background-repeat: no-repeat; } </style> 

<?php
session_start();
$_SESSION['course'] = "PHP";
?>

</head> 
<style>
div#test{ border:blue 1px solid; padding:10px 60px 40px 40px; }
</style>
<script>
var pos = 0, test, test_status, question, choice, choices, chA, chB, chC, correct = 0;
var questions = [
               ["In PHP  ---------- statement to execute some code only if a specified condition is true.","if","if-else","switch","A"],
 ["--------- have only two possible values either true or false","NULL","BOOLEAN","String","B"],
 ["------------ are named and indexed collections of other values","Array","String","Number","A"],
 ["---------- Opens a new connection to the MySQL server","mysqli_connect()","Mysqli_connects()","MYSQLI_CONNECTS()","A"],
 ["--------- Returns the filename component of a path.","BASE_NAME()","BASENAME()","basename()","C"],
 ["-------- Changes the file mode.","chmod()","chmode()","chmodes()","A"],
 ["-------- Copies a file.","fcopy()","copy()","copyfile()","B"],
 ["------------  Flushes buffered output to an open file.","flush()","fflush()","flushfile()","B"],
 ["Session variables are set with the PHP ----------  variable: $_SESSION.","Local","Global","BOTH A&B","B"],
 [" The session_start() function must be the very first thing in your document. Before any -------- tags.","HTML","PHP","PERL","A"],
 ["A PHP --------------  is a block of statements that can be used repeatedly in a program.","Conditional Statement","Functions","Looping Statements","B"],
 ["A user defined function declaration starts with the word  ----------- in PHP","PHP","FUNCTION","function","C"],
 ["PHP A function name can start with a ---------- ","Letters","Number","Special Character","A"],
 ["PHP function Arguments are specified after the function name, inside the ------------ ","Braces","Paranthesis","Coma","B"],
 ["---------- PHP Operators  Provides the remainder after division","/","%","*","B"],
 [ "True or False ?</br>mysqli_commit()Turns on or off auto-committing database modifications  ","True","False","Partialy True","B"],
      [ "True or False ?</br>mysqli_affected_rows()	Returns the number of affected rows in the previous MySQL operation ","True","False","Partialy True","A"],
      [ "True or False ?</br>The PDO MYSQL driver is one of several available PDO drivers. Other PDO drivers available include those for the Firebird and PostgreSQL database servers. ","True","False","Partialy True","A"],
      [ "True or False ?</br>PDO is implemented using the PHP extension framework, its source code is located in the directory ext/pdo.","True","False","Partialy True","A"],
      [ "True or False ?</br>When writing PHP applications that need to connect to the MySQL server","True","False","Partialy True","A"]
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