<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php'); ?>
<link rel="stylesheet" href="/assets/css/sub.css">
<link rel="stylesheet" href="/assets/css/member.css">
</head>
<body class="sub member mypage">
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
            <div class="page-header has-snb"><!-- SNB를 포함할 경우 has-snb 클래스 추가-->
                <h2>1:1 문의현황</h2>
                <hr>
                <p>
                    고객님께서 Q&amp;A에 올려주신 소중한 의견을 확인 하실 수 있습니다.
                </p>
                <div class="snb">
                    <div class="container">
                        <button class="btn btn-block" type="button">
                            1:1 문의현황
                        </button>
                        <nav>
                            <ul>
                                <li><a href="/member/edit_form.php">회원정보 수정</a></li>
                                <li><a href="/member/mypoint.php">마이포인트</a></li>
                                <li class="active"><a href="/member/inquiry_list.php">1:1 문의현황</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="inquiry-view">
                    <div class="view-content">
                        <article class="content-view">
                            <div class="article-header">
                                포인트카드에 대하여 문의드릴게 있습니다.
                            </div>
                            <div class="article-content">
                                <div class="content">
                                    안녕하세요.<br>
                                    누적 포인트가 6,000포인트 정도 있어서 영화<br>
                                    관람권으로 교환하고 싶은데 어디에서 해야 하나요??<br>
                                    답변 부탁드립니다.
                                </div>
                                <div class="user-info">
                                    <ul>
                                        <li>
                                            <dl>
                                                <dt>등록일</dt>
                                                <dd>2016-10-16</dd>
                                            </dl>
                                        </li>
                                        <li>
                                            <dl>
                                                <dt>작성자</dt>
                                                <dd>sqsq</dd>
                                            </dl>
                                        </li>
                                        <li>
                                            <dl>
                                                <dt>조회수</dt>
                                                <dd>12</dd>
                                            </dl>
                                        </li>
                                    </ul>
                                    <div class="hidden-xs">
                                        <p class="print">
                                            <a href="#"><i class="icon-print"></i>인쇄하기</a>
                                        </p>
                                    </div>
                                </div>
                                <div class="attach">
                                    <dl class="file">
                                        <dt><i class="icon-attach"></i>첨부파일</dt>
                                        <dd>-</dd>
                                    </dl>
                                </div>
                                <div class="btn-area">
                                    <p>
                                        <a href="#" class="btn-sm btn-orange" role="button">글쓰기</a>
                                        <a href="#" class="btn-sm btn-default" role="button">수정하기</a>
                                        <a href="#" class="btn-sm btn-default" role="button">삭제하기</a>
                                    </p>
                                    <p class="basic-btn">
                                        <a href="#" class="btn btn-gray" role="button">목록보기</a>
                                    </p>
                                </div>
                            </div>
                        </article>
                    </div>    
                </div>
            </div><!-- container -->
        </main>
        <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php'); ?>
    </div>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
</body>
</html>