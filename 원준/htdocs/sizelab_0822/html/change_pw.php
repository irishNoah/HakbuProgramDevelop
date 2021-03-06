<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="description" content="학부융합프로젝트">
    <meta name="keywords" content="HTML5, CSS, JQUERY">
    <link rel="stylesheet" type="text/css" href="../CSS/Style.css"> 
    <title>비밀번호 변경 | SizeLab</title>
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
       
        <div class="sizelab-wrapper wrapper-member devicePC">
            <div class="n-member-area">
            <a href="../main.php" style= "color:black; text-decoration: none">
                <h1 style="font-size: 3em; text-align: center;">SizeLab</h1>
            </a>

               <br>

                <form name='change_pw_server.php' method="POST">
                    <!-- <label>
                    <p>비밀번호 입력<input type='text' class="n-input" name='user_phone'  placeholder='비밀번호(숫자,영문,특수문자 조합 최소8자)' ></p><br>
                    <p>비밀번호 재입력 <input type='text' class="n-input" name='user_email' placeholder='비밀번호(숫자,영문,특수문자 조합 최소8자)'></p>
                    </label>     -->

                    <div>
                        <label>아이디 입력 </label>
                        <div>
                            <input type="text" class="n-input2" placeholder="아이디" name="ID">
                        </div>
                    </div>
                    <br>
                    <div>
                        <label>비밀번호 입력 </label>
                        <div>
                            <input type="password" class="n-input2" placeholder="비밀번호(숫자,영문,특수문자 조합 최소8자)" name="password_new">
                        </div>
                    </div>
                    <br>
                    <div>
                        <label>비밀번호 재입력 </label>
                        <div>
                            <input type="password" class="n-input2" placeholder="비밀번호(숫자,영문,특수문자 조합 최소8자)" name="password_new_CK">
                        </div>
                    </div>
                    <br>
                    <!-- <input type="submit" class="n-btn btn-md btn-accent" value="비밀번호 변경" onclick="javascript:form.action='change_pw_server.php';"> -->
                    <input type="submit" class="n-btn btn-md btn-accent" value="비밀번호 변경" onclick="javascript:form.action='change_pw_server.php';">
                </form>
        </div><!-- //WRAPPER -->
        
    </div>
    </form>
    <!-- form 끝 -->
</body>
</html>