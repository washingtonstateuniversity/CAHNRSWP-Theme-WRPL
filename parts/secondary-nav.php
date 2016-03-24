<section>
    <div class="primary-nav">

    <?php /*  Allow screen readers / text browsers to skip the navigation menu and get right to the good stuff */ ?>
<!--    
    <div class="skip-link screen-reader-text">
        <a title="Skip to content" href="#content">Skip to content</a>
    </div>
    //-->
    
    <?php wp_nav_menu( array( 'container_class' => 'main-nav', 'theme_location' => 'primary' ) ); ?>

 
    </div>
</section>