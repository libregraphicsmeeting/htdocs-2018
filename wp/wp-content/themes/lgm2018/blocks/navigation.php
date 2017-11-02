<!-- Navigation of the site -->

<div class="region-navigation">
    <!-- Classic hamburguer menu icon -->
    <p class="hamburguer-icon">
        <i></i><i></i><i></i>
    </p>
    <!-- Main menu -->
    <div class="main-menu--navigation">
        <?php wp_nav_menu( array(
            menu       => 'main',
        )); ?>
    </div>
    <!-- Social menu -->
    <div class="social-menu--navigation">
        <?php wp_nav_menu( array(
            menu       => 'social',
        )); ?>
    </div>
</div>
