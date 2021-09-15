<?php

get_header(); ?>

<style>
	img{
	  max-width: none !important; 
	}

	.box-tite h3:before{
    	border-left: 8px solid #af2f7d;
        border-right: 0;
        right: 0;
        left: auto;
    }
	.yith-wcbm-badge-231{
		left: 0;
		right: auto;
	}
	
	.add_to_cart_button.loading{

		position: relative !important; 
		text-align: center !important; 
	    left:0 !important; 
		background: url(<?php echo get_template_directory_uri() . '/images/Rolling-1s-18px.gif' ?>) no-repeat center center #fff !important; 
	    top:0 !important; 
	    bottom: 0 !important; 
	    right: 0 !important; 
	    display: block !important; 
		margin-bottom: 2px !important; 
	    width: 80% !important; 
	    height: auto !important; 
	   background-color: #fff !important; 
    }

    del .amount{
      display: none !important; 
    }
    
    .slick-slide {
      float: right;
    }

</style>

<!-- start  main slider --> 
<div class="container-fluid">

	<div class="row">
		<div class="hidden-xs hidden-sm col-md-3">
		     <h4 class="h-cat color-Dis hvr-pulse">خصومات</h4>
			  <div>
		      	<?php 
				
            		  $values = array('post_type'=>'mslider','order'=>'DCE','posts_per_page' => 1); 
            					
            		  $query = new wp_query($values); 
            				
            		  if($query->have_posts()){
            						
            		  while($query->have_posts()){
            							
            		  $query->the_post(); 	
				
	             ?>

        		<a href="<?php the_field("link_main") ?>">
        	     <img class="img-slide" src="<?php the_field("img_main") ?> " alt="..." />
        		</a>
	           <?php } } ?> 
            </div>
		</div>
		<div class="col-sm-8 col-md-6">
		    <div class="head-slider">
		     <?php
                echo do_shortcode('[smartslider3 slider=1]');
             ?>
            </div>
		</div>
		<div class="col-sm-4 col-md-3 hidden-xs">
	       <h4 class="h-cat hvr-buzz-out">تسوق حسب الاقسام</h4>
		   <?php get_sidebar('cat') ?>	
	    </div>
		
	</div>			
</div> 

<!-- end main slider --> 



<!-- start sale_price item --> 

<div class="container">

<div class="header-slider header-slider-xs-new">
	<h2 class="hvr-bounce-out">خصومات من أجلك</h2>
</div>

<div class="slider">
	
<section class="regular slider">
<?php
	   
        $args = array(
                'post_type'      => 'product',
                'posts_per_page' => 8,
                'meta_query'     => array(
                    'relation' => 'OR',
                    array( // Simple products type
                        'key'           => '_sale_price',
                        'value'         => 0,
                        'compare'       => '>',
                        'type'          => 'numeric'
                    ),
                    array( // Variable products type
                        'key'           => '_min_variation_sale_price',
                        'value'         => 0,
                        'compare'       => '>',
                        'type'          => 'numeric'
                    )
                )
        ); 
        $loop = new WP_Query( $args );
        while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?>
				
				<div class="postion-slick">
					
					<a class="price-item" href="<?php echo get_permalink( $loop->post->ID ) ?>" title="<?php echo esc_attr($loop->post->post_title ? $loop->post->post_title : $loop->post->ID); ?>">

						<div class="content-o">
                        <div class="content-overlay"></div>
                        <?php if (has_post_thumbnail( $loop->post->ID )) echo get_the_post_thumbnail($loop->post->ID, 'shop_catalog'); else echo '<img src="'.woocommerce_placeholder_img_src().'" alt="Placeholder"  class="owl-carousel-imgg" />'; ?>
                        </div>

                         <h3><?php echo wp_trim_words( get_the_title(), 6, '' ); ?></h3>

                        <span class="price"><?php echo $product->get_price_html(); ?></span>                    

                    </a>

                    <?php  woocommerce_template_loop_add_to_cart( $loop->post, $product ); ?>
					
	
					
					
				</div>
				
			
		 <?php endwhile; ?>
    <?php wp_reset_query(); ?>	
		
			  </section>
</div>
</div>
<!-- end sale_price item -->




<!-- start new item --> 

<div class="container">

