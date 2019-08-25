<?php

function add_new_menu_items() {
    add_menu_page(
        'トップページ設定', //Required. Text in browser title bar when the page associated with this menu item is displayed.
        'トップページ設定', //Required. Text to be displayed in the menu.
        "manage_options", //Required. The required capability of users to access this menu item.
        "home_options", //Required. A unique identifier to identify this menu item.
        "show_home_options_page", //Optional. This callback outputs the content of the page associated with this menu item.
        null,
        100 //Optional. Position of the menu item in the menu.
    );
}

function show_home_options_page() {
    echo '
        <h1>トップページ設定</h1>
        <form method="post" action="options.php">
        <style>input[type="text"], textarea { width: 500px; }</style>';

    settings_fields('default');
    do_settings_sections('options');
    submit_button(); 

    echo '</form>';
}

add_action("admin_menu", "add_new_menu_items");


    /*WordPress Settings API Demo*/

function display_options() {
    add_settings_section('default', null, null, 'options');

    add_settings_field('main_slogan', 'キャッチコピー', "display_main_slogan", "options");
    add_settings_field('main_message', 'メインメッセージ', "display_main_message", "options");
    add_settings_field('chochin_slogan', '提灯キャッチコピー', "display_chochin_slogan", "options");
    add_settings_field('chochin_message', '提灯メッセージ', "display_chochin_message", "options");
    add_settings_field('fusuma_slogan', 'ふすま/障子キャッチコピー', "display_fusuma_slogan", "options");
    add_settings_field('fusuma_message', 'ふすま/障子メッセージ', "display_fusuma_message", "options");

    register_setting('default', 'main_slogan');
    register_setting('default', 'main_message');
    register_setting('default', 'chochin_slogan');
    register_setting('default', 'chochin_message');
    register_setting('default', 'fusuma_slogan');
    register_setting('default', 'fusuma_message');
}

function display_main_slogan() { input('main_slogan'); }
function display_main_message() { textarea('main_message'); }
function display_chochin_slogan() { input('chochin_slogan'); }
function display_chochin_message() { textarea('chochin_message'); }
function display_fusuma_slogan() { input('fusuma_slogan'); }
function display_fusuma_message() { textarea('fusuma_message'); }

function input($id) {
    echo '<input type="text" name="' . $id . '" id="' . $id . '" value="' . get_option($id) . '">';
}

function textarea($id) {
    echo '<textarea rows="8" name="' . $id . '" id="' . $id . '">' . get_option($id) . '</textarea>';
}

add_action("admin_init", "display_options");

function get_option_with_newline($option) {
    return preg_replace('/\\r\\n|\\r|\\n/', '<br>', get_option($option));
}

?>
