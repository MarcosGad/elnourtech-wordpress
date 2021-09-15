<?php

get_header(); ?>

<style>

	img{
	  max-width: none !important; 
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

</style>

<!-- start  main slider --> 
<div class="container-fluid">	

	<div class="row">
	    <div class="col-sm-4 col-md-3 hidden-xs">
            <h4 class="h-cat hvr-buzz-out">SHOP BY CATEGORY</h4>
		    <?php get_sidebar('cat') ?>	
	    </div>
		<div class="col-sm-8 col-md-6">
		    <div class="head-slider">
		     <?php
                echo do_shortcode('[smartslider3 slider=1]');
             ?>
            </div>
		</div>
		<div class="hidden-xs hidden-sm col-md-3">
		    <h4 class="h-cat color-Dis hvr-pulse">Discounts</h4>
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
	</div>
		
</div> 

<!-- end main slider --> 


<!-- start sale_price item --> 

<div class="container">

<div class="header-slider header-slider-xs-new">
	<h2 class="hvr-bounce-out">Discounts for you</h2>
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
	<h2 class="hvr-bounce-out">All That Is New</h2>
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



<!-- start cat laptop --> 


<div class="container">
    
<a href="<?php echo get_term_link( 147 ,'product_cat') ?>">
<div class="header-slider header-slider-xs-new">
	<h2 class="hvr-bounce-out">Laptop</h2>
</div>
</a>

<div class="row">

<div class="col-sm-8">

	<div class="cat-by-cat">
     	<h4>Latest Products</h4>
    </div>

		<div class="slider">
			
		<section class="regular-one slider">
		<?php
			
		          $args = array( 'post_type' => 'product', 'product_cat' => 'laptop',  'stock' => 1, 'posts_per_page' => 10, 'orderby' =>'date','order' => 'DESC'); 
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

<div class="col-sm-4">
	<div class="cat-by-cat-discount hvr-pulse">
     	<h4>Discount</h4>
    </div>

		<div class="slider">
			
		<section class="regular-two slider">
		<?php
			
		        $args = array( 'post_type' => 'product','product_cat' => 'laptop', 'posts_per_page' => 10, 'orderby' => 'rand', 
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


</div>
</div>


<!-- end cat laptop --> 



<!-- start cat montor --> 


<div class="container">

<a href="<?php echo get_term_link( 151 ,'product_cat') ?>">
<div class="header-slider header-slider-xs-new">
	<h2 class="hvr-bounce-out">Montor</h2>
</div>
</a>

<div class="row">

<div class="col-sm-8">

	<div class="cat-by-cat">
     	<h4>Latest Products</h4>
    </div>

		<div class="slider">
			
		<section class="regular-one slider">
		<?php
			
		          $args = array( 'post_type' => 'product', 'product_cat' => 'montor',  'stock' => 1, 'posts_per_page' => 10, 'orderby' =>'date','order' => 'DESC'); 
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

<div class="col-sm-4">
	<div class="cat-by-cat-discount hvr-pulse">
     	<h4>Discount</h4>
    </div>

		<div class="slider">
			
		<section class="regular-two slider">
		<?php
			
		        $args = array( 'post_type' => 'product','product_cat' => 'montor', 'posts_per_page' => 10, 'orderby' => 'rand', 
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


</div>
</div>


<!-- end cat montor --> 



<!-- start cat accessories --> 


<div class="container">
    
<a href="<?php echo get_term_link( 157 ,'product_cat') ?>">
<div class="header-slider header-slider-xs-new">
	<h2 class="hvr-bounce-out">Accessories</h2>
</div>
</a>

<div class="row">

<div class="col-sm-8">

	<div class="cat-by-cat">
     	<h4>Latest Products</h4>
    </div>

		<div class="slider">
			
		<section class="regular-one slider">
		<?php
			
		          $args = array( 'post_type' => 'product', 'product_cat' => 'accessories',  'stock' => 1, 'posts_per_page' => 10, 'orderby' =>'date','order' => 'DESC'); 
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

<div class="col-sm-4">
	<div class="cat-by-cat-discount hvr-pulse">
     	<h4>Discount</h4>
    </div>

		<div class="slider">
			
		<section class="regular-two slider">
		<?php
			
		        $args = array( 'post_type' => 'product','product_cat' => 'accessories', 'posts_per_page' => 10, 'orderby' => 'rand', 
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


</div>
</div>


<!-- end cat accessories --> 


<!-- start cat Storage Units --> 


<div class="container">
    
<a href="<?php echo get_term_link( 265 ,'product_cat') ?>">
<div class="header-slider header-slider-xs-new">
	<h2 class="hvr-bounce-out">Storage Units</h2>
</div>
</a>

<div class="row">

<div class="col-sm-8">

	<div class="cat-by-cat">
     	<h4>Latest Products</h4>
    </div>

		<div class="slider">
			
		<section class="regular-one slider">
		<?php
			
		          $args = array( 'post_type' => 'product', 'product_cat' => 'storage-units',  'stock' => 1, 'posts_per_page' => 10, 'orderby' =>'date','order' => 'DESC'); 
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

<div class="col-sm-4">
	<div class="cat-by-cat-discount hvr-pulse">
     	<h4>Discount</h4>
    </div>

		<div class="slider">
			
		<section class="regular-two slider">
		<?php
			
		        $args = array( 'post_type' => 'product','product_cat' => 'storage-units', 'posts_per_page' => 10, 'orderby' => 'rand', 
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


</div>
</div>


<!-- end cat Storage Units --> 



<!-- start cat printers --> 


<div class="container">
    
<a href="<?php echo get_term_link( 204 ,'product_cat') ?>">
<div class="header-slider header-slider-xs-new">
	<h2 class="hvr-bounce-out">Printers</h2>
</div>
</a>

<div class="row">

<div class="col-sm-8">

	<div class="cat-by-cat">
     	<h4>Latest Products</h4>
    </div>

		<div class="slider">
			
		<section class="regular-one slider">
		<?php
			
		          $args = array( 'post_type' => 'product', 'product_cat' => 'printers',  'stock' => 1, 'posts_per_page' => 10, 'orderby' =>'date','order' => 'DESC'); 
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

<div class="col-sm-4">
	<div class="cat-by-cat-discount hvr-pulse">
     	<h4>Discount</h4>
    </div>

		<div class="slider">
			
		<section class="regular-two slider">
		<?php
			
		        $args = array( 'post_type' => 'product','product_cat' => 'printers', 'posts_per_page' => 10, 'orderby' => 'rand', 
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


</div>
</div>


<!-- end cat printers --> 

<!-- start cat PROJECTOR --> 


<div class="container">
    
<a href="<?php echo get_term_link( 206 ,'product_cat') ?>">
<div class="header-slider header-slider-xs-new">
	<h2 class="hvr-bounce-out">Projector</h2>
</div>
</a>

<div class="row">

<div class="col-sm-8">

	<div class="cat-by-cat">
     	<h4>Latest Products</h4>
    </div>

		<div class="slider">
			
		<section class="regular-one slider">
		<?php
			
		          $args = array( 'post_type' => 'product', 'product_cat' => 'projector',  'stock' => 1, 'posts_per_page' => 10, 'orderby' =>'date','order' => 'DESC'); 
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

<div class="col-sm-4">
	<div class="cat-by-cat-discount hvr-pulse">
     	<h4>Discount</h4>
    </div>

		<div class="slider">
			
		<section class="regular-two slider">
		<?php
			
		        $args = array( 'post_type' => 'product','product_cat' => 'projector', 'posts_per_page' => 10, 'orderby' => 'rand', 
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


</div>
</div>


<!-- end cat PROJECTOR --> 

<?php
get_footer();

?>

 <script>
	 
jQuery(function ($) {
          				
$('.regular').slick({
		autoplay: true,
		arrows : false,
        infinite: true,
        slidesToShow: 5,
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


$('.regular-one').slick({
		autoplay: true,
		arrows : false,
        infinite: true,
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


}); 
				
</script>
				
				
			
<?php get_footer(); ?>