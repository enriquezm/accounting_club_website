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

<section id="recruitment">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
				<h1>Recruitment Week is here!</h1>
				<p>
					Come visit the <b>Accounting Club</b> table in the <b>Shidler</b> hallways during recruitment week! <br/>
					We'll be here from <b>9:30am - 2pm</b>!
				</p>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
				<span><button data-toggle="modal" data-target="#aboutModal" class="btn btn-primary btn-lg">About</button></span>
				<span><button data-toggle="modal" data-target="#memModal" class="btn btn-success btn-lg">Membership</button></span>
			</div>
		</div>
	</div>
</section>

<section class="success" id="membership">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-md-12 col-lg-12 text-center">
				<h2><?php echo $wwa_title; ?></h2>
			</div>
		</div>
		<div class="row">
			<div class ="col-xs-12 col-md-4 col-lg-4 text-center">
				<div class="membership-content">
					<i class="fa fa-university fa-4x"></i>
					<h3><?php echo $left_column_title; ?></h3>
					<p>
						<?php echo $left_column_content; ?>
					</p>
				</div>
			</div>
			<div class ="col-xs-12 col-md-4 col-lg-4 text-center">
				<div class="membership-content">
					<i class="fa fa-user-plus fa-4x"></i>
					<h3><?php echo $middle_column_title; ?></h3>
					<p>
						<?php echo $middle_column_content; ?>
					</p>
				</div>
			</div>
			<div class ="col-xs-12 col-md-4 col-lg-4 text-center">
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

<section class = "success" id="executiveboard">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center section-title">
				<h2><?php echo $eb_section_title; ?></h2>
			</div>
		</div>

		<div class ="row">
			<div class ="col-xs-12 col-sm-4 col-md-4 col-lg-4 text-center">
				<div class="board-container">
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
					</ul>
				</div>
			</div>
			<div class ="col-xs-12 col-sm-4 col-md-4 col-lg-4 text-center">
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
			<div class ="col-xs-12 col-sm-4 col-md-4 col-lg-4 text-center">
				<div class="board-container">
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
					</ul>
				</div>
			</div>
		</div>
		<div class ="row">
			<div class ="col-xs-12 col-sm-4 col-md-4 col-lg-4 text-center">
				<div class="board-container">
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
			<div class ="col-xs-12 col-sm-4 col-md-4 col-lg-4 text-center">
				<div class="board-container">
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
					</ul>
				</div>
			</div>
			<div class ="col-xs-12 col-sm-4 col-md-4 col-lg-4 text-center">
				<div class="board-container">
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
			<div class ="col-xs-12 col-sm-4 col-md-4 col-lg-4 text-center">
				<div class="board-container">
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
			<div class ="col-xs-12 col-sm-4 col-md-4 col-lg-4 text-center">
				<div class="board-container">
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
					</ul>
				</div>
			</div>
			<div class ="col-xs-12 col-sm-4 col-md-4 col-lg-4 text-center">
				<div class="board-container">
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
			<div class ="col-xs-12 col-sm-6 col-md-6 col-lg-6 text-center">
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
			<div class ="col-xs-12 col-sm-6 col-md-6 col-lg-6 text-center">
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
		</div>
	</div>
</section>

<section id="events">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-md-12 col-lg-12 text-center">
				<h2><?php echo $events_title; ?></h2>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12 col-md-12 col-lg-12 text-center">
				<?php echo WP_FullCalendar::calendar($args); ?>
			</div>
		</div>
	</div>
</section>

<section id="contact">
	<div class="container">
		<h2 class="text-center"><?php echo $contact_us_section_title ?></h2>
		<div class="row">
			<div class="col-xs-12 col-md-12 col-md-12 text-center">
				<h3>Accounting Club</h3>
				<p>
					University of Hawaii at Manoa
				</p>
				<p>
					2404 Maile Way, BusAd G201
				</p>
				<p>
					Honolulu, HI 96822
				</p>
			</div>
		</div>
	</div>
</section>
<div class="modal fade" id="aboutModal" tabindex="-1" role="dialog" aria-labelledby="aboutModal">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h2 class="modal-title" id="aboutModal">About Accounting Club</h2>
			</div>
			<div class="modal-body">
				<div class="container-fluid">
					<div class="row">
						<div class="col-xs-12">
							<p>
								Established in 1964, the Accounting Club is a proud Student Chapter of the <b><a href="http://www.imanet.org/">Institute of Management Accountants</a></b> whose main goal is to promote the professional and personal development of its members.
							</p>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-12">
							<p>
								In cooperation with the School of Accountancy, we provide additional perspectives and supplemental information concerning public, private, and governmental accounting through carefully planned social and business-oriented events.
							</p>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-12">
							<p>
								We continue to rank high among the largest student organizations within the Shidler College of Business and welcome students from all academic disciplines.
							</p>
						</div>
					</div>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>
<div class="modal fade" id="memModal" tabindex="-1" role="dialog" aria-labelledby="memModal">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h2 class="modal-title" id="memModal">Joining Accounting Club</h2>
			</div>
			<div class="modal-body">
				<div class="container-fluid">
					<div class="row">
						<div class="col-xs-12">
							<h4><b>The Accounting Club welcomes all students at the University of Hawaii at Manoa.</b></h3>
							<p>
								Fill out a <b><a href="<?php bloginfo(stylesheet_directory); ?>/forms/application.pdf">Membership Application</a></b><br/>
								Membership dues: <b>$40</b> per semester with <b><a href="<?php bloginfo(stylesheet_directory); ?>/forms/remittance.pdf">Remittance Form</a></b><br/>
								Cash and checks are accepted<br/>
							</p>
							<h4><b>Where do I turn in Applications and Dues?</b></h3>
							<p>
								Bring your applications and Dues to:<br/>
								BusAd G201
							</p>
							<p>
								Mail to:<br/>
								Accounting Club<br/>
								University of Hawaii Shidler College of Business<br/>
								2404 Maile Way BusAd E402<br />
								Honolulu, HI 96822
							</p>
							<h4><b>Active Status</b></h4>
							<p>
								Achieving active status is not a requirement to be in the club, although we strongly encourage all members to be active. Obtaining active status in the Accounting Club provides many benefits, including:
							</p>
							<ul>
								<li>Being recognized at the end of the semester </li>
								<li>Having your resume included in a resume booklet that will be sent to various firms </li>
								<li>Obtaining valuable knowledge and experience from participating in a variety of events and interacting with different people. </li>
							</ul>
							<p>
								To obtain active status, you must attend and actively participate in a set amount of all the Accounting Club's offered events. Mandatory events can not be waived unless otherwise approved by the executive board. Active status can not be achieved without fulfilling mandatory events requirements. 
							</p>
							<h4><b>Waivers</b></h4>
							<p>Required events may be waived by participating in any other additional event. Required events may also be waived by fundraising an additional $15.</p>
							<ul>
								<h4>Conditions:</h4>
								<li>One event equals one waiver.</li>
								<li>To waive an event using the General Meetings, you must attend all 5 meetings.</li>
								<li>To waive the General Meetings, only one additional event is needed to waive the 3 General Meetings.</li>
								<li>Only a maximum of two waivers will be allowed.</li>
								<li>Members are required to attend at least one required event in each category to make active status.</li>
							</ul>
							<p>To waive an event please complete and submit a <b><a href="<?php bloginfo(stylesheet_directory); ?>/forms/waiver.pdf">Waiver Form</a></b>. Use one form for each waiver.</p>
						</div>
					</div>
				</div>
				
				
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>