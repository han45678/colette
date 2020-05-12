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
			$('.step_next_btn').click(function() {
				var index = $(this).closest('.shop_step').index();
				$('.stepDot li').eq(index - 1).addClass('alredy');
				$('.stepDot li').eq(index).addClass('active');
				$('.shop_step').eq(index).addClass('active').siblings().removeClass('active');
			});
			$('.comeBack_shopCart_btn').click(function() {
				var index = $(this).closest('.shop_step').index();
				$('.stepDot li').eq(index - 2).removeClass('alredy');
				$('.stepDot li').eq(index - 1).removeClass('active');
				$('.shop_step').eq(index - 2).addClass('active').siblings().removeClass('active');
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
	<main class="cart activePage" id="cart">
		<div class="step_dot">
			<ul class="stepDot">
				<li class="active">
					<p>1</p>
					<div class="check"></div>
				</li>
				<li>
					<p>2</p>
					<div class="check"></div>
				</li>
				<li>
					<p>3</p>
				</li>
			</ul>
		</div>
		<div class="shop_step shop_step1 active">
			<div class="section1">
				<div class="wrap">
					<h4>購物車</h4>
					<div class="cart-item">
						<ul>
							<li class="cart-item-photo">
								<p>ITEM</p>
							</li>
							<li class="cart-item-name"></li>
							<li class="cart-item-size">
								<p>尺寸</p>
							</li>
							<li class="cart-item-amount">
								<p>數量</p>
							</li>
							<li class="cart-item-price">
								<p>價錢</p>
							</li>
						</ul>
					</div>
					<div class="shop-cart">
						<ul class="cart-list">
							<li class="cart-list-photo">
								<a href="../products_fetch/index.php">
									<div class="photo" style=" background: url(../img/order_1.png) center no-repeat; background-size: cover;"></div>
								</a>
							</li>
							<li class="cart-list-depict">
								<a href="../products_fetch/index.php">
									<p>格蕾朵</p>
								</a>
								<p class="active">常溫</p>
							</li>
							<li class="cart-list-size">
								<p>固定大小</p>
							</li>
							<li class="cart-list-amount">
								<div class="amount">
									<div class="amount_btn amount_btn-lessBtn">-</div>
									<input type="number" value="3" min="1" max="99">
									<div class="amount_btn amount_btn-addBtn">+</div>
								</div>
							</li>
							<li class="cart-list-price">
								<div class="price">
									<p>$520</p>
								</div>
								<div class="button delet_btn"></div>
							</li>
						</ul>
						<ul class="cart-list">
							<li class="cart-list-photo">
								<a href="../products_fetch/index.php">
									<div class="photo" style=" background: url(../img/order_1.png) center no-repeat; background-size: cover;"></div>
								</a>
							</li>
							<li class="cart-list-depict">
								<a href="../products_fetch/index.php">
									<p>格蕾朵</p>
								</a>
								<p>冷藏</p>
							</li>
							<li class="cart-list-size">
								<p>固定大小</p>
							</li>
							<li class="cart-list-amount">
								<div class="amount">
									<div class="amount_btn amount_btn-lessBtn">-</div>
									<input type="number" value="3" min="1" max="99">
									<div class="amount_btn amount_btn-addBtn">+</div>
								</div>
							</li>
							<li class="cart-list-price">
								<div class="price">
									<p>$520</p>
								</div>
								<div class="button delet_btn"></div>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="section2">
				<div class="wrap">
					<p class="text-right floating">您還缺<span>1</span>個小蛋糕，才能成功出貨喔!</p>
					<ul class="final">
						<li class="final-offerCode">
							<input type="text" placeholder="輸入優惠碼">
							<div class="button apply_btn active">APPLY</div>
							<!--APPLY輸入優惠碼可用才加入active-->
						</li>
						<li class="final-pickMethod">
							<span>取貨方式</span>
							<div class="choice-method">
								<select name="" id="pick-method">
									<option value="method">宅配</option>
								</select>
							</div>
						</li>
						<li class="final-freight">
							<span>運費</span>
							<span>$100</span>
						</li>
						<li class="final-totalPrice">
							<span>總價格</span>
							<span>$980</span>
						</li>
					</ul>
				</div>
			</div>
			<div class="section3">
				<div class="wrap">
					<div class="terms">
						<p>繼續下一步，表示您已接受網站所有的使用條款及聲明<a href="#">Colette’s Sales and Refunds Policy</a>。</p>
					</div>
					<div class="choice-side">
						<div class="button comeback_shop">
							<a href="../products">繼續購物</a>
						</div>
						<div class="button step_next_btn active">下一步</div>
						<!--下一步要購物條件符合才會加入active-->
					</div>
				</div>
			</div>
		</div>
		<div class="shop_step shop_step2">
			<ul>
				<li>
					<h4>購買人 / 收件人資訊</h4>
				</li>
				<li id="purchase_information" class="information information_purchase">
					<h5>購買人資訊</h4>
						<ol>
							<li class="name">
								<p>姓名</p>
								<input type="text">
							</li>
							<li class="phone">
								<p>電話號碼</p>
								<input type="tel">
							</li>
							<li class="email">
								<p>EMAIL</p>
								<input type="mail">
							</li>
							<div id="purchase_information_twzipcode">
								<div data-role="county" data-name="county" class="county">
									<p>城市</p>
								</div>
								<div data-role="district" data-name="township" class="township">
									<p>鄉鎮市區</p>
								</div>
								<div data-role="zipcode" data-name="postalCode" class="postalCode">
									<p>郵遞區號</p>
								</div>
							</div>
							<li class="add">
								<p>詳細地址</p>
								<input type="text">
							</li>
							<li class="newpassword">
								<p>NEW PASSWORD</p>
								<input type="text">
							</li>
							<li class="confirm_newpassword">
								<p>CONFIRM NEW PASSWORD</p>
								<input type="text">
							</li>
						</ol>
				</li>
				<li id="information_recipient" class="information information_recipient">
					<h5>收件人資訊</h5>
					<div class="smae_purchaser">
						<input id="same_people" type="checkbox">
						<label for="same_people">同購買人</label>
					</div>
					<ol>
						<li class="name">
							<p>姓名</p>
							<input type="text">
						</li>
						<li class="phone">
							<p>電話號碼</p>
							<input type="tel">
						</li>
						<li class="email">
							<p>EMAIL</p>
							<input type="mail">
						</li>
						<div id="information_recipient_twzipcode">
							<div data-role="county" data-name="county" class="county">
								<p>城市</p>
							</div>
							<div data-role="district" data-name="township" class="township">
								<p>鄉鎮市區</p>
							</div>
							<div data-role="zipcode" data-name="postalCode" class="postalCode">
								<p>郵遞區號</p>
							</div>
						</div>
						<li class="add">
							<p>詳細地址</p>
							<input type="text">
						</li>
						<li class="newpassword">
							<p>NEW PASSWORD</p>
							<input type="text">
						</li>
						<li class="confirm_newpassword">
							<p>CONFIRM NEW PASSWORD</p>
							<input type="text">
						</li>
					</ol>
				</li>
				<li class="payment">
					<h4>付款方式</h4>
					<div class="payment-method">
						<div class="method method-atm">
							<div class="checkbox">
								<input type="radio" id="checkbox-atm" name="checkbox-method">
							</div>
							<label for="checkbox-atm">網路ATM</label>
						</div>
						<div class="method method-crediCard">
							<div class="checkbox">
								<input type="radio" id="checkbox-crediCard" name="checkbox-method">
							</div>
							<label for="checkbox-crediCard">信用卡</label>
						</div>
					</div>
				</li>
				<li class="tip1">
					<div class="button comeBack_shopCart_btn">回購物車</div>
					<div class="button step_next_btn active">完成訂購</div>
					<!--下一步要購物條件符合才會加入active-->
				</li>
			</ul>
		</div>
		<div class="shop_step shop_step3">
			<div class="wrap">
				<h4>訂單成立 #02002001</h4>
				<p class="text-descript">訂單已成立，已將訂單詳細內容寄至您的信箱。</p>
				<div class="order-accomplish">
					<ul class="order_list">
						<li class="order_list-photo">
							<a href="../products_fetch/index.php">
								<div class="photo" style="background-image: url(../img/order_1.png)"></div>
							</a>
						</li>
						<li class="order_list-name">
							<a href="../products_fetch/index.php">
								<p>格蕾朵</p>
							</a>
						</li>
						<li class="order_list-size">
							<p>固定大小</p>
						</li>
						<li class="order_list-quantity">
							<p>x4</p>
						</li>
						<li class="order_list-price">
							<p>$520</p>
						</li>
					</ul>
					<div class="order_final">
						<div class="order_final-freight">
							<span>+ 運費</span>
							<span>$100</span>
						</div>
						<div class="equal">=</div>
						<div class="order_final-total">
							<p>$1100</p>
						</div>
					</div>
				</div>
				<div class="button">
					<a href="../products">回到購物頁面</a>
				</div>
			</div>
		</div>
	</main>
	<?php
	include '../page/footer2.php';
	?>
	<script src="../js/jquery.twzipcode.min.js"></script>
	<script>
		$("#purchase_information_twzipcode").twzipcode();
		$("#information_recipient_twzipcode").twzipcode();
	</script>
</body>

</html>