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
 <section class="solution-banner">
        <div class="container">
            <div class="carousel-wrap">
            <div class="owl-carousel one four">
                    <?php if(have_rows('solutions_banner')) : while(have_rows('solutions_banner')) : the_row();
                      $bannerTitle = get_sub_field('solutions_banner_title');
                      $bannerHeadings = get_sub_field('solutions_banner_heading');
                      $bannerDescription = get_sub_field('solutions_banner_description');
                      $bannerLink = get_sub_field('banner_link');
                      $bannerImage = get_sub_field('solutions_banner_image');
                      $image = get_sub_field('solutions_banner_image');
                    ?>
                    <div class="item">
                        <div class="bnnr-row">
                            <div class="bnnr-text">
                                <h1><?php the_sub_field('solutions_banner_title'); ?><br><span><?php the_sub_field('solutions_banner_heading'); ?></span></h1>
                                <p><?php the_sub_field('solutions_banner_description'); ?></p>
                                <a href="#" class="btn banner-btn">Read more <i class="icon-angle-right-icon"></i> </a>
                            </div>
                            <div class="bnnr-graphic">
                               
                                <img src="<?php echo $image['url']; ?>" alt="solution-banner-graphic">
                            </div>
                        </div>
                    </div>
                    <?php endwhile; endif; ?>
                </div>
            </div>
        </div>
    </section>

    <section class="solution-features">
 <div class="container">
 <h2 class="sw-heading">What can you do with Supply Wisdom? </h2>
 <div class="row">
 <div class="col">
 <div class="hex">
 <div class="hex inner">
 <div class="hex inner2">
 <span class="icon-Assess-icon"></span>
 </div>
 </div>
 </div>
 <h5 >Assess</h5>
 <p>360-degree Risk Assessments</p>
 </div>

 <div class="col">
 <div class="hex">
 <div class="hex inner">
 <div class="hex inner2">
 <span class="icon-data-alerts"></span>
 </div>
 </div>
 </div>
 <h5 >Monitor</h5>
 <p>Real-Time Data, Alerts and Health Ratings</p>
 </div>
 <div class="col">
 <div class="hex">
 <div class="hex inner">
 <div class="hex inner2">
 <span class="icon-evaluation"></span>
 </div>
 </div>
 </div>
 <h5>Evaluate</h5>
 <p>Ask an Analyst, understand and evaluate</p>
 </div>

 <div class="col">
 <div class="hex">
 <div class="hex inner">
 <div class="hex inner2">
 <span class="icon-Act"></span>
 </div>
 </div>
 </div>
 <h5>Act</h5>
 <p>Engage with Third Parties and Internally</p>
 </div>
 </div>
 <a href="" class="read-link">Read More<span class="icon-angle-right-icon"></span></a>
 </div>
 </section>
 <section class="real-time">
 <div class="container">
 <div class="rt-row">
 <div class="lt-col">
 <h3>Continuous, Real-time Risk monitoring </h3>
 <div class="border"></div>
 <p>Supply Wisdom monitors risks and threats to your suppliers and supplier locations in real-time, wherever they are.
We assess, quantify, and rate risk based on their potential to disrupt operations.</p> 

 <p>We review thousands of events every day, reported from hundreds of sources, across 30 or more languages
to bring you only those risks that need your attention. If there is a risk, we will tell you about it.</p>
 </div>
 <div class="rt-col">
 <img src="<?php echo get_template_directory_uri(); ?>/img/Real-Time-Risk-Monitoring.svg" alt="solution-banner-graphic">
 </div>
 </div>
 </div>
 </section>
 <section class="risk-scoring">
 <div class="container">
 <div class="rt-row">
 <div class="lt-col">
 <h3>Objective Risk Scoring </h3>
 <div class="border"></div>
 <p>An effective TPRM program needs a structured approach to defining risks across a global portfolio.
Supply Wisdom offers an objective scoring mechanism to assess and quantify risks, impact and opportunities.</p> 

 <p>Knowing the nature and impact of risk is essential to develop mechanisms for mitigating disruptions.
