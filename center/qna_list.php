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
            <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/lnb5.php'); ?>
            <div class="container">
                <section class="qna">
                    <div class="section-header">
                        <h2>SQUARE<i>1</i> Q&amp;A</h2>
                        <h3>
                            스퀘어원과 관련된 궁금한 사항은<br>
                            무엇이든 물어보세요.
                        </h3>
                        <p>
                            고객님의 편의를 위한 제안ㆍ건의ㆍ만족ㆍ불만족 등과<br class="visible-xs">
                            관련된 고객님의 소중한 의견을 남겨주시면<br>
                            접수후 빠른 대응을 하도록하겠습니다.
                        </p>
                    </div>
                    <div class="section-content">
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
                                        <td class="t-content"><a href="#">안녕하세요. 문의드립니다.</a></td>
                                        <td class="date">2016-10-06</td>
                                        <td>123</td>
                                    </tr>
                                    <tr>
                                        <td>99</td>
                                        <td class="t-content"><a href="#">이벤트 관련 문의드립니다.</a></td>
                                        <td class="date">2016-10-06</td>
                                        <td>15</td>
                                    </tr>
                                    <tr>
                                        <td>98</td>
                                        <td class="t-content"><a href="#">안녕하세요~~</a></td>
                                        <td class="date">2016-10-06</td>
                                        <td>77</td>
                                    </tr>
                                    <tr>
                                        <td>97</td>
                                        <td class="t-content"><a href="#">연락부탁 드립니다.</a></td>
                                        <td class="date">2016-10-06</td>
                                        <td>23</td>
                                    </tr>
                                    <tr>
                                        <td>96</td>
                                        <td class="t-content"><a href="#">멤버쉽 서브스에 대하여 문의 릴게 있습니다. 연락부탁드립니다.</a></td>
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
                </section>
            </div><!-- container -->
        </main>
        <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php'); ?>
    </div>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
</body>
</html>