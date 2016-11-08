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
    // 모바일 햄버거 버튼
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
})(jQuery);
