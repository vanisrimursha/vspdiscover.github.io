<!DOCTYPE html>
<head>
<title>Economics Quiz</title>
 <style> body { background-image: url("b3.jpg"); background-repeat: no-repeat; } </style> 


<?php
session_start();
$_SESSION['course'] = "Economics";
?>

</head> 
<style>
div#test{ border:blue 1px solid; padding:10px 60px 40px 40px; }
</style>
<script>
var pos = 0, test, test_status, question, choice, choices, chA, chB, chC, correct = 0;
var questions = [
                ["------------  is a widely used term, and in common is considered synonymous with terms like ‘want’ or 'desire'","Demand","Marginal Utility","Economic Relationship","A"],     
["Equations, graphs, and tables are extensively used for expressing ------------------- ","Economic Relationship","Complex Relatinship","BothA&B","A"],    
["TR = 100Q - ?","10Q2","20Q2","100Q2","A"],    
["Total profit is maximum at the level of output where the difference between the TR and TC is maximum. ? = TR - ?","TV","TB","TC","C"],    
["The total net benefit is maximum when the MR --------- the MC","Greater Than","Lesser Than","Equals","C"],    
[" -------------  are the commodities which are not essential for our living but are required for a happy living. For example, buying a car, air travel.","Luxiaries","Comforts","BothA&B","B"],    
["-----------  is a term referring to the total satisfaction received from consuming a good or service","Utility","Comforts","None of these","A"],    
["-----------   competition is a form of market structure in which a large number of independent firms are supplying products that are slightly differentiated from the point of view of buyers","Oligopolistic","Monopolistic","Polypolistic","B"],    
["Initial Investment / Constant annual cash inflow =?","Payback Period","Interest","Netpresent value","A"],    
["NPV = Present value of cash inflows - ?","Final Value","Initial Amount","Interest","B"],    
["Under oligopoly new entry is -----------?","Easy","Difficult","Can not Determind","B"],    
["-------------  is the traditional method of capital budgeting","Payback period","Netpresent value","Cash flow","A"],    
["The concept of the diminishing marginal rate of substitution between the --------  goods","Two","Three","Five","A"],    
["When profit is ------------ , it means that firm reached a breakeven point"," Equals to Zero","Greater Than Inverstment","Lesser than inverstment","A"],    
["Capital management involves planning and controlling of  --------- ?","Inverstment","Expances","Casflow","B"],     
      [ "True or False ?</br> A close interrelationship between management and economics had led to the development of managerial economics","True","False","Partialy True","A"],
      [ "True or False ?</br>Microeconomics studies the actions of individual consumers and firms","True","False","Partialy True","A"],
      [ "True or False ?</br>Microeconomics deals with the performance structure and behavior of an economy as a whole","True","False","Partialy True","B"],
      [ "True or False ?</br>Macroeconomics includes the analysis of small individual units of economy such as individual firms individual industry or a single individual consumer.","True","False","Partialy True","B"],
      [ "True or False ?</br>Microeconomics deals with the study of entire economy. It considers all the factors such as government policies business cycles national income","True","False","Partialy True","B"]
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