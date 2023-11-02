<?php

// start выключение обновления плагина acf-pro
add_filter('site_transient_update_plugins', 'remove_update_notification');
function remove_update_notification($value)
{
    unset($value->response["advanced-custom-fields-pro/acf.php"]);
    return $value;
}
// end выключение обновления плагина acf-pro

// start включение элементов в тему
add_theme_support('custom-logo');

add_action('after_setup_theme', function () {
    register_nav_menus([
        'header_menu' => 'Меню в шапке',
        'footer_menu' => 'Меню в подвале'
    ]);
});
// end включение элементов в тему

// start отключение лишних стилей
add_filter('tablepress_use_default_css', 'wpkum_tablepress_css_conditionally');
function wpkum_tablepress_css_conditionally($load)
{
    return false;
}
// end отключение лишних стилей