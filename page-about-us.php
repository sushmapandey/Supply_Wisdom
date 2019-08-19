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


<section class="about-trpm">
    <div class="container">
        <div class="trpm-grid">
        <div class="trpm-image">
          <img src="<?php echo get_template_directory_uri(); ?>/img/Third-Party-RiskManagement-Graphic.png" alt="solution-banner-graphic">
        </div>
        <div class="trpm-text">
          <h1>Who Needs TPRM?</h1>
          <p>Third parties play a significant role in global business today. When enterprises increase their reliance on third parties, they also open themselves to risk from third-party operations. Third party risks can have a far-reaching impact.
TPRM seeks to institute mechanisms to identify, quantify, monitor and mitigate a variety of third-party risks.</p>

          <p>Fortune 1000 enterprise relies on thousands of third parties for their business operations. Many of these enterprises especially in Banking, Financial Services, Insurance and Healthcare are subject to oversight from a variety of regulators. As OCC/FINRA/HIPAA & other regulations, data protection and privacy laws and laws relating to outsourcing increase, enterprises must have a program to ensure compliance, due diligence and reporting.</p>

          <p>This is where TPRM programs strive to ensure business certainty.</p>
        </div>
      </div>
    </div>
  </section>

  <section class="sw-story">
    <div class="container">
      <div class="story-row">
        <div class="story-text">
          <h2>Supply Wisdom Story</h2>
          <p>Over the years, enterprise sourcing through third parties has increased manifold. By 2020 global IT, BPO and KPO sourcing will touch $1 trillion. Accompanying this is increased scrutiny and oversight from both boards and regulators. In a recent EY survey of financial services companies, over 95% of organizations surveyed said they maintained a list of critical third parties.
Over 20% of organizations have a list that exceeds 100 critical suppliers. </p>
          <p>Most enterprises defined a critical third party as a company that had the potential to impact critical business processes or handled sensitive data while providing services. There is also a clear trend in establishing a focused TPRM function that sets the standard for
all businesses enterprise wide. Supply Wisdom has been equipping TPRM programs for global enterprises with real-time and continuous third-party risk monitoring and risk assessments since 2010. Supply Wisdom helps enterprises stay ahead of third-party risk by alerting them about risks and opportunities, mitigating disruptions, and generating value with compelling insight.</p>
        </div>
        <div class="story-image">
        <img src="<?php echo get_template_directory_uri(); ?>/img/image.png" alt="solution-banner-graphic">
        </div>
      </div>
    </div>
  </section>

  <section class="neo-grp">
    <div class="container">
      <div class="neo-logo">
        <img src="<?php echo get_template_directory_uri(); ?>/img/neo-grp-logo.png" alt="solution-banner-graphic">
      </div>
      <div class="neo-txt">
        <h3>Supply Wisdom is a Neo Group Company</h3>

      </div>
    </div>
  </section>

  <section class="sw-leadership">
    <div class="container">
      <div class="heading-text">
        <h2>Our Leadership</h2>
        <p>our team members are based all around the world. We thrive on this diversity and the unique perspectives that arise from it. We embrace our varied educational and professional backgrounds and are committed to creating an inclusive, high-performance outcome culture</p>
      </div>
      <div class="ldrshp-container">
        <a href="#">
        <div class="ldrshp-card">
          <img src="<?php echo get_template_directory_uri(); ?>/img/Atul Vashistha.png" alt="solution-banner-graphic">
          <div class="card-txt">
            <h4>Atul Vashistha <span>Chairman & CEO</span></h4>
            <p>Atul is the Chairman and CEO of Neo Group, a firm he founded in 1999. Neo is recognized globally as a leading supply and outsourcing analytics,
monitoring and advisory firm.</p>
          </div>
          <div class="lnkdn-logo">
            <p>Linked <i class="icon-linkedIn-icon1"></i></p>
          </div>
        </div>
        </a>
        <a href="#">
        <div class="ldrshp-card">
          <img src="<?php echo get_template_directory_uri(); ?>/img/Casey Alexis.png" alt="solution-banner-graphic">
          <div class="card-txt">
            <h4>Casey Alexis <span>Director of Customer Experience</span></h4>
            <p>Casey is Director of Customer Experience and works with Neo Group’s data, analytics and governance solutions, including
Global Supply Risk Monitoring (GSRM) products and services… </p>
          </div>
          <div class="lnkdn-logo">
            <p>Linked <i class="icon-linkedIn-icon1"></i></p>
          </div>
        </div>
      </a>
      <a href="#">
        <div class="ldrshp-card">
          <img src="<?php echo get_template_directory_uri(); ?>/img/John Bree.png" alt="solution-banner-graphic">
          <div class="card-txt">
            <h4>John Bree <span>Partner & SVP</span></h4>
            <p>John is a financial industry professional with a proven track record in developing and managing AML/CTF, KYC, Anti-Fraud and Vendor &
