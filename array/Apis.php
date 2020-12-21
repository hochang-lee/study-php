<?php

/*

1. 배열 내 키 값을 대문자 or 소문자로 변경
    
    array_change_key_case ( array $array [, int $case = CASE_LOWER ] ) : array

        $case : CASE_UPPER, CASE_LOWER(default)
        
$arr = ['First'=>1, "Second"=>2];
print_r(array_change_key_case($arr,CASE_UPPER)); 
print_r(array_change_key_case($arr,CASE_LOWER)); 
*/





/*

2. 배열 내 값들을 원하는 길이만큼 잘라서 배열로 보관
    
    형태는 배열 내 배열(원하는 길이만큼 잘린 값들)

    array_chunk ( array $array , int $length [, bool $preserve_keys = FALSE ] ) : array

        $length : 자를 길이
        
        $preserve_keys : 키값을 유지하면서 자를지 여부

$input_array = array('key_1'=>'a', 'key_2'=>'b', 'key_3'=>'c', 'key_4'=>'d', 'key_5'=>'e');
print_r(array_chunk($input_array, 2));
print_r(array_chunk($input_array, 2, true));
*/





/*

3. 배열 내 특정 컬럼의 값들만 빼낸다.
    
    key 값으로 뺄 컬럼 설정 가능
    value 값으로 뺄 컬럼 설정 가능

        array_column ( array $array , int|string|null $column_key [, int|string|null $index_key = NULL ] ) : array

        $column_key : value 컬럼명

        $index_key : key 컬럼명

 $records = array(
    array(
        'id' => 2135,
        'first_name' => 'John',
        'last_name' => 'Doe',
    ),
    array(
        'id' => 3245,
        'first_name' => 'Sally',
        'last_name' => 'Smith',
    ),
    array(
        'id' => 5342,
        'first_name' => 'Jane',
        'last_name' => 'Jones',
    ),
    array(
        'id' => 5623,
        'first_name' => 'Peter',
        'last_name' => 'Doe',
    )
);

$first_names = array_column($records, 'first_name','id');
print_r($first_names);

*/





/*

4. 두개의 배열(key array, value array)을 하나의 array로 합친다.

        array_combine ( array $keys , array $values ) : array


            
$a = array('key_1', 'key_2', 'key_3');
$b = array('apple', 'icecream', 'banana');
$c = array_combine($a, $b);

print_r($c);

*/






/*

5. 배열의 내 공통된 value의 값들을 count 해준다

    array_count_values ( array $array ) : array


$array = array(1, "hello", 1, "world", "hello");

print_r(array_count_values($array));
    result :  Array ( [1] => 2 [hello] => 2 [world] => 1 )


반환된 배열의 각 인덱스의 값들이 곧 count 값
print_r(array_count_values($array)['world']);
    result : 1

*/







/*

6. 두개의 배열을 key, value 값을 비교해 다른 부분만을 모아 배열로 return 해준다

    array_diff_assoc ( array $array , array ...$arrays ) : array


$array1 = array("a" => "green", "b" => "brown", "c" => "blue", "other");
$array2 = array("a" => "green", "b"=>"yellow", "blue");
$result = array_diff_assoc($array1, $array2);
print_r($result);

*/









?>