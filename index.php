<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php'); ?>
<link rel="stylesheet" href="/assets/css/main.css">
</head>
<body class="main">
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/gnb_aside.php'); ?>
    <div id="wrapper">
        <div id="top-bn">
        </div>
        <header id="header">
            <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/top_nav.php'); ?>
            <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/gnb.php'); ?>
            <div class="jumbo">
                <h1>
                    ENJOY YOUR<br>
                    <b>LIFE TIME !</b>
                </h1>
            </div>
        </header>
        <main id="content" style="height: 2000px;">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-lg-3">
                        <div id="shortcuts">
                            <ul>
                                <li><a href="#"><i><img src="/assets/images/ico_gift.png" alt=""></i> 브랜드 입점 매장 소개</a></li>
                                <li><a href="#"><i><img src="/assets/images/ico_star.png" alt=""></i> 편의시설 안내</a></li>
                                <li><a href="#"><i><img src="/assets/images/ico_parking.png" alt=""></i>주차시설 안내</a></li>
                                <li><a href="#"><i><img src="/assets/images/ico_wallet.png" alt=""></i>분실물센터 안내</a></li>
                                <li><a href="#"><i><img src="/assets/images/ico_check.png" alt=""></i>대관신청 안내</a></li>
                                <li><a href="#"><i><img src="/assets/images/ico_microphone.png" alt=""></i>공지사항</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-lg-3">
                        <section id="search-store">
                            <h3>SQUARE1에 <br class="visible-lg">입점한 <br class="visible-sm visible-md">매장을 <br class="visible-xs">쉽고 간편하게 <br class="visible-sm visible-md visible-lg">검색하세요.</h3>
                            <p>매장명으로 쉽게 검색하실 수 있습니다.</p>
                            <div class="form-area">
                                <form>
                                    <div class="form-group">
                                        <label for="search-store-name" class="sr-only">검색매장명</label>
                                        <input type="text" class="form-control" name="#">
                                        <button class="btn" type="submit"><i class="icon-search-1"></i></button>
                                    </div>
                                </form>
                            </div>
                        </section>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-lg-3">영업시간안내</div>
                    <div class="col-xs-6 col-sm-6 col-lg-3">층별안내</div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-lg-6"><div style="height: 100px;">이벤트배너</div></div>
                    <div class="col-xs-12 col-lg-6">입점안내</div>
                    <div class="col-xs-6 col-lg-3">찾아오시는 길</div>
                    <div class="col-xs-6 col-lg-3">멤버십 서비스</div>
                </div>
            </div>
        </main>
        <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php'); ?>
    </div>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
</body>
</html>
