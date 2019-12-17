<!-- trainingen-single -->
<?php
/**
 * The template for displaying all Training posts
 *
//  * this file is managed by the trainingen plugin
 */
$model = new PfxN_Trainingen_Model();
$trainArray = $model->readTrain( get_the_ID() );
$trainerIDS = explode(',', $trainArray['trainID']);
$hoofdTrain = $trainArray['hoofdTrain'];
// var_dump($trainerIDS);

function getTrainerRows($trainerIDS) {
	$array = TRAINERS_ARRAY;
	$resArray = [];
	
	for ($i=0; $i<count($array); $i++) {
		if ( in_array($array[$i]["id"], $trainerIDS) ) {
			array_push($resArray, $array[$i]);
		};
	}
	return $resArray;
}
$currTrainArray = getTrainerRows($trainerIDS);
$currSpecial = getTrainerRows([$hoofdTrain]);
$currSpecial = $currSpecial[0];
// var_dump($currSpecial);

// echo "<pre>";
// var_dump( $currTrainArray );
// echo "</pre>";

get_header();
	$blog_layout = themesflat_get_opt('blog_archive_layout');
	$sidebar = themesflat_choose_opt( 'blog_sidebar_list' );
	$layout = apply_filters( 'themesflat_blog_layout', themesflat_choose_opt('blog_layout'));
	if($layout == 'sidebar-right' && is_active_sidebar ( $sidebar ) ){
		$content_class = 'col-lg-8 col-md-12';
	}elseif($layout == 'sidebar-left' && is_active_sidebar ( $sidebar ) ){
		$content_class = 'col-lg-8 col-md-12 order-lg-8';
	}else{
		$content_class = 'col-12 col-sm-12 col-md-12';
	} 
?>
<div id="primary" class="<?php echo esc_attr( $content_class ); ?> content-area">
	<main id="main" class="post-wrap ">
		<div class="content-page-wrap">
            <div class="flat-post">
            	<div class="blog-shortcode has-post-content">
				<?php if ( have_posts() ) :	
					while (have_posts() ) : the_post();