<div class="header-slider header-slider-xs-new">
	<h2 class="hvr-bounce-out">كل ما هو جديد </h2>
</div>

<div class="slider">
	
<section class="regular slider">
<?php
	
         $args = array( 'post_type' => 'product', 'stock' => 1, 'posts_per_page' => 10, 'orderby' =>'date','order' => 'DESC'); 
        $loop = new WP_Query( $args );
        while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?>
				
				<div class="postion-slick">
					
					<a class="price-item" href="<?php echo get_permalink( $loop->post->ID ) ?>" title="<?php echo esc_attr($loop->post->post_title ? $loop->post->post_title : $loop->post->ID); ?>">

						<div class="content-o">
                        <div class="content-overlay"></div>
                        <?php if (has_post_thumbnail( $loop->post->ID )) echo get_the_post_thumbnail($loop->post->ID, 'shop_catalog'); else echo '<img src="'.woocommerce_placeholder_img_src().'" alt="Placeholder"  class="owl-carousel-imgg" />'; ?>
                        </div>

                        <h3><?php echo wp_trim_words( get_the_title(), 6, '' ); ?></h3>

                        <span class="price"><?php echo $product->get_price_html(); ?></span>                    

                    </a>

                    <?php  woocommerce_template_loop_add_to_cart( $loop->post, $product ); ?>
					
	
					
					
				</div>
				
			
		 <?php endwhile; ?>
    <?php wp_reset_query(); ?>	
		
			  </section>
</div>
</div>
<!-- end new item -->

<!-- start cat لاب توب --> 


<div class="container">
    
<a href="<?php echo get_term_link( 159 ,'product_cat') ?>">
<div class="header-slider header-slider-xs-new">
	<h2 class="hvr-bounce-out">لاب توب</h2>
</div>
</a>

<div class="row">
    
<div class="col-sm-4">
	<div class="cat-by-cat-discount hvr-pulse">
     	<h4>خصومات</h4>
    </div>

		<div class="slider">
			
		<section class="regular-two slider">
		<?php
			
		        $args = array( 'post_type' => 'product','product_cat' => 'لاب_توب', 'posts_per_page' => 10, 'orderby' => 'rand', 
						'meta_query'     => array(
						'relation' => 'OR',
						array( // Simple products type
							'key'           => '_sale_price',
							'value'         => 0,
							'compare'       => '>',
							'type'          => 'numeric'
						),
						array( // Variable products type
							'key'           => '_min_variation_sale_price',
							'value'         => 0,
							'compare'       => '>',
							'type'          => 'numeric'
						)
					)

	            );
		        $loop = new WP_Query( $args );
		        while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?>
						
						<div class="postion-slick">
							
							<a class="price-item" href="<?php echo get_permalink( $loop->post->ID ) ?>" title="<?php echo esc_attr($loop->post->post_title ? $loop->post->post_title : $loop->post->ID); ?>">

								<div class="content-o">
		                        <div class="content-overlay"></div>
		                        <?php if (has_post_thumbnail( $loop->post->ID )) echo get_the_post_thumbnail($loop->post->ID, 'shop_catalog'); else echo '<img src="'.woocommerce_placeholder_img_src().'" alt="Placeholder"  class="owl-carousel-imgg" />'; ?>
		                        </div>

		                         <h3><?php echo wp_trim_words( get_the_title(), 6, '' ); ?></h3>

		                        <span class="price"><?php echo $product->get_price_html(); ?></span>                    

		                    </a>

		                    <?php  woocommerce_template_loop_add_to_cart( $loop->post, $product ); ?>					
						</div>
						
					
				 <?php endwhile; ?>
		    <?php wp_reset_query(); ?>	
				
					  </section>
		</div>
</div>

