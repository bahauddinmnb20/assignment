<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package assignment
 */

?>

	<!-- #colophon -->
</div><!-- #page -->
<?php wp_footer(); ?>
<footer class="footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="copyright">
                        <?php
                    if (is_active_sidebar( 'copyright' ) ) {
                        dynamic_sidebar( 'copyright' );

                            }
                            ?>
							<p>&copy:<?php esc_html_e('Copyright');?> <?php echo date('Y ');?><a href="#"><?php echo bloginfo( ' name' );?></a>' <?php esc_html_e('| All rights reserved.');?></p>
                    </div>
                    <div class="back">
                        <a href="#" class="back-top">
                            <i class="arrow_up"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>

