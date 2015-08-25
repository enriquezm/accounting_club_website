<?php
/*
	Template Name: Home Page
*/

//Advanced Custom Fields

// About Us Section
$about_us_title							= get_field('about_section_title');
$about_us_desc							= get_field('about_section_description');

// Executive Board Section
$eb_section_title						= get_field('eb_section_title');
$president_image 						= get_field('president_image');
$president_name  						= get_field('president_name');
$president_email						= get_field('president_email');
$president_linkedin						= get_field('president_linkedin');

$vice_president_image 					= get_field('vice_president_image');
$vice_president_name 					= get_field('vice_president_name');
$vice_president_email					= get_field('vice_president_email');
$vice_president_linkedin				= get_field('vice_president_linkedin');

$treasurer_image 						= get_field('treasurer_image');
$treasurer_name 						= get_field('treasurer_name');
$treasurer_email						= get_field('treasurer_email');
$treasurer_linkedin						= get_field('treasurer_linkedin');

$secretary_image 						= get_field('secretary_image');
$secretary_name 						= get_field('secretary_name');
$secretary_email						= get_field('secretary_email');
$secretary_linkedin						= get_field('secretary_linkedin');

$director_of_pro_rel_image				= get_field('director_of_pro_rel_image');
$director_of_pro_rel_name 				= get_field('director_of_pro_rel_name');
$director_of_pro_rel_email				= get_field('director_of_pro_rel_email');
$director_of_pro_rel_linkedin			= get_field('director_of_pro_rel_linkedin');

$director_of_internal_affairs_image 	= get_field('director_of_internal_affairs_image');
$director_of_internal_affairs_name 		= get_field('director_of_internal_affairs_name');
$director_of_internal_affairs_email		= get_field('director_of_internal_affairs_email');
$director_of_internal_affairs_linkedin	= get_field('director_of_internal_affairs_linkedin');

$director_of_student_rel_image 			= get_field('director_of_student_rel_image');
$director_of_student_rel_name			= get_field('director_of_student_rel_name');
$director_of_student_rel_email			= get_field('director_of_student_rel_email');
$director_of_student_rel_linkedin		= get_field('director_of_student_rel_linkedin');

$director_of_pub_rel_image				= get_field('director_of_pub_rel_image');
$director_of_pub_rel_name 				= get_field('director_of_pub_rel_name');
$director_of_pub_rel_email				= get_field('director_of_pub_rel_email');
$director_of_pub_rel_linkedin			= get_field('director_of_pub_rel_linkedin');

$director_of_human_res_image 			= get_field('director_of_human_res_image');
$director_of_human_res_name				= get_field('director_of_human_res_name');
$director_of_human_res_email			= get_field('director_of_human_res_email');
$director_of_human_res_linkedin			= get_field('director_of_human_res_linkedin');

$director_of_info_systems_image 		= get_field('director_of_info_systems_image');
$director_of_info_systems_name 			= get_field('director_of_info_systems_name');
$director_of_info_systems_email			= get_field('director_of_info_systems_email');
$director_of_info_systems_linkedin		= get_field('director_of_info_systems_linkedin');

$ibc_senator_image 						= get_field('ibc_senator_image');
$ibc_senator_name 						= get_field('ibc_senator_name');
$ibc_senator_email						= get_field('ibc_senator_email');
$ibc_senator_linkedin					= get_field('ibc_senator_linkedin');

$club_advisor_image 					= get_field('club_advisor_image');
$club_advisor_name 						= get_field('club_advisor_name');
$club_advisor_email						= get_field('club_advisor_image');
$club_advisor_linkedin					= get_field('club_advisor_linkedin');

// Testimonial Section
$president_blurb_image					= get_field('president_image');
$president_blurb_title					= get_field('blurb_section_title');
$president_blurb_blurb					= get_field('blurb_section_blurb');

// What We Are (WWA) Section
$wwa_title								= get_field('wwa_title');
$left_column_title						= get_field('left_column_title');
$left_column_content					= get_field('left_column_content');
$middle_column_title					= get_field('middle_column_title');
$middle_column_content					= get_field('middle_column_content');
$right_column_title						= get_field('right_column_title');
$right_column_content					= get_field('right_column_content');

// Events Section
$events_title							= get_field('events_title');

