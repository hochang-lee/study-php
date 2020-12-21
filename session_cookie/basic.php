<?php
/*
문법 
    setcookie(name, value, expire, path, domain, secure, httponly);
*/

//1. 쿠키
// $cookie_name = "cookie_key";
// $cookie_value = "쿠키 값 테스트입니다";
// '/' 로 설정하면 웹사이트 전체에서 사용 가능
// setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day


// if(!isset($_COOKIE[$cookie_name])) {
//     echo "쿠키가 빈 값입니다";
//   } else {
//     echo "Cookie '" . $cookie_name . "' is set!<br>";
//     echo "Value is: " . $_COOKIE[$cookie_name];
//   }

// //쿠키 삭제
// setcookie($cookie_name, "", time() - 3600,"/");

// if(!isset($_COOKIE[$cookie_name])) {
//     echo "쿠키가 빈 값입니다";
//   } else {
//     echo "Cookie '" . $cookie_name . "' is set!<br>";
//     echo "Value is: " . $_COOKIE[$cookie_name];
//   }



//2. 세션
//세션 시작
session_start();

//세션 값 대입
$_SESSION['test'] = '테스트입니다';
echo $_SESSION['test'];

//세션에 있는 모든 변수 삭제
session_unset();

//세션 종료
session_destroy();
?>