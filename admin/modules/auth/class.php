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

class Gitscrum_Auth {

  private $url_login = 'https://api.gitscrum.com/auth/login';

  public function __construct() {

    $this->loader = new Gitscrum_Loader();

  }

	public function login() {
        
    if ( isset($_POST['email']) && isset($_POST['password']) ) {
      $this->do_login();
    }
    
    include( __DIR__ . '/templates/login.php');

	}

  public function do_login() {
    
    $data = json_encode(['email' => $_POST['email'], 'password' => $_POST['password'], 'ipv4' => $_SERVER['REMOTE_ADDR']]);
    $response = $this->loader->get_resource($this->url_login, 'POST', $data);
    
    $_SESSION['gitscrum'] = base64_encode(serialize($response['data']));
    
    echo '<script>window.location.href = "/wp-admin/admin.php?page=gitscrum-projects";</script>';
    exit();

  }
  

}
