<?php
get_header();
?>
<!-- the index.php is assigned to the blog page!!!-->
<!-- our queation of the day is 
 If we have any posts or pages, show them!!-->
 <div id="wrapper">
    <main>

 <?php if(have_posts()) : ?>
<!--We need to show the posts by using a while  loop in the world of PHP!!! -->
<?php while(have_posts()) : the_post() ; ?>
<?php the_content() ; ?>
<?php endwhile ; ?>
<?php else : ?>
<h2>
    <?php echo wpautop('Sorry, no posts were found!'); ?>
</h2>
 <?php endif; ?>
</main>

</div>
<!-- close wrapper -->

<?php
get_footer();
?>