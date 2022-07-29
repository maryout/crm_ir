<?php

defined('BASEPATH') or exit('No direct script access allowed');

function app_init_admin_sidebar_menu_items()
{
    $CI = &get_instance();

    $CI->app_menu->add_sidebar_menu_item('dashboard', [
        'name'     => _l('als_dashboard'),
        'href'     => admin_url(),
        'position' => 1,
        'icon'     => 'fa fa-home',
        'badge'    => [],
    ]);





    if (is_staff_member()) {
        $CI->app_menu->add_sidebar_menu_item('leads', [
            'name'     => _l('als_leads'),
            'href'     => admin_url('leads'),
            'icon'     => 'fa fa-tty',
            'position' => 45,
            'badge'    => [],
        ]);
    }

       
}
