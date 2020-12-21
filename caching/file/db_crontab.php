<?php

/*
    DB에서 가져온 데이터를 파일로 캐싱하는 파일을 윈도우의 스케줄링, 리눅스 크론탭을 활용하여
    주기적으로 실행되도록 하는 방법
        실시간을 변하는 데이터를 보여주는 경우엔 적합하지 않을 것 같음
        데이터 변화에 일정 텀이 있어도 되는 경우 활용해볼 것
*/


//이 파일을 원하는 시간대마다 실행되도록 한다.
$arr = array();
$res = mysql_query('SELECT * FROM board ORDER BY no DESC LIMIT 5');
while($v = mysql_fetch_assoc($res))
{
    $arr[] = $v;
}
setCacheFile('dataCache.php', 'datRecentPost', $arr);


function setCacheFile($fileName, $valName, $target)
{
    // Serializing Targeted Data
    $target = str_replace('"', '\"', serialize($target));
     
    // Writing to Cache File
    $fp = fopen($fileName, 'w+');
    fwrite($fp, '<?php ');
    fwrite($fp, '$' . $valName . ' = unserialize("' . $target . '");');
      
    fwrite($fp, ' ?>');
    fclose($fp);
}



//원하는 곳에 해당 캐싱 파일만 불러와서 사용한다
include('dataCache.php');
echo $datRecentPost;
?>