<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php'); ?>
<link rel="stylesheet" href="/assets/css/main.css">
</head>
<body class="main">
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/gnb_aside.php'); ?>
    <div id="wrapper">
        <div id="top-bn" class="callape in" style="background-color: #6d74e6; display: none;">
            <div class="container">
                <a href="#">
                    <img class="img-responsive visible-xs" src="/assets/images/img_top_bn_lg.jpg" alt="">
                    <img class="img-responsive visible-sm visible-md" src="/assets/images/img_top_bn_sm.jpg" alt="">
                    <img class="img-responsive visible-lg" src="/assets/images/img_top_bn_xs.jpg" alt="">
                </a>
                <button class="btn btn-close" type="button" data-toggle="collapse" data-target="#top-bn"><img src="/assets/images/ico_close.png" alt="닫기"></button>
            </div>
        </div>
        <header id="header">
            <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/top_nav.php'); ?>
            <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/gnb.php'); ?>
            <div class="jumbo">
                <h1>
                    ENJOY YOUR<br>
                    <b>LIFE TIME !</b>
                </h1>
            </div>
        </header>
        <main id="content">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-lg-3">
                        <div id="bookmarks">
                            <ul>
                                <li><a href="#"><i><img src="/assets/images/ico_gift.png" alt=""></i> 브랜드 입점 매장 소개</a></li>
                                <li><a href="#"><i><img src="/assets/images/ico_star.png" alt=""></i> 편의시설 안내</a></li>
                                <li><a href="#"><i><img src="/assets/images/ico_parking.png" alt=""></i>주차시설 안내</a></li>
                                <li><a href="#"><i><img src="/assets/images/ico_wallet.png" alt=""></i>분실물센터 안내</a></li>
                                <li><a href="#"><i><img src="/assets/images/ico_check.png" alt=""></i>대관신청 안내</a></li>
                                <li><a href="#"><i><img src="/assets/images/ico_microphone.png" alt=""></i>공지사항</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-lg-3">
                        <section id="search-store">
                            <h3>SQUARE1에 <br class="visible-lg">입점한 <br class="visible-sm visible-md">매장을 <br class="visible-xs">쉽고 간편하게 <br class="visible-sm visible-md visible-lg">검색하세요.</h3>
                            <p>매장명으로 쉽게 검색하실 수 있습니다.</p>
                            <div class="form-area">
                                <form>
                                    <div class="form-group">
                                        <label for="search-store-name" class="sr-only">검색매장명</label>
                                        <input id="search-store-name" class="form-control" type="text" name="#">
                                        <button class="btn" type="submit"><i class="icon-search-1"></i></button>
                                    </div>
                                </form>
                                <div class="results" style="display: none;">
                                    <p class="nothing">검색결과가 없습니다.</p>
                                    <ul>
                                        <li><a href="#">검색어 #1</a></li>
                                        <li><a href="#">검색어 #2</a></li>
                                        <li><a href="#">검색어 #3</a></li>
                                        <li><a href="#">검색어 #4</a></li>
                                        <li><a href="#">검색어 #5</a></li>
                                    </ul>
                                </div>
                            </div>
                        </section>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-lg-3">
                        <div class="shortcut hour">
                            <a href="#">
                                <small>BUSINESS HOUR</small><br>
                                <b>영업시간안내</b>
                            </a>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-lg-3">
                        <div class="shortcut floor">
                            <a href="#">
                                <small>FLOOR GUIDE</small><br>
                                <b>층별안내</b>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-lg-6">
                        <div id="banner-1" class="banner">
                            <ul>
                                <li><a href="#">
                                    <img class="visible-xs" src="/assets/images/img_banner1_1_xs.jpg" alt="">
                                    <img class="visible-sm visible-md" src="/assets/images/img_banner1_1_sm.jpg" alt="">
                                    <img class="visible-lg" src="/assets/images/img_banner1_1_lg.jpg" alt="">
                                </a></li>
                                <li><a href="#">
                                    <img class="visible-xs" src="/assets/images/img_banner1_1_xs.jpg" alt="">
                                    <img class="visible-sm visible-md" src="/assets/images/img_banner1_1_sm.jpg" alt="">
                                    <img class="visible-lg" src="/assets/images/img_banner1_1_lg.jpg" alt="">
                                </a></li>
                                <li><a href="#">
                                    <img class="visible-xs" src="/assets/images/img_banner1_1_xs.jpg" alt="">
                                    <img class="visible-sm visible-md" src="/assets/images/img_banner1_1_sm.jpg" alt="">
                                    <img class="visible-lg" src="/assets/images/img_banner1_1_lg.jpg" alt="">
                                </a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xs-12 col-lg-6">
                        <div id="banner-2" class="banner">
                            <ul>
                                <li><a href="#">
                                    <img class="visible-xs" src="/assets/images/img_banner2_1_xs.jpg" alt="">
                                    <img class="visible-sm visible-md" src="/assets/images/img_banner2_1_sm.jpg" alt="">
                                    <img class="visible-lg" src="/assets/images/img_banner2_1_lg.jpg" alt="">
                                </a></li>
                                <li><a href="#">
                                    <img class="visible-xs" src="/assets/images/img_banner2_1_xs.jpg" alt="">
                                    <img class="visible-sm visible-md" src="/assets/images/img_banner2_1_sm.jpg" alt="">
                                    <img class="visible-lg" src="/assets/images/img_banner2_1_lg.jpg" alt="">
                                </a></li>
                                <li><a href="#">
                                    <img class="visible-xs" src="/assets/images/img_banner2_1_xs.jpg" alt="">
                                    <img class="visible-sm visible-md" src="/assets/images/img_banner2_1_sm.jpg" alt="">
                                    <img class="visible-lg" src="/assets/images/img_banner2_1_lg.jpg" alt="">
                                </a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xs-6 col-lg-3">
                        <div class="shortcut location">
                            <a href="#">
                                <small>LOCATION</small><br>
                                <b>찾아오시는 길</b>
                            </a>
                        </div>
                    </div>
                    <div class="col-xs-6 col-lg-3">
                        <div class="shortcut membership">
                            <a href="#">
                                <small>MEMBERSHIP</small><br>
                                <b>멤버십 서비스</b>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php'); ?>
    </div>
    
    <!-- 팝업 -->
    <div id="popup" class="modal" role="dialog" data-show="true" data-backdrop="false">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <ul class="popup-list">
                        <li><a href="#"><img src="/assets/images/img_popup_dummy.jpg" alt=""></a></li>
                        <li><a href="#"><img src="/assets/images/logo.png" alt=""></a></li>
                        <li><a href="#"><img src="/assets/images/img_banner2_1_lg.jpg" alt=""></a></li>
                    </ul>
                </div>
                <div class="modal-foot">
                    <label><input type="checkbox"> 오늘 하루 열지 않기</label>
                    <button type="button" class="btn btn-link btn-default" data-dismiss="modal">닫기</button>
                </div>
            </div>
        </div>
    </div>
    <!-- // 팝업 -->
    
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
    <script>
        (function($) {
            $(document).on('focus', '#search-store .form-area #search-store-name', function() {
                $('#search-store .form-area').addClass('focus');
            });
            $(document).on('blur', '#search-store .form-area #search-store-name', function() {
                if ($(this).val() == '') {
                    $('#search-store .form-area').removeClass('focus');
                }
            });
            $(".banner ul").bxSlider({
                auto: true,
                controls: false,
                autoHover: true,
                buildPager: function(slideIndex) {
                    return "<span class='sr-only'>"+ slideIndex +"</span>"
                }
            });
            $('#popup').on('shown.bs.modal', function (e) {
                $('body, #popup').css('padding-right', 0);
                $('#popup .popup-list').bxSlider({
                    auto: true,
                    autoHover: true,
                    adaptiveHeight: true,
                    controls: false,
                    buildPager: function(slideIndex) {
                        return "<span class='sr-only'>"+ slideIndex +"</span>"
                    }
                });
            });
            $('#popup').modal();
        })(jQuery);
    </script>
</body>
</html>
