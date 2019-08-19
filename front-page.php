<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Supplywisdom
 */

get_header(); ?>

<main id="primary" class="site-main">
<section class="banner">
    <div class="container">
      <div class="left-content">
      <div class="carousel-wrap">
          <div class="owl-carousel">
            <?php if(have_rows('banner')) : while(have_rows('banner')) : the_row();
              $bannerTitle = get_sub_field('banner_title');
              $bannerHeadings = get_sub_field('banner_heading');
              $bannerDescription = get_sub_field('banner_description');
              $bannerLink = get_sub_field('banner_link');
            ?>
            <div class="item">
              <h1><?php the_sub_field('banner_title'); ?><br><span><?php the_sub_field('banner_heading'); ?></span></h1>
              <p><?php the_sub_field('banner_description'); ?></p>
              <a href="#" class="btn banner-btn">Read more <i class="icon-angle-right-icon"></i> </a>
            </div>
            <?php endwhile; endif; ?>
           
          </div>
        </div>
      </div>
      <div class="right-content">
        <img src="<?php echo get_template_directory_uri(); ?>/img/World-map.png" alt="">
        <div class="sw-wrapper">
          <ul>
            <li>BENGALURU, INDIA</li>
            <li><?php echo date('d/m/Y'); ?></li>
          </ul>
          <h3><i class="far fa-meh"></i> Medium Risk</h3>
          <span class="line"></span>
          <p>Weekend Metro service unlikely to be disrupted</p>
        </div>
      </div>

    </div>
  </section>
  
  <section class="breadcrumb">
    <ul class="container">
      <li id="time"></li>
      <li><marquee>Several SDF fighters injured in IED explosion in al-Thaknah area of Raqqa, Syraia: Eyewitness</marquee></li>
      <!-- <li></li> -->
    </ul>
  </section> 
