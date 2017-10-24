<?php get_header(); ?>
<body>
    
    <?php

    $menu_args = array(
        'theme_location'        =>  'header_menu',
        'echo'                  =>  false,
        'menu_id'               =>  'header_complete_theme',
        'menu_class'            =>  'all_menus',
        'before'                =>  '-->',
        'after'                 =>  '|',
        'container'             =>  'div',
        'container_id'          =>  'header_parent',
        'container_class'       =>  'header_menus'
    );

    $header_menu = wp_nav_menu($menu_args);
    
    echo $header_menu;

    $args = array(
        'smallest'  => 10,
        'largest'   => 20,
        'unit'      => 'px',
        'number'    => 2,
        'format'    => 'flat',
        'separator' => '|',
        'order'     => 'DESC',
        'orderby'   => 'count'
    
    );
    
    wp_tag_cloud($args);
    
    ?>

    <header>Header Content</header>

    <aside>Left sidebar</aside>

    <section>
        <div class="section group">
            <div class="col span_1_of_3">
            
            <?php
                
            if(has_nav_menu('left_sidebar')) {
                
                wp_nav_menu(
                    array(
                        'theme_location'    =>  'left_sidebar',
                        'menu_id'           =>  'left-sidebar-menu',
                        'fallback_cb'       =>  false
                    )
                );
            } else {
                echo "Oops! Sorry there is no left sidebar menu. Please click on one of the menu links above";
            }   
                
            ?>
            
            </div>
            <div class="col span_1_of_3">
                <?php
                
                echo "<h2>Music</h2>";
                
                $args = array(
                    'posts_per_page'    => 3,
                    'post_type'         => array('cpt', 'concerthall')
                );
                
                $post_data = get_posts($args);

                foreach($post_data as $post){
                    $link = get_permalink();
                    echo '<h3><a href="'.$link.'">'.get_the_title().'</a></h3>';
                    echo '<h3>' . get_the_title() . '</h3>';
                    echo get_the_date() . '<br>';
                }
                
                echo "<h2>Countries</h2>";

                $args = array(
                    'posts_per_page'    => 1,
                    'post_type'         => 'contries',
                    'orderby'           => 'rand'
                );
                
                $post_data = get_posts($args);

                foreach($post_data as $post){
                    $link = get_permalink();
                    echo '<h3><a href="'.$link.'">'.get_the_title().'</a></h3>';
                    echo "Published on " . get_the_date() . '<br>';
                }

                echo "<h2>Posts and Pages</h2>";
                
                $args = array(
                    'posts_per_page'    => 3,
                    'post_type'         => array('post', 'page')
                );
                
                $post_data = get_posts($args);

                foreach($post_data as $post){
                    $link = get_permalink();
                    echo '<h3><a href="'.$link.'">'.get_the_title().'</a></h3>';
                    echo '<h3>' . get_the_title() . '</h3>';
                    echo get_the_date() . '<br>';
                }
                

                 ?>
            </div>
            <div class="col span_1_of_3">
                <?php get_sidebar(); ?>
            </div>
        </div>
    </section>

    <aside>Right Sidebar</aside>

<?php get_footer(); ?>
    
</body>
</html>
