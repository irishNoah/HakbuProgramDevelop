<?php 
session_start();
/* 세선 전역변수를 사용할 페이지의 상단부에 배치하면 된다. */
?>

<!--후드집업 UI화면 -->
<!DOCTYPE html>
<html>
    <head>
        <title>StyleLab Test</title>
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
        <link rel ="stylesheet" type ="text/css" href ="../CSS/main2.css">
        <!-- 외부 css연결 -->
    </head>
    
    <body>
    <!-- 상단 탭 영역 -->
    <div class="primary">
        <!-- 로그인 영역 -->
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
        <!-- 로그인 영역 -->
                <a href="jjim.php" ><i class="fas fa-heart" style="color: red;"></i>찜</a><!-- 찜UI 영역 -->
                <a href="jungbo.php" ><i class="fas fa-id-badge"></i>계정</a><!-- 계정UI 영역 -->
        </div>
        <!-- 헤더영역 시작  -->
        <header class="header">
            <span id="logo">
                <div><a href="../main.php" style="color: white;">SIZELAB</a></div>
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
                    <div class ="tab"><a href="../main.php">메인</a><!-- 메인UI 영역 -->
                        </div>
                        <div class ="tab"><a href="knit.php">니트</a><!--니트UI 영역 -->
                        </div>
                        <div class ="tab"><a href="jacket.php">자켓</a><!--자켓UI 영역 -->
                        </div>
                        <div class ="tab"><a href="long.php">롱슬리브</a><!--롱슬리브UI 영역 -->
                        </div>
                        <div class ="tab"><a href="shirt.php">셔츠</a><!--셔츠UI 영역 -->
                        </div>
                        <div class ="tab"><a href="cadigan.php">가디건</a><!--가디건UI 영역 -->
                        </div>
                        <div class ="tab"><a href="hoodteeds.php">후드티</a><!--후드티UI 영역 -->
                        </div>
                        <div class ="tab"><a href="hood_zipup.php">후드집업</a><!--후드집업UI 영역 -->
                        </div>
                        <div class ="tab"><a href="mantoman.php">맨투맨</a><!--맨투맨UI 영역 -->
                        </div>
                        <!-- 후드집업 페이지 영역 -->
                        <div style ="font-weight:bold; font-size:25px;font-family: 'Hi Melody', cursive;">후드집업</div>
                            <section>
                                <div>사진 영역입니다.</div>
                            <section>
                        <!-- 후드집업 페이지 영역 -->
                        
                        
                    </div>
                    </div>
                </header>
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