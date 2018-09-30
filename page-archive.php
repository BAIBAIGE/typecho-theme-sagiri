<?php
/**
* Template Page of Timeline Archives
*
* @package custom
*/
?>
<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>

<div  id="main" class="main" role="main">
    <div class="main-inner clearfix">
        <div class="content-wrap">
        <article class="post" itemscope itemtype="http://schema.org/BlogPosting">
                <h1 class="post-title" itemprop="name headline">
                <?php _e('Timeline Archives 施工中(ง •_•)ง'); ?>
                </h1>
            </article>
            <?php $this->need('comments.php'); ?>
        </div>
    </div>
</div>

<?php $this->need('footer.php'); ?>