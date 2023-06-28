<?php session_start(); // 세션을 초기화 합니다. (세션을 쓰겠다라고 알려주는 역활) ?>
<?php include $_SERVER['DOCUMENT_ROOT'] . "/phpdev/include/db.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>00r건설</title>
    <link href="/phpdev/img/logo.ico" rel="shortcut icon" type="image/x-icon">
    <link rel="stylesheet" href="/phpdev/css/header.css">
</head>
<body>
    
<center>
    <div class="mem_info">
        <?php if(empty($_SESSION['id'])){?>
            <a href="/phpdev/member/login.php">로그인</a>
            <a href="/phpdev/member/join.php">회원가입</a>
        <?php }else{ ?>
            <a href="/phpdev/member/logout.php">로그아웃</a>
            <a href="/phpdev/member/modify.php">회원수정</a>
        <?php } ?>    
    </div>

    <div class="topmenu">
        <div class="logo"><a href="/phpdev"><img src="/phpdev/img/logo.png" class="logoimg"></a></div>
        <div class="menu"><a href="/phpdev/intro">회사소개</a></a></div>
        <div class="menu"><a href="/phpdev/business">사업분야</a></div>
        <div class="menu"><a href="/phpdev/project">실적현황</a></div>
        <div class="menu"><a href="/phpdev/contact">CONTACT</a></div>
    </div>

</center>
</body>
</html>