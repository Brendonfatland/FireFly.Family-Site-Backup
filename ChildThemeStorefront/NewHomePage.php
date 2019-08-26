<?php
/**
 * The template for displaying the homepage.
 *
 * This page template will display any functions hooked into the `homepage` action.
 * By default this includes a variety of product displays and the page content itself. To change the order or toggle these components
 * use the Homepage Control plugin.
 * https://wordpress.org/plugins/homepage-control/
 *
 * Template name: NewHomepage
 *
 * @package storefront
 */

get_header(); ?>
</div></div>
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/list.js/1.5.0/list.min.js"></script>
<script>
var j = jQuery.noConflict();


j( function() {
   j( "#sortable" ).sortable();
   j( "#sortable" ).disableSelection();
  } );

function myFunction() {
window.location.reload();
/*
  j( "#myInput" ).val("");
j("#SF").val("NullS");
j("#Dept").val("NullD");
j("li").show(); 
*/
}


function ShowUserInput() {
var Depo1 = "." + j("#Dept").val();
var SF1 = "." + j("#SF").val();



if (Depo1 == ".NullD" && SF1 == ".NullS" ){
console.log(Depo1);console.log(SF1 );console.log("if 1");
j(".styleCol").show();
} 
if (SF1 !== ".NullS" && Depo1 === ".NullD"  ){
console.log(Depo1);console.log(SF1 );console.log("else if 1");
j(SF1).show();
} 
if (SF1 === ".NullS" && Depo1 !== ".NullD"  ){
console.log(Depo1);console.log(SF1 );console.log("else if 2");
j(Depo1).show();}

if (SF1 !== ".NullS" && Depo1 !== ".NullD"  ){
console.log(Depo1);console.log(SF1 );console.log("else if 3");
j(Depo1 + SF1).show();
}
      
}
function hideAllQuick() {
j(".styleCol").hide();
}

function mySubmit(){
hideAllQuick();
ShowUserInput();
}

function ShowMyDeptSelection() {
var Depo2 = "." + j("#Dept").val();
var SF2 = "." + j("#SF").val();

if (Depo2 == ".NullD" && SF2== ".NullS" ){
console.log(Depo2);console.log(SF2);console.log("if 1");
j(".styleCol").show();

} else if (SF2 !== ".NullS" && Depo1 === ".NullD"  ){
console.log(Depo2);console.log(SF2);console.log("else if 1");

j("SF2").show();
} else if (SF2 === ".NullS" && Depo2 !== ".NullD"  ){
console.log(Depo2);console.log(SF2);console.log("else if 2");

j("Depo2").show();
} else if (SF2 !== ".NullS" && Depo2 !== ".NullD"  ){
console.log(Depo2);console.log(SF2);console.log("else if 3");

 j(Depo2).show(); j(SF2).show(); }   
}


function myDeptSubmit(){
ShowMyDeptSelection();
}


</script>
<style>
.wp-image-242{margin-top: 20px !important;}
.wp-image-241{margin-top: 49px !important;}
.wp-image-240 { margin-top: 54px !important;}
.wp-image-240{margin-top: 28px !important;}
.wp-image-239{margin-top: 28px !important;}
.TomasCarlson{top: 332px !important;}
.CoreyBain{margin-top: 27px !important;}
.RoyJones{margin-top:46px !important;}
.michaelTischler{margin-top:39px !important;}
.AlexDepontes{margin-bottom: -1px !important;
    height: 281px !important;
    width: 229px !important;}
.joeSlime {height: 280px !important;}
.moveMeAroundMattG{margin-bottom: 34px !important;
    margin-top: 60px  !important;}
.yanny{
font-size: .9em !important;
}
#materialis-footer-menu{
display:none;
}
.LongEmail{
font-size: .9em;
}

.LongName{
font-size: 1.6em;
}
.New{
top:259px;
}

#materialis-footer-menu > li.page_item.page-item-16, #materialis-footer-menu > li.page_item.page-item-2, #materialis-footer-menu > li.page_item.page-item-14, #materialis-footer-menu > li.page_item.page-item-32, #materialis-footer-menu > li.page_item.page-item-17, #materialis-footer-menu > li.page_item.page-item-5, #materialis-footer-menu > li.page_item.page-item-15,#materialis-footer-menu > li.page_item.page-item-6{
display:none;
}
#BensSALESIsTooHigh{bottom:-71px;}
#BriansTitleIsTooBig{font-size: 13px;}
#BensNameIsTooLong{font-size: 28px;}

#StyleBriansTitleSpecial{
      bottom: -45px;
}
.DepartmentLabel{
position: absolute;
    bottom: -69px;
    left: 0px;
    background: lightgrey;
    color: white;
    width: 280px;
    height: 35px;
    padding: 6px;
    font-weight: 600;
top:259px;
}
.StylePInEachOrangeBox{ color:lightgrey; font-size:14px; margin-bottom:-8px }

.btn{border: none; background: white;}

.OrangeBox{ position: relative;}

.MainExt{
    position: absolute;
padding-left:5px;
padding-right:5px;
  top: -42px;
    right: 0px;
    background: #fe5000;
color:white;
}

.Blue{background:#1F4B74;color:white; padding-left: 5px; padding-right:5px;padding-top: 1px;} 
.Yellow{background:#F6B333;color:black; padding-left: 5px; padding-right:5px;padding-top: 1px;} 
.Purple{background:#5C396D;color: white; padding-left: 5px; padding-right:5px;padding-top: 1px;} 
.Red{background: #9C0000;color:white; padding-left: 5px; padding-right:5px;padding-top: 1px; } 

.hero-title{
display:none;
}
.header-subtitle{
display:none;
}
.materialis-front-page #page > .blog-page, .materialis-content-padding #page>.page-content, .materialis-inner-page #page>.page-content{
padding-top:1rem !important;
}
.employeesContainer{
margin-top:15px;
}
 #sortable { list-style-type: none; margin: 0; padding: 0; width: 100%; }
  #sortable li {
    margin: 0px 12px 21px 13px;
    float: left;
    width: 282px;
   height: 599px;
    font-size: 1em;
    text-align: center;
background:white;
}

body > div.header-top > div.navigation-bar > div > div > div.logo_col.col-xs.col-sm-fit > a{
   pointer-events: none;
   cursor: default;
}

#reset{
   width: 167px;
    height: 40px;
    font-size: 17px;
    border-radius: 30px;
    margin: 0 auto;
    flex-basis: 14% !important;
}
span{
    color: #fe5000;
}
select{
    font-size: 16px;
    padding: 12px 20px 12px 40px;
    border: 1px solid #ddd;
    margin-bottom: 12px;
}
#submitttttt{
    width: 167px;
    height: 40px;
    font-size: 17px;
    border-radius: 30px;
    margin: 0 auto;
    flex-basis: 14% !important;
}
#myInput{
font-size: 18px;
    padding: 13px;
    margin-bottom: 14px;
    border: 1px solid #ddd;
}
.hidenOnLoad{
    text-align: left;
    padding-left: 10px;
    padding-right: 10px;
    font-size: .85em;
}
h3{
    line-height: .5;
}
</style>


<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<div id="users">
<div class="container text-center">
<div class="row styleRow">
<div class="col-sm-4">
<div class="dropdown">
<div class="dropdown-content">
<select id="Dept" onchange="mySubmit()">
<option value="NullD">Department</option>
<option value="Executive">Executive</option>
<option value="Admin">Operations</option>
<option value="Sales">Sales</option>
<option value="Marketing">Marketing</option>
<option value="Warehouse">Warehouse</option>
<option value="Tech">Tech (All)</option>
<option value="CDS">Chrome Deployment Services</option>
<option value="WDS">Windows Deployment Services</option>
<option value="Warranty">Warranty Services</option>
</select>
</div>
</div>
</div>
<div class="col-sm-4">
  <div class="dropdown">
    <div class="dropdown-content">
      <select id="SF" onchange="mySubmit()">
        <option value="NullS">Strength Finders</option>
<option value="Achiever">Achiever</option>
<option value="Activator">Activator</option>
<option value="Adaptability">Adaptability</option>
<option value="Analytical">Analytical</option>
<option value="Arranger">Arranger</option>
<option value="Belief">Belief</option>
<option value="Context">Context</option>
<option value="Consistency">Consistency</option>
<option value="Command">Command</option>
<option value="Communication">Communication</option>
<option value="Competition">Competition</option>
<option value="Connectedness">Connectedness</option>
<option value="Deliberative">Deliberative</option>
<option value="Discipline">Discipline</option>
<option value="Developer">Developer</option>
<option value="Empathy">Empathy</option>
<option value="Focus">Focus</option>
<option value="Futuristic">Futuristic</option>
<option value="Harmony">Harmony</option>
<option value="Ideation">Ideation</option>
<option value="Input">Input</option>
<option value="Intellection">Intellection</option>
<option value="Includer">Includer</option>
<option value="Individualization">Individualization</option>
<option value="Learner">Learner</option>
<option value="Maximizer">Maximizer</option>
<option value="Positivity">Positivity</option>
<option value="Relator">Relator</option>
<option value="Responsibility">Responsibility</option>
<option value="Strategic">Strategic</option>
<option value="Self-Assurance">Self-Assurance</option>
<option value="Significance">Significance</option>
<option value="Woo">Woo</option>
      </select>
    </div>
  </div> 
</div>
  <div class="col-sm-4">
<input type="text" class="search" id="myInput"  placeholder="Search for names.." title="Type in a name"></input></div>
   </div>
<div class="row">
<div class="col-sm-2 col-sm-offset-9 col-md-2 col-md-offset-10" ><button id="reset" type="reset" value="Reset" onclick="myFunction()">Reset</button></div>
</div>
</div>
<div class="container text-center employeesContainer">
<div class="row styleRow">
<ul class="list" id="sortable">
<li class="ui-state-default styleCol Warranty Tech">
     <img src="http://employeedir.wpengine.com/wp-content/uploads/2018/12/Aaron-Chinander-directory.jpg" alt="" width="280" height="280" class="alignnone size-full wp-image-130" />
     <div class="OrangeBox"><h3 class="name">Aaron Chinander</h3>
<span class="MainExt">x 137</span>
     <p class="StylePInEachOrangeBox">TECHNICIAN</n></p>
<span class="DepartmentLabel New">WARRANTY SERVICES</span>
     <hr>
     <div class="hidenOnLoad 1" >
<b>Email</b>: <button title="Click to copy" class="btn" data-clipboard-text="achinander98@gmail.com"> achinander98@gmail.com
 </button></n>
<b>Direct</b>: 612-808-9384 </n>     
<b>Cell</b>: 651-387-7714 </n>
<b>Strengths</b>:</br>
     </div>
     </div>
  </li>
  <li class="ui-state-default styleCol Sales Empathy Woo Communication Developer Achiever">
<img src="http://employeedir.wpengine.com/wp-content/uploads/2018/11/abby-erickson-directory.jpg" alt="" width="280" height="280" class="alignnone size-full wp-image-100" />
   <div class="OrangeBox"><h3 class="name">Abby Erickson</h3>
<span class="MainExt">x 135</span>
   <p class="StylePInEachOrangeBox">INSIDE SALES REPRESENTATIVE</p>
<span class="DepartmentLabel">Sales</span>
   <hr>
   <div class="hidenOnLoad 1" >
<b>Email</b>: <button title="Click to copy" class="btn" data-clipboard-text="aerickson@fireflycomputers.com">aerickson@fireflycomputers.com</button></n>
<b>Direct</b>: 612-808-9382  </n>    
<b>Cell</b>: 763-607-9556  </n>   
<b>Strengths</b>:</br> <span class="Blue">Empathy</span> <span class="Yellow">Woo</span> <span class="Yellow">Communication</span> <span class="Blue">Developer</span> <span class="Purple">Achiever</span>
   </div>
   </div>
</li>
<li class="ui-state-default styleCol Admin Adaptability Relator Analytical Includer Arranger">
     <img src="http://employeedir.wpengine.com/wp-content/uploads/2018/11/Alex-Przyblyski-directoy.jpg" alt="" width="280" height="280" class="alignnone size-full wp-image-120" />
     <div class="OrangeBox"><h3 class="name">Alex Przybylski</h3>
<span class="MainExt">x 139</span>
     <p class="StylePInEachOrangeBox">INVENTORY CONTROL SPECIALIST</n></p>
<span class="DepartmentLabel">OPERATIONS</span>
     <hr>
     <div class="hidenOnLoad 1" >