<div class="col-sm-8">

	<div class="cat-by-cat">
     	<h4>أحدث المنتجات</h4>
    </div>

		<div class="slider">
			
		<section class="regular-one slider">
		<?php
			
		          $args = array( 'post_type' => 'product', 'product_cat' => 'لاب_توب',  'stock' => 1, 'posts_per_page' => 10, 'orderby' =>'date','order' => 'DESC'); 
		        $loop = new WP_Query( $args );
		        while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?>
						
						<div class="postion-slick">
							
							<a class="price-item" href="<?php echo get_permalink( $loop->post->ID ) ?>" title="<?php echo esc_attr($loop->post->post_title ? $loop->post->post_title : $loop->post->ID); ?>">

								<div class="content-o">
		                        <div class="content-overlay"></div>
		                        <?php if (has_post_thumbnail( $loop->post->ID )) echo get_the_post_thumbnail($loop->post->ID, 'shop_catalog'); else echo '<img src="'.woocommerce_placeholder_img_src().'" alt="Placeholder"  class="owl-carousel-imgg" />'; ?>
		                        </div>

		                         <h3><?php echo wp_trim_words( get_the_title(), 6, '' ); ?></h3>

		                        <span class="price"><?php echo $product->get_price_html(); ?></span>                    

		                    </a>

		                    <?php  woocommerce_template_loop_add_to_cart( $loop->post, $product ); ?>					
						</div>
						
					
				 <?php endwhile; ?>
		    <?php wp_reset_query(); ?>	
				
					  </section>
		</div>
</div>

</div>
</div>


<!-- end cat لاب توب --> 


<!-- start cat شاشات --> 


<div class="container">
<a href="<?php echo get_term_link( 167 ,'product_cat') ?>">
<div class="header-slider header-slider-xs-new">
	<h2 class="hvr-bounce-out">شاشات</h2>
</div>
</a>

<div class="row">
    
<div class="col-sm-4">
	<div class="cat-by-cat-discount hvr-pulse">
     	<h4>خصومات</h4>
    </div>

		<div class="slider">
			
		<section class="regular-two slider">
		<?php
			
		        $args = array( 'post_type' => 'product','product_cat' => 'شاشات', 'posts_per_page' => 10, 'orderby' => 'rand', 
						'meta_query'     => array(
						'relation' => 'OR',
						array( // Simple products type
							'key'           => '_sale_price',
							'value'         => 0,
							'compare'       => '>',
							'type'          => 'numeric'
						),
						array( // Variable products type
							'key'           => '_min_variation_sale_price',
							'value'         => 0,
							'compare'       => '>',
							'type'          => 'numeric'
						)
					)

	            );
		        $loop = new WP_Query( $args );
		        while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?>
						
						<div class="postion-slick">
							
							<a class="price-item" href="<?php echo get_permalink( $loop->post->ID ) ?>" title="<?php echo esc_attr($loop->post->post_title ? $loop->post->post_title : $loop->post->ID); ?>">

								<div class="content-o">
		                        <div class="content-overlay"></div>
		                        <?php if (has_post_thumbnail( $loop->post->ID )) echo get_the_post_thumbnail($loop->post->ID, 'shop_catalog'); else echo '<img src="'.woocommerce_placeholder_img_src().'" alt="Placeholder"  class="owl-carousel-imgg" />'; ?>
		                        </div>

		                        <h3><?php echo wp_trim_words( get_the_title(), 6, '' ); ?></h3>

		                        <span class="price"><?php echo $product->get_price_html(); ?></span>                    

		                    </a>

		                    <?php  woocommerce_template_loop_add_to_cart( $loop->post, $product ); ?>					
						</div>
						
					
				 <?php endwhile; ?>
		    <?php wp_reset_query(); ?>	
				
					  </section>
		</div>
</div>

<div class="col-sm-8">

	<div class="cat-by-cat">
     	<h4>أحدث المنتجات</h4>
    </div>

		<div class="slider">
			
		<section class="regular-one slider">
		<?php
			
		          $args = array( 'post_type' => 'product', 'product_cat' => 'شاشات',  'stock' => 1, 'posts_per_page' => 10, 'orderby' =>'date','order' => 'DESC'); 
		        $loop = new WP_Query( $args );
		        while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?>
						
						<div class="postion-slick">
							
							<a class="price-item" href="<?php echo get_permalink( $loop->post->ID ) ?>" title="<?php echo esc_attr($loop->post->post_title ? $loop->post->post_title : $loop->post->ID); ?>">

								<div class="content-o">
		                        <div class="content-overlay"></div>
		                        <?php if (has_post_thumbnail( $loop->post->ID )) echo get_the_post_thumbnail($loop->post->ID, 'shop_catalog'); else echo '<img src="'.woocommerce_placeholder_img_src().'" alt="Placeholder"  class="owl-carousel-imgg" />'; ?>
		                        </div>

		                       <h3><?php echo wp_trim_words( get_the_title(), 6, '' ); ?></h3>

		                        <span class="price"><?php echo $product->get_price_html(); ?></span>                    

		                    </a>

		                    <?php  woocommerce_template_loop_add_to_cart( $loop->post, $product ); ?>					
						</div>
						
					
				 <?php endwhile; ?>
		    <?php wp_reset_query(); ?>	
				
					  </section>
		</div>
