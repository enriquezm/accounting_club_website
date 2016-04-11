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
				<h1 class="text-center">Fall '16 Candidates</h1>
			</div>

			<div class="col-xs-12 col-md-8">
				<p class="blurb">
					Hello everyone! Please take the time to read more and learn about the <b>Fall 2016</b> Executive Board candidates,
					and thank you to all of you who have decided to run for elections!
				</p>
				<p class="blurb">
					Our election meeting will be on <b>Thursday, April 14th</b> so take the time if you haven't already to get to know our candidates!
				</p>
			</div>
		</div>
	</div>
	<div id="candidates" class="container-fluid">

		<!-- President -->
		<div class="row">
			<div class="col-xs-12">
				<h2>Running for: <b><?php echo $president; ?></b></h2>
			</div>
			<div class="col-xs-12 col-md-2 col-md-offset-3">
				<img class="img-circle" src="<?php echo get_template_directory_uri(); ?>/images/fall-2017-candidates/president.jpg" alt="President" />
			</div>

			<div class ="col-xs-12 col-md-6">
				<div class="board-container cand-details">
					<h4>Christopher C. Moon</h4>
					<p>
						What’s up AC!
						My name is Chris Moon, and I am running for the position of President this upcoming Fall 2016. I am currently finishing my junior year in the Shidler College of Business and am pursuing concurrent degrees in Accounting and Management.   I love Accounting Club and I have had so many new friendships, opportunities, and experiences that I am forever grateful for.   
						Please allow me to serve on the executive board as a way to give back to this fine community and create an even better experience for future AC members.
					</p>
					<a href="#president_01" class="btn btn-primary" data-toggle="modal">Read More</a>
				</div>
			</div>
		</div> <!-- row -->
		<hr/>

		<!-- Secretary -->
		<div class="row">
			<div class="col-xs-12">
				<h2>Running for: <b><?php echo $secretary; ?></b></h2>
			</div>
			<div class="col-xs-12 col-md-2 col-md-offset-3">
				<img class="img-circle" src="<?php echo get_template_directory_uri(); ?>/images/fall-2017-candidates/secretary.jpg" alt="Treasurer" />
			</div>
			<div class ="col-xs-12 col-md-6">
				<div class="board-container cand-details">
					<h4>Michelle Tellio</h4>
					<p>
						Hi AC!
						My name is Michelle Tellio and I am running to be your next Secretary! Currently, I am a Junior majoring in Accounting and minoring in French. I am currently the Director of Internal Affairs and have been an active member for three semesters.  
					</p>
					<a href="#secretary_01" class="btn btn-primary" data-toggle="modal">Read More</a>
				</div>
			</div>
		</div> <!-- row -->
		<hr />

		<!-- Director of Professional Development -->
		<div class="row">
			<div class="col-xs-12">
				<h2>Running for: <b><?php echo $dir_of_prof_development; ?></b></h2>
			</div>
			<div class="col-xs-12 col-md-2 col-md-offset-3">
				<img class="img-circle" src="<?php echo get_template_directory_uri(); ?>/images/fall-2017-candidates/professional_development.jpg" alt="Treasurer" />
			</div>
			<div class ="col-xs-12 col-md-6">
				<div class="board-container cand-details">
					<h4>Royce Yamamoto</h4>
					<p>
						Hello Accounting Club! My name is Royce Yamamoto and I am running to be your next Director of Professional Development. I am currently a Junior majoring in Accounting and this past semester I served as the Director of Public Relations for AC.
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
				<img class="img-circle" src="<?php echo get_template_directory_uri(); ?>/images/fall-2017-candidates/internal_affairs.jpg" alt="IBC Senator" />
			</div>
			<div class ="col-xs-12 col-md-6">
				<div class="board-container cand-details">
					<h4>Cullen Cheng</h4>
					<p>
						Hey AC! My name is Cullen Cheng and I am running for the position of Director of Internal Affairs. I will be a Junior majoring in Accounting and considering a double major in Management Information Systems. I have been an active member in Accounting Club since Fall 2014. 
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
				<img class="img-circle" src="<?php echo get_template_directory_uri(); ?>/images/fall-2017-candidates/student_relations.jpg" alt="Director of Professional Development" />
			</div>
			<div class ="col-xs-12 col-md-6">
				<div class="board-container cand-details">
					<h4>Jacob Baysa</h4>
					<p>
						Hello Accounting Club! My name is Jacob Baysa and I am running to be your Director of Student Relations. I am a Direct Admit Program (DAP) student majoring in Accounting and planning to double in Management Information Systems. This spring marks my fourth semester in the club all of which I earned active status.
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
				<img class="img-circle" src="<?php echo get_template_directory_uri(); ?>/images/fall-2017-candidates/public_relations.jpg" alt="Director of Professional Development" />
			</div>
			<div class ="col-xs-12 col-md-6">
				<div class="board-container cand-details">
					<h4>Lorren Chun</h4>
					<p>
						Hi AC! I'm Lorren Chun and I'm running for the Director of Public Relations. I'm currently a sophomore in Shidler double majoring in Accounting and MIS. This is my first semester in Accounting Club and I have learned so much from everyone. 
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
				<img class="img-circle" src="<?php echo get_template_directory_uri(); ?>/images/fall-2017-candidates/human_resources.jpg" alt="Director of Human Resources" />
			</div>
			<div class ="col-xs-12 col-md-6">
				<div class="board-container cand-details">
					<h4>Jason Au</h4>
					<p>
						Hi AC! My name is Jason Au and I am running to be your next Director of Human Resources.  I am a junior majoring in Accounting and have been in the club for four semesters. I have been a part of this club’s development and witnessed the changes over the past two years and want to do the best I can to further the growth of the club. 
					</p>
					<a href="#dir_of_human_resources_01" class="btn btn-primary" data-toggle="modal">Read More</a>
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
				<img class="img-circle" src="<?php echo get_template_directory_uri(); ?>/images/fall-2017-candidates/info_sys.jpg" alt="Director of Information Systems" />
			</div>
			<div class ="col-xs-12 col-md-6">
				<div class="board-container cand-details">
					<h4>Marcus Jun Yi Maceyko</h4>
					<p>
						Hello, Folks!
						The moniker is Marcus Jun Yi Maceyko and I am running for the position of Director of Information Systems. I am currently a junior studying for my degree in Accounting & Management. I have been an Active member for Accounting Club for 2 semesters. 
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
				<img class="img-circle" src="<?php echo get_template_directory_uri(); ?>/images/fall-2017-candidates/ibc_senator.jpg" alt="Director of Information Systems" />
			</div>
			<div class ="col-xs-12 col-md-6">
				<div class="board-container cand-details">
					<h4>Brent Hironaga</h4>
					<p>
						Hey Accounting Club! My name is Brent Hironaga and I am running for the position of IBC Senator.  I am currently a sophomore DAP student who plans to major in both accounting and MIS.  This is my first true semester in Accounting Club where I have actively participated in many of the club events.  
					</p>
					<a href="#ibc_senator_01" class="btn btn-primary" data-toggle="modal">Read More</a>
				</div>
			</div>
		</div>

	</div><!-- #candidates -->

	<!-- Modals -->

	<!-- President -->
	<div class="modal fade" id="president_01" tabindex="-1" role="dialog" aria-labelledby="President">
	  <div class="modal-dialog modal-lg" role="document">
	    <div class="modal-content">
	      <div class="modal-body row">
							<div class="col-xs-12 col-md-3">
								<img src="<?php echo get_template_directory_uri(); ?>/images/fall-2017-candidates/president.jpg" alt="President" />
							</div>
							<div class="col-xs-12 col-md-9">
								<h5 class="cand_position">Chris Moon</h5>
								<h5 class="cand_name"><b>For President</b></h5>
								<div class="cand_bio">
									<p>
										What’s up AC!
										My name is Chris Moon, and I am running for the position of President this upcoming Fall 2017.   I am currently finishing my junior year in the Shidler College of Business and am pursuing concurrent degrees in Accounting and Management.   I love Accounting Club and I have had so many new friendships, opportunities, and experiences that I am forever grateful for.  Using my specific gifts and talents, it would be my pleasure to express that gratitude by serving on board. 
										As President, it would be my mission to cultivate an environment that rewards excellence, promotes growth, encourages wisdom and most importantly, prioritizes the development of love and personal relationships.  While it is simple, the task of creating such an environment is not an easy one.  There needs to be mutual cooperation, trust and respect in order to bring out the best in each person, and most importantly, there needs to be an attitude for serving one another.   This is where the President must step in and set the example.  
										The President’s role is that of a pace-setter, not a dictator, and I would never ask you to do something that I myself would be unwilling to or incapable of doing.  With years of experience serving in volunteer organizations as well as making executive decisions for them, I have learned to plan my work ahead of time and, when necessary, think on my feet during emergencies.  
										Please allow me to serve on the executive board as a way to give back to this fine community and create an even better experience for future AC members.
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
								<img src="<?php echo get_template_directory_uri(); ?>/images/fall-2017-candidates/professional_development.jpg" alt="Director of Professional Development" />
							</div>
							<div class="col-xs-12 col-md-9">
								<h5 class="cand_position">Royce Yamamoto</h5>
								<h5 class="cand_name"><b>For Director of Professional Development</b></h5>
								<div class="cand_bio">
									<p>
										Hello Accounting Club! My name is Royce Yamamoto and I am running to be your next Director of Professional Development. I am currently a Junior majoring in Accounting and this past semester I served as the Director of Public Relations for AC. In my third semester in the club. I believe that I have the confidence and belief to be your next Director of Public Development.
										Being in the club has given me a lot of opportunities to grow personally and professionally. Through this semester on board, it made me really appreciate what a board member does throughout the semester. Having people in the club in which you can learn from gave me a different perspective of the club and what it really has to offer. I believe that I can give members this experience of what AC truly means.
				             			Next semester I will be taking 15 credits with an on-campus part-time job. In past semesters I have taken 15 credits with two-part time jobs, which I feel have prepared me to be able to put a lot of time into the Executive Board position again this upcoming semester as well as meeting each and every one of you individually better. Thank you for reading and I hope to get see you all at election meeting!
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
								<img src="<?php echo get_template_directory_uri(); ?>/images/fall-2017-candidates/internal_affairs.jpg" alt="" />
							</div>
							<div class="col-xs-12 col-md-9">
								<h5 class="cand_position">Cullen Cheng</h5>
								<h5 class="cand_name"><b>For Director of Interal Affairs</b></h5>
								<div class="cand_bio">
									<p>
										Hey AC! My name is Cullen Cheng and I am running for the position of Director of Internal Affairs.  I will be a Junior majoring in Accounting and considering a double major in Management Information Systems.  I have been an active member in Accounting Club since Fall 2014. Through my time with AC, I have dedicated myself to the club, learned from our current and past members, and tried to connect with more people.  AC has helped me reach new heights and develop many useful skills, especially with communication.  I want to strengthen the bond in AC and I believe being on board will allow me to accomplish this goal.  It is in my best interest to help maintain a peaceful and cheerful atmosphere for my fellow members.
										I plan to take 3 physical and some online courses, so that I will have more time to fulfill my duties and responsibilities as a board member.  Being a part of AC’s Aloha Banquet IT Committee has given me experience to take charge and accomplish objectives within a timely manner.  In addition to my campus job, I am required to pay attention to detail while multi-tasking, which can be beneficial for this position.  I believe I am a potential candidate to be your next Director of Internal Affairs of Fall 2016.
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
								<img src="<?php echo get_template_directory_uri(); ?>/images/fall-2017-candidates/student_relations.jpg" alt="Director of Student Relations" />
							</div>
							<div class="col-xs-12 col-md-9">
								<h5 class="cand_position">Jacob Baysa</h5>
								<h5 class="cand_name"><b>For Director of Student Relations</b></h5>
								<div class="cand_bio">
									<p>
										Hello Accounting Club! My name is Jacob Baysa and I am running to be your Director of Student Relations. I am a Direct Admit Program (DAP) student majoring in Accounting and planning to double in Management Information Systems. This spring marks my fourth semester in the club all of which I earned active status. Additionally, I have been on multiple committees such as the IT committee and two aloha banquet video committees. Other activities that I have been a part of in AC include the super clubs kickball and dance teams. Altogether my growth in the club these past two years has allowed me to get an understanding of the club as well as the chance to meet many of our members. Next semester, I hope to be one of your leaders in the club while holding this Director position.
										One example of leadership experience I have had previously include leading aloha banquet’s video committee. The intro video at aloha banquet is a major part of the event as it introduces the theme and emcees. I, with the help of another committee leader, scheduled, scripted, filmed, and edited the intro video. We were able to lead the committee successfully and managed to complete the video just in time for aloha banquet. It was a major learning experience and I believe it is a great example of my dedication and commitment to the club. I am confident that I am capable of executing the duties required of an Executive Board member.
										In the fall, I will be balancing 12 credits, a part-time on campus job, and hopefully an Executive Board position. I feel that my schedule is lenient enough for me to be able to dedicate more time to Accounting Club as needed. Also, my other responsibilities are flexible enough for me to succeed in all aspects of college, which includes the social aspect of college. I believe myself to be a social and engaging person and I want to be able to encourage others in the club to be more engaging and embody a unified AC family mindset.This is why I believe I am a great candidate for the Director of Student Relations.					
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
								<img src="<?php echo get_template_directory_uri(); ?>/images/fall-2017-candidates/public_relations.jpg" alt="Director of Public Relations" />
							</div>
							<div class="col-xs-12 col-md-9">
								<h5 class="cand_position">Lorren Chun</h5>
								<h5 class="cand_name"><b>For Director of Public Relations</b></h5>
								<div class="cand_bio">
									<p>
										Hi AC! I'm Lorren Chun and I'm running for the Director of Public Relations. I'm currently a sophomore in Shidler double majoring in Accounting and MIS. This is my first semester in Accounting Club and I have learned so much from everyone. I cannot wait to continue learning and gaining valuable experience from members and professionals alike. I am running because I want to grow my skills as a leader and help to perpetuate Accounting Club's legacy that previous and current members have worked so hard to build as well as help to make the experiences of future members as great as mine has been so far.
										I chose to run for Public Relations because community service is something that is important to me. Through community service we help causes that are dear to our heart and those who are less fortunate. As someone who has been fortunate enough to not suffer through many hardships that others do, I believe that helping out those who are less fortunate for whose lives have been affected by extenuating circumstances helps to also keep me grounded. I personally am not always appreciative of all of the opportunities and things that I am so fortunate to have. Doing community service definitely helps to keep me grounded and thankful for everything. Through this position, I hope to facilitate events that help everyone to give back to the community and causes that we are all passionate about.
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
	<div class="modal fade" id="dir_of_human_resources_01" tabindex="-1" role="dialog" aria-labelledby="Director of Human Resources">
	  <div class="modal-dialog modal-lg" role="document">
	    <div class="modal-content">
	      <div class="modal-body row">
							<div class="col-xs-12 col-md-3">
								<img src="<?php echo get_template_directory_uri(); ?>/images/fall-2017-candidates/human_resources.jpg" alt="Director of Human Resources" />
							</div>
							<div class="col-xs-12 col-md-9">
								<h5 class="cand_position">Jason Au</h5>
								<h5 class="cand_name"><b>For Director of Human Resources</b></h5>
								<div class="cand_bio">
									<p>
										Hi AC! My name is Jason Au and I am running to be your next Director of Human Resources.  I am a junior majoring in Accounting and have been in the club for four semesters. I have been a part of this club’s development and witnessed the changes over the past two years and want to do the best I can to further the growth of the club. AC has become an integral part of my life and my second family. With the amount of experience and knowledge I have gained through and about the club, I believe I am an excellent candidate for the Director of Human Resources. This position requires a lot of dedication, communication skills, and teamwork necessary for the Director of Human Resources to be successful. With the knowledge and experience, I have gained from being active for 4 straight semesters, I am confident that I have the necessary skills to be a great Director of Human Resources. I am excited for the Fall 2016 semester!					
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
								<img src="<?php echo get_template_directory_uri(); ?>/images/fall-2017-candidates/info_sys.jpg" alt="Image" />
							</div>
							<div class="col-xs-12 col-md-9">
								<h5 class="cand_position">Marcus Jun Yi Maceyko</h5>
								<h5 class="cand_name"><b>For Director of Information Systems</b></h5>
								<div class="cand_bio">
									<p>
										Hello, Folks!
										The moniker is Marcus Jun Yi Maceyko and I am running for the position of Director of Information Systems. I am currently a junior studying for my degree in Accounting & Management. I have been an Active member for Accounting Club for 2 semesters. I am glad that I am able contribute more to the club’s growth over this past year. Accounting Club has helped me grow as an individual; which is why I truly consider Accounting Club a second family. With that being said, I feel I have the desire to help the club more in the years to come. Over this past two semesters, being a member of this community has provided me a keen understanding of how the club is run and what the club needs. 
										During my first semester, I participated in several committees for the Aloha banquet which really helped me understand delegation of members during meeting, budgeting for resources, and the management of time for big events as such. It was an interesting experience for me because I was privileged to work with a couple of board members on the centerpieces and videos. During this period, I definitely felt that I exceled in my communication, artistic foundation, and technological skill. I also got to understand the different duties of the board members during our engagement in the projects. Smelting all these details and understandings as a whole has aided me in visualizing what we could do to improve the efficiency of the club. If I were to be elected, I most definitely want Accounting Club to be an environment where members can experience success and become dynamic citizens.
										Next semester I will be taking 12 credits. This schedule will allow me to dedicate more time into Accounting Club. I understand the role on Board, support the club to provide an equitable foundation to all of our members. I genuinely enjoy the opportunity to serve and would take the responsibility seriously. As a general member, I would listen to and understand all information available on an issue before I form an opinion and generate my ideas; Likewise, If elected. Suffice to say, I believe I am worthy of your vote as the Director of Information Systems for Fall ‘16.					
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
								<img src="<?php echo get_template_directory_uri(); ?>/images/fall-2017-candidates/ibc_senator.jpg" alt="Image" />
							</div>
							<div class="col-xs-12 col-md-9">
								<h5 class="cand_position">Brent Hironaga</h5>
								<h5 class="cand_name"><b>For IBC Senator</b></h5>
								<div class="cand_bio">
									<p>
										Hey Accounting Club! My name is Brent Hironaga and I am running for the position of IBC Senator.  I am currently a sophomore DAP student who plans to major in both accounting and MIS.  This is my first true semester in Accounting Club where I have actively participated in many of the club events.  Accounting Club has become almost like a second home for me where I can be myself and have fun.  I had an amazing experience and through this position I wish to give back to the club that gave me so much.
										With my previous experience in baseball I developed communication skills, the ability to work well with a team, and an aggressive/competitive spirit.  I feel that these qualities are important for the role of IBC Senator.  Also through baseball I learned that individual success is not as important as team success.  With this attitude I not only plan to do my job, but to help with the needs of the other club and board members to bring the best environment out of the club.
										I am currently balancing 15 credits, an on campus job, three softball teams, and Accounting Club.  Next semester I plan to cut those credits down to 12 and dedicate my time towards Accounting Club over my softball teams when necessary.  I am blessed to be apart of such an amazing club and if given the opportunity, it would be an honor for me to represent the club as IBC Senator next semester.
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
