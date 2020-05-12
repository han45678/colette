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
    <!-- fonts -->
    <link href="https://fonts.googleapis.com/css?family=PT+Sans&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans+TC&display=swap" rel="stylesheet">
    <!-- slick CDN -->
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="./css/main.css">
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="./js/jquery.waitforimages.min.js"></script>
    <script src="./js/jquery.page.js"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script type="text/javascript" src="./js/main.js"></script>
    <!-- by home -->
    <script>
        $(document).ready(function () {
            $(window).on('load', function(){
                var htmlWidth = $(window).width();
                var weddingCakeDots = $("#bannerArea-WeddingCake").children(".slick-dots");
                var weddingCakeTextAreaHeight = $("#weddingCakeTextArea").innerHeight();
                var resultHeight = weddingCakeTextAreaHeight * 0.85;
                if(htmlWidth < 768){
                    weddingCakeDots.css("transform",'translate(-50%,'+resultHeight+'px)').css("top","unset");
                }else if(htmlWidth >= 768 && htmlWidth < 1200){
                    weddingCakeDots.css("transform",'translate(170%,1200%)');
                }else if(htmlWidth >= 1200){
                    weddingCakeDots.css("transform",'translate(240%,1800%)');
                }
            })
            $(window).resize(function(){
                var htmlWidth = $(window).width();
                var weddingCakeDots = $("#bannerArea-WeddingCake").children(".slick-dots");
                var weddingCakeTextAreaHeight = $("#weddingCakeTextArea").innerHeight();
                var resultHeight = weddingCakeTextAreaHeight * 0.85;
                if(htmlWidth < 768){
                    weddingCakeDots.css("transform",'translate(-50%,'+resultHeight+'px)').css("top","unset");
                }else if(htmlWidth >= 768 && htmlWidth < 1200){
                    weddingCakeDots.css("transform",'translate(170%,1200%)');
                }else if(htmlWidth >= 1200){
                    weddingCakeDots.css("transform",'translate(240%,1800%)');
                }
            }).resize()
            $('#productShow').slick({
                infinite: true,
                slidesToShow: 4,
                slidesToScroll: 1,
                responsive: [
                    {
                        breakpoint: 768,
                        settings: {
                            slidesToShow: 2,
                        }
                    },
                ]             
            });
            $('#bannerArea').slick({
                dots: true,
                infinite: true,
                fade: true,
                speed: 300,
                cssEase: 'linear',
                autoplay: true,
                autoplaySpeed: 5000,
            });
            $('#featuredProducts').slick({
                infinite: true,
                slidesToShow: 4,
                slidesToScroll: 1,
                responsive: [
                    {
                        breakpoint: 1200,
                        settings: {
                            dots: false,
                            slidesToShow: 3,
                        }
                    },
                    {
                        breakpoint: 768,
                        settings: {
                            dots: true,
                            slidesToShow: 2,
                        }
                    },
                ]  
            });
            $('#bannerArea-WeddingCake').slick({
                dots: true,
                infinite: true,
                fade: true,
                speed: 300,
                cssEase: 'linear',
                autoplay: true,
                autoplaySpeed: 5000,
            });
        })
    </script>
