<!DOCTYPE html>
<head>
<title>Digital Photography Quiz</title>
 <style> body { background-image: url("b3.jpg"); background-repeat: no-repeat; } </style> 

<?php
session_start();
$_SESSION['course'] = "Digital Photography";
?>

</head> 
<style>
div#test{ border:blue 1px solid; padding:10px 60px 40px 40px; }
</style>
<script>
var pos = 0, test, test_status, question, choice, choices, chA, chB, chC, correct = 0;
var questions = [
["Digital photography is a form of photography that uses cameras containing arrays of -------------------- photodetectors to capture images focused by a lens, as opposed to an exposure on photographic film.","Electronic","Mechanic","Electrical","A"],
["The captured images are ----------------- and stored as a computer file ready for further digital processing, viewing, digital publishing or printing.","Coloured","Digitized","Black and white","B"],
["Digital images are also created by ---------------------- equipment such as computer tomography scanners and radio telescopes.","Photographic","Non-Photographic","None","B"],
["The first self-contained (portable) digital camera was created later in --------------- by Steven Sasson of Eastman Kodak.","1955","1965","1975","C"],
["Digital photography has eliminated the delay in the process & ---------------- the cost involved with film processing.","Increase","Decrease","Reduce","C"],
["According to research from KeyPoint Intelligence/InfoTrends, an estimated ---------- billion digital photos were taken globally in 2011 and this will rise to 1.2 trillion photos in 2017.","200","400","600","B"],
["The main types of sensors are ---------.","CCD","CMOS","Both A and B","C"],
["Digital cameras can take pictures, and may also record -----------------.","Sound","Video","Both A and B","C"],
["Digital photography is one of the most exceptional instances of the shift from converting conventional analog information to --------------- information. ","Analog","Digital","None","B"],
["Also known as Full-HD is-------------.","1080p","720p","1080i","A"],
["Adobe ------------ is the preferred color space for images intended for prepress applications. ","GBR","BRG","RGB","C"],
[" Eight bits equals ----------- byte.","16","8","1","C"],
["CCDs contain --------------------- of ultra small, light-sensitive mechanisms (pixels) that generate electronic pulses when electronically charged and exposed to light.","Rows","Columns","Both A and B","C"],
["CMY color has-------------","ChocoMagentaYellow","CyanMagentaYellow","None","B"],
["Depth of focus is the measurement of the area in focus ---------------- an image, from the closest point of focus to the furthest point of focus. ","Within","Outside","None","A"],
["Digital photography has eliminated the ----------------- in the process & reduced the cost involved with film processing.","Speed","Delay","Medium","B"],
["-------------------are reason why digital photography is important","8","6","4","B"],
["Photographs can grab our ------------------ and speak directly to our emotions.","Attention","Curiosity","Silence","A"],
["The applications of digital photography are however not restricted to --------------- use only.","Personal","Public","Both A and B","A"],
["The ---------------------- photography industry has also evolved with time thereby creating career opportunities for young enthusiasts who have a flair for photography.","Black and White","Color","Digital","C"],
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