<?php
/**
 * 	Template Name: Candidates Template
 *
 * @package Club Website
 */
get_header();
// Candidate Positions
$vp = 'Vice President';
$treasurer = 'Treasurer';
$ibc_senator = 'IBC Senator';
$dir_of_prof_development = 'Director of Professional Development';
$dir_of_student_rels = 'Director of Student Relations';
$dir_of_internal_affairs = 'Director of Internal Affairs';
$dir_of_pub_rels = 'Director of Public Relations';
$dir_of_human_resources = 'Director of Human Resources';
$dir_of_info_systems = 'Director of Information Systems';

?>

	<div id="candidates" class="container">
		<div class="row">
			<div class="col-xs-12 text-center">
				<h1 class="text-center">Spring '16 	Candidates</h1>
				<p class="blurb">
					Hello everyone! Please take the time to read more and learn about the Spring 2016 Executive Board candidates,
					and thank you to all of you who have decided to run for elections!
				</p>
				<p class="blurb">
					Our election meeting will be on November 19th, so take the time if you haven't already to get to know our candidates!
				</p>
			</div>
		</div>
		<hr/>

		<!-- Vice Presidents -->
		<div class="row">
			<div class="col-xs-12">
				<h2 class="text-center"><?php echo $vp; ?></h2>
			</div>
			<div class ="col-xs-12 col-md-12 text-center">
				<div class="board-container">
					<img class="img-circle" src="<?php echo get_template_directory_uri(); ?>/images/vp_1.jpg" alt="Image" />
					<h4>YeeYan Lim</h4>
					<a href="#vice_president_01" class="btn btn-primary" data-toggle="modal">About Me</a>
				</div>
			</div>
		</div> <!-- row -->

		<!-- Treasurers -->
		<div class="row">
			<div class="col-xs-12">
				<h2 class="text-center"><?php echo $treasurer; ?></h2>
			</div>
			<div class ="col-xs-12 text-center">
				<div class="board-container">
					<img class="img-circle" src="<?php echo get_template_directory_uri(); ?>/images/2016-candidates/treasurer/1/tr_1.jpg" alt="Image" />
					<h4>Andrew Tam</h4>
					<a href="#treasurer_01" class="btn btn-primary" data-toggle="modal">About Me</a>
				</div>
			</div>
		</div> <!-- row -->

		<!-- IBC Senators -->
		<div class="row">
			<div class="col-xs-12">
				<h2 class="text-center"><?php echo $ibc_senator; ?></h2>
			</div>
			<div class ="col-xs-12 text-center">
				<div class="board-container">
					<img class="img-circle" src="<?php echo get_template_directory_uri(); ?>/images/2016-candidates/ibc_senator/1/ibc_1.jpg" alt="Image" />
					<h4>Jared Maron</h4>
					<a href="#ibc_senator_01" class="btn btn-primary" data-toggle="modal">About Me</a>
				</div>
			</div>
		</div> <!-- row -->

		<!-- Director of Professional Development -->
		<div class="row">
			<div class="col-xs-12">
				<h2 class="text-center"><?php echo $dir_of_prof_development; ?></h2>
			</div>
			<div class ="col-xs-12 text-center">
				<div class="board-container">
					<img class="img-circle" src="<?php echo get_template_directory_uri(); ?>/images/2016-candidates/dir_of_prof_rels/1/pr_1.jpg" alt="Image" />
					<h4>Matt Lizada</h4>
					<a href="#dir_of_prof_rels_01" class="btn btn-primary" data-toggle="modal">About Me</a>
				</div>
			</div>
		</div> <!-- row -->

		<!-- Director of Student Relations -->
		<div class="row">
			<div class="col-xs-12">
				<h2 class="text-center"><?php echo $dir_of_student_rels; ?></h2>
			</div>
			<div class ="col-xs-12 col-md-6 text-center">
				<div class="board-container">
					<img class="img-circle" src="<?php echo get_template_directory_uri(); ?>/images/2016-candidates/dir_of_student_rels/1/sr_1.jpg" alt="Image" />
					<h4>Heather Hutchison</h4>
					<a href="#dir_of_student_rels_01" class="btn btn-primary" data-toggle="modal">About Me</a>
				</div>
			</div>
			<div class ="col-xs-12 col-md-6 text-center">
				<div class="board-container">
					<img class="img-circle" src="<?php echo get_template_directory_uri(); ?>/images/2016-candidates/dir_of_student_rels/2/sr_2.jpg" alt="Image" />
					<h4>Troy Uchida</h4>
					<a href="#dir_of_student_rels_02" class="btn btn-primary" data-toggle="modal">About Me</a>
				</div>
			</div>
		</div> <!-- row -->

		<!-- Director of Internal Affairs -->
		<div class="row">
			<div class="col-xs-12">
				<h2 class="text-center"><?php echo $dir_of_internal_affairs; ?></h2>
			</div>
			<div class ="col-xs-12 text-center">
				<div class="board-container">
					<img class="img-circle" src="<?php echo get_template_directory_uri(); ?>/images/2016-candidates/dir_of_internal_affairs/1/ia_1.jpg" alt="Image" />
					<h4>Michelle Tellio</h4>
					<a href="#dir_of_internal_affairs_01" class="btn btn-primary" data-toggle="modal">About Me</a>
				</div>
			</div>
		</div>


		<!-- Director of Public Relations -->
		<div class="row">
			<div class="col-xs-12">
				<h2 class="text-center"><?php echo $dir_of_pub_rels; ?></h2>
			</div>
			<div class ="col-xs-12 text-center">
				<div class="board-container">
					<img class="img-circle" src="<?php echo get_template_directory_uri(); ?>/images/2016-candidates/dir_of_pub_rel/1/pr_1.jpg" alt="Image" />
					<h4>Royce Yamamoto</h4>
					<a href="#dir_of_pub_rels_01" class="btn btn-primary" data-toggle="modal">About Me</a>
				</div>
			</div>
		</div> <!-- row -->

		<!-- Director of Human Resources -->
		<div class="row">
			<div class="col-xs-12">
				<h2 class="text-center"><?php echo $dir_of_human_resources; ?></h2>
			</div>
			<div class ="col-xs-12 text-center">
				<div class="board-container">
					<img class="img-circle" src="<?php echo get_template_directory_uri(); ?>/images/2016-candidates/dir_of_human_resources/1/hr_1.jpg" alt="Image" />
					<h4>Teal Hoopii</h4>
					<a href="#dir_of_human_resources_01" class="btn btn-primary" data-toggle="modal">About Me</a>
				</div>
			</div>
		</div> <!-- row -->

		<!-- Director of Information Systems -->
		<div class="row">
			<div class="col-xs-12">
				<h2 class="text-center"><?php echo $dir_of_info_systems; ?></h2>
			</div>
			<div class ="col-xs-12 col-md-4 text-center">
				<div class="board-container">
					<img class="img-circle" src="<?php echo get_template_directory_uri(); ?>/images/2016-candidates/dir_of_info_systems/1/is_1.jpg" alt="Image" />
					<h4>Kristi Kataoka</h4>
					<a href="#dir_of_info_systems_01" class="btn btn-primary" data-toggle="modal">About Me</a>
				</div>
			</div>

			<div class ="col-xs-12 col-md-4 text-center">
				<div class="board-container">
					<img class="img-circle" src="<?php echo get_template_directory_uri(); ?>/images/2016-candidates/dir_of_info_systems/2/is_2.jpg" alt="Image" />
					<h4>Christopher Moon</h4>
					<a href="#dir_of_info_systems_02" class="btn btn-primary" data-toggle="modal">About Me</a>
				</div>
			</div>

			<div class ="col-xs-12 col-md-4 text-center">
				<div class="board-container">
					<img class="img-circle" src="<?php echo get_template_directory_uri(); ?>/images/2016-candidates/dir_of_info_systems/3/is_3.jpg" alt="Image" />
					<h4>Cullen Cheng</h4>
					<a href="#dir_of_info_systems_03" class="btn btn-primary" data-toggle="modal">About Me</a>
				</div>
			</div>
		</div> <!-- row -->
	</div><!-- #candidates -->

	<!-- Modals -->

	<!-- Vice President Candidates -->
	<div class="modal fade" id="vice_president_01" tabindex="-1" role="dialog" aria-labelledby="Vice President">
	  <div class="modal-dialog modal-lg" role="document">
	    <div class="modal-content">
	      <div class="modal-body row">
							<div class="col-xs-12 col-md-3">
								<img src="<?php echo get_template_directory_uri(); ?>/images/vp_1.jpg" alt="Vice President" />
							</div>
							<div class="col-xs-12 col-md-9">
								<h5 class="cand_position">YeeYan Lim</h5>
								<h5 class="cand_name"><b>For Vice President</b></h5>
								<div class="cand_bio">
									<p>
									Hi AC! My name is YeeYan and I am running to be your next Vice President. Currently, I am a junior double majoring in Accounting and Management. This is my fifth semester in Accounting Club and I have been active in all of the semesters.
									</p>
									<p>
									I believe my past leadership positions will qualify me as the Vice President. Last semester as the Director of Professional Relations, I successfully coordinated 25 professional events while assisting other board members with their duties. Also, as last fall’s Director of Public Relations, I coordinated nine community service events, all of which were successful and organized. As the former Director of Public Relations and Director of Professional Relations, I have had a lot of interactions with general members. If elected, I believe I can offer my knowledge and experience to members and easily approach and guide them if necessary.
									</p>
									<p>
									Next semester, I will be taking 15 credits as well as working an on-campus job. I will be taking two accounting classes and just like the past semesters, I will be able to devote my time and effort to the club.  I understand the responsibilities and hardships that the Vice President will be facing, however, I believe that I will be able to overcome all obstacles and oversee the club, its members, and the executive board. From my past leadership experiences and my dedication to Accounting Club, I hope to give back to the club as your next Vice President.
									</p>
								</div>
							</div>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
	      </div>
	    </div>
	  </div>
	</div>

	<!-- Treasurer -->
	<div class="modal fade" id="treasurer_01" tabindex="-1" role="dialog" aria-labelledby="Vice President">
	  <div class="modal-dialog modal-lg" role="document">
	    <div class="modal-content">
	      <div class="modal-body row">
							<div class="col-xs-12 col-md-3">
								<img src="<?php echo get_template_directory_uri(); ?>/images/2016-candidates/treasurer/1/tr_1.jpg" alt="Vice President" />
							</div>
							<div class="col-xs-12 col-md-9">
								<h5 class="cand_position">Andrew Tam</h5>
								<h5 class="cand_name"><b>For Treasurer</b></h5>
								<div class="cand_bio">
									<p>
									Hey AC! My name is Andrew Tam, and I am running to be your next Treasurer. As of right now, I am a Junior double majoring in Accounting and Management. I have been active in Accounting Club for five semesters, and through these semesters I have gotten to know a lot of people and have seen how the club works.
									</p>
									<p>
									I believe being on board this semester will qualify me as the next Treasurer. This semester being the Director of Internal Affairs, I was able to work closely with the current Treasurer, it gave me the opportunity to learn how and where the position stands in the club. In this position, I was able to run one mandatory event, Car Wash and one of the larger social events, Club Night. In addition to these events, I also handle the fundraisers and providing food for the GM’s. My experiences in this position has taught me a lot on how to be a better leader, manage my time, and handle finances especially for fundraisers and the food. I think this is something that I can translate it into the Treasurer position and also provide guidance for the next Director of Internal Affairs.
									</p>
									<p>
									Next semester, I will be taking 15 credits similar to what I did this semester. I have a part-time job on campus, so I feel that my schedule will be flexible enough to be able to dedicate my time to the club. I recognize the challenges and responsibilities that the Treasurer faces, but I believe that I will be able to overcome them. I am confident that I can fulfill the duties that are required and to go beyond it. I hope to give back as your next Treasurer.
									</p>
								</div>
							</div>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
	      </div>
	    </div>
	  </div>
	</div>

	<!-- IBC Senator -->
	<div class="modal fade" id="ibc_senator_01" tabindex="-1" role="dialog" aria-labelledby="Vice President">
	  <div class="modal-dialog modal-lg" role="document">
	    <div class="modal-content">
	      <div class="modal-body row">
							<div class="col-xs-12 col-md-3">
								<img src="<?php echo get_template_directory_uri(); ?>/images/2016-candidates/ibc_senator/1/ibc_1.jpg" alt="IBC Senator" />
							</div>
							<div class="col-xs-12 col-md-9">
								<h5 class="cand_position">Jared Maron</h5>
								<h5 class="cand_name"><b>For IBC Senator</b></h5>
								<div class="cand_bio">
									<p>
									Hi Everyone!
									</p>
									<p>
									My name is Jared Maron and I am running for the IBC Senator Position. I am currently a Sophomore studying Accounting and Economics. This is my first semester in Accounting Club and I am really enjoying my time. There have been so many people that I have met and friends that I have made, who I am able to recognize and say hello to as I am walking throughout campus. Becoming a part of the Accounting Club has provided me with a people I can call my second family. There is so much to learn and be a part of, so I believe that becoming the IBC Senator will help me to get a feel for a lot more of what Accounting Club is about, as well as the Executive Board. As an entry level position for the Executive Board, this position can help me progress through Board positions and do more for the Club as well as help me to become friends with a lot more of the people. I have always been able to meet deadlines and multi-task, but receiving the IBC Senator position can help me to strengthen these points of mine and also increase other skills that will help me on the Executive Board.
									</p>
								</div>
							</div>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
	      </div>
	    </div>
	  </div>
	</div>

	<!-- Director of Professional Development -->
	<div class="modal fade" id="dir_of_prof_rels_01" tabindex="-1" role="dialog" aria-labelledby="Vice President">
	  <div class="modal-dialog modal-lg" role="document">
	    <div class="modal-content">
	      <div class="modal-body row">
							<div class="col-xs-12 col-md-3">
								<img src="<?php echo get_template_directory_uri(); ?>/images/2016-candidates/dir_of_prof_rels/1/pr_1.jpg" alt="" />
							</div>
							<div class="col-xs-12 col-md-9">
								<h5 class="cand_position">Matthew Lizada</h5>
								<h5 class="cand_name"><b>For Director of Professional Development</b></h5>
								<div class="cand_bio">
									<p>
									Hi AC!
									</p>
									<p>
									My name is Matthew Lizada and I am running to be your next Director of Professional Development. I am a Senior majoring in Accounting and have been in the club for 7 semesters. I have been a part of this club’s development and witnessed the changes over the past three and a half years and want to do the best I can to further the growth of the club. AC has become an integral part of my life and my second family. With the amount of experience and knowledge I have gained through and about the club, I believe I am an excellent candidate for the Director of Professional Development.
									</p>
									<p>
									This semester, I am currently serving as the Director of Public Relations. The Director of Public Relations coordinates the community service events as well as strengthen relationships within the community at large (and the club) by encouraging member’s participation and involvement. The position requires a lot of dedication and has helped to develop the communication skills and teamwork necessary for the Director of Professional Development. With the knowledge and experience I have gained from coordinating 8 successful community service activities, I am confident that I have the necessary skills to plan and facilitate professional development events.
									</p>
									<p>
									The Fall 2015 semester is coming to an end, so keep up the good work and I hope to see you all on November 19th!
									</p>
									<p>
									Matt
									</p>
								</div>
							</div>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
	      </div>
	    </div>
	  </div>
	</div>

	<!-- Director of Student Relations -->
	<div class="modal fade" id="dir_of_student_rels_01" tabindex="-1" role="dialog" aria-labelledby="Vice President">
	  <div class="modal-dialog modal-lg" role="document">
	    <div class="modal-content">
	      <div class="modal-body row">
							<div class="col-xs-12 col-md-3">
								<img src="<?php echo get_template_directory_uri(); ?>/images/2016-candidates/dir_of_student_rels/1/sr_1.jpg" alt="Image" />
							</div>
							<div class="col-xs-12 col-md-9">
								<h5 class="cand_position">Heather Hutchison</h5>
								<h5 class="cand_name"><b>For Director of Student Relations</b></h5>
								<div class="cand_bio">
									<p>
									Dear AC Family,
									</p>
									<p>
									My name is Heather Hutchison and I will be running for the position of Director of Student Relations. I am a senior graduating next semester with my bachelors of Accounting and International Business. I have been in AC for three semesters, the last two being active. After being in AC for so long and getting so much out of the club, I feel like it is time to give back. In what better way to give back than with which events I love the most!
									</p>
									<p>
									Next semester I will only be taking three classes, along with working part time. I have already been able to balance two clubs, four committees, work, and a full class load this semester and I am positive that I will be able to do it again next semester. I will be working less at my job with the help of a student loan, which gives me more time to dedicate to the club.
									</p>
									<p>
									I plan on making socials for all ranges of people, from a sophisticated night at the Amuse Wine bar, an adventurous geocaching hike, a sports themed Super Bowl party, to a lei making worship to help make homemade leis for our graduating Seniors. I also want to make team bonding socials to help everyone get to know one another and meet people they have never seen before. By encourage people to get out of their comfort zones while building club spirit I believe this club with become more welcoming to everyone. As an added bonus, I will be baking a themed homemade desserts for each social event. Please vote for me for Director of Student Relations and I will do my best to make sure that Spring 2016 is a semester to remember.
									</p>
								</div>
							</div>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
	      </div>
	    </div>
	  </div>
	</div>

	<div class="modal fade" id="dir_of_student_rels_02" tabindex="-1" role="dialog" aria-labelledby="Vice President">
	  <div class="modal-dialog modal-lg" role="document">
	    <div class="modal-content">
	      <div class="modal-body row">
							<div class="col-xs-12 col-md-3">
								<img src="<?php echo get_template_directory_uri(); ?>/images/2016-candidates/dir_of_student_rels/2/sr_2.jpg" alt="Image" />
							</div>
							<div class="col-xs-12 col-md-9">
								<h5 class="cand_position">Troy Uchida</h5>
								<h5 class="cand_name"><b>For Director of Student Relations</b></h5>
								<div class="cand_bio">
									<p>
									Hi AC,
									</p>
									<p>
									My name is Troy Uchida and I am running for the position of Director of Student Relations. I am currently a Junior studying for my degree in Accounting. I’ve been an active member of the Accounting Club for the past 2 semesters and have held the position of Inter Business Council Senator during the previous semester. I see the Accounting Club as my home away from home, where I’ve built everlasting friendships that will carry on long after I graduate and well into my professional career. During my time here I have witnessed the club prosper under great leadership and believe that with my experience on board I can contribute to this positive growth once again.
									</p>
									<p>
									My first position on board as the IBC senator gave me insight into my own personal development. During events like Super Clubs day I had to be able to clearly communicate my goals to fellow senators while not offending anyone in the process.  Coordinating events like Meet the Pros Accounting Mixer gave me the tools to plan a major AC event and effectively converse with professionals. These events have all enforced teamwork and communications skills that I believe are key to a successful board member. While on board I also worked at my part-time for Armstong Produce, instilling time management skills that I utilize to this day.
									</p>
									<p>
									My main goal if elected will be to break down the silos of cliques within the club. I want every member to be able to approach each other in the hallways of Shilder and greet each other with a smile and a wave as if there are no awkwardness between them. Through events like Camp, Team Bonding, and Other Socials I believe that this is an attainable goal. I believe that I am a candidate worthy of your vote for Director of Student Relations for Spring 2015.
									</p>
									<p>
									Thank you,
									</p>
									<p>
									Troy Uchida
									</p>
								</div>
							</div>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
	      </div>
	    </div>
	  </div>
	</div>

	<!-- Director of Internal Affairs -->
	<div class="modal fade" id="dir_of_internal_affairs_01" tabindex="-1" role="dialog" aria-labelledby="Vice President">
	  <div class="modal-dialog modal-lg" role="document">
	    <div class="modal-content">
	      <div class="modal-body row">
							<div class="col-xs-12 col-md-3">
								<img src="<?php echo get_template_directory_uri(); ?>/images/2016-candidates/dir_of_internal_affairs/1/ia_1.jpg" alt="Vice President" />
							</div>
							<div class="col-xs-12 col-md-9">
								<h5 class="cand_position">Michelle Tellio</h5>
								<h5 class="cand_name"><b>For Director of Internal Affairs</b></h5>
								<div class="cand_bio">
									<p>
									Hello Accounting Club! My name is Michelle Tellio and I’m running for your Director of Internal Affairs. Currently, I am a junior majoring in accounting and minoring in French. This is my second semester in the club which I have been active in for both semesters. Being in the club has made me grow as a person both professionally and personally. It has been a great experience that I have shared with some of the most amazing people. As a board member, I am willing to go the extra mile to help members have the best experience in the club.
									</p>
									<p>
									In my experience, I have been able to cultivate skills which helped me prepare for this position. Currently, I help with the fundraising events for French Club on campus. I help my advisor plan out events to make sure there will be enough food to be sold and reach our goal to make money. I am also a part of the Manoa Lions Club which has taught me hard work and dedication through community service. With my responsibilities of school, work, and extra-curricular activities, I learned time management and to work hard in everything that I do. These skills will help me as a board member to fulfill all of my duties.
									</p>
									<p>
									Next semester, I will be taking only 15 credits with an on campus job, so I am flexible for any responsibilities that Accounting Club might have. I know that being on board will take a lot of my time and I have to learn a lot of new am willing to put as much time needed to make next semester a great one.
									</p>
								</div>
							</div>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
	      </div>
	    </div>
	  </div>
	</div>

	<!-- Director of Public Relations -->
	<div class="modal fade" id="dir_of_pub_rels_01" tabindex="-1" role="dialog" aria-labelledby="Vice President">
	  <div class="modal-dialog modal-lg" role="document">
	    <div class="modal-content">
	      <div class="modal-body row">
							<div class="col-xs-12 col-md-3">
								<img src="<?php echo get_template_directory_uri(); ?>/images/2016-candidates/dir_of_pub_rel/1/pr_1.jpg" alt="Image" />
							</div>
							<div class="col-xs-12 col-md-9">
								<h5 class="cand_position">Royce Yamamoto</h5>
								<h5 class="cand_name"><b>For Director of Public Relations</b></h5>
								<div class="cand_bio">
									<p>
									Hello Accounting Club! My name is Royce Yamamoto and I am running for the Executive Board position of Public Relations. I am currently a Junior majoring in Pre-Business as I will declare my major as Accounting next semester and this is my second semester in Accounting Club. I believe that through this semester, the events, and the people give me great confidence in running for a position for the upcoming semester.
									</p>
									<p>
									Being in the club has given me a lot of opportunities to grow personally and professionally. I have gotten to meet a lot of great people from joining and believe that I could help members experience the same thing too. The club has given me so much that I feel that this is my chance to give back. Being on board would give me an opportunity to teach, help, and learn from members throughout the club.
									</p>
									<p>
									Next semester I will be taking 15 credits with an on-campus part-time job. In past semesters I have taken 15 credits with two-part time jobs, which I feel have prepared me to be able to put a lot of time into the Executive Board position and also into meeting each and every one of you individually better. 
									</p>
								</div>
							</div>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
	      </div>
	    </div>
	  </div>
	</div>

	<!-- Director of Human Resources -->
	<div class="modal fade" id="dir_of_human_resources_01" tabindex="-1" role="dialog" aria-labelledby="Vice President">
	  <div class="modal-dialog modal-lg" role="document">
	    <div class="modal-content">
	      <div class="modal-body row">
							<div class="col-xs-12 col-md-3">
								<img src="<?php echo get_template_directory_uri(); ?>/images/2016-candidates/dir_of_human_resources/1/hr_1.jpg" alt="Image" />
							</div>
							<div class="col-xs-12 col-md-9">
								<h5 class="cand_position">Teal Hoopii</h5>
								<h5 class="cand_name"><b>For Director of Human Resources</b></h5>
								<div class="cand_bio">
									<p>
									Aloha AC!
									</p>
									<p>
									My name is Teal Hoopii, and I am running for the Director of Human resources position for the Spring 2016 semester. I am currently in my senior year, pursuing a degree in both Accounting & Management. This semester makes my third semester in Accounting Club and second semester as an active member. I also had the wonderful opportunity of being on the board this semester as the Director of Information Systems. Being apart of the board and being able to devote my time and efforts to you all, gave me a greater appreciate for this club and what it offers. I was able to grow personally, socially, emotionally and professionally.
									</p>
									<p>
									My current position on board, which also serves as my first semester on board, as Director of Information Systems, helped me get a better sense of the what the club is about, how my time and commitment really impacts the club, and how my time and efforts benefit the members in a positive way. My position required me to continuously update the events calendar, which showed that I was always on top of my duties, and kept up with changes throughout the semester. I was also responsible for putting together the ledger that was sent out every month. This specific duty proved my ability to set deadlines for the board members to send in their ledger entry, and also set deadlines for myself to send out the ledger in a timely manner. This duty also allowed me to show my artistic skills by creating an appealing ledger to read. As Director of Information Systems, I was also responsible for taking pictures at the AC events. This task gave me the opportunity to take initiative of gathering people to smile for the camera, and capturing action shots throughout the events. Last but not least, I had an amazing opportunity to design and create the club t-shirt for this semesters Super Clubs Day. This gave me an opportunity to again, show off my artistic skills, and provide a t-shirt that would represent Accounting Club, well.
									</p>
									<p>
									Next semester I plan to take 15 credits, which has always been a reasonable amount of credits for me to accomplish throughout my college career. This will allow me to balance school along with dedicating my time to Accounting Club. I will also only be working part-time (15-20 hours), which I currently do this semester, which still gives me a lot of valuable time to offer to AC. I believe that being able to balance more than just one task, is a very valuable skill to being a board member and I believe these skills will make me a great candidate as Director of Human Resources for the Spring 2016 semester.
									</p>
								</div>
							</div>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
	      </div>
	    </div>
	  </div>
	</div>

	<!-- Director of Information Systems -->
	<div class="modal fade" id="dir_of_info_systems_01" tabindex="-1" role="dialog" aria-labelledby="Vice President">
	  <div class="modal-dialog modal-lg" role="document">
	    <div class="modal-content">
	      <div class="modal-body row">
							<div class="col-xs-12 col-md-3">
								<img src="<?php echo get_template_directory_uri(); ?>/images/2016-candidates/dir_of_info_systems/1/is_1.jpg" alt="Image" />
							</div>
							<div class="col-xs-12 col-md-9">
								<h5 class="cand_position">Kristi Kataoka</h5>
								<h5 class="cand_name"><b>For Director of Information Systems</b></h5>
								<div class="cand_bio">
									<p>
									Hi everyone!
									</p>
									<p>
									My name is Kristi Kataoka and I am running to be your next Director of Information Systems. I am currently a Junior planning to major in Finance and International Business. This is my fourth semester as a member of Accounting Club and have continued to enjoy every experience of it. Although I am not an Accounting major, AC has given me an invaluable experience. Not only have I learned more about Accounting itself, but also how professionalism is held in this career. Being in AC has also allowed me to expand my network of not only professionals, but also friendships. I met so many amazing people through joining AC and I really care about everyone in the club, which is why I want to start giving back.
									</p>
									<p>
									When it comes to Information Systems, I would say my skills are quite proficient. I currently work part-time in the Information and Computer Science (ICS) Department on campus as an Assistant Computer Technician. I do a variety of things such as install and maintain both hardware and software in computers as well as develop the software system used the ICS computer labs. These skills will allow me to further improve the AC website, calendar, and monthly ledger if elected. This semester, I also happen to be an Assisting Teaching Assistant (ATA) for the ICS 101B course. Therefore, I am proficient in using the main Microsoft Office programs, such as Word, PowerPoint, and Excel, along with Adobe Photoshop and Dreamweaver. I assist several students with said programs throughout the course both in the lab section as well as during open lab hours. Both working and being an ATA has allowed me to work with a variety of people, including students, faculty, and staff, and it has given me the experience of assisting and teaching. So, if you ever have any questions about computers or computer programs, feel free to ask me.
									</p>
									<p>
									Next semester I am planning to take 12 credits, which will be the least amount of credits I will be taking since starting at UH. Three of the four courses I am planning to take will be stacked on Tuesdays and Thursdays, which will allow me ample time to dedicate to the position and to Accounting Club. Those said classes will not interfere with the Thursday general meeting days. Although I am still working, my job, as mentioned earlier, is on campus and my hours are very flexible. While it may seem like I am very busy, I am very organized and manage my schedule accordingly. I would not take on more than I would be able to handle, especially when it comes to a job like this that requires much commitment. With my skills and experience, I have learned how to work with many different people, with different majors, and different personalities, as well as many different computers and their software and hardware. Thus, I feel that I am worthy of your vote as a candidate for your next Director of Information Systems.
									</p>
								</div>
							</div>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
	      </div>
	    </div>
	  </div>
	</div>

	<div class="modal fade" id="dir_of_info_systems_02" tabindex="-1" role="dialog" aria-labelledby="Vice President">
	  <div class="modal-dialog modal-lg" role="document">
	    <div class="modal-content">
	      <div class="modal-body row">
							<div class="col-xs-12 col-md-3">
								<img src="<?php echo get_template_directory_uri(); ?>/images/2016-candidates/dir_of_info_systems/2/is_2.jpg" alt="Image" />
							</div>
							<div class="col-xs-12 col-md-9">
								<h5 class="cand_position">Christopher Moon</h5>
								<h5 class="cand_name"><b>For Director of Information Systems</b></h5>
								<div class="cand_bio">
									<p>
									Greetings everyone!
									</p>
									<p>
									My name is Christopher Moon, and I hope to be your new Director of Information Systems this Spring 2016!  As a junior pursuing a Bachelors Degree in Accounting, I can understand the dense course material that many of you face and the focus required to overcome such rigorous intellectual and situational obstacles.  As Director of Information Systems, I vow to use my tenacious approach to problem solving to serve all of your technical and resource-related needs.
									</p>
									<p>
									As a hobby-time photographer/social media user, I have five years’ experience using an SLR and have captured photographs across many different cultures, presenting them in both an artistic and thoughtful manner.  Most importantly, I enjoy “capturing the moments” that make an event special, and wish to do the same as AC’s photographer! Also, as the previous Operations Coordinator of a small leadership group called Summit, I have experience planning and executing key events that promoted the vision and direction of a fledgling organization.
									While I believe that my existing skill set will be of great benefit to AC, I am always eager to tackle new challenges and acquire additional skills that will further advance the club.
									</p>
									<p>
									Since joining AC this past semester, my experience has been tremendously positive.  Sharing interests and majors with many of you has made AC feel so familiar and welcoming.  Despite only one semester with you all, I feel as if I have known you my entire life! Cherishing the experiences from this past semester, I look forward to many more with you in the next.  Please allow me to serve on the executive board as a way to give back to this fine community and create an even better experience for future AC members!
									</p>
									<p>
									Warmest regards,
									</p>
									<p>
									Christopher C. Moon
									</p>
								</div>
							</div>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
	      </div>
	    </div>
	  </div>
	</div>

	<div class="modal fade" id="dir_of_info_systems_03" tabindex="-1" role="dialog" aria-labelledby="Vice President">
	  <div class="modal-dialog modal-lg" role="document">
	    <div class="modal-content">
	      <div class="modal-body row">
							<div class="col-xs-12 col-md-3">
								<img src="<?php echo get_template_directory_uri(); ?>/images/2016-candidates/dir_of_info_systems/3/is_3.jpg" alt="Image" />
							</div>
							<div class="col-xs-12 col-md-9">
								<h5 class="cand_position">Cullen Cheng</h5>
								<h5 class="cand_name"><b>For Director of Information Systems</b></h5>
								<div class="cand_bio">
									<p>
									Hey AC!
									</p>
									<p>
									My name is Cullen Cheng and I am running for the position of Director of Information Systems.  I am currently a Sophomore studying Accounting and considering a double major in Management Information Systems.  I have been an active member in Accounting Club for 3 semesters. For the semesters, I have dedicated to the club, I have learned a lot about the members and goals of AC.  AC has helped me expand my horizons on my intrapersonal and interpersonal skills from communicating with the members and professionals.  I want to strengthen the bond in AC and I believe being on board will allow me to accomplish this goal.  It is in my best interest to help maintain a peaceful and cheerful atmosphere for my fellow members.
									</p>
									<p>
									I plan to take 16 credits with one online course and find a flexible campus job for next semester, so I will still have time to fulfill the duties and responsibilities as a board member.  Being a part of AC’s Video Committee and Aloha Banquet IT Committee has deepened my understanding and provided experience for some of the skills such as developing the script, translating the script to a storyboard, editing video clips, and basic HTML/CSS programming skills beneficial for this position. Along with an aspiring interest in technology, I believe I am a potential candidate to be your next Director of Information Systems of Spring 2016.
									</p>
								</div>
							</div>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
	      </div>
	    </div>
	  </div>
	</div>

<?php get_footer(); ?>
