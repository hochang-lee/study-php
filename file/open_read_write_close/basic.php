<?php

/*
fopen()
    readfile()보다 좀 더 많은 옵션을 부여해 파일을 열 수 있다
    
    옵션
    r	Open a file for read only. File pointer starts at the beginning of the file
    w	Open a file for write only. Erases the contents of the file or creates a new file if it doesn't exist. File pointer starts at the beginning of the file
    a	Open a file for write only. The existing data in file is preserved. File pointer starts at the end of the file. Creates a new file if the file doesn't exist
    x	Creates a new file for write only. Returns FALSE and an error if file already exists
    r+	Open a file for read/write. File pointer starts at the beginning of the file
    w+	Open a file for read/write. Erases the contents of the file or creates a new file if it doesn't exist. File pointer starts at the beginning of the file
    a+	Open a file for read/write. The existing data in file is preserved. File pointer starts at the end of the file. Creates a new file if the file doesn't exist
    x+	Creates a new file for read/write. Returns FALSE and an error if file already exists


fread()
    파일 읽기

fclose()
    파일 닫기

    */

    //1. 파일 불러오기
    // $myfile = fopen("/var/www/videoWeb/phpStudy/text.txt", "r") or die("Unable to open file!");
    // //두 번째 인자값으로 파일을 얼마나 읽어들일지 결정할 수 있다
    // echo fread($myfile,filesize("/var/www/videoWeb/phpStudy/text.txt"));

    //2. 파일 수정
    $myfile = fopen("/var/www/videoWeb/phpStudy/text.txt", "r+") or die("Unable to open file!");
    $addText = "추가된 텍스트입니다dasddasdasd";
    //파일에 들어가서 보면 수정된 것을 확인할 수 있다
    fwrite($myfile,$addText);
    fclose($myfile);

    
?>