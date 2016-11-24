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
            <nav id="lnb" class="hidden-xs">
                <div class="container">
                    <div class="container">
                        <ul>
                            <li><a href="/community/press_list.php">보도자료</a></li>
                            <li><a href="/event/brand_event.php">브랜드 이벤트</a></li>
                            <li class="active"><a href="/event/square1_event.php">SQUARE1 이벤트</a></li>
                            <li><a href="/event/art_hall.php">문화홀 공연/전시</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
            <div class="container">
                <section class="square1-event">
                    <div class="section-header">
                        <h2>SQUARE<i>1</i> 이벤트</h2>
                    </div>
                    <div class="section-content">
                        <p class="event-img">
                            <img src="/assets/images/event/event_lg_img.jpg" class="img-responsive visible-xs" alt="진행이벤트">
                            <img src="/assets/images/event/event_lg_img.jpg" class="img-responsive visible-sm" alt="진행이벤트">
                            <img src="/assets/images/event/event_lg_img.jpg" class="img-responsive visible-md visible-lg" alt="진행이벤트">
                        </p>
                        <div class="event-form">
                            <form>
                                <h3>개인정보취급방침</h3>
                                <div class="privacy">
                                    개인정보 취급 방침 <br><br>
                                    "(주)서부티엔디 스퀘어원"은 (이하'SQUARE1') 이벤트 참가 고객의 개인정보를 중요시하며 "정보통신망 이용촉진 및 정보보호"에 관한 법률을 준수하고 있습니다. SQUARE1은 개인정보취급방침을 통하여 이벤트 신청 고객이 제공하시는 개인정보가 어떠한 용도와 방식으로 이용되고 있으며 개인정보보호를 위해 어떠한 조치가 취해지고 있는지 알려드립니다.
                                </div>
                                <label><input type="checkbox">동의합니다.</label>
                                <h3>접수/응모란</h3>
                                <div class="form-group">
                                    <dl>
                                        <dt><label for="u-name">이름</label></dt>
                                        <dd><input type="text" id="u-name" class="form-control"></dd>
                                        <dt>휴대폰번호</dt>
                                        <dd class="phone">
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
                                        <dt class="dl-mb">참여일자</dt>
                                        <dd class="date dl-mb">
                                            <select class="form-control">
                                                <option value="">선택하세요</option>
                                            </select>
                                        </dd>
                                    </dl>
                                </div>
                                <div class="btn-area">
                                    <p class="btn-basic">
                                        <a href="#" class="btn-gray" role="button">참여 신청 내역 확인</a>
                                    </p>
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