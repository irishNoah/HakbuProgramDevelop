<!docctype html>
<html>
    <head>
        <title>StyleLab Test</title>
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
        
        <link rel ="stylesheet" type ="text/css" href ="CSS/main.css">
    </head>
    
    <body>
        <div class="primary">
            <div>
                <a href="HTML/Login.html"><i class="fas fa-sign-in-alt"></i>로그인</a>
                <a href="" ><i class="fas fa-sign-out-alt"></i>로그아웃</a>
                <a href="HTML/jjim.html" ><i class="fas fa-heart" style="color: red;"></i>찜</a>
                <a href="HTML/size.html" ><i class="fas fa-user-cog"></i>사이즈</a>
                <a href="HTML/jungbo.html" ><i class="fas fa-id-badge"></i>계정</a>
            </div>
        </div>
        <!-- 헤더영역 시작  -->
        <header class="header">
            <span id="logo">
                <div><a href="main.html" style="color: white;">SIZELAB</a></div>
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
                <header>
                    <div class ="tab_wrapper">
                    <div class="tab_content">
                        <input type ="radio" name ="tabmenue" id="tab01"checked>
                        <label for ="tab01"><h3 style="color:red;">추천</h3></label>
                        <input type ="radio" name ="tabmenue" id="tab02">
                        <label for ="tab02"><h3>니트</h3></label>
                        <input type ="radio" name ="tabmenue" id="tab03">
                        <label for ="tab03"><h3>자켓</h3></label>
                        <input type ="radio" name ="tabmenue" id="tab04">
                        <label for ="tab04"><h3>롱슬리브</h3></label>
                        <input type ="radio" name ="tabmenue" id="tab05">
                        <label for ="tab05"><h3>셔츠</h3></label>
                        <input type ="radio" name ="tabmenue" id="tab06">
                        <label for ="tab06"><h3>가디건 </h3></label>
                        <input type ="radio" name ="tabmenue" id="tab07">
                        <label for ="tab07"><h3>후드티 </h3></label>
                        <input type ="radio" name ="tabmenue" id="tab08">
                        <label for ="tab08"><h3>후드집업</h3></label>
                        <input type ="radio" name ="tabmenue" id="tab09">
                        <label for ="tab09"><h3>맨투맨</h3></label>
                        
                        <div class="conbox con1">
                           <section>
                    <div class ="itemtitle">니트</div>
                    <div style="width: 1200px;background-color: white;"class= "row tm-gallary">
                        <div class="tm-gallery-page">
                            <article class="padd max-width">
                                    <a href="https://store.musinsa.com/app/goods/1795720"><img src="Image/aa/%EB%8B%88%ED%8A%B8_%EC%BF%A0%EC%96%B4(%EB%B8%94%EB%9E%99).jpg"; width="250px;" height="315px;"></a>
                                    <figcaption>
                                        <b>쿠어</b><br>
                                       니트_블랙
                                    </figcaption>
					       </article>
                            <article class="padd max-width">
                                    <img src="Image/aa/%EB%8B%88%ED%8A%B8_%EC%BF%A0%EC%96%B4(%EC%9B%9C%EC%83%8C%EB%93%9C).jpg";width="250px;" height="315px;">
                                    <figcaption style="text-align: center">
                                       <b>쿠어</b><br>
                                        니트_웜샌드
                                    </figcaption>
					       </article>
                            <article class="padd max-width">
                                    <img src="Image/aa/%EB%8B%88%ED%8A%B8_%EC%BF%A0%EC%96%B4(%ED%81%AC%EB%A6%BC%EC%83%89).jpg";width="250px;" height="315px;">
                                    <figcaption>
                                        <b>쿠어</b><br>
                                       니트_크림색
                                    </figcaption>
					       </article>
                            <article class="padd max-width">
                                    <img src="Image/aa/%EB%B8%8C%EC%9D%B4%EB%84%A5%20%EB%8B%88%ED%8A%B8_%ED%85%8C%EC%9D%B4%ED%81%AC%EC%9D%B4%EC%A7%80(%EA%B7%B8%EB%A0%88%EC%9D%B4).jpg";width="250px;" height="315px;">
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
                    <div style="width: 1200px;background-color: white;"class= "row tm-gallary">
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
                    <div style="width: 1200px;background-color: white;"class= "row tm-gallary">
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
                        
                        
                        
                        </div>
                            
                        <div class="conbox con2">니트 페이지입니다.</div>
                        
                        <div class="conbox con3">자켓 페이지입니다. </div>
                        
                        <div class="conbox con4">롱슬리브 페이지입니다.</div>
                        
                        <div class="conbox con5">셔츠 페이지입니다. </div>
                        
                        <div class="conbox con6">가디건 페이지입니다.</div>
                        
                        <div class="conbox con7">후드티 페이지입니다.</div>
                        
                        <div class="conbox con8">후드집업 페이지입니다.</div>
                        
                        <div class="conbox con9">맨투맨 페이지입니다.</div>
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