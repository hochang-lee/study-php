<?php
/*
추상 클래스
    선언부만 존재하고 본문은 없는 클래스
    추상 클래스를 상속받은 자식클래스에서 메소드 동작을 정의한다.

주의사항
    1. 상속받은 클래스에서 사용할 때 메소드 이름이 같아야 사용 가능(당연한 얘기)
    2. 상속받은 클래스에서 사용할 때 접근 제어자는 같거나 덜 제한적인 것으로 사용해야 한다
    3. 인수는 같아야 하지만 하위 클래스에서는 추가해서 사용할 수 있다.
*/
abstract class ParentClass {
    public $var;
    abstract protected function someMethod1();
    abstract public function someMethod2($name, $color);
    abstract public function someMethod3() : string;
  }

class Child extends ParentClass{

    //덜 제한적인 접근 제어자
    public function someMethod1(){
        echo "추상 메소드 1";
    }

    //인수 추가해서 사용 가능
    //추가되는 인수에 값 대입하지 않으면 호환성 에러 발생
    public function someMethod2($name, $color , $height =""){
        echo "추상 메소드 2  이름 : {$name} 색상 : {$color} 키 : {$height}";

    }

    public function someMethod3() : string {
        return "test";
    }

}

$child = new Child();

$child->someMethod1();
$child->someMethod2('leehochang','white','173');
$child->someMethod3();





?>