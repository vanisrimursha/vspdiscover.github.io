<!DOCTYPE html>
<head>
<title>Accountancy Quiz</title>
 <style> body { background-image: url("b3.jpg"); background-repeat: no-repeat; } </style> </head> 
<style>
div#test{ border:blue 1px solid; padding:100px 100px 100px 100px; }
</style>

<?php
session_start();
$_SESSION['course'] = "Accountancy";
?>

<script>
var pos = 0, test, test_status, question, choice, choices, chA, chB, chC, correct = 0;
var questions = [
                  [ "-----------  is done to keep systematic record of financial transactions. ?", "Accounts", "Economics", "Business", "A" ],
	[ "Determine and book the value of stock of the following items:</br>Shirts   Rs 5,000/-</br>Pants    Rs 7,500/-</br>Coats    500 pieces</br>Jackets  1000 pieces</br>Value of Stock = ?", "29,500", "30,000", "20,000", "A" ],
	[ "-------------- stops any kind of manipulation while taking into account the net realizable value or the market value.? ", "Going Concern Concept ", "Cost Concept", "Dual Aspect Concept", "B" ],
                  [ "  ---------- is a business language.?", "Accounting", "Java", "C#", "A" ],
	[ "An account related to any individual like David, George, Ram, or Shyam is called as?", "Natural Personal Account", "Artificial Personal Account", "Representative Personal Account", "A" ],
                   [ "Every Business has some assets and every asset has an account. Thus, asset account is called .?", "Real Account", "Norminal Account", "Personal Account", "A" ],
	[ "--------  is a book that is maintained on a daily basis for recording all the financial entries of the day.?", "Notes", "Journal", "Ledger", "B" ],
                  [ "------------- helps us in summarizing journal entries of same nature at single place ?", "Journal", "Notes", "Ledger", "C" ],
	[ "--------- indicates reduction in value of any fixed assets?", "Depreciationl", "Cost Sheet Reduction", "Non of these", "A" ],
                  [ "---------is  permanent reduction in the unit cost of goods manufactured or services rendered without impairing their suitability for the use intended ?", "Cost Sheet Control", "Cost Sheet Reduction", "Depreciation", "B" ],
	[ "Cost reduction program is a continuous activity that cannot be treated as one time or short term activity. Success of any cost reduction program may lie in only continuous improvement of efforts.?", "True", "False","Not Known",  "A" ],
                     [ "Marginal costing is used to know the impact of variable cost on the volume of production or output?", "True", "False","Not Known", "C" ],
	[ " ------- is useful in profit planning; it is helpful to determine profitability at different level of production and sale.?", "Marginal Costing", "Trading", "Accounting", "A" ],
                 [ "----------- includes pre-determination of costs under specific working conditions.?", "Marginal Costing", "Trading", "Standard Costing", "C" ],
	[ " Capital account is ----------- ?", "Personal Account", "Nominal Account", "Business Account", "A" ],
                    [ "Drawing account is also a capital account.?", "True", "False", "Not Known", "A" ],
	[ "Being loss on account is comming under?", "Credit", "Expencess", "Bad Debts", "C" ],
	[ "All expenses and assets represent in ------- ?", "Debit Balance", "Credit Balance", "Expencess", "A" ],
                  [ "There are only two ways to maximize profit of any organization:?", "False", "True", "Not Known", "B" ],
                  [ "----------------------- analysis is concerned with the level of activity where total sales equals the total cost and it is called as the break-even point.", "Cost Benefit", "CVP", "None of these", "B" ]
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