<footer class="footer">
<div class="container">
    <div class="row">
        <div class="col-xl-3">
            <div class="logo">
                <h2>LOGO</h2>
                <div class="logo-iconos">
                    <i class="bi bi-facebook"></i>
                    <i class="bi bi-twitter"></i>
                </div>
            </div>
        </div>
        <div class="col-xl-3">
        <?php if( is_active_sidebar('sidebar-footer-izq')){
            dynamic_sidebar('sidebar-footer-izq');
        } ?>
        </div>
        <div class="col-xl-3">
        <?php if( is_active_sidebar('sidebar-footer-cent')){
            dynamic_sidebar('sidebar-footer-cent');
        } ?>
        </div>
        <div class="col-xl-3">
            <?php if( is_active_sidebar('sidebar-footer-der')){
            dynamic_sidebar('sidebar-footer-der');
        } ?>
        </div>
    </div>
</div>
</footer>
<!-- <script src="js/index.js"></script>
<script src="js/particles.js"></script>
<script src="js/app.js"></script> -->
<?php wp_footer(); ?>
</body>
</html>
