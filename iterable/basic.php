<?php
/*
iterable
    1. 인수의 데이터 타입 지정
    2. 리턴 타입 지정
    두 경우에 사용한다
*/

//1. 인수의 데이터 타입 지정
function printIterable(iterable $myIterable) {
    foreach($myIterable as $item) {
      echo $item;
    }
  }
  
  $arr = ["a", "b", "c"];
  printIterable($arr);


//2. 리턴 데이터 타입 지정
  function getIterable():iterable {
    return ["a", "b", "c"];
  }
  
  $myIterable = getIterable();
  foreach($myIterable as $item) {
    echo $item;
  }

  




?>