<!DOCTYPE html>
<head>
<title>Data Structures Quiz</title>
 <style> body { background-image: url("b3.jpg"); background-repeat: no-repeat; } </style> 

<?php
session_start();
$_SESSION['course'] = "Data Structures";
?>

</head> 
<style>
div#test{ border:blue 1px solid; padding:10px 60px 40px 40px; }
</style>
<script>
var pos = 0, test, test_status, question, choice, choices, chA, chB, chC, correct = 0;
var questions = [
                  [ "--------------  can be declared in various ways in different languages. For illustration", "Array ", "Linked List", "Stack", "A" ],
	[ "Array length is 10 which means it can store ------  elements. ?", "9 ", "10", "11", "B" ],
	[ " print all the array elements one by one is called ?.", "Insertion", "Travarse", "Updation", "B" ],
                  [ "Each link of a linked list can store a data called an ?", "Link", "Element", "Next ", "C" ],
	[ " Item navigation is forward only called as ?", "Singly Linked List", "Doubly Linked List", "Circular Linked list", "A" ],
                   [ "Each link of a linked list contains a link to the next link called?", "Next", "Last", "Previous", "A" ],
	[ "---------  is an Abstract Data Type (ADT), commonly used in most programming languages. ", "Linked List ", "Stack", "Queue", "B" ],
                  [ " In stack terminology, insertion operation is called -------- ?", "PUSH", "POP", "INSERT", "A" ],
	[ " In stack terminology removal operation is.?", "PUSH ", "REMOVE", "POP", "C" ],
                  [ "----------- get the top data element of the stack, without removing it.", "PUSH()", "peek()", "POP()", "B" ],
	["------------ is an abstract data structure, somewhat similar to Stacks", "Queue", "Array", "Linked List", "A" ],
                     [ "----------- add (store) an item to the queue. ", "dequeue()", "enqueue() ", "peek()", "B" ],
	[ "---------- is search is a very simple search algorithm", "Linear", "Binary", "Both", "A" ],
                 [ "----------  refers to arranging data in a particular format. ?", "Stack", "Queue", "Sorting", "C" ],
	[" ----------  sort is a simple sorting algorithm.  ", "Insertion", "Bubble", "Selection", "B" ],
                    [ "---------  sort is a sorting technique based on divide and conquer technique. ", "Bubble", "Merge", "Selection", "B" ],
	[ "-----------  sort is a highly efficient sorting algorithm and is based on partitioning of array of data into smaller arrays.", "Quick", "Merge", "Insertion", "A" ],
	[ "  The last link carries a link as null to mark the end of the list.", "False", "True", "Partialy True", "B" ],
["In graph data structures the links that connect the vertices are called -------------- .", "Vertices", "Link", " Edge", "C" ],
[ "   In ------------- traversal method  the left subtree is visited first, then the root and later the right sub-tree.", "Pre-order", "In-order", "Post-order", "B" ]
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