<?php

/*
filter_var()
    원하는 타입을 체크해서 대입시킬 수 있다
*/

//1. STRING
$str = "STRING 테스트입니다";
$str = filter_var($str, FILTER_SANITIZE_STRING);

//2. INT
$int = 100;
$int = filter_var($int, FILTER_VALIDATE_INT);

//3. IP
$ip = "127.0.0.1";
$ip = filter_var($ip, FILTER_VALIDATE_IP);

//4. EMAIL
$email = "john.doe@example.com";
$email = filter_var($email, FILTER_SANITIZE_EMAIL);

//URL
$url = "https://www.w3schools.com";
$url = filter_var($url, FILTER_SANITIZE_URL);
?>