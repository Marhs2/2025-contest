<?php require_once "db.php" ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
  <link rel="stylesheet" href="../css/sub01.css" />
  <script src="./script/jquery-3.4.1.min.js"></script>

  <link
    rel="stylesheet"
    href="/선수제공파일/공통/fontawesome/css/font-awesome.min.css" />
</head>

<body>
  <div class="loading-container">
    <div class="loading"></div>
    <div class="background"></div>
  </div>

  <header>
    <nav>
      <a href="./index.php"><img src="../imgs/logo.png" alt="logo" /></a>
      <ul class="menu">
        <li><a href="./sub01.php">소개</a></li>
        <li>
          <a href="#">판매 상품</a>
          <ul>
            <li><a href="./sub02.php">전체상품</a></li>
            <li><a href="#">인기상품</a></li>
          </ul>
        </li>
        <li><a href="#">가맹점</a></li>
        <li><a href="#">장바구니</a></li>
      </ul>
      <ul class="menu">
        <li><a href="#">장바구니</a></li>
        <?php if (($_SESSION["ss"]->id ?? "") === "admin") { ?>
          <li><a href="#">admin</a></li>
          <li><a href="./logout.php">로그아웃</a></li>
        <?php } else if ($_SESSION["ss"]->id ?? false) { ?>
          <li><a href="#"><?= htmlspecialchars($_SESSION["ss"]->id) ?>님</a></li>
          <li><a href="./logout.php">로그아웃</a></li>
        <?php } else { ?>
          <li><a class="login">로그인</a></li>
          <li><a class="signup">회원가입</a></li>
        <?php } ?>
      </ul>
    </nav>
  </header>

  <main>
    <div class="content">
      <div class="video"></div>

      <div class="title-part">
        <div class="title">GIFTS:Mall Motto</div>
      </div>

      <div class="introduction">
        <div class="imgsBox">
          <div class="img01">
            <div class="title">행복신뢰</div>
          </div>

          <div class="img02">
            <div class="des-title">가치나눔</div>
          </div>
          <div class="img03">
            <div class="des-title">환경선도</div>
          </div>
          <div class="img04">
            <div class="des-title">미래혁신</div>
          </div>
          <div class="img05">
            <div class="desciption">
              <div class="des01">
                고객신뢰를 바탕으로 행복한 사회를 추구하는 글로벌 기업
              </div>
              <div class="des02">
                기업의 가치 혁신의 출발은 나눔을 시작으로 고객 가치를
                탐험한다.
              </div>
              <div class="des03">
                세계 기후변화 대응을 위해 100% 재생에너지로 생산된 제품만
                환경선도 선별한다.
              </div>
              <div class="des04">
                다른 생각 다른 미래, 플랫폼 기반의 글로벌 미래 혁신을
                선도한다.
              </div>
              <div class="des05">
                글로벌 수준의 개인정보보호 및 보안 체계를 유지한다.
              </div>
            </div>
            <div class="des-title">정보보안</div>
          </div>
        </div>
      </div>
    </div>
    <div class="footer">
      <div class="footer-section">
        <a href="#"><img src="../imgs/logo.png" alt="footer-logo" /></a>
        <p>고객센터</p>
        <p>온라인몰 고객센터: 1580-8282</p>
        <p>매장고객센터: 1577-8254</p>
        <p>운영시간: 평일 09:00 - 18:00</p>
        <p>주말 및 공휴일은 <a href="#">1:1 문의하기</a>를 이용해주세요.</p>
      </div>

      <div class="footer-section link-and-sns">
        <div class="footer-section link">
          <a href="#">개인정보처리방침</a> | <a href="#">이용약관</a> |
          <a href="#">법적 고지</a> | <a href="#">청소년 보호방침</a> |
          <a href="#">이메일 무단수집 거부</a> |
          <a href="#">사이트맵</a>
        </div>

        <div class="footer-section link sns">
          <a href="#" class="fa fa-instagram"></a>
          <a href="#" class="fa fa-twitter"></a>
          <a href="#" class="fa fa-facebook"></a>
          <a href="#" class="fa fa-twitch"></a>
          <a href="#" class="fa fa-youtube"></a>
        </div>
      </div>

      <div class="footer-section">
        <p>(주)GIFTS:Mall</p>
        <p>사업자등록번호: 809-81-01157</p>
        <p>대표이사: 황기영</p>
        <p>주소: 서울특별시 용산구 한강대로 123, 40층</p>
        <p>본사 대표전화: 02-123-4567</p>
      </div>

      <div class="footer-section safe">
        <p>
          지방은행 구매안전서비스: GIFTS:Mall은 현금 결제한 금액에 대해
          지방은행과 채무지급보증 계약을 체결하여 안전한 거래를 보장합니다.
        </p>
        <a href="#">서비스 가입 사실 확인</a>
      </div>

      <div class="footer-section">
        <p>COPYRIGHTⓒ 2024 GIFTS:MALL KOREA INC. ALL RIGHTS RESERVED</p>
      </div>
    </div>
    <script src="../script/jquery-3.4.1.min.js"></script>
    <script src="../script/script.js"></script>

  </main>
</body>

</html>