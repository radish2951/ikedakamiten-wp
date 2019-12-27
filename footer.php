<footer id="footer">
    <?php /*wp_nav_menu(array(
        'container'  => false,
        'items_wrap' => '<nav><ul>%3$s</ul></nav>',
    ));*/ ?>
<!--
    <section id="footer-company-information">
    <p><?php echo get_option('company_name'); ?></p>
    <p>〒<?php echo get_option('postal_code'); ?></p>
    <p><?php echo get_option('address'); ?></p>
    <p>TEL: <?php echo get_option('tel'); ?></p>
    <p>FAX: <?php echo get_option('fax'); ?></p>
    <p>EMAIL: <?php echo get_option('email'); ?></p>
    </section>
-->
    <p><?php echo get_option('company_name_en'); ?> All rights reserved.</p>
</footer>
<script src="<?php echo get_template_directory_uri(); ?>/float.js?v=<?php echo rand(); ?>"></script>
</body>
</html>