</div>

</div>
</div>


<!-- end cat شاشات --> 




<!-- start cat اكسسوارات --> 


<div class="container">
<a href="<?php echo get_term_link( 169 ,'product_cat') ?>">
<div class="header-slider header-slider-xs-new">
	<h2 class="hvr-bounce-out">اكسسوارات</h2>
</div>
</a>

<div class="row">
    
<div class="col-sm-4">
	<div class="cat-by-cat-discount hvr-pulse">
     	<h4>خصومات</h4>
    </div>

		<div class="slider">
			
		<section class="regular-two slider">
		<?php
			
		        $args = array( 'post_type' => 'product','product_cat' => 'اكسسوارات', 'posts_per_page' => 10, 'orderby' => 'rand', 
						'meta_query'     => array(
						'relation' => 'OR',
						array( // Simple products type
							'key'           => '_sale_price',
							'value'         => 0,
							'compare'       => '>',
							'type'          => 'numeric'
						),
						array( // Variable products type
							'key'           => '_min_variation_sale_price',
							'value'         => 0,
							'compare'       => '>',
							'type'          => 'numeric'
						)
					)

	            );
		        $loop = new WP_Query( $args );
		        while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?>
						
						<div class="postion-slick">
							
							<a class="price-item" href="<?php echo get_permalink( $loop->post->ID ) ?>" title="<?php echo esc_attr($loop->post->post_title ? $loop->post->post_title : $loop->post->ID); ?>">

								<div class="content-o">
		                        <div class="content-overlay"></div>
		                        <?php if (has_post_thumbnail( $loop->post->ID )) echo get_the_post_thumbnail($loop->post->ID, 'shop_catalog'); else echo '<img src="'.woocommerce_placeholder_img_src().'" alt="Placeholder"  class="owl-carousel-imgg" />'; ?>
		                        </div>

		                        <h3><?php echo wp_trim_words( get_the_title(), 6, '' ); ?></h3>

		                        <span class="price"><?php echo $product->get_price_html(); ?></span>                    

		                    </a>

		                    <?php  woocommerce_template_loop_add_to_cart( $loop->post, $product ); ?>					
						</div>
						
					
				 <?php endwhile; ?>
		    <?php wp_reset_query(); ?>	
				
					  </section>
		</div>
</div>

<div class="col-sm-8">

	<div class="cat-by-cat">
     	<h4>أحدث المنتجات</h4>
    </div>

		<div class="slider">
			
		<section class="regular-one slider">
		<?php
			
		          $args = array( 'post_type' => 'product', 'product_cat' => 'اكسسوارات',  'stock' => 1, 'posts_per_page' => 10, 'orderby' =>'date','order' => 'DESC'); 
		        $loop = new WP_Query( $args );
		        while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?>
						
						<div class="postion-slick">
							
							<a class="price-item" href="<?php echo get_permalink( $loop->post->ID ) ?>" title="<?php echo esc_attr($loop->post->post_title ? $loop->post->post_title : $loop->post->ID); ?>">

								<div class="content-o">
		                        <div class="content-overlay"></div>
		                        <?php if (has_post_thumbnail( $loop->post->ID )) echo get_the_post_thumbnail($loop->post->ID, 'shop_catalog'); else echo '<img src="'.woocommerce_placeholder_img_src().'" alt="Placeholder"  class="owl-carousel-imgg" />'; ?>
		                        </div>

		                       <h3><?php echo wp_trim_words( get_the_title(), 6, '' ); ?></h3>

		                        <span class="price"><?php echo $product->get_price_html(); ?></span>                    

		                    </a>

		                    <?php  woocommerce_template_loop_add_to_cart( $loop->post, $product ); ?>					
						</div>
						
					
				 <?php endwhile; ?>
		    <?php wp_reset_query(); ?>	
				
					  </section>
		</div>
