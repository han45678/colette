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
    <link rel="stylesheet" type="text/css" href="../css/main.css">
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="../js/jquery.waitforimages.min.js"></script>
    <script src="../js/jquery.page.js"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script type="text/javascript" src="../js/main.js"></script>
    <script>
        $(function() {
            var w = $(window).width();
            $('.checkOrder .loadMore').click(function(e) {
                e.preventDefault();
                $('.checkOrder .orderPage').toggleClass('active');
            });
            //分頁轉換
            $('#pagination2').createPage(function(n) {}, {
                showTurn: false,
                showSumNum: false
            }, {
                "borderColor": "#f00",
                "currentColor": "#000",
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
    <!-- nav -->
    <?php
    include '../page/nav2.php';
    ?>
    <main class="checkOrder activePage">
        <div class="orderList">
            <div class="wrap orderPage">
                <ul class="order">
                    <li>
                        <h4>訂單編號 #02002001</h4>
                    </li>
                    <li>
                        <p>訂單狀態：<span>訂單尚未成立</span></p>
                    </li>
                    <li class="order_list">
                        <div class="orderProduct">
                            <ol>
                                <li class="shop_product_photo">
                                    <a href="../products_fetch">
                                        <img src="../img/order_1.png" alt="">
                                    </a>
                                </li>
                                <li class="shop_product_productQuantity">
                                    <div class="name"><a href="../products_fetch">格蕾朵</a></div>
                                    <div class="shop_product_size">
                                        <p>固定大小</p>
                                    </div>
                                    <div class="shop_product_quantity">
                                        <p class="text1">x<span>4</span></p>
                                    </div>
                                </li>
                                <li class="shop_product_price">
                                    <div class="price">$520</div>
                                </li>
                            </ol>
                            <ol>
                                <li class="shop_product_photo">
                                <a href="../products_fetch"><img src="../img/order_2.png" alt=""></a>
                                </li>
                                <li class="shop_product_productQuantity">
                                    <div class="name"><a href="../products_fetch">綠翡翠檸檬塔</a></div>
                                    <div class="shop_product_size">
                                        <p>固定大小</p>
                                    </div>
                                    <div class="shop_product_quantity">
                                        <p class="text1">x<span>4</span></p>
                                    </div>
                                </li>
                                <li class="shop_product_price">
                                    <div class="price">$480</div>
                                </li>
                            </ol>
                        </div>
                        <div class="total">
                            <span class="tip2">+ 運費</span>
                            <p class="total_fee">$100</p>
                            <span class="tip3">=</span>
                            <p class="total_price">$1100</p>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="wrap orderPage">
                <ul class="order">
                    <li>
                        <h4>訂單編號 #02002001</h4>
                    </li>
                    <li>
                        <p>訂單狀態：<span>訂單尚未成立</span></p>
                    </li>
                    <li class="order_list">
                        <div class="orderProduct">
                            <ol>
                                <li class="shop_product_photo">
                                    <a href="../products_fetch">
                                        <img src="../img/order_1.png" alt="">
                                    </a>
                                </li>
                                <li class="shop_product_productQuantity">
                                    <div class="name"><a href="../products_fetch">格蕾朵</a></div>
                                    <div class="shop_product_size">
                                        <p>固定大小</p>
                                    </div>
                                    <div class="shop_product_quantity">
                                        <p class="text1">x<span>4</span></p>
                                    </div>
                                </li>
                                <li class="shop_product_price">
                                    <div class="price">$520</div>
                                </li>
                            </ol>
                            <ol>
                                <li class="shop_product_photo">
                                <a href="../products_fetch"><img src="../img/order_2.png" alt=""></a>
                                </li>
                                <li class="shop_product_productQuantity">
                                    <div class="name"><a href="../products_fetch">綠翡翠檸檬塔</a></div>
                                    <div class="shop_product_size">
                                        <p>固定大小</p>
                                    </div>
                                    <div class="shop_product_quantity">
                                        <p class="text1">x<span>4</span></p>
                                    </div>
                                </li>
                                <li class="shop_product_price">
                                    <div class="price">$480</div>
                                </li>
                            </ol>
                        </div>
                        <div class="total">
                            <span class="tip2">+ 運費</span>
                            <p class="total_fee">$100</p>
                            <span class="tip3">=</span>
                            <p class="total_price">$1100</p>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="wrap orderPage">
                <ul class="order">
                    <li>
                        <h4>訂單編號 #02002001</h4>
                    </li>
                    <li>
                        <p>訂單狀態：<span>訂單尚未成立</span></p>
                    </li>
                    <li class="order_list">
                        <div class="orderProduct">
                            <ol>
                                <li class="shop_product_photo">
                                    <a href="../products_fetch">
                                        <img src="../img/order_1.png" alt="">
                                    </a>
                                </li>
                                <li class="shop_product_productQuantity">
                                    <div class="name"><a href="../products_fetch">格蕾朵</a></div>
                                    <div class="shop_product_size">
                                        <p>固定大小</p>
                                    </div>
                                    <div class="shop_product_quantity">
                                        <p class="text1">x<span>4</span></p>
                                    </div>
                                </li>
                                <li class="shop_product_price">
                                    <div class="price">$520</div>
                                </li>
                            </ol>
                            <ol>
                                <li class="shop_product_photo">
                                <a href="../products_fetch"><img src="../img/order_2.png" alt=""></a>
                                </li>
                                <li class="shop_product_productQuantity">
                                    <div class="name"><a href="../products_fetch">綠翡翠檸檬塔</a></div>
                                    <div class="shop_product_size">
                                        <p>固定大小</p>
                                    </div>
                                    <div class="shop_product_quantity">
                                        <p class="text1">x<span>4</span></p>
                                    </div>
                                </li>
                                <li class="shop_product_price">
                                    <div class="price">$480</div>
                                </li>
                            </ol>
                        </div>
                        <div class="total">
                            <span class="tip2">+ 運費</span>
                            <p class="total_fee">$100</p>
                            <span class="tip3">=</span>
                            <p class="total_price">$1100</p>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="wrap orderPage">
                <ul class="order">
                    <li>
                        <h4>訂單編號 #02002001</h4>
                    </li>
                    <li>
                        <p>訂單狀態：<span>訂單尚未成立</span></p>
                    </li>
                    <li class="order_list">
                        <div class="orderProduct">
                            <ol>
                                <li class="shop_product_photo">
                                    <a href="../products_fetch">
                                        <img src="../img/order_1.png" alt="">
                                    </a>
                                </li>
                                <li class="shop_product_productQuantity">
                                    <div class="name"><a href="../products_fetch">格蕾朵</a></div>
                                    <div class="shop_product_size">
                                        <p>固定大小</p>
                                    </div>
                                    <div class="shop_product_quantity">
                                        <p class="text1">x<span>4</span></p>
                                    </div>
                                </li>
                                <li class="shop_product_price">
                                    <div class="price">$520</div>
                                </li>
                            </ol>
                            <ol>
                                <li class="shop_product_photo">
                                <a href="../products_fetch"><img src="../img/order_2.png" alt=""></a>
                                </li>
                                <li class="shop_product_productQuantity">
                                    <div class="name"><a href="../products_fetch">綠翡翠檸檬塔</a></div>
                                    <div class="shop_product_size">
                                        <p>固定大小</p>
                                    </div>
                                    <div class="shop_product_quantity">
                                        <p class="text1">x<span>4</span></p>
                                    </div>
                                </li>
                                <li class="shop_product_price">
                                    <div class="price">$480</div>
                                </li>
                            </ol>
                        </div>
                        <div class="total">
                            <span class="tip2">+ 運費</span>
                            <p class="total_fee">$100</p>
                            <span class="tip3">=</span>
                            <p class="total_price">$1100</p>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="wrap orderPage">
                <ul class="order">
                    <li>
                        <h4>訂單編號 #02002001</h4>
                    </li>
                    <li>
                        <p>訂單狀態：<span>訂單尚未成立</span></p>
                    </li>
                    <li class="order_list">
                        <div class="orderProduct">
                            <ol>
                                <li class="shop_product_photo">
                                    <a href="../products_fetch">
                                        <img src="../img/order_1.png" alt="">
                                    </a>
                                </li>
                                <li class="shop_product_productQuantity">
                                    <div class="name"><a href="../products_fetch">格蕾朵</a></div>
                                    <div class="shop_product_size">
                                        <p>固定大小</p>
                                    </div>
                                    <div class="shop_product_quantity">
                                        <p class="text1">x<span>4</span></p>
                                    </div>
                                </li>
                                <li class="shop_product_price">
                                    <div class="price">$520</div>
                                </li>
                            </ol>
                            <ol>
                                <li class="shop_product_photo">
                                <a href="../products_fetch"><img src="../img/order_2.png" alt=""></a>
                                </li>
                                <li class="shop_product_productQuantity">
                                    <div class="name"><a href="../products_fetch">綠翡翠檸檬塔</a></div>
                                    <div class="shop_product_size">
                                        <p>固定大小</p>
                                    </div>
                                    <div class="shop_product_quantity">
                                        <p class="text1">x<span>4</span></p>
                                    </div>
                                </li>
                                <li class="shop_product_price">
                                    <div class="price">$480</div>
                                </li>
                            </ol>
                        </div>
                        <div class="total">
                            <span class="tip2">+ 運費</span>
                            <p class="total_fee">$100</p>
                            <span class="tip3">=</span>
                            <p class="total_price">$1100</p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <div class="morePage">
            <div class="button loadMore">LOAD MORE</div>
            <div class="pagination" id="pagination2"></div>
        </div>
    </main>
    <!-- footer -->
    <?php
    include '../page/footer2.php';
    ?>
</body>

</html>