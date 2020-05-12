<header id="header" class="header header2">
    <div class="wrap">
        <svg id="hamOpenBtn" class="icon-hamburger"><use xlink:href="#icon-hamburger"/></svg>
        <a href="../about" class="menuForWeb  left">關於我們</a>
        <a href="../news" class="menuForWeb  left">最新消息</a>
        <a href="../"class="logo"></a>
        <a href="../products" class="menuForWeb  right">購買產品</a>
        <div id="loginStatusPc-before-id" class="loginStatusPc active"><p>會員專區</p></div>
        <div id="loginStatusPc-after-id" class="loginStatusPc ">
            <p id="loginStatus-text">會員專區</p>
            <ul id="memberZonePc-id" class="memberZonePc">
                <li>
                    <a href="../orders">查詢訂單</a>
                </li>
                <li>
                    <a href="../edit">編輯會員資料</a>
                </li>
                <li>
                   <p class="logOut">登出會員</p> 
                </li>
            </ul>
        </div>
        <svg id="buyOpenBtn" class="icon-buy"><use xlink:href="#icon-buy"/></svg>
    </div>
    <ul id="hamburgerList" class="hamburgerList">
        <li class="topSpace"><svg id="hamDeleteBtn" class="icon-delete"><use xlink:href="#icon-delete"/></svg></li>
        <li class="listStyle"><a href="../about">關於我們</a></li>
        <li class="listStyle"><a href="../news">最新消息</a></li>
        <li class="listStyle"><a href="../products">購買產品</a></li>
        <li id="loginStatus-before-id" class="listStyle loginStatus loginStatus-before active"><p>會員專區</p></li>
        <li id="loginStatus-after-id" class="listStyle loginStatus loginStatus-after">
            <p id="loginStatus-text">會員專區</p>
            <ul id="memberZone-id" class="memberZone">
                <li>
                    <a href="../orders">查詢訂單</a>
                </li>
                <li>
                    <a href="../edit">編輯會員資料</a>
                </li>
                <li>
                   <p class="logOut">登出會員</p> 
                </li>
            </ul>
        </li>
        <li id="hamcontact-id" class="listStyle"><a>聯絡我們</a></li>
    </ul>
    <div class="shopcart">
        <div class="wrap">
            <div class="shopcartInner_Quantity">
                <svg id="buyCloseBtn" class="icon-buy-close"><use xlink:href="#icon-buy"/></svg>
                <p>購物車（<span>２</span>）</p>
            </div>
            <div class="shopcartInner_content">
                <ul class="contentList">
                    <li class="contentList-photo">
                        <div class="photo" style=" background-image: url(../img/order_2.png);"></div>
                    </li>
                    <li class="contentList-content">
                        <p>格蕾朵</p>
                        <div class="price">
                            <span>$130</span>
                            <span>x 1</span>
                        </div>
                    </li>
                    <li>
                        <div class="button delete_btn">✕</div>
                    </li>
                </ul>
                <ul class="contentList">
                    <li class="contentList-photo">
                        <div class="photo" style=" background-image: url(../img/order_1.png);"></div>
                    </li>
                    <li class="contentList-content">
                        <p>格蕾朵</p>
                        <div class="price">
                            <span>$130</span>
                            <span>x 1</span>
                        </div>
                    </li>
                    <li>
                        <div class="button delete_btn">✕</div>
                    </li>
                </ul>
            </div>
            <div class="prompt">您還缺<span>6</span>個小蛋糕，才能成功出貨喔!</div>
            <div class="final">
                <div class="total-price">
                    <p>TOTAL</p>
                    <span>$250</span>
                </div>
                <div class="button checkout-btn">
                   <a href="../cart">結帳</a> 
                </div>
            </div>
        </div>
    </div>
</header>
<!-- 會員登入 -->
<aside class="member-logIn" id="logIn">
    <ul>
        <li class="tip1">
            <h4>登入會員</h4>
        </li>
        <li>
            <ol>
                <li>
                    <p>EMAIL</p>
                    <input type="text">
                </li>
                <li>
                    <p>密碼</p>
                    <input type="text">
                </li>
                <li class="tip2">
                    <label>
                        <input type="checkbox">記住我
                    </label>
                    <p id="forgetPassword_link" class="linkStyle">忘記密碼？</p>
                </li>
                <li>
                    <div id="signIn_btn-id" class="button signIn_btn">登入</div>
                </li>
                <li class="tip3">
                    <span>沒有帳號？</span>
                    <a class="linkStyle" href="../register">現在註冊</a>
                </li>
            </ol>
        </li>

    </ul>
</aside>
<!-- 忘記密碼 -->
<aside class="forgetPassword" id="forgetPasswordLink">
    <ul>
        <li class="tip1">
            <h4>忘記密碼</h4>
        </li>
        <li>
            <ol>
                <li>
                    <p>EMAIL</p>
                    <input type="text">
                </li>
                <li>
                    <div class="button sendOut_btn">送出</div>
                </li>
            </ol>
        </li>
    </ul>
</aside>
<!-- 聯絡我們 -->
<aside class="connection">
    <div class="wrap">
        <h5>聯絡我們</h5>
        <ul>
            <li>
                <span>OPEN HOUR</span>
                <span>每日12:00pm~19:30pm</span>
            </li>
            <li>
                <span>PHONE</span>
                <span>04-22587998</span>
            </li>
            <li>
                <span>EMAIL</span>
                <span>ty003@hotmail.com</span>
            </li>
            <li>
                <span>ADDRESS</span>
                <span>台中市南屯區大業路398號</span>
            </li>
            <li>
                <p>姓名</p>
                <input type="text">
            </li>
            <li>
                <p>您的EMAIL</p>
                <input type="text">
            </li>
            <li>
                <p>內文</p>
                <textarea name="" id="" cols="10" rows="5"></textarea>
            </li>
            <li>
                <div class="button send_btn">送出</div>
            </li>
        </ul>
    </div>
</aside>