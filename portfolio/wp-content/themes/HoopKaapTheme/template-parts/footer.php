<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}
?>
<footer id="site-footer" class="site-footer" role="contentinfo">

	<ul class="float-l col-xs-12 float upper-footer">

        <!-- collumn-1 -->
        <section class="float-l col-xs-12 col-m-20p float footer-box">
            <?php if( !dynamic_sidebar( 'foot1' ) ): ?>

        		<h5 class="widget-foot-title">Footer1</h5>
        		<p>Please add widgets via the admin area!</p>

        	<?php endif; ?>
        </section>

        <!-- collumn-2 -->
        <section class="float-l col-xs-12 col-m-20p float footer-box">
            <?php if( !dynamic_sidebar( 'foot2' ) ): ?>

        		<h5 class="widget-foot-title">Footer2</h5>
        		<p>Please add widgets via the admin area!</p>

        	<?php endif; ?>
        </section>

        <!-- collumn-3 -->
        <section class="float-l col-xs-12 col-m-20p float footer-box">
            <?php if( !dynamic_sidebar( 'foot3' ) ): ?>

        		<h5 class="widget-foot-title">Footer3</h5>
        		<p>Please add widgets via the admin area!</p>

        	<?php endif; ?>
        </section>
        
        <!-- collumn-4 -->
        <section class="float-l col-xs-12 col-m-20p float footer-box">
            <?php if( !dynamic_sidebar( 'foot4' ) ): ?>

        		<h5 class="widget-foot-title">Footer4</h5>
        		<p>Please add widgets via the admin area!</p>

        	<?php endif; ?>
        </section>
        
        <!-- collumn-5 -->
        <section class="float-l col-xs-12 col-m-20p float footer-box">
            <?php if( !dynamic_sidebar( 'foot5' ) ): ?>

        		<h5 class="widget-foot-title">Footer5</h5>
        		<p>Please add widgets via the admin area!</p>

        	<?php endif; ?>
        </section>
    </ul>

    <div class="lower-footer col-xs-12">
<!--         <div class="footer-noomblocial-wrap col-xs-12">
            <div class="footer-Hoopcial">
                <a style="color:#3b5998;" href="" target="_blank" rel="nofollow" title="" data-title="">
                    <i class="fab fa-facebook"><span>Facebook</span></i>
                </a>
                <a style="color:#55acee;" href="" target="_blank" rel="nofollow" title="" data-title="">
                    <i class="fa fa-twitter"><span class="noomScreenReader">Twitter</span></i>
                </a>
                <a style="color:#3f729b;" href="" target="_blank" rel="nofollow" title="" data-title="">
                    <i class="fa fa-instagram"><span class="noomScreenReader">Instagram</span></i>
                </a>
                <a style="color:#0077b5;" href="" target="_blank" rel="nofollow" title="" data-title="">
                    <i class="fa fa-linkedin"><span class="noomScreenReader">Linkedin</span></i>
                </a>
                <a style="color:#cd201f;" href="" target="_blank" rel="nofollow" title="" data-title="">
                    <i class="fa fa-youtube"><span class="noomScreenReader">Youtube</span></i>
                </a>
            </div>
        </div> -->
    </div>
	<p class='copyRightLine'>&copy; Copyright 2018 - <?php echo date('Y'); ?>   |   De HoopKaap   |   Alle rechten voorbehouden</p>
</footer>
