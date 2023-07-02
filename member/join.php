<?php include $_SERVER['DOCUMENT_ROOT'] . "/phpdev/include/header.php"; // 절대 경로 처리 ?>
<link rel="stylesheet" href="/phpdev/css/join.css">

<center>
    
    <div class="joinContainer">
        <div class="joinTitle">아이디</div>
        <div class="joinContent"><input id="id" name="id" class="joinOneInput"></div>
    </div>
    <div class="joinContainer">
        <div class="joinTitle">비밀번호</div>
        <div class="joinContent"><input id="pass" name="pass" class="joinOneInput"></div>
    </div>
    <div class="joinContainer">
        <div class="joinTitle">비밀번호 확인</div>
        <div class="joinContent"><input id="pass2" class="joinOneInput"></div>
    </div>
    <div class="joinContainer">
        <div class="joinTitle">생년월일</div>
        <div class="joinContent">
            <input id="birth" name="birth" class="joinThreeInput">
            <input id="birth2" name="birth2" class="joinThreeInput">
            <input id="birth3" name="birth3" class="joinThreeInput">
        </div>
    </div>
    <div class="joinContainer">
        <div class="joinTitle">전화번호</div>
        <div class="joinContent">
            <input id="phone1" name="phone1" class="joinThreeInput">
            <input id="phone2" name="phone2" class="joinThreeInput">
            <input id="phone3" name="phone3" class="joinThreeInput">
        </div>
    </div>
</center>
