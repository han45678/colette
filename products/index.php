<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=0">
    <meta property="og:title" content="">
    <meta property="og:image" content="">
    <meta property="og:description" content="">
    <meta name="description" content="">
    <meta name="keywords" content="">
	<title>COLETTE</title>
	<link href="https://fonts.googleapis.com/css?family=Noto+Sans+TC:100,300,400,500,700,900|Noto+Serif:400,400i,700,700i&display=swap&subset=chinese-traditional" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="../css/main.css">
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="../js/jquery.waitforimages.min.js"></script>
    <script src="../js/jquery.page.js"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
	<script type="text/javascript" src="../js/main.js"></script>
	<script> 
		$(function() {
			//所有產品頁
			//切換館別
			var w =$(window).width();
			$('.products_list-ul .list').click(function () {
				var index = $(this).index();
				$(this).addClass('active').siblings().removeClass('active');
				$('.series_list_phone form').eq(index).addClass('active').siblings().removeClass('active');  //form
				$('.series_list_pc ul').eq(index).addClass('active').siblings().removeClass('active');  //pc
				$('.dessert-list').eq(index).addClass('active').siblings().removeClass('active');
			});
			var leftscroll = $('.products_list-ul').scrollLeft();
			var maxScrollLeft = $('.products_list-ul')[0].scrollWidth - $('.products_list-ul')[0].clientWidth;
			var w = $(window).width();
			var len = $('.products_list-ul li').length;
			arrowClick() 
			$(window).resize(function () { 
				w = $(window).width();
				arrowClick();
			});
			
			function arrowClick() {
				if(leftscroll<1) {
					$('.arrow-pre').hide();
				} else {
					$('.arrow-pre').show();
				}
				if(leftscroll>= maxScrollLeft) {
					$('.arrow-next').hide();
					$('.hide').hide();
				} else {
					$('.arrow-next').show();
					$('.hide').show();
				}
				if(w<768) {
					if(len<4) {
						$('.arrow-pre').hide();
						$('.arrow-next').hide();
						$('.hide').hide();
					}
				}
				if(w>767) {
					if(len<5) {
						$('.arrow-pre').hide();
						$('.arrow-next').hide();
						$('.hide').hide();
					}
				}
				$('.arrow-pre').click(function () { 
					if(leftscroll>0) {
						$('.products_list-ul').scrollLeft(leftscroll + -w);

						leftscroll = $('.products_list-ul').scrollLeft();
						if(leftscroll<1) {
							$('.arrow-pre').hide();
						} else {
							$('.arrow-pre').show();
						}
						if(leftscroll>= maxScrollLeft) {
							$('.arrow-next').hide();
							$('.hide').hide();
						} else {
							$('.arrow-next').show();
							$('.hide').show();
						}
					}
				});
				$('.arrow-next').click(function () { 

					if(leftscroll<maxScrollLeft) {
						$('.products_list-ul').scrollLeft(leftscroll + w)

						leftscroll = $('.products_list-ul').scrollLeft()
						if(leftscroll<0.5) {
							$('.arrow-pre').hide();
						} else {
							$('.arrow-pre').show();
						}
						if(leftscroll>= maxScrollLeft) {
							$('.arrow-next').hide();
							$('.hide').hide();
						} else {
							$('.arrow-next').show();
							$('.hide').show();
						}
					}
				});
			}

			//確認是在哪一組 pc
			$('.series_menu-li').click(function () { 
				var index = $(this).closest('li').index();
				var index_menu = $(this).closest('.series_menu').index();
				$(this).closest('li').addClass('active').closest('li').siblings().removeClass('active');
				$('.dessert-list').eq(index_menu).find('.content-produce').eq(index).addClass('active').siblings().removeClass('active');
			 	$('.series_menu-phone').eq(index_menu).find('.series_list_pac').val(index);
				
			});

			//確認是在哪一組 phone
			$('.series_list_pac').change(function () {
				var options = $(this).children('option:selected').val();
				var options_menu = $(this).closest('.series_menu-phone').index();
				$('.dessert-list').eq(options_menu).find('.content-produce').eq(options).addClass('active').siblings().removeClass('active');
				$('.series_menu').eq(options_menu).find('li').eq(options).addClass('active').siblings().removeClass('active');
			})

		})
	</script>
