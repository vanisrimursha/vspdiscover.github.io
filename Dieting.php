<!DOCTYPE html>
<html>
<head>
<title>Dieting</title>
<?php
session_start();
$_SESSION['course'] = "Dieting";
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
  <button class="tablinks" onclick="openCity(event, 'c1')" id="defaultOpen">Dieting Tips</button>
  <button class="tablinks" onclick="openCity(event, 'c2')">Dieting Plan</button>
  <button class="tablinks" onclick="openCity(event, 'c3')">Advantage of Dieting</button>


</div>

<div id="c1" class="tabcontent">
<h1>Tips</h1>
<p><b>1. Don't skip breakfast</b>
Skipping breakfast won't help you lose weight. You could miss out on essential nutrients and you may end up snacking more throughout the day because you feel hungry. Check out five healthy breakfasts.
<br/><br/>
<p><b>2. Eat regular meals
</b>
Eating at regular times during the day helps burn calories at a faster rate. It also reduces the temptation to snack on foods high in fat and sugar. Find out more about eating heathily.

<br/><br/>
<b>3. Eat plenty of fruit and veg
</b>
Fruit and veg are low in calories and fat, and high in fibre – three essential ingredients for successful weight loss. They also contain plenty of vitamins and minerals. Read up on getting your 5 A DAY.

<br/><br/>
<b>4. Get more active
</b>
Being active is key to losing weight and keeping it off. As well as providing numerous health benefits, exercise can help burn off the excess calories you can't cut through diet alone. Find an activity you enjoy and are able to fit into your routine.

<br/><br/>
<b>5. Drink plenty of water
</b>
People sometimes confuse thirst with hunger. You can end up consuming extra calories when a glass of water is really what you need. 

<br/><br/>
<b>6. Eat high-fibre foods
</b>
Foods containing lots of fibre can help keep you to feel full, which is perfect for losing weight. Fibre is only found in food from plants, such as fruit and veg, oats, wholegrain bread, brown rice and pasta, and beans, peas and lentils.

<br/><br/>
<b>7. Read food labels
</b>
Knowing how to read food labels can help you choose healthier options. Use the calorie information to work out how a particular food fits into your daily calorie allowance on the weight loss plan. Find out more about reading food labels.

<br/><br/>
<b>8. Use a smaller plate
</b>
Using smaller plates can help you eat smaller portions. By using smaller plates and bowls, you may be able to gradually get used to eating smaller portions without going hungry. It takes about 20 minutes for the stomach to tell the brain it's full, so eat slowly and stop eating before you feel full.

<br/><br/>
<b>9. Don't ban foods
</b>
Don't ban any foods from your weight loss plan, especially the ones you like. Banning foods will only make you crave them more. There's no reason you can't enjoy the occasional treat as long as you stay within your daily calorie allowance.

<br/><br/>
<b>10. Don't stock junk food
</b>
To avoid temptation, try to not stock junk food – such as chocolate, biscuits, crisps and sweet fizzy drinks – at home. Instead, opt for healthy snacks, such as fruit, unsalted rice cakes, oat cakes, unsalted or unsweetened popcorn, and fruit juice.

<br/><br/>
<b>11. Cut down on alcohol
</b>
A standard glass of wine can contain as many calories as a piece of chocolate. Over time, drinking too much can easily contribute to weight gain. Find out more about the calories in alcohol.

<br/><br/>
<b>12. Plan your meals
</b>
Try to plan your breakfast, lunch, dinner and snacks for the week, making sure you stick to your calorie allowance. You may find it helpful to make a weekly shopping list.

