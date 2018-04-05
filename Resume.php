<!DOCTYPE html>
<html>
<head>
<title>Resume</title>

<?php
session_start();
$_SESSION['course'] = "Resume Writing";
?>

<style>
* {box-sizing: border-box}
body {font-family: "Lato", sans-serif;}

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
  <button class="tablinks" onclick="openCity(event, 'c1')" id="defaultOpen">Resume Skills</button>
  <button class="tablinks" onclick="openCity(event, 'c2')">DO and DONT'S</button>
  <button class="tablinks" onclick="openCity(event, 'c3')">Effective Resume Writing</button>
<button class="tablinks" onclick="openCity(event, 'c4')">Examples  Resume Writing</button>


</div>

<div id="c1" class="tabcontent">
<h1>Job Search Skills - Resume Writing</h1>

<p>No matter how smart you are until it properly reflects on your resume your skills will go unnoticed, because employers first see your resume not you. Therefore, being selected for an interview totally depends on your resume.</p>

<h2>What is Resume Writing?</h2>
<p>Resume Writing is writing about your personal and professional achievements in chronological order on a piece of paper. Since, this the first and the most important aspect of job search, your professionalism and skills have to be reflected on your resume. The language that you use on your resume should be simple, brief, and clear.</p>
<h2>Elements of a Resume</h2>
<p>Every resume has the following essential elements (without which it is incomplete) &minus;</p>
<ul class="list">
<li><p><b>Personal Data</b> &minus; It includes your name, address, and contact details (email ID and phone number).</p></li>
<li><p><b>Career Objective</b> &minus; Mention your career objective in such a way that explains how you will meet the demand of the job that you are applying for.</p></li>
</ul>
<ul class="list">
<li><p><b>Employment History</b> &minus; No matter how versatile your work experience is - Write only the relevant work experience, which is in the interest of the company where you are applying. For example, if you are applying for the computer programming job, you write only the computer related work experience. Though, you have also worked as a salesperson, do not mention this because your sales experience is not at all relevant for the computer programming job. It might create a negative impression.</p></li>
<li><p><b>Education</b> &minus; Mention all your educational qualifications including name of the programs/diploma, subjects, grade, passing year, schools/institutions name.</p></li>
<li><p><b>Optional Information</b> &minus; It includes your other skill sets such as technical skills, and projects (that you have handled) relevant to the job and some other achievements including award and recognitions. For example, you are a state/national level sportsman, etc.</p></li>
<li><p><b>Personal Information</b> &minus; It includes personal details, such as sex, religion, marital status, etc. which is not mandatory to mention. Hence, it can be skipped.</p></li>
<li><p><b>Hobbies</b> &minus; Not imperative, but worth mentioning on your resume. Many companies across the world consider it positively.</p></li>
<li><p><b>References</b> &minus; Put at least two persons’ name, designation, address, contact details, and your relationship with them. Mention only those people who know you very well and can speak positively about you; preferably, your professor or your boss from a previous company or one from each category.</p></li>
<li><p><b>Chronological Order</b> &minus; Your work experience and education should be arranged in chronology. You need to start with the current job and the last study program and then previous that and so on.</p></li>
</ul>

