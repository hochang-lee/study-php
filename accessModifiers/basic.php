<?php

class Access{
    //프로퍼티 테스트
    public $public;
    protected $protected;
    private $private;

    //메소드 테스트
    function set_public($n) {  
        $this->public = $n;
      }
      protected function set_protected($n) { 
        $this->protected = $n;
      }
      private function set_private($n) { 
        $this->private = $n;
      }
}

$access = new Access();

/*
public : 어디서든 접근 가능, 기본값
protected : 클래스 내, 해당 클래스를 상속 받은 클래스 
private : only 클래스 내

*/

$access->public = "public"; //success
$access->protected = "public"; // fail
$access->private = "public"; //fail 

$access->set_public("test"); //success
$access->set_protected("test"); //fail
$access->set_private("test"); //fail

?>