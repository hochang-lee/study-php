<?php

/*
문자열 비교
    if('cookie'<'banana')
    문자의 대소 관계를 비교하게 되면 php 엔진은 해당 문자를 아스키 코드로 변환시켜 비교한다.

*/


//strcasecmp()
//  문자열이 일치할 때 false 반환
if(!strcasecmp('test','test')){
    echo '일치';
}else{
    echo '불일치';
}
?>