<?php

//class::
//외부에서 상수 접근 방법
// class ConstTest {
//     const MESSAGE = "상수 테스트입니다";
// }
// // 외부에서  클래스 이름으로 해당 클래스의 상수에 접근하기 위해 :: 를 사용한다  
// echo ConstTest::MESSAGE;



//self::
//클래스 내부에서 상수 접근 방법
class ConstTest {
    const MESSAGE = "클래스 내부 상수 테스트입니다";
    public function innerConstTest(){
        echo self::MESSAGE;

    }
} 

$test = new ConstTest();
$test->innerConstTest();


?>