<!DOCTYPE html>
<head>
<title>Python Quiz</title>
 <style> body { background-image: url("b3.jpg"); background-repeat: no-repeat; } </style> 

<?php
session_start();
$_SESSION['course'] = "Python";
?>

</head> 
<style>
div#test{ border:blue 1px solid; padding:10px 60px 40px 40px; }
</style>
<script>
var pos = 0, test, test_status, question, choice, choices, chA, chB, chC, correct = 0;
var questions = [
                  ["----------- Operator copies a bit to the result if it exists in both operands	(a & b)","Binary AND","Binary OR","Binary XOR","A"],
 ["----------- Returns true if string contains only digits and false otherwise. ","isalnum()","isnum()","isdigit()","C"],
 ["-------  Returns the length of the string ","len(str)","lenstring()","len(string)","C"],
 ["--------- Converts lowercase letters in string to uppercase","upper()","toupper()","Toupper()","A"],
 ["-------- Removes all trailing whitespace of string. ","removestrip()","strremove()","rstrip()","C"],
 ["--------- Returns true if a unicode string contains only decimal characters and false otherwise","decimal()","isdecimal()","ifdecimal()","B"],
 ["---------- statement consists of a boolean expression followed by one or more statements. ","if -else","if","switch","B"],
 ["---------- Terminates the loop statement and transfers execution to the statement immediately following the loop. ","Break","Continue","Pass","A"],
 ["----------- statement in Python is used when a statement is required syntactically but you do not want any command or code to execute. ","Conditional","Pass","Break","B"],
 ["--------  Gives the total length of the tuple. ","tuple(len)","len(tuple)","tuplelen()","B"],
 ["--------- Converts a list into tuple. ","seq(tuple)","tuple(seq)","tuple_seq()","B"],
 ["---------- Gives the total length of the dictionary. This would be equal to the number of items in the dictionary. ","len(dict)","dict(len)","dict_len()","A"],
 ["-------  Returns a shallow copy of dictionary dict ","dict.copy()","copy.dict()","dict(copy)","A"],
 ["---------- Returns list of dictionary dict's keys ","dict.keys()","keys.dict()","key.dict()","A"],
 ["----------- Variable  can be accessed only inside the function","Global","Local","Both A&B","B"],
 [ "True or False ?</br>Python not provides interfaces to all major commercial databases.  ","True","False","Partialy True","B"],
      [ "True or False ?</br>Python can run on a wide variety of hardware platforms and has the same interface on all platforms. ","True","False","Partialy True","A"],
      [ "True or False ?</br>Python has support for an interactive mode which allows interactive testing and debugging of snippets of code. ","True","False","Partialy True","A"],
      [ "True or False ?</br>Python supports GUI applications that can be created and ported to many system calls","True","False","Partialy True","A"],
      [ "True or False ?</br> Python supports Object-Oriented style or technique of programming that encapsulates code within objects.  ","True","False","Partialy True","A"]
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