// 						get_template_part( 'content', 'single');
						/**
						 * @package bookflare
						 */
						global $themesflat_thumbnail;
						$themesflat_thumbnail = 'themesflat-blog-single';
						if (function_exists( 'themesflat_custom_shortcodes_class' )) {
							setPostViews(get_the_ID());
						}
						?>
						<article id="post-<?php the_ID(); ?>" <?php post_class( 'blog-post blog-single post-single' ); ?>>
							<!-- begin feature-post single  -->
							<?php if(!is_singular( 'teacher' )){
								get_template_part( 'tpl/feature-post-single');
							} ?>
							<!-- end feature-post single-->
							<div class="entry-box-title clearfix">
								<div class="wrap-entry-title">
									<?php the_title( '<h3 class="title">', '</h3>' );	?>				
										<div class="entry-meta clearfix">
											<?php //themesflat_posted_on(get_the_ID()); ?>		
										</div><!-- /.entry-meta				 -->
								</div><!-- /.wrap-entry-title -->
							</div>		
							<div class="main-post">		
								<div class="entry-content clearfix">
									<p><?php 	echo stripslashes( $trainArray["paraf1"] ); ?></p>
									
									<h3><?php 	echo stripslashes( $trainArray["title2"] ); ?></h3>
									<p><?php 	echo stripslashes( $trainArray["paraf2"] ); ?></p>
									
									<h3><?php 	echo stripslashes( $trainArray["title3"] ); ?></h3>
									<p><?php 	echo stripslashes( $trainArray["paraf3"] ); ?></p>
									
									<h3><?php 	echo stripslashes( $trainArray["title4"] ); ?></h3>
									<p><?php 	echo stripslashes( $trainArray["paraf4"] ); ?></p>
									
									<h3><?php 	echo stripslashes( $trainArray["title5"] ); ?></h3>
									<p><?php 	echo stripslashes( $trainArray["paraf5"] ); ?></p>
									
									<br><br>
									<button class="trainingBtn trainingBtn1" id="showTrainersBtn2">Toon trainers</button><br>	
									<?php if ( trim( stripslashes( $trainArray["paraf6"] ) ) ): ?>
										<button class="trainingBtn trainingBtn2" id="showInspiratieBtn">Inspiratie</button><br>
									<?php endif; ?>
									
									<br>
									
									<?php if ( trim( stripslashes( $trainArray["paraf7"] ) ) ): ?>
										<button class="trainingBtn trainingBtn3" id="showAchtergrondBtn">Achtergronden</button><br>
									<?php endif; ?>
									<button class="trainingBtn trainingBtn4" id="showTrainersBtn">Neem contact op</button><br>
									
									<?php if ( trim( stripslashes( $trainArray["paraf6"] ) ) ): ?>
										<div id="inspiratie-overlay" class="trainer-overlay display-none">
											<div class="trainer-block trainer-block-other">
												<div id="inspiratie-closeBtn" class="trainer-closeBtn">
													X
												</div>

												<div class="row trainerContainer">
													<div class='col-4 trainer-card-wrapper trainer-special'>
														<h3><?php 	echo stripslashes( $trainArray["title6"] ); ?></h3><br>
														<p><?php 	echo stripslashes( $trainArray["paraf6"] ); ?></p>
													</div>
												</div>
											</div>
										</div>
									<?php endif;?>
									
									<?php if ( trim( stripslashes( $trainArray["paraf7"] ) ) ): ?>
										<div id="achtergrond-overlay" class="trainer-overlay display-none">
											<div class="trainer-block trainer-block-other">
												<div id="achtergrond-closeBtn" class="trainer-closeBtn">
													X
												</div>

												<div class="row trainerContainer">
													<div class='col-4 trainer-card-wrapper trainer-special'>
														<h3 clas><?php 	echo stripslashes( $trainArray["title7"] ); ?></h3><br>
														<p><?php 	echo stripslashes( $trainArray["paraf7"] ); ?></p>
													</div>
												</div>
											</div>
										</div>
									<?php endif;?>
									
									<div id="trainer-overlay" class="trainer-overlay display-none">
										<div class="trainer-block">
											<div id="trainer-closeBtn" class="trainer-closeBtn">
												X
											</div>
											
											<div class="row trainerContainer">
												<div class='col-4 trainer-card-wrapper trainer-special'>
													<div class='trainCard trainCard-front'>
 														<div class='trainCardImgContainer'>
 															<img class='trainCardImg' src='<?php echo $currSpecial["picture"]; ?>'>
 														</div>
 														<p><?php echo $currSpecial["name"];?></p>
 														<button class='trainCardBtn'>contact trainer</button>
 													</div>
														
 													<div class='trainCard trainCard-back'>
 														<div>
 															<p>Naam: <?php echo $currSpecial["name"];?></p>
															<p>Email: 
																<a href='mailto:<?php echo $currSpecial["email"];?>'><?php echo $currSpecial["email"];?></a>
															</p>
															<p>Telefoon:
 																<a href='tel:<?php echo $currSpecial["tel"];?>'><?php echo $currSpecial["tel"];?></a>
															</p>
														</div>
													</div>
												</div>
											</div>
											<div class="row trainerContainer">
												<?php 
												//trainer cards
												for ($i=0; $i<count($currTrainArray); $i++):
													$picture = $currTrainArray[$i]["picture"];
													$name = $currTrainArray[$i]["name"];
													$email = $currTrainArray[$i]["email"];
													$tel = $currTrainArray[$i]["tel"]; 
													?>
													
													<div class='col-4 trainer-card-wrapper'>
 														<div class='trainCard trainCard-front'>
 															<div class='trainCardImgContainer'>
 																<img class='trainCardImg' src='<?php echo $picture; ?>'>
 															</div>
 															<p><?php echo $name;?></p>
 															<button class='trainCardBtn'>contact trainer</button>
 														</div>
														
 														<div class='trainCard trainCard-back'>
 															<div>
 																<p>Naam: <?php echo $name;?></p>
																<p>Email: 
																	<a href='mailto:<?php echo $email;?>'><?php echo $email;?></a>
																</p>
																<p>Telefoon:
 																	<a href='tel:<?php echo $tel;?>'><?php echo $tel;?></a>
 																</p>
 															</div>
 														</div>
 													</div>
												<?php endfor; ?>
											</div>
										</div>										
									</div>
									<script>
										// rotate card
										let eventTarget;
										const trainCard = document.getElementsByClassName("trainCardBtn");
										for (let i=0; i<trainCard.length; i++) {
											trainCard[i].addEventListener('click', function(e) {
												const trainerWrapper = e.currentTarget.parentElement.parentElement
												trainerWrapper.classList.add('trainer-card-wrapper-rotate');
												
												setTimeout(function(){ 
													eventTarget = trainerWrapper;
													document.addEventListener('click', clickEvent);
												}, 5);	
											});
										}
										
										function clickEvent(e2) {
											const target = e2.target
											
											if (target.tagName == "A") {
												console.log(1);
												return;
											}
											
											let currentSelector = eventTarget.children[1];
											if (target == currentSelector) {
												console.log(2);
												return;
											} 
											
											currentSelector = currentSelector.children[0];
											if (target == currentSelector) {
												console.log(3);
												return;
											}
											
											for(let i=0; i<currentSelector.children.length; i++) {
												if (target == currentSelector.children[i]) {
													console.log(4);
													return;
												}
											}
											
											document.removeEventListener('click', clickEvent);
											eventTarget.classList.remove('trainer-card-wrapper-rotate');
											
											//refreshes the border
											setTimeout(function(){ 
												eventTarget.children[0].classList.remove("trainCard");
												setTimeout(function(){ 
													eventTarget.children[0].classList.add("trainCard");
												}, 1);
											}, 600);
										}
										
										// close with red btn
										const trainCloseBtn = document.getElementById("trainer-closeBtn");
										trainCloseBtn.addEventListener('click', function() {
											const overlay = document.getElementById('trainer-overlay');
											overlay.classList.add("display-none");
										});
										
										// close with offclick
										const overlayTrainer = document.getElementById('trainer-overlay');
										overlayTrainer.addEventListener('click', function(e) {
											if (e.target == e.currentTarget) {
												e.currentTarget.classList.add("display-none");
											}
										});
										
										// show trainers
										const showTrainerBtn = document.getElementById("showTrainersBtn");
										showTrainerBtn.addEventListener('click', function() {
											const overlay = document.getElementById('trainer-overlay');
											overlay.classList.remove("display-none");
											
											console.log("close");
										});
										
										const showTrainerBtn2 = document.getElementById("showTrainersBtn2");
										showTrainerBtn2.addEventListener('click', function() {
											const overlay = document.getElementById('trainer-overlay');
											overlay.classList.remove("display-none");
											
											console.log("close");
										});
										
										// -------------------
										// Inspiratie overlay
										// -------------------
										
										// close with red btn
										const inspiratieCloseBtn = document.getElementById("inspiratie-closeBtn");
										inspiratieCloseBtn.addEventListener('click', function() {
											const overlay = document.getElementById('inspiratie-overlay');
											overlay.classList.add("display-none");
										});
										
										// close with offclick
										const overlayInspiratie = document.getElementById('inspiratie-overlay');
										overlayInspiratie.addEventListener('click', function(e) {
											if (e.target == e.currentTarget) {
												e.currentTarget.classList.add("display-none");
											}
										});
										
										// show inpiratie
										const showInspiratieBtn = document.getElementById("showInspiratieBtn");
										showInspiratieBtn.addEventListener('click', function() {
											const overlay = document.getElementById('inspiratie-overlay');
											overlay.classList.remove("display-none");
											
											console.log("close");
										});
										
										// -------------------
										// Achtergrond overlay
										// -------------------
										 
										// close with red btn
										const achtergrondCloseBtn = document.getElementById("achtergrond-closeBtn");
										achtergrondCloseBtn.addEventListener('click', function() {
											const overlay = document.getElementById('achtergrond-overlay');
											overlay.classList.add("display-none");
										});
										
										// close with offclick
										const overlayAchtergrond = document.getElementById('achtergrond-overlay');
										overlayAchtergrond.addEventListener('click', function(e) {
											if (e.target == e.currentTarget) {
												e.currentTarget.classList.add("display-none");
											}
										});
										
										// show achtergrond
										const showAchtergrondBtn = document.getElementById("showAchtergrondBtn");
										showAchtergrondBtn.addEventListener('click', function() {
											const overlay = document.getElementById('achtergrond-overlay');
											overlay.classList.remove("display-none");
											
											console.log("close");
										});
										
									</script>
									
									<?php
									wp_link_pages( array(
										'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'bookflare' ),
										'after'  => '</div>',
										'link_before' => '<span>',
										'link_after'  => '</span>'
										) );
										?>
								</div><!-- .entry-content -->
							</div><!-- /.main-post -->
						</article><!-- #post-## -->
						<?php if (themesflat_choose_opt('show_author_post') == 0 && themesflat_choose_opt('show_share_link') == 0 && themesflat_choose_opt('show_post_navigator' ) == 0) {?>
							<div class="line-bottom-single-post border-top-f0f0f0"></div>
						<?php } else {?>
							<footer class="infor infor-post clearfix">
								<div class="row">
									<div class="col-md-6 col-sm-6">
										<?php if (themesflat_choose_opt('show_author_post')!=0) { ?>
											<div class="admin-wrap">
												<h6 class="admin"> <?php esc_html_e( 'POST FROM BY', 'bookflare' ); the_author_posts_link(); ?></h6>
											</div>
										<?php }  ?>
									</div>
									<div class="col-md-6 col-sm-6">
										<?php if (themesflat_choose_opt('show_share_link') !=0) {?>
											<div class="socails flat-text-right">
												<ul class="list">
													<li><?php esc_html_e( 'SHARE ', 'bookflare' );?></li>
													<?php 
														$link = get_the_permalink( $post, false ); 
														themesflat_render_social_share($link); 
													 ?>
												</ul>
											</div>
										<?php } ?>
									</div>
								</div>
							</footer><!-- .entry-footer -->
						<?php } ?>

						<?php if(!is_singular( 'teacher' )){?>
						<div class="main-single">
							<?php 
							if ( 'post' == get_post_type() && themesflat_choose_opt('show_post_navigator' ) != 0 ): 
								themesflat_post_navigation(); 				
							endif;
							?>
							<?php get_template_part( 'tpl/related-post' ); ?>
								<div class="clearfix"></div>
							<?php }?>
							
						</div><!-- /.main-single -->				
 					<?php
					endwhile;		
				else :
					get_template_part( 'content', 'none' );
					
				endif; ?>
				</div>
			</div>
		</div>
	</main><!-- #main -->
</div><!-- #primary -->
<?php get_sidebar(); ?>
<?php 
get_footer();
