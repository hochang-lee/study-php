<?php
// Create an Iterator
class MyIterator implements Iterator {
    private $items = [];
    private $pointer = 0;
  
    public function __construct($items) {
      // array_values() makes sure that the keys are numbers
      $this->items = array_values($items);
    }
    
    //iterator가 가져야할 필수 5개 메소드

    //포인터가 가리키는 현재 요소를 반환
    public function current() {
      return $this->items[$this->pointer];
    }
  
    //현재 가리키고 있는 요소의 key 반환
    public function key() {
      return $this->pointer;
    }
  
    //다음 요소로 이동
    public function next() {
      $this->pointer++;
    }
  
    //첫 번째 요소로 이동
    public function rewind() {
      $this->pointer = 0;
    }
  
    //유효성 검사
    //요소가 없으면 false , 있으면 true
    public function valid() {
      // count() indicates how many items are in the list
      return $this->pointer < count($this->items);
    }
  }
  
  // A function that uses iterables
  function printIterable(iterable $myIterable) {
    foreach($myIterable as $item) {
      echo $item;
    }
  }
  
  // Use the iterator as an iterable
  $iterator = new MyIterator(["a", "b", "c"]);
  printIterable($iterator);





?>