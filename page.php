<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>

<h1><?php $this->title() ?></h1>
<div>
<?php $this->content(); ?>
</div><!-- end #main-->

<?php $this->need('footer.php'); ?>
