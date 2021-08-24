<?php
 #DB connect
   include("db_test.php");
   $user_phone = $_POST['user_phone'];
   $user_email = $_POST['user_email'];

   $query ="SELECT ID FROM member WHERE user_phone ='$user_phone' and user_email='$user_email'";
   $res = mysqli_query($db, $query);
   $num = mysqli_num_rows($res);
   if($num == 0 )
   {
     echo "<script>alert('가입된 ID가 존재하지 않습니다.')</script>";
     mysqli_close($db);
     echo "<meta http-equiv='refresh' content='0;url=find_idpw.php'>";
   }
   else if($num ==1)
   {
      $arr = mysqli_fetch_array($res);
      mysqli_close($db);
      echo "<script>alert('회원님의 ID는 : $arr[0]입니다.')</script>";
      echo "<meta http-equiv='refresh' content='0;url=login.php'>";
   }
   else
   {
     echo "<script>alert('Fatal ERROR.... ask ADMIN');history.back();";
     mysqli_close($db);
   }

  ?>