<!-- sw-value section -->
<div class="sw-value ">
    <div class="container">
    <?php
          $title= new WP_Query('pagename=home/');
          while ( $title->have_posts() ) : $title->the_post();?>
          <!-- <h2 class="text-center">B2B Service</h2> -->
          <div class="heading-text">
        <h2 ><?php the_title();?></h2>
        <p ><?php the_content();?> </p>
      </div>
          <?php
          endwhile;
          // reset post data (important!)
          wp_reset_postdata();
        ?>
     
      
      <div class="value-row">
        <div class="v-icon">
          <div class="cir-img">
            <span class="icon-third-party-icon"></span>
          </div>
        </div>
        <div class="v-text">
          <h3>Simplify Third Party Oversight </h3>
          <p>Proactive and continuous insight into your critical third parties and locations</p>
        </div>
      </div><!-- eo-value-row -->

      <div class="value-row ">
        <div class="v-icon">
          <div class="cir-img">
            <span class="icon-proactive-icon"></span>
          </div>
        </div>
        <div class="v-text">
          <h3>Be Proactive with Potential and Real Disruptions and Opportunities </h3>
          <p>Risk scores quantified by our proprietary Supply Wisdom risk methodology</p>
        </div>
      </div><!-- eo-value-row -->

      <div class="value-row">
        <div class="v-icon">
          <div class="cir-img">
            <span class="icon-business-man-icon"></span>
          </div>
        </div>
        <div class="v-text">
          <h3>Maintain Business Continuity and Resilience</h3>
          <p>Continuous real-time location and supplier risk monitoring</p>
        </div>
      </div><!-- eo-value-row -->

      <div class="value-row ">
        <div class="v-icon">
          <div class="cir-img">
            <span class="icon-strength-icon"></span>
          </div>
        </div>
        <div class="v-text">
          <h3>Strengthen Third Party, and Location Strategy, Selection and Negotiations </h3>
          <p>360-degree Vendor and Location Reviews and Assessments</p>
        </div>
      </div><!-- eo-value-row -->
      <a href="" class="read-link">Read More<span class="icon-angle-right-icon"></span></a>

    </div>
  </div><!-- eo-sw-value -->

  <!-- sw-value features -->
  <div class="sw-features ">
    <div class="container">
      <h2 class="sw-heading">Supply Wisdom Features</h2>
      <p class="sw-para">Supply Wisdom enables enterprises to optimize sourcing decisions, maintain business continuity, support vendor assessments, and improve risk management and governance.</p>
      <div class="feature-row">
        <div class="feature-col">
          <img src="<?php bloginfo('template_directory'); ?>/img/clock-icon.svg" alt="clock-icon" />
          <p>Real-time Risk Data</p>
        </div>
        <div class="feature-col">
          <img src="<?php bloginfo('template_directory'); ?>/img/alert-icon.svg" alt="alert-icon" />
          <p>Real-Time and Continuous Alerts</p>
        </div>
        <div class="feature-col">
          <img src="<?php bloginfo('template_directory'); ?>/img/analyst-icon.svg" alt="analyst-icon" />
          <p>Actionable Analyst Guidance</p>
        </div>
        <div class="feature-col">
          <img src="<?php bloginfo('template_directory'); ?>/img/API-workflow-icon.svg" alt="API-workflow-icon" />
          <p>Integrates into Workflows with APIs</p>
        </div>
        <div class="feature-col">
          <img src="<?php bloginfo('template_directory'); ?>/img/cloud-platform-icon.svg" alt="cloud-platform-icon" />
          <p>Cloud-Based Subscription Platform</p>
        </div>
        <div class="feature-col">
          <img src="<?php bloginfo('template_directory'); ?>/img/zero-icon.svg" alt="zero-icon" />
          <p>Zero Implementation Needed</p>
        </div>
        <div class="feature-col">
          <img src="<?php bloginfo('template_directory'); ?>/img/easy-icon.svg" alt="easy-icon" />
          <p>Intuitive, Easy to use Experience</p>
        </div>
        <div class="feature-col">
          <img src="<?php bloginfo('template_directory'); ?>/img/cost-effective-icon.svg" alt="cost-effective-icon" />
          <p>Cost-Effective Coverage of all Third Parties and Locations</p>
        </div>
        <div class="feature-col">
          <img src="<?php bloginfo('template_directory'); ?>/img/real-time-alers-icon.svg" alt="real-time-alers-icon" />
          <p>Real-Time and Continuous Alerts</p>
        </div>
      </div>

      <a href="" class="read-link">Read More<span class="icon-angle-right-icon"></span></a>
    </div>

  </div><!-- eo-sw-feature -->
  <div class="testimonial">
    <div class="container">
      <?php
        $testimonials= new WP_Query('pagename=home/what-our-clients-say/');
        while ( $testimonials->have_posts() ) : $testimonials->the_post();?>
            <div class="heading-text">
              <h2 ><?php the_title();?></h2>
              <p ><?php the_content();?> </p>
            </div>
           <?php endwhile; wp_reset_postdata(); ?>
    <div class="carousel-wrap">
      <div class="owl-carousel one">
        <?php
          $args = array( 'post_type' => 'jetpack-testimonial', 'posts_per_page' => -1 );
          $loop = new WP_Query( $args );
                while ( $loop->have_posts() ) : $loop->the_post();?>
        <div class="item">
          <div class="t-box">
            <h4><?php the_title();?></h4>
            <p><?php the_content();?></p>
          </div>
          <span class="icon-quote-left-icon quote-up"></span>
          <span class="icon-quote-right-icon quote-down"></span>
        </div>
        <?php endwhile;?>
      </div>
    </div>
  </div>
</div>


<!-- Client section starts here -->

  <?php
    $attachments = get_posts( array(
                                    'post_type'   => 'attachment',
                                    'numberposts' => -1,
                                    'post_status' => null,
                                    'post_parent' => 5022
                                ) );
    
    if ( $attachments ):
  ?>
  <section class="sw-partners">
    <div class="container">
      <h2 class="sw-heading">Our Clients</h2>
      <div class="carousel-wrap">
        <div class="owl-carousel two">
          <?php
            foreach ( $attachments as $attachment ) :
                ?>
                <div class="item">
                  <div class="partner-img"><?php echo wp_get_attachment_image( $attachment->ID, 'full' ); ?>
                  </div>
                </div>
                <?php
            endforeach;
          ?>
        </div>
      </div>
    </div>
  </section>
  <?php endif; ?>

<!-- client section ends here -->






</main><!-- #primary -->

<?php
get_footer();
