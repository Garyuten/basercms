<?php
/* SVN FILE: $Id$ */
/**
 * [PUBLISH] ブログトップ
 * 
 * PHP versions 5
 *
 * baserCMS :  Based Website Development Project <http://basercms.net>
 * Copyright 2008 - 2013, baserCMS Users Community <http://sites.google.com/site/baserusers/>
 *
 * @copyright		Copyright 2008 - 2013, baserCMS Users Community
 * @link			http://basercms.net baserCMS Project
 * @package			baser.plugins.blog.views
 * @since			baserCMS v 0.1.0
 * @version			$Revision$
 * @modifiedby		$LastChangedBy$
 * @lastmodified	$Date$
 * @license			http://basercms.net/license/index.html
 */
$this->BcBaser->css(array('/blog/css/style','colorbox/colorbox'), array('inline' => true));
$this->BcBaser->js('jquery.colorbox-min', false);
$this->BcBaser->setDescription($this->Blog->getDescription());
?>

<script type="text/javascript">
$(function(){
	if($("a[rel='colorbox']").colorbox) $("a[rel='colorbox']").colorbox({transition:"fade"});
});
</script>

<!-- title -->
<h2 class="contents-head">
	<?php $this->Blog->title() ?>
</h2>

<!-- description -->
<?php if($this->Blog->descriptionExists()): ?>
<div class="blog-description">
	<?php $this->Blog->description() ?>
</div>
<?php endif ?>

<!-- list -->
<?php if(!empty($posts)): ?>
	<?php foreach($posts as $post): ?>
<div class="post">
	<h4 class="contents-head">
		<?php $this->Blog->postTitle($post) ?>
	</h4>
	<?php $this->Blog->postContent($post, false, true) ?>
	<div class="meta"><span>
		<?php $this->Blog->category($post) ?>
		&nbsp;
		<?php $this->Blog->postDate($post) ?>
		&nbsp;
		<?php $this->Blog->author($post) ?>
	</span></div>
	<?php $this->BcBaser->element('blog_tag', array('post' => $post)) ?>
</div>
	<?php endforeach; ?>
<?php else: ?>
<p class="no-data">記事がありません。</p>
<?php endif; ?>

<!-- pagination -->
<?php $this->BcBaser->pagination('simple'); ?>