<!DOCTYPE html>
<html>
<head>
<title>Logical Reasoning</title>
<?php
session_start();
$_SESSION['course'] = "Logical Reasoning";
?>
<style>
* {box-sizing: border-box}
body {font-family: "Lato", sans-serif;}

.button {
    background-color: #4CAF50;
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
}
/* Style the tab */
.tab {
    float: left;
    border: 1px solid #ccc;
    background-color: #f1f1f1;
    width: 15%;
    height: none;
}

/* Style the buttons inside the tab */
.tab button {
    display: block;
    background-color: inherit;
    color: black;
    padding: 22px 16px;
    width: 100%;
    border: none;
    outline: none;
    text-align: left;
    cursor: pointer;
    transition: 0.3s;
    font-size: 17px;
}

/* Change background color of buttons on hover */
.tab button:hover {
    background-color: #ddd;
}

/* Create an active/current "tab button" class */
.tab button.active {
    background-color: #ccc;
}

/* Style the tab content */
.tabcontent {
    float: left;
    padding: 0px 12px;
    border: 1px solid #ccc;
    width: 80%;
    border-left: none;
    height: none;
}
</style>
</head>
<body>
<div style="width: 100%; max-width: 1920px;  min-width: 480px; height: auto; overflow: hidden;">

<div class="tab">
  <button class="tablinks" onclick="openCity(event, 'c1')" id="defaultOpen">Quants-Number System</button>
<button class="tablinks" onclick="openCity(event, 'c12')">Quants-Basic Arithimetic</button>
    <button class="tablinks" onclick="openCity(event, 'c2')">Quants-Decimals</button>
  <button class="tablinks" onclick="openCity(event, 'c3')">Quants-Percentages</button>
<button class="tablinks" onclick="openCity(event, 'c4')">Quants-Ratios</button>
<button class="tablinks" onclick="openCity(event, 'c5')">Quants-H.F.C&L.C.M</button>
<button class="tablinks" onclick="openCity(event, 'c6')">Quants-Discounts</button>
<button class="tablinks" onclick="openCity(event, 'c7')">Logical Reasoning</button>
<button class="tablinks" onclick="openCity(event, 'c8')">Logical Reasoning Excercise</button>
</div>

<div id="c1" class="tabcontent">
<h1>Aptitude - Number System</h1>

<h2>Numbers</h2>
<p>In Decimal number system, there are ten symbols namely 0,1,2,3,4,5,6,7,8 and 9 called digits. A number is denoted by group of these digits called as numerals.</p>
<h2>Face Value</h2>
<p>Face value of a digit in a numeral is value of the digit itself. For example in 321, face value of 1 is 1, face value of 2 is 2 and face value of 3 is 3.</p>
<h2>Place Value</h2>
<p>Place value of a digit in a numeral is value of the digit multiplied by 10<sup>n</sup> where n starts from 0. For example in 321:</p>
<ul class="list">
<li><p>Place value of 1 = 1 x 10<sup>0</sup> = 1 x 1 = 1</p></li>
<li><p>Place value of 2 = 2 x 10<sup>1</sup> = 2 x 10 = 20</p></li>
<li><p>Place value of 3 = 3 x 10<sup>2</sup> = 3 x 100 = 300</p></li>
<blockquote>
<p>0<sup>th</sup> position digit is called unit digit and is the most commonly used topic in aptitude tests.</p>
</blockquote>
</ul>
<h2>Types of Numbers</h2>
<ol class="list">
<li><p><b>Natural Numbers</b> - n &gt; 0 where n is counting number; [1,2,3...]</p></li>
<li><p><b>Whole Numbers</b> - n &ge; 0 where n is counting number; [0,1,2,3...].</p></li>
<blockquote>
<p>0 is the only whole number which is not a natural number.</p>
<p>Every natural number is a whole number.</p>
</blockquote>
<li><p><b>Integers</b> - n &ge; 0 or n &le; 0 where n is counting number;...,-3,-2,-1,0,1,2,3... are integers.
<ul class="list">
<li><p><b>Positive Integers</b> - n &gt; 0; [1,2,3...]</p></li>
<li><p><b>Negative Integers</b> - n &lt; 0; [-1,-2,-3...]</p></li>
<li><p><b>Non-Positive Integers</b> - n &le; 0; [0,-1,-2,-3...]</p></li>
<li><p><b>Non-Negative Integers</b> - n &ge; 0; [0,1,2,3...]</p></li>
</ul>
<blockquote>
<p>0 is neither positive nor negative integer.</p>
</blockquote>
</p></li>
<li><p><b>Even Numbers</b> - n / 2 = 0 where n is counting number; [0,2,4,...]</p></li>
<li><p><b>Odd Numbers</b> - n / 2 &ne; 0 where n is counting number; [1,3,5,...]</p></li>
<li><p><b>Prime Numbers</b> - Numbers which is divisible by themselves only apart from 1.</p></li>
<blockquote>
<p>1 is not a prime number.</p>
<p>To test a number p to be prime, find a whole number k such that k &gt; &radic;p. Get all prime numbers less than or equal to k and divide p with each of these prime numbers. If no number divides p exactly then p is a prime number otherwise it is not a prime number.</p>
</blockquote>
<pre class="result">
Example: 191 is prime number or not?
Solution: 
Step 1 - 14 &gt; &radic;191
Step 2 - Prime numbers less than 14 are 2,3,5,7,11 and 13.
Step 3 - 191 is not divisible by any above prime number.
Result - 191 is a prime number.

Example: 187 is prime number or not?
Solution: 
Step 1 - 14 &gt; &radic;187
Step 2 - Prime numbers less than 14 are 2,3,5,7,11 and 13.
Step 3 - 187 is divisible by 11.
Result - 187 is not a prime number.
</pre>
<li><p><b>Composite Numbers</b> - Non-prime numbers &gt; 1. For example, 4,6,8,9 etc.</p></li>
<blockquote>
<p>1 is neither a prime number nor a composite number.</p>
<p>2 is the only even prime number.</p>
</blockquote>
<li><p><b>Co-Primes Numbers</b> - Two natural numbers are co-primes if their H.C.F. is 1. For example, (2,3), (4,5) are co-primes.</p></li>
</ol>
<h2>Divisibility</h2> 
<p>Following are tips to check divisibility of numbers.</p>
<ol class="list">
<li><p><b>Divisibility by 2</b> - A number is divisible by 2 if its unit digit is 0,2,4,6 or 8.</p></li>
<pre class="result">
Example: 64578 is divisible by 2 or not?
Solution: 
Step 1 - Unit digit is 8.
Result - 64578 is divisible by 2.

Example: 64575 is divisible by 2 or not?
Solution: 
Step 1 - Unit digit is 5.
Result - 64575 is not divisible by 2.
</pre>
<li><p><b>Divisibility by 3</b> - A number is divisible by 3 if sum of its digits is completely divisible by 3.</p></li>
<pre class="result">
Example: 64578 is divisible by 3 or not?
Solution: 
Step 1 - Sum of its digits is 6 + 4 + 5 + 7 + 8 = 30 
which is divisible by 3.
Result - 64578 is divisible by 3.

Example: 64576 is divisible by 3 or not?
Solution: 
Step 1 - Sum of its digits is 6 + 4 + 5 + 7 + 6 = 28 
which is not divisible by 3.
Result - 64576 is not divisible by 3.
</pre>
<li><p><b>Divisibility by 4</b> - A number is divisible by 4 if number formed using its last two digits is completely divisible by 4.</p></li>
<pre class="result">
Example: 64578 is divisible by 4 or not?
Solution: 
Step 1 - number formed using its last two digits is 78 
which is not divisible by 4.
Result - 64578 is not divisible by 4.

Example: 64580 is divisible by 4 or not?
Solution: 
Step 1 - number formed using its last two digits is 80 
which is divisible by 4.
Result - 64580 is divisible by 4.
</pre>
<li><p><b>Divisibility by 5</b> - A number is divisible by 5 if its unit digit is 0 or 5.</p></li>
<pre class="result">
Example: 64578 is divisible by 5 or not?
Solution: 
Step 1 - Unit digit is 8.
Result - 64578 is not divisible by 5.

Example: 64575 is divisible by 5 or not?
Solution: 
Step 1 - Unit digit is 5.
Result - 64575 is divisible by 5.
</pre>
<li><p><b>Divisibility by 6</b> - A number is divisible by 6 if the number is divisible by both 2 and 3.</p></li>
<pre class="result">
Example: 64578 is divisible by 6 or not?
Solution: 
Step 1 - Unit digit is 8. Number is divisible by 2.
Step 2 - Sum of its digits is 6 + 4 + 5 + 7 + 8 = 30 
which is divisible by 3.
Result - 64578 is divisible by 6.

Example: 64576 is divisible by 6 or not?
Solution: 
Step 1 - Unit digit is 8. Number is divisible by 2.
Step 2 - Sum of its digits is 6 + 4 + 5 + 7 + 6 = 28 
which is not divisible by 3.
Result - 64576 is not divisible by 6.
</pre>
<li><p><b>Divisibility by 8</b> - A number is divisible by 8 if number formed using its last three digits is completely divisible by 8.</p></li>
<pre class="result">
Example: 64578 is divisible by 8 or not?
Solution: 
Step 1 - number formed using its last three digits is 578 
which is not divisible by 8.
Result - 64578 is not divisible by 8.

Example: 64576 is divisible by 8 or not?
Solution: 
Step 1 - number formed using its last three digits is 576 
which is divisible by 8.
Result - 64576 is divisible by 8.
</pre>
<li><p><b>Divisibility by 9</b> - A number is divisible by 9 if sum of its digits is completely divisible by 9.</p></li>
<pre class="result">
Example: 64579 is divisible by 9 or not?
Solution: 
Step 1 - Sum of its digits is 6 + 4 + 5 + 7 + 9 = 31 
which is not divisible by 9.
Result - 64579 is not divisible by 9.

Example: 64575 is divisible by 9 or not?
Solution: 
Step 1 - Sum of its digits is 6 + 4 + 5 + 7 + 5 = 27 
which is divisible by 9.
Result - 64575 is divisible by 9.
</pre>
<li><p><b>Divisibility by 10</b> - A number is divisible by 10 if its unit digit is 0.</p></li>
<pre class="result">
Example: 64575 is divisible by 10 or not?
Solution: 
Step 1 - Unit digit is 5.
Result - 64578 is not divisible by 10.

Example: 64570 is divisible by 10 or not?
Solution: 
Step 1 - Unit digit is 0.
Result - 64570 is divisible by 10.
</pre>
<li><p><b>Divisibility by 11</b> - A number is divisible by 11 if difference between sum of digits at odd places and sum of digits at even places is either 0 or is divisible by 11.</p></li>
<pre class="result">
Example: 64575 is divisible by 11 or not?
Solution: 
Step 1 - difference between sum of digits at odd places 
and sum of digits at even places = (6+5+5) - (4+7) = 5 
which is not divisible by 11.
Result - 64575 is not divisible by 11.

Example: 64075 is divisible by 11 or not?
Solution: 
Step 1 - difference between sum of digits at odd places 
and sum of digits at even places = (6+0+5) - (4+7) = 0.
Result - 64075 is divisible by 11.
</pre>
</ol>
<h2>Tips on Division</h2>
<ol class="list">
<li><p>If a number n is divisible by two co-primes numbers a, b then n is divisible by ab.</p></li>
<li><p>(a-b) always divides (a<sup>n</sup> - b<sup>n</sup>) if n is a natural number.</p></li>
<li><p>(a+b) always divides (a<sup>n</sup> - b<sup>n</sup>) if n is an even number.</p></li>
<li><p>(a+b) always divides (a<sup>n</sup> + b<sup>n</sup>) if n is an odd number.</p></li>
</ol>
<h2>Division Algorithm</h2>
<p>When a number is divided by another number then</p>
<center><b>Dividend = (Divisor x Quotient) + Reminder</b></center>
<h2>Series</h2>
<p>Following are formulaes for basic number series:</p>
<ol class="list">
<li><p>(1+2+3+...+n) = (1/2)n(n+1)</p></li>
<li><p>(1<sup>2</sup>+2<sup>2</sup>+3<sup>2</sup>+...+n<sup>2</sup>) = (1/6)n(n+1)(2n+1)</p></li>
<li><p>(1<sup>3</sup>+2<sup>3</sup>+3<sup>3</sup>+...+n<sup>3</sup>) = (1/4)n<sup>2</sup>(n+1)<sup>2</sup></p></li>
</ol>
<h2>Basic Formulaes</h2>
<p>These are the basic formulae:</p>
<pre class="result">
(a + b)<sup>2</sup> = a<sup>2</sup> + b<sup>2</sup> + 2ab<br>
(a - b)<sup>2</sup> = a<sup>2</sup> + b<sup>2</sup> - 2ab<br>
(a + b)<sup>2</sup> - (a - b)<sup>2</sup> = 4ab<br>
(a + b)<sup>2</sup> + (a - b)<sup>2</sup> = 2(a<sup>2</sup> + b<sup>2</sup>)<br>
(a<sup>2</sup> - b<sup>2</sup>) = (a + b)(a - b)<br>
(a + b + c)<sup>2</sup> = a<sup>2</sup> + b<sup>2</sup> + c<sup>2</sup> + 2(ab + bc + ca)<br>
(a<sup>3</sup> + b<sup>3</sup>) = (a + b)(a<sup>2</sup> -  ab + b<sup>2</sup>)<br>
(a<sup>3</sup> - b<sup>3</sup>) = (a - b)(a<sup>2</sup> + ab + b<sup>2</sup>)<br>
(a<sup>3</sup> + b<sup>3</sup> + c<sup>3</sup> - 3abc) = (a + b + c)(a<sup>2</sup> + b<sup>2</sup> + c<sup>2</sup> - ab - bc - ca)<br>
</pre>
<hr />

</div>
<div id="c12" class="tabcontent">
<h1>Aptitude - Basic Arithmetic</h1>

