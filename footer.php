<?php wp_footer(); ?>

<footer>

<?php 

wp_nav_menu(
    array(
        'theme_location'    =>  'footer_menu',
        'fallback_cb'       =>  false,
        'menu_id'           =>  'footer-menu',
        'menu_class'        =>  'footer-menus',
        'after'             =>  '|'
    )
);
    
?>

&copy; <?= the_current_date(); ?> Designed By Us

</footer>