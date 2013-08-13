<?php
/**
 *
 * Template Name: Home DAL Yearly
 *
 *
 * @package WP-Bootstrap
 * @subpackage Default_Theme
 * @since WP-Bootstrap 0.5
 *
 * Last Revised: March 4, 2012
 */
get_header(); ?>

<!-- Template para home de cada año: page-home-yearly.php -->

<div class="background-hero-right"></div>

<div class="container">
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
  <header class="jumbotron nolist">

          <div class="container"> 
                <div class="hero-right">
         
                  <?php
                      if ( function_exists('dynamic_sidebar')) dynamic_sidebar("hero-right");
                  ?>
                </div>

                <div id="myCarousel" class="carousel slide">
                      <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>
                      </ol>
                      <!-- Carousel items -->
                      <div class="carousel-inner">
                        <div class="active item"><img src="<?php echo bloginfo('template_directory') ?>/img/slider/llega-a-las-estrellas-con-tu-emprendimiento.png" alt="llega a las estrellas con tu emprendimiento"/></div>
                        <div class="item"><img src="<?php echo bloginfo('template_directory') ?>/img/slider/llevemos-el-impacto-social-al-siguiente-nivel.png" alt="llevemos el impacto social al siguiente nivel"/></div>
                        <div class="item"><img src="<?php echo bloginfo('template_directory') ?>/img/slider/compartamos-ideas.png" alt="compartamos ideas"/></div>
                      </div>
                      <!-- Carousel nav -->
                      <!-- <a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
                      <a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a> -->
                </div>
          </div>

</div>  
<!--             <div class="blackbottom span"> 
            </div> -->
                
</header>

    <div class="row wrapper">
<!--       <div class="span12">
            <?php
             get_template_part('content','banderas');?>
            <?php wp_reset_query(); ?>
      </div>
      <div class="span12 citaHome">
         <?php
            if ( function_exists('dynamic_sidebar')) dynamic_sidebar("slogan-area");
          ?>
      </div>  
      
      <div class="row">
          <div class="span4">
             <?php
              if ( function_exists('dynamic_sidebar')) dynamic_sidebar("home-left");
              ?>
           </div>
           <div class="span4">
              <?php
              if ( function_exists('dynamic_sidebar')) dynamic_sidebar("home-middle");
              ?>
            </div>
            <div class="span4">

             <?php
              if ( function_exists('dynamic_sidebar')) dynamic_sidebar("home-right");
              ?>
            </div> 
      </div> -->

      <div class="span12">
        <?php the_content();?>

       
      </div> 
    </div>  
            <?php endwhile; endif; ?>
  </div>  


<?php get_footer();?>
