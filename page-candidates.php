<?php
/**
 * 	Template Name: Candidates Template
 *
 * @package Club Website
 */
get_header();

// TODO: Need to make content dynamic, currently needs to be manually updated.

// Candidate Positions
$president = 'President';
$vp = 'Vice President';
$secretary = 'Secretary';
$treasurer = 'Treasurer';
$ibc_senator = 'IBC Senator';
$dir_of_prof_development = 'Director of Professional Development';
$dir_of_student_rels = 'Director of Student Relations';
$dir_of_internal_affairs = 'Director of Internal Affairs';
$dir_of_pub_rels = 'Director of Public Relations';
$dir_of_human_resources = 'Director of Human Resources';
$dir_of_info_systems = 'Director of Information Systems';

?>
	<div id="blurb-section" class="container">
		<div class="row">
			<div class="col-xs-12 col-md-4">
				<h1 class="text-center">Spring '17 Candidates</h1>
			</div>

			<div class="col-xs-12 col-md-8">
				<p class="blurb">
					Hello everyone! Please take the time to read more and learn about the <b>Spring 2017</b> Executive Board candidates,
					and thank you to all of you who have decided to run for elections!
				</p>
				<p class="blurb">
					Our election meeting will be on <b>Thursday, November 17th</b> so take the time if you haven't already to get to know our candidates!
				</p>
			</div>
		</div>
	</div>
	<div id="candidates" class="container-fluid">

		<!-- Vice President -->
		<div class="row">
			<div class="col-xs-12">
				<h2>Running for: <b><?php echo $vp; ?></b></h2>
			</div>
			<div class="col-xs-12 col-md-2 col-md-offset-3">
				<img class="img-circle img-responsive" src="<?php echo get_template_directory_uri(); ?>/images/Spring-2017-candidates/VP.jpg" alt="vp" />
			</div>

			<div class ="col-xs-12 col-md-6">
				<div class="board-container cand-details">
					<h4>Lorren Chun</h4>
					<p>
						Hi AC! My name is Lorren Chun and I am running for Vice President. I am currently a Junior double majoring in Accounting and Management Information Systems. Accounting Club has provided me with friends, opportunities, knowledge, and memories and I would be grateful for the chance to serve our club for two more semesters on board. <br>
						With my experiences on board this past semester, I hope to take what I’ve learned about myself and the club to provide direction and input on the club’s future as well as advise new incoming board members while continuing to learn from the previous members. I hope to give back to the club that’s provided me with great opportunities, memories, and friends. Accounting Club and the ARC are like a second home to me. They are a safe haven and a place where I know I can go and be at ease. As the Vice President, I hope to take action to extend my sentiments about Accounting Club to all members ensuring that everyone feels at home and part of the family.<br>
						My current position on board is centered around service. I hope to continue that personal theme for myself during the rest of my time on board.  While my position may not be directly involved with giving back to the community, I will focus on serving the club through my personal actions and decisions. I will serve with my time and efforts to ensure the success of the members and the club in the future. I humbly ask for your vote to allow me to further be of service to Accounting Club and its members. <br>
					</p>
					<a href="#vp_01" class="btn btn-primary" data-toggle="modal">Read More</a>
				</div>
			</div>
		</div> <!-- row -->
		<hr/>

		<!-- Secretary -->
		<!-- <div class="row">
			<div class="col-xs-12">
				<h2>Running for: <b><?php echo $dir_of_prof_development; ?></b></h2>
			</div>
			<div class="col-xs-12 col-md-2 col-md-offset-3">
				<img class="img-circle" src="<?php echo get_template_directory_uri(); ?>/images/fall-2017-candidates/secretary.jpg" alt="Treasurer" />
			</div>
			<div class ="col-xs-12 col-md-6">
				<div class="board-container cand-details">
					<h4>Jason Au</h4>
					<p>
						Hi AC! <br>
						My name is Jason Au and I am running to be your next Director of Professional Development.  I am a Senior majoring in Accounting and have been in the club for five semesters. I have been a part of this club’s development and witnessed the changes over the past three years and want to do the best I can to further the growth of the club. AC has become an integral part of my life and my second family. I am currently serving as the Director of Human Resources and have the experience and knowledge of how AC operates and with the amount of experience and knowledge I have gained through my time in the club, I believe I am an excellent candidate for the Director of Professional Development. This position requires a lot of dedication, communication skills, and teamwork necessary for the Director of Professional Development to be successful. With the knowledge and experience, I have gained from being active for five straight semesters and serving on board, I am confident that I have the necessary skills to be a great Director of Professional Development. I am excited for the Spring 2017 semester! <br>
						-Jason Au
					</p>
					<a href="#secretary_01" class="btn btn-primary" data-toggle="modal">Read More</a>
				</div>
			</div> -->
		<!-- </div>   -->
		<!-- <hr /> -->

		<!-- Director of Professional Development -->
		<div class="row">
			<div class="col-xs-12">
				<h2>Running for: <b><?php echo $dir_of_prof_development; ?></b></h2>
			</div>
			<div class="col-xs-12 col-md-2 col-md-offset-3">
				<img class="img-circle" src="<?php echo get_template_directory_uri(); ?>/images/Spring-2017-candidates/PD.jpg" alt="Treasurer" />
			</div>
			<div class ="col-xs-12 col-md-6">
				<div class="board-container cand-details">
					<h4>Jason Au</h4>
					<p>
						Hi AC! <br>
						My name is Jason Au and I am running to be your next Director of Professional Development.  I am a Senior majoring in Accounting and have been in the club for five semesters. I have been a part of this club’s development and witnessed the changes over the past three years and want to do the best I can to further the growth of the club. AC has become an integral part of my life and my second family. I am currently serving as the Director of Human Resources and have the experience and knowledge of how AC operates and with the amount of experience and knowledge I have gained through my time in the club, I believe I am an excellent candidate for the Director of Professional Development. This position requires a lot of dedication, communication skills, and teamwork necessary for the Director of Professional Development to be successful. With the knowledge and experience, I have gained from being active for five straight semesters and serving on board, I am confident that I have the necessary skills to be a great Director of Professional Development. I am excited for the Spring 2017 semester! <br>
						-Jason Au
					</p>
					<a href="#pro_development_01" class="btn btn-primary" data-toggle="modal">Read More</a>
				</div>
			</div>
		</div> <!-- row -->
		<hr />

		<!-- Director of Internal Affairs -->
		<div class="row">
			<div class="col-xs-12">
				<h2>Running for: <b><?php echo $dir_of_internal_affairs; ?></b></h2>
			</div>
			<div class="col-xs-12 col-md-2 col-md-offset-3">
				<img class="img-circle" src="<?php echo get_template_directory_uri(); ?>/images/Spring-2017-candidates/IA.jpg" alt="IBC Senator" />
			</div>
			<div class ="col-xs-12 col-md-6">
				<div class="board-container cand-details">
					<h4>Jamie-Ryan Aranaydo</h4>
					<p>
						Hey  AC!<br>
						My name is Jamie-Ryan Aranaydo, and I am running for the position of Director of Internal Affairs this upcoming Spring 2018.  I ‘ve just started my first semester here at Shidler College of Business and am pursuing degrees in Accounting and MIS. My experiences so far in accounting club has been wonderful. Working on achieving active status has allowed me to meet a lot of great people here in the club. I believe that I haven’t met everyone in club just yet, but by serving on board, I hope to get to know each and every one you.<br>
						As Director of Information Systems, my role is to provide leadership for time management and responsibility tracking. My required duties are to coordinate fundraising opportunities, manage general meeting potlucks, handle super club’s day meals, oversee the carwash event, and fund tracking for each of my responsibilities. <br>
						I’ve worked at restaurants which serve take out, take preorders on catering, and had fundraising opportunities. My responsibilities for the restaurants were to make sure that all orders got out on time, from aspects of front help and cook, tracking fundraisings and donations, managing inventory and prepayments, and money handling. From my experiences, I believe that I am capable of fulfilling all my duties and much more.<br>
						Please allow me to serve on the executive board as a way to provide the club and its members with my time management and responsibility tracking skills. <br>
						Sincerely,<br>
						Jamie-Ryan Aranaydo
					</p>
					<a href="#dir_of_internal_affairs_01" class="btn btn-primary" data-toggle="modal">Read More</a>
				</div>
			</div>
		</div> <!-- row -->
		<hr />

		<!-- Director of Student Relations -->
		<div class="row">
			<div class="col-xs-12">
				<h2>Running for: <b><?php echo $dir_of_student_rels; ?></b></h2>
			</div>
			<div class="col-xs-12 col-md-2 col-md-offset-3">
				<img class="img-circle" src="<?php echo get_template_directory_uri(); ?>/images/Spring-2017-candidates/SR.jpg" alt="Director of Professional Development" />
			</div>
			<div class ="col-xs-12 col-md-6">
				<div class="board-container cand-details">
					<h4>Michael Jitchaku</h4>
					<p>
						Hey AC! My name is Michael Jitchaku, and I’m running for the position of Director of Student Relations. I am currently a Sophomore in the Shidler College of Business majoring in General Business. Being an active member in AC has given me opportunities and memories that are unforgettable. Personally, the events that I attended and enjoyed the most were the socials. These events allowed me to meet and become closer to the people that make up AC. While being on the fun end of those events, I believe that I am capable of now being on the other side that coordinates these events. For me I believe that I have gained experiences from playing baseball that have taught me many valuable life lessons that can be applied while serving as a member of the Executive Board. While I have no direct leadership experience, I believe that I have a strong foundation including a positive attitude that will allow me to excel in the role as Director of Student Relations. <br>
						As the Director of Social Relations, it would be my goal to promote an environment within AC that allows for the growth of current and budding relationships. The fact that AC is one of the larger clubs in Shidler means it can sometimes be difficult for new relationships to form, when current relationships are comfortable. As a Director of Social Relations, it would be of utmost importance to promote the building of new connections as well as the strengthening of old ones. One of things I would do includes promoting the ARC a lot more, because whether it’s for chillaxing or studying, it’s there for the members and it’s an easy starting point for members to meet at.<br>
						In the upcoming spring, I plan on taking 17 credits, while still maintaining an on-campus job. With my schedule, I have enough flexibility to devote myself to not only being successful in fulfilling my duties if elected to be your next Director of Student Relations, but to become someone who will be able to grow and help those around me to grow as well. <br>
					</p>
					<a href="#dir_of_student_rels_01" class="btn btn-primary" data-toggle="modal">Read More</a>
				</div>
			</div>
		</div> <!-- row -->
		<hr />

		<!-- Director of Public Relations -->
		<div class="row">
			<div class="col-xs-12">
				<h2>Running for: <b><?php echo $dir_of_pub_rels; ?></b></h2>
			</div>
			<div class="col-xs-12 col-md-2 col-md-offset-3">
				<img class="img-circle" src="<?php echo get_template_directory_uri(); ?>/images/Spring-2017-candidates/PR.jpg" alt="Director of Professional Development" />
			</div>
			<div class ="col-xs-12 col-md-6">
				<div class="board-container cand-details">
					<h4>YiHua Cheng</h4>
					<p>
						Hey AC! My name is YiHua Cheng and I am running for Director of Public Relations for this upcoming Spring semester. I am currently a junior studying Accounting at the Shidler College of Business and I have been a member of AC for almost a year. As I conclude my 2nd semester in Accounting Club, I can confidently say that AC has been a place that provided several invaluable experiences and irreplaceable relationships, which molded me into the person that I am today. I would like to serve as the Director of Public Relations because I want to give back to the club and community for supporting me all of this time.  <br>
						As Director of Public Relations, my goal is to build a long-lasting connection between Accounting club and the community through volunteer services. Not only will we be giving back to the community, but we will also be able to stimulate personal growth, build relationships, and promote environmental awareness. As Director of Public Relations, I will make sure that we are able to accomplish those goals by contacting community service organizations and encouraging everyone to attend more than the active status minimum.  <br>
						Partaking in Executive Board requires several skills such as strong leadership skills, effective communication, and time management, all in which I believe I possess. I plan to utilize the skills I’ve acquired from my experiences with the UH Manoa Marching Band and Color Guard Leadership Team, and apply it to this position in hopes to make Accounting Club even greater than it already is. For the upcoming Fall 2017 semester, I plan on taking 16 credits along with working an on-campus job. But I won’t be in color guard so that will allow me to dedicate my time to Accounting Club.
						Please let me serve on the Executive Board as a way to give back to the club that has refined who I am today and to create a better environment for our community. <br>
						Sincerely,<br>
						YiHua Cheng
					</p>
					<a href="#dir_of_pub_rels_01" class="btn btn-primary" data-toggle="modal">Read More</a>
				</div>
			</div>
		</div> <!-- row -->
		<hr />

		<!-- Director of Human Resources -->
		<div class="row">
			<div class="col-xs-12">
				<h2>Running for: <b><?php echo $dir_of_human_resources; ?></b></h2>
			</div>
			<div class="col-xs-12 col-md-2 col-md-offset-3">
				<img class="img-circle" src="<?php echo get_template_directory_uri(); ?>/images/Spring-2017-candidates/HR1.jpg" alt="Director of Human Resources" />
			</div>
			<div class ="col-xs-12 col-md-6">
				<div class="board-container cand-details">
					<h4>Jacob Baysa</h4>
					<p>
						Aloha AC! My name is Jacob Baysa and I am running to be your Director of Human Resources. I was admitted into Shidler as a Direct Admit Program (DAP) student and am currently a junior double majoring in Accounting and Management Information Systems. This fall marks my fifth semester in the club all of which I earned active status. Additionally, I am on the Executive Board already as the Director of Student Relations where I coordinated 10 social events throughout the fall semester. Altogether, my time and growth in the club has allowed me to understand the club as well as given me the opportunity to meet many, if not all, of our members. Next semester, I hope to continue to be one of your leaders in the club.<br>
						One example of my leadership experience is my position as the current Director of Student Relations. I handled a great amount of responsibility heading into the fall semester, where our club sees the largest growth in new members. My role on the Executive Board was to coordinate thrilling events filled with high levels of engagement through collaborative team work inspired games and activities. I believe I achieved my goal of creating a social environment where all members can kick back and have a good time with new and familiar faces. It was a major learning experience for me as it was my first time carrying out the duties of an Executive Board member. I am confident I will be successful once more as the Director of Human Resources and I look forward to assisting my fellow Executive Board members.<br>
						In the fall, I will be balancing 12 credits, a possible internship, and hopefully an Executive Board position. I feel that my schedule is lenient enough for me to be able to dedicate more time to Accounting Club as needed. Also, my other responsibilities are flexible enough for me to succeed in all aspects of college. I believe myself to be an energetic and engaging person and I want to be able to encourage others in the club to be exemplify a unified AC family mindset. These are the reasons why I believe I am a great candidate for the Director of Human Resources.<br>
					</p>
					<a href="#dir_of_human_resources_01" class="btn btn-primary" data-toggle="modal">Read More</a>
				</div>
			</div>
		</div> <!-- row -->

		<div class="row">
			<div class="col-xs-12 col-md-2 col-md-offset-3">
				<img class="img-circle" src="<?php echo get_template_directory_uri(); ?>/images/Spring-2017-candidates/HR2.jpg" alt="Director of Human Resources" />
			</div>
			<div class ="col-xs-12 col-md-6">
				<div class="board-container cand-details">
					<h4>Mark Hipolito</h4>
					<p>
						Hey guys!<br>
						My name is Mark Hipolito and I am running for Director of Human Resources for this upcoming Spring 2017. I am currently in my fifth year of college and I am pursing a degree in both accounting and finance. As a requirement for the CPA, I took an extra year to attain the needed 150 credits to get the license. In the three semesters I have been in AC, AC has given me many different opportunities for growth, allowed for creating great friendships, and provided many unforgettable experiences. It would be an honor to help the club that helped me get to where I am today. <br>
						As the Director of Human Resources, I will promote the club to the best of my abilities, encourage new and returning members to attain active status, and provide assistance to all members of AC. One of the biggest responsibilities of the Director of Human Resources is to coordinate and prepare for the Aloha Banquet. The Aloha Banquet requires proper time allocation due to the many different tasks. Due to being able to allocate time for work, school and various club activities, I know I will be able to properly allocate time for each task.<br>
						Please consider me as the next Director of Human Resources and allow me to give back to the club that has given me so much. <br>
						Sincerely<br>
						Mark Hipolito
					</p>
					<a href="#dir_of_human_resources_02" class="btn btn-primary" data-toggle="modal">Read More</a>
				</div>
			</div>
		</div> <!-- row -->
		<hr />

		<!-- Director of Information Systems -->
		<div class="row">
			<div class="col-xs-12">
				<h2>Running for: <b><?php echo $dir_of_info_systems; ?></b></h2>
			</div>
			<div class="col-xs-12 col-md-2 col-md-offset-3">
				<img class="img-circle" src="<?php echo get_template_directory_uri(); ?>/images/Spring-2017-candidates/IS.jpg" alt="Director of Information Systems" />
			</div>
			<div class ="col-xs-12 col-md-6">
				<div class="board-container cand-details">
					<h4>Nicole Kim</h4>
					<p>
						Hey AC!<br>
						My name is Nicole Kim and I am running to be your next Director of Information Systems for the upcoming spring 2017 semester. To give you some background about myself, I am a senior and am pursuing a Double Major in Accounting and Korean. This is also my 1st semester in the club and I am currently on track to make active status this semester.  Although I’m new to AC, I feel being in this club has helped me grow personally and professionally due to all of the opportunities that this club provides.  AC has also provided me with a great community of friends that are on similar paths as me, and are more than willing to help in almost any way possible. <br>
						This semester, I had the opportunity to be able to interact closely with several board members by volunteering to be in the IT committee for Aloha Banquet.  I also assisted the current Director of Information Systems by taking photos for Super Clubs Day. I feel that understanding some of the duties of the position has provided me with the passion to continue the great work to contribute to the success of the club. The following semester I will be taking 9 credits which will allow me to dedicate my time to the club; this will also allow me to provide my assistance to any members as needed. <br>
						I am excited to see what the next semester has in store and would love to be a part of making all of your experiences be as great and welcoming as it was for me! Thank you for taking the time to read this and I hope to see you all at the election meeting! <br>
						Sincerely, <br>
						Nicole S.J. Kim
					</p>
					<a href="#dir_of_info_sys_01" class="btn btn-primary" data-toggle="modal">Read More</a>
				</div>
			</div>
		</div>
		<hr />

		<!-- IBC Senator -->
		<div class="row">
			<div class="col-xs-12">
				<h2>Running for: <b><?php echo $ibc_senator; ?></b></h2>
			</div>
			<div class="col-xs-12 col-md-2 col-md-offset-3">
				<img class="img-circle" src="<?php echo get_template_directory_uri(); ?>/images/Spring-2017-candidates/IBC.jpg" alt="Director of Information Systems" />
			</div>
			<div class ="col-xs-12 col-md-6">
				<div class="board-container cand-details">
					<h4>Reyn Watanabe</h4>
					<p>
						Aloha AC! <br>
						My name is Reyn Watanabe and I am running for the position of Inter-Business Council Senator for this upcoming Spring 2017. I am a sophomore in the Shidler College of Business Direct Admit Program and am pursuing a bachelor’s degree in Accounting and Finance. As my first semester in Accounting Club is coming to a close, I am realizing all the great things the club has given me; I have made awesome friendships, networked with professionals, got to see the ins and outs of companies, and learned valuable skills. I am so grateful for all the amazing opportunities Accounting Club has given me. I want to give back to the club in some way, which is why I decided to run for board. Using my specific skill set and work ethic, it would be an honor to serve on board and add to this organizations success.  <br>
						As Inter-Business Council Senator, it is my duty to attend monthly IBC meetings, plan events, maintain the promotional board in Shidler, and maintain the IBC budget. Since the duties of IBC Senator are minimal in relation to other board positions, I will also help my fellow peers and work as a team to ensure this organizations success. I also would like to use this position in order to branch out into other positions within the club. I am very organized, reliable, and have a strong academic record, which means I will be able to put more of my time into the organization. <br>
						Please allow me to serve on the executive board of the Accounting Club to add to the organizations success and give back to the club so that future members will have the same rich experience I had. <br>
						Aloha, <br>
						Reyn Watanabe
					</p>
					<a href="#ibc_senator_01" class="btn btn-primary" data-toggle="modal">Read More</a>
				</div>
			</div>
		</div>

	</div><!-- #candidates -->

	<!-- Modals -->

	<!-- V President -->
	<div class="modal fade" id="vp_01" tabindex="-1" role="dialog" aria-labelledby="Vice President">
	  <div class="modal-dialog modal-lg" role="document">
	    <div class="modal-content">
	      <div class="modal-body row">
							<div class="col-xs-12 col-md-3">
								<img src="<?php echo get_template_directory_uri(); ?>/images/Spring-2017-candidates/VP.jpg" alt="President" />
							</div>
							<div class="col-xs-12 col-md-9">
								<h5 class="cand_position">Lorren Chun</h5>
								<h5 class="cand_name"><b>For Vice President</b></h5>
								<div class="cand_bio">
									<p>
										Hi AC! My name is Lorren Chun and I am running for Vice President. I am currently a Junior double majoring in Accounting and Management Information Systems. Accounting Club has provided me with friends, opportunities, knowledge, and memories and I would be grateful for the chance to serve our club for two more semesters on board. <br>
										With my experiences on board this past semester, I hope to take what I’ve learned about myself and the club to provide direction and input on the club’s future as well as advise new incoming board members while continuing to learn from the previous members. I hope to give back to the club that’s provided me with great opportunities, memories, and friends. Accounting Club and the ARC are like a second home to me. They are a safe haven and a place where I know I can go and be at ease. As the Vice President, I hope to take action to extend my sentiments about Accounting Club to all members ensuring that everyone feels at home and part of the family.<br>
										My current position on board is centered around service. I hope to continue that personal theme for myself during the rest of my time on board.  While my position may not be directly involved with giving back to the community, I will focus on serving the club through my personal actions and decisions. I will serve with my time and efforts to ensure the success of the members and the club in the future. I humbly ask for your vote to allow me to further be of service to Accounting Club and its members. <br>
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

	<!-- Secretary -->
	<div class="modal fade" id="secretary_01" tabindex="-1" role="dialog" aria-labelledby="Secretary">
	  <div class="modal-dialog modal-lg" role="document">
	    <div class="modal-content">
	      <div class="modal-body row">
							<div class="col-xs-12 col-md-3">
								<img src="<?php echo get_template_directory_uri(); ?>/images/fall-2017-candidates/secretary.jpg" alt="Vice President" />
							</div>
							<div class="col-xs-12 col-md-9">
								<h5 class="cand_position">Michelle Tellio</h5>
								<h5 class="cand_name"><b>For Secretary</b></h5>
								<div class="cand_bio">
									<p>
										Hi AC!
										My name is Michelle Tellio and I am running to be your next Secretary! Currently, I am a Junior majoring in Accounting and minoring in French. I am currently the Director of Internal Affairs and have been an active member for three semesters. I have had the best time in the club and I would like to continue to be a part of making events so other members can make memories and grow too.
										My position as Director of Internal Affairs has taught me crucial time management and organizational skills through managing large amounts of money and fundraisers throughout the semester. It has also given me a chance to grow as an individual and learn to offer support from other board members and ask for help when needed. I have also been a part of Manoa Lions Club as a Lion and help with the planning of their community service events. It has taught me to work with many different types of people. These leadership positions taught me to organize multiple events and assist others to make sure everything runs smoothly.
										Next semester, I will be taking fifteen credits with an on campus job, so I will be flexible for my responsibilities and assisting other board members. I am willing to dedicate more of my time to the club help with anything necessary to make this next year a great one.
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
	<div class="modal fade" id="pro_development_01" tabindex="-1" role="dialog" aria-labelledby="Director of Professional Development">
	  <div class="modal-dialog modal-lg" role="document">
	    <div class="modal-content">
	      <div class="modal-body row">
							<div class="col-xs-12 col-md-3">
								<img src="<?php echo get_template_directory_uri(); ?>/images/Spring-2017-candidates/PD.jpg" alt="Director of Professional Development" />
							</div>
							<div class="col-xs-12 col-md-9">
								<h5 class="cand_position">Jason Au</h5>
								<h5 class="cand_name"><b>For Director of Professional Development</b></h5>
								<div class="cand_bio">
									<p>
										Hi AC! <br>
										My name is Jason Au and I am running to be your next Director of Professional Development.  I am a Senior majoring in Accounting and have been in the club for five semesters. I have been a part of this club’s development and witnessed the changes over the past three years and want to do the best I can to further the growth of the club. AC has become an integral part of my life and my second family. I am currently serving as the Director of Human Resources and have the experience and knowledge of how AC operates and with the amount of experience and knowledge I have gained through my time in the club, I believe I am an excellent candidate for the Director of Professional Development. This position requires a lot of dedication, communication skills, and teamwork necessary for the Director of Professional Development to be successful. With the knowledge and experience, I have gained from being active for five straight semesters and serving on board, I am confident that I have the necessary skills to be a great Director of Professional Development. I am excited for the Spring 2017 semester! <br>
										-Jason Au
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

	<!-- Directory of Internal Affairs -->
	<div class="modal fade" id="dir_of_internal_affairs_01" tabindex="-1" role="dialog" aria-labelledby="Director of Interal Affairs">
	  <div class="modal-dialog modal-lg" role="document">
	    <div class="modal-content">
	      <div class="modal-body row">
							<div class="col-xs-12 col-md-3">
								<img src="<?php echo get_template_directory_uri(); ?>/images/Spring-2017-candidates/IA.jpg" alt="" />
							</div>
							<div class="col-xs-12 col-md-9">
								<h5 class="cand_position">Jamie-Ryan Aranaydo</h5>
								<h5 class="cand_name"><b>For Director of Interal Affairs</b></h5>
								<div class="cand_bio">
									<p>
										Hey  AC!<br>
										My name is Jamie-Ryan Aranaydo, and I am running for the position of Director of Internal Affairs this upcoming Spring 2018.  I ‘ve just started my first semester here at Shidler College of Business and am pursuing degrees in Accounting and MIS. My experiences so far in accounting club has been wonderful. Working on achieving active status has allowed me to meet a lot of great people here in the club. I believe that I haven’t met everyone in club just yet, but by serving on board, I hope to get to know each and every one you.<br>
										As Director of Information Systems, my role is to provide leadership for time management and responsibility tracking. My required duties are to coordinate fundraising opportunities, manage general meeting potlucks, handle super club’s day meals, oversee the carwash event, and fund tracking for each of my responsibilities. <br>
										I’ve worked at restaurants which serve take out, take preorders on catering, and had fundraising opportunities. My responsibilities for the restaurants were to make sure that all orders got out on time, from aspects of front help and cook, tracking fundraisings and donations, managing inventory and prepayments, and money handling. From my experiences, I believe that I am capable of fulfilling all my duties and much more.<br>
										Please allow me to serve on the executive board as a way to provide the club and its members with my time management and responsibility tracking skills. <br>
										Sincerely,<br>
										Jamie-Ryan Aranaydo
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
	<div class="modal fade" id="dir_of_student_rels_01" tabindex="-1" role="dialog" aria-labelledby="Director of Student Relations">
	  <div class="modal-dialog modal-lg" role="document">
	    <div class="modal-content">
	      <div class="modal-body row">
							<div class="col-xs-12 col-md-3">
								<img src="<?php echo get_template_directory_uri(); ?>/images/Spring-2017-candidates/SR.jpg" alt="Director of Student Relations" />
							</div>
							<div class="col-xs-12 col-md-9">
								<h5 class="cand_position"> Michael Jitchaku</h5>
								<h5 class="cand_name"><b>For Director of Student Relations</b></h5>
								<div class="cand_bio">
									<p>
										Hey AC! My name is Michael Jitchaku, and I’m running for the position of Director of Student Relations. I am currently a Sophomore in the Shidler College of Business majoring in General Business. Being an active member in AC has given me opportunities and memories that are unforgettable. Personally, the events that I attended and enjoyed the most were the socials. These events allowed me to meet and become closer to the people that make up AC. While being on the fun end of those events, I believe that I am capable of now being on the other side that coordinates these events. For me I believe that I have gained experiences from playing baseball that have taught me many valuable life lessons that can be applied while serving as a member of the Executive Board. While I have no direct leadership experience, I believe that I have a strong foundation including a positive attitude that will allow me to excel in the role as Director of Student Relations. <br>
										As the Director of Social Relations, it would be my goal to promote an environment within AC that allows for the growth of current and budding relationships. The fact that AC is one of the larger clubs in Shidler means it can sometimes be difficult for new relationships to form, when current relationships are comfortable. As a Director of Social Relations, it would be of utmost importance to promote the building of new connections as well as the strengthening of old ones. One of things I would do includes promoting the ARC a lot more, because whether it’s for chillaxing or studying, it’s there for the members and it’s an easy starting point for members to meet at.<br>
										In the upcoming spring, I plan on taking 17 credits, while still maintaining an on-campus job. With my schedule, I have enough flexibility to devote myself to not only being successful in fulfilling my duties if elected to be your next Director of Student Relations, but to become someone who will be able to grow and help those around me to grow as well. <br>
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

	<!-- Directory of Public Relations -->
	<div class="modal fade" id="dir_of_pub_rels_01" tabindex="-1" role="dialog" aria-labelledby="Director of Public Relations">
	  <div class="modal-dialog modal-lg" role="document">
	    <div class="modal-content">
	      <div class="modal-body row">
							<div class="col-xs-12 col-md-3">
								<img src="<?php echo get_template_directory_uri(); ?>/images/Spring-2017-candidates/PR.jpg" alt="Director of Public Relations" />
							</div>
							<div class="col-xs-12 col-md-9">
								<h5 class="cand_position">YiHua Cheng</h5>
								<h5 class="cand_name"><b>For Director of Public Relations</b></h5>
								<div class="cand_bio">
									<p>
										Hey AC! My name is YiHua Cheng and I am running for Director of Public Relations for this upcoming Spring semester. I am currently a junior studying Accounting at the Shidler College of Business and I have been a member of AC for almost a year. As I conclude my 2nd semester in Accounting Club, I can confidently say that AC has been a place that provided several invaluable experiences and irreplaceable relationships, which molded me into the person that I am today. I would like to serve as the Director of Public Relations because I want to give back to the club and community for supporting me all of this time.  <br>
										As Director of Public Relations, my goal is to build a long-lasting connection between Accounting club and the community through volunteer services. Not only will we be giving back to the community, but we will also be able to stimulate personal growth, build relationships, and promote environmental awareness. As Director of Public Relations, I will make sure that we are able to accomplish those goals by contacting community service organizations and encouraging everyone to attend more than the active status minimum.  <br>
										Partaking in Executive Board requires several skills such as strong leadership skills, effective communication, and time management, all in which I believe I possess. I plan to utilize the skills I’ve acquired from my experiences with the UH Manoa Marching Band and Color Guard Leadership Team, and apply it to this position in hopes to make Accounting Club even greater than it already is. For the upcoming Fall 2017 semester, I plan on taking 16 credits along with working an on-campus job. But I won’t be in color guard so that will allow me to dedicate my time to Accounting Club.
										Please let me serve on the Executive Board as a way to give back to the club that has refined who I am today and to create a better environment for our community. <br>
										Sincerely,<br>
										YiHua Cheng									</p>
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
	<div class="modal fade" id="dir_of_human_resources_01" tabindex="-1" role="dialog" aria-labelledby="Director of Human Resources">
	  <div class="modal-dialog modal-lg" role="document">
	    <div class="modal-content">
	      <div class="modal-body row">
							<div class="col-xs-12 col-md-3">
								<img src="<?php echo get_template_directory_uri(); ?>/images/Spring-2017-candidates/HR1.jpg" alt="Director of Human Resources" />
							</div>
							<div class="col-xs-12 col-md-9">
								<h5 class="cand_position">Jacob Baysa</h5>
								<h5 class="cand_name"><b>For Director of Human Resources</b></h5>
								<div class="cand_bio">
									<p>
										Aloha AC! My name is Jacob Baysa and I am running to be your Director of Human Resources. I was admitted into Shidler as a Direct Admit Program (DAP) student and am currently a junior double majoring in Accounting and Management Information Systems. This fall marks my fifth semester in the club all of which I earned active status. Additionally, I am on the Executive Board already as the Director of Student Relations where I coordinated 10 social events throughout the fall semester. Altogether, my time and growth in the club has allowed me to understand the club as well as given me the opportunity to meet many, if not all, of our members. Next semester, I hope to continue to be one of your leaders in the club.<br>
										One example of my leadership experience is my position as the current Director of Student Relations. I handled a great amount of responsibility heading into the fall semester, where our club sees the largest growth in new members. My role on the Executive Board was to coordinate thrilling events filled with high levels of engagement through collaborative team work inspired games and activities. I believe I achieved my goal of creating a social environment where all members can kick back and have a good time with new and familiar faces. It was a major learning experience for me as it was my first time carrying out the duties of an Executive Board member. I am confident I will be successful once more as the Director of Human Resources and I look forward to assisting my fellow Executive Board members.<br>
										In the fall, I will be balancing 12 credits, a possible internship, and hopefully an Executive Board position. I feel that my schedule is lenient enough for me to be able to dedicate more time to Accounting Club as needed. Also, my other responsibilities are flexible enough for me to succeed in all aspects of college. I believe myself to be an energetic and engaging person and I want to be able to encourage others in the club to be exemplify a unified AC family mindset. These are the reasons why I believe I am a great candidate for the Director of Human Resources.<br>
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

	<div class="modal fade" id="dir_of_human_resources_02" tabindex="-1" role="dialog" aria-labelledby="Director of Human Resources">
	  <div class="modal-dialog modal-lg" role="document">
		 <div class="modal-content">
			<div class="modal-body row">
							<div class="col-xs-12 col-md-3">
								<img src="<?php echo get_template_directory_uri(); ?>/images/Spring-2017-candidates/HR2.jpg" alt="Director of Human Resources" />
							</div>
							<div class="col-xs-12 col-md-9">
								<h5 class="cand_position">Mark Hipolito</h5>
								<h5 class="cand_name"><b>For Director of Human Resources</b></h5>
								<div class="cand_bio">
									<p>
										Hey guys!<br>
										My name is Mark Hipolito and I am running for Director of Human Resources for this upcoming Spring 2017. I am currently in my fifth year of college and I am pursing a degree in both accounting and finance. As a requirement for the CPA, I took an extra year to attain the needed 150 credits to get the license. In the three semesters I have been in AC, AC has given me many different opportunities for growth, allowed for creating great friendships, and provided many unforgettable experiences. It would be an honor to help the club that helped me get to where I am today. <br>
										As the Director of Human Resources, I will promote the club to the best of my abilities, encourage new and returning members to attain active status, and provide assistance to all members of AC. One of the biggest responsibilities of the Director of Human Resources is to coordinate and prepare for the Aloha Banquet. The Aloha Banquet requires proper time allocation due to the many different tasks. Due to being able to allocate time for work, school and various club activities, I know I will be able to properly allocate time for each task.<br>
										Please consider me as the next Director of Human Resources and allow me to give back to the club that has given me so much. <br>
										Sincerely<br>
										Mark Hipolito
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
	<div class="modal fade" id="dir_of_info_sys_01" tabindex="-1" role="dialog" aria-labelledby="Vice President">
	  <div class="modal-dialog modal-lg" role="document">
	    <div class="modal-content">
	      <div class="modal-body row">
							<div class="col-xs-12 col-md-3">
								<img src="<?php echo get_template_directory_uri(); ?>/images/Spring-2017-candidates/IS.jpg" alt="Image" />
							</div>
							<div class="col-xs-12 col-md-9">
								<h5 class="cand_position">Nicole Kim</h5>
								<h5 class="cand_name"><b>For Director of Information Systems</b></h5>
								<div class="cand_bio">
									<p>
										Hey AC!<br>
										My name is Nicole Kim and I am running to be your next Director of Information Systems for the upcoming spring 2017 semester. To give you some background about myself, I am a senior and am pursuing a Double Major in Accounting and Korean. This is also my 1st semester in the club and I am currently on track to make active status this semester.  Although I’m new to AC, I feel being in this club has helped me grow personally and professionally due to all of the opportunities that this club provides.  AC has also provided me with a great community of friends that are on similar paths as me, and are more than willing to help in almost any way possible. <br>
										This semester, I had the opportunity to be able to interact closely with several board members by volunteering to be in the IT committee for Aloha Banquet.  I also assisted the current Director of Information Systems by taking photos for Super Clubs Day. I feel that understanding some of the duties of the position has provided me with the passion to continue the great work to contribute to the success of the club. The following semester I will be taking 9 credits which will allow me to dedicate my time to the club; this will also allow me to provide my assistance to any members as needed. <br>
										I am excited to see what the next semester has in store and would love to be a part of making all of your experiences be as great and welcoming as it was for me! Thank you for taking the time to read this and I hope to see you all at the election meeting! <br>
										Sincerely, <br>
										Nicole S.J. Kim
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
								<img src="<?php echo get_template_directory_uri(); ?>/images/Spring-2017-candidates/IBC.jpg" alt="Image" />
							</div>
							<div class="col-xs-12 col-md-9">
								<h5 class="cand_position">Reyn Watanabe</h5>
								<h5 class="cand_name"><b>For IBC Senator</b></h5>
								<div class="cand_bio">
									<p>
										Aloha AC! <br>
										My name is Reyn Watanabe and I am running for the position of Inter-Business Council Senator for this upcoming Spring 2017. I am a sophomore in the Shidler College of Business Direct Admit Program and am pursuing a bachelor’s degree in Accounting and Finance. As my first semester in Accounting Club is coming to a close, I am realizing all the great things the club has given me; I have made awesome friendships, networked with professionals, got to see the ins and outs of companies, and learned valuable skills. I am so grateful for all the amazing opportunities Accounting Club has given me. I want to give back to the club in some way, which is why I decided to run for board. Using my specific skill set and work ethic, it would be an honor to serve on board and add to this organizations success.  <br>
										As Inter-Business Council Senator, it is my duty to attend monthly IBC meetings, plan events, maintain the promotional board in Shidler, and maintain the IBC budget. Since the duties of IBC Senator are minimal in relation to other board positions, I will also help my fellow peers and work as a team to ensure this organizations success. I also would like to use this position in order to branch out into other positions within the club. I am very organized, reliable, and have a strong academic record, which means I will be able to put more of my time into the organization. <br>
										Please allow me to serve on the executive board of the Accounting Club to add to the organizations success and give back to the club so that future members will have the same rich experience I had. <br>
										Aloha, <br>
										Reyn Watanabe
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
