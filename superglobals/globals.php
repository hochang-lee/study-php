<?php

$x = 75;
$y = 25;
 
/*
글로벌 변수

['']를 통해 변수를 찾아 글로벌 변수로 만든다
글로벌 변수는 $z 와 같은 형태도로 사용이 가능해진다

즉, 
메소드 내에서 외부 변수를 가져올 경우
외부에서 메소드 내의 변수를 사용할 경우


*/

function addition() {
  $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
}
 
addition();
echo $z;


?>