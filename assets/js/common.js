/*
(function($) {
    // 모바일 GNB 관련
    $(document).on('click', '#header .btn-menu', function() {
        $('html, body').addClass('gnb-open');
    });
    $(document).on('click', '#gnb-aside .btn-close', function() {
        $('html, body').removeClass('gnb-open');
    });
    $(document).on('click', '#gnb-aside', function(e) {
        if ($(e.target).attr('id') === 'gnb-aside') {
            $('html, body').removeClass('gnb-open');
        }
    });
})(jQuery);
*/
(function($) {
    // 모바일 메뉴 관련 버튼
    $(document).on('click', '#header .btn-menu', function() {
        $('body').addClass('gnb-open');
    });
    $(document).on('click', '#gnb-aside .btn-close', function() {
        $('body').removeClass('gnb-open');
    });
    $(document).on('click', '#gnb-aside', function(e) {
        if ($(e.target).attr('id') === 'gnb-aside') {
            $('body').removeClass('gnb-open');
        }
    });
    $(document).on('click', '#gnb-aside .menu > ul > li > a', function() {
        if ($(this).parent().hasClass('active')) {
            $(this).parent().removeClass('active');
        } else {
            $(this).parent().siblings('.active').removeClass('active');
            $(this).parent().addClass('active');
        }
    });

    // 모바일 검색버튼 버튼
    $(document).on('click', '#top-nav .btn-toggle-search', function() {
        $('#top-nav').toggleClass('search-open');
    });

    // 데스크탑 GNB 펼침
    $(document).on('mouseenter focusin', '#gnb', function() {
        $('#gnb').addClass('opened');
    });
    $(document).on('mouseleave', '#gnb', function() {
        $('#gnb').removeClass('opened');
    });
    
    // 모바일: 서브페이지에서 페이지헤더 탭
    $(document).on('click', '#content .page-header .snb .btn', function() {
        $('#content .page-header .snb').toggleClass('open');
    });
    
    $(window).on('scroll', function() {
        //console.log( $('#gnb').scrollTop() );
        console.log( $('#gnb').offset().top);
        console.log( $('#gnb').position().top);
        if ( $(this).scrollTop() > 200 ) {
            $('#gnb').addClass('fixed');
        } else {
            $('#gnb').removeClass('fixed');
        }
    });
})(jQuery);