// Contact Us Section
$contact_us_section_title				= get_field('contact_us_section_title');

get_header(); ?>



 <!-- 
This is where the carousel of updates for members 

-GM Reminder
-Events Reminders(Professional, Office Tour,& Workshops)
-Fundraiser Reminders
-Community Service Reminder
-Social Reminders
-->
<!-- <section id="carousel">
         <div id="myCarousel" class="carousel slide" data-ride="carousel">
            
            <ol class="carousel-indicators">
              <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
              <li data-target="#myCarousel" data-slide-to="1"></li>
              <li data-target="#myCarousel" data-slide-to="2"></li>
              <li data-target="#myCarousel" data-slide-to="3"></li>
              <li data-target="#myCarousel" data-slide-to="4"></li>
              <li data-target="#myCarousel" data-slide-to="5"></li>
            </ol>

            
            <div class="carousel-inner" role="listbox">

              <div class="item active">
                <img src="<?php //echo bloginfo('template_directory'); ?>/images/header4.jpg" alt="social" class="img-responsive">
              </div>

              <div class="item">
                <img src="<?php //echo bloginfo('template_directory'); ?>/images/header4.jpg" alt="CS" class="img-responsive">
                <div class="carousel-caption">
                  <h3>Community Service</h3>
                  <p>TBA</p>
                </div>
              </div>

              <div class="item">
                <img src="<?php //echo bloginfo('template_directory'); ?>/images/header4.jpg" alt="fund" class="img-responsive">
                <div class="carousel-caption">
                  <h3>Fundraising</h3>
                  <p>TBA</p>
                </div>
              </div>

              <div class="item">
                <img src="<?php //echo bloginfo('template_directory'); ?>/images/header4.jpg" alt="GM" class="img-responsive">
                <div class="carousel-caption">
                  <h3>General Meeting</h3>
                  <p>TBA</p>
                </div>
              </div>
                
              <div class="item">
                <img src="<?php //echo bloginfo('template_directory'); ?>/images/header4.jpg" alt="prof" class="img-responsive">
                <div class="carousel-caption">
                  <h3>Professional Development</h3>
                  <p>TBA</p>
                </div>
              </div>
            
              <div class="item">
                <img src="<?php //echo bloginfo('template_directory'); ?>/images/header4.jpg" alt="GM" class="img-responsive">
                <div class="carousel-caption">
                  <h3>General Meeting</h3>
                  <p>TBA</p>
                </div>
              </div>

            </div>
          </div>  
</section> ->

<!-- About Us Section -->

<!--
This is the about us section contains general overview of what AC is about

- Image
- Text
- Read More button

-->
<section id="about">
	<div class="container">
		<div class="row">
			<div id="about-headline" class="col-lg-12 text-center">
				<h2><?php echo $about_us_title; ?></h2>
			</div>
		</div>
		<div class="row">
			<div id="about-paragraph" class="col-lg-8 col-lg-offset-2">
				<div id="about-us-content">
					<p>
						<?php echo $about_us_desc; ?>
					</p>
				</div>
			</div>
		</div>
		<!-- NOT YET IMPLEMENTED------------
		<div class="row">
			<div class="col-lg-8 col-lg-offset-2 text-center">
				<a class="btn btn-info btn-lg" href="#about-modal">Read More</a>
			</div>
		</div>
		---------------------------------->
	</div>
</section>

<!-- Membership Section -->

<!--
This is the Membership section and should contain the following info

- How to join
- Benefits
- How to make active status
- Forms for membership, active status, and events
- Reference to an EB member to have more information about waivers and other information

