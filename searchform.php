<form class="searchform" action="<?php home_url('/') ?>" method="get">
    Search <input type="text" name="s" value="<?php echo the_search_query() ?>">
    <br>
    <select name="search_category" id="">
        <option value="none">Select a Category</option>
            <?php 
                $categories = get_categories();
                foreach($categories as $cat) {

                    $val    = $cat->category_nicename;
                    $name   = $cat->cat_name;
                    $count  = $cat->category_count;
                    print("<option value='$val'>$name ($count)</option>");
                }
            ?>
    </select>
    <br>
    <input type="submit" value="Go For It!!!">
</form>