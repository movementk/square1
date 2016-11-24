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
                        <li class="active"><a href="/center/faq_list.php">FAQ</a></li>
                        <li><a href="/center/qna_list.php">Q&amp;A</a></li>
                        <li><a href="#">고객의소리</a></li>
                    </ul>
                </div>
            </nav>
            <div class="container">
                <section class="faq">
                    <div class="section-header">
                        <h2>SQUARE<i>1</i> FAQ</h2>
                        <p>스퀘어원과 관련한 궁금한 사항은<br class="visible-xs"> 무엇이든 찾아보세요</p>
                    </div>
                    <div class="section-content">
                        <nav class="board-list">
                            <ul class="row">
                                <li class="col-xs-4 col-sm-2 active">
                                    <a href="#">ALL</a>
                                </li>
                                <li class="col-xs-4 col-sm-2">
                                    <a href="#">매장안내</a>
                                </li>
                                <li class="col-xs-4 col-sm-2">
                                    <a href="#">이벤트</a>
                                </li>
                                <li class="col-xs-4 col-sm-2">
                                    <a href="#">편의시설</a>
                                </li>
                                <li class="col-xs-4 col-sm-2">
                                    <a href="#">주차/교통</a>
                                </li>
                                <li class="col-xs-4 col-sm-2">
                                    <a href="#">기타</a>
                                </li>
                            </ul>
                        </nav>
                        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingOne">
                                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        <i class="hidden-xs">40</i><h3>매장안내</h3> <p>영업시간은 어떻게 되나요?</p>
                                    </a>
                                </div>
                                <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                    <div class="panel-body">
                                        <p>
                                            연중무휴이며 오전 10시 반부터 오후 10시까지 이용가능합니다.
                                            <br>
                                            (특이사항 발생시 홈페이지공지예정)
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingTwo">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        <i class="hidden-xs">39</i><h3>이용안내</h3> <p>어떻게 이용하면 되나요?</p>
                                    </a>
                                </div>
                                <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                    <div class="panel-body">
                                        <p>
                                            연중무휴이며 오전 10시 반부터 오후 10시까지 이용가능합니다.
                                            <br>
                                            (특이사항 발생시 홈페이지공지예정)
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingThree">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        <i class="hidden-xs">38</i><h3>편의시설</h3> <p> 푸드테마파크 레스토랑은 무엇인가요?</p>
                                    </a>
                                </div>
                                <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                    <div class="panel-body">
                                        <p>
                                            연중무휴이며 오전 10시 반부터 오후 10시까지 이용가능합니다.
                                            <br>
                                            (특이사항 발생시 홈페이지공지예정)
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <nav aria-label="Page navigation" class="paging">
                            <ul class="pagination">
                                <li>
                                    <a href="#" aria-label="Previous" class="ap">
                                        <i aria-hidden="true" class="icon-angle-double-left"></i>
                                    </a> 
                                </li>
                                <li>
                                    <a href="#" aria-label="Previous" class="ap ap-mr">
                                        <i aria-hidden="true" class="icon-angle-left"></i>
                                    </a>
                                </li>
                                <li class="active"><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li><a href="#" class="ap-mr">5</a></li>
                                <li>
                                    <a href="#" aria-label="Next" class="ap">
                                        <i aria-hidden="true" class="icon-angle-right"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" aria-label="Next" class="ap">
                                        <i aria-hidden="true" class="icon-angle-double-right"></i>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </section>
            </div><!-- container -->
        </main>
        <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php'); ?>
    </div>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
</body>
</html>