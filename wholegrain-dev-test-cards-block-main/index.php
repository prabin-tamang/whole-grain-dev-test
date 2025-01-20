<?php

get_header();

if (have_posts() ) {
    while ( have_posts() ) {
        the_post(); 
           echo '<div class="container">'; // Open the div contain
        the_content(); 
           echo '</div>'; // Close the div container
    }
}

get_footer();
