<?php
class Menus {

    public static function header_menu(){
        return wp_nav_menu( 
            array( 
                'theme_location' => 'header_menu',
                'menu_class' => 'header-menu', // Class for the <ul> element.
                'list_class' => 'list'
            )
        );
    }
    
    public static function footer_menu(){
        return wp_nav_menu( 
            array( 
                'theme_location' => 'footer_menu',
                'menu_class' => 'footer-menu' // Class for the <ul> element.
            )
        );
    }
}    
?>