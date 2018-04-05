<!DOCTYPE html>
<head>
<title>Computer Networks Quiz</title>
 <style> body { background-image: url("b3.jpg"); background-repeat: no-repeat; } </style> 

<?php
session_start();
$_SESSION['course'] = "Computer Networks";
?>

</head> 
<style>
div#test{ border:blue 1px solid; padding:10px 60px 40px 40px; }
</style>
<script>
var pos = 0, test, test_status, question, choice, choices, chA, chB, chC, correct = 0;
var questions = [
                  [ "-------------------  is smallest network which is very personal to a user ?", "PAN", "LAN", "MAN", "A" ],
	[ "A computer network spanned inside a building and operated under single administrative system is generally termed as --------------?", "PAN ", "LAN", "MAN", "B" ],
	[ "---------------- can be wired,wireless, or in both forms at once.", "PAN", "LAN", "MAN", "B" ],
                  [ "---------------- generally expands throughout a city such as cable TV network. It can be in the form of Ethernet,Token-ring, ATM, or Fiber Distributed Data Interface (FDDI). ?", "LAN", "PAN", "MAN", "C" ],
	[ "---------------  covers a wide area which may span across provinces and even a whole country.?", "WAN", "MAN", "LAN", "A" ],
                   [ "----------- topology may have problem while multiple hosts sending data at the same time. ?", "Bus", "Star", "Ring", "A" ],
	[ "All hosts in Star topology are connected to a central device, known as ?", "Central Device ", "Hub", "Main Device", "B" ],
                  [ "In ----------  topology, each host machine connects to exactly two other machines, creating a circular network structure ?", "Ring", "Star", "Bus", "A" ],
	[ "----------- provides the most reliable network structure among all network topologies.?", "Star ", "Bus", "Mesh", "C" ],
                  [ " ------------- is also known as Hierarchical Topology, this is the most common form of network topology in use presently", "Bus", "Tree", "Mesh", "B" ],
	[ "-------- layer is responsible for providing interface to the application user. This layer encompasses protocols which directly interact with the user.?", "Application", "Network", "Session", "A" ],
                     [ "-----------  layer is responsible for address assignment and uniquely addressing hosts in a network", "Applicaton", "Network ", "Session", "B" ],
	[ "------------ layer defines the hardware, cabling wiring, power output, pulse rate etc ?", "Physical", "Datalink", "Transport", "A" ],
                 [ "----------- is a security threat in which availability of resources is attacked. For example, a user is unable to access its web-server or the web-server is hijacked.?", "Authentic city", "Integrity", "Interruption", "C" ],
	[ " ---------  is created to replace IPv4 and hopefully mitigates limitations of IPv4 too ", "IPv5", "IPv6", "IPv7", "B" ],
                    [ " ---------- provides reliable communication between two hosts.?", "UDP", "TCP", "Both", "B" ],
	[ "UDP   provides unreliable communication between two hosts?", "True", "False", "Partialy true", "A" ],
	[ "--------  is a protocol which helps user application protocols such as HTTP to accomplish its work.?", "FTP", "DNS", "HTTP", "B" ],
["------------  is a technique to mix and send multiple data streams over a single medium. ?", "Transmission", "Switching", "Multiplexing", "C" ],
[ "The entire message is broken down into smaller chunks called packets?", "Message Switch", "Packet Switch", "Circuit Switch", "B" ]
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