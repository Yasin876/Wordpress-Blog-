<footer>
  <div class="container">
    <div class="row">
      <div class="copyright col-sm-7 col-md-4">
        <p> <?php echo get_theme_mod('set_copyright');   ?>  <!--for customize copyright section -->  </p>
      </div>
      <nav class="footer-menu col-sm-5 col-8 text-right">
         <?php wp_nav_menu( array( "menu_lacation"=>"footer_menu") ); ?>
      </nav>
    </div>
  </div>
</footer>
<?php wp_footer(); ?>
<!-- to add actions in functions.php , or you can not load scripts file-->
</body>

</html>