</head>
<body>
    <!-- svg -->
    <?php include './page/svg.php'; ?>
    <?php
		include './page/loading.php';
    ?>
    <!-- nav -->
	<?php
		include './page/nav.php';
    ?>
    <main class="main_home active">
        <!-- index banner -->
        <div class="bannerAll">
            <div id="bannerArea" class="bannerArea">
                <div class="img"><img src="./img/indexBanner/banner-1.png"></div>
                <div class="img"><img src="./img/indexBanner/banner-1.png"></div>
                <div class="img"><img src="./img/indexBanner/banner-1.png"></div>
            </div>
            <div class="learnMore"><a href="./news">LEARN MORE</a></div>
            <div class="title">News Title</div>
            <div class="activityContent">行銷活動內容ＸＸＸ</div>
        </div>
        <!-- productShow -->
        <div class="productShow">
            <div class="wrap">
                <div id="productShow" class="productList">
                    <div class="product">
                        <svg class="icon-cake"><use xlink:href="#icon-cake"/></svg>
                        <div class="title-en">les Gateaux</div>
                        <div class="title-zh">蛋糕</div>
                    </div>
                    <div class="product">
                        <svg class="icon-pie"><use xlink:href="#icon-pie"/></svg>
                        <div class="title-en">les Gateaux</div>
                        <div class="title-zh">鹹派</div></div>
                    <div class="product">
                        <svg class="icon-macaron"><use xlink:href="#icon-macaron"/></svg>
                        <div class="title-en">les Gateaux</div>
                        <div class="title-zh">馬卡龍</div></div>
                    <div class="product">
                        <svg class="icon-cookie"><use xlink:href="#icon-cookie"/></svg>
                        <div class="title-en">les Gateaux</div>
                        <div class="title-zh">餅乾</div>
                    </div>
                    <div class="product">
                        <svg class="icon-cake"><use xlink:href="#icon-cake"/></svg>
                        <div class="title-en">les Gateaux</div>
                        <div class="title-zh">蛋糕</div>
                    </div>
                    <div class="product">
                        <svg class="icon-pie"><use xlink:href="#icon-pie"/></svg>
                        <div class="title-en">les Gateaux</div>
                        <div class="title-zh">鹹派</div></div>
                    <div class="product">
                        <svg class="icon-macaron"><use xlink:href="#icon-macaron"/></svg>
                        <div class="title-en">les Gateaux</div>
                        <div class="title-zh">馬卡龍</div></div>
                    <div class="product">
                        <svg class="icon-cookie"><use xlink:href="#icon-cookie"/></svg>
                        <div class="title-en">les Gateaux</div>
                        <div class="title-zh">餅乾</div>
                    </div>
                </div>
                <div class="subtitle">Philosophy of Colett</div>
                <svg class="icon-totem"><use xlink:href="#icon-totem"/></svg>
                <div class="textArea">格蕾朵用愛和祝福<br>賦予每ㄧ個蛋糕和甜點生命力<br>希望在您每ㄧ個難忘的日子<br>陪您ㄧ起Make a wish!</div>
                <div class="learnMore"><a href="./about" class="btn">LEARN MORE</a></div>
            </div>
        </div>
        <!-- wedding cake -->
        <div class="reserveWeddingCake">
            <div id="bannerArea-WeddingCake" class="bannerArea">
                <div class="img"><img src="./img/indexBanner/banner-2.png"></div>
                <div class="img"><img src="./img/indexBanner/banner-2.png"></div>
                <div class="img"><img src="./img/indexBanner/banner-2.png"></div>
            </div>
            <!-- for web -->
            <div class="textForWeb">
                <div class="subtitle">Wedding Cake</div>
                <div class="textArea">客製化蛋糕請參考我們facebook 圖片，<br>或是將您想要的蛋糕圖片請電洽或私訊我們，<br>將會有專人儘快與您聯絡</div>
                <div class="seeMore"><a href="#" class="btn">SEE MORE</a></div>
            </div>
        </div>
        <div id="weddingCakeTextArea" class="weddingCakeTextArea">
            <div class="wrap">
                <div class="subtitle">Wedding Cake</div>
                <div class="textArea">客製化蛋糕請參考我們facebook 圖片，<br>或是將您想要的蛋糕圖片請電洽或私訊我們，<br>將會有專人儘快與您聯絡</div>
                <div class="seeMore"><a href="#" class="btn">SEE MORE</a></div>
            </div>
        </div>
        <!-- Featured Products -->
        <div class="featuredProducts">
            <div class="wrap">
                <div class="subtitle">Featured Products</div>
                <svg class="icon-totem"><use xlink:href="#icon-totem"/></svg>
                <div id="featuredProducts" class="productList">
                    <div class="product">
                        <div class="img featured" style="background: url(./img/featured/1.png)no-repeat center;background-size: cover;"></div>
                        <div class="caption">格蕾朵</div>
                        <div class="price">$130</div>
                    </div>
                    <div class="product">
                        <div class="img featured" style="background: url(./img/featured/2.png)no-repeat center;background-size: cover;"></div>
                        <div class="caption">綠翡翠檸檬塔</div>
                        <div class="price">$120</div>
                    </div>
                    <div class="product">
                        <div class="img featured" style="background: url(./img/featured/3.png)no-repeat center;background-size: cover;"></div>
                        <div class="caption">格蕾朵蛋糕</div>
                        <div class="price">$130</div>
                    </div>
                    <div class="product">
                        <div class="img featured" style="background: url(./img/featured/4.png)no-repeat center;background-size: cover;"></div>
                        <div class="caption">格蕾朵蛋糕</div>
                        <div class="price">$120</div>
                    </div>
                    <div class="product">
                        <div class="img featured" style="background: url(./img/featured/3.png)no-repeat center;background-size: cover;"></div>
                        <div class="caption">格蕾朵</div>
                        <div class="price">$130</div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!-- footer -->
	<?php
		include './page/footer.php';
    ?> 
</body>
</html>