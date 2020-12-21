<?php

/*
    크론탭을 활용해 캐싱하는 것을 보완하는 방법
        캐싱 파일의 time to live(ttl) 시간을 정해서 해당 시간이 경과 했을 경우에만 캐싱을 다시 진행
            첫 요청시에는 캐싱
            이후 요청시마다 ttl 시간 확인 후 
                만료 : 새롭게 캐싱
                만료 전 : 기존 캐싱 데이터 전달
*/

$fileName = "test.php";
$ttl = 600;
//캐싱시 값을 담은 변수이름
$varName = 'test';

if(!file_exist($fileName) || filemtime($fileName) + $ttl < time())
{
    // Getting Caching Data
    $arr = array();
    $res = mysql_query('SELECT * FROM test ORDER BY no DESC LIMIT 5');

    while($v = mysql_fetch_assoc($res))
    {
        $arr[] = $v;
    }

    // Generating a Cache File
    // (Require setCacheFile() on the previous sample code)
    setCacheFile($fileName, $arr, $target);

    // Return Data
    return $arr;
}
else
{
    // Loading the Cache File
    include($fileName);
    //캐싱시 값을 담은 변수이름
    return $varName;
}



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
?>