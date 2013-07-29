<?php
/**
 * デフォルトレイアウト
 */
?>
<?php $this->BcBaser->xmlHeader() ?>
<?php $this->BcBaser->docType() ?>
<html xmlns="http://www.w3.org/1999/xhtml" lang="ja" xml:lang="ja">
<head>
<?php $this->BcBaser->charset() ?>
<?php $this->BcBaser->title() ?>
<?php $this->BcBaser->metaDescription() ?>
<?php $this->BcBaser->metaKeywords() ?>
<?php $this->BcBaser->icon() ?>
<?php $this->BcBaser->rss('ニュースリリース RSS 2.0', '/news/index.rss') ?>
<?php $this->BcBaser->css('style') ?>
    
<?php $this->BcBaser->js(array(
    'jquery-1.7.2.min',
    'functions',
    'startup',
    'jquery.bxSlider.min',
    'jquery.easing.1.3',
    'nada-icons'
)) ?>
<?php $this->BcBaser->scripts() ?>
<?php $this->BcBaser->element('google_analytics') ?>
</head>
<body id="<?php $this->BcBaser->contentsName() ?>">


<?php $this->BcBaser->header() ?>

<div id="Page">
    <div id="Wrap" class="clearfix">
    

        <?php $this->BcBaser->element('sidebox') ?>

        <div id="Beta">
            <?php if(!$this->BcBaser->isHome()): ?>
            <div id="Navigation">
                <?php $this->BcBaser->element('crumbs'); ?>
            </div>
            <?php endif ?>

            <?php if($this->BcBaser->isHome()): ?>
            <div id="top-main">
                <?php //$this->BcBaser->img('top-main.png'); ?>
                <div id="slider">
                  <div><?php $this->BcBaser->img('slider/01.jpg'); ?></div>
                  <div><?php $this->BcBaser->img('slider/02.jpg'); ?></div>
                  <div><?php $this->BcBaser->img('slider/03.jpg'); ?></div>
                  <div><?php $this->BcBaser->img('slider/04.jpg'); ?></div>
                  <div><?php $this->BcBaser->img('slider/05.jpg'); ?></div>
                </div>
            </div>
            <?php 
            /*
            *スライダーは色々設定ができるので参考にして下さい  http://zxcvbnmnbvcxz.com/demonstration/bxslide.html 
            *設定ファイルは js/nada-icons です
            */
            ?>
            <?php endif ?>

            <div id="ContentsBody" class="clearfix">
                <?php if($this->BcBaser->isHome()): ?>
                <?php $this->BcBaser->element('toppage') ?>
                <?php else: ?>
                <div id="ContentsBody" class="subpage">
                    <?php $this->BcBaser->flash() ?>
                    <?php $this->BcBaser->content() ?>
                    <?php $this->BcBaser->element('contents_navi') ?>
                    <div class="to-top"> <a href="#Page"><?php $this->BcBaser->img('icons_up.png'); ?>ページトップへ戻る</a></div>
                </div>
                <?php endif ?>

            <div id="top-contents-main">
                <div id="top-main-telfax-title">お気軽にお問い合わせ下さい</div>
                <div id="top-main-telfax-left">
                    <div id="top-main-telfax-tel"><?php $this->BcBaser->img('icons/icons_ico_squ_07.png'); ?><?php $this->BcBaser->img('icons_tel.png',array('class' => 'telfax-tel')); ?></div>
                    <div id="top-main-telfax-fax"><?php $this->BcBaser->img('icons/icons_ico_squ_08.png'); ?><?php $this->BcBaser->img('icons_fax.png',array('class' => 'telfax-fax')); ?></div>
                </div>
                <div id="top-main-telfax-right">
                    <div id="top-main-contact"><?php $this->BcBaser->img('icons_contact.png',array('url' => '/contact')); ?></div>
                    <div id="top-main-serch"><?php $this->BcBaser->element('search') ?></div>
                </div>
            </div>

            </div>
        </div><!--Bata-->

    </div><!--Wrap-->

    
    
</div><!--Page-->
<?php $this->BcBaser->footer() ?>
<?php $this->BcBaser->func() ?>
</body>
</html>
