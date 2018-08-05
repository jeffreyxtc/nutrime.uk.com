<?php
   defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!doctype html>
<html lang="en">
   <head>
      <meta charset="utf-8" />
      <title>Nutrime - Nutritionist Vs Dietician</title>
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
      <div class="backdrop">
      </div>
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
                     <li class="on">
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
                        <div class="RemovePad" style="padding-right: 20px;">
                           <p><span class="header">NUTRI<i>ME</i> -</span> <span class="headerGreen">Nutritionist Vs Dietician</span></p>
                           <p>In general terms Nutritionists create and apply the scientific knowledge to promote an understanding of the effects of diet on health and well being, whereas Dieticians interpret and communicate the science of nutrition to enable people to make practical food choices.</p>
                           <p>Nutrition Therapy takes this one stage further. BANT Nutritional Therapists are trained, certified, licenced and insured to use the scientific nutritional knowledge in a therapeutically curative and healing way. Nutrition Therapy treats and looks at the whole body and the underlying causes of illness rather than just treating a symptom.</p>
                           <p>BANT Therapists are also expected to prove their commitment to continual professional development by taking part in the BANT CPD scheme keeping them up to date in the latest scientific advancements, developments in nutritional research and latest new diagnostic tests.</p>
                           <p>Nutritional Therapists are trained to sympathetically use the complex dynamic interactions of food and nutrients within the body's biosystem to work in harmony with the body and kick start it's natural synergy, defense and normal operational systems rather than overide them like so many modern medicines do.</p>
                           <div class="extraInfo">
                              <p>"Nutritional therapy is the application of nutrition science in the promotion of optimum health and peak performance, disease prevention and patient care." - <a target="_blank" href="http://www.bant.org.uk/">BANT</a></p>
                              "A dietitian uses the science of nutrition to devise eating plans for patients to treat medical conditions. They also work to promote good health by helping to facilitate a positive change in food choices amongst individuals, groups and communities." - <a  target="_blank" href="http://www.hpc-uk.org/">HPC</a>
                           </div>
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