-->
<section class="success" id="membership">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 text-center">
				<h2><?php echo $wwa_title; ?></h2>
			</div>
		</div>
		<div class="row">
			<div class ="col-sm-4 text-center">
				<!-- Should be an Icon not a picture-->
				<div class="membership-content">
					<i class="fa fa-university fa-4x"></i>
					<h3><?php echo $left_column_title; ?></h3>
					<p>
						<?php echo $left_column_content; ?>
					</p>
				</div>
			</div>
			<div class ="col-sm-4 text-center">
				<!-- Should be an Icon not a picture-->
				<div class="membership-content">
					<i class="fa fa-user-plus fa-4x"></i>
					<h3><?php echo $middle_column_title; ?></h3>
					<p>
						<?php echo $middle_column_content; ?>
					</p>
				</div>
			</div>
			<div class ="col-sm-4 text-center">
				<!-- Should be an Icon not a picture-->
				<div class="membership-content">
					<i class="fa fa-users fa-4x"></i>
					<h3><?php echo $right_column_title; ?></h3>
					<p>
						<?php echo $right_column_content; ?>
					</p>
				</div>
			</div>
		</div>
		<!-- NOT YET IMPLEMENTED --------------------
		<div class="row">
			<div class="col-lg-8 col-lg-offset-2 text-center">
					<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#memberModal">
						How to Join
					</button> 
			</div>
		</div>
		-->
	</div>
</section>

<!-- The Board Section -->

<!-- Added more info

- place holder pictures add
- buttons added
-->
<!--
This is the current Executive Boarc section this section will contain

- Picture
- Position
- Name
- Email

