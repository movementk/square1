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
                <section class="square1-event event-identify01">
                    <div class="section-content">
                        <p class="event-img">
                            <img src="/assets/images/event/event_lg_img.jpg" class="img-responsive visible-xs" alt="진행이벤트">
                            <img src="/assets/images/event/event_lg_img.jpg" class="img-responsive visible-sm" alt="진행이벤트">
                            <img src="/assets/images/event/event_lg_img.jpg" class="img-responsive visible-md visible-lg" alt="진행이벤트">
                        </p>
                        <div class="event-form">
                            <form>
                                <h3>접수/응모확인</h3>
                                <div class="form-group">
                                    <dl>
                                        <dt><label for="u-name">이름</label></dt>
                                        <dd><input type="text" id="u-name" class="form-control"></dd>
                                        <dt class="dl-mb">휴대폰번호</dt>
                                        <dd class="phone dl-mb">
                                            <select class="form-control">
                                                <option value="">선택</option>
                                                <option value="">010</option>
                                            </select>
                                            -
                                            <input type="text" id="phone-2" class="form-control"> -
                                            <label for="phone-2" class="sr-only">중간 번호</label>
                                            <input type="text" id="phone-3" class="form-control">
                                            <label for="phone-3" class="sr-only">마지막 번호</label>
                                        </dd>
                                    </dl>
                                </div>
                                <div class="btn-area">
                                    <p class="float-r">
                                        <button type="submit" class="btn btn-orange">응모하기</button>
                                        <a href="#" class="btn btn-default" role="button">취소</a>
                                    </p>
                                </div>
                            </form>
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