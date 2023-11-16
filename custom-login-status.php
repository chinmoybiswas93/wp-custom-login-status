<?php
/*
Plugin Name: Custom Login Status
Description: Display a custom login status shortcode.
Version: 1.0
Author: Chinmoy Biswas
*/

function custom_login_status_shortcode()
{
    $user_icon = '<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 48 54" fill="none"><path d="M13.2202 12.36C13.1736 13.7663 13.4045 15.1679 13.8997 16.4849C14.3949 17.8019 15.1446 19.0085 16.1061 20.0358C17.0676 21.0631 18.2219 21.8909 19.5033 22.472C20.7848 23.0531 22.1681 23.3762 23.5743 23.4227C24.9806 23.4692 26.3822 23.2383 27.6992 22.7432C29.0162 22.248 30.2228 21.4983 31.2501 20.5368C32.2773 19.5753 33.1052 18.4209 33.6863 17.1395C34.2674 15.8581 34.5905 14.4748 34.637 13.0685C34.6835 11.6623 34.4526 10.2607 33.9574 8.94364C33.4623 7.62663 32.7126 6.42005 31.7511 5.39278C30.7896 4.36552 29.6352 3.53769 28.3538 2.95656C27.0724 2.37543 25.6891 2.05238 24.2828 2.00586C22.8766 1.95934 21.4749 2.19025 20.1579 2.68542C18.8409 3.18059 17.6343 3.93031 16.6071 4.89178C15.5798 5.85326 14.752 7.00765 14.1709 8.28905C13.5897 9.57046 13.2667 10.9538 13.2202 12.36Z" stroke="black" stroke-width="3.5" stroke-linecap="round" stroke-linejoin="round"></path><path d="M45.3571 52C43.6016 47.7714 40.6288 44.1572 36.8145 41.6144C33.0003 39.0715 28.5159 37.7143 23.9286 37.7143C19.3412 37.7143 14.8569 39.0715 11.0426 41.6144C7.22836 44.1572 4.25551 47.7714 2.5 52" stroke="black" stroke-width="3.5" stroke-linecap="round" stroke-linejoin="round"></path></svg>';

    // Check if the user is logged in
    if (is_user_logged_in()) {
        // User is logged in
        $current_user = wp_get_current_user();
        $output = '<a style="display:flex;" class="login-logout" href="' . wp_logout_url(home_url()) . '"> <span style="margin-top:2px; margin-right:4px;">' . $user_icon . '</span> <span>Log out</span></a>';
    } else {
        // User is logged out
        $output = '<a style="display:flex;" class="login-logout" href="#elementor-action%3Aaction%3Dpopup%3Aopen%26settings%3DeyJpZCI6IjYwMDAiLCJ0b2dnbGUiOmZhbHNlfQ%3D%3D"> <span style="margin-top:2px; margin-right:4px;">' . $user_icon . '</span> <span>Log In</span></a>';
    }

    return $output;
}
add_shortcode('login_status', 'custom_login_status_shortcode');
