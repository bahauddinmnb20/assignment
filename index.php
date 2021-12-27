<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package assignment
 */

get_header();

?>

	<main id="primary" class="site-main">



    <section class="masonry-layout col2-layout mt-120">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-8 mt--10 ">
                    <!--cards-->
                    <div class="card-columns">

		<?php
		if ( have_posts() ) :
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();
				get_template_part('template-parts/post');

			endwhile;
			the_posts_navigation();
		endif;
		?>

                        <!--/-->
                       
                    </div>

                    <!--pagination-->
                    <div class="pagination mt-30">
                        <ul class="list-inline">
                            <li class="active">
                                <a href="#">1</a>
                            </li>
                            <li>
                                <a href="#">2</a>
                            </li>
                            <li>
                                <a href="#">3</a>
                            </li>
                            <li>
                                <a href="#">4</a>
                            </li>
                            <li>
                                <a href="#">
								<i class="fas fa-arrow-right"></i>
                                </a>
                            </li>
                        </ul> 
                    </div><!--/-->
                </div>
                <div class="col-lg-4 max-width">
                    <!--widget-latest-posts-->
                <?php get_template_part('sidebar')?>
                    <!--/-->
                </div>
            </div>
        </div>
    </section>






    <?php get_template_part('template-parts/content-search'); ?>
	

	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
