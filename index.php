<?php
/**
 * 简单的主题，没有花里胡哨，回归本质
 *
 * @package simpleblog
 * @author JDZHAO(90FA 9574 7000 A102)
 * @version 1.0
 * @link https://github.com/zhaojundong/typecho
 */

if (!defined('__TYPECHO_ROOT_DIR__')) exit;
$this->need('header.php');
?>
<?php while ($this->next()): ?>
<ul class="blog-posts">

<li>
<span>
<i>
<time datetime="<?php $this->date('c'); ?>" itemprop="datePublished">
<?php $this->date(); ?>
</time>
</i>
</span>
<a href="<?php $this->permalink() ?>"><?php $this->title() ?></a>
</li>

</ul>

<?php endwhile; ?>

<?php $this->pageNav('&laquo; 前一页', '后一页 &raquo;'); ?>

<!-- 首页模板结束-->

<?php $this->need('footer.php'); ?>
