<?php
/**
 * 	Template Name: Candidates Template
 *
 * @package Club Website
 */
get_header();
$vp_position = 'Vice President';
$vp_cand = 'Myles Enriquez';
?>

	<div id="candidates" class="container">
		<div class="row">
			<div class="col-xs-12">
				<h1 class="text-center">Spring '16 	Candidates</h1>
			</div>
		</div>

		<div class="row">
			<h1>Vice President</h1>
		</div>
		<div class="row">
		  <div class="col-xs-6 col-md-3">
		    <a href="#vp_01" class="thumbnail" data-toggle="modal">
		      <img src="http://placehold.it/171x180" alt="Image">
		    </a>
				<h3 class="text-center"><?php echo $vice_president_cand; ?></h3>
		  </div>
		</div> <!-- row -->

		<div class="row">
			<div class="col-xs-12">
				<h1>Treasurer</h1>
			</div>
		</div>
		<div class="row">
			<div class ="col-xs-3 text-center">
				<div class="board-container">
					<a href="#vp_01" data-toggle="modal">
					<img class="img-circle" src="http://placehold.it/171x180" alt="Image" />
					</a>
					<h4>Myles Enriquez</h4>
					<p class="text-muted">
						President
					</p>
				</div>
			</div>
			<div class ="col-xs-3 text-center">
				<div class="board-container">
					<a href="#vp_01" data-toggle="modal">
					<img class="img-circle" src="http://placehold.it/171x180" alt="Image" />
					</a>
					<h4>Myles Enriquez</h4>
					<p class="text-muted">
						President
					</p>
				</div>
			</div>
			<div class ="col-xs-3 text-center">
				<div class="board-container">
					<a href="#vp_01" data-toggle="modal">
					<img class="img-circle" src="http://placehold.it/171x180" alt="Image" />
					</a>
					<h4>Myles Enriquez</h4>
					<p class="text-muted">
						President
					</p>
				</div>
			</div>
			<div class ="col-xs-3 text-center">
				<div class="board-container">
					<a href="#vp_01" data-toggle="modal">
					<img class="img-circle" src="http://placehold.it/171x180" alt="Image" />
					</a>
					<h4>Myles Enriquez</h4>
					<p class="text-muted">
						President
					</p>
				</div>
			</div>
		</div> <!-- row -->

		<div class="row">
			<div class="col-xs-12">
				<h1>IBC Senator</h1>
			</div>
		</div>
		<div class="row">
		  <div class="col-xs-6 col-md-3">
		    <a href="#" class="thumbnail">
		      <img src="http://placehold.it/171x180" alt="Image">
		    </a>
				<h3 class="text-center">First Last</h3>
		  </div>
		</div> <!-- row -->

		<div class="row">
			<div class="col-xs-12">
				<h1>Director of Professional Development</h1>
			</div>
		</div>
		<div class="row">
		  <div class="col-xs-6 col-md-3">
		    <a href="#" class="thumbnail">
		      <img src="http://placehold.it/171x180" alt="Image">
		    </a>
				<h3 class="text-center">First Last</h3>
		  </div>
		</div> <!-- row -->

		<div class="row">
			<div class="col-xs-12">
				<h1>Director of Student Relations</h1>
			</div>
		</div>
		<div class="row">
		  <div class="col-xs-6 col-md-3">
		    <a href="#" class="thumbnail">
		      <img src="http://placehold.it/171x180" alt="Image">
		    </a>
				<h3 class="text-center">First Last</h3>
		  </div>
		</div> <!-- row -->

		<div class="row">
			<div class="col-xs-12">
				<h1>Director of Internal Affairs</h1>
			</div>
		</div>
		<div class="row">
		  <div class="col-xs-6 col-md-3">
		    <a href="#" class="thumbnail">
		      <img src="http://placehold.it/171x180" alt="Image">
		    </a>
				<h3 class="text-center">First Last</h3>
		  </div>
		</div> <!-- row -->

		<div class="row">
			<div class="col-xs-12">
				<h1>Director of Public Relations</h1>
			</div>
		</div>
		<div class="row">
		  <div class="col-xs-6 col-md-3">
		    <a href="#" class="thumbnail">
		      <img src="http://placehold.it/171x180" alt="Image">
		    </a>
				<h3 class="text-center">First Last</h3>
		  </div>
		</div> <!-- row -->

		<div class="row">
			<div class="col-xs-12">
				<h1>Director of Human Resources</h1>
			</div>
		</div>
		<div class="row">
		  <div class="col-xs-6 col-md-3">
		    <a href="#" class="thumbnail">
		      <img src="http://placehold.it/171x180" alt="Image">
		    </a>
				<h3 class="text-center">First Last</h3>
		  </div>
		</div> <!-- row -->

		<div class="row">
			<div class="col-xs-12">
				<h1>Director of Information Systems</h1>
			</div>
		</div>
		<div class="row">
		  <div class="col-xs-6 col-md-3">
		    <a href="#" class="thumbnail">
		      <img src="http://placehold.it/171x180" alt="Image">
		    </a>
				<h3 class="text-center">First Last</h3>
		  </div>
		</div> <!-- row -->
	</div><!-- #candidates -->


	<!-- Modal -->
	<div class="modal fade" id="vp_01" tabindex="-1" role="dialog" aria-labelledby="Vice President">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-body row">
							<div class="col-xs-4">
								<img src="http://placehold.it/171x180" alt="Vice President" />
							</div>
							<div class="col-xs-8">
								<h5 class="cand_position"><?php echo $vp_cand; ?></h5>
								<h5 class="cand_name"><?php echo $vp_position; ?></h5>
								<p class="cand_bio">
									Bio HERE
								</p>
							</div>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
	      </div>
	    </div>
	  </div>
	</div>

<?php get_footer(); ?>
