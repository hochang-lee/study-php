<?php
 $host = 'localhost';
 $user = 'root';
 $pass = 'dl@941006';
 $db ='myProject';

 $conn = mysqli_connect($host,$user,$pass,$db);

  if($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
  }

  if($conn) {
    echo "Connection successful";
    echo "<br>";
  }

  mysqli_query($conn, "set session character_set_connection=utf8;");
  mysqli_query($conn, "set session character_set_results=utf8;");
  mysqli_query($conn, "set session character_set_client=utf8;");

  // 트랜잭션 시작 (MYSQLI_TRANS_START_READ_ONLY 도 가능)
  // 데이터 읽기만 할 때와 수정, 삭제할 때를 구분하여 지정함
  mysqli_begin_transaction($conn, MYSQLI_TRANS_START_READ_WRITE);

  $sql1 = "SELECT @name:=name, @address:=address FROM test WHERE id='2'";
  $sql2 = "DELETE FROM test WHERE id='2'";
  $sql3 = "INSERT INTO test2(name,height,shoes_size,marry,address2) VALUES(@name,'173','250','0',@address)";

  $result1 = mysqli_query($conn, $sql1);
  $result2 = mysqli_query($conn, $sql2);
  $result3 = mysqli_query($conn, $sql3);

  if( mysqli_num_rows($result1) > 0 && $result2 && $result3){
       
       mysqli_commit($conn);
       echo "트랜잭션 성공<br>";

  }else{

       mysqli_rollback($conn);
       echo "트랜잭션 실패<br>";
  }


?>