<br/><br/>
</div>
<div id="c2" class="tabcontent">
<h1>Diet Plan</h1>
  
  <br>
  <b>1) Chuck that C.R.A.P. out of your body</b>
  <br>
  Wondering what C.R.A.P. is? Well, it is a group of food that does no good to your body. C for caffeine, R for refined sugar, A for alcohol and P for processed food. If you remove these four food groups from your life, you can live your dream of a flat belly. One of the biggest enemies of a flat stomach, these groups cling to your bodies and make it difficult for you to lose fat.
  <br>
  <br>
  <b>2) Treat yourself</b>
  <br>
  You are already doing good by resisting unnecessary food cravings but a mere treating won't do any harm. Enjoy a cheat meal once a week, be it creamy pasta, chocolate fudge or anything delightful, it will actually help you speed up your metabolism.
  <br>
  <br>
  <b>3) Go for fish-oil supplements</b>
  <br>
  Found in sardines and salmons, fish oil is a bliss food. Loaded with omega-3 fatty acids, which are essential for everyone, it should definitely be included in your diet. If not consumed directly, there are a lot of fish oil supplements available in the market too. These supplements help in burning fat, thus, leading to a flat belly.
  <br>
  <br>
  <b>4) Never skip breakfast</b>
  <br>
  We all know the importance of a healthy breakfast and there is a reason it is called one of the most important meals of the day. Breakfast should be consumed within an hour of waking up and should be containing all the essential nutrients our body requires.
  <br>
  <br>
  <b>5) Avoid eating after 8pm</b>
  <br>
  "Eat breakfast like a king, lunch like a prince, and dinner like a pauper". Dinner is something, which should be as light as possible because it is that time of the day when your digestive system is preparing to shut down. So avoid eating after 8 pm so as to give your body enough time to digest.
  <br>
  <br>
  <b>8 Food Swaps that will flatten your belly in a week</b>
  <br>
  <br>
  Mere swapping some food items with their healthy versions can actually change your life. It can help you in getting a flat belly with less effort. Try the following pointers and notice the difference on your own.
  <br>
  <br>
  <b>1) Say bye-bye to fizzy drinks</b>
  <br>
  When we talk about fizzy drinks, the only thing it brings along with it besides taste is gas. These carbonated drinks actually fatten your belly. To prevent yourself from those unnecessary fats, swap them with flat drinks like green teas and juices.
  <br>
  <br>
  <b>2) Ditch raw vegetables</b>
  <br>
  Vegetables are extremely healthy and must be included in your diet. But your body struggles to break it down when it is eaten raw. So it's better to have steamed veggies instead of eating them raw. It'll cut the extra efforts your stomach and gastrointestinal tract have to undergo in order to break those vegetables down.
  <br>
  <br>
  <b>3) Cut the salt</b>
  <br>
  <span class="im">
    Water retention induces a puffed belly. And as salt is something which is attracted to water, it contributes in gaining extra fat. To avoid this unnecessary fat, switch to salt-free seasonings like cayenne pepper and notice the difference on your own.
    <div class="last1brdiv"></div><br>
    <br>
  </span>
  <b>4) Probiotic yogurt</b>
  <br>
  Bacteria present in the gut have a very crucial role in the digestion of food. Its imbalance can actually disrupt the digestion system leading to a puffed belly. Indulge in probiotics like Greek yogurt in order to meet those sugar cravings without gaining extra pounds. It helps in improving intestinal mobility and thus eases digestion.
  <br>
  <br>
  <b>5) Drink more fluids</b>
  <br>
  <span class="im">
    Fluids are essential for a healthy body. Especially when it comes to bloating, hydrating really helps. And what better fluid can there be than water? Drink at least 8 glasses of water to get a healthy bloat-free body to substitute those sugary drinks.
    <div class="last1brdiv"></div><br>
    <br>
  </span>
  <b>6) Avoid the gum</b>
  <br>
  Some people have a strange habit of chewing something or the other all day long. For meeting this craving of chewing, they often end up eating gums, which do no benefit to the body at all. An amazing swap is to try munching on dry fruits like almonds, which will actually be beneficial to your body and provide it with those necessary nutrients at the same time.
  <br>
  <br>
  <b>7) Chuck the carbs</b>
  <br>
  <span class="im">
    Our muscles are habitual of storing a kind of carbohydrate known as glycogen. This stored carbohydrate is only consumed when our body does some extra exercise. When we get rid of carbs, we can actually access this stored fuel and consume it off. For this avoid consuming carbs after lunch and substitute with low-carb food so that no new fat is stored.
    <div class="last1brdiv"></div><br>
    <br>
  </span>
  <b>8) Eat your fiber</b>
  <br>
  <span class="im">
    Fiber is amazing when it comes to helping digestion. Organic fiber cereals actually prevent constipation and help you get that flat stomach quickly if consumed regularly in breakfast. Substitute high fiber oats with any traditional cereal and that flat belly isn't far.
    <div class="last1brdiv"></div><br>
    <br>
  </span>
  <br>
  <b>Food Plan</b>
  <br>
  <b>
    <br>
  </b>
 
  <br>
  <br>
  <b>Day 1</b>
  <br>
  <br>
  <b>Breakfast:</b>
  Omelette made with three egg whites and filled with 75g chopped mixed peppers and a handful of spinach
  <br>
  <b>Mid-morning snack:</b>
  100g chicken with ½ red pepper, sliced
  <br>
  <b>Lunch:</b>
  One grilled chicken breast, mixed salad leaves, red peppers, green beans and ¼ tbsp olive oil
  <br>
  <b>Mid-afternoon snack:</b>
  100g turkey breast with ¼ cucumber, sliced
  <br>
  <b>Dinner:</b>
  100g grilled chicken breast with steamed broccoli
  <br>
  <br>
  <b>Day 2</b>
  <br>
  <br>
  <b>Breakfast:</b>
  Baked chicken breast with a handful of stir-fried kale
  <br>
  <b>Mid-morning snack:</b>
  100g turkey breast and ½ green pepper, sliced
  <br>
  <b>Lunch:</b>
  Baked haddock fillet with mixed green salad, with ½ tbsp olive oil
  <br>
  <b>Mid-afternoon snack:</b>
  100g turkey breast with 75g steamed broccoli
  <br>
  <b>Dinner:</b>
  One salmon steak with chopped dill and steamed green beans
  <br>
  <br>
  <b>Day 3</b>
  <br>
  <br>
  <b>Breakfast:</b>
  100g smoked salmon, plus spinach
  <br>
  <b>Mid-morning snack:</b>
  100g chicken breast with ½ yellow pepper, sliced
  <br>
  <b>Lunch:</b>
  One grilled chicken breast with garden salad and ½ tbsp olive oil
  <br>
  <b>Mid-afternoon snack:</b>
  100g turkey slices with ¼ avocado
  <br>
  <b>Dinner:</b>
  One grilled lamb steak (or two cutlets); steamed broccoli and spinach
  <br>
  <br>
  <b>Day 4</b>
  <br>
  <br>
  <b>Breakfast:</b>
  Scrambled eggs (one whole, two whites), tomatoes, green beans
  <br>
  <b>Mid-morning snack:</b>
  100g turkey slices with ¼ cucumber, sliced
  <br>
  <b>Lunch:</b>
  Baked cod fillet with salad, tomato, spinach and ½ tbsp olive oil
  <br>
  <b>Mid-afternoon snack:</b>
  100g chicken breast with ½ grilled courgette
  <br>
  <b>Dinner:</b>
  100g chicken breast stir-fry made with ½ tsp oil and green veg
  <br>
  <br>
  <b>Day 5</b>
  <br>
  <br>
  <b>Breakfast:</b>
  200g turkey breast with ¼ avocado and ¼ cucumber, sliced
  <br>
  <b>Mid-morning snack:</b>
  Two hard-boiled eggs with ½ red pepper, sliced
  <br>
  <b>Lunch:</b>
  150g grilled prawns with a green salad and tomatoes, ½ tbsp olive oil
  <br>
  <b>Mid-afternoon snack:</b>
  100g turkey breast with five almonds
  <br>
  <b>Dinner:</b>
  100g chicken breast with steamed broccoli
  <br>
  <br>
  <b>Day 6</b>
  <br>
  <br>
  <b>Breakfast:</b>
  One grilled haddock fillet with roasted peppers and courgettes
  <br>
  <b>Mid-morning snack:</b>
  100g chicken with one tomato, sliced
  <br>
  <b>Lunch:</b>
  150g turkey with green salad, steamed broccoli and ½ tbsp olive oil
  <br>
  <b>Mid-afternoon snack:</b>
  100g chicken with five pecan nuts
  <br>
  <b>Dinner:</b>
  150g-200g steak served with steamed green beans and broccoli
  <br>
  <br>
  <b>Day 7</b>
  <br>
  <br>
  <b>Breakfast:</b>
  Three-egg-white omelette, grilled tomatoes and steamed spinach
  <div class="last8brdiv"></div><br>
  <b>Mid-morning snack:</b>
  100g turkey with five Brazil nuts
  <div class="last7brdiv"></div><br>
  <b>Lunch:</b>
  150g chicken breast with steamed asparagus and green salad
  <div class="last6brdiv"></div><br>
  <b>Mid-afternoon snack:</b>
  100g turkey with ¼ cucumber, sliced
  <div class="last5brdiv"></div><br>
  <b>Dinner:</b>
  Grilled, skinless duck breast with steamed oriental greens or broccoli
