<?php
$host = "localhost"; // MySQL 호스트
$username = "root"; // MySQL 사용자명
$password = "1111"; // MySQL 비밀번호
$dbname = "php"; // 연결할 데이터베이스명

// MySQL 서버에 연결
$conn = mysqli_connect($host, $username, $password, $dbname);

// 연결 여부 확인
if (!$conn) {
    die("MySQL 연결 실패: " . mysqli_connect_error());
}


// MySQL 연결 종료
mysqli_close($conn);
?>
