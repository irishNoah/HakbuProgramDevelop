<?php 
session_start();

/* 세선 전역변수를 사용할 페이지의 상단부에 배치하면 된다. */
?>
<!doctype html>
<html>
    <head>
        <title>StyleLab_list</title>
        <meta charset="utf-8">
        <meta name="keywords" content="HTML5, CSS, JQUERY">
        
        <!--반응형 웹-->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <!--글자폰트-->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Nanum+Gothic+Coding&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Hi+Melody&family=Nanum+Gothic+Coding&family=Sunflower:wght@300&display=swap" rel="stylesheet">

        <!--이모티콘-->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/v4-shims.css">
        
        <link rel ="stylesheet" type ="text/css" href = "../CSS/jjim.css">
    </head>
    
    <body>
    <div class="primary">
        <div style ="display: inline-block;">
                <?php
                if(!isset($_SESSION['ID']) || !isset($_SESSION['password'])) {
                    echo "로그인을 해주세요. <a href=\"login.php\"><i class=\"fas fa-sign-in-alt\"></i>로그인</a>";
                } else {
                    $ID = $_SESSION['ID'];
                    $password = $_SESSION['password'];
                    $nickname = $_SESSION['nickname'];
                    echo "$nickname 님 환영합니다. ";
                    echo "<a href=\"logout.php\"><i class=\"fas fa-sign-out-alt\"></i>로그아웃</a>";
                }
               ?>
        </div>
                <a href="jjim.php" ><i class="fas fa-heart" style="color: red;"></i>찜</a>
                <a href="jungbo.php" ><i class="fas fa-id-badge"></i>계정</a>
        </div>
        <!-- 헤더영역 시작  -->
        <header class="header">
            <span id="logo">
                <div><a href="../main.php" style="color: white;">SIZELAB</a></div>
            </span>
            <span class = "box">
                <div class="container-1">
                  <span class="icon"><i class="fa fa-search"></i></span>
                  <input type="search" id="search" placeholder="Search..." />
                </div>
            </span>
        </header>
        <!-- 헤더영역 끝 -->
        
        <!-- 콘텐츠 및 섹션 영역 시작 -->
        <div class="content_div">
            <article>
                <header class= "list_header">
                    <div style="width: 1200px; height:8%; padding-top:50px; background-color: white;">
                        <div style="text-align: center;font-size:30px;font-weight: bold;"><i class="fas fa-heart" style="color: red;"></i>찜 목록</div>
                        <div style=""></div>
                    </div>
                </header>
                <section>
                    <div style="width: 1200px; background-color: white;"class= "row tm-gallary">
                        <div class="tm-gallery-page">
							<article class="padd max-width">
									<a href="https://store.musinsa.com/app/goods/747941/0">
                                    <img width="250px;" height="315px;" src="../image/7.jpg">
									</a>
                                    <figcaption style="text-align: center">
                                    <b>Mmlg</b><br>
									1987MMLG HF-T(BLACK)
                                    </figcaption>
					       </article>
							 <article class="padd max-width">
									<a href="https://store.musinsa.com/app/goods/411209">
                                    <img width="250px;" height="315px;" src="../image/hangong.jpg">
									</a>
                                    <figcaption style="text-align: center">
                                    <b>알파 인더스트리</b><br>
									MA-1 레귤러 Black
                                    </figcaption>
					       </article>
						    <article class="padd max-width">
									<a href="https://store.musinsa.com/app/goods/1824608">
                                    <img width="250px;" height="315px;" src="../image/9.jpg">
									</a>
                                    <figcaption style="text-align: center">
                                    <b>예스아이씨</b><br>
									Y.E.S C-logo tee White
                                    </figcaption>
					       </article>
                            <article class="padd max-width">
                                    <img width="250px;" height="315px;" src="../image/21.jpg">
									 <figcaption style="text-align: center">
                                     <b>아보키</b><br>
									 코브넷 BLACK
                                    </figcaption>
					       </article>
                            <article class="padd max-width">
                                    <img width="250px;" height="315px;" src="../image/22.jpg">
                                     <figcaption style="text-align: center">
                                     <b>아이스타케이</b><br>
									 제네레이션 BLACK
                                    </figcaption>
					       </article>
                            <article class="padd max-width">
                                    <img width="250px;" height="315px;" src="../image/23.jpg">
                                    <figcaption style="text-align: center">
                                    <b>룩핀</b><br>
									Christ tee BLUE
                                    </figcaption>
					       </article>
                            <article class="padd max-width">
                                    <img width="250px;" height="315px;" src="../image/24.jpg">
                                     <figcaption style="text-align: center">
                                    <b>예스아이씨</b><br>
									Y.E.S C-logo tee BLUE
                                    </figcaption>
					       </article>
						    <article class="padd max-width">
                                    <img width="250px;" height="315px;" src="../image/3.jpg">
                                     <figcaption style="text-align: center">
                                     <b>이벳필드</b><br>
									 EFF 베츠 반팔 티셔츠 블루
                                    </figcaption>
					       </article>
						    <article class="padd max-width">
                                    <img width="250px;" height="315px;" src="../image/4.jpg">
                                    <figcaption style="text-align: center">
                                    <b>THISISNEVERTHAT</b><br>
									T-Logo Tee Black (003)
                                    </figcaption>
					       </article>
						    <article class="padd max-width">
									<a href="https://store.musinsa.com/app/goods/1845608">
                                    <img width="250px;" height="315px;" src="../image/6.jpg">
									</a>
                                     <figcaption style="text-align: center">
                                     <b>MARK GONZALES</b><br>
									슈무 아치로고 반팔 티셔츠 화이트
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
                        <font color="white">이 홈페이지의 저작권은 박창영 에게~~</font>
                    </p>
                </details>
            </footer>
        </div>
        <!-- 푸터 영역 끝 -->
    </body>

    
</html>