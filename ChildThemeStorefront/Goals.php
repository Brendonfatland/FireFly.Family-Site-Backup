<?php
/**
 * The template for displaying the homepage.
 *
 * This page template will display any functions hooked into the `homepage` action.
 * By default this includes a variety of product displays and the page content itself. To change the order or toggle these components
 * use the Homepage Control plugin.
 * https://wordpress.org/plugins/homepage-control/
 *
 * Template name: Goals
 *
 * @package storefront
 */

get_header(); ?>

<div class="container">
	<div class="row">
		<div class="col-md-12">
			<h2 class="text-center">Top 5 Goals of FireFly 2019</h2>
		</div>
	</div>
	<div class="row">
		<div class="col-md-6">
			<div class="log-container">
				<div class="log progress-log"><span class="scan-count styleLeft"></span> </div>
			</div>
			<div class="demo-content">
                <img class="grass" src="http://www.firefly.family/wp-content/uploads/2019/06/visual-distraction-opt-edited.jpg ">
                <img class="circle" src="http://www.firefly.family/wp-content/uploads/2019/06/golf-circle-1.png">
            </div>
		</div>
		<div class="col-md-6">
		<p class="rightP">We are 30% towards our -> $ 100,000,000.00 Revenue Goal!</br>
		Great job everyone! </p>
		</div>
	</div>
	<div class="row">
		<div class="col-md-6 styleLeft">
			Customer Satisfaction 
		</div>
		<div class="col-md-6">
			<p class="rightP">FireFly has been growing (25-50%) per year since its inception. While we are growing so rapidly there are certain challenges in meeting the needs of all our new customers. FireFly has made a huge point to keeping our signature level of excellence a top priority. This means hiring wisely and training accordingly per the projection of our growth. Bottom line is FireFly's signature customer satisfaction is a top goal in 2019.</p>
		</div>
	</div>
	<div class="row">
		<div class="col-md-6 styleLeft">
		<p class="styleLeft">New ERP - Cloudsuite Industrial</p> 
		</div>
		<div class="col-md-6">
			<p class="rightP">Cloudsuite Industrial is replacing Quickbooks and is/has been a huge undertaking. This will revolutionize every aspect of FireFly's internal workings. </p>
		</div>
	</div>
<div class="row">
		<div class="col-md-6 styleLeft">
		<p class="styleLeft">Optimize and Automate</p> 
		</div>
		<div class="col-md-6">
			<p class="rightP">Speaking of the new ERP, we have been refining all of our processes and procedures so they run smoother by optimizing how things are done, where people are located, new leaders promoted, cross department training, amongst other key elements to make us successful in 2019. Attached with our optimization we have been automating many tasks with our ERP and website, freeing countless hours where our team can focus elsewhere.</p>
		</div>
	</div>
	<div class="row">
		<div class="col-md-6 styleLeft">
		<p class="styleLeft">Whiteglove and RMA Explosion!</p> 
		</div>
		<div class="col-md-6">
			<p class="rightP">Since last year August 2018, we've hired over 100 people, including summer interns. This means in the last year our company has more than doubled. Most of these new hires have been in the tech department to meet the needs of our expanding repairs and services.</p>
		</div>
	</div>
<div class="row text-center">
<h3 class="hMentions">Honorable mentions:</h3>
</div>
	<div class="row">
		<div class="col-md-6 styleLeft">
		<p class="styleLeft">Website Redesign</p> 
		</div>
		<div class="col-md-6">
			<p class="rightP">We are getting a facelift to our main site and merging FireFlyComputers.com and FireFlyAdvantage.com into one single site. We are also attaching this site via API to our ERP.</p>
		</div>
	</div>
<div class="row">
		<div class="col-md-6 styleLeft">
		<p class="styleLeft">Company Renovations</p> 
		</div>
		<div class="col-md-6">
			<p class="rightP">If you haven't noticed we are currently renovating our entire building. Note: This has been put on hold until after the summer. </p>
		</div>
	</div>
</div>

<style>
	.rightP{font-size: 18px !important;}
	.hMentions{margin: 0 auto;}
	.styleLeft{color: #fe5000 !important; text-align: center; font-size:20px !important;}
	.progress-log{text-align:center;}
	.row{margin-bottom: 30px !important;}
	.demo-content{position: relative;}
.circle{ 
    width: 2rem;
    height: 2rem;
    position: absolute;
    top: 31%;
   }
.grass{position: relative;
  margin:0 auto;
text-align:center;
  left:0px;
  right:0px;
}
.col-full { max-width: 86.5em !important }
body{font-size: .85rem; background: white !important;}
</style>

<script src="https://cdn.jsdelivr.net/npm/animejs@3.0.1/lib/anime.min.js"></script>
<script>
var slowAnimation = anime({
  targets: '.circle',
   translateX:{value: 140, duration: 7000},
   rotate: 1080, 
   duration:7000,
   delay: 800
});
	var percentOfFireFly = {count: 0};
anime({
	targets: percentOfFireFly,
	autoplay: false,
	count: 30,
	easing: 'linear',
	round: 1,
	autoplay: true,
	duration:4000,
	delay: 800,
	update: function(anim) {			
    var total = document.querySelector('.scan-count');
    total.innerHTML = percentOfFireFly.count + '%';
  }	
});
</script>

<?php
get_footer();