</head>
<body>
	<!-- svg -->
	<?php include '../page/svg.php'; ?>
	<?php
		include '../page/loading.php';
    ?>
	<?php
		include '../page/nav2.php';
    ?>
    <main class="products activePage" id="products">
        <div class="background">
			<p>Store</p>
		</div>
		<div class="products_list">
			<div class="wrap">
				<div class="arrow arrow-pre"></div>
				<div class="arrow arrow-next"></div>
				<div class="hide"></div>
				<ul class="products_list-ul">
					<li class="list active">
						<div class="dessert icon_pie" style="background: url(../img/icon-pie.svg) no-repeat;background-size: cover;"></div>
						<div class="title-zh">蛋糕</div>
						<div class="title-en">Les Gateaux</div>
					</li>
					<li class="list">
						<div class="dessert icon_pie" style="background: url(../img/icon-pie.svg) no-repeat;background-size: cover;"></div>
						<div class="title-zh">法式鹹派</div>
						<div class="title-en">Les Gateaux</div>
					</li>
					<li class="list">
						<div class="dessert icon_macaron" style="background: url(../img/icon-macaron.svg) no-repeat;background-size: cover;"></div>
						<div class="title-zh">馬卡龍＆棉花糖</div>
						<div class="title-en">Les Gateaux</div>
					</li>
					<li class="list">
						<div class="dessert icon_cookie" style="background: url(../img/icon-cookie.svg) no-repeat;background-size: cover;"></div>
						<div class="title-zh">常溫蛋糕&餅乾</div>
						<div class="title-en">Les Gateaux</div>
					</li>
				</ul>
			</div>
		</div>
		<div class="content">
			<div class="wrap">
				<div class="series_list_phone">
					<form class="series_menu-phone series_menu-phone_cake active" action="">
						<select name="series_list" class="series_list_pac">
							<option value="0">cake 果香飄飄</option>
							<option value="1">深度濃郁</option>
							<option value="2">法式小塔</option>
							<option value="3">禪風茶趣</option>
							<option value="4">乳芳核果</option>
						</select>
					</form>
					<form class="series_menu-phone series_menu-phone_pie" action="">
						<select name="series_list" class="series_list_pac">
							<option value="0">pie 果香飄飄</option>
							<option value="1">深度濃郁</option>
							<option value="2">法式小塔</option>
							<option value="3">禪風茶趣</option>
							<option value="4">乳芳核果</option>
						</select>
					</form>
					<form class="series_menu-phone series_menu-phone_macaron" action="">
						<select name="series_list" class="series_list_pac">
							<option value="0">macaron 果香飄飄</option>
							<option value="1">深度濃郁</option>
							<option value="2">法式小塔</option>
							<option value="3">禪風茶趣</option>
							<option value="4">乳芳核果</option>
						</select>
					</form>
					<form class="series_menu-phone series_menu-phone_cookie" action="">
						<select name="series_list" class="series_list_pac">
							<option value="0">cookie 果香飄飄</option>
							<option value="1">深度濃郁</option>
							<option value="2">法式小塔</option>
							<option value="3">禪風茶趣</option>
							<option value="4">乳芳核果</option>
						</select>
					</form>
				</div>
				<div class="series_list_pc">
					<ul class="series_menu series_menu-cake active">
						<li class="active">
							<p class="series_menu-li">cake 果香飄飄</p>
						</li>
						<li>
							<p class="series_menu-li">深度濃郁</p>
						</li>
						<li>
							<p class="series_menu-li">法式小塔</p>
						</li>
						<li>
							<p class="series_menu-li">禪風茶趣</p>
						</li>
						<li>
							<p class="series_menu-li">乳芳核果</p>
						</li>
					</ul>
					<ul class="series_menu series_menu-pie">
						<li class="active">
							<p class="series_menu-li">pie 果香飄飄</p>
						</li>
						<li>
							<p class="series_menu-li">深度濃郁</p>
						</li>
						<li>
							<p class="series_menu-li">法式小塔</p>
						</li>
						<li>
							<p class="series_menu-li">禪風茶趣</p>
						</li>
						<li>
							<p class="series_menu-li">乳芳核果</p>
						</li>
					</ul>
					<ul class="series_menu series_menu-macaron">
						<li class="active">
							<p class="series_menu-li">macaron 果香飄飄</p>
						</li>
						<li>
							<p class="series_menu-li">深度濃郁</p>
						</li>
						<li>
							<p class="series_menu-li">法式小塔</p>
						</li>
						<li>
							<p class="series_menu-li">禪風茶趣</p>
						</li>
						<li>
							<p class="series_menu-li">乳芳核果</p>
						</li>
					</ul>
					<ul class="series_menu series_menu-cookie">
						<li class="active">
							<p class="series_menu-li">cookie 果香飄飄</p>
						</li>
						<li>
							<p class="series_menu-li">深度濃郁</p>
						</li>
						<li>
							<p class="series_menu-li">法式小塔</p>
						</li>
						<li>
							<p class="series_menu-li">禪風茶趣</p>
						</li>
						<li>
							<p class="series_menu-li">乳芳核果</p>
						</li>
					</ul>
				</div>
				<div class="dessert-list dessert-list-cake active">
					<ul class="content-produce active">
						<li class="produce-li show">
							<div class="photo_inside">
								<a href="../products_fetch" class="photo" style="background: url(../img/featured/1.png) center no-repeat; background-size: 100%"></a>
							</div>
							<p class="text-name">格蕾朵cake1</p>
							<span class="text-price">$130</span>
							<div class="button add-cart">ADD TO CART</div>
						</li>
						<li class="produce-li show">
							<div class="photo_inside">
								<a href="../products_fetch" class="photo" style="background: url(../img/featured/2.png) center no-repeat; background-size: 100%"></a>
							</div>
							<p class="text-name">格蕾朵</p>
							<span class="text-price">$130</span>
							<div class="button add-cart">ADD TO CART</div>
						</li>
						<li class="produce-li show">
							<div class="photo_inside">
								<a href="../products_fetch" class="photo" style="background: url(../img/featured/3.png) center no-repeat; background-size: 100%"></a>
							</div>
							<p class="text-name">格蕾朵</p>
							<span class="text-price">$130</span>
							<div class="button add-cart">ADD TO CART</div>
						</li>
						<li class="produce-li show">
							<div class="photo_inside">
								<a href="../products_fetch" class="photo" style="background: url(../img/featured/4.png) center no-repeat; background-size: 100%"></a>
							</div>
							<p class="text-name">格蕾朵</p>
							<span class="text-price">$130</span>
							<div class="button add-cart">ADD TO CART</div>
						</li>
						<li class="produce-li show">
							<div class="photo_inside">
								<a href="../products_fetch" class="photo" style="background: url(../img/featured/1.png) center no-repeat; background-size: 100%"></a>
							</div>
							<p class="text-name">格蕾朵</p>
							<span class="text-price">$130</span>
							<div class="button add-cart">ADD TO CART</div>
						</li>
						<li class="produce-li show">
							<div class="photo_inside">
								<a href="../products_fetch" class="photo" style="background: url(../img/featured/2.png) center no-repeat; background-size: 100%"></a>
							</div>
							<p class="text-name">格蕾朵</p>
							<span class="text-price">$130</span>
							<div class="button add-cart">ADD TO CART</div>
						</li>
						<li class="produce-li show">
							<div class="photo_inside">
								<a href="../products_fetch" class="photo" style="background: url(../img/featured/3.png) center no-repeat; background-size: 100%"></a>
							</div>
							<p class="text-name">格蕾朵</p>
							<span class="text-price">$130</span>
							<div class="button add-cart">ADD TO CART</div>
						</li>
						<li class="produce-li show">
							<div class="photo_inside">
								<a href="../products_fetch" class="photo" style="background: url(../img/featured/4.png) center no-repeat; background-size: 100%"></a>
							</div>
							<p class="text-name">格蕾朵</p>
							<span class="text-price">$130</span>
							<div class="button add-cart">ADD TO CART</div>
						</li>
						<li class="produce-li">
							<div class="photo_inside">
								<a href="../products_fetch" class="photo" style="background: url(../img/featured/1.png) center no-repeat; background-size: 100%"></a>
							</div>
							<p class="text-name">格蕾朵</p>
							<span class="text-price">$130</span>
							<div class="button add-cart">ADD TO CART</div>
						</li>
						<li class="produce-li">
							<div class="photo_inside">
								<a href="../products_fetch" class="photo" style="background: url(../img/featured/2.png) center no-repeat; background-size: 100%"></a>
							</div>
							<p class="text-name">格蕾朵</p>
							<span class="text-price">$130</span>
							<div class="button add-cart">ADD TO CART</div>
						</li>
						<li class="produce-li">
							<div class="photo_inside">
								<a href="../products_fetch" class="photo" style="background: url(../img/featured/3.png) center no-repeat; background-size: 100%"></a>
							</div>
							<p class="text-name">格蕾朵</p>
							<span class="text-price">$130</span>
							<div class="button add-cart">ADD TO CART</div>
						</li>
						<li class="produce-li">
							<div class="photo_inside">
								<a href="../products_fetch" class="photo" style="background: url(../img/featured/4.png) center no-repeat; background-size: 100%"></a>
							</div>
							<p class="text-name">格蕾朵</p>
							<span class="text-price">$130</span>
							<div class="button add-cart">ADD TO CART</div>
						</li>
					</ul>
					<ul class="content-produce">
						<li class="produce-li show">
							<div class="photo_inside">
								<a href="../products_fetch" class="photo" style="background: url(../img/featured/1.png) center no-repeat; background-size: 100%"></a>
							</div>
							<p class="text-name">格蕾朵cake2</p>
							<span class="text-price">$130</span>
							<div class="button add-cart">ADD TO CART</div>
						</li>
						<li class="produce-li show">
							<div class="photo_inside">
								<a href="../products_fetch" class="photo" style="background: url(../img/featured/2.png) center no-repeat; background-size: 100%"></a>
							</div>
							<p class="text-name">格蕾朵</p>
							<span class="text-price">$130</span>
							<div class="button add-cart">ADD TO CART</div>
						</li>
						<li class="produce-li show">
							<div class="photo_inside">
								<a href="../products_fetch" class="photo" style="background: url(../img/featured/3.png) center no-repeat; background-size: 100%"></a>
							</div>
							<p class="text-name">格蕾朵</p>
							<span class="text-price">$130</span>
							<div class="button add-cart">ADD TO CART</div>
						</li>
						<li class="produce-li show">
							<div class="photo_inside">
								<a href="../products_fetch" class="photo" style="background: url(../img/featured/4.png) center no-repeat; background-size: 100%"></a>
							</div>
							<p class="text-name">格蕾朵</p>
							<span class="text-price">$130</span>
							<div class="button add-cart">ADD TO CART</div>
						</li>
						<li class="produce-li show">
							<div class="photo_inside">
								<a href="../products_fetch" class="photo" style="background: url(../img/featured/1.png) center no-repeat; background-size: 100%"></a>
							</div>
							<p class="text-name">格蕾朵</p>
							<span class="text-price">$130</span>
							<div class="button add-cart">ADD TO CART</div>
						</li>
						<li class="produce-li show">
							<div class="photo_inside">
								<a href="../products_fetch" class="photo" style="background: url(../img/featured/2.png) center no-repeat; background-size: 100%"></a>
							</div>
							<p class="text-name">格蕾朵</p>
							<span class="text-price">$130</span>
							<div class="button add-cart">ADD TO CART</div>
						</li>
						<li class="produce-li show">
							<div class="photo_inside">
								<a href="../products_fetch" class="photo" style="background: url(../img/featured/3.png) center no-repeat; background-size: 100%"></a>
							</div>
							<p class="text-name">格蕾朵</p>
							<span class="text-price">$130</span>
							<div class="button add-cart">ADD TO CART</div>
						</li>
						<li class="produce-li show">
							<div class="photo_inside">
								<a href="../products_fetch" class="photo" style="background: url(../img/featured/4.png) center no-repeat; background-size: 100%"></a>
							</div>
							<p class="text-name">格蕾朵</p>
							<span class="text-price">$130</span>
							<div class="button add-cart">ADD TO CART</div>
						</li>
						<li class="produce-li">
							<div class="photo_inside">
								<a href="../products_fetch" class="photo" style="background: url(../img/featured/1.png) center no-repeat; background-size: 100%"></a>
							</div>
							<p class="text-name">格蕾朵</p>
							<span class="text-price">$130</span>
							<div class="button add-cart">ADD TO CART</div>
						</li>
						<li class="produce-li">
							<div class="photo_inside">
								<a href="../products_fetch" class="photo" style="background: url(../img/featured/2.png) center no-repeat; background-size: 100%"></a>
							</div>
							<p class="text-name">格蕾朵</p>
							<span class="text-price">$130</span>
							<div class="button add-cart">ADD TO CART</div>
						</li>
						<li class="produce-li">
							<div class="photo_inside">
								<a href="../products_fetch" class="photo" style="background: url(../img/featured/3.png) center no-repeat; background-size: 100%"></a>
							</div>
							<p class="text-name">格蕾朵</p>
							<span class="text-price">$130</span>
							<div class="button add-cart">ADD TO CART</div>
						</li>
						<li class="produce-li">
							<div class="photo_inside">
								<a href="../products_fetch" class="photo" style="background: url(../img/featured/4.png) center no-repeat; background-size: 100%"></a>
							</div>
							<p class="text-name">格蕾朵</p>
							<span class="text-price">$130</span>
							<div class="button add-cart">ADD TO CART</div>
						</li>
					</ul>
					<ul class="content-produce">
						<li class="produce-li show">
							<div class="photo_inside">
								<a href="../products_fetch" class="photo" style="background: url(../img/featured/1.png) center no-repeat; background-size: 100%"></a>
							</div>
							<p class="text-name">格蕾朵cake3</p>
							<span class="text-price">$130</span>
							<div class="button add-cart">ADD TO CART</div>
						</li>
						<li class="produce-li show">
							<div class="photo_inside">
								<a href="../products_fetch" class="photo" style="background: url(../img/featured/2.png) center no-repeat; background-size: 100%"></a>
							</div>
							<p class="text-name">格蕾朵</p>
							<span class="text-price">$130</span>
							<div class="button add-cart">ADD TO CART</div>
						</li>
						<li class="produce-li show">
							<div class="photo_inside">
								<a href="../products_fetch" class="photo" style="background: url(../img/featured/3.png) center no-repeat; background-size: 100%"></a>
							</div>
							<p class="text-name">格蕾朵</p>
							<span class="text-price">$130</span>
							<div class="button add-cart">ADD TO CART</div>
						</li>
						<li class="produce-li show">
							<div class="photo_inside">
								<a href="../products_fetch" class="photo" style="background: url(../img/featured/4.png) center no-repeat; background-size: 100%"></a>
							</div>
							<p class="text-name">格蕾朵</p>
							<span class="text-price">$130</span>
							<div class="button add-cart">ADD TO CART</div>
						</li>
						<li class="produce-li show">
							<div class="photo_inside">
								<a href="../products_fetch" class="photo" style="background: url(../img/featured/1.png) center no-repeat; background-size: 100%"></a>
							</div>
							<p class="text-name">格蕾朵</p>
							<span class="text-price">$130</span>
							<div class="button add-cart">ADD TO CART</div>
						</li>
						<li class="produce-li show">
							<div class="photo_inside">
								<a href="../products_fetch" class="photo" style="background: url(../img/featured/2.png) center no-repeat; background-size: 100%"></a>
							</div>
							<p class="text-name">格蕾朵</p>
							<span class="text-price">$130</span>
							<div class="button add-cart">ADD TO CART</div>
						</li>
						<li class="produce-li show">
							<div class="photo_inside">
								<a href="../products_fetch" class="photo" style="background: url(../img/featured/3.png) center no-repeat; background-size: 100%"></a>
							</div>
							<p class="text-name">格蕾朵</p>
							<span class="text-price">$130</span>
							<div class="button add-cart">ADD TO CART</div>
						</li>
						<li class="produce-li show">
							<div class="photo_inside">
								<a href="../products_fetch" class="photo" style="background: url(../img/featured/4.png) center no-repeat; background-size: 100%"></a>
							</div>
							<p class="text-name">格蕾朵</p>
							<span class="text-price">$130</span>
							<div class="button add-cart">ADD TO CART</div>
						</li>
						<li class="produce-li">
							<div class="photo_inside">
								<a href="../products_fetch" class="photo" style="background: url(../img/featured/1.png) center no-repeat; background-size: 100%"></a>
							</div>
							<p class="text-name">格蕾朵</p>
							<span class="text-price">$130</span>
							<div class="button add-cart">ADD TO CART</div>
						</li>
						<li class="produce-li">
							<div class="photo_inside">
								<a href="../products_fetch" class="photo" style="background: url(../img/featured/2.png) center no-repeat; background-size: 100%"></a>
							</div>
							<p class="text-name">格蕾朵</p>
							<span class="text-price">$130</span>
							<div class="button add-cart">ADD TO CART</div>
						</li>
						<li class="produce-li">
							<div class="photo_inside">
								<a href="../products_fetch" class="photo" style="background: url(../img/featured/3.png) center no-repeat; background-size: 100%"></a>
							</div>
							<p class="text-name">格蕾朵</p>
							<span class="text-price">$130</span>
							<div class="button add-cart">ADD TO CART</div>
						</li>
						<li class="produce-li">
							<div class="photo_inside">
								<a href="../products_fetch" class="photo" style="background: url(../img/featured/4.png) center no-repeat; background-size: 100%"></a>
							</div>
							<p class="text-name">格蕾朵</p>
							<span class="text-price">$130</span>
							<div class="button add-cart">ADD TO CART</div>
						</li>
					</ul>
					<ul class="content-produce">
						<li class="produce-li show">
							<div class="photo_inside">
								<a href="../products_fetch" class="photo" style="background: url(../img/featured/1.png) center no-repeat; background-size: 100%"></a>
							</div>
							<p class="text-name">格蕾朵cake4</p>
							<span class="text-price">$130</span>
							<div class="button add-cart">ADD TO CART</div>
						</li>
						<li class="produce-li show">
							<div class="photo_inside">
								<a href="../products_fetch" class="photo" style="background: url(../img/featured/2.png) center no-repeat; background-size: 100%"></a>
							</div>
							<p class="text-name">格蕾朵</p>
							<span class="text-price">$130</span>
							<div class="button add-cart">ADD TO CART</div>
						</li>
						<li class="produce-li show">
							<div class="photo_inside">
								<a href="../products_fetch" class="photo" style="background: url(../img/featured/3.png) center no-repeat; background-size: 100%"></a>
							</div>
							<p class="text-name">格蕾朵</p>
							<span class="text-price">$130</span>
							<div class="button add-cart">ADD TO CART</div>
						</li>
						<li class="produce-li show">
							<div class="photo_inside">
								<a href="../products_fetch" class="photo" style="background: url(../img/featured/4.png) center no-repeat; background-size: 100%"></a>
							</div>
							<p class="text-name">格蕾朵</p>
							<span class="text-price">$130</span>
							<div class="button add-cart">ADD TO CART</div>
						</li>
						<li class="produce-li show">
							<div class="photo_inside">
								<a href="../products_fetch" class="photo" style="background: url(../img/featured/1.png) center no-repeat; background-size: 100%"></a>
							</div>
							<p class="text-name">格蕾朵</p>
							<span class="text-price">$130</span>
							<div class="button add-cart">ADD TO CART</div>
						</li>
						<li class="produce-li show">
							<div class="photo_inside">
								<a href="../products_fetch" class="photo" style="background: url(../img/featured/2.png) center no-repeat; background-size: 100%"></a>
							</div>
							<p class="text-name">格蕾朵</p>
							<span class="text-price">$130</span>
							<div class="button add-cart">ADD TO CART</div>
						</li>
						<li class="produce-li show">
							<div class="photo_inside">
								<a href="../products_fetch" class="photo" style="background: url(../img/featured/3.png) center no-repeat; background-size: 100%"></a>
							</div>
							<p class="text-name">格蕾朵</p>
							<span class="text-price">$130</span>
							<div class="button add-cart">ADD TO CART</div>
						</li>
						<li class="produce-li show">
							<div class="photo_inside">
								<a href="../products_fetch" class="photo" style="background: url(../img/featured/4.png) center no-repeat; background-size: 100%"></a>
							</div>
							<p class="text-name">格蕾朵</p>
							<span class="text-price">$130</span>
							<div class="button add-cart">ADD TO CART</div>
						</li>
						<li class="produce-li">
							<div class="photo_inside">
								<a href="../products_fetch" class="photo" style="background: url(../img/featured/1.png) center no-repeat; background-size: 100%"></a>
							</div>
							<p class="text-name">格蕾朵</p>
							<span class="text-price">$130</span>
							<div class="button add-cart">ADD TO CART</div>
						</li>
						<li class="produce-li">
							<div class="photo_inside">
								<a href="../products_fetch" class="photo" style="background: url(../img/featured/2.png) center no-repeat; background-size: 100%"></a>
							</div>
							<p class="text-name">格蕾朵</p>
							<span class="text-price">$130</span>
							<div class="button add-cart">ADD TO CART</div>
						</li>
						<li class="produce-li">
							<div class="photo_inside">
								<a href="../products_fetch" class="photo" style="background: url(../img/featured/3.png) center no-repeat; background-size: 100%"></a>
							</div>
							<p class="text-name">格蕾朵</p>
							<span class="text-price">$130</span>
							<div class="button add-cart">ADD TO CART</div>
						</li>
						<li class="produce-li">
							<div class="photo_inside">
								<a href="../products_fetch" class="photo" style="background: url(../img/featured/4.png) center no-repeat; background-size: 100%"></a>
							</div>
							<p class="text-name">格蕾朵</p>
							<span class="text-price">$130</span>
							<div class="button add-cart">ADD TO CART</div>
						</li>
					</ul>
					<ul class="content-produce">
						<li class="produce-li show">
							<div class="photo_inside">
								<a href="../products_fetch" class="photo" style="background: url(../img/featured/1.png) center no-repeat; background-size: 100%"></a>
							</div>
							<p class="text-name">格蕾朵cake5</p>
							<span class="text-price">$130</span>
							<div class="button add-cart">ADD TO CART</div>
						</li>
						<li class="produce-li show">
							<div class="photo_inside">
								<a href="../products_fetch" class="photo" style="background: url(../img/featured/2.png) center no-repeat; background-size: 100%"></a>
							</div>
							<p class="text-name">格蕾朵</p>
							<span class="text-price">$130</span>
							<div class="button add-cart">ADD TO CART</div>
						</li>
						<li class="produce-li show">
							<div class="photo_inside">
								<a href="../products_fetch" class="photo" style="background: url(../img/featured/3.png) center no-repeat; background-size: 100%"></a>
							</div>
							<p class="text-name">格蕾朵</p>
							<span class="text-price">$130</span>
							<div class="button add-cart">ADD TO CART</div>
						</li>
						<li class="produce-li show">
							<div class="photo_inside">
								<a href="../products_fetch" class="photo" style="background: url(../img/featured/4.png) center no-repeat; background-size: 100%"></a>
							</div>
							<p class="text-name">格蕾朵</p>
							<span class="text-price">$130</span>
							<div class="button add-cart">ADD TO CART</div>
						</li>
						<li class="produce-li show">
							<div class="photo_inside">
								<a href="../products_fetch" class="photo" style="background: url(../img/featured/1.png) center no-repeat; background-size: 100%"></a>
							</div>
							<p class="text-name">格蕾朵</p>
							<span class="text-price">$130</span>
							<div class="button add-cart">ADD TO CART</div>
						</li>
						<li class="produce-li show">
							<div class="photo_inside">
								<a href="../products_fetch" class="photo" style="background: url(../img/featured/2.png) center no-repeat; background-size: 100%"></a>
							</div>
							<p class="text-name">格蕾朵</p>
							<span class="text-price">$130</span>
							<div class="button add-cart">ADD TO CART</div>
						</li>
						<li class="produce-li show">
							<div class="photo_inside">
								<a href="../products_fetch" class="photo" style="background: url(../img/featured/3.png) center no-repeat; background-size: 100%"></a>
							</div>
							<p class="text-name">格蕾朵</p>
							<span class="text-price">$130</span>
							<div class="button add-cart">ADD TO CART</div>
						</li>
						<li class="produce-li show">
							<div class="photo_inside">
								<a href="../products_fetch" class="photo" style="background: url(../img/featured/4.png) center no-repeat; background-size: 100%"></a>
							</div>
							<p class="text-name">格蕾朵</p>
							<span class="text-price">$130</span>
							<div class="button add-cart">ADD TO CART</div>
						</li>
						<li class="produce-li">
							<div class="photo_inside">
								<a href="../products_fetch" class="photo" style="background: url(../img/featured/1.png) center no-repeat; background-size: 100%"></a>
							</div>
							<p class="text-name">格蕾朵</p>
							<span class="text-price">$130</span>
							<div class="button add-cart">ADD TO CART</div>
						</li>
						<li class="produce-li">
							<div class="photo_inside">
								<a href="../products_fetch" class="photo" style="background: url(../img/featured/2.png) center no-repeat; background-size: 100%"></a>
							</div>
							<p class="text-name">格蕾朵</p>
							<span class="text-price">$130</span>
							<div class="button add-cart">ADD TO CART</div>
						</li>
						<li class="produce-li">
							<div class="photo_inside">
								<a href="../products_fetch" class="photo" style="background: url(../img/featured/3.png) center no-repeat; background-size: 100%"></a>
							</div>
							<p class="text-name">格蕾朵</p>
							<span class="text-price">$130</span>
							<div class="button add-cart">ADD TO CART</div>
						</li>
						<li class="produce-li">
							<div class="photo_inside">
								<a href="../products_fetch" class="photo" style="background: url(../img/featured/4.png) center no-repeat; background-size: 100%"></a>
							</div>
							<p class="text-name">格蕾朵</p>
							<span class="text-price">$130</span>
							<div class="button add-cart">ADD TO CART</div>
						</li>
					</ul>
				</div>
				<div class="dessert-list dessert-list-pie">
					<ul class="content-produce active">
						<li class="produce-li show">
							<div class="photo_inside">
								<a href="../products_fetch" class="photo" style="background: url(../img/featured/1.png) center no-repeat; background-size: 100%"></a>
							</div>
							<p class="text-name">格蕾朵pie1</p>
							<span class="text-price">$130</span>
							<div class="button add-cart">ADD TO CART</div>
						</li>
						<li class="produce-li show">
							<div class="photo_inside">
								<a href="../products_fetch" class="photo" style="background: url(../img/featured/2.png) center no-repeat; background-size: 100%"></a>
							</div>
							<p class="text-name">格蕾朵</p>
							<span class="text-price">$130</span>
							<div class="button add-cart">ADD TO CART</div>
						</li>
						<li class="produce-li show">
							<div class="photo_inside">
								<a href="../products_fetch" class="photo" style="background: url(../img/featured/3.png) center no-repeat; background-size: 100%"></a>
							</div>
							<p class="text-name">格蕾朵</p>
							<span class="text-price">$130</span>
							<div class="button add-cart">ADD TO CART</div>
						</li>
						<li class="produce-li show">
							<div class="photo_inside">
								<a href="../products_fetch" class="photo" style="background: url(../img/featured/4.png) center no-repeat; background-size: 100%"></a>
							</div>
							<p class="text-name">格蕾朵</p>
							<span class="text-price">$130</span>
							<div class="button add-cart">ADD TO CART</div>
						</li>
						<li class="produce-li show">
							<div class="photo_inside">
								<a href="../products_fetch" class="photo" style="background: url(../img/featured/1.png) center no-repeat; background-size: 100%"></a>
							</div>
							<p class="text-name">格蕾朵</p>
							<span class="text-price">$130</span>
							<div class="button add-cart">ADD TO CART</div>
						</li>
						<li class="produce-li show">
							<div class="photo_inside">
								<a href="../products_fetch" class="photo" style="background: url(../img/featured/2.png) center no-repeat; background-size: 100%"></a>
							</div>
							<p class="text-name">格蕾朵</p>
							<span class="text-price">$130</span>
							<div class="button add-cart">ADD TO CART</div>
						</li>
						<li class="produce-li show">
							<div class="photo_inside">
								<a href="../products_fetch" class="photo" style="background: url(../img/featured/3.png) center no-repeat; background-size: 100%"></a>
							</div>
							<p class="text-name">格蕾朵</p>
							<span class="text-price">$130</span>
							<div class="button add-cart">ADD TO CART</div>
						</li>
						<li class="produce-li show">
							<div class="photo_inside">
								<a href="../products_fetch" class="photo" style="background: url(../img/featured/4.png) center no-repeat; background-size: 100%"></a>
							</div>
							<p class="text-name">格蕾朵</p>
							<span class="text-price">$130</span>
							<div class="button add-cart">ADD TO CART</div>
						</li>
						<li class="produce-li">
							<div class="photo_inside">
								<a href="../products_fetch" class="photo" style="background: url(../img/featured/1.png) center no-repeat; background-size: 100%"></a>
							</div>
							<p class="text-name">格蕾朵</p>
							<span class="text-price">$130</span>
							<div class="button add-cart">ADD TO CART</div>
						</li>
						<li class="produce-li">
							<div class="photo_inside">
								<a href="../products_fetch" class="photo" style="background: url(../img/featured/2.png) center no-repeat; background-size: 100%"></a>
							</div>
							<p class="text-name">格蕾朵</p>
							<span class="text-price">$130</span>
							<div class="button add-cart">ADD TO CART</div>
						</li>
						<li class="produce-li">
							<div class="photo_inside">
								<a href="../products_fetch" class="photo" style="background: url(../img/featured/3.png) center no-repeat; background-size: 100%"></a>
							</div>
							<p class="text-name">格蕾朵</p>
							<span class="text-price">$130</span>
							<div class="button add-cart">ADD TO CART</div>
						</li>
						<li class="produce-li">
							<div class="photo_inside">
								<a href="../products_fetch" class="photo" style="background: url(../img/featured/4.png) center no-repeat; background-size: 100%"></a>
							</div>
							<p class="text-name">格蕾朵</p>
							<span class="text-price">$130</span>
							<div class="button add-cart">ADD TO CART</div>
						</li>
					</ul>
					<ul class="content-produce">
						<li class="produce-li show">
							<div class="photo_inside">
								<a href="../products_fetch" class="photo" style="background: url(../img/featured/1.png) center no-repeat; background-size: 100%"></a>
							</div>
							<p class="text-name">格蕾朵pie2</p>
							<span class="text-price">$130</span>
							<div class="button add-cart">ADD TO CART</div>
						</li>
						<li class="produce-li show">
							<div class="photo_inside">
								<a href="../products_fetch" class="photo" style="background: url(../img/featured/2.png) center no-repeat; background-size: 100%"></a>
							</div>
							<p class="text-name">格蕾朵</p>
							<span class="text-price">$130</span>
							<div class="button add-cart">ADD TO CART</div>
						</li>
						<li class="produce-li show">
							<div class="photo_inside">
								<a href="../products_fetch" class="photo" style="background: url(../img/featured/3.png) center no-repeat; background-size: 100%"></a>
							</div>
							<p class="text-name">格蕾朵</p>
							<span class="text-price">$130</span>
							<div class="button add-cart">ADD TO CART</div>
						</li>
						<li class="produce-li show">
							<div class="photo_inside">
								<a href="../products_fetch" class="photo" style="background: url(../img/featured/4.png) center no-repeat; background-size: 100%"></a>
							</div>
							<p class="text-name">格蕾朵</p>
							<span class="text-price">$130</span>
							<div class="button add-cart">ADD TO CART</div>
						</li>
						<li class="produce-li show">
							<div class="photo_inside">
								<a href="../products_fetch" class="photo" style="background: url(../img/featured/1.png) center no-repeat; background-size: 100%"></a>
							</div>
							<p class="text-name">格蕾朵</p>
							<span class="text-price">$130</span>
							<div class="button add-cart">ADD TO CART</div>
						</li>
						<li class="produce-li show">
							<div class="photo_inside">
								<a href="../products_fetch" class="photo" style="background: url(../img/featured/2.png) center no-repeat; background-size: 100%"></a>
							</div>
							<p class="text-name">格蕾朵</p>
							<span class="text-price">$130</span>
							<div class="button add-cart">ADD TO CART</div>
						</li>
						<li class="produce-li show">
							<div class="photo_inside">
								<a href="../products_fetch" class="photo" style="background: url(../img/featured/3.png) center no-repeat; background-size: 100%"></a>
							</div>
							<p class="text-name">格蕾朵</p>
							<span class="text-price">$130</span>
							<div class="button add-cart">ADD TO CART</div>
						</li>
						<li class="produce-li show">
							<div class="photo_inside">
								<a href="../products_fetch" class="photo" style="background: url(../img/featured/4.png) center no-repeat; background-size: 100%"></a>
							</div>
							<p class="text-name">格蕾朵</p>
							<span class="text-price">$130</span>
							<div class="button add-cart">ADD TO CART</div>
						</li>
						<li class="produce-li">
							<div class="photo_inside">
								<a href="../products_fetch" class="photo" style="background: url(../img/featured/1.png) center no-repeat; background-size: 100%"></a>
							</div>
							<p class="text-name">格蕾朵</p>
							<span class="text-price">$130</span>
							<div class="button add-cart">ADD TO CART</div>
						</li>
						<li class="produce-li">
							<div class="photo_inside">
								<a href="../products_fetch" class="photo" style="background: url(../img/featured/2.png) center no-repeat; background-size: 100%"></a>
							</div>
							<p class="text-name">格蕾朵</p>
							<span class="text-price">$130</span>
							<div class="button add-cart">ADD TO CART</div>
						</li>
						<li class="produce-li">
							<div class="photo_inside">
								<a href="../products_fetch" class="photo" style="background: url(../img/featured/3.png) center no-repeat; background-size: 100%"></a>
							</div>
							<p class="text-name">格蕾朵</p>
							<span class="text-price">$130</span>
							<div class="button add-cart">ADD TO CART</div>
						</li>
						<li class="produce-li">
							<div class="photo_inside">
								<a href="../products_fetch" class="photo" style="background: url(../img/featured/4.png) center no-repeat; background-size: 100%"></a>
							</div>
							<p class="text-name">格蕾朵</p>
							<span class="text-price">$130</span>
							<div class="button add-cart">ADD TO CART</div>
						</li>
					</ul>
					<ul class="content-produce">
						<li class="produce-li show">
							<div class="photo_inside">
								<a href="../products_fetch" class="photo" style="background: url(../img/featured/1.png) center no-repeat; background-size: 100%"></a>
							</div>
							<p class="text-name">格蕾朵pie3</p>
							<span class="text-price">$130</span>
							<div class="button add-cart">ADD TO CART</div>
						</li>
						<li class="produce-li show">
							<div class="photo_inside">
								<a href="../products_fetch" class="photo" style="background: url(../img/featured/2.png) center no-repeat; background-size: 100%"></a>
							</div>
							<p class="text-name">格蕾朵</p>
							<span class="text-price">$130</span>
							<div class="button add-cart">ADD TO CART</div>
						</li>
						<li class="produce-li show">
							<div class="photo_inside">
								<a href="../products_fetch" class="photo" style="background: url(../img/featured/3.png) center no-repeat; background-size: 100%"></a>
							</div>
							<p class="text-name">格蕾朵</p>
							<span class="text-price">$130</span>
							<div class="button add-cart">ADD TO CART</div>
						</li>
						<li class="produce-li show">
							<div class="photo_inside">
								<a href="../products_fetch" class="photo" style="background: url(../img/featured/4.png) center no-repeat; background-size: 100%"></a>
							</div>
							<p class="text-name">格蕾朵</p>
							<span class="text-price">$130</span>
							<div class="button add-cart">ADD TO CART</div>
						</li>
						<li class="produce-li show">
							<div class="photo_inside">
								<a href="../products_fetch" class="photo" style="background: url(../img/featured/1.png) center no-repeat; background-size: 100%"></a>
							</div>
							<p class="text-name">格蕾朵</p>
							<span class="text-price">$130</span>
							<div class="button add-cart">ADD TO CART</div>
						</li>
						<li class="produce-li show">
							<div class="photo_inside">
								<a href="../products_fetch" class="photo" style="background: url(../img/featured/2.png) center no-repeat; background-size: 100%"></a>
							</div>
							<p class="text-name">格蕾朵</p>
							<span class="text-price">$130</span>
							<div class="button add-cart">ADD TO CART</div>
						</li>
						<li class="produce-li show">
							<div class="photo_inside">
								<a href="../products_fetch" class="photo" style="background: url(../img/featured/3.png) center no-repeat; background-size: 100%"></a>
							</div>
							<p class="text-name">格蕾朵</p>
							<span class="text-price">$130</span>
							<div class="button add-cart">ADD TO CART</div>
						</li>
						<li class="produce-li show">
							<div class="photo_inside">
								<a href="../products_fetch" class="photo" style="background: url(../img/featured/4.png) center no-repeat; background-size: 100%"></a>
							</div>
							<p class="text-name">格蕾朵</p>
							<span class="text-price">$130</span>
							<div class="button add-cart">ADD TO CART</div>
						</li>
						<li class="produce-li show">
							<div class="photo_inside">
								<a href="../products_fetch" class="photo" style="background: url(../img/featured/1.png) center no-repeat; background-size: 100%"></a>
							</div>
							<p class="text-name">格蕾朵</p>
							<span class="text-price">$130</span>
							<div class="button add-cart">ADD TO CART</div>
						</li>
						<li class="produce-li">
							<div class="photo_inside">
								<a href="../products_fetch" class="photo" style="background: url(../img/featured/2.png) center no-repeat; background-size: 100%"></a>
							</div>
							<p class="text-name">格蕾朵</p>
							<span class="text-price">$130</span>
							<div class="button add-cart">ADD TO CART</div>
						</li>
						<li class="produce-li">
							<div class="photo_inside">
								<a href="../products_fetch" class="photo" style="background: url(../img/featured/3.png) center no-repeat; background-size: 100%"></a>
							</div>
							<p class="text-name">格蕾朵</p>
							<span class="text-price">$130</span>
							<div class="button add-cart">ADD TO CART</div>
						</li>
						<li class="produce-li">
							<div class="photo_inside">
								<a href="../products_fetch" class="photo" style="background: url(../img/featured/4.png) center no-repeat; background-size: 100%"></a>
							</div>
							<p class="text-name">格蕾朵</p>
							<span class="text-price">$130</span>
							<div class="button add-cart">ADD TO CART</div>
						</li>
					</ul>
					<ul class="content-produce">
						<li class="produce-li show">
							<div class="photo_inside">
								<a href="../products_fetch" class="photo" style="background: url(../img/featured/1.png) center no-repeat; background-size: 100%"></a>
							</div>
							<p class="text-name">格蕾朵pie4</p>
							<span class="text-price">$130</span>
							<div class="button add-cart">ADD TO CART</div>
						</li>
						<li class="produce-li show">
							<div class="photo_inside">
								<a href="../products_fetch" class="photo" style="background: url(../img/featured/2.png) center no-repeat; background-size: 100%"></a>
							</div>
							<p class="text-name">格蕾朵</p>
							<span class="text-price">$130</span>
							<div class="button add-cart">ADD TO CART</div>
						</li>
						<li class="produce-li show">
							<div class="photo_inside">
								<a href="../products_fetch" class="photo" style="background: url(../img/featured/3.png) center no-repeat; background-size: 100%"></a>
							</div>
							<p class="text-name">格蕾朵</p>
							<span class="text-price">$130</span>
							<div class="button add-cart">ADD TO CART</div>
						</li>
						<li class="produce-li show">
							<div class="photo_inside">
								<a href="../products_fetch" class="photo" style="background: url(../img/featured/4.png) center no-repeat; background-size: 100%"></a>
							</div>
							<p class="text-name">格蕾朵</p>
							<span class="text-price">$130</span>
							<div class="button add-cart">ADD TO CART</div>
						</li>
						<li class="produce-li show">
							<div class="photo_inside">
								<a href="../products_fetch" class="photo" style="background: url(../img/featured/1.png) center no-repeat; background-size: 100%"></a>
							</div>
							<p class="text-name">格蕾朵</p>
							<span class="text-price">$130</span>
							<div class="button add-cart">ADD TO CART</div>
						</li>
						<li class="produce-li show">
							<div class="photo_inside">
								<a href="../products_fetch" class="photo" style="background: url(../img/featured/2.png) center no-repeat; background-size: 100%"></a>
							</div>
							<p class="text-name">格蕾朵</p>
							<span class="text-price">$130</span>
							<div class="button add-cart">ADD TO CART</div>
						</li>
						<li class="produce-li show">
							<div class="photo_inside">
								<a href="../products_fetch" class="photo" style="background: url(../img/featured/3.png) center no-repeat; background-size: 100%"></a>
							</div>
							<p class="text-name">格蕾朵</p>
							<span class="text-price">$130</span>
							<div class="button add-cart">ADD TO CART</div>
						</li>
						<li class="produce-li show">
							<div class="photo_inside">
								<a href="../products_fetch" class="photo" style="background: url(../img/featured/4.png) center no-repeat; background-size: 100%"></a>
							</div>
							<p class="text-name">格蕾朵</p>
							<span class="text-price">$130</span>
							<div class="button add-cart">ADD TO CART</div>
						</li>
						<li class="produce-li">
							<div class="photo_inside">
								<a href="../products_fetch" class="photo" style="background: url(../img/featured/1.png) center no-repeat; background-size: 100%"></a>
							</div>
							<p class="text-name">格蕾朵</p>
							<span class="text-price">$130</span>
							<div class="button add-cart">ADD TO CART</div>
						</li>
						<li class="produce-li">
							<div class="photo_inside">
								<a href="../products_fetch" class="photo" style="background: url(../img/featured/2.png) center no-repeat; background-size: 100%"></a>
							</div>
							<p class="text-name">格蕾朵</p>
							<span class="text-price">$130</span>
							<div class="button add-cart">ADD TO CART</div>
						</li>
						<li class="produce-li">
							<div class="photo_inside">
								<a href="../products_fetch" class="photo" style="background: url(../img/featured/3.png) center no-repeat; background-size: 100%"></a>
							</div>
							<p class="text-name">格蕾朵</p>
							<span class="text-price">$130</span>
							<div class="button add-cart">ADD TO CART</div>
						</li>
						<li class="produce-li">
							<div class="photo_inside">
								<a href="../products_fetch" class="photo" style="background: url(../img/featured/4.png) center no-repeat; background-size: 100%"></a>
							</div>
							<p class="text-name">格蕾朵</p>
							<span class="text-price">$130</span>
							<div class="button add-cart">ADD TO CART</div>
						</li>
					</ul>
					<ul class="content-produce">
						<li class="produce-li show">
							<div class="photo_inside">
								<a href="../products_fetch" class="photo" style="background: url(../img/featured/1.png) center no-repeat; background-size: 100%"></a>
							</div>
							<p class="text-name">格蕾朵pie5</p>
							<span class="text-price">$130</span>
							<div class="button add-cart">ADD TO CART</div>
						</li>
						<li class="produce-li show">
							<div class="photo_inside">
								<a href="../products_fetch" class="photo" style="background: url(../img/featured/2.png) center no-repeat; background-size: 100%"></a>
							</div>
							<p class="text-name">格蕾朵</p>
							<span class="text-price">$130</span>
							<div class="button add-cart">ADD TO CART</div>
						</li>
						<li class="produce-li show">
							<div class="photo_inside">
								<a href="../products_fetch" class="photo" style="background: url(../img/featured/3.png) center no-repeat; background-size: 100%"></a>
							</div>
							<p class="text-name">格蕾朵</p>
							<span class="text-price">$130</span>
							<div class="button add-cart">ADD TO CART</div>
						</li>
						<li class="produce-li show">
							<div class="photo_inside">
								<a href="../products_fetch" class="photo" style="background: url(../img/featured/4.png) center no-repeat; background-size: 100%"></a>
							</div>
							<p class="text-name">格蕾朵</p>
							<span class="text-price">$130</span>
							<div class="button add-cart">ADD TO CART</div>
						</li>
						<li class="produce-li show">
							<div class="photo_inside">
								<a href="../products_fetch" class="photo" style="background: url(../img/featured/1.png) center no-repeat; background-size: 100%"></a>
							</div>
							<p class="text-name">格蕾朵</p>
							<span class="text-price">$130</span>
							<div class="button add-cart">ADD TO CART</div>
						</li>
						<li class="produce-li show">
							<div class="photo_inside">
								<a href="../products_fetch" class="photo" style="background: url(../img/featured/2.png) center no-repeat; background-size: 100%"></a>
							</div>
							<p class="text-name">格蕾朵</p>
							<span class="text-price">$130</span>
							<div class="button add-cart">ADD TO CART</div>
						</li>
						<li class="produce-li show">
							<div class="photo_inside">
								<a href="../products_fetch" class="photo" style="background: url(../img/featured/3.png) center no-repeat; background-size: 100%"></a>
							</div>
							<p class="text-name">格蕾朵</p>
							<span class="text-price">$130</span>
							<div class="button add-cart">ADD TO CART</div>
						</li>
						<li class="produce-li show">
							<div class="photo_inside">
								<a href="../products_fetch" class="photo" style="background: url(../img/featured/4.png) center no-repeat; background-size: 100%"></a>
							</div>
							<p class="text-name">格蕾朵</p>
							<span class="text-price">$130</span>
							<div class="button add-cart">ADD TO CART</div>
						</li>
						<li class="produce-li">
							<div class="photo_inside">
								<a href="../products_fetch" class="photo" style="background: url(../img/featured/1.png) center no-repeat; background-size: 100%"></a>
							</div>
							<p class="text-name">格蕾朵</p>
							<span class="text-price">$130</span>
							<div class="button add-cart">ADD TO CART</div>
						</li>
						<li class="produce-li">
							<div class="photo_inside">
								<a href="../products_fetch" class="photo" style="background: url(../img/featured/2.png) center no-repeat; background-size: 100%"></a>
							</div>
							<p class="text-name">格蕾朵</p>
							<span class="text-price">$130</span>
							<div class="button add-cart">ADD TO CART</div>
						</li>
						<li class="produce-li">
							<div class="photo_inside">
								<a href="../products_fetch" class="photo" style="background: url(../img/featured/3.png) center no-repeat; background-size: 100%"></a>
							</div>
							<p class="text-name">格蕾朵</p>
							<span class="text-price">$130</span>
							<div class="button add-cart">ADD TO CART</div>
						</li>
						<li class="produce-li">
							<div class="photo_inside">
								<a href="../products_fetch" class="photo" style="background: url(../img/featured/4.png) center no-repeat; background-size: 100%"></a>
							</div>
							<p class="text-name">格蕾朵</p>
							<span class="text-price">$130</span>
							<div class="button add-cart">ADD TO CART</div>
						</li>
					</ul>
				</div>
				<div class="dessert-list dessert-list-macaron">
					<ul class="content-produce active">
						<li class="produce-li show">
							<div class="photo_inside">
								<a href="../products_fetch" class="photo" style="background: url(../img/featured/1.png) center no-repeat; background-size: 100%"></a>
							</div>
							<p class="text-name">格蕾朵macaron1</p>
							<span class="text-price">$130</span>
							<div class="button add-cart">ADD TO CART</div>
						</li>
						<li class="produce-li show">
							<div class="photo_inside">
								<a href="../products_fetch" class="photo" style="background: url(../img/featured/2.png) center no-repeat; background-size: 100%"></a>
							</div>
							<p class="text-name">格蕾朵</p>
							<span class="text-price">$130</span>
							<div class="button add-cart">ADD TO CART</div>
						</li>
						<li class="produce-li show">
							<div class="photo_inside">
								<a href="../products_fetch" class="photo" style="background: url(../img/featured/3.png) center no-repeat; background-size: 100%"></a>
							</div>
							<p class="text-name">格蕾朵</p>
							<span class="text-price">$130</span>
							<div class="button add-cart">ADD TO CART</div>
						</li>
						<li class="produce-li show">
							<div class="photo_inside">
								<a href="../products_fetch" class="photo" style="background: url(../img/featured/4.png) center no-repeat; background-size: 100%"></a>
							</div>
							<p class="text-name">格蕾朵</p>
							<span class="text-price">$130</span>
							<div class="button add-cart">ADD TO CART</div>
						</li>
						<li class="produce-li show">
							<div class="photo_inside">
								<a href="../products_fetch" class="photo" style="background: url(../img/featured/1.png) center no-repeat; background-size: 100%"></a>
							</div>
							<p class="text-name">格蕾朵</p>
							<span class="text-price">$130</span>
							<div class="button add-cart">ADD TO CART</div>
						</li>
						<li class="produce-li show">
							<div class="photo_inside">
								<a href="../products_fetch" class="photo" style="background: url(../img/featured/2.png) center no-repeat; background-size: 100%"></a>
							</div>
							<p class="text-name">格蕾朵</p>
							<span class="text-price">$130</span>
							<div class="button add-cart">ADD TO CART</div>
						</li>
						<li class="produce-li show">
							<div class="photo_inside">
								<a href="../products_fetch" class="photo" style="background: url(../img/featured/3.png) center no-repeat; background-size: 100%"></a>
							</div>
							<p class="text-name">格蕾朵</p>
							<span class="text-price">$130</span>
							<div class="button add-cart">ADD TO CART</div>
						</li>
						<li class="produce-li show">
							<div class="photo_inside">
								<a href="../products_fetch" class="photo" style="background: url(../img/featured/4.png) center no-repeat; background-size: 100%"></a>
							</div>
							<p class="text-name">格蕾朵</p>
							<span class="text-price">$130</span>
							<div class="button add-cart">ADD TO CART</div>
						</li>
						<li class="produce-li">
							<div class="photo_inside">
								<a href="../products_fetch" class="photo" style="background: url(../img/featured/1.png) center no-repeat; background-size: 100%"></a>
							</div>
							<p class="text-name">格蕾朵</p>
							<span class="text-price">$130</span>
							<div class="button add-cart">ADD TO CART</div>
						</li>
						<li class="produce-li">
							<div class="photo_inside">
								<a href="../products_fetch" class="photo" style="background: url(../img/featured/2.png) center no-repeat; background-size: 100%"></a>
							</div>
							<p class="text-name">格蕾朵</p>
							<span class="text-price">$130</span>
							<div class="button add-cart">ADD TO CART</div>
						</li>
						<li class="produce-li">
							<div class="photo_inside">
								<a href="../products_fetch" class="photo" style="background: url(../img/featured/3.png) center no-repeat; background-size: 100%"></a>
							</div>
							<p class="text-name">格蕾朵</p>
							<span class="text-price">$130</span>
							<div class="button add-cart">ADD TO CART</div>
						</li>
						<li class="produce-li">
							<div class="photo_inside">
								<a href="../products_fetch" class="photo" style="background: url(../img/featured/4.png) center no-repeat; background-size: 100%"></a>
							</div>
							<p class="text-name">格蕾朵</p>
							<span class="text-price">$130</span>
							<div class="button add-cart">ADD TO CART</div>
						</li>
					</ul>
					<ul class="content-produce">
						<li class="produce-li show">
							<div class="photo_inside">
								<a href="../products_fetch" class="photo" style="background: url(../img/featured/1.png) center no-repeat; background-size: 100%"></a>
							</div>
							<p class="text-name">格蕾朵macaron2</p>
							<span class="text-price">$130</span>
							<div class="button add-cart">ADD TO CART</div>
						</li>
						<li class="produce-li show">
							<div class="photo_inside">
								<a href="../products_fetch" class="photo" style="background: url(../img/featured/2.png) center no-repeat; background-size: 100%"></a>
							</div>
							<p class="text-name">格蕾朵</p>
							<span class="text-price">$130</span>
							<div class="button add-cart">ADD TO CART</div>
						</li>
						<li class="produce-li show">
							<div class="photo_inside">
								<a href="../products_fetch" class="photo" style="background: url(../img/featured/3.png) center no-repeat; background-size: 100%"></a>
							</div>
							<p class="text-name">格蕾朵</p>
							<span class="text-price">$130</span>
							<div class="button add-cart">ADD TO CART</div>
						</li>
						<li class="produce-li show">
							<div class="photo_inside">
								<a href="../products_fetch" class="photo" style="background: url(../img/featured/4.png) center no-repeat; background-size: 100%"></a>
							</div>
							<p class="text-name">格蕾朵</p>
							<span class="text-price">$130</span>
							<div class="button add-cart">ADD TO CART</div>
						</li>
						<li class="produce-li show">
							<div class="photo_inside">
								<a href="../products_fetch" class="photo" style="background: url(../img/featured/1.png) center no-repeat; background-size: 100%"></a>
							</div>
							<p class="text-name">格蕾朵</p>
							<span class="text-price">$130</span>
							<div class="button add-cart">ADD TO CART</div>
						</li>
						<li class="produce-li show">
							<div class="photo_inside">
								<a href="../products_fetch" class="photo" style="background: url(../img/featured/2.png) center no-repeat; background-size: 100%"></a>
							</div>
							<p class="text-name">格蕾朵</p>
							<span class="text-price">$130</span>
							<div class="button add-cart">ADD TO CART</div>
						</li>
						<li class="produce-li show">
							<div class="photo_inside">
								<a href="../products_fetch" class="photo" style="background: url(../img/featured/3.png) center no-repeat; background-size: 100%"></a>
							</div>
							<p class="text-name">格蕾朵</p>
							<span class="text-price">$130</span>
							<div class="button add-cart">ADD TO CART</div>
						</li>
						<li class="produce-li show">
							<div class="photo_inside">
								<a href="../products_fetch" class="photo" style="background: url(../img/featured/4.png) center no-repeat; background-size: 100%"></a>
							</div>
							<p class="text-name">格蕾朵</p>
							<span class="text-price">$130</span>
							<div class="button add-cart">ADD TO CART</div>
						</li>
						<li class="produce-li">
							<div class="photo_inside">
								<a href="../products_fetch" class="photo" style="background: url(../img/featured/1.png) center no-repeat; background-size: 100%"></a>
							</div>
							<p class="text-name">格蕾朵</p>
							<span class="text-price">$130</span>
							<div class="button add-cart">ADD TO CART</div>
						</li>
						<li class="produce-li">
							<div class="photo_inside">
								<a href="../products_fetch" class="photo" style="background: url(../img/featured/2.png) center no-repeat; background-size: 100%"></a>
							</div>
							<p class="text-name">格蕾朵</p>
							<span class="text-price">$130</span>
							<div class="button add-cart">ADD TO CART</div>
						</li>
						<li class="produce-li">
							<div class="photo_inside">
								<a href="../products_fetch" class="photo" style="background: url(../img/featured/3.png) center no-repeat; background-size: 100%"></a>
							</div>
							<p class="text-name">格蕾朵</p>
							<span class="text-price">$130</span>
							<div class="button add-cart">ADD TO CART</div>
						</li>
						<li class="produce-li">
							<div class="photo_inside">
								<a href="../products_fetch" class="photo" style="background: url(../img/featured/4.png) center no-repeat; background-size: 100%"></a>
							</div>
							<p class="text-name">格蕾朵</p>
							<span class="text-price">$130</span>
							<div class="button add-cart">ADD TO CART</div>
						</li>
					</ul>
					<ul class="content-produce">
						<li class="produce-li show">
							<div class="photo_inside">
								<a href="../products_fetch" class="photo" style="background: url(../img/featured/1.png) center no-repeat; background-size: 100%"></a>
							</div>
							<p class="text-name">格蕾朵macaron3</p>
							<span class="text-price">$130</span>
							<div class="button add-cart">ADD TO CART</div>
						</li>
						<li class="produce-li show">
							<div class="photo_inside">
								<a href="../products_fetch" class="photo" style="background: url(../img/featured/2.png) center no-repeat; background-size: 100%"></a>
							</div>
							<p class="text-name">格蕾朵</p>
							<span class="text-price">$130</span>
							<div class="button add-cart">ADD TO CART</div>
						</li>
						<li class="produce-li show">
							<div class="photo_inside">
								<a href="../products_fetch" class="photo" style="background: url(../img/featured/3.png) center no-repeat; background-size: 100%"></a>
							</div>
							<p class="text-name">格蕾朵</p>
							<span class="text-price">$130</span>
							<div class="button add-cart">ADD TO CART</div>
						</li>
						<li class="produce-li show">
							<div class="photo_inside">
								<a href="../products_fetch" class="photo" style="background: url(../img/featured/4.png) center no-repeat; background-size: 100%"></a>
							</div>
							<p class="text-name">格蕾朵</p>
							<span class="text-price">$130</span>
							<div class="button add-cart">ADD TO CART</div>
						</li>
						<li class="produce-li show">
							<div class="photo_inside">
								<a href="../products_fetch" class="photo" style="background: url(../img/featured/1.png) center no-repeat; background-size: 100%"></a>
							</div>
							<p class="text-name">格蕾朵</p>
							<span class="text-price">$130</span>
							<div class="button add-cart">ADD TO CART</div>
						</li>
						<li class="produce-li show">
							<div class="photo_inside">
								<a href="../products_fetch" class="photo" style="background: url(../img/featured/2.png) center no-repeat; background-size: 100%"></a>
							</div>
							<p class="text-name">格蕾朵</p>
							<span class="text-price">$130</span>
							<div class="button add-cart">ADD TO CART</div>
						</li>
						<li class="produce-li show">
							<div class="photo_inside">
								<a href="../products_fetch" class="photo" style="background: url(../img/featured/3.png) center no-repeat; background-size: 100%"></a>
							</div>
							<p class="text-name">格蕾朵</p>
							<span class="text-price">$130</span>
							<div class="button add-cart">ADD TO CART</div>
						</li>
						<li class="produce-li show">
							<div class="photo_inside">
								<a href="../products_fetch" class="photo" style="background: url(../img/featured/4.png) center no-repeat; background-size: 100%"></a>
							</div>
							<p class="text-name">格蕾朵</p>
							<span class="text-price">$130</span>
							<div class="button add-cart">ADD TO CART</div>
						</li>
						<li class="produce-li">
							<div class="photo_inside">
								<a href="../products_fetch" class="photo" style="background: url(../img/featured/1.png) center no-repeat; background-size: 100%"></a>
							</div>
							<p class="text-name">格蕾朵</p>
							<span class="text-price">$130</span>
							<div class="button add-cart">ADD TO CART</div>
						</li>
						<li class="produce-li">
							<div class="photo_inside">
								<a href="../products_fetch" class="photo" style="background: url(../img/featured/2.png) center no-repeat; background-size: 100%"></a>
							</div>
							<p class="text-name">格蕾朵</p>
							<span class="text-price">$130</span>
							<div class="button add-cart">ADD TO CART</div>
						</li>
						<li class="produce-li">
							<div class="photo_inside">
								<a href="../products_fetch" class="photo" style="background: url(../img/featured/3.png) center no-repeat; background-size: 100%"></a>
							</div>
							<p class="text-name">格蕾朵</p>
							<span class="text-price">$130</span>
							<div class="button add-cart">ADD TO CART</div>
						</li>
						<li class="produce-li">
							<div class="photo_inside">
								<a href="../products_fetch" class="photo" style="background: url(../img/featured/4.png) center no-repeat; background-size: 100%"></a>
							</div>
							<p class="text-name">格蕾朵</p>
							<span class="text-price">$130</span>
							<div class="button add-cart">ADD TO CART</div>
						</li>
					</ul>
					<ul class="content-produce">
						<li class="produce-li show">
							<div class="photo_inside">
								<a href="../products_fetch" class="photo" style="background: url(../img/featured/1.png) center no-repeat; background-size: 100%"></a>
							</div>
							<p class="text-name">格蕾朵macaron4</p>
							<span class="text-price">$130</span>
							<div class="button add-cart">ADD TO CART</div>
						</li>
						<li class="produce-li show">
							<div class="photo_inside">
								<a href="../products_fetch" class="photo" style="background: url(../img/featured/2.png) center no-repeat; background-size: 100%"></a>
							</div>
							<p class="text-name">格蕾朵</p>
							<span class="text-price">$130</span>
							<div class="button add-cart">ADD TO CART</div>
						</li>
						<li class="produce-li show">
							<div class="photo_inside">
								<a href="../products_fetch" class="photo" style="background: url(../img/featured/3.png) center no-repeat; background-size: 100%"></a>
							</div>
							<p class="text-name">格蕾朵</p>
							<span class="text-price">$130</span>
							<div class="button add-cart">ADD TO CART</div>
						</li>
						<li class="produce-li show">
							<div class="photo_inside">
								<a href="../products_fetch" class="photo" style="background: url(../img/featured/4.png) center no-repeat; background-size: 100%"></a>
							</div>
							<p class="text-name">格蕾朵</p>
							<span class="text-price">$130</span>
							<div class="button add-cart">ADD TO CART</div>
						</li>
						<li class="produce-li show">
							<div class="photo_inside">
								<a href="../products_fetch" class="photo" style="background: url(../img/featured/1.png) center no-repeat; background-size: 100%"></a>
							</div>
							<p class="text-name">格蕾朵</p>
							<span class="text-price">$130</span>
							<div class="button add-cart">ADD TO CART</div>
						</li>
						<li class="produce-li show">
							<div class="photo_inside">
								<a href="../products_fetch" class="photo" style="background: url(../img/featured/2.png) center no-repeat; background-size: 100%"></a>
							</div>
							<p class="text-name">格蕾朵</p>
							<span class="text-price">$130</span>
							<div class="button add-cart">ADD TO CART</div>
						</li>
						<li class="produce-li show">
							<div class="photo_inside">
								<a href="../products_fetch" class="photo" style="background: url(../img/featured/3.png) center no-repeat; background-size: 100%"></a>
							</div>
							<p class="text-name">格蕾朵</p>
							<span class="text-price">$130</span>
							<div class="button add-cart">ADD TO CART</div>
						</li>
						<li class="produce-li show">
							<div class="photo_inside">
								<a href="../products_fetch" class="photo" style="background: url(../img/featured/4.png) center no-repeat; background-size: 100%"></a>
							</div>
							<p class="text-name">格蕾朵</p>
							<span class="text-price">$130</span>
							<div class="button add-cart">ADD TO CART</div>
						</li>
						<li class="produce-li">
							<div class="photo_inside">
								<a href="../products_fetch" class="photo" style="background: url(../img/featured/1.png) center no-repeat; background-size: 100%"></a>
							</div>
							<p class="text-name">格蕾朵</p>
							<span class="text-price">$130</span>
							<div class="button add-cart">ADD TO CART</div>
						</li>
						<li class="produce-li">
							<div class="photo_inside">
								<a href="../products_fetch" class="photo" style="background: url(../img/featured/2.png) center no-repeat; background-size: 100%"></a>
							</div>
							<p class="text-name">格蕾朵</p>
							<span class="text-price">$130</span>
							<div class="button add-cart">ADD TO CART</div>
						</li>
						<li class="produce-li">
							<div class="photo_inside">
								<a href="../products_fetch" class="photo" style="background: url(../img/featured/3.png) center no-repeat; background-size: 100%"></a>
							</div>
							<p class="text-name">格蕾朵</p>
							<span class="text-price">$130</span>
							<div class="button add-cart">ADD TO CART</div>
						</li>
						<li class="produce-li">
							<div class="photo_inside">
								<a href="../products_fetch" class="photo" style="background: url(../img/featured/4.png) center no-repeat; background-size: 100%"></a>
							</div>
							<p class="text-name">格蕾朵</p>
							<span class="text-price">$130</span>
							<div class="button add-cart">ADD TO CART</div>
						</li>
					</ul>
					<ul class="content-produce">
						<li class="produce-li show">
							<div class="photo_inside">
								<a href="../products_fetch" class="photo" style="background: url(../img/featured/1.png) center no-repeat; background-size: 100%"></a>
							</div>
							<p class="text-name">格蕾朵macaron5</p>
							<span class="text-price">$130</span>
							<div class="button add-cart">ADD TO CART</div>
						</li>
						<li class="produce-li show">
							<div class="photo_inside">
								<a href="../products_fetch" class="photo" style="background: url(../img/featured/2.png) center no-repeat; background-size: 100%"></a>
							</div>
							<p class="text-name">格蕾朵</p>
							<span class="text-price">$130</span>
							<div class="button add-cart">ADD TO CART</div>
						</li>
						<li class="produce-li show">
							<div class="photo_inside">
								<a href="../products_fetch" class="photo" style="background: url(../img/featured/3.png) center no-repeat; background-size: 100%"></a>
							</div>
							<p class="text-name">格蕾朵</p>
							<span class="text-price">$130</span>
							<div class="button add-cart">ADD TO CART</div>
						</li>
						<li class="produce-li show">
							<div class="photo_inside">
								<a href="../products_fetch" class="photo" style="background: url(../img/featured/4.png) center no-repeat; background-size: 100%"></a>
							</div>
							<p class="text-name">格蕾朵</p>
							<span class="text-price">$130</span>
							<div class="button add-cart">ADD TO CART</div>
						</li>
						<li class="produce-li show">
							<div class="photo_inside">
								<a href="../products_fetch" class="photo" style="background: url(../img/featured/1.png) center no-repeat; background-size: 100%"></a>
							</div>
							<p class="text-name">格蕾朵</p>
							<span class="text-price">$130</span>
							<div class="button add-cart">ADD TO CART</div>
						</li>
						<li class="produce-li show">
							<div class="photo_inside">
								<a href="../products_fetch" class="photo" style="background: url(../img/featured/2.png) center no-repeat; background-size: 100%"></a>
							</div>
							<p class="text-name">格蕾朵</p>
							<span class="text-price">$130</span>
							<div class="button add-cart">ADD TO CART</div>
						</li>
						<li class="produce-li show">
							<div class="photo_inside">
								<a href="../products_fetch" class="photo" style="background: url(../img/featured/3.png) center no-repeat; background-size: 100%"></a>
							</div>
							<p class="text-name">格蕾朵</p>
							<span class="text-price">$130</span>
							<div class="button add-cart">ADD TO CART</div>
						</li>
						<li class="produce-li show">
							<div class="photo_inside">
								<a href="../products_fetch" class="photo" style="background: url(../img/featured/4.png) center no-repeat; background-size: 100%"></a>
							</div>
							<p class="text-name">格蕾朵</p>
							<span class="text-price">$130</span>
							<div class="button add-cart">ADD TO CART</div>
						</li>
						<li class="produce-li">
							<div class="photo_inside">
								<a href="../products_fetch" class="photo" style="background: url(../img/featured/1.png) center no-repeat; background-size: 100%"></a>
							</div>
							<p class="text-name">格蕾朵</p>
							<span class="text-price">$130</span>
							<div class="button add-cart">ADD TO CART</div>
						</li>
						<li class="produce-li">
							<div class="photo_inside">
								<a href="../products_fetch" class="photo" style="background: url(../img/featured/2.png) center no-repeat; background-size: 100%"></a>
							</div>
							<p class="text-name">格蕾朵</p>
							<span class="text-price">$130</span>
							<div class="button add-cart">ADD TO CART</div>
						</li>
						<li class="produce-li">
							<div class="photo_inside">
								<a href="../products_fetch" class="photo" style="background: url(../img/featured/3.png) center no-repeat; background-size: 100%"></a>
							</div>
							<p class="text-name">格蕾朵</p>
							<span class="text-price">$130</span>
							<div class="button add-cart">ADD TO CART</div>
						</li>
						<li class="produce-li">
							<div class="photo_inside">
								<a href="../products_fetch" class="photo" style="background: url(../img/featured/4.png) center no-repeat; background-size: 100%"></a>
							</div>
							<p class="text-name">格蕾朵</p>
							<span class="text-price">$130</span>
							<div class="button add-cart">ADD TO CART</div>
						</li>
					</ul>
				</div>
				<div class="dessert-list dessert-list-cookie">
					<ul class="content-produce active">
						<li class="produce-li show">
							<div class="photo_inside">
								<a href="../products_fetch" class="photo" style="background: url(../img/featured/1.png) center no-repeat; background-size: 100%"></a>
							</div>
							<p class="text-name">格蕾朵cookie1</p>
							<span class="text-price">$130</span>
							<div class="button add-cart">ADD TO CART</div>
						</li>
						<li class="produce-li show">
							<div class="photo_inside">
								<a href="../products_fetch" class="photo" style="background: url(../img/featured/2.png) center no-repeat; background-size: 100%"></a>
							</div>
							<p class="text-name">格蕾朵</p>
							<span class="text-price">$130</span>
							<div class="button add-cart">ADD TO CART</div>
						</li>
						<li class="produce-li show">
							<div class="photo_inside">
								<a href="../products_fetch" class="photo" style="background: url(../img/featured/3.png) center no-repeat; background-size: 100%"></a>
							</div>
							<p class="text-name">格蕾朵</p>
							<span class="text-price">$130</span>
							<div class="button add-cart">ADD TO CART</div>
						</li>
						<li class="produce-li show">
							<div class="photo_inside">
								<a href="../products_fetch" class="photo" style="background: url(../img/featured/4.png) center no-repeat; background-size: 100%"></a>
							</div>
							<p class="text-name">格蕾朵</p>
							<span class="text-price">$130</span>
							<div class="button add-cart">ADD TO CART</div>
						</li>
						<li class="produce-li show">
							<div class="photo_inside">
								<a href="../products_fetch" class="photo" style="background: url(../img/featured/1.png) center no-repeat; background-size: 100%"></a>
							</div>
							<p class="text-name">格蕾朵</p>
							<span class="text-price">$130</span>
							<div class="button add-cart">ADD TO CART</div>
						</li>
						<li class="produce-li show">
							<div class="photo_inside">
								<a href="../products_fetch" class="photo" style="background: url(../img/featured/2.png) center no-repeat; background-size: 100%"></a>
							</div>
							<p class="text-name">格蕾朵</p>
							<span class="text-price">$130</span>
							<div class="button add-cart">ADD TO CART</div>
						</li>
						<li class="produce-li show">
							<div class="photo_inside">
								<a href="../products_fetch" class="photo" style="background: url(../img/featured/3.png) center no-repeat; background-size: 100%"></a>
							</div>
							<p class="text-name">格蕾朵</p>
							<span class="text-price">$130</span>
							<div class="button add-cart">ADD TO CART</div>
						</li>
						<li class="produce-li">
							<div class="photo_inside">
								<a href="../products_fetch" class="photo" style="background: url(../img/featured/4.png) center no-repeat; background-size: 100%"></a>
							</div>
							<p class="text-name">格蕾朵</p>
							<span class="text-price">$130</span>
							<div class="button add-cart">ADD TO CART</div>
						</li>
						<li class="produce-li">
							<div class="photo_inside">
								<a href="../products_fetch" class="photo" style="background: url(../img/featured/1.png) center no-repeat; background-size: 100%"></a>
							</div>
							<p class="text-name">格蕾朵</p>
							<span class="text-price">$130</span>
							<div class="button add-cart">ADD TO CART</div>
						</li>
						<li class="produce-li">
							<div class="photo_inside">
								<a href="../products_fetch" class="photo" style="background: url(../img/featured/2.png) center no-repeat; background-size: 100%"></a>
							</div>
							<p class="text-name">格蕾朵</p>
							<span class="text-price">$130</span>
							<div class="button add-cart">ADD TO CART</div>
						</li>
						<li class="produce-li">
							<div class="photo_inside">
								<a href="../products_fetch" class="photo" style="background: url(../img/featured/3.png) center no-repeat; background-size: 100%"></a>
							</div>
							<p class="text-name">格蕾朵</p>
							<span class="text-price">$130</span>
							<div class="button add-cart">ADD TO CART</div>
						</li>
						<li class="produce-li">
							<div class="photo_inside">
								<a href="../products_fetch" class="photo" style="background: url(../img/featured/4.png) center no-repeat; background-size: 100%"></a>
							</div>
							<p class="text-name">格蕾朵</p>
							<span class="text-price">$130</span>
							<div class="button add-cart">ADD TO CART</div>
						</li>
					</ul>
					<ul class="content-produce">
						<li class="produce-li show">
							<div class="photo_inside">
								<a href="../products_fetch" class="photo" style="background: url(../img/featured/1.png) center no-repeat; background-size: 100%"></a>
							</div>
							<p class="text-name">格蕾朵cookie2</p>
							<span class="text-price">$130</span>
							<div class="button add-cart">ADD TO CART</div>
						</li>
						<li class="produce-li show">
							<div class="photo_inside">
								<a href="../products_fetch" class="photo" style="background: url(../img/featured/2.png) center no-repeat; background-size: 100%"></a>
							</div>
							<p class="text-name">格蕾朵</p>
							<span class="text-price">$130</span>
							<div class="button add-cart">ADD TO CART</div>
						</li>
						<li class="produce-li show">
							<div class="photo_inside">
								<a href="../products_fetch" class="photo" style="background: url(../img/featured/3.png) center no-repeat; background-size: 100%"></a>
							</div>
							<p class="text-name">格蕾朵</p>
							<span class="text-price">$130</span>
							<div class="button add-cart">ADD TO CART</div>
						</li>
						<li class="produce-li show">
							<div class="photo_inside">
								<a href="../products_fetch" class="photo" style="background: url(../img/featured/4.png) center no-repeat; background-size: 100%"></a>
							</div>
							<p class="text-name">格蕾朵</p>
							<span class="text-price">$130</span>
							<div class="button add-cart">ADD TO CART</div>
						</li>
						<li class="produce-li show">
							<div class="photo_inside">
								<a href="../products_fetch" class="photo" style="background: url(../img/featured/1.png) center no-repeat; background-size: 100%"></a>
							</div>
							<p class="text-name">格蕾朵</p>
							<span class="text-price">$130</span>
							<div class="button add-cart">ADD TO CART</div>
						</li>
						<li class="produce-li show">
							<div class="photo_inside">
								<a href="../products_fetch" class="photo" style="background: url(../img/featured/2.png) center no-repeat; background-size: 100%"></a>
							</div>
							<p class="text-name">格蕾朵</p>
							<span class="text-price">$130</span>
							<div class="button add-cart">ADD TO CART</div>
						</li>
						<li class="produce-li show">
							<div class="photo_inside">
								<a href="../products_fetch" class="photo" style="background: url(../img/featured/3.png) center no-repeat; background-size: 100%"></a>
							</div>
							<p class="text-name">格蕾朵</p>
							<span class="text-price">$130</span>
							<div class="button add-cart">ADD TO CART</div>
						</li>
						<li class="produce-li show">
							<div class="photo_inside">
								<a href="../products_fetch" class="photo" style="background: url(../img/featured/4.png) center no-repeat; background-size: 100%"></a>
							</div>
							<p class="text-name">格蕾朵</p>
							<span class="text-price">$130</span>
							<div class="button add-cart">ADD TO CART</div>
						</li>
						<li class="produce-li">
							<div class="photo_inside">
								<a href="../products_fetch" class="photo" style="background: url(../img/featured/1.png) center no-repeat; background-size: 100%"></a>
							</div>
							<p class="text-name">格蕾朵</p>
							<span class="text-price">$130</span>
							<div class="button add-cart">ADD TO CART</div>
						</li>
						<li class="produce-li">
							<div class="photo_inside">
								<a href="../products_fetch" class="photo" style="background: url(../img/featured/2.png) center no-repeat; background-size: 100%"></a>
							</div>
							<p class="text-name">格蕾朵</p>
							<span class="text-price">$130</span>
							<div class="button add-cart">ADD TO CART</div>
						</li>
						<li class="produce-li">
							<div class="photo_inside">
								<a href="../products_fetch" class="photo" style="background: url(../img/featured/3.png) center no-repeat; background-size: 100%"></a>
							</div>
							<p class="text-name">格蕾朵</p>
							<span class="text-price">$130</span>
							<div class="button add-cart">ADD TO CART</div>
						</li>
						<li class="produce-li">
							<div class="photo_inside">
								<a href="../products_fetch" class="photo" style="background: url(../img/featured/4.png) center no-repeat; background-size: 100%"></a>
							</div>
							<p class="text-name">格蕾朵</p>
							<span class="text-price">$130</span>
							<div class="button add-cart">ADD TO CART</div>
						</li>
					</ul>
					<ul class="content-produce">
						<li class="produce-li show">
							<div class="photo_inside">
								<a href="../products_fetch" class="photo" style="background: url(../img/featured/1.png) center no-repeat; background-size: 100%"></a>
							</div>
							<p class="text-name">格蕾朵cookie3</p>
							<span class="text-price">$130</span>
							<div class="button add-cart">ADD TO CART</div>
						</li>
						<li class="produce-li show">
							<div class="photo_inside">
								<a href="../products_fetch" class="photo" style="background: url(../img/featured/2.png) center no-repeat; background-size: 100%"></a>
							</div>
							<p class="text-name">格蕾朵</p>
							<span class="text-price">$130</span>
							<div class="button add-cart">ADD TO CART</div>
						</li>
						<li class="produce-li show">
							<div class="photo_inside">
								<a href="../products_fetch" class="photo" style="background: url(../img/featured/3.png) center no-repeat; background-size: 100%"></a>
							</div>
							<p class="text-name">格蕾朵</p>
							<span class="text-price">$130</span>
							<div class="button add-cart">ADD TO CART</div>
						</li>
						<li class="produce-li show">
							<div class="photo_inside">
								<a href="../products_fetch" class="photo" style="background: url(../img/featured/4.png) center no-repeat; background-size: 100%"></a>
							</div>
							<p class="text-name">格蕾朵</p>
							<span class="text-price">$130</span>
							<div class="button add-cart">ADD TO CART</div>
						</li>
						<li class="produce-li show">
							<div class="photo_inside">
								<a href="../products_fetch" class="photo" style="background: url(../img/featured/1.png) center no-repeat; background-size: 100%"></a>
							</div>
							<p class="text-name">格蕾朵</p>
							<span class="text-price">$130</span>
							<div class="button add-cart">ADD TO CART</div>
						</li>
						<li class="produce-li show">
							<div class="photo_inside">
								<a href="../products_fetch" class="photo" style="background: url(../img/featured/2.png) center no-repeat; background-size: 100%"></a>
							</div>
							<p class="text-name">格蕾朵</p>
							<span class="text-price">$130</span>
							<div class="button add-cart">ADD TO CART</div>
						</li>
						<li class="produce-li show">
							<div class="photo_inside">
								<a href="../products_fetch" class="photo" style="background: url(../img/featured/3.png) center no-repeat; background-size: 100%"></a>
							</div>
							<p class="text-name">格蕾朵</p>
							<span class="text-price">$130</span>
							<div class="button add-cart">ADD TO CART</div>
						</li>
						<li class="produce-li show">
							<div class="photo_inside">
								<a href="../products_fetch" class="photo" style="background: url(../img/featured/4.png) center no-repeat; background-size: 100%"></a>
							</div>
							<p class="text-name">格蕾朵</p>
							<span class="text-price">$130</span>
							<div class="button add-cart">ADD TO CART</div>
						</li>
						<li class="produce-li">
							<div class="photo_inside">
								<a href="../products_fetch" class="photo" style="background: url(../img/featured/1.png) center no-repeat; background-size: 100%"></a>
							</div>
							<p class="text-name">格蕾朵</p>
							<span class="text-price">$130</span>
							<div class="button add-cart">ADD TO CART</div>
						</li>
						<li class="produce-li">
							<div class="photo_inside">
								<a href="../products_fetch" class="photo" style="background: url(../img/featured/2.png) center no-repeat; background-size: 100%"></a>
							</div>
							<p class="text-name">格蕾朵</p>
							<span class="text-price">$130</span>
							<div class="button add-cart">ADD TO CART</div>
						</li>
						<li class="produce-li">
							<div class="photo_inside">
								<a href="../products_fetch" class="photo" style="background: url(../img/featured/3.png) center no-repeat; background-size: 100%"></a>
							</div>
							<p class="text-name">格蕾朵</p>
							<span class="text-price">$130</span>
							<div class="button add-cart">ADD TO CART</div>
						</li>
						<li class="produce-li">
							<div class="photo_inside">
								<a href="../products_fetch" class="photo" style="background: url(../img/featured/4.png) center no-repeat; background-size: 100%"></a>
							</div>
							<p class="text-name">格蕾朵</p>
							<span class="text-price">$130</span>
							<div class="button add-cart">ADD TO CART</div>
						</li>
					</ul>
					<ul class="content-produce">
						<li class="produce-li show">
							<div class="photo_inside">
								<a href="../products_fetch" class="photo" style="background: url(../img/featured/1.png) center no-repeat; background-size: 100%"></a>
							</div>
							<p class="text-name">格蕾朵cookie4</p>
							<span class="text-price">$130</span>
							<div class="button add-cart">ADD TO CART</div>
						</li>
						<li class="produce-li show">
							<div class="photo_inside">
								<a href="../products_fetch" class="photo" style="background: url(../img/featured/2.png) center no-repeat; background-size: 100%"></a>
							</div>
							<p class="text-name">格蕾朵</p>
							<span class="text-price">$130</span>
							<div class="button add-cart">ADD TO CART</div>
						</li>
						<li class="produce-li show">
							<div class="photo_inside">
								<a href="../products_fetch" class="photo" style="background: url(../img/featured/3.png) center no-repeat; background-size: 100%"></a>
							</div>
							<p class="text-name">格蕾朵</p>
							<span class="text-price">$130</span>
							<div class="button add-cart">ADD TO CART</div>
						</li>
						<li class="produce-li show">
							<div class="photo_inside">
								<a href="../products_fetch" class="photo" style="background: url(../img/featured/4.png) center no-repeat; background-size: 100%"></a>
							</div>
							<p class="text-name">格蕾朵</p>
							<span class="text-price">$130</span>
							<div class="button add-cart">ADD TO CART</div>
						</li>
						<li class="produce-li show">
							<div class="photo_inside">
								<a href="../products_fetch" class="photo" style="background: url(../img/featured/1.png) center no-repeat; background-size: 100%"></a>
							</div>
							<p class="text-name">格蕾朵</p>
							<span class="text-price">$130</span>
							<div class="button add-cart">ADD TO CART</div>
						</li>
						<li class="produce-li show">
							<div class="photo_inside">
								<a href="../products_fetch" class="photo" style="background: url(../img/featured/2.png) center no-repeat; background-size: 100%"></a>
							</div>
							<p class="text-name">格蕾朵</p>
							<span class="text-price">$130</span>
							<div class="button add-cart">ADD TO CART</div>
						</li>
						<li class="produce-li show">
							<div class="photo_inside">
								<a href="../products_fetch" class="photo" style="background: url(../img/featured/3.png) center no-repeat; background-size: 100%"></a>
							</div>
							<p class="text-name">格蕾朵</p>
							<span class="text-price">$130</span>
							<div class="button add-cart">ADD TO CART</div>
						</li>
						<li class="produce-li show">
							<div class="photo_inside">
								<a href="../products_fetch" class="photo" style="background: url(../img/featured/4.png) center no-repeat; background-size: 100%"></a>
							</div>
							<p class="text-name">格蕾朵</p>
							<span class="text-price">$130</span>
							<div class="button add-cart">ADD TO CART</div>
						</li>
						<li class="produce-li">
							<div class="photo_inside">
								<a href="../products_fetch" class="photo" style="background: url(../img/featured/1.png) center no-repeat; background-size: 100%"></a>
							</div>
							<p class="text-name">格蕾朵</p>
							<span class="text-price">$130</span>
							<div class="button add-cart">ADD TO CART</div>
						</li>
						<li class="produce-li">
							<div class="photo_inside">
								<a href="../products_fetch" class="photo" style="background: url(../img/featured/2.png) center no-repeat; background-size: 100%"></a>
							</div>
							<p class="text-name">格蕾朵</p>
							<span class="text-price">$130</span>
							<div class="button add-cart">ADD TO CART</div>
						</li>
						<li class="produce-li">
							<div class="photo_inside">
								<a href="../products_fetch" class="photo" style="background: url(../img/featured/3.png) center no-repeat; background-size: 100%"></a>
							</div>
							<p class="text-name">格蕾朵</p>
							<span class="text-price">$130</span>
							<div class="button add-cart">ADD TO CART</div>
						</li>
						<li class="produce-li">
							<div class="photo_inside">
								<a href="../products_fetch" class="photo" style="background: url(../img/featured/4.png) center no-repeat; background-size: 100%"></a>
							</div>
							<p class="text-name">格蕾朵</p>
							<span class="text-price">$130</span>
							<div class="button add-cart">ADD TO CART</div>
						</li>
					</ul>
					<ul class="content-produce">
						<li class="produce-li show">
							<div class="photo_inside">
								<a href="../products_fetch" class="photo" style="background: url(../img/featured/1.png) center no-repeat; background-size: 100%"></a>
							</div>
							<p class="text-name">格蕾朵cookie5</p>
							<span class="text-price">$130</span>
							<div class="button add-cart">ADD TO CART</div>
						</li>
						<li class="produce-li show">
							<div class="photo_inside">
								<a href="../products_fetch" class="photo" style="background: url(../img/featured/2.png) center no-repeat; background-size: 100%"></a>
							</div>
							<p class="text-name">格蕾朵</p>
							<span class="text-price">$130</span>
							<div class="button add-cart">ADD TO CART</div>
						</li>
						<li class="produce-li show">
							<div class="photo_inside">
								<a href="../products_fetch" class="photo" style="background: url(../img/featured/3.png) center no-repeat; background-size: 100%"></a>
							</div>
							<p class="text-name">格蕾朵</p>
							<span class="text-price">$130</span>
							<div class="button add-cart">ADD TO CART</div>
						</li>
						<li class="produce-li show">
							<div class="photo_inside">
								<a href="../products_fetch" class="photo" style="background: url(../img/featured/4.png) center no-repeat; background-size: 100%"></a>
							</div>
							<p class="text-name">格蕾朵</p>
							<span class="text-price">$130</span>
							<div class="button add-cart">ADD TO CART</div>
						</li>
						<li class="produce-li show">
							<div class="photo_inside">
								<a href="../products_fetch" class="photo" style="background: url(../img/featured/1.png) center no-repeat; background-size: 100%"></a>
							</div>
							<p class="text-name">格蕾朵</p>
							<span class="text-price">$130</span>
							<div class="button add-cart">ADD TO CART</div>
						</li>
						<li class="produce-li show">
							<div class="photo_inside">
								<a href="../products_fetch" class="photo" style="background: url(../img/featured/2.png) center no-repeat; background-size: 100%"></a>
							</div>
							<p class="text-name">格蕾朵</p>
							<span class="text-price">$130</span>
							<div class="button add-cart">ADD TO CART</div>
						</li>
						<li class="produce-li show">
							<div class="photo_inside">
								<a href="../products_fetch" class="photo" style="background: url(../img/featured/3.png) center no-repeat; background-size: 100%"></a>
							</div>
							<p class="text-name">格蕾朵</p>
							<span class="text-price">$130</span>
							<div class="button add-cart">ADD TO CART</div>
						</li>
						<li class="produce-li show">
							<div class="photo_inside">
								<a href="../products_fetch" class="photo" style="background: url(../img/featured/4.png) center no-repeat; background-size: 100%"></a>
							</div>
							<p class="text-name">格蕾朵</p>
							<span class="text-price">$130</span>
							<div class="button add-cart">ADD TO CART</div>
						</li>
						<li class="produce-li">
							<div class="photo_inside">
								<a href="../products_fetch" class="photo" style="background: url(../img/featured/1.png) center no-repeat; background-size: 100%"></a>
							</div>
							<p class="text-name">格蕾朵</p>
							<span class="text-price">$130</span>
							<div class="button add-cart">ADD TO CART</div>
						</li>
						<li class="produce-li">
							<div class="photo_inside">
								<a href="../products_fetch" class="photo" style="background: url(../img/featured/2.png) center no-repeat; background-size: 100%"></a>
							</div>
							<p class="text-name">格蕾朵</p>
							<span class="text-price">$130</span>
							<div class="button add-cart">ADD TO CART</div>
						</li>
						<li class="produce-li">
							<div class="photo_inside">
								<a href="../products_fetch" class="photo" style="background: url(../img/featured/3.png) center no-repeat; background-size: 100%"></a>
							</div>
							<p class="text-name">格蕾朵</p>
							<span class="text-price">$130</span>
							<div class="button add-cart">ADD TO CART</div>
						</li>
						<li class="produce-li">
							<div class="photo_inside">
								<a href="../products_fetch" class="photo" style="background: url(../img/featured/4.png) center no-repeat; background-size: 100%"></a>
							</div>
							<p class="text-name">格蕾朵</p>
							<span class="text-price">$130</span>
							<div class="button add-cart">ADD TO CART</div>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="morePage">
            <div class="button loadMore">LOAD MORE</div>
        </div>
    </main>
	<?php
		include '../page/footer2.php';
    ?>
</body>
</html>