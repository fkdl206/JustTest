<?php session_start(); ?>
<!DOCTYPE html>
<html>
<title>Daehan_design</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="./w3s.css" />
<body>

<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar w3-white w3-wide w3-padding w3-card">
    <!-- class="w3-bar-item w3-button"><b>Daehan</b> Design</a-->
    <a href="./index.php"><img src="./img/logo.png" alt="로고" height="50px"></a>
    <!-- Float links to the right. Hide them on small screens -->
    <div class="w3-right w3-hide-small">
      <a href="#projects" class="w3-bar-item w3-button">Projects</a>
      <a href="#about" class="w3-bar-item w3-button">About</a>
      <a href="./board/index.php" class="w3-bar-item w3-button">Q&A</a>
      <?php if(isset($_SESSION['id'])){?>
        <a href="./member/logout.php" class="w3-bar-item w3-button" >Logout</a>
    <?php }else{?>
            <a href="#" class="w3-bar-item w3-button" onClick="window.open('./member/login1.php','hello', 'width=400, height=400')">Login</a>
    <?php }?>
    </div>
  </div>
</div>

<!-- Header -->
<header class="w3-display-container w3-content w3-wide" style="max-width:1500px;" id="home">
  <img class="w3-image" src="./img/cafe.jpg" alt="Architecture" width="1500" height="800">
  <div class="w3-display-middle w3-margin-top w3-center">
  </div>
</header>

<!-- Page content -->
<div class="w3-content w3-padding" style="max-width:1564px">

  <!-- Project Section -->
  <div class="w3-container w3-padding-32" id="projects">
    <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">Projects</h3>
  </div>

  <div class="w3-row-padding">
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
        <div class="w3-display-topleft w3-black w3-padding">House</div>
        <img src="./img/home1.jpg" alt="House" style="width:100%">
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
        <div class="w3-display-topleft w3-black w3-padding">Restaurant</div>
        <img src="./img/dining1.jpg" alt="dish" style="width:100%">
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
        <div class="w3-display-topleft w3-black w3-padding">Restaurant</div>
        <img src="/img/dining2.jpg" alt="cafe" style="width:100%">
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
        <div class="w3-display-topleft w3-black w3-padding">Cafe</div>
        <img src="/img/cafe2.jpg" alt="House" style="width:100%">
      </div>
    </div>
  </div>

  <div class="w3-row-padding">
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
        <div class="w3-display-topleft w3-black w3-padding">House</div>
        <img src="./img/home2.jpg" alt="House" style="width:99%">
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
        <div class="w3-display-topleft w3-black w3-padding">Restaurant</div>
        <img src="/img/food1.jpg" alt="House" style="width:99%">
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
        <div class="w3-display-topleft w3-black w3-padding">Cafe</div>
        <img src="/img/cafe1.jpg" alt="House" style="width:99%">
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
        <div class="w3-display-topleft w3-black w3-padding">Mall</div>
        <img src="/img/shopping.jpg" alt="House" style="width:99%">
      </div>
    </div>
  </div>

  <!-- About Section -->
  <div class="w3-container w3-padding-32" id="about">
    <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">About</h3>
    <img src='/img/ceo.jpg' height="500px" border=1 align=left>
    <p><font size="3">1998년 창립 이후 디자인과 기술력 뿐 아니라 사용자 편의성(User Interface), 촉감 등 감성 파&ns워를 결합시켜 디자인이 경쟁력인 21세기를 힘있게 이끌어갈 인테리어 분야의 선두 기업으로 주목받고 있습니다.
      기업 또는 개인의 이미지를 창조한다는 사명감과 공간을 만들어 냄으로써 디자인이 강한 회사로 확고한 위치를 차지할 수 있었습니다.
      <br><br>공간에 대한 체계적인 조사와 연구를 통해 기업의 이익창출을 위한 정보를 구축하고,경험을 통해 축적한 데이터베이스를 활용함으로써 고객의 요구를 만족시키는 종합적인 디자인 마케팅이 있었기에 가능한 성공이였니다.대한 디자인은 창의성을 중요시하며 마케팅과 감성 서비스에 대한 체계적인 교육을 통해 새로운 디자인 시대를 열어갈 준비가 되어 있습니다.<br><br>
      또한 디자인으로 승부하는 대한은 세계우수의 디자인 회사들과 교류를 통해 완성도 높은 디자인을 추구하며, 창의적인 인재양성을 통해 빠르게 변화하는 해외 인테리어 시장에서 경쟁력을 확보하고 있습니다.<br>
      대한은 이름보다 실적으로 인정받는 기업이며 곧 브랜드로써의 명성또한 알려질것이라고 자부하고 있습니다.허나 명성에 안주하지 않을것이며 고객 만족을 위해 창조적인 역할을 수행하는 기업, 고객에게 최상의 품질과 서비스를 제공하고 철저한 사후관리를 통해 최고를 고집하기 보다는 최선을 다하는 기업이 될 것을 약속드립니다.<br>
    </font></p>
  </div>

<!-- End page content -->
</div>


<!-- Footer -->
<footer class="w3-center w3-black w3-padding-16">
  <p>Powered by <a href="./index.php" title="Daehan" target="_blank" class="w3-hover-text-green">Daehan</a></p>
</footer>

</body>
</html>
