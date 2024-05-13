<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>

<?php if ($this->is('post') || $this->is('page')): ?>
    <div class="breadcrumbs">
        <a href="<?php $this->options->siteUrl(); ?>"><?php _e('Home'); ?></a>
        <?php if ($this->is('post')): ?>
            » <?php $this->category(','); ?> » <?php $this->title() ?>
        <?php elseif ($this->is('page')): ?>
            » <?php $this->title() ?>
        <?php endif; ?>
    </div>
<?php endif; ?>

<h1>
<?php $this->title() ?>
</h1>

<p>
<i>
<time datetime="<?php $this->date('c'); ?>" itemprop="datePublished"><?php $this->date(); ?></time>
</i>
</p>
<div>           
<?php $this->content(); ?>
        </div>
<?php if ($this->tags): ?>
    <p class="tags"><?php $this->widget('Widget_Metas_Tag_Cloud', 'ignoreZeroCount=1&limit=20')->to($tags); ?>
        <?php while ($tags->next()): ?>
            <a href="<?php $tags->permalink(); ?>"><?php echo '#'.$tags->name; ?></a>
        <?php endwhile; ?>
    </p>
<?php endif; ?>

    <ul class="post-near">
        <li>上一篇: <?php $this->thePrev('%s', '没有了'); ?></li>
        <li>下一篇: <?php $this->theNext('%s', '没有了'); ?></li>
    </ul>
</div><!-- end #main-->

<?php $this->need('footer.php'); ?>
