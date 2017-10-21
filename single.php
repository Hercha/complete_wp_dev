<?php get_header(); ?>
<body>

    <header>Header Content</header>

    <aside>Left sidebar</aside>

    <section>
        <div class="section group">
            <div class="col span_1_of_3">
            <?= "<h2>".get_the_title()."</h2>" ?>;
            <?= "<h4>" . get_the_date() . "</h4>"?>;

            <?php
            // $posts = get_posts();
            // foreach($posts as $post) :
            //     setup_postdata($post);
            //     echo get_the_content();
            // endforeach;
            ?>

            </div>
            <div class="col span_1_of_3">
                <?php

                // echo "<h2>Countries</h2>";

                // $args = array(
                //     'posts_per_page'    => 1,
                //     'post_type'         => 'contries',
                //     'orderby'           => 'rand'
                // );
                
                // $post_data = get_posts($args);

                // foreach($post_data as $post){
                //     $link = get_permalink();
                //     echo '<h3><a href="'.$link.'">'.get_the_title().'</a></h3>';
                //     echo "Published on " . get_the_date() . '<br>';
                // }

                echo "<h2>Posts and Pages</h2>";
                
                // $args = array(
                //     'posts_per_page'    => 3,
                //     'post_type'         => array('post', 'page')
                // );
                
                // $post_data = get_posts($args);

                // foreach($post_data as $post){
                //     $link = get_permalink();
                //     echo '<h3><a href="'.$link.'">'.get_the_title().'</a></h3>';
                //     echo '<h3>' . get_the_title() . '</h3>';
                //     echo get_the_date() . '<br>';
                // }
                
                /* This section is for categories and/or tags*/
                echo("<section>");

                    echo "Categories: ";
                    the_category();
                    the_tags("Look at these tags", '/');

                echo("</section>");

                if (have_posts()) :
                    while (have_posts()) : the_post();
                        the_content();
                    endwhile;
                endif;

                comments_template();

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
