<?php
global $wbtm_reign_settings;
$mainbody_class  = '';
$header_position = isset( $wbtm_reign_settings[ 'reign_peepsoextender' ][ 'header_position' ] ) ? $wbtm_reign_settings[ 'reign_peepsoextender' ][ 'header_position' ] : 'inside';
$header_position = apply_filters( 'wbtm_rth_manage_header_position', $header_position );
if ( 'inside' !== $header_position ) {
    $mainbody_class = 'wb-grid';
}

$user = PeepSoUser::get_instance(PeepSoProfileShortcode::get_instance()->get_view_user_id());

$can_edit = FALSE;
if($user->get_id() == get_current_user_id() || current_user_can('edit_users')) {
	$can_edit = TRUE;
}

?>			

<div class="peepso ps-page-profile">
	<?php PeepSoTemplate::exec_template( 'general', 'navbar' ); ?>
	<?php PeepSoTemplate::exec_template( 'profile', 'focus', array( 'current' => 'orders' ) ); ?>
	<section id="mainbody" class="ps-page-unstyled <?php echo esc_attr( $mainbody_class ); ?>">
		<?php
	    if ( 'inside' !== $header_position ) {
	        do_action( 'wbcom_before_content_section' );
	    }
	    ?>
		<section id="component" role="article" class="clearfix">
			<?php if($can_edit) { PeepSoTemplate::exec_template('profile', 'profile-wc-order-tabs', array('tabs'=>$tabs, 'current_tab'=> 'wc-order-tracking'));} ?>

			<div class="wbpwi-peepo-woo-wrapper">
				<?php wc_print_notices(); ?>
				<?php
				echo do_shortcode( '[woocommerce_order_tracking]' );
				wc_enqueue_js( 'jQuery( ".wbpwi-peepo-woo-wrapper .track_order" ).attr("action","");' );
				?>
				</div>
		</section><!--end component-->
		<?php
	    if ( 'inside' !== $header_position ) {
	        do_action( 'wbcom_after_content_section' );
	    }
	    ?>
	</section><!--end mainbody-->
</div><!--end row-->
