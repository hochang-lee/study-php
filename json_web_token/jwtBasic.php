<?php
include __DIR__."/generate_key.php";

//실제 구현시에는 규칙 또는 랜덤으로 발급
//랜덤 발급시 -> 저장 공간에 저장해야 할 듯
$secret = bin2hex(random_bytes(32));

$header = json_encode([
    'typ' => 'JWT',
    'alg' => 'HS256'
]);

// Create the token payload
$payload = json_encode([
    'user_id' => 1,
    'role' => 'admin',
    'exp' => 1593828222
]);

//값을 base64로 암호화 
$encodedHeader = base64UrlEncode($header);
$encodedPayload = base64UrlEncode($payload);
//signature는 sha256로 암호화이후 base64로 암호화
$hashedSignature = hash_hmac('sha256', $encodedHeader . "." . $encodedPayload, $secret, true);
$encodedSignature = base64UrlEncode($hashedSignature);
//토큰 클라이언트로 내려주기
$jwt = $encodedHeader . "." . $encodedPayload . "." . $encodedSignature;




//클라이언트에서 서버로 보낸 토큰 인증
$tokenParts = explode('.', $jwt);
$outHeader =base64UrlEncode(base64_decode($tokenParts[0]));
$outPayload =base64UrlEncode(base64_decode($tokenParts[1]));
//+ 기간 만료시 재발급 코드 추가해야함

//기존에 만든 방식대로 비교 signature 만든다
$prevSignature = hash_hmac('sha256', $outHeader . "." . $outPayload, $secret, true);
$prevEncodedSignature = base64UrlEncode($prevSignature);

$outSignature = $tokenParts[2];
//넘겨 받은 signature와 비교
if($prevEncodedSignature == $outSignature){
    echo '인증 성공';
}else{
    echo '인증 실패';
}





function base64UrlEncode($text){
    return str_replace(['+','/','='],['-','_',''],base64_encode($text));
}

?>