<b>Email</b>: <button title="Click to copy" class="btn" data-clipboard-text="aprzybylski@fireflycomputers.com"> aprzybylski@fireflycomputers.com </button></n>
<b>Direct</b>: 612-808-9386 </n>     
<b>Cell</b>: 651-356-5926 </n>
<b>Strengths</b>:</br><span class="Blue">Adaptability</span> <span class="Blue">Relator</span> <span class="Red">Analytical</span> <span class="Blue">Includer</span> <span class="Purple">Arranger</span>
     </div>
     </div>
  </li>
  <li class="ui-state-default styleCol Warranty Tech">
    <img src="http://employeedir.wpengine.com/wp-content/uploads/2018/12/Alex-Eaves-directory.jpg" alt="" width="280" height="280" class="alignnone size-full wp-image-132" />
     <div class="OrangeBox"><h3 class="name">Alex Eaves</h3>
<span class="MainExt">x 137</span>
     <p class="StylePInEachOrangeBox">TECHNICIAN</n></p>
<span class="DepartmentLabel New">WARRANTY SERVICES</span>
     <hr>
     <div class="hidenOnLoad 1" >
<b>Email</b>: <button title="Click to copy" class="btn" data-clipboard-text="alexceaves@gmail.com"> alexceaves@gmail.com </button></n>
<b>Direct</b>: 612-808-9384 </n>     
<b>Cell</b>: 763-200-2457 </n>
<b>Strengths</b>:</br>
     </div>
     </div>
  </li>
  <li class="ui-state-default styleCol Warranty Tech">
<img src="http://family.fireflycomputers.com/wp-content/uploads/2019/04/Alexander-Depontes.jpg" alt="" width="2744" height="3662" class="alignnone size-full wp-image-236 AlexDepontes"  />
     <div class="OrangeBox"><h3 class="name">Alex Depontes</h3>
<span class="MainExt">x 137</span>
     <p class="StylePInEachOrangeBox">TECHNICIAN</n></p>
<span class="DepartmentLabel New">Tech</span>
     <hr>
     <div class="hidenOnLoad 1" >
<b>Email</b>: <button title="Click to copy" class="btn" data-clipboard-text="">  </button></n>
<b>Direct</b>: 612-808-9384 </n>     
<b>Cell</b>: 612-414-5213 </n>
<b>Strengths</b>:</br>
     </div>
     </div>
  </li>
  <li class="ui-state-default styleCol Admin Belief Developer Empathy Discipline Consistency">
     <img src="http://employeedir.wpengine.com/wp-content/uploads/2018/11/Alyson-Heroff-directory.jpg" alt="" width="280" height="280" class="alignnone size-full wp-image-126" />
     <div class="OrangeBox"><h3 class="name">Alyson Heroff</h3>
<span class="MainExt">x 106</span>
     <p class="StylePInEachOrangeBox">CUSTOMER SUCCESS SPECIALIST</n></p>
<span class="DepartmentLabel">OPERATIONS</span>
     <hr>
     <div class="hidenOnLoad 1" >
<b>Email</b>: <button title="Click to copy" class="btn" data-clipboard-text="aheroff@fireflycomputers.com"> aheroff@fireflycomputers.com </button></n>
<b>Direct</b>: 612-354-8814 </n>     
<b>Cell</b>: 651-335-0108 </n>
<b>Strengths</b>:</br><span class="Purple">Belief</span> <span class="Blue">Developer</span> <span class="Blue">Empathy</span> <span class="Purple">Discipline</span> <span class="Purple">Consistency</span>
     </div>
     </div>
  </li>
  <li class="ui-state-default styleCol Marketing Positivity Includer Achiever Woo Discipline">
<img src="http://employeedir.wpengine.com/wp-content/uploads/2018/11/alyssa-jusczak-directory.jpg" alt="" width="280" height="280" class="alignnone size-full wp-image-119" />
   <div class="OrangeBox"><h3 class="name">Alyssa Jusczak</h3>
<span class="MainExt">x 102</span>
   <p class="StylePInEachOrangeBox">MARKETING COORDINATOR</p>
<span class="DepartmentLabel">MARKETING</span>
   <hr>
   <div class="hidenOnLoad 1" >
   <b>Email</b>: <button  title="Click to copy" class="btn" data-clipboard-text="ajusczak@fireflycomputers.com">ajusczak@fireflycomputers.com</button></n>
  <b> Direct</b>: 612-564-4077 </n>
<b>Cell</b>: 218-260-5199 </n>
<b>Strengths</b>:</br> <span class="Blue">Positivity</span> <span class="Blue">Includer</span> <span class="Purple">Achiever</span> <span class="Yellow">Woo</span> <span class="Purple">Discipline</span>
   </div>
   </div>
</li>
<li class="ui-state-default styleCol WDS Tech Restorative	Competition	Futuristic	Significance Adaptability">
    <img src="http://employeedir.wpengine.com/wp-content/uploads/2018/11/Andrew-Branstrom-directory.jpg" alt="" width="280" height="280" class="alignnone size-full wp-image-76" />
     <div class="OrangeBox"><h3 class="name LongName">Andrew Brandstrom</h3>
<span class="MainExt">x 119</span>
     <p class="StylePInEachOrangeBox">WINDOWS DEPLOYMENT SERVICES MANAGER</n></p>
<span class="DepartmentLabel New">WINDOWS DEPLOYMENT</span>
     <hr>
     <div class="hidenOnLoad 1" >
<b>Email</b>: <button title="Click to copy" class="btn" data-clipboard-text="abrandstrom93@gmail.com"> abrandstrom93@gmail.com </button></n>
<b>Direct</b>: 612-808-9393 </n>     
<b>Cell</b>: 651-295-1782 </n>
<b>Strengths</b>:</br><span class="Purple">Restorative</span> <span class="Yellow">Competition</span> <span class="Red">Futuristic</span> <span class="Yellow">Significance</span> <span class="Blue">Adaptability</span>
     </div>
     </div>
  </li>
  <li class="ui-state-default styleCol Admin Futuristic Discipline Focus Maximizer Connectedness">
   <img src="http://employeedir.wpengine.com/wp-content/uploads/2018/11/Anita-McLaid-directory.jpg" alt="" width="280" height="280" class="alignnone size-full wp-image-118" />
     <div class="OrangeBox"><h3 class="name">Anita McLaird</h3>
<span class="MainExt">x 123</span>
     <p class="StylePInEachOrangeBox">PURCHASING COORDINATOR</n></p>
<span class="DepartmentLabel">OPERATIONS</span>
     <hr>
     <div class="hidenOnLoad 1" >
<b>Email</b>: <button title="Click to copy" class="btn" data-clipboard-text="amclaird@fireflycomputers.com"> amclaird@fireflycomputers.com </button></n>
<b>Direct</b>: 612-213-2968 </n>     
<b>Cell</b>: 763-807-1249 </n>
<b>Strengths</b>:</br><span class="Red">Futuristic</span> <span class="Purple">Discipline</span> <span class="Purple">Focus</span> <span class="Yellow">Maximizer</span> <span class="Blue">Connectedness</span>
     </div>
     </div>
  </li>
  <li class="ui-state-default styleCol Marketing Adaptability Input Positivity Relator Individualization">
   <img src="http://employeedir.wpengine.com/wp-content/uploads/2018/11/Anthony-Braulick-Directory-Jpeg.png" alt="" width="280" height="280" class="alignnone size-full wp-image-77" />
   <div class="OrangeBox"><h3 class="name">Anthony Braulick</h3>
<span class="MainExt">x 129</span>
   <p class="StylePInEachOrangeBox">CONTRACTS COORDINATOR</n></p>
<span class="DepartmentLabel">MARKETING</span>
   <hr>
   <div class="hidenOnLoad 1" >
<b>Email</b>: <button title="Click to copy" class="btn" data-clipboard-text="abraulick@fireflycomputers.com"> abraulick@fireflycomputers.com </button></n>
<b>Direct</b>: 612-808-8951 </n>     
<b>Cell</b>: 952-261-4350 </n>
<b>Strengths</b>:</br><span class="Blue">Adaptability</span> <span class="Red">Input</span> <span class="Blue">Positivity</span> <span class="Blue">Relator</span> <span class="Blue">Individualization</span>
   </div>
   </div>
</li>
  <li class="ui-state-default styleCol Tech Warranty">
   <img src="http://family.fireflycomputers.com/wp-content/uploads/2019/01/Anthony-Johnson-Photo.png" alt="" width="280" height="280" class="alignnone size-full wp-image-212" />
   <div class="OrangeBox"><h3 class="name">Anthony Johnson</h3>
<span class="MainExt">x 137</span>
   <p class="StylePInEachOrangeBox">TECHNICIAN</n></p>
<span class="DepartmentLabel">WARRANTY SERVICES</span>
   <hr>
   <div class="hidenOnLoad 1" >
<b>Email</b>: <button title="Click to copy" class="btn" data-clipboard-text="Badaneq@gmail.com">Badaneq@gmail.com</button></n>
<b>Direct</b>: 612-808-9384 </n>     
<b>Cell</b>: 763-639-9961 </n>
<b>Strengths</b>:</br>
   </div>
   </div>
</li>
<li class="ui-state-default styleCol Admin Positivity Woo Developer Communication Strategic">
     <img src="http://employeedir.wpengine.com/wp-content/uploads/2018/11/ashley-rollins-directory.jpg" alt="" width="280" height="280" class="alignnone size-full wp-image-108" />
     <div class="OrangeBox"><h3 class="name">Ashley Rollins</h3>
<span class="MainExt">x 145</span>
     <p class="StylePInEachOrangeBox">COMMUNICATIONS COORDINATOR</n></p>
<span class="DepartmentLabel">OPERATIONS</span>
     <hr>
     <div class="hidenOnLoad 1" >
<b>Email</b>: <button title="Click to copy" class="btn" data-clipboard-text="ashley@fireflycomputers.com"> ashley@fireflycomputers.com </button></n>
<b>Direct</b>: 612-808-9391 </n>     
<b>Cell</b>: 952-807-3068 </n>
<b>Strengths</b>:</br><span class="Blue">Positivity</span> <span class="Yellow">Woo</span> <span class="Blue">Developer</span> <span class="Yellow">Communication</span> <span class="Red">Strategic</span>
     </div>
     </div>
  </li>
  <li class="ui-state-default styleCol Sales Learner Analytical Harmony Input Achiever">
     <img src="http://family.fireflycomputers.com/wp-content/uploads/2019/01/Ben.jpg" alt="" width="280" height="280" class="alignnone size-full wp-image-195" />
     <div class="OrangeBox"><h3 class="name">Ben Erickson</h3>
<span class="MainExt">x 109</span>
     <p class="StylePInEachOrangeBox">NATIONAL SALES MANAGER</n></p>
<span class="DepartmentLabel">SALES</span>
     <hr>
     <div class="hidenOnLoad 1" >
<b>Email</b>: <button title="Click to copy" class="btn" data-clipboard-text="ben@fireflycomputers.com"> ben@fireflycomputers.com </button></n>
<b>Direct</b>: 612-284-1171 </n>     
<b>Cell</b>: 763-447-9545 </n>
<b>Strengths</b>:</br><span class="Red">Learner</span> <span class="Red">Analytical</span> <span class="Blue">Harmony</span> <span class="Red">Input</span> <span class="Purple">Achiever</span>
     </div>
     </div>
  </li>
  <li class="ui-state-default styleCol Sales Relator Responsibility Restorative Belief Activator">
  <img src="http://family.fireflycomputers.com/wp-content/uploads/2019/01/Benjamin.jpg" alt="" width="280" height="280" class="alignnone size-full wp-image-196" />
   <div class="OrangeBox"><h3 class="name" id="BensNameIsTooLong">Benjamin Romportl</h3>
<span class="MainExt">x 117</span>
   <p class="StylePInEachOrangeBox">PARTS MANAGER</n></p>
<span class="DepartmentLabel" id="BensSALESIsTooHigh">SALES</span>
   <hr>
   <div class="hidenOnLoad 1" >
<b>Email</b>: <button title="Click to copy" class="btn" data-clipboard-text="benjamin@fireflycomputers.com">benjamin@fireflycomputers.com </button></n>
<b>Direct</b>: 612-255-3102 </n>     
<b>Cell</b>: 651-278-9619 </n>
<b>Strengths</b>:</br><span class="Blue">Relator</span> <span class="Purple">Responsibility</span> <span class="Purple">Restorative</span> <span class="Purple">Belief</span> <span class="Yellow">Activator</span>
   </div>
   </div>
