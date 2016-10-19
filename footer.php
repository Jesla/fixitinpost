<footer class="site-footer">
    <nav class="top-nav">
        <?php wp_nav_menu(); ?> <!--this lists all the pages you've created that you want listed in the footer-->
    </nav>

    <p><?php bloginfo("name"); ?> - &copy; <?php echo date("Y"); ?></p>
</footer>

</div> <!--this closes the container div that starts in the header-->

<?php wp_footer(); ?>  <!--this gives wordpress the power to allow any added pulgins in the footer to work-->
</body>
</html>