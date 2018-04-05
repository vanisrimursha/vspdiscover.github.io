<!DOCTYPE html>
<head>
<title>MonoChrome Quiz</title>
 <style> body { background-image: url("b3.jpg"); background-repeat: no-repeat; } </style> 
<?php
session_start();
$_SESSION['course'] = "Monochrome";
?>

</head> 
<style>
div#test{ border:blue 1px solid; padding:10px 60px 40px 40px; }
</style>
<script>
var pos = 0, test, test_status, question, choice, choices, chA, chB, chC, correct = 0;
var questions = [
                  [ "Monochrome Photography Means--------------", "Digital Photography ", "Black And White Photography", "Color Photography", "B" ],
	[ "The albumen print process first used more than----------years ago","160","180","170", "C" ],
	[ "Sepia and ------------ hued images are produced by certain photographic processes such as calotypes and albumen prints", "Brown", "Black", "Blue", "A" ],
                  [ " Finding and --------------- a scene having only variants of a certain hue, while difficult and uncommon in practice, will result in an image that technically qualifies as a monochrome photo. ","Shooting","Lightening","Capturing","C" ],
	[ "--------------images can be converted to black and white", "Color", "Digital", "Both A and B", "A" ],
                   [ "How Many Steps in Black and White Photagraphy?","6","8","10", "A" ],
	[ "Colors can be ---------------- and may even make the photo look complicated","Attracting","Distracting","Both A and B", "B" ],
                  ["Black and White(or other monochromatic) photography can and does have its place in ------------------------- photographysettings","Commercial","Non Commercial","None", "A" ],
	["Black and white photography is also considered by many to be more ------------ than using color.","artsy","colory","radiousy", "A" ],
                  ["The first monochromatic daguerreotypes came out in then----------", "1700s", "1800s","1600s", "B" ],
	["How many Reasons are in working black and white photography","8","6","3", "B" ],
                     [ "Black and white is a form of ------------","Classification","Classic","Simplification", "C" ],
["Objects and features closer to the -------------- will tend to show heavier tones than elements that are further away","Tube","Mirror","Lens", "C"],
["--------------down the image to a range of simple tones often leads to a purer rendition","Paring","Morphing","Rendoring", "A" ],
["The classic subjects for mono treatment include documentary-------------------","Landscape","Portrait","Both A and B", "C" ],
["------------------ photography lends itself to a documentary approach rather than just a record of tourist", "Attractions","Journalism","Travel","None", "B" ],
["-----------------landscapes to monochromatic tones the composition becomes more important than ever","Reducing","Morphing","Both", "A" ],
["In particular, saving your image as a monochrome JPEG means that you won’t be able to access the separate ------------- channels at a later stage should you wish to.","RGB","BGR","GBR", "A" ],
["Moving to an angle of -------------------- will give a heightened sense of volume by placing useful shadows on the far side of your subject.","45%","90%","between 45% and 90%", "C" ],
[" Effective --------------- really is the key to revealing texture. ","Lightening","Shooting","Flashing", "A"],
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