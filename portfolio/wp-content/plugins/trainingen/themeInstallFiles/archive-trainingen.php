<!-- trainingen page -->
<?php
/**
 * The template for displaying archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package bookflare
 */
get_header();

    $blog_layout = themesflat_get_opt('blog_archive_layout');
	$imgs = array('blog-list' => 'themesflat-blog');
	global $themesflat_thumbnail;
	$themesflat_thumbnail = $imgs[$blog_layout];
	$class = array('blog-archive');
	$class[] = $blog_layout;
	$sidebar = themesflat_choose_opt( 'blog_sidebar_list' );
	$layout = apply_filters( 'themesflat_blog_layout', themesflat_choose_opt('blog_layout'));
	if($layout == 'sidebar-right' && is_active_sidebar ( $sidebar ) ){
		$content_class = 'col-lg-8 col-md-12';
	}elseif($layout == 'sidebar-left' && is_active_sidebar ( $sidebar )){
		$content_class = 'col-lg-8 col-md-12 order-lg-8';
	}else{
		$content_class = 'col-12 col-sm-12 col-md-12';
	}
?>
<div id="primary">
	<div class="pfxn-search-form row">
		<?php get_search_form()?>
	</div>
	<div class="row blog-shortcode <?php echo esc_attr(implode(" ",$class));?> has-post-content">
		
		<?php
		if ( get_query_var( 'paged' ) ) { $paged = get_query_var( 'paged' ); }
		elseif ( get_query_var( 'page' ) ) { $paged = get_query_var( 'page' ); }
		else { $paged = 1; }
		$args = [ 
			'posts_per_page' => 9,
			'post_type' => 'trainingen',
			'paged' => $paged,
			'page' =>  $paged,
		];
		$my_query = new WP_Query( $args );?>
		<?php if ( $my_query->have_posts() ) :

		function pfxn_custom_excerpt_length( $length ) {
			return 25;
		}
		add_filter( 'excerpt_length', 'pfxn_custom_excerpt_length', 999 );

		function pfxn_excerpt_more( $more ) {
			return '';
// 			return ' <b>lees meer</b>';
		}
		add_filter( 'excerpt_more', 'pfxn_excerpt_more' );
		
		while ($my_query->have_posts() ) : $my_query->the_post(); ?>
		<div class="pfxn-article-wrapper col-1 col-sm-4">
			<article id="post-<?php the_ID(); ?>" <?php post_class( 'blog-post' ); ?>>
				<div class="main-post">
					<div class="post transition-vline border-ra4">
						<div class="post-content">
							<div class="pfxn-card-wrapper">
								<?php the_title( sprintf( '<h3 class="title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h3>' );?>
								<div class="pfxn-img-container">
									<?php if ( has_post_thumbnail() ): 
										the_post_thumbnail();
									else:?>
										<div class='img-placeholder'></div>
									<?php endif;?>
								</div>
							</div>
							<div class="pfxn-excerpt-wrapper">
								<?php the_excerpt();?>
							</div>
							<a href="<?php the_permalink() ?>" class="pfxn-train-button">
								<button>lees meer</button>
							</a>
						</div>
					</div>  <!-- /.post -->
				</div><!-- /.main-post -->
			</article><!-- #post-## -->
		</div>
		<?php
		endwhile;
		else :
		get_template_part( 'content', 'none' );

		endif; ?>
	</div>
	<div class="clearfix">
	<?php
// 		global $themesflat_paging_style, $themesflat_paging_for;
// 			$themesflat_paging_for = 'trainingen';
// 	        $themesflat_paging_style = themesflat_choose_opt('blog_archive_pagination_style');
// 		get_template_part( 'tpl/pagination' );
	?>
	</div>
</div><!-- #primary -->

<div class="pfxn-spacer-60"></div>

<!-- pagination -->
<?php
$GLOBALS['wp_query']->max_num_pages = $my_query->max_num_pages;
the_posts_pagination( array(
	'mid_size' => 1,
	'prev_text' => __( 'Nieuwer', 'green' ),
	'next_text' => __( 'Ouder', 'green' ),
	'screen_reader_text' => __( 'Posts navigation' )
) ); 

// Reset Query
wp_reset_query();
?>
<?php
get_footer();
