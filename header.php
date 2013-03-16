<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="content-type" content="text/html; charset=<?php $this->options->charset(); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title><?php $this->archiveTitle(' &raquo; ', '', ' - '); ?><?php $this->options->title(); ?></title>

<!-- 使用url函数转换相关路径 -->
<link rel="stylesheet" type="text/css" media="all" href="<?php //$this->options->themeUrl('style.css'); ?>" />
<link href="<?php $this->options->themeUrl('css/bootstrap/bootstrap.min.css'); ?>" rel="stylesheet" />
<link href="<?php $this->options->themeUrl('css/bootstrap/bootstrap-responsive.min.css'); ?>" rel="stylesheet" />
<link href="<?php $this->options->themeUrl('style.css'); ?>" rel="stylesheet" />
<link href="<?php $this->options->themeUrl('css/animate/animate-custom.css'); ?>" rel="stylesheet" />
<link rel="icon" 
      type="image/png" 
      href="<?php $this->options->themeUrl('favicon.png'); ?>">

<script src="<?php $this->options->themeUrl('js/jquery-1.9.1.min.js'); ?>" type="text/javascript"></script>
<!-- Google web fonts -->
<!-- <link href='http://fonts.googleapis.com/css?family=Muli' rel='stylesheet' type='text/css'>
<!-- <link href='http://fonts.googleapis.com/css?family=Lora' rel='stylesheet' type='text/css'>-->

<!-- 通过自有函数输出HTML头部信息 -->
<?php $this->header(); ?>
</head>

<body>
<div class="container" id="header">
<div class="row">
    <div class="span6 offset3">
        <div class="row">
            <?php if ($this->is('index')) : ?>
                <h1 class="text-center animated fadeInDown"><a href="<?php $this->options->siteUrl(); ?>">
                <?php if ($this->options->logoUrl): ?>
                    <img height="60" src="<?php $this->options->logoUrl() ?>" alt="<?php $this->options->title() ?>" />
                <?php endif; ?>
                <?php $this->options->title() ?>
                </a></h1>
                <p class="text-center animated fadeInUp"><?php $this->options->description() ?></p>
            <?php else : ?>
                <h1 class="animated fadeInDown"><a href="<?php $this->options->siteUrl(); ?>">
                <?php if ($this->options->logoUrl): ?>
                    <img height="60" src="<?php $this->options->logoUrl() ?>" alt="<?php $this->options->title() ?>" />
                <?php endif; ?>
                <?php _e("&lt&lt ") ?><?php $this->options->title() ?>
                </a></h1>
            <?php endif ?>
        </div>

    </div>



</div>





</div><!-- end #header -->

<hr>
