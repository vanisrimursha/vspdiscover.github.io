<!DOCTYPE html>
<head>
<title>Enterpreneurship Quiz</title>
 <style> body { background-image: url("b3.jpg"); background-repeat: no-repeat; } </style> 


<?php
session_start();
$_SESSION['course'] = "Enterpreneurship";
?>

</head> 
<style>
div#test{ border:blue 1px solid; padding:10px 60px 40px 40px; }
</style>
<script>
var pos = 0, test, test_status, question, choice, choices, chA, chB, chC, correct = 0;
var questions = [
                  [ "Direct Sales +'s includes--------------", "Borrow status ", "Target Customer", "Can Get broader reach", "B" ],
	[ "In Sales and Distribution Retailer needs------------","Training","Not Need training","None", "A" ],
	[ "What is the qualities of analysing the demand----------", "Sales", "Profit", "Loss", "A" ],
                  [ "Survivor grades-------", "A = a plan where the angel/venture capitalist would take the first meeting","A = a plan of the quality that an angel investor/venture capitalist would fund","A = a plan that an angel investor/venture capitalist would at least put on the active list","C" ],
	[ "Why Start a Company?-----------", "Control your own destiny", "Starting companies is LESS risky than thought, and so much more rewarding", "Both A and B", "C" ],
                   [ "Avoid Point Solutions are----------","Understand Customers Workflow and Fit Into It","A Picture is Worth a Thousand Words","Do not Bias Your Feedback", "A" ],
	[ "Key Elements of the Process----------------","A Rapid Prototype is Worth it Weight in Gold","Tensions Between the Different Parties","Partial Solutions are Worth a Lot Less than Full Solutions", "B" ],
                  [ "Tips For best Enterpreneur---------------","Experiment – Explicitly State Your Hypothesis & Then Test with Data","Company/People Do Not Like Too Much Change","No Broken Glass -- Next Release", "A" ],
	[ "----------------Creates Great Focus","You will have to address each key player","Can predict when","Plan & Analysis", "A" ],
                  [ "----------- Simple Logical Flow Entrepreneurial Marketing", "Plan & Analysis", "Can predict when", "You will have to address each key player", "A" ],
	["Do Not Underestimate-------------","Describe the incumbent competitors—just the major ones","Competitors have many advantages","Customers change easily", "B" ],
                     [ "Competition Section has---------------","Customers do not change easily","Essential to good plan and ultimate succes","Product and company position", "C" ],
	[ "What are the Strategy needed------------","financial resources","Point of Attack"," management", "B" ],
                 [ "----------  refers to arranging data in a particular format. ?", "Stack", "Queue", "Sorting", "C" ],
	["Key Points of Blue Ocean Strategy-------------","Compelling Tagline","Point of Attack","Focus","A"],
                    ["Competition: Common Mistakes-----------","Underestimating the competition","Divergence","Compelling Tagline", "A" ],
	[ "Susie Suit----------","The market is a tough & unrelenting place","Innovation = Invention + Commercialization","Market pull", "A" ],
	[ "Bonnie Balance----------","The market is a tough & unrelenting place","Innovation = Invention + Commercialization","Market pull", "C" ],
                [ "Tommy Tech----------","The market is a tough & unrelenting place","Innovation = Invention + Commercialization","Market pull", "B" ],
                [ "Freddy Propulsion----------","The market is a tough & unrelenting place","Bias to Action – JFDI","Market pull", "B" ],		
];
function _(x){
	return document.getElementById(x);
}
function renderQuestion(){
	test = _("test");
	if(pos >= questions.length){
		test.innerHTML = "<h2>You got "+correct+" of "+questions.length+" questions correct</h2>";
		_("test_status").innerHTML = "Test Completed";
		test.innerHTML += "<button>Done</button>";
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