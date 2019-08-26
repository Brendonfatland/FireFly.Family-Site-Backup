<?php
/**

 *
 * Template name: DEVOTEFAQ
 *
 * @package storefront
 */

get_header(); ?>

<div class="container">
<div class="row">
	<h2 class="DevoteADay">DEVOte a Day FAQ</h2>
<span class="pHover pOne">Can I just work and have FF donate a day’s pay to my chosen charity?</span>
<p class="backgroundP bgOne" style="display:none;">We strongly encourage you to go out and actually volunteer at a charity or event, but you do have the option to donate one day of your pay to a charity and have FireFly match your donation dollar-for-dollar. We’ll have several announcement boards around FireFly where we announce your name and the charity you’re working for that day. Feel free to wear clothing or hats that show off your selected charity. Your portion of the donation will appear as a deduction on your next paycheck. </p>
</br>

<span class="pHover pTwo">Do I need to come into work before and/or after events that are less than 8 hours?</span>
<p class="backgroundP bgTwo" style="display:none;">We expect you to be reasonable about the time you need for an event. Your manager and HR will evaluate on a case-by-case basis whether you’ll be responsible for coming in to work before or after. If you’d like, you can use PTO or unpaid time off to cover any hours that day that aren’t covered by the event.</p>
</br>

<span class="pHover pThree">For events where people raise sponsorship dollars, can I solicit donations from other FireFly employees? Do I have to just walk around and talk with people, or is there a way to seek donations companywide?</span>
<p class="backgroundP bgThree" style="display:none;">It’s okay to ask your fellow coworkers and other employees for sponsorship money, but please don’t disrupt the times when you or others should be working in order to do so. We will have a message board on the internal FireFly Family website where we post sponsorship requests, and eventually, we’ll also be able to post them on announcement boards around FireFly. You can also post information and requests in the breakrooms, solicit donations at lunch and on breaks, and with prior approval, send requests in a companywide email or announce your request at a company meeting.</p>
</br>

<span class="pHover pFour">If a charity event is on a weekend, can I do the event and then take a compensation day off during the week as my DEVOte a Day?</span>
</br><p class="backgroundP bgFour" style="display:none;">No</p>
</br>

<span class="pHover pFive">If it’s a multi-day event, can I take time off or use PTO for the other days?</br></span>
<p class="backgroundP bgFive" style="display:none;">Yes, with manager approval</p>
</br>

<span class="pHover pSix">How does it work if I want to explore another role or department for my Improvement Day?</br></span>
<p class="backgroundP bgSix" style="display:none;">Start by talking with your manager about what you have in mind. Once you get your manager's approval, you'll also need the approval of the manager for whichever department you want to work in for the day. Depending on what you're comfortable with, you can reach out to the other manager directly or you can ask your manager to inquire on your behalf. They'll help you figure out what day works best and, if necessary, who exactly you'll be working with.</p>
</br>

<span class="pHover pSeven">What do I do with the stuff I discover, learn, develop, etc. on my Improvement Day?</br></span>
<p class="backgroundP bgSeven" style="display:none;">All employees who complete an Improvement Day will be required to write up a brief report about what they discovered, learned, developed, etc. and give it to their manager and HR. For significant finds that will help improve FireFly, please schedule a time with your manager and/or department head to discuss.</p>
</br>
</div>
</div>
<style>
	.backgroundP{background: #cdcdcd40; background: #cdcdcd40;
    padding-top: 15px;
    padding-bottom: 15px;
    padding-left: 15px;
    padding-right: 15px;}
	.UpcomingEvents{margin-top:34px;}
	.pTitle{margin-bottom:5px; line-height: 1;}
	.h2Title{font-size:20px;     margin-bottom: 5px; text-decoration:underline; line-height: 1;}
	.mainP{font-family: 'Roboto', sans-serif; color: black; text-align: justify; font-size:16px !important;}
    .site{background-color: white !important;}
    .wp-image-1923{width:100%;}
	.orange{color:#fe5000 !important; font-size:20px;}
	.rowToAddMarginTop{margin-top:20px;}
	body{font-size: .86rem  !important;}
	.col-full{max-width: 85.559em  !important;}
	hr{width:100%;}
	.bgFour{width:100%;}
	.bgFive{width:100%;}
	.DevoteADay{color:#fe5000 !important; text-align:center; width:100%; margin:0 auto; margin-bottom:22px; }
	.pHover{font-family: 'Roboto', sans-serif; color: black; margin-bottom:0px; width: 100%; text-align: left; background: white !important; padding-top: 10px; padding-bottom: 10px; padding-left: 10px; padding-right: 10px; border-top: 1px #efefef solid;font-size: 18px;}
	.pHover:hover{ cursor:pointer; background: white !important; }
</style>
<script>
	var j = jQuery;
	j(function() {
		j(".pOne").click(function(){
		j(".bgOne").fadeToggle(500);
		});
		j(".pTwo").click(function(){
		j(".bgTwo").fadeToggle(500);
		});
		j(".pThree").click(function(){
		j(".bgThree").fadeToggle(500);
		});
		j(".pFour").click(function(){
		j(".bgFour").fadeToggle(500);
		});
		j(".pFive").click(function(){
		j(".bgFive").fadeToggle(500);
		});
		j(".pSix").click(function(){
		j(".bgSix").fadeToggle(500);
		});
		j(".pSeven").click(function(){
		j(".bgSeven").fadeToggle(500);
		});
	});
</script>
<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"> </script>

<?php 
get_footer();