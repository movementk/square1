<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php'); ?>
<link rel="stylesheet" href="/assets/css/sub.css">
<link rel="stylesheet" href="/assets/css/introduce.css">
</head>
<body class="sub introduce company bi">
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
            <div class="page-header has-snb">
                <h1><span class="square1">SQUARE<i>1</i></span> 소개</h1>
                <div class="snb">
                    <div class="container">
                        <button class="btn btn-block" type="button">
                            SQUARE1 BI
                        </button>
                        <nav>
                            <ul>
                                <li><a href="/introduce/company.php">SQUARE1</a></li>
                                <li><a href="/introduce/concept.php">SQUARE1 CONCEPT</a></li>
                                <li class="active"><a href="/introduce/bi.php">SQUARE1 BI</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
            <!-- 컨텐츠 영역 -->
            <div class="page-summary">
                <div class="container">
                    <h3>고객의 행복을 지향하는 스퀘어원만의 BRAND IDENTITY</h3>
                    <p>
                        열정(RED), 신뢰(BLUE), 에너지(ORANGE),  풍요로운 라이프스타일(GREEN)
                    </p>
                </div>
            </div>
            <!-- // 컨텐츠 영역 -->
        </main>
        <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php'); ?>
    </div>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
</body>
</html>