<?php
/**
 * Header
 *
 * @package WordPress
 **/

?>
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<title>test10</title>
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<header>
<!-- ヘッダー -->
<h1><a href="<?php bloginfo( 'url' ); ?>"><?php bloginfo( 'name' ); ?></a></h1>
<p><?php bloginfo( 'description' ); ?></p>
<!-- メニュー -->
<div class="h-nav">
<span></span>
<span></span>
<span></span>
<span>menu</span>
</div>
<nav class="g-nav">
<ul>
<li class="nav-li"><a href="index.php">HOME</a></li>
<li class="nav-li">ABOUT</li>
<li class="nav-li">CONTACT</li>
</ul>
</nav>
</header>
