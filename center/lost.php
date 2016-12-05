<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php'); ?>
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
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
            <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/lnb5.php'); ?>
            <div class="page-header">
                <h1><span class="square1">SQUARE<i>1</i></span> 분실물센터안내</h1>
                <h2>
                    스퀘어원은 고객님의 물건<br class="visible-xs">
                    하나하나<br class="visible-sm"> 소중히 생각합니다.
                </h2>
                <p>
                    소중한 물건을 분실하였나요?<br class="visible-xs">
                    안내데스크로 연락주세요. <a href="tel:0314564011"> Tel. 031-456-4011</a><br>
                    물건을 찾는 즉시 안전하게 되돌려 드립니다.<br>
                    먼저 아래 습득물 리스트에 분실한 물건이 있는지<br class="visible-xs">
                    확인해보세요.
                </p>
            </div>
            <div class="container">
                <section class="lost">
                    <div class="section-content">
                        <div class="calendar-form">
                            <form>
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
                                <div class="c-search">
                                    <div class="form-group">
                                        <select class="form-control">
                                            <option value="">전체</option>
                                        </select>
                                        <label for="search-keyword" class="sr-only">검색어</label>
                                        <input id="search-keyword" type="text" class="form-control">

                                        <button type="submit" class="btn">
                                            <span class="glyphicon glyphicon-search"></span>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="table-wrap">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th><i>관리</i>번호</th>
                                        <th>분류</th>
                                        <th>습득물<i>명</i></th>
                                        <th><i>습득</i>제목</th>
                                        <th><i>습득</i>장소</th>
                                        <th>습득일<i>자</i></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>100</td>
                                        <td>의류</td>
                                        <td>바지</td>
                                        <td>습득</td>
                                        <td>화장실</td>
                                        <td><i>2016-</i>10-06</td>
                                    </tr>
                                    <tr>
                                        <td>99</td>
                                        <td>귀금속</td>
                                        <td>반지</td>
                                        <td>습득</td>
                                        <td>매장</td>
                                        <td><i>2016-</i>10-03</td>
                                    </tr>
                                    <tr>
                                        <td>98</td>
                                        <td>귀금속</td>
                                        <td>반지</td>
                                        <td>신고</td>
                                        <td>매장</td>
                                        <td><i>2016-</i>10-01</td>
                                    </tr>
                                    <tr>
                                        <td>97</td>
                                        <td>의류</td>
                                        <td>치마</td>
                                        <td>신고</td>
                                        <td>화장실</td>
                                        <td><i>2016-</i>9-06</td>
                                    </tr>
                                    <tr>
                                        <td>96</td>
                                        <td>의류</td>
                                        <td>니트</td>
                                        <td>신고</td>
                                        <td>매장</td>
                                        <td><i>2016-</i>9-01</td>
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