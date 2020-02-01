<?php

/**
 * Plugin Name: PDB WP User Shortcodes
 * Description: defines several shortcodes for use with Participants Database and WordPress Users
 */
class PDb_User_List_Shortcodes {
  
  /**
   * @var string name of the user ID field
   * 
   * this is the name of the Participants Database field that contains the WP user 
   * identification value, usually the user login or user ID 
   */
  private $user_id_field = 'username';

  /**
   * defines the shortcodes
   */
  public function __construct()
  {
    add_shortcode( 'pdb_user_list', [ $this, 'user_list_shortcode' ] );
    add_shortcode( 'pdb_user_record', [ $this, 'user_record_shortcode' ] );
  }
  
  /**
   * provides the current user value
   * 
   * @return string|int depending on which property is used
   */
  private function user_id()
  {
    $current_user = wp_get_current_user();
    
    // chenge the property here if you are using the user ID instead of user_login
    return $current_user->user_login;
  }

  /**
   * displays a Participants Database list filtered by the current user
   * 
   * @param array $atts the shortcode attributes
   */
  public function user_list_shortcode( $atts )
  {
    if ( is_user_logged_in() ) {
      return do_shortcode( '[pdb_list filter="' . $this->user_id_field . '=' . $this->user_id() . '"]' );
    } else {
      // this content will be shown if the user is not logged in
      return '<p>You must be logged in to view this list.</p>';
    }
  }

  /**
   * display a Participants Database editable record for the current user
   * 
   * this assumes the user ID matches only one record
   * 
   * @param array $atts the shortcode attributes
   */
  public function user_record_shortcode( $atts )
  {
    $current_user = wp_get_current_user();
    return do_shortcode( '[pdb_record record_id="' . Participants_Db::get_record_id_by_term( $this->user_id_field, $this->user_id(), true ) . '"]' );
  }

}

new PDb_User_List_Shortcodes;