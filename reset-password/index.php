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
    <main class="changPassword activePage">
        <ul>
            <li class="tip1">
                <h4>更改密碼</h4>
            </li>
            <li>
                <ol>
                    <li>
                        <p>密碼</p>
                        <input type="text">
                    </li>
                    <li>
                        <p>確認密碼</p>
                        <input type="text">
                    </li>
                    <li>
                        <div class="button change_password_btn">更改</div>
                    </li>
                </ol>
            </li>
        </ul>
    </main>
	<?php
		include '../page/footer2.php';
    ?>
</body>
</html>