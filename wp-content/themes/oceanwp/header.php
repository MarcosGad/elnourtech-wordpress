<?php
/**
 * The Header for our theme.
 *
 * @package OceanWP WordPress theme
 */ ?>

<!DOCTYPE html>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=2.0">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<meta name="google-site-verification" content="Xi-ANpgPLInNRAcBryKa1O9EFD5XvoUMfD44ONA7H1U" />
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<?php do_action( 'ocean_before_outer_wrap' ); ?>

	<div id="outer-wrap" class="site clr">

		<?php do_action( 'ocean_before_wrap' ); ?>

		<div id="wrap" class="clr">

			
			<?php do_action( 'ocean_before_main' ); ?>



 <?php
 	$currLang = get_bloginfo('language');
     if($currLang == "en-US") {
 ?>

 <style>

 		ul.products li.product .tinvwl_add_to_wishlist_button{
 			right: 0; 
 		}

 		.list .yith-wcbm-badge-custom{
 			right: 68%; 
 		}

 		.xoo-el-login-tgr{
          border-right: 1px solid #fff;
          width: 50%;
        }

 		@media (max-width: 767.98px) {

	 		.list .yith-wcbm-badge-custom{
	 			right: 0; 
	 		}

	 		.xoo-el-username-menu img.avatar{
	 			margin-top: -4px; 
	 		}
 		}


 </style>

<div class="oneheader">
<div class="container">
    <div class="row">

        <div class="brandone hidden-xs col-sm-8 col-lg-9">
           <p> <a href="<?php echo get_home_url(); ?>"> Shop With Elnour Technology</a> </p>
        </div>

		<div class="hidden-xs col-sm-4 col-lg-3">
        	<?php do_action( 'ocean_top_bar' ); ?>
        </div>
				
    </div>
</div>
</div>

		
       <div class="container hidden-xs">
       		<div class="row">
       			<div class="col-sm-1 col-md-1 col-lg-1" style="padding: 0">
                     <a  href="<?php echo get_home_url(); ?>">
       				   <img class="img-responsive mylogo" src="<?php echo get_template_directory_uri() . '/images/loooo.jpg' ?>" alt="..." />
                     </a>     
       			</div>

       			<div class="col-sm-7 col-md-8 col-lg-9">

       				<?php wp_nav_menu( array( 'theme_location' => 'max_mega_menu_1' ) ); ?>

       			</div>
       			<div class="col-sm-4 col-md-3 col-lg-2">
		            <?php wp_nav_menu( array( 'theme_location' => 'main_menu' ) ); ?> </div>

       		</div>	

		</div>

	
<div class="container-fulid" data-spy="affix" data-offset-top="198">
	<div class="threeheader">

	
	<div class="container">
             <div>   

                 <?php echo do_shortcode("[aws_search_form]"); ?>
	
	         </div>

         </div>

    </div>

</div>

</div>
			<main id="main" class="site-main clr"<?php oceanwp_schema_markup( 'main' ); ?>>
			<?php 

			if ( is_front_page() ) {

		    }else{
		    	do_action( 'ocean_page_header' );
		    }	

        } 

		    ?>


<!-- ar --> 

