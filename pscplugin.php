<?php
/*
Plugin Name: PSC
Plugin URI: http://www.connectonline.in
Description: This plugin used to add packages and purchase it.
Version: 1.0
Author: Selestin Thomas
Author URI: http://www.connectonline.in
*/
    
	
	/* Hook Plugin */
    register_activation_hook(__FILE__, 'pravennplug');# INTIAL CALL
    function pravennplug()
    {
        require_once(ABSPATH . "wp-admin/includes/upgrade.php");
		#DB CONNECTION VARIABLE
        global $wpdb;
        # 1 spec_assigned_orders
        $table_name = $wpdb->prefix . "123456"; // FOR DB PREFIX BY DEFAULT IT WILL BE wp_
        $MSQL = "show tables like '$table_name'";
        if ($wpdb->get_var($MSQL) != $table_name) {
             $sql = "CREATE TABLE $table_name (
					  `id` int(11) NOT NULL,
					  `name` varchar(100) NOT NULL,
					  `logo` text NOT NULL,
					  `payment_term` varchar(100) NOT NULL,
					  `payment_method` varchar(100) NOT NULL,
					  `NEWWWWWWWWWWWWWWWW` varchar(100) NOT NULL,
					  `status` int(11) NOT NULL
					) ENGINE=InnoDB DEFAULT CHARSET=latin1;";
            dbDelta($sql);
        }

    }
    
	add_action('admin_menu', 'member_MenuPraveen');
    /* Creating Menus */
    function member_MenuPraveen()
    {
		
		add_menu_page('Page title', 'Quiz', 'manage_options', 'listquiz', '');
		add_submenu_page( 'listquiz', 'Page title', 'Sub-menu title', 'manage_options', 'admin.php?page=addquiz', '');
		
	
		#FOR ACCESS PERMISSION
		add_submenu_page('', 'Update Status', 'Edit Status', 5, 'addquiz', 'addquiz');
		add_submenu_page('', 'listquiz', 'listquiz', 5, 'listquiz', 'listquiz');

      /*  wp_register_style('demo_table.css', plugin_dir_url(__FILE__) . 'css/demo_table.css');
        wp_enqueue_style('demo_table.css');
    
        wp_register_script('jquery.dataTables.js', plugin_dir_url(__FILE__) . 'js/jquery.dataTables.js', array('jquery'));
        wp_enqueue_script('jquery.dataTables.js'); */
    }
	
function addquiz()
    {
        include "addquiz.php";
    }
   
    function listquiz()
    {
        include "listquiz.php";
    }
  
    /**
     * Redirect user after successful login.
     *
     * @param string $redirect_to URL to redirect to.
     * @param string $request URL the user is coming from.
     * @param object $user Logged user's data.
     * @return string
     */
   
    
    
  
   
