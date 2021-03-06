<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="description" content="학부융합프로젝트">
    <meta name="keywords" content="HTML5, CSS, JQUERY">
    <link rel="stylesheet" type="text/css" href="../CSS/Style.css"> 
    <title>로그인 | SizeLab</title>
    <style>
    @media(max-height: 705px) {
  .container{
    height: 705px;
  }
}
    </style>
</head>

<body>
    <!-- form 시작 -->
    <form action="login_server.php" method="post">
    <div class = "container">
         <center>
        <div class="sizelab-wrapper wrapper-member devicePC">
            <div class="n-member-area">
            <a href="../main.php" style= "color:black; text-decoration: none">
                <h1 style="font-size: 3em; text-align: center;">SizeLab</h1>
            </a>

                <!-- Header -->
                    <!-- <header class="header2">
                        <div class="header__area">
                            <h1 class="header__title2">로그인</h1>
                        </div>    
                    </header> -->
                    <header>
                        <h1 style = "text-align: center;">로그인</h1>
                    </header>
                <!-- //Header -->

                <h4 style = "text-align: center;">
                    <?php if(isset($_GET['error'])){ ?>
                    <p class="error"><?php echo $_GET['error']; ?></p>
                    <?php } ?>

                    <?php if(isset($_GET['success'])){ ?>
                    <p class="success"><?php echo $_GET['success']; ?></p>
                    <?php } ?>
                </h4>               

                <!-- Login -->
                
                <!--<input type="hidden" id="refererFromLoginPage" name="referer" value="http://www.musinsa.com/index.php?"/>     나중에 수정 필요 -->
                    <input type="text" class="n-input" placeholder="아이디를 입력해 주세요." name="ID">
                    <input type="password" class="n-input" placeholder="비밀번호를 입력해 주세요." name="password">
                    <br><br>
                    <!--<input type="hidden" id="isCheckGoogleRecaptcha" name="isCheckGoogleRecaptcha" value="false"/>나중에 수정 필요 -->
                    <button type="submit" class="n-btn btn-md btn-accent" name="login_btn">로그인</button>
                    <br>
                    <button type="button" class="n-btn btn-md btn-accent" onclick="document.location.href='member.php'">회원가입</button> 
                    
                    <div class="login-help-feature">
                        <div>
                            <br>
                            <input type="checkbox" class="n-check" id="autologin" name="autologin" value="1"> 
                            <label for="autologin" class="ui-toggle-btn" id="tooltipAutoLogin">자동로그인</label> 
                            <p class="n-tooltip">
                            <span class="n-tooltip-arrow arrow-top"></span> 
                            </p>
                        </div>
                        
                        <div class="login-util">
                        <br>
                            <form name="find_idpw" method="POST">
                                <a href="find_idpw.php" style="text-decoration: none"><font color="black">아이디/비밀번호 찾기</font></a>  <!--기능과 페이지 구현 필요 -->
                            </form>
                            <span></span>
                        </div>
                     </div>
                
            </div><!-- //Member -->
        </div><!-- //WRAPPER -->
        </center>
    </div>
    </form>
    <!-- form 끝 -->
</body>
</html>