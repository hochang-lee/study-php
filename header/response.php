<?php

/*
header('HTTP/1.1 200 OK');

header("HTTP/1.0 404 Not Found");
    404 페이지를 띄운다
header('HTTP/1.1 403 Forbidden');
    액세스 거부 페이지 띄움
header('HTTP/1.1 500 Internal Server Error');
    500 에러 페이지를 띄운다
header("Status: 404 Not Found");
    헤더 status에 404 표시

*/





/*
header('Content-Type: text/html; charset=iso-8859-1');
header('Content-Type: text/html; charset=utf-8');
header('Content-Type: text/plain'); // plain text file
header('Content-Type: image/jpeg'); // JPG picture
header('Content-Type: application/zip'); // ZIP file, 바로 내려 받아짐
header('Content-Type: application/pdf'); // PDF file, pdf 문서 뷰어로 바로 로드함
header('Content-Type: audio/mpeg'); // Audio MPEG (MP3,...) file, 바로 영상 재생
header('Content-Type: application/x-shockwave-flash'); // Flash animation
header('Content-language: en');
header('Content-Length: 1234');
*/





/*
header('Location: https://naver.com');
    리다이렉트
header('Refresh: 10; url=https://naver.com');
    딜레이 이후 리다이렉트

header('HTTP/1.1 301 Moved Permanently');
    Location을 통해 리다이렉트 후 완전히 이동 됐다는 뜻
*/





/*
$time = time() - 60; // or filemtime($fn), etc
header('Last-Modified: '.gmdate('D, d M Y H:i:s', $time).' GMT');
    리소스 마지막 수정 날짜

header('HTTP/1.1 304 Not Modified');
    리소스 수정 없을 시 헤더 status에 304 리소스 수정 내역 없음
*/

/*
다운로드 헤더
header('Content-Type: application/octet-stream');
header('Content-Disposition: attachment; filename="testImg.png"'); 
header('Content-Transfer-Encoding: binary');
readfile('testImg.png');
    다운 받을 파일을 로드 한다. 로드 하지 않으면 빈 파일로 다운 받아짐
*/

/*
header('HTTP/1.1 401 Unauthorized');
header('WWW-Authenticate: Basic realm="Top Secret"');
    페이지 로그인 박스를 띄운다
*/

/*
header('Cache-Control: no-cache, no-store, max-age=0, must-revalidate');
header('Expires: Mon, 26 Jul 1997 05:00:00 GMT'); // Date in the past
header('Pragma: no-cache');
    캐싱 금지 설정
*/
//header("Content-Security-Policy: default-src 'self'");
 header("Content-Security-Policy: default-src https");
// header("Content-Security-Policy: default-src 'none'");



echo 'okok';
?>