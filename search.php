<?php get_header(); ?>
<body>

    <header>Header Content</header>

    <aside>Left sidebar</aside>

    <section>
        <div class="section group">
            <div class="col span_1_of_3">
            This is column 1
            </div>
            <div class="col span_1_of_3">
                <?php

                echo "<h2>Search Results: " . get_search_query() . "</h2>";

                while(have_posts()) : the_post();
                
                    echo '<a href="'.get_the_permalink().'">';
                    echo get_the_post_thumbnail(get_the_ID(), 'thumbnail');
                    echo '</a><br>';
                
                    echo '<a href="'.get_the_permalink().'">'.get_the_title().'</a><br>';
                    
                    echo "Published by: " . get_the_author() . "(".get_the_author_posts().")<br>";
                
                    echo "Published on " . get_the_date() . "<br>";
                
                    $content = substr(strip_tags(get_the_content()), 0, 100).'...';
                
                    echo $content;
                    echo '<a href="'.get_the_permalink().'">Read More</a><br>';
                    echo '<hr>';
                    
                endwhile;
       

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
