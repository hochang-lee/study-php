<?php

class Human {
    public $name;
    public $power;
    public $height;
    public $weight = "몸무게입니다.";

    //생성자
    //*주의 언더바_ 두개임
    function __construct($name){
        $this->name = $name;
    }

    /*
    소멸자
    객체가 소멸되거나 스크립트가 끝났을 경우 호출
    */
    function __destruct(){
        echo "소멸자 호출";
    }


    //getter 와 setter
    function set_power($power){
        $this->power = $power;
    }

    function get_power(){
        return $this->power;
    }
}

$hochang = new Human('생성자 테스트 이름');
/*
화살표(->)
클래스 내 속성이나 메소드에 접근하기 위해 사용
다른 언어에서는 : class.
PHP :  class->

*주의
화살표 뒤 $ 달러 표시는 하지 않는다
class->$var (X)
class->var (O)


*/

//getter,setter 테스트
$hochang->set_power('ttt');
echo $hochang->get_power();

//클래스 프로퍼티 접근
echo $hochang->weight;

//특정 클래스의 객체인지 확인할 수 있다
var_dump($hochang instanceof Human);

echo $hochang->name;

?>