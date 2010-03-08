<?php
/*
Template Name: DaHomepage
*/
?>
<?php

    // calling the header.php
    get_header();

    // action hook for placing content above #container
    thematic_abovecontainer();

?>

	<div id="container" class="homepage">
		<div id="content" class="homepage">

            <?php
        
            the_post();
            
            ?>
            
			<div id="post-<?php the_ID(); ?>" class="<?php thematic_post_class() ?>">
    			<?php
                
                // creating the post header
                
                ?>
                
				<div class="entry-content">
                
                    <?php
                    
                    the_content();
                    
                    ?>

                    
                    <?php
                    
                    edit_post_link(__('Edit', 'thematic'),'<span class="edit-link">','</span>');
                    
                    ?>

				</div>
			</div><!-- .post -->

		</div><!-- #content -->
	</div><!-- #container -->
	<div id="right" class="homepage">
		<div id="recent-articles" class="homepage">
			<h3>Recent Blog Posts</h3>
			<ul>
			<?php wp_get_archives('type=postbypost&limit=5&format=html'); ?>
			</ul>
		</div>
		<div id="contact-colin" class="homepage">
			<h3>Get in touch</h3>
			<ul>
				<?php wp_list_bookmarks('title_li=&categorize=0&category=36'); ?>
			</ul>
		</div>
	</div>

<?php 

    // action hook for placing content below #container
    thematic_belowcontainer();

    // calling footer.php
    get_footer();

?>