</li>
<li class="ui-state-default styleCol Warranty Tech">
     <img src="http://family.fireflycomputers.com/wp-content/uploads/2019/01/2641.jpg" alt="" width="212" height="228" class="alignnone size-full wp-image-194" />
     <div class="OrangeBox"><h3 class="name">Blake Engrav</h3>
<span class="MainExt">x 137</span>
     <p class="StylePInEachOrangeBox">TECHNICIAN</n></p>
<span class="DepartmentLabel">WARRANTY SERVICES</span>
     <hr>
     <div class="hidenOnLoad 1" >
<b>Email</b>: <button title="Click to copy" class="btn" data-clipboard-text="Blake.engrav@gmail.com">Blake.engrav@gmail.com</button></n>
<b>Direct</b>: 612-808-9384 </n>     
<b>Cell</b>: 651-272-9607 </n>
<b>Strengths</b>:
     </div>
     </div>
  </li>
<li class="ui-state-default styleCol CDS Tech Analytical Responsibility	Achiever	Deliberative	Input">
     <img src="http://employeedir.wpengine.com/wp-content/uploads/2018/12/Blake-directory.jpg" alt="" width="280" height="280" class="alignnone size-full wp-image-131" />
     <div class="OrangeBox"><h3 class="name">Blake Zafft</h3>
<span class="MainExt">x 137</span>
     <p class="StylePInEachOrangeBox">LEAD TECHNICIAN - CHROME DEPLOYMENT SERVICES</n></p>
<span class="DepartmentLabel">CHOME DEPLOYMENT</span>
     <hr>
     <div class="hidenOnLoad 1" >
<b>Email</b>: <button title="Click to copy" class="btn" data-clipboard-text="bzafft13@winona.edu"> bzafft13@winona.edu </button></n>
<b>Direct</b>: 612-808-9384 </n>     
<b>Cell</b>: 763-797-7410 </n>
<b>Strengths</b>:</br><span class="Red">Analytical</span> <span class="Purple">Responsibility</span> <span class="Purple">Achiever</span> <span class="Purple">Deliberative</span> <span class="Red">Input</span>
     </div>
     </div>
  </li>
  <li class="ui-state-default styleCol WDS Tech Ideation	Consistency	Achiever	Competition	Focus ">
     <img src="http://family.fireflycomputers.com/wp-content/uploads/2018/12/Bradley-Houghton-e1545078839725-225x300.jpg" alt="" width="210" height="280" class="alignnone size-medium wp-image-189" />
     <div class="OrangeBox"><h3 class="name">Bradley Houghton</h3>
<span class="MainExt">x 137</span>
     <p class="StylePInEachOrangeBox">WINDOWS DEPLOYMENT SERVICES</n></p>
<span class="DepartmentLabel">WINDOWS DEPLOYMENT</span>
     <hr>
     <div class="hidenOnLoad 1" >
<b>Email</b>: <button title="Click to copy" class="btn" data-clipboard-text="bradhoughton99@gmail.com"> bradhoughton99@gmail.com </button></n>
<b>Direct</b>: 612-808-9384 </n>     
<b>Cell</b>: 651-239-6095 </n>
<b>Strengths</b>:</br><span class="Red">Ideation</span> <span class="Purple">Consistency</span> <span class="Purple">Achiever</span> <span class="Yellow">Competition</span> <span class="Purple">Focus</span>
     </div>
     </div>
  </li>
  <li class="ui-state-default styleCol CDS Tech Communication	Positivity	Individualization	Strategic	Maximizer">
     <img src="http://employeedir.wpengine.com/wp-content/uploads/2018/11/brady-Bolander-directory.jpg" alt="" width="280" height="280" class="alignnone size-full wp-image-109" />
     <div class="OrangeBox"><h3 class="name">Brady Bolander</h3>
<span class="MainExt">x 137</span>
     <p class="StylePInEachOrangeBox">PARTS MANAGER</n></p>
<span class="DepartmentLabel">Sales</span>
     <hr>
     <div class="hidenOnLoad 1" >
<b>Email</b>: <button title="Click to copy" class="btn" data-clipboard-text="bbolander@fireflycomputers.com"> bbolander@fireflycomputers.com </button></n>
<b>Direct</b>: 612-808-9384 </n>     
<b>Cell</b>: 763-843-2526 </n>
<b>Strengths</b>:</br><span class="Yellow">Communication</span> <span class="Blue">Positivity</span> <span class="Blue">Individualization</span> <span class="Red">Strategic</span> <span class="Yellow">Maximizer</span>
     </div>
     </div>
  </li>
  <li class="ui-state-default styleCol Warehouse Strategic	Achiever	Responsibility	Maximizer	Relator">
     <img src="http://employeedir.wpengine.com/wp-content/uploads/2018/11/Brandon-Lentsch-directory.jpg" alt="" width="280" height="280" class="alignnone size-full wp-image-80" />
     <div class="OrangeBox"><h3 class="name">Brandon Lentsch</h3>
<span class="MainExt">x 122</span>
     <p class="StylePInEachOrangeBox">WAREHOUSE MANAGER</n></p>
<span class="DepartmentLabel">WAREHOUSE</span>
     <hr>
     <div class="hidenOnLoad 1" >
<b>Email</b>: <button title="Click to copy" class="btn" data-clipboard-text="brandon@fireflycomputers.com"> brandon@fireflycomputers.com </button></n>
<b>Direct</b>: 651-400-1045 </n>     
<b>Cell</b>: 952-457-3290 </n>
<b>Strengths</b>:</br><span class="Red">Strategic</span> <span class="Purple">Achiever</span> <span class="Purple">Responsibility</span> <span class="Yellow">Maximizer</span> <span class="Blue">Relator</span>
     </div>
     </div>
  </li>
  <li class="ui-state-default styleCol Marketing Connectedness Learner Analytical Intellection Futuristic">
   <img src="http://employeedir.wpengine.com/wp-content/uploads/2018/11/brendon-236x300.jpg" alt="" width="236" height="300" class="alignnone size-medium wp-image-101" style="height:280px;" />
   <div class="OrangeBox"><h3 class="name">Brendon Fatland</h3>
<span class="MainExt">x 143</span>
   <p class="StylePInEachOrangeBox">WEB DEVELOPER</n></p>
<span class="DepartmentLabel">MARKETING</span>
   <hr>
   <div class="hidenOnLoad 1" >
<b>Email</b>: <button title="Click to copy" class="btn" data-clipboard-text="bfatland@fireflycomputers.com"> bfatland@fireflycomputers.com </button></n>
<b>Direct</b>: 612-808-9389 </n>     
<b>Cell</b>: 910-363-6371 </n>
<b>Strengths</b>:</br><span class="Blue">Connectedness</span> <span class="Red">Learner</span> <span class="Red">Analytical</span> <span class="Red">Intellection</span> <span class="Red">Futuristic</span>
   </div>
   </div>
</li>
<li class="ui-state-default styleCol Marketing Executive Strategic Relator Learner Achiever Analytical">
<img src="http://employeedir.wpengine.com/wp-content/uploads/2018/11/Brian-Dimitroff-directory-1.jpg" alt="" width="280" height="280" class="alignnone size-full wp-image-123" />
   <div class="OrangeBox"><h3 class="name">Brian Dimitroff</h3>
   <span class="MainExt">x 108</span>
   <p class="StylePInEachOrangeBox" id="BriansTitleIsTooBig">DIRECTOR OF MARKETING & CORPORATE DEVELOPMENT </p>
<span class="DepartmentLabel New" id="StyleBriansTitleSpecial">MARKETING</span>
   <hr>
   <div class="hidenOnLoad 1" >
   <b>Email</b>: <button title="Click to copy" class="btn" data-clipboard-text="brian@fireflycomputers.com">brian@fireflycomputers.com</button></n>
<b>Direct</b>: 612-326-1396  </n>     
<b>Cell</b>: 651-399-6018  </n>
<b>Strengths</b>:</br> <span class="Red">Strategic</span> <span class="Blue">Relator</span> <span class="Red">Learner</span> <span class="Purple">Achiever</span> <span class="Red">Analytical</span>
   </div>
   </div>
</li>
<li class="ui-state-default styleCol Sales Ideation Individualization Competition Context Intellection">
    <img src="http://family.fireflycomputers.com/wp-content/uploads/2019/01/Cam.jpg" alt="" width="280" height="280" class="alignnone size-full wp-image-197" />
     <div class="OrangeBox"><h3 class="name">Cam Maslonka</h3>
<span class="MainExt">x 127</span>
     <p class="StylePInEachOrangeBox">ACCOUNT DEVELOPMENT REPRESENTATIVE</n></p>
<span class="DepartmentLabel New">SALES</span>
     <hr>
     <div class="hidenOnLoad 1" >
<b>Email</b>: <button title="Click to copy" class="btn" data-clipboard-text="cmaslonka@fireflycomputers.com"> cmaslonka@fireflycomputers.com </button></n>
<b>Direct</b>: 612-213-2951 </n>     
<b>Cell</b>: 651-260-4339 </n>
<b>Strengths</b>:</br><span class="Red">Ideation</span> <span class="Blue">Individualization</span> <span class="Yellow">Competition</span> <span class="Red">Intellection</span> <span class="Red">Context</span>
     </div>
     </div>
  </li>
  <li class="ui-state-default styleCol Sales ">
     <img src="http://family.fireflycomputers.com/wp-content/uploads/2019/01/Carlie.jpg" alt="" width="560" height="560" class="alignnone size-full wp-image-198" />
     <div class="OrangeBox"><h3 class="name">Carlie Mathies</h3>
<span class="MainExt">x 126</span>
     <p class="StylePInEachOrangeBox">ACCOUNT DEVELOPMENT REPRESENTATIVE</n></p>
<span class="DepartmentLabel New">SALES</span>
     <hr>
     <div class="hidenOnLoad 1" >
<b>Email</b>: <button title="Click to copy" class="btn" data-clipboard-text="cmathies@fireflycomputers.com"> cmathies@fireflycomputers.com </button></n>
<b>Direct</b>: 612-213-2947 </n>     
<b>Cell</b>: 651-472-1956 </n>
<b>Strengths</b>:</br>
     </div>
     </div>
  </li>
  <li class="ui-state-default styleCol Sales Competition Strategic Focus Ideation Achiever">
<img src="http://family.fireflycomputers.com/wp-content/uploads/2019/01/Carson.jpg" alt="" width="280" height="280" class="alignnone size-full wp-image-199" />
     <div class="OrangeBox"><h3 class="name">Carson Giller</h3>
<span class="MainExt">x 125</span>
     <p class="StylePInEachOrangeBox">REGIONAL SALES MANAGER</n></p>
<span class="DepartmentLabel">SALES</span>
     <hr>
     <div class="hidenOnLoad 1" >
<b>Email</b>: <button title="Click to copy" class="btn" data-clipboard-text="cgiller@fireflycomputers.com"> cgiller@fireflycomputers.com </button></n>
<b>Direct</b>: 651-400-1044 </n>     
<b>Cell</b>: 715-566-2125 </n>
<b>Strengths</b>:</br><span class="Yellow">Competition</span> <span class="Red">Strategic</span> <span class="Purple">Focus</span> <span class="Red">Ideation</span> <span class="Purple">Achiever</span>
     </div>
     </div>
  </li>
  <li class="ui-state-default styleCol Executive Achiever Adaptability Positivity Developer Woo">
    <img src="http://employeedir.wpengine.com/wp-content/uploads/2018/11/charlie-Williams-directory.jpg" alt="" width="280" height="280" class="alignnone size-full wp-image-84" />
     <div class="OrangeBox"><h3 class="name">Charlie Williams</h3>
<span class="MainExt">x 113</span>
     <p class="StylePInEachOrangeBox">VICE PRESIDENT</n></p>
<span class="DepartmentLabel">EXECUTIVE</span>
     <hr>
     <div class="hidenOnLoad 1" >
<b>Email</b>: <button title="Click to copy" class="btn" data-clipboard-text="charlie@fireflycomputers.com"> charlie@fireflycomputers.com </button></n>
<b>Direct</b>: 612-564-6951 </n>     
<b>Cell</b>: 530-945-8978 </n>
<b>Strengths</b>:</br><span class="Purple">Achiever</span> <span class="Blue">Adaptability</span> <span class="Blue">Positivity</span> <span class="Blue">Developer</span> <span class="Yellow">Woo</span>
     </div>
     </div>
  </li>
  <li class="ui-state-default styleCol CDS Tech">
     <img src="http://family.fireflycomputers.com/wp-content/uploads/2018/12/Chinou-Vang-262x300.jpg" alt="" width="245" height="280" class="alignnone size-medium wp-image-188" />
     <div class="OrangeBox"><h3 class="name">Chinou Vang</h3>
