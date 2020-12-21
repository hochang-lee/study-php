<?php

/*
Traits
다중 상속을 가능하게 해준다
*/

//trait 키워드를 사용해 클래스 정의
trait Trait1 {
    public function speak(){
        echo "1번입니다";
    }
  }
  trait Trait2 {
    public function speak2(){
        echo "2번입니다";
    }
  }
  trait Trait3 {
    public function speak3(){
        echo "3번입니다";
    }
  }

  //하위 클래스에서 use 키워드로 상속을 받는다
  class Total{
      use Trait1,Trait2,Trait3;
  }

  $total = new Total();
  $total->speak();
  $total->speak2();
  $total->speak3();


?>