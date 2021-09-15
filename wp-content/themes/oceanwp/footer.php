<?php
/**
 * The template for displaying the footer.
 *
 * @package OceanWP WordPress theme
 */ ?>

        </main><!-- #main -->

<!--start footer --> 
<?php
     $currLang = get_bloginfo('language');
     if($currLang == "en-US") {
 ?>

       <style>

             .head-email a, .head-email p{
                margin-left: 30px; 
             }

             .head-p-p{
                font-size: 18px;
                font-weight: bold;
             }

             @media (min-width: 992px) and (max-width: 1200px) { 

               .head-p-p{
                  font-size: 14px;
                }

               .head-email a, .head-email p{
                 font-size: 14px; 
               }
             }

             @media (min-width: 768px) and (max-width: 992px)  { 

                .head-p-p{
                  font-size: 11px;
                }

               .head-email a, .head-email p{
                 font-size: 10px; 
               }

               .head-footer .head-email {

                   margin-top: 25px;
               }
            }
         

       </style>
        <section class="footer">
        <div class="go-to-top scrollTop hidden-xs"> <i class="fa fa-angle-up"></i> </div>
            <div class="container">
                <div class="row follo">
                     <div class="col-xs-6 col-sm-4 col-md-4 col-lg-4">
                     <h3>INFORMATION</h3>
                           <ul class="list-unstyled" style="margin: 0;">
                            <li><a href="<?php get_site_url()?>/shipping-policy/">Shipping Policy</a></li>
                            <li><a href="<?php get_site_url()?>/privacy-policy/">Privacy Policy</a></li>
                            <li><a href="<?php get_site_url()?>/refund-policy/">Refund Policy</a></li>
                            <li><a href="<?php get_site_url()?>/payment-policy/">Payment Policy</a></li>
                            <li><a href="<?php get_site_url()?>/return-polic/">Return Polic</a></li>
                            <li><a href="<?php get_site_url()?>/termsandconditions/">Terms and Conditions</a></li>
                            </ul>
                    </div>
                    <div class="col-xs-6 col-sm-4 col-md-4 col-lg-4 ">
                     <h3>MY ACCOUNT</h3>
                    <ul class="list-unstyled" style="margin: 0;">
                    <li><a href="<?php get_site_url()?>/cart/">Cart</a></li>
                    <li><a href="<?php get_site_url()?>/wishlist/">Wishlist</a></li>
                    <li><a href="<?php get_site_url()?>/checkout/">Checkout</a></li>
                    <li><a href="<?php get_site_url()?>/my-account/">My Account</a></li>
                     <?php echo do_shortcode("[newsletter_form]"); ?>
                     
                    </ul>
                    </div>
                     <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                      <h3>CONTACT US</h3>
					 <div class="media"> 
                     <div class="media-body">
                         <h4 class="media-heading">
                             <i class="fas fa-map-marker-alt"></i> 
                            14th Moustafa Abo Heif, bab alluwq, Cairo, Egypt
                         </h4>
                          
                     </div>
                     </div>
                     <div class="media"> 
                     <div class="media-body">
                         <h4 class="media-heading">
                            <i class="fas fa-clock"></i>
                            Daily 10:00AM - 7:00PM
                         </h4>
                          
                     </div>
                     </div>
                    <div class="media"> 
                     <div class="media-body">
                         <h4 class="media-heading">
                             <i class="fa fa-envelope"></i> 
                            Email
                         </h4>
                         <a class="" href="mailto:scroll@elnourtech.com">scroll@elnourtech.com</a> 
                     </div>
                     </div>
                    <div class="media"> 
                     <div class="media-body">
                         <h4 class="media-heading">
                             <i class="fa fa-phone" aria-hidden="true"></i>
                            Call Us Now
                         </h4>
                         +201026690555
                     </div>
                     </div>
                    </div>
                </div>
                    <div class="follow">
                    <div class="row">
                        <div class="col-xs-12">
                            <p class="follow-name follow-name-xs">FOLLOW US</p>
                            <ul>
                                <a href="https://www.facebook.com/ElNourTech1" target="_blank" class="hvr-pulse-grow"><li><i class="fab fa-facebook-f"></i></li></a>
                                <a href="https://www.instagram.com/elnourtech/" target="_blank" class="hvr-pulse-grow"><li><i class="fab fa-instagram"></i></li></a>
                                <a href="https://twitter.com/ElNourTech1" target="_blank" class="hvr-pulse-grow"><li><i class="fab fa-twitter"></i></li>
                                </a>
                            </ul>

                        </div>
                    </div>  
                </div>
                
            </div>
            <div class="copyright text-center">
                 Copyright &copy; <span class="copy"><?php echo date('Y')?> elnourtech.com</span> All Rights Reserved
            </div>
        </section>
      
<?php
}
?>
<!-- ar --> 
<?php
    $currLang = get_bloginfo('language');
     if($currLang == "ar") {
?>

<style>
    .sign-name{
        right: 10px; 
    }

    .nsu-form p:first-child{
       margin-right: -40px;
       margin-left: 0px;
    }

    .follow ul{
        padding-right: 15px; 
    }
	
	@media (min-width: 768px) and (max-width: 992px)  { 
		.nsu-form p:first-child{
			margin-right: 20px; 
		}
	}
	@media (max-width: 767.98px) {
		
		.nsu-form p:first-child{
			margin-right: 0; 
		}		
	}

</style>
        
        <section class="footer">
        <div class="go-to-top scrollTop hidden-xs"> <i class="fa fa-angle-up"></i> </div>
            <div class="container">
                <div class="row follo">
                    
					
                     <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
					
                      <h3>اتصل بنا</h3>
					 <div class="media"> 
                     <div class="media-body">
                         <h4 class="media-heading">
                             <i class="fas fa-map-marker-alt"></i>
							 العنوان
                         </h4>
                         14 مصطفى أبو هيف، باب اللوق، القاهرة ، مصر
                     </div>
                     </div>
                       <div class="media"> 
                     <div class="media-body">
                         <h4 class="media-heading">
                            <i class="fas fa-clock"></i>
                            يوميا / 10:00صباحا - 7:00مساءا
                         </h4>
                          
                     </div>
                     </div>
                    <div class="media"> 
                     <div class="media-body">
                         <h4 class="media-heading">
                             <i class="fa fa-envelope"></i> 
                            البريد الإلكتروني
                         </h4>
                         <a class="" href="mailto:scroll@elnourtech.com">scroll@elnourtech.com</a> 
                     </div>
                     </div>
                    <div class="media"> 
                     <div class="media-body">
                         <h4 class="media-heading">
                             <i class="fa fa-phone" aria-hidden="true"></i> 
                            اتصل بنا الآن
                         </h4>
                         201026690555+
                     </div>
                     </div>
                    </div>
					
					
                    <div class="col-xs-6 col-sm-4 col-md-4 col-lg-4 ">
                     <h3>حسابي</h3>
                    <ul class="list-unstyled" style="margin: 0;">
                    <li><a href="<?php get_site_url()?>/عربة-التسوق/">عربة التسوق</a></li>
                    <li><a href="<?php get_site_url()?>/wishlist/">المفضلة</a></li>
                    <li><a href="<?php get_site_url()?>/الدفع/">الدفع</a></li>
                    <li><a href="<?php get_site_url()?>/حسابى/">حسابي</a></li>
                     <?php echo do_shortcode("[newsletter_form]"); ?>
                    </ul>
                    </div>
					
					 <div class="col-xs-6 col-sm-4 col-md-4 col-lg-4">
                     <h3>معلومات</h3>
                           <ul class="list-unstyled" style="margin: 0;">
                            <li><a href="<?php get_site_url()?>/سياسة-الشحن/">سياسة الشحن</a></li>
                            <li><a href="<?php get_site_url()?>/سياسة-الخصوصية/">سياسة الخصوصية</a></li>
                            <li><a href="<?php get_site_url()?>/سياسة-الاسترداد/">سياسة الاسترداد</a></li>
                            <li><a href="<?php get_site_url()?>/سياسة-الدفع/">سياسة الدفع</a></li>
                            <li><a href="<?php get_site_url()?>/سياسة-الاسترجاع/">سياسة الاسترجاع</a></li>
                            <li><a href="<?php get_site_url()?>/الشروط-والأحكام/">الشروط والأحكام</a></li>
                            </ul>
                    </div>
					
					
                </div>
							
                 <div class="follow">
                    <div class="row">
						        
                        <div class="col-xs-12">
                            <p class="follow-name follow-name-xs">تابعنا</p>
                            <ul>
                                <a href="https://www.facebook.com/ElNourTech1" target="_blank" class="hvr-pulse-grow"><li><i class="fab fa-facebook-f"></i></li></a>
                                <a href="https://www.instagram.com/elnourtech/" target="_blank" class="hvr-pulse-grow"><li><i class="fab fa-instagram"></i></li></a>
                                <a href="https://twitter.com/ElNourTech1" target="_blank" class="hvr-pulse-grow"><li><i class="fab fa-twitter"></i></li>
                                </a>
                            </ul>  

                        </div>
                      

                    </div>  
                </div>
                
            </div>
            <div class="copyright text-center">
                 جميع الحقوق محفوظة. تم التطوير بواسطة:  &copy; <span class="copy"><?php echo date('Y')?> elnourtech.com</span> 
            </div>
        </section>
      
<?php
}
?>


<!-- end footer--> 
<?php wp_footer(); ?>
</body>
</html>