<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       https://about.gitscrum.com
 * @since      1.0.0
 *
 * @package    Gitscrum
 * @subpackage Gitscrum/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Gitscrum
 * @subpackage Gitscrum/admin
 * @author     Renato Marinho <renato.marinho@gitscrum.com>
 */
class Gitscrum_Admin {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $plugin_name       The name of this plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;
		
	}

	public function init_gitscrum() {

		$projects = new Gitscrum_Projects();

		add_menu_page('GitScrum', 'GitScrum', 'manage_options', 'gitscrum', array($projects, 'list'), 'dashicons-admin-generic', 2);

		$this->add_routes();
		
	}

	public function special_menu_admin_menu() {
		$projects = new Gitscrum_Projects();

		add_menu_page(
			'GitScrum',
			'GitScrum',
			'manage_options',
			'gitscrum',
			array($projects, 'list'),
			'dashicons-admin-generic',
			2
		);
	}

	private function add_routes() {

		$projects = new Gitscrum_Projects();
		
		add_submenu_page('gitscrum', 'Projects', 'Projects', 'manage_options', 'projects', array($projects, 'list') );
		add_submenu_page('gitscrum', 'Team Members', 'Team Members', 'manage_options', 'team-members', array($projects, 'list') );
		add_submenu_page('gitscrum', 'Workspace Settings', 'Workspace Settings', 'manage_options', 'workspace-settings', array($projects, 'list') );
    
		remove_submenu_page('gitscrum', 'gitscrum');

	}

	/**
	 * Register the stylesheets for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/gitscrum-admin.css', array(), $this->version, 'all' );
		wp_enqueue_style( $this->plugin_name . '_bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css', array(), $this->version, 'all');
		wp_enqueue_style( $this->plugin_name . '_element', 'https://cdnjs.cloudflare.com/ajax/libs/element-ui/2.15.14/theme-chalk/index.min.css', array(), $this->version, 'all');
	}

	/**
	 * Register the JavaScript for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/gitscrum-admin.js', array( 'jquery' ), $this->version, false );

	}

}
