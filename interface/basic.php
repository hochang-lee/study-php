<?php

/*
인터페이스
    인터페이스는 추상 클래스와 비슷하다. 그러므로 추상 클래스와의 차이점을 알고 있어야 한다
    코드 관리 측면으로 인터페이스를 사용한다.-> 일관된 메소드명 사용
    인터페이스 내 메소드들을 선언만하고 하위 클래스에서 재정의하여 사용

추상 클래스와의 차이점
    1. 인터페이스는 프로퍼티를 가질 수 없다 / 추상 클래스는 가능
    2. 인터페이스의 메소드는 모두 public / 추상 클래스는 public 또는 protected
    3. 인터페이스내의 모든 메소드는 추상메소드이다. 그러므로 abstract 키워드가 없어도 된다
    4. 클래스는 다른 클래스를 상속받으며 인터페이스를 implement 할 수 있다. (다중 가능)

주의사항
    1. 하위 클래스에서 추상 클래스와 마찬 가지로 모든 메소드를 정의해야한다.
*/

interface Some {
    public function someMethod1();
    public function someMethod2($name, $color);
    public function someMethod3() : string;
  }
interface Some2{
    public function some2Method();
}  

//다중 implements 가능
class Every implements Some, Some2{
    //인터페이스 내의 모든 메소드 정의해야한다.
    public function someMethod1(){
        echo "someMethod1";
    }
    public function some2Method(){
        echo "some2Method";
    }

    public function someMethod2($name,$color){

    }
    public function someMethod3() : string{

    }


}  

$every = new Every();
$every->someMethod1();
$every->some2Method();



?>