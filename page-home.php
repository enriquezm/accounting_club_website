<?php
/*
	Template Name: Home Page
*/

//Advanced Custom Fields

// About Us Section
$about_us_title							= get_field('about_section_title');
$about_us_desc							= get_field('about_section_description');

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
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center about">
				<h1 id="wwwtitle">Accounting Club at UH Manoa</h1>
				<p>
					Established in 1964, the Accounting Club is a proud Student Chapter of the <a href="http://www.imanet.org/">Institute of Management Accountants</a> whose main goal is to promote the professional and personal development of its members.
				</p>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
				<button data-toggle="modal" data-target="#aboutModal" class="btn btn-primary btn-lg">Read More</button>
			</div>
		</div>
	</div>
</section>

<section class="success" id="membership">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 text-center">
				<h2><?php echo $wwa_title; ?></h2>
			</div>
		</div>
		<div class="row">
			<div class ="col-xs-12 col-md-4 text-center membership-content">
					<i class="fa fa-university fa-4x"></i>
					<h3><?php echo $left_column_title; ?></h3>
					<p>
						<?php echo $left_column_content; ?>
					</p>
			</div>
			<div class ="col-xs-12 col-md-4 text-center membership-content">
					<i class="fa fa-user-plus fa-4x"></i>
					<h3><?php echo $middle_column_title; ?></h3>
					<p>
						<?php echo $middle_column_content; ?>
					</p>
			</div>
			<div class ="col-xs-12 col-md-4 text-center membership-content">
					<i class="fa fa-users fa-4x"></i>
					<h3><?php echo $right_column_title; ?></h3>
					<p>
						<?php echo $right_column_content; ?>
					</p>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
				<button data-toggle="modal" data-target="#memModal" class="btn btn-success btn-lg">How to Join</button>
			</div>
		</div>
	</div>
</section>

<div class="modal fade" id="aboutModal" tabindex="-1" role="dialog" aria-labelledby="aboutModal">
	<div class="modal-dialog modal-lg" role="document">
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
	<div class="modal-dialog modal-lg" role="document">
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
