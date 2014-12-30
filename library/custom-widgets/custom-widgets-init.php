<?php
/* ------------------------------------------------------------------------- *
 *  This file will initialize only custom widgets
/* ------------------------------------------------------------------------- */


// Recent Posts Widget
require_once get_template_directory() . '/library/custom-widgets/ac-custom-recent-posts-widget.php';

/*  ================================================ */

// Registering Custom Widgets
register_widget( 'AC_Recent_Posts_Widget' );
?>
