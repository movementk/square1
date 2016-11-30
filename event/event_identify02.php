<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php'); ?>
<link rel="stylesheet" href="/assets/css/sub.css">
<link rel="stylesheet" href="/assets/css/event.css">
</head>
<body class="sub event">
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/gnb_aside.php'); ?>
    <div id="wrapper">
        <div id="top-bn">
        </div>
        <header id="header">
            <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/top_nav.php'); ?>
            <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/gnb.php'); ?>
            <div class="jumbo">
                <h1><small>이벤트&amp;뉴스</small>EVENT &amp; NEWS</h1>
                <p>
                    복합 문화 소비공간 스퀘어원만의 이벤트 소식과<br>
                    보도자료를 전해드립니다.
                </p>
            </div>
        </header>
        <main id="content">
            <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/lnb4.php'); ?>
            <div class="page-header has-snb"><!-- SNB를 포함할 경우 has-snb 클래스 추가-->
                <h1><span class="square1">SQUARE<i>1</i></span> 이벤트</h1>
                <div class="snb">
                    <div class="container">
                        <button class="btn btn-block" type="button">
                            진행 중 이벤트
                        </button>
                        <nav>
                            <ul>
                                <li class="active"><a href="/event/event_list.php">진행 중 이벤트</a></li>
                                <li><a href="/event/prizewinner_list.php">당첨자 발표</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="container">
                <section class="square1-event event-identify02">
                    <div class="section-content">
                        <p class="event-img">
                            <img src="/assets/images/event/event_lg_img.jpg" class="img-responsive visible-xs" alt="진행이벤트">
                            <img src="/assets/images/event/event_lg_img.jpg" class="img-responsive visible-sm" alt="진행이벤트">
                            <img src="/assets/images/event/event_lg_img.jpg" class="img-responsive visible-md visible-lg" alt="진행이벤트">
                        </p>
                        <!-- 행사참여가 처음일때 -->
                        <div class="identify">
                            <h3>당신의 또다른 LIFE STYLE,<br class="visible-xs"> <span>SQUARE<i>1</i></span></h3>
                            <p class="sucess-txt">접수가 완료 되었습니다.</p>
                            <dl>
                                <dt>접수일자</dt>
                                <dd>2016-10-24</dd>
                                <dt>신청 조</dt>
                                <dd>1조 [15:00~15:50]</dd>
                            </dl>
                        </div>
                        
                        
                        <!-- 이미 행사를 참여했을 경우 -->
                        <div style="margin-top: 30px;"><!-- 사용시 div 박스 삭제 -->
                            <div class="identify">
                                <h3>당신의 또다른 LIFE STYLE,<br class="visible-xs"> <span>SQUARE<i>1</i></span></h3>
                                <p class="sucess-txt">행사 참여가 이미 완료되었습니다.</p>
                                <dl>
                                    <dt>접수일자</dt>
                                    <dd>2016-10-24</dd>
                                    <dt>신청 조</dt>
                                    <dd>1조 [15:00~15:50]</dd>
                                </dl>
                                <p class="reset-count">2초 후에 첫 등록화면으로 이동합니다.</p>
                            </div>
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