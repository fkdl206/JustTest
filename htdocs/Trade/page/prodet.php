<?php include "../db.php"; ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>쇼핑몰 장바구니</title>
<link rel="stylesheet" type="text/css" href="/css/common.css" />
</head>
<body>
	<?php
		$bno = $_GET['idx']; /* bno함수에 idx값을 받아와 넣음*/
		$sql = mq("select * from slist where idx='".$bno."'"); /* 받아온 idx값을 선택 */
		$shopinfo = $sql->fetch_array();
	?>
	<div id="bg1"></div>
	<div id="main_in">
		<div id="menu">
			<div id="logo"><a href="/"><img src="./shop.png" alt="shop_icon" title="shop_icon"/></a></div>
				<form action="/shop/search.php" method="post">
					<div id="search_ser">
						<ul>
							<li><input type="text" placeholder="상품검색" size="50" id="ser" /></li>
							<li><button id="se_br"><img src="/search.png"></button></li>
						</ul>
					</div>
				</form>
			</div>
				<div id="content">
					<div id="shopname">
						<div id="shop_nt">
							SWR쇼핑
						</div>
					</div>
					<div id="shop_p_img">
						<img src="/shop/info/<?php echo $shopinfo['pro_pic'];?>pro.jpg" alt="propic" title="propic" />
					</div>
					<div id="shop_p_info">
						<ul>
							<li>상품제목 : <?php echo $shopinfo['pro_name']; ?></li>
							<li>원산지 : <?php echo $shopinfo['fromcon']; ?></li>
							<li>상품번호 : <?php echo $shopinfo['pro_num']; ?></li>
							<li>제조사 : <?php echo $shopinfo['pro_ma']; ?></li>
							<li>등록일자 : <?php echo $shopinfo['date']; ?></li>
						</ul>
						<div id="shop_icon">
							<ul>
								<li><a href="#"><img src="../shop/buy.png" alt="buy_icon" title="buy_icon" /></a></li>
								<li><a onclick href="basket_ok.php?idx=<?php $shopinfo['idx'];?>"><img src="../shop/basket.png" alt="" title="" /></a></li>
							</ul>
						</div>
					</div>
					<div id="shop_p_info2">
						<img src="./shop/info/<?php echo $shopinfo['pro_pic'];?>_info.jpg" alt="propic" title="propic" />
					</div>
				</div>
			</div>
		</div>
	<footer></footer>
</body>
</html>