<span class="MainExt">x 137</span>
     <p class="StylePInEachOrangeBox">CHROME DEPLOYMENT SERVICES</n></p>
<span class="DepartmentLabel New">CHROME DEPLOYMENT</span>
     <hr>
     <div class="hidenOnLoad 1" >
<b>Email</b>: <button title="Click to copy" class="btn" data-clipboard-text="chinouv797@gmail.com"> chinouv797@gmail.com </button></n>
<b>Direct</b>: 612-808-9384 </n>     
<b>Cell</b>: 651-440-0840 </n>
<b>Strengths</b>:</br>
     </div>
     </div>
  </li>
  <li class="ui-state-default styleCol Tech Executive Learner	Input	Intellection	Achiever	Developer">
    <img src="http://employeedir.wpengine.com/wp-content/uploads/2018/11/Chris-McLaird-directory-1.jpg" alt="" width="280" height="280" class="alignnone size-full wp-image-125" />
     <div class="OrangeBox"><h3 class="name">Chris McLaird</h3>
<span class="MainExt">x 105</span>
     <p class="StylePInEachOrangeBox">DIRECTOR OF TECHNOLOGY SOLUTIONS</n></p>
<span class="DepartmentLabel">TECH</span>
     <hr>
     <div class="hidenOnLoad 1" >
<b>Email</b>: <button title="Click to copy" class="btn" data-clipboard-text="chris@fireflycomputers.com"> chris@fireflycomputers.com </button></n>
<b>Direct</b>: 612-354-8812 </n>     
<b>Cell</b>: 763-228-3166 </n>
<b>Strengths</b>:</br><span class="Red">Learner</span> <span class="Red">Input</span> <span class="Red">Intellection</span> <span class="Purple">Achiever</span> <span class="Blue">Developer</span>
     </div>
     </div>
  </li>
  <li class="ui-state-default styleCol Warranty Tech">
      <img src="http://family.fireflycomputers.com/wp-content/uploads/2018/12/Chris-Myers-e1545079028356-225x300.jpg" alt="" width="210" height="300" class="alignnone size-medium wp-image-190" />
       <div class="OrangeBox"><h3 class="name">Chris Meyers</h3>
  <span class="MainExt">x 137</span>
       <p class="StylePInEachOrangeBox">TECHNICIAN</n></p>
  <span class="DepartmentLabel New">WARRANTY SERVICES</span>
       <hr>
       <div class="hidenOnLoad 1" >
  <b>Email</b>: <button title="Click to copy" class="btn" data-clipboard-text="cmeyers2b@gmail.com"> cmeyers2b@gmail.com
   </button></n>
  <b>Direct</b>: 612-808-9384 </n>     
  <b>Cell</b>: 651-468-1838 </n>
  <b>Strengths</b>:</br>
       </div>
       </div>
    </li>
    <li class="ui-state-default styleCol ">
   <img src="http://family.fireflycomputers.com/wp-content/uploads/2019/02/Deanna-L.jpg" alt="" width="280" height="280" class="size-full wp-image-218" /> 
     <div class="OrangeBox"><h3 class="name">Deanna LaVasseur</h3>
<span class="MainExt">x 138</span>
     <p class="StylePInEachOrangeBox">SALES RESEARCHER</n></p>
<span class="DepartmentLabel">SALES</span>
     <hr>
     <div class="hidenOnLoad 1" >
<b>Email</b>: <button title="Click to copy" class="btn" data-clipboard-text="dlevasseur@fireflycomputers.com"> dlevasseur@fireflycomputers.com </button></n>
<b>Direct</b>: 612-808-9385 </n>     
<b>Cell</b>: N/A </n>
<b>Strengths</b>:</br><span class=""></span> <span class=""></span> <span class=""></span> <span class=""></span> <span class=""></span>
     </div>
     </div>
  </li>
    <li class="ui-state-default styleCol Tech Empathy Strategic Ideation Adaptability Analytical">
    <img src="http://employeedir.wpengine.com/wp-content/uploads/2018/11/Conan-Malady-directory.jpg" alt="" width="280" height="280" class="alignnone size-full wp-image-86" />
     <div class="OrangeBox"><h3 class="name">Conan Malady</h3>
<span class="MainExt">x 110</span>
     <p class="StylePInEachOrangeBox">SR. MANAGER OF TECHNOLOGY SOLUTIONS</n></p>
<span class="DepartmentLabel">TECH</span>
     <hr>
     <div class="hidenOnLoad 1" >
<b>Email</b>: <button title="Click to copy" class="btn" data-clipboard-text="conan@fireflycomputers.com"> conan@fireflycomputers.com </button></n>
<b>Direct</b>: 612-564-6942 </n>     
<b>Cell</b>: 612-325-1882 </n>
<b>Strengths</b>:</br><span class="Blue">Empathy</span> <span class="Red">Strategic</span> <span class="Red">Ideation</span> <span class="Blue">Adaptability</span> <span class="Red">Analytical</span>
     </div>
     </div>
  </li>
   <li class="ui-state-default styleCol Warehouse">
<img src="http://family.fireflycomputers.com/wp-content/uploads/2019/04/Corey-Bain.jpg" alt="" width="280" height="280" class="alignnone size-full wp-image-235" />
     <div class="OrangeBox"><h3 class="name">Corey Bain</h3>
<span class="MainExt">x 122</span>
     <p class="StylePInEachOrangeBox">WAREHOUSE</n></p>
<span class="DepartmentLabel CoreyBain">WAREHOUSE</span>
     <hr>
     <div class="hidenOnLoad 1" >
<b>Email</b>: <button title="Click to copy" class="btn" data-clipboard-text="Cnbain1@gmail.com"> Cnbain1@gmail.com </button></n>
<b>Direct</b>: 651-400-1045 </n>     
<b>Cell</b>: 651-440-6090 </n>
<b>Strengths</b>:</br><span class=""></span> <span class=""></span> <span class=""></span> <span class=""></span> <span class=""></span>
     </div>
     </div>
  </li>
<li class="ui-state-default styleCol Tech Warranty">
<img src="http://family.fireflycomputers.com/wp-content/uploads/2019/05/Dave-Schultz.jpg" alt="" width="280" height="2976" class="alignnone size-full wp-image-241" />
     <div class="OrangeBox"><h3 class="name">Dave Schultz</h3>
<span class="MainExt">x 137</span>
     <p class="StylePInEachOrangeBox">TECNICIAN</n></p>
<span class="DepartmentLabel">WARRANTY</span>
     <hr>
     <div class="hidenOnLoad 1" >
<b>Email</b>: <button title="Click to copy" class="btn" data-clipboard-text="dschultz7777@gmail.com"> dschultz7777@gmail.com </button></n>
<b>Direct</b>: 612-808-9384 </n>     
<b>Cell</b>: 612-499-2233</n>
<b>Strengths</b>:</br><span class=""></span> <span class=""></span> <span class=""></span> <span class=""></span> <span class=""></span>
     </div>
     </div>
  </li>
  <li class="ui-state-default styleCol Executive Competition Relator Empathy Achiever Ideation">
     <img src="http://employeedir.wpengine.com/wp-content/uploads/2018/11/Devang-Shah-directory.jpg" alt="" width="280" height="280" class="alignnone size-full wp-image-87" />
     <div class="OrangeBox"><h3 class="name">Devang Shah</h3>
<span class="MainExt">x 115</span>
     <p class="StylePInEachOrangeBox">PRESIDENT</n></p>
<span class="DepartmentLabel">EXECUTIVE</span>
     <hr>
     <div class="hidenOnLoad 1" >
<b>Email</b>: <button title="Click to copy" class="btn" data-clipboard-text="devang@fireflycomputers.com"> devang@fireflycomputers.com </button></n>
<b>Direct</b>: 612-255-3100 </n>     
<b>Cell</b>: 651-355-9998 </n>
<b>Strengths</b>:</br><span class="Yellow">Competition</span> <span class="Blue">Relator</span> <span class="Blue">Empathy</span> <span class="Purple">Achiever</span> <span class="Red">Ideation</span>
     </div>
     </div>
  </li>
  <li class="ui-state-default styleCol Warehouse Input	Communication	Restorative	Adaptability	Includer">
    <img src="http://employeedir.wpengine.com/wp-content/uploads/2018/11/Devin-directory.jpg" alt="" width="280" height="280" class="alignnone size-full wp-image-114" />
     <div class="OrangeBox"><h3 class="name">Devin Cooper</h3>
<span class="MainExt">x 134</span>
     <p class="StylePInEachOrangeBox">WAREHOUSE ASSOCIATE</n></p>
<span class="DepartmentLabel">WAREHOUSE</span>
     <hr>
     <div class="hidenOnLoad 1" >
<b>Email</b>: <button title="Click to copy" class="btn" data-clipboard-text="cooper.devin909@gmail.com"> cooper.devin909@gmail.com </button></n>
<b>Direct</b>: 612-808-9381 </n>     
<b>Cell</b>: 702-468-8690 </n>
<b>Strengths</b>:</br><span class="Red">Input</span> <span class="Yellow">Communication</span> <span class="Purple">Restorative</span> <span class="Blue">Adaptability</span> <span class="Blue">Includer</span>
     </div>
     </div>
  </li>
  <li class="ui-state-default styleCol Admin Individualization Empathy Communication Harmony Developer">
    <img src="http://employeedir.wpengine.com/wp-content/uploads/2018/11/devyn-Guse-Humphrey-directory.jpg" alt="" width="280" height="280" class="alignnone size-full wp-image-122" />
     <div class="OrangeBox"><h3 class="name LongName">Devyn Guse-Humphrey</h3>
<span class="MainExt">x 118</span>
     <p class="StylePInEachOrangeBox">CUSTOMER SUCCESS SPECIALIST</n></p>
<span class="DepartmentLabel New">OPERATIONS</span>
     <hr>
     <div class="hidenOnLoad 1" >
<b>Email</b>: <button title="Click to copy" class="btn LongEmail" data-clipboard-text="dgusehumphrey@fireflycomputers.com"> dgusehumphrey@fireflycomputers.com </button></n>
<b>Direct</b>: 612-255-3103 </n>     
<b>Cell</b>: 651-492-4032 </n>
<b>Strengths</b>:</br><span class="Blue">Individualization</span> <span class="Blue">Empathy</span> <span class="Yellow">Communication</span> <span class="Blue">Harmony</span> <span class="Blue">Developer</span>
     </div>
     </div>
  </li>
  <li class="ui-state-default styleCol Tech Warranty">
    <img src="http://family.fireflycomputers.com/wp-content/uploads/2018/12/Dylon-Lowinske-directory.jpg" alt="" width="280" height="280" class="alignnone size-full wp-image-132" />
     <div class="OrangeBox"><h3 class="name">Dylon Lowinske</h3>
<span class="MainExt">x 137</span>
     <p class="StylePInEachOrangeBox">TECHNICIAN</n></p>
<span class="DepartmentLabel New">WARRANTY SERVICES</span>
     <hr>
     <div class="hidenOnLoad 1" >
<b>Email</b>: <button title="Click to copy" class="btn LongEmail" data-clipboard-text="Dylon.Lowinske@gmail.com">Dylon.Lowinske@gmail.com</button></n>
<b>Direct</b>: 612-808-9384 </n>     
<b>Cell</b>: 763-245-1225 </n>
<b>Strengths</b>:</br>
     </div>
     </div>
  </li>
  <li class="ui-state-default styleCol Warehouse Input	Adaptability	Command	Intellection	Self-Assurance">
    <img src="http://employeedir.wpengine.com/wp-content/uploads/2018/11/Elliot-directory.jpg" alt="" width="280" height="280" class="alignnone size-full wp-image-116" />
     <div class="OrangeBox"><h3 class="name">Elliot Frenette</h3>
<span class="MainExt">x 122</span>
     <p class="StylePInEachOrangeBox">WAREHOUSE ASSOCIATE</n></p>
<span class="DepartmentLabel">WAREHOUSE</span>
     <hr>
     <div class="hidenOnLoad 1" >
