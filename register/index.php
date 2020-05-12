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
            //註冊會員  取消
            $('#memberProfile_registered .cancel_btn').click(function(e) {
                e.preventDefault();
                window.location.replace("../");
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
    <main class="memberProfile memberProfile_registered activePage" id="memberProfile_registered">
        <ul class="member">
            <li>
                <h4>註冊會員</h4>
            </li>
            <li class="information information_registered">
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
                    <div id="twzipcode">
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
            <li class="tip1">
                <div class="button cancel_btn">取消</div>
                <div class="button registered_btn">註冊</div>
            </li>
        </ul>
    </main>
    <?php
    include '../page/footer2.php';
    ?>
    <script src="../js/jquery.twzipcode.min.js"></script>
    <script>
        $("#twzipcode").twzipcode();
    </script>
</body>

</html>