<!DOCTYPE html>
<html>
<head>
<title>First Aid</title>

<?php
session_start();
$_SESSION['course'] = "First Aid";
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
  <button class="tablinks" onclick="openCity(event, 'c1')" id="defaultOpen">First Aid</button>
  <button class="tablinks" onclick="openCity(event, 'c2')">First aid Tips</button>
  <button class="tablinks" onclick="openCity(event, 'c3')">First aid kit</button>
 
</div>

<div id="c1" class="tabcontent">
<h1>First Aid </h1>
<P>First aid is the immediate care given to a person who has been injured or suddenly taken ill. It includes self-help and home care if medical assistance is not available or is delayed. It also includes well-selected words of encouragement, evidence of willingness to help, and promotion of confidence by demonstration of competence. </P> <P>The person giving first aid, the first-alder, deals with the whole situation, the injured person, and the injury or illness. He knows what not to do as well as what to do; he avoids errors that are frequently made by untrained persons through well-meant but misguided efforts. He knows, too, that his first aid knowledge and skill can mean the difference between life and death, between temporary and permanent disability, and between rapid recovery and long hospitalization. </P> <P>NEED FOR FIRST AID TRAINING</P> <P>Statistics show that accidents are the leading cause of death among persons from 1 year old to 38 years old; thereafter, accidents are one of the leading causes. The annual cost of medical attention, the loss of earning ability due to temporary or permanent impairment, the direct property damage, and the insurance costs amount to many billions of dollars each year, not to mention the toll in pain, suffering, disability, and personal tragedy. </P> <P>Added to the grim accident statistics is the fact that the pattern of medical care has changed. Individuals today require, and should demand, the best possible care. Equipment for diagnosis and treatment, which is needed to provide such care, is usually at a hospital. Moreover, the growing population and expanding health needs have not been balanced by a proportional increase in numbers of doctors, nurses, and allied health workers. It is not enough to say, "Call the doctor"; a doctor may not be available to come to the scene of the emergency. </P> <P>VALUE OF FIRST AID TRAINING</P> <P>First aid training is of value in both preventing and treating sudden illness or accidental injury and in caring for large numbers of persons caught in a natural disaster. </P> <P><EM>Self-Help</EM></P> <P>If you, as a first-aider, are prepared to help others, you are better able to care for yourself in case of injury or sudden illness. Even if your own condition keeps you from caring for yourself, you can direct others in carrying out correct procedures to follow in your behalf. </P> <P><EM>Help for Others</EM></P> <P>Having studied first aid, you are prepared to give others some instruction in first aid, to promote among them a reasonable safety attitude, and to assist them wisely if they are stricken. There is always an obligation on a humanitarian basis to assist the stricken and the helpless. There is no greater satisfaction than that resulting from relieving suffering or saving a life. </P> <P><EM>Preparation for Disaster</EM></P> <P>First aid training is of particular importance in case of catastrophe, when medical and hospital services are limited or delayed. Catastrophe may take the form of a hurricane, a flood, an earth-quake, a tornado, an explosion, or a fire. It may also take the form of a single accidental death or a life-threatening illness. Knowing what to do in an emergency helps to avoid the panic and disorganized behavior that are characteristic of unprepared persons at such times. Knowledge of first aid is a civic responsibility. It not only helps to save lives and prevent complications from injuries but also helps in setting up an orderly method of handling emergency problems ac-cording to their priority for treatment, so that the greatest possible good may be accomplished for the greatest number of people. </P> <P><EM>Safety Awareness</EM></P> <P>First aid training not only provides you with knowledge and skill to give life support and other emergency care but also helps you to develop safety awareness and habits that promote safety at home, at work, during recreation, and on the streets and highways. In the promotion of safety awareness, it is important to closely relate three terms: cause, effect, and prevention. </P> <P><STRONG>Cause</STRONG></P> <P>As various types of injury and illness are studied, initially only the more likely causes are identified, mainly because of the diversity of circumstances that are present in most accident situations. Aside from the more likely and obvious causative conditions, there are related human and mechanical factors to consider, as well as factors beyond the control of man. </P> <P>A primary consideration in determining the root cause of an accident is human failure: an act of thoughtless, careless, or unwise behavior. Human failure may involve an act of doing something—or perhaps not doing something. It can create danger to oneself as well as to others. A person may wantonly disobey some regulation or law that has been established for safety. People often fail to heed warnings and follow directions. Instruction in the safe use of an object or in safe conduct may be inadequate; supervision during the learning process may be ignored. Human failure can also involve such mental or physical conditions as fatigue, inattention, impatience, and structural or functional handicaps of the body. </P> <P>The possibility of mechanical malfunctions or structural failures as contributing causes of accidents also requires consideration. Faulty design or engineering may create a built-in hidden hazard. Manufacturing or construction procedures could lack the quality control necessary to ensure safe performance or use. The raw material may contain some inordinate defect. </P> <P>When the in-depth study of an actual or hypothetical accident situation identifies all the causative factors, it becomes possible to determine what can be done to eliminate, control, or avoid the hazards. </P> <P><STRONG>Effect</STRONG></P> <P>The immediate effects of an injury or sudden illness consist of changes in the body's structure and functions. These effects are dealt with in the material on first aid care, particularly in discussions of signs and symptoms. However, long-range—possibly permanent—effects are also involved in many situations. Permanent disability can make it difficult for a person to enjoy a fully active and productive life. The economic and social structure of the family unit is frequently disrupted. In an accident, mental anguish brought on by knowing that one may have contributed to another's death or disability can linger on through a lifetime. </P> <P>When analysis carefully considers both immediate and long-range or permanent effects of injury or sudden illness, it becomes obvious why every possible effort should be taken to eliminate, control, or avoid a situation that is hazardous to oneself or to others. </P> <P><STRONG>Prevention</STRONG></P> <P>A better understanding of the overall accident problem is developed if all the circumstances surrounding various types of accidents are carefully studied, including the broad range of first aid care that may be required. With such understanding, a person is likely to think and act more carefully, thoughtfully, and wisely. He tends to become more concerned for his own personal safety, as well as for that of others. He is likely to become genuinely interested in creating a safer environment on the highway, in the home, at work, in school, and at play. He will have a more responsible attitude toward accident prevention. </P> <P>The causes of an accident indicate what accident-producing conditions and activities require attention. Accident effects indicate why such conditions and activities deserve concerted attention. Preventive measures should include a consideration of how these conditions and activities can be eliminated, controlled, or avoided. </P> <P>GENERAL DIRECTIONS FOR FIRST AID</P> <P>As a first-aider, you may encounter a variety of problem situations. Your decisions and actions will vary according to the circumstances that produced the accident or sudden illness, the number of persons involved, the immediate environment, and the availability of medical assistance, emergency dressings and equipment, and help from others. You will need to adapt what you have learned to the situation at hand or will need to improvise. </P> <P>Sometimes, prompt action is needed to save a life. At other times, there is no need for haste. Efforts in the latter case will be directed toward preventing further injury, obtaining assistance, and reassuring the victim, who may be emotionally upset and apprehensive, as well as in pain. </P> <P>First aid begins with action, which in itself has a calming effect. If there are multiple injuries or if several persons are hurt, priorities must be set. If you are the first-aider in charge you should enlist the help of bystanders to make telephone calls, to direct traffic, to keep others at a distance if necessary, to position safety flares in case of highway accidents, and so on. You should provide life support to victims with life-threatening injuries, attending first to those suffering from stoppage of breathing and then to those with severe hemorrhaging. You can then turn to those with less critical injuries. </P> <P>Telephone or have someone else telephone the appropriate authorities regarding the accident. The police department or the high-way patrol is a good first contact, but the circumstances surrounding the accident should be a guide as to whom to call. You should always have a list of emergency telephone numbers available. If the numbers are not readily available, ask the operator for assistance. Describe the problem, indicate what is being done, and ask for whatever help you think is needed, such as an ambulance, the fire department, the rescue squad, or utility company personnel. Give your name, the location of the accident, the number of persons involved, and the telephone number where you can be reached. Do not hang up the receiver until after the other party hangs up, because he may wish to clarify some information. </P> <P><EM>Urgent Care</EM></P> <P>In case of serious injury or sudden illness, and while help is being summoned, you must immediately—</P> <UL> <LI>Determine the best way of rescue (for example, removal of an accident victim from water, from a fire, or from a garage or room containing carbon monoxide or smoke).  <LI>Ensure that the victim has an open airway and give mouth-to-mouth or mouth-to-nose artificial respiration if it is necessary.  <LI>Control severe bleeding.  <LI>Give first aid for poisoning or ingestion of harmful chemicals. </LI></UL> <P>Specific emergencies that require immediate first aid will be discussed in the appropriate chapters in the text. </P> <P><EM>Additional First Aid Directions</EM></P> <P>Unless it is necessary for safety to move a victim at once, keep him in the position best suited to his condition or injuries. Do not let him get up or walk around. Protect him from aggravation of existing injuries. If blankets or covers are available, keep him warm enough to overcome or avoid chilling. If he is exposed to cold or dampness, place blankets or additional clothing over and under him. </P> <P>If haste is not imperative, or after immediate problems are under control, survey the situation and try to find out exactly what happened. The direction and extent of the examination should be determined by the kind of accident or sudden illness and the needs of the situation. Have a reason for what you do. Information may be obtained from the victim or from persons who were present and saw the accident or the onset of illness. If the victim is unconscious and has no sign of external injury, try to obtain identification either from papers carried in the victim's billfold or purse or from bystanders, so that relatives may be notified. (It is advisable to have a witness when you are looking for identification.)</P> <P>Many people with chronic illness, such as heart disease, may carry medication with them, to be taken in the event of sudden illness; or they may have emergency medical identification, such as a card or bracelet, that gives a clue to their condition. </P> <P>Examine the victim methodically. Loosen constricting clothing but do not pull on the victim's belt, in case spinal injuries are present. Remove or open clothing as necessary to examine the victim and give first aid (clothing may be cut away or ripped at the seams) but do not expose the victim unduly without protective cover. (Discretion must always be used in removing clothing.) Note the general appearance (including discoloration) of the victim's skin and other signs and symptoms that may give a clue to the injury or sudden illness. In the case of a victim with dark skin pigmentation, it may be difficult to interpret changes in skin color; look for changes in the color of the mucous membrane, which is the inner surface of the lips, mouth, and eyelids. Use all other available information concerning signs and symptoms, the history of the accident, and the like. </P> <P>Check the victim's pulse; if you cannot feel it in the wrist, check for a pulse of the carotid artery at the side of his neck. Is the victim awake, stuporous, or unconscious? Does he respond to questions? Look at the expression of his eyes and the size of his pupils. Examine his trunk and limbs for open and closed wounds and for signs of fractures. </P> <P>If the victim is unconscious, look for evidence of head injury. If he is conscious, look for paralysis of one side of his face or body. See whether he shows evidence of a recent convulsion. (He may have bitten his tongue, producing a laceration.) Check the front of the victim's neck to determine whether he is a laryngectomee. (Most laryngectomees carry a card or other identification stating that they cannot breathe through nose or mouth.) Do not inadvertently block the stoma of a laryngectomee when carrying out other first aid, because blockage could cause death from asphyxiation. </P> <P>If poisoning is suspected, check for stains or burns about the victim's mouth and a source of poisoning nearby, such as pills, medicine bottles, household chemicals, or pesticides. </P> <P>Apply emergency dressings, bandages, and splints as necessary, if they are available. </P> <P>Decide whether it is absolutely necessary to move the victim before help arrives. </P> <P>After you determine the nature of the victim's injuries or illness, your plan of action will be affected by the kind of accident or sudden illness and the needs of the situation. Another major factor influencing this plan is the availability of human and material resources. </P> <P>The first aid worker is not expected to explain the victim's probable condition to bystanders or to reporters. He is expected, however, to remain in charge until the victim can be placed in the care of qualified persons (for example, a physician, an ambulance crew, a rescue squad, or a police officer) or until the victim can take care of himself or can be placed in the care of relatives. Meanwhile, proper first aid measures should include standard specific techniques that have been taught and that, in view of the circumstances, appear to be necessary. </P> <P>Above all, as a first aid worker, you should know the limits of your capabilities and must make every effort to avoid further injury to the victim in your attempt to provide the best possible emergency first aid care. </P><hr/>
</div>
<div id="c2" class="tabcontent">
<h1>Common Tips</h1>
<p><strong>Act Fast:</strong> If there's bleeding, first press firmly over the site with a clean cloth until it stops, anywhere from three to 15 minutes. Clean under lukewarm running water and gently pat dry. When a wound is dirty or was caused by an animal scratch, rinse it with water and gently lather with soap. If the skin is broken, apply a thin layer of an over-the-counter antibiotic ointment (like Neosporin or Bacitracin), then cover with a bandage or gauze and adhesive tape. If you can't control the bleeding after several attempts with direct pressure, call your pediatrician or 911, or head to an E.R. If a large piece of skin has been removed, wrap it in a clean, moist cloth and place it in a bag over ice -- a doctor may be able to reattach it. An animal bite that has caused a deep cut should be seen by a doctor.<div class="middleAds"><div class="ad"><div id="div-gpt-square-fixed-1" data-tier="1"></div></div><div class="ad"><div id="div-gpt-square-fixed-2" data-tier="2"></div></div></div></p><p><strong>Follow-Up Care:</strong> Dab on the anti-biotic ointment and apply a new bandage daily (or twice daily, if it's a large or deep wound) until the cut heals, so your child can't pick at it. If it appears to be forming or draining pus or becomes swollen, tender, or red, see a doctor right away to treat the infection. After the wound heals, slather on SPF 30 until it starts to fade, because newly healed skin can sunburn more easily, making any eventual scar more noticeable.</p><ul></ul><h4>Burn</h4><p><strong>Act Fast:</strong> Immediately hold under cool running water or apply a cold, wet towel until the pain subsides. Cover any small blisters with a loose bandage or gauze and tape; call a doctor as soon as possible if burns are on the face, hands, or genitals, or if they're larger than 1/4 inch anywhere on the body. If the burn looks deep -- the skin may be white or brown and dry -- go to the E.R. For a burn covering a tenth of the body or more, don't use cold compresses; call 911 and cover the child with a clean sheet or a blanket to prevent hypothermia until help arrives.<div class="highImpactSlot"><div class="div-sm-highImpact"></div></div></p><p><strong>Follow-Up Care:</strong> Don't pop any blisters yourself. If the skin breaks, apply an anti-biotic cream and cover the area with a bandage or gauze and tape until it's healed. Watch for any redness, swelling, tenderness, or discharge -- all signs of infection.</p><p><strong>Did You Know?</strong> Scalds, from hot foods or liquids, are the most common burn injury in children ages 6 months to 2 years.</p><ul></ul><h4>Nosebleed</h4><p><strong>Act Fast:</strong> Have your child sit upright, but don't tilt her head back. Loosen any tight clothing around her neck. Pinch the lower end of her nose close to the nostrils and have her lean forward while you apply pressure continuously for five to ten minutes. Don't release and check the nose; it could prolong the bleeding.</p><p><strong>Follow-Up Care:</strong> If the nosebleed is the result of a trauma, reduce swelling by holding an ice pack against the bridge of the nose after the bleeding slows down. If it persists after ten minutes or returns later, call your doctor or go to the E.R. to check for a break.</p><ul></ul><h4>Splinter or Glass</h4><p><strong>Act Fast:</strong> Use soap and water to wash around the splinter. Clean a pair of tweezers with rubbing alcohol and slowly pull the splinter out. Wash the skin again. When a splinter is hard to remove, leave it for a day or so to see whether it comes out on its own. If your child steps on a piece of glass, and it's not a single shard you can easily remove, gently wrap a clean cloth around the area and go to the E.R. Ask your doctor about an X-ray even if you think you've gotten the glass out; scans often find shards that can lead to infection.</p><p><strong>Follow-Up Care:</strong> If the splinter isn't out after a few days or is causing your child pain, turning red, or has pus, see your doctor to have it removed safely.</p><ul></ul><h4>Eye Trauma</h4><p><strong>Act Fast:</strong> When your child has severe pain, constant tearing, light sensitivity, or blurry vision after being poked or hit in the eye, hold a cool, wet cloth over the area and head to the E.R. He may have a scratch on the eye's surface, which is treated with prescription drops or ointment and usually heals within 48 hours. If a chemical has been splashed in his eye, hold the lid open and flush with lukewarm water and call Poison Control (800-222-1222).</p><p><strong>Follow-Up Care:</strong> Monitor your child for pain and vision problems in the weeks that follow a poked eye. These could be a sign of traumatic iritis, an inflammation of the colored part of the eye, or a deeper injury.</p><ul></ul><h4>Insect Bite or Sting</h4><p><strong>Act Fast:</strong> If the insect left a stinger, gently scrape the skin with your fingernail or a credit card to remove it without breaking it. (Using tweezers can squeeze out more venom.) Call 911 if your child has trouble breathing, is coughing, or develops a hoarse voice, hives, or swollen lips or tongue.</p><p><strong>Follow-Up Care:</strong> For itching, hold a cold compress over the area for a minute, or apply calamine lotion or a 1% hydrocortisone cream or topical antihistamine (if the skin isn't broken or scabbed). Contact your doc if you suspect a tick bite. He may want to test for Lyme and other tick-borne diseases.</p><p><strong>Did You Know?</strong> Bites and stings are the third most common accident seen in the E.R. among kids 4 and under.</p><ul></ul><h4>First-Aid FAQ</h4><p><strong>Q:</strong> Do cuts heal faster under a bandage or when left to "breathe"?</p><p><strong>A:</strong> While a cut is still open, a bandage can help prevent infection and scabs. But after a few days, a little air can speed healing. You can put your child to bed without a bandage, and if you can do it without disturbing him too much, sneak in a couple hours later to reapply a new one.</p><p><strong>Q:</strong> Are antibiotic ointments really necessary?</p><p><strong>A:</strong> Yes, medicines like Neosporin can help healing. But you don't want to apply it unnecessarily -- say, to a small scrape or a bug bite when the skin isn't open. Some researchers believe antibiotic overuse has led to the rise of tough-to-treat staph infections like MRSA.</p><p><strong>Q:</strong> Any tricks to getting my child to tolerate an ice pack?</p><p><strong>A:</strong> Parents tend to make the pack too cold, often by placing ice in a thin plastic bag. But a compress doesn't need to be frigid to bring down swelling; just wrap some ice in a dry washcloth. Younger kids might like the animal-shaped compresses you keep in the fridge or freezer.</p><p><strong>Q:</strong> After an injury, when does a child need to get a tetanus shot?</p><p><strong>A:</strong> Some wounds caused by a dirty, rusty, or dusty object put a child at risk for tetanus. If she's gotten her immunizations on schedule, she's probably fine. But to be safe, call the pediatrician to discuss her tetanus risk.</p><ul></ul><h4>How to Calm Your Child</h4><p>Keep your expression and tone of voice as relaxed as you possibly can, and try these doctor-tested tips.</p><p><strong>If Your Child Is 5 or Younger</strong></p><p>Cover wounds with a cloth as you treat them. If you can, have another adult do the bandaging while you comfort your child.</p><p>Distract her with books, small toys, bubbles, or stickers.</p><p>Use age-appropriate words. If your child doesn't know what a hospital is, say it's a place where people help boo-boos feel better.</p><p><strong>If Your Child Is Between 6 &amp; 12</strong></p><p>Involve him in first aid. Even letting him hold the ointment can help him feel more in control.</p><p>Keep him busy with movies or TV shows, portable electronic games, an iPod with calming music, or stories (true or imagined).</p><p>Preview it all. Being surprised by a pinch or a sting only creates more anxiety about what's coming next.</p><ul></ul><h4>First-Aid Essentials</h4><p>Every parent needs a well-stocked kit at home and on the go, says David Markenson, M.D. Kits for the house and car can be big enough to hold a wide range of supplies, but don't overstuff them. Stroller kits can be pared down.</p><p>Breathing barrier (if a stranger needs to administer CPR; foldable, disposable shields are available at redcrossstore.org)</p><p>Tweezers (to remove splinters or ticks)</p><p>1% hydrocortisone cream and calamine lotion (for bites or stings)</p><p>Alcohol wipes (to clean scissors and tweezers)</p><p>Oral antihistamine (for allergic reactions)</p><p>Non-latex gloves (to pull on clean hands when treating a wound)</p><p>Acetaminophen or ibuprofen (for pain and fever)</p><p>Thermometer (non-mercury, non-glass)</p><p>Triple-antibiotic ointment (to prevent infection)</p><p>Hand sanitizer (to clean hands in case water and soap aren't available)</p><p>Blanket (to prevent heat loss after large burns and to treat for shock)</p><p>Bottled water (to rinse wounds if there's no faucet nearby)</p><p>Instant cold compress (to control swelling)</p></em></p><ul></ul>
</div>
<div id="c3" class="tabcontent">
<h1>First Aid Tool Lit</h1>
<p>
	Try to keep your first aid kit small and simple. Stock it with multi-use items. Almost anything that provides good visibility of contents can be used for a household first aid kit.</p>
<ul>
	<li>
		If your kit will be on the move, a water-resistant, drop-proof container is best.</li>
	<li>
		Inexpensive nylon bags, personal kits, fanny packs, or make-up cases serve very well.</li>
	<li>
		You do not need to spend a lot of money on a fancy &quot;medical bag.&quot; Use resealable sandwich or oven bags to group and compartmentalize items.</li>
	<li>
		Put 
</ul>
<p>
</p><p><b><a name="how_to_use_a_first_aid_kit" class="bookmark"></a></b>
<p>
	Make sure you know how to properly use all of the items in your kit, especially the medications. Train others in your family to use the kit. You may be the one who needs first aid! Pack and use barrier items such as latex gloves to protect you from bodily fluids of others. Check the kit twice a year and replace expired medications. <b>The National Poison Control Center phone number in the U.S. is 1-800-222-1222. </b></p>
<p>
	Where to keep your first aid kit</p>
<ul>
	<li>
		The best place to keep your first aid kit is in the kitchen. Most family activities take place here. The bathroom has too much humidity, which shortens the shelf life of items.</li>
	<li>
		The travel kit is for true trips away from home. Keep it in a suitcase or backpack or drybag (for example, a zip lock plastic bag), depending on the activity.</li>
	<li>
		A first aid kit for everyday use in the car should be just like the home first aid kit. For that matter, you could keep similar kits in your boat (inside a waterproof bag), travel trailer, mobile home, camper, cabin, vacation home, and wherever you spend time.<span id="cntid"></span></li>
</ul>                                                       
        
  
        

			
        <div class="wrapper"><p><b><a name="what_to_put_in_your_household_kit" class="bookmark"></a></b>
<p>
	You can buy all items for your first aid kits at a well-stocked drug store. Ask the pharmacist for help in selecting items.</p>
<p>
	<b>Home kit:</b> A household first aid kit should include these items:</p>
<ul>
	<li>
		Adhesive tape</li>
	<li>
		
	<li>
		Exam gloves - for infection protection, and can be made into ice packs if filled with water and frozen</li>
	<li>
		Polysporin antibiotic cream - to apply to simple wounds</li>
	<li>
		Nonadhesive pads (Telfa) - for covering wounds and burns</li>
	<li>
		Pocket mask for CPR</a></li>
	<li>
		Resealable oven bag - as a container for contaminated articles, can become an ice pack</li>
	<li>
		Safety pins (large and small) - for splinter removal and for securing triangular bandage sling</li>
	<li>
		Scissors</li>
	<li>
		Triangular bandage - as a sling, towel, tourniquet</li>
	<li>
		Tweezers - for splinter or stinger or tick removal</li>
	<li>
		In case of a medical or 
</ul><p><b><a name="what_to_put_in_your_travel_kit" class="bookmark"></a></b>
<p>
	Travel kit: A travel first aid kit may contain these items:</p>
<ul>
	<li>
		Adhesive tape</li>
	<li>
		4&quot; x 4&quot; sterile gauze pads</li>
	<li>
		Antacid 
	<li>
		Antidiarrheal 
	<li>
		Antihistamine cream</li>
	<li>
		Antiseptic agent (small bottle liquid soap) - for cleaning wounds and hands</li>
	<li>
		
	<li>
		Adhesive bandages (all sizes)</li>
	<li>
		Diphenhydramine (Benadryl) - oral antihistamine</li>
	<li>
		Book on first aid</li>
	<li>
		
	<li>
		
	<li>
		Dental kit - for broken filling</li>
	<li>
		Exam gloves</li>
	<li>
		Small flashlight</li>
	<li>
		
	<li>
		Insect repellant</li>
	<li>
		Knife (small Swiss Army-type)</li>
	<li>
		Moleskin - to apply to 
	<li>
		Nasal spray decongestant - for nasal congestion from  allergies</a></li>
	<li>
		Nonadhesive wound pads (Telfa)</li>
	<li>
		Polysporin antibiotic ointment</li>
	<li>
		Oral decongestant</li>
	<li>
		Personal medications (enough for the trip duration and perhaps a couple of extra in case of delays) and items (for example, a cane or knee  braces</a> if needed)</li>
	<li>
		Phone card with at least 60 minutes of time (and not a close expiration date) plus at least 10 quarters for pay phones and a list of important people to reach in an emergency; cell phone with charger (cell service is not available in may areas, especially remote areas)</li>
	<li>
		Plastic resealable bags (oven and sandwich)</li>
	<li>
		Pocket mask for CPR (although now, CPR does not have to be mouth to mouth)</li>
	<li>
		Safety pins (large and small)</li>
	<li>
		Scissors</li>
	<li>
		
	<li>
		Thermometer</li>
	<li>
		Tweezers</li>
	
</ul>
	
</ul>
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