<b>Email</b>: <button title="Click to copy" class="btn" data-clipboard-text="ea.frenette@gmail.com"> ea.frenette@gmail.com </button></n>
<b>Direct</b>: 651-400-1045 </n>     
<b>Cell</b>: 763-438-2039 </n>
<b>Strengths</b>:</br><span class="Red">Input</span> <span class="Blue">Adaptability</span> <span class="Yellow">Command</span> <span class="Red">Intellection</span> <span class="Yellow">Self-Assurance</span>
     </div>
     </div>
  </li>
  <li class="ui-state-default styleCol Warehouse Strategic	Competition	Achiever	Adaptability	Ideation">
    <img src="http://employeedir.wpengine.com/wp-content/uploads/2018/11/Eric-directory.jpg" alt="" width="280" height="280" class="alignnone size-full wp-image-115" />
     <div class="OrangeBox"><h3 class="name">Eric Herrmann</h3>
<span class="MainExt">x 122</span>
     <p class="StylePInEachOrangeBox">SHIPPING MANAGER</n></p>
<span class="DepartmentLabel">WAREHOUSE</span>
     <hr>
     <div class="hidenOnLoad 1" >
<b>Email</b>: <button title="Click to copy" class="btn" data-clipboard-text="ejherrmann1974@yahoo.com"> ejherrmann1974@yahoo.com </button></n>
<b>Direct</b>: 651-400-1045 </n>     
<b>Cell</b>: 763-438-2039 </n>
<b>Strengths</b>:</br><span class="Red">Strategic</span> <span class="Yellow">Competition</span> <span class="Purple">Achiever</span> <span class="Blue">Adaptability</span> <span class="Red">Ideation</span>
     </div>
     </div>
  </li>
  <li class="ui-state-default styleCol Sales  ">
    <img src="http://family.fireflycomputers.com/wp-content/uploads/2018/12/Erin-297x300.jpg" alt="" width="280" height="280" class="alignnone size-medium wp-image-187" />
     <div class="OrangeBox"><h3 class="name">Erin Warkentin</h3>
<span class="MainExt">x </span>
     <p class="StylePInEachOrangeBox">SALES RESEARCHER</n></p>
<span class="DepartmentLabel">Sales</span>
     <hr>
     <div class="hidenOnLoad 1" >
<b>Email</b>: <button title="Click to copy" class="btn" data-clipboard-text="ewarkentin@fireflycomputers.com"> ewarkentin@fireflycomputers.com </button></n>
<b>Direct</b>: N/A </n>     
<b>Cell</b>: 530-604-9185 </n>
<b>Strengths</b>:</br>
     </div>
     </div>
  </li>
  <li class="ui-state-default styleCol Admin Achiever Discipline Harmony Competition Relator">
     <img src="http://family.fireflycomputers.com/wp-content/uploads/2019/01/Haley-Koerner.jpg" alt="" width="280" height="280" class="alignnone size-full wp-image-215" />
     <div class="OrangeBox"><h3 class="name">Haley Koerner</h3>
<span class="MainExt">x 104</span>
     <p class="StylePInEachOrangeBox">CUSTOMER SUCCESS SPECIALIST</n></p>
<span class="DepartmentLabel">OPERATIONS</span>
     <hr>
     <div class="hidenOnLoad 1" >
<b>Email</b>: <button title="Click to copy" class="btn" data-clipboard-text="hkoerner@fireflycomputers.com"> hkoerner@fireflycomputers.com </button></n>
<b>Direct</b>: 612-326-1810 </n>     
<b>Cell</b>: 763-267-9551 </n>
<b>Strengths</b>:</br><span class="Purple">Achiever</span> <span class="Purple">Discipline</span> <span class="Blue">Harmony</span> <span class="Yellow">Competition</span> <span class="Blue">Relator</span>
     </div>
     </div>
  </li>
  <li class="ui-state-default styleCol Sales Harmony Futuristic Focus Positivity Restorative">
  <img src="http://family.fireflycomputers.com/wp-content/uploads/2019/01/Jake-1.jpg" alt="" width="280" height="280" class="alignnone size-full wp-image-211" />
     <div class="OrangeBox"><h3 class="name">Jake Munter</h3>
<span class="MainExt">x 107</span>
     <p class="StylePInEachOrangeBox">REGIONAL SALES MANAGER</n></p>
<span class="DepartmentLabel">SALES</span>
     <hr>
     <div class="hidenOnLoad 1" >
<b>Email</b>: <button title="Click to copy" class="btn" data-clipboard-text="jake@fireflycomputers.com"> jake@fireflycomputers.com </button></n>
<b>Direct</b>: 612-354-8816 </n>     
<b>Cell</b>: 651-442-7532 </n>
<b>Strengths</b>:</br><span class="Blue">Harmony</span> <span class="Red">Futuristic</span> <span class="Purple">Focus</span> <span class="Blue">Positivity</span> <span class="Purple">Restorative</span>
     </div>
     </div>
  </li>
<li class="ui-state-default styleCol Tech Warranty">
 <img src="http://family.fireflycomputers.com/wp-content/uploads/2019/05/James-Priest.jpg" alt="" width="280" height="2992" class="alignnone size-full wp-image-240" />
     <div class="OrangeBox"><h3 class="name">James Priest</h3>
<span class="MainExt">x 137</span>
     <p class="StylePInEachOrangeBox">TECNICIAN</n></p>
<span class="DepartmentLabel">WARRANTY</span>
     <hr>
     <div class="hidenOnLoad 1" >
<b>Email</b>: <button title="Click to copy" class="btn" data-clipboard-text="jrpriesthokie@gmail.com"> jrpriesthokie@gmail.com </button></n>
<b>Direct</b>: 612-808-9384 </n>     
<b>Cell</b>: 240-277-7645</n>
<b>Strengths</b>:</br><span class=""></span> <span class=""></span> <span class=""></span> <span class=""></span> <span class=""></span>
     </div>
     </div>
  </li>
  <li class="ui-state-default styleCol Sales Empathy Woo Adaptability Harmony Communication">
    <img src="http://family.fireflycomputers.com/wp-content/uploads/2019/01/Jason.jpg" alt="" width="280" height="280" class="alignnone size-full wp-image-201" />
     <div class="OrangeBox"><h3 class="name">Jason Greavu</h3>
<span class="MainExt">x 136</span>
     <p class="StylePInEachOrangeBox">ACCOUNT DEVELOPMENT REPRESENTATIVE</n></p>
<span class="DepartmentLabel New">SALES</span>
     <hr>
     <div class="hidenOnLoad 1" >
<b>Email</b>: <button title="Click to copy" class="btn" data-clipboard-text="jgreavu@fireflycomputers.com"> jgreavu@fireflycomputers.com </button></n>
<b>Direct</b>: 612-808-9383 </n>     
<b>Cell</b>: 651-767-2229 </n>
<b>Strengths</b>:</br><span class="Blue">Empathy</span> <span class="Yellow">Woo</span> <span class="Blue">Adaptability</span> <span class="Blue">Harmony</span> <span class="Yellow">Communication</span>
     </div>
     </div>
  </li>
  <li class="ui-state-default styleCol Warehouse Responsibility	Positivity	Achiever	Belief	Adaptability">
     <img src="http://employeedir.wpengine.com/wp-content/uploads/2018/11/Jason-directory.jpg" alt="" width="280" height="280" class="alignnone size-full wp-image-113" />
     <div class="OrangeBox"><h3 class="name">Jason Levin</h3>
<span class="MainExt">x 134</span>
     <p class="StylePInEachOrangeBox">RECEIVING MANAGER</n></p>
<span class="DepartmentLabel">WAREHOUSE</span>
     <hr>
     <div class="hidenOnLoad 1" >
<b>Email</b>: <button title="Click to copy" class="btn" data-clipboard-text="jlevin@fireflycomputers.com"> jlevin@fireflycomputers.com </button></n>
<b>Direct</b>: 612-808-9381 </n>     
<b>Cell</b>: 651-315-6480 </n>
<b>Strengths</b>:</br><span class="Purple">Responsibility</span> <span class="Blue">Positivity</span> <span class="Purple">Achiever</span> <span class="Purple">Belief</span> <span class="Blue">Adaptability</span>
     </div>
     </div>
  </li>
  <li class="ui-state-default styleCol Warranty Tech ">
     <img src="http://family.fireflycomputers.com/wp-content/uploads/2019/01/Jason-Marcano-Salto-Photo-3.jpg" alt="" width="280" height="280" class="alignnone size-full wp-image-214" />
     <div class="OrangeBox"><h3 class="name">Jason Marco-Salto</h3>
<span class="MainExt">x 137</span>
     <p class="StylePInEachOrangeBox">TECHNICIAN</n></p>
<span class="DepartmentLabel">WARRANTY SERVICES</span>
     <hr>
     <div class="hidenOnLoad 1" >
<b>Email</b>: <button title="Click to copy" class="btn" data-clipboard-text="blaxicanking@gmail.com"> blaxicanking@gmail.com </button></n>
<b>Direct</b>: 612-808-9384 </n>     
<b>Cell</b>: 763-381-2913 </n>
<b>Strengths</b>:</br>
     </div>
     </div>
  </li>
 <li class="ui-state-default styleCol Tech Learner	Restorative	Empathy	Intellection	Consistency">
   <img src="http://employeedir.wpengine.com/wp-content/uploads/2018/11/Jay-Wilhelmy-directory.jpg" alt="" width="280" height="280" class="alignnone size-full wp-image-89" />
     <div class="OrangeBox"><h3 class="name">Jay Wilhelmy</h3>
<span class="MainExt">x 119</span>
     <p class="StylePInEachOrangeBox">SOLUTIONS SPECIALIST</n></p>
<span class="DepartmentLabel">TECH</span>
     <hr>
     <div class="hidenOnLoad 1" >
<b>Email</b>: <button title="Click to copy" class="btn" data-clipboard-text="jwilhelmy@fireflycomputers.com"> jwilhelmy@fireflycomputers.com </button></n>
<b>Direct</b>: 612-808-9393 </n>     
<b>Cell</b>: N/A </n>
<b>Strengths</b>:</br><span class="Red">Learner</span> <span class="Purple">Restorative</span> <span class="Blue">Empathy</span> <span class="Red">Intellection</span> <span class="Purple">Consistency</span>
     </div>
     </div>
  </li>
  <li class="ui-state-default styleCol Sales Developer Positivity Communication Empathy Activator ">
     <img src="http://family.fireflycomputers.com/wp-content/uploads/2019/01/Jen.jpg" alt="" width="280" height="280" class="alignnone size-full wp-image-202" />
     <div class="OrangeBox"><h3 class="name">Jen Iverson</h3>
<span class="MainExt">x 141</span>
     <p class="StylePInEachOrangeBox">ACCOUNT MANAGER</n></p>
<span class="DepartmentLabel New">SALES</span>
     <hr>
     <div class="hidenOnLoad 1" >
<b>Email</b>: <button title="Click to copy" class="btn" data-clipboard-text="jiverson@fireflycomputers.com"> jiverson@fireflycomputers.com </button></n>
<b>Direct</b>: 612-808-9388 </n>     
<b>Cell</b>: 612-730-4822 </n>
<b>Strengths</b>:</br><span class="Blue">Developer</span> <span class="Blue">Positivity</span> <span class="Yellow">Communication</span> <span class="Blue">Empathy</span> <span class="Yellow">Activator</span>
     </div>
     </div>
  </li>
  <li class="ui-state-default styleCol Tech Warranty ">
     <img src="http://family.fireflycomputers.com/wp-content/uploads/2019/01/John-Stricker-Photo.jpg" alt="" width="280" height="280" class="alignnone size-full wp-image-213" />
     <div class="OrangeBox"><h3 class="name">John Stricker</h3>
<span class="MainExt">x 137</span>
     <p class="StylePInEachOrangeBox">TECHNICIAN</n></p>
<span class="DepartmentLabel">WARRANTY SERVICES</span>
     <hr>
     <div class="hidenOnLoad 1" >
<b>Email</b>: <button title="Click to copy" class="btn" data-clipboard-text="johnrs@yeah.net"> johnrs@yeah.net </button></n>
<b>Direct</b>: 612-808-9384 </n>     
<b>Cell</b>: 763-242-1142 </n>
<b>Strengths</b>:</br>
     </div>
     </div>
  </li>
  <li class="ui-state-default styleCol Tech ">
<img src="http://family.fireflycomputers.com/wp-content/uploads/2019/03/Joe-Sime.jpg" alt="" width="280" height="280" class="joeSlime alignnone size-full wp-image-223" />
     <div class="OrangeBox"><h3 class="name">Joe Sime</h3>
<span class="MainExt">x 137</span>
     <p class="StylePInEachOrangeBox">TECHNICIAN</n></p>
