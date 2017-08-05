<?php
/**
 * Template Name: User
 *
 * Template to see student data
 *
 * @package understrap
 */

get_header();
$container = get_theme_mod( 'understrap_container_type' );
?>
<div id="home-wrapper">
	<div class="container" id="home-content">
	<!--Top logo Section-->
	  <div class="top-logo-area">
	    <div class="row home-page">	  
	     
	        <?php while ( have_posts() ) : the_post(); ?>
				<?php the_content();?>
	        <?php endwhile; // end of the loop. ?>
	    </div>
	  </div>
	</div>
</div>
<!--End Top logo Section-->

<div class="container-fluid">
  <div class="container white">
    <div class="content">
      <div class="row nav">
		<?php echo getUser();?>
		<div class="display-total"><div id="totalHours"></div><span class="label">hours total</span></div>
		<?php         
        $email = getUser();
          // args

          $args = array(
            'numberposts' => -1,
            'post_type'   => 'post',
           'meta_query' => array(
				array(
					'key' => 'userEmail',
					'value' => $email,
				)
			)
            
          );

          // query
          $the_query = new WP_Query( $args );
          ?>
      </div>
    </div>  
      <div class="student-events row">  
      <div class="col-md-12"><h2>Events Attended</h2></div>
        <?php if( $the_query->have_posts() ): ?>
          <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
            <div class="col-md-2">
            		  <div class="event-hours"><?php echo 'hours:<span class="hours-data">' .theHours(get_the_ID()) . '</span>';?></div>	
                      <a class="faculty-project-item-title" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                      <div class="faculty-project-item-excerpt"><?php the_excerpt();?></div>
            </div>
          <?php endwhile; ?>
        <?php endif; ?>

          <?php wp_reset_query();  // Restore global post data stomped by the_post(). ?>
      </div>
        </div>
      </div>
    </div>    
  </div>
</div>
<!--End Top Content Section-->

<!--Main items Section-->


</div><!-- Wrapper end -->



<?php get_footer(); ?>
