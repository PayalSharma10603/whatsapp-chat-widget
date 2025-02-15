<?php
/*
Plugin Name: WhatsApp Chat Widget
Description: A simple WhatsApp chat widget to send messages.
Version: 1.0
Author: Payal
*/

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

// Enqueue scripts and styles
function whatsapp_chat_enqueue_scripts() {
    wp_enqueue_style( 'whatsapp-chat-style', plugins_url( 'css/style.css', __FILE__ ) );
    wp_enqueue_script( 'whatsapp-chat-script', plugins_url( 'js/script.js', __FILE__ ), array(), '1.0', true );
}
add_action( 'wp_enqueue_scripts', 'whatsapp_chat_enqueue_scripts' );

// Display WhatsApp Chat Widget on all pages
function whatsapp_chat_display_widget() {
    ?>
    <div id="whatsapp-chat-widget">
        <div id="whatsapp-icon" onclick="toggleChat()">
            <img src="<?php echo plugins_url( 'images/whatsapp-icon.png', __FILE__ ); ?>" alt="WhatsApp Chat">
        </div>
        <div id="chat-box" style="display: none;">
            <input type="text" id="message" placeholder="Type your message...">
            <button onclick="sendMessage()">Send</button>
        </div>
    </div>
    <?php
}
add_action( 'wp_footer', 'whatsapp_chat_display_widget' );