<?php
    $currLang = get_bloginfo('language');
     if($currLang == "ar") {
?>

<style>

	#mega-menu-wrap-max_mega_menu_1 #mega-menu-max_mega_menu_1{
		text-align: right;
	}

	#mega-menu-wrap-max_mega_menu_1 #mega-menu-max_mega_menu_1 > li.mega-menu-megamenu > ul.mega-sub-menu > li.mega-menu-item > a.mega-menu-link, #mega-menu-wrap-max_mega_menu_1 #mega-menu-max_mega_menu_1 > li.mega-menu-megamenu > ul.mega-sub-menu li.mega-menu-column > ul.mega-sub-menu > li.mega-menu-item > a.mega-menu-link{text-align: right;}

	.dropdown .widget-content ul li a{
       padding-right: 10px;
       text-align: right;
    }

    #top-bar{
    	padding-right: 20px;
    }

    #top-bar-content #mega-menu-wrap-topbar_menu #mega-menu-topbar_menu >
     li.mega-menu-item > a.mega-menu-link{
     	font-size: 13px; 
     }

    .dropdown-menu{
    	left:-8px;
    }
	.threeheader .dropdown .btn,
	.threeheader .dropdown .btn:focus{
	 	text-align: right;
	 }

	 #mega-menu-wrap-topbar_menu #mega-menu-topbar_menu >
	 li.mega-menu-flyout ul.mega-sub-menu li.mega-menu-item a.mega-menu-link{
	 	text-align: right;
	 }

	 #top-bar-content #mega-menu-wrap-topbar_menu
	 #mega-menu-topbar_menu > li.mega-menu-item:last-child a > span{
	 	margin-right: 34px !important; 
	 }

	#mega-menu-wrap-topbar_menu #mega-menu-topbar_menu[data-effect="fade_up"] 
	li.mega-menu-item.mega-menu-megamenu > ul.mega-sub-menu,
	#mega-menu-wrap-topbar_menu #mega-menu-topbar_menu[data-effect="fade_up"] 
	li.mega-menu-item.mega-menu-flyout ul.mega-sub-menu li.lang-item-first{
	    top: 16px;
	    right: 0;
	    width: 52%;
	}

    #top-bar-content #mega-menu-wrap-topbar_menu #mega-menu-topbar_menu > li.mega-menu-item:last-child{
    	margin-right: 15px !important; 
    }
    
    #mega-menu-wrap-max_mega_menu_1 #mega-menu-max_mega_menu_1 > li.mega-m-megamenu > ul.mega-sub-menu > li.mega-menu-item h4.mega-block-title, #mega-menu-wrap-max_mega_menu_1 #mega-menu-max_mega_menu_1 > li.mega-menu-megamenu > ul.mega-sub-menu li.mega-menu-column > ul.mega-sub-menu > li.mega-menu-item h4.mega-block-title {
        float: right;
    }


	#mega-menu-wrap-topbar_menu #mega-menu-topbar_menu[data-effect="fade_up"] 
	li.mega-menu-item.mega-menu-megamenu > ul.mega-sub-menu,
	#mega-menu-wrap-topbar_menu #mega-menu-topbar_menu[data-effect="fade_up"] 
	li.mega-menu-item.mega-menu-flyout ul.mega-sub-menu li.lang-item-first a.mega-menu-link span{
	 margin-top: -8px !important;
	 display:block !important;
	 margin-right: 1.6em !important; 
	}

	#mega-menu-wrap-topbar_menu #mega-menu-topbar_menu[data-effect="fade_up"] 
	li.mega-menu-item.mega-menu-megamenu > ul.mega-sub-menu,
	#mega-menu-wrap-topbar_menu #mega-menu-topbar_menu[data-effect="fade_up"] 
	li.mega-menu-item.mega-menu-flyout ul.mega-sub-menu li.lang-item-ar{
        top: 41px;
        right: 0px;
        width: 52%;
	 }

	 #top-bar-content #mega-menu-wrap-topbar_menu #mega-menu-topbar_menu > 
	 li.mega-menu-item:last-child a img{
	 	left: 0;
	 }

	#mega-menu-wrap-topbar_menu #mega-menu-topbar_menu[data-effect="fade_up"] 
	li.mega-menu-item.mega-menu-megamenu > ul.mega-sub-menu,
	#mega-menu-wrap-topbar_menu #mega-menu-topbar_menu[data-effect="fade_up"] 
	li.mega-menu-item.mega-menu-flyout ul.mega-sub-menu li.lang-item-first a.mega-menu-link img{
	    position: relative !important;
	    right: : 22px;
	    top: 9px !important;
	}

  .account-original-style .woocommerce #customer_login .lost_password{
    float: left;
  }

 .account-original-style .woocommerce #customer_login .form-row label.woocommerce-form__label{
    margin-right: 15px; 
  }

	#top-bar-content #mega-menu-wrap-topbar_menu #mega-menu-topbar_menu >
	li.mega-menu-item > a.mega-menu-link{
		font-size: 14px;
	}

	#top-bar-content #mega-menu-wrap-topbar_menu
	#mega-menu-topbar_menu > li.mega-menu-item:last-child{
		margin-right: 0; 
	}

	.avatar{
	   margin-right: -29px !important;
	}

	.xoo-el-login-tgr{
		border:none;
	}

  .xoo-aff-input-group .xoo-aff-input-icon {
    transform: rotateY(180deg);
  }

	.threeheader .dropdown .caret {
       margin-right: 138px !important;
    }

    .aws-search-result ul{
    	text-align: right;
    }

    
    ul.products li.product .tinvwl_add_to_wishlist_button{
 	   left: 0; 
 	   bottom: 9px;
 	}
	
	ul.grid li.product .tinvwl_add_to_wishlist_button{
 	   bottom: 0;
 	}

 	.contact-form span:not([type='submit']) + .icon-contact{
 		 float: right;
         right: 8px;
         left: -8px; 
 	}

 	.wpcf7-form{
 		direction: rtl;
 	}

 	span.wpcf7-not-valid-tip{
 	   left: 0; 
 	   width: 100px;
 	}

	.woocommerce div.product .woocommerce-product-gallery
	.woocommerce-product-gallery__trigger {
	      right: 10px !important;
	 } 

	.list .yith-wcbm-badge-custom {
      top: 0;
      left: 68%;
    }

	.xoo-aff-group label{
		margin-right: 0; 
	}

	a.xoo-el-lostpw-tgr {
      position: absolute;
      left: 0;
    }

    .woocommerce-Tabs-panel--seller span.text {
       position: absolute;
       right: 14px;
    }

    .woocommerce-Tabs-panel--seller .seller-rating{
    	    float: right;
            padding-right: 67px;
    }

    .xoo-wsc-ctxt {
      display: block;
     text-align: left;
    }

    .xoo-el-login-tgr{
        border-left: 1px solid #fff;
        width: 50%;
    }

    .brandone a, .brandone-login a{
    	float: right;
    }

    .timer .widget-title{
    	font-size: 22px; 
    }

    .box-tite h3{
    	font-size: 23px; 
    }
    .about-us .list-inline{margin-right: -5px;}

 	@media (min-width: 992px) and (max-width: 1200px) { 

 	  ul.products li.product .tinvwl_add_to_wishlist_button{
		  bottom: 0;
 	  }

 	  .list .yith-wcbm-badge-custom {
      top: 7.2%;
      }

      #top-bar { padding-right: 0; }
    
 	}

 	@media (min-width: 768px) and (max-width: 992px)  { 

 	  ul.products li.product .tinvwl_add_to_wishlist_button{
 	      bottom: 4px;
 	  }
		
	  ul.grid li.product .tinvwl_add_to_wishlist_button{
 	    bottom: 0;
 	  }

 	  #top-bar { padding-right: 0; }

 	 }
 	  @media (max-width: 767.98px) {

 	  	ul.products li.product .tinvwl_add_to_wishlist_button{
 	      bottom: 0;
 	   }
		  
	    ul.grid li.product .tinvwl_add_to_wishlist_button{
 	      bottom: 0;
 	    }

 	   .list .yith-wcbm-badge-custom{
 	   	left: 0; 
 	   }

 	   .woocommerce .oceanwp-off-canvas-filter, 
 	   .woocommerce .oceanwp-grid-list{
 	   	float: none;
 	   	display: block;
 	   	margin: 0; 
 	   }

 	   .woocommerce .woocommerce-ordering{
 	   	float: none;
 	   }

 	   .avatar {
           margin-right: 0px !important;
           margin-left: 8px;
        }

        #mg-wprm-wrap li.current-menu-item > a, 
        #mg-wprm-wrap ul#wprmenu_menu_ul li.menu-item a:hover{
        	border-right: 4px solid #337ab7 !important;
        	border-left: none !important; 
        }

        .icon_default.wprmenu_icon_par:before{
        	 content: "\6f";
        }

        div#mg-wprm-wrap 
        ul#wprmenu_menu_ul>li>span.wprmenu_icon:before {
        	right: 200px; 
        }

        .xoo-aff-fields, #xoo-el-lostpw-email, 
        .xoo-el-notice-error,.xoo-el-notice-success{   
        	float: left;
        }

        #wprmenu_bar .menu_title a{
           top: 5px; 
        }


 	 }