<h2>How to Deal with Awkward Points on Resume?</h2>
<p>Awkward points on your resume refers to employment gaps or short stints during your career span. You have to be very careful while mentioning these in your resume.</p>
<p>It is suggested to acknowledge gaps in employment in such a manner so as to not create a negative impression. This can be done by being honest and mentioning the reason for gap. If you did some volunteer work or took up a course to enhance your skills during the gap, it is always worth mentioning in your resume. However, it is advised to always do away with short stints in jobs. Mentioning these suggests instability.</p>
<h2>Organizing Your Resume</h2>
<p>Once you complete your resume, do not forget to &minus;</p>
<ul class="list">
<li>Review it.</li>
<li>Check it twice (to see if all the points included are in order).</li>
<li>Organize it (to check in terms of order, font, color, spacing, etc.).</li>
</ul>
<hr /></div>
<div id="c2" class="tabcontent">
<h1>Do's and Dont's</h1>
<p>DO keep your resume length to a minimum &ndash; two or three pages is ideal. Print in black ink, on one side of each sheet of A4 size paper, and choose fonts like Verdana, Arial, Calibri or Times. Include lots of white space and break up your text as much as possible using subheadings and bullet points to aid scannability. Short, sharp chunks of text work best.</p>
<p>DON&rsquo;T include personal details such as your date of birth, marital status or photo (unless you are applying for a job where these are relevant).</p>
<p>DO include a link to your website, if you have one (and if it&rsquo;s related to your work). Whether it&rsquo;s a website or blog, or a Twitter, LinkedIn or Instagram account, an online presence can really boost your image and get you taken more seriously, especially for careers in the media, creative industries and IT.</p>
<p>DON&rsquo;T make vague statements. Give facts context by backing them up with real examples. For instance, don&rsquo;t just say, &ldquo;I have excellent communication skills&rdquo;. Instead, say: &ldquo;My excellent communication skills have been fine-tuned by&hellip; and proved invaluable when&hellip;&rdquo;</p>
<p>DO, wherever possible, quantify your achievements. If you can say, for example, &ldquo;increased sales by $50,000&rdquo;, &ldquo;reduced turnover by 34%&rdquo; or &ldquo;increased website traffic by 125%&rdquo; rather than making a more general claim, that will give your assertions more weight and clarity.</p>
<p>DON&rsquo;T use a PDF format for your resume, especially for less IT-heavy industries, as some software won&rsquo;t be able to read it easily. Most companies prefer Word (.doc/.docx) files wherever possible.</p>
<p>DO use testimonials from previous employers. Consider adding them to your resume as hyperlinks, linking them to an employer testimonial on your LinkedIn profile or website (if you have one).</p>
<p>DON&rsquo;T forget to tailor your resume for each job application. The more precisely you address each of the criteria for the particular job, demonstrating how you fit and satisfy the criteria, the greater your chances of making the shortlist.</p>
<p>DO proofread and spell-check &ndash; and check again. A recent CareerBuilder survey found that 58 per cent of resumes contain typos. Make sure yours isn&rsquo;t one of them! If you&rsquo;re often going back and tweaking or updating your resume, typos, spelling mistakes and formatting issues can creep in. Doing so can easily create a mismatched subject and verb or knock a sentence out of alignment. Re-read the resume in its entirety each time you make an amendment.</p><hr/>
</div>
<div id="c3" class="tabcontent">
<h1>Effective Resume Writing</h1>
<a name="introduction"></a>
<p>A resume is a medium for advertising yourself,  its the first most means which you use to present yourself and try to claim that you are the best choice to your prospects employer. Through  your resume you have to showcase your major assets like &minus;</p>
<ul class="list">
<li>Qualifications</li>
<li>Experience</li>
<li>Achievements</li>
<li>Capabilities, and</li>
<li>Qualities</li>
</ul>
<p>You have to prepare your resume in such a way that it gives impression in first look that you are a perfect fit for the job you have applied. An employer hardly takes 10-15 seconds to make a decision about your interview call after looking at your resume. If your resume is well written then definitely you will be in the shortlisted candidates does not matter you have required potential or not but you will get a call otherwise your resume will become a part of either recycle bin or dustbin, again it does not matter if you are Einstein or Newton.</p>
<blockquote>The first draft of your resume may not be so impressive because a resume is always an evolving document which improves over the period of time, so keep modifying and improving it after its first draft and keep its different versions with you.</blockquote>
<p>Now without complicating the things, I will take you through step by step to create a great resume for you. I'm assuming you have Microsoft Word to write your resume, so now just follow the following steps &minus;</p>
<h2><a name="address_section"></a>Step 1: Address Section</h2>
<p>This  section will be on top of your resume giving a detail about your name, address, phone number and e-mail address. Keep this section left aligned and put a bold line below to the section to separate it from rest of the document as follows &minus;</p>
<pre class="result notranslate">
<span style="font:bold 18px Calibri,Georgia, serif;";>JOHN WILLIAMS</span>
Kondapur, Hyderabad - INDIA
Contact No: +91 2295103049
Email Id: john.william@gmail.com
<div style="height: 0; border-top: 2px solid #000000; width: 100%; margin: 5px 0;"></div>
</pre>
<p>If you are currently working then you can specify your company name just below to your name as follows &minus;</p>
<pre class="result notranslate">
<span style="font:bold 18px Calibri,Georgia, serif;">JOHN WILLIAMS</span>
IT Tools India Pvt Ltd
Kondapur, Hyderabad - INDIA
Contact No: +91 2295103049
Email Id: john.william@gmail.com
<div style="height: 0; border-top: 2px solid #000000; width: 100%; margin: 5px 0;"></div>
</pre>
<h2><a name="summary_section"></a>Step 2: Summary Section</h2>
<p>This section will start with a heading called <b>Summary</b> and followed by listing down your over-all experience, achievements, certifications and positive attributes etc. It is very similar to a movie trailer where editor keeps all great scenes from the movie and after watching that trailer you get excited to watch complete movie. You will have to choose attractive &amp; heavy words while documenting this section.</p>
<p>To draft summary section you will have to think a while with peaceful mind, jot down great points about yourself on a plain paper and check to make them more impressive and effective. If they are not leaving any impact on the reader then there is no point in including those points in the summary section.</p>
<p>If you are a fresh graduate then you should specify about your small but impressive projects you have done at university, highlight your achievements and project capabilities etc.</p>
<p>Let's look at one example which lists down few points about a telecom System Software Engineer, in your case this list can go from 2-3 bulleted points to 8-10 points.</p>
<table class="table table-bordered" style="background-color:#eee;">
<tr><td style="font:normal 16px Calibri,Georgia, serif;">
<span style="font:bold 18px Calibri,Georgia, serif;";>SUMMARY</span>
<ul class="list">
<li><p>A System Software Engineer graduated from Delhi University and having overall 4 years of extensive experience in developing state-of-the-art software modules for telecom industry specializing with BSS &amp; OSS.</p></li>
<li><p>Core expertise in rating and billing services related to 2G and 3G, 3G+ technologies including GSM, GPRS, VOIP, WiMax, V-SAT, VAS Services, and Leased Lines with various access technologies.</p></li>
<li><p>A Software Associate Analyst grown System Software Engineer having great experience with all the stages of SDLC including designing, developing, testing and rolling out complex telecom software's.</p></li>
<li><p>Exposure in drafting and implementing different processes and have been actively involved in ISO 9001 and ISO 27001 certifications.</p></li>
<li><p>Result oriented, self driven, highly motivated, smart and hungry to learn new technologies, methodologies, strategies and processes.</p></li>
</ul>
</tr>
</td>
</table>
<h2><a name="eductaion_section"></a>Step 3: Education Detail</h2>
<p>Because you already have given summary of your experience and achievements, so now let's start telling about our educational background. There are many organizations who give lot of preference to your educational background. So it is important to tell about your academic records. You should put your highest degree on top and then lower qualifications at lower levels.</p>
<p>This is extremely important to give information about your position, rank, percentage or CPI along with degree or certification otherwise many employers would throw your resume in dustbin if you don't give clear picture of your educational background. Now lets see one example on how to put educational  records in a resume.</p>
<table class="table table-bordered" style="background-color:#eee;">
<tr><td style="font:normal 16px Calibri,Georgia, serif;">
<span style="font:bold 18px Calibri,Georgia, serif;";>Education Detail</span>
<ul class="list">
<li><p>B.Tech in Computer Science (2005) from Ambehta University with 8.8 CPI.</p></li>
<li><p>B.Sc in Mathematics (2002) from Meerut University with 57.20% marks</p></li> 
<li><p>10+2 with Maths, Stats (1999) from U.P. board with 67.20% marks</p></li> 
<li><p>High School (1997) from U.P. board with 77.20% marks</p></li>
<li><p>Secured first position in statistics during B.Sc.</p></li>
<li><P>Gold medalist at 10+2 level due to highest rank in mathematics.</p></li>
</ul>
</td>
</tr>
</table>
<blockquote>If you have done various certifications and trainings then I would recommend to add a separate section for <b>Trainings &amp; Certifications</b> just below to Educational  Section.</blockquote>
<h2><a name="technical_section"></a>Step 4: Technical Skills</h2>
<p>Next section in your resume will present your Technical Skills. This section will start with telling your major skills on which you have good command. So list down all the skills first where you are fully confident and then keep rest of the skills at lower levels. Have a look at the following example where candidate has good command over Pro*C and C  but less experienced in Perl so put Pro*C and C first and Perl later. This is  important to note that all the lines given below are not required in all the cases. If you know only one skill then just tell about that skill, for example if you don't have any experience in any protocol then don't give that line in your resume</p>
<table class="table table-bordered" style="background-color:#eee;">
<tr><td style="font:normal 16px Calibri,Georgia, serif;">
<span style="font:bold 18px Calibri,Georgia, serif;";>Technical Skills</span>
<ul class="list">
<li><p><b>Programming Languages:</b> C, Pro*C, C++, JAVA and PERL</li>
<li><p><b>Operating Systems:</b> Red Hat Linux 9.0, Windows XP and Solaris 2.0</li>
<li><p><b>Tools & Technologies:</b> Front Page-2000, CGI, J2EE, JSP, CORBA</li>
<li><p><b>Databases:</b> MySQL, Sybase</li>
<li><p><b>Protocols:</b> SMTP, FTP, POP3, IMAP</li>
<li><p><b>Others:</b> Socket Programming, Multithreading, SDLC, OOP, UML</li>
</ul>
</td>
</tr>
</table>
<h2><a name="project_section"></a>Step 5: Projects Detail</h2>
<p>Here comes real story and this is really important to show your all the projects, assignments etc. Reader should understand what exactly you have done in past. Here you will put hands on experience with different type of projects, people and tools and technologies. You have to be clear on what was your, organizations, year of the project, roles, responsibilities, value add, achievements etc. on each and every project or position. You should also mention about what were the tools and technologies you have used during that project.</p>
<p>If your experience is not project based then you can simply name this heading as <b>Experience Detail</b> and list down all the experiences either in buletted form or in simple &amp; short 2-3 paragraphs.</p>
<p>You will start with the most recent project and continue listing down all the projects till the oldest one. If you have done only training project or thesis project then you can mention those projects along with your University projects in the same format. Here I will give examples of two projects &minus;</p>
<table class="table table-bordered" style="background-color:#eee;">
<tr><td style="font:normal 16px Calibri,Georgia, serif;">
<span style="font:bold 18px Calibri,Georgia, serif;";>Projects Detail</span><br/>
<span style="font:bold 15px Calibri,Georgia, serif;";>1 - Library Information System</b> [National Library, NY,USA ]</span>
<ul class="list">
<li><b>Duration:</b> Mar 2005 - Jun 2005</li>
<li><b>Team Size:</b> 3</li>
<li><b>Role Played:</b> Developer and Tester</li>
<li><b>Skills Used:</b> Pro*C, Red Hat Linux, MySQL</li>
</ul>
<p>This system simplifies day to day operation of a library which enables you to maintain library catalogue on electronic media and to keep a record of all the issued books in a particular day. Using this system, a user can generate a report of all the available books for a particular subject or ISBN and a report can be generated for all the issued books for a particular subject or ISBN.</p>
<span style="font:bold 15px Calibri,Georgia, serif;";>2 - Tiny Editor Implementation</b> [Aligarh University, UP, INDIA]</span>
<ul class="list">
<li><b>Duration:</b> Jan 2005 - Feb 2005</li>
<li><b>Team Size:</b> 1</li>
<li><b>Role Played:</b> Designer, Developer and Tester</li>
<li><b>Skills Used:</b> Java, MySQL and Red Hat Linux</li>
</ul>
<p>This was a small but useful text file editor which enables you to edit any text files available on Linux System. Using this editor user can open new or an existing file in text mode and can update its content and then finally that file can be saved on hard disk.</p>
</td>
</tr>
</table>
<h2><a name="strength_section"></a>Step 6: Strengths</h2>
<p>After giving a complete detail of all the projects, now you can tell about your major strengths. Look at the following examples, may be you don't have  all the strengths so list down only whatever you posses &minus;</p>
<table class="table table-bordered" style="background-color:#eee;">
<tr>
<td style="font:normal 16px Calibri,Georgia, serif;">
<span style="font:bold 18px Calibri,Georgia, serif;";>Strengths</span>
<ul class="list">
<li><p>Good oral, written &amp; presentation skills</p></li>
<li><p>A high tolerance of stress and enjoys responsibilities</p></li>
<li><p>Quick learner with good grasping ability</p></li>
<li><p>Action-oriented and result-focused</p></li>
<li><p>Lead &amp; work as a team in an organized way</p></li>
<li><p>Great time management skill</p></li>
</ul>
</td>
</tr>
</table>
<h2><a name="curricular_section"></a>Step 7: Extra Curricular</h2>
<p>This section is optional because it is always not necessary that you would have been involved in some extra curricular activities same time for various roles its not required to have any extra curricular. Some time this section may have lot of weightage specially when your resume reader and you have same curriculum. I'm giving you a simple example to list down your curricular activities</p>
<table class="table table-bordered" style="background-color:#eee;">
<tr>
<td style="font:normal 16px Calibri,Georgia, serif;">
<span style="font:bold 18px Calibri,Georgia, serif;";>Extra Curricular</span>
<ul class="list">
<li><p>Have been a member of University Technical Council</p></li>
<li><p>Won first prize for debate at inter state level competition</p></li>
<li><p>Played Cricket at inter state level</p></li>
<li><p>Mono acting, Singing and Reading</p></li>
</ul>
</td>
</tr>
</table>
<h2><a name="personal_section"></a>Step 8: Personal Detail</h2>
<p>This will be the last but mandatory section of your resume  but will provide all important information about you. A simple and easy example is given here &minus;</p>
<table class="table table-bordered" style="background-color:#eee;">
<tr><td style="font:normal 16px Calibri,Georgia, serif;">
<span style="font:bold 18px Calibri,Georgia, serif;";>Personal Detail</span>
<ul class="list">
<li><p><b>Date of Birth:</b> 5th Aug 1983<p></li>
<li><p><b>Sex & Status:</b> Male &amp; Single<p></li>
<li><p><b>Nationality:</b> INDIAN<p></li>
<li><p><b>Languages Known:</b> English, Hindi, Urdu<p></li>
<li><p><b>Passport Number:</b> A09384848 valid till 2018<p></li>
</ul>
</td>
</tr>
</table>
<h2><a name="conclusion_section"></a>Step 9: Conclusion</h2>
<p>Now you are done  and you have a great resume in your hand. Let me put all the sections together in a word document to prepare a final resume. </p>
<p>I will recommend to go through the following tips to add lot of value into your resume.</p>
<ul class="list">
<li><p>Keep your resume file name short, simple and informational. A good resume file name could be  like <b>JohnWilliams-Resume2013.docx</b></p></li>
<li><p>You can keep a small passport size photo at the top-right corner of the resume but this is really not required.</p></li>
<li><p>Don't use various unnecessary formatting in your resume. Keep simple text as much as possible in your resume. Have a look at sample resume. You will find many HRs who prefer resume only in simple text format. So if you will keep resume formating simple then it would be easy to format that resume in any format.</p></li>
<li><p>Don't  include too many phone numbers, email addresses or addresses.</p></li>
<li><p>Don't  prepare too big resume. It should be as precise as possible.</p></li>
<li><p>Always give a summary of the resume at the beginning.</p></li>
<li><p>Always give a detail of roles and responsibilities you have taken during any project.</p></li>
<li><p>Make sure the resume is neat, free of typing errors, and on plain white paper.</p></li>
<li><p>Never give a reason for leaving your previous job, your salary expectations, your current job challenges etc, and better to leave such points to be discussed at  the time of interview if required.</p></li>
</ul>
<p>Hope you enjoyed reading all the above instructions and we at tutorialspoint wish you very best of luck.</p>
<hr />


</div>
<div id="c4" class="tabcontent">
<a href="resume_writing.pdf">Sample Resume</a>
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