</div>

</div>
</div>


<!-- end cat اكسسوارات --> 


<!-- start cat وحدات التخزين --> 


<div class="container">
<a href="<?php echo get_term_link( 267 ,'product_cat') ?>">
<div class="header-slider header-slider-xs-new">
	<h2 class="hvr-bounce-out">وحدات التخزين</h2>
</div>
</a>

<div class="row">
    
<div class="col-sm-4">
	<div class="cat-by-cat-discount hvr-pulse">
     	<h4>خصومات</h4>
    </div>

		<div class="slider">
			
		<section class="regular-two slider">
		<?php
			
		        $args = array( 'post_type' => 'product','product_cat' => 'وحدات-التخزين', 'posts_per_page' => 10, 'orderby' => 'rand', 
						'meta_query'     => array(
						'relation' => 'OR',
						array( // Simple products type
							'key'           => '_sale_price',
							'value'         => 0,
							'compare'       => '>',
							'type'          => 'numeric'
						),
						array( // Variable products type
							'key'           => '_min_variation_sale_price',
							'value'         => 0,
							'compare'       => '>',
							'type'          => 'numeric'
						)
					)

	            );
		        $loop = new WP_Query( $args );
		        while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?>
						
						<div class="postion-slick">
							
							<a class="price-item" href="<?php echo get_permalink( $loop->post->ID ) ?>" title="<?php echo esc_attr($loop->post->post_title ? $loop->post->post_title : $loop->post->ID); ?>">

								<div class="content-o">
		                        <div class="content-overlay"></div>
		                        <?php if (has_post_thumbnail( $loop->post->ID )) echo get_the_post_thumbnail($loop->post->ID, 'shop_catalog'); else echo '<img src="'.woocommerce_placeholder_img_src().'" alt="Placeholder"  class="owl-carousel-imgg" />'; ?>
		                        </div>

		                        <h3><?php echo wp_trim_words( get_the_title(), 6, '' ); ?></h3>

		                        <span class="price"><?php echo $product->get_price_html(); ?></span>                    

		                    </a>

		                    <?php  woocommerce_template_loop_add_to_cart( $loop->post, $product ); ?>					
						</div>
						
					
				 <?php endwhile; ?>
		    <?php wp_reset_query(); ?>	
				
					  </section>
		</div>
</div>

<div class="col-sm-8">

	<div class="cat-by-cat">
     	<h4>أحدث المنتجات</h4>
    </div>

		<div class="slider">
			
		<section class="regular-one slider">
		<?php
			
		          $args = array( 'post_type' => 'product', 'product_cat' => 'وحدات-التخزين',  'stock' => 1, 'posts_per_page' => 10, 'orderby' =>'date','order' => 'DESC'); 
		        $loop = new WP_Query( $args );
		        while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?>
						
						<div class="postion-slick">
							
							<a class="price-item" href="<?php echo get_permalink( $loop->post->ID ) ?>" title="<?php echo esc_attr($loop->post->post_title ? $loop->post->post_title : $loop->post->ID); ?>">

								<div class="content-o">
		                        <div class="content-overlay"></div>
		                        <?php if (has_post_thumbnail( $loop->post->ID )) echo get_the_post_thumbnail($loop->post->ID, 'shop_catalog'); else echo '<img src="'.woocommerce_placeholder_img_src().'" alt="Placeholder"  class="owl-carousel-imgg" />'; ?>
		                        </div>

		                       <h3><?php echo wp_trim_words( get_the_title(), 6, '' ); ?></h3>

		                        <span class="price"><?php echo $product->get_price_html(); ?></span>                    

		                    </a>

		                    <?php  woocommerce_template_loop_add_to_cart( $loop->post, $product ); ?>					
						</div>
						
					
				 <?php endwhile; ?>
		    <?php wp_reset_query(); ?>	
				
					  </section>
		</div>
</div>

</div>
</div>


<!-- end cat اكسسوارات -->

<!-- start cat الطباعات --> 


<div class="container">
<a href="<?php echo get_term_link( 208 ,'product_cat') ?>">
<div class="header-slider header-slider-xs-new">
	<h2 class="hvr-bounce-out">الطابعات</h2>
</div>
</a>
<div class="row">
    
