<?php
   defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!doctype html>
<html lang="en">
   <head>
      <meta charset="utf-8" />
      <title>Nutrime - Complete Nutrition Tuition 1</title>
      <meta name="description" content="Nutritional Therapist based in Windsor, Berkshire with a passion for nutrition and well being.">
      <meta name="author" content="">
      <meta name="format-detection" content="telephone=no">
      <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
      <![endif]-->
      <!-- Mobile Specific Metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
      <script src="<?php echo base_url()?>assets/js/jquery.min.js"></script>
      <script src="<?php echo base_url()?>assets/js/jquery.cycle.all.js" type="text/javascript"></script>
      <script src="<?php echo base_url()?>assets/js/jquery.nanoscroller.min.js" type="text/javascript"></script>
      <script src="<?php echo base_url()?>assets/js/main.js"></script>
      <script>
  		var base_url = '<?php echo base_url(); ?>';  
	  </script>

      <!-- CSS -->
      <link rel="stylesheet" href="<?php echo base_url()?>assets/includes/base.css">
      <link rel="stylesheet" href="<?php echo base_url()?>assets/includes/amazium.css">
      <link rel="stylesheet" href="<?php echo base_url()?>assets/includes/layout.css">
      <link rel="stylesheet" href="<?php echo base_url()?>assets/includes/screen.css">
      <link rel="stylesheet" href="<?php echo base_url()?>assets/includes/nanoscroller.css">
      <!-- Favicons -->
      <link rel="shortcut icon" href="<?php echo base_url()?>assets/includes/favicon.ico">
      <style type="text/css">
         .nano {
         width: 560px;
         height: 485px;
         }
         .nano .content {
         }
         .nano .pane {
         background: #ddd;
         }
         .nano .slider {
         background: #111;
         }
         .quote {
         background: url(<?php echo base_url()?>assets/images/quote.png) no-repeat;
         width: 47px;
         height: 40px;
         position: absolute;
         bottom: 20px;
         right: 20px;
         z-index: 2000;
         }
         .nano1 {
         width: 560px;
         height: 485px;
         }
      </style>
   </head>
   <body>
      <?php echo $mobileNav; ?>
      <div id="background"> 
      	<img src="<?php echo base_url('assets/images/'.$full_bg); ?>" class="stretch" alt="" /> 
      </div>
      <div class="backdrop"> </div>
      <div class="headerStrip">
         <div class="row rel" id="ContactStrip">
            <div class="grid_12">
               <div class="contact">
                  <div class="tel">t: +44(0)777 5796970</div>
                  <div class="email"><a href="mailto:tess@nutrime.uk.com">e: tess@nutrime.uk.com</a></div>
               </div>
            </div>
         </div>
         <div class="logostrip">
            <div class="row rel">
               <div class="skype"></div>
               <div class="grid_4" style="overflow:visible;"> 
               <a href="<?php echo base_url()?>">
               	<img src="<?php echo base_url()?>assets/images/logo.png" width="263" height="99" alt="Nutrime" id="logo">
               </a> 
               </div>
               <div class="grid_8" style="overflow:visible">
                  <div class="hamburger-menu hide-screen"></div>
                  <ul id="MainNav">
                     <li class="on"><a href="<?php echo base_url()?>">Home</a></li>
                     <li>
                        <a href="" onClick="return false;">What we do</a>
                        <ul>
                           <li><a href="pre-conception-and-ivf">Pre-conception and IVF</a></li>
                           <li><a href="pregnancy">Pregnancy</a></li>
                           <li><a href="post-pregnancy-and-breast-feeding">Post pregnancy</a></li>
                           <li><a href="childrens-nutrition">Childrens nutrition</a></li>
                           <li><a href="menopause">Menopause</a></li>
                           <li><a href="weight-loss">Weight control</a></li>
                           <li><a href="school-advisor">School Advisor</a></li>
                           <li><a href="individual-programs">Personal programmes</a></li>
                           <li><a href="sports-nutrition">Sports nutrition</a></li>
                        </ul>
                     </li>
                     <li>
                        <a href="" onClick="return false;">What we think</a>
                        <ul>
                           <li><a href="about-me">About me</a></li>
                           <li><a href="additional-support">Additional support</a></li>
                           <li><a href="nutrition-and-work-life-balance-with-ben-shephard">Ben Shephard interview</a></li>
                        </ul>
                     </li>
                     <li>
                        <a href="" onClick="return false;">What we know</a>
                        <ul>
                           <li><a href="what-is-nutritional-therapy">What is Nutritional Therapy</a></li>
                           <li><a href="nutritionist-v-dietician">Nutritionist vs Dietician</a></li>
                        </ul>
                     </li>
                     <li>
                        <a href="" onClick="return false;">Contact</a>
                        <ul>
                           <li><a class="consultationLink" href="book-a-consultation.php">Book a consultation</a></li>
                           <li><a href="contact">General enquiry</a></li>
                        </ul>
                     </li>
                  </ul>
               </div>
            </div>
         </div>
      </div>
      <div class="contents">
         <div class="row" style="overflow:visible;">
            <div class="grid_8 DropShadow">
               <div class="padding30">
                  <div class="nano">
                     <div class="content">
                        <div class="RemovePad" style="padding-right: 25px;">
                           <span class="header">NUTRI<i>ME</i> -</span> <span class="headerGreen">Pre-conception and IVF</span>
                           <p>If you were going to climb up a mountain would you not prepare yourself for this journey? You and your partner when deciding to conceive should also prepare yourselves for this journey. </p>
                           <a href="pre-conception-and-ivf" class="cta">Find out more</a>
                           <div class="clear"></div>
                           <span class="header">NUTRI<i>ME</i> -</span> <span class="headerGreen">Pregnancy</span>
                           <p>The food that you eat will be providing the only source of nutrition for your growing baby. It is vital that you not only eat the right foods but also in the right quantities during the three trimesters.</p>
                           <a href="pregnancy" class="cta">Find out more</a>
                           <div class="clear"></div>
                           <span class="header">NUTRI<i>ME</i> -</span> <span class="headerGreen">Post-pregnancy and breast-feeding</span>
                           <p>Having a baby is a huge undertaking for the body, so it is important to look after your body’s needs once your baby has come along. </p>
                           <a href="post-pregnancy-and-breast-feeding" class="cta">Find out more</a>
                           <div class="clear"></div>
                           <span class="header">NUTRI<i>ME</i> -</span> <span class="headerGreen">Children's Nutrition</span>
                           <p>What you feed your children is of great importance, especially during early years, when they are growing and developing at a rapid pace. </p>
                           <a href="childrens-nutrition" class="cta">Find out more</a>
                           <div class="clear"></div>
                           <span class="header">NUTRI<i>ME</i> -</span> <span class="headerGreen">Menopause</span>
                           <p>The menopause is not an illness but hormonal changes that occur in a female’s body. It’s a time in a women’s life of changes and some women can dwell on the losses rather than the positives.</p>
                           <a href="menopause" class="cta">Find out more</a>
                           <div class="clear"></div>
                           <span class="header">NUTRI<i>ME</i> -</span> <span class="headerGreen">Weight Control</span>
                           <p>Weight loss at times can feel like a never ending and ultimately losing battle.  With the abundance of processed foods which are lacking in nutrients. </p>
                           <a href="weight-loss" class="cta">Find out more</a>
                           <div class="clear"></div>
                           <span class="header">NUTRI<i>ME</i> -</span> <span class="headerGreen">Schools Advisor</span>
                           <p>The link between food and children’s health, performance and behaviour is now well recognised. Nutritional standards have been established and schools face the exciting but challenging task of implementing them with restrictive budgets. </p>
                           <a href="school-advisor" class="cta">Find out more</a>
                           <div class="clear"></div>
                           <span class="header">NUTRI<i>ME</i> -</span> <span class="headerGreen">Personal Nutrition Programmes</span>
                           <p>The goals of your personalized nutritional programme are to help improve your quality of life, help resolve any current or ongoing concerns specific to you. </p>
                           <a href="individual-programs" class="cta">Find out more</a>
                           <div class="clear"></div>
                           <span class="header">NUTRI<i>ME</i> -</span> <span class="headerGreen">Sports Nutrition</span>
                           <p>Correct nutrition is vital to ensure optimum sports performance. Your nutritional intake will <br>
                              significantly impact energy levels, endurance levels, strength, recovery time and will also help to aid injury prevention. 
                           </p>
                           <a href="sports-nutrition" class="cta">Find out more</a>
                           <div class="clear"></div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="grid_4 hide-phone DropShadow" style="height:auto">
               <div class="padding30">
                  Find us on:
                  <ul id="socialIcons">
                     <li class="facebook"><a target="_blank" href="https://www.facebook.com/pages/NutriME/234003423454504">Facebook</a></li>
                     <li class="twitter"><a target="_blank" href="https://twitter.com/NutriMEUK">Twitter</a></li>
                     <li class="linkedin"><a target="_blank" href="http://www.linkedin.com/pub/tess-scott/18/518/379">LinkedIn</a></li>
                  </ul>
                  <div align="right"> <a href="" class="showPrices">Prices</a> | <a href="" class="consultationLink">Consultation</a> </div>
               </div>
            </div>
            <div class="grid_4 hide-phone" style="margin-top: 20px;">
               <p style="color:#FFF">In affiliation with</p>
            </div>
            <div class="grid_4 hide-phone DropShadow" style="height: 111px; background: none;">
               <div class="cycle1">
                  <div> 
                  <a href="nutrition-and-work-life-balance-with-ben-shephard">
                  	<img src="<?php echo base_url()?>assets/images/ben-banner.png" width="288" height="111"> 
                  </a> 
                  </div>
                  <div style="display: none"> 
                  <a target="_blank" href="http://www.lorisian.com">
                  	<img src="<?php echo base_url()?>assets/images/intolerance.png" width="288" height="111"> 
                  </a> 
                  </div>
                  <div style="display: none"> 
                  <a target="_blank" href="http://www.elaineyueacupuncture.com/">
                  	<img src="<?php echo base_url()?>assets/images/accu.jpg" width="288" height="111"> 
                  </a> 
                  </div>
               </div>
            </div>
            <div class="grid_4 hide-phone DropShadow" style="height:auto; margin-top: 27px; position: relative">
               <div class="quote"></div>
               <div class="padding30">
                  <div class="cycle">
                     <div class="slide">
                        <p>I spoke with Tess via a SKYPE consultation. She was able to deduce via elimination that I had a nut allergy.  Three months later I feel amazing...</p>
                        <strong>Angela K – London </strong> 
                     </div>
                     <div class="slide" style="display:none">
                        <p>I highly recommend Tessa.  I am so glad i took the step to see her and am sure the change in diet helped me conceive and have a healthy pregnancy.</p>
                        <strong>Mary-Ann – Ascot </strong> 
                     </div>
                     <div class="slide" style="display:none">
                        <p>I always knew my hand eczema was diet related but struggled to clear persistant breakouts - Tess's advice finally helped me to achieve this.</p>
                        <strong>Jeff Wright – Bracknell </strong> 
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="footer">
         <div class="tree"></div>
         <div class="row">
            <div class="grid_2">
               <ul>
                  <li><strong>Site</strong></li>
                  <li><a href="<?php echo base_url()?>">Home</a></li>
                  <li><a href="childrens-nutrition">Childrens nutrition</a></li>
                  <li><a href="sports-nutrition">Sports nutrition</a></li>
                  <li><a href="pregnancy-and-fertility">Pregnancy and fertility</a></li>
               </ul>
            </div>
            <div class="grid_2">
               <ul>
                  <li><strong>Site</strong></li>
                  <li><a href="weight-loss">Weight loss</a></li>
                  <li><a href="weight-loss">Weight gain</a></li>
                  <li><a href="digestive-health">Digestive health</a></li>
                  <li><a href="skin-health">Skin health</a></li>
               </ul>
            </div>
            <div class="grid_2">
               <ul>
                  <li><strong>Site</strong></li>
                  <li><a href="mental-health">Mental health</a></li>
                  <li><a href="individual-programs">Individual programmes</a></li>
                  <li><a href="nutritionist-v-dietician">nutritionist vs dietician</a></li>
                  <li><a href="additional-support">Additional support</a></li>
               </ul>
            </div>
            <div class="grid_2">
               <ul>
                  <li><strong>Site</strong></li>
                  <li><a href="what-is-nutritional-therapy">Nutritional Therapy</a></li>
                  <li><a class="consultationLink" href="book-a-consultation.php">Book a consultation</a></li>
                  <li><a href="contact">General enquiry</a></li>
                  <li><a href="about-me">About me</a></li>
               </ul>
            </div>
            <div class="grid_4 centre"> 
            	<img src="<?php echo base_url()?>assets/images/footer-logo.png" width="288" height="142">
            </div>
         </div>
      </div>
      <div class="GoingUp"></div>
      <script>
		$(document).ready(function() {
			$(".nano").nanoScroller({
				alwaysVisible: true
			});
		});
		$('.cycle').cycle({
			fx: 'fade',
			speed: 2500,
			timeout: 9000,
			cleartypeNoBg: true,
			random: 1
		});
		
		$('.cycle1').cycle({
			fx: 'fade',
			speed: 5000,
			timeout: 12000,
			cleartypeNoBg: true
			//random:  1
		});
      </script>
   </body>
</html>