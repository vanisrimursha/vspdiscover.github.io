<!DOCTYPE html>
<head>
<title>Business Law Quiz</title>

<?php
session_start();
$_SESSION['course'] = "Business Law";
?>

 <style> body { background-image: url("b3.jpg"); background-repeat: no-repeat; } </style> </head> 
<style>
div#test{ border:blue 1px solid; padding:10px 60px 40px 40px; }
</style>
<script>
var pos = 0, test, test_status, question, choice, choices, chA, chB, chC, correct = 0;
var questions = [
["The maximum number of members remains unrestricted in the case of public companies.","3000","5000","Unrestricted","C"],
["companies are the companies where the liabilities of the shareholders are unlimited as in the case of partnership firms ? ","Unlimited Company","Public Company","Private Company","A"],
["--------- of the company are free from any liability.","the Owner","the Employee","the Manager","A"],
["The type of business to be carried out by ---------- ?","the Owner","the Company","the Shareholders","B"],
["As per Section 30 of the Companies Act, 1956, the Articles of Association must be signed by each subscriber of the memorandum of association in the presence of at least ----- witness?","2","3","1","C"],
["------ refers to a specific amount to be paid by an Applicant Airline to acquire membership","Dues","Fees","Board","B"],
["In lae of contract ,Sections ---------  are related to general principles of contracts","1-89","1-75","1-123","B"],
["--------- is the term used for the person for whom the guarantee is given","Debtors","Creditors","Shareholders","A"],
["In law of arbitration ,1940 act was revisited in ---------- ","1944","1996","1966","B"],
["There are ----------  modes of carriage transportation in India","5","4","7","B"],
["An award shall bind on both the parties creating the dispute within ------  year","One ","Ten","Six","A"],
["A person who has completed eighteen years of his life is called an ----------","Child","Young Person","Adult","C"],
["The Carriage by Road Act, 2007 was passed to revise the then obsolete Carriers Act,----------- ","1865","1965","1995","A"],
["--------------  refers to service of any description, which is made available to potential users","Service","Notification","Prescribed","A"],
["The Industrial Act was incorporated in order to compensate for the deficiencies of the Dispute Act,----------- ?","1989","1949","1929","C"],
      [ "True or False ?</br>At least Ten persons are required to form a public company.","True","False","Partialy True","B"],
      [ "True or False ?</br>The board of directors works as the only brain of the company.","True","False","Partialy True","A"],
      [ "True or False ?</br>A member can claim any ownership rights over the company either single-handedly or jointly.","True","False","Partialy True","B"],
      [ "True or False ?</br>Shares are always transferrable subject to the restrictions and liabilities offered by the rights to transfer shares.","True","False","Partialy True","A"],
      [ "True or False ?</br>The proportion of the capital entitled to each member is called the member’s share.","True","False","Partialy True","A"]
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