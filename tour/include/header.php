<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <meta property="og:title" content="YJtour" />
    <meta property="og:image" content="images/logo.png" />
    <title>여행박사</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nanum+Gothic:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/8.2.5/swiper-bundle.css" integrity="sha512-wMTbLMebj4OAT4mU2nV6XvE8QuTHOrwPKNaGuGF2wiaNU9IHea/bgJcKP/DtG+c3+LbNu54evMgWOWPvN/7iDQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/jquery.bxslider.css">
    <link rel="stylesheet" href="css/style.css">

    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/jquery.bxslider.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>

   
    <script>
         $(document).ready(function(){
            var slide = $(".slide").bxSlider({
                controls:false,
                pagerCustom:".slideTap",
                mode:"vertical",
                touchEnabled:false,
                infiniteLoop: false
            });

            $("btnNext").click(function(){
                slide.goToNextSlide()
            });
            $("btnPrev").click(function(){
                slide.goToPrevSlide()
            });
        });
        $(document).ready(function(){
            $("#sdate01, #edate01,#sdate02, #edate02,#sdate03, #edate03,#sdate04, #edate04").datepicker({
                dateFormat:'yy.mm.dd',
                dateFormat: 'yy.mm.dd',
                prevText: '이전 달',
                nextText: '다음 달',
                monthNames: ['1월','2월','3월','4월','5월','6월','7월','8월','9월','10월','11월','12월'],
                monthNamesShort: ['1월','2월','3월','4월','5월','6월','7월','8월','9월','10월','11월','12월'],
                dayNames: ['일','월','화','수','목','금','토'],
                dayNamesShort: ['일','월','화','수','목','금','토'],
                dayNamesMin: ['일','월','화','수','목','금','토'],
                showMonthAfterYear: true,
                yearSuffix: '년'
            })
        })
    </script>
</head>
<body>
    <header class="header">
        <div class="hdTopWrap">
            <div class="headerTop">
                <div class="hdlogo">
                    <a href="./"><img src="images/logo.png" alt=""></a>
                </div>
                <div class="scWrap">
                    <p class="title">SEARCH</p>
                    <form action="#">
                        <input type="text" name="search" placeholder="검색어를 입력하세요" class="inp">
                    </form>
                    <div class="icon">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </div>
                </div>
                <div class="iconmenu">
                    <p>+82 02 1234 5678</p>
                    <a href="#"><img src="images/icon01.png" alt=""></a>
                    <a href="#"><img src="images/icon02.png" alt=""></a>
                    <a href="#"><img src="images/icon03.png" alt=""></a>
                    <a href="#"><img src="images/icon04.png" alt=""></a>
                </div>
            </div>
        </div>

        <div class="hdbottomWrap">
            <div class="headerBottom">
                <nav class="navbar">
                    <ul>
                        <li><a href="subpage.html" class="active">여행도시</a>
                            <div class="submenu">
                                <ul class="clearfix">
                                    <li><a href="#">동남아</a></li>
                                    <li><a href="#">일본</a></li>
                                    <li><a href="#">미주/하와이</a></li>
                                    <li><a href="#">괌/사이판</a></li>
                                </ul>
                            </div>
                        </li>
                        <li><a href="subpage02.html" class="active">호텔예약</a>
                        <div class="submenu">
                            <ul class="clearfix">
                                <li><a href="#">동남아</a></li>
                                <li><a href="#">일본</a></li>
                                <li><a href="#">미주/하와이</a></li>
                                <li><a href="#">괌/사이판</a></li>
                            </ul>
                        </div>
                        </li>
                        <li><a href="subpage03.html">렌트카</a>
                        <div class="submenu">
                            <ul class="clearfix">
                                <li><a href="#">동남아</a></li>
                                <li><a href="#">일본</a></li>
                                <li><a href="#">미주/하와이</a></li>
                                <li><a href="#">괌/사이판</a></li>
                            </ul>
                        </div>
                        </li>
                        <li><a href="subpage04.html">여행TIP</a>
                        <div class="submenu">
                            <ul class="clearfix">
                                <li><a href="#">동남아</a></li>
                                <li><a href="#">일본</a></li>
                                <li><a href="#">미주/하와이</a></li>
                                <li><a href="#">괌/사이판</a></li>
                            </ul>
                        </div>
                        </li>
                        <li><a href="subpage05.html">회사소개</a></li>
                        <li><a href="subpage06.html">커뮤니티</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>