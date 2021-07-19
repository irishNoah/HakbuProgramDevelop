<?php
$db = mysqli_connect('localhost','root','1234','sizelab_db');
// $db = mysqli_connect('localhost','root','1234','level1') or die('DB 접속 실패'); //에러 테스트 용

if($db){//접속 성공 시
    echo "DB 접속 성공"; //echo는 print 명령어
    echo '<br>';
}

else {//접속 실패 시
    echo "DB 접속 실패"; //echo는 print 명령어
    echo '<br>';
}

?>