<span class="DepartmentLabel">TECH</span>
     <hr>
     <div class="hidenOnLoad 1" >
<b>Email</b>: <button title="Click to copy" class="btn" data-clipboard-text="joecsime@gmail.com"> joecsime@gmail.com </button></n>
<b>Direct</b>: 612-808-9384 </n>     
<b>Cell</b>: 763-257-2198 </n>
<b>Strengths</b>:</br>
     </div>
     </div>
  </li>
  <li class="ui-state-default styleCol Tech">
<img src="http://family.fireflycomputers.com/wp-content/uploads/2019/05/Justin-Scheerer.jpg" alt="" width="313" height="280" class="alignnone size-full wp-image-247" />
     <div class="OrangeBox"><h3 class="name">Justin Scheerer</h3>
<span class="MainExt">x 137</span>
     <p class="StylePInEachOrangeBox">TECHNICIAN</n></p>
<span class="DepartmentLabel">TECH</span>
     <hr>
     <div class="hidenOnLoad 1" >
<b>Email</b>: <button title="Click to copy" class="btn" data-clipboard-text="atlanteanselection@gmail.com"> atlanteanselection@gmail.com </button></n>
<b>Direct</b>: 612-808-9384 </n>     
<b>Cell</b>: 763-242-9530 </n>
<b>Strengths</b>:</br>
     </div>
     </div>
  </li>
  <li class="ui-state-default styleCol Executive Achiever Ideation Strategic Relator Positivity">
     <img src="http://employeedir.wpengine.com/wp-content/uploads/2018/11/Kari-Phillips-directory-1.jpg" alt="" width="280" height="280" class="alignnone size-full wp-image-124" />
     <div class="OrangeBox"><h3 class="name">Kari Phillips</h3>
<span class="MainExt">x 101</span>
     <p class="StylePInEachOrangeBox">CEO</n></p>
<span class="DepartmentLabel">EXECUTIVE</span>
     <hr>
     <div class="hidenOnLoad 1" >
<b>Email</b>: <button title="Click to copy" class="btn" data-clipboard-text="kari@fireflycomputers.com"> kari@fireflycomputers.com </button></n>
<b>Direct</b>: 612-564-4078 </n>     
<b>Cell</b>: 612-816-6241 </n>
<b>Strengths</b>:</br><span class="Purple">Achiever</span> <span class="Red">Ideation</span> <span class="Red">Strategic</span> <span class="Blue">Relator</span> <span class="Blue">Positivity</span>
     </div>
     </div>
  </li>
 <li class="ui-state-default styleCol Marketing">
     <img src="http://family.fireflycomputers.com/wp-content/uploads/2019/02/kate-Spa.jpg" alt="" width="280" height="280" class="alignnone size-full wp-image-219" />
     <div class="OrangeBox"><h3 class="name">Kate Spangenberg</h3>
<span class="MainExt">x 147</span>
     <p class="StylePInEachOrangeBox">MARKETING SPECIALIST</n></p>
<span class="DepartmentLabel">MARKETING</span>
     <hr>
     <div class="hidenOnLoad 1" >
<b>Email</b>: <button title="Click to copy" class="btn" data-clipboard-text="kspangenberg@fireflycomputers.com"> kspangenberg@fireflycomputers.com </button></n>
<b>Direct</b>: 612-808-9395 </n>     
<b>Cell</b>: 218-341-8012 </n>
<b>Strengths</b>:</br><span class=""></span> <span class=""></span> <span class=""></span> <span class=""></span> <span class=""></span>
     </div>
     </div>
  </li>
  <li class="ui-state-default styleCol Warranty Tech">
     <img src="http://family.fireflycomputers.com/wp-content/uploads/2018/12/Kevin-Bushman-directory.jpg" alt="" width="280" height="280" class="alignnone size-full wp-image-133" />
     <div class="OrangeBox"><h3 class="name">Kevin Bushman</h3>
<span class="MainExt">x 137</span>
     <p class="StylePInEachOrangeBox">TECHNICIAN</n></p>
<span class="DepartmentLabel New">WARRANTY SERVICES</span>
     <hr>
     <div class="hidenOnLoad 1" >
<b>Email</b>: <button title="Click to copy" class="btn" data-clipboard-text="work@kevinbushman.me">work@kevinbushman.me</button></n>
<b>Direct</b>: 612-808-9384 </n>     
<b>Cell</b>: 763-200-5544 </n>
<b>Strengths</b>:</br>
     </div>
     </div>
  </li>
<li class="ui-state-default styleCol Warranty Tech">
    <img src="http://family.fireflycomputers.com/wp-content/uploads/2019/05/Keng-Veng.jpg" alt="" width="280" height="476" class="alignnone size-full wp-image-242" />
     <div class="OrangeBox"><h3 class="name">Keng Vang</h3>
<span class="MainExt">x 137</span>
     <p class="StylePInEachOrangeBox">TECHNICIAN</n></p>
<span class="DepartmentLabel New">WARRANTY SERVICES</span>
     <hr>
     <div class="hidenOnLoad 1" >
<b>Email</b>: <button title="Click to copy" class="btn" data-clipboard-text="vangkn07@gmail.com"> vangkn07@gmail.com </button></n>
<b>Direct</b>: 612-808-9384 </n>     
<b>Cell</b>: 651-278-1678 </n>
<b>Strengths</b>:</br>
     </div>
     </div>
  </li>
  <li class="ui-state-default styleCol WDS Tech Relator	Analytical	Individualization	Competition	Responsibility">
    <img src="http://employeedir.wpengine.com/wp-content/uploads/2018/11/KJ-Holliday-directory.jpg" alt="" width="280" height="280" class="alignnone size-full wp-image-91" />
     <div class="OrangeBox"><h3 class="name">KJ Holliday</h3>
<span class="MainExt">x 119</span>
     <p class="StylePInEachOrangeBox">LEAD TECHNICIAN - WINDOWS DEPLOYMENT SERVICES</n></p>
<span class="DepartmentLabel">WINDOWS DEPLOYMENT</span>
     <hr>
     <div class="hidenOnLoad 1" >
<b>Email</b>: <button title="Click to copy" class="btn" data-clipboard-text="kjholliday12345@gmail.com"> kjholliday12345@gmail.com </button></n>
<b>Direct</b>: 612-808-9393 </n>     
<b>Cell</b>: 612-430-1501 </n>
<b>Strengths</b>:</br><span class="Blue">Relator</span> <span class="Red">Analytical</span> <span class="Blue">Individualization</span> <span class="Yellow">Competition</span> <span class="Purple">Responsibility</span>
     </div>
     </div>
  </li>
 <li class="ui-state-default styleCol Sales Achiever Competition Strategic Relator Focus">
    <img src="http://family.fireflycomputers.com/wp-content/uploads/2019/01/Kristie.jpg" alt="" width="280" height="280" class="alignnone size-full wp-image-203" />
     <div class="OrangeBox"><h3 class="name">Kristie Powell</h3>
<span class="MainExt">x 130</span>
     <p class="StylePInEachOrangeBox">Account Manager</n></p>
<span class="DepartmentLabel">SALES</span>
     <hr>
     <div class="hidenOnLoad 1" >
<b>Email</b>: <button title="Click to copy" class="btn" data-clipboard-text="kpowell@fireflycomputers.com"> kpowell@fireflycomputers.com </button></n>
<b>Direct</b>: 612-808-9143 </n>     
<b>Cell</b>: 612-237-1215 </n>
<b>Strengths</b>:</br><span class="Purple">Achiever</span> <span class="Yellow">Competition</span> <span class="Red">Strategic</span> <span class="Blue">Relator</span> <span class="Purple">Focus</span>
     </div>
     </div>
  </li>
  <li class="ui-state-default styleCol Sales Competition Achiever Includer Consistency Responsibility">
     <img src="http://family.fireflycomputers.com/wp-content/uploads/2019/01/Kyle.jpg" alt="" width="280" height="280" class="alignnone size-full wp-image-204" />
     <div class="OrangeBox"><h3 class="name">Kyle Mogren</h3>
<span class="MainExt">x 132</span>
     <p class="StylePInEachOrangeBox">Account Manager</n></p>
<span class="DepartmentLabel New">SALES</span>
     <hr>
     <div class="hidenOnLoad 1" >
<b>Email</b>: <button title="Click to copy" class="btn" data-clipboard-text="kmogren@fireflycomputers.com"> kmogren@fireflycomputers.com </button></n>
<b>Direct</b>: 612-808-9145 </n>     
<b>Cell</b>: 651-270-7922 </n>
<b>Strengths</b>:</br><span class="Yellow">Competition</span> <span class="Purple">Achiever</span> <span class="Blue">Includer</span> <span class="Purple">Consistency</span> <span class="Purple">Responsibility</span>
     </div>
     </div>
  </li>
  <li class="ui-state-default styleCol Admin Input Learner Empathy Developer Responsibility">
    <img src="http://employeedir.wpengine.com/wp-content/uploads/2018/11/Lexi-Greenside-directory.jpg" alt="" width="280" height="280" class="alignnone size-full wp-image-106" />
     <div class="OrangeBox"><h3 class="name">Lexi Greenside</h3>
<span class="MainExt">x 103</span>
     <p class="StylePInEachOrangeBox">WARRANTY SERVICES COORDINATOR</n></p>
<span class="DepartmentLabel">OPERATIONS</span>
     <hr>
     <div class="hidenOnLoad 1" >
<b>Email</b>: <button title="Click to copy" class="btn" data-clipboard-text="agreenside@fireflycomputers.com"> agreenside@fireflycomputers.com </button></n>
<b>Direct</b>: 612-326-1817 </n>     
<b>Cell</b>: 612-246-0479 </n>
<b>Strengths</b>:</br><span class="Red">Input</span> <span class="Red">Learner</span> <span class="Blue">Empathy</span> <span class="Blue">Developer</span> <span class="Purple">Responsibility</span>
     </div>
     </div>
  </li>
  <li class="ui-state-default styleCol Sales Maximizer Communication Empathy Strategic Positivity">
    <img src="http://family.fireflycomputers.com/wp-content/uploads/2019/01/Marissa.jpg" alt="" width="280" height="280" class="alignnone size-full wp-image-205" />
    <div class="OrangeBox"><h3 class="name">Marissa Kolmer</h3>
<span class="MainExt">x 131</span>
    <p class="StylePInEachOrangeBox">SR. ACCOUNT MANAGER</n></p>
<span class="DepartmentLabel">SALES</span>
    <hr>
    <div class="hidenOnLoad 1" >
<b>Email</b>: <button title="Click to copy" class="btn" data-clipboard-text="mkolmer@fireflycomputers.com">mkolmer@fireflycomputers.com </button></n>
<b>Direct</b>: 612-808-9144 </n>     
<b>Cell</b>: 612-412-6780 </n>
<b>Strengths</b>:</br><span class="Yellow">Maximizer</span> <span class="Yellow">Communication</span> <span class="Blue">Empathy</span> <span class="Red">Strategic</span> <span class="Blue">Positivity</span>
    </div>
    </div>
 </li>
  <li class="ui-state-default styleCol Warranty Tech">
     <img src="http://employeedir.wpengine.com/wp-content/uploads/2018/11/avatar-generic-280x280.png" alt="" width="280" height="280" class="alignnone size-full wp-image-74" />
     <div class="OrangeBox"><h3 class="name">Matt Muellenbach</h3>
<span class="MainExt">x 137</span>
     <p class="StylePInEachOrangeBox">TECHNICIAN</n></p>
<span class="DepartmentLabel New">WARRANTY SERVICES</span>
     <hr>
     <div class="hidenOnLoad 1" >
<b>Email</b>: <button title="Click to copy" class="btn" data-clipboard-text="matt.muellenbach@gmail.com"> matt.muellenbach@gmail.com </button></n>
<b>Direct</b>: 612-808-9384 </n>     
<b>Cell</b>: 763-744-8880 </n>
<b>Strengths</b>:</br>
     </div>
     </div>
  </li>
  <li class="ui-state-default styleCol Warranty Tech">
   <img src="http://family.fireflycomputers.com/wp-content/uploads/2019/02/matt-g.jpg" alt="" width="280" height="280" class="alignnone size-full wp-image-220 moveMeAroundMattG" />
     <div class="OrangeBox"><h3 class="name">Matt Gustafson</h3>
<span class="MainExt">x 137</span>
     <p class="StylePInEachOrangeBox">TECHNICIAN</n></p>
<span class="DepartmentLabel New">WARRANTY SERVICES</span>
     <hr>
     <div class="hidenOnLoad 1" >
