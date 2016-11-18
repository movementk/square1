<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php'); ?>
<link rel="stylesheet" href="/assets/css/sub.css">
<link rel="stylesheet" href="/assets/css/member.css">
</head>
<body class="sub member">
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/gnb_aside.php'); ?>
    <div id="wrapper">
        <div id="top-bn">
        </div>
        <header id="header">
            <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/top_nav.php'); ?>
            <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/gnb.php'); ?>
            <div class="jumbo">
                <h1><small>회원전용</small>MEMBERSHIP</h1>
                <p>
                    새로운 공간을 선두하는 스퀘어원의<br class="visible-xs">
                    라이프 스타일 공간입니다.<br class="hidden-xs"> FASHION · F&amp;B · CGV <br class="visible-xs">
                    <span class="hidden-xs"> · </span>HOME PLUS 등의 다양한 서비스를 소개합니다.
                </p>
            </div>
        </header>
        <main id="content">
            <div class="container">
                <section class="mypoint">
                    <div class="section-header">
                        <h2>나의 포인트</h2>
                        <hr>
                        <p>
                            스퀘어원 포인트카드는 스퀘어원 이용 시 구매금액의 <i>1%를<br class="visible-xs"> 적립</i> 할 수 있으며,<br class="hidden-xs"> 누적된 포인트가 일정 수준이상이 되면<br class="visible-xs"> 이를 포인트 금액대별 차감 기프트로 교환하실 수  있습니다.
                        </p>
                    </div>
                    <div class="section-content">
                        <div class="point">
                            <div class="row">
                                <div class="col-xs-12 col-sm-6">
                                    <div class="u-point">
                                        <p class="user">
                                            <i class="u-name">홍길동</i>님의<br class="hidden-xs"> 포인트 내역입니다.
                                        </p>
                                        <p class="attention">
                                            <i class="icon-attention-circled"></i> 포인트는 6,000점 이상부터 사용 가능합니다.
                                        </p>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6">
                                    <div class="point-info">
                                        <dl>
                                            <dt>
                                                <img src="/assets/images/member/point_img01.gif" alt="적립 포인트">
                                            </dt>
                                            <dd class="t-orange">
                                                <p class="title">적립 포인트</p>
                                                <p class="amount">1,000,000 <span> 원</span></p>
                                            </dd>
                                            <dt>
                                                <img src="/assets/images/member/point_img02.gif" alt="사용 포인트">
                                            </dt>
                                            <dd class="t-gray">
                                                <p class="title">사용 포인트</p>
                                                <p class="amount">543,000 <span> 원</span></p>
                                            </dd>
                                            <dt>
                                                <img src="/assets/images/member/point_img03.gif" alt="가용 포인트">
                                            </dt>
                                            <dd class="t-green">
                                                <p class="title">가용 포인트</p>
                                                <p class="amount">123,000 <span> 원</span></p>
                                            </dd>
                                        </dl>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="point-history">
                            
                        </div>
                    </div>
                </section>
            </div><!-- container -->
        </main>
        <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php'); ?>
    </div>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
</body>
</html>