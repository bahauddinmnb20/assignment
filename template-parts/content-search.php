<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package assignment
 */

?>

<article id="post-<?php the_ID(); ?>" >
<section class="newslettre">
        <div class="container-fluid">
            <div class="newslettre-width text-center">
                <div class="newslettre-info">
                    <h5><?php esc_html_e( 'Subscribe to our Newslatter');?></h5>
                    <p><?php esc_html_e( ' Sign up for free and be the first to get notified about new posts.');?> </p>
                </div>
                <form action="#" class="newslettre-form">
                    <div class="form-flex">
                        <div class="form-group">
                            <input type="email" class="form-control" placeholder="Your email adress" required="required">
                        </div>
                        <button class="submit-btn" type="submit">Subscribe</button>
                    </div>
                </form>
                <div class="social-icones">
                    <ul class="list-inline">
                        <li>
                            <a href="#">
                                <i class="fab fa-facebook-f"></i>Facebook</a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fab fa-twitter"></i>Twitter </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fab fa-instagram"></i>Instagram </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fab fa-youtube"></i>Youtube</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
<div class="search">
        <div class="container-fluid">
            <div class="search-width  text-center">
                <button type="button" class="close">
				<i class="fas fa-times"></i>
                </button>
                <form class="search-form" action="#">
                    <input type="search" value="" placeholder="What are you looking for?" name="s">
                    <button type="submit" class="search-btn">search</button>
                </form>
            </div>
        </div>

	<!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->


    </div>