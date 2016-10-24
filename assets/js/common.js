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
