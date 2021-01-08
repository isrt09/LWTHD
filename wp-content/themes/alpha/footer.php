<div class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <?php dynamic_sidebar('sidebar-2'); ?>
            </div>
            <div class="col-md-4">
                <?php dynamic_sidebar('sidebar-3'); ?>
            </div>
            <div class="col-md-4">
                <header class="main-header">                            
                    <nav class="main-menu">
                        <div class="menu">
                            <ul>
                                <?php wp_nav_menu([
                                    'theme_location' => 'footermenu'
                                ]); ?>
                            </ul>
                        </div>
                    </nav>          
                </header>
            </div>
        </div>
    </div>
</div>
<?php wp_footer(); ?>
</body>
</html>