<div class="col-sm-4">
	<div class="cat-by-cat-discount hvr-pulse">
     	<h4>خصومات</h4>
    </div>

		<div class="slider">
			
		<section class="regular-two slider">
		<?php
			
		        $args = array( 'post_type' => 'product','product_cat' => 'الطباعات', 'posts_per_page' => 10, 'orderby' => 'rand', 
						'meta_query'     => array(
						'relation' => 'OR',
						array( // Simple products type
							'key'           => '_sale_price',
							'value'         => 0,
							'compare'       => '>',
							'type'          => 'numeric'
						),
						array( // Variable products type
							'key'           => '_min_variation_sale_price',
							'value'         => 0,
							'compare'       => '>',
							'type'          => 'numeric'
						)
					)

	            );
		        $loop = new WP_Query( $args );
		        while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?>
						
						<div class="postion-slick">
							
							<a class="price-item" href="<?php echo get_permalink( $loop->post->ID ) ?>" title="<?php echo esc_attr($loop->post->post_title ? $loop->post->post_title : $loop->post->ID); ?>">

								<div class="content-o">
		                        <div class="content-overlay"></div>
		                        <?php if (has_post_thumbnail( $loop->post->ID )) echo get_the_post_thumbnail($loop->post->ID, 'shop_catalog'); else echo '<img src="'.woocommerce_placeholder_img_src().'" alt="Placeholder"  class="owl-carousel-imgg" />'; ?>
		                        </div>

		                        <h3><?php echo wp_trim_words( get_the_title(), 6, '' ); ?></h3>

		                        <span class="price"><?php echo $product->get_price_html(); ?></span>                    

		                    </a>

		                    <?php  woocommerce_template_loop_add_to_cart( $loop->post, $product ); ?>					
						</div>
						
					
				 <?php endwhile; ?>
		    <?php wp_reset_query(); ?>	
				
					  </section>
		</div>
</div>

<div class="col-sm-8">

	<div class="cat-by-cat">
     	<h4>أحدث المنتجات</h4>
    </div>

		<div class="slider">
			
		<section class="regular-one slider">
		<?php
			
		          $args = array( 'post_type' => 'product', 'product_cat' => 'الطباعات',  'stock' => 1, 'posts_per_page' => 10, 'orderby' =>'date','order' => 'DESC'); 
		        $loop = new WP_Query( $args );
		        while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?>
						
						<div class="postion-slick">
							
							<a class="price-item" href="<?php echo get_permalink( $loop->post->ID ) ?>" title="<?php echo esc_attr($loop->post->post_title ? $loop->post->post_title : $loop->post->ID); ?>">

								<div class="content-o">
		                        <div class="content-overlay"></div>
		                        <?php if (has_post_thumbnail( $loop->post->ID )) echo get_the_post_thumbnail($loop->post->ID, 'shop_catalog'); else echo '<img src="'.woocommerce_placeholder_img_src().'" alt="Placeholder"  class="owl-carousel-imgg" />'; ?>
		                        </div>

		                        <h3><?php echo wp_trim_words( get_the_title(), 6, '' ); ?></h3>

		                        <span class="price"><?php echo $product->get_price_html(); ?></span>                    

		                    </a>

		                    <?php  woocommerce_template_loop_add_to_cart( $loop->post, $product ); ?>					
						</div>
						
					
				 <?php endwhile; ?>
		    <?php wp_reset_query(); ?>	
				
					  </section>
		</div>
</div>

</div>
</div>


<!-- end cat الطباعات --> 


<!-- start cat بروجكتور --> 


<div class="container">
<a href="<?php echo get_term_link( 210 ,'product_cat') ?>">
<div class="header-slider header-slider-xs-new">
	<h2 class="hvr-bounce-out">بروجكتور</h2>
</div>
</a>
<div class="row">
    
