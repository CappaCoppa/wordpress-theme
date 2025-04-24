<?php 

class ThemeHelper {
    public static function home_url() {
        return get_home_url();
    }

    public static function site_name() {
        return get_bloginfo( "name" );
    }

    public static function site_logo(){
        return get_custom_logo();
    }

    public static function theme_dir_uri() {
        return get_template_directory_uri();
    }

    public static function dist_url() {
        return get_template_directory() . '/dist';
    }
}