<?php

/**
 * Enqueue scripts and styles.
 */
function new_scripts() {
    // Styles
    wp_enqueue_style( 'bootstrap-style', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css', array(), '4.4.1' );
    wp_enqueue_style( 'main', get_stylesheet_directory_uri() . '/css/style.css', array(), filemtime( dirname( __FILE__ ) . '/css/style.css' ) );

    // Scripts
    wp_enqueue_script( 'popper-js', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js', array( 'jquery' ), '1.16.0', true );
    wp_enqueue_script( 'bootstrap-js', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js', array( 'jquery' ), '4.4.1', true );
    wp_enqueue_script( 'maskinput', get_stylesheet_directory_uri() . '/js/maskinput.js', array(), 'null', true );

    // отменяем зарегистрированный jQuery
    wp_deregister_script('jquery-core');
    wp_deregister_script('jquery');

    // регистрируем
    wp_register_script( 'jquery-core', 'https://code.jquery.com/jquery-3.2.0.js', false, '3.2.0', false );
    wp_register_script( 'jquery', false, array('jquery-core'), null, false );

    // подключаем
    wp_enqueue_script( 'jquery' );
}
add_action( 'wp_enqueue_scripts', 'new_scripts' );

/**
 * Add integrity/crossorigin for CDN styles.
 *
 * @param  string $html   The <style> tag for the enqueued style.
 * @param  string $handle The style's registered handle.
 * @return string         The 'async' attribute.
 */
function new_style_loader_tag( $html, $handle ) {
    $scripts_to_load = array(
        array(
            ( 'name' )      => 'bootstrap-style',
            ( 'integrity' ) => 'sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh',
        ),
    );

    $key = array_search( $handle, array_column( $scripts_to_load, 'name' ) );

    if ( false !== $key ) {
        $html = str_replace( '/>', ' integrity=\'' . $scripts_to_load[ $key ]['integrity'] . '\' crossorigin=\'anonymous\' />', $html );
    }

    return $html;
}
add_filter( 'style_loader_tag', 'new_style_loader_tag', 10, 2 );

/**
 * Add integrity/crossorigin for CDN scripts.
 *
 * @param  string $tag    The <script> tag for the enqueued script.
 * @param  string $handle The script's registered handle.
 * @return string         The 'async' attribute.
 */
function new_script_loader_tag( $tag, $handle ) {
    $scripts_to_load = array(
        array(
            ( 'name' )      => 'popper-js',
            ( 'integrity' ) => 'sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo',
        ),
        array(
            ( 'name' )      => 'bootstrap-js',
            ( 'integrity' ) => 'sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6',
        ),
        array(
            ( 'name' )      => 'jquery-core',
            ( 'integrity' ) => 'sha256-wPFJNIFlVY49B+CuAIrDr932XSb6Jk3J1M22M3E2ylQ=',
        ),
    );
    $key = array_search( $handle, array_column( $scripts_to_load, 'name' ) );

    if ( false !== $key ) {
        $tag = str_replace( '></script>', ' integrity=\'' . $scripts_to_load[ $key ]['integrity'] . '\' crossorigin=\'anonymous\'></script>', $tag );
    }

    return $tag;
}
add_filter( 'script_loader_tag', 'new_script_loader_tag', 10, 2 );


//  подключаем навигационное меню
register_nav_menus ( array(
	'head_menu' => 'Меню навигации',
//	'footer_menu' => 'Меню в футере',
) );

//add_action( 'wp_enqueue_scripts', 'new_scripts' );

require get_template_directory() . '/options-panel.php';