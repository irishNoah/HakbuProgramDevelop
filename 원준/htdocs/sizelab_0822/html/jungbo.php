<?php 
session_start();
include('db_test.php');
/* 세선 전역변수를 사용할 페이지의 상단부에 배치하면 된다. */
?>
<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="utf-8">
    <meta name="description" content="학부융합프로젝트">
    <meta name="keywords" content="HTML5, CSS, JQUERY">
    <link rel="stylesheet" type="text/css" href="../CSS/Style.css">
    <title>정보 변경 | SizeLab</title>
	<style>
	@media(max-height: 888px) {
  .container{
    height: 100%;
  }
}
</style>
</head>
<body>
  <div class = "container">
	<div class="sizelab-wrapper wrapper-member">
	<h1 class="header__title" style="font-size: 3em;"><a href="../main.php" style="color: black; text-decoration: none">SizeLab</a></h1>
        

	<!-- Member -->
	<div class="n-member-area form-area">
		<form name="joinForm" id="joinForm" action="/member/v2/join/verify" method="post" novalidate>    <!--음 나중에 -->
		   <!-- 추가 수정 필요(어, 고정적인 거 비밀번호는 바꿀 수있는데 아이디랑 이름은 그대로해야대잖아)
			<input type="hidden" name="checkId" value="0">
			<input type="hidden" name="checkPassword" value="0">
			<input type="hidden" name="checkConfirmPassword" value="0">
			<input type="hidden" name="checkEmail" value="0">
			<input type="hidden" name="checkRecommendMemberId" value="0">
			<input type="hidden" name="checkPhoneNumber" value="0">
			<input type="hidden" id="joinToken" name="joinToken" value="d104e9fb1e61ff2ce388850055e8042885add571"/>
			<input type="hidden" name="eventToken" value=""/>
			<input type="hidden" name="snsToken" value=""/>
			<input type="hidden" id="partnerCode" name="partnerCode" value=""/>
			<input type="hidden" name="eventPage" value=""/>
			<input type="hidden" name="eventCode" value=""/>
			<input type="hidden" name="returnUrl" value=""/>
            -->
			<!-- Header -->
			<header>
				<h1 style = "text-align: center">정보 변경</h1>
			</header>
			<br>
			<div>
                        <label for="memberId">아이디 : </label>
                        <?php
						$ID = $_SESSION['ID'];
						echo "$ID"
						?>
                    </div>
                    <br>
                    <div>
                        <label for="nickname">닉네임 : </label>
                        <?php
						$nickname = $_SESSION['nickname'];
						echo "$nickname"
						?>
                    </div>
				<br>
				<div>
					<label for="email">이메일 : </label>
					<?php
					$user_email = $_SESSION['user_email'];
					echo "$user_email"
					?>
				</div>
				<br>
                <!--
				<div> 
					<label for="tel">전화번호 </label>    이메일이랑 전화번호 중에 인증항목에 해당한 것만 남기고 아닌 것은 지우기 
					<div id = "telFromLayer">
						<input type="number" class="n-input2 input" id="tel" name="tel" maxlength="50" placeholder="전화번호 입력" autocomplete="off" value="">
						<p id="telLayeremail"></p>
					</div>
				</div>
				<br>
                -->
				<div>
					<label for="gender">성별 </label>
					<div>
						<p id="genderValidMessage"></p>
						<input type = "radio" name = "gender" checked>남자&emsp;
						<input type = "radio" name = "gender">여자
					</div>
				</div>
			</div>
			<div class="n-member-area form-area">
			<form name="joinForm" id="joinForm" action="/member/v2/join/verify" method="post" novalidate>
			<br><br>
			<!-- Header -->
			<header class="member-header">
					<h1 style = "text-align: center">사이즈 변경</h1>
			</header>
			<br>
			<div class="size_tab"style="width:500px;">
				<font Style="font-weight:bold;">S(90)</font><input type = "radio" name = "size" checked style = "margin: 0 3px 0px 1px"> 
				<font Style="font-weight:bold;">M(95)</font><input type = "radio" name = "size" style = "margin: 0 4px 0px 1px">
				<font Style="font-weight:bold;">L(100)</font><input type = "radio" name = "size" style = "margin: 0 4px 0px 1px">
				<font Style="font-weight:bold;">XL(105)</font><input type = "radio" name = "size" style = "margin: 0 4px 0px 1px">
				<font Style="font-weight:bold;">XXL(110)</font><input type = "radio" name = "size" style = "margin: 0 4px 0px 1px"> 
			</div>
			
			<hr style="border: solid 2px; color:gray;"><br>
			<h1 style = "text-align: center">피부톤 선택</h1><br>
			
			<h2 style = "text-align: center">웜톤 피부</h2><br>
			<img src = "../image/warmton.jpg" width = "350px;" >
			<p class="size_tab"style="width:500px;">
				<input type = "radio" name = "tone" checked style = "margin: 0 50px 0 80px">
				<input type = "radio" name = "tone" style = "margin: 0 50px 0 110px">
				
			</p><br>
			<h2 style = "text-align: center">쿨톤 피부</h2><br>
			<img src = "../image/coolton.jpg" width = "350px;" >
			<p class="size_tab"style="width:500px;">
				<input type = "radio" name = "tone" checked style = "margin: 0 50px 0 80px"> 
				<input type = "radio" name = "tone" style = "margin: 0 50px 0 110px">
			</p>
			
			<br><br>
		</form>
		<div id="joinBtnDiv" class="member-btn">
					<button type="submit" id="joinBtn" class="n-btn btn-md btn-accent">수정하기</button>
		</div>
	</div>
</div>
		</form>
	</div>
    </div>
</div>
</body>
</html>