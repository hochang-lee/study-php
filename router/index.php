<?php
 include __DIR__."/RouterBasic.php";

Route::add('/',function(){
     echo 'welcome';
 });


 
Route::add('/test','testt');

function testt(){
    echo 'ok';
}


Route::add('/phpStudy/router/test2',function(){
    echo 'welcome2';
});

Route::add('/phpStudy/router/test3',function(){
    echo 'welcome3';
});

 Route::run('/phpStudy/router');

?>