Strengthen your TPRM with Supply Wisdom’s proprietary risk methodology for third partie</p>
 </div>
 <div class="rt-col">
 <img src="<?php echo get_template_directory_uri(); ?>/img/Objective-Risk_Scoring.svg" alt="solution-banner-graphic">
 </div>
 </div>
 </div>
 </section>

 <section class="real-time">
 <div class="container">
 <div class="rt-row">
 <div class="lt-col">
 <h3>Vendor Risk Assessment</h3>
 <div class="border"></div>
 <p>How does a supplier rate among peers? How has their risk profile changed in the recent past? What risks can they pose to your operations?
Which events affected their risk scores? </p> 

 <p>Get a 360-degree view with our comprehensive Vendor Risk Assessment for all your critical third parties.
Supply Wisdom Vendor Risk Assessments are the most comprehensive out there.</p>
 </div>
 <div class="rt-col">
 <img src="<?php echo get_template_directory_uri(); ?>/img/Vendor-Risk-Assessment.svg" alt="solution-banner-graphic">
 </div>
 </div>
 </div>
 </section>
 <section class="risk-scoring">
 <div class="container">
 <div class="rt-row">
 <div class="lt-col">
 <h3>Ask An Analyst </h3>
 <div class="border"></div>
 <p>Uncertain about what an alert could mean for you? Have a query about our guidance for a specific situation?
Need more information to support critical decision making regarding your third parties?</p> 

 <p>Ask our Analysts and we will supplement existing insight with tailored research.
Supply Wisdom Analysts are experts in third-party risk and their guidance is part of your subscription.

 </p>
 </div>
 <div class="rt-col">
 <img src="<?php echo get_template_directory_uri(); ?>/img/Ask-An-Analyst.svg" alt="solution-banner-graphic">
 </div>
 </div>
 </div>
 </section>

 <section class="real-time">
 <div class="container">
 <div class="rt-row">
 <div class="lt-col">
 <h3>Simple Subscription Pricing</h3>
 <div class="border"></div>
 <p>Pick the third parties – suppliers, countries or cities - that you want to monitor based on their risk levels.
Watch data and insight flow into your Supply Wisdom dashboard. No limits on users.</p> 

 <p>Add, remove, switch third parties based on your changing business needs.
Supply Wisdom provides a flexible, multi-tier approach so that you pay only for what you need.</p>
 </div>
 <div class="rt-col">
 <img src="<?php echo get_template_directory_uri(); ?>/img/Simple-Subsription-Pricing.svg" alt="solution-banner-graphic">
 </div>
 </div>
 </div>
 </section>
 <section class="risk-scoring">
 <div class="container">
 <div class="rt-row">
 <div class="lt-col">
 <h3>Opportunities, Not Just Risk</h3>
 <div class="border"></div>
 <p>Enterprises use Supply Wisdom for more than risk monitoring.
Supply Wisdom is a critical decision support tool for supplier consolidation, contract re-negotiations, bid evaluations, and selections.
 </p> 

 <p>Supply Wisdom offers data and insight about opportunities that you can leverage to reduce spend and create value.
Be aware of opportunities to generate value with Supply Wisdom.

 </p>
 </div>
 <div class="rt-col">
 <img src="<?php echo get_template_directory_uri(); ?>/img/Opportunities.svg" alt="solution-banner-graphic">
 </div>
 </div>
 </div>
 </section>

 <section class="real-time">
 <div class="container">
 <div class="rt-row">
 <div class="lt-col">
 <h3>Integrate with TPRM</h3>
 <div class="border"></div>
 <p>If you use a Third Party Risk Management (TPRM) platform, integrate Supply Wisdom with very little to no coding.
Get Supply Wisdom’s risk alerts and Vendor Risk Assessments within your TPRM. </p> 

 <p>Supply Wisdom presents you a single source of truth about all your third parties.
Arm your TPRM team with Supply Wisdom risk alerts and intelligence.</p>
 </div>
 <div class="rt-col">
 <img src="<?php echo get_template_directory_uri(); ?>/img/TPRM.svg" alt="solution-banner-graphic">
 </div>
 </div>
 </div>
 </section>
 <section class="risk-scoring">
 <div class="container">
 <div class="rt-row">
 <div class="lt-col">
 <h3>Zero Friction User Experience</h3>
 <div class="border"></div>
 <p>Using Supply Wisdom is as easy as logging in.
