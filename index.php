<?php

/**
 * Plugin Name: Social Network
 * Plugin URI: http://wordpress.org/plugins/social-network/
 * Description: Un plugin qui affiche la liste des réseaux sociaux
 * Author:Chris BOUKONGOU
 * Version: 1.0
 * Author URI: http://ch.tt/
 */
function short_code_social()
{
    return '<ul>
    <li>Facebook : <a href="https://facebook.com/">https://facebook.com</a>.</li>
    <li>Instagram.com : <a href="https://instagram.com/">https://instagram.com</a></li>
    <li>Linkedin : <a href="https://www.linkedin.com">https://www.linkedin.com</a></li>
    <li>GitHub : <a href="https://github.com/honoagency">https://github.com/honoagency</a></li>
</ul>';
}
add_shortcode('show_social_network', 'short_code_social');