<div class="col-sm-4">
	<div class="cat-by-cat-discount hvr-pulse">
     	<h4>خصومات</h4>
    </div>

		<div class="slider">
			
		<section class="regular-two slider">
		<?php
			
		        $args = array( 'post_type' => 'product','product_cat' => 'بروجكتور', 'posts_per_page' => 10, 'orderby' => 'rand', 
						'meta_query'     => array(
						'relation' => 'OR',
						array( // Simple products type
							'key'           => '_sale_price',
							'value'         => 0,
							'compare'       => '>',
							'type'          => 'numeric'
						),
						array( // Variable products type
							'key'           => '_min_variation_sale_price',
							'value'         => 0,
							'compare'       => '>',
							'type'          => 'numeric'
						)
					)

	            );
		        $loop = new WP_Query( $args );
		        while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?>
						
						<div class="postion-slick">
							
							<a class="price-item" href="<?php echo get_permalink( $loop->post->ID ) ?>" title="<?php echo esc_attr($loop->post->post_title ? $loop->post->post_title : $loop->post->ID); ?>">

								<div class="content-o">
		                        <div class="content-overlay"></div>
		                        <?php if (has_post_thumbnail( $loop->post->ID )) echo get_the_post_thumbnail($loop->post->ID, 'shop_catalog'); else echo '<img src="'.woocommerce_placeholder_img_src().'" alt="Placeholder"  class="owl-carousel-imgg" />'; ?>
		                        </div>

		                        <h3><?php echo wp_trim_words( get_the_title(), 6, '' ); ?></h3>

		                        <span class="price"><?php echo $product->get_price_html(); ?></span>                    

		                    </a>

		                    <?php  woocommerce_template_loop_add_to_cart( $loop->post, $product ); ?>					
						</div>
						
					
				 <?php endwhile; ?>
		    <?php wp_reset_query(); ?>	
				
					  </section>
		</div>
</div>

<div class="col-sm-8">

	<div class="cat-by-cat">
     	<h4>أحدث المنتجات</h4>
    </div>

		<div class="slider">
			
		<section class="regular-one slider">
		<?php
			
		          $args = array( 'post_type' => 'product', 'product_cat' => 'بروجكتور',  'stock' => 1, 'posts_per_page' => 10, 'orderby' =>'date','order' => 'DESC'); 
		        $loop = new WP_Query( $args );
		        while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?>
						
						<div class="postion-slick">
							
							<a class="price-item" href="<?php echo get_permalink( $loop->post->ID ) ?>" title="<?php echo esc_attr($loop->post->post_title ? $loop->post->post_title : $loop->post->ID); ?>">

								<div class="content-o">
		                        <div class="content-overlay"></div>
		                        <?php if (has_post_thumbnail( $loop->post->ID )) echo get_the_post_thumbnail($loop->post->ID, 'shop_catalog'); else echo '<img src="'.woocommerce_placeholder_img_src().'" alt="Placeholder"  class="owl-carousel-imgg" />'; ?>
		                        </div>

		                        <h3><?php echo wp_trim_words( get_the_title(), 6, '' ); ?></h3>

		                        <span class="price"><?php echo $product->get_price_html(); ?></span>                    

		                    </a>

		                    <?php  woocommerce_template_loop_add_to_cart( $loop->post, $product ); ?>					
						</div>
						
					
				 <?php endwhile; ?>
		    <?php wp_reset_query(); ?>	
				
					  </section>
		</div>
</div>

</div>
</div>


<!-- end cat بروجكتور -->

<?php
get_footer();
?>

<script>
	 
jQuery(function ($) {
          				
$('.regular').slick({
		autoplay: true,
		arrows : false,
        infinite: true,
		rtl: true,
        slidesToShow:  5,
        slidesToScroll: 1,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 4,
        slidesToScroll: 3,
        infinite: true,
        dots: false
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
  ]
});	

$('.regular-head').slick({
		autoplay: true,
		arrows : false,
        infinite: true,
		rtl: true,
        slidesToShow:  1,
        slidesToScroll: 1,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 3,
        infinite: true,
        dots: false
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 2,
        dots: false
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: false
      }
    }
  ]
});	


$('.regular-one').slick({
		autoplay: true,
		arrows : false,
        infinite: true,
        rtl: true,
        slidesToShow: 4,
        slidesToScroll: 1,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 4,
        slidesToScroll: 3,
        infinite: true,
        dots: true
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
  ]
});		


$('.regular-two').slick({
		autoplay: true,
		arrows : false,
        infinite: true,
        rtl: true,
        slidesToShow: 2,
        slidesToScroll: 1,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 3,
        infinite: true,
        dots: true
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
  ]
});	

	
				
				
 }); // end 
				
</script>
				

<?php get_footer(); ?>