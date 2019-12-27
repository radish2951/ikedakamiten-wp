<?php

function add_new_menu_items() {
    add_menu_page(
        '池田紙店の設定', //Required. Text in browser title bar when the page associated with this menu item is displayed.
        '池田紙店の設定', //Required. Text to be displayed in the menu.
        "edit_posts", //Required. The required capability of users to access this menu item.
        "ikedakamiten_options", //Required. A unique identifier to identify this menu item.
        "show_ikedakamiten_options_page", //Optional. This callback outputs the content of the page associated with this menu item.
        null,
        100 //Optional. Position of the menu item in the menu.
    );
}

function show_ikedakamiten_options_page() {
    echo '
        <h1>池田紙店の設定</h1>
        <form method="post" action="options.php">
        <style>input[type="text"], textarea { width: 500px; }</style>';

    settings_fields('default');
    settings_fields('company');
    do_settings_sections('options');
    submit_button(); 

    echo '</form>';
}

add_action("admin_menu", "add_new_menu_items");


    /*WordPress Settings API Demo*/

function display_options() {
    add_settings_section('default', 'トップページ設定', null, 'options');

    add_settings_field('main_slogan', 'キャッチコピー', "display_main_slogan", "options", 'default');
    add_settings_field('main_message', 'メインメッセージ', "display_main_message", "options", 'default');
    add_settings_field('chochin_slogan', '提灯キャッチコピー', "display_chochin_slogan", "options", 'default');
    add_settings_field('chochin_message', '提灯メッセージ', "display_chochin_message", "options", 'default');
    add_settings_field('fusuma_slogan', 'ふすま/障子キャッチコピー', "display_fusuma_slogan", "options", 'default');
    add_settings_field('fusuma_message', 'ふすま/障子メッセージ', "display_fusuma_message", "options", 'default');

    register_setting('default', 'main_slogan');
    register_setting('default', 'main_message');
    register_setting('default', 'chochin_slogan');
    register_setting('default', 'chochin_message');
    register_setting('default', 'fusuma_slogan');
    register_setting('default', 'fusuma_message');



    add_settings_section('company', '会社設定', null, 'options');

    add_settings_field('company_name', '会社名', 'display_company_name', 'options', 'company');
    add_settings_field('company_name_en', '会社名（英語）', 'display_company_name_en', 'options', 'company');
    add_settings_field('postal_code', '郵便番号', 'display_postal_code', 'options', 'company');
    add_settings_field('address', '住所', 'display_address', 'options', 'company');
    add_settings_field('tel', 'TEL', 'display_tel', 'options', 'company');
    add_settings_field('fax', 'FAX', 'display_fax', 'options', 'company');
    add_settings_field('email', 'メールアドレス', 'display_email', 'options', 'company');

    register_setting('company', 'company_name');
    register_setting('company', 'company_name_en');
    register_setting('company', 'postal_code');
    register_setting('company', 'address');
    register_setting('company', 'tel');
    register_setting('company', 'fax');
    register_setting('company', 'email');
}

function display_main_slogan() { input('main_slogan'); }
function display_main_message() { textarea('main_message'); }
function display_chochin_slogan() { input('chochin_slogan'); }
function display_chochin_message() { textarea('chochin_message'); }
function display_fusuma_slogan() { input('fusuma_slogan'); }
function display_fusuma_message() { textarea('fusuma_message'); }

function display_company_name() { input('company_name'); }
function display_company_name_en() { input('company_name_en'); }
function display_postal_code() { input('postal_code'); }
function display_address() { input('address'); }
function display_tel() { input('tel'); }
function display_fax() { input('fax'); }
function display_email() { input('email'); }

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

function add_grant() {
    $role = get_role('editor');
    $role->add_cap('manage_options');
}

add_action('admin_init', 'add_grant');
?>
