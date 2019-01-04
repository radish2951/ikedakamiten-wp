<footer id="footer">
    <?php wp_nav_menu(array(
        'container'  => false,
        'items_wrap' => '<nav><ul>%3$s</ul></nav>',
    )); ?>
    <div id="footer-company-information">
        <h1>有限会社 池田紙店</h1>
        <p>010-0921</p>
        <p>秋田県秋田市大町1-5-30</p>
        <p>018-862-4617</p>
    </div>
</footer>

<script>
const fullSections = document.getElementsByClassName('full');
for (let i = 0; i < fullSections.length; i++) {
    fullSections[i].style.height = window.innerHeight + 'px';
}
</script>

</body>
</html>
