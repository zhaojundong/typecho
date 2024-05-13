<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<!DOCTYPE HTML>
<html>
<head>
    <meta charset="<?php $this->options->charset(); ?>">
    <meta name="renderer" content="webkit">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5">
    <?php if ($this->is('search')): ?>
    <meta name="robots" content="noindex, nofollow">
<?php endif; ?>
    <title><?php $this->archiveTitle([
            'category' => _t('分类 %s 下的文章'),
            'search'   => _t('包含关键字 %s 的文章'),
            'tag'      => _t('标签 %s 下的文章'),
            'author'   => _t('%s 发布的文章')
        ], '', ' - '); ?><?php $this->options->title(); ?></title>

    <!-- 使用url函数转换相关路径 -->
    <link rel="stylesheet" href="<?php $this->options->themeUrl('default.min.css'); ?>">
<style>
@import '<?php $this->options->themeUrl('water.css'); ?>';

nav a {
  	margin-right: 10px; 
}

footer {
	text-align: center; 
}

.title:hover {
 	text-decoration: none; 
}
.upvote-button {
    padding: 0;
    margin: 0;
    border: 0;
    background-color: inherit;
    color: inherit;
    display: flex;
    flex-direction: column;
    align-items: center;
}
.upvote-button.upvoted {
    color: salmon;
}
.upvote-count {
    margin-top: -3px;
}
.highlight,
pre {
    padding: 1px 15px;
    background-color: var(--background);
    color: var(--code);
    border-radius: 3px;
    margin-block-start: 1em;
    margin-block-end: 1em;
    overflow-x: auto;
}
nav a:hover {
        text-decoration: none;
        padding-bottom: 1px; /* 调整下划线与文字之间的距离 */
        border-bottom: 1px solid var(--links); /* 下划线样式 */
        display: inline-block; /* 使下划线的宽度根据文字内容自适应 */
}
nav a.current {
        padding-bottom: 1px; /* 调整下划线与文字之间的距离 */
        border-bottom: 1px solid var(--links); /* 下划线样式 */
        display: inline-block; /* 使下划线的宽度根据文字内容自适应 */
}
/* Page nav */

.page-navigator {
  list-style: none;
  margin: 25px 0;
  padding: 0;
  text-align: center;
}
.page-navigator li {
  display: inline-block;
  margin: 0 4px;
}
.page-navigator a {
  display: inline-block;
  padding: 0 10px;
  height: 30px;
  line-height: 30px;
}
.page-navigator a:hover {
  background: var(--background);
  text-decoration: none;
}

.page-navigator .current a {
  color: var(--code);
  background: var(--background);
}
  </style>
    <!-- 通过自有函数输出HTML头部信息 -->
    <?php $this->header(); ?>
</head>

<body class="blog">
<header>
<a class="title" href="<?php $this->options->siteUrl(); ?>">

<?php if ($this->is('index')): ?>
    <h1><?php $this->options->title() ?></h1>
<?php else: ?>
    <h3 style="font-size:2.2em;"><?php $this->options->title() ?></h3>
<?php endif; ?>

</a>
<nav>
<p>

<?php
// 定义导航元素和顺序
$navItems = array(
    'category-1',  // categoryID-1
    'page-5',      // pageID-about
    'tag-3',       // tagID-1
    'page-2',      // pageID-about
    'category-5'   // categoryID-2
);

// 获取分类、页面、标签数据
$categories = $this->widget('Widget_Metas_Category_List');
$tags = $this->widget('Widget_Metas_Tag_Cloud');
$pages = $this->widget('Widget_Contents_Page_List');
?>

<!-- 首页链接 -->
<a <?php if ($this->is('index')): ?>class="current"<?php endif; ?> href="<?php $this->options->siteUrl(); ?>">首页</a>

<!-- 处理自定义导航 -->
<?php foreach ($navItems as $item): ?>
    <?php
    list($type, $id) = explode('-', $item);
    switch ($type) {
        case 'category':
            $categories->to($tempCategories);
            while ($tempCategories->next()):
                if ($tempCategories->mid == $id):
                    ?><a <?php if ($this->is('category', $tempCategories->slug)): ?>class="current"<?php endif; ?>
                       href="<?php $tempCategories->permalink(); ?>"
                       title="<?php $tempCategories->name(); ?>"><?php $tempCategories->name(); ?></a><?php
                endif;
            endwhile;
            break;
        
        case 'page':
            $pages->to($tempPages);
            while ($tempPages->next()):
                if ($tempPages->cid == $id):
                    ?><a <?php if($this->is('page', $tempPages->slug)): ?>class="current"<?php endif; ?>
                       href="<?php $tempPages->permalink(); ?>"
                       title="<?php $tempPages->title(); ?>"><?php $tempPages->title(); ?></a><?php
                endif;
            endwhile;
            break;
        
        case 'tag':
            $tags->to($tempTags);
            while ($tempTags->next()):
                if ($tempTags->mid == $id):
                    ?><a <?php if($this->is('tag', $tempTags->slug)): ?>class="current"<?php endif; ?>
                       href="<?php $tempTags->permalink(); ?>"
                       title="<?php $tempTags->description(); ?>"><?php $tempTags->name(); ?></a><?php
                endif;
            endwhile;
            break;
    }
    ?>
<?php endforeach; ?>




</p>
</nav>
</header>

<main>
<!-- header结束 -->
    
    
