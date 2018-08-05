<?php
   defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!doctype html>
<html lang="en">
   <head>
      <meta charset="utf-8" />
      <title>Nutrime - Pregnancy</title>
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
         .nano1 {	width: 560px;
         height: 490px;
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
                  <div class="nano1">
                     <div class="content">
                        <div class="RemovePad" style="padding-right: 25px;">
                           <p><span class="header">NUTRI<i>ME</i> -</span> <span class="headerGreen">Pregnancy</span></p>
                           <p>Pregnancy is so exciting and is a beautiful gift. The food that you eat will be providing the only source of nutrition for your growing baby. It is vital that you not only eat the right foods but also in the right quantities during the three trimesters.</p>
                           <p>Often clients say to me that the information available on what to eat during pregnancy is conflicting and confusing. What I aim to do is to provide you with clear and concise advice on all the beneficial foods for you and your baby, as well as the ones to avoid.</p>
                           <p>Being a mother of two myself I can give first-hand advice on how to optimize your diet whilst working or looking after children during pregnancy.</p>
                           <div class="extraInfo" style="margin-bottom: 15px;">With the right foods and supplements it is possible to boost your babies IQ, reduce the risk of birth defects, low birth weight and also reduce the risk of your baby inheriting allergies or conditions such as asthma or eczema.</div>
                           <p>For you it is possible to reduce the chance of getting stretch marks, morning sickness, anemia, pre-eclampsia, fatigue, constipation and mood swings.</p>
                           <p>Coupling acupuncture with nutrition during pregnancy I would also strongly recommend knowing from my own experience how it can be of great benefit to mother and baby.</p>
                           <a href="http://www.elaineyueacupuncture.com/" target="_blank">
                           <img class="resp-img elaine" src="<?php echo base_url()?>assets/images/elaine.png" width="375" height="56" style="margin-left: 160px; margin-top: 10px;">
                           </a>
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