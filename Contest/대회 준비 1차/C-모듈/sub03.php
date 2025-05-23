  <?php require_once "db.php" ?>
  <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="../css/sub03.css" />
    <link
      rel="stylesheet"
      href="/선수제공파일/공통/fontawesome/css/font-awesome.min.css" />
    <!-- <script src="./script.js"></script> -->
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
          <li><a href="./sub04.php">장바구니</a></li>

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
        <div class="container">
          <div class="itemBox">
            <div>
              <div class="img-box">
                <img
                  src="/선수제공파일/A-Module/images/건강식품/1.PNG"
                  alt="건강식품-Img1" />
              </div>

              <div class="text-content">
                <div>
                  <div>
                    <p>상품명: 이뮨 멀티비타민&amp;미네랄</p>
                  </div>
                </div>

                <div>
                  <p class="fa">
                    &#xf155; 가격
                    <span style="text-decoration: line-through">75,000</span>-&gt; 65,000
                  </p>
                </div>
                <div>
                  <p>일반배송 2,500원 (20,000원 이상 무료배송)</p>
                </div>
                <div class="btn">
                  <a href="#">구매하기</a>
                  <a href="#">장바구니담기 </a>
                </div>
              </div>
            </div>

          </div>
        </div>
        <div class="container">
          <div class="itemBox">
            <div>
              <div class="img-box">
                <img
                  src="/선수제공파일/A-Module/images/디지털/4.PNG"
                  alt="디지털-Img4" />
              </div>

              <div class="text-content">
                <div>
                  <div>
                    <p>상품명: 파이널마우스 스타라이트12 페가수스 미디엄</p>
                  </div>
                </div>

                <div>
                  <p class="fa">
                    &#xf155; 가격
                    <span style="text-decoration: line-through">1,254,000</span>-&gt; 1,128,600
                  </p>
                </div>
                <div>
                  <p>일반배송 3,000원 (20,000원 이상 무료배송)</p>
                </div>
                <div class="btn">
                  <a href="#">구매하기</a>
                  <a href="#">장바구니담기 </a>
                </div>
              </div>
            </div>

          </div>
        </div>
        <div class="container">
          <div class="itemBox">
            <div>
              <div class="img-box">
                <img
                  src="/선수제공파일/A-Module/images/팬시/4.PNG"
                  alt="팬시-Img4" />
              </div>

              <div class="text-content">
                <div>
                  <div>
                    <p>상품명: 게이밍 이어폰 VJJB NI</p>
                  </div>
                </div>

                <div>
                  <p class="fa">
                    &#xf155; 가격
                    <span style="text-decoration: line-through">38,900</span>-&gt;28,900
                  </p>
                </div>
                <div>
                  <p>일반배송 2,500원 (20,000원 이상 무료배송)</p>
                </div>
                <div class="btn">
                  <a href="#">구매하기</a>
                  <a href="#">장바구니담기 </a>
                </div>
              </div>
            </div>

          </div>
        </div>
        <div class="container">
          <div class="itemBox">
            <div>
              <div class="img-box">
                <img
                  src="/선수제공파일/A-Module/images/향수/4.PNG"
                  alt="향수-Img4" />
              </div>

              <div class="text-content">
                <div>
                  <div>
                    <p>상품명: 몽블랑 익스플로러 EDP 60ml</p>
                  </div>
                </div>

                <div>
                  <p class="fa">
                    &#xf155; 가격
                    <span style="text-decoration: line-through">103,000</span>-&gt;93,000
                  </p>
                </div>
                <div>
                  <p>일반배송 2,500원 (20,000원 이상 무료배송)</p>
                </div>
                <div class="btn">
                  <a href="#">구매하기</a>
                  <a href="#">장바구니담기 </a>
                </div>
              </div>
            </div>

          </div>
        </div>
        <div class="container">
          <div class="itemBox">
            <div>
              <div class="img-box">
                <img
                  src="/선수제공파일/A-Module/images/헤어케어/5.PNG"
                  alt="헤어케어-Img5" />
              </div>

              <div class="text-content">
                <div>
                  <div>
                    <p>상품명: 닥터포헤어 피토프레시 헤어쿨링 스프레이 150ml</p>
                  </div>
                </div>

                <div>
                  <p class="fa">
                    &#xf155; 가격
                    <span style="text-decoration: line-through">16,000</span>-&gt;14,400
                  </p>
                </div>
                <div>
                  <p>일반배송 2,500원 (20,000원 이상 무료배송)</p>
                </div>
                <div class="btn">
                  <a href="#">구매하기</a>
                  <a href="#">장바구니담기 </a>
                </div>
              </div>
            </div>

          </div>
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
    </main>


  </body>

  </html>