<?php
   defined('BASEPATH') OR exit('No direct script access allowed');
   ?>
<!doctype html>
<html lang="en">
   <head>
      <meta charset="utf-8" />
      <title>Nutrime - Get in touch</title>
      <meta name="description" content="">
      <meta name="author" content="">
      <meta name="format-detection" content="telephone=no">
      <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
      <![endif]-->
      <!-- Mobile Specific Metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
      <script src="<?php echo base_url()?>assets/js/jquery.min.js"></script>
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
                     <li>
                        <a href="" onClick="return false;">What we know</a>
                        <ul>
                           <li><a href="what-is-nutritional-therapy">What is Nutritional Therapy</a></li>
                           <li><a href="nutritionist-v-dietician">Nutritionist vs Dietician</a></li>
                        </ul>
                     </li>
                     <li class="on">
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
            <div class="grid_8 DropShadow rel">
               <div class="padding30">
                  <div class="address"> <strong>NUTRI<i>ME</i></strong><br>
                     e: <a href="mailto:tess@nutrime.uk.com">tess@nutrime.uk.com</a><br>
                     t: +44(0) 777 5796970 
                  </div>
                  <p>
                     <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d19877.93113612258!2d-0.6155179123046874!3d51.48126103066029!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2suk!4v1393620399082" width="100%" height="200" frameborder="0" style="border:0"></iframe>
                  <form action="" method="post" id="contactForm">
                     </p>
                     Name<span class="star">*</span>
                     <p>
                        <input name="name" type="text" class="input">
                     </p>
                     Email<span class="star">*</span>
                     <p>
                        <input name="email" type="text" class="input">
                     </p>
                     Message<span class="star">*</span>
                     <p>
                        <textarea name="message" cols="" rows="" class="input message"></textarea>
                        <input name="check" type="hidden" value="">
                     </p>
                  </form>
                  <div class="formcontainer">
                     <div class="validation">Please fill out all the required fields</div>
                     <div class="SubmitButton">Submit</div>
                  </div>
                  <div class="clear"></div>
               </div>
            </div>
            <div class="grid_4 DropShadow" style="height:auto">
               <div class="padding30">
                  Find us on:
                  <ul id="socialIcons">
                     <li class="facebook"><a target="_blank" href="https://www.facebook.com/pages/NutriME/234003423454504?ref=hl">Facebook</a></li>
                     <li class="twitter"><a target="_blank" href="https://twitter.com/NutriMEUK">Twitter</a></li>
                     <li class="linkedin"><a target="_blank" href="http://www.linkedin.com/pub/tess-scott/18/518/379">LinkedIn</a></li>
                  </ul>
                  <div align="right"> <a href="" class="showPrices">Prices</a> | <a href="" class="consultationLink">Consultation</a> </div>
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
   </body>
</html>