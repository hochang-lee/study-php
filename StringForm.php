<?php

/*
printf()를 통해 텍스트 형식화 출력

*/
$zip = '6520';
$month = '2';
$day = '6';
$year = '2020';

//숫자
printf('우편번호는 %05d이고 날짜는 %02d/%02d/%d',$zip,$month,$day,$year);
//  우편번호는 06520이고 날짜는 02/06/2020

echo '</br>';

//+ - 기호
$min = -40;
$max = 40;
printf("섭씨 최소 %+d, 최대 %+d",$min,$max);

echo '</br>';

//대소문자 변경
print strtolower('A, b, C, d');
echo '</br>';
print strtoupper('A, b, C, d');

echo '</br>';
//첫 글자만 대문자로 변경
print ucwords('lee ho chang');
//Lee Ho Chang

//문자열 자르기
echo '</br>';
print substr('1234567890abcdefghi',0,5);

echo '</br>';

//문자열 교체
$str = 'hello world!';
print str_replace('o','*',$str);
//hell* w*rld!
?>