<?php
/* SVN FILE: $Id$ */
/**
 * [ADMIN] ポップアップレイアウト
 *
 * PHP versions 5
 *
 * baserCMS :  Based Website Development Project <http://basercms.net>
 * Copyright 2008 - 2013, baserCMS Users Community <http://sites.google.com/site/baserusers/>
 *
 * @copyright		Copyright 2008 - 2013, baserCMS Users Community
 * @link			http://basercms.net baserCMS Project
 * @package			baser.views.layout
 * @since			baserCMS v 0.1.0
 * @version			$Revision$
 * @modifiedby		$LastChangedBy$
 * @lastmodified	$Date$
 * @license			http://basercms.net/license/index.html
 */
?>
<?php $this->BcBaser->xmlHeader() ?>
<?php $this->BcBaser->docType() ?>
<html xmlns="http://www.w3.org/1999/xhtml" lang="ja" xml:lang="ja">
<head>
<meta name="robots" content="noindex,nofollow" />
<?php $this->BcBaser->charset() ?>
<?php $this->BcBaser->title() ?>
<?php $this->BcBaser->metaDescription() ?>
<?php $this->BcBaser->metaKeywords() ?>
<?php $this->BcBaser->icon() ?>
<?php $this->BcBaser->css('admin/import') ?>
<!--[if IE]><?php $this->BcBaser->js(array('excanvas')) ?><![endif]-->
<?php $this->BcBaser->js(array(
	'jquery-1.4.2.min',
	'jquery.dimensions.min',
	'jquery-ui-1.7.2.custom.min',
	'i18n/ui.datepicker-ja',
	'jquery.bt.min',
	'jquery.corner',
	'functions')) ?>
<?php $this->BcBaser->scripts() ?>
</head>
<body id="<?php $this->BcBaser->contentsName() ?>" class="popup">

	<!-- begin contentsBody -->
	<div id="contentsBody">
		<?php $this->BcBaser->flash() ?>
		<?php $this->BcBaser->content() ?>
	</div>
	<!-- end contentsBody -->

<?php $this->BcBaser->func() ?>
</body>
</html>