-->
<section class = "success" id="executiveboard">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 text-center section-title">
				<h2><?php echo $eb_section_title; ?></h2>
			</div>
		</div>

		<div class ="row">
			<div class ="col-sm-4 text-center">
				<div class="board-container">
	

					<!-- If user has uploaded an image -->
					<?php if(!empty( $president_image  ) ) :?> 

					<img class="img-circle" src="<?php echo $president_image['url']; ?>" alt=" <?php echo $president_image['alt']; ?>" />

					 <?php endif; ?> 


					<h4><?php echo $president_name; ?></h4>
					<p class="text-muted">
						President
					</p>
					<ul class="list-inline social-buttons">
						<li>
							<a href="mailto:<?php echo $president_email; ?>"><i class="fa fa-envelope-o fa-2x"></i></a>
						</li>
						<li>
							<a href="<?php echo $president_linkedin; ?>"><i class="fa fa-linkedin fa-2x"></i></a>
						</li>
					</ul>
				</div>
			</div>
			<div class ="col-sm-4 text-center">
				<div class="board-container">
					<?php if(!empty( $vice_president_image  ) ) :?>

					<img class="img-circle" src="<?php echo $vice_president_image['url']; ?>" alt=" <?php echo $vice_president_image['alt']; ?>" />

					<?php endif; ?>


					<h4><?php echo $vice_president_name; ?></h4>
					<p class="text-muted">
						Vice President
					</p>
					<ul class="list-inline social-buttons">
						<li>
							<a href="mailto:<?php echo $vice_president_email; ?>"><i class="fa fa-envelope-o fa-2x"></i></a>
						</li>
						<li>
							<a href="<?php echo $vice_president_linkedin; ?>"><i class="fa fa-linkedin fa-2x"></i></a>
						</li>
					</ul>
				</div>
			</div>
			<div class ="col-sm-4 text-center">
				<div class="board-container">
					<!-- If user has uploaded an image -->
					<?php if(!empty( $treasurer_image ) ) :?>

					<img class="img-circle" src="<?php echo $treasurer_image['url']; ?>" alt=" <?php echo $treasurer_image['alt']; ?>" />

					<?php endif; ?>

					<h4><?php echo $treasurer_name; ?></h4>
					<p class="text-muted">
						Treasurer
					</p>
					<ul class="list-inline social-buttons">
						<li>
							<a href="mailto:<?php echo $treasurer_email; ?>"><i class="fa fa-envelope-o fa-2x"></i></a>
						</li>
						<li>
							<a href="<?php echo $treasurer_linkedin; ?>"><i class="fa fa-linkedin fa-2x"></i></a>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<div class ="row">
			<div class ="col-sm-4 text-center">
				<div class="board-container">
					<!-- If user has uploaded an image -->
					<?php if(!empty( $secretary_image ) ) :?>

					<img class="img-circle" src="<?php echo $secretary_image['url']; ?>" alt=" <?php echo $secretary_image['alt']; ?>" />

					<?php endif; ?>

					<h4><?php echo $secretary_name; ?></h4>
					<p class="text-muted">
						Secretary
					</p>
					<ul class="list-inline social-buttons">
						<li>
							<a href="mailto:<?php echo $secretary_email; ?>"><i class="fa fa-envelope-o fa-2x"></i></a>
						</li>
					</ul>
				</div>
			</div>
			<div class ="col-sm-4 text-center">
				<div class="board-container">
					<!-- If user has uploaded an image -->
					<?php if(!empty( $director_of_pro_rel_image  ) ) :?>

					<img class="img-circle" src="<?php echo $director_of_pro_rel_image['url']; ?>" alt=" <?php echo $director_of_pro_rel_image['alt']; ?>" />

					<?php endif; ?>

					<h4><?php echo $director_of_pro_rel_name ?></h4>
					<p class="text-muted">
						Director of Professional Relations
					</p>
					<ul class="list-inline social-buttons">
						<li>
							<a href="mailto:<?php echo $director_of_pro_rel_email ?>"><i class="fa fa-envelope-o fa-2x"></i></a>
						</li>
						<li>
							<a href="<?php echo $director_of_pro_rel_linkedin ?>"><i class="fa fa-linkedin fa-2x"></i></a>
						</li>
					</ul>
				</div>
			</div>
			<div class ="col-sm-4 text-center">
				<div class="board-container">
					<!-- If user has uploaded an image -->
					<?php if(!empty( $director_of_internal_affairs_image ) ) :?>

					<img class="img-circle" src="<?php echo $director_of_internal_affairs_image['url']; ?>" alt=" <?php echo $director_of_internal_affairs_image['alt']; ?>" />

					<?php endif; ?>

					<h4><?php echo $director_of_internal_affairs_name; ?></h4>
					<p class="text-muted">
						Director of Internal Affairs
					</p>
					<ul class="list-inline social-buttons">
						<li>
							<a href="mailto:<?php echo $director_of_internal_affairs_email; ?>"><i class="fa fa-envelope-o fa-2x"></i></a>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<div class ="row">
			<div class ="col-sm-4 text-center">
				<div class="board-container">
					<!-- If user has uploaded an image -->
					<?php if(!empty( $director_of_student_rel_image  ) ) :?>

					<img class="img-circle" src="<?php echo $director_of_student_rel_image['url']; ?>" alt=" <?php echo $director_of_student_rel_image['alt']; ?>" />

					<?php endif; ?>

					<h4><?php echo $director_of_student_rel_name; ?></h4>
					<p class="text-muted">
						Director of Student Relations
					</p>
					<ul class="list-inline social-buttons">
						<li>
							<a href="mailto:<?php echo $director_of_student_rel_email; ?>"><i class="fa fa-envelope-o fa-2x"></i></a>
						</li>
					</ul>
				</div>
			</div>
			<div class ="col-sm-4 text-center">
				<div class="board-container">
					<!-- If user has uploaded an image -->
					<?php if(!empty( $director_of_pub_rel_image  ) ) :?>

					<img class="img-circle" src="<?php echo $director_of_pub_rel_image['url']; ?>" alt=" <?php echo $director_of_pub_rel_image['alt']; ?>" />

					<?php endif; ?>

					<h4><?php echo $director_of_pub_rel_name; ?></h4>
					<p class="text-muted">
						Director of Public Relations
					</p>
					<ul class="list-inline social-buttons">
						<li>
							<a href="mailto:<?php echo $director_of_pub_rel_email; ?>"><i class="fa fa-envelope-o fa-2x"></i></a>
						</li>
						<li>
							<a href="<?php echo $director_of_pub_rel_linkedin; ?>"><i class="fa fa-linkedin fa-2x"></i></a>
						</li>
					</ul>
				</div>
			</div>
			<div class ="col-sm-4 text-center">
				<div class="board-container">
					<!-- If user has uploaded an image -->
					<?php if(!empty( $director_of_human_res_image  ) ) :?>

					<img class="img-circle" src="<?php echo $director_of_human_res_image['url']; ?>" alt=" <?php echo $director_of_human_res_image['alt']; ?>" />

					<?php endif; ?>

					<h4><?php echo $director_of_human_res_name; ?></h4>
					<p class="text-muted">
						Director of Human Resources
					</p>
					<ul class="list-inline social-buttons">
						<li>
							<a href="mailto:<?php echo $director_of_human_res_email; ?>"><i class="fa fa-envelope-o fa-2x"></i></a>
						</li>
						<li>
							<a href="<?php echo $director_of_human_res_linkedin; ?>"><i class="fa fa-linkedin fa-2x"></i></a>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<div class = "row">
			<div class ="col-sm-6 text-center">
					<!-- If user has uploaded an image -->
					<?php if(!empty( $director_of_info_systems_image  ) ) :?>

					<img class="img-circle" src="<?php echo $director_of_info_systems_image['url']; ?>" alt=" <?php echo $director_of_info_systems_image['alt']; ?>" />

					<?php endif; ?>

					<h4><?php echo $director_of_info_systems_name; ?></h4>
					<p class="text-muted">
						Director of Information Systems
					</p>
					<ul class="list-inline social-buttons">
						<li>
							<a href="mailto:<?php echo $director_of_info_systems_email; ?>"><i class="fa fa-envelope-o fa-2x"></i></a>
						</li>
						<li>
							<a href="<?php echo $director_of_info_systems_linkedin; ?>"><i class="fa fa-linkedin fa-2x"></i></a>
						</li>
					</ul>
			</div>
			<div class ="col-sm-6 text-center">
					<!-- If user has uploaded an image -->
					<?php if(!empty( $ibc_senator_image  ) ) :?>

					<img class="img-circle" src="<?php echo $ibc_senator_image['url']; ?>" alt=" <?php echo $ibc_senator_image['alt']; ?>" />

					<?php endif; ?>

					<h4><?php echo $ibc_senator_name; ?></h4>
					<p class="text-muted">
						IBC Senator
					</p>
					<ul class="list-inline social-buttons">
						<li>
							<a href="mailto:<?php echo $ibc_senator_email; ?>"><i class="fa fa-envelope-o fa-2x"></i></a>
						</li>
						<li>
							<a href="<?php echo $ibc_senator_linkedin; ?>"><i class="fa fa-linkedin fa-2x"></i></a>
						</li>
					</ul>
			</div>

			<!-- Comment out section for now. There is no Club Advisor at the moment
			<div class ="col-sm-4 text-center">
				<div class="board-container">
					<!-- If user has uploaded an image 
					<?php //if(!empty( $club_advisor_image  ) ) :?>

					<img class="img-circle" src="<?php //echo $club_advisor_image['url']; ?>" alt=" <?php //echo $club_advisor_image['alt']; ?>" />

					<?php //endif; ?>

					<h4><?php //echo $club_advisor_name; ?></h4>
					<p class="text-muted">
						Club Advisor
					</p>
					<ul class="list-inline social-buttons">
						<li>
							<a href=""><i class="fa fa-envelope-o fa-2x"></i></a>
						</li>
						<li>
							<a href="#"><i class="fa fa-linkedin fa-2x"></i></a>
						</li>
					</ul>
				</div>
			</div>
		-->
		</div>
	</div>
