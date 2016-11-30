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
                <div class="inquiry-list">
                    <div class="inquiry-content">
                        <div class="search-form">
                            <form>
                                <div class="form-group">
                                    <select class="form-control">
                                        <option value="">전체</option>
                                    </select>
                                    <label for="search-keyword" class="sr-only">검색어</label>
                                    <input id="search-keyword" type="text" class="form-control">
                                </div>
                                <button type="submit" class="btn">
                                    <span class="glyphicon glyphicon-search"></span>
                                </button>
                            </form>
                        </div>
                        <div class="table-wrap">
                            <table class="table table-bordered notice-table">
                                <thead>
                                    <tr>
                                        <th>번호</th>
                                        <th>제목</th>
                                        <th>작성일</th>
                                        <th>조회수</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>100</td>
                                        <td class="t-content"><a href="inquiry_view.php">골드바 40돈의 주인공 당첨자 발표</a></td>
                                        <td class="date">2016-10-06</td>
                                        <td>123</td>
                                    </tr>
                                    <tr>
                                        <td>99</td>
                                        <td class="t-content"><a href="inquiry_view.php">LOVE&amp;THANKS 경품 페스티벌 당첨자 발표</a></td>
                                        <td class="date">2016-10-06</td>
                                        <td>15</td>
                                    </tr>
                                    <tr>
                                        <td>98</td>
                                        <td class="t-content"><a href="inquiry_view.php">발렌타인데이 LOVE이벤트 당첨자발표</a></td>
                                        <td class="date">2016-10-06</td>
                                        <td>77</td>
                                    </tr>
                                    <tr>
                                        <td>97</td>
                                        <td class="t-content"><a href="inquiry_view.php">새해 소원을 말해봐 당첨자 발표</a></td>
                                        <td class="date">2016-10-06</td>
                                        <td>23</td>
                                    </tr>
                                    <tr>
                                        <td>96</td>
                                        <td class="t-content"><a href="inquiry_view.php">cool summer! 캠핑 경품 이벤트 당첨자 발표</a></td>
                                        <td class="date">2016-10-06</td>
                                        <td>96</td>
                                    </tr>
                                </tbody>
                            </table>
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
                </div>
            </div><!-- container -->
        </main>
        <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php'); ?>
    </div>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
</body>
</html>