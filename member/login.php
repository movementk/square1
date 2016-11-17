<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php'); ?>
<link rel="stylesheet" href="/assets/css/sub.css">
<link rel="stylesheet" href="/assets/css/member.css">
</head>
<body class="sub introduce gnb-open">
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
            <div class="page-header has-snb"><!-- SNB를 포함할 경우 has-snb 클래스 추가-->
                <h1><span class="square1">SQUARE<i>1</i></span> 소개</h1>

                <div class="snb">
                    <div class="container">
                        <button class="btn btn-block" type="button">
                            SQUARE1
                        </button>
                        <nav>
                            <ul>
                                <li class="active"><a href="#">SQUARE1</a></li>
                                <li><a href="#">SQUARE1 CONCEPT</a></li>
                                <li><a href="#">SQUARE1 BI</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="container">
                    
            </div><!-- container -->
        </main>
        <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php'); ?>
    </div>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
</body>
</html>