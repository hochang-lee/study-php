<?php

class Human {
    public $name;
    public $height;
    public function __construct($name, $height) {
      $this->name = $name;
      $this->height = $height;
    }
    public function intro() {
      echo "class : Human , name : {$this->name} , height : {$this->height}";
    }
    public function talk(){
        echo "부모님이 말합니다";
    }
  }
  
  class Child extends Human {
    /*
    1. 부모의 메소드를 재정의하고 싶은 경우(overriding) + 생성자 재정의
        자식에서 정의하면 덮어씌어진다
    
    2. 부모의 메소드를 호출하고 싶은 경우
        parent::method() 를 사용하여 호출한다


    */
    public $school; 
    public $home; 

    //생성자 및 부모와 이름이 같은 메소드 재정의시 덮어 씌어진다
    public function __construct($school, $home) {
        $this->school = $school;
        $this->home = $home;
    }
    
    public function childConstructTest(){
        echo   "자식 상속자 테스트 {$this->school} {$this->home}";
    }  

    public function punch() {
      echo "아이의 주먹이 날라갑니다";
    }

    //부모 메소드 호출
    public function callParentMethod(){
        echo "자식이 말합니다";
        parent::talk();

    }
  }
  $myChild = new Child("이호창", "182");
  $myChild->childConstructTest();
  $myChild->punch();
  $myChild->callParentMethod();


?>