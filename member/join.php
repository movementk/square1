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
                <section class="join">
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
                                <li>
                                    <p class="pcd-img">
                                        <img src="/assets/images/member/procedure_non_img02.gif" alt="실명확인">
                                    </p>
                                    <h3>02.<br class="visible-xs"> 실명확인</h3>
                                </li>
                                <li class="active">
                                    <p class="pcd-img">
                                        <img src="/assets/images/member/procedure_img03.gif" alt="정보입력">
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
                        <div class="join-info">
                            <h4>정보입력</h4>
                            <p>는 필수 입력사항 입니다.</p>
                            <form>
                                <div class="input-form type-1">
                                    <dl>
                                        <dt class="bold-before">
                                            <label for="u-name">이름</label>
                                        </dt>
                                        <dd>
                                            <input type="text" id="u-name" class="form-control">
                                        </dd>
                                        <dt class="bold-before">
                                            <label for="user-id">아이디</label>
                                        </dt>
                                        <dd class="user-dd user-id">
                                            <input type="text" id="user-id" class="form-control" placeholder="※ 사용하실 아이디를 입력해 주세요.">
                                            <p class="btn-basics">
                                                <a href="#" class="btn" role="button">중복확인</a>
                                            </p>
                                        </dd>
                                        <dt>
                                            <label for="point-card">포인트카드번호</label>
                                        </dt>
                                        <dd class="user-dd">
                                            <input type="text" id="point-card" class="form-control" placeholder="※ 포인트카드번호를 입력해 주세요.">
                                            <p class="btn-basics">
                                                <a href="#" class="btn" role="button">중복확인</a>
                                            </p>
                                        </dd>
                                        <dt class="bold-before">
                                            <label for="user-pw">비밀번호</label>
                                        </dt>
                                        <dd>
                                            <input type="password" id="user-pw" class="form-control" placeholder="※ 영문, 숫자 조합 6~12자">
                                        </dd>
                                        <dt class="bold-before">
                                            <label for="confirm-pw">비밀번호확인</label>
                                        </dt>
                                        <dd>
                                            <input type="password" id="confirm-pw" class="form-control">
                                        </dd>
                                        <dt class="bold-before">
                                            <label for="email">E-MAIL</label>
                                        </dt>
                                        <dd class="user-mail">
                                            <input type="text" id="email" class="form-control">
                                            <select class="form-control">
                                                <option value="">선택하세요</option>
                                            </select>
                                        </dd>
                                        
                                        
                                        <dt class="bold-before">
                                            휴대폰번호
                                        </dt>
                                        <dd class="phone">
                                            <select class="form-control">
                                                <option value="">선택</option>
                                            </select>
                                            <label for="u-phone-2" class="sr-only">두번째 번호</label>
                                            <input type="text" id="u-phone-2" class="form-control">
                                            <label for="u-phone-3" class="sr-only">마지막 번호</label>
                                            <input type="text" id="u-phone-3" class="form-control">
                                        </dd>
                                        <dt class="bold-before">
                                            <label for=""></label>
                                        </dt>
                                        <dd>
                                            <input type="text" class="form-control">
                                        </dd>
                                        <dt class="bold-before">
                                            <label for=""></label>
                                        </dt>
                                        <dd>
                                            <input type="text" class="form-control">
                                        </dd>
                                        <dt class="bold-before">
                                            <label for=""></label>
                                        </dt>
                                        <dd>
                                            <input type="text" class="form-control">
                                        </dd>
                                    </dl>
                                </div>
                            </form>
                        </div>
                    </div>
                </section>
            </div><!-- container -->
        </main>
        <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php'); ?>
    </div>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
</body>
</html>