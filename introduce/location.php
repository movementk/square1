<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php'); ?>
<link rel="stylesheet" href="/assets/css/sub.css">
<link rel="stylesheet" href="/assets/css/introduce.css">
</head>
<body class="sub introduce">
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/gnb_aside.php'); ?>
    <div id="wrapper">
        <div id="top-bn">
        </div>
        <header id="header">
            <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/top_nav.php'); ?>
            <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/gnb.php'); ?>
            <div class="jumbo">
                <h1><small>스퀘어원 소개</small>SQUARE1</h1>
                <p>
                    인천에 새로운 문화와 라이프 스타일이 시작됩니다.<br>
                    새로운 쇼핑세상으로 초대합니다.
                </p>
            </div>
        </header>
        <main id="content">
            <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/lnb1.php'); ?>
            <div class="page-header">
                <h1><span class="square1">SQUARE<i>1</i></span> 오시는길</h1>
                <h2>Malling Island SQUARE1 MAP</h2>
                <p>
                    몰링 아일랜드, 스케어원으로 오시는 길입니다.
                </p>
            </div>
            <section class="location">
                <div class="section-content">
                    <div class="map-info">
                        <div class="container">
                            <p class="pn-icon">
                                <a href="#" role="button">
                                    <i class="icon-naver">
                                        <img src="/assets/images/company/icon_naver.gif" alt="">
                                    </i>
                                </a>
                                <a href="#" role="button"><i class="icon-print"></i></a>
                            </p>
                            <p class="maps">
                                <img src="/assets/images/company/map.gif" class="img-responsive" alt="오시는길 지도">
                            </p>
                            <dl class="addr">
                                <dt>주소</dt>
                                <dd>인천광역시 연수구 동춘동 926</dd>
                                <dd class="block-dd visible-xs"></dd>
                                <dt class="call">대표전화</dt>
                                <dd>032-456-4000</dd>
                            </dl>
                        </div>
                    </div>
                    <div class="container">
                        <div class="traffic">
                            <div class="subway">
                                <dl>
                                    <dt>지하철</dt>
                                    <dd><h5><i class="hidden-xs">인천1</i>동춘</h5><b>인천 1호선</b> 동춘역 1번 출구에서 50M 거리</dd>
                                </dl>
                            </div>
                            <div class="bus">
                                <dl>
                                    <dt>버스</dt>
                                    <dd>
                                        <h5>동춘역(38-346) 정류장</h5>
                                        <ul>
                                            <li>
                                                <p><span class="blue">좌석</span>103, 303, 522, 753, 909</p>
                                            </li>
                                        </ul>
                                        <h5>동춘역(38-070) 정류장</h5>
                                        <ul class="row">
                                            <li class="col-xs-6 col-md-4">
                                                <p class="mb"><span class="blue">좌석</span>303</p>
                                            </li>
                                            <li class="col-xs-6 col-md-4">
                                                <p class="mb"><span class="blue">간선</span>103-1, 65</p>
                                            </li>
                                            <li class="col-xs-12 col-md-4">
                                                <p class="mb"><span class="green">지선</span>533, 51(순환), 740</p>
                                            </li>
                                            <li class="col-xs-6 col-md-4">
                                                <p><span class="red">광역</span>1300</p>
                                            </li>
                                            <li class="col-xs-6 col-md-4">
                                                <p><span class="purple">급행</span>909</p>
                                            </li>
                                        </ul>
                                        <h5>동춘역/이마트 정류장</h5>
                                        <ul class="row">
                                            <li class="col-xs-12 col-sm-6 col-md-4">
                                                <p class="mb"><span class="blue">좌석</span>65</p>
                                            </li>
                                            <li class="col-xs-12 col-sm-6 col-md-4">
                                                <p><span class="green">지선</span>51(순환공단), 753</p>
                                            </li>
                                        </ul>
                                    </dd>
                                </dl>
                            </div>
                        </div>
                    </div><!-- //container  -->
                </div>
            </section>
        </main>
        <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php'); ?>
    </div>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
</body>
</html>