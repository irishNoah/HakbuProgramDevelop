<!-- 회원가입 화면 -->
<!-- <?php
include('db_test.php');
?> -->


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="description" content="학부융합프로젝트">
    <meta name="keywords" content="HTML5, CSS, JQUERY">
    <link rel="stylesheet" type="text/css" href="../CSS/Style.css">
    <title>회원가입 | SizeLab</title>
    <style>
    @media(max-height: 1000px) {
  .container{
    height: 100%;
  }
}
    </style>
</head>

<body>
	<!-- form 시작 -->
    <!-- 실제 서버와 연동 -->
    <!-- 보안 전송을 위해 post를 이용 -->
	<form action="member_server.php" method="post"> 
	<div class = "container">
		<div class="sizelab-wrapper wrapper-member"> 
				<a href="../main.html" style= "color:black; text-decoration: none; text-align: center;">
				<h1 class="header__title" style="font-size: 3em">SizeLab</h1>
				</a>

		<!-- Member -->
		<div class="n-member-area form-area">			
				<!-- Header -->
				<header>
					<h2 style = "text-align: center">회원가입</h2>
				</header>

				<!-- 회원가입이나 로그인 등 어떤 정보는 기재하고, 어떤 정보는 그렇지 않을 경우
				기재한 정보에 대해서는 실수로 저장 버튼 등을 눌러도 사라지지 않고 남아있게 한다.
				-->
				<?php if(isset($_GET['error'])){ ?>
				<p class="error"><?php echo $_GET['error']; ?></p>
				<?php } ?>

				<?php if(isset($_GET['success'])){ ?>
				<p class="error"><?php echo $_GET['success']; ?></p>
				<?php } ?>
				<br>

				<div>					
					<div>
						<label>아이디 </label><br>					
						<!-- <input type="text" class="n-input2" id="memberId" name="memberId" placeholder="아이디 입력(5~11자)" minlength="5" maxlength="11"> -->
						
						<input type="text" class="n-input2" placeholder="아이디 입력(5~11자)" name="ID">
						<!-- <p id="hLayerid"></p> -->						
					</div>
					<br>
					<div>
						<label>아이디 재입력</label> <!-- 아이디 중복 확인 전 test -->
						<div>				
							<input type="password" class="n-input2" placeholder="아이디 재입력" name="ID_CK">	
							
							<!-- <button type="button" class="btn" onclick="togglePassword('password', this);" >
								<i>아이디 중복 확인</i>
							</button> -->

							<!--<button type="submit" class="btn" name="ID_CK">
								아이디 중복 확인
							</button> -->
						</div>
					</div>
					<br>
					<div>
						<label>비밀번호 </label>
						<div>
							<!-- <input type="password" class="n-input2 input" id="password" name="password" minlength="8" autocomplete="new-password" placeholder="비밀번호(숫자,영문,특수문자 조합 최소8자)"> -->							

							<input type="text" class="n-input2" placeholder="비밀번호(숫자,영문,특수문자 조합 최소8자)" name="password">

							<!-- <p id="passwordValidMessage"></p> -->
						</div>
					</div>
					<br>
					<div>
						<label>비밀번호 다시 입력 </label>
						<div>
							<!-- <input type="password" class="n-input2 input" id="dasi-password" name="dasi-password" minlength="8" autocomplete="dasi-new-password" placeholder="비밀번호(숫자,영문,특수문자 조합 최소8자)"> -->							

							<input type="password" class="n-input2" placeholder="비밀번호(숫자,영문,특수문자 조합 최소8자)" name="password_CK">
								
							<!-- <p id="dasi-passwordValidMessage"></p> -->
						</div>
					</div>
					<br>
					<div>
						<label>닉네임 </label>
						<div>
							<!-- <input type="text" class="n-input2 input" id="nickname" name="nickname" minlength="8" placeholder="닉네임 입력" > -->							

							<input type="text" class="n-input2" placeholder="닉네임 입력" name="nickname">

							<!-- <p id="nicknameValidMessage"></p> -->


							<!-- <button type="button" class="btn" onclick="togglePassword('password', this);" >
								<i>닉네임 중복 확인</i>
							</button> -->

							<!-- <button type="submit" class="btn" name="nickname_CK">
								닉네임 중복 확인
							</button> -->
						</div>
					</div>
					<br>
					<div>
						<label>닉네임 다시 입력</label> <!-- 닉네임 중복 확인 전 test -->
						<div>											
							<input type="password" class="n-input2" placeholder="닉네임 재입력" name="nickname_CK">
						</div>
					</div>
					<br>
					<div>
						<label>이름 </label>
						<div>
							<!-- <input type="text" class="n-input2 input" id="name" name="name" minlength="8" placeholder="이름 입력" > -->
							<?php if(isset($_GET['user_name'])){ ?>
							<input type="text" class="n-input2" placeholder="이름 입력" name="user_name" value="<?php echo $_GET['user_name']; ?>">
							<?php } else{ ?>
							<input type="text" class="n-input2" placeholder="이름 입력" name="user_name">
							<?php } ?>

							<!-- <p id="nameValidMessage"></p> -->

							<!-- <button type="button" class="btn" onclick="togglePassword('password', this);" >
							</button> -->
						</div>
					</div>
					<div>
						<label>이메일 </label>
						<div id = "emailFromLayer">
							<!-- <input type="email" class="n-input2 input" id="email" name="email" maxlength="50" placeholder="이메일 입력" autocomplete="off" value=""> -->
							<?php if(isset($_GET['user_email'])){ ?>
							<input type="text" class="n-input2" placeholder="이메일 입력" name="user_email" value="<?php echo $_GET['user_email']; ?>">
							<?php } else{ ?>
							<input type="text" class="n-input2" placeholder="이메일 입력" name="user_email">
							<?php } ?>

							<!-- <p id="hLayeremail"></p> -->
						</div>
					</div>
					<br>
					<div>
						<label>전화번호 </label>
						<div id = "telFromLayer">
							<!-- <input type="number" class="n-input2 input" id="tel" name="tel" maxlength="50" placeholder="전화번호 입력" autocomplete="off" value=""> -->
							<?php if(isset($_GET['user_phone'])){ ?>
							<input type="text" class="n-input2" placeholder="전화번호 입력" name="user_phone" value="<?php echo $_GET['user_phone']; ?>">
							<?php } else{ ?>
							<input type="text" class="n-input2" placeholder="전화번호 입력" name="user_phone">
							<?php } ?>

							<!-- <p id="telLayeremail"></p> -->
						</div>
					</div>
					<!-- <br>
					<div>
						<label>성별 </label>
						<div>
							<p id="genderValidMessage"></p>
							<input type = "radio" name = "gender" checked>남자&emsp;
							<input type = "radio" name = "gender">여자
						</div>
					</div> -->
					<br>					
					<div>
						<label>성별(M / F) </label>
						<div id = "gender">							
							<?php if(isset($_GET['gender'])){ ?>
							<input type="text" class="n-input2" placeholder="성별 입력" name="gender" value="<?php echo $_GET['gender']; ?>">
							<?php } else{ ?>
							<input type="text" class="n-input2" placeholder="성별 입력" name="gender">
							<?php } ?>					
						</div>
					</div>
				</div>
				<br>
				<div id="joinBtnDiv" class="member-btn">
						<button type="submit" id="joinBtn" class="n-btn btn-md btn-accent" name="save">저장</button>
				</div>			
		</div>
		</div>
	</div>
	</form>
</body>
</html>