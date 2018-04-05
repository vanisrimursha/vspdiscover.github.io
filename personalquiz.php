<!DOCTYPE html>
<head>
<title>Personal Development Quiz</title>
 <style> body { background-image: url("b3.jpg"); background-repeat: no-repeat; } </style> 

<?php
session_start();
$_SESSION['course'] = "Personal Development";
?>

</head> 
<style>
div#test{ border:blue 1px solid; padding:10px 60px 40px 40px; }
</style>
<script>
var pos = 0, test, test_status, question, choice, choices, chA, chB, chC, correct = 0;
var questions = [
["Personal development as an industry has several business relationship formats of -------------------.","Operating","Formating","None","A"],
["If you have ever played a sport, you have used ------------------------ to perform well.","Soft skills","Hard skills","Both A and B","C"],
["Successful development of ------------------ skills happens during our interactions with family, friends, and co-workers and are fundamental to how well we build and manage our relationships.","Soft","Hard","Both","A"],
["----------------skills are more specific and are often associated with a task or activity, most times job-related.","Soft","Hard","Both","B"],
["--------------------------skills complement each other and make up our arsenal of personal skills that demonstrate our capabilities.","Soft","Hard","Both A and B","C"],
["Skills are typically acquired or developed through -------------- experiences and training.","Limited","Indirect","Direct","C"],
["Personal development may include which activity----------------.","Self awareness and knowledge","Developing strength or talents","All the above","C"],
["Personal development can also include -------------------- other people.","Developing","Degrading","Discouraging","A"],
["In the ------------- business schools began to set up specific personal-development programs for leadership and career orientation.","1970s","1990s","1980s","B"],
["In ------------ the European Foundation for Management Development set up the EQUIS accreditation system which specified that personal development must form part of the learning process through internships.","1997","1998","1999","B"],
["Proponents actually see such programs not as a cost but as an -------------------- with results linked to an organization's strategic development goals.","Investment","Profit","Loss","A"],
["Personal development also forms an element in management tools such as personal development planning, assessing one's level of ability using a competency grid,or getting feedback from a ------------------------ questionnaire filled in by colleagues at different levels in the organization.","90","180","360","C"],
["A common --------------------- surrounding personal development programs is that they are often treated as an arbitrary performance management tool.","Friendship","Criticism","Encouragement","B"],
["Personal development programs in companies fall into ------------- categories .","Two","Four","Eight","A"],
["How many steps are in managing your personal developnent?","Five","Ten","Fifteen","A"],
["Looking after your mind is every bit as important as looking after your body in --------------- of maintaining your overall health","Conditions","Terms","Both A and B","B"],
["Drawing up a CV or résumé is not only necessary when applying for -------------it can also be very useful for your own benefit.","Training","Job","Both","B"],
["----------------------- courses allow you to study at home, which can help to reduce the cost of learning .","Distance learning","Learning","None","A"],
["Colleges and universities offering ------------------- training courses may also have free or subsidised crèche places.","Project work","Internship","Vocational","C"],
[" -------------- work can also provide an excellent opportunity for learning and developing new skills, as can being a member of a local group or society.","Voluntary","Manual","Hard","A"],

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