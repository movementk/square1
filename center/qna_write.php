<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php'); ?>
<link rel="stylesheet" href="/assets/css/sub.css">
<link rel="stylesheet" href="/assets/css/center.css">
</head>
<body class="sub center">
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
                        <li><a href="/community/notice_list.php">공지사항</a></li>
                        <li><a href="/center/lost.php">분실물센터안내</a></li>
                        <li><a href="/center/culture_hall.php">대관신청안내</a></li>
                        <li><a href="/center/faq_list.php">FAQ</a></li>
                        <li class="active"><a href="/center/qna_list.php">Q&amp;A</a></li>
                        <li><a href="#">고객의소리</a></li>
                    </ul>
                </div>
            </nav>
            <div class="container">
                <section class="write">
                    <div class="section-header">
                        <h2>SQUARE<i>1</i> Q&amp;A</h2>
                        <h3>
                            스퀘어원과 관련된 궁금한 사항은<br>
                            무엇이든 물어보세요.
                        </h3>
                        <p>
                            제안ㆍ건의ㆍ만족ㆍ불만족 등과 관련된 고객님의<br class="visible-xs"> 
                            소중한 의견을 남겨주시면<br>
                            접수후 빠른 대응을 하도록하겠습니다.
                        </p>
                    </div>
                    <div class="section-content">
                        <div class="input-form type-1">
                            <form>
                                <dl>
                                    <dt>상담유형</dt>
                                    <dd>
                                        <select class="form-control" id="performance">
                                            <option value="">선택하세요</option>
                                        </select>
                                    </dd>
                                    <dt><label for="subject">제목</label></dt>
                                    <dd class="subject"><input type="text" id="subject" class="form-control"></dd>
                                    <dt>첨부파일</dt>
                                    <dd class="file">
                                        <input type="file" id="file" class="form-control">
                                        <label for="file">
                                            <i class="icon-upload">
                                                <span class="sr-only">파일올리기</span>
                                            </i>
                                        </label>
                                    </dd>
                                    <dt>내용 <br class="hidden-xs"><i>(0자/2000자)</i></dt>
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
</body>
</html>