No setup needed because Supply Wisdom is available on the cloud as a SaaS platform.
Supply Wisdom offers the same seamless experience on any device.
 
 </p> 

 <p>Supply Wisdom has a responsive User Experience that is designed to help you consume and act on alerts.
Never miss a critical risk alert.

 </p>
 </div>
 <div class="rt-col">
 <img src="<?php echo get_template_directory_uri(); ?>/img/Zero-Friction-UE.svg" alt="solution-banner-graphic">
 </div>
 </div>
 </div>
 </section>
 <a href="" class="read-link risk-read">Read More<span class="icon-angle-right-icon "></span></a>
 <!-- sw-subscription -->
 <section class="sw-subscription">
 <div class="container">
 <h2 class="sw-heading">Supply Wisdom Subscriptions </h2>
 <p class="sw-para">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
sed do eiusmod tempor incididunt ut ero labore et dolore magna aliqua.
 </p>
 <div class="timeline">
 <div class="risk-timeline">
 <div class="timeline-bullets">
 <div class="bullets"></div>
 <div class="vertical-line"></div>
 </div>
 <div class="timeline-text">
 <h4>High Risk - Third Party</h4>
 <h5>Overall Health Monitoring</h5>
 <p>Comprehensive risk monitoring and risk scores across 350+ data points for 9 categories of third party risk;
real-time risk alerts and 5 level impact assessment with guidance.</p>
 </div>
 </div>

 <div class="risk-timeline">
 <div class="timeline-bullets">
 <div class="bullets"></div>
 <div class="vertical-line"></div>
 </div>
 <div class="timeline-text">
 <h4>Elevated Risk - Third Party</h4>
 <h5>Focused Health Monitoring</h5>
 <p>Comprehensive risk monitoring and risk scores across 2
categories of third party risk with real-time risk alerts.</p>
 </div>
 </div>

 <div class="risk-timeline">
 <div class="timeline-bullets">
 <div class="bullets"></div>
 <div class="vertical-line"></div>
 </div>
 <div class="timeline-text">
 <h4>Moderate Risk - Third Party</h4>
 <h5>Basic Health Monitoring</h5>
 <p>Comprehensive risk monitoring and risk scores across 2 categories
of third party risk with real-time risk alerts.</p>
 </div>
 </div>

 <div class="risk-timeline">
 <div class="timeline-bullets">
 <div class="bullets"></div>
 <div class="vertical-line"></div>
 </div>
 <div class="timeline-text">
 <h4>Low Risk - Third Party</h4>
 <h5>Basic Health Monitoring</h5>
 <p>One time comprehensive risk assessment focused on financial risk with ongoing real-time risk alerts.</p>
 </div>
 </div>

 <div class="risk-timeline">
 <div class="timeline-bullets">
 <div class="bullets"></div>
 <!-- <div class="vertical-line"></div> -->
 </div>
 
 </div>
 </div>
 

 <a href="" class="read-link">Read More<span class="icon-angle-right-icon"></span></a>
 </div>
 </section>


 <section class="monitoring">
 <div class="container">
 <h2 class="sw-heading">Supply Wisdom Risk Methodology</h2>
 <p class="sw-para">Supply Wisdom quantifies supplier and location risk based on an objective methodology, which includes the following parameters:</p>
 <div class="location">
 <h3>Location Risk Monitoring</h3>
 <p>Supply Wisdom monitors risks and threats to your suppliers and supplier locations in real-time,