<h2>Sequence</h2>
<p>A sequence represents numbers formed in succession and arranged in a fixed order defined by a certain rule.</p>
<h2>Airthmetic Progression ( A.P.)</h2>
<p>It is a type of sequence where each number/term(except first term) differs from its preceding number by a constant. This constant is termed as common difference.</p>
<h3>A.P. Terminologies</h3>
<ul class="list">
<li><p>First number is denoted as 'a'.</p></li>
<li><p>Common difference is denoted as 'd'.</p></li>
<li><p>n<sup>th</sup> number is denoted as 'T<sub>n</sub>'.</p></li>
<li><p>Sum of n number is denoted as 'S<sub>n</sub>'.</p></li>
</ul>
<h3>A.P. Examples</h3>
<ul class="list">
<li><p> 1, 3, 5, 7, ... is an A.P. where a = 1 and d = 3 - 1 = 2.</p></li>
<li><p> 7, 5, 3, 1, - 1 ... is an A.P. where a = 7 and d = 5 - 7 = -2.</p></li>
</ul>
<h3>General term of A.P.</h3>
<pre class="result notranslate">
T<sub>n</sub> = a + (n - 1)d
</pre>
<p>Where <b>a</b> is first term, <b>n</b> is count of terms and <b>d</b> is the difference between two terms.</p>
<h3>Sum of n terms of A.P.</h3>
<pre class="result notranslate">
S<sub>n</sub> = (n/2)[2a + (n - 1)d
</pre>
<p>Where <b>a</b> is first term, <b>n</b> is count of terms and <b>d</b> is the difference between two terms. There is another variation of the same formula:</p>
<pre class="result notranslate">
S<sub>n</sub> = (n/2)(a + l)
</pre>
<p>Where <b>a</b> is first term, <b>n</b> is count of terms, <b>l</b> is the last term.</p>
<h2>Geometrical Progression, G.P.</h2>
<p>It is a type of sequence where each number/term(except first term) bears a constant ratio from its preceding number. This constant is termed as common ratio.</p>
<h3>G.P. Terminogies</h3>
<ul class="list">
<li><p>First number is denoted as 'a'.</p></li>
<li><p>Common ratio is denoted as 'r'.</p></li>
<li><p>n<sup>th</sup> number is denoted as 'T<sub>n</sub>'.</p></li>
<li><p>Sum of n number is denoted as 'S<sub>n</sub>'.</p></li>
</ul>
<h3>G.P. Examples</h3>
<ul class="list">
<li><p> 3, 9, 27, 81, ... is a G.P. where a = 3 and r = 9 / 3 = 3.</p></li>
<li><p> 81, 27, 9, 3, 1 ... is a G.P. where a = 81 and r = 27 / 81 = (1/3).</p></li>
</ul>
<h3>General term of G.P.</h3>
<pre class="result notranslate">
T<sub>n</sub> = ar<sup>(n-1)</sup>
</pre>
<p>Where <b>a</b> is first term, <b>n</b> is count of terms, <b>r</b> is the common ratio</p>
<h3>Sum of n terms of G.P.</h3>
<pre class="result notranslate">
S<sub>n</sub> = a(1 - r<sup>n</sup>)/(1 - r)
</pre>
<p>Where <b>a</b> is first term, <b>n</b> is count of terms, <b>r</b> is the common ratio and r &lt; 1. There is another variation of the same formula:</p>
<pre class="result notranslate">
S<sub>n</sub> = a(r<sup>n</sup> - 1)/(r - 1)
</pre>
<p>Where <b>a</b> is first term, <b>n</b> is count of terms, <b>r</b> is the common ratio and r  &gt; 1.</p>
<h2>Arithmetic Mean</h2>
<p>Airthmetic mean of two numbers a and b is:</p>
<pre class="result notranslate">
Arithmetic Mean = (1/2)(a + b)
</pre>
<h2>Geometric Mean</h2>
<p>Geometric mean of two numbers a and b is</p>
<pre class="result notranslate">
Geometric Mean = &radic;ab
</pre>
<h2>General Formulaes</h2>
<pre class="result notranslate">
1 + 2 + 3 + ... + n = (1/2)n(n+1)
</pre>
<br>
<pre class="result notranslate">
1<sup>2</sup> + 2<sup>2</sup> + 3<sup>2</sup> + ... + n<sup>2</sup> = n(n+1)(2n+1)/6
</pre>
<br>
<pre class="result notranslate">
1<sup>3</sup> + 2<sup>3</sup> + 3<sup>3</sup> + ... + n<sup>3</sup> = [(1/2)n(n+1)]<sup>2</sup>
</pre>
<hr />

</div>
<div id="c2" class="tabcontent">
<h1>Aptitude - Decimals &amp; Fractions</h1>

<h2>Decimal Fractions</h2>
<p>Fractions having denominators in power of 10 are called decimal fractions.</p>
<pre class="result">
 1/10 = .1, 2/10 = .2, ....
 1/100 = .01, 2/100 = .02, ...
 1/1000 = .001, 2/1000 = .002, ...
</pre>
<h2>Converting a decimal number into a fraction</h2>
<p>In the denominator part, place 1 under decimal point and suffix with as many zeroes as is the total number of digits after decimal point. Remove the decimal point and reduce the fraction to its lowest term.</p>
<pre class="result">
 .56 = 56/100 = 14/25
 .0024 = 24/10000 = 3/1250
</pre>
<p>Suffixing zeroes to the right of a decimal fraction does not change its value. Thus 0.6 = 0.60 = 0.600 etc.</p>
<p>If numerator and denominator contains same number of decimal places, we can remove decimal signs from each number.</p>
<pre class="result">
 2.71/3.41 = 271/341
 14.4/15.6 = 144/156 = 12/13
</pre>
<h2>Adding decimals</h2>
<p>Place each number under each other in such a way that decimal points lies in same colum. Numbers so arranged can be added in usual way.</p>
<pre class="result">
 21.3 + .213 + 3.21 + .021 + 2.0031 = ?
 21.3
   .213
  3.21
   .021
  2.0031
 --------
 26.7471
 --------
</pre>
<h2>Subtracting decimals</h2>
<p>Place each number under each other in such a way that decimal points lies in same colum. Numbers so arranged can be subtracted in usual way.</p>
<pre class="result">
  23.004
 -16.5628
 ---------
   6.4412
 ---------
</pre>
<h2>Multiplying decimals</h2>
<p>Multiply given numbers without considering decimal point. In product, mark the decimal point as many places of decimals as is the sum of number of decimal places in the given numbers.</p>
<pre class="result">
 2.3 x 0.12 = ?
 23 x 12 = 276
 Sum of decimal places = 1 + 2 = 3
 &there4; 2.3 x 0.12 = 0.276
</pre>
<h2>Dividing decimals by number</h2>
<p>Divide given decimal number without considering decimal point. In quotient, mark the decimal point as many places of decimals as is the sum of number of decimal places in the given dividend.</p>
<pre class="result">
 0.63 / 9 = ?
 63 / 9 = 7
 Decimal places in dividend = 2
 &there4; 0.63 / 9 = 0.07
</pre>
<h2>Dividing decimals by decimals</h2>
<p>Multiply both dividend and divisor by such multiple of 10 so that divisor becomes a whole number. Divide dividend without considering decimal point. In quotient, mark the decimal point as many places of decimals as is the sum of number of decimal places in the given dividend.</p>
<pre class="result">
 0.00042/ 0.06 = ?
 0.00042/ 0.06 = (0.00042 x 100 )/ (0.06 x 100)
 = 0.042 / 6

 Now 42/6 = 7
 Decimal places in dividend = 3
 &there4; 0.00042 / 0.06 = 0.007
</pre>
<h2>Recurring Decimals</h2>
<h3>Pure recurring decimals</h3>
<p>A decimal fraction in which all figures after decimal point are repeated is called a pure recurring decimals. For example, 0.5555, 0.323232</p>
<h3>Converting pure recurring decimal to fraction</h3>
<p>Put the repeating figure only once in the numerator and put as many nines in the denominator as in number of repeating figures.</p>
<pre class="result">
 Express 0.33333 in fraction.
 0.3333 = 3/9 = 1/3
 
 Express 0.2727 in fraction.
 0.2727 = 27/99 = 3/11 
</pre>
<h2>Mixed recurring decimals</h2>
<p>A decimal fraction in which some figures are not repeating whereas some of them are repeating, is called as mixed recurring decimals. For example, 0.534242, 0.078888.</p>
<h3>Converting mixed recurring decimal to fraction</h3>
<p>Put the difference of numbers formed by digits after decimal point taking repeated digits once and that formed by non-repeating number, in the numerator and put as many nines in the denominator as in number of repeating figures and annex them with as many zeroes as in the non-repeating digits.</p>
<pre class="result">
 Express 0.266666 in fraction.
 0.26666 = (26-2)/90 = 24/90 = 4/15
 
 Express 0.326868 in fraction.
 0.326868 = (3268 - 32)/9900 = 3236/9900 = 809/2475 
</pre>

</div>
<div id="c3" class="tabcontent">
<h1>Number System - Percentages</h1>

<h2>Percentage</h2>
<p>Percent means many hundredths.Example: z% is z percent which means z hundredths. It will be written as:</p>
<p>z% = <sup>z</sup>&frasl;<sub>100</sub></p>
<p><sup>p</sup>&frasl;<sub>q</sub> as percent: (<sup>p</sup>&frasl;<sub>q</sub> x 100)%
<h2>Commodity</h2>
<p>If the price of a commodity increases by R%, then the reduction in consumption so as not to increase the expenditure is:</p>
[<sup>R</sup>&frasl;<sub>(100 + R)</sub>x 100]%
<p>If the price of a commodity decreases by R%, then the increase in consumption so as not to decrease the expenditure is:</p>
[<sup>R</sup>&frasl;<sub>(100 - R)</sub>x 100]%
<h2>Population</h2>
<p>The population of a city is P and let it increases at the rate of R% per annum:</p>
<p>Population after t years: P(1 + <sup>R</sup>&frasl;<sub>100</sub>)<sup>t</sup></p>
<p>Population t years ago: <sup>P</sup>&frasl;<sub>(1 + <sup>R</sup>&frasl;<sub>100</sub>)<sup>t</sup></sub> </p>
<h2>Depreciation</h2>
<p>Let V be the present value of machine. Suppose it depreciates at the rate of R% per annum:</p>
<p>Machine's value after t years:P(1 - <sup>R</sup>&frasl;<sub>100</sub>)<sup>t</sup></p>
<p>Machine's value t years ago: <sup>P</sup>&frasl;<sub>(1 - <sup>R</sup>&frasl;<sub>100</sub>)<sup>t</sup></sub></p>
<ul class="list">
<li><p><b>If P is R% more than Q, then Q is less than P by how many percent?</b></p><br />
[<sup>R</sup>&frasl;<sub>(100 + R)</sub>x 100]%
</li> 
<li><p><b>If P is R% more than Q, then Q is more than P by how many percent?</b></p><br />
[<sup>R</sup>&frasl;<sub>(100 - R)</sub>x 100]%
</li>
</ul>

</div>
<div id="c4" class="tabcontent">
<h1>Number System - Ratios</h1>

<hr />
<h2>Ratio</h2>
<p>Ratio represents the proportion in which a number contains another number.  A ratio is represented by a/b or a:b. The duplication or division of every term of a proportion by the same non zero number does not influence the proportion.Subsequently, 3:5 is the same as 6:10 or 9:15 or 12:20 and so on.</p>
<h2>Extent</h2>
<p>The fairness of two proportions is called extent. As 2:3 = 6:9, we compose, 2:3::6:9 and we can say that 2,3,6,9 are in extent . Here 2 and 9 are called extremes while 3 and 6 are called implies.</p>
<p>In an extent, result of extremes=product of means.</p>
<h2>Fourth Relative</h2>
<p>if a:b::c:d, then d is known as the fourth relative to a,b and c. </p>
<h2>Third Relative</h2>
<p>if a:b::c:d, then c is known as the third relative to a and b. </p>
<h2>Mean Relative</h2>
<p>Mean relative is the middle of a and b. </p>
</p>

</div>
<div id="c5" class="tabcontent">
<h1>Aptitude - HCF and LCM</h1>

<h2>Factors and Multiples</h2>
<p>If a number P divides another number Q exactly, we say that P is a factor of Q i.e. Q is a multiple of P.</p>
<h2>H.C.F</h2>
<p>The H.C.F of two or more than two numbers is the greatest number that divides each of them exactly.</p>
<h2>L.C.M</h2>
<p>The least number which is exactly divisible by each one of the given numbers is called their L.C.M</p>
<h2>Product of two numbers</h2>
<p>Product of their H.C.F and L.C.M</p>
<h2>Co-primes</h2>
<p>Two numbers are co-primes if their H.C.F is 1.</p>
<h2>H.C.F and L.C.M of fractions</h2>
<ol class="list">
<li>H.C.F = <sup>H.C.F of Numerators</sup>&frasl;<sub>L.C.M of Denominators</sub></li>
<li>L.C.M = <sup>L.C.M of Numerators</sup>&frasl;<sub>H.C.F of Denominators</sub></li>
</ol>
</div>
<div id="c6" class="tabcontent">
<h1>Number System - Discounts</h1>

<p>Suppose a man has to pay Rs. 156 after 4 years and the rate of interest is 14% per annum. Clearly, Rs. 100 at 14% will amount to R. 156 in 4 years. So, the payment of Rs. now will clear off the debt of Rs. 156 due 4 years hence. We say that:</p>
<p>Sum due = Rs. 156 due 4 years hence;</p>
<p>Present Worth (P.W.) = Rs. 100;</p>
<p>True Discount (T.D.) = Rs. (156 - 100) = Rs. 56 = (Sum due) - (P.W.)</p>
<p>We define: T.D. = Interest on Present Worth;     <b>Amount = Present Worth + True Discount</b></p>
<p>Interest is reckoned on P.W. and true discount is reckoned on the amount.</p>
<h2>Important Formulae</h2>
<p>Let rate = R% per annum and Time = T years. Then,</p>
<pre class="prettyprint notranslate">
P.W. =	(100 x Amount) / (100 + (R x T)) 
 = (100 x T.D.)/ (R x T)
</pre>
<pre class="prettyprint notranslate">
T.D. = (P.W. x R x T) / 100
 = (Amount x R x T) / (100 + (R x T))	
</pre>
<pre class="prettyprint notranslate">
Sum = (S.I. x T.D.) / (S.I. - T.D.)
</pre>
<pre class="prettyprint notranslate">
S.I. - T.D.  = S.I. on T.D.
</pre>
<pre class="prettyprint notranslate">
When the sum is put at compound interest, then 
P.W. = Amount/ (1+R/100)<sup>T</sup>
</pre></div>

<div id="c7" class="tabcontent"><h1>Reasoning - Alpha Numeric Sequence</h1>
<section class="toggle">
<label>Introduction</label>
<div class="toggle-content">
<p>Alphanumeric sequence is an important chapter in reasoning and the questions on this subject are asked in almost all the competitive exams. Alphanumeric sequence is a sequence which consists of both alphabets and numbers. In this sequence, we can also add some symbols along with alphabets and numbers.</p>
<p>For example we can make an alphanumeric sequence as follows &minus;</p>
<p>A   $   E   R   9   *   T   5   F   6   @   D   8</p>
<p>In the above sequence, we can see that there are numbers, alphabets, and symbols. These types of sequences are called <b>alphanumeric sequence</b>. We can make many sequences like this and can deduce questions based on the sequences.</p>
<p>Important Points to Remember</p>
<p style="padding-left:10%">Let’s have an alphanumeric sequence &minus;</p>
<p style="padding-left:10%">A   $   E   R   9   *   T   5   F   6   @   D   8</p>
<p>Questions regarding this chapter can come in this way &minus;</p>
<p>a. Which element is n<sup>th</sup> from the left of the sequence?</p>
<p>b. Which element is n<sup>th</sup> from the right of the sequence?</p>
<p>c. Which element is m<sup>th</sup> to the right of n<sup>th</sup> from the left of the sequence?</p>
<p>d. Which element is m<sup>th</sup> to the left of n<sup>th</sup> from the left of the sequence?</p>
<p>e. Which element is m<sup>th</sup> to the right of n<sup>th</sup> from the right of the sequence?</p>
<p>f. Which element is m<sup>th</sup> to the left of n<sup>th</sup> from the right of the sequence?</p>
<p>g. A precedes B</p>
<p>h. B is preceded by A</p>
<p>i. B follows A</p>
<p>j. A is followed by B</p>
<p>To solve questions like this, we have to watch the sequence thoroughly and answer accordingly.</p>
<p>a. Which element is n<sup>th</sup> from the left of the sequence?</p>
<p style="padding-left:5%">To get the answer of the above question, we have to look at the sequence from the left side and have to count the exact number that is asked in the question.</p>
<p>b. Which element is n<sup>th</sup> from the right of the sequence?</p>
<p style="padding-left:5%">To get the answer of the above question, we have to look at the sequence from the right side and have to count the exact number that is asked in the question.</p>
<p>c. Which element is m<sup>th</sup> to the right of n<sup>th</sup> from the left of the sequence?</p>
<p style="padding-left:5%">To get the answer for such type of questions, we have to find out the n<sup>th</sup> element from the left side of the sequence and then find out the m<sup>th</sup> element to the right of that particular element.</p>
<p>d. Which element is m<sup>th</sup> to the left of n<sup>th</sup> from the left of the sequence?</p>
<p style="padding-left:5%">To get the answer for such type of questions, we have to find out the n<sup>th</sup> element from the left side of the sequence and then find out the m<sup>th</sup> element to the left of that particular element.</p>
<p>e. Which element is m<sup>th</sup> to the right of n<sup>th</sup> from the right of the sequence?</p>
<p style="padding-left:5%">To get the answer for such type of questions, we have to find out the n<sup>th</sup> element from the right side of the sequence and then find out the m<sup>th</sup> element to the right of that particular element.</p>
<p>f. Which element is m<sup>th</sup> to the left of n<sup>th</sup> from the right of the sequence?</p>
<p style="padding-left:5%">To get the answer for such type of questions, we have to find out the n<sup>th</sup> element from the right side of the sequence and then find out the m<sup>th</sup> element to the left of that particular element.</p>
<p>g. If it is written that A precedes B then it means A is placed before B.</p>
<p>h. Similarly if it is written that B is preceded by A then it means A is placed <span style="padding-left:4%">before B</span>.</p>
<p>i. If it is written that B follows A then it means B is placed after A.</p>
<p>j. If it is written that A is followed by B then B is placed after A.</p>
<p>These ten type of questions are normally asked in this chapter. Whether it is of a type or b type or c type or j type we have to read the question carefully and see the sequence and finally we can get the answer according to the question.</p>
</div>
</section>
<section class="toggle">
<label>Samples</label>
<div class="toggle-content">
<p>A   F   %   5   G   H   &amp;   8   Y   6   3   N   M   *   !   H   8</p>
<p><b>1</b> - Which element is 3<sup>rd</sup> to the right of 5<sup>th</sup> from left?</p>
<p><b>Options</b> &minus;</p>
<p style="padding-left:3%"><b>A</b> - &amp;</p>
<p style="padding-left:3%"><b>B</b> - 8</p>
<p style="padding-left:3%"><b>C</b> - 6</p>
<p style="padding-left:3%"><b>D</b> - 3</p>
<p><b>Answer</b> &minus; Option B</p>
<p><b>Explanation</b> &minus;</p>
<p>By observing the sequence, we can get that 8 is the required element at the required place, hence, option b is correct.</p>
<p><b>2</b> - How many numbers are there which are immediately preceded by a symbol and followed by a consonant?</p>
<p><b>Options</b> &minus;</p>
<p style="padding-left:3%"><b>A</b> - One</p>
<p style="padding-left:3%"><b>B</b> - Two</p>
<p style="padding-left:3%"><b>C</b> - Three</p>
<p style="padding-left:3%"><b>D</b> - None</p>
<p><b>Answer</b> &minus; Option B</p>
<p><b>Explanation</b> &minus;</p>
<p>Only two are possible and they are: % 5 G and &amp; 8 Y.</p>
<p><b>3</b> - Which element is 4<sup>th</sup> to the left of 5<sup>th</sup> from right?</p>
<p><b>Options</b> &minus;</p>
<p style="padding-left:3%"><b>A</b> - 8</p>
<p style="padding-left:3%"><b>B</b> - 6</p>
<p style="padding-left:3%"><b>C</b> - 3</p>
<p style="padding-left:3%"><b>D</b> - Y</p>
<p><b>Answer</b> &minus; Option D</p>
<p><b>Explanation</b> &minus;</p>
<p>Y is the required element. Hence option D.</p>
</div>
</section>
<hr />  
<h1>Reasoning - Analogy</h1>

<section class="toggle">
<label>Introduction</label>
<div class="toggle-content">
<p>If the relationship between one pair of words is similar to another pair of words then we say that both the pair of words is analogous to each other. In simple words, the relationship between two words must be same for other words associated with them too.</p>
<p><b>For Example</b> &minus;</p>
<p>Devotee: Temple and Patient: Hospital is a parallel pair of words because they have similar kind of relationship between them. As devotees go to temple; patients go to hospital.</p>
<p><b>Note</b> &minus;</p>
<p>In this section we have to analyze the relationship between two given pairs and find the relationship between other two pairs among which one is given in the question and other one will be present in the options.</p>
</div>
</section>
<section class="toggle">
<label>Types of Analogy</label>
<div class="toggle-content">
<p>Analogy can be categorized into following two types &minus;</p>
<ul class="list">
<li>Words Analogy</li>
<li>Number Analogy</li>
</ul>
<p>Word analogy again can be reclassified into following two sections &minus;</p>
<ul class="list">
<li>Meaningful Words</li>
<li>Non- Meaningful Words</li>
</ul>
</div>
</section>
<section class="toggle">
<label>Kinds of Word Relationship</label>
<div class="toggle-content">
<p>First find the relationship between the two given words and once you find that, go for finding the similar relationship word for the asked word from the given options.</p>
<h2>Opposite Relationship</h2>
<p>If two given pairs are opposite in meaning to each other, similar kind of relationship has to chosen for the question pair from the given options.</p>
<p><b>For Example</b> &minus;</p>
<p style="padding-left:5%">Kinetic : Potential</p>
<p style="padding-left:5%">Fat : Thin</p>
<h2>Synonymous Relationship</h2>
<p>The two words of the question pairs are similar in meaning and that relationship has to be found among the words given in the answer choice word pair.</p>
<p><b>For Example</b> &minus;</p>
<p style="padding-left:5%">Huge : Big</p>
<p style="padding-left:5%">Slim : Thin</p>
<h2>Cause and Effect</h2>
<p>Here if one word will be the cause then other will be its effect.</p>
<p style="padding-left:5%">Fire : Death</p>
<p style="padding-left:5%">Fasting : Starvation</p>
<h2>Worker and Article Relationship</h2>
<p>Here the relationship is about the maker or producer with its production.</p>
<p><b>For Example</b> &minus;</p>
<p style="padding-left:5%">Writer : Novel</p>
<p style="padding-left:5%">Artist : Painting</p>
<h2>Worker and Tool Relationship</h2>
<p>Relationship is among a particular class of people and the tools used by them.</p>
<p><b>For Example</b> &minus;</p>
<p style="padding-left:5%">Student : Pen</p>
<p style="padding-left:5%">DTP Operator : Computer</p>
<h2>Tool and Object Relationship</h2>
<p>It describes the relationship between the tool and its corresponding object.</p>
<p style="padding-left:5%">Paint : Wall</p>
<p style="padding-left:5%">Knife : Vegetables</p>
</div>
</section>
<section class="toggle">
<label>Number Analogy</label>
<div class="toggle-content">
<p>There will be certain relationship among the first two numbers. We have to find that and accordingly solve the question.</p>
<p><b>For Example</b> &minus;</p>
<p><b>Question</b> &minus; 4:8:: 16:</p>
<p style="padding-left:5%"><b>A</b> - 21</p>
<p style="padding-left:5%"><b>B</b> - 19</p>
<p style="padding-left:5%"><b>C</b> - 32</p>
<p style="padding-left:5%"><b>D</b> - 51</p>
<p><b>Answer</b> &minus; Option C</p>
<p><b>Explanation</b> &minus;</p>
<p>Here either 4 + 4 = 8 or 4 &times; 2 = 8. Following the similar fashion, our answers should be either 16 + 4 = 20 or 16 + 16 = 32.</p>
<p>As 20 is not there but 32 is there, hence it is the correct answer.</p>
<p>Similarly some other similar kinds of analogies are &minus;</p>
<ul class="list">
<li>Whole and part analogy</li>
<li>Intensity relationship</li>
<li>Classification relationship</li>
<li>Functional analogy</li>
<li>Gender analogy</li>
<li>Sequential analogy</li>
<li>Quantity and unit analogy</li>
<li>Utility analogy</li>
<li>Symbolic analogy</li>
<li>Association analogy</li>
<li>Age analogy</li>
<li>Characterization analogy etc</li>
</ul>
</div>
</section>
<hr />
<h1>Reasoning - Analytical</h1>

<section class="toggle">
<label>Introduction</label>
<div class="toggle-content">
<p>Analytical reasoning deals with variety of information. Based on some particular conditions, there will be various logical puzzles and we need to solve them.</p>
<p>Questions are given in a complex format. We have to analyse it and convert it into the simpler form. Each question will be followed by four or five options. We have to choose the correct one. To determine the true statement, we have to apply a set of rules and facts.</p>
</div>
</section>
<section class="toggle">
<label>Types of Analytical Reasoning</label>
<div class="toggle-content">
<p>There are following types of analytical reasoning &minus;</p>
<ul class="list">
<li>Seating Arrangements</li>
<li>Ranking</li>
<li>Combinations</li>
<li>Relations</li>
<li>Sequencing</li>
<li>Comparisons</li>
<li>Selections</li>
<li>Grouping</li>
</ul>
</div>
</section>
<section class="toggle">
<label>Techniques Used to Solve Problems</label>
<div class="toggle-content">
<p>The following steps are used to solve questions based on analytical reasoning.</p>
<ul class="list">
<li><p>Initial step will be to analyse the question through a careful reading then gather the information.</p></li>
<li><p>Arrange the information in table, charts or maps.</p></li>
<li><p>Statements with sufficient information will be your first target.</p></li>
<li><p>Use your key signal points such as arrow, pointers etc. to specify certain information.</p></li>
<li><p>Handle maximum two variables in a go.</p></li>
</ul>
<p>Diagrams and operators used in solving questions are &minus;</p>
<ul class="list">
<li>Equations</li>
<li>Diagrams &amp; Notations</li>
<li>Venn Diagrams</li>
<li>Grouping Game Diagrams</li>
<li>Table Representations</li>
<li>Math Operators</li>
<li>Line-up Representations</li>
<li>Basic Linear Sequence Game Set-up</li>
<li>If-Then Notations</li>
</ul>
<div class="QA">
<div id="Q1" class="Q">
<p>Example 1</p>
<p style="font-weight:normal ! important;">Questions given below are based upon some conditions. Use rough diagrams for reference and choose the corresponding option.</p>
<p>Passage for Question</p>
<p style="font-weight:normal ! important;">A committee is formed to reduce the expense on some areas — G, L, M, N, P, R, S, and W with the following conditions:</p>
<ul class="list">
<li>If both G and S are lowered, W is also lowered.</li>
<li>If N is lowered, neither R nor S is lowered.</li>
<li>If P is lowered, L is not lowered.</li>
<li>Of the three areas L, M, and R, exactly two are lowered.</li>
</ul>
<p>Question</p>
<p><span>Q 1</span> &minus; If both M and R are lowered, which of the following pairs of areas are not lowered?</p>
<p><a class="false" href="javascript:void(0);"><span>A</span> - G, L</a></p>
<p><a class="false" href="javascript:void(0);"><span>B</span> - G, N</a></p>
<p><a class="true" href="javascript:void(0);"><span>C</span> - L, N</a></p>
<p><a class="false" href="javascript:void(0);"><span>D</span> - L, P</a></p>
<p><a class="false" href="javascript:void(0);"><span>E</span> - P, S</a></p>
</div>
<div id="A1" >
<p><b>Answer - C</b></p>
<p><b>Explanation</b></p>
<p>This question indicates that M and R will be lowered.</p>
<p>The fourth condition indicates that exactly any two of M, R, and L are to be lowered. Since both M and R are lowered, L must not be lowered.</p>
<p style="padding-left:5%">Lowered: M, R</p>
<p style="padding-left:5%">Not lowered: L</p>
<p>The second condition shows, if N is lowered, neither R nor S is lowered. So N and R cannot both be lowered. As R is lowered, N cannot be lowered.</p>
<p style="padding-left:5%">Lowered: M, R</p>
<p style="padding-left:5%">Not lowered: L, N</p>
</div>
</div>
</div>
</section>
<hr />  
<h1>Reasoning - Arithmetical</h1>

<section class="toggle">
<label>Introduction</label>
<div class="toggle-content">
<p>Arithmetical reasoning contains calculation with special sense of reasoning. This reasoning chapter normally contains all the chapters from quantitative aptitude. So, it is one of the most interesting chapters in reasoning, because it contains both aptitude and reasoning. Arithmetic reasoning may contain the following chapters of aptitude &minus;</p>
<ul class="list">
<li>Time and work</li>
<li>Time, speed, and distance</li>
<li>Simple interest</li>
<li>Compound interest</li>
<li>Percentage</li>
<li>Profit and loss</li>
<li>Number system</li>
<li>Average</li>
<li>Ratio and proportion</li>
</ul>
<p>Let’s explain a little bit of each type arithmetic reasoning under this heading &minus;</p>
<p><b>Time and work</b> &minus; Problems on time and work will be of normal men work and men women work type problems. In such type of questions, we have to bring the number to 1 always. If it is given that 5 men can do a certain work in 10 days, and after this data it is mentioned that 10 men can take how many days to do the work then at first we have to find that, 1 man can do the job in how many days and then we can proceed further.</p>
<p><b>Time speed and distance</b> &minus; For problems regarding this chapter, there is one formula which we can use in this context i.e. distance = time x speed.</p>
<p><b>Simple interest</b> &minus; If P is taken as principal, R is taken as rate of interest, T is taken as time, and I is taken as interest then the relationship between them is</p>
<p style="padding-left:20%">I = (P x T x R) / 100</p>
<p><b>Compound Interest</b> &minus; If P is principal, R is rate, amount is A and time is n years then if interest is &minus;</p> 
<p>Compounded annually : A = P (1 + R/100)<sup>n</sup></p>
<p>Compounded half yearly : A = P [1 + (R/2)/100]<sup>2n</sup></p>
<p>Compounded quarterly : A = P [1+(R/4)/100]<sup>4n</sup></p>
<p><b>Percentage</b> &minus; If it is mentioned that at a certain percent, it will be meant that many hundredths. Thus if we say a percent it means a hundredths, and will be written as a %.</p>
<p><b>Profit and loss</b> &minus; Profit = sale price – cost price and %profit = (profit x 100) / cost price</p>
<p><b>Average</b> &minus; The average is a measure of central point of a set of numbers. It is an estimation of where the centre point or weight of a set of number lies.</p>
<p>$Average = \frac{Sum \: of \: sets \: of \: N \: numbers}{N}$</p>
<p>$Weighted \: average = \frac{Sum \: of \: observations \times \: weight}{Sum \: of \: weights}$</p>
<p><b>Number system</b> &minus; It is very important in arithmetical reasoning to know about the numbers. It is considered as backbone of mathematics.</p>
<ul class="list">
<li><p><b>Natural Numbers</b> &minus; Natural numbers are called as counting numbers and are represented as 1, 2 , 3, 4, 5, 6,…</p></li>
<li><p><b>Whole Numbers</b> &minus; Whole numbers are those numbers which start from 0 to infinity. i.e. 0, 1, 2 …</p>
<p>0 is not a natural number.</p></li>
<li><p><b>Integers</b> &minus; If we connect positive numbers and negative numbers with zero then we got integers. Also we can define integers as negative numbers + whole numbers. i.e. {..., - 3, - 2, - 1, 0, 1, 2, 3, …}</p></li>
</ul>
<p>There are also even numbers and odd numbers. An even number is that number which can be divided by 2 and an odd number is that number which cannot be divided by 2.</p>
<p>A prime number is that number which can be divided by only two numbers that is 1 and the number itself. The smallest prime number is 2. Other prime numbers under 50 are, 2, 3, 5, 7, 11, 13, 17, 19, 23, 29, 31, 37, 41, 43 and 47.</p>
</div>
</section>
<section class="toggle">
<label>Samples</label>
<div class="toggle-content">
<p><b>1</b> - Govt. has decided to connect Tripura and Delhi via a train service which is called ‘Tripura Sundari Express’ Two trains are running from Tripura and Delhi towards each other. Train from Tripura in covering a distance of 60 km takes 2 hours more than that of the train from Delhi. If Tripura train doubles its speed, then it would take 1 hour less than that of Delhi. Tripura train’s speed is?</p>
<p><b>Options</b> &minus;</p>
<p style="padding-left:3%"><b>A</b> - 5</p>
<p style="padding-left:3%"><b>B</b> - 10</p>
<p style="padding-left:3%"><b>C</b> - 7</p>
<p style="padding-left:3%"><b>D</b> - 8</p>
<p><b>Answer</b> &minus; Option B</p>
<p><b>Explanation</b> &minus; Let Tripura train's speed be X km/hr.</p>
<p>Then, 60/x - 60/2x = 3</p>
<p>6x = 60</p>
<p>x = 10 km/hr.</p>
<p><b>2</b> - Creative constructors has hired some workers from Bihar. From those newly appointed workers if 10 men working 6 hours a day can do a work in 20 days. Then 8 men working 10 hours a day can do it in how many days?</p>
<p><b>Options</b> &minus;</p>
<p style="padding-left:3%"><b>A</b> - 15</p>
<p style="padding-left:3%"><b>B</b> - 14</p>
<p style="padding-left:3%"><b>C</b> - 17</p>
<p style="padding-left:3%"><b>D</b> - 18</p>
<p><b>Answer</b> &minus; Option A</p>
<p><b>Explanation</b> &minus; 10 men work for 6 hours so total 60 hours and work is done in 20 days. 8 men working 10 hours means total 80 hours and the work will be completed in = (60 x 20)/80 = 15 days.</p>
<p><b>3</b> - Riyaz and Saqlain are two workers and they work for GPR pumps and pipes. Riyaz is twice as good a workman as Saqlain and together Riyaz and Saqlain finish a piece of work in 20 days. In how many days will Riyaz alone finish the work?</p>
<p><b>Options</b> &minus;</p>
<p style="padding-left:3%"><b>A</b> - 90</p>
<p style="padding-left:3%"><b>B</b> - 66</p>
<p style="padding-left:3%"><b>C</b> - 30</p>
<p style="padding-left:3%"><b>D</b> - 29</p>
<p><b>Answer</b> &minus; Option C</p>
<p><b>Explanation</b> &minus; If Riyaz takes x days to do a work then Saqlain takes 2x days to do the same work.</p>
<p>1/x + 1/2x = 1/20</p>
<p>3/2x = 1/20</p>
<p>x = 30 days</p>
<p>Hence, Riyaz alone can finish the work in 30 days.</p>
</div>
</section>
<hr /> 
<h1>Reasoning - Artificial Language</h1>

<section class="toggle">
<label>Introduction</label>
<div class="toggle-content">
<p>Artificial language is a part of analytical reasoning where decoding of the meaning of some artificial language is the main task. Some predefined artificial languages with their meaning will be given in advance. By referring to that, we have to decode the original meaning of an artificial word from the given options.</p>
<p>Question can be asked from various angles. For example, examiner can provide original word and can ask the student to choose the artificial word from the given options. Though the procedure is not difficult but needs a careful attention while solving.</p>
<p>Students are advised to go through the sample examples to have a clear idea about the solving procedure. Then go through the quiz section. To have a further grasp upon the chapter, practise the working exercise module. The detailed explanation to each question will help you to cross verify your understanding over the subject matter.</p>
</div>
</section>
<section class="toggle">
<label>Samples</label>
<div class="toggle-content">
<p><i>If <span style="padding-left:3%"> fenplac means filmy holiday</i></p>
<p style="padding-left:5%"><i>Placston means holiday beach</i></p>
<p style="padding-left:5%"><i>Stonrum means beach perform</i></p>
<p style="padding-left:5%"><i>Rumfen means perform filmy</i></p>
<p><b>1</b> - Which word means holiday?</p>
<p><b>Options &minus;</b></p>
<p style="padding-left:3%"><b>A</b> - Plac</p>
<p style="padding-left:3%"><b>B</b> - Rum</p>
<p style="padding-left:3%"><b>C</b> - Ston</p>
<p style="padding-left:3%"><b>D</b> - Fen</p>
<p><b>Answer &minus;</b> Option A</p>
<p><b>Explanation &minus;</b></p>
<p>To solve this question first of all find the sentences in which the word <b>Holiday</b> is present. If we will look at the <b>first</b> and <b>second</b> sentences, we can see the common word <b>Holiday</b> is present. Now our next step will be to search for the common code that is present in these two sentences. We can see <b>Plac</b> is the common code. Hence our required answer is option <b>A</b>.</p>
<p><b>2</b> - Which word means filmy?</p>
<p><b>Options &minus;</b></p>
<p style="padding-left:3%"><b>A</b> - Plac</p>
<p style="padding-left:3%"><b>B</b> - Rum</p>
<p style="padding-left:3%"><b>C</b> - Ston</p>
<p style="padding-left:3%"><b>D</b> - Fen</p>
<p><b>Answer &minus;</b> Option D</p>
<p><b>Explanation &minus;</b></p>
<p>To solve this question, first of all find two sentences in which the word <b>Filmy</b> is present. If we will look at the <b>first</b> and <b>fourth</b> sentences, we can see the common word <b>Filmy</b> is present. Now our next step will be to search for the common code that is present in these two sentences. We can see <b>Fen</b> is the common code. Hence our required answer is option <b>D</b>.</p>
<p><b>3</b> - Which word means Beach?</p>
<p><b>Options &minus;</b></p>
<p style="padding-left:3%"><b>A</b> - Plac</p>
<p style="padding-left:3%"><b>B</b> - Rum</p>
<p style="padding-left:3%"><b>C</b> - Ston</p>
<p style="padding-left:3%"><b>D</b> - Fen</p>
<p><b>Answer &minus;</b> Option C</p>
<p><b>Explanation &minus;</b></p>
<p>To solve this question, first of all find the sentences in which the word <b>Beach</b> is present. If we will look at the <b>second</b> and <b>third</b> sentences, we can see the common word <b>Beach</b> is present. Now our next step will be to search for the common code that is present in these two sentences. We can see <b>Ston</b> is the common code. Hence our required answer is option <b>C</b>.</p>
</div>
</section>
<hr />    
<h1>Assertion and Reasoning</h1>

<section class="toggle">
<label>Introduction</label>
<div class="toggle-content">
<p>In this chapter, we will be given an assertion followed by a reason to support it. We have to judge the truth of both the sentences and have to ensure that whether the reason given truly supports the assertion or not.</p>
<p>Assertion is denoted as “A” in the option in the short form and similarly, reason will be shown as “R” in the answering options. The options will have following variety &minus;</p>
<p><b>Options &minus;</b></p>
<p><b>A</b> - Both A and R are true and R is the correct explanation of A.</p>
<p><b>B</b> - Both A and R are true but R is NOT the correct explanation of A.</p>
<p><b>C</b> - A is true but R is false.</p>
<p><b>D</b> - A is false but R is true.</p>
<p><b>E</b> - Both A and R are false</p>
<p>When both the assertion and reason are true and reason supports the statement given in the assertion correctly, then option A will be our answer. On the other hand if the assertion and reason both are individually true but the reason does not support the statement given in the assertion correctly, then our answer will be option B.</p>
<p>Sometimes the assertion is true and reason is false or vice versa. In this case our option will be C or D respectively. In some cases, the assertion and reason both are false. In that case option E will be our answer.</p>
</div>
</section>
<section class="toggle">
<label>Samples</label>
<div class="toggle-content">
<p>Let’s take some sample examples to clear our understanding.</p>
<p><b>Example-1</b></p>
<p>Assertion (A): The body structure of the fish is in streamline manner.</p>
<p>Reason (R): It helps the fish to find its way inside the water.</p>
<p><b>Options &minus;</b></p>
<p><b>A</b> - Both A and R are true and R is the correct explanation of A.</p>
<p><b>B</b> - Both A and R are true but R is NOT the correct explanation of A.</p>
<p><b>C</b> - A is true but R is false.</p>
<p><b>D</b> - A is false but R is true.</p>
<p><b>E</b> - Both A and R are false.</p>
<p>Now consider the above example carefully. Here our first step will be to judge the truth of both the sentences. The assertion is correct as fish is living in water, so its body is designed in a streamline manner. Coming to the reason part, this is also correct as the streamline structure of the fish helps it to find its way inside the water.</p>
<p>Now, it is time to judge whether the reason gives a true explanation of the assertion or not. Yes it gives a true explanation of the assertion. Hence we can say that the assertion and reason both are correct and reason is the correct explanation of assertion. Hence our answer option will be A.</p>
<p><b>Example-2</b></p>
<p>Assertion (A): If the weather is hot and humid, we feel more comfortable.</p>
<p>Reason (R): If the climate is humid, the evaporation of the sweat is faster.</p>
<p><b>Options &minus;</b></p>
<p><b>A</b> - Both A and R are true and R is the correct explanation of A.</p>
<p><b>B</b> - Both A and R are true but R is NOT the correct explanation of A.</p>
<p><b>C</b> - A is true but R is false.</p>
<p><b>D</b> - A is false but R is true.</p>
<p><b>E</b> - Both A and R are false.</p>
<p>Now consider the above example carefully. Here our first step will be to judge the truth of both the sentences. The assertion is not correct as we all know that when the weather is humid, we do not feel comfortable. Hence option A or B or C cannot be our answer. Now, let’s come to the reason part. This is also not correct as it takes longer time for the sweat to evaporate if the weather is humid.</p>
<p>Hence we know from the above discussion that both assertion and reason are incorrect. Therefore option E will be our answer.</p>
</div>
</section>
<hr /> 
<h1>Reasoning - Blood Relationship</h1>

<section class="toggle">
<label>Introduction</label>
<div class="toggle-content">
<p>In blood relation test, questions are asked about the blood relations of a group of persons or a small family or between two to three people. In these type of questions, an examiner normally checks the ability of a candidate to correlate different relationships. These questions are normally very tricky as we have to concentrate on each and every single statement and words in the question. After understanding the question, we have to make a clear picture of the well-defined blood relations in the question by comparing with our self so that we can easily find the answers to the questions.</p>
</div>
</section>
<section class="toggle">
<label>Sample Example</label>
<div class="toggle-content">
<p><i>Mohapatra family is very famous for their shopping malls. The owner of house is Umesh Mohapatra. He has two sons. Their names are Rakesh and Rohit Mohapatra. Rakesh is married to Shriti. Soumya is father-in-law of Rakesh and Shilpa is sister of Shriti. Shilpa’s mother’s name is Sujata. Chintu is nephew of Rohit. Rohit’s mother is Gita.</i></p>
<p><b>1</b> - What is relationship between Chintu and Rakesh?</p>
<p><b>Options</b> &minus;</p>
<p style="padding-left:3%"><b>A</b> - Son-father</p>
<p style="padding-left:3%"><b>B</b> - Father-son</p>
<p style="padding-left:3%"><b>C</b> - Brother</p>
<p style="padding-left:3%"><b>D</b> - Cousins</p>
<p><b>Answer</b> &minus; Option A</p>
<p><b>Explanation</b> &minus; As Chintu is nephew of Rohit so he must be Rakesh’s son.</p>
<p><b>2</b> - How is Shilpa related to Rakesh?</p>
<p><b>Options</b> &minus;</p>
<p style="padding-left:3%"><b>A</b> - Sister</p>
<p style="padding-left:3%"><b>B</b> -  Sister-in-law</p>
<p style="padding-left:3%"><b>C</b> - Cousin</p>
<p style="padding-left:3%"><b>D</b> - Mother</p>
<p><b>Answer</b> &minus; Option B</p>
<p><b>Explanation</b> &minus; Shilpa is Shriti’s sister, so option B is correct.</p>
<p><b>3</b> - How is Gita related to Shriti?</p>
<p><b>Options</b> &minus;</p>
<p style="padding-left:3%"><b>A</b> - Mother</p>
<p style="padding-left:3%"><b>B</b> - Sister</p>
<p style="padding-left:3%"><b>C</b> - Aunt</p>
<p style="padding-left:3%"><b>D</b> - Mother-in-law</p>
<p><b>Answer</b> &minus; Option D</p>
<p><b>Explanation</b> &minus; Option D is correct because she is mother of her husband.</p>
</div>
</section>
<hr /> 
 </div>

<div id="c8" class="tabcontent">
<P class="p0 ft0">ANALOGY</P>
<P class="p1 ft1">EXERCISE A</P>
<P class="p2 ft2">Directions: In each of the following questions,there is a certain relationship between two given words</P>
<P class="p3 ft2">on one side of : : and one word is given on another side of : :while another word is to be found from the given alternatives,having the same relation with this word as the words of the given pair bear. Choose the correct alternative.</P>
<P class="p4 ft1">1 . Moon : Satellite : : Earth :?</P>
<P class="p5 ft1">(A) Sun (B) Planet (C)Solar System (D) Asteroid</P>
<P class="p5 ft1">Ans: (B)</P>
<P class="p6 ft1">Explanation: Moon is a satellite and Earth is a Planet .</P>
<P class="p7 ft1">2 . Forecast : Future : : Regret :?</P>
<P class="p5 ft1">(A) Present (B) Atone (C)Past (D)Sins</P>
<P class="p5 ft1">Ans: (C)</P>
<P class="p8 ft1">Explanation: Forecast is for Future happenings and Regret is for past actions .</P>
<P class="p7 ft1">3. Influenza : Virus : : Typhoid : ?</P>
<P class="p9 ft1">(A) Bacillus (B)Parasite (C)Protozoa (D) Bacteria Ans: (D)</P>
<P class="p5 ft1">Explanation: First is the disease caused by the second .</P>
<P class="p8 ft1">4. Fear : Threat : : Anger : ?</P>
<P class="p10 ft1">(A)Compulsion (B)Panic (C)Provocation (D)Force Ans: (C)</P>
<P class="p5 ft1">Explanation: First arises from the second .</P>
<P class="p8 ft1">5. Melt : Liquid : : Freeze : ?</P>
<P class="p11 ft1">(A)Ice (B)Condense (C)Solid (D)Crystal Ans: (C)</P>
<P class="p5 ft1">Explanation: First is the process of formation of the second .</P>
<P class="p8 ft1">6. Clock : Time : : Thermometer : ?</P>
<P class="p12 ft1">(A)Heat (B)Radiation (C)Energy (D)Temperature Ans: (D)</P>
<P class="p5 ft1">Explanation: First is an instrument used to measure the second .</P>
<P class="p8 ft1">7. Muslim : Mosque : : Sikhs : ?</P>
<P class="p13 ft1">(A)Golden Temple (B)Medina (C)Fire Temple (D)Gurudwara Ans: (D)</P>
<P class="p5 ft1">Explanation: Second is the pace of worship for the first</P>
<P class="p8 ft1">. 8. Paw : Cat : : Hoof : ?</P>
<P class="p11 ft1">(A)Horse (B)Lion (C)Lamb (D)Elephant Ans: (A)</P>



<P class="p5 ft1">Explanation: First is the name given to the foot of the second .</P>
<P class="p7 ft1">9. Eye :Myopia : : Teeth : ?</P>
<P class="p14 ft1">(A)Pyorrhea (B)Cataract (C)Trachoma (D)Eczema Ans: (A)</P>
<P class="p5 ft1">Explanation: Second is a disease of the first</P>
<P class="p5 ft1">.</P>
<P class="p15 ft1">10. Tractor : Trailer : : Horse : ? (A)Stable (B)Cart (C)Saddle (D)Engine Ans: (B)</P>
<P class="p4 ft1">Explanation: Second is pulled by the first</P>
<P class="p16 ft1">. 11. Scribble : Write : : Stammer : ? (A)Walk (B)Play (C)Speak (D)Dance Ans: (C)</P>
<P class="p5 ft1">Explanation: First is an improper form of the second</P>
<P class="p5 ft1">.</P>
<P class="p5 ft1">12. Flower : Bud : : Plant : ?</P>
<P class="p17 ft1">(A) Seed (B)Taste (C)Flower (D)Twig Ans: (A)</P>
<P class="p18 ft1">Explanation: First develop from the second . 13. Errata : Books : : flaws:?</P>
<P class="p19 ft1">(A)Manuscripts (B)Metals (C)Speech (D)Charter Ans: (B)</P>
<P class="p20 ft1">Explanation: Errata comprises from the books.Similarly, Flaws are the defects in the metals.</P>
<P class="p21 ft1">14. Gun : Bullet : : Chimney : ? (A)Ground (B)House (C)Roof (D)Smoke Ans: (D)</P>
<P class="p22 ft1">Explanation: Second comes out of the first . 15. Breeze : Cyclone : : Drizzle : ?</P>
<P class="p23 ft1">(A)earth quake (B)Storm (C)Flood (D)Down pour Ans: (D)</P>
<P class="p8 ft1">Explanation: Second is more intense than the first .</P>
<P class="p24 ft1"><SPAN class="ft1">16.</SPAN><SPAN class="ft3">Car : Garage : : Aeroplane : ? (A)Port (B)Depot (C)Hanger (D)Harbour Ans: (C)</SPAN></P>
<P class="p25 ft1">Explanation: First is temporarily parked in the second .</P>
<P class="p26 ft1"><SPAN class="ft1">17.</SPAN><SPAN class="ft3">Race : Fatigue : : Fast : ?</SPAN></P>
<P class="p27 ft1">(A)Food (B)Appetite (C)Hunger (D)Weakness Ans: (C)</P>
<P class="p5 ft1">Explanation: First causes the second .</P>
<P class="p8 ft1">18. Candle : Wax : : Paper :?</P>



<P class="p28 ft1">(A)Wood (B)Tree (C)Bamboo (D)Pulp Ans: (D)</P>
<P class="p5 ft1">Explanation: First is made from the second</P>
<P class="p29 ft1">. 19. Acting : Theater : : Gambling : ? (A)Casino (B)Club (C)Bar (D)Gymn Ans: (A)</P>
<P class="p5 ft1">Explanation: Second is the place for performing the first .</P>
<P class="p8 ft1">20. Venerate : Worship : : Extol : ?</P>
<P class="p30 ft1">(A)Glorify (B)Homage (C)Compliment (D)Recommend Ans: (A)</P>
<P class="p5 ft1">Explanation: The words in each pair are synonyms .</P>
<P class="p8 ft1">21. Water : Convection : : Space : ?</P>
<P class="p31 ft1">(A)Conduction (B)Transference (C)Vacuum (D)Radiation Ans: (D)</P>
<P class="p5 ft1">Explanation: Second is the mode of transference of heat by the first .</P>
<P class="p32 ft1"><SPAN class="ft1">22.</SPAN><SPAN class="ft3">Growth : Death : : Increase : ? (A)Ease (B)decrease (C)Tease (D)Cease Ans: (D)</SPAN></P>
<P class="p25 ft1">Explanation: Second puts an end to the activity denoted by the first .</P>
<P class="p26 ft1"><SPAN class="ft1">23.</SPAN><SPAN class="ft3">Oxygen : Burn : : Carbon dioxide : ?</SPAN></P>
<P class="p33 ft1">(A)Isolate (B)Foam (C)Extinguish (D)Explode Ans: (C)</P>
<P class="p5 ft1">Explanation: Oxygen helps in burnings while carbon dioxide extinguished fires .</P>
<P class="p8 ft1">24. Dog : Bark : : Goat : ?</P>
<P class="p34 ft1">(A)Bleat (B)Howl (C)Grunt (D)Bray Ans: (A)</P>
<P class="p5 ft1">Explanation: Second is noise produced by the first .</P>
<P class="p8 ft1">25. Grain : Stock : : Stick : ?</P>
<P class="p35 ft1">(A)Heap (B)Bundle (C)Collection (D)String Ans: (B)</P>
<P class="p5 ft1">Explanation: Second is collection of the first .</P>
<P class="p8 ft1">26. Nurture : Neglect : : Denigrate : ?</P>
<P class="p36 ft1">(A)Reveal (B)Extol(C)Recognize (D)Calumniate Ans: (B)</P>
<P class="p5 ft1">Explanation: The words in each pair are antonyms .</P>
<P class="p37 ft1"><SPAN class="ft1">27.</SPAN><SPAN class="ft3">Planet : Orbit : : Projectile : ? (A)Trajectory (B)Track (C)Milky way (D)Path Ans: (A)</SPAN></P>
<P class="p25 ft1">Explanation: Second is the path traced by the first .</P>
<P class="p26 ft1"><SPAN class="ft1">28.</SPAN><SPAN class="ft3">Genuine : Authentic : : Mirage : ?</SPAN></P>



<P class="p38 ft1">(A)Image (B)Transpiration (C)Reflection (D)Illusion Ans: (D)</P>
<P class="p5 ft1">Explanation: The words in each pair are synonyms .</P>
<P class="p39 ft1"><SPAN class="ft1">29.</SPAN><SPAN class="ft3">Cobbler : Leather : : Carpenter : ? (A)Furniture (B)Wood (C)Hammer (D)Chair Ans: (B)</SPAN></P>
<P class="p40 ft1">Explanation: Second is the raw material used by the first .</P>
<P class="p41 ft1"><SPAN class="ft1">30.</SPAN><SPAN class="ft3">Rupee : Indian : : Yen : ?</SPAN></P>
<P class="p42 ft1">(A)Turkey (B)Bangladesh (C)Pakistan (D)Japan Ans: (D)</P>
<P class="p5 ft1">Explanation: Rupee is the currency of India . Similarly , Yen is the currency of Japan .</P>
<P class="p8 ft1">31. Ocean : Deserts : : Waves : ?</P>
<P class="p43 ft1">(A)Sea (B)Dust (C)Sand dunes (D)Ripples Ans: (C)</P>
<P class="p5 ft1">Explanation: If oceans were deserts, waves would be sand dunes .</P>
<P class="p8 ft1">32. Pork : Pig : : Beef : ?</P>
<P class="p44 ft1">(A)Farmer (B)Herd (C)Cow(D)Lamb Ans: (C)</P>
<P class="p5 ft1">Explanation: First is the name given to the meat of the second .</P>
<P class="p45 ft1">33. Illiteracy : Education : : Flood : ? (A)Rain (B)Bridge (C)Dam (D)River Ans: (C)</P>
<P class="p5 ft1">Explanation: Second helps ot get rid of the first</P>
<P class="p46 ft1">(A)Refuge (B)Mercy (C)Truancy (D)Remorse Ans: (A)</P>
<P class="p47 ft1">Explanation: A prisoner is confined within the dungeon ,and an unsheltered person takes refuge within the asylum .</P>
<P class="p48 ft1">35. Appraiser : Building : : Critic : ? (A)Book (B)Masterpiece (C)Judge (D)Gold Ans: (A)</P>
<P class="p6 ft1">Explanation: First comments on the second .</P>
<P class="p49 ft1">(A)Doe (B)Stag (C)Leopard (D)Stallion Ans: (D)</P>
<P class="p50 ft1">Explanation: First is a young one of the second . (A)Thresh (B)Sift (C)Pry (D)Rinse</P>
<P class="p5 ft1">Ans: (B)</P>
<P class="p5 ft1">Explanation: Second denotes the function performed by the first .</P>
<P class="p51 ft1"><SPAN class="ft1">38.</SPAN><SPAN class="ft3">Fruit : Banana : : mammal : ? (A)Cow (B)Snake (C)Fish (D)Sparrow Ans: (A)</SPAN></P>
<P class="p52 ft1">Explanation: First denotes the class to which the second belongs .</P>
<P class="p40 ft1"><SPAN class="ft1">39.</SPAN><SPAN class="ft3">Tile : Mosaic : : Knot : ?</SPAN></P>



<P class="p53 ft1">(A)Embroidery (B)Abacus (C)Macrame (D)Easle Ans: (C)</P>
<P class="p54 ft1">Explanation: Just as tiles in mosaic make a pattern , so also the knots in a piece of macrame make a pattern .</P>
<P class="p55 ft1"><SPAN class="ft1">40.</SPAN><SPAN class="ft3">Import : Export : : Expenditure : ? (A)Deficit (B)Revenue (C)Debt (D)Tax Ans: (B)</SPAN></P>
<P class="p40 ft1">Explanation: The words in each pair are antonyms .</P>
<P class="p41 ft1"><SPAN class="ft1">41.</SPAN><SPAN class="ft3">Hill : Mountain : : Stream : ?</SPAN></P>
<P class="p56 ft1">(A)River (B)Canal (C)Glacier (D)Avalanche Ans: (A)</P>
<P class="p5 ft1">Explanation: Second is bigger form of first .</P>
<P class="p8 ft1">42. Country : President : : State : ?</P>
<P class="p57 ft1">(A)Governor (B)Minister (C)Chief minister (D)Citizen Ans: (A)</P>
<P class="p58 ft1">Explanation: President and Governor are the nominal heads of country and state respectively .</P>
<P class="p8 ft1">43. Bread : Yeast : : Curd : ?</P>
<P class="p59 ft1">(A)Fungi (B)Bacteria (C)Germs(D)Virus Ans: (B)</P>
<P class="p60 ft1">Explanation: First is produced by the action of the second . 44. Court : Justice : : School : ?</P>
<P class="p61 ft4">(A)Teacher (B)Student (C)Ignorance (D)Education Ans: (D)</P>
<P class="p62 ft1">Explanation: First is the place where the second is imparted . 45. Quartz : Radio : : Gypsum : ?</P>
<P class="p63 ft1">(A)Glass (B)Porcelain (C)Cement (D)Powder Explanation: First is used to make the second .</P>
<P class="p64 ft1"><SPAN class="ft1">46.</SPAN><SPAN class="ft3">Chromite : Chromium : : Ilmenite :? (A)Limestone (B)Cobalt (C)Manganese (D)Titanium Ans: (D)</SPAN></P>
<P class="p25 ft1">Explanation: Chromite is a mineral of chromium and ilmenite is a mineral of titanium</P>
<P class="p40 ft1">.</P>
<P class="p25 ft1"><SPAN class="ft1">47.</SPAN><SPAN class="ft3">Command : Order : : Confusion : ?</SPAN></P>
<P class="p65 ft1">(A)Discipline (B)Clarity (C)Choas (D)Problem Ans: (C)</P>
<P class="p5 ft1">Explanation: The words in each pair are synonyms.</P>
<P class="p66 ft1"><SPAN class="ft1">48.</SPAN><SPAN class="ft3">Ruby : Red : : Sapphire : ? (A)Blue (B)White (C)Green (D)Silver Ans: (A)</SPAN></P>
<P class="p25 ft1">red precious stone and sapphire is a blue precious stone .</P>
<P class="p26 ft1"><SPAN class="ft1">49.</SPAN><SPAN class="ft3">House : Garbage : : Ore : ?</SPAN></P>


<P class="p67 ft1">(A)Rubbish (B)Gangue (C)Sand (D)Dregs Ans: (B)</P>
<P class="p68 ft1">Explanation: The waste of the house is called garbage .Similarly ,the impurities in the ore are called gangue .</P>
<P class="p8 ft1">50. HongKong : China : : Vatican : ?</P>
<P class="p69 ft1">(A)Rome (B)Mexico (C)Canada (D)Christianity Ans: (A)</P>
<P class="p5 ft1">Explanation: HongKong is a city in China .Similarly ,Vatican is a city in Rome .</P>
<P class="p8 ft1">51. Stee : Rails : : Alnico : ?</P>
<P class="p70 ft1">(A)Aircraft (B)Machinery (C)Silver ware (D)Magnets Ans: (D)</P>
<P class="p5 ft1">Explanation: First is used to makes the second .</P>
<P class="p71 ft1"><SPAN class="ft1">52.</SPAN><SPAN class="ft3">Poodle : Dog : : Moose : ? (A)Duck (B)Donkey (C)Fowl (D)Deer Ans: (D)</SPAN></P>
<P class="p26 ft1">Explanation: Poodle is a bread of dog and moose is a bread of deer .</P>
<P class="p72 ft1"><SPAN class="ft1">53.</SPAN><SPAN class="ft3">Push : Pull : : Throw : ? (A)Jump (B)Collect (C)Pick (D)Game Ans: (C) Explanation: The words in each pair are antonyms .</SPAN></P>
<P class="p26 ft1"><SPAN class="ft1">54.</SPAN><SPAN class="ft3">Naphthalene : Coal tar : : Dyes : ?</SPAN></P>
<P class="p73 ft1">(A)Petroleum (B)Oils (C)Chemicals (D)Carbon Ans: (A)</P>
<P class="p5 ft1">Explanation: First is Obtained from the second .</P>
<P class="p74 ft4"><SPAN class="ft4">55.</SPAN><SPAN class="ft5">Darwin : Evolution : : Archimedes : ? (A)Friction (B)Lubrication (C)Buoyancy (D)Liquid</SPAN></P>
<P class="p75 ft1">Explanation: Darwin gave the theory if evolution ,Like wise Archimedes gave the theory of buoyancy .</P>
<P class="p76 ft1"><SPAN class="ft1">56.</SPAN><SPAN class="ft3">Hot : Oven : : Cold : ?</SPAN></P>
<P class="p31 ft1">(A)Ice cream (B)Air conditioner (C)Show (D)Refrigerator Ans: (D)</P>
<P class="p77 ft1">Explanation: An oven is an appliance to keep the <NOBR>food-items</NOBR> hot ,similarly a refrigerator keeps <NOBR>food-items</NOBR> cold.</P>
<P class="p78 ft1"><SPAN class="ft1">57.</SPAN><SPAN class="ft3">Conference : Chairman : : Newspaper : ? (A)Reporter (B)Distributer (C)Painter (D)Editor Ans: (A)</SPAN></P>
<P class="p79 ft1">Explanation: Chairman is the highest authority in a conference .Similarly editor is the highest authority in a news paper agency.</P>
<P class="p76 ft1"><SPAN class="ft1">58.</SPAN><SPAN class="ft3">Drama : Stage : : Tennis : ?</SPAN></P>
<P class="p80 ft1">(A)Tournament (B)Net (C)Court (D)Racket Ans: (C)</P>
<P class="p5 ft1">Explanation:A drama ia performed on a stage .Similarly tennis is payed on the court</P>
<P class="p8 ft1">. 59. Tree : Forest : Grass : ?</P>



<P class="p81 ft1">(A)Lawn (B)Field (C)Garden (D)Farm Ans: (A)</P>
<P class="p5 ft1">Explanation: A forest consists of trees and a lawn is made up of grass .</P>
<P class="p82 ft1">60. Giant : Dwarf : : Genius : ? (A)Wicked (B)Gentle (C)Idiot (D)Tiny</P>
<P class="p5 ft1">Explanation: The words in each pair are opppsite of each other.</P>
<P class="p83 ft1"><SPAN class="ft1">61.</SPAN><SPAN class="ft3">Bank : River : : Coast : ? (A)Flood (B)Waves (C)Sea (D)Beach Ans: (C)</SPAN></P>
<P class="p84 ft1">Explanation: Bank is the land beside the river .Similary coast is the land beside the sea .</P>
<P class="p85 ft1"><SPAN class="ft1">62.</SPAN><SPAN class="ft3">Flower : Butterfly : : Dirt : ?</SPAN></P>
<P class="p34 ft1">(A)Rats (B)Fly (C)Bugs (D)Sweeper Ans: (B)</P>
<P class="p5 ft1">Explanation: First attracts the second .</P>
<P class="p86 ft1"><SPAN class="ft1">63.</SPAN><SPAN class="ft3">Malaria : Disease : : Spear : ? (A)Wound (B)Sword (C)Weapon (D)Death Ans: (C)</SPAN></P>
<P class="p25 ft1">Explanation: Second denotes the class to which the first belongs to</P>
<P class="p40 ft1">.</P>
<P class="p40 ft1"><SPAN class="ft1">64.</SPAN><SPAN class="ft3">Matricide : Mother : : Homicide : ?</SPAN></P>
<P class="p87 ft1">(A)Human (B)Children (C)Father (D)Apes Ans: (A)</P>
<P class="p88 ft4">Explanation: First implices killing the second . 65. Food : Stomach : : Fuel : ?</P>
<P class="p89 ft1">(A)Plane (B)truck (C)Engine (D)Automobile Ans: (C)</P>
<P class="p90 ft1">Explanation: Food is processed by the stomach to provide energy for functioning the body .Similarly Fuel is processed by the engine to provide energy for the functioning of automobiles .</P>
<P class="p91 ft1"><SPAN class="ft1">66.</SPAN><SPAN class="ft3">Quail : Partridges : : Yak : ? (A)Cows (B)Deer (C)Oxen (D)Antelope Ans : (C)</SPAN></P>
<P class="p25 ft1">Explanation: First belongs to the family of second .</P>
<P class="p26 ft1"><SPAN class="ft1">67.</SPAN><SPAN class="ft3">Engineer : Map : : Bricklayer : ?</SPAN></P>
<P class="p92 ft1">(A)Design (B)Template (C)Mould (D)Cement Ans: (B)</P>
<P class="p5 ft1">Explanation: Second gives pattern to be followed by the first .</P>
<P class="p93 ft1">68. Fire : Ashes : : Explosion : ? (A)Flame (B)Death (C)Sound (D)Debris Ans: (D)</P>
<P class="p6 ft1">Explanation: Second is the name given to the remains lef after the first</P>
<P class="p7 ft1">. 69. Pesticide : Crop : :Antiseptic : ?</P>



<P class="p19 ft1">(A)Wound (B)Clothing (C)Bandage (D)Bleeding Ans: (A)</P>
<P class="p94 ft1">Explanation: Pesicide protects crops from insects and antiseptic protects wound from germs .</P>
<P class="p95 ft1"><SPAN class="ft1">70.</SPAN><SPAN class="ft3">King : Throne : : Rider : ? (A)Seat (B)Horse (C)Saddle (D)Chair Ans: (C)</SPAN></P>
<P class="p26 ft1">Explanation: A king sits on throne and a rider on a saddle .</P>
<P class="p40 ft1"><SPAN class="ft1">71.</SPAN><SPAN class="ft3">Ocean : Water : : Glacier : ?</SPAN></P>
<P class="p96 ft1">(A)Refrigerator (B)Ice (C)Mountain (D)Cave Explanation: First consists of the second .</P>
<P class="p8 ft1">72. Reluctant : Keen : : Remarkable : ?</P>
<P class="p12 ft1">(A)Usual (B)Restrained (C)Striking (D)Evolution Ans: (A)</P>
<P class="p5 ft1">Explanation: the words in each pair are antonyms</P>
<P class="p71 ft1">. 73. Sculptor : Statue : : Poet : ? (A)Canvas (B)Pen (C)Verse (D)Chisel Ans: (C)</P>
<P class="p5 ft1">Explanation: Second is prepared by the first .</P>
<P class="p8 ft1">74. Fossils : Creatures : : Mummies : ?</P>
<P class="p97 ft1">(A)Egypt (B)Human beings (C)Animals (D)Martyrs Ans: (B)</P>
<P class="p98 ft1">Explanation: Fossils are the remains of the creatures .Similarly mummies are the remains of human beings .</P>
<P class="p99 ft1">EXERCISE B</P>
<P class="p100 ft2">Directions: There is a certain relation between two given words on one side of : : and one word is given on another side of : : while another word is to be found from the given alternatives, having the same relation with this word as the given pair has. Select the best alternative.</P>
<P class="p101 ft1">1. Dog : Rabies : : Mosquito : ?</P>
<P class="p102 ft1">(a)Plague (b)Death (c)Malaria (d)Sting Ans: (c)</P>
<P class="p103 ft1">Exp: The bite of the first causes the second. 2. Man : Biography : : Nation : ?</P>
<P class="p104 ft4">(a)Leader (b)People (c)Geography (d)History Ans: (d)</P>
<P class="p105 ft1">Exp: Second contains the story of the first. 3. Doctor : Diagnosis : : Judge : ?</P>
<P class="p106 ft1">(a)Court (b)Punishment (c)Lawyer (d)Judgement Ans: (d)</P>


<P class="p107 ft1">Exp: The function of a doctor is to diagnose a disease and that of a judge is to give judgement.</P>
<P class="p108 ft1">4. Horse : Jockey : : Car : ?</P>
<P class="p109 ft1">(a)Mechanic (b)Chauffeur (c)Steering (d)Brake Ans: (b)</P>
<P class="p110 ft1">Exp: Horse is friven by a jockey . Similarly,car is driven by a chauffeur.</P>
<P class="p108 ft4">5. Fog : Visibility : : AIDS : ?</P>
<P class="p111 ft4">(a)Health (b)Resistance (c)Virus (d)Death Ans: (b)</P>
<P class="p112 ft1">Exp: First impairs the second.</P>
<P class="p113 ft1"><SPAN class="ft1">6.</SPAN><SPAN class="ft6">Porcupine : Rodent : : Mildew :? (a)Fungus (b)Germ (c)Insect (d)Pathogen Ans: (a)</SPAN></P>
<P class="p114 ft1">Exp: Porcupine is a rodent and mildew is a fungus.</P>
<P class="p115 ft1"><SPAN class="ft1">7.</SPAN><SPAN class="ft3">Reading : Knowledge : : Work:?</SPAN></P>
<P class="p116 ft1">(a)Experience (b)Engagement (c)Employment (d)Experiment Ans: (a)</P>
<P class="p117 ft1">Exp: Second is acquired from the first. 8. Scrap : Food : : Lees : ?</P>
<P class="p118 ft4">(a)Bread (b)Tea (c)Wine (d)Rice Ans: (c)</P>
<P class="p119 ft1">Exp: First is the left over of the second.</P>
<P class="p120 ft1"><SPAN class="ft1">9.</SPAN><SPAN class="ft6">Conscience : Wrong : : Police : ? (a)Thief (b)Law (c)Discipline (d)Crime Ans: (d)</SPAN></P>
<P class="p114 ft1">Exp: First prevents the second.</P>
<P class="p121 ft1"><SPAN class="ft1">10.</SPAN><SPAN class="ft3">Cricket : Bat : : Hockey : ? (a)Field (b)Stick (c)Player (d)Ball</SPAN></P>
<P class="p112 ft1">Ans: (b)</P>
<P class="p112 ft1">Exp: In cricket ball is hit with a bat.</P>
<P class="p122 ft1">Similarly,in Hockey ,the ball is hit with a stick.</P>
<P class="p123 ft4">11. Glucose : Carbohydrate : : Soyabean : ? (a)Proteins (b)Vitamins (c)Minerals (d)Legumes</P>
<P class="p112 ft1">Ans: (a)</P>
<P class="p112 ft4">Exp: Glucose is rich in carbohydrates and Soyabean is rich in proteins.</P>
<P class="p124 ft4"><SPAN class="ft4">12.</SPAN><SPAN class="ft5">Jeopardy:Peril:: Jealousy:? (a)Envy(b)Insecurity(c)Lust(d)Sin Ans:(a)</SPAN></P>
<P class="p125 ft1">Exp:First is a more intense form of the second.</P>
<P class="p126 ft4"><SPAN class="ft4">13.</SPAN><SPAN class="ft5">Pigeon:Peace::White flag:? (a)friendship(b)Victory(c)Surrender(d)War Ans:(c)</SPAN></P>
<P class="p125 ft1">Exp:Pigeon is a symbol of peace and white flag is a symbol of surrender.</P>
<P class="p115 ft1"><SPAN class="ft1">14.</SPAN><SPAN class="ft3">Teheran:Iran::Beijing:?</SPAN></P>
<P class="p125 ft1">(a)China(b)Japan(c)Turkey(d)Malaysia</P>
<P class="p125 ft1">Ans:(a)</P>
<P class="p125 ft4">Exp:Teheran is the capital of Iran and Beijing is the capital of China.</P>
<P class="p115 ft4"><SPAN class="ft4">15.</SPAN><SPAN class="ft5">Enough:Excess:Sufficiency:?</SPAN></P>
<P class="p125 ft1">(a)Adequacy(b)Surplus(c)competency(d)Inport</P>



<P class="p112 ft1">Ans:(b)</P>
<P class="p112 ft1">Exp:Sufficiency indicates 'enough' and Surplus indicates 'excess.</P>
<P class="p115 ft1"><SPAN class="ft1">16.</SPAN><SPAN class="ft3">Squint:Eye::Squeeze:?</SPAN></P>
<P class="p125 ft1">(a)Tongue(b)Cloth(c)Throat(d)Hand</P>
<P class="p125 ft1">Ans:(d)</P>
<P class="p125 ft1">Exp:To squint is to constrict the eyes and squeeze is to constrict the hands.</P>
<P class="p115 ft1"><SPAN class="ft1">17.</SPAN><SPAN class="ft3">Hermit:Solitude::Intruder:?</SPAN></P>
<P class="p125 ft4">(a)Thief(b)Privacy(c)Burglar(d)Alm</P>
<P class="p125 ft4">Ans:(c)</P>
<P class="p125 ft1">Exp:The words in each pair are synonyms.</P>
<P class="p115 ft4"><SPAN class="ft4">18.</SPAN><SPAN class="ft5">Tea:Cup::Tobacco:?</SPAN></P>
<P class="p125 ft1">(a)Leaves(b)Hookah(c)Toxin(d)Cheroot</P>
<P class="p125 ft4">Ans:(d)</P>
<P class="p127 ft4">Exp:Tea is contained in the cup. Tobacco is contained cheroot.</P>
<P class="p115 ft1"><SPAN class="ft1">19.</SPAN><SPAN class="ft3">Market:Demand::Farming:?</SPAN></P>
<P class="p128 ft4">(a)Farmer (b)Monsoons(c)Foodgrain(d)Supply Ans:(b)</P>
<P class="p125 ft1">Exp:Market depends on Demand and Farming depends on Monsoons.</P>
<P class="p115 ft1"><SPAN class="ft1">20.</SPAN><SPAN class="ft3">Skirmush:War::Disease:?</SPAN></P>
<P class="p125 ft4">(a)Medicine(b)Patient(c)Epidemic(d)Infection</P>
<P class="p125 ft1">Ans:(c)</P>
<P class="p125 ft4">Exp:Second is a more intense form of the first.</P>
<P class="p129 ft1"><SPAN class="ft1">21.</SPAN><SPAN class="ft3">Wimbledon Trophy:Tennis ::Walker's cup:? (a)Hockey(b)Polo(c)Golf(d)Wrestling Ans:(c)</SPAN></P>
<P class="p130 ft1">Exp:Wimbledon Trophy is associated with the game of Tennis. Similarly , Walker's cup is associated with the game of Golf.</P>
<P class="p115 ft1"><SPAN class="ft1">22.</SPAN><SPAN class="ft3">Skeleton:Body::Grammar:?</SPAN></P>
<P class="p112 ft1">(a)Language(b)Sentence(c)Meaning(d)Education</P>
<P class="p112 ft1">Ans:(a)</P>
<P class="p131 ft4">Exp:Just as skeleton forms the framework of the body,so also Grammar lays down the</P>
<P class="p5 ft1">essentials of language.</P>
<P class="p115 ft1"><SPAN class="ft1">23.</SPAN><SPAN class="ft3">Atom:Matter::Particle:?</SPAN></P>
<P class="p125 ft4">(a)Proton(b)Electron(c)Molecule(d)Dust</P>
<P class="p125 ft1">Ans:(d)</P>
<P class="p125 ft4">Exp:The smallest unit of matter is atom and that of dust is particle.</P>
<P class="p132 ft4"><SPAN class="ft4">24.</SPAN><SPAN class="ft5">Disease:Pathology::Planet :? (a)Astrology(b)Geology(c)Astronomy(d)Palaeontology Ans:(c)</SPAN></P>
<P class="p133 ft1">Exp:Diseases are studied under Pathology. Similarly,Planets are studied in Astrology.</P>
<P class="p134 ft4"><SPAN class="ft4">25.</SPAN><SPAN class="ft5">Mature:Regressed :: Varied:? (a)Rhythmice(b)Monotonous(c)Decorous(d)Obsolete Ans:(b)</SPAN></P>
<P class="p125 ft1">Exp:The words in each pair are opposites of each other.</P>
<P class="p115 ft1"><SPAN class="ft1">26.</SPAN><SPAN class="ft3">Wool:Sheep::Mohair:?</SPAN></P>
<P class="p125 ft4">(a)Cat(b)Goat(c)Cow(d)Camel</P>
<P class="p125 ft1">Ans:(b)</P>


<P class="p135 ft1">Exp:Wool is a fibre obtained from sheep,</P>
<P class="p136 ft1">Similarly, mohair is a fibre obtained from goat.</P>
<P class="p40 ft1"><SPAN class="ft1">27.</SPAN><SPAN class="ft3">Man:Machine::Master:?</SPAN></P>
<P class="p137 ft1">(a)Worker(b)Manager(c)House(d)Slave</P>
<P class="p137 ft1">Ans:(d)</P>
<P class="p137 ft1">Exp:Machine is made to work by a man.</P>
<P class="p138 ft1">Similarly,Slave works under the instructions of his master.</P>
<P class="p139 ft1"><SPAN class="ft1">28.</SPAN><SPAN class="ft3">Sedative :Pain::Solace:? (a)Irritation (b)Kill(c)Grief(d)Hurt Ans:(c)</SPAN></P>
<P class="p140 ft1">Exp:First is the feeling associated with the second.</P>
<P class="p40 ft1"><SPAN class="ft1">29.</SPAN><SPAN class="ft3">Elegance:Vulgarity::Graceful:?</SPAN></P>
<P class="p137 ft1">(a)Awkward(b)Comely(c)Asperity(d)Dirty</P>
<P class="p137 ft1">Ans:(a)</P>
<P class="p137 ft1">Exp:The words in each pair are antonyms of each other.</P>
<P class="p141 ft4"><SPAN class="ft4">30.</SPAN><SPAN class="ft5">Horse:Neigh ::Jackal:? (a)Squeak(b)Chatter(c)Howl(d)Bray Ans:(c)</SPAN></P>
<P class="p137 ft1">Exp:Second is the noise produced by the first.</P>
<P class="p40 ft1"><SPAN class="ft1">31.</SPAN><SPAN class="ft3">Harp:Drum::Flute:?</SPAN></P>
<P class="p137 ft1">(a)Violin(b)Bugle(c)Harmonium(d)Piano</P>
<P class="p137 ft1">Ans:(b)</P>
<P class="p142 ft4">Exp:The voice of harp is shrill as compared to that of drum. Flute produces a shrill sound as compared to that of bugle.</P>
<P class="p40 ft1"><SPAN class="ft1">32.</SPAN><SPAN class="ft3">Imprison:Jail::Exile:?</SPAN></P>
<P class="p137 ft4">(a)Country(b)Depart(c)Banish(d)Punishment</P>
<P class="p137 ft1">Ans:(c)</P>
<P class="p137 ft4">Exp:the words in each pair are synonyms.</P>
<P class="p40 ft4"><SPAN class="ft4">33.</SPAN><SPAN class="ft5">Victory:Encouragement::Failure:?</SPAN></P>
<P class="p137 ft1">(a)Sadness(b)Defeat(c)Anger(d)Frustration</P>
<P class="p137 ft4">Ans:(d)</P>
<P class="p137 ft1">Exp:Victory leads to encouragement and failure brings frustration.</P>
<P class="p40 ft4"><SPAN class="ft4">34.</SPAN><SPAN class="ft5">Dilatory:Expeditious::Direct:?</SPAN></P>
<P class="p137 ft4">(a)Tortuous(b)Circumlocutory(c)Straight(d)Curved</P>
<P class="p137 ft1">Ans:(b)</P>
<P class="p137 ft4">Exp:The words in each pair are opposites of each other.</P>
<P class="p40 ft1"><SPAN class="ft1">35.</SPAN><SPAN class="ft3">Cunning:Fox::Timid:?</SPAN></P>
<P class="p137 ft4">(a)Horse(b)Ant(c)Ass(d)Rabbit</P>
<P class="p137 ft4">Ans:(c)</P>
<P class="p137 ft1">Exp:Fox is a cunning animal and ass is a timid animal.</P>
<P class="p40 ft4"><SPAN class="ft4">36.</SPAN><SPAN class="ft5">Aeroplane:Cockpit::Train:?</SPAN></P>
<P class="p137 ft1">(a)Wagon(b)Coach(c)Compartment(d)Engine</P>
<P class="p137 ft4">Ans:(d)</P>
<P class="p143 ft4">Exp:As the pilot of an aeroplane sits in the cockpit, the driver of a train works in the engine.</P>
<P class="p40 ft1"><SPAN class="ft1">37.</SPAN><SPAN class="ft3">Major:Battalion::Colonel:?</SPAN></P>
<P class="p137 ft1">(a)Company(b)Regiment(c)Army(d)Soldiers</P>
<P class="p137 ft4">Ans:(b)</P>
<P class="p137 ft4">Exp:As Major heads a battalion,the Colonel commands a regiment.</P>
<P class="p40 ft1"><SPAN class="ft1">38.</SPAN><SPAN class="ft3">Heart:Pericardium::Brain:?</SPAN></P>


<P class="p135 ft1">(a)Bones(b)Head(c)Skull(d)Cranium</P>
<P class="p135 ft1">Ans:(d)</P>
<P class="p135 ft1">Exp:Second is a bony protective covering for the first.</P>
<P class="p40 ft1"><SPAN class="ft1">39.</SPAN><SPAN class="ft3">Crow:Carrion::Leech:?</SPAN></P>
<P class="p137 ft1">(a)Bugs(b)Blood(c)Meat(d)Bones</P>
<P class="p137 ft1">Ans:(b)</P>
<P class="p137 ft1">Exp:First feeds on the second.</P>
<P class="p40 ft4"><SPAN class="ft4">40.</SPAN><SPAN class="ft5">Insert:Extract::Mighty:?</SPAN></P>
<P class="p137 ft4">(a)Thin(b)Strong(c)Frail(d)Feeble</P>
<P class="p137 ft1">Ans:(d)</P>
<P class="p137 ft4">Exp:The words in each pair are opposites of each other.</P>
<P class="p144 ft4"><SPAN class="ft4">41.</SPAN><SPAN class="ft5">Perch:Fresh Water::?:Salt water (a)Crocodile(b)Frog(c)Cod(d)Snake Ans:(c)</SPAN></P>
<P class="p145 ft1">Exp:A Perch is a fresh water fish. Similarly, a cod is a salt water fish.</P>
<P class="p146 ft4"><SPAN class="ft4">42.</SPAN><SPAN class="ft5">Orthologist :Birds::Anthropologist:? (a)Plants(b)Animals(c)Mankind(d)Environment Ans:(c)</SPAN></P>
<P class="p137 ft1">Exp:Ornithologist specialises in the study of birds</P>
<P class="p138 ft1">Similarly, anthropologist specialises in the study of mankind.</P>
<P class="p147 ft4"><SPAN class="ft4">43.</SPAN><SPAN class="ft5">Meat :Vegetarian::Liquor:? (a)Insane(b)Introvert(c)Teetotaller(d)Foolish Ans:(c)</SPAN></P>
<P class="p148 ft1">Exp:One who abstains from meat is called a vegetarian and one who abstains from liquor is called a teetotaller.</P>
<P class="p40 ft1"><SPAN class="ft1">44.</SPAN><SPAN class="ft3">Amber:Yellow::Caramine:?</SPAN></P>
<P class="p137 ft4">(a)Red(b)Green(c)Blue(d)Orange</P>
<P class="p137 ft4">Ans:(a)</P>
<P class="p149 ft4">Exp:Amber is a shade of yellow colour. Similarly,caramine is a shade of red colour.</P>
<P class="p40 ft1"><SPAN class="ft1">45.</SPAN><SPAN class="ft3">Wax:Wane::Zenith:?</SPAN></P>
<P class="p137 ft1">(a)Nadir(b)Bottom(c)Fall(d)Depth</P>
<P class="p137 ft4">Ans:(a)</P>
<P class="p137 ft1">Exp:The words in each pair are antonyms.</P>
<P class="p40 ft4"><SPAN class="ft4">46.</SPAN><SPAN class="ft5">Foundation:Edifice::Constitution:?</SPAN></P>
<P class="p137 ft1">(a)Government(b)State(c)Nation(d)Cabinet</P>
<P class="p137 ft4">Ans:(c)</P>
<P class="p137 ft4">Exp:First forms the basis of the second.</P>
<P class="p40 ft1"><SPAN class="ft1">47.</SPAN><SPAN class="ft3">Taxonomy:Classification::Pedology:?</SPAN></P>
<P class="p137 ft4">(a)Nature(b)Farming(c)Soil(d)Mountain</P>
<P class="p137 ft1">Ans:(c)</P>
<P class="p150 ft4">Exp:Taxonomy is the science dealing with classification. Similarly,pedology deals with study of soils.</P>
<P class="p40 ft1"><SPAN class="ft1">48.</SPAN><SPAN class="ft3">Nightingale:Warble::Frog:?</SPAN></P>
<P class="p137 ft4">(a)Yelp(b)Croak(c)Cackle(d)Squeak</P>
<P class="p137 ft1">Ans:(b)</P>
<P class="p137 ft4">Exp:Second is the sound produced by the first.</P>
<P class="p151 ft1"><SPAN class="ft1">49.</SPAN><SPAN class="ft3">Rondo:Music ::Lay:? (a)Song(b)Poem(c)Lyric(d)Story</SPAN></P>


<P class="p112 ft1">Ans:(a)</P>
<P class="p112 ft1">Exp:Rondo is a type of music and lay is a type of song.</P>
<P class="p115 ft1"><SPAN class="ft1">50.</SPAN><SPAN class="ft3">Deciduous:Willow::Coniferous:?</SPAN></P>
<P class="p125 ft1">(a)Lime(b)Spruce(c)Oak(d)Elm</P>
<P class="p125 ft1">Ans:(b)</P>
<P class="p125 ft1">Exp:Willow is a deciduous tree and spruce is a Coniferous tree.</P>
<P class="p115 ft1"><SPAN class="ft1">51.</SPAN><SPAN class="ft3">Palaeography:Writings::Ichthyology:?</SPAN></P>
<P class="p125 ft4">(a)Fishes(b)Whales(c)Oysters(d)Mammals</P>
<P class="p125 ft4">Ans:(a)</P>
<P class="p152 ft1">Exp:Palaeography is the study of ancient writings. Similarly,Ichthyology is the study of fishes.</P>
<P class="p153 ft1">EXERCISE C</P>
<P class="p154 ft2">Directions: There is a certain relation between two given words on one side of : : and one word is given on another side of : : while another word is to be found from the given alternatives, having the same relation with this word as the given pair has. Select the best alternative.</P>
<P class="p155 ft1">1. Painting : Artist : : Symphony : ?</P>
<P class="p156 ft1">(a)Novelist (b) Poet (c)Essayist (d)Composer Ans:(d)</P>
<P class="p157 ft1">Exp: First is prepared by the second. 2. Pongee : Silk : : Shallot : ?</P>
<P class="p158 ft4">(a)Boat (b)Building (c)Ship (d)Stream Ans: (a)</P>
<P class="p159 ft1">Exp: Pongee is a type of silk and shallot is a kind of boat. 3. Dawn : Dusk : : Inaugaration : ?</P>
<P class="p160 ft4">(a)Invitation (b)Valediction (c)Repetition (d)Organisation Ans: (b)</P>
<P class="p161 ft1">Exp: One is followed by other.</P>
<P class="p162 ft1">4. Tectonics : Building : : Taxidermy : ?</P>
<P class="p163 ft4">(a)Classification (b)Conserving (c)Stuffing (d)Collecting Ans: (c)</P>
<P class="p164 ft4">Exp: Tectonics is the science dealing with the art of building. Similarly, taxidermy is the art of stuffing animals.</P>
<P class="p165 ft1">5. Legend : Story : : Merlin : ?</P>
<P class="p158 ft1">(a)Hawk (b)Eagle (c)crow (d)Parakeet Ans: (a)</P>
<P class="p161 ft4">Exp: First is a type of second.</P>
<P class="p166 ft1"><SPAN class="ft1">6.</SPAN><SPAN class="ft6">Annihilation : Fire : : Cataclysm : ? (a)Earthquake (b)Flood (c)Emergency (d)Steam Ans: (b)</SPAN></P>
<P class="p167 ft1">Exp: First is the result of second.</P>
<P class="p168 ft1"><SPAN class="ft1">7.</SPAN><SPAN class="ft3">Lemur : Monkey : : Rook : ?</SPAN></P>
<P class="p169 ft1">(a)Cat (b)Crow (c)Vulture (d)Owl Ans: (b)</P>
<P class="p161 ft1">Exp: Lemur belongs to the family of monkey and</P>



<P class="p170 ft1">rook belongs to the family of crow. 8. Vestry : Church : : Dispensary : ?</P>
<P class="p171 ft1">(a)Laboratory (b)Hospital (c)School (d)Monastery Ans: (b)</P>
<P class="p172 ft1">Exp: Second is a higher institution than the first. 9. Visitor : Invitation : : Witness : ?</P>
<P class="p173 ft4">(a)Subpoena (b)Permission (c)Assent (d)Document Ans: (a)</P>
<P class="p174 ft1">Exp: A Visitor is given an invitation to attend an occasion.</P>
<P class="p175 ft4">Witness is delivered a subpoena providing for attendance at the court. 10. Mash : Horse : : Mast : ?</P>
<P class="p176 ft1">(a)Cow (b)Monkey (c)Chimpanze (d)Pig Ans: (d)</P>
<P class="p177 ft4">Exp: First is a food for the second. 11. Good : Bad : : Virtue : ?</P>
<P class="p178 ft1">(a)Blame (b)Sin (c)Despair (d)Vice Ans: (d)</P>
<P class="p179 ft4">Exp: The words in each pair are opposites of each other. 12. Igloos : Canada : : Rondavels : ?</P>
<P class="p180 ft4">(a)Africa (b)Rangoon (c)Russia (d)Indonesia Ans: (a)</P>
<P class="p174 ft1">Exp: First is the type of houses most commonly found in the second.</P>
<P class="p181 ft1"><SPAN class="ft1">13.</SPAN><SPAN class="ft6">Penology : Punishment : : Seismology : ? (a)Law (b)Liver (c)Earthquakes (d)Medicine Ans: (c)</SPAN></P>
<P class="p182 ft1">Exp: Penology is the study of punishment. Seismology is is the study of Earthquakes.</P>
<P class="p40 ft1"><SPAN class="ft1">14.</SPAN><SPAN class="ft3">Noise : Din : : Quiet : ?</SPAN></P>
<P class="p183 ft1">(a)Hush (b)Dumb (c)Gag (d)Mouth Ans: (a)</P>
<P class="p135 ft1">Exp: second is a more intense form of the first.</P>
<P class="p40 ft1"><SPAN class="ft1">15.</SPAN><SPAN class="ft3">Touch : Feel : : Greet : ?</SPAN></P>
<P class="p184 ft4">(a)Smile (b)Manners (c)Acknowledge (d)Success Ans: (c)</P>
<P class="p137 ft1">Exp: Touch is felt and greet is acknowlwdged.</P>
<P class="p40 ft4"><SPAN class="ft4">16.</SPAN><SPAN class="ft5">Wine : Grapes : : Perry : ?</SPAN></P>
<P class="p185 ft4">(a)Whisky (b)Pears (c)Almonds (d)Pomagranates Ans: (b)</P>
<P class="p137 ft1">Exp: First is made from the second.</P>
<P class="p40 ft1"><SPAN class="ft1">17.</SPAN><SPAN class="ft3">Jungle : Zoo : : Sea : ?</SPAN></P>
<P class="p186 ft4">(a)Aquarium (b)Harbour (c)Water (d)Fishery Ans: (a)</P>
<P class="p137 ft1">Exp: The organisms living in a jungle are artificially reared in a Zoo.</P>
<P class="p187 ft4">The organisms living in the sea are artificially reared in an aquarium.</P>
<P class="p188 ft1"><SPAN class="ft1">18.</SPAN><SPAN class="ft3">Primo : Music : : Suburb : ? (a)Province (b)Country (c)State (d)City Ans: (d)</SPAN></P>
<P class="p189 ft1">Exp: First is a part of the second.</P>
<P class="p190 ft1"><SPAN class="ft1">19.</SPAN><SPAN class="ft3">Mastic : Gum : : Suet : ? (a)Milk (b)Fat (c)Hide (d)Fur</SPAN></P>



<P class="p136 ft1">Ans: (b)</P>
<P class="p191 ft1">Exp: Mastic is a gum obtained from plants and suet is a fat obtained from animals.</P>
<P class="p168 ft1"><SPAN class="ft1">20.</SPAN><SPAN class="ft3">Orgami : paper : : Ikebana : ?</SPAN></P>
<P class="p192 ft1">(a)Trees (b)Theatre (c)Flowers (d)Tapestry Ans: (c)</P>
<P class="p138 ft1">Exp: First is an art associated with the second.</P>
<P class="p168 ft4"><SPAN class="ft4">21.</SPAN><SPAN class="ft5">Enterpreneur : Profit : : Scholar : ?</SPAN></P>
<P class="p193 ft4">(a)Income (b)Knowledge (c)Service (d)Business Ans: (b)</P>
<P class="p138 ft1">Exp: First strives to acquire the second.</P>
<P class="p168 ft1"><SPAN class="ft1">22.</SPAN><SPAN class="ft3">Nautilus : Fish : : Teal : ?</SPAN></P>
<P class="p194 ft4">(a)Chicken (b)Dolphin (c)Duck (d)Pigeon Ans: (c)</P>
<P class="p138 ft1">Exp: Nautilus is a type of fish and teal is a type of duck.</P>
<P class="p195 ft1"><SPAN class="ft1">23.</SPAN><SPAN class="ft3">Bank : Money : : Transport : ? (a)Goods (b)Road (c)Traffic (d)Speed Ans: (a)</SPAN></P>
<P class="p196 ft1">Exp: Transaction of second is done through the first.</P>
<P class="p197 ft1"><SPAN class="ft1">24.</SPAN><SPAN class="ft3">Archipelago : Islands : : Massif : ? (a)Mountains (b)Caves (c)Forests (d)Hillocks Ans: (a)</SPAN></P>
<P class="p198 ft1">Exp: First is a group of the second.</P>
<P class="p168 ft1"><SPAN class="ft1">25.</SPAN><SPAN class="ft3">Rill : Stream : : Pony : ?</SPAN></P>
<P class="p199 ft1">(a)Mare (b)Mule (c)Donkey (d)Horse Ans: (d)</P>
<P class="p138 ft1">Exp: Rill is a small stream and pony is a small horse.</P>
<P class="p168 ft1"><SPAN class="ft1">26.</SPAN><SPAN class="ft3">Calf : Cow : : Puppy : ?</SPAN></P>
<P class="p200 ft4">(a)Dog (b)Bitch (c)Horse (d)Donkey Ans: (b)</P>
<P class="p138 ft1">Exp: The relationship is that of young one and female parent.</P>
<P class="p201 ft4"><SPAN class="ft4">27.</SPAN><SPAN class="ft5">Eccrinology : Secretions : : Selenography : ? (a)Sun (b)Moon (c)Crust (d)Mantle</SPAN></P>
<P class="p136 ft1">Ans: (b)</P>
<P class="p202 ft4">Exp: Eccrinology is the study of secretions and selenography is the study of moon.</P>
<P class="p168 ft1"><SPAN class="ft1">28.</SPAN><SPAN class="ft3">Coconut : Shell : : Letter : ?</SPAN></P>
<P class="p203 ft4"><NOBR>(a)Letter-box</NOBR> (b)Stamp (c)Mail (d)Envelope Ans: (d)</P>
<P class="p138 ft1">Exp: First is enclosed inside the second.</P>
<P class="p168 ft1"><SPAN class="ft1">29.</SPAN><SPAN class="ft3">Roster : Duty : : Inventory : ?</SPAN></P>
<P class="p204 ft4">(a)Furnace (b)Exports (c)Goods (d)Produce Ans: (c)</P>
<P class="p138 ft1">Exp: Roster is a list of duties and inventory is a list of goods.</P>
<P class="p205 ft1"><SPAN class="ft1">30.</SPAN><SPAN class="ft3">Hilt : Sword : : Out work : ? (a)Hippodrome (b)Field (c)Rink (d)Fortness Ans: (d)</SPAN></P>

<P class="p136 ft1">Exp: First is a part of the second</P>
<P class="p5 ft1">. 31. Anaemia : Blood : : Anarchy : ?</P>
<P class="p136 ft1">(a)Disorder (b)Monarchy (c)Government (d)lawlessness</P>


<P class="p136 ft1">Ans: (c)</P>
<P class="p136 ft1">Exp: Anaemia is the lack of blood.</P>
<P class="p206 ft1">Similarly,anarchy is the lack of government.</P>
<P class="p207 ft1"><SPAN class="ft1">32.</SPAN><SPAN class="ft3">Heed : Neglect : :Pacify: ? (a)Victory (b)Incite (c)Allay (d)War Ans: (b)</SPAN></P>
<P class="p198 ft1">Exp: The words in each pair are opposites of each other.</P>
<P class="p208 ft1"><SPAN class="ft1">33.</SPAN><SPAN class="ft3">Probe : Wound : : Anemography : ? (a)Humidity (b)Rainfall (c)Force (d)Pressure Ans: (c)</SPAN></P>
<P class="p209 ft1">Exp: Probe is an instrument to examine a wound. Similarly,anemogrphy is an instrument for recording force.</P>
<P class="p168 ft4"><SPAN class="ft4">34.</SPAN><SPAN class="ft5">Loiter : Dwandle : : Impugn : ?</SPAN></P>
<P class="p210 ft4">(a)Challenge (b)Gamble (c)Confiscate (d)Revenge Ans: (a)</P>
<P class="p138 ft1">Exp: The words in each pair are synonyms of each other.</P>
<P class="p168 ft1"><SPAN class="ft1">35.</SPAN><SPAN class="ft3">Oasis : Sand : : Island : ?</SPAN></P>
<P class="p211 ft4">(a)River (b)Sea (c)Water (d)Waves Ans: (c)</P>
<P class="p136 ft1">Exp: Oasis is a water pool amidst sand.</P>
<P class="p206 ft4">Similarly, island is a place of land amidst water.</P>
<P class="p212 ft4">36. Anatomy : Zoology : : Paediatrics : ? (a)Chemistry (b)Medicine (c)Palaeontology (d)Mechanics</P>
<P class="p136 ft1">Ans: (b)</P>
<P class="p213 ft4">Exp: Anatomy is a branch of zoology. Similarly,Paediatrics is a branch of medicine.</P>
<P class="p168 ft1"><SPAN class="ft1">37.</SPAN><SPAN class="ft3">War : Death : : Smoke : ?</SPAN></P>
<P class="p204 ft4">(a)Burning (b)Pollution (c)Fire (d)Cigaratte Ans: (b)</P>
<P class="p138 ft1">Exp: Second is the result of the first.</P>
<P class="p168 ft1"><SPAN class="ft1">38.</SPAN><SPAN class="ft3">Scout : Army : : Clerk : ?</SPAN></P>
<P class="p214 ft4">(a)Office (b)Files (c)Officer (d)Administration Ans: (a)</P>
<P class="p138 ft1">Exp: Work of the second at the lowest level is performed by the first.</P>
<P class="p168 ft1"><SPAN class="ft1">39.</SPAN><SPAN class="ft3">Winter : Hibernation : : Summer : ?</SPAN></P>
<P class="p215 ft4">(a)Survival (b)Activation (c)Aestivation (d)Cache Ans: (c)</P>
<P class="p216 ft4">Exp: Winter sleep of animals is called hibernation and summer sleep is called aestivation.</P>
<P class="p168 ft1"><SPAN class="ft1">40.</SPAN><SPAN class="ft3">Sports : Logo : : Nation : ?</SPAN></P>
<P class="p217 ft1">(a)Anthem (b)Ruler (c)Animal (d)Emblem Ans: (d)</P>
<P class="p138 ft4">Exp: Second is a symbol of the first.</P>
<P class="p168 ft4"><SPAN class="ft4">41.</SPAN><SPAN class="ft5">Vegetable : Chop : : Body : ?</SPAN></P>
<P class="p218 ft4">(a)Cut (b)Amputate (c)Peel (d)Prume Ans: (b)</P>
<P class="p219 ft1">Exp: Cutting of vegetables is called chopping. Cutting off a body part is called amputating.</P>
<P class="p168 ft4"><SPAN class="ft4">42.</SPAN><SPAN class="ft5">Mountain : Valley : : Genius : ?</SPAN></P>
<P class="p138 ft1">(a)Brain (b)Idiot (c)Think (d)Intelligence</P>


<P class="p135 ft1">Ans: (b)</P>
<P class="p135 ft1">Exp: The words in each pain are opposites of each other.</P>
<P class="p220 ft1"><SPAN class="ft1">43.</SPAN><SPAN class="ft3">Misogamy : Marriage : : Misogyny : ? (a)Children (b)Husband (c)Relation (d)Women Ans: (d)</SPAN></P>
<P class="p221 ft1">Exp: First is a hatred for the second.</P>
<P class="p40 ft1"><SPAN class="ft1">44.</SPAN><SPAN class="ft3">Eye : Wink : : Heart : ?</SPAN></P>
<P class="p222 ft1">(a)Move (b)Throb (c)Pump (d)Ouiver Ans: (b)</P>
<P class="p137 ft1">Exp: Second denotes the activity of the first.</P>
<P class="p40 ft1"><SPAN class="ft1">45.</SPAN><SPAN class="ft3">Wine : Grapes : : Vodka : ?</SPAN></P>
<P class="p223 ft4">(a)Potatoes (b)Apples (c)Oranges (d)Flour Ans: (d)</P>
<P class="p137 ft1">Exp: First is prepared from the second.</P>
<P class="p224 ft1"><SPAN class="ft1">46.</SPAN><SPAN class="ft3">Calender : Dates : : Dictionary : ? (a)Vocabulary (b)Language (c)Words (d)Book Ans: (c)</SPAN></P>
<P class="p225 ft1">Exp: Calender is a list of dates. Likewise,dictionary is a collection words.</P>
<P class="p40 ft1"><SPAN class="ft1">47.</SPAN><SPAN class="ft3">Novice : Learner : : Harbinger : ?</SPAN></P>
<P class="p226 ft1">(a)Messenger (b)Thief (c)Pickpocket (d)Robber Ans: (a)</P>
<P class="p137 ft1">Exp: The words in each pair are synonyms.</P>
<P class="p40 ft4"><SPAN class="ft4">48.</SPAN><SPAN class="ft5">Sikkim : Gangtok : : Manipur : ?</SPAN></P>
<P class="p227 ft4">(a)Dispur (b)Cherapunji (c)Shillong (d)Imphal Ans: (a)</P>
<P class="p137 ft1">Exp: Gangtok is the capital of Sikkim and Imphal is the capital of Manipur.</P>
<P class="p40 ft1"><SPAN class="ft1">49.</SPAN><SPAN class="ft3">Line : Square : : Arc : ?</SPAN></P>
<P class="p228 ft4">(a)Ring (b)Sphere (c)Circle (d)Ball Ans: (c)</P>
<P class="p137 ft1">Exp: First is a part of the second.</P>
<P class="p40 ft1"><SPAN class="ft1">50.</SPAN><SPAN class="ft3">Convoy : Ships : : Deputation : ?</SPAN></P>
<P class="p229 ft4">(a)Voters (b)Representation (c)Politicians (d)Writers Ans: (b)</P>
<P class="p137 ft1">Exp: First is a group of second , employed for a certain purpose.</P>
<P class="p40 ft4"><SPAN class="ft4">51.</SPAN><SPAN class="ft5">Training : Leather : : Pyrotechnics : ?</SPAN></P>
<P class="p230 ft4">(a)Wool (b)Fireworks (c)Bombs (d)Machinery Ans: (b)</P>
<P class="p137 ft1">Exp: First is the process of manufacturing the second.</P>
<P class="p231 ft1"><SPAN class="ft1">52.</SPAN><SPAN class="ft3">Shark : Fish : : Lavender : ?</SPAN></P>
<P class="p232 ft4">(a)Shrub (b)Tree (c)Herb (d)Climber Ans: (a)</P>
<P class="p233 ft4">Exp: Shark is a fish and Lavender is a shrub. 53. Circle : Circumference : : Square : ?</P>
<P class="p234 ft1">(a)Volume (b)Area (c)Diagonal (d)Perimeter Ans: (d)</P>
<P class="p135 ft1">Exp: Second is a measure of the boundary of the first.</P>
<P class="p40 ft4"><SPAN class="ft4">54.</SPAN><SPAN class="ft5">Oriel : Room : : Tendon : ?</SPAN></P>
<P class="p235 ft1">(a)Blood (b)Muscles (c)Veins (d)Liver Ans: (b)</P>


<P class="p136 ft1">Exp: First is a part of the second.</P>
<P class="p168 ft1"><SPAN class="ft1">55.</SPAN><SPAN class="ft3">Car : Petrol : : Televison : ?</SPAN></P>
<P class="p236 ft1">(a)Electricity (b)Transmission (c)Entertainment (d)Antenna Ans: (a)</P>
<P class="p138 ft1">Exp: A car runs on petrol and a televison works by electricity.</P>
<P class="p237 ft4"><SPAN class="ft4">56.</SPAN><SPAN class="ft5">Applique : Ornament : : Impound : ? (a)Confiscate (b)Powder (c)Grab (d)Snatch Ans: (a)</SPAN></P>
<P class="p138 ft1">Exp: The given words are synonyms of each other.</P>
<P class="p168 ft1"><SPAN class="ft1">57.</SPAN><SPAN class="ft3">Pig : Farrow :: Dog : ?</SPAN></P>
<P class="p238 ft1">(a)Mare (b)Pappy (c)Bitch (d)Colt Ans: (b)</P>
<P class="p138 ft4">Exp: Second is the young one of the first.</P>
<P class="p168 ft4"><SPAN class="ft4">58.</SPAN><SPAN class="ft5">Mattock : Dig : : Shoval :?</SPAN></P>
<P class="p239 ft4">(a)Break (b)Push (c)Scoop (d)Whittle Ans: (c)</P>
<P class="p240 ft1">Exp: Mattock is a tool to dig hard ground Similarly, Shoval is a tool to scoop.</P>
<P class="p168 ft4"><SPAN class="ft4">59.</SPAN><SPAN class="ft5">Knoll : Hill : : Eclogue : ?</SPAN></P>
<P class="p241 ft4">(a)Poem (b)Music (c)Drama (d)Ballad Ans: (a)</P>
<P class="p138 ft1">Exp: Knoll is a small hill and eclogue is a short poem.</P>
<P class="p242 ft4"><SPAN class="ft4">60.</SPAN><SPAN class="ft5">Receptionist : Office : : Hostess : ? (a)Aircraft (b)Crew (c)Hospital (d)Airport Ans: (a)</SPAN></P>
<P class="p138 ft1">Exp: First attends the clients in the second.</P>
<P class="p168 ft1"><SPAN class="ft1">61.</SPAN><SPAN class="ft7">Seismography : Earthquake : : Taseometer : ?</SPAN></P>
<P class="p243 ft4">(a)Volcanoes (b)Resistances (c)Landslides (d)Strains Ans: (d)</P>
<P class="p244 ft1">Exp: Seismography is an instrument to measure the intensity of an earthquake. Similarly, taseometer is an instrument to measure strains.</P>
<P class="p245 ft1"><SPAN class="ft1">62.</SPAN><SPAN class="ft3">Dum Dum : Calcutta : : Palam : ? (a)Kerala (b)Delhi (c)Madras (d)Bombay Ans: (b)</SPAN></P>
<P class="p196 ft1">Exp: Dum Dum is an airport in Calcutta and Palam is an airport in Delhi.</P>
<P class="p246 ft1"><SPAN class="ft1">63.</SPAN><SPAN class="ft3">Foresight : Anticipation : : Insomnia : ? (a)Diamond (b)Iron (c)Sleeplessness (d)Gems Ans: (c)</SPAN></P>
<P class="p138 ft1">Exp: The words in each pair are synonyms.</P>
<P class="p247 ft2">Excercise D</P>
<P class="p248 ft2">Directions: In each of the following questions,there is a certain relationship between two given words on one side of : : and one word is given on another side of : :while another word is to be found from the given alternatives,having the same relation with this word as the words of the given pair bear. Choose the correct alternative.</P>
<P class="p41 ft1"><SPAN class="ft1">1.</SPAN><SPAN class="ft8">Doctor : Patient : : Lawyer : ?</SPAN></P>
<P class="p137 ft1">(A)Customer (B)Accused (C)Magistrate (D)Client</P>


<P class="p135 ft1">Ans : (D)</P>
<P class="p135 ft1">Explanation : First works for the second .</P>
<P class="p40 ft1"><SPAN class="ft1">2.</SPAN><SPAN class="ft8">Museum : Curator : : Prison : ?</SPAN></P>
<P class="p249 ft1">(A)Manager (B)Mountain (C)Jailor (D)Warden Ans : (C)</P>
<P class="p137 ft1">Explanation : First is managed by the second .</P>
<P class="p40 ft1"><SPAN class="ft1">3.</SPAN><SPAN class="ft8">Soap : Wash : : Broom : ?</SPAN></P>
<P class="p250 ft4">(A)Clean (B)Dust (C)Sweep (D)Floor Ans : (C)</P>
<P class="p137 ft1">Explanation : Second denotes the function of the first .</P>
<P class="p40 ft4"><SPAN class="ft4">4.</SPAN><SPAN class="ft9">Wax : Grease : : Milk : ?</SPAN></P>
<P class="p251 ft4">(A)Drink (B)Ghee (C)Curd (D)Protein Ans : (C)</P>
<P class="p137 ft1">Explanation : First is used to prepare the second .</P>
<P class="p40 ft1"><SPAN class="ft1">5.</SPAN><SPAN class="ft8">Bread : Bakery : : Brick : ?</SPAN></P>
<P class="p250 ft4">(A)Mint (B)Kiln (C)Furnace (D)Mine Ans : (B)</P>
<P class="p137 ft1">Explanation : Second is the place where first id manufactured .</P>
<P class="p40 ft4"><SPAN class="ft4">6.</SPAN><SPAN class="ft9">Sword : Slaughter : : Scalpel : ?</SPAN></P>
<P class="p252 ft4">(A)Murder (B)Stab (C)Surgery (D)Chopping Ans : (C)</P>
<P class="p137 ft1">Explanation : Second denotes the purpose for which the first is used .</P>
<P class="p40 ft1"><SPAN class="ft1">7.</SPAN><SPAN class="ft8">Life : Autobiography : : Witness : ?</SPAN></P>
<P class="p253 ft4">(A)Paper (B)Truth (C)Documents (D)Acceptance Ans : (C)</P>
<P class="p137 ft1">Explanation : Second contains an amount of the first .</P>
<P class="p40 ft1"><SPAN class="ft1">8.</SPAN><SPAN class="ft8">Chef : Restaurant : : Druggist : ?</SPAN></P>
<P class="p254 ft4">(A)Medicine (B)Pharmacy (C)Store (D)Chemist Ans : (B)</P>
<P class="p255 ft4">Explanation : Second is the working place of the first . (A)Blue (B)Orange (C)Red (D)Yellow</P>
<P class="p135 ft1">Ans : (C)</P>
<P class="p256 ft4">Explanation : Jude is Green precious stone and garnet is a red precious stone . 10. Dancer : Stage : : Minister : ?</P>
<P class="p257 ft1">(A)Pulpit (B)Assembly (C)Parliament (D)State Ans : (A)</P>
<P class="p258 ft4">Explanation : Second is the place for the first to perform on . 11. Ecology : environment : : Histology : ?</P>
<P class="p259 ft1">(A)Fossils (B)History (C)Tissues (D)Hormones Ans : (C)</P>
<P class="p260 ft4">Explanation : Ecology deals with the study of environment .Similarly Histology deals with the study of tissues .</P>
<P class="p5 ft1">12. Life : Death : : Hope : ?</P>
<P class="p261 ft4">(A)Sad (B)Despair (C)Pain (D)Cry Ans : (B)</P>
<P class="p262 ft1">Explanation : The words in each pair are antonyms of each other . 13. Hooke : Cells : : Mulder : ?</P>
<P class="p263 ft4">(A)Carbohydrates (B)Minerals (C)Vitamins (D)Proteins Ans : (D)</P>
<P class="p135 ft1">Explanation : Hooke discovered the cells .Similarly Mulder discovered the</P>



<P class="p5 ft1">proteins</P>
<P class="p264 ft1">. 14. Needle : Thread : : Pen : ? (A)Ink (B)Cap (C)Paper (D)Word Ans : (A)</P>
<P class="p265 ft1">Explanation : Second is required for the working of the first . 15. Auger : Carpenter : : Awl : ?</P>
<P class="p266 ft4">(A)Sculptor (B)Cobbler (C)Chef (D)Mason Explanation : First is a the tool used by the second .</P>
<P class="p5 ft1">16. Birds : Aviary : : Bees : ?</P>
<P class="p267 ft4">(A)Aquarium (B)Hive (C)Brewery (D)Apiary Ans : (d)</P>
<P class="p135 ft1">Explanation : Second denotes the place where first kept and reared .</P>
<P class="p268 ft4"><SPAN class="ft4">17.</SPAN><SPAN class="ft9">Resign : Politician : : Abdicate : ? (A)Prince (B)King (C)Realm (D)throne Ans : (B)</SPAN></P>
<P class="p137 ft1">Explanation : First denotes the act of leaving the post of the second willingly .</P>
<P class="p40 ft1"><SPAN class="ft1">18.</SPAN><SPAN class="ft8">Scissors : Cloth : : Scythe : ?</SPAN></P>
<TABLE cellpadding=0 cellspacing=0 class="t0">
<TR>
	<TD class="tr0 td0"><P class="p269 ft10">&nbsp;</P></TD>
	<TD class="tr0 td1"><P class="p270 ft11">(A)Wood (B)Steel (C)Grass (D)Paper</P></TD>
</TR>
<TR>
	<TD class="tr1 td0"><P class="p269 ft10">&nbsp;</P></TD>
	<TD class="tr1 td1"><P class="p270 ft4">Ans : (C)</P></TD>
</TR>
<TR>
	<TD class="tr2 td0"><P class="p269 ft10">&nbsp;</P></TD>
	<TD class="tr2 td1"><P class="p270 ft1">Explanation : First is used to cut the second .</P></TD>
</TR>
<TR>
	<TD class="tr1 td0"><P class="p271 ft4">19.</P></TD>
	<TD class="tr1 td1"><P class="p272 ft4">Garden : Trowel : : Seamstress : ?</P></TD>
</TR>
<TR>
	<TD class="tr2 td0"><P class="p269 ft10">&nbsp;</P></TD>
	<TD class="tr2 td1"><P class="p270 ft1">(A)Saw (B)Scissors (C)Sneakers (D)Crowbar</P></TD>
</TR>
<TR>
	<TD class="tr1 td0"><P class="p269 ft10">&nbsp;</P></TD>
	<TD class="tr1 td1"><P class="p270 ft4">Ans : (B)</P></TD>
</TR>
<TR>
	<TD class="tr1 td0"><P class="p269 ft10">&nbsp;</P></TD>
	<TD class="tr1 td1"><P class="p270 ft4">Explanation : Second is the tool used by the first .</P></TD>
</TR>
<TR>
	<TD class="tr2 td0"><P class="p271 ft1">20.</P></TD>
	<TD class="tr2 td1"><P class="p270 ft1">Prose : Writing : : lisp : ?</P></TD>
</TR>
<TR>
	<TD class="tr1 td0"><P class="p269 ft10">&nbsp;</P></TD>
	<TD class="tr1 td1"><P class="p270 ft4">(A)Reading (B)Music (C)Speach (D)Drawing</P></TD>
</TR>
<TR>
	<TD class="tr2 td0"><P class="p269 ft10">&nbsp;</P></TD>
	<TD class="tr2 td1"><P class="p270 ft1">Ans : (C)</P></TD>
</TR>
<TR>
	<TD class="tr1 td0"><P class="p269 ft10">&nbsp;</P></TD>
	<TD class="tr1 td1"><P class="p270 ft4">Explanation : First is the type of the second .</P></TD>
</TR>
<TR>
	<TD class="tr1 td0"><P class="p271 ft4">21.</P></TD>
	<TD class="tr1 td1"><P class="p270 ft4">Cub : Tiger : : Fawn : ?</P></TD>
</TR>
<TR>
	<TD class="tr2 td0"><P class="p269 ft10">&nbsp;</P></TD>
	<TD class="tr2 td1"><P class="p270 ft1">(A)Stag (B)Monkey (C)Ass (D)Sheep</P></TD>
</TR>
<TR>
	<TD class="tr1 td0"><P class="p269 ft10">&nbsp;</P></TD>
	<TD class="tr1 td1"><P class="p270 ft4">Ans : (A)</P></TD>
</TR>
<TR>
	<TD class="tr2 td0"><P class="p269 ft10">&nbsp;</P></TD>
	<TD class="tr2 td1"><P class="p270 ft1">Explanation :Firsts is the young one of the second .</P></TD>
</TR>
<TR>
	<TD class="tr1 td0"><P class="p269 ft10">&nbsp;</P></TD>
	<TD class="tr1 td1"><P class="p270 ft4">(A)Constellation (B)Asteroid (C)Galaxy (D)Meteor</P></TD>
</TR>
<TR>
	<TD class="tr1 td0"><P class="p269 ft10">&nbsp;</P></TD>
	<TD class="tr1 td1"><P class="p270 ft4">Ans : (A)</P></TD>
</TR>
<TR>
	<TD class="tr2 td0"><P class="p269 ft10">&nbsp;</P></TD>
	<TD class="tr2 td1"><P class="p270 ft1">Explanation : Sirius is a star and cygnus is a constellation .</P></TD>
</TR>
<TR>
	<TD class="tr1 td0"><P class="p271 ft4">23.</P></TD>
	<TD class="tr1 td1"><P class="p272 ft4">Radical : Moderate : : Revolution : ?</P></TD>
</TR>
<TR>
	<TD class="tr2 td0"><P class="p269 ft10">&nbsp;</P></TD>
	<TD class="tr2 td1"><P class="p270 ft1">(A)Change (B)Choas (C)Peace (D)Reformation</P></TD>
</TR>
<TR>
	<TD class="tr1 td0"><P class="p269 ft10">&nbsp;</P></TD>
	<TD class="tr1 td1"><P class="p270 ft4">Ans : (C)</P></TD>
</TR>
<TR>
	<TD class="tr1 td0"><P class="p269 ft10">&nbsp;</P></TD>
	<TD class="tr1 td1"><P class="p270 ft4">Explanation : The words in each pair are antonyms of each other .</P></TD>
</TR>
<TR>
	<TD class="tr2 td0"><P class="p271 ft1">24.</P></TD>
	<TD class="tr2 td1"><P class="p272 ft1">Mathematics : Numbers : : History : ?</P></TD>
</TR>
<TR>
	<TD class="tr2 td0"><P class="p269 ft10">&nbsp;</P></TD>
	<TD class="tr2 td1"><P class="p270 ft1">(A)People (B)Events (C)Dates (D)Wars</P></TD>
</TR>
</TABLE>
<P class="p135 ft1">Ans : (B)</P>
<P class="p273 ft1">Explanation : Mathematics is the theory of numbers and history is the theory of past events .</P>
<P class="p5 ft1">25. Bag : Luggage : : Ship : ?</P>
<P class="p274 ft1">(A)Coal (B)Stock (C)Cargo (D)Weight Ans : (C)</P>
<P class="p275 ft4">Explanation : Second is the load carried by the first . 26. Anthropology : Man : : Anthology : ?</P>
<P class="p135 ft1">(A)Nature (B)Trees (C)Apes (D)Poems</P>



<P class="p135 ft1">Ans : (D)</P>
<P class="p276 ft1">Explanation : Anthropology deals with the study of man .Similarly Anthology deals with the collection of poems.</P>
<P class="p5 ft1">27. Chatter : Teeth : : ? : Leaves</P>
<P class="p277 ft1">(A)Whistle (B)Ripple (C)Rustle (D)Cackle Ans : (C)</P>
<P class="p278 ft4">Explanation : First is the noise produced by the second . 28. Loin : Prowl : :Bear : ?</P>
<P class="p279 ft1">(A)Frisk (B)Lumber (C)Stride (D)Bound Ans : (B)</P>
<P class="p280 ft4">Explanation : Second is the manner of walking of the first . 29. Mirror : Reflection : : Water : ?</P>
<P class="p281 ft4">(A)Conduction (B)Dispersion (C)Immersion (D)Refractions Ans : (D)</P>
<P class="p282 ft1">Explanation : light rays falling on a mirror undergo reflection and those falling on water undergo refraction .</P>
<P class="p5 ft1">30. Firm : Flabby : : Piquant : ?</P>
<P class="p283 ft4">(A)Bland (B)Salty (C)Pleasant (D)Small Ans : (A)</P>
<P class="p135 ft1">Explanation : The words in each pair are antonyms of each other .</P>
<P class="p284 ft4"><SPAN class="ft4">31.</SPAN><SPAN class="ft9">Wood : Ghacoad : :Coal : ? (A)Fire (B)Smoke (C)Coke (D)Ash Ans : (C)</SPAN></P>
<P class="p137 ft1">Explanation : Second is obtained from the first .</P>
<P class="p40 ft1"><SPAN class="ft1">32.</SPAN><SPAN class="ft8">Drama : Scene : : Book : ?</SPAN></P>
<P class="p283 ft4">(A)Story (B)Page (C)Chapter (D)Author Ans : (C)</P>
<P class="p135 ft1">Explanation : Second is a unit of first .</P>
<P class="p285 ft4"><SPAN class="ft4">33.</SPAN><SPAN class="ft5">Betel : Chew : : Football : ? (A)Play (B)Run (C)Roll (D)Kick Ans : (D)</SPAN></P>
<P class="p137 ft1">Explanation : First is the object and second is the action performed on it .</P>
<P class="p286 ft4"><SPAN class="ft4">34.</SPAN><SPAN class="ft5">Motorcycle : Battery : : Life : ? (A)Earth (B)Sun (C)Moon (D)Star Ans : (B)</SPAN></P>
<P class="p137 ft1">Explanation : Second is the ultimate source for the first .</P>
<P class="p287 ft1"><SPAN class="ft1">35.</SPAN><SPAN class="ft3">Cyclone : Anticyclone : : Flood : ? (A)Devastation (B)Havoc (C)River (D)Drought Ans : (D)</SPAN></P>
<P class="p288 ft1">Explanation : Both create opposite conditions .</P>
<P class="p40 ft1"><SPAN class="ft1">36.</SPAN><SPAN class="ft8">Happiness : Sarrow : : Comfort : ?</SPAN></P>
<P class="p289 ft1">(A)Hardship (B)Rest (C)Poverty (D)Difficult Ans : (A)</P>
<P class="p135 ft1">Explanation : The words in each pair are antonyms of each other .</P>
<P class="p146 ft1"><SPAN class="ft1">37.</SPAN><SPAN class="ft8">Appreciation : Reward : : Disgrace : ? (A)Crime (B)Guilt (C)Allegation (D)Punishment Ans : (D)</SPAN></P>
<P class="p189 ft1">Explanation : Second brings the first .</P>
<P class="p40 ft1"><SPAN class="ft1">38.</SPAN><SPAN class="ft8">Retirement : Service : : Dismissal : ?</SPAN></P>
<P class="p135 ft1">(A)Agreement (B)Communication (C)Employment (D)Adoption</P>


<P class="p135 ft1">Ans : (C)</P>
<P class="p135 ft1">Explanation : First terminates the second .</P>
<P class="p147 ft1"><SPAN class="ft1">39.</SPAN><SPAN class="ft8">Naphthalene : Woolen : : Antibiotic : ? (A)Germs (B)Immunity (C)Diseases (D)Body Ans : (D)</SPAN></P>
<P class="p137 ft1">Explanation : First is used to protect the second from attack by germs and insects .</P>
<P class="p40 ft1"><SPAN class="ft1">40.</SPAN><SPAN class="ft8">Drummer : Orchestra : : Minister : ?</SPAN></P>
<P class="p290 ft4">(A)Voter (B)Constituency (C)Cabinet (D)Department Ans : (C)</P>
<P class="p135 ft1">Explanation : First is the member of the second .</P>
<P class="p291 ft1"><SPAN class="ft1">41.</SPAN><SPAN class="ft8">Sugar : Molasses : : Gasoline : ? (A)Mine (B)Quarry (C)Drill (D)Petroleum Ans : (D)</SPAN></P>
<P class="p189 ft1">Explanation : First is obtained from the second .</P>
<P class="p292 ft1"><SPAN class="ft1">42.</SPAN><SPAN class="ft8">Starvation : Nutrition : : Exhaustation : ? (A)Energy (B)Bravery (C)Freshness (D)Courage Ans : (A)</SPAN></P>
<P class="p221 ft1">Explanation : The first denotes the lack of second .</P>
<P class="p40 ft1"><SPAN class="ft1">43.</SPAN><SPAN class="ft8">Ballworn : Cotton : :Ghundibug : ?</SPAN></P>
<P class="p293 ft1">(A)Wheat (B)Rice (C)Millet (D)Tomato Ans : (B)</P>
<P class="p294 ft1">Explanation : First is a pest that damages the second . 44. Accident : Carefulness : : Disease : ?</P>
<P class="p295 ft4">(A)Sanitation (B)Treatment (C)Medicine (D)Doctor Ans : (A)</P>
<P class="p296 ft1">Explanation :Lack of second results in first . 45. Annotate : Text : : Caption : ?</P>
<P class="p297 ft4">(A)Novel (B)Law (C)Film (D)Photograph Ans : (D)</P>
<P class="p298 ft4">Explanation : First is a comment on the second . 46. Physiology : Biology : : Metaphysics : ?</P>
<P class="p299 ft1">(A)Physics (B)Statistics (C)Mathematics (D)Philosophy Ans : (D)</P>
<P class="p300 ft4">Explanation : Physiology is branch of biology .Similarly mathematics is a branch of philosophy .</P>
<P class="p5 ft1">47. Highbrow : Cultivated : : Suave : ?</P>
<P class="p301 ft4">(A)Elegant (B)Urbane (C)Stylish <NOBR>(D)Broad-minded</NOBR> Ans : (B)</P>
<P class="p302 ft1">Explanation : The words in each pair are synonyms . (A)Insinuate (B)Reject (C)Convince (D)Deny</P>
<P class="p135 ft4">Ans : (A)</P>
<P class="p303 ft4">Explanation : Affirm is to confirm a change and Hint is to point at something Similarly Charge means to blame and Insinuate means to suggest indirectly .</P>
<P class="p188 ft4"><SPAN class="ft4">49.</SPAN><SPAN class="ft9">Author : Book : : Choreographer : ? (A)Drama (B)Ballet (C)Masque (D)Opera Ans : (B)</SPAN></P>
<P class="p137 ft1">Explanation : First composes the second .</P>
<P class="p40 ft1"><SPAN class="ft1">50.</SPAN><SPAN class="ft8">thick : Thin : : Idle : ?</SPAN></P>
<P class="p302 ft1">(A)Virtuous (B)Business (C)Industrious (D)Activity Ans : (C)</P>


<P class="p262 ft1">Explanation : The words in each pair are antonyms of each other . 51. Gents : Cap : : Ladies : ?</P>
<P class="p304 ft1">(A)Scarf (B)Hat (C)Handkerchief (D)Hair band Ans : (A)</P>
<P class="p305 ft1">Explanation : Second is worn by the first on the head . 52. Lumberjack : Axe : : Chef : ?</P>
<P class="p306 ft4">(A)Bow (B)Poker (C)Chisel (D)Colander Ans : (D)</P>
<P class="p307 ft1">Explanation : Second is the tool used by the first . 53. Bread : Wheat : : Brick : ?</P>
<P class="p283 ft4">(A)Clay (B)Fire (C)Cement (D)Building Ans : (A)</P>
<P class="p308 ft4">Explanation : Second is used to make the first 54. Scrupulous : Principles : : Ethical : ?</P>
<P class="p309 ft1">(A)Morals (B)Virtues (C)Religions (D)Profits Ans : (A)</P>
<P class="p310 ft4">Explanation : When one abides by the second ,he is said to be the first by the nature .</P>
<P class="p5 ft1">55. Wince : Pain : : Prostration : ?</P>
<P class="p135 ft1">(A)Discomfiture (B)Frustration (C)Submissiveness (D)Strained</P>
<P class="p311 ft4">Ans : (C) Explanation : First is the sigh of the second . 56. Coherent : Consistent : : Irate : ? (A)Unreasonable (B)Unhappy (C)Irritated (D)Angry</P>
<P class="p135 ft1">Ans : (D)</P>
<P class="p135 ft4">Explanation : The words in each pair are synonyms .</P>
<P class="p312 ft4"><SPAN class="ft4">57.</SPAN><SPAN class="ft9">Book : Magazine : : Newspaper : ? (A)Journal (B)News (C)Article (D)Headline Ans : (A)</SPAN></P>
<P class="p137 ft1">Explanation : Second contains smaller articles of the same nature as the first .</P>
<P class="p40 ft1"><SPAN class="ft1">58.</SPAN><SPAN class="ft8">Tungsten : Filament : : Bronze : ?</SPAN></P>
<P class="p313 ft4">(A)Copper (B)Ships (C)Tin (D)Ornaments Ans : (D)</P>
<P class="p314 ft1">Explanation : First is used to make the second . 59. Claymore : Sword : : Beretta : ?</P>
<P class="p315 ft4">(A)Club (B)Axe (C)Knife (D)Gun Ans : (D)</P>
<P class="p135 ft1">Explanation : The first is the type of the second .</P>
<P class="p316 ft4"><SPAN class="ft4">60.</SPAN><SPAN class="ft9">Indolence : Work : : Taciturn : ? (A)Observe (B)Speak (C)Cheat (D)Act Ans : (B)</SPAN></P>
<P class="p137 ft1">Explanation : The words in each pair are antonyms of each other .</P>
<P class="p40 ft1"><SPAN class="ft1">61.</SPAN><SPAN class="ft8">Afaoetoxin : Food poison : : Histamine : ?</SPAN></P>
<P class="p317 ft4">(A)Allergy (B)Headache (C)Anthrax (D)Contamination Ans : (A)</P>
<P class="p318 ft1">Explanation : First causes the second . 62. Bald : Blond : : Barren : ?</P>
<P class="p319 ft4">(A)Vegetation (B)Farm (C)Fertile (D)Inhabited Ans : (C)</P>
<P class="p262 ft4">Explanation : The words in each pair are antonyms of each other . 63. Catalogue : Library Books : :Index : ?</P>
<P class="p135 ft1">(A)Chapter (B)Books (C)Preface (D)Contents</P>


<P class="p320 ft1">Ans : (D)</P>
<P class="p321 ft1">Explanation : Catalogue is an arranged list to find the names of the library books.Similarly Index is an arranged list of contents.</P>
<P class="p322 ft1">64. Tobaco : Nerves : : Alcohol : ?</P>
<P class="p323 ft1">(A)Liver (B)Liquor (C)Intoxication (D)Head Ans : (A)</P>
<P class="p324 ft4">Explanation : Consumption of first adversely affects the second . 65. Man : Shout : : Crow : ?</P>
<P class="p325 ft1">(A)Cow (B)Chirp (C)Multer (D)Mob Ans : (D)</P>
<P class="p320 ft1">Explanation :Second is the noisy sound produced by the first</P>

<input type="button" onclick="document.location.href='certificate.php'" class="button" value="View Certificate"/>
</div>
</div>

<script>
function openCity(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>
     
</body>
</html> 
