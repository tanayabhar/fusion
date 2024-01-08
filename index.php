<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Fusion
 */

get_header();
?>

<div class="main-content-wrapper">
      <div class="services">
        <div class="active">
          <div class="service-heading-container">
            <div class="line"></div>
            <p class="service-heading">Our services</p>
            <p class="service-tagline">Our team will take your business presence to new level</p>
          </div>
          <div class="services-wrapper match-height group">
            <div class="single-service">
              <img class="i" src="<?php echo get_template_directory_uri() ; ?>/images/i.png" alt="" width="19" height="21">
              <p class="service-title">Strategy.</p>
              <p class="service-desc">Ship it user story iterate engaging co-working intuitive pitch deck hacker prototype SpaceTeam user centered design big data.</p>
              <div class="service-link group">
                <img class="service-details" src="<?php echo get_template_directory_uri() ; ?>/images/image_25.png" alt="" width="13" height="8">
                <p class="service-details-text">See Details</p>
              </div>
            </div>
            <div class="single-service group">
              <img class="k" src="<?php echo get_template_directory_uri() ; ?>/images/k.png" alt="" width="21" height="21">
              <p class="service-title">Branding.</p>
              <p class="service-desc">Ship it user story iterate engaging co-working intuitive pitch deck hacker prototype SpaceTeam user centered design big data.</p>
              <div class="service-link group">
                <img class="service-details" src="<?php echo get_template_directory_uri() ; ?>/images/image_26.png" alt="" width="12" height="8">
                <p class="service-details-text">See Details</p>
              </div>
            </div>
            <div class="single-service group">
              <img class="layer-4" src="<?php echo get_template_directory_uri() ; ?>/images/image_28.png" alt="" width="16" height="21">
              <p class="service-title">Design.</p>
              <p class="service-desc">Ship it user story iterate engaging co-working intuitive pitch deck hacker prototype SpaceTeam user centered design big data.</p>
              <div class="service-link group">
                <img class="service-details" src="<?php echo get_template_directory_uri() ; ?>/images/image_25.png" alt="" width="13" height="8">
                <p class="service-details-text">See Details</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <?php get_template_part( 'homepage/layout', 'project' ); ?>
      <div class="testimonials">
        <div class="testimonial-wrapper">
          <div class="testimonial-heading">
            <div class="line-4"></div>
            <p class="testimonials-2">Testimonials</p>
            <p class="testimonial-text">We have worked with some amazing companies around the world</p>
          </div>
          <div class="company-logos group">
            <img src="<?php echo get_template_directory_uri() ; ?>/images/1.png" alt="" width="152" height="25">
            <img src="<?php echo get_template_directory_uri() ; ?>/images/2.png" alt="" width="71" height="44">
            <img src="<?php echo get_template_directory_uri() ; ?>/images/3.png" alt="" width="92" height="28">
            <img src="<?php echo get_template_directory_uri() ; ?>/images/4.png" alt="" width="68" height="42">
            <img src="<?php echo get_template_directory_uri() ; ?>/images/5.png" alt="" width="116" height="30">
            <img src="<?php echo get_template_directory_uri() ; ?>/images/6.png" alt="" width="84" height="59">
            <img src="<?php echo get_template_directory_uri() ; ?>/images/7.png" alt="" width="76" height="24">
          </div>
          <div class="feedbacks group">
            <div class="single-feedback">
              <div class="feedback-image"></div>
              <p class="feedback-text">“These cartridges can be replaced by the printer ink of similar brand. Compatible Inkjet Cartridge will help you to make extra-ordinary savings with money back guarantee. As soon as the cartridge gets empty the ink that it contains begins to dry”</p>
              <div class="feedback-wrapper">
                <div class="feedback-line"></div>
                <div class="feedback-name">
                  Anthony Watkins
                </div>
              </div>
              <p class="feedback-designation">VP of Product, VISA</p>
            </div>
            </div>
          </div>
        </div>
      </div>
      <div class="team">
        <div class="team-wrapper">
          <div class="heading-5">
            <div class="line-6"></div>
            <p class="team-text">Our Team</p>
            <p class="team-subtext">Our Amazing Team</p>
          </div>
          <!-- <div class="profiles">
            <p class="profile-designation">VP of Business</p>
            <p class="profile-name">Armando Ángeles</p>
            <p class="profile-designation">VP of Product</p>
            <p class="profile-name">Donna Watson</p>
            <p class="profile-designation">VP of Business</p>
            <p class="profile-name">Armando Ángeles</p>
            <p class="profile-designation">Developer</p>
            <p class="profile-name">Nguyễn Thanh</p>
            <p class="profile-designation">Developer</p>
            <p class="profile-name">Nguyễn Thanh</p>
            <p class="profile-designation">Developer</p>
            <p class="profile-name">Nguyễn Thanh</p>
            <p class="profile-designation">Developer</p>
            <p class="profile-name">Nguyễn Thanh</p>
            <div class="row-3 group">
              <div class="name-title group">
                <img class="text-28" src="<?php echo get_template_directory_uri() ; ?>/images/founder_ceo.png" alt="Founder &amp; CEO" width="11" height="91" title="Founder &amp; CEO">
                <img class="text-29" src="<?php echo get_template_directory_uri() ; ?>/images/vincent_gardner.png" alt="Vincent Gardner" width="11" height="130" title="Vincent Gardner">
              </div>
              <div class="col-6 group">
                <div class="single-profile-copy">
                  <div class="image-3"></div>
                  <div class="name-title-2">
                    <p class="text-30">Donna Watson</p>
                    <p class="text-31">VP of Product</p>
                  </div>
                </div>
                <div class="row-4 group">
                  <div class="image-4"></div>
                  <div class="image-5"></div>
                </div>
              </div>
              <div class="col-7 group">
                <div class="single-profile-copy-2">
                  <div class="image-6"></div>
                  <div class="name-title-3">
                    <p class="text-32">Armando Ángeles</p>
                    <p class="text-33">VP of Business</p>
                  </div>
                </div>
                <div class="image-7"></div>
              </div>
              <div class="col-8">
                <div class="single-profile-copy-3">
                  <img class="image-8" src="<?php echo get_template_directory_uri() ; ?>/images/image_6.png" alt="">
                  <div class="name-title-4">
                    <p class="text-34">Nguyễn Thanh</p>
                    <p class="developer-2">Developer</p>
                  </div>
                </div>
                <div class="image-9"></div>
              </div>
            </div>
            <div class="image-10"></div>
            <div class="line-7"></div>
            <div class="line-8"></div>
            <p class="text-35">Vincent is the Founder &amp; CEO of Fusion. He is leading &nbsp;the company to success with his experience &amp; skill. Leader piverate paradigm cortado ship it integrate Space Team parallax persons grok. Parallax food truck fund 360 campaign venture capital pitch deck actionable insight innovate.</p>
          </div> -->
          <div class = "profiles">
          <div class="col-6 group">
                <div class="single-profile-copy">
                  <div class="image-3"></div>
                  <div class="name-title-2">
                    <p class="text-30">Donna Watson</p>
                    <p class="text-31">VP of Product</p>
                  </div>
                </div>
              <!-- </div>
              <div class="col-6 group"> -->
                <div class="single-profile-copy">
                  <div class="image-3"></div>
                  <div class="name-title-2">
                    <p class="text-30">Donna Watson</p>
                    <p class="text-31">VP of Product</p>
                  </div>
                </div>
                <div class="single-profile-copy">
                  <div class="image-3"></div>
                  <div class="name-title-2">
                    <p class="text-30">Donna Watson</p>
                    <p class="text-31">VP of Product</p>
                  </div>
                </div>
                <div class="single-profile-copy">
                  <div class="image-3"></div>
                  <div class="name-title-2">
                    <p class="text-30">Donna Watson</p>
                    <p class="text-31">VP of Product</p>
                  </div>
                </div>
                <div class="single-profile-copy">
                  <div class="image-3"></div>
                  <div class="name-title-2">
                    <p class="text-30">Donna Watson</p>
                    <p class="text-31">VP of Product</p>
                  </div>
                </div>
                <div class="single-profile-copy">
                  <div class="image-3"></div>
                  <div class="name-title-2">
                    <p class="text-30">Donna Watson</p>
                    <p class="text-31">VP of Product</p>
                  </div>
                </div>
                <div class="single-profile-copy">
                  <div class="image-3"></div>
                  <div class="name-title-2">
                    <p class="text-30">Donna Watson</p>
                    <p class="text-31">VP of Product</p>
                  </div>
                </div>
                <div class="single-profile-copy">
                  <div class="image-3"></div>
                  <div class="name-title-2">
                    <p class="text-30">Donna Watson</p>
                    <p class="text-31">VP of Product</p>
                  </div>
                </div>
              </div>
          </div>
        </div>
	  </div>
	  <div class="contact-us">
		  <div class="heading-6">
            <div class="line-9"></div>
            <p class="text-36">Contact us</p>
            <p class="text-37">Let’s talk about the project</p>
          </div>
          <div class="contact-form">
            <div class="row group">
              <div class="col-3">
                <div class="input-active">
                  <p class="text-38">Your Name</p>
                  <p class="text-39">Benjamin Silva</p>
                  <div class="shape"></div>
                </div>
                <div class="input">
                  <p class="company">company</p>
                  <div class="shape-2"></div>
                </div>
              </div>
              <div class="col-4">
                <div class="input-2">
                  <p class="text-40">Your Email</p>
                  <div class="shape-3"></div>
                </div>
                <div class="input-3">
                  <p class="subject">Subject</p>
                  <div class="shape-4"></div>
                </div>
              </div>
            </div>
            <div class="input-4 group">
              <p class="text-41">Your message</p>
              <div class="shape-5"></div>
            </div>
            <div class="button">
              <div class="text-42 group">
                <img class="text-44" src="<?php echo get_template_directory_uri() ; ?>/images/image.png" alt="$" width="18" height="11" title="$">
                <p class="text-43">get in touch</p>
              </div>
            </div>
          </div>
	  </div>
</div>

<?php
get_footer();
