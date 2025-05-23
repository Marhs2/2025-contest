<!DOCTYPE html>
<html lang="en">
<?php require_once "db.php" ?>

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
  <link rel="stylesheet" href="../css/style.css?=<?= time() ?>" />
  <link
    rel="stylesheet"
    href="./선수제공파일/공통/fontawesome/css/font-awesome.min.css" />
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
          <li><a href="#">관리자</a></li>
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



    <div class="singupModal">
      <form action="singupaction.php" method="post">
        <div class="modal-close">
          닫기
        </div>
        <div class="title">
          회원가입
        </div>

        <div class="name">
          <label for="name">이름</label>
          <input type="text" name="name" id="name" placeholder="이름">
        </div>
        <div class="id">
          <label for="id">아이디</label>
          <input type="text" name="id" id="id" placeholder="아이디">
        </div>
        <div class="email">
          <label for="name">이메일</label>
          <input type="email" name="email" id="email" placeholder="이메일">
        </div>
        <div class="psw">
          <label for="psw">비밀번호</label>
          <input type="password" name="psw" id="psw" placeholder="비밀번호">
        </div>
        <div class="submit">
          <input type="submit" value="회원가입">

        </div>

      </form>
    </div>

    <div class="loginModal">
      <form action="loginaction.php" method="post">

        <div class="modal-close">
          닫기
        </div>
        <div class="title">
          로그인
        </div>
        <div class="id">
          <label for="id"></label>
          <input type="text" name="id" id="id" placeholder="아이디">
        </div>
        <div class="psw">
          <label for="psw"></label>
          <input type="password" name="psw" id="psw" placeholder="비밀번호">
        </div>
        <div class="submit">

          <input type="submit" value="로그인">
        </div>
      </form>
    </div>



    <div class="slide">
      <ul>
        <li>
          <div class="img-filter">
            <img
              src="./선수제공파일/공통/images/08.jpg"
              alt="slide01-img"
              class="slide-img" />
          </div>

          <div class="slide-sub">
            <div class="sub-main">
              <span>B</span>etter <span>G</span>ive & <span>T</span>ake
            </div>
            <div class="sub">옴니채널 플랫폼 GIFTS로</div>
            <div class="sub">전 세계 고객에게 선물의 가치를 높입니다.</div>
            <div class="slide-move">
              <input type="radio" name="slideRadio" id="first-secoend" />
              <label class="fa fa-play" for="first-secoend"></label>
            </div>
          </div>
        </li>

        <li>
          <div class="img-filter">
            <img
              src="./선수제공파일/공통/images/02.jpg"
              alt="slide02-img"
              class="slide-img" />
          </div>
          <div class="slide-sub">
            <div class="sub-main">
              <span>L</span>ife <span>S</span>tyle <span>P</span>latforms
            </div>
            <div class="sub">고객과 가장 가까운 곳에서</div>
            <div class="sub">고객에게 다양한 즐거움을 선물합니다.</div>
            <div class="slide-move">
              <div class="slide-move">
                <input type="radio" name="slideRadio" id="secoend-first" />
                <label
                  class="fa fa-play fa-flip-horizontal"
                  for="secoend-first"></label>
                <input type="radio" name="slideRadio" id="secoend-three" />
                <label class="fa fa-play" for="secoend-three"></label>
              </div>
            </div>
          </div>
        </li>
        <li>
          <div class="img-filter">
            <img
              src="./선수제공파일/공통/images/04.jpg"
              alt="slide03-img"
              class="slide-img" />
          </div>
          <div class="slide-sub">
            <div class="sub-main">
              <span>O</span>nline <span>PLAYGROUND </span>
            </div>
            <div class="sub">업계 최초 당일 배송 서비스인 '오늘드림'으로</div>
            <div class="sub">고객 니즈 충족과 고객 경험을 혁신합니다.</div>
            <div class="slide-move">
              <input type="radio" name="slideRadio" id="three-secoend" />
              <label class="fa fa-play" for="three-secoend"></label>
            </div>
          </div>
        </li>

        <li>
          <div class="img-filter">
            <img
              src="./선수제공파일/공통/images/08.jpg"
              alt="slide01-img"
              class="slide-img" />
          </div>

          <div class="slide-sub">
            <div class="sub-main">
              <span>B</span>etter <span>G</span>ive & <span>T</span>ake
            </div>
            <div class="sub">옴니채널 플랫폼 GIFTS로</div>
            <div class="sub">전 세계 고객에게 선물의 가치를 높입니다.</div>
            <div class="slide-move">
              <input type="radio" name="slideRadio" id="first-secoend2" />
              <label class="fa fa-play" for="first-secoend2"></label>
            </div>
          </div>
        </li>
      </ul>
    </div>
  </header>

  <main>
    <div class="content">
      <div class="sale">
        <div class="title">
          <div class="bar"></div>
          <div>
            <div class="title-eng">SALE PRODUCT</div>
            <div class="title-sub">판매 상품</div>
          </div>
        </div>

        <div class="select-box">
          <div class="radio">
            <input type="radio" name="radio" id="select1" checked />
            <input type="radio" name="radio" id="select2" />
            <input type="radio" name="radio" id="select3" />
            <input type="radio" name="radio" id="select4" />
            <input type="radio" name="radio" id="select5" />

            <div>
              <label for="select1">건강식품</label>
              <label for="select2">디지털</label>
              <label for="select3">팬시</label>
              <label for="select4">향수</label>
              <label for="select5">헤어케어</label>
            </div>
          </div>

          <div class="select1 itemBox">
            <div>
              <div class="img-box">
                <img
                  src="./선수제공파일/A-Module/images/건강식품/1.PNG"
                  alt="good-Food-Img1" />
              </div>

              <div class="text-content">
                <div>
                  <div class="bar"></div>
                  <div>
                    <p>상품명: 이뮨 멀티비타민&미네랄</p>
                    <p>
                      국내 판매 1위 멀티비타민 이뮨 14일분에 이중제형 + 남/녀
                      맞춤설계 포뮬러를 적용한 신제품
                    </p>
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
                  <p>결재혜택 GIFTS카드 추가 10% 할인</p>
                  <p>GiftsMall 포인트 최대 1% 적립</p>
                </div>
                <a href="#">More</a>
              </div>
            </div>

            <div>
              <div class="img-box">
                <img
                  src="./선수제공파일/A-Module/images/건강식품/2.PNG"
                  alt="good-Food-Img2" />
              </div>
              <div class="text-content">
                <div>
                  <div class="bar"></div>
                  <div>
                    <p>상품명 센트룸</p>
                    <p>
                      생기 넘치는 일상을 위한 센트룸 우먼 더블업. 비타민 B군
                      8종 함량 2배, 23가지 비타민과 미네랄, 한국인 여성 맞춤
                      영양 설계
                    </p>
                  </div>
                </div>
                <div>
                  <p class="fa">&#xf155; 가격 27,000</p>
                </div>
                <div>
                  <p>일반배송 2,500원 (20,000원 이상 무료배송)</p>
                  <p>결재혜택 GIFTS카드 추가 10% 할인</p>
                  <p>GiftsMall 포인트 최대 1% 적립</p>
                </div>
                <a href="#">More</a>
              </div>
            </div>

            <div>
              <div class="img-box">
                <img
                  src="./선수제공파일/A-Module/images/건강식품/3.PNG"
                  alt="good-Food-Img3" />
              </div>

              <div class="text-content">
                <div>
                  <div class="bar"></div>
                  <div>
                    <p>상품명 닥터브라이언</p>
                    <p>
                      달콤한 청포도맛 구미로 맛있게 비타민 C와 D를 충전하세요.
                      활기찬 하루와 튼튼한 뼈 건강을 맛있게 충전하는 부드러운
                      젤리 타입
                    </p>
                  </div>
                </div>
                <div>
                  <p class="fa">&#xf155; 가격 2,000</p>
                </div>
                <div>
                  <p>일반배송 2,500원 (20,000원 이상 무료배송)</p>
                  <p>결재혜택 GIFTS카드 추가 10% 할인</p>
                  <p>GiftsMall 포인트 최대 1% 적립</p>
                </div>
                <a href="#">More</a>
              </div>
            </div>
          </div>

          <div class="select2 itemBox">
            <div>
              <div class="img-box">
                <img
                  src="./선수제공파일/A-Module/images/디지털/1.PNG"
                  alt="digital-Img1" />
              </div>

              <div class="text-content">
                <div>
                  <div class="bar"></div>
                  <div>
                    <p>상품명 PANTONE PD충전 보조배터리</p>
                    <p>
                      230g의 가벼운 무게로 휴대성 극대화, 3way 빌트인 케이블
                      채용, 10,000mAh의 대용량 배터리팩 내장
                    </p>
                  </div>
                </div>
                <div>
                  <p class="fa">&#xf155; 가격 24,400</p>
                </div>
                <div>
                  <p>일반배송 2,500원 (20,000원 이상 무료배송)</p>
                  <p>결재혜택 GIFTS카드 추가 10% 할인</p>
                  <p>GiftsMall 포인트 최대 1% 적립</p>
                </div>
                <a href="#">More</a>
              </div>
            </div>

            <div>
              <div class="img-box">
                <img
                  src="./선수제공파일/A-Module/images/디지털/3.PNG"
                  alt="digital-Img2" />
              </div>
              <div class="text-content">
                <div>
                  <div class="bar"></div>
                  <div>
                    <p>상품명 독거미 F99 기계식 키보드</p>
                    <p>
                      최고의 퍼포먼스를 경험하게 해주는 키보드, 안정적인 무선
                      전송, 저소음 디자인, 일체형 실리콘 패드 디자인으로 소음
                      최소화, 프리미엄 PCB기판 채용으로 안정적이고 편안한
                      타건감 제공
                    </p>
                  </div>
                </div>
                <div>
                  <p class="fa">&#xf155; 가격 70,750</p>
                </div>
                <div>
                  <p>일반배송 2,500원 (20,000원 이상 무료배송)</p>
                  <p>결재혜택 GIFTS카드 추가 10% 할인</p>
                  <p>GiftsMall 포인트 최대 1% 적립</p>
                </div>
                <a href="#">More</a>
              </div>
            </div>

            <div>
              <div class="img-box">
                <img
                  src="./선수제공파일/A-Module/images/디지털/4.jpg"
                  alt="digital-Img3" />
              </div>

              <div class="text-content">
                <div>
                  <div class="bar"></div>
                  <div>
                    <p>상품명 파이널마우스 스타라이트12 페가수스 미디엄</p>
                    <p>
                      최첨단 펌웨어를 갖춘 업계 최고의 노르딕 RF 플랫폼 기반의
                      무선 기술 채용, 최대 20,000CPI 해상도를 갖춘 e스포츠
                      센서 채용
                    </p>
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
                  <p>결재혜택 GIFTS카드 추가 10% 할인</p>
                  <p>GiftsMall 포인트 최대 1% 적립</p>
                </div>
                <a href="#">More</a>
              </div>
            </div>
          </div>

          <div class="select3 itemBox">
            <div>
              <div class="img-box">
                <img
                  src="./선수제공파일/A-Module/images/팬시/2.PNG"
                  alt="fansy-Img1" />
              </div>

              <div class="text-content">
                <div>
                  <div class="bar"></div>
                  <div>
                    <p>상품명 14K 윙블링 원터치 링 귀걸이(주문제작)</p>
                    <p>
                      언제나 당신의 일상에 '편안한 멋' 평범한 순간마저 매력을
                      돋보이게 만들어 줄 14K Daily Collection. 본 상품은 주문
                      제작으로 배송은 약 7~10일 정도 소요됩니다(주말 및 공휴일
                      제외).
                    </p>
                  </div>
                </div>
                <div>
                  <p class="fa">&#xf155; 가격 250,000</p>
                </div>
                <div>
                  <p>일반배송 3,000원 (20,000원 이상 무료배송)</p>
                  <p>결재혜택 GIFTS카드 추가 10% 할인</p>
                  <p>GiftsMall 포인트 최대 1% 적립</p>
                </div>
                <a href="#">More</a>
              </div>
            </div>

            <div>
              <div class="img-box">
                <img
                  src="./선수제공파일/A-Module/images/팬시/3.PNG"
                  alt="fansy-Img2" />
              </div>
              <div class="text-content">
                <div>
                  <div class="bar"></div>
                  <div>
                    <p>상품명 14K 윙블링 메르시 목걸이(주문제작)</p>
                    <p>
                      언제나 변함없고 고급스러운 전체 14K 골드로 제작되어 소장
                      가치뿐만 아니라 우아한 아름다움을 선사합니다. 본 상품은
                      주문 제작으로 배송은 약 7~10일 정도 소요됩니다(주말 및
                      공휴일 제외).
                    </p>
                  </div>
                </div>
                <div>
                  <p class="fa">&#xf155; 가격 265,000</p>
                </div>
                <div>
                  <p>일반배송 3,000원 (20,000원 이상 무료배송)</p>
                  <p>결재혜택 GIFTS카드 추가 10% 할인</p>
                  <p>GiftsMall 포인트 최대 1% 적립</p>
                </div>
                <a href="#">More</a>
              </div>
            </div>

            <div>
              <div class="img-box">
                <img
                  src="./선수제공파일/A-Module/images/팬시/4.PNG"
                  alt="fansy-Img3" />
              </div>

              <div class="text-content">
                <div>
                  <div class="bar"></div>
                  <div>
                    <p>상품명 게이밍 이어폰 VJJB NI</p>
                    <p>
                      세계 1위 가성비 유선 이어폰. 듀얼 드라이버 기술로 완벽한
                      고품질 사운드와 교체가 가능한 분리형 커스텀 케이블
                    </p>
                  </div>
                </div>
                <div>
                  <p class="fa">
                    &#xf155; 가격
                    <span style="text-decoration: line-through">38,900</span>-&gt; 28,900
                  </p>
                </div>
                <div>
                  <p>일반배송 2,500원 (20,000원 이상 무료배송)</p>
                  <p>결재혜택 GIFTS카드 추가 10% 할인</p>
                  <p>GiftsMall 포인트 최대 1% 적립</p>
                </div>
                <a href="#">More</a>
              </div>
            </div>
          </div>

          <div class="select4 itemBox">
            <div>
              <div class="img-box">
                <img
                  src="./선수제공파일/A-Module/images/향수/2.PNG"
                  alt="fume-Img1" />
              </div>

              <div class="text-content">
                <div>
                  <div class="bar"></div>
                  <div>
                    <p>상품명 호텔도슨 향수 오드퍼퓸 75ml</p>
                    <p>
                      향긋하고 보드라운 마른 꽃과 나무 향 뒤로 낙엽이 타는
                      듯한 베티버 향이 퍼지는 스파이시 플로럴 향
                    </p>
                  </div>
                </div>
                <div>
                  <p class="fa">&#xf155; 가격 153,000</p>
                </div>
                <div>
                  <p>일반배송 2,500원 (20,000원 이상 무료배송)</p>
                  <p>결재혜택 GIFTS카드 추가 10% 할인</p>
                  <p>GiftsMall 포인트 최대 1% 적립</p>
                </div>
                <a href="#">More</a>
              </div>
            </div>

            <div>
              <div class="img-box">
                <img
                  src="./선수제공파일/A-Module/images/향수/3.PNG"
                  alt="fume-Img2" />
              </div>
              <div class="text-content">
                <div>
                  <div class="bar"></div>
                  <div>
                    <p>상품명 랑방 레 플레르 EDT 90ml상품명 센트룸</p>
                    <p>
                      에너지 넘치고 빛나는 머스키 프루티 플로럴 향으로
                      부드러움과 반짝임의 완벽한 균형이 매력입니다.
                    </p>
                  </div>
                </div>
                <div>
                  <p class="fa">&#xf155; 가격 64,500</p>
                </div>
                <div>
                  <p>일반배송 2,500원 (20,000원 이상 무료배송)</p>
                  <p>결재혜택 GIFTS카드 추가 10% 할인</p>
                  <p>GiftsMall 포인트 최대 1% 적립</p>
                </div>
                <a href="#">More</a>
              </div>
            </div>

            <div>
              <div class="img-box">
                <img
                  src="./선수제공파일/A-Module/images/향수/5.PNG"
                  alt="fume-Img3" />
              </div>

              <div class="text-content">
                <div>
                  <div class="bar"></div>
                  <div>
                    <p>상품명 캘빈클라인 One EDT 50ml</p>
                    <p>
                      남녀 모두에게 어울리는 현대적이며, 라이트한 향의
                      캘빈클라인 CK one 오 드 뚜왈렛. 상쾌하고 신선한 시트러스
                      계열의 향으로 편안하고 캐주얼한 향수
                    </p>
                  </div>
                </div>
                <div>
                  <p class="fa">&#xf155; 가격 58,900</p>
                </div>
                <div>
                  <p>일반배송 2,500원 (20,000원 이상 무료배송)</p>
                  <p>결재혜택 GIFTS카드 추가 10% 할인</p>
                  <p>GiftsMall 포인트 최대 1% 적립</p>
                </div>
                <a href="#">More</a>
              </div>
            </div>
          </div>

          <div class="select5 itemBox">
            <div>
              <div class="img-box">
                <img
                  src="./선수제공파일/A-Module/images/헤어케어/2.PNG"
                  alt="hair-Img1" />
              </div>

              <div class="text-content">
                <div>
                  <div class="bar"></div>
                  <div>
                    <p>
                      상품명 려 루트젠 여성맞춤 볼륨 탈모증상케어 샴퓨 353ml
                    </p>
                    <p>
                      근거있는 여성탈모 전문가 려 루트젠이 만든 촘촘탄탄
                      밀도탄력을 채우는 3D볼륨 탈모 샴푸. 부드럽고 향 좋은
                      약산성 비건 샴푸
                    </p>
                  </div>
                </div>
                <div>
                  <p class="fa">&#xf155; 가격 21,900</p>
                </div>
                <div>
                  <p>일반배송 2,500원 (20,000원 이상 무료배송)</p>
                  <p>결재혜택 GIFTS카드 추가 10% 할인</p>
                  <p>GiftsMall 포인트 최대 1% 적립</p>
                </div>
                <a href="#">More</a>
              </div>
            </div>

            <div>
              <div class="img-box">
                <img
                  src="./선수제공파일/A-Module/images/헤어케어/3.PNG"
                  alt="hair-Img2" />
              </div>
              <div class="text-content">
                <div>
                  <div class="bar"></div>
                  <div>
                    <p>상품명 라보에이치 두피쿨링&노세범 샴푸 333ml</p>
                    <p>
                      청량하게 리프레쉬-쿨링샴푸, 오래도록
                      뽀송뽀송-노세범샴푸, 두피장벽강화 특허기술-탈모증상 완화
                      기능성 샴푸
                    </p>
                  </div>
                </div>
                <div>
                  <p class="fa">&#xf155; 가격 19,800</p>
                </div>
                <div>
                  <p>일반배송 2,500원 (20,000원 이상 무료배송)</p>
                  <p>결재혜택 GIFTS카드 추가 10% 할인</p>
                  <p>GiftsMall 포인트 최대 1% 적립</p>
                </div>
                <a href="#">More</a>
              </div>
            </div>

            <div>
              <div class="img-box">
                <img
                  src="./선수제공파일/A-Module/images/헤어케어/4.PNG"
                  alt="hair-Img3" />
              </div>

              <div class="text-content">
                <div>
                  <div class="bar"></div>
                  <div>
                    <p>상품명 모로칸오일 헤어트리트먼트 100ml</p>
                    <p>
                      헤어케어, 컨디셔닝, 스타일링, 피니시까지 모두 가능한 단
                      하나의 헤어 오일 트리트먼트
                    </p>
                  </div>
                </div>
                <div>
                  <p class="fa">&#xf155; 가격 52,200</p>
                </div>
                <div>
                  <p>일반배송 2,500원 (20,000원 이상 무료배송)</p>
                  <p>결재혜택 GIFTS카드 추가 10% 할인</p>
                  <p>GiftsMall 포인트 최대 1% 적립</p>
                </div>
                <a href="#">More</a>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="notice">
        <div class="title">
          <div class="bar"></div>
          <div>
            <div class="title-eng">NOTICE</div>
            <div class="title-sub">공지사항</div>
          </div>
        </div>

        <div class="notice-content">
          <div class="notice-info">
            <div class="lf fa">&#xf060;</div>
            <div class="notice-page">
              <p class="page">1페이지</p>
            </div>
            <div class="rt fa">&#xf061;</div>
          </div>

          <div class="filter">
            <div class="DESC">DESC</div>
            <div class="ASC">ASC</div>
            <div class="nomral">일반</div>
            <div class="evnet">이벤트</div>
            <div class="Notice">공지사항</div>
          </div>

          <div>
            <div class="notice-header">
              <div>
                <p>유형</p>
                <p>제목</p>
                <p>날짜</p>
              </div>
            </div>
            <div class="notiec-main">
              <a href="#">
                <p>일반</p>
                <p>파주가람점 리뉴얼로 인한 영업 중단 안내</p>
                <p>2024.07.22</p>
              </a>
              <a href="#">
                <p>이벤트</p>
                <p>&lt;사적인TMI &gt; EP.50 아비브 이벤트 당첨자 발표</p>
                <p>2024.07.16</p>
              </a>

              <a href="#">
                <p>일반</p>
                <p>하월곡점 폐점으로 인한 영업종료 안내</p>
                <p>2024.07.31</p>
              </a>
              <a href="#">
                <p>일반</p>
                <p>[공지] 개인정보 처리방침 개정 안내 (v11.7)</p>
                <p>2024.06.27</p>
              </a>
              <a href="#">
                <p>이벤트</p>
                <p>셔터브리티 3기 대상자 발표</p>
                <p>2024.06.18</p>
              </a>
              <a href="#">
                <p>이벤트</p>
                <p>
                  [기프트몰라이브 - 기프트몰마켓 : 닥터지]이벤트 당첨자 발표
                </p>
                <p>2024.07.16</p>
              </a>
            </div>
          </div>
        </div>
      </div>

      <div class="enter">
        <div class="title">
          <div class="bar"></div>
          <div>
            <div class="title-eng">ENTER / SUPPROT</div>
            <div class="title-sub">상품입점/제휴문의</div>
          </div>
        </div>

        <div class="enter-about">
          <p>대한민국 No.1</p>
          <p>GIFTS:Mall과 함께 할 WIN-WIN 파트너를 찾습니다.</p>
          <p>제휴사의 많은 지원을 기다립니다.</p>
        </div>

        <div class="support-container">
          <div>
            <div class="support">
              <p>상품입점/제휴문의</p>
              <a href="#">SEE MORE</a>
            </div>
            <div class="support">
              <p>문의결과조회</p>
              <a href="#">SEE MORE</a>
            </div>
          </div>

          <div>
            <div class="support">
              <p>전자계약시스템</p>
              <a href="#">SEE MORE</a>
            </div>
            <div class="support">
              <p>파트너시스템</p>
              <a href="#">SEE MORE</a>
            </div>
          </div>
        </div>

        <div class="contect">
          <div>
            <div class="support-item">
              <div class="fa">&#xf007;</div>
              <p>
                미거래 업체는 임시회원 가입/로그인 후 상담신청을 하실 수
                있습니다.
              </p>
              <p>임시회원가입</p>
            </div>

            <div class="fa">
              <p>1 단계</p>
              <div>&#xf0da;</div>
            </div>
          </div>

          <div>
            <div class="support-item">
              <div class="fa">&#xf108;</div>
              <p>
                GIFTS:Mall 입점/제휴를 위해서는 온라인 상담이 선행되어야
                합니다. 상담 문의 후 사이트를 통해 결과를 안내해 드립니다.
              </p>
              <p>온라인상담</p>
            </div>
            <div class="fa">
              <p>2 단계</p>
              <div>&#xf0da;</div>
            </div>
          </div>

          <div>
            <div class="support-item">
              <div class="fa">&#xf1ae;</div>
              <p>
                온라인 상담이 긍정적일 경우, 담당MD/제휴담당자와 구체적인
                상담을 진행하게 됩니다.
              </p>
              <p>방문상담</p>
            </div>
            <div class="fa">
              <p>3 단계</p>
              <div>&#xf0da;</div>
            </div>
          </div>

          <div>
            <div class="support-item">
              <div class="fa">&#xf0ea;</div>
              <p>
                공정한 평가를 위해 상품력, 기획력, 영업력, 판촉력 등의 항목을
                기준으로 내부 품평회를 진행합니다.
              </p>
              <p>품평회</p>
            </div>
            <div class="fa">
              <p>4 단계</p>
              <div>&#xf0da;</div>
            </div>
          </div>

          <div>
            <div class="support-item">
              <div class="fa">&#xf058;</div>
              <p>
                입점확정 협력사의 경우 신뢰있는 거래를 위해 신용평가를 받고
                있습니다.
              </p>
              <p>신용평가</p>
            </div>
            <div class="fa">
              <p>5 단계</p>
              <div>&#xf0da;</div>
            </div>
          </div>

          <div>
            <div class="support-item">
              <div class="fa">&#xf044;</div>
              <p>
                전자계약서(또는 수기계약서)를 통해 거래계약서와 관련서류를
                작성하시면 입점절차가 완료됩니다.
              </p>
              <p>계약체결</p>
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
  <script src="../script/jquery-3.4.1.min.js"></script>
  <script src="../script/index.js?=v<?php time() ?>"></script>

</body>

</html>