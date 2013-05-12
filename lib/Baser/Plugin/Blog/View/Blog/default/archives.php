<?php
/* SVN FILE: $Id$ */
/**
 * [PUBLISH] ブログアーカイブ一覧
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
//$this->BcBaser->setTitle($this->pageTitle.'｜'.$this->Blog->getTitle());
$this->BcBaser->setDescription($this->Blog->getTitle().'｜'.$this->BcBaser->getContentsTitle().'のアーカイブ一覧です。');
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

<!-- archives title -->
<h3 class="contents-head">
	<?php $this->BcBaser->contentsTitle() ?>
</h3>

<!-- list -->
<?php if(!empty($posts)): ?>
	<?php foreach($posts as $post): ?>
<div class="post">
	<h4 class="contents-head">
		<?php $this->Blog->postTitle($post) ?>
	</h4>
	<?php $this->Blog->postContent($post,true,true) ?>
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