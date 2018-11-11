<footer class="footer float-l col-xs-12">
    <ul class="float-l col-xs-12 float upper-footer">

        <!-- collumn-1 -->
        <ul class="float-l col-xs-4 float footer-box">
            <?php if( !dynamic_sidebar( 'foot1' ) ): ?>

        		<h5 class="module-heading">footer1</h5>
        		<p>Please add widgets via the admin area!</p>

        	<?php endif; ?>
        </ul>

        <!-- collumn-2 -->
        <ul class="float-l col-xs-4 float footer-box">
            <?php if( !dynamic_sidebar( 'foot2' ) ): ?>

        		<h5 class="module-heading">footer2</h5>
        		<p>Please add widgets via the admin area!</p>

        	<?php endif; ?>
        </ul>

        <!-- collumn-3 -->

        <ul class="float-l col-xs-4 float footer-box">
            <?php if( !dynamic_sidebar( 'foot3' ) ): ?>

        		<h5 class="module-heading">footer3</h5>
        		<p>Please add widgets via the admin area!</p>

        	<?php endif; ?>
        </ul>
    </ul>

    <div class="lower-footer float-l col-xs-12 float">
        <div class="footer-copy float-l col-xs-12 float">&copy; <?php echo date('Y'); ?> ArmaniimusWebdevelopment</div>
    </div>
    <?php wp_footer(); ?>
</footer>
</body>
</html>
