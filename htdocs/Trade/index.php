<?php include "db.php"; ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>쇼핑몰 장바구니</title>
<link rel="stylesheet" type="text/css" href="/css/common.css" />
</head>
<body>
	<div id="bg1"></div>
		<div id="main_in">
			<div id="menu">
				<div id="logo"><a href="/"><img src="/shop.png" alt="shop_icon" title="shop_icon"/></a></div>
					<form>
						<div id="search_ser">
							<ul>
								<li><input type="text" placeholder="상품검색" size="50" id="ser" /></li>
								<li><button id="se_br"><img src="/search.png"></button></li>
							</ul>
						</div>
					</form>
				</div>
				<h3 id="tit1">제품리스트</h3>
					<div id="shop_list">
						<?php
							$sql = mq("select * from slist order by idx desc");
							while($shoplist = $sql->fetch_array()){
						?>
						<div class="item">
							<div class="pro_img"><a href="./page/prodet.php?idx=<?php echo $shoplist['idx'];?>"><img src="/shop/<?php echo $shoplist['pro_pic'];?>.jpg" alt="propic" title="propic" /></a></div>
							<div class="pro_nt"><a href="./page/prodet.php?idx=<?php echo $shoplist['idx'];?>"><?php echo $shoplist['pro_name'];?></a></div>
							<div class="pro_price"><?php echo $shoplist['price'];?></div>
						</div>
					<?php } ?>
				</div><!---shop_list end--->
			</div><!---main_in end--->
		<footer></footer>
</body>
</html>
