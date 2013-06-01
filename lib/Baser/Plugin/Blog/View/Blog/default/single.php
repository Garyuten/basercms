<?php
/* SVN FILE: $Id$ */
/**
 * [PUBLISH] ブログ詳細ページ
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
$this->BcBaser->setDescription($this->Blog->getTitle().'｜'.$this->Blog->getPostContent($post,false,false,50));
?>

<script type="text/javascript">
$(function(){
	if($("a[rel='colorbox']").colorbox) $("a[rel='colorbox']").colorbox({transition:"fade"});
});
</script>

<!-- blog title -->
<h2 class="contents-head">
	<?php $this->Blog->title() ?>
</h2>

<!-- post title -->
<h3 class="contents-head">
	<?php $this->BcBaser->contentsTitle() ?>
</h3>

<div class="eye-catch">
	<?php $this->Blog->eyeCatch($post) ?>
</div>

<!-- post detail -->
<div class="post">
	<?php $this->Blog->postContent($post) ?>
	<div class="meta"><span>
		<?php $this->Blog->category($post) ?>
		&nbsp;
		<?php $this->Blog->postDate($post) ?>
		&nbsp;
		<?php $this->Blog->author($post) ?>
	</span></div>
	<?php $this->BcBaser->element('blog_tag', array('post' => $post)) ?>
</div>

<!-- contents navi -->
<div id="contentsNavi">
	<?php $this->Blog->prevLink($post) ?>
	&nbsp;｜&nbsp;
	<?php $this->Blog->nextLink($post) ?>
</div>

<!-- comments -->
<?php $this->BcBaser->element('blog_comments') ?>