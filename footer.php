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
					<?php wp_list_pages('exclude=8&sort_column=menu_order&title_li='); ?>
				</ul>
			</div>
		</div>
	</div>
</footer>
<?php wp_footer(); ?>
<!-- Bootstrap -->
<script src='<?php bloginfo('template_directory'); ?>/js/bootstrap.min.js' type='text/javascript' ></script>
<!-- Custom JS -->
<script src='<?php bloginfo('template_directory'); ?>/js/main.js' type='text/javascript' ></script>

</body>
</html>
