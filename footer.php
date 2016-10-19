<footer class="site-footer">
    <h2>This is the Footer</h2>
    <p><?php bloginfo("name"); ?> - &copy; <?php echo date("Y"); ?></p>
</footer>

</div> <!--this closes the container div that starts in the header-->

<?php wp_footer(); ?>  <!--this gives wordpress the power to allow any added pulgins in the footer to work-->
</body>
</html>