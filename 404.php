<?php
get_header();
?>
<!-- the index.php is assigned to the blog page!!!-->
<!-- our queation of the day is 
 If we have any posts or pages, show them!!-->
 <div id="wrapper">
 <!-- add wrong page image -->
  <main>
    <h2>This is somewhat enbarrassing, isn't it?</h2>
    <p>It looks like nothing was found in this location! 
    Maybe try a diiferent search?</p>
    <?php get_search_form(); ?>
    <h3>Or, please feel free to browse our pages</h3>
    <?php wp_list_pages() ;?>
    </main>


<aside>
    This is my 404.php page!
</aside>

</div>
<!-- close wrapper -->

<?php
get_footer();
?>