<?php
/**
 * 搜索页面
 *
 * @package custom
 */
if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>

<div class="col-mb-12 col-tb-8 col-tb-offset-2">

    <div class="error-page">
        <h2 class="post-title">搜索页面</h2>
        <form method="post">
            <p><input type="text" name="s" class="text" autofocus/></p>
            <p>
                <button type="submit" class="submit"><?php _e('搜索'); ?></button>
            </p>
        </form>
    </div>

</div><!-- end #content-->
<?php $this->need('footer.php'); ?>