</style>


<div class="oneheader">
<div class="container">
    <div class="row">

		<div class="hidden-xs col-sm-4 col-lg-3">
        	<?php do_action( 'ocean_top_bar' ); ?>
        </div>


        <div class="brandone hidden-xs col-sm-8 col-lg-9">
            <p> <a href="<?php echo get_home_url(); ?>">تسوق مع النور للتكنولوجيا</a></p>
        </div>
		

    </div>
</div>
</div>

		
       <div class="container hidden-xs">
       		<div class="row">

       			<div class="col-sm-3 col-md-3 col-lg-2">
       			   <?php wp_nav_menu( array( 'theme_location' => 'main_menu' ) ); ?> 
       			</div>
       			

       			<div class="col-sm-8 col-md-8 col-lg-9">

       				<?php wp_nav_menu( array( 'theme_location' => 'max_mega_menu_1' ) ); ?>

       			</div>

       			
       			<div class="col-sm-1 col-md-1 col-lg-1" style="padding: 0">
                    <a  href="<?php echo get_home_url(); ?>">
       				<img class="img-responsive mylogo" src="<?php echo get_template_directory_uri() . '/images/loooo.jpg' ?>" alt="..." />
                    </a>
       			</div>

       		</div>	

		</div>

	
<div class="container-fulid" data-spy="affix" data-offset-top="198">
	<div class="threeheader">

	
	<div class="container">


		<div>   

		    <?php echo do_shortcode("[aws_search_form]"); ?>

		</div>


   </div>

</div>

</div>
			<main id="main" class="site-main clr"<?php oceanwp_schema_markup( 'main' ); ?>>
			<?php 

			if ( is_front_page() ) {

		    }else{
		    	do_action( 'ocean_page_header' );
		    }	

        }

		    ?>
