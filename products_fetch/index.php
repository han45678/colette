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
			$('#relatedProducts').slick({
                infinite: true,
                slidesToShow: 3,
                slidesToScroll: 2,
                responsive: [
                    {
                        breakpoint: 1200,
                        settings: {
                            dots: false,
							arrows: true,
                            slidesToShow: 3,
                        }
                    },
                    {
                        breakpoint: 768,
                        settings: {
                            dots: true,
							arrows: false,
                            slidesToShow: 2,
                        }
                    },
                ]  
            });
			//個別產品照片點擊
			$('.photo_show').click(function (e) {
				e.preventDefault();
				var img= $(this).attr("data-images");
				console.log({"background":"url(../img/"+img+") center no-repeat"});
				$('.photo-main').css({"background":"url(../img/"+img+") center no-repeat","background-size":"cover"});
			});
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
    <main class="products_fetch activePage" id="about">
		<div class="background">
			<p>Store</p>
		</div>
		<div class="section1">
			<div class="photo-list">
				<div class="wrap">
					<div class="photo_turn">
						<ul>
							<li class="photo_show" data-images="store2.png" style="background: url(../img/store2.png) center no-repeat; background-size: cover;"></li>
							<li class="photo_show" data-images="store4.png" style="background: url(../img/store4.png) center no-repeat; background-size: cover;"></li>
							<li class="photo_show" data-images="store5.png" style="background: url(../img/store5.png) center no-repeat; background-size: cover;"></li>
						</ul>
					</div>
					<div class="photo-main" style="background: url(../img/store2.png) center no-repeat; background-size: cover;"></div>
				</div>
			</div>
			<div class="content-list">
				<ul>
					<li class="text1">
						<p>store<span>/</span></p>
						<p>果香飄飄<span>/</span></p>
						<p>格蕾朵</p>
					</li>
					<li class="text2">
						<p>格蕾朵Colette<span>冷藏</span></p>
					</li>
					<li class="text3">
						<p>黑醋栗慕斯和黑醋栗果凍的層次口感，搭配著天使手指蛋糕，是格蕾朵的經典作品</p>
					</li>
					<li class="text4">
						<div class="size">
							<p>尺寸</p>
							<div class="size-select">
								<select name="" id="">
									<option value="dessert">固定大小</option>
								</select>
							</div>
						</div>
						<div class="price">
							<p>售價:</p>
							<span>$130</span>
						</div>
					</li>
					<li class="text5">
						<div class="add_side">
							<div class="button addToBag">ADD TO BAG</div>
						</div>
						<div class="social">
							<a href="#" class="icon icon_fb"></a>
							<a href="#" class="icon icon_twitter"></a>
							<a href="#" class="icon icon_ig"></a>
						</div>
					</li>
				</ul>
			</div>
		</div>
		<div class="section2">
			<ul>
				<li>
					<img src="../img/store6.png" alt="store6.png">
					<p>黑醋栗慕斯和黑醋栗果凍的層次口感，搭配著天使手指蛋糕，是格蕾朵的經典作品</p>
				</li>
				<li>
					<img src="../img/store6.png" alt="store6.png">
					<p>黑醋栗慕斯和黑醋栗果凍的層次口感，搭配著天使手指蛋糕，是格蕾朵的經典作品</p>
				</li>
			</ul>
		</div>
		<div class="section3">
            <div class="wrap">
				<div class="subtitle">
					<ul class="subtitle_dot">
						<li></li>
						<li></li>
						<li></li>
						<li></li>
						<li></li>
						<li></li>
						<li></li>
						<li></li>
						<li></li>
						<li></li>
						<li></li>
						<li></li>
						<li></li>
						<li></li>
						<li></li>
						<li></li>
						<li></li>
						<li></li>
						<li></li>
						<li></li>
					</ul>
					<h4>Related Products</h4>
					<ul class="subtitle_dot">
						<li></li>
						<li></li>
						<li></li>
						<li></li>
						<li></li>
						<li></li>
						<li></li>
						<li></li>
						<li></li>
						<li></li>
						<li></li>
						<li></li>
						<li></li>
						<li></li>
						<li></li>
						<li></li>
						<li></li>
						<li></li>
						<li></li>
						<li></li>
					</ul>
				</div>
                <div id="relatedProducts" class="productList">
                    <div class="product">
                        <a href="../products_fetch" class="img featured" style="background: url(../img/featured/1.png)no-repeat center;background-size: cover;"></a>
                        <div class="caption">格蕾朵</div>
                        <div class="price">$130</div>
                    </div>
                    <div class="product">
                         <a href="../products_fetch" class="img featured" style="background: url(../img/featured/2.png)no-repeat center;background-size: cover;"></a>
                        <div class="caption">綠翡翠檸檬塔</div>
                        <div class="price">$120</div>
                    </div>
                    <div class="product">
                         <a href="../products_fetch" class="img featured" style="background: url(../img/featured/3.png)no-repeat center;background-size: cover;"></a>
                        <div class="caption">格蕾朵蛋糕</div>
                        <div class="price">$130</div>
                    </div>
                    <div class="product">
                         <a href="../products_fetch" class="img featured" style="background: url(../img/featured/4.png)no-repeat center;background-size: cover;"></a>
                        <div class="caption">格蕾朵蛋糕</div>
                        <div class="price">$120</div>
                    </div>
                    <div class="product">
                         <a href="../products_fetch" class="img featured" style="background: url(../img/featured/3.png)no-repeat center;background-size: cover;"></a>
                        <div class="caption">格蕾朵</div>
                        <div class="price">$130</div>
                    </div>
                </div>
            </div>
        </div>
    </main>
	<?php
		include '../page/footer2.php';
    ?>
</body>
</html>