<?php
/* 세선 전역변수를 사용시 session_start();를 상단부에 배치하면 된다. */
session_start(); 
include('db_test.php'); 

if(isset($_POST['ID']) && isset($_POST['password'])){
    // 보안을 더욱 강화(secure 코딩, 보안 코딩)
    //남이 함부로 sql을 변경할 수 없도록 
    $ID = mysqli_real_escape_string($db, $_POST['ID']);  
    $password = mysqli_real_escape_string($db, $_POST['password']);


    // 에러를 체크
    if(empty($ID)){//ID 대한 에러 체크
         /*
        location: login_view.php?error=비밀번호가 비어있습니다"에서
        location:은 절대 띄어쓰기 하면 안 됨(예 > location : > 바로 에러 나타남)
        */
        header("location: login.php?error=아이디가 비어있습니다");
        exit();
    }
    else if(empty($password)){//pass1에 대한 에러 체크        
        header("location: login.php?error=비밀번호가 비어있습니다");
        exit();
    }
    else {//로그인 시키는 코딩
        $sql = "select * from member where ID = '$ID'";
        $result = mysqli_query($db, $sql);

        if(mysqli_num_rows($result) == 1){// == 으로 해도 실행이 됨
            /* 
            1. 해당열을 가져왔다.
            2. 가져올 때 배열의 형태로 가져온다.
            3. print_r()은 배열을 출력해주는 함수이다.
            4. echo는 쪼개서 가져올 수 있다.
            */

            $row = mysqli_fetch_assoc($result); //db에 저장되어 있는 id와 일치하다면 실행시킴
            $hash = $row['password']; //DB에 있는 암호화되어 있는 password 값을 대입

       
            if(password_verify($password, $hash)){//정상적으로 로그인 됐다면 메인페이지로 이동하게 해야 함
                $_SESSION['ID'] = $row['ID'];
                $_SESSION['nickname'] = $row['nickname'];
                $_SESSION['password'] = $row['password'];
                $_SESSION['user_email'] = $row['user_email'];
                
                header("location: ../main.php");
                exit();
                // echo "welcome our site";
            }
            else{
                header("location: login.php?error=로그인에 실패하였습니다.");
                exit();
            }
        }
        else{
            //에러
            header("location: login.php?error=아이디를 잘못 입력하셨습니다.");
            exit();
        }
    }
}

else{
    // 에러 메시지
    header("location: login.php?error=알 수 없는 오류가 발생하였습니다.");
    exit();
}

?>