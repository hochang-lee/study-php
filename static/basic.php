<?php

/*
static
    객체를 생성하지 않고 Class::method or Class:property 로 바로 접근할 수 있다. 

*/


//1. 외부에서 static 메소드 접근하는 방법
// class StaticClass{
//     public static function staticMethod(){
//         echo "static 메소드입니다.";
//     }
// }
// StaticClass::staticMethod();


//2. 내부에서 static 메소드 접근하는 방법
// class StaticClass{
//     public static function staticMethod(){
//         echo "static 메소드입니다.";
//     }
//     public function __construct(){
//          //내부에서 static 접근시 self:: 키워드 사용
//         self::staticMethod();
//     }
// }
// new StaticClass();


//3. 다른 클래스에서 호출
// class StaticClass{
//     public static function staticMethod(){
//         echo "static 메소드입니다.";
//     }
// }

// class OtherClass {
//     public function message(){
//         StaticClass::staticMethod();
//     }
// }

// $otherClass = new OtherClass();
// $otherClass->message();


//4. 프로퍼티
class StaticClass{
    public static $name="lee";

    public function message(){
       echo self::$name;
    }
}


class Child extends StaticClass{
    //부모 클래스의 static 접근 시 parent:: 키워드 사용
    public function message(){
        echo parent::$name;
    }
}

echo StaticClass::$name;
StaticClass::message();

$child = new Child();
$child->message();
?>