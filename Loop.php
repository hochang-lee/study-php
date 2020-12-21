<?php

/*
    while

    for($i =0; $i<10; $i++){
        code 
    }
    for문 구문 실행 순서
        1. 초기화 표현식 $i=0;
        2. 조건 표현식 $i<10;
        3. 코드 블록 code
        4. 순회 표현식 $i++;
*/

//다중 for문
for($min =0, $max=10; $min<50; $min+=10, $max+=10){
    print 'min: '.$min.', max: '.$max;
    print '</br>';
}

?>