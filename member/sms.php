<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php'); ?>
<link rel="stylesheet" href="/assets/css/sub.css">
<link rel="stylesheet" href="/assets/css/member.css">
</head>
<body class="sub member">
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
            <div class="container">
                <section class="sms">
                    <div class="section-header">
                        <h2>회원가입</h2>
                        <hr>
                        <p>
                            스퀘어원 회원가입을 하시면<br class="visible-xs"> 
                            더많은 혜택을 이용하실 수 있습니다.
                        </p>
                    </div>
                    <div class="section-content">
                        <nav class="procedure">
                            <ol>
                                <li>
                                    <p class="pcd-img">
                                        <img src="/assets/images/member/procedure_non_img01.gif" alt="약관동의">
                                    </p>
                                    <h3>01.<br class="visible-xs"> 약관동의</h3>
                                </li>
                                <li class="active">
                                    <p class="pcd-img">
                                        <img src="/assets/images/member/procedure_img02.gif" alt="실명확인">
                                    </p>
                                    <h3>02.<br class="visible-xs"> 실명확인</h3>
                                </li>
                                <li>
                                    <p class="pcd-img">
                                        <img src="/assets/images/member/procedure_non_img03.gif" alt="정보입력">
                                    </p>
                                    <h3>03.<br class="visible-xs"> 정보입력</h3>
                                </li>
                                <li>
                                    <p class="pcd-img">
                                        <img src="/assets/images/member/procedure_non_img04.gif" alt="가입완료">
                                    </p>
                                    <h3>04.<br class="visible-xs"> 가입완료</h3>
                                </li>
                            </ol>
                        </nav>
                        <article class="verify">
                            <div class="article-header">
                                <h4>실명확인</h4>
                                <p>
                                    해당 사이트는 고객님의 개인정보 유출 방지 및 피해 방지를 위하여 실명인증 제도를 시행하고 있습니다.
                                </p>
                            </div>
                            <div class="article-content">
                                <p class="sms-img">
                                    <img src="/assets/images/member/sms_img.gif" alt="휴대전화 인증하기">
                                </p>
                                <div class="btn-area">
                                    <p>
                                        <a href="#" class="btn btn-sms" role="button">휴대전화 인증하기</a>
                                    </p>
                                </div>
                                <ul class="dot-list">
                                    <li>
                                        정보통신망법(2012.08.18 시행)제 23조 2(주민번호 사용제한) 규정에 따라 온라인 상 주민번호의 수집/이용을 제한합니다.
                                    </li>
                                    <li>
                                        입력하신 정보는 본인확인을 위해 스퀘어원에 제공되며, 본인확인 용도 외  사용되거나 저장되지 않습니다.
                                    </li>
                                </ul>
                            </div>
                        </article>
                    </div>
                </section>
            </div><!-- container -->
        </main>
        <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php'); ?>
    </div>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
</body>
</html>