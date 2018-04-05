<!DOCTYPE html>
<head>
<title>M Commerce Quiz</title>
 <style> body { background-image: url("b3.jpg"); background-repeat: no-repeat; } </style> 

<?php
session_start();
$_SESSION['course'] = "M Commerce";
?>

</head> 
<style>
div#test{ border:blue 1px solid; padding:10px 60px 40px 40px; }
</style>
<script>
var pos = 0, test, test_status, question, choice, choices, chA, chB, chC,  correct = 0;
var questions = [
      ["Buying and selling products and services through mobile devices are called","E-commerce","M-commerce","Commerce","B"],
     ["The probability of your potential customers owning a Smartphone is -------------- level","High Level","Average Level","Very High Level","C"],
     ["mobile commerce was originally coined in --------- ","1997","1987","1989","A"],
     ["There are----------  major national commercial platforms for mobile commerce ","Three","Two","Nine","B"],
     ["M-commerce is the buying and selling of goods and services through -----------  handheld devices","Wired device","Wireless Device","Normal Market","B"],
     ["when someone buys an Android app or an iPhone app, that person is engaged in ------------ ","E-commerce","M-commerce","Commerce","B"],
     ["---------  site optimized for Smartphone users","m-commerce","e-commerce","BothA&B","A"],
     ["The probability of your potential customers in M-commerce is","Very High","Low","Average","A"],
     ["--------- of your product or service helps you to engage your customers better ?","unique sell Proposition","Unique sales Proposition","Uniform sales proposition","A"],
     ["-------- such as the information on you Contact us page, it never changes, but make sure that the text is readable on different devices","Streaming content","Static content","Dynamic content","B"],
     ["---------- content which can be automatically pulled from content authoring tools such as contextual-help tips","Dynamic","Static","stream","A"],
     ["------ content such as PDF, audio, and video file that users can download on their mobile devices.","Dynamic","Downloadable","Stream","B"],
     ["------ is a computerized program developed especially to run on mobile devices including mobile phones, tablets, smartphones","Mobile app","websites","both A&B","A"],
     ["Mobile email marketing serves as a great tool for reaching out to a ------------ ?","Large number of customer","Large number of Product","BothA&B","A"],
     ["CLV stands for","Customer Lifetime Value","Customer Life Value","Customer life Valves","A"],
      [ "True or False ?</br> Return on Investment or simply ROI is the calculation of the Loss over the  investment","True","False","Partialy True","B"],
      [ "True or False ?</br>Mobile email marketing serves as a great tool for reaching out to a large number of users at one go","True","False","Partialy True","A"],
      [ "True or False ?</br>The rate of delivery is also very high, However, a mobile email marketing campaign is sure to work because a large number of users can be reached ","True","False","Partialy True","A"],
      [ "True or False ?</br>Mobile email marketing is a great way to promote your business, as you can receive immediate response from your potential customers.","True","False","Partialy True","A"],
      [ "True or False ?</br>Two of the most popular mobile operation software are ‘the Apple OS’ and ‘Android OS’","True","False","Partialy True","A"]
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