<b>Email</b>: <button title="Click to copy" class="btn" data-clipboard-text="MattWGustafson@Gmail.com"> MattWGustafson@Gmail.com </button></n>
<b>Direct</b>: 612-808-9384 </n>     
<b>Cell</b>:  </n>
<b>Strengths</b>:</br>
     </div>
     </div>
  </li>
  <li class="ui-state-default styleCol Marketing ">
<img src="http://family.fireflycomputers.com/wp-content/uploads/2019/02/Megan-E.jpg" alt="" width="280" height="280" class="size-full wp-image-217" /> 
     <div class="OrangeBox"><h3 class="name">Megan Enga</h3>
<span class="MainExt">x 146</span>
     <p class="StylePInEachOrangeBox">CONTRACTS COORDINATOR</n></p>
<span class="DepartmentLabel New">MARKETING</span>
     <hr>
     <div class="hidenOnLoad 1" >
<b>Email</b>: <button title="Click to copy" class="btn" data-clipboard-text="menga@fireflycomputers.com"> menga@fireflycomputers.com </button></n>
<b>Direct</b>: 612-808-9394</n>     
<b>Cell</b>: 651-356-5077 </n>
<b>Strengths</b>:</br>
     </div>
     </div>
  </li>
 <li class="ui-state-default styleCol Tech">
<img src="http://family.fireflycomputers.com/wp-content/uploads/2019/03/Michael-Tischler.jpg" alt="" width="280" height="280" class="alignnone size-full wp-image-226 michaelTischler" />
     <div class="OrangeBox"><h3 class="name">Michael Tischler</h3>
<span class="MainExt">x 137</span>
     <p class="StylePInEachOrangeBox">TECHNICIAN</n></p>
<span class="DepartmentLabel New">Tech</span>
     <hr>
     <div class="hidenOnLoad 1" >
<b>Email</b>: <button title="Click to copy" class="btn" data-clipboard-text=""> </button></n>
<b>Direct</b>: 612-808-9384</n>     
<b>Cell</b>: 651-925-7485 </n>
<b>Strengths</b>:</br>
     </div>
     </div>
  </li>
  <li class="ui-state-default styleCol Executive Achiever Adaptability Positivity Developer Woo">
     <img src="http://employeedir.wpengine.com/wp-content/uploads/2018/11/nikki-Levin-directory.jpg" alt="" width="280" height="280" class="alignnone size-full wp-image-92" />
     <div class="OrangeBox"><h3 class="name">Nikki Levin</h3>
<span class="MainExt">x 112</span>
     <p class="StylePInEachOrangeBox">VP OF OPERATIONS</n></p>
<span class="DepartmentLabel">EXECUTIVE</span>
     <hr>
     <div class="hidenOnLoad 1" >
<b>Email</b>: <button title="Click to copy" class="btn" data-clipboard-text="nikki@fireflycomputers.com"> nikki@fireflycomputers.com </button></n>
<b>Direct</b>: 612-564-6941 </n>     
<b>Cell</b>: 651-357-2198 </n>
<b>Strengths</b>:</br><span class="Purple">Achiever</span> <span class="Blue">Adaptability</span> <span class="Blue">Positivity</span> <span class="Blue">Developer</span> <span class="Yellow">Woo</span>
     </div>
     </div>
  </li>
<li class="ui-state-default styleCol Tech Warranty">
   <img src="http://family.fireflycomputers.com/wp-content/uploads/2019/05/Nick-Reiss.jpg" alt="" width="280" height="2988" class="alignnone size-full wp-image-239 " />
     <div class="OrangeBox"><h3 class="name">Nick Reiss</h3>
<span class="MainExt">x 137</span>
     <p class="StylePInEachOrangeBox">TECNICIAN</n></p>
<span class="DepartmentLabel">WARRANTY</span>
     <hr>
     <div class="hidenOnLoad 1" >
<b>Email</b>: <button title="Click to copy" class="btn" data-clipboard-text="nreiss45@gmail.com"> nreiss45@gmail.com </button></n>
<b>Direct</b>: 612-808-9384 </n>     
<b>Cell</b>: 612-205-6507 </n>
<b>Strengths</b>:</br><span class=""></span> <span class=""></span> <span class=""></span> <span class=""></span> <span class=""></span>
     </div>
     </div>
  </li>
  <li class="ui-state-default styleCol Tech Warranty">
    <img src="http://family.fireflycomputers.com/wp-content/uploads/2019/04/Noah.jpg" alt="" width="193" height="280" class="alignnone size-full wp-image-233" />
     <div class="OrangeBox"><h3 class="name">Noah Foldenaur</h3>
<span class="MainExt">x 137</span>
     <p class="StylePInEachOrangeBox">TECHNICIAN</n></p>
<span class="DepartmentLabel">WARRANTY SERVICES</span>
     <hr>
     <div class="hidenOnLoad 1" >
<b>Email</b>: <button title="Click to copy" class="btn" data-clipboard-text="nfoldenaur@gmail.com"> nfoldenaur@gmail.com </button></n>
<b>Direct</b>: 612-808-9384 </n>     
<b>Cell</b>: 651-900-9167 </n>
<b>Strengths</b>:</br><span class=""></span> <span class=""></span> <span class=""></span> <span class=""></span> <span class=""></span>
     </div>
     </div>
  </li>
  <li class="ui-state-default styleCol Admin Restorative	Analytical	Deliberative	Learner	Achiever">
   <img src="http://employeedir.wpengine.com/wp-content/uploads/2018/11/PajSua-Cha-directory.jpg" alt="" width="280" height="280" class="alignnone size-full wp-image-93" />
     <div class="OrangeBox"><h3 class="name">PajSua Cha</h3>
<span class="MainExt">x 124</span>
     <p class="StylePInEachOrangeBox">LEAD WARRANTY SERVICES COORDINATOR</n></p>
<span class="DepartmentLabel">OPERATIONS</span>
     <hr>
     <div class="hidenOnLoad 1" >
<b>Email</b>: <button title="Click to copy" class="btn" data-clipboard-text="pcha@fireflycomputers.com"> pcha@fireflycomputers.com </button></n>
<b>Direct</b>: 612-213-2969 </n>     
<b>Cell</b>: 612-743-8290 </n>
<b>Strengths</b>:</br><span class="Purple">Restorative</span> <span class="Red">Analytical</span> <span class="Purple">Deliberative</span> <span class="Red">Learner</span> <span class="Purple">Achiever</span>
     </div>
     </div>
  </li>
  <li class="ui-state-default styleCol Sales Positivity Empathy Woo Context Futuristic">
 <img src="http://family.fireflycomputers.com/wp-content/uploads/2019/01/Philip.jpg" alt="" width="280" height="280" class="alignnone size-full wp-image-207" />
     <div class="OrangeBox"><h3 class="name">Philip Crawford</h3>
<span class="MainExt">x 121</span>
     <p class="StylePInEachOrangeBox">REGIONAL SALES MANAGER</n></p>
<span class="DepartmentLabel">SALES</span>
     <hr>
     <div class="hidenOnLoad 1" >
<b>Email</b>: <button title="Click to copy" class="btn" data-clipboard-text="philip@fireflycomputers.com"> philip@fireflycomputers.com </button></n>
<b>Direct</b>: 651-400-1043 </n>     
<b>Cell</b>: 651-792-6504 </n>
<b>Strengths</b>:</br><span class="Blue">Positivity</span> <span class="Blue">Empathy</span> <span class="Yellow">Woo</span> <span class="Red">Context</span> <span class="Red">Futuristic</span>
     </div>
     </div>
  </li>
 <li class="ui-state-default styleCol Sales Positivity Empathy Woo Context Futuristic">
 <img src="http://family.fireflycomputers.com/wp-content/uploads/2019/03/Quinten-Winkel.jpg" alt="" width="280" height="280" class="alignnone size-full wp-image-228" />
     <div class="OrangeBox"><h3 class="name">Quinten Winkel</h3>
<span class="MainExt">x 137</span>
     <p class="StylePInEachOrangeBox">TECHNICIAN</n></p>
<span class="DepartmentLabel">TECH</span>
     <hr>
     <div class="hidenOnLoad 1" >
<b>Email</b>: <button title="Click to copy" class="btn" data-clipboard-text="">  </button></n>
<b>Direct</b>: 612-808-9384 </n>     
<b>Cell</b>: 520-272-4530 </n>
<b>Strengths</b>:</br><span class=""></span> <span class=""></span> <span class=""></span> <span class=""></span> <span class=""></span>
     </div>
     </div>
  </li>
  <li class="ui-state-default styleCol Sales Competition Achiever Restorative Analytical Focus">
    <img src="http://family.fireflycomputers.com/wp-content/uploads/2019/01/Raj.jpg" alt="" width="280" height="280" class="alignnone size-full wp-image-208" />
     <div class="OrangeBox"><h3 class="name">Raj Shah</h3>
<span class="MainExt">x 114</span>
     <p class="StylePInEachOrangeBox">REGIONAL SALES MANAGER</n></p>
<span class="DepartmentLabel">SALES</span>
     <hr>
     <div class="hidenOnLoad 1" >
<b>Email</b>: <button title="Click to copy" class="btn" data-clipboard-text="raj@fireflycomputers.com"> raj@fireflycomputers.com </button></n>
<b>Direct</b>: 612-564-6955 </n>     
<b>Cell</b>: 651-485-3700 </n>
<b>Strengths</b>:</br><span class="Yellow">Competition</span> <span class="Purple">Achiever</span> <span class="Purple">Restorative</span> <span class="Red">Analytical</span> <span class="Purple">Focus</span>
     </div>
     </div>
  </li>
  <li class="ui-state-default styleCol Sales Consistency Harmony Maximizer Empathy Discipline">
     <img src="http://family.fireflycomputers.com/wp-content/uploads/2019/01/Ryan.jpg" alt="" width="280" height="280" class="alignnone size-full wp-image-209" />
     <div class="OrangeBox"><h3 class="name">Ryan Lapadat</h3>
<span class="MainExt">x 120</span>
     <p class="StylePInEachOrangeBox">REGIONAL SALES MANAGER</n></p>
<span class="DepartmentLabel">SALES</span>
     <hr>
     <div class="hidenOnLoad 1" >
<b>Email</b>: <button title="Click to copy" class="btn" data-clipboard-text="ryan@fireflycomputers.com"> ryan@fireflycomputers.com </button></n>
<b>Direct</b>: 651-400-1042 </n>     
<b>Cell</b>: 651-428-1767 </n>
<b>Strengths</b>:</br><span class="Purple">Consistency</span> <span class="Blue">Harmony</span> <span class="Yellow">Maximizer</span> <span class="Blue">Empathy</span> <span class="Purple">Discipline</span>
     </div>
     </div>
  </li>
  <li class="ui-state-default styleCol Admin Empathy Woo Communication Positivity Responsibility">
<img src="http://employeedir.wpengine.com/wp-content/uploads/2018/11/Selina-Taylor-directory.jpg" alt="" width="280" height="280" class="alignnone size-full wp-image-105" />     
     <div class="OrangeBox"><h3 class="name">Selina Taylor</h3>
<span class="MainExt">x 133</span>
     <p class="StylePInEachOrangeBox">ADMINISTRATIVE ASSISTANT</n></p>
<span class="DepartmentLabel">OPERATIONS</span>
     <hr>
     <div class="hidenOnLoad 1" >
<b>Email</b>: <button title="Click to copy" class="btn" data-clipboard-text="aheroff@fireflycomputers.com"> staylor@fireflycomputers.com </button></n>
<b>Direct</b>: 612-808-9159 </n>     
<b>Cell</b>: 763-923-4674 </n>
<b>Strengths</b>:</br><span class="Blue">Empathy</span> <span class="Yellow">Woo</span> <span class="Yellow">Communication</span> <span class="Blue">Positivity</span> <span class="Purple">Responsibility</span>
     </div>
     </div>
  </li>
  <li class="ui-state-default styleCol Admin Futuristic Self-Assurance Competition Analytical Achiever">
     <img src="http://employeedir.wpengine.com/wp-content/uploads/2018/11/Seth-Colter-directory.jpg" alt="" width="280" height="280" class="alignnone size-full wp-image-102" />
     <div class="OrangeBox"><h3 class="name">Seth Coulter</h3>
<span class="MainExt">x 144</span>
     <p class="StylePInEachOrangeBox">JUNIOR ACCOUNTANT</n></p>
<span class="DepartmentLabel">OPERATIONS</span>
     <hr>
     <div class="hidenOnLoad 1" >
