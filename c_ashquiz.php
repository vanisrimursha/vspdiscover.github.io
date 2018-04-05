<!DOCTYPE html>
<head>
<title>C Sharp Quiz</title>

<?php
session_start();
$_SESSION['course'] = "C#";
?> 

<style> body { background-image: url("b3.jpg"); background-repeat: no-repeat; } </style> </head> 
<style>
div#test{ border:blue 1px solid; padding:10px 60px 40px 40px; }
</style>
<script>
var pos = 0, test, test_status, question, choice, choices, chA, chB, chC, correct = 0;
var questions = [
                  [ " In the year of  ---------, Brian Kernighan and Dennis Ritchie produced the first publicly available description of C# ?", "1988", "1978", "1998", "B" ],
	[ "The size of double in C# is  ?", "8  bytes", "4  bytes", "2  bytes", "A" ],
	[ "The operator pair “?” and “:” is known as", "Bitwise Operator", "Conditional Operator", "Arthmetic Operator", "B" ],
                  [ "operators are used for testing the bits or shifting them left or right?", "Bitwise Operator", "Arthmetic Operator", "Conditional Operator", "A" ],
	[ "-----------  are never accessible directly from a derived class, but can be accessed through calls to the public and protected members of the base class.  ?", "Private", "Public", "Protected", "A" ],
                   [ "----------- statement work with byte, short, char and int primitive data type, it also works with enumerated types and string.?", "switch", "if", "else if", "A" ],
	[ "-------------- operators cannot be used with switch statement?", "Logical", "Bitwise", "Conditional", "A" ],
                  [ "There are  ------ types of loop control statements in C Sharp language.?", "5", "2", "3", "C" ],
	[ "---------Loop is executed for first time irrespective of the condition. After executing while loop for first time, then condition is checked.?", "Do while", "for", "while", "A" ],
                  [ "loop is executed until condition becomes false. ?", "Do while", "for", "while", "B" ],
	[ "---------  is a sequential collection of variables of same data type which can be accessed using an integer as index?", "Array", "structures", "functions", "A" ],
                     [ "---------  are used to group together different types of variables under the same name in C#?", "Pointers", "Structures", "Array", "B" ],
	[ " Members of a union can only be accessed ---------- at a time?", "1", "3", "2", "A" ],
                 [ "-------- is a variable whose value is the address of another variable?", "unions", "structures", "pointers", "C" ],
	[ " There are -------  arithmetic operators that can be used in pointers in C# ?", "5", "4", "3", "B" ],
                    [ "The NULL pointer is a constant with a value of zero defined in several standard libraries..?", "False", "True", "Not known", "B" ],
	[ "there are --------- types of files in C#?", "2", "4", "6", "A" ],
	[ "---------- Open for reading in binary mode ", "wb", "rb", "ab", "B" ],
[ "----------------  Open for append. i.e, Data is added to end of file?", "r", "a", "r+", "B" ],
[ "------------  Open for both reading and appending in binary mode ?", "a+", "ab+", "wb+", "B" ]
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