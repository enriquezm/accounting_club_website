<?php
/**
 * 	Template Name: Calendar Page
 *
 * @package Club Website
 */
get_header();

$calendar_link = get_field("google_calendar_embed_link");
?>
<section id="calendar">
  <div class="container">
    <h1 class="text-center">Calendar</h1>
    <div class="row">
      <div class="col-xs-12 text-center">
        <?php if ( $calendar_link ) {
          echo $calendar_link;
        }
        else {
          echo '<div class="panel panel-success">';
          echo '<div class="panel-body">';
          echo 'Calender has not been uploaded just yet!';
          echo '</div>';
          echo '<div class="panel-footer">Stick around! We will upload our calendar events shortly. Sorry for the inconvenience.</div>';
          echo '</div>';
        }
        ?>

      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>
