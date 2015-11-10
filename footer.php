<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Club Website
 */

?>


<footer>
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<span class="copyright">Copyright &copy; <?php echo date('Y'); ?> Accounting Club</span>
			</div>
			<div class="col-md-4 text-center">
				<ul class="list-inline social-buttons">
					<li>
						<a href="https://instagram.com/ac_uhm/"><i class="fa fa-instagram fa-2x"></i></a>
					</li>
					<li>
						<a href="https://www.facebook.com/acctclubuh?fref=ts"><i class="fa fa-facebook-square fa-2x"></i></a>
					</li>
				</ul>
			</div>
			<div class="col-md-4 text-right">
				<ul class="list-inline quicklinks">
					<li><a href="http://www2.hawaii.edu/~bap/">BAP</a></li>
					<li><a href="http://www.imanet.org/">IMA</a></li>
				</ul>
			</div>
		</div>
	</div>
</footer>
<?php wp_footer(); ?>
</body>
</html>
