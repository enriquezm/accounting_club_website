<?php
/**
 * 	Template Name: Calendar Page
 *
 * @package Club Website
 */
get_header();

// Executive Board Section
$president_image 						= get_field('president_image');
$president_name  						= get_field('president_name');
$president_major						= get_field('president_major');
$president_email						= get_field('president_email');
$president_linkedin						= get_field('president_linkedin');

$vice_president_image 					= get_field('vice_president_image');
$vice_president_name 					= get_field('vice_president_name');
$vice_president_major						= get_field('vice_president_major');
$vice_president_email					= get_field('vice_president_email');
$vice_president_linkedin				= get_field('vice_president_linkedin');

$treasurer_image 						= get_field('treasurer_image');
$treasurer_name 						= get_field('treasurer_name');
$treasurer_major						= get_field('treasurer_major');
$treasurer_email						= get_field('treasurer_email');
$treasurer_linkedin						= get_field('treasurer_linkedin');

$secretary_image 						= get_field('secretary_image');
$secretary_name 						= get_field('secretary_name');
$secretary_major						= get_field('secretary_major');
$secretary_email						= get_field('secretary_email');
$secretary_linkedin						= get_field('secretary_linkedin');

$director_of_pro_rel_image				= get_field('director_of_pro_rel_image');
$director_of_pro_rel_name 				= get_field('director_of_pro_rel_name');
$director_of_pro_rel_major						= get_field('director_of_pro_rel_major');
$director_of_pro_rel_email				= get_field('director_of_pro_rel_email');
$director_of_pro_rel_linkedin			= get_field('director_of_pro_rel_linkedin');

$director_of_internal_affairs_image 	= get_field('director_of_internal_affairs_image');
$director_of_internal_affairs_name 		= get_field('director_of_internal_affairs_name');
$director_of_internal_affairs_major 		= get_field('director_of_internal_affairs_major');
$director_of_internal_affairs_email		= get_field('director_of_internal_affairs_email');
$director_of_internal_affairs_linkedin	= get_field('director_of_internal_affairs_linkedin');

$director_of_student_rel_image 			= get_field('director_of_student_rel_image');
$director_of_student_rel_name			= get_field('director_of_student_rel_name');
$director_of_student_rel_major			= get_field('director_of_student_rel_major');
$director_of_student_rel_email			= get_field('director_of_student_rel_email');
$director_of_student_rel_linkedin		= get_field('director_of_student_rel_linkedin');

$director_of_pub_rel_image				= get_field('director_of_pub_rel_image');
$director_of_pub_rel_name 				= get_field('director_of_pub_rel_name');
$director_of_pub_rel_major 				= get_field('director_of_pub_rel_major');
$director_of_pub_rel_email				= get_field('director_of_pub_rel_email');
$director_of_pub_rel_linkedin			= get_field('director_of_pub_rel_linkedin');

$director_of_human_res_image 			= get_field('director_of_human_res_image');
$director_of_human_res_name				= get_field('director_of_human_res_name');
$director_of_human_res_major				= get_field('director_of_human_res_major');
$director_of_human_res_email			= get_field('director_of_human_res_email');
$director_of_human_res_linkedin			= get_field('director_of_human_res_linkedin');

$director_of_info_systems_image 		= get_field('director_of_info_systems_image');
$director_of_info_systems_name 			= get_field('director_of_info_systems_name');
$director_of_info_systems_major 			= get_field('director_of_info_systems_major');
$director_of_info_systems_email			= get_field('director_of_info_systems_email');
$director_of_info_systems_linkedin		= get_field('director_of_info_systems_linkedin');

$ibc_senator_image 						= get_field('ibc_senator_image');
$ibc_senator_name 						= get_field('ibc_senator_name');
$ibc_senator_major 						= get_field('ibc_senator_major');
$ibc_senator_email						= get_field('ibc_senator_email');
$ibc_senator_linkedin					= get_field('ibc_senator_linkedin');

?>

<section class="success" id="executiveboard">
	<div class="container">
		<h2 class="text-center">Executive Board</h2>

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
					<h5><?php echo $president_major; ?></h5>
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
					<h5><?php echo $vice_president_major; ?></h5>
					<ul class="list-inline social-buttons">
						<li>
							<a href="mailto:<?php echo $vice_president_email; ?>"><i class="fa fa-envelope-o fa-2x"></i></a>
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
					<h5><?php echo $treasurer_major; ?></h5>
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
					<h5><?php echo $secretary_major; ?></h5>
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
					<h5><?php echo $director_of_pub_rel_major; ?></h5>
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
					<h5><?php echo $director_of_internal_affairs_major; ?></h5>
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
					<h5><?php echo $director_of_student_rel_major; ?></h5>
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
					<h5><?php echo $director_of_pub_rel_major; ?></h5>
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
					<h5><?php echo $director_of_human_res_major; ?></h5>
					<ul class="list-inline social-buttons">
						<li>
							<a href="mailto:<?php echo $director_of_human_res_email; ?>"><i class="fa fa-envelope-o fa-2x"></i></a>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<div class = "row">
			<div class ="col-xs-12 col-sm-6 col-md-6 col-lg-6 text-center">
				<div class="board-container">
					<?php if(!empty( $director_of_info_systems_image  ) ) :?>
					<img class="img-circle" src="<?php echo $director_of_info_systems_image['url']; ?>" alt=" <?php echo $director_of_info_systems_image['alt']; ?>" />
					<?php endif; ?>
					<h4><?php echo $director_of_info_systems_name; ?></h4>
					<p class="text-muted">
						Director of Information Systems
					</p>
					<h5><?php echo $director_of_info_systems_major; ?></h5>
					<ul class="list-inline social-buttons">
						<li>
							<a href="mailto:<?php echo $director_of_info_systems_email; ?>"><i class="fa fa-envelope-o fa-2x"></i></a>
						</li>
					</ul>
				</div>
			</div>
			<div class ="col-xs-12 col-sm-6 col-md-6 col-lg-6 text-center">
				<div class="board-container">
					<?php if(!empty( $ibc_senator_image  ) ) :?>
					<img class="img-circle" src="<?php echo $ibc_senator_image['url']; ?>" alt=" <?php echo $ibc_senator_image['alt']; ?>" />
					<?php endif; ?>
					<h4><?php echo $ibc_senator_name; ?></h4>
					<p class="text-muted">
						IBC Senator
					</p>
					<h5><?php echo $ibc_senator_major; ?></h5>
					<ul class="list-inline social-buttons">
						<li>
							<a href="mailto:<?php echo $ibc_senator_email; ?>"><i class="fa fa-envelope-o fa-2x"></i></a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>
