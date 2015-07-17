<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @since      1.0.0
 *
 * @package    Mathematica_WP_Toolbox
 * @subpackage Mathematica_WP_Toolbox/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and hooks that
 * enqueue scripts and CSS styles. Also adds a meta box
 * with editor buttons and whitelists CDF/.nb/.m files.
 *
 * @package    Mathematica_WP_Toolbox
 * @subpackage Mathematica_WP_Toolbox/admin
 * @author     Calle Ekdahl <calle@ekdahl.email>
 */
class Mathematica_WP_Toolbox_Admin {

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

	/**
	 * Add CDFs, notebooks and .m-files to the white list of extensions and mime types.
	 *
	 * @since    1.0.0
	 */
	 public function add_wolfram_mime_types( $mime_types = array() ) {
		 
		 $mime_types['cdf'] = 'application/vnd.wolfram.cdf';
		 $mime_types['nb'] = 'application/vnd.wolfram.mathematica';
		 $mime_types['m'] = 'application/vnd.wolfram.mathematica.package';

		 return $mime_types;
	 }

	 /**
	  * Add a buttons to the editor that inserts shortcode templates for the various
	  * shortcodes defined by this plugin. Create a meta box to put them in.
	  *
	  * @since 1.0.0
	  */
	public function add_media_button() {
	
	$screens = array( 'post', 'page' );

		foreach ( $screens as $screen ) {
		
		add_meta_box(
			'Mathematica-WP-Toolbox-shortcodes',
			__( 'Mathematica WP Toolbox', 'Mathematica-WP-Toolbox-textdomain' ),
			function( $post ) { ?>
<a id="mathematica-wp-toolbox-shortcode-cdf" class="button add_media mathematica-wp-toolbox-shortcode" title="WolframCDF shortcode">
	<span class="wp-media-buttons-icon mathematica-wp-toolbox-icon"></span> WolframCDF
</a>
<a id="mathematica-wp-toolbox-shortcode-api" class="button add_media mathematica-wp-toolbox-shortcode" title="WolframCloudAPI shortcode">
	<span class="wp-media-buttons-icon mathematica-wp-toolbox-icon"></span> WolframCloudAPI
</a> 
<a id="mathematica-wp-toolbox-shortcode-wlembedded" class="button add_media mathematica-wp-toolbox-shortcode" title="Highlight embedded code shortcode">
	<span class="wp-media-buttons-icon mathematica-wp-toolbox-icon"></span> Highlight embedded code
</a>
<a id="mathematica-wp-toolbox-shortcode-wlfield" class="button add_media mathematica-wp-toolbox-shortcode" title="Highlight custom field code shortcode">
	<span class="wp-media-buttons-icon mathematica-wp-toolbox-icon"></span> Highlight custom field code
</a>
<a id="mathematica-wp-toolbox-shortcode-wlinline" class="button add_media mathematica-wp-toolbox-shortcode" title="Inline code">
	<span class="wp-media-buttons-icon mathematica-wp-toolbox-icon"></span> Inline code
</a>
<a id="mathematica-wp-toolbox-shortcode-wldoc" class="button add_media mathematica-wp-toolbox-shortcode" title="Documentation link shortcode">
	<span class="wp-media-buttons-icon mathematica-wp-toolbox-icon"></span> Documentation link
</a>
<a id="mathematica-wp-toolbox-shortcode-mma-se-username" class="button add_media mathematica-wp-toolbox-shortcode" title="MMA.SE user's username shortcode">
	<span class="wp-media-buttons-icon mathematica-wp-toolbox-icon"></span> MMA.SE user's username
</a>
<a id="mathematica-wp-toolbox-shortcode-mma-se-user-questions" class="button add_media mathematica-wp-toolbox-shortcode" title="MMA.SE users's questions shortcode">
	<span class="wp-media-buttons-icon mathematica-wp-toolbox-icon"></span> MMA.SE user's questions
</a>
<a id="mathematica-wp-toolbox-shortcode-mma-se-user-answers" class="button add_media mathematica-wp-toolbox-shortcode" title="MMA.SE user's answers shortcode">
	<span class="wp-media-buttons-icon mathematica-wp-toolbox-icon"></span> MMA.SE user's answers
</a>
<a id="mathematica-wp-toolbox-shortcode-mma-se-questions" class="button add_media mathematica-wp-toolbox-shortcode" title="MMA.SE questions by IDs shortcode">
	<span class="wp-media-buttons-icon mathematica-wp-toolbox-icon"></span> MMA.SE questions by IDs
</a>
<a id="mathematica-wp-toolbox-shortcode-mma-se-answers" class="button add_media mathematica-wp-toolbox-shortcode" title="MMA.SE answers by IDs">
	<span class="wp-media-buttons-icon mathematica-wp-toolbox-icon"></span> MMA.SE answers by IDs
</a>
<a id="mathematica-wp-toolbox-shortcode-mma-se-profile-box" class="button add_media mathematica-wp-toolbox-shortcode" title="MMA.SE profile box ">
	<span class="wp-media-buttons-icon mathematica-wp-toolbox-icon"></span> MMA.SE profile box
</a>
<?php
			}, $screen);

		}
	}
	
	/**
	 * Register the stylesheets for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/Mathematica-WP-Toolbox-admin.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the Javascript for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/Mathematica-WP-Toolbox-admin.js', array( 'jquery' ), $this->version, true );

	}

}
