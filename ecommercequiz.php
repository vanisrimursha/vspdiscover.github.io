<!DOCTYPE html>
<head>
<title>E-Commerce Quiz</title>
 <style> body { background-image: url("b3.jpg"); background-repeat: no-repeat; } </style> 
<?php
session_start();
$_SESSION['course'] = "E-Commerce";
?>
</head> 
<style>
div#test{ border:blue 1px solid; padding:10px 60px 40px 40px; }
</style>
<script>
var pos = 0, test, test_status, question, choice, choices, chA, chB, chC, correct = 0;
var questions = [
                
    ["E-Commerce provides a universal platform to support commercial / business activities across the ----------","Globe","Countries","States","A"],
    ["E-commerce business models can generally be categorized as -------- ","Seven models","Six models","Five mdels","A"],
    ["---------- business model sells its products to an intermediate buyer who then sells the product to the final customer","C2C","B2C","B2B","C"],
    ["--------  business model sells its products directly to a customer","B2B","C2C","B2C","C"],
    ["A customer can view the products shown on the -----------","Website","Application","BothA&B","A"],
    ["The website will then send a notification to the business organization via  ------------","E-mail","Post cards","Telephone","A"],
    ["---------  business model helps consumers to sell their assets like residential property, cars, motorcycles, etc.","C2C","B2B","C2B","A"],
    ["--------  models consumer approaches a website showing multiple business organizations for a particular service","C2B","C2C","B2C","A"],
    ["----------  model is a variant of B2B model.","B2C","C2C","B2G","C"],
    ["The main objective of G2C websites is to reduce the average ------------ for fulfilling citizen’s requests for various government services.","Cost","Time"," BothA&B","B"],
    ["Payment using ---------- is one of most common mode of electronic payment","Credit card","Foreign Money","Money","A"],
    ["Credit card is small plastic card with a ----------  number attached with an account","Unique","Common","Not known","A"],
    ["----------  like credit card, is a small plastic card with a unique number mapped with the bank account number","Post cards","Greeting card","Debit card","C"],
    ["----- transactions refer to situation where payment is done over the network and the amount gets transferred from one financial body to another financial body without any involvement of a middleman","E-money","Money","Both A&B","A"],
    ["Smart cards can only be accessed using a ---------- ","PIN","Money","Voice","A"],
      [ "True or False ?</br>E-Commerce or Electronics Commerce is a methodology of Traditional business","True","False","Partialy True","B"],
      [ "True or False ?</br> E-Commerce enables the use of credit cards, debit cards, smart cards, electronic fund transfer via bank's website, and other modes of electronics payment","True","False","Partialy True","A"],
      [ "True or False ?</br>E-commerce automates the business of enterprises and the way they provide services to their customers. It is available anytime, anywhere","True","False","Partialy True","A"],
      [ "True or False ?</br>E-commerce increases the reach of advertising of products and services of businesses. It helps in better marketing management of products/services","True","False","Partialy True","A"],
      [ "True or False ?</br>Using e-commerce, orders for the products can be generated anytime, anywhere without any human intervention. It gives a big boost to existing sales volumes","True","False","Partialy True","A"]
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