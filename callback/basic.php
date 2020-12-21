<?php

/*
콜백 함수 기본 사용법

*/


//콜백함수
function word($str){
    echo $str;
}

//콜백 함수는 변수 형태로 받는다
function speaker($word){
    $word("사회자가 말을 합니다");
}

//콜백함수의 메소드명을 인자 값으로 넘겨준다
speaker("word");

?>