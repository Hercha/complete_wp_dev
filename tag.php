<?php get_header(); ?>
<body>

    <header>Header Content</header>

    <aside>Left sidebar</aside>

    <section>
        <div class="section group">

            <div class="col span_1_of_3">
               
               <h1>Tag: <?= single_cat_title(); ?></h1>
               
                <?php

                while(have_posts()) : the_post(); ?>
                
                <h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
                
                <?php endwhile;
                    
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
