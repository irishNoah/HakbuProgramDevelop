<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="utf-8">
    <meta name="description" content="학부융합프로젝트">
    <meta name="keywords" content="HTML5, CSS, JQUERY">
    <link rel="stylesheet" type="text/css" href="../CSS/Style.css">
    <title>수치 입력 | SizeLab</title>
	<style>
	@media(max-height: 1400px) {
  .container{
    height: 100%;
  }
}
</style>
</head>

<body>
  <div class = "container">
	<div class="sizelab-wrapper wrapper-member">
	 <a href="../Main.php" style= "color:black; text-decoration: none; text-align: center;">
            <h1 class="header__title" style="font-size: 3em">SizeLab</h1>
            </a>

	<!-- Member -->
	<div class="n-member-area form-area">
		<form name="joinForm" id="joinForm" action="/member/v2/join/verify" method="post" novalidate>
		
			<!-- Header -->
			<header class="member-header">
					<h1 style = "text-align: center">사이즈 입력</h1>
			</header>
			<br>
			<div>
				<br><br><br>
				<font Style="font-weight:bold;">S(90)</font><input type = "radio" name = "size" checked style = "margin: 0 5px 0px 2px"> 
				<font Style="font-weight:bold;">M(95)</font><input type = "radio" name = "size" style = "margin: 0 5px 0px 2px">
				<font Style="font-weight:bold;">L(100)</font><input type = "radio" name = "size" style = "margin: 0 5px 0px 2px">
				<font Style="font-weight:bold;">XL(105)</font><input type = "radio" name = "size" style = "margin: 0 5px 0px 2px">
				<font Style="font-weight:bold;">XXL(110)</font><input type = "radio" name = "size" style = "margin: 0 5px 0px 2px"> 
			</div>
			
			<hr style="border: solid 2px; color:gray;"><br>
			<h1 style = "text-align: center">피부톤 선택</h1><br>
			
			<h2 style = "text-align: center">웜톤 피부</h2><br>
			<img src = "../image/warmton.png" width = "350px;" >
			<p>
				<input type = "radio" name = "tone" checked style = "margin: 0 50px 0 50px">
				<input type = "radio" name = "tone" style = "margin: 0 50px 0 50px">
				<input type = "radio" name = "tone" style = "margin: 0 50px 0 50px">
			</p><br>
			<h2 style = "text-align: center">쿨톤 피부</h2><br>
			<img src = "../image/coolton.png" width = "350px;" >
			<p>
				<input type = "radio" name = "tone" checked style = "margin: 0 50px 0 50px"> 
				<input type = "radio" name = "tone" style = "margin: 0 50px 0 50px">
				<input type = "radio" name = "tone" style = "margin: 0 50px 0 50px">
			</p>
			
			<br><br>
			<div id="joinBtnDiv" class="member-btn">
					<button type="submit" id="joinBtn" class="n-btn btn-accent">수정하기</button>
			</div>
		</form>
	</div>
    </div>
</div>
</body>
</html>