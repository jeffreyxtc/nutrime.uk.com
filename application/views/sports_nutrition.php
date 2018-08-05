<?php
   defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!doctype html>
<html lang="en">
   <head>
      <meta charset="utf-8" />
      <title>Nutrime - Sports Nutrition</title>
      <meta name="description" content="">
      <meta name="author" content="">
      <meta name="format-detection" content="telephone=no">
      <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
      <![endif]-->
      <!-- Mobile Specific Metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
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
         height: 490px;
         }
         .nano .content {
         }
         .nano .pane {
         background: #ddd;
         }
         .nano .slider {
         background: #111;
         }
      </style>
   </head>
   <body>
      <?php echo $mobileNav; ?>
      <div id="background"> 
      	<img src="<?php echo base_url('assets/images/'.$full_bg); ?>" class="stretch" alt="" /> 
      </div>
      <div class="backdrop"></div>
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
                     <li><a href="<?php echo base_url()?>">Home</a></li>
                     <li class="on">
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
                           <p><span class="header">NUTRI<i>ME</i> -</span> <span class="headerGreen">Sports Nutrition</span></p>
                           <p>Correct nutrition is vital to ensure optimum sports performance. Your nutritional intake will significantly impact energy levels, endurance levels, strength, and recovery time and will aid<br>
                              injury prevention.
                           </p>
                           <p>Different sporting activities will have specific nutritional requirements, and therefore must be tailor made to include the relevant nutrients, and also the quantity and timing of the meals.</p>
                           <p>Exercise places an increased demand for specific nutrients, vitamins and minerals, so it is important to fuel your body to ensure you are getting the correct nutrition for your individual needs.</p>
                           <p><strong>The aim of my Sports Nutrition programme is to:</strong></p>
                           <ul id="bullets">
                              <li>Optimize your performance</li>
                              <li>Reduce you recovery time</li>
                              <li>Increase your energy levels</li>
                              <li>Increase your endurance levels</li>
                              <li>Ensure you are taking in the correct nutrients for your specific needs</li>
                              <li>Optimize the quality, quantity and timing of your meals</li>
                           </ul>
                           <p>Factors that may affect an athlete's nutritional needs include type of activity (aerobic vs. anaerobic), gender, weight, height, body mass index, workout or activity stage (pre-workout, intra-workout, recovery), and time of day (e.g. some nutrients are utilized by the body more effectively during sleep than while awake).</p>
                           <p>The biggest culprits that get in the way of performance are fatigue, injury and soreness. A proper diet will reduce these disturbances in performance. The key is to get a variety of food, to get all the macronutrients, vitamins, and minerals.</p>
                           <div class="clear"></div>
                        </div>
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
      <script src="<?php echo base_url()?>assets/js/jquery.min.js"></script> 
      <script src="<?php echo base_url()?>assets/js/jquery.nanoscroller.min.js" type="text/javascript"></script> 
      <script src="<?php echo base_url()?>assets/js/main.js"></script> 
      <script>
         var base_url = '<?php echo base_url(); ?>';  
      </script> 
      <script>
         $(document).ready(function() {
         	$(".nano").nanoScroller({ alwaysVisible: true });
         });
      </script>
   </body>
</html>