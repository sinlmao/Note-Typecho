<?php
/**
 * 一款大气时尚适合写作的博客主题
 * 
 * @package Note 
 * @author Weic
 * @version 0.2
 * @link http://weic96.cn
 */

if (!defined('__TYPECHO_ROOT_DIR__')) exit;
$this->need('header.php');?>
<div class="body-layout">
<?php if ($this->options->indexBGUrl): ?>
    <div class="index-header" style="background:url(<?php $this->options->indexBGUrl() ?>);background-size:100% 100%;background-repeat:no-repeat;">
       <div class="index-header-wave"></div>
    </div>
<?php endif; ?>
    <div class="index-container">

	<?php while($this->next()): ?>
		<div class="index-post-layout">
			<article class="index-post-abstract">
				<header>
					<h2><a href="<?php $this->permalink() ?>"><?php $this->title() ?></a></h2>
					<time datetime="<?php $this->date('c'); ?>">&nbsp;<?php $this->date('F j, Y'); ?></time>
				</header>
				<section>
					<?php $this->excerpt(120, ' ...'); ?>
				</section>
			</article>
		</div>
    <?php endwhile; ?>
<?php $this->need('navigator.php'); ?>	
    </div>
</div>
<?php $this->need('footer.php'); ?>