</div>
<div id="c3" class="tabcontent">
<h3>Disadvantages of dieting</h3>
<p><span style="font-family: Arial, Helvetica, sans-serif;">The disadvantages of dieting doesn&#8217;t represent every diet ,there are a few healthy diet which  have more advantages.You should also note that a diet is what you eat, right now you are on a diet but how you eat determine if you will lose or gain weight.Here we go:</span></p>
<ul>
<li><span style="font-family: Arial, Helvetica, sans-serif;">decrease in metabolism (many plans provide very low calories to allow weight loss this result in your body storing fat rather than burning )</span></li>
<li><span style="font-family: Arial, Helvetica, sans-serif;">can be unhealthy since you lose many micro nutrients</span></li>
<li><span style="font-family: Arial, Helvetica, sans-serif;">more weight gain after the diet if there is no exercise involved in the plan</span></li>
<li><span style="font-family: Arial, Helvetica, sans-serif;">extreme hunger</span></li>
<li><span style="font-family: Arial, Helvetica, sans-serif;">muscle lose (depends on the type of regimen you can lose water weight and muscles instead of fat)</span></li>
<li><span style="font-family: Arial, Helvetica, sans-serif;">dehydration (the body can lose a lot of sodium which hold water ) </span></li>
<li><span style="font-family: Arial, Helvetica, sans-serif;">can not eat out (some strict diets)</span></li>
<li><span style="font-family: Arial, Helvetica, sans-serif;">state of Ketosis ( the body burns it fats for energy)</span></li>
<li><span style="font-family: Arial, Helvetica, sans-serif;">kidney failure (high protein diets can strain your kidney</span></li>
<li><span style="font-family: Arial, Helvetica, sans-serif;">high cholesterol (also cause by high protein diets)</span></li>
<li><span style="font-family: Arial, Helvetica, sans-serif;">kidney stones ( high protein diets)</span></li>
<li><span style="font-family: Arial, Helvetica, sans-serif;"><span style="background-color: white;"><span style="color: #333333;"><span style="line-height: 20.6875px;">Monotonous (you can easily become bored eat the same foods over long term)</span></span></span></span></li>
</ul>
<p style="text-align: center;">
<h3><span style="font-size: 23px;">Advantages of dieting</span></h3>

<li style="margin: 0px 0px 0.5em; padding: 0px;"><span style="font-family: Arial, Helvetica, sans-serif;">given the above information the first advantage of dieting is ,it restricts calories in order for us to lose weight at a faster rate.</span></li>
<li style="margin: 0px 0px 0.5em; padding: 0px;"><span style="font-family: Arial, Helvetica, sans-serif;">improves our self control.</span></li>
<li style="margin: 0px 0px 0.5em; padding: 0px;"><span style="font-family: Arial, Helvetica, sans-serif;">reduce blood sugar levels</span></li>
<li style="margin: 0px 0px 0.5em; padding: 0px;"><span style="font-family: Arial, Helvetica, sans-serif;">reduce blood pressure</span></li>
<li style="margin: 0px 0px 0.5em; padding: 0px;"><span style="font-family: Arial, Helvetica, sans-serif;">reduce cholesterol</span></li>
<li style="margin: 0px 0px 0.5em; padding: 0px;"><span style="font-family: Arial, Helvetica, sans-serif;">reduce our stress and improve our mood</span></li>
<li style="margin: 0px 0px 0.5em; padding: 0px;"><span style="font-family: Arial, Helvetica, sans-serif;">increase in energy</span></li>
<li style="margin: 0px 0px 0.5em; padding: 0px;"><span style="font-family: Arial, Helvetica, sans-serif;">reduction in fats</span></li>
</ul>
<h2 style="background-color: white; color: #333333; font-family: arial, helvetica, sans-serif; font-size: 1.2em; margin: 0px 0px 0.6em; padding: 0px;">Advantages and disadvantages of popular diets</h2>
<div style="background-color: white; clear: both !important; color: #333333; font-family: Arial, Helvetica, sans-serif; font-size: 14px; line-height: 20.6875px; margin: 0px; overflow: auto; padding: 0px;">
<table style="border-collapse: collapse; border-spacing: 0px; margin: 0px; padding: 0px; width: 520px;" cellspacing="0" cellpadding="0">
<thead style="border-left-color: #d4e0ee; border-left-style: solid; border-left-width: 1px;">
<tr>
<th style="background-color: #efefef; border-color: #c9c9c9; border-style: solid; border-width: 0px 1px 1px 0px; font-size: inherit; font-style: inherit; font-variant: inherit; font-weight: inherit; line-height: inherit; margin: 0px; padding: 0.4em !important; width: 200px;">
<div style="font-weight: bold; margin: 0px; padding: 0px;">Type of diet</div>
</th>
<th style="background-color: #efefef; border-color: #c9c9c9; border-style: solid; border-width: 0px 1px 1px 0px; font-size: inherit; font-style: inherit; font-variant: inherit; font-weight: inherit; line-height: inherit; margin: 0px; padding: 0.4em !important; width: 200px;">
<div style="font-weight: bold; margin: 0px; padding: 0px;">Advantages</div>
</th>
<th style="background-color: #efefef; border-color: #c9c9c9; border-style: solid; border-width: 0px 1px 1px 0px; font-size: inherit; font-style: inherit; font-variant: inherit; font-weight: inherit; line-height: inherit; margin: 0px; padding: 0.4em !important; width: 200px;">
<div style="font-weight: bold; margin: 0px; padding: 0px;">Disadvantage</div>
</th>
<th style="background-color: #efefef; border-bottom-color: #c9c9c9; border-left-color: #c9c9c9; border-style: solid none solid solid; border-top-color: #c9c9c9; border-width: 0px 0px 1px; font-size: inherit; font-style: inherit; font-variant: inherit; font-weight: inherit; line-height: inherit; margin: 0px; padding: 0.4em !important; width: 200px;">
<div style="font-weight: bold; margin: 0px; padding: 0px;">Examples</div>
</th>
</tr>
</thead>
<tbody>
<tr>
<td style="background-color: #f1f5fa; border-right-color: #c9c9c9; border-right-style: solid; border-right-width: 1px; margin: 0px; padding: 0.4em !important; width: 200px;">
<div style="font-weight: bold; margin: 0px; padding: 0px; text-align: center;">Limited food choice diet</div>
</td>
<td style="background-color: #f1f5fa; border-right-color: #c9c9c9; border-right-style: solid; border-right-width: 1px; margin: 0px; padding: 0.4em !important; width: 200px;">
<div style="margin: 0px; padding: 0px;">1. Reduce the number of food choices 2. Limited opportunity to make mistakes 3. Very low in calories for first few days,</div>
</td>
<td style="background-color: #f1f5fa; border-right-color: #c9c9c9; border-right-style: solid; border-right-width: 1px; margin: 0px; padding: 0.4em !important; width: 200px;">
<div style="margin: 0px; padding: 0px;">1. Deficient in many nutrients,depending on the foods allowed 2. Monotonous difficult to adhere to 3.eating out and eating socially are difficult 4.very low long term success 5.No scientific basis for these diets</div>
</td>
<td style="background-color: #f1f5fa; border-right-style: none; border-right-width: 0px; margin: 0px; padding: 0.4em !important; width: 200px;">
<div style="margin: 0px; padding: 0px;">1.Cabbage soup diet 2. Lemonade diet 3.Bananas and milk diet 4.Fit for life diet 5.Kempner rice diet.6Caveman diet</div>
</td>
</tr>
<tr>
<td style="background-color: #fcfdfe; border-right-color: #c9c9c9; border-right-style: solid; border-right-width: 1px; margin: 0px; padding: 0.4em !important; width: 200px;">
<div style="font-weight: bold; margin: 0px; padding: 0px;">Restricted calorie balanced food plans</div>
</td>
<td style="background-color: #fcfdfe; border-right-color: #c9c9c9; border-right-style: solid; border-right-width: 1px; margin: 0px; padding: 0.4em !important; width: 200px;">
<div style="margin: 0px; padding: 0px;">1.Sufficiently low in calories to allow weight loss 2. Nutrient balanced 3.Palatable 4.Include readily available foods 5.Reasonably priced 6.Easy to cook meals 7.May have point system 8.Help you develop new eating habits</div>
</td>
<td style="background-color: #fcfdfe; border-right-color: #c9c9c9; border-right-style: solid; border-right-width: 1px; margin: 0px; padding: 0.4em !important; width: 200px;">
<div style="margin: 0px; padding: 0px;">1.Do not offer immediate and large weight loss</div>
</td>
<td style="background-color: #fcfdfe; border-right-style: none; border-right-width: 0px; margin: 0px; padding: 0.4em !important; width: 200px;">
<div style="margin: 0px; padding: 0px;">1. Weight watchers diet 2.Jenny Craig diet 3. Prudent diet(American heart association) 4. Overeaters anonymous 5.South beach diet</div>
</td>
</tr>
<tr>
<td style="background-color: #f1f5fa; border-right-color: #c9c9c9; border-right-style: solid; border-right-width: 1px; margin: 0px; padding: 0.4em !important; width: 200px;">
<div style="font-weight: bold; margin: 0px; padding: 0px; text-align: center;">Fasting starvation diet</div>
</td>
<td style="background-color: #f1f5fa; border-right-color: #c9c9c9; border-right-style: solid; border-right-width: 1px; margin: 0px; padding: 0.4em !important; width: 200px;">
<div style="margin: 0px; padding: 0px;">1.Very quick weight loss</div>
</td>
<td style="background-color: #f1f5fa; border-right-color: #c9c9c9; border-right-style: solid; border-right-width: 1px; margin: 0px; padding: 0.4em !important; width: 200px;">
<div style="margin: 0px; padding: 0px;">1.Nutrient deficient 2.Danger of Ketosis more than 60% muscle loss and less than 40% fat loss 3.Long term results are rare 4.Lower metabolism rate (result in an increase in fat storage after retiring the diet)</div>
</td>
</tr>
</tbody>
</table>

<h3><span style="font-family: Arial, Helvetica, sans-serif; font-size: large;">Choosing a diet</span></h3>
<h4><span style="font-family: Arial, Helvetica, sans-serif;">How to recognize a sensible diet?</span></h4>
<div>
<ul>
<li><span style="font-family: Arial, Helvetica, sans-serif;">The diet plan should be a combination of an exercise program ,a balanced diet where you can get your micro nutrients</span></li>
<li><span style="font-family: Arial, Helvetica, sans-serif;">Choose a diet which suits your lifestyle</span><span style="font-family: Arial, Helvetica, sans-serif;"> . A stay a home mom can choose a diet which involves cooking a balance diet such as weight watcher . A women who work about ten hours a day should not choose</span><span style="font-family: Arial, Helvetica, sans-serif;"> a diet very low in calorie it can result in snacking or catabolizing.</span></li>
<li><span style="font-family: Arial, Helvetica, sans-serif;">Stay away from plans which allow fewer than 1200 calories a day .</span></li>
<li><span style="font-family: Arial, Helvetica, sans-serif;">Diet which promises weight loss without any effort or some secret formula most often than not are unhealthy diets or they just trying to get your money.</span></li>
<li><span style="font-family: Arial, Helvetica, sans-serif;">Choose a regimen which have been approved by reputable nutritionist or institution.</span></li>
<li><span style="font-family: Arial, Helvetica, sans-serif;">Beware of diets which promotes vitamins,pills ,shots ,gadgets or brand name foods. eg HCG diet</span></li>
<li><span style="font-family: Arial, Helvetica, sans-serif;">A good plan should teach you how to keep off the weight. </span></li>
<li><span style="font-family: Arial, Helvetica, sans-serif;">Plans which insist you must a eat some type of food on a particular day are inflexible plans ,they are difficult to follow .</span></li>
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
