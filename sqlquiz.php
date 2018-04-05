<!DOCTYPE html>
<head>
<title>SQL Quiz</title>
 <style> body { background-image: url("b3.jpg"); background-repeat: no-repeat; } </style> 

<?php
session_start();
$_SESSION['course'] = "SQL";
?>

</head> 
<style>
div#test{ border:blue 1px solid; padding:10px 60px 40px 40px; }
</style>
<script>
var pos = 0, test, test_status, question, choice, choices, chA, chB, chC, correct = 0;
var questions = [
                  [ "----------------  is a language to operate databases ?","SQL","PHP","JAVA","A"],

      [ "In SQL char datatype Maximum length of ----------- characters ?","7,000","8,000","5,000","B"],
      [ "---- Checks if the values of two operands are equal or not, if yes then condition becomes true.","==","%","=","C"],
      [ "--------- operator is used to compare a value to all values in another value set.","AND","ALL","ANY","B"],
      [ "---------  operator is used to compare a value to any applicable value in the list as per the condition.","ANY","IN","LIKE","A"],
      [ "--------- expressions are used to perform any mathematical operation in any query","BOOLEAN","DATE","NUMERIC","C"],
      [ "-------- Expressions fetch the data based on matching a single value.","BOOLEAN","DATE","NUMERIC","A"],
      [ "-------- statement is used to remove a table definition and all the data, indexes, triggers, constraints and permission specifications for that table.","DROP TABLE","INSERT TABLE","CREATE TABLE","A"],
      [ "---------  Statement is used to add new rows of data to a table in the database.","ADD NEW","INSERT INTO","ADD COL","B"],
      [ "---------- statement is used to fetch the data from a database table which returns this data in the form of a result table","SELECT","SELECT ALL","FETCH ALL","A"],
      [ "-------  Constraint Ensures that a column cannot have NULL value","NULL NOT","NOT NULL","IS NULL","B"],
      [ "--------- Constraint Provides a default value for a column when none is specified.","CHECK","DEFAULT","UNIQUE","B"],
      [ "-------- Uniquely identifies each row/record in a database table.","PRIMARY Key","UNIQUE","DEFAULT","A"],
      [ "--------  returns rows when there is a match in both tables.","OUTER JOIN","INNER JOIN","FULL JOIN","B"],
      [ "---------- is used to join a table to itself as if the table were two tables, temporarily renaming at least one table in the SQL statement.","SELF JOIN","INNER JOIN","FULL JOIN","A"],
      [ "True or False ?</br> SQL not Allows users to define the data in a database and manipulate that data","True","False","Partialy True","B"],
      [ "True or False ?</br>SQL Allows users to access data in the relational database management systems.","True","False","Partialy True","A"],
      [ "True or False ?</br>SQL Allows users to create view, stored procedure, functions in a database.","True","False","Partialy True","A"],
      [ "True or False ?</br>SQL Allows to embed within other languages using SQL modules, libraries & pre-compilers.","True","False","Partialy True","A"],
      [ "True or False ?</br> A classic query engine handles all the non-SQL queries, but a SQL query engine won't handle logical files","True","False","Partialy True","A"]
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