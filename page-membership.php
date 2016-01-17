<?php
/**
 * 	Template Name: Membership Page
 *
 * @package Club Website
 */
get_header();

?>
<section class="success" id="membership-page">
  <div class="container">
    <h2 class="text-center">Membership</h2>
    <div class="row">
      <div clas="col-xs-12">
        <?php the_field('membership_blurb'); ?>
      </div>
    </div>
    <div class="row">
      <?php
          $file = get_field('membership_form_upload');

          if ( $file ) :
            // vars
            $url = $file['url'];
            $title = $file['title']?>
            <a href="<?php echo $url; ?>"><?php echo $title; ?></a>

      <?php endif; ?>
    </div>
    <div class="row">
      <?php
          $file = get_field('membership_active_status_sheet');

          if ( $file ) :
            // vars
            $url = $file['url'];
            $title = $file['title']?>
            <a href="<?php echo $url; ?>"><?php echo $title; ?></a>

      <?php endif; ?>
    </div>
  </div>
</section>


<?php get_footer(); ?>
