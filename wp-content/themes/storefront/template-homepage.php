<?php
/**
 * The template for displaying the homepage.
 *
 * This page template will display any functions hooked into the `homepage` action.
 * By default this includes a variety of product displays and the page content itself. To change the order or toggle these components
 * use the Homepage Control plugin.
 * https://wordpress.org/plugins/homepage-control/
 *
 * Template name: Homepage
 *
 * @package storefront
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<div id="post-2" class="post-2 page type-page status-publish has-post-thumbnail hentry" style="min-height: 65vh;text-align: right;background-image: url(<?php echo esc_url( get_permalink())?>wp-content/uploads/2020/04/bg.png); width: 1098px; margin-left: -60px;" data-featured-image="http://localhost/wp-content/uploads/2020/04/bg-150x150.png">
		
		<div style="width:50%; float:right">
		<div style="background:black;color:white;font-size:33px; line-height:32px;margin-top: 60px;padding:20px;margin-right:40px">Найкращий товар за найкращими цінами</div>
		<a href="/shop/" class="button" value="Перейти в магазин" style="margin-top:30px; margin-right:40px">Перейти в магазин</a>

		</div>
		</main><!-- #main -->
	</div><!-- #primary -->
<?php
get_footer();
