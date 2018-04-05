<!DOCTYPE html>
<html>
<head>
<title>Nutrition</title>

<?php
session_start();
$_SESSION['course'] = "Nutrition";
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
  <button class="tablinks" onclick="openCity(event, 'c1')" id="defaultOpen">Nutrition</button>
</div>

<div id="c1" class="tabcontent">
<h1>Nutrition</h1><h3>Definition</h3><div class="runseg">Good nutrition can help prevent disease and promote health. There are six categories of nutrients that the body needs to acquire from food: protein, carbohydrates, fat, fibers, vitamins</a> and minerals</a>, and water.</div><h4>Proteins</h4><div class="runseg">Protein supplies amino acids to build and maintain healthy body tissue. There are 20 amino acids considered essential because the body must have all of them in the right amounts to function properly. Twelve of these are manufactured in the body but the other eight amino acids must be provided by the diet. Foods from animal sources such as milk or eggs often contain all these essential amino acids while a variety of plant products must be taken together to provide all these necessary protein components.</div><h4>Fat</h4><div class="runseg">Fat supplies energy and transports nutrients. There are two families of fatty acids considered essential for the body: the omega-3 and omega-6 fatty acids. Essential fatty acids are required by the body to function normally. They can be obtained from canola oil, flaxseed oil, cold-water fish, or fish oil, all of which contain "omega-3+fatty+acids">omega-3 fatty acids</a>, and primrose or black currant seed oil, which contains omega-6 fatty acids. The American diet often contains an excess of omega-6 fatty acids and insufficient amounts of omega-3 fats. Increased consumption of omega-3 oils is recommended to help reduce risk of cardiovascular diseases and "cancer">cancer</a> and alleviate symptoms of rheumatoid arthritis, "premenstrual+syndrome">premenstrual syndrome</a>, dermatitis, and inflammatory bowel disease.</div><h4>Carbohydrates</h4><div class="runseg">Carbohydrates are the body&#x0027;s main source of energy and should be the major part of total daily intake. There are two types of carbohydrates: simple carbohydrates (such as sugar or honey) or complex carbohydrates (such as grains, beans, peas, or potatoes). Complex carbohydrates are preferred because these foods are more nutritious yet have fewer calories per gram compared to fat and cause fewer problems with overeating than fat or sugar. Complex carbohydrates also are preferred over simple carbohydrates by diabetics because they allow better blood glucose control.</div><h4>Fiber</h4><div class="runseg">Fiber is the material that gives plants texture and support. Although it is primarily made up of carbohydrates, it does not have a lot of calories and is usually not broken down by the body for energy. Dietary fiber is found in plant foods such as fruits, vegetables, legumes, nuts, and whole grains.</div><div class="runseg">There are two types of fiber: soluble and insoluble. Insoluble fiber, as the name implies, does not dissolve in water because it contains high amount of cellulose. Insoluble fiber can be found in the bran of grains, the pulp of fruit and the skin of vegetables. Soluble fiber is the type of fiber that dissolves in water. It can be found in a variety of fruits and vegetables such as apples, oatmeal and oat bran, rye flour, and dried beans.</div><div class="runseg">Although they share some common characteristics such as being partially digested in the stomach and intestines and have few calories, each type of fiber has its own specific health benefits. Insoluble fiber speeds up the transit of foods through the digestive system and adds bulk to the stools, therefore, it is the type of fiber that helps treat "constipation">constipation</a> or "diarrhea">diarrhea</a> and prevents colon cancer. On the other hand, only soluble fiber can lower blood cholesterol levels. This type of fiber works by attaching itself to the cholesterol so that it can be eliminated from the body. This prevents cholesterol from recirculating and being reabsorbed into the bloodstream. In 2003, the World Health Organization released a new report specifically outlining the link of a healthy diet rich in high-fiber plant foods to preventing cancer.</div><h4>Vitamins and minerals</h4><div class="runseg">Vitamins are organic substances present in food and required by the body in a small amount for regulation of metabolism and maintenance of normal growth and functioning. The most commonly known vitamins are A, B<sub>1</sub> (thiamine), B<sub>2</sub> (riboflavin), B<sub>3</sub> (niacin), B<sub>5</sub> (pantothenic acid), B<sub>6</sub> (pyridoxine), B<sub>7</sub> (biotin), B<sub>9</sub> (folic acid), B<sub>12</sub> (cobalamin), C (ascorbic acid), D, E, and K. The B and C vitamins are watersoluble, excess amounts of which are excreted in the urine. The A, D, E, and K vitamins are fat-soluble and will be stored in the body fat.</div><div class="runseg">Minerals are vital to our existence because they are the building blocks that make up muscles, tissues, and bones. They also are important components of many life-supporting systems, such as hormones, oxygen transport, and enzyme systems.</div><div class="runseg">There are two kinds of minerals: the major (or macro) minerals and the trace minerals. Major minerals are the minerals that the body needs in large amounts. The following minerals are classified as major: calcium, phosphorus, magnesium, sodium, potassium, sulfur, and chloride. They are needed to build muscles, blood, nerve cells, teeth, and bones. They also are essential electrolytes that the body requires to regulate blood volume and acid-base balance.</div><div class="runseg">Unlike the major minerals, trace minerals are needed only in tiny amounts. Even though they can be found in the body in exceedingly small amounts, they are also very important to the human body. These minerals participate in most chemical reactions in the body. They also are needed to manufacture important hormones. The following are classified as trace minerals: iron, zinc, iodine, copper, manganese, fluoride, chromium, selenium, molybdenum, and boron.</div><div class="runseg">Many vitamins (such as vitamins A, C, and E) and minerals (such as zinc, copper, selenium, or manganese) act as antioxidants. They protect the body against the damaging effects of free radicals. They scavenge or mop up these highly reactive radicals and change them into inactive, less harmful compounds. In so doing, these essential nutrients help prevent cancer and many other degenerative diseases, such as premature "aging">aging</a>, heart disease, autoimmune diseases, arthritis, "Cataracts">cataracts</a>, Alzheimer&#x0027;s disease, and diabetes mellitus.</div><h4>Water</h4><div class="runseg">Water helps to regulate body temperature, transports nutrients to cells, and rids the body of waste materials.</div><h3>Origins</h3><div class="runseg">Unlike plants, human beings cannot manufacture most of the nutrients that they need to function. They must eat plants and/or other animals. Although nutritional therapy came to the forefront of the public&#x0027;s awareness in the late twentieth century, the notion that food affects health is not new. John Harvey Kellogg was an early health-food pioneer and an advocate of a high-fiber diet. An avowed vegetarian, he believed that meat products were particularly detrimental to the colon. In the 1870s, Kellogg founded the Battle Creek Sanitarium, where he developed a diet based on nut and vegetable products.</div><h3>Purpose</h3><div class="runseg">Good nutrition helps individuals achieve general health and well-being. In addition, dietary modifications might be prescribed for a variety of complaints including "Allergies">allergies</a>, anemia, arthritis, colds, depressions, "fatigue">fatigue</a>, gastrointestinal disorders, high or low blood pressure, "insomnia">insomnia</a>, headaches, "obesity">obesity</a>, pregnancy, premenstrual syndrome (PMS), respiratory conditions, and stress.</div><div class="runseg">Nutritional therapy may also be involved as a complement to the allopathic treatments of cancer, diabetes, and Parkinson&#x0027;s disease. Other specific dietary measures include the elimination of food additives for attention deficit hyperactivity disorder (ADHD), gluten-free "Diets">diets</a> for schizophrenia, and dairy-free for chronic respiratory diseases.</div><div class="runseg">A high-fiber diet helps prevent or treat the following health conditions:</div><div class="runseg"><ul>
<li>High cholesterol levels. Fiber effectively lowers blood cholesterol levels. It appears that soluble fiber binds to cholesterol and moves it down the digestive tract so that it can be excreted from the body. This prevents the cholesterol from being reabsorbed into the bloodstream.</li>
<li>Constipation. A high-fiber diet is the preferred nondrug treatment for constipation. Fiber in the diet adds more bulk to the stools, making them softer and shortening the time foods stay in the digestive tract.</li>
<li>Hemorrhoids. Fiber in the diet adds more bulk and softens the stool, thus, reducing painful hemorrhoidal symptoms.</li>
<li>Diabetes. Soluble fiber in the diet slows down the rise of blood sugar levels following a meal and helps control diabetes.</li>
<li>Obesity. Dietary fiber makes a person feel full faster.</li>
<li>Cancer. Insoluble fiber in the diet speeds up the movement of the stools through the gastrointestinal tract. The faster food travels through the digestive tract, the less time there is for potential cancer-causing substances to work. Therefore, diets high in insoluble fiber help prevent the accumulation of toxic substances that cause cancer of the colon. Because fiber reduces fat absorption in the digestive tract, it also may prevent breast cancer.</li>
</ul></div><div class="runseg">A diet low in fat also promotes good health and prevents many diseases. Low-fat diets can help treat or control the following conditions:</div><div class="runseg"><ul>
<li>Obesity. High fat consumption often leads to excess caloric and fat intake, which increases body fat.</li>
<li>Coronary artery disease. High consumption of saturated fats is associated with coronary artery disease.</li>
<li>Diabetes. People who are overweight tend to develop or worsen existing diabetic conditions due to decreased insulin sensitivity.</li>
<li>Breast cancer. A high dietary consumption of fat is associated with an increased risk of breast cancer.</li>
</ul></div><h3>Description</h3><div class="runseg">The four basic food groups, as outlined by the United States Department of Agriculture (USDA) are:</div><div class="runseg"><ul>
<li>dairy products (such as milk and cheese)</li>
<li>meat and eggs (such as fish, poultry, pork, beef, and eggs)</li>
<li>grains (such as bread cereals, rice, and pasta)</li>
<li>fruits and vegetables</li>
</ul></div><div class="runseg">The USDA recommendation for adults is that consumption of meat, eggs, and dairy products should not exceed 20% of total daily caloric intake. The rest (80%) should be devoted to vegetables, fruits, and grains. For children age two or older, 55% of their caloric intake should be in the form of carbohydrates, 30% from fat, and 15% from proteins. In addition, saturated fat intake should not exceed 10% of total caloric intake. This low-fat, high-fiber diet is believed to promote health and help prevent many diseases, including heart disease, obesity, and cancer.</div><div class="runseg">Allergenic and highly processed foods should be avoided. Highly processed foods do not contain significant amounts of essential trace minerals. Furthermore, they contain lots of fat and sugar as well as preservatives, artificial sweeteners and other additives. High consumption of these foods causes build up of unwanted chemicals in the body and should be avoided. Food allergies causes a variety of symptoms including food cravings, weight gain, bloating, and water retention. They also may worsen chronic inflammatory conditions such as arthritis.</div><h3>Preparations</h3><div class="runseg">An enormous body of research exists in the field of nutrition. Mainstream Western medical practitioners point to studies that show that a balanced diet, based on the USDA Food Guide Pyramid, provides all of the necessary nutrients.</div><div class="runseg">In 2004, the USDA was working on a revision of the Food Guide Pyramid to reflect changes in American lifestyle habits. The new eating guide was due for release in January 2005. The World Health Organization (WHO) also was weighing in on the obesity and nutrition issue, even struggling with objections from member nations that supply goods such as sugar, to endorse a global strategy in spring 2004 on diet, physical activity and health.</div><div class="runseg">The Food Guide Pyramid recommends the following daily servings in six categories:</div><div class="runseg"><ul>
<li>grains: six or more servings</li>
<li>vegetables: five servings</li>
<li>fruits: two to four servings</li>
<li>meat: two to three servings</li>
<li>dairy: two to three servings</li>
<li>fats and oils: use sparingly</li>
</ul></div><h3>Precautions</h3><div class="runseg">Individuals should not change their diets without the advice of nutritional experts or health care professionals. Certain individuals, especially children, pregnant and lactating women, and chronically ill patients, only should change their diets under professional supervision.</div><h3>Side effects</h3><div class="runseg">It is best to obtain vitamins and minerals through food sources. Excessive intake of vitamins and mineral supplements can cause serious health problems. Likewise, eating too much of one type of food, as can happen with fad diets, can be harmful. The key to nutrition is moderation. If a person feels they are short on iron, for example, he or she should not go too far to the extreme in getting more iron through diet and supplements. A 2003 report said that too much stored iron in the body has possibly been linked with heart disease, cancer and diabetes.</div><div class="runseg">The following is a list of possible side effects resulting from excessive doses of vitamins and minerals:</div><div class="runseg"><ul>
<li>vitamin A: "Birth+Defects">birth defects</a>, irreversible bone and liver damage</li>
<li>vitamin B<sub>1</sub>: deficiencies in B<sub>2</sub> and B<sub>6</sub></li>
<li>vitamin B<sub>6</sub>: damage to the nervous system</li>
<li>vitamin C: affects the absorption of copper; diarrhea</li>
<li>vitamin D: "hypercalcemia">hypercalcemia</a> (abnormally high concentration of calcium in the blood)</li>
<li>phosphorus: affects the absorption of calcium</li>
<li>zinc: affects absorption of copper and iron; suppresses the immune system</li>
</ul>
<hr/>
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