</section>

<section id="events">
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center">
				<h2><?php echo $events_title; ?></h2>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div id='calendar'></div>
			</div>
		</div>
	</div>
</section>

<section class="success" id="testimonials">
	<div class="container">
		<div class="row">
			<div class="col-md-4 col-md-offset-2">
				<!-- If user has uploaded an image -->
				<?php if(!empty( $president_blurb_image ) ) :?>

				<img id="president-image" class="img-circle" src="<?php echo $president_blurb_image['url']; ?>" alt=" <?php echo $president_blurb_image['alt']; ?>" />

				<?php endif; ?>
			</div>
			<div class="col-md-6">
				<div class="president-blurb-content">
					<h2><?php echo $president_blurb_title; ?></h2>
					<p>
						<?php echo $president_blurb_blurb; ?>
					</p>
				</div>
			</div>
		</div>
	</div>
</section>

<section id="contact">
	<div class="container">
		<h2 class="text-center"><?php echo $contact_us_section_title ?></h2>
		<div class="row">
			<div class="col-md-12 text-center">
				<h3>Accounting Club</h3>
				<p>
					University of Hawaii at Manoa
				</p>
				<p>
					2404 Maile Way, BusAd E402
				</p>
				<p>
					Honolulu, HI 96822
				</p>
			</div>
		</div>
	</div>
</section>
<!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
<div class="scroll-top page-scroll visible-xs visble-sm">
	<a class="btn btn-primary" href="#page-top"> <i class="fa fa-chevron-up"></i> </a>
</div>

<?php get_footer(); ?>