<?php session_start(); // 세션을 초기화 합니다. (세션을 쓰겠다라고 알려주는 역활) ?>
<?php include $_SERVER['DOCUMENT_ROOT'] . "/phpdev/include/db.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>(주)페더윙</title>
    <link href="/phpdev/img/logo.ico" rel="shortcut icon" type="image/x-icon">
    <link rel="stylesheet" href="/phpdev/css/header.css">
</head>
<body>
<script src="http://code.jquery.com/jquery-1.12.4.min.js"></script>
<script src="http://code.jquery.com/jquery-migrate-1.4.1.min.js"></script>
 
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
        <div class="menu" id="dropIntro"><a href="/phpdev/intro/ceo" >회사소개</a>
            <div id="dropintroContent" class="dropContent">
                <div class="dropmenu"><a href="/phpdev/intro/ceo">인사말</a></div>
                <div class="dropmenu"><a href="/phpdev/intro/company">회사소개</a></div>
                <div class="dropmenu"><a href="/phpdev/intro/map">오시는 길</a></div>
            </div>
        </div>
            
        <div class="menu"><a href="/phpdev/business/part" id="dropBusiness">사업분야</a>
            <div id="dropBusinessContent" class="dropContent">
                <div class="dropmenu"><a href="/phpdev/business/part">사업분야</a></div>
            </div>
        </div>
        <div class="menu"><a href="/phpdev/project/list" id="dropProject">실적현황</a>
            <div id="dropProjectContent" class="dropContent">
                <div class="dropmenu"><a href="/phpdev/project/list">공사실적</a></div>
            </div>
        </div>
        <div class="menu"><a href="/phpdev/contact" id="dropContact">CONTACT</a>
            <div id="dropContactContent" class="dropContent">
                <div class="dropmenu"><a href="/phpdev/contact/notice">공지사항</a></div>
                <div class="dropmenu"><a href="/phpdev/contact/qna">문의사항</a></div>
            </div>
        </div>
    </div>
    <div></div>

</center>
<script>
    $("#dropIntro").on("mouseover",function(){
        $("#dropintroContent").slideDown("fast");
    });

    $("#dropIntro").on("mouseleave",function(){
    	$("#dropintroContent").slideUp("fast");
    });

    $("#dropBusiness").on("mouseover",function(){
	    $("#dropBusinessContent").slideDown("fast");
    });
    
    $("#dropBusiness").on("mouseleave",function(){
	    $("#dropBusinessContent").slideUp("fast");
    });

    $("#dropProject").on("mouseover",function(){
	    $("#dropProjectContent").slideDown("fast");
    });

    $("#dropProject").on("mouseleave",function(){
	    $("#dropProjectContent").slideUp("fast");
    });

    $("#dropContact").on("mouseover",function(){
	    $("#dropContactContent").slideDown("fast");
    });

    $("#dropContact").on("mouseleave",function(){
	    $("#dropContactContent").slideUp("fast");
    });

 </script>   