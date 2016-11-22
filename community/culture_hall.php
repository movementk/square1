<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php'); ?>
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<link rel="stylesheet" href="/assets/css/sub.css">
<link rel="stylesheet" href="/assets/css/community.css">
</head>
<body class="sub community">
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/gnb_aside.php'); ?>
    <div id="wrapper">
        <div id="top-bn">
        </div>
        <header id="header">
            <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/top_nav.php'); ?>
            <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/gnb.php'); ?>
            <div class="jumbo">
                <h1><small>고객센터</small>CUSTOMER</h1>
                <p>
                    스퀘어원 고객님의 편의를 위한<br>
                    정보와 서비스 내용을 안내드립니다.
                </p>
            </div>
        </header>
        <main id="content">
            <nav id="lnb" class="hidden-xs">
                <div class="container">
                    <ul>
                        <li><a href="/community/notice.php">공지사항</a></li>
                        <li><a href="/community/lost.php">분실물센터안내</a></li>
                        <li class="active"><a href="/community/culture_hall.php">대관신청안내</a></li>
                        <li><a href="/community/faq.php">FAQ</a></li>
                        <li><a href="/community/qna.php">Q&amp;A</a></li>
                        <li><a href="#">고객의소리</a></li>
                    </ul>
                </div>
            </nav>
            <div class="container">
                <section class="culture-hall">
                    <div class="section-header">
                        <h2>SQUARE<i>1</i><br class="visible-xs"> 대관신청안내</h2>
                        <h3>
                            스퀘어원은 고객의<br class="visible-xs">
                            문화향유를 지원합니다.
                        </h3>
                        <p>
                            스퀘어원 4층 문화홀은 어린이 북카페, 공연공간,<br class="visible-xs">
                            오픈갤러리로 구성되어 있습니다.<br>
                            고객여러분의 문화향유를 위한 문화 공간을 지원합니다.
                        </p>
                        <hr>
                        <small>
                            아래의 대관신청 접수를 해주시면, <br class="visible-xs">
                            대관 이용이 가능한 단체에 연락을 드립니다. <br>
                            단 기업홍보를 위한 행사 또는 상업목적을 둔 내용은 <br class="visible-xs">
                            무료대관지원을 하지 않습니다.
                        </small>
                    </div>
                    <div class="section-content">
                        <div class="input-form type-1">
                            <form>
                                <dl>
                                    <dt><label for="u-name">단체(개인)명</label></dt>
                                    <dd><input type="text" id="u-name" class="form-control"></dd>
                                    <dt><label for="performance">공연분야</label></dt>
                                    <dd>
                                        <select class="form-control" id="performance">
                                            <option value="">선택하세요</option>
                                        </select>
                                    </dd>
                                    <dt><label for="mfic">담당자명</label></dt>
                                    <dd class="mfic"><input type="text" id="mfic" class="form-control"></dd>
                                    <dt><label for="tel">연락처</label></dt>
                                    <dd><input type="text" id="tel" class="form-control"></dd>
                                    <dt><label for="phone">휴대폰번호</label></dt>
                                    <dd><input type="text" id="phone" class="form-control"></dd>
                                    <dt><label for="u-email">E-MAIL</label></dt>
                                    <dd><input type="email" id="u-email" class="form-control"></dd>
                                    <dt>대관일정</dt>
                                    <dd>
                                        <div class="calendar-form">
                                            <div class="calendar">
                                                <p class="selecter">
                                                    <input type="text" id="datepicker" class="form-control in-mr">
                                                    <label for="datepicker">
                                                        <i class="icon-calendar">
                                                            <span class="sr-only">시작날짜조회</span>
                                                        </i>
                                                    </label>
                                                </p>
                                                -
                                                <p class="selecter">
                                                    <input type="text" id="datepicker-2" class="form-control in-mr">
                                                    <label for="datepicker-2">
                                                        <i class="icon-calendar">
                                                            <span class="sr-only">종료날짜조회</span>
                                                        </i>
                                                    </label>
                                                </p>
                                            </div>
                                        </div>
                                    </dd>
                                    <dt>인원</dt>
                                    <dd class="people">
                                        <label for="num-1">공연자인원</label><input type="text" id="num-1" class="form-control">
                                        <label for="num-2">진행인원</label><input type="text" id="num-2" class="form-control">
                                    </dd>
                                    <dt>참고사진</dt>
                                    <dd class="file">
                                        <input type="file" id="file" class="form-control">
                                        <label for="file">
                                            <i class="icon-upload">
                                                <span class="sr-only">파일올리기</span>
                                            </i>
                                        </label>
                                    </dd>
                                    <dt>공연경력사항 <br class="hidden-xs"><i>(0자/2000자)</i></dt>
                                    <dd>
                                        <textarea class="form-control"></textarea>
                                    </dd>
                                </dl>
                                <div class="btn-area">
                                    <p>
                                        <a href="#" class="btn btn-orange" role="button">전송</a>
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
    <!-- calendar 없는 페이지 제거 -->
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script><!-- calendar -->
    <script><!-- calendar -->
        (function($) {
            $("#datepicker, #datepicker-2").datepicker({
                dateFormat: 'yy-mm-dd',
                prevText: '이전 달',
                nextText: '다음 달',
                monthNames: ['1월','2월','3월','4월','5월','6월','7월','8월','9월','10월','11월','12월'],
                monthNamesShort: ['1월','2월','3월','4월','5월','6월','7월','8월','9월','10월','11월','12월'],
                dayNames: ['일','월','화','수','목','금','토'],
                dayNamesShort: ['일','월','화','수','목','금','토'],
                dayNamesMin: ['일','월','화','수','목','금','토'],
                showMonthAfterYear: true,
                changeMonth: true,
                changeYear: true,
                yearSuffix: '년'
            });
        })(jQuery);
    </script>
</body>
</html>