<?php 
session_start();

/* 세선 전역변수를 사용할 페이지의 상단부에 배치하면 된다. */
?>
<!-- 메인UI 화면 -->
<!DOCTYPE html>
<html>
    <head>
        <title>StyleLab</title>
        <meta charset="utf-8">
	    <meta name="keywords" content="HTML5, CSS, JQUERY">
        
        <!--반응형 웹 영역-->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--반응형 웹 영역-->

        <!--글자폰트 영역-->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Nanum+Gothic+Coding&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Hi+Melody&family=Nanum+Gothic+Coding&family=Sunflower:wght@300&display=swap" rel="stylesheet">
        <!--글자폰트 영역-->

        <!--이모티콘 영역-->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/v4-shims.css">
        <!--이모티콘 영역-->

        <!-- 외부 css연결 -->
        <link rel ="stylesheet" type ="text/css" href ="CSS/main2.css">
        <!-- 외부 css연결 -->
    </head>
    
    <body>
    <!-- 상단 탭 영역 -->
    <div class="primary">
        <!-- 로그인 영역 -->
        <div style ="display: inline-block;">
                <?php
                if(!isset($_SESSION['ID']) || !isset($_SESSION['password'])) {
                    echo "로그인을 해주세요. <a href=\"HTML/login.php\"><i class=\"fas fa-sign-in-alt\"></i>로그인</a>";
                } else {
                    $ID = $_SESSION['ID'];
                    $password = $_SESSION['password'];
                    $nickname = $_SESSION['nickname'];
                    echo "$nickname 님 환영합니다. ";
                    echo "<a href=\"HTML/logout.php\"><i class=\"fas fa-sign-out-alt\"></i>로그아웃</a>";?>
                    <a href="HTML/jjim.php" ><i class="fas fa-heart" style="color: red;"></i>찜</a><!-- 찜UI 영역 -->
                    <a href="HTML/jungbo.php" ><i class="fas fa-id-badge"></i>계정</a><!-- 계정UI 영역 -->
                    <?php 
                }
               ?>
        </div>
        </div>
        <!-- 헤더영역 시작  -->
        <header class="header">
            <span id="logo">
                <div><a href="main.php" style="color: white;">SIZELAB</a></div>
            </span>
            <!-- 검색창 영역-->
            <span class = "box">
                <div class="container-1">
                  <span class="icon"><i class="fa fa-search"></i></span>
                  <input type="search" id="search" placeholder="Search..." style="height:35px;" />
                </div>
            </span>
            <!-- 검색창 영역-->
		</header>
		<!-- 헤더영역 끝 -->
        
        <!-- 콘텐츠 및 섹션 영역 시작 -->
        <div class="content_div">
            <article>
                <header>
                    <div class ="tab_wrapper">
                    <div class="tab_content">
                        <div class ="tab"><a href="main.php">메인</a><!-- 메인UI 영역 -->
                        </div>
                        <div class ="tab"><a href="HTML/knit.php">니트</a><!--니트UI 영역 -->
                        </div>
                        <div class ="tab"><a href="HTML/jacket.php">자켓</a><!--자켓UI 영역 -->
                        </div>
                        <div class ="tab"><a href="HTML/long.php">롱슬리브</a><!--롱슬리브UI 영역 -->
                        </div>
                        <div class ="tab"><a href="HTML/shirt.php">셔츠</a><!--셔츠UI 영역 -->
                        </div>
                        <div class ="tab"><a href="HTML/cadigan.php">가디건</a><!--가디건UI 영역 -->
                        </div>
                        <div class ="tab"><a href="HTML/hoodteeds.php">후드티</a><!--후드티UI 영역 -->
                        </div>
                        <div class ="tab"><a href="HTML/hood_zipup.php">후드집업</a><!--후드집업UI 영역 -->
                        </div>
                        <div class ="tab"><a href="HTML/mantoman.php">맨투맨</a><!--맨투맨UI 영역 -->
                        </div>
                    </div>
                    </div>
                </header>
                <section>
                <div class ="itemtitle">니트</div>
                <div class= "row tm-gallary">
                <div class="tm-gallery-page">
                                <article class="padd max-width">
                                            <a href="https://store.musinsa.com/app/goods/1795720"><img src="Image/aa/%EB%8B%88%ED%8A%B8_%EC%BF%A0%EC%96%B4(%EB%B8%94%EB%9E%99).jpg" width="250px;" height="315px;"></a>
                                            <figcaption>
                                                <b>쿠어</b><br>
                                            니트_블랙
                                            </figcaption>
                                </article>
                                    <article class="padd max-width">
                                            <img src="Image/aa/%EB%8B%88%ED%8A%B8_%EC%BF%A0%EC%96%B4(%EC%9B%9C%EC%83%8C%EB%93%9C).jpg" width="250px;" height="315px;">
                                            <figcaption style="text-align: center">
                                            <b>쿠어</b><br>
                                            니트_웜샌드
                                            </figcaption>
                                </article>
                                    <article class="padd max-width">
                                            <img src="Image/aa/%EB%8B%88%ED%8A%B8_%EC%BF%A0%EC%96%B4(%ED%81%AC%EB%A6%BC%EC%83%89).jpg" width="250px;" height="315px;">
                                            <figcaption>
                                                <b>쿠어</b><br>
                                            니트_크림색
                                            </figcaption>
                                </article>
                                    <article class="padd max-width">
                                            <img src="Image/aa/%EB%B8%8C%EC%9D%B4%EB%84%A5%20%EB%8B%88%ED%8A%B8_%ED%85%8C%EC%9D%B4%ED%81%AC%EC%9D%B4%EC%A7%80(%EA%B7%B8%EB%A0%88%EC%9D%B4).jpg" width="250px;" height="315px;">
                                            <figcaption style="text-align: center">
                                            <b>테이크이지</b><br>
                                                브이넥니트_그레이
                                            </figcaption>
                                </article>
                    </div>
                    </div>
                </section>
                <section>
                        <div class ="itemtitle">자켓</div>
                        <div class= "row tm-gallary">
                            <div class="tm-gallery-page">
                                <article class="padd max-width">
                                        <img src="Image/bb/%EB%AF%B8%EB%8B%88%EB%A9%80%20%EC%9E%90%EC%BC%93_%EB%9D%BC%ED%8D%BC%EC%A7%80%EC%8A%A4%ED%86%A0%EC%96%B4(%EB%B8%94%EB%9E%99).jpg"width="250px;" height="315px;">
                                        <figcaption>
                                            <b>라퍼지스토어</b><br>
                                        미니멀자켓
                                        </figcaption>
                            </article>
                                <article class="padd max-width">
                                        <img src="Image/bb/%EC%8B%B1%EA%B8%80%20%EB%9D%BC%EC%9D%B4%EB%8D%94%20%EC%9E%90%EC%BC%93_%EB%8F%84%ED%94%84%EC%A0%9C%EC%9D%B4%EC%8A%A8.jpg"width="250px;" height="315px;">
                                        <figcaption style="text-align: center">
                                        <b>도프제이슨</b><br>
                                            싱글 라이더 자켓
                                        </figcaption>
                            </article>
                                <article class="padd max-width">
                                        <img src="Image/bb/%ED%95%AD%EA%B3%B5%EC%A0%90%ED%8D%BC_%EC%95%8C%ED%8C%8C%EC%9D%B8%EB%8D%94%EC%8A%A4%ED%8A%B8%EB%A6%AC(%EB%B8%94%EB%9E%99).jpg"width="250px;" height="315px;">
                                        <figcaption>
                                            <b>알파인더스트리</b><br>
                                        항공점퍼
                                        </figcaption>
                            </article>
                                <article class="padd max-width">
                                        <img src="Image/bb/%ED%8A%B8%EB%9F%AC%EC%BB%A4%20%ED%9D%91%EC%B2%AD%EC%9E%90%EC%BC%93_%EB%AA%A8%EB%93%9C%EB%82%98%EC%9D%B8.jpg"width="250px;" height="315px;">
                                        <figcaption style="text-align: center">
                                        <b>모드나인</b><br>
                                            트러커 흑청자켓
                                        </figcaption>
                            </article>
                            </div>
                        </div>
                    </section>
                    <section>
                        <div class ="itemtitle">반팔티</div>
                        <div class= "row tm-gallary">
                            <div class="tm-gallery-page">
                                <article class="padd max-width">
                                        <img src="Image/cc/3.JPG" width="250px" height="315px;" >
                                        <figcaption><b>??</b><br>
                                        ??
                                        </figcaption>
                                </article>
                                    <article class="padd max-width">
                                            <img src="Image/cc/4.JPG" width="250px" height="315px;">
                                            <figcaption style="text-align: center">
                                            <b>??</b><br>
                                                ??
                                            </figcaption>
                                </article>
                                    <article class="padd max-width">
                                            <img src="Image/cc/10.JPG" width="250px" height="315px;">
                                            <figcaption><b>??</b><br>
                                            ??
                                            </figcaption>
                                </article>
                                    <article class="padd max-width">
                                            <img src="Image/cc/9.JPG" width="250px" height="315px;" >
                                            <figcaption style="text-align: center">
                                            <b>??</b><br>
                                                ??
                                            </figcaption>
                                </article>
                            </div>
                        </div> 
                    </section>
        </article>
        </div>
        <!-- 콘텐츠 및 섹션 영역 끝 -->
        
        <!-- 푸터 영역 시작 -->
        <div class="footer">
            <footer>
                <b>
                    <font color="white">footer 태그: 사이트의 제작자, 주소, 저작권 정보등을 주로표시</font>
                </b>
                <details>
                    <!-- summary태그는 크롬 브라우저에서 작동한다. 익스플로러 브라우저에서는 작동 안됨 -->
                    <summary style="color: white;">
                        <font color="white">Copyright</font>
                    </summary>
                    <p>
                        <font color="white">이 홈페이지의 저작권은 박창영(교회오빠) 에게~~</font>
                    </p>
                </details>
            </footer>
        </div>
        <!-- 푸터 영역 끝 -->
    </body>

    
</html>