wherever they are. We assess, quantify, and rate risk based on their potential to disrupt operations. </p>
 <div class="risk-grid">
 <div class="risk-item">
 <div class="risk-icon">
 <span class="icon-noun_economics_2000847"></span>
 </div>
 <div class="risk-content">
 <h4>Macro-Economic Risk</h4>
 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed .</p>
 </div>
 
 
 </div>
 <div class="risk-item">
 <div class="risk-icon">
 <span class="icon-Security"></span>
 </div>
 <div class="risk-content">
 <h4>Legal, Security & Compliance Risk</h4>
 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed .</p>
 </div>
 
 
 </div>
 <div class="risk-item">
 <div class="risk-icon">
 <span class="icon-Business-Risk"></span>
 </div>
 <div class="risk-content">
 <h4>Business Risk</h4>
 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed .</p>
 </div>
 
 
 </div>
 <div class="risk-item">
 <div class="risk-icon">
 <span class="icon-Financial-Risk"></span>
 </div>
 <div class="risk-content">
 <h4>Financial Risk</h4>
 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed .</p>
 </div>
 
 
 </div>

 <div class="risk-item">
 <div class="risk-icon">
 <span class="icon-Scalability-Risk"></span>
 </div>
 <div class="risk-content">
 <h4>Scalability Risk</h4>
 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed .</p>
 </div>
 
 
 </div>
 <div class="risk-item">
 <div class="risk-icon">
 <span class="icon-Infrastructure-Risk"></span>
 </div>
 <div class="risk-content">
 <h4>Infrastructure Risk</h4>
 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed .</p>
 </div>
 
 
 </div>
 <div class="risk-item">
 <div class="risk-icon">
 <span class="icon-Geo-Political-Risk"></span>
 </div>
 <div class="risk-content">
 <h4>Geo-Political Risk</h4>
 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed .</p>
 </div>
 
 
 </div>
 <div class="risk-item">
 <div class="risk-icon">
 <span class="icon-Quality-of-Life"></span>
 </div>
 <div class="risk-content">
 <h4>Quality of Life</h4>
 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed .</p>
 </div>
 
 
 </div>

 
 
 </div>

 <a href="" class="read-link">Read More<span class="icon-angle-right-icon"></span></a>
 </div>

 <!-- supplier-risk monitoring -->
 <div class="location">
 <h3>Supplier Risk Monitoring</h3>
 <p>Supply Wisdom monitors risks and threats to your suppliers and supplier locations in real-time, wherever they are.
We assess, quantify, and rate risk based on their potential to disrupt operations. </p>
 <div class="risk-grid">
 <div class="risk-item">
 <div class="risk-icon">
 <span class="icon-noun_corporate-management_1874102"></span>
 </div>
 <div class="risk-content">
 <h4>Governance Risk</h4>
 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed .</p>
 </div>
 
 
 </div>
 <div class="risk-item">
 <div class="risk-icon">
 <span class="icon-Security"></span>
 </div>
 <div class="risk-content">
 <h4>Legal, Security & Compliance Risk</h4>
 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed .</p>
 </div>
 
 
 </div>
 <div class="risk-item">
 <div class="risk-icon">
 <span class="icon-Financial-Risk"></span>
 </div>
 <div class="risk-content">
 <h4>Financial Risk</h4>
 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed .</p>
 </div>
 
 
 </div>
 <div class="risk-item">
 <div class="risk-icon">
 <span class="icon-Client-Risk"></span>
 </div>
 <div class="risk-content">
 <h4>Client Risk</h4>
 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed .</p>
 </div>
 
 
 </div>

 <div class="risk-item">
 <div class="risk-icon">
 <span class="icon-Service-Maturity-Risk"></span>
 </div>
 <div class="risk-content">
 <h4>Service Maturity Risk</h4>
 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed .</p>
 </div>
 
 
 </div>
 <div class="risk-item">
 <div class="risk-icon">
 <span class="icon-Thought-Leadership-Risk"></span>
 </div>
 <div class="risk-content">
 <h4>Thought Leadership Risk</h4>
 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed .</p>
 </div>
 
 
 </div>
 <div class="risk-item">
 <div class="risk-icon">
 <span class="icon-Partners-Alliances-Risk"></span>
 </div>
 <div class="risk-content">
 <h4>Partners / Alliances Risk</h4>
 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed .</p>
 </div>
 
 
 </div>
 <div class="risk-item">
 <div class="risk-icon">
 <span class="icon-Infrastructure-Risk"></span>
 </div>
 <div class="risk-content">
 <h4>Infrastructure Risk</h4>
 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed .</p>
 </div>
 
 
 </div>

 
 
 </div>

 <a href="" class="read-link">Read More<span class="icon-angle-right-icon"></span></a>
 </div>
 </div>
 </section>
 </main><!-- #primary -->
<?php
get_footer();