<b>Email</b>: <button title="Click to copy" class="btn" data-clipboard-text="scoulter@fireflycomputers.com"> scoulter@fireflycomputers.com </button></n>
<b>Direct</b>: 612-808-9390 </n>     
<b>Cell</b>: 612-599-8987 </n>
<b>Strengths</b>:</br><span class="Red">Futuristic</span> <span class="Yellow">Self-Assurance</span> <span class="Yellow">Competition</span> <span class="Red">Analytical</span> <span class="Purple">Achiever</span>
     </div>
     </div>
  </li>
  <li class="ui-state-default styleCol Warranty Tech">
     <img src="http://employeedir.wpengine.com/wp-content/uploads/2018/12/Stephen-Dick-directory.jpg" alt="" width="280" height="280" class="alignnone size-full wp-image-133" />
     <div class="OrangeBox"><h3 class="name">Stephen Dick</h3>
<span class="MainExt">x 137</span>
     <p class="StylePInEachOrangeBox">TECHNICIAN</n></p>
<span class="DepartmentLabel New">WARRANTY SERVICES</span>
     <hr>
     <div class="hidenOnLoad 1" >
<b>Email</b>: <button title="Click to copy" class="btn" data-clipboard-text="stephendick2@gmail.com"> stephendick2@gmail.com
 </button></n>
<b>Direct</b>: 612-808-9384 </n>     
<b>Cell</b>: 651-323-0787 </n>
<b>Strengths</b>:</br>
     </div>
     </div>
  </li>
  <li class="ui-state-default styleCol Warranty Tech Consistency	Focus	Restorative	Analytical	Responsibility">
     <img src="http://employeedir.wpengine.com/wp-content/uploads/2018/11/Steven-directory.jpg" alt="" width="280" height="280" class="alignnone size-full wp-image-111" />
     <div class="OrangeBox"><h3 class="name">Steve Lindgren</h3>
<span class="MainExt">x 111</span>
     <p class="StylePInEachOrangeBox">LEAD TECHNICIAN - WARRANTY SERVICES</n></p>
<span class="DepartmentLabel">WARRANTY SERVICES</span>
     <hr>
     <div class="hidenOnLoad 1" >
<b>Email</b>: <button title="Click to copy" class="btn" data-clipboard-text="trainscom@yahoo.com"> trainscom@yahoo.com </button></n>
<b>Direct</b>: 612-564-6943 </n>     
<b>Cell</b>: 763-213-5276 </n>
<b>Strengths</b>:</br><span class="Purple">Consistency</span> <span class="Purple">Focus</span> <span class="Purple">Restorative</span> <span class="Red">Analytical</span> <span class="Purple">Responsibility</span>
     </div>
     </div>
  </li>
 <li class="ui-state-default styleCol Tech Warranty ">
<img src="http://family.fireflycomputers.com/wp-content/uploads/2019/04/Tomas-Carlson.jpg" alt="" width="210" height="300" class="alignnone size-medium wp-image-192" />
     <div class="OrangeBox"><h3 class="name">Tomas Carlson</h3>
<span class="MainExt">x 111</span>
     <p class="StylePInEachOrangeBox">TECHNICIAN</n></p>
<span class="DepartmentLabel TomasCarlson">WARRANTY SERVICES</span>
     <hr>
     <div class="hidenOnLoad 1" >
<b>Email</b>: <button title="Click to copy" class="btn" data-clipboard-text="NA"> NA </button></n>
<b>Direct</b>: 612-564-6943 </n>     
<b>Cell</b>: 651-206-0193 </n>
<b>Strengths</b>:</br><span class=""></span> <span class=""></span> <span class=""></span> <span class=""></span> <span class=""></span>
     </div>
     </div>
  </li>
  <li class="ui-state-default styleCol Warranty Tech Deliberative	Adaptability	Command	Analytical	Context">
<img src="http://family.fireflycomputers.com/wp-content/uploads/2018/12/Tony-Aguirre-e1545079413212-225x300.jpg" alt="" width="210" height="300" class="alignnone size-medium wp-image-192" />
     <div class="OrangeBox"><h3 class="name">Tony Aguirre</h3>
<span class="MainExt">x 137</span>
     <p class="StylePInEachOrangeBox">TECHNICIAN</n></p>
<span class="DepartmentLabel">WARRANTY SERVICES</span>
     <hr>
     <div class="hidenOnLoad 1" >
<b>Email</b>: <button title="Click to copy" class="btn" data-clipboard-text="aguirreanthony617@gmail.com"> aguirreanthony617@gmail.com </button></n>
<b>Direct</b>: 612-808-9384 </n>     
<b>Cell</b>: 651-815-9882 </n>
<b>Strengths</b>:</br><span class="Purple">Deliberative</span> <span class="Blue">Adaptability</span> <span class="Yellow">Command</span> <span class="Red">Analytical</span> <span class="Red">Context</span>
     </div>
     </div>
  </li>
  <li class="ui-state-default styleCol Warehouse Relator	Adaptability	Connectedness	Developer	Empathy">
   <img src="http://employeedir.wpengine.com/wp-content/uploads/2018/11/Wallace-directory.jpg" alt="" width="280" height="280" class="alignnone size-full wp-image-112" />
     <div class="OrangeBox"><h3 class="name">Wallace Hammick</h3>
<span class="MainExt">x 122</span>
     <p class="StylePInEachOrangeBox">WAREHOUSE ASSOCIATE</n></p>
<span class="DepartmentLabel">WAREHOUSE</span>
     <hr>
     <div class="hidenOnLoad 1" >
<b>Email</b>: <button title="Click to copy" class="btn" data-clipboard-text="uncleman29@gmail.com"> uncleman29@gmail.com </button></n>
<b>Direct</b>: 651-400-1045 </n>     
<b>Cell</b>: N/A </n>
<b>Strengths</b>:</br><span class="Blue">Relator</span> <span class="Blue">Adaptability</span> <span class="Blue">Connectedness</span> <span class="Blue">Developer</span> <span class="Blue">Empathy</span>
     </div>
     </div>
  </li>
  <li class="ui-state-default styleCol Warranty Tech Learner	Intellection	Context	Input	Analytical">
      <img src="http://employeedir.wpengine.com/wp-content/uploads/2018/11/Will-Doucette-directory.jpg" alt="" width="280" height="280" class="alignnone size-full wp-image-96" />
      <div class="OrangeBox"><h3 class="name">Will Doucette</h3>
 <span class="MainExt">x 111</span>
      <p class="StylePInEachOrangeBox">WARRANTY SERVICES MANAGER</n></p>
 <span class="DepartmentLabel">WARRANTY SERVICES</span>
      <hr>
      <div class="hidenOnLoad 1" >
 <b>Email</b>: <button title="Click to copy" class="btn" data-clipboard-text="will@fireflycomputers.com"> will@fireflycomputers.com </button></n>
 <b>Direct</b>: 612-564-6943 </n>     
 <b>Cell</b>: 518-637-5229 </n>
 <b>Strengths</b>:</br><span class="Red">Learner</span> <span class="Red">Intellection</span> <span class="Red">Context</span> <span class="Red">Input</span> <span class="Red">Analytical</span>
      </div>
      </div>
   </li>
   <li class="ui-state-default styleCol  CDS Tech Achiever	Restorative	Individualization	Learner	Relator">
     <img src="http://employeedir.wpengine.com/wp-content/uploads/2018/11/Yanny-Cha-directory.jpg" alt="" width="280" height="280" class="alignnone size-full wp-image-97" />
     <div class="OrangeBox"><h3 class="name">Yanny Cha</h3>
<span class="MainExt">x 137</span>
     <p class="StylePInEachOrangeBox">CHROME DEPLOYMENT SERVICES MANAGER</n></p>
<span class="DepartmentLabel">CHROME DEPLOYMENT</span>
     <hr>
     <div class="hidenOnLoad 1" >
<b>Email</b>: <button title="Click to copy" class="btn yanny" data-clipboard-text="chromeservices@fireflycomputers.com"> chromeservices@fireflycomputers.com </button></n>
<b>Direct</b>: 612-808-9384 </n>     
<b>Cell</b>: N/A </n>
<b>Strengths</b>:</br><span class="Red">Achiever</span> <span class="Purple">Restorative</span> <span class="Blue">Individualization</span> <span class="Red">Learner</span> <span class="Blue">Relator</span>
     </div>
     </div>
  </li>
</ul>
<!-- Row -->
</div>
<hr>
<div class="row styleRow">
<ul class="list" id="sortable">
<li class="ui-state-default styleCol Intern">
     <img src="http://family.fireflycomputers.com/wp-content/uploads/2019/05/Megan-Zastrow.jpg" alt="" width="280" height="280" class="alignnone size-full wp-image-244" />
     <div class="OrangeBox"><h3 class="name">Megan Zastrow</h3>
<span class="MainExt">x 137</span>
     <p class="StylePInEachOrangeBox">SUMMER INTERN</n></p>
<span class="DepartmentLabel New">TECHNICIAN</span>
     <hr>
     <div class="hidenOnLoad 1" >
<b>Email</b>: <button title="Click to copy" class="btn" data-clipboard-text="meganzastrow@gmail.com"> meganzastrow@gmail.com </button></n>
<b>Direct</b>: 612-808-9384 </n>     
<b>Cell</b>: 651-895-3705 </n>
<b>Strengths</b>:</br>
     </div>
     </div>
  </li>
<li class="ui-state-default styleCol Intern">
     <img src="http://family.fireflycomputers.com/wp-content/uploads/2019/05/Connor-Bjornberg.jpg" alt="" width="330" height="280" class="alignnone size-full wp-image-245" />
     <div class="OrangeBox"><h3 class="name">Connor Bjornberg</h3>
<span class="MainExt">x 137</span>
     <p class="StylePInEachOrangeBox">SUMMER INTERN</n></p>
<span class="DepartmentLabel New">TECHNICIAN</span>
     <hr>
     <div class="hidenOnLoad 1" >
<b>Email</b>: <button title="Click to copy" class="btn" data-clipboard-text="connorb@iastate.edu"> connorb@iastate.edu </button></n>
<b>Direct</b>: 612-808-9384 </n>     
<b>Cell</b>: 651-298-0104 </n>
<b>Strengths</b>:</br>
     </div>
     </div>
  </li>
<li class="ui-state-default styleCol Intern">
     <img src="http://family.fireflycomputers.com/wp-content/uploads/2019/05/Hugh-Cunningham.jpg" alt="" width="280" height="276" class="alignnone size-full wp-image-246" />
     <div class="OrangeBox"><h3 class="name">Hugh Cunningham</h3>
<span class="MainExt">x 137</span>
     <p class="StylePInEachOrangeBox">SUMMER INTERN</n></p>
<span class="DepartmentLabel New">TECHNICIAN</span>
     <hr>
     <div class="hidenOnLoad 1" >
<b>Email</b>: <button title="Click to copy" class="btn" data-clipboard-text="hugh.cunningham54@gmail.com"> hugh.cunningham54@gmail.com </button></n>
<b>Direct</b>: 612-808-9384 </n>     
<b>Cell</b>: 651-795-1784 </n>
<b>Strengths</b>:</br>
     </div>
     </div>
  </li>
<li class="ui-state-default styleCol Intern">
     <img src="http://family.fireflycomputers.com/wp-content/uploads/2019/05/Gabe-Rensenbrink.jpg" alt="" width="280" height="280" class="alignnone size-full wp-image-250" />
     <div class="OrangeBox"><h3 class="name">Gabe Rensenbrink</h3>
<span class="MainExt">x 137</span>
     <p class="StylePInEachOrangeBox">SUMMER INTERN</n></p>
<span class="DepartmentLabel New">TECHNICIAN</span>
     <hr>
     <div class="hidenOnLoad 1" >
<b>Email</b>: <button title="Click to copy" class="btn" data-clipboard-text="gabe.rensenbrink@gmail.com"> gabe.rensenbrink@gmail.com </button></n>
<b>Direct</b>: 612-808-9384 </n>     
<b>Cell</b>: 651-500-9030 </n>
<b>Strengths</b>:</br>
     </div>
     </div>
  </li>
</ul>
</div>
<!-- Container -->
</div>
<script src="//cdnjs.cloudflare.com/ajax/libs/list.js/1.5.0/list.min.js"></script><script>var options = {valueNames: [ 'name', 'born' ]};var userList = new List('users', options);</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/clipboard.js/2.0.1/clipboard.min.js"></script><script>new ClipboardJS('.btn');</script>
</div>	

<?php
get_footer();