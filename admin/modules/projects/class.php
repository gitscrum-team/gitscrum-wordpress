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

#[\AllowDynamicProperties]

class Gitscrum_Projects {

    private $url_list = 'https://api.gitscrum.com/projects/?company_slug=';

    public function __construct() {

        $this->loader = new Gitscrum_Loader();

    }

	public function list() {

        $url = 'https://api.gitscrum.com/projects/?company_slug=gitscrum';
        
        $response = $this->loader->get_resource($this->$url_list, 'GET');

        echo '<div class="mt-4"></div>';
        foreach ($response['data'] as $project) {
          include( plugin_dir_url( __FILE__ ) . '/templates/card.php');
        }
	}

}
