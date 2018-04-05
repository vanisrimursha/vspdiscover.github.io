<!DOCTYPE html>
<head>
<title>Cryptography Quiz</title>
 <style> body { background-image: url("b3.jpg"); background-repeat: no-repeat; } </style> 

<?php
session_start();
$_SESSION['course'] = "Cryptography";
?>

</head> 
<style>
div#test{ border:blue 1px solid; padding:10px 60px 40px 40px; }
</style>
<script>
var pos = 0, test, test_status, question, choice, choices, chA, chB, chC, correct = 0;
var questions = [
                  [ " Modifying the information in an unauthorized manner is called?", "Active Attacks ", "Passive Attacks", "Both", "A" ],
	[ " In ---------  method, the attacker has access to a set of ciphertext(s)?", "KPA ", "COA", "CPA", "B" ],
	[ "stream ciphers are block ciphers with a block size of -------- ?.", "Two", "One", "Three", "B" ],
                  [ " The number of bits in a block is---------  ?", "Unfixed", "128 bit", "Fixed", "C" ],
	[ "the possible plaintext bits combinations are   -----?", "2^m", "4^m", "6^m", "A" ],
                   [ " Data Encryption Standard  uses ------- round Feistel structure?", "16", "36", "64", "A" ],
	[ "The Data Encryption Standard (DES) is a symmetric-key block cipher ", "False ", "True", "Partially True", "B" ],
                  [ "there are ---------  variants of Triple DES  ?", "Two", "Six", "Nine", "A" ],
	[ "the actual 3TDES key has length is ----------- ?", "64 bits ", "128 bits", "158 bits", "C" ],
                  [ "------------- DES systems are significantly more secure than single DES", "Double", "Trible", "Poly", "B" ],
	[ "Each receiver possesses a unique decryption key, generally referred to as his  -------- key?", "Private", "Public", "Protected", "A" ],
                     [ "Receiver needs to publish an encryption key, referred to as his ---------- key.", "Private", "Public ", "Protected", "B" ],
	[ "Intelligent part of any public-key cryptosystem is in designing a relationship between --------  keys ?", "Two", "Four", "Eight", "A" ],
                 [ "In RSA Crypto System Number e must be greater than -----------  and less than (p - 1)(q - 1).?", "3", "2", "1", "C" ],
	[ " In ElGamal system, each user has a private key x. and has ----------  components of public key ", "5", "3", "1", "B" ],
                    [ "--------- is based on sets of numbers that are associated with mathematical objects called elliptic curves ", "RSA", "ECC", "Both", "B" ],
	[ "------------ is more efficient for encryption.?", "RSA", "EIGamal", "ECC", "A" ],
	[ " --------------- function coverts data of arbitrary length to a fixed length?", "Message Digest", "Hash", "HTTP", "B" ],
["---------  certificates can be easily acquired by supplying an email address.?", "class 3", "class 2", " class 1", "C" ],
[ " ----------- may be used by governments and financial organizations needing very high levels of trust.?", "class 2", "class 4", "class 1", "B" ]
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