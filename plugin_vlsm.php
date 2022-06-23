<?php 
	/**
	 * Plugin Name: Calculadora Subneteo
	 * Description: Plugin para agregar una cálculadora de subneteo
	 * Version: 1.0.0
	 * Author: Noel Renderos
	 * License: GPL2
	 */

	function estilos_css(){
		wp_enqueue_script( 'recursos_css1', plugin_dir_url( __FILE__ ) . 'includes/css/app.css', array(), '1.0' );
		wp_enqueue_script( 'recursos_css2', plugin_dir_url( __FILE__ ) . 'includes/css/home.css', array(), '1.0' );
		wp_enqueue_script( 'recursos_css3', plugin_dir_url( __FILE__ ) . 'includes/css/style.css', array(), '1.0' );
		wp_enqueue_script( 'recursos_css4', plugin_dir_url( __FILE__ ) . 'includes/css/fontawesome_free_5.13.0_we_all.min.css', array(), '1.0' );
	}

	function funciones_js(){
		wp_enqueue_script( 'recursos_js1', plugin_dir_url( __FILE__ ) . "includes/js/app.js", array(), '1.0' );
		wp_enqueue_script( 'recursos_js2', plugin_dir_url( __FILE__ ) . "includes/js/app_style.js", array(), '1.0' );
	}
	
	add_action( 'wp_enqueue_scripts', 'estilos_css' );
	add_action( 'wp_enqueue_scripts', 'funciones_js' );

	//require_once plugin_dir_path(__FILE__) . 'includes/app.php';






	
	/*add_action('wp_footer', function(){ 
?>
	
	<script>
		alert('Prueba de la Alerta');
	</script>

<?php 
	}  ,9999); 
?>*/