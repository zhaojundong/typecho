<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>

</main>
<footer style="padding:25px 0;">
<span>
    &copy; <?php echo date('Y'); ?> <a href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title(); ?></a>.
    <?php _e('由 <a href="https://typecho.org">Typecho</a> 强力驱动'); ?>.Theme by <a href="https://github.com/zhaojundong/simpletypecho">JDZHAO</a> .
</span>
</footer>
<?php $this->footer(); ?>
</body>
</html>