Third Party Risk Management programs. Held senior positions in New York…</p>
          </div>
          <div class="lnkdn-logo">
             <p>Linked <i class="icon-linkedIn-icon1"></i></p>
          </div>
        </div>
        </a>
        <a href="#">
        <div class="ldrshp-card">
          <img src="<?php echo get_template_directory_uri(); ?>/img/Sandeep Suresh.png" alt="solution-banner-graphic">
          <div class="card-txt">
            <h4>Sandeep Suresh <span>Head Research</span></h4>
            <p>Sandeep heads the Research and Supplier Relations division in Neo Group. He has a total work experience of over 15 years,
and has been working in the market research industry for the last… </p>
          </div>
          <div class="lnkdn-logo">
            <p>Linked <i class="icon-linkedIn-icon1"></i></p>
          </div>
        </div>
      </div>
</a>

    </div>
  </section>


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
  <section class="sw-partners about-page">
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


<section class="sw-contact">

  <div class="sw-contact-page container">
  
    <div class="heading-text">
      <h2>Contact Us</h2>
      <p>Thank you for your interest in Supply Wisdom. If you have a question or would like more information about our services and offerings, please complete the form below and someone will be in touch shortly. We look forward to hearing from you!</p>
    </div>


    <div class="get-in-touch">
      <h3 class="sw-h3-title">Get In Touch <span>Feel free to drop us a line below</span></h3>
      <h4>Global Headquarters</h4>
        <ul>
          <li><i class="icon-map-marekr-icon"></i>#3999, Lakshmi Narayan complex,
          1962 Main Street, Suite 253, Sarasota, FL 34236 USA</li>        
          <li><i class="icon-telephone-icon"></i> <a href="tel:1.617.830.1664">+1.617.830.1664</a></a></li>
          <li><i class="icon-fax-icon"></i><a href="tel:1.415.462.5401">+1.415.462.5401</a></a></li>
            <li><i class="far fa-envelope"></i><a href="mailto:info@supplywisdom.com">info@supplywisdom.com</a></li>
          </ul>
          <h4>Asia / Pacific Headquarters</h4>
          <ul>
            <li><i class="fas fa-map-marker-alt"></i>No.13, 1st Fl, C Block Embassy Heights, Magrath Road Bangalore-560 025 India</li>        
            <li><i class="icon-telephone-icon"></i> <a href="tel:91.80.4150.3500">+91.80.4150.3500</a></a></li>
          </ul>
      </div>

  <div class="entry-content contact-form">
    <div id="contact-form-74 ">
      <form action="http://localhost:8888/supply-wisdom/contact/#contact-form-74" method="post" class="contact-form commentsblock">
      <div class="grunion-field-wrap grunion-field-name-wrap">
        <label for="g74-name" class="grunion-field-label name">Name<span>(required)</span></label>
        <input type="text" name="g74-name" id="g74-name" value="" class="name" required="" aria-required="true">
      </div>
      <div class="grunion-field-wrap grunion-field-email-wrap">
        <label for="g74-email" class="grunion-field-label email">Email<span>(required)</span></label>
        <input type="email" name="g74-email" id="g74-email" value="" class="email" required="" aria-required="true">
      </div>
      <div class="grunion-field-wrap grunion-field-text-wrap">
        <label for="g74-company" class="grunion-field-label text">Company</label>
        <input type="text" name="g74-company" id="g74-company" value="" class="text">
      </div>
      <div class="grunion-field-wrap grunion-field-text-wrap">
        <label for="g74-title" class="grunion-field-label text">Title</label>
        <input type="text" name="g74-title" id="g74-title" value="" class="text">
      </div>
      <div class="grunion-field-wrap grunion-field-textarea-wrap">
        <label for="contact-form-comment-g74-message" class="grunion-field-label textarea">Message</label>
        <textarea name="g74-message" id="contact-form-comment-g74-message" rows="20" class="textarea"></textarea>
      </div>
      <div class="grunion-field-wrap grunion-field-checkbox-multiple-wrap">
        <label for="g74-byregisteringyourdetailsyouagreetoourtermsandconditionsandprivacypolicy" class="grunion-field-label">By Registering your details you agree to our <a href="#">terms and conditions</a> and <a href="#">privacy policy</a> <span>(required)</span></label>
        <label class="grunion-checkbox-multiple-label checkbox-multiple"><input type="checkbox" name="g74-byregisteringyourdetailsyouagreetoourtermsandconditionsandprivacypolicy[]" value="I would like to receive news updates from Supply Wisdom" class="checkbox-multiple"> I would like to receive news updates from Supply Wisdom</label>
        <div class="clear-form"></div>
      </div>
      <p class="contact-submit">
        <input type="submit" value="Submit" class="pushbutton-wide">
        <input type="hidden" id="_wpnonce" name="_wpnonce" value="a9743254d4"><input type="hidden" name="_wp_http_referer" value="/supply-wisdom/contact/">
        <input type="hidden" name="contact-form-id" value="74">
        <input type="hidden" name="action" value="grunion-contact-form">
        <input type="hidden" name="contact-form-hash" value="885568275b6771a94f76a585ffcd1dea78d347c6">
      </p>
      </form>
      </div>	</div>
  </div>
      </section>




	</main><!-